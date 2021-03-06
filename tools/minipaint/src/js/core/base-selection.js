/*
 * miniPaint - https://github.com/viliusle/miniPaint
 * author: Vilius L.
 */

import config from './../config.js';

var instance = null;
var settings_all = [];

const DRAG_TYPE_TOP = 1;
const DRAG_TYPE_BOTTOM = 2;
const DRAG_TYPE_LEFT = 4;
const DRAG_TYPE_RIGHT = 8;

/**
 * Selection class - draws rectangular selection on canvas, can be resized.
 */
class Base_selection_class {

	/**
	 * settings:
	 * - enable_background
	 * - enable_borders
	 * - enable_controls
	 * 
	 * @param {ctx} ctx
	 * @param {object} settings
	 * @param {string|null} key
	 */
	constructor(ctx, settings, key = null) {
		if (key != null) {
			settings_all[key] = settings;
		}

		//singleton
		if (instance) {
			return instance;
		}
		instance = this;

		this.ctx = ctx;
		this.mouse_lock = null;
		this.selected_obj_positions = {};
		this.selected_object_drag_type = null;
		this.click_details = {};
		this.is_touch = false;

		this.events();
	}

	events() {
		var _this = this;

		document.addEventListener('mousedown', function (e) {
			if(_this.is_touch == true)
				return;
			_this.selected_object_actions(e);
		});
		document.addEventListener('mousemove', function (e) {
			if(_this.is_touch == true)
				return;
			_this.selected_object_actions(e);
		});
		document.addEventListener('mouseup', function (e) {
			if(_this.is_touch == true)
				return;
			_this.selected_object_actions(e);
		});

		// touch
		document.addEventListener('touchstart', function (event) {
			_this.is_touch = true;
			_this.selected_object_actions(event);
		});
		document.addEventListener('touchmove', function (event) {
			_this.selected_object_actions(event);
		}, {passive: false});
		document.addEventListener('touchend', function (event) {
			_this.selected_object_actions(event);
		});
	}

	set_selection(x, y, width, height) {
		var settings = this.find_settings();

		if (x != null)
			settings.data.x = x;
		if (y != null)
			settings.data.y = y;
		if (width != null)
			settings.data.width = width;
		if (height != null)
			settings.data.height = height;
		config.need_render = true;
	}

	reset_selection() {
		var settings = this.find_settings();

		settings.data = {
			x: null,
			y: null,
			width: null,
			height: null,
		};
		config.need_render = true;
	}

	get_selection() {
		var settings = this.find_settings();

		return settings.data;
	}

	find_settings() {
		var current_key = config.TOOL.name;
		var settings = null;

		for (var i in settings_all) {
			if (i == current_key)
				settings = settings_all[i];
		}

		//default
		if (settings === null) {
			settings = settings_all['main'];
		}

		//find data
		settings.data = (settings.data_function).call();

		return settings;
	}

	/**
	 * marks object as selected, and draws corners
	 */
	draw_selection() {
		var _this = this;
		var settings = this.find_settings();
		var data = settings.data;

		if (settings.data === null || settings.data.status == 'draft'
			|| (settings.data.hide_selection_if_active === true && settings.data.type == config.TOOL.name)) {
			return;
		}

		var x = settings.data.x;
		var y = settings.data.y;
		var w = settings.data.width;
		var h = settings.data.height;

		if (x == null || y == null || w == null || h == null) {
			//not supported 
			return;
		}

		var block_size_default = 14;
		block_size_default = Math.ceil(block_size_default / config.ZOOM);

		if (config.ZOOM != 1) {
			x = Math.round(x);
			y = Math.round(y);
			w = Math.round(w);
			h = Math.round(h);
		}
		var block_size = block_size_default;
		var half_size = Math.ceil(block_size / 2);

		this.ctx.save();
		this.ctx.globalAlpha = 1;
		if (data.rotate != null && data.rotate != 0) {
			//rotate
			this.ctx.translate(data.x + data.width / 2, data.y + data.height / 2);
			this.ctx.rotate(data.rotate * Math.PI / 180);
			x = Math.round(-data.width / 2);
			y = Math.round(-data.height / 2);
		}
		
		var half_fix = 0.5;

		//fill
		if (settings.enable_background == true) {
			this.ctx.fillStyle = "rgba(0, 255, 0, 0.3)";
			this.ctx.fillRect(x, y, w, h);
		}

		//borders
		if (settings.enable_borders == true && (x != 0 || y != 0 || w != config.WIDTH || h != config.HEIGHT)) {
			this.ctx.lineWidth = 1;
			this.ctx.strokeStyle = "rgba(0, 128, 0, 0.5)";
			this.ctx.strokeRect(x + half_fix, y + half_fix, w, h);
		}

		//draw corners
		if (settings.enable_controls == true && Math.abs(w) > block_size * 2 && Math.abs(h) > block_size * 2) {
			corner(x - half_size, y - half_size, 0, 0, DRAG_TYPE_LEFT | DRAG_TYPE_TOP);
			corner(x + w + half_size, y - half_size, -1, 0, DRAG_TYPE_RIGHT | DRAG_TYPE_TOP);
			corner(x - half_size, y + h + half_size, 0, -1, DRAG_TYPE_LEFT | DRAG_TYPE_BOTTOM);
			corner(x + w + half_size, y + h + half_size, -1, -1, DRAG_TYPE_RIGHT | DRAG_TYPE_BOTTOM);
		}

		if (settings.enable_controls == true) {
			//draw centers
			if (Math.abs(w) > block_size * 5) {
				corner(x + w / 2 - block_size / 2, y - half_size, 0, 0, DRAG_TYPE_TOP);
				corner(x + w / 2 - block_size / 2, y + h + half_size, 0, -1, DRAG_TYPE_BOTTOM);
			}
			if (Math.abs(h) > block_size * 5) {
				corner(x - half_size, y + h / 2 - block_size / 2, 0, 0, DRAG_TYPE_LEFT);
				corner(x + w + half_size, y + h / 2 - block_size / 2, -1, 0, DRAG_TYPE_RIGHT);
			}
		}

		function corner(x, y, dx, dy, drag_type) {
			var block_size = Math.round(block_size_default / 2) * 2;
			x = Math.round(x);
			y = Math.round(y);
			var angle = 0;
			if (settings.data.rotate != null && settings.data.rotate > 0) {
				angle = settings.data.rotate;
			}

			//register position
			_this.selected_obj_positions[drag_type] = {
				x: x + dx * block_size,
				y: y + dy * block_size,
				size: block_size,
			};

			if (settings.enable_controls == false || angle > 0) {
				_this.ctx.strokeStyle = "rgba(0, 128, 0, 0.4)";
				_this.ctx.fillStyle = "rgba(255, 255, 255, 0.8)";
			}
			else {
				_this.ctx.strokeStyle = "#008000";
				_this.ctx.fillStyle = "#ffffff";
			}

			//borders
			_this.ctx.lineWidth = 1;
			if (config.ZOOM < 1)
				_this.ctx.lineWidth = 2;
			_this.ctx.beginPath();
			_this.ctx.arc(
				x + dx * block_size + half_size,
				y + dy * block_size + half_size,
				half_size, 0, 2 * Math.PI);
			_this.ctx.fill();
			_this.ctx.stroke();
		}

		//restore
		this.ctx.restore();
	}

	selected_object_actions(e) {
		var settings = this.find_settings();

		//simplify checks
		var event_type = e.type;
		if(event_type == 'touchstart') event_type = 'mousedown';
		if(event_type == 'touchmove') event_type = 'mousemove';
		if(event_type == 'touchend') event_type = 'mouseup';

		const mainWrapper = document.getElementById('main_wrapper');
		const defaultCursor = config.TOOL && config.TOOL.name === 'text' ? 'text' : 'default';
		if (mainWrapper.style.cursor != defaultCursor) {
			mainWrapper.style.cursor = defaultCursor;
		}
		if (event_type == 'mousedown' && config.mouse.valid == false || settings.enable_controls == false) {
			return;
		}
		if (settings.data != null && settings.data.rotate != null && settings.data.rotate > 0) {
			//controls on rotated object disabled
			return;
		}

		var mouse = config.mouse;
		const drag_type = this.selected_object_drag_type;

		if(event_type == 'mousedown' && settings.data !== null){
			this.click_details = {
				x: settings.data.x,
				y: settings.data.y,
				width: settings.data.width,
				height: settings.data.height,
			};
		}
		if (event_type == 'mousemove' && this.mouse_lock == 'selected_object_actions') {

			const allowNegativeDimensions = settings.data.render_function
				&& ['line', 'gradient'].includes(settings.data.render_function[0]);

			mainWrapper.style.cursor = "pointer";
			
			var is_ctrl = false;
			if (e.ctrlKey == true || e.metaKey) {
				is_ctrl = true;
			}

			const is_drag_type_left = Math.floor(drag_type / DRAG_TYPE_LEFT) % 2 === 1;
			const is_drag_type_right = Math.floor(drag_type / DRAG_TYPE_RIGHT) % 2 === 1;
			const is_drag_type_top = Math.floor(drag_type / DRAG_TYPE_TOP) % 2 === 1;
			const is_drag_type_bottom = Math.floor(drag_type / DRAG_TYPE_BOTTOM) % 2 === 1;
			
			if (e.buttons == 1 || typeof e.buttons == "undefined") {
				// Do transformations				
				var dx = Math.round(mouse.x - mouse.click_x);
				var dy = Math.round(mouse.y - mouse.click_y);
				var width = this.click_details.width + dx;
				var height = this.click_details.height + dy;
				if (is_drag_type_top)
					height = this.click_details.height - dy;
				if (is_drag_type_left)
					width = this.click_details.width - dx;

				// Keep ratio - (if drag_type power of 2, only dragging on single axis)
				if (drag_type && (drag_type & (drag_type - 1)) !== 0 && (settings.keep_ratio == true && is_ctrl == false) 
					|| (settings.keep_ratio !== true && is_ctrl == true)){
					var ratio = this.click_details.width / this.click_details.height;
					var width_new = Math.round(height * ratio);
					var height_new = Math.round(width / ratio);

					if (Math.abs(width * 100 / width_new) > Math.abs(height * 100 / height_new)) {
						height = height_new;
					}
					else {
						width = width_new;
					}
				}

				// Set values
				settings.data.x = this.click_details.x;
				settings.data.y = this.click_details.y;
				if (is_drag_type_top)
					settings.data.y = this.click_details.y - (height - this.click_details.height);
				if (is_drag_type_left)
					settings.data.x = this.click_details.x - (width - this.click_details.width);
				if (is_drag_type_left || is_drag_type_right)
					settings.data.width = width;
				if (is_drag_type_top || is_drag_type_bottom)
					settings.data.height = height;
				
				// Don't allow negative width/height on most layers
				if (!allowNegativeDimensions) {
					if (settings.data.width <= 0) {
						settings.data.width = Math.abs(settings.data.width);
						if (is_drag_type_left) {
							settings.data.x -= settings.data.width;
						} else {
							settings.data.x = this.click_details.x - settings.data.width;
						}
					}
					if (settings.data.height <= 0) {
						settings.data.height = Math.abs(settings.data.height);
						if (is_drag_type_top) {
							settings.data.y -= settings.data.height;
						} else {
							settings.data.y = this.click_details.y - settings.data.height;
						}
					}
				}
				config.need_render = true;
			}
			return;
		}
		if (event_type == 'mouseup' && this.mouse_lock == 'selected_object_actions') {
			//reset
			this.mouse_lock = null;
		}

		if (!this.mouse_lock) {
			for (let current_drag_type in this.selected_obj_positions) {
				const position = this.selected_obj_positions[current_drag_type];

				if (mouse.x >= position.x && mouse.x <= position.x + position.size
					&& mouse.y >= position.y && mouse.y <= position.y + position.size
					) {
					//match
					if (event_type == 'mousedown') {
						if (e.buttons == 1 || typeof e.buttons == "undefined") {
							this.mouse_lock = 'selected_object_actions';
							this.selected_object_drag_type = current_drag_type;
						}
					}
					if (event_type == 'mousemove') {
						mainWrapper.style.cursor = "pointer";
					}
				}
			}
		}
	}

}

export default Base_selection_class;
