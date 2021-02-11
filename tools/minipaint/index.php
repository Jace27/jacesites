<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
	<title>miniPaint - image editor</title>
	<script src="dist/bundle.js"></script>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
	<div class="wrapper" style="margin-top: 30px;">

		<nav aria-label="Main Menu" class="main_menu" id="main_menu"></nav>
		
		<div class="submenu">
			<a class="logo" href="#">miniPaint</a>
			<div class="block attributes" id="action_attributes"></div>
		</div>
		
		<div class="sidebar_left" id="tools_container"></div>
		
		<div class="main_wrapper" id="main_wrapper">
			<div class="canvas_wrapper" id="canvas_wrapper">
				<div id="mouse"></div>
				<div class="transparent-grid" id="canvas_minipaint_background"></div>
				<canvas id="canvas_minipaint">
					<div class="trn error">
						Ваш браузер не поддерживает canvas (html5) или javascript отключен.
					</div>
				</canvas>
			</div>
		</div>

		<div class="sidebar_right">
			<div class="preview block">
				<h2 class="trn toggle" data-target="toggle_preview">Превью</h2>
				<div id="toggle_preview"></div>
			</div>
			
			<div class="colors block">
				<h2 class="trn toggle" data-target="toggle_colors">Цвета</h2>
				<div class="content" id="toggle_colors"></div>
			</div>
			
			<div class="block" id="info_base">
				<h2 class="trn toggle toggle-full" data-target="toggle_info">Информация</h2>
				<div class="content" id="toggle_info"></div>
			</div>
			
			<div class="details block" id="details_base">
				<h2 class="trn toggle toggle-full" data-target="toggle_details">Слой</h2>
				<div class="content" id="toggle_details"></div>
			</div>
			
			<div class="layers block">
				<h2 class="trn">Слои</h2>
				<div class="content" id="layers_base"></div>
			</div>
		</div>
	</div>
	<div class="mobile_menu">
		<button class="right_mobile_menu" id="mobile_menu_button" type="button">
			<span class="sr_only">Переключить меню</span>
		</button>
	</div>
	<div class="hidden" id="tmp"></div>
	<div id="popup"></div>
</body>
</html>
