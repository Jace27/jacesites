<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<!DOCTYPE html>
<!-- saved from url=(0087)#9exp -->
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
		<link rel="shortcut icon" href="http://vk.com/images/fav_chat.ico">
		<!--<link rel="stylesheet" type="text/css" href="http://vk.com/css/al/common.css" />-->
		<title>Сборка: эксперименты с воображаемыми пространствами. Акт 1</title>
		<style>
			.emoji,.emoji_css {width: 16px;height: 16px;border: none;vertical-align: -3px;margin: 0 1px;display: inline-block}
			.emoji_css {background: url(https://vk.com/images/im_emoji.png?9) no-repeat}
			@media (-webkit-min-device-pixel-ratio: 2), (-o-min-device-pixel-ratio: 2/1), (min-resolution: 192dpi) {
			   .emoji_css {background-image:url(https://vk.com/images/im_emoji_2x.png?9); background-size: 16px 544px}
			}
			h4{font-family: inherit;font-weight: 500;line-height: 1.1;color: inherit;margin-top: 10px;margin-bottom: 10px;font-size: 18px;}
			body{font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;font-size: 14px;line-height: 1.42857143;color: #333;background-color: #fff;margin:0;}
			hr{height: 0;margin-top: 20px;margin-bottom: 20px;border: 0;border-top: 1px solid #eee;}
			.messages{width: auto; margin: 0px 20px; text-align: left;}
			.msg_item {overflow:hidden}

			.msg_item{margin-top:5px;}
			.upic{float:left}
			.upic img{vertical-align:top;padding:5px;width: 50px;height: 50px; border-radius: 50%;}
			a {color: #337ab7;text-decoration: none;}
			a:active, a:hover {outline: 0;}
			a:focus, a:hover {color: #23527c;text-decoration: underline;}
			.att_head{color:#777;}
			.att_ico{float:left;width:11px;height:11px;margin: 3px 3px 2px; background-image:url('http://vk.com/images/icons/mono_iconset.gif');}
			.att_photo{background-position: 0 -30px;}
			.att_audio{background-position: 0 -222px;}
			.att_video{background-position: 0 -75px;}
			.att_doc{background-position: 0 -280px;}
			.att_wall,.att_fwd{background-position: 0 -194px;}
			.att_gift{background-position: 0 -105px;}
			.att_sticker{background-position: 0 -362px; width: 12px; height: 12px;}
			.att_link{background-position: 0 -237px;}
			.attb_link a span{color:#777777 !important;}
			.att_geo{background-position: 0 -165px;}
			.fwd{border:2px solid #C3D1E0;border-width: 0 0 0 2px; }
			img[width=128] { width: 128px; }
			img.sticker1 { width: 128px; }
			@media (max-width: 799px){
				img.sticker1 { width: 128px; }
				img[width=128] { width: 128px; }
				img { width: 100% }
				img[width=128] { width: 128px; }
				img.sticker1 { width: 128px; }
				.messages { margin: 0px 20px; }
				.from { padding-left: 3px; }
				.msg_body { margin-left: 60px; padding-left: 3px; }
				.att_head { padding-left: 3px; }
				.fwd { padding-left: 3px; margin-left: 50px; }
				a[target=_blank] { display: none; }
			}
			@media (min-width: 800px){
				img.sticker1 { width: 128px; }
				img[width=128] { width: 128px; }
				img { max-width: 800px; }
				img[width=128] { width: 128px; }
				img.sticker1 { width: 128px; }
				.fwd { margin-left: 85px; }
				.from,.msg_body,.att_head,.attacments,.attacment,.fwd{margin-left:60px;min-height: 1px;padding-right: 15px;padding-left: 15px;}
			}
			img[width=128] { width: 128px; }
			img.sticker1 { width: 128px; }
		</style>
	</head>
	<body link="#009" alink="#009" vlink="#009">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/back_button.php'); ?>
		<div class="container">
		<div class="messages round_upic"><h4> Даты сообщений: с 2017.11.13 19:34:45 по 2017.12.05 22:44:58 Время: Челябинск (+5:00 GMT)</h4><hr>
		<div style="border-style: solid; border-width: 0px 0px 0px 5px; border-color: #A3B1C0; margin-top: 20px; margin-left: 30px; padding-bottom: 10px; padding-left: 20px; padding-right: 10px; padding-top: 10px">
			<b>МЕТКИ:</b><br>
			<a href="#start">Начало исследований и первые опыты</a><br>
			<a href="#concrete">Конкретизированное описание</a><br>
			<a href="#1exp">1 эксперимент (удачный)</a><br>
			<a href="#2-3exp">2 эксперимент (неудачный) и инициация третьего</a><br>
			<a href="#3exp">3 эксперимент (удачный) - создание домика на дереве</a><br>
			<a href="#4exp">4 эксперимент (неизвестный) - попытка входа в совместное контролируемое сновидение</a><br>
			<a href="#outOfMind">Начало сумасшествия</a><br>
			<a href="#5exp">5 эксперимент (неудачный)</a><br>
			<a href="#6exp">6 эксперимент (неудачный) - эмоция в домике</a><br>
			<a href="#fall">Потеря связи с костром</a><br>
			<a href="#locInDream">Определение местоположения костра в сновиденном мире</a><br>
			<a href="#strange">Странное происшествие - кража светимости</a><br>
			<a href="#houseOnTree">Определение планировки домика на дереве</a><br>
			<a href="#7exp">7 эксперимент (наполовину удачный) - кикиморы и легионеры</a><br>
			<a href="#8exp">8 эксперимент (неудачный)</a><br>
			<a href="#dreams">Сны</a><br>
			<a href="#inHistory">След в магической истории</a><br>
			<a href="#inReal">Костер в реальности</a><br>
			<a href="#9exp">9 эксперимент (удачный) - порталы</a><br>
			<a href="#end">Послесловие</a><br>
		</div><hr><a name="start"></a><h2>Начало исследований и первые опыты</h2>
		<div id="msg100722" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100722">2017.11.13 19:34:45</a></div>
			<div class="msg_body">Ребят</div>
		</div>
		<div id="msg100723" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100723">2017.11.13 19:35:04</a></div>
			<div class="msg_body">Ну раз уж мы все снова в сборе</div>
		</div>
		<div id="msg100724" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100724">2017.11.13 19:35:21</a></div>
			<div class="msg_body">Может какой-нибудь практикум попробуем?</div>
		</div>
		<div id="msg100725" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100725">2017.11.13 19:35:42</a></div>
			<div class="msg_body">Илья и Влад практиковать не будут</div>
		</div>
		<div id="msg100726" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100726">2017.11.13 19:35:52</a></div>
			<div class="msg_body">Денис мб занят др вещами или не осилить практ</div>
		</div>
		<div id="msg100728" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100728">2017.11.13 19:36:08</a></div>
			<div class="msg_body">он же с нуля начал</div>
		</div>
		<div id="msg100729" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100729">2017.11.13 19:36:22</a></div>
			<div class="msg_body">Опять за других говоришь?</div>
		</div>
		<div id="msg100730" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100730">2017.11.13 19:36:33</a></div>
			<div class="msg_body">ну а что, я не прав что ли?</div>
		</div>
		<div id="msg100731" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100731">2017.11.13 19:36:39</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg100732" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100732">2017.11.13 19:36:55</a></div>
			<div class="msg_body">что да?</div>
		</div>
		<div id="msg100733" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100733">2017.11.13 19:37:07</a></div>
			<div class="msg_body">да, прав или да, неправ?</div>
		</div>
		<div id="msg100734" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100734">2017.11.13 19:37:40</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg100735" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100735">2017.11.13 19:37:48</a></div>
			<div class="msg_body">понятно</div>
		</div>
		<div id="msg100736" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100736">2017.11.13 19:37:52</a></div>
			<div class="msg_body">)</div>
		</div>
		<div id="msg100737" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100737">2017.11.13 19:38:33</a></div>
			<div class="msg_body">я бы начал с чего-нибудь простого... я уже знаю, с чего, но мне еще надо подумать</div>
		</div>
		<div id="msg100744" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100744">2017.11.13 19:51:24</a></div>
			<div class="msg_body">Валяй вопрос</div>
		</div>
		<div id="msg100745" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100745">2017.11.13 19:51:35</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
					<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.13 19:38:33</div>
					<div class="msg_body"> я бы начал с чего-нибудь простого... я уже знаю, с чего, но мне еще надо подумать</div>
				</div>
			</div>
		</div>
		<div id="msg100746" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100746">2017.11.13 19:52:38</a></div>
			<div class="msg_body">Я тоже об этом думала, но решила, что ты скажешь "зачем нам легкий практикум" или "практикум легким не бывает"</div>
		</div>
		<div id="msg100747" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100747">2017.11.13 19:52:47</a></div>
			<div class="msg_body">Ну или что-то в этом роде</div>
		</div>
		<div id="msg100748" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100748">2017.11.13 19:52:49</a></div>
			<div class="msg_body">я не про практ</div>
		</div>
		<div id="msg100750" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100750">2017.11.13 19:52:59</a></div>
			<div class="msg_body">хотя практическую пользу оно иметь будет</div>
		</div>
		<div id="msg100751" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100751">2017.11.13 19:53:07</a></div>
			<div class="msg_body">Окей</div>
		</div>
		<div id="msg100752" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100752">2017.11.13 19:53:42</a></div>
			<div class="msg_body">Что ты задумал?</div>
		</div>
		<div id="msg100755" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100755">2017.11.13 19:54:29</a></div>
			<div class="msg_body">этот прием я подсмотрел на настройке людей друг на друга во время похода в ДУ</div>
		</div>
		<div id="msg100756" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100756">2017.11.13 19:55:23</a></div>
			<div class="msg_body">наша беседа - особое пространство, которое условно можно назвать костром, стоянкой в лесу</div>
		</div>
		<div id="msg100757" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100757">2017.11.13 19:58:22</a></div>
			<div class="msg_body">во, класс</div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img src="./work with spaces/C2lXd8Kq9C0.jpg"><br>[photo256884832_456239474] (2560x1714)</div>
		</div>
		<div id="msg100758" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100758">2017.11.13 19:58:43</a></div>
			<div class="msg_body">original: <img src="./work with spaces/15061023772630.jpg"><br>http://u2ch.herokuapp.com/wr/src/555238/15061023772630.jpg</div>
		</div>
		<div id="msg100759" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100759">2017.11.13 19:59:19</a></div>
			<div class="msg_body">и мы типа тут все вместе, собираемся, и наслаждаемся жизнью</div>
		</div>
		<div id="msg100760" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100760">2017.11.13 20:01:08</a></div>
			<div class="msg_body">само существование беседы - настройка, но слабая. представление ее как костра - усиление настройки. намерение настройки - еще усиление. одновременное нахождение у костра (визуализация/медитация) - еще усиление</div>
		</div>
		<div id="msg100761" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100761">2017.11.13 20:01:31</a></div>
			<div class="msg_body">впоследствии это очень хорошее пространство для прямого и коллективного прямого входа в КС (КОС)</div>
		</div>
		<div id="msg100762" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100762">2017.11.13 20:01:48</a></div>
			<div class="msg_body">дважды прямого. прямого в квадрате</div>
		</div>
		<div id="msg100763" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100763">2017.11.13 20:02:41</a></div>
			<div class="msg_body">чет я стал часто повторяться</div>
		</div>
		<div id="msg100764" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100764">2017.11.13 20:07:26</a></div>
			<div class="msg_body">Есть немного</div>
		</div>
		<div id="msg100765" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100765">2017.11.13 20:08:18</a></div>
			<div class="msg_body">Денни, веришь нет, но я хотела предложить такую херню со свечкой, ты должен ее знать</div>
		</div>
		<div id="msg100766" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100766">2017.11.13 20:08:35</a></div>
			<div class="msg_body">типа всем вместе свечу созерцать?</div>
		</div>
		<div id="msg100767" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100767">2017.11.13 20:08:54</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg100768" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100768">2017.11.13 20:09:12</a></div>
			<div class="msg_body">Это у тебя в емириде было описанно</div>
		</div>
		<div id="msg100769" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100769">2017.11.13 20:09:22</a></div>
			<div class="msg_body">Мне понравилась та хрень</div>
		</div>
		<div id="msg100770" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100770">2017.11.13 20:10:45</a></div>
			<div class="msg_body">ну да, физ реальные действия должны быть эффективнее</div>
		</div>
		<div id="msg100771" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100771">2017.11.13 20:11:18</a></div>
			<div class="msg_body">общение тоже обязательный элемент</div>
		</div>
		<div id="msg100772" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100772">2017.11.13 20:11:31</a></div>
			<div class="msg_body">можно (но не нужно) еще подключить эмоциональную настройку</div>
		</div>
		<div id="msg100773" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100773">2017.11.13 20:12:18</a></div>
			<div class="msg_body">просто и сердито</div>
		</div>
		<div id="msg100774" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100774">2017.11.13 20:12:30</a></div>
			<div class="msg_body">а потом уже можно будет и что-нибудь серьезнее попробовать</div>
		</div>
		<div id="msg100775" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100775">2017.11.13 20:12:50</a></div>
			<div class="msg_body">к примеру, классно сочетается Полет Колибри и визуализация костра</div>
		</div>
		<div id="msg100776" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100776">2017.11.13 20:13:29</a></div>
			<div class="msg_body"><a href="https://emirida.eu/online-books/vachap/art-of-attention/index.html#11" target="_blank">https://emirida.eu/online-books/vachap/art-of-attention/index.html#11</a></div>
		</div>
		<div id="msg100777" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100777">2017.11.13 20:13:37</a></div>
			<div class="attacments"> <b>Материалы:</b> </div><div class="attacment attb_link"> <div class="att_ico att_link"></div> <a href="https://emirida.eu/online-books/vachap/art-of-attention/index.html#11" target="_blank"><span>Ссылка</span> Vachap's Workshop</a></div>
		</div>
		<div id="msg100778" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100778">2017.11.13 20:15:00</a></div>
			<div class="msg_body">осторожно! 7мб трафика и долгая загрузка страницы!</div>
		</div>
		<div id="msg100779" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100779">2017.11.13 20:43:19</a></div><div style="color:#888888;">обновил(а) фотографию беседы:</div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img src="./work with spaces/lhu5rts4zfU.jpg"><br>[photo256884832_456239476] (2560x1714)</div>
		</div>
		<div id="msg100780" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100780">2017.11.13 21:02:52</a></div>
			<div class="msg_body">Дори, мб начнем прям седня?</div>
		</div>
		<div id="msg100781" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100781">2017.11.13 21:07:04</a></div>
			<div class="msg_body">Почему бы и нет</div>
		</div>
		<div id="msg100782" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100782">2017.11.13 21:07:30</a></div>
			<div class="msg_body">визуализируем костер и друг друга?</div>
		</div>
		<div id="msg100783" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100783">2017.11.13 21:07:50</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg100784" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100784">2017.11.13 21:08:24</a></div>
			<div class="msg_body">Скинь фотку свою, пожалуйста (только обновленную), что бы мне было легче</div>
		</div>
		<div id="msg100787" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100787">2017.11.13 21:08:37</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"></div>
		</div>
		<div id="msg100791" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100791">2017.11.13 21:08:54</a></div>
			<div class="msg_body">где б себя сфоткать...</div>
		</div>
		<div id="msg100792" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100792">2017.11.13 21:09:01</a></div>
			<div class="msg_body">сие есть проблема</div>
		</div>
		<div id="msg100793" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100793">2017.11.13 21:09:12</a></div>
			<div class="msg_body">Да все там же<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg100794" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100794">2017.11.13 21:09:37</a></div>
			<div class="msg_body">не, там сейчас все заросло, плюс темно как у негра где</div>
		</div>
		<div id="msg100795" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100795">2017.11.13 21:10:03</a></div>
			<div class="msg_body">туда если только днем, только если с косой, только если с настроением убивать</div>
		</div>
		<div id="msg100796" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100796">2017.11.13 21:10:14</a></div>
			<div class="msg_body">иначе не пробиться</div>
		</div>
		<div id="msg100797" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100797">2017.11.13 21:13:48</a></div>
			<div class="msg_body">Чувак</div>
		</div>
		<div id="msg100798" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100798">2017.11.13 21:13:56</a></div>
			<div class="msg_body">У тебя дома стен нету?</div>
		</div>
		<div id="msg100799" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100799">2017.11.13 21:14:07</a></div>
			<div class="msg_body">все засрано</div>
		</div>
		<div id="msg100800" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100800">2017.11.13 21:14:09</a></div>
			<div class="msg_body">напрочь</div>
		</div>
		<div id="msg100801" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100801">2017.11.13 21:14:12</a></div>
			<div class="msg_body">ща</div>
		</div>
		<div id="msg100802" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100802">2017.11.13 21:14:15</a></div>
			<div class="msg_body">сообразим</div>
		</div>
		<div id="msg100803" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100803">2017.11.13 21:14:26</a></div>
			<div class="msg_body">Ты фото не на конкурс красоты фона отправлять будешь<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg100804" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100804">2017.11.13 21:15:11</a></div>
			<div class="msg_body">Так фона даже нет!</div>
		</div>
		<div id="msg100805" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100805">2017.11.13 21:16:46</a></div>
			<div class="msg_body">О</div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img src="./work with spaces/Frito2zPstw.jpg"><br>[photo256884832_456239477] (1215x2160)</div>
		</div>
		<div id="msg100806" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100806">2017.11.13 21:18:30</a></div>
			<div class="msg_body">Во, сойдет</div>
		</div>
		<div id="msg100807" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100807">2017.11.13 21:21:53</a></div>
			<div class="msg_body">я, говорят, на этого чувака похож</div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/xW9lEY3-gco.jpg">[photo256884832_456239478] (755x1024) </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/CkQ_LddAiKo.jpg">[photo256884832_456239479] (676x1108) </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/5aeKdWZRWTY.jpg">[photo256884832_456239480] (736x761) </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/fTpzcNo0ksY.jpg">[photo256884832_456239481] (593x1348) </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/GUUHvodOO30.jpg">[photo256884832_456239482] (806x992) </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/VObEUY1D_S0.jpg">[photo256884832_456239483] (433x713) </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/PmKuxrZsQDs.jpg">[photo256884832_456239484] (990x1026) </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/MK9oRgWta9U.jpg">[photo256884832_456239485] (1193x670) </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/zS60Z1-d8cE.jpg">[photo256884832_456239486] (716x1294) </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/99j7upkAvu0.jpg">[photo256884832_456239487] (900x665) </div>
		</div>
		<div id="msg100808" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100808">2017.11.13 21:23:30</a></div>
			<div class="msg_body">Да, есть немного</div>
		</div>
		<div id="msg100809" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100809">2017.11.13 21:26:43</a></div>
			<div class="msg_body">начнем одновременно или изменим сам ход течения времени?</div>
		</div>
		<div id="msg100810" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100810">2017.11.13 21:29:08</a></div>
			<div class="msg_body">Не, одновременно</div>
		</div>
		<div id="msg100811" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100811">2017.11.13 21:29:18</a></div>
			<div class="msg_body">когда?</div>
		</div>
		<div id="msg100812" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100812">2017.11.13 21:29:31</a></div>
			<div class="msg_body">Через минуту</div>
		</div>
		<div id="msg100813" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100813">2017.11.13 21:29:56</a></div>
			<div class="msg_body">я предполагал заснуть в таком состоянии</div>
		</div>
		<div id="msg100814" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100814">2017.11.13 21:30:05</a></div>
			<div class="msg_body">а через минуту я лечь спать не смогу</div>
		</div>
		<div id="msg100815" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100815">2017.11.13 21:30:40</a></div>
			<div class="msg_body">Значит будем менять ход течения времени</div>
		</div>
		<div id="msg100816" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100816">2017.11.13 21:30:47</a></div>
			<div class="msg_body">Ибо у меня 22:30</div>
		</div>
		<div id="msg100817" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100817">2017.11.13 21:31:00</a></div>
			<div class="msg_body">не, я могу лечь через 10 мин</div>
		</div>
		<div id="msg100818" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100818">2017.11.13 21:31:21</a></div>
			<div class="msg_body">у меня последнее дело осталось, кровать разобрать и все</div>
		</div>
		<div id="msg100819" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100819">2017.11.13 21:31:53</a></div>
			<div class="msg_body">Ок</div>
		</div>
		<div id="msg100820" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100820">2017.11.13 21:40:17</a></div>
			<div class="msg_body">я готов</div>
		</div>
		<div id="msg100821" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100821">2017.11.13 21:40:32</a></div>
			<div class="msg_body">го?</div>
		</div>
		<div id="msg100822" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100822">2017.11.13 21:43:12</a></div>
			<div class="msg_body">Го</div>
		</div>
		<div id="msg100823" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100823">2017.11.13 21:44:01</a></div>
			<div class="msg_body">Все, начинаем?</div>
		</div>
		<div id="msg100824" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg100824">2017.11.13 21:44:21</a></div>
			<div class="msg_body">А я не сплю</div>
		</div>
		<div id="msg100825" class="msg_item">
			<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> <a href="#msg100825">2017.11.13 22:04:45</a></div>
			<div class="msg_body">Эххх только я закончил со всем и решил поговорить, как вы сразу спать ушли</div>
		</div>
		<div id="msg100827" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100827">2017.11.13 22:05:26</a></div>
			<div class="msg_body">Дори вроде уже уснула, а я еще у костра</div>
		</div>
		<div id="msg100828" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100828">2017.11.13 22:06:13</a></div>
			<div class="msg_body">Качаю в него прогу и Силу</div>
		</div>
		<div id="msg100829" class="msg_item">
			<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> <a href="#msg100829">2017.11.13 22:06:15</a></div>
			<div class="msg_body">Так чего ж ты здесь забыл? Спи <img class="emoji" alt="??" src="./work with spaces/D83DDE02.png">  В этом же смысл? Одновременно заснуть?</div>
		</div>
		<div id="msg100830" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100830">2017.11.13 22:06:43</a></div>
			<div class="msg_body">Не, одновременно заснуть все равно бы не удалось</div>
		</div>
		<div id="msg100831" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100831">2017.11.13 22:06:47</a></div>
			<div class="msg_body">Во всяком случае, пока</div>
		</div>
		<div id="msg100832" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100832">2017.11.13 22:07:02</a></div>
			<div class="msg_body">А уснуть мне родаки не дают</div>
		</div>
		<div id="msg100833" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100833">2017.11.13 22:07:14</a></div>
			<div class="msg_body">*сокрушенно качаю головой*</div>
		</div>
		<div id="msg100834" class="msg_item">
			<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> <a href="#msg100834">2017.11.13 22:07:57</a></div>
			<div class="msg_body">Эх все обстоятельства против тебя</div>
		</div>
		<div id="msg100835" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100835">2017.11.13 22:08:18</a></div>
			<div class="msg_body">Ну попытаться же надо</div>
		</div>
		<div id="msg100836" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100836">2017.11.13 22:08:32</a></div>
			<div class="msg_body">Когда-нибудь бы получилось</div>
		</div>
		<div id="msg100837" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100837">2017.11.13 22:08:44</a></div>
			<div class="msg_body">Не так</div>
		</div>
		<div id="msg100839" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100839">2017.11.13 22:09:03</a></div>
			<div class="msg_body">Когда-нибудь получится</div>
		</div><hr>
		<div id="msg100909" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100909">2017.11.14 06:56:07</a></div>
			<div class="msg_body">Дори, ты с какой стороны костра была? Пыталась со мной разговаривать?</div>
		</div>
		<div id="msg100944" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100944">2017.11.14 08:31:37</a></div>
			<div class="msg_body">Я вообще ничего не помню, кроме того, что была у костра</div>
		</div>
		<div id="msg100945" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100945">2017.11.14 08:32:13</a></div>
			<div class="msg_body">А еще я где-то в 00:30 полу проснулась</div>
		</div>
		<div id="msg100946" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100946">2017.11.14 08:32:25</a></div>
			<div class="msg_body">И начала что-то судорожно печатать</div>
		</div>
		<div id="msg100947" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100947">2017.11.14 08:32:30</a></div>
			<div class="msg_body">Не помню что</div>
		</div>
		<div id="msg100948" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100948">2017.11.14 08:32:45</a></div>
			<div class="msg_body">Помню только то, что тело не слушалось</div>
		</div>
		<div id="msg100949" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100949">2017.11.14 08:32:50</a></div>
			<div class="msg_body">А ты уверена, что просыпалась?<img class="emoji" alt="??" src="./work with spaces/D83EDD23.png"></div>
		</div>
		<div id="msg100950" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100950">2017.11.14 08:33:15</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg100951" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100951">2017.11.14 08:33:24</a></div>
			<div class="msg_body">Мама домой тогда пришла</div>
		</div>
		<div id="msg100952" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100952">2017.11.14 08:35:53</a></div>
			<div class="msg_body">Я помню вот что:<br>Я пришел к костру, сел справа (по картинке), но почувствовал, что тут уже кто-то есть, и пересел на левую сторону. Дальше на чистых ощущениях я следил за тобой и время от времени посылал различные сигналы. Ты вроде как тоже что-то делала. Постепенно ты будто растворялась в воздухе, уходя глубже, в сон</div>
		</div>
		<div id="msg100953" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100953">2017.11.14 08:36:22</a></div>
			<div class="msg_body">Еще я очень хорошо выспалась</div>
		</div>
		<div id="msg100954" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100954">2017.11.14 08:36:23</a></div>
			<div class="msg_body">Прям отдохнула</div>
		</div>
		<div id="msg100955" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100955">2017.11.14 08:36:27</a></div>
			<div class="msg_body">Я сам тем временем настраивал атмосферу в пространстве и давал ему кое-какие указания</div>
		</div>
		<div id="msg100956" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100956">2017.11.14 08:36:38</a></div>
			<div class="msg_body">Оч абстрактные</div>
		</div>
		<div id="msg100959" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100959">2017.11.14 08:38:10</a></div>
			<div class="msg_body">Я была вродь посерединке</div>
		</div>
		<div id="msg100961" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg100961">2017.11.14 08:38:31</a></div>
			<div class="msg_body">Да, помню, ты чуть позже пересела ближе ко мне</div>
		</div>
		<div id="msg100967" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100967">2017.11.14 09:15:21</a></div>
			<div class="msg_body">Я, кстати, у костра где-то до часу ночи побыла</div>
		</div>
		<div id="msg100968" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg100968">2017.11.14 09:15:26</a></div>
			<div class="msg_body">Потом свалила</div>
		</div>
		<div id="msg101273" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg101273">2017.11.14 12:36:45</a></div>
			<div class="msg_body">Сегодня у костра будем собираться?</div>
		</div>
		<div id="msg101274" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101274">2017.11.14 12:36:55</a></div>
			<div class="msg_body">смотря кто</div>
		</div>
		<div id="msg101275" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101275">2017.11.14 12:36:58</a></div>
			<div class="msg_body">Илья?</div>
		</div>
		<div id="msg101276" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101276">2017.11.14 12:37:00</a></div>
			<div class="msg_body">Денис?</div>
		</div>
		<div id="msg101279" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101279">2017.11.14 12:37:25</a></div>
			<div class="msg_body">и, мне кажется, лучше пока повременить с одновременным заходом</div>
		</div>
		<div id="msg101280" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101280">2017.11.14 12:37:32</a></div>
			<div class="msg_body">кто как пойдет спать, так и заглянет на огонек</div>
		</div>
		<div id="msg101281" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg101281">2017.11.14 12:37:38</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_doc"></div> <audio controls=""><source type="audio/ogg" src="./work with spaces/0b9027d7d5.ogg"></audio></div>
		</div>
		<div id="msg101284" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101284">2017.11.14 12:38:08</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.14 12:37:32</div>
			<div class="msg_body"> кто как пойдет спать, так и заглянет на огонек</div>
				</div>
			</div>
		</div>
		<div id="msg101285" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg101285">2017.11.14 12:38:22</a></div>
			<div class="msg_body">Окей</div>
		</div>
		<div id="msg101287" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101287">2017.11.14 12:38:32</a></div>
			<div class="msg_body">можешь меня известить, я с тобой туда зайду</div>
		</div>
		<div id="msg101288" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg101288">2017.11.14 12:38:39</a></div>
			<div class="msg_body">Или меня</div>
		</div>
		<div id="msg101322" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg101322">2017.11.14 12:43:26</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.14 12:36:45</div>
			<div class="msg_body"> Сегодня у костра будем собираться?</div>
				</div>
			</div>
		</div>
		<div id="msg101324" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg101324">2017.11.14 12:43:35</a></div>
			<div class="msg_body">У нас время разное</div>
		</div>
		<div id="msg101327" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg101327">2017.11.14 12:43:54</a></div>
			<div class="msg_body">у меня оно есть</div>
		</div>
		<div id="msg101328" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg101328">2017.11.14 12:43:59</a></div>
			<div class="msg_body">но</div>
		</div>
		<div id="msg101329" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg101329">2017.11.14 12:44:04</a></div>
			<div class="msg_body">Денис, ты сейчас где?</div>
		</div>
		<div id="msg101330" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101330">2017.11.14 12:44:11</a></div>
			<div class="msg_body">в московском поясе</div>
		</div>
		<div id="msg101331" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101331">2017.11.14 12:44:15</a></div>
			<div class="msg_body">-3 к твоему</div>
		</div>
		<div id="msg101332" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg101332">2017.11.14 12:44:16</a></div>
			<div class="msg_body">да</div>
		</div>
		<div id="msg101333" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg101333">2017.11.14 12:44:33</a></div>
			<div class="msg_body">10:44?</div>
		</div>
		<div id="msg101335" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg101335">2017.11.14 12:44:41</a></div>
			<div class="msg_body">да</div>
		</div>
		<div id="msg101336" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101336">2017.11.14 12:44:41</a></div>
			<div class="msg_body">да</div>
		</div><hr>
		<div id="msg101624" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101624">2017.11.15 23:15:54</a></div>
			<div class="msg_body">Дори</div>
		</div>
		<div id="msg101625" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101625">2017.11.15 23:15:59</a></div>
			<div class="msg_body">Ты тут?</div>
		</div>
		<div id="msg101626" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg101626">2017.11.15 23:23:47</a></div>
			<div class="msg_body">Ок, пойду я тогда к костру</div>
		</div><hr>
		<div id="msg102361" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg102361">2017.11.20 23:01:27</a></div>
			<div class="msg_body">Я спать</div>
		</div>
		<div id="msg102362" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg102362">2017.11.20 23:01:32</a></div>
			<div class="msg_body">Спокойной</div>
		</div>
		<div id="msg102363" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg102363">2017.11.20 23:01:33</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(1).png">Стикер #52</div>
		</div>
		<div id="msg102364" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg102364">2017.11.20 23:01:45</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(2).png">Стикер #94</div>
		</div>
		<div id="msg102365" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg102365">2017.11.20 23:01:54</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b.png">Стикер #1909</div>
		</div>
		<div id="msg102366" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg102366">2017.11.20 23:02:12</a></div>
			<div class="msg_body">Я тоже к костру пойду</div>
		</div>
		<div id="msg102367" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg102367">2017.11.20 23:02:27</a></div>
			<div class="msg_body">Попробую повторить вчерашний рекорд</div>
		</div><hr>
		<a name="concrete"></a><h2>Конкретизированное описание</h2>
		<div id="msg103163" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103163">2017.11.23 13:18:43</a></div>
			<div class="msg_body">Лучше будет оставить это описание костра, которое я отправил Илье, тут</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 10:46:36</div>
			<div class="msg_body"> Костер - это искусственное подконтрольное нам пространство. Оно трехмерно по моей задумке, содержит костер, иногда бревна вокруг него, ограничено густыми зарослями деревьев, кустов и хвороста. У него маленькая поляна вокруг самого костра, а также всегда темная поляна рядом, откуда якобы произведена съемка костра на фотке. Дома буду, нарисую тебе конкретный план</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 10:53:24</div>
			<div class="msg_body"> Вход в данное пространство осуществляется с помощью воображения и полумедитативного состояния. Т.е. ты должен представить себя около костра, максимально четко представить все детали окружающего пространства (вплоть до веток, камешков, поленьев в костре). НЕ НУЖНО ПЫТАТЬСЯ УДЕРЖАТЬ СРАЗУ ВСЕ ДЕТАЛИ В ГОЛОВЕ! Оно, конечно, полезно, но пока что не нужно. Твоя задача - каждый раз, заходя на костер, исследовать его. Т.е. ты смотришь на огонь и не думаешь, как он будет выглядеть, а смотришь на него таким, каким он является. Дай волю воображению, фантазии, пусть оно само дорисуется. ДЕТАЛИ ДОЛЖНЫ ПРОРИСОВЫВАТЬСЯ САМИ! Смотришь на дерево - какое оно? Как растет, какой формы? Где и как у него расположены ветки? Не нужно задумываться, нужно дать волю подсознанию. Заняв его, ты сдвинешь свое восприятие в область этого пространства, начнешь закрепляться в нем, видеть и чувствовать его</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 10:54:38</div>
			<div class="msg_body"> Через некоторое время ты начнешь чувствовать движения воздуха у костра, холод тени и жар света; камни под попой, ветки, в которые упираются твои руки</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 10:56:08</div>
			<div class="msg_body"> Лучше будет, если ты с самого начала будешь представлять себя в своем теле, гуляющего вокруг костра и рассматривающего окружение. Никакого третьего лица! Только первое! Ты должен смотреть на мир своими же глазами</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 10:58:18</div>
			<div class="msg_body"> Еще позже ты почувствуешь, что мир деревьями и кустами не ограничен - что тебя тянет вовне, что где-то там, за лесом, есть дороги, тропинки, здания и живые существа. И вот когда ты начнешь исследовать пространство за границами костра, ты попадешь в сон. В этот момент у тебя будет шанс вынести свою осознанность в сон. У меня это почти получилось позапозавчера. Это было волшебно!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 11:02:09</div>
			<div class="msg_body"> Кхм... Но я отвлекся. Костер - структура, которая находится между реалом и сном. Она их соединяет, служит удобной и контролируемой переправой. Можно представить это как два берега реки: на одном - реал, на другом - сон. Когда ты засыпаешь стандартно, ты пересекаешь реку вброд, вода в которой смывает твою осознанность, очищает оперативную память. Но костер - это самодельный мост через реку. Шаткий, хрупкий, но твой! Ты ступаешь на него, он шатается под тобой, но, если тебе удается сохранить равновесие, не упасть в воду, то ты пересекаешь реку абсолютно сухой. Со всеми своими повседневными проблемами и мыслями, со всеми переживаниями, накопившимися за день</div></div></div>
		</div>
		<a name="1exp"></a><h2>1 эксперимент (удачный)</h2>
		<div id="msg103134" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103134">2017.11.23 12:57:59</a></div>
			<div class="msg_body">Колитесь, кто это был?</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.23 12:51:32</div>
			<div class="msg_body"> Ты был вчера на костре?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 12:51:57</div>
			<div class="msg_body"> Нет, прошляпил</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.23 12:52:06</div>
			<div class="msg_body">...</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 12:52:07</div>
			<div class="msg_body"> Впрочем, два раза я туда рвался</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.23 12:52:13</div>
			<div class="msg_body"> Тогда с кем была я?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.23 12:52:44</div>
			<div class="msg_body"> Лицо не видела</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 12:52:55</div>
			<div class="msg_body"> Мне тоже на мгновение показалось, что у костра кто-то есть</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 12:53:30</div>
			<div class="msg_body"> Я всех посетителей вижу как размытую дымку, без личностных черт</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.23 12:54:30</div>
			<div class="msg_body"> Этот кто-то просто стоял у костра и смотрел на огонь, подбрасывал веточки, сидел на бревне (оно 1 было) и что-то рисовал палкой на земле, иногда оглядываясь на лес и к чему-то прислушиваясь</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 12:55:12</div>
			<div class="msg_body"> Да, я видел, что он смотрел на костер</div>
				</div>
			</div>
		</div>
		<div id="msg103179" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103179">2017.11.23 13:54:43</a></div>
			<div class="msg_body">Пылающий дом</div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/MGSoHxu8Tt8.jpg">[photo321143421_456239484] (405x720)</div>
		</div>
		<div id="msg103180" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103180">2017.11.23 13:55:03</a></div>
			<div class="msg_body">Не знаю</div>
		</div>
		<div id="msg103181" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103181">2017.11.23 13:55:07</a></div>
			<div class="msg_body">Я не смотрела</div>
		</div>
		<div id="msg103182" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103182">2017.11.23 13:55:18</a></div>
			<div class="msg_body">Да и следы почти сразу стирались</div>
		</div>
		<div id="msg103183" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103183">2017.11.23 13:57:06</a></div>
			<div class="msg_body">мне вчера снилось, что я в лесу был один, пытался развести огонь, потом сидел рисовал, и убежал, испугавшись чего-то</div>
		</div>
		<div id="msg103184" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103184">2017.11.23 13:57:24</a></div>
			<div class="msg_body">Нашелся</div>
		</div>
		<div id="msg103185" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103185">2017.11.23 13:57:51</a></div>
			<div class="msg_body">Ты уверен, что это был уже сон?</div>
		</div>
		<div id="msg103186" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103186">2017.11.23 13:58:02</a></div>
			<div class="msg_body">Хз</div>
		</div>
		<div id="msg103187" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103187">2017.11.23 13:58:12</a></div>
			<div class="msg_body">Не думаю, что это имеет значение</div>
		</div>
		<div id="msg103188" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103188">2017.11.23 13:58:24</a></div>
			<div class="msg_body">Возможно, он мог попасть к костру через сон</div>
		</div>
		<div id="msg103189" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103189">2017.11.23 13:58:30</a></div>
			<div class="msg_body">Такое теоретически возможно</div>
		</div>
		<div id="msg103190" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103190">2017.11.23 13:58:39</a></div>
			<div class="msg_body">Особенно учитывая его состояние</div>
		</div>
		<div id="msg103191" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103191">2017.11.23 13:58:40</a></div>
			<div class="msg_body">Мне казалось, что это реальность</div>
		</div>
		<div id="msg103192" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103192">2017.11.23 13:58:47</a></div>
			<div class="msg_body">Но на утро я запомнил это</div>
		</div>
		<div id="msg103193" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103193">2017.11.23 13:59:02</a></div>
			<div class="msg_body">Ну если состояние учитывать, то теоретически мог</div>
		</div>
		<div id="msg103194" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103194">2017.11.23 13:59:15</a></div>
			<div class="msg_body">Сколько у тебя тогда было время?</div>
		</div>
		<div id="msg103195" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103195">2017.11.23 13:59:18</a></div>
			<div class="msg_body">Примерно</div>
		</div>
		<div id="msg103198" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103198">2017.11.23 13:59:57</a></div>
			<div class="msg_body">В полночь по времени Дарины он был в самом разгаре сна</div>
		</div>
		<div id="msg103199" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103199">2017.11.23 14:00:10</a></div>
			<div class="msg_body">Когда я это видел?</div>
		</div>
		<div id="msg103200" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103200">2017.11.23 14:00:13</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg103201" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103201">2017.11.23 14:00:22</a></div>
			<div class="msg_body">4 утра. Самое время запоминать сны</div>
		</div>
		<div id="msg103202" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103202">2017.11.23 14:00:30</a></div>
			<div class="msg_body">Около трех-четырёх ночи, я как раз перед этим проснулся</div>
		</div>
		<div id="msg103204" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103204">2017.11.23 14:01:14</a></div>
			<div class="msg_body">Уууух ты</div>
		</div>
		<div id="msg103205" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103205">2017.11.23 14:01:22</a></div>
			<div class="msg_body">Работает!</div>
		</div>
		<div id="msg103206" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103206">2017.11.23 14:01:27</a></div>
			<div class="msg_body">Оно работает!</div>
		</div>
		<div id="msg103207" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103207">2017.11.23 14:01:27</a></div>
			<div class="msg_body">Ага!</div>
		</div>
		<div id="msg103208" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103208">2017.11.23 14:02:14</a></div>
			<div class="msg_body">Если у нас с Ильей разница в 4 часа, значит это было по моему в полуночь, в это время я была у костра</div>
		</div>
		<div id="msg103209" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103209">2017.11.23 14:02:30</a></div>
			<div class="msg_body">Только вопрос</div>
		</div>
		<div id="msg103210" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103210">2017.11.23 14:02:39</a></div>
			<div class="msg_body">А у меня было 23:00. Я тоже в то время пытался попасть к костру, да не смог удержаться</div>
		</div>
		<div id="msg103211" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103211">2017.11.23 14:02:45</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_doc"></div> <audio controls=""><source src="./work with spaces/7408a2e034.ogg"></audio></div>
		</div>
		<div id="msg103212" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103212">2017.11.23 14:03:13</a></div>
			<div class="msg_body">Он сам туда попал, или его выдернуло энерг. поле?</div>
		</div>
		<div id="msg103213" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103213">2017.11.23 14:03:40</a></div>
			<div class="msg_body">Думаю, тут оба фактора сыграли</div>
		</div>
		<div id="msg103214" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103214">2017.11.23 14:04:06</a></div>
			<div class="msg_body">Я там такого понаплела<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg103215" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103215">2017.11.23 14:04:15</a></div>
			<div class="msg_body">?</div>
		</div>
		<div id="msg103216" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103216">2017.11.23 14:04:54</a></div>
			<div class="msg_body">Там теперь ходят волки и у этого места есть история, если она прижилась, то вы сами ее узнаете)</div>
		</div>
		<div id="msg103217" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103217">2017.11.23 14:04:56</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_doc"></div> <audio controls=""><source src="./work with spaces/b446438aad.ogg"></audio></div>
		</div>
		<div id="msg103218" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103218">2017.11.23 14:05:13</a></div>
			<div class="msg_body">Стооооп</div>
		</div>
		<div id="msg103219" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103219">2017.11.23 14:05:18</a></div>
			<div class="msg_body">Дори!</div>
		</div>
		<div id="msg103220" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103220">2017.11.23 14:05:23</a></div>
			<div class="msg_body">Ты ведь первый раз на костре?</div>
		</div>
		<div id="msg103221" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103221">2017.11.23 14:05:25</a></div>
			<div class="msg_body">Меня же там сожрать пытались!</div>
		</div>
		<div id="msg103222" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg103222">2017.11.23 14:05:40</a></div>
			<div class="msg_body">Да</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.23 14:05:23</div>
			<div class="msg_body"> Ты ведь первый раз на костре?</div>
				</div>
			</div>
		</div>
		<div id="msg103223" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103223">2017.11.23 14:05:41</a></div>
			<div class="msg_body">Даааа</div>
		</div>
		<div id="msg103224" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103224">2017.11.23 14:05:45</a></div>
			<div class="msg_body">)</div>
		</div>
		<div id="msg103225" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103225">2017.11.23 14:05:46</a></div>
			<div class="msg_body">Я подумал, это мои бредни, кое-как открестился!</div>
		</div>
		<div id="msg103226" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103226">2017.11.23 14:06:04</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(3).png">Стикер #66</div>
		</div>
		<div id="msg103227" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103227">2017.11.23 14:06:27</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(4).png">Стикер #4566</div>
		</div>
		<div id="msg103228" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103228">2017.11.23 14:06:36</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(5).png">Стикер #4578</div>
		</div>
		<div id="msg103229" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103229">2017.11.23 14:06:45</a></div>
			<div class="msg_body">Ты просто мог не увидеть нас</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 14:05:40</div>
			<div class="msg_body"> Да</div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.23 14:05:23</div>
			<div class="msg_body"> Ты ведь первый раз на костре?</div>
				</div>
					</div>
				</div>
			</div>
		</div>
		<div id="msg103231" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103231">2017.11.23 14:06:51</a></div>
			<div class="msg_body">Не заметить*</div>
		</div>
		<div id="msg103230" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103230">2017.11.23 14:06:47</a></div>
			<div class="attacments"> <b>Материалы:</b> </div>
			<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(6).png">Стикер #3366</div>
		</div>
		<div id="msg103232" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103232">2017.11.23 14:07:11</a></div>
			<div class="msg_body">Меня бы не смог. Я там секунду был</div>
		</div>
		<div id="msg103233" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103233">2017.11.23 14:07:22</a></div>
			<div class="msg_body">Плюс он во сне, мы там были не четче теней</div>
		</div>
		<div id="msg103234" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103234">2017.11.23 14:07:39</a></div>
			<div class="msg_body">Это еще не все, там теперь есть еще пару фишек)</div>
		</div>
		<div id="msg103235" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103235">2017.11.23 14:08:27</a></div>
			<div class="msg_body">*грожу пальцем*</div>
		</div>
		<div id="msg103236" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103236">2017.11.23 14:08:36</a></div>
			<div class="msg_body">Ну я же должна где-то учиться управлять сеткой материи)</div>
		</div>
		<div id="msg103237" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103237">2017.11.23 14:08:59</a></div>
			<div class="msg_body">Она правда по памяти созданна, поэтому с отклонениями</div>
		</div>
		<div id="msg103238" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103238">2017.11.23 14:09:02</a></div>
			<div class="msg_body">Но да лан</div>
		</div>
		<div id="msg103239" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103239">2017.11.23 14:09:43</a></div>
			<div class="msg_body">Ты вообще нахрена костер с нейтральной зоной и щитом создал? Мне теперь трудно там ловушки расставлять</div>
		</div>
		<div id="msg103240" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103240">2017.11.23 14:09:58</a></div>
			<div class="msg_body">Чего?</div>
		</div>
		<div id="msg103241" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103241">2017.11.23 14:10:05</a></div>
			<div class="msg_body">Чегооо?</div>
		</div>
		<div id="msg103242" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103242">2017.11.23 14:10:25</a></div>
			<div class="msg_body">Ничего ничего</div>
		</div>
		<div id="msg103243" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103243">2017.11.23 14:10:31</a></div>
			<div class="msg_body">Не</div>
		</div>
		<div id="msg103244" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103244">2017.11.23 14:10:47</a></div>
			<div class="msg_body">Ты поясни, что за нейтр зона и щит?</div>
		</div>
		<div id="msg103245" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103245">2017.11.23 14:11:15</a></div>
			<div class="msg_body">Ну грубо говоря это вообще отдельная зона</div>
		</div>
		<div id="msg103246" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103246">2017.11.23 14:11:28</a></div>
			<div class="msg_body">Это как космос</div>
		</div>
		<div id="msg103247" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103247">2017.11.23 14:11:34</a></div>
			<div class="msg_body">Там нет ничего</div>
		</div>
		<div id="msg103248" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103248">2017.11.23 14:12:00</a></div>
			<div class="msg_body">Все что там есть - искуственно созданное, то биш как новая планета</div>
		</div>
		<div id="msg103249" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103249">2017.11.23 14:12:06</a></div>
			<div class="msg_body">Вне леса?</div>
		</div>
		<div id="msg103250" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103250">2017.11.23 14:12:12</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg103251" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103251">2017.11.23 14:12:20</a></div>
			<div class="msg_body">А что не так?</div>
		</div>
		<div id="msg103252" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103252">2017.11.23 14:12:23</a></div>
			<div class="msg_body">Тип того</div>
		</div>
		<div id="msg103253" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103253">2017.11.23 14:12:32</a></div>
			<div class="msg_body">Вот + она с щитом</div>
		</div>
		<div id="msg103254" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103254">2017.11.23 14:12:33</a></div>
			<div class="msg_body">Не буду же я прорисовывать планету!</div>
		</div>
		<div id="msg103255" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103255">2017.11.23 14:12:37</a></div>
			<div class="msg_body">А в сон и так выйти можно</div>
		</div>
		<div id="msg103256" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103256">2017.11.23 14:12:40</a></div>
			<div class="msg_body">Я же вышел</div>
		</div>
		<div id="msg103257" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103257">2017.11.23 14:12:45</a></div>
			<div class="msg_body">Т.е. с защитой</div>
		</div>
		<div id="msg103258" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103258">2017.11.23 14:12:52</a></div>
			<div class="msg_body">Просто космос вовне заменился сном</div>
		</div>
		<div id="msg103259" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103259">2017.11.23 14:12:59</a></div>
			<div class="msg_body">От чего?</div>
		</div>
		<div id="msg103260" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103260">2017.11.23 14:13:47</a></div>
			<div class="msg_body">И создать что-то другим в этой зоне очень трудно. Они могут ходить, ощущать, видеть, но не изменять</div>
		</div>
		<div id="msg103261" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103261">2017.11.23 14:14:07</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(7).png">Стикер #46</div>
		</div>
		<div id="msg103262" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103262">2017.11.23 14:14:11</a></div>
			<div class="msg_body">Так получилось</div>
		</div>
		<div id="msg103263" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103263">2017.11.23 14:14:34</a></div>
			<div class="msg_body">Я ток в этой беседе 20-ю минутами ранее осознал, что закрыл редакцию пространства</div>
		</div>
		<div id="msg103264" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103264">2017.11.23 14:15:39</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(8).png">Стикер #49</div>
		</div>
		<div id="msg103265" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103265">2017.11.23 14:15:42</a></div>
			<div class="msg_body">Знаешь сколько светимости я потратила, чтобы взломать ее и создать сеть?</div>
		</div>
		<div id="msg103266" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103266">2017.11.23 14:16:00</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(9).png">Стикер #69</div>
		</div>
		<div id="msg103267" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103267">2017.11.23 14:16:18</a></div>
			<div class="msg_body">Что?</div>
		</div>
		<div id="msg103268" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103268">2017.11.23 14:16:30</a></div>
			<div class="msg_body">Не, ну ок</div>
		</div>
		<div id="msg103269" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103269">2017.11.23 14:16:41</a></div>
			<div class="msg_body">Ну не знал я, что запретил редакцию!</div>
		</div>
		<div id="msg103270" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103270">2017.11.23 14:17:06</a></div>
			<div class="msg_body">И до сих пор не понимаю, как сделал это</div>
		</div>
		<div id="msg103271" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103271">2017.11.23 14:17:06</a></div>
			<div class="msg_body">-_-</div>
		</div>
		<div id="msg103272" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103272">2017.11.23 14:17:52</a></div>
			<div class="msg_body">Возможно когда создавал костер, подумал о чем-то. Эта роковая мысль и повлияла на настройки костра</div>
		</div>
		<div id="msg103273" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103273">2017.11.23 14:18:10</a></div>
			<div class="msg_body">Я создавал пространство из фотографии</div>
		</div>
		<div id="msg103274" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103274">2017.11.23 14:18:13</a></div>
			<div class="msg_body">А фото статично</div>
		</div>
		<div id="msg103275" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103275">2017.11.23 14:18:28</a></div>
			<div class="msg_body">И я мог передать эту предустановку</div>
		</div>
		<div id="msg103276" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103276">2017.11.23 14:18:36</a></div>
			<div class="msg_body">Мог</div>
		</div>
		<div id="msg103277" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103277">2017.11.23 14:19:02</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(7).png">Стикер #46</div>
		</div>
		<div id="msg103282" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103282">2017.11.23 14:25:01</a></div>
			<div class="msg_body">Я ща пытаюсь перекачать энергию с праздника у нас в колледже в костер</div>
		</div>
		<div id="msg103283" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103283">2017.11.23 14:25:15</a></div>
			<div class="msg_body">Глядишь, поможет впоследствии</div>
		</div>
		<div id="msg103284" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103284">2017.11.23 14:26:44</a></div>
			<div class="msg_body">Чего-нибудь натворить</div>
		</div>
		<div id="msg103285" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103285">2017.11.23 14:26:59</a></div>
			<div class="msg_body">Ну например в сон пройти</div>
		</div>
		<div id="msg103286" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103286">2017.11.23 14:27:36</a></div>
			<div class="msg_body">Просто у меня всегда были проблемы с кормежкой НИ/ЭИ (неорганического/энергетического интеллекта)</div>
		</div>
		<div id="msg103457" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103457">2017.11.23 21:04:00</a></div>
			<div class="msg_body">Слушай, Дори, а ты можешь дать намек на положение какой-нибудь установленной ловушки?</div>
		</div>
		<div id="msg103458" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103458">2017.11.23 21:04:06</a></div>
			<div class="msg_body">Мне интересно в них попасться<img src="./work with spaces/blank.gif" emoji="D83DDE0A" alt="??" class="emoji_css" style="background-position: 0px 0px;"></div>
		</div>
		<div id="msg103473" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103473">2017.11.23 21:49:58</a></div>
			<div class="msg_body">Неть)</div>
		</div>
		<div id="msg103474" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103474">2017.11.23 21:50:12</a></div>
			<div class="msg_body">Они еще недоработанны</div>
		</div>
		<div id="msg103475" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103475">2017.11.23 21:50:40</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(10).png">Стикер #162</div>
		</div>
		<div id="msg103476" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103476">2017.11.23 21:50:41</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(11).png">Стикер #158</div>
		</div>
		<div id="msg103477" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103477">2017.11.23 21:50:50</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(12).png">Стикер #4327</div>
		</div>
		<div id="msg103478" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103478">2017.11.23 21:51:07</a></div>
			<div class="msg_body">А я попробую снять запрет на редакцию пространства</div>
		</div>
		<div id="msg103479" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103479">2017.11.23 21:51:15</a></div>
			<div class="msg_body">Хотя не могу ничего обещать</div>
		</div>
		<div id="msg103480" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103480">2017.11.23 21:51:23</a></div>
			<div class="msg_body">Этот запрет будто внутри меня тоже сидит</div>
		</div>
		<div id="msg103481" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103481">2017.11.23 21:52:17</a></div>
			<div class="msg_body">Ну ты там посторайся)</div>
		</div>
		<div id="msg103482" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103482">2017.11.23 21:52:28</a></div>
			<div class="msg_body">Посторайся</div>
		</div>
		<div id="msg103483" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103483">2017.11.23 21:52:35</a></div>
			<div class="msg_body">постОрайся</div>
		</div>
		<div id="msg103484" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103484">2017.11.23 21:52:46</a></div>
			<div class="msg_body">стОрайся</div>
		</div>
		<div id="msg103485" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103485">2017.11.23 21:52:51</a></div>
			<div class="msg_body">стО</div>
		</div>
		<div id="msg103486" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103486">2017.11.23 21:52:54</a></div>
			<div class="msg_body">Ооооооо</div>
		</div>
		<div id="msg103487" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103487">2017.11.23 21:53:00</a></div>
			<div class="msg_body">Ооооооооооооооооооо</div>
		</div>
		<div id="msg103488" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103488">2017.11.23 21:53:02</a></div>
			<div class="msg_body">Ааааааааааааааа</div>
		</div>
		<div id="msg103489" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103489">2017.11.23 21:56:39</a></div>
			<div class="msg_body">Аааааааааааааааааааааааааааааааап</div>
		</div>
		<div id="msg103490" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103490">2017.11.23 21:56:49</a></div>
			<div class="msg_body">Я только что делала уроки</div>
		</div>
		<div id="msg103491" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103491">2017.11.23 21:56:56</a></div>
			<div class="msg_body">Мне можно<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg103492" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103492">2017.11.23 21:57:04</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(13).png">Стикер #1913</div>
		</div>
		<div id="msg103493" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103493">2017.11.23 21:57:07</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(14).png">Стикер #1923</div>
		</div>
		<div id="msg103494" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103494">2017.11.23 22:12:00</a></div>
			<div class="msg_body">Нуууу не знаю, получилось ли, но я, помимо прочего, оставил костер и ряд зарослей, к нему прилегающих, заприваченными. Про остальное - хер его знает</div>
		</div>
		<div id="msg103495" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103495">2017.11.23 22:13:23</a></div>
			<div class="msg_body">Сейчас проверим</div>
		</div>
		<div id="msg103496" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103496">2017.11.23 22:13:37</a></div>
			<div class="msg_body">Я к костру пойду минут через 5-10</div>
		</div>
		<div id="msg103497" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103497">2017.11.23 22:13:55</a></div>
			<div class="msg_body">Ну я попозже. Я чаек пью. Буду щас пить</div>
		</div>
		<div id="msg103498" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103498">2017.11.23 22:17:15</a></div>
			<div class="msg_body">Лады</div>
		</div>
		<div id="msg103499" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103499">2017.11.23 22:17:33</a></div>
			<div class="msg_body">Приятного чаепития)</div>
		</div>
		<div id="msg103500" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103500">2017.11.23 22:18:30</a></div>
			<div class="msg_body">Душевной церемонии <img class="emoji" alt="??" src="./work with spaces/D83DDE43.png"></div>
		</div>
		<div id="msg103501" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103501">2017.11.23 22:18:34</a></div>
			<div class="msg_body">Чайной</div>
		</div>
		<div id="msg103502" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103502">2017.11.23 22:21:46</a></div>
			<div class="msg_body">С вами б чайку попить. В китайском стиле</div>
		</div>
		<div id="msg103503" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103503">2017.11.23 22:21:56</a></div>
			<div class="msg_body">А так...</div>
		</div>
		<div id="msg103504" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103504">2017.11.23 22:22:19</a></div>
			<div class="msg_body">Даа....</div>
		</div>
		<div id="msg103505" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103505">2017.11.23 22:22:21</a></div>
			<div class="msg_body">Я вот думаю пирог замутить</div>
		</div>
		<div id="msg103506" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103506">2017.11.23 22:22:30</a></div>
			<div class="msg_body">Я, по-моему, уже говорил, но в последнее время у меня чай невкусный получается</div>
		</div>
		<div id="msg103507" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103507">2017.11.23 22:22:30</a></div>
			<div class="msg_body">Было бы неплохо</div>
		</div>
		<div id="msg103508" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103508">2017.11.23 22:22:41</a></div>
			<div class="msg_body">Говорил</div>
		</div>
		<div id="msg103509" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103509">2017.11.23 22:22:50</a></div>
			<div class="msg_body">Но все равно спасибо</div>
		</div>
		<div id="msg103510" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103510">2017.11.23 22:22:56</a></div>
			<div class="msg_body">Почему?</div>
		</div>
		<div id="msg103511" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103511">2017.11.23 22:23:23</a></div>
			<div class="msg_body">???</div>
		</div>
		<div id="msg103512" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103512">2017.11.23 22:23:27</a></div>
			<div class="msg_body">Попробуй сделать попрохладней или потеплее, меньше заварки, больше сахара и ностальгия</div>
		</div>
		<div id="msg103513" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103513">2017.11.23 22:23:43</a></div>
			<div class="msg_body">Да не</div>
		</div>
		<div id="msg103514" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103514">2017.11.23 22:23:49</a></div>
			<div class="msg_body">Тут сердце доброе нужно</div>
		</div>
		<div id="msg103515" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103515">2017.11.23 22:23:54</a></div>
			<div class="msg_body">Настроение хорошее</div>
		</div>
		<div id="msg103516" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103516">2017.11.23 22:25:26</a></div>
			<div class="msg_body">Ну да, когда без души делаешь, получается не то вкус, не то ус</div>
		</div>
		<div id="msg103517" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103517">2017.11.23 22:25:49</a></div>
			<div class="msg_body">В поварском деле главное - душа</div>
		</div>
		<div id="msg103518" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103518">2017.11.23 22:26:23</a></div>
			<div class="msg_body">Поддержу вас сударь</div>
		</div>
		<div id="msg103519" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103519">2017.11.23 22:26:26</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83DDE01.png"></div>
		</div>
		<div id="msg103520" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103520">2017.11.23 22:26:30</a></div>
			<div class="msg_body"><img src="./work with spaces/blank.gif" emoji="D83DDE0A" alt="??" class="emoji_css" style="background-position: 0px 0px;"></div>
		</div><hr>
		<div id="msg103529" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103529">2017.11.24 07:46:35</a></div>
			<div class="msg_body">Денис, ты вчера к костру ходил? И если да, то когда?</div>
		</div>
		<a name="2-3exp"></a><h2>2 эксперимент (неудачный) и инициация третьего</h2>
		<div id="msg103540" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103540">2017.11.24 09:48:23</a></div>
			<div class="msg_body">Там в начале еще идет описание костра, котрое уже лежит тут</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 10:42:41</div>
			<div class="msg_body"> Мне кажется, я начал кое-что понимать о ХС, о том, как они учат, как ведут практы, как живут, исследуют, ведут и показывают свои магические штуковины через инет. Теперь мне надо провести эксперимент.<br>И для него мне нужен помощник. Лучшей кандидатуры, чем ты, у меня нет. Поможешь?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 10:44:04</div>
			<div class="msg_body"> Работать будем у костра. Посему прежде я дам четкие объяснение по костру и только потом по самому эксперименту</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 11:03:49</div>
			<div class="msg_body"> Однако это пространство можно использовать не только как переправу в сон, я не зря ассоциировал его с нашей компанией, с нашей беседой. Такие пространства позволяют людям взаимодействовать на ментальном и энергетическом планах. Помнишь, я передавал тебе эмоции через символ? Та же схема, только процесс будет происходить в онлайн режиме</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 11:09:23</div>
			<div class="msg_body"> Мы вместе заходим к костру, начинаем закрепляться в нем, параллельно я буду совершать некоторые действия. Т.е. я буду передавать тебе физические ощущения, проецировать свои ощущения на тебя. А именно я буду держать в руке два каменных шара, которые будут создавать особое ощущение в ладони. В свое время я на нем хорошо сконцентрировался, так что теперь могу его легко воспроизводить, поэтому с ним мне будет удобнее. Твоя задача - отрешиться от всего, 70% внимания сконцентрировать на закреплении у костра (исследование пространства), а весь остаток - на правой руке, ожидая неких ощущений. Когда почувствуешь, не закрепляйся на нем. Просто запоминай, вдруг ощущения изменятся? После опишешь мне</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 11:09:30</div>
			<div class="msg_body"> О времени договоримся отдельно</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 11:09:44</div>
			<div class="msg_body"> Прежде - ответь, согласен ты или нет</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 11:11:32</div>
			<div class="msg_body"> Согласен</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 11:12:00</div>
			<div class="msg_body"> Но одновременно мы зайти наверно не сможем, из-за времени</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 11:19:44</div>
			<div class="msg_body"> Сможем</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 11:20:07</div>
			<div class="msg_body"> Ты скажи, когда спать будешь ложиться, а я свалю в укромное место, где предамся медитации</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 11:32:55</div>
			<div class="msg_body"> Ок</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 16:15:02</div>
			<div class="msg_body"> Ты примерно когда будешь спать ложиться?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 16:15:40</div>
			<div class="msg_body"> Примерно через</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 16:16:38</div>
			<div class="msg_body"> Час</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:10:19</div>
			<div class="msg_body"> Иииииииииильяяяяяячаааааааа</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:10:22</div>
			<div class="msg_body"> Ильяча</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:10:30</div>
			<div class="msg_body"> Ве а ю</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 17:31:21</div>
			<div class="msg_body"> Я тут</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 17:31:29</div>
			<div class="msg_body"> В Ютубе был</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 17:31:34</div>
			<div class="msg_body"> Теперь тут</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:31:37</div>
			<div class="msg_body"> Неужели!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 17:31:56</div>
			<div class="msg_body"> Для того, чтобы сказать, что я спать собираюсь</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:31:58</div>
			<div class="msg_body"> Я уж думал, ты уснул</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:32:06</div>
			<div class="msg_body"> Костер</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:32:23</div>
			<div class="msg_body"> Все понял насчет того, как тут заходить из реала, а потом оттуда в сон?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:32:36</div>
			<div class="msg_body"> Но прежде будут ощущения в правой руке!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 17:32:48</div>
			<div class="msg_body"> Ага</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.23 17:32:58</div>
			<div class="msg_body"> Всо до завтра</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:33:04</div>
			<div class="msg_body"> Неа</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:33:09</div>
			<div class="msg_body"> Мы еще увидимся</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:33:11</div>
			<div class="msg_body"> У костра</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 17:33:15</div>
			<div class="msg_body"> </div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(15).png">Стикер #2920</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.23 23:18:19</div>
			<div class="msg_body"> Ну что, что и где чувствовал?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.24 02:08:10</div>
			<div class="msg_body"> Ничего не чувствовал, но костёр видел</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 08:00:39</div>
			<div class="msg_body"> Ты не мог его не видеть - ты же его и представлял!</div>
				</div>
			</div>
		</div>
		<div id="msg103541" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103541">2017.11.24 09:48:41</a></div>
			<div class="msg_body">Так что я не стал его вставлять</div>
		</div>
		<div id="msg103542" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103542">2017.11.24 09:48:55</a></div>
			<div class="msg_body">Значит-ся, не получилось</div>
		</div>
		<div id="msg103543" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103543">2017.11.24 09:49:05</a></div>
			<div class="msg_body">Тогда контрольный эксперимент</div>
		</div>
		<div id="msg103544" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103544">2017.11.24 09:49:15</a></div>
			<div class="msg_body">Как когда мы работали с символами</div>
		</div>
		<div id="msg103545" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103545">2017.11.24 09:50:14</a></div>
			<div class="msg_body">Я буду закачивать определенную эмоцию, Илья ее будет ловить. Ну и любой желающий - тоже</div>
		</div>
		<div id="msg103546" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103546">2017.11.24 09:50:33</a></div>
			<div class="msg_body">Только для этого, наверное, надо будет создать отдельную поляну</div>
		</div>
		<div id="msg103547" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103547">2017.11.24 09:51:14</a></div>
			<div class="msg_body">Я сегодня нарисую несколько пейзажей о том, как я вижу пространство костра</div>
		</div>
		<div id="msg103548" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103548">2017.11.24 09:51:16</a></div>
			<div class="msg_body">После и решим</div>
		</div>
		<div id="msg103579" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103579">2017.11.24 10:30:16</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:23:45</div>
			<div class="msg_body"> И все-таки</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:24:01</div>
			<div class="msg_body"> Ты уверен, что помнишь все то время, что сидел у костра?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.24 10:24:10</div>
			<div class="msg_body"> Нет</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:24:20</div>
			<div class="msg_body"> Ты уверен, что точно ничего не чувствовал в правой руке?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:24:31</div>
			<div class="msg_body"> Даже если ощущения неописуемые</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.24 10:24:39</div>
			<div class="msg_body"> У меня мелькнул на секунд двадцать этот костёр и всё</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:24:49</div>
			<div class="msg_body"> Сразу вырубился?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.24 10:24:56</div>
			<div class="msg_body"> Нет не уверен</div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:24:20</div>
			<div class="msg_body"> Ты уверен, что точно ничего не чувствовал в правой руке?</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.24 10:25:01</div>
			<div class="msg_body"> Да</div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:24:49</div>
			<div class="msg_body"> Сразу вырубился?</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:25:11</div>
			<div class="msg_body"> Хахах</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:25:25</div>
			<div class="msg_body"> А я ведь тоже уснул где-то в течении минуты</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:25:39</div>
			<div class="msg_body"> Мне кажется, что кое-что встало на места</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.24 10:25:40</div>
			<div class="msg_body"> Пиздец</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:25:48</div>
			<div class="msg_body"> Смотри, что я делал</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:26:25</div>
			<div class="msg_body"> Я крутил в правой руке два каменных шара, концентрируясь на ощущениях, создаваемых ими. После я шары отбросил, оставив одно ощущение</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:26:58</div>
			<div class="msg_body"> Второй частью внимания я был у костра. Я ассоциировал себя с тобой - представлял, что я - это ты и что ты чувствуешь то же, что и я</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:27:10</div>
			<div class="msg_body"> Таким образом я передавал тебе ощущение в руке</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:27:39</div>
			<div class="msg_body"> Но кто-то из нас быстро вырубился (60% за то, что это был я) и утянул в сон другого</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.24 10:27:55</div>
			<div class="msg_body"> Возможно</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:28:05</div>
			<div class="msg_body"> Ндяяя</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:28:09</div>
			<div class="msg_body"> Окей</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:28:30</div>
			<div class="msg_body"> Сегодня мы с Дори решим насчет способа передачи эмоций через костер</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:28:40</div>
			<div class="msg_body"> После она или я проведем подготовительную работу</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:28:48</div>
			<div class="msg_body"> Я загружу эмоцию</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:28:57</div>
			<div class="msg_body"> И все желающие начнут ее ловить</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:29:11</div>
			<div class="msg_body"> Но это дело, скорее всего, растянется на пару дней</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 10:29:27</div>
			<div class="msg_body"> И в след раз я не буду так уютно укутываться одеялками<img src="./work with spaces/blank.gif" class="emoji_css" style="background-position: 0px 0px;"></div>
				</div>
			</div>
		</div>
		<div id="msg103580" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103580">2017.11.24 10:32:34</a></div>
			<div class="msg_body">Так что, вполне возможно, что это я зафейлил</div>
		</div>
		<div id="msg103582" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103582">2017.11.24 11:24:19</a></div>
			<div class="msg_body">Первые два пейзажа подъехали. Художник из меня, конечно, никакой, но общее представление рисунки дают</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/d-r5MLamuqM.jpg">[photo256884832_456239524] (2560x1920)</div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/Lp4phsjODKo.jpg">[photo256884832_456239525] (2560x1920)</div>
		</div>
		<div id="msg103585" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103585">2017.11.24 11:35:58</a></div>
			<div class="msg_body">Это примерный вид сверху на то, что я строил изначально. Изменения Дори не учтены</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/v-e8X5G90qM.jpg">[photo256884832_456239526] (2560x1920)</div>
		</div>
		<div id="msg103586" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103586">2017.11.24 11:36:53</a></div>
			<div class="msg_body">Дори, сзади бревна, меж двух деревьев в зарослях есть некая выемка. Ты там ставила ловушку?</div>
		</div>
		<div id="msg103587" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103587">2017.11.24 12:13:05</a></div>
			<div class="msg_body">Вас обоих выкинуло с костра?</div>
		</div>
		<div id="msg103588" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103588">2017.11.24 12:13:25</a></div>
			<div class="msg_body">Ставила</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 11:36:53</div>
			<div class="msg_body"> Дори, сзади бревна, меж двух деревьев в зарослях есть некая выемка. Ты там ставила ловушку?</div></div></div>
		</div>
		<div id="msg103589" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103589">2017.11.24 12:15:53</a></div>
			<div class="msg_body">Да. Судя по всему, одновременно</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 12:13:05</div>
			<div class="msg_body"> Вас обоих выкинуло с костра?</div></div></div>
		</div>
		<div id="msg103590" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103590">2017.11.24 12:15:58</a></div>
			<div class="msg_body">Выкинуло в сон</div>
		</div>
		<div id="msg103591" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103591">2017.11.24 12:16:19</a></div>
			<div class="msg_body">М-мммм! Мммммм!!!</div>
		</div>
		<div id="msg103592" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103592">2017.11.24 12:16:31</a></div>
			<div class="msg_body">*возмущенное мычание*</div>
		</div>
		<div id="msg103593" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103593">2017.11.24 12:16:35</a></div>
			<div class="msg_body">Ееее<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg103594" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103594">2017.11.24 12:16:52</a></div>
			<div class="msg_body">Ловушка сработала</div>
		</div>
		<div id="msg103595" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103595">2017.11.24 12:16:56</a></div>
			<div class="msg_body">)</div>
		</div>
		<div id="msg103596" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103596">2017.11.24 12:16:57</a></div>
			<div class="msg_body">Я туда попался за день до того, как меня пытались съесть твои волки</div>
		</div>
		<div id="msg103597" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103597">2017.11.24 12:17:15</a></div>
			<div class="msg_body">В тот день, когда я почти вышел в КС</div>
		</div>
		<div id="msg103598" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103598">2017.11.24 12:18:20</a></div>
			<div class="msg_body">Ну прости</div>
		</div>
		<div id="msg103599" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103599">2017.11.24 12:18:33</a></div>
			<div class="msg_body">Она была завязанна на осознаности</div>
		</div>
		<div id="msg103600" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103600">2017.11.24 12:18:38</a></div>
			<div class="msg_body">Насчет контейнера для эмоций. Самый главный вопрос, который я хотел тебе задать, это как ты считаешь, нужно создать новую поляну под это дело или пусть все простраство костра наполняется?</div>
		</div>
		<div id="msg103601" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103601">2017.11.24 12:18:55</a></div>
			<div class="msg_body">Она высасывает осознанность?</div>
		</div>
		<div id="msg103602" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103602">2017.11.24 12:18:55</a></div>
			<div class="msg_body">Не заметил</div>
		</div>
		<div id="msg103604" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103604">2017.11.24 12:19:16</a></div>
			<div class="msg_body">Не высасывает</div>
		</div>
		<div id="msg103605" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103605">2017.11.24 12:19:26</a></div>
			<div class="msg_body">А что делает?</div>
		</div>
		<div id="msg103606" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103606">2017.11.24 12:19:38</a></div>
			<div class="msg_body">За что ты, главное, извиняешься?!</div>
		</div>
		<div id="msg103607" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103607">2017.11.24 12:20:05</a></div>
			<div class="msg_body">Активируется при опозновании осознаности</div>
		</div>
		<div id="msg103608" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103608">2017.11.24 12:20:21</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"></div>
		</div>
		<div id="msg103609" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103609">2017.11.24 12:20:24</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(16).png">Стикер #133</div>
		</div>
		<div id="msg103610" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103610">2017.11.24 12:20:31</a></div>
			<div class="msg_body">Интересно</div>
		</div>
		<div id="msg103611" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103611">2017.11.24 12:20:43</a></div>
			<div class="msg_body">Вчера тумана не было?</div>
		</div>
		<div id="msg103612" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103612">2017.11.24 12:20:56</a></div>
			<div class="msg_body">У костра?</div>
		</div>
		<div id="msg103613" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103613">2017.11.24 12:21:13</a></div>
			<div class="msg_body">Не припоминаю</div>
		</div>
		<div id="msg103614" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103614">2017.11.24 12:22:37</a></div>
			<div class="msg_body">Ты вчера пробовала редактировать пространство? Легче стало?</div>
		</div>
		<div id="msg103615" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103615">2017.11.24 12:22:53</a></div>
			<div class="msg_body">Стало</div>
		</div>
		<div id="msg103616" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103616">2017.11.24 12:23:05</a></div>
			<div class="msg_body">Ну слава тебе яйца</div>
		</div>
		<div id="msg103617" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103617">2017.11.24 12:23:17</a></div>
			<div class="msg_body">Но туман все равно не получился</div>
		</div>
		<div id="msg103618" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103618">2017.11.24 12:23:47</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 12:18:38</div>
			<div class="msg_body"> Насчет контейнера для эмоций. Самый главный вопрос, который я хотел тебе задать, это как ты считаешь, нужно создать новую поляну под это дело или пусть все простраство костра наполняется?</div></div></div>
		</div>
		<div id="msg103621" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103621">2017.11.24 12:24:24</a></div>
			<div class="msg_body">Думаю стоит выделить уголок</div>
		</div>
		<div id="msg103622" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103622">2017.11.24 12:24:32</a></div>
			<div class="msg_body">Не обязательно поляну</div>
		</div>
		<div id="msg103623" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103623">2017.11.24 12:24:39</a></div>
			<div class="msg_body">Может, шалашик?</div>
		</div>
		<div id="msg103624" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103624">2017.11.24 12:24:43</a></div>
			<div class="msg_body">Можно "домик на дереве"</div>
		</div>
		<div id="msg103625" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103625">2017.11.24 12:24:53</a></div>
			<div class="msg_body">Вариант</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 12:24:39</div>
			<div class="msg_body"> Может, шалашик?</div></div></div>
		</div>
		<div id="msg103626" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103626">2017.11.24 12:24:56</a></div>
			<div class="msg_body">Тоже хорошо</div>
		</div>
		<div id="msg103627" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103627">2017.11.24 12:25:25</a></div>
			<div class="msg_body">Да, домик на дереве лучше</div>
		</div>
		<div id="msg103628" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103628">2017.11.24 12:25:30</a></div>
			<div class="msg_body">Такой даже в ДУ есть</div>
		</div>
		<div id="msg103630" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103630">2017.11.24 12:25:39</a></div>
			<div class="msg_body">Лады)</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 12:25:25</div>
			<div class="msg_body"> Да, домик на дереве лучше</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 12:25:30</div>
			<div class="msg_body"> Такой даже в ДУ есть</div>
				</div>
			</div>
		</div>
		<div id="msg103631" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103631">2017.11.24 12:25:48</a></div>
			<div class="msg_body">Дома на деревьях по всему миру уважают<img src="./work with spaces/blank.gif" emoji="261D" alt="?" class="emoji_css" style="background-position: 0px -493px;"></div>
		</div>
		<div id="msg103632" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103632">2017.11.24 12:25:54</a></div>
			<div class="msg_body">+</div>
		</div>
		<div id="msg103634" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103634">2017.11.24 12:26:15</a></div>
			<div class="msg_body">Может, ты построишь домик?</div>
		</div>
		<div id="msg103636" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103636">2017.11.24 12:27:13</a></div>
			<div class="msg_body">Я попробую</div>
		</div>
		<div id="msg103644" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103644">2017.11.24 12:33:35</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 07:46:35</div>
			<div class="msg_body"> Денис, ты вчера к костру ходил? И если да, то когда?</div>
				</div>
			</div>
		</div>
		<div id="msg103645" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103645">2017.11.24 12:35:00</a></div>
			<div class="msg_body">Осознанно нет</div>
		</div>
		<div id="msg103646" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103646">2017.11.24 12:35:24</a></div>
			<div class="msg_body">Всм осознанно?</div>
		</div>
		<div id="msg103647" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103647">2017.11.24 12:35:32</a></div>
			<div class="msg_body">Ты перед сном визуализировал костер?</div>
		</div>
		<div id="msg103648" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103648">2017.11.24 12:36:39</a></div>
			<div class="msg_body">Не, не я точно. Я пока пытаюсь через другое пробиться</div>
		</div>
		<div id="msg103649" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103649">2017.11.24 12:36:47</a></div>
			<div class="msg_body">Ясн</div>
		</div>
		<div id="msg103650" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103650">2017.11.24 12:37:06</a></div>
			<div class="msg_body">А то мне показалось, что со мной вчера у костра кто-то был</div>
		</div>
		<div id="msg103651" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103651">2017.11.24 12:37:22</a></div>
			<div class="msg_body">В 23:15-23:30 по моему времени</div>
		</div>
		<div id="msg103652" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103652">2017.11.24 12:37:48</a></div>
			<div class="msg_body">Чучуть считается?</div>
		</div>
		<div id="msg103653" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103653">2017.11.24 12:37:57</a></div>
			<div class="msg_body">Пробовал перед сном</div>
		</div>
		<div id="msg103654" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103654">2017.11.24 12:38:03</a></div>
			<div class="msg_body">Но не помню</div>
		</div>
		<div id="msg103655" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103655">2017.11.24 12:38:13</a></div>
			<div class="msg_body">Настроился точно</div>
		</div>
		<div id="msg103656" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103656">2017.11.24 12:38:29</a></div>
			<div class="msg_body">Денис, фишка этих пространств в том, что даже малейшая мысль о них хоть на мгновение, но переносит тебя туда</div>
		</div>
		<div id="msg103657" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103657">2017.11.24 12:38:48</a></div>
			<div class="msg_body">Тогда да</div>
		</div>
		<div id="msg103658" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103658">2017.11.24 12:39:09</a></div>
			<div class="msg_body">Ну вот и хорошо<img src="./work with spaces/blank.gif" emoji="D83DDE09" alt="??" class="emoji_css" style="background-position: 0px -34px;"></div>
		</div>
		<div id="msg103659" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103659">2017.11.24 12:39:15</a></div>
			<div class="msg_body">В с 2 до 2.30</div>
		</div>
		<div id="msg103660" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103660">2017.11.24 12:39:22</a></div>
			<div class="msg_body">Примерно</div>
		</div>
		<div id="msg103661" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103661">2017.11.24 12:39:27</a></div>
			<div class="msg_body">По твоему?</div>
		</div>
		<div id="msg103662" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103662">2017.11.24 12:39:34</a></div>
			<div class="msg_body">Я тоже была с 12 до 1</div>
		</div>
		<div id="msg103663" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103663">2017.11.24 12:39:45</a></div>
			<div class="msg_body">Это все по вашему?</div>
		</div>
		<div id="msg103664" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103664">2017.11.24 12:39:49</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg103665" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg103665">2017.11.24 12:39:55</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg103667" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103667">2017.11.24 12:40:12</a></div>
			<div class="msg_body">С 11 до 12 по твоему</div>
		</div>
		<div id="msg103668" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103668">2017.11.24 12:40:13</a></div>
			<div class="msg_body">А</div>
		</div>
		<div id="msg103669" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103669">2017.11.24 12:40:17</a></div>
			<div class="msg_body">Значит, это была Дарина</div>
		</div>
		<div id="msg103697" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103697">2017.11.24 12:48:27</a></div>
			<div class="msg_body">А я уж думал вчера, что все, ты давно уже спишь, Дори. А ты он оно как</div>
		</div>
		<div id="msg103698" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103698">2017.11.24 12:48:46</a></div>
			<div class="msg_body">Не, я поздно ложусь</div>
		</div>
		<div id="msg103740" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103740">2017.11.24 14:02:30</a></div>
			<div class="msg_body">Дори, а ты вообще зачем делала туман? Просто так?</div>
		</div>
		<div id="msg103741" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103741">2017.11.24 14:03:24</a></div>
			<div class="msg_body">Могу лишь сказать, что это не ловушка</div>
		</div>
		<div id="msg103742" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103742">2017.11.24 14:04:26</a></div>
			<div class="msg_body">Я это делала не просто так, но зачем я его пыталась сделать уже не помню</div>
		</div>
		<div id="msg103743" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103743">2017.11.24 14:04:38</a></div>
			<div class="msg_body">Мысль ускользает</div>
		</div>
		<div id="msg103744" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103744">2017.11.24 14:05:00</a></div>
			<div class="msg_body">Мне кажется, туман удался</div>
		</div>
		<div id="msg103745" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103745">2017.11.24 14:05:09</a></div>
			<div class="msg_body">Я его вчера не помню, т.к. его еще не было</div>
		</div>
		<div id="msg103746" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103746">2017.11.24 14:05:17</a></div>
			<div class="msg_body">А теперь вижу</div>
		</div>
		<div id="msg103747" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103747">2017.11.24 14:05:56</a></div>
			<div class="msg_body">Мысль кружится в голове почему-то<br>"Туман хорошо энергию держит"</div>
		</div>
		<div id="msg103748" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103748">2017.11.24 14:06:22</a></div>
			<div class="msg_body">Ну он вязкий<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg103749" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103749">2017.11.24 14:14:53</a></div>
			<div class="msg_body">Вспомнила! Я подумала, что энергия и аура завязаны в один узел и раз во сне в том шаре был туман, значит для чего то он был нужен, для чего то важного. Вот и решила проэксперементировать.</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.07 21:32:11</div>
			<div class="msg_body"> И еще был "контроль ауры" мы учились создавать ложные эмоции и блокировать настоящие, т.е. когда кто нибудь приближался к моей ауре, их эмоции слегка изменялись, подстраиваясь под мои "ложные". А вокруг они видели луга или огонь, или пропасть (в зависимости от эмоций)</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.07 21:44:07</div>
			<div class="msg_body"> А "контроль ауры" проходил в какой то комнате, увидела только в проходе двери, как только мы зашли, то оказались в каком то шаре с серо- желтой дымкой в ногах (сантиметров 10-15) и серо- зеленым туманом  метрах в двух от наших голов</div></div></div>
		</div>
		<div id="msg103750" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103750">2017.11.24 14:19:19</a></div>
			<div class="msg_body">Может эмиссар?</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 14:05:56</div>
			<div class="msg_body"> Мысль кружится в голове почему-то<br>"Туман хорошо энергию держит"</div></div></div>
		</div>
		<div id="msg103751" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103751">2017.11.24 14:21:05</a></div>
			<div class="msg_body">Может</div>
		</div>
		<div id="msg103752" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103752">2017.11.24 14:29:02</a></div>
			<div class="msg_body">Может на костер сходим?</div>
		</div>
		<div id="msg103753" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103753">2017.11.24 14:29:22</a></div>
			<div class="msg_body">У меня пара инфы</div>
		</div>
		<div id="msg103754" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103754">2017.11.24 14:29:32</a></div>
			<div class="msg_body">Потом домой час переться</div>
		</div>
		<div id="msg103755" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103755">2017.11.24 14:29:45</a></div>
			<div class="msg_body">Так что не раньше 6 вечера по твоему времени</div>
		</div>
		<div id="msg103756" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103756">2017.11.24 14:30:00</a></div>
			<div class="msg_body">Ну давай тогда в 6:30</div>
		</div>
		<div id="msg103757" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103757">2017.11.24 14:30:16</a></div>
			<div class="msg_body">У меня как раз сегодня треня рано закончится</div>
		</div>
		<div id="msg103758" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103758">2017.11.24 14:30:30</a></div>
			<div class="msg_body"><img src="./work with spaces/blank.gif" emoji="D83DDC4D" alt="??" class="emoji_css" style="background-position: 0px -459px;"></div>
		</div>
		<div id="msg103762" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103762">2017.11.24 16:44:25</a></div>
			<div class="msg_body">Илья</div>
		</div>
		<div id="msg103763" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103763">2017.11.24 16:44:28</a></div>
			<div class="msg_body">Ильяча</div>
		</div>
		<div id="msg103764" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103764">2017.11.24 16:44:33</a></div>
			<div class="msg_body">Слушай</div>
		</div>
		<div id="msg103765" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103765">2017.11.24 16:44:47</a></div>
			<div class="msg_body">А если ты вместе с нами пойдешь к костру?</div>
		</div>
		<div id="msg103766" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103766">2017.11.24 16:45:06</a></div>
			<div class="msg_body">У тебя, когда мы с Дори пойдем, будет половина 11 вечера</div>
		</div>
		<div id="msg103769" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103769">2017.11.24 17:44:28</a></div>
			<div class="msg_body">Произойдет расщепление</div>
		</div>
		<a name="3exp"></a><h2>3 эксперимент (удачный) - создание домика на дереве</h2>
		<div id="msg103770" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103770">2017.11.24 17:47:05</a></div>
			<div class="msg_body">Я дома</div>
		</div>
		<div id="msg103771" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103771">2017.11.24 17:47:35</a></div>
			<div class="msg_body">Ух ты</div>
		</div>
		<div id="msg103772" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103772">2017.11.24 17:47:38</a></div>
			<div class="msg_body">В 19:00 (18:00)</div>
		</div>
		<div id="msg103773" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103773">2017.11.24 17:47:43</a></div>
			<div class="msg_body">Я прям знал</div>
		</div>
		<div id="msg103776" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103776">2017.11.24 17:47:55</a></div>
			<div class="msg_body">Секунду назад закончил приготовления</div>
		</div>
		<div id="msg103774" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103774">2017.11.24 17:47:46</a></div>
			<div class="msg_body">Пойду к костру?</div>
		</div>
		<div id="msg103777" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103777">2017.11.24 17:48:13</a></div>
			<div class="msg_body">Поясни</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 17:44:28</div>
			<div class="msg_body"> Произойдет расщепление</div>
				</div>
			</div>
		</div>
		<div id="msg103778" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103778">2017.11.24 17:48:47</a></div>
			<div class="msg_body">Долго</div>
		</div>
		<div id="msg103779" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103779">2017.11.24 17:49:12</a></div>
			<div class="msg_body">Погодь тогда</div>
		</div>
		<div id="msg103780" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103780">2017.11.24 17:52:15</a></div>
			<div class="msg_body">Собственно, а что мы там будем делать?</div>
		</div>
		<div id="msg103797" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103797">2017.11.24 18:00:02</a></div>
			<div class="msg_body">Домик</div>
		</div>
		<div id="msg103798" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103798">2017.11.24 18:00:06</a></div>
			<div class="msg_body">На дереве</div>
		</div>
		<div id="msg103805" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103805">2017.11.24 18:02:23</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"></div>
		</div>
		<div id="msg103806" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103806">2017.11.24 18:03:42</a></div>
			<div class="msg_body">А как координироваться?</div>
		</div>
		<div id="msg103807" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103807">2017.11.24 18:03:53</a></div>
			<div class="msg_body">Или ты будешь все жестами показывать?<img src="./work with spaces/blank.gif" emoji="D83DDE03" alt="??" class="emoji_css" style="background-position: 0px -17px;"></div>
		</div>
		<div id="msg103808" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103808">2017.11.24 18:07:32</a></div>
			<div class="msg_body">Давай здесь</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width"600"="" src="./work with spaces/_0pVgW19EPk.jpg">[photo236175365_456240319] (540x405)</div>
		</div>
		<div id="msg103809" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103809">2017.11.24 18:08:09</a></div>
			<div class="msg_body">Ну давай попробуем</div>
		</div>
		<div id="msg103810" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103810">2017.11.24 18:08:17</a></div>
			<div class="msg_body">Ток строить все равно будешь ты</div>
		</div>
		<div id="msg103811" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103811">2017.11.24 18:08:24</a></div>
			<div class="msg_body">Мы же пока не научились там общаться</div>
		</div>
		<div id="msg103813" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103813">2017.11.24 18:08:35</a></div>
			<div class="msg_body">Ну лан</div>
		</div>
		<div id="msg103814" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103814">2017.11.24 18:08:52</a></div>
			<div class="msg_body">Ты потом скажешь</div>
		</div>
		<div id="msg103815" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103815">2017.11.24 18:08:58</a></div>
			<div class="msg_body">Получилось или нет</div>
		</div>
		<div id="msg103816" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103816">2017.11.24 18:09:03</a></div>
			<div class="msg_body">Если не усну</div>
		</div>
		<div id="msg103817" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103817">2017.11.24 18:09:22</a></div>
			<div class="msg_body">Жаль, Илья к нам не присоединится</div>
		</div>
		<div id="msg103818" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103818">2017.11.24 18:09:31</a></div>
			<div class="msg_body">Го?</div>
		</div>
		<div id="msg103819" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103819">2017.11.24 18:09:46</a></div>
			<div class="msg_body">Го</div>
		</div>
		<div id="msg103820" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103820">2017.11.24 18:21:10</a></div>
			<div class="msg_body">Я тут</div>
		</div>
		<div id="msg103821" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103821">2017.11.24 18:21:33</a></div>
			<div class="msg_body">Я увидел, что ты закончила и вышьа</div>
		</div>
		<div id="msg103822" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103822">2017.11.24 18:22:08</a></div>
			<div class="msg_body">У меня прост голова закружилась</div>
		</div>
		<div id="msg103823" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103823">2017.11.24 18:22:11</a></div>
			<div class="msg_body">Сильно</div>
		</div>
		<div id="msg103824" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103824">2017.11.24 18:22:24</a></div>
			<div class="msg_body">Домик из досок, с как минимум одним окном у входа, внутри я каких-либо предметов обстановки не увидел</div>
		</div>
		<div id="msg103825" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103825">2017.11.24 18:22:44</a></div>
			<div class="msg_body">Два окна</div>
		</div>
		<div id="msg103826" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103826">2017.11.24 18:22:52</a></div>
			<div class="msg_body">Сбоку от выхода</div>
		</div>
		<div id="msg103827" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103827">2017.11.24 18:22:56</a></div>
			<div class="msg_body">Еще вопрос. Ты делала какие-либо проходы в зарослях на темной поляне?</div>
		</div>
		<div id="msg103828" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103828">2017.11.24 18:23:05</a></div>
			<div class="msg_body">Поясни</div>
		</div>
		<div id="msg103829" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103829">2017.11.24 18:23:13</a></div>
			<div class="msg_body">По бокам или с одной стороны?</div>
		</div>
		<div id="msg103830" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103830">2017.11.24 18:23:28</a></div>
			<div class="msg_body">По бокам</div>
		</div>
		<div id="msg103831" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103831">2017.11.24 18:24:36</a></div>
			<div class="msg_body">Я на темной поляне, в углу, если можно так сказать, нашел некий проход. Пространство там вязкое, у меня внутри аж все сжалось. Проход петлял, а потом из меня будто осознанность вытянули и попытались выпихнуть. С усилием выбрался обратно на поляну и уже пошел к домику</div>
		</div>
		<div id="msg103832" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103832">2017.11.24 18:24:39</a></div>
			<div class="msg_body">Хах</div>
		</div>
		<div id="msg103833" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103833">2017.11.24 18:24:48</a></div>
			<div class="msg_body">А я еще сомневался про второе окно</div>
		</div>
		<div id="msg103834" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103834">2017.11.24 18:25:04</a></div>
			<div class="msg_body">А, это иллюзия</div>
		</div>
		<div id="msg103835" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103835">2017.11.24 18:25:12</a></div>
			<div class="msg_body">Еще одна ловушка</div>
		</div>
		<div id="msg103836" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103836">2017.11.24 18:25:23</a></div>
			<div class="msg_body">Сколько их там?</div>
		</div>
		<div id="msg103837" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103837">2017.11.24 18:25:37</a></div>
			<div class="msg_body">5</div>
		</div>
		<div id="msg103838" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103838">2017.11.24 18:25:44</a></div>
			<div class="msg_body">Внутри домик 4х4 метра</div>
		</div>
		<div id="msg103839" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103839">2017.11.24 18:25:49</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg103840" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103840">2017.11.24 18:26:09</a></div>
			<div class="msg_body">Я нашел... 3. Волки, иллюзия, выемка за бревном</div>
		</div>
		<div id="msg103841" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103841">2017.11.24 18:26:11</a></div>
			<div class="msg_body">Там книжный шкаф, диван, стол и телевизор</div>
		</div>
		<div id="msg103842" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103842">2017.11.24 18:26:32</a></div>
			<div class="msg_body">Я думал, там пусто. Ок, зайду туда еще раз</div>
		</div>
		<div id="msg103843" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103843">2017.11.24 18:26:55</a></div>
			<div class="msg_body">Как можно забраться в домик</div>
		</div>
		<div id="msg103844" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103844">2017.11.24 18:27:16</a></div>
			<div class="msg_body">Я залез просто подтягиваясь</div>
		</div>
		<div id="msg103845" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103845">2017.11.24 18:27:32</a></div>
			<div class="msg_body">Может, там есть лесница какая...</div>
		</div>
		<div id="msg103846" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103846">2017.11.24 18:27:57</a></div>
			<div class="msg_body">Там лестница веревочная</div>
		</div>
		<div id="msg103847" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103847">2017.11.24 18:28:08</a></div>
			<div class="msg_body">Но веревки только по бокам</div>
		</div>
		<div id="msg103848" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103848">2017.11.24 18:28:15</a></div>
			<div class="msg_body">Ну логично в условиях малых пространств</div>
		</div>
		<div id="msg103849" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103849">2017.11.24 18:28:22</a></div>
			<div class="msg_body">Всм?</div>
		</div>
		<div id="msg103850" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103850">2017.11.24 18:28:38</a></div>
			<div class="msg_body">Перекладины деревянные</div>
		</div>
		<div id="msg103851" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103851">2017.11.24 18:28:55</a></div>
			<div class="msg_body">Внизу лестница закреплена гвоздями</div>
		</div>
		<div id="msg103852" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103852">2017.11.24 18:29:01</a></div>
			<div class="msg_body">Чтобы не болталась</div>
		</div>
		<div id="msg103853" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103853">2017.11.24 18:29:04</a></div>
			<div class="msg_body">У домика есть крылечко?</div>
		</div>
		<div id="msg103854" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103854">2017.11.24 18:29:21</a></div>
			<div class="msg_body">Что вокруг домика?</div>
		</div>
		<div id="msg103855" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103855">2017.11.24 18:29:46</a></div>
			<div class="msg_body">Да</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 18:29:04</div>
			<div class="msg_body"> У домика есть крылечко?</div></div></div>
		</div>
		<div id="msg103856" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103856">2017.11.24 18:30:21</a></div>
			<div class="msg_body">Всм вокруг? Со входа крыльцо, а вокруг - заросли. Впрочем, я домик не обходил вокруг</div>
		</div>
		<div id="msg103857" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103857">2017.11.24 18:30:42</a></div>
			<div class="msg_body">Так что не могу говорить точно</div>
		</div>
		<div id="msg103858" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103858">2017.11.24 18:31:18</a></div>
			<div class="msg_body">Там вокруг площадка (на дереве) отступ где-то пол метра</div>
		</div>
		<div id="msg103859" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103859">2017.11.24 18:31:50</a></div>
			<div class="msg_body">То-то я не увидел боковых перил у крыльца</div>
		</div>
		<div id="msg103860" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103860">2017.11.24 18:32:17</a></div>
			<div class="msg_body">И вокруг заборчик (не заостренные колышки соедененные одной деревянной палкой-перекладиной)</div>
		</div>
		<div id="msg103861" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103861">2017.11.24 18:32:47</a></div>
			<div class="msg_body">Заборчик где-то по колено-голень</div>
		</div>
		<div id="msg103862" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103862">2017.11.24 18:33:01</a></div>
			<div class="msg_body">Я их не делала</div>
		</div>
		<div id="msg103863" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103863">2017.11.24 18:34:01</a></div>
			<div class="msg_body">Под площадкой с углов четыре опорные колонны (20?20см)</div>
		</div>
		<div id="msg103864" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103864">2017.11.24 18:34:09</a></div>
			<div class="msg_body">Для равновесия</div>
		</div>
		<div id="msg103866" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103866">2017.11.24 18:34:20</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 18:31:50</div>
			<div class="msg_body"> То-то я не увидел боковых перил у крыльца</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 18:33:01</div>
			<div class="msg_body"> Я их не делала</div>
				</div>
			</div>
		</div>
		<div id="msg103867" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103867">2017.11.24 18:34:26</a></div>
			<div class="msg_body">Я понял</div>
		</div>
		<div id="msg103868" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103868">2017.11.24 18:34:38</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 18:31:18</div>
			<div class="msg_body"> Там вокруг площадка (на дереве) отступ где-то пол метра</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 18:34:01</div>
			<div class="msg_body"> Под площадкой с углов четыре опорные колонны (20?20см)</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 18:34:09</div>
			<div class="msg_body"> Для равновесия</div>
				</div>
			</div>
		</div>
		<div id="msg103869" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103869">2017.11.24 18:35:33</a></div>
			<div class="msg_body">Отметил, что было на удивление легко концентрироваться и смотреть вокруг от первого лица</div>
		</div>
		<div id="msg103870" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103870">2017.11.24 18:36:31</a></div>
			<div class="msg_body">Примерно так</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/wsLdWLvqJe0.jpg">[photo236175365_456240320] (540x405)</div>
		</div>
		<div id="msg103871" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103871">2017.11.24 18:36:41</a></div>
			<div class="msg_body">+</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 18:35:33</div>
			<div class="msg_body"> Отметил, что было на удивление легко концентрироваться и смотреть вокруг от первого лица</div></div></div>
		</div>
		<div id="msg103872" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103872">2017.11.24 18:36:47</a></div>
			<div class="msg_body">Ты красила стены в красный цвет?</div>
		</div>
		<div id="msg103873" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103873">2017.11.24 18:36:57</a></div>
			<div class="msg_body">Нет вроде</div>
		</div>
		<div id="msg103874" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103874">2017.11.24 18:37:25</a></div>
			<div class="msg_body">Я увидел доски стен потертыми, красноватыми, как американские амбары на фермах</div>
		</div>
		<div id="msg103875" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103875">2017.11.24 18:37:56</a></div>
			<div class="msg_body">Потертость есть</div>
		</div>
		<div id="msg103876" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103876">2017.11.24 18:38:22</a></div>
			<div class="msg_body">Древесина с красноватым оттенком, но не ярко красная</div>
		</div>
		<div id="msg103877" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103877">2017.11.24 18:38:43</a></div>
			<div class="msg_body">Ну да, я воспринял это как старую уже стершуюся краску</div>
		</div>
		<div id="msg103878" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103878">2017.11.24 18:39:06</a></div>
			<div class="msg_body">Она не яркая вообще</div>
		</div>
		<div id="msg103879" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103879">2017.11.24 18:39:25</a></div>
			<div class="msg_body">Окна в домике на всех стенах?</div>
		</div>
		<div id="msg103880" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103880">2017.11.24 18:39:42</a></div>
			<div class="msg_body">Примерно такой цвет</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/7fgFr2-MsG0.jpg">[photo236175365_456240321] (540x960)</div>
		</div>
		<div id="msg103881" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103881">2017.11.24 18:40:00</a></div>
			<div class="msg_body">Да-да-да!!!!!</div>
		</div>
		<div id="msg103882" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103882">2017.11.24 18:40:28</a></div>
			<div class="msg_body">У меня это типо "природный" цвет древесины)</div>
		</div>
		<div id="msg103883" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103883">2017.11.24 18:41:08</a></div>
			<div class="msg_body">?!!!!!!!!!!!!!!?!!!!!!!!!</div>
		</div>
		<div id="msg103884" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103884">2017.11.24 18:41:09</a></div>
			<div class="msg_body"><img class="emoji" alt="?" src="./work with spaces/26A0.png"><img class="emoji" alt="?" src="./work with spaces/26A0.png"><img class="emoji" alt="?" src="./work with spaces/26A0.png"><img class="emoji" alt="?" src="./work with spaces/26A0.png"></div>
		</div>
		<div id="msg103885" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103885">2017.11.24 18:41:56</a></div>
			<div class="msg_body">Ты что-нибудь слышала, пока была там?</div>
		</div>
		<div id="msg103886" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103886">2017.11.24 18:42:26</a></div>
			<div class="msg_body">Треск костра</div>
		</div>
		<div id="msg103887" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103887">2017.11.24 18:42:31</a></div>
			<div class="msg_body">Вой волков</div>
		</div>
		<div id="msg103888" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103888">2017.11.24 18:42:35</a></div>
			<div class="msg_body">И песня</div>
		</div>
		<div id="msg103889" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103889">2017.11.24 18:42:51</a></div>
			<div class="msg_body">А я не слышал</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 18:42:31</div>
			<div class="msg_body"> Вой волков</div></div></div>
		</div>
		<div id="msg103890" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103890">2017.11.24 18:42:57</a></div>
			<div class="msg_body">Какая?</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 18:42:35</div>
			<div class="msg_body"> И песня</div></div></div>
		</div>
		<div id="msg103891" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103891">2017.11.24 18:43:08</a></div>
			<div class="msg_body">Ты сидел на бревне?</div>
		</div>
		<div id="msg103892" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103892">2017.11.24 18:43:19</a></div>
			<div class="msg_body">Периодически</div>
		</div>
		<div id="msg103893" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103893">2017.11.24 18:43:21</a></div>
			<div class="msg_body">Поначалу</div>
		</div>
		<div id="msg103894" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103894">2017.11.24 18:43:29</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_audio"></div> <audio controls=""><source src="./work with spaces/LP - Lost on you (original -1pt).mp3"></audio>LP - Lost on you (original -1pt) (4:26)</div>
		</div>
		<div id="msg103895" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103895">2017.11.24 18:43:35</a></div>
			<div class="msg_body">Мне проще начинать фиксацию на локации с бревна и взгляда на костер</div>
		</div>
		<div id="msg103896" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103896">2017.11.24 18:43:43</a></div>
			<div class="msg_body">Стоп!</div>
		</div>
		<div id="msg103897" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103897">2017.11.24 18:44:04</a></div>
			<div class="msg_body">Ты сидел так?<br>только смотрел на костер</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/NmGCN-XX8Pc.jpg">[photo236175365_456240322] (540x960)</div>
		</div>
		<div id="msg103898" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103898">2017.11.24 18:44:15</a></div>
			<div class="msg_body">Именно</div>
		</div>
		<div id="msg103899" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103899">2017.11.24 18:44:46</a></div>
			<div class="msg_body">А потом вроде поприветствовал меня, встал и подошел к тому дереву</div>
		</div>
		<div id="msg103900" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103900">2017.11.24 18:44:50</a></div>
			<div class="msg_body">А у меня поначалу в голове играла</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_audio"></div> <audio controls=""><source src="./work with spaces/Heilung - Alfadhirhaiti.mp3"></audio>Heilung - Alfadhirhaiti</div>
		</div>
		<div id="msg103901" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103901">2017.11.24 18:45:17</a></div>
			<div class="msg_body">И я не уверенна, но вроде мы обнялись</div>
		</div>
		<div id="msg103902" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103902">2017.11.24 18:45:22</a></div>
			<div class="msg_body">Я как тебя увидел, хлопнул тебя по плечу</div>
		</div>
		<div id="msg103903" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103903">2017.11.24 18:45:37</a></div>
			<div class="msg_body">Ну как хлопнул</div>
		</div>
		<div id="msg103904" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103904">2017.11.24 18:45:41</a></div>
			<div class="msg_body">Положил руку на плечо</div>
		</div>
		<div id="msg103905" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103905">2017.11.24 18:45:45</a></div>
			<div class="msg_body">Или нечто среднее</div>
		</div>
		<div id="msg103906" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103906">2017.11.24 18:45:48</a></div>
			<div class="msg_body">Откуда я зашла?</div>
		</div>
		<div id="msg103907" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103907">2017.11.24 18:46:06</a></div>
			<div class="msg_body">Я тебя увидел сразу стоящей у искомого дерева</div>
		</div>
		<div id="msg103908" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103908">2017.11.24 18:46:18</a></div>
			<div class="msg_body">Я, кстати, мгновенно твое присутствие почувствовала</div>
		</div>
		<div id="msg103909" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103909">2017.11.24 18:46:29</a></div>
			<div class="msg_body">И походу чуть раньше тебя зашла</div>
		</div>
		<div id="msg103910" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103910">2017.11.24 18:46:41</a></div>
			<div class="msg_body">А еще, когда ты начала строить, я начал рассказывать о том, как попался в ловушку в бревна</div>
		</div>
		<div id="msg103911" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103911">2017.11.24 18:47:05</a></div>
			<div class="msg_body">Мне легче концентрироваться на качающихся кронах деревьев</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 18:46:06</div>
			<div class="msg_body"> Я тебя увидел сразу стоящей у искомого дерева</div></div></div>
		</div>
		<div id="msg103912" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103912">2017.11.24 18:47:22</a></div>
			<div class="msg_body">Я видела, что ты что-то говорил</div>
		</div>
		<div id="msg103913" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103913">2017.11.24 18:47:30</a></div>
			<div class="msg_body">Но не слышала</div>
		</div>
		<div id="msg103915" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103915">2017.11.24 18:48:09</a></div>
			<div class="msg_body">У-ух меня ща распирает. Нет, мне точно надо лучше держать эмоции в узде</div>
		</div>
		<div id="msg103916" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103916">2017.11.24 18:48:17</a></div>
			<div class="msg_body">Во сне это уже играло со мной плохие шутки</div>
		</div>
		<div id="msg103917" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103917">2017.11.24 18:48:57</a></div>
			<div class="msg_body">что-то случилось?</div>
		</div>
		<div id="msg103918" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103918">2017.11.24 18:49:04</a></div>
			<div class="msg_body">Да не</div>
		</div>
		<div id="msg103919" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103919">2017.11.24 18:49:06</a></div>
			<div class="msg_body">Блин меня тоже прет...</div>
		</div>
		<div id="msg103920" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103920">2017.11.24 18:49:07</a></div>
			<div class="msg_body">Просто распирает</div>
		</div>
		<div id="msg103921" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103921">2017.11.24 18:49:11</a></div>
			<div class="msg_body">От радости</div>
		</div>
		<div id="msg103922" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103922">2017.11.24 18:49:17</a></div>
			<div class="msg_body">Хз почему</div>
		</div>
		<div id="msg103923" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103923">2017.11.24 18:49:23</a></div>
			<div class="msg_body">Ну как же?!</div>
		</div>
		<div id="msg103924" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103924">2017.11.24 18:49:29</a></div>
			<div class="msg_body">У нас все получается!</div>
		</div>
		<div id="msg103925" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103925">2017.11.24 18:49:30</a></div>
			<div class="msg_body">Готова встать визжать и прыгать<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg103926" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103926">2017.11.24 18:49:39</a></div>
			<div class="msg_body">Мы касаемся удивительных слоев магии!</div>
		</div>
		<div id="msg103927" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103927">2017.11.24 18:50:10</a></div>
			<div class="msg_body">Мы вместе были вне реальности, все запомнили и все показания совпадают!</div>
		</div>
		<div id="msg103928" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103928">2017.11.24 18:50:35</a></div>
			<div class="msg_body">Да, это точно</div>
		</div>
		<div id="msg103929" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103929">2017.11.24 18:51:14</a></div>
			<div class="msg_body">Я не оч громко говорил. В реале ты бы тоже могла не услышать.<br>Значит, общение там возможно</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 18:47:22</div>
			<div class="msg_body"> Я видела, что ты что-то говорил</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 18:47:30</div>
			<div class="msg_body"> Но не слышал</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.24 18:47:32</div>
			<div class="msg_body"> А</div></div></div>
		</div>
		<div id="msg103930" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103930">2017.11.24 18:51:18</a></div>
			<div class="msg_body">Круть!</div>
		</div>
		<div id="msg103931" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103931">2017.11.24 18:51:28</a></div>
			<div class="msg_body">Но надо учиться и экспериментировать</div>
		</div>
		<div id="msg103932" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103932">2017.11.24 18:51:50</a></div>
			<div class="msg_body">Удивительно, но помнишь я рассказывала, что перед сном сама придумывала сны и потом они превращались в реальные</div>
		</div>
		<div id="msg103933" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103933">2017.11.24 18:52:04</a></div>
			<div class="msg_body">Известное явление</div>
		</div>
		<div id="msg103934" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103934">2017.11.24 18:52:11</a></div>
			<div class="msg_body">Оказывается я просто создавала такие полянки<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg103935" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103935">2017.11.24 18:52:14</a></div>
			<div class="msg_body">Являющееся одной из основ идеи костра</div>
		</div>
		<div id="msg103936" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103936">2017.11.24 18:52:21</a></div>
			<div class="msg_body">Вот-вот</div>
		</div>
		<div id="msg103937" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103937">2017.11.24 18:53:34</a></div>
			<div class="msg_body">Она ассоциируется у меня с костром. Только последнему луны не хватает</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_audio"></div> <audio controls=""><source src="./work with spaces/Мельница - Колесо.mp3"></audio>Мельница - Колесо</div>
		</div>
		<div id="msg103938" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103938">2017.11.24 18:53:41</a></div>
			<div class="msg_body">Может, добавить?</div>
		</div>
		<div id="msg103939" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103939">2017.11.24 18:53:56</a></div>
			<div class="msg_body">Эмм...</div>
		</div>
		<div id="msg103940" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103940">2017.11.24 18:54:07</a></div>
			<div class="msg_body">Я кажись только что добавила</div>
		</div>
		<div id="msg103941" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103941">2017.11.24 18:54:23</a></div>
			<div class="msg_body">Насколько только что?</div>
		</div>
		<div id="msg103942" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103942">2017.11.24 18:54:30</a></div>
			<div class="msg_body">Ибо после крон деревьев я перевела взгляд на небо</div>
		</div>
		<div id="msg103943" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103943">2017.11.24 18:54:32</a></div>
			<div class="msg_body">Сию минуту или когда мы там были?</div>
		</div>
		<div id="msg103944" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103944">2017.11.24 18:54:37</a></div>
			<div class="msg_body">А</div>
		</div>
		<div id="msg103945" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103945">2017.11.24 18:54:39</a></div>
			<div class="msg_body">Пон</div>
		</div>
		<div id="msg103946" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103946">2017.11.24 18:54:40</a></div>
			<div class="msg_body">Когда там были</div>
		</div>
		<div id="msg103947" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103947">2017.11.24 18:54:55</a></div>
			<div class="msg_body">И представила звезды и луну</div>
		</div>
		<div id="msg103948" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103948">2017.11.24 18:55:01</a></div>
			<div class="msg_body">Почти полнолуние</div>
		</div>
		<div id="msg103949" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103949">2017.11.24 18:55:07</a></div>
			<div class="msg_body">Да, я ведь заметил посветление пространства! Даже твой туман несколько рассеялся</div>
		</div>
		<div id="msg103950" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103950">2017.11.24 18:55:27</a></div>
			<div class="msg_body">Теперь понятно почему у меня так много энергии ушло</div>
		</div>
		<div id="msg103951" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103951">2017.11.24 18:55:38</a></div>
			<div class="msg_body">Ммм</div>
		</div>
		<div id="msg103952" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103952">2017.11.24 18:55:38</a></div>
			<div class="msg_body">Нехорошо</div>
		</div>
		<div id="msg103953" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103953">2017.11.24 18:55:49</a></div>
			<div class="msg_body">Нехорошо много сил тратить</div>
		</div>
		<div id="msg103954" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103954">2017.11.24 18:56:04</a></div>
			<div class="msg_body">Уж лучше скопить и потратить или взять из общего хранилища</div>
		</div>
		<div id="msg103955" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103955">2017.11.24 18:56:13</a></div>
			<div class="msg_body">Попробуй подпитаться от костра</div>
		</div>
		<div id="msg103956" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103956">2017.11.24 18:56:19</a></div>
			<div class="msg_body">Я же его накачал на днях</div>
		</div>
		<div id="msg103957" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103957">2017.11.24 18:56:24</a></div>
			<div class="msg_body">У меня хорошая регенерация)</div>
		</div>
		<div id="msg103958" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103958">2017.11.24 18:56:55</a></div>
			<div class="msg_body">У меня энергия ушла только раз, когда я блокировку редакции снимал</div>
		</div>
		<div id="msg103959" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103959">2017.11.24 18:57:06</a></div>
			<div class="msg_body">Даже создание прошло легко</div>
		</div>
		<div id="msg103960" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103960">2017.11.24 18:57:28</a></div>
			<div class="msg_body">Впрочем, я пространство создавал в несколько этапов. Мог не заметить расхода</div>
		</div>
		<div id="msg103961" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103961">2017.11.24 18:57:42</a></div>
			<div class="msg_body">Мог</div>
		</div>
		<div id="msg103962" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103962">2017.11.24 18:58:10</a></div>
			<div class="msg_body">Я еще сетку материи подкорректировала, что бы она домик приняла</div>
		</div>
		<div id="msg103963" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103963">2017.11.24 18:58:37</a></div>
			<div class="msg_body">А что за сетка материи? Что это, какие функции, как ты ее видишь?</div>
		</div>
		<div id="msg103964" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103964">2017.11.24 18:58:41</a></div>
			<div class="msg_body">Еще удивилась почему "нитки" засветились почти по всей площади</div>
		</div>
		<div id="msg103965" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103965">2017.11.24 18:59:02</a></div>
			<div class="msg_body">А я оказывается еще луну добавила</div>
		</div>
		<div id="msg103966" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103966">2017.11.24 18:59:38</a></div>
			<div class="msg_body">Прозрачная сетка</div>
		</div>
		<div id="msg103967" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103967">2017.11.24 18:59:56</a></div>
			<div class="msg_body">Просто так ее не увидишь</div>
		</div>
		<div id="msg103968" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103968">2017.11.24 19:00:02</a></div>
			<div class="msg_body">Надо представить</div>
		</div>
		<div id="msg103969" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103969">2017.11.24 19:00:11</a></div>
			<div class="msg_body">Только потом она появляется</div>
		</div>
		<div id="msg103970" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103970">2017.11.24 19:00:13</a></div>
			<div class="msg_body">Это понятно</div>
		</div>
		<div id="msg103971" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103971">2017.11.24 19:00:18</a></div>
			<div class="msg_body">Управлять мысленно</div>
		</div>
		<div id="msg103972" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103972">2017.11.24 19:00:21</a></div>
			<div class="msg_body">Так со всем</div>
		</div>
		<div id="msg103973" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103973">2017.11.24 19:00:25</a></div>
			<div class="msg_body">Всеми нитками</div>
		</div>
		<div id="msg103974" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103974">2017.11.24 19:00:36</a></div>
			<div class="msg_body">Нитки - ход событий у костра</div>
		</div>
		<div id="msg103975" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103975">2017.11.24 19:00:51</a></div>
			<div class="msg_body">Ага, как ты в реале делаешь</div>
		</div>
		<div id="msg103976" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103976">2017.11.24 19:01:09</a></div>
			<div class="msg_body">Их можно разрывать и доплетать или просто вырезать события из ниток</div>
		</div>
		<div id="msg103977" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103977">2017.11.24 19:01:15</a></div>
			<div class="msg_body">Почти</div>
		</div>
		<div id="msg103978" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103978">2017.11.24 19:01:22</a></div>
			<div class="msg_body">В реале сложнее</div>
		</div>
		<div id="msg103979" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103979">2017.11.24 19:01:35</a></div>
			<div class="msg_body">Я еще не могу настолько управлять в реале</div>
		</div>
		<div id="msg103980" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103980">2017.11.24 19:01:43</a></div>
			<div class="msg_body">Пока что только доплетать</div>
		</div>
		<div id="msg103981" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103981">2017.11.24 19:01:45</a></div>
			<div class="msg_body">Оно логично</div>
		</div>
		<div id="msg103982" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103982">2017.11.24 19:01:54</a></div>
			<div class="msg_body">И то не всегда принимается</div>
		</div>
		<div id="msg103983" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103983">2017.11.24 19:02:27</a></div>
			<div class="msg_body">И я вообще сомневаюсь, возможно ли ею так же легко управлять, как в искусственных пространства</div>
		</div>
		<div id="msg103984" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103984">2017.11.24 19:02:45</a></div>
			<div class="msg_body">Значит, она отвечает за события в пространстве</div>
		</div>
		<div id="msg103985" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103985">2017.11.24 19:02:53</a></div>
			<div class="msg_body">Типо того</div>
		</div>
		<div id="msg103986" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103986">2017.11.24 19:03:14</a></div>
			<div class="msg_body">И... Нафига это там?</div>
		</div>
		<div id="msg103987" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103987">2017.11.24 19:03:20</a></div>
			<div class="msg_body">Возможно</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 19:02:27</div>
			<div class="msg_body"> И я вообще сомневаюсь, возможно ли ею так же легко управлять, как в искусственных пространства</div></div></div>
		</div>
		<div id="msg103988" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103988">2017.11.24 19:03:39</a></div>
			<div class="msg_body">1) Мне легче изменять что-то на костре</div>
		</div>
		<div id="msg103989" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103989">2017.11.24 19:03:53</a></div>
			<div class="msg_body">2) мои изменения точно закрепляются</div>
		</div>
		<div id="msg103990" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103990">2017.11.24 19:04:15</a></div>
			<div class="msg_body">3) с сеткой легче что сделать</div>
		</div>
		<div id="msg103991" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103991">2017.11.24 19:04:20</a></div>
			<div class="msg_body">То биш быстрее</div>
		</div>
		<div id="msg103992" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103992">2017.11.24 19:04:30</a></div>
			<div class="msg_body">4) я ее изучаю</div>
		</div>
		<div id="msg103993" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103993">2017.11.24 19:04:37</a></div>
			<div class="msg_body">Ну ок</div>
		</div>
		<div id="msg103994" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103994">2017.11.24 19:06:19</a></div>
			<div class="msg_body">Я ща из спальника выпрыгну сразу в окно от возбуждения</div>
		</div>
		<div id="msg103995" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103995">2017.11.24 19:08:17</a></div>
			<div class="msg_body">...</div>
		</div>
		<div id="msg103996" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg103996">2017.11.24 19:08:31</a></div>
			<div class="msg_body">Это все последствия костра?</div>
		</div>
		<div id="msg103997" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg103997">2017.11.24 19:09:25</a></div>
			<div class="msg_body">Ну конечно. Ток если он и повлиял на такую реакцию, то даже не на половину, я от природы такой</div>
		</div>
		<a name="4exp"></a><h2>4 эксперимент (неизвестный) - попытка входа в совместное контролируемое сновидение</h2>
		<div id="msg104011" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104011">2017.11.24 22:11:50</a></div>
			<div class="msg_body">Дори</div>
		</div>
		<div id="msg104013" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104013">2017.11.24 22:12:06</a></div>
			<div class="msg_body">Ты когда будешь спать ложиться?</div>
		</div>
		<div id="msg104017" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104017">2017.11.24 22:15:35</a></div>
			<div class="msg_body">Скоро</div>
		</div>
		<div id="msg104019" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104019">2017.11.24 22:16:13</a></div>
			<div class="msg_body">Прост почему бы нам вместе не пойти в сон?</div>
		</div>
		<div id="msg104022" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104022">2017.11.24 22:16:42</a></div>
			<div class="msg_body">Можно попробовать<img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"></div>
		</div>
		<div id="msg104033" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104033">2017.11.24 22:19:00</a></div>
			<div class="msg_body">Ток ты предупреди заранее</div>
		</div>
		<div id="msg104034" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104034">2017.11.24 22:19:07</a></div>
			<div class="msg_body">Мне кроватку настраивать еще</div>
		</div>
		<div id="msg104056" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104056">2017.11.24 22:23:22</a></div>
			<div class="msg_body">22:45 пойду к костру</div>
		</div>
		<div id="msg104057" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104057">2017.11.24 22:24:01</a></div>
			<div class="msg_body">Это по твоему времени</div>
		</div>
		<div id="msg104058" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104058">2017.11.24 22:24:14</a></div>
			<div class="msg_body">Просто будем сидеть у костра, погуляем или посидим в домике?</div>
		</div>
		<div id="msg104061" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104061">2017.11.24 22:24:43</a></div>
			<div class="msg_body">+</div>
		</div>
		<div id="msg104062" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104062">2017.11.24 22:24:53</a></div>
			<div class="msg_body">Потом пойдем в лес</div>
		</div>
		<div id="msg104063" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104063">2017.11.24 22:24:57</a></div>
			<div class="msg_body">То биш в сон</div>
		</div>
		<div id="msg104064" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104064">2017.11.24 22:25:10</a></div>
			<div class="msg_body">Интересно, если мы пойдем вместе</div>
		</div>
		<div id="msg104065" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104065">2017.11.24 22:25:31</a></div>
			<div class="msg_body">Эффект может быть лУчшим</div>
		</div>
		<div id="msg104066" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104066">2017.11.24 22:25:36</a></div>
			<div class="msg_body">У нас будет совместный сон?</div>
		</div>
		<div id="msg104069" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104069">2017.11.24 22:25:45</a></div>
			<div class="msg_body">Теоретически может</div>
		</div>
		<div id="msg104071" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104071">2017.11.24 22:26:51</a></div>
			<div class="msg_body">Фишка в том, чтобы опускаться в сон совместно и равномерно. А то я буду наполовину в реале, а ты уже почти во сне</div>
		</div>
		<div id="msg104072" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104072">2017.11.24 22:26:57</a></div>
			<div class="msg_body">Я ведь медленнее вырубаюсь</div>
		</div>
		<div id="msg104073" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104073">2017.11.24 22:27:10</a></div>
			<div class="msg_body">Если пытаюсь делать это осознанно</div>
		</div>
		<div id="msg104091" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104091">2017.11.24 22:33:14</a></div>
			<div class="msg_body">Если мы сумеем удержаться вместе, сохранить осознанность, ну или, по крайней мере, сюжет не разведет нас по разным снам, то да, будет совместный сон. Может даже и контролируемый</div>
		</div>
		<div id="msg104092" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104092">2017.11.24 22:33:42</a></div>
			<div class="msg_body">Надо попробовать</div>
		</div>
		<div id="msg104093" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104093">2017.11.24 22:47:23</a></div>
			<div class="msg_body">Готовлюсь, значит, ко сну, весь такой напряженный, и тут - хоба на!</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_doc"></div> <a target="_blank" href="https://vk.com/doc342042765_454391448?hash=e1e37eef5f38769810&amp;dl=GI2TMOBYGQ4DGMQ:1517551060:60b7c5b2749995a2ab&amp;api=1&amp;no_preview=1">4 приёма для расслабления перед сном11</a></div>
		</div>
		<div id="msg104095" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104095">2017.11.24 22:48:07</a></div>
			<div class="msg_body">Я вчера видела)</div>
		</div>
		<div id="msg104108" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104108">2017.11.24 22:51:49</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/aehxi_gPo6U.jpg">[photo256884832_456239530] (573x470)</div>
		</div>
		<div id="msg104115" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104115">2017.11.24 22:53:30</a></div>
			<div class="msg_body">Го?</div>
		</div>
		<div id="msg104116" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104116">2017.11.24 22:53:55</a></div>
			<div class="msg_body">Не еще пару минуточек</div>
		</div>
		<div id="msg104117" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104117">2017.11.24 22:54:26</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(17).png">Стикер #4324</div>
		</div>
		<div id="msg104118" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104118">2017.11.24 23:01:47</a></div>
			<div class="msg_body">Го</div>
		</div>
		<div id="msg104119" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104119">2017.11.24 23:04:03</a></div>
			<div class="msg_body">Го</div>
		</div><hr>
		<div id="msg104120" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg104120">2017.11.25 06:52:18</a></div>
			<div class="msg_body">Я уже спал</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.24 18:09:22</div>
			<div class="msg_body"> Жаль, Илья к нам не присоединится</div></div></div>
		</div>
		<div id="msg104122" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104122">2017.11.25 09:19:14</a></div>
			<div class="msg_body">Денни</div>
		</div>
		<div id="msg104123" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104123">2017.11.25 09:19:18</a></div>
			<div class="msg_body">Ты тут?</div>
		</div>
		<div id="msg104124" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104124">2017.11.25 09:19:35</a></div>
			<div class="msg_body"><img src="./work with spaces/blank.gif" emoji="D83DDC4D" alt="??" class="emoji_css" style="background-position: 0px -459px;"></div>
		</div>
		<div id="msg104125" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104125">2017.11.25 09:20:20</a></div>
			<div class="msg_body">У меня стойкое ощущение, что у нас все получилось</div>
		</div>
		<div id="msg104126" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104126">2017.11.25 09:20:54</a></div>
			<div class="msg_body">Последнее, что я помню, это как мы стояли у костра держась за руки и готовились ко сну</div>
		</div>
		<div id="msg104127" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104127">2017.11.25 09:21:01</a></div>
			<div class="msg_body">После память вырубило</div>
		</div>
		<div id="msg104128" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104128">2017.11.25 09:21:21</a></div>
			<div class="msg_body">Ты не помнишь, где мы были?</div>
		</div>
		<div id="msg104131" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104131">2017.11.25 09:21:51</a></div>
			<div class="msg_body">С другой стороны костра от домика, немного ближе к темной поляне</div>
		</div>
		<div id="msg104129" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104129">2017.11.25 09:21:23</a></div>
			<div class="msg_body">Ночью я просыпался один раз абсолютно без памяти, а утром вспомнил лишь один левый сон</div>
		</div>
		<div id="msg104130" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104130">2017.11.25 09:21:50</a></div>
			<div class="msg_body">Мы шли через лес потом вышли к заводу...</div>
		</div>
		<div id="msg104132" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104132">2017.11.25 09:22:28</a></div>
			<div class="msg_body">Лан я завтракать</div>
		</div>
		<div id="msg104133" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104133">2017.11.25 09:22:38</a></div>
			<div class="msg_body">Если вспомнишь напишешь</div>
		</div>
		<div id="msg104137" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104137">2017.11.25 09:23:51</a></div>
			<div class="msg_body">Приятного аппетита</div>
		</div>
		<div id="msg104135" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104135">2017.11.25 09:22:53</a></div>
			<div class="msg_body">Вот здесь или около того</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img src="./work with spaces/4Vp4yFCVOPQ.jpg">[photo256884832_456239532] (540x405)</div>
		</div>
		<div id="msg104136" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104136">2017.11.25 09:23:36</a></div>
			<div class="msg_body">Мы здесь выходили из леса</div>
		</div>
		<div id="msg104138" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104138">2017.11.25 09:24:01</a></div>
			<div class="msg_body">Мб</div>
		</div>
		<div id="msg104139" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104139">2017.11.25 09:24:13</a></div>
			<div class="msg_body">У меня до этого момента небольшой провал</div>
		</div>
		<div id="msg104140" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104140">2017.11.25 09:26:47</a></div>
			<div class="msg_body">Я вчера оч сильно волновался</div>
		</div>
		<div id="msg104141" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104141">2017.11.25 09:27:17</a></div>
			<div class="msg_body">Так, как оооочень давно не волновался</div>
		</div>
		<div id="msg104142" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104142">2017.11.25 09:27:30</a></div>
			<div class="msg_body">Пару раз меня на сек выбрасывало</div>
		</div>
		<div id="msg104143" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104143">2017.11.25 09:28:14</a></div>
			<div class="msg_body">Дошло до того, что мне теперь кажется, что я в домике на дереве общался не с тобой, а со своим собственным воображением</div>
		</div>
		<div id="msg104144" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104144">2017.11.25 09:29:06</a></div>
			<div class="msg_body">Я даже хз, могло ли что из такого меня получится<img class="emoji" alt="??" src="./work with spaces/D83DDE15.png"></div>
		</div>
		<div id="msg104145" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104145">2017.11.25 09:38:18</a></div>
			<div class="msg_body">Нет, в домике ты общался со мной)</div>
		</div>
		<div id="msg104146" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104146">2017.11.25 09:38:28</a></div>
			<div class="msg_body">Я тебя даже слышала</div>
		</div>
		<div id="msg104147" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104147">2017.11.25 09:38:41</a></div>
			<div class="msg_body">Правда уже не очень помню о чем мы говорили</div>
		</div>
		<div id="msg104148" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104148">2017.11.25 09:38:52</a></div>
			<div class="msg_body">Я жаловался на волнение</div>
		</div>
		<div id="msg104149" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104149">2017.11.25 09:39:08</a></div>
			<div class="msg_body">А точно</div>
		</div>
		<div id="msg104150" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104150">2017.11.25 09:39:44</a></div>
			<div class="msg_body">Фишка в том, что я в тот момент чувствовал вторую тебя где около темной поляны</div>
		</div>
		<div id="msg104151" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104151">2017.11.25 09:42:31</a></div>
			<div class="msg_body">После домика у меня провал.<br>После я обнаружил себя у шкафа в домике. На полках я увидел предметы, связанные со вселенной assassins creed, что немедленно выбило меня в сон об этой вселенной, но уже через пару сек я усилием воли вернулся в домик.<br>Вышел из него, погулял по полянам, сел на бревно, т.к., казалось, терял концентрацию. Ты села слева, я взял тебя за руку. В течении минуты я почувствовал ее тепло. Провал.<br>Мы стоим, я мысленно убеждаю тебя, что не готов к КС</div>
		</div>
		<div id="msg104152" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104152">2017.11.25 09:42:59</a></div>
			<div class="msg_body">Что мне надо еще глубже погрузиться в пространство костра, сильнее зафиксироваться на нем</div>
		</div>
		<div id="msg104153" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104153">2017.11.25 09:43:43</a></div>
			<div class="msg_body">Потом темнота. Сплошная и непроглядная. Я проснулся ночью, посмотрел на часы - 2:11. Поворочался в постели, снова попытался отойти к костру и вырубился уже до утра</div>
		</div>
		<div id="msg104154" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104154">2017.11.25 09:50:37</a></div>
			<div class="msg_body">Теперь понятно почему ты так странно перемещался по поляне</div>
		</div>
		<div id="msg104155" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104155">2017.11.25 09:50:49</a></div>
			<div class="msg_body">Слева я садилась</div>
		</div>
		<div id="msg104156" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104156">2017.11.25 09:50:51</a></div>
			<div class="msg_body">Меня особо сильно смущала затуманенность взора. Именно взгляд был затуманен</div>
		</div>
		<div id="msg104157" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104157">2017.11.25 09:50:55</a></div>
			<div class="msg_body">Посидела и в лес пошла</div>
		</div>
		<div id="msg104158" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104158">2017.11.25 09:51:08</a></div>
			<div class="msg_body">Вроде ты со мной пошел</div>
		</div>
		<div id="msg104159" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104159">2017.11.25 09:51:18</a></div>
			<div class="msg_body">Я не помню</div>
		</div>
		<div id="msg104160" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104160">2017.11.25 09:51:21</a></div>
			<div class="msg_body">Провал у меня там</div>
		</div>
		<div id="msg104161" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104161">2017.11.25 09:51:42</a></div>
			<div class="msg_body">Это меня выкинуло и я назад зашла</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 09:39:44</div>
			<div class="msg_body"> Фишка в том, что я в тот момент чувствовал вторую тебя где около темной поляны</div>
				</div>
			</div>
		</div>
		<div id="msg104162" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104162">2017.11.25 09:54:05</a></div>
			<div class="msg_body">Мне тут пришла идея добавить кое-что к ПО костра.<br>Просто стоит мне подумать о костре, как он тут же дает отчет обо всем, что там ныне происходит. Думаю, надо сделать так, чтобы он такие отчеты посылал всем</div>
		</div>
		<div id="msg104164" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104164">2017.11.25 09:54:25</a></div>
			<div class="msg_body">Помнится, я еще пару вещей хотел добавить, но забыл<img class="emoji" alt="??" src="./work with spaces/D83DDE15.png"></div>
		</div>
		<div id="msg104163" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104163">2017.11.25 09:54:22</a></div>
			<div class="msg_body">Погодь</div>
		</div>
		<div id="msg104165" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104165">2017.11.25 09:54:34</a></div>
			<div class="msg_body">?</div>
		</div>
		<div id="msg104166" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104166">2017.11.25 09:55:26</a></div>
			<div class="msg_body">Там только рассветает?</div>
		</div>
		<div id="msg104169" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104169">2017.11.25 09:55:51</a></div>
			<div class="msg_body">Я ставил там постоянную ночь</div>
		</div>
		<div id="msg104170" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104170">2017.11.25 09:55:56</a></div>
			<div class="msg_body">Ты вносила изменения?</div>
		</div>
		<a name="outOfMind"></a><h2>Начало сумасшествия</h2>
		<div id="msg104167" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104167">2017.11.25 09:55:33</a></div>
			<div class="msg_body">Странное чувство нереальности происходящего... Я будто бы вообще не выходил из костра или из сна, будто бы не просыпался на самом деле</div>
		</div>
		<div id="msg104168" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104168">2017.11.25 09:55:51</a></div>
			<div class="msg_body">Пошли к костру<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg104171" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104171">2017.11.25 09:56:22</a></div>
			<div class="msg_body">Просто чувство, что да</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 09:55:26</div>
			<div class="msg_body"> Там только рассветает?</div></div></div>
		</div>
		<div id="msg104172" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104172">2017.11.25 09:56:49</a></div>
			<div class="msg_body">Кстати вчера костер сильно горел</div>
		</div>
		<div id="msg104173" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104173">2017.11.25 09:56:56</a></div>
			<div class="msg_body">Я день добавила</div>
		</div>
		<div id="msg104174" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104174">2017.11.25 09:57:05</a></div>
			<div class="msg_body">Он в три раза короче ночи</div>
		</div>
		<div id="msg104175" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104175">2017.11.25 09:57:25</a></div>
			<div class="msg_body">Ясно</div>
		</div>
		<div id="msg104176" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104176">2017.11.25 09:57:38</a></div>
			<div class="msg_body">Не заметил?</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 09:56:49</div>
			<div class="msg_body"> Кстати вчера костер сильно горел</div></div></div>
		</div>
		<div id="msg104177" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104177">2017.11.25 09:57:53</a></div>
			<div class="msg_body">Или это только мне показалось?</div>
		</div>
		<div id="msg104178" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104178">2017.11.25 09:58:08</a></div>
			<div class="msg_body">Моя связь с костром сегодня сильнее, чем обычно. Чувство, что я могу туда зайти мгновенно, как только подумаю</div>
		</div>
		<div id="msg104179" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104179">2017.11.25 09:58:26</a></div>
			<div class="msg_body">Помню, он разгорался</div>
		</div>
		<div id="msg104180" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104180">2017.11.25 09:58:51</a></div>
			<div class="msg_body">Да, точно, он больше и ярче был</div>
		</div>
		<div id="msg104181" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104181">2017.11.25 09:58:57</a></div>
			<div class="msg_body">Сейчас тусклее</div>
		</div>
		<div id="msg104182" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104182">2017.11.25 09:59:23</a></div>
			<div class="msg_body">Я к костру</div>
		</div>
		<div id="msg104183" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104183">2017.11.25 09:59:37</a></div>
			<div class="msg_body">Ну ок, я за тобой</div>
		</div>
		<div id="msg104185" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104185">2017.11.25 10:13:36</a></div>
			<div class="msg_body">Денни</div>
		</div>
		<div id="msg104186" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104186">2017.11.25 10:13:43</a></div>
			<div class="msg_body">Ты тута?</div>
		</div>
		<div id="msg104187" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104187">2017.11.25 10:16:14</a></div>
			<div class="msg_body">Ага</div>
		</div>
		<div id="msg104188" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104188">2017.11.25 10:16:34</a></div>
			<div class="msg_body">В самом начале я с тобой разговаривал</div>
		</div>
		<div id="msg104189" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104189">2017.11.25 10:16:38</a></div>
			<div class="msg_body">Помнишь, о чем?</div>
		</div>
		<div id="msg104190" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104190">2017.11.25 10:17:13</a></div>
			<div class="msg_body">Ну, как разговаривал. Задал вопрос, получил ответ, а потом просто донес информацию</div>
		</div>
		<div id="msg104191" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104191">2017.11.25 10:17:18</a></div>
			<div class="msg_body">И ты ушла что-то делать</div>
		</div>
		<div id="msg104192" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104192">2017.11.25 10:17:22</a></div>
			<div class="msg_body">Когда мы были в домике?</div>
		</div>
		<div id="msg104193" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104193">2017.11.25 10:17:42</a></div>
			<div class="msg_body">Нас было трое</div>
		</div>
		<div id="msg104194" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104194">2017.11.25 10:17:57</a></div>
			<div class="msg_body">Не, мы стояли снизу у лестницы, ты пошла вокруг костра, я за тобой</div>
		</div>
		<div id="msg104195" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104195">2017.11.25 10:18:05</a></div>
			<div class="msg_body">Потом я тебя буквально потерял</div>
		</div>
		<div id="msg104196" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104196">2017.11.25 10:18:30</a></div>
			<div class="msg_body">Искал-искал, звал-звал. Только потом обнаружил оч тусклую тень кого-то в домике</div>
		</div>
		<div id="msg104197" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104197">2017.11.25 10:18:41</a></div>
			<div class="msg_body">Я третьего не видел...</div>
		</div>
		<div id="msg104198" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104198">2017.11.25 10:19:23</a></div>
			<div class="msg_body">Только потом до меня дошло, что ты не была в теле, а равномерно распределена по пространству. Было такое?</div>
		</div>
		<div id="msg104199" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104199">2017.11.25 10:19:36</a></div>
			<div class="msg_body">Было</div>
		</div>
		<div id="msg104200" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104200">2017.11.25 10:19:48</a></div>
			<div class="msg_body">Я тогда третьего и обнаружила</div>
		</div>
		<div id="msg104201" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104201">2017.11.25 10:20:08</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"></div>
		</div>
		<div id="msg104202" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104202">2017.11.25 10:20:54</a></div>
			<div class="msg_body">А в домике я сказал этому кому-то "ты какая-то тусклая..."</div>
		</div>
		<div id="msg104203" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104203">2017.11.25 10:22:10</a></div>
			<div class="msg_body">А в начале я спросил, что ты будешь делать. Услышал "Экспериментировать". Далее я как бы мимолетом сказал "Я сегодня в колледже, но все равно буду с тобой. Кажется, я сейчас могу находиться одновременно и у костра, и в реале"</div>
		</div>
		<div id="msg104204" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104204">2017.11.25 10:25:16</a></div>
			<div class="msg_body">Про экспериментировать было, только я сказала</div>
		</div>
		<div id="msg104205" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104205">2017.11.25 10:25:20</a></div>
			<div class="msg_body">У костра кто-то сидит</div>
		</div>
		<div id="msg104206" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104206">2017.11.25 10:25:30</a></div>
			<div class="msg_body">Про колледж не слышала</div>
		</div>
		<div id="msg104207" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104207">2017.11.25 10:26:06</a></div>
			<div class="msg_body">А тусклая, так как случайно при заходе сильно напортачила и много сил ушло на исправление</div>
		</div>
		<div id="msg104208" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104208">2017.11.25 10:26:23</a></div>
			<div class="msg_body">Этот кто-то нас с тобой знает</div>
		</div>
		<div id="msg104209" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104209">2017.11.25 10:26:31</a></div>
			<div class="msg_body">Ибо он с нами разговаривал</div>
		</div>
		<div id="msg104210" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104210">2017.11.25 10:26:35</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(8).png">Стикер #49</div>
		</div>
		<div id="msg104211" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104211">2017.11.25 10:26:59</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 10:26:06</div>
			<div class="msg_body"> А тусклая, так как случайно при заходе сильно напортачила и много сил ушло на исправление</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 10:26:35</div>
			<div class="msg_body"> </div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(8).png">Стикер #49</div></div></div>
		</div>
		<div id="msg104212" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104212">2017.11.25 10:27:09</a></div>
			<div class="msg_body">Не слышал</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 10:26:23</div>
			<div class="msg_body"> Этот кто то нас с тобой знает</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 10:26:31</div>
			<div class="msg_body"> Ибо он с нами разговаривал</div></div></div>
		</div>
		<div id="msg104213" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104213">2017.11.25 10:29:14</a></div>
			<div class="msg_body">Он действительно разговаривает!</div>
		</div>
		<div id="msg104214" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104214">2017.11.25 10:29:22</a></div>
			<div class="msg_body">Но я не могу ничего разобрать</div>
		</div>
		<div id="msg104215" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104215">2017.11.25 10:31:56</a></div>
			<div class="msg_body">Я когда из дома к костру ушла (ты вроде со мной был) он потом тоже вышел и такой: ребят ну х#ли вы бегаете от меня</div>
		</div>
		<div id="msg104216" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104216">2017.11.25 10:32:18</a></div>
			<div class="msg_body">Потом когда мы были в доме он пытался телек включить</div>
		</div>
		<div id="msg104217" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104217">2017.11.25 10:32:26</a></div>
			<div class="msg_body">Но не смог</div>
		</div>
		<div id="msg104218" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104218">2017.11.25 10:32:37</a></div>
			<div class="msg_body">Ибо телевизор не расчитан на это</div>
		</div>
		<div id="msg104219" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104219">2017.11.25 10:32:40</a></div>
			<div class="msg_body">Так сказать мог только один человек<img class="emoji" alt="??" src="./work with spaces/D83EDD23.png"></div>
		</div>
		<div id="msg104220" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104220">2017.11.25 10:33:01</a></div>
			<div class="msg_body">Я тогда тоже об этом подумала<img src="./work with spaces/blank.gif" emoji="D83DDE0F" alt="??" class="emoji_css" style="background-position: 0px -153px;"></div>
		</div>
		<div id="msg104221" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104221">2017.11.25 10:33:06</a></div>
			<div class="msg_body">Но мало ли</div>
		</div>
		<div id="msg104222" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104222">2017.11.25 10:33:47</a></div>
			<div class="msg_body">А ну колитесь</div>
		</div>
		<div id="msg104223" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104223">2017.11.25 10:33:53</a></div>
			<div class="msg_body">Кто был на костре?</div>
		</div>
		<div id="msg104224" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104224">2017.11.25 10:34:33</a></div>
			<div class="msg_body">Только что (30 минут назад)</div>
		</div>
		<div id="msg104225" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104225">2017.11.25 10:35:06</a></div>
			<div class="msg_body">Мне кажется или на поляне время быстрее идет?</div>
		</div>
		<div id="msg104226" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104226">2017.11.25 10:35:36</a></div>
			<div class="msg_body">Там события быстрее идут</div>
		</div>
		<div id="msg104227" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104227">2017.11.25 10:35:46</a></div>
			<div class="msg_body">Думаю, это следствие меня</div>
		</div>
		<div id="msg104228" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104228">2017.11.25 10:36:05</a></div>
			<div class="msg_body">Я когда визуализирую из-за большой скорости мысли живу 5 минут за одну</div>
		</div>
		<div id="msg104229" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104229">2017.11.25 10:37:31</a></div>
			<div class="msg_body">А я думала, что это у меня проблемы<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg104231" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104231">2017.11.25 10:37:52</a></div>
			<div class="msg_body">Типо нетерпится вот и ускоряю события</div>
		</div>
		<div id="msg104232" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104232">2017.11.25 10:38:02</a></div>
			<div class="msg_body">Еще ругала себя за это</div>
		</div>
		<div id="msg104233" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104233">2017.11.25 10:38:12</a></div>
			<div class="msg_body">А оказывается это все ты<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg104234" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104234">2017.11.25 10:42:12</a></div>
			<div class="msg_body">?\_(?)_/?</div>
		</div>
		<div id="msg104247" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104247">2017.11.25 11:30:11</a></div>
			<div class="msg_body">Дори.<br>Вот смотри.<br>Вечером легче засыпать, но труднее фиксироваться на костре.<br>Утром легче фиксироваться на костре, запоминать сны, но засыпать тяжелее.<br>Может попробуем еще завтра с утра зайти в КС через костер? Сможешь?<br>По идее, можно даже поставить будильник, скажем, на 5-6 утра, списаться тут и уйти. Так, по идее, проблема с засыпанием сгладится и на КС останется время</div>
		</div>
		<div id="msg104249" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104249">2017.11.25 11:41:27</a></div>
			<div class="msg_body">Давай</div>
		</div>
		<div id="msg104250" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104250">2017.11.25 11:41:30</a></div>
			<div class="msg_body">Я за</div>
		</div>
		<div id="msg104289" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104289">2017.11.25 12:12:42</a></div>
			<div class="msg_body">Всем привет</div>
		</div>
		<div id="msg104290" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104290">2017.11.25 12:14:51</a></div>
			<div class="msg_body">Привет</div>
		</div>
		<div id="msg104291" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104291">2017.11.25 12:15:13</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(18).png">Стикер #4323</div>
		</div>
		<div id="msg104292" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104292">2017.11.25 12:19:35</a></div>
			<div class="msg_body">Был рядом. У костра, Дарина, возможно слышал тебя</div>
		</div>
		<div id="msg104293" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104293">2017.11.25 12:19:53</a></div>
			<div class="msg_body">Почти рядом</div>
		</div>
		<div id="msg104294" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104294">2017.11.25 12:20:07</a></div>
			<div class="msg_body">Сегодня утром?</div>
		</div>
		<div id="msg104296" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104296">2017.11.25 12:20:33</a></div>
			<div class="msg_body">Мои 2:30</div>
		</div>
		<div id="msg104295" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104295">2017.11.25 12:20:13</a></div>
			<div class="msg_body">Но где-то в сорняках сухих</div>
		</div>
		<div id="msg104299" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104299">2017.11.25 12:21:51</a></div>
			<div class="msg_body">Прям вот костер метров в 15 стоял</div>
		</div>
		<div id="msg104300" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104300">2017.11.25 12:22:15</a></div>
			<div class="msg_body">Потом кто-то прописал мне по лбу шелбан</div>
		</div>
		<div id="msg104301" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104301">2017.11.25 12:23:39</a></div>
			<div class="msg_body">Сравнимо так</div>
		</div>
		<div id="msg104302" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104302">2017.11.25 12:23:53</a></div>
			<div class="msg_body">Потом будто Дарину слышал</div>
		</div>
		<div id="msg104303" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104303">2017.11.25 12:26:14</a></div>
			<div class="msg_body">Не понял, помню, что спросил ты или не ты, в ответ протяжно: да-а. Но щелчок в лбу выбил на секунду из понимания</div>
		</div>
		<div id="msg104306" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104306">2017.11.25 12:28:20</a></div>
			<div class="msg_body">И все, потом дневные мысли утопили в бездну</div>
		</div>
		<div id="msg104307" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104307">2017.11.25 12:28:47</a></div>
			<div class="msg_body">Я рядом уже</div>
		</div>
		<div id="msg104308" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104308">2017.11.25 12:29:15</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83DDE01.png"></div>
		</div>
		<div id="msg104310" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104310">2017.11.25 12:29:26</a></div>
			<div class="msg_body">Всем хорошего дня</div>
		</div>
		<div id="msg104333" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104333">2017.11.25 12:38:08</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:28:00</div>
			<div class="msg_body"> Слушай</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:28:17</div>
			<div class="msg_body"> Ты же сегодня из сна в костер попал?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:29:38</div>
			<div class="msg_body"> Я из реала заходил</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:29:48</div>
			<div class="msg_body"> А в снах ничего подобного не видел</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:29:59</div>
			<div class="msg_body"> Мог, конечно, но тогда не помню</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:30:24</div>
			<div class="msg_body"> Просто может кто-то из нас кого-нибудь притащил с собой</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:30:30</div>
			<div class="msg_body"> Я про обитателей сна</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:30:53</div>
			<div class="msg_body">???</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:31:50</div>
			<div class="msg_body"> Впрочем, сегодня, программируя костер, я почувствовал что-то неладное</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:32:06</div>
			<div class="msg_body"> Просто этот щелчок по лбу</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:32:16</div>
			<div class="msg_body"> Будто там кто-то есть, но бестелесный, будто даже не человек</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:32:18</div>
			<div class="msg_body"> Да и с Денисом я не говорила</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:33:05</div>
			<div class="msg_body"> Можно было бы сослать на неправильно среагировавшую ловушку</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:33:18</div>
			<div class="msg_body"> Но он был слишком далеко от костра</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:33:27</div>
			<div class="msg_body"> Да и ловушек таких не было</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:33:39</div>
			<div class="msg_body"> Поэтому я пришла к таким выводам</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:34:21</div>
			<div class="msg_body"> Фишка в том, что зайти на костер может кто угодно, кто знает о его существовании - я не в силах этого запретить. В том числе и обитатели сна, им это сделать даже проще, чем обитателям реала</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:36:12</div>
			<div class="msg_body"> Я пару дней назад накачал костер энергией</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:36:28</div>
			<div class="msg_body"> Может, это и привлекло этого неизвестного?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 12:36:41</div>
			<div class="msg_body"> Они любят такой энергией лакомиться</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 12:37:05</div>
			<div class="msg_body"> Может быть</div>
				</div>
			</div>
		</div>
		<div id="msg104341" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104341">2017.11.25 12:42:46</a></div>
			<div class="msg_body">Это скорее всего спрайт</div>
		</div>
		<div id="msg104342" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104342">2017.11.25 12:42:51</a></div>
			<div class="msg_body">Может быть страж</div>
		</div>
		<div id="msg104344" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104344">2017.11.25 12:42:57</a></div>
			<div class="msg_body">Или даже лазутчик</div>
		</div>
		<div id="msg104347" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104347">2017.11.25 12:43:14</a></div>
			<div class="msg_body">-</div>
		</div>
		<div id="msg104350" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104350">2017.11.25 12:43:24</a></div>
			<div class="msg_body">?</div>
		</div>
		<div id="msg104352" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104352">2017.11.25 12:43:31</a></div>
			<div class="msg_body">Хотя, лазутчик имеет право быть</div>
		</div>
		<div id="msg104353" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104353">2017.11.25 12:43:58</a></div>
			<div class="msg_body">Видов нео чертовски много</div>
		</div>
		<div id="msg104354" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104354">2017.11.25 12:44:05</a></div>
			<div class="msg_body">Мы так просто это не выясним</div>
		</div>
		<div id="msg104356" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104356">2017.11.25 12:47:27</a></div>
			<div class="msg_body">Нити Ариадны</div>
		</div>
		<div id="msg104357" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104357">2017.11.25 12:48:05</a></div>
			<div class="msg_body">?</div>
		</div>
		<div id="msg104360" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104360">2017.11.25 12:50:36</a></div>
			<div class="msg_body">Сначала Вы. Вы оба объясните про щелчек.</div>
		</div>
		<div id="msg104361" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104361">2017.11.25 12:50:50</a></div>
			<div class="msg_body">Почему сразу такая реакция</div>
		</div>
		<div id="msg104362" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104362">2017.11.25 12:51:04</a></div>
			<div class="msg_body">Это в стиле нео</div>
		</div>
		<div id="msg104363" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104363">2017.11.25 12:51:37</a></div>
			<div class="msg_body">Так отвлекают внимание?</div>
		</div>
		<div id="msg104364" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104364">2017.11.25 12:51:46</a></div>
			<div class="msg_body">Я хз</div>
		</div>
		<div id="msg104365" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104365">2017.11.25 12:52:11</a></div>
			<div class="msg_body">Может, у них юмор такой, может, подражают людям, все что угодно может</div>
		</div>
		<div id="msg104366" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104366">2017.11.25 12:52:12</a></div>
			<div class="msg_body">Просто во сне желательно ни с кем не контактировать</div>
		</div>
		<div id="msg104367" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104367">2017.11.25 12:53:14</a></div>
			<div class="msg_body">Да и в виртуальных пространствах, и в реале тоже</div>
		</div>
		<div id="msg104368" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104368">2017.11.25 12:53:22</a></div>
			<div class="msg_body">Я слышал за сорняками голос, говорил он: не переживай........ да рядом же..........	  Я подумал что ты это Дарина, и спросил ты или нет</div>
		</div>
		<div id="msg104369" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104369">2017.11.25 12:53:48</a></div>
			<div class="msg_body">Ну такие фразы могли иметь место</div>
		</div>
		<div id="msg104371" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104371">2017.11.25 12:54:03</a></div>
			<div class="msg_body">Сначала я услышал</div>
		</div>
		<div id="msg104372" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104372">2017.11.25 12:54:24</a></div>
			<div class="msg_body">Потом только я себя обозначил</div>
		</div>
		<div id="msg104373" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104373">2017.11.25 12:54:27</a></div>
			<div class="msg_body">Ты скажи толком, сколько времени было в Москве, когда ты был у костра?</div>
		</div>
		<div id="msg104374" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104374">2017.11.25 12:55:03</a></div>
			<div class="msg_body">В 2.00 свернул жалюзи</div>
		</div>
		<div id="msg104375" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104375">2017.11.25 12:55:32</a></div>
			<div class="msg_body">Значит где-то 4:00 по твоему, Денни</div>
		</div>
		<div id="msg104377" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104377">2017.11.25 12:55:48</a></div>
			<div class="msg_body">Т.е. мы уже спали (5:00 по моему)</div>
		</div>
		<div id="msg104378" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104378">2017.11.25 12:55:57</a></div>
			<div class="msg_body">И оч глубоко спали</div>
		</div>
		<div id="msg104379" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104379">2017.11.25 12:56:01</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg104380" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104380">2017.11.25 12:56:09</a></div>
			<div class="msg_body">Минут 15 на рисование по описанию</div>
		</div>
		<div id="msg104385" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104385">2017.11.25 12:57:02</a></div>
			<div class="msg_body">Пум-пум-пум</div>
		</div>
		<div id="msg104386" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104386">2017.11.25 12:57:10</a></div>
			<div class="msg_body">А не проще пойти и спросить Его?</div>
		</div>
		<div id="msg104388" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104388">2017.11.25 12:57:45</a></div>
			<div class="msg_body">Проще</div>
		</div>
		<div id="msg104394" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104394">2017.11.25 12:59:31</a></div>
			<div class="msg_body">Противоположная сторона от домика метра 2-3 углубляясь в лес</div>
		</div>
		<div id="msg104395" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104395">2017.11.25 12:59:34</a></div>
			<div class="msg_body">Проверь</div>
		</div>
		<div id="msg104396" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104396">2017.11.25 12:59:42</a></div>
			<div class="msg_body">Там кажется кто-то есть</div>
		</div>
		<div id="msg104397" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104397">2017.11.25 13:00:36</a></div>
			<div class="msg_body">Денни, почему у меня осень?</div>
		</div>
		<div id="msg104399" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104399">2017.11.25 13:00:48</a></div>
			<div class="msg_body">Два часа назад зеленая трава была</div>
		</div>
		<div id="msg104398" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104398">2017.11.25 13:00:47</a></div>
			<div class="msg_body">Кто-то оч плотный</div>
		</div>
		<div id="msg104400" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104400">2017.11.25 13:01:00</a></div>
			<div class="msg_body">Раз в пять плотнее меня или тебя</div>
		</div>
		<div id="msg104401" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104401">2017.11.25 13:01:10</a></div>
			<div class="msg_body">Там не было травы</div>
		</div>
		<div id="msg104402" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104402">2017.11.25 13:01:10</a></div>
			<div class="msg_body">у меня осень была</div>
		</div>
		<div id="msg104403" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104403">2017.11.25 13:01:20</a></div>
			<div class="msg_body">Я ставил голую твердую почву</div>
		</div>
		<div id="msg104404" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104404">2017.11.25 13:01:26</a></div>
			<div class="msg_body">С небольшими камешками</div>
		</div>
		<div id="msg104405" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104405">2017.11.25 13:01:49</a></div>
			<div class="msg_body">Сухие высокие по колено стебли трав</div>
		</div>
		<div id="msg104406" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104406">2017.11.25 13:02:02</a></div>
			<div class="msg_body">Но по листьям - да, осень. Вернее, их там нет вообще. И не было</div>
		</div>
		<div id="msg104407" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104407">2017.11.25 13:02:14</a></div>
			<div class="msg_body">+</div>
		</div>
		<div id="msg104408" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104408">2017.11.25 13:03:07</a></div>
			<div class="msg_body">Но у меня ночной осенний лес. Не верно?</div>
		</div>
		<div id="msg104409" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104409">2017.11.25 13:03:38</a></div>
			<div class="msg_body">У меня тоже ночь</div>
		</div>
		<div id="msg104410" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104410">2017.11.25 13:03:52</a></div>
			<div class="msg_body">Но в 10 утра в реале по моему времени был рассвет</div>
		</div>
		<div id="msg104411" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104411">2017.11.25 13:04:10</a></div>
			<div class="msg_body">По данным Дарины, день должен длиться 6 часов</div>
		</div>
		<div id="msg104412" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104412">2017.11.25 13:04:26</a></div>
			<div class="msg_body">Этот кто-то проигнорировал вопрос "Кто ты?"</div>
		</div>
		<div id="msg104413" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104413">2017.11.25 13:07:54</a></div>
			<div class="msg_body">У меня еще день</div>
		</div>
		<div id="msg104414" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104414">2017.11.25 13:15:44</a></div>
			<div class="msg_body">Пытался на рисовать</div>
		</div>
		<div id="msg104415" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104415">2017.11.25 13:15:48</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg104416" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104416">2017.11.25 13:16:01</a></div>
			<div class="msg_body">Не дошел и 15 метров</div>
		</div>
		<div id="msg104417" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104417">2017.11.25 13:17:18</a></div>
			<div class="msg_body">Было намерение, настрой дойти до костра, после щелчка лавина дневных мыслей настигла меня</div>
		</div>
		<div id="msg104418" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104418">2017.11.25 13:18:36</a></div>
			<div class="msg_body">Еще мысли такие..... как специально, после которых забыться хочется</div>
		</div>
		<div id="msg104419" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104419">2017.11.25 13:19:35</a></div>
			<div class="msg_body">А дать отпор?</div>
		</div>
		<div id="msg104420" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104420">2017.11.25 13:19:51</a></div>
			<div class="msg_body">Не-не-не</div>
		</div>
		<div id="msg104421" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104421">2017.11.25 13:20:10</a></div>
			<div class="msg_body">Ни в коем случае</div>
		</div>
		<div id="msg104422" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104422">2017.11.25 13:21:23</a></div>
			<div class="msg_body">Выманить?</div>
		</div>
		<div id="msg104423" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104423">2017.11.25 13:21:56</a></div>
			<div class="msg_body">Я с ним пообщался. Щас просто не могу отписаться</div>
		</div>
		<div id="msg104424" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104424">2017.11.25 13:21:59</a></div>
			<div class="msg_body">С родаками срусь</div>
		</div>
		<div id="msg104425" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104425">2017.11.25 13:22:38</a></div>
			<div class="msg_body">Я никого не вижу</div>
		</div>
		<div id="msg104426" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104426">2017.11.25 13:22:49</a></div>
			<div class="msg_body">У нас недостача после закупки 200р</div>
		</div>
		<div id="msg104427" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104427">2017.11.25 13:23:15</a></div>
			<div class="msg_body">Ща на комп сяду, напишу</div>
		</div>
		<div id="msg104428" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104428">2017.11.25 13:30:06</a></div>
			<div class="msg_body">- Кто ты?<br>Молчание.<br>- Ты меняешь настройки пространства?<br>- Да.<br>- Зачем?<br>- Хочу/- Вам не надо менять настройки.<br>- Хочешь?<br>- Не столько, сколько вам не нужно больше менять пространство.<br>- Почему? Это наше пространство, мы делаем с ним все, что хотим.<br>Добродушный смешок.<br>- Ты будешь нам вредить?<br>- Вряд ли.<br>- Ты будешь нам помогать?<br>- Возможно.<br>- За сделку?<br>- Да.<br>- Ты сможешь уйти, если я попрошу?<br>- Да.<br>- Ты уйдешь, если я попрошу?<br>- Наверное.<br>- Почему ты пришел? Тебя привлекла энергия этого пространства?<br>- А еще ваша деятельность.<br>- Что мы можем тебе дать? <br>- Светимость, энергию, жилье.<br>- Ты сейчас пытаешься принять человеческую форму?<br>- Да.</div>
		</div>
		<div id="msg104436" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104436">2017.11.25 13:33:38</a></div>
			<div class="msg_body">я видел его лицо. мужское, невнятного возраста, в нескольких больших морщинах, странно улыбающееся</div>
		</div>
		<div id="msg104437" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104437">2017.11.25 13:33:50</a></div>
			<div class="msg_body">волосы русые</div>
		</div>
		<div id="msg104438" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104438">2017.11.25 13:34:21</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(19).png">Стикер #1932</div>
		</div>
		<div id="msg104439" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104439">2017.11.25 13:34:35</a></div>
			<div class="msg_body">в костре будто много пустого места осталось после его ухода</div>
		</div>
		<div id="msg104440" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104440">2017.11.25 13:34:35</a></div>
			<div class="msg_body">Мои волосы спер</div>
		</div>
		<div id="msg104441" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104441">2017.11.25 13:35:07</a></div>
			<div class="msg_body">=)</div>
		</div>
		<div id="msg104442" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104442">2017.11.25 13:35:19</a></div>
			<div class="msg_body">Плагиатчик</div>
		</div>
		<div id="msg104443" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104443">2017.11.25 13:35:22</a></div>
			<div class="msg_body">однако... на определенном этапе мне стало казаться, что у меня катушки едут</div>
		</div>
		<div id="msg104444" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104444">2017.11.25 13:35:48</a></div>
			<div class="msg_body">стрижка короткая, бокс или полубокс</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 13:33:50</div>
			<div class="msg_body"> волосы русые</div>
				</div>
			</div>
		</div>
		<div id="msg104451" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104451">2017.11.25 13:37:00</a></div>
			<div class="msg_body">так что... как-то я не доверяю самому себе</div>
		</div>
		<div id="msg104508" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104508">2017.11.25 13:47:06</a></div>
			<div class="msg_body">вспомнил еще кое-что:<br>- Ты же понимаешь, что мы неопытные маги, не общались с вашим родом. Да мы даже не знаем, кто ты! И мы боимся. Ты нам мешаешь.<br>- Так надо было защиту поставить.<br>- Разве это возможно?<br>- Конечно. В мире возможно все, сам же знаешь.<br>и именно после этого у меня катушки совсем съехали</div>
		</div>
		<div id="msg104516" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104516">2017.11.25 13:53:07</a></div>
			<div class="msg_body">Он там в Дениса "вселяться" не собирается?<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 13:33:00</div>
			<div class="msg_body"> - Ты сейчас пытаешься принять человеческую форму?<br>- Да.</div></div></div>
		</div>
		<div id="msg104517" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104517">2017.11.25 13:53:16</a></div>
			<div class="msg_body">нет</div>
		</div>
		<div id="msg104518" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104518">2017.11.25 13:53:30</a></div>
			<div class="msg_body">он именно подстраивал свой внешний вид по человека</div>
		</div>
		<div id="msg104519" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104519">2017.11.25 13:53:42</a></div>
			<div class="msg_body">какие-то общие черты у него с Денисом были</div>
		</div>
		<div id="msg104520" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104520">2017.11.25 13:53:51</a></div>
			<div class="msg_body">но это определенно разные личности</div>
		</div>
		<div id="msg104521" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104521">2017.11.25 13:54:17</a></div>
			<div class="msg_body">может, если Денис постареет, пройдет армию и станет маньяком в Питере, то будет как он</div>
		</div>
		<div id="msg104522" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104522">2017.11.25 13:54:23</a></div>
			<div class="msg_body">Без эмоджи со смехом я бы шас убежал</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 13:53:07</div>
			<div class="msg_body"> Он там в Дениса "вселяться" не собирается?<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 13:33:00</div>
			<div class="msg_body"> - Ты сейчас пытаешься принять человеческую форму?<br>- Да.</div>
				</div>
					</div>
				</div>
			</div>
		</div>
		<div id="msg104523" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104523">2017.11.25 13:54:28</a></div>
			<div class="msg_body">=)</div>
		</div>
		<div id="msg104524" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104524">2017.11.25 13:54:57</a></div>
			<div class="msg_body">Тихо-тихо</div>
		</div>
		<div id="msg104525" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104525">2017.11.25 13:55:02</a></div>
			<div class="msg_body">ребят полегче</div>
		</div>
		<div id="msg104527" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104527">2017.11.25 13:56:05</a></div>
			<div class="msg_body">Против моей воли никто не сможет овладеть рассудком моим, кроме родителей и правительства</div>
		</div>
		<div id="msg104534" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104534">2017.11.25 13:57:41</a></div>
			<div class="msg_body">Дори</div>
		</div>
		<div id="msg104537" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104537">2017.11.25 13:57:52</a></div>
			<div class="msg_body">а ю зе?</div>
		</div>
		<div id="msg104541" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104541">2017.11.25 14:02:13</a></div>
			<div class="msg_body">Илюш</div>
		</div>
		<div id="msg104542" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104542">2017.11.25 14:02:14</a></div>
			<div class="msg_body">Ильяс</div>
		</div>
		<div id="msg104543" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104543">2017.11.25 14:02:17</a></div>
			<div class="msg_body">Ильяча</div>
		</div>
		<div id="msg104544" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104544">2017.11.25 14:02:39</a></div>
			<div class="msg_body">я<br>gey<br>mer</div>
		</div>
		<div id="msg104545" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104545">2017.11.25 14:02:41</a></div>
			<div class="msg_body">але</div>
		</div>
		<div id="msg104546" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104546">2017.11.25 14:02:44</a></div>
			<div class="msg_body">ты тута?</div>
		</div>
		<div id="msg104552" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104552">2017.11.25 14:04:19</a></div>
			<div class="msg_body">Дори</div>
		</div>
		<div id="msg104553" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104553">2017.11.25 14:04:21</a></div>
			<div class="msg_body">а ты?</div>
		</div>
		<div id="msg104554" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104554">2017.11.25 14:04:40</a></div>
			<div class="msg_body">да че ж никого нет то!!!</div>
		</div>
		<div id="msg104555" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104555">2017.11.25 14:05:26</a></div>
			<div class="msg_body">.....</div>
		</div>
		<div id="msg104556" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104556">2017.11.25 14:05:39</a></div>
			<div class="msg_body">ты не в счет</div>
		</div>
		<div id="msg104557" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104557">2017.11.25 14:06:26</a></div>
			<div class="msg_body">ты же не начинаешь отрицать мое сущевствование?</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 14:04:40</div>
			<div class="msg_body"> да че ж никого нет то!!!</div></div></div>
		</div>
		<div id="msg104558" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104558">2017.11.25 14:06:31</a></div>
			<div class="msg_body">=)</div>
		</div>
		<div id="msg104559" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104559">2017.11.25 14:06:40</a></div>
			<div class="msg_body">неа</div>
		</div>
		<div id="msg104560" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104560">2017.11.25 14:06:53</a></div>
			<div class="msg_body">Все.... Мой Загон</div>
		</div>
		<div id="msg104561" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104561">2017.11.25 14:07:08</a></div>
			<div class="msg_body">просто мне нужны либо Илья, либо Дарина</div>
		</div>
		<div id="msg104562" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104562">2017.11.25 14:07:13</a></div>
			<div class="msg_body">с тобой я уже поболтал</div>
		</div>
		<div id="msg104563" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104563">2017.11.25 14:07:18</a></div>
			<div class="msg_body">теперь мне нужны они</div>
		</div>
		<div id="msg104564" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104564">2017.11.25 14:07:22</a></div>
			<div class="msg_body">а их никого нет</div>
		</div>
		<div id="msg104565" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104565">2017.11.25 14:07:32</a></div>
			<div class="msg_body">Алеееее</div>
		</div>
		<div id="msg104566" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104566">2017.11.25 14:07:35</a></div>
			<div class="msg_body">но вк - сволочь такая - пишет их как в сети</div>
		</div>
		<div id="msg104567" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104567">2017.11.25 14:07:36</a></div>
			<div class="msg_body">Я тута!!!</div>
		</div>
		<div id="msg104568" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104568">2017.11.25 14:07:37</a></div>
			<div class="msg_body">она не бросит</div>
		</div>
		<div id="msg104569" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104569">2017.11.25 14:07:42</a></div>
			<div class="msg_body">о</div>
		</div>
		<div id="msg104570" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104570">2017.11.25 14:07:48</a></div>
			<div class="msg_body">Вк лагает</div>
		</div>
		<div id="msg104571" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104571">2017.11.25 14:07:50</a></div>
			<div class="msg_body">ну, чаво думаешь?</div>
		</div>
		<div id="msg104572" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104572">2017.11.25 14:07:57</a></div>
			<div class="msg_body">по моему интервью</div>
		</div>
		<div id="msg104573" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104573">2017.11.25 14:08:17</a></div>
			<div class="msg_body">Пусть пока остается</div>
		</div>
		<div id="msg104574" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104574">2017.11.25 14:08:21</a></div>
			<div class="msg_body">Понаблюдаем</div>
		</div>
		<div id="msg104575" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104575">2017.11.25 14:08:32</a></div>
			<div class="msg_body">Надо узнать про сделку</div>
		</div>
		<div id="msg104576" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104576">2017.11.25 14:08:42</a></div>
			<div class="msg_body">я бы не советовал</div>
		</div>
		<div id="msg104578" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104578">2017.11.25 14:08:45</a></div>
			<div class="msg_body">И энергию в костер пока не кидаем</div>
		</div>
		<div id="msg104577" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104577">2017.11.25 14:08:44</a></div>
			<div class="msg_body">но он ушел</div>
		</div>
		<div id="msg104579" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104579">2017.11.25 14:08:45</a></div>
			<div class="msg_body">уже</div>
		</div>
		<div id="msg104580" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104580">2017.11.25 14:08:50</a></div>
			<div class="msg_body">Нет</div>
		</div>
		<div id="msg104581" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104581">2017.11.25 14:08:57</a></div>
			<div class="msg_body">Я его чувствую</div>
		</div>
		<div id="msg104582" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104582">2017.11.25 14:09:02</a></div>
			<div class="msg_body">где?</div>
		</div>
		<div id="msg104583" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104583">2017.11.25 14:10:17</a></div>
			<div class="msg_body">В лесу</div>
		</div>
		<div id="msg104584" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104584">2017.11.25 14:10:45</a></div>
			<div class="msg_body">там же?</div>
		</div>
		<div id="msg104585" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104585">2017.11.25 14:12:29</a></div>
			<div class="msg_body">Нет</div>
		</div>
		<div id="msg104586" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104586">2017.11.25 14:12:32</a></div>
			<div class="msg_body">Дальше</div>
		</div>
		<div id="msg104589" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104589">2017.11.25 14:12:54</a></div>
			<div class="msg_body">Я была посреди поляны и точно ощущала его взгляд на затылке</div>
		</div>
		<div id="msg104590" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104590">2017.11.25 14:13:08</a></div>
			<div class="msg_body">Он не захотел общаться</div>
		</div>
		<div id="msg104615" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104615">2017.11.25 14:18:41</a></div>
			<div class="msg_body">Денни</div>
		</div>
		<div id="msg104622" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104622">2017.11.25 14:21:19</a></div>
			<div class="msg_body">- Почему не хотел выходить на контакт?<br>- Наблюдал.<br>- За мной?<br>- За костром.<br>- Зачем?<br>Молчание<br>- Что ты здесь делаешь?<br>-Прячусь.<br>- От кого?<br>Молчание.<br>- Они причинят нам вред?<br>- Нет.<br>- А если мы поможем тебе?<br>- Возможно.<br>- Это и есть твоя сделка?<br>- Да.</div>
		</div>
		<div id="msg104623" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104623">2017.11.25 14:22:33</a></div>
			<div class="msg_body">все ясно</div>
		</div>
		<div id="msg104624" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104624">2017.11.25 14:22:37</a></div>
			<div class="msg_body">либо он играет с нами</div>
		</div>
		<div id="msg104625" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104625">2017.11.25 14:22:47</a></div>
			<div class="msg_body">либо это мы с тобой, Дори, заигрались</div>
		</div>
		<div id="msg104627" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104627">2017.11.25 14:23:06</a></div>
			<div class="msg_body">*сокрушенно качаю головой*</div>
		</div>
		<div id="msg104628" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104628">2017.11.25 14:23:12</a></div>
			<div class="msg_body">?</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 14:22:47</div>
			<div class="msg_body"> либо это мы с тобой, Дори, заигрались</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.25 14:23:06</div>
			<div class="msg_body"> *сокрушенно качаю головой*</div>
				</div>
			</div>
		</div>
		<div id="msg104631" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104631">2017.11.25 14:23:30</a></div>
			<div class="msg_body">это значит, Дарина, что это наше с тобой воображение</div>
		</div>
		<div id="msg104632" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104632">2017.11.25 14:23:41</a></div>
			<div class="msg_body">или нечто с того же разряда</div>
		</div>
		<div id="msg104633" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104633">2017.11.25 14:24:03</a></div>
			<div class="msg_body">Адреналинит вас?</div>
		</div>
		<div id="msg104634" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104634">2017.11.25 14:24:08</a></div>
			<div class="msg_body">Нет</div>
		</div>
		<div id="msg104635" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104635">2017.11.25 14:24:11</a></div>
			<div class="msg_body">не боитесь</div>
		</div>
		<div id="msg104636" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104636">2017.11.25 14:24:17</a></div>
			<div class="msg_body">Вы в предвкушении</div>
		</div>
		<div id="msg104637" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104637">2017.11.25 14:24:21</a></div>
			<div class="msg_body">чего?</div>
		</div>
		<div id="msg104639" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104639">2017.11.25 14:26:17</a></div>
			<div class="msg_body">Это только гриппом все вместе болеют</div>
		</div>
		<div id="msg104640" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104640">2017.11.25 14:26:24</a></div>
			<div class="msg_body">или суицид массовый</div>
		</div>
		<div id="msg104641" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104641">2017.11.25 14:26:30</a></div>
			<div class="msg_body">а еще маги</div>
		</div>
		<div id="msg104642" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104642">2017.11.25 14:26:33</a></div>
			<div class="msg_body">с ума сходят по одиночке</div>
		</div>
		<div id="msg104643" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104643">2017.11.25 14:26:42</a></div>
			<div class="msg_body">не про вас</div>
		</div>
		<div id="msg104644" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104644">2017.11.25 14:26:43</a></div>
			<div class="msg_body">маги сходят с ума толпами</div>
		</div>
		<div id="msg104645" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104645">2017.11.25 14:26:49</a></div>
			<div class="msg_body">Нет</div>
		</div>
		<div id="msg104646" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104646">2017.11.25 14:26:54</a></div>
			<div class="msg_body">про нас с Дариной так точно можно сказать</div>
		</div>
		<div id="msg104647" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104647">2017.11.25 14:27:00</a></div>
			<div class="msg_body">У тебя есть маниакальные мысли?</div>
		</div>
		<div id="msg104648" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104648">2017.11.25 14:27:09</a></div>
			<div class="msg_body">Я по жизни сумасшедшая</div>
		</div>
		<div id="msg104649" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104649">2017.11.25 14:27:16</a></div>
			<div class="msg_body">Меня в счет не брать</div>
		</div>
		<div id="msg104650" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104650">2017.11.25 14:27:18</a></div>
			<div class="msg_body">именно их я и боюсь. именно поэтому я и принимаю меры</div>
		</div>
		<div id="msg104651" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104651">2017.11.25 14:27:26</a></div>
			<div class="msg_body">ну сам подумай!</div>
		</div>
		<div id="msg104652" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104652">2017.11.25 14:27:39</a></div>
			<div class="msg_body">мне он отвечал так, как того ожидал я!</div>
		</div>
		<div id="msg104653" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104653">2017.11.25 14:27:47</a></div>
			<div class="msg_body">Дарине он отвечал так, как хотела она!</div>
		</div>
		<div id="msg104655" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104655">2017.11.25 14:28:13</a></div>
			<div class="msg_body">поэтому у меня он просто зашел покушать и понаблюдать за неразумными, а у Дори - прятался от черт-знает-кого</div>
		</div>
		<div id="msg104654" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104654">2017.11.25 14:28:11</a></div>
			<div class="msg_body">Денни</div>
		</div>
		<div id="msg104656" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104656">2017.11.25 14:28:17</a></div>
			<div class="msg_body">Ты дома?</div>
		</div>
		<div id="msg104657" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104657">2017.11.25 14:28:42</a></div>
			<div class="msg_body">приглашаешь к костру?</div>
		</div>
		<div id="msg104658" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104658">2017.11.25 14:28:44</a></div>
			<div class="msg_body">Встретиммся через 5 минут у костра</div>
		</div>
		<div id="msg104659" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104659">2017.11.25 14:29:07</a></div>
			<div class="msg_body">без проблем</div>
		</div>
		<div id="msg104673" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104673">2017.11.25 14:32:52</a></div>
			<div class="msg_body">Хорошей прогулки</div>
		</div>
		<div id="msg104674" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104674">2017.11.25 14:33:08</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b.png">Стикер #1909</div>
		</div>
		<div id="msg104675" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104675">2017.11.25 14:33:16</a></div>
			<div class="msg_body">Снег вам в поддержку, я заметил, что хруст от снега слышнее, чем хруст веток</div>
		</div>
		<div id="msg104676" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104676">2017.11.25 14:34:18</a></div>
			<div class="msg_body">но радиус звука у хруста снега меньше, нежели чем у сломанной ветки, но сломанную сухую растительность можно обойти</div>
		</div>
		<div id="msg104678" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104678">2017.11.25 14:34:25</a></div>
			<div class="msg_body">а снег нет</div>
		</div>
		<div id="msg104679" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104679">2017.11.25 14:34:48</a></div>
			<div class="msg_body">Денни</div>
		</div>
		<div id="msg104680" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104680">2017.11.25 14:35:03</a></div>
			<div class="msg_body">Переносим еще на 5 минут<img src="./work with spaces/blank.gif" emoji="D83DDE12" alt="??" class="emoji_css" style="background-position: 0px -136px;"><img class="emoji" alt="??" src="./work with spaces/D83DDE44.png"></div>
		</div>
		<div id="msg104681" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104681">2017.11.25 14:35:15</a></div>
			<div class="msg_body">Мне закрыться надо</div>
		</div>
		<div id="msg104682" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104682">2017.11.25 14:35:20</a></div>
			<div class="msg_body">За мамой</div>
		</div>
		<div id="msg104683" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104683">2017.11.25 14:35:25</a></div>
			<div class="msg_body"><img src="./work with spaces/blank.gif" emoji="D83DDC4D" alt="??" class="emoji_css" style="background-position: 0px -459px;"></div>
		</div>
		<div id="msg104688" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104688">2017.11.25 14:44:33</a></div>
			<div class="msg_body">Го?</div>
		</div>
		<div id="msg104689" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104689">2017.11.25 14:45:02</a></div>
			<div class="msg_body">А что мы делать будем? Зачем зовешь? Его мне показать хочешь?</div>
		</div>
		<div id="msg104690" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104690">2017.11.25 14:45:22</a></div>
			<div class="msg_body">Прочешем территорию</div>
		</div>
		<div id="msg104691" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104691">2017.11.25 14:45:31</a></div>
			<div class="msg_body">Ок</div>
		</div>
		<div id="msg104692" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104692">2017.11.25 14:45:34</a></div>
			<div class="msg_body">Го</div>
		</div>
		<div id="msg104693" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104693">2017.11.25 14:48:38</a></div>
			<div class="msg_body">Мой радар, кроме тебя, никого не чует</div>
		</div>
		<div id="msg104694" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104694">2017.11.25 14:48:52</a></div>
			<div class="msg_body">...</div>
		</div>
		<div id="msg104695" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104695">2017.11.25 14:48:57</a></div>
			<div class="msg_body">Я не зашла</div>
		</div>
		<div id="msg104696" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104696">2017.11.25 14:49:05</a></div>
			<div class="msg_body">Меня выкидывает</div>
		</div>
		<div id="msg104697" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104697">2017.11.25 14:49:50</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(20).png">Стикер #149</div>
		</div>
		<div id="msg104698" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104698">2017.11.25 14:51:00</a></div>
			<div class="msg_body">Оно меня игнорит</div>
		</div>
		<div id="msg104699" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104699">2017.11.25 14:53:04</a></div>
			<div class="msg_body">Я тут</div>
		</div>
		<div id="msg104700" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104700">2017.11.25 14:53:17</a></div>
			<div class="msg_body">И?</div>
		</div>
		<div id="msg104702" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104702">2017.11.25 15:02:15</a></div>
			<div class="msg_body">
				Ну я посидела на крыльце дома, подошла к костру. Центра костра не было. Огонь и вовсе холодный. Потом увидела его. Он поманил за собой взглядом. Я подошла. В лесу был сильный туман. Потом мы шли и разговаривали.<br>
				- Почему вы так заинтересовались мной?<br>
				- Не знаю.<br>
				- Вы боитесь меня.<br>
				- Возможно.<br>
				- Тебе не кажется, что мы поменялись местами?<br>
				- Если ты про то, что теперь вопросы задаешь ты, то да.<br>
				- Почему тебя Данил не видит?<br>
				- Он просил уйти. Я ушел.<br>
				- А почему тогда я тебя вижу?<br>
				- Ты не просила.<br>
				- Но поляна-то общая.<br>
				- Она не идеально одинаковая. Хорошая поляна вышла.<br>
				- Ты вроде не был разговорчивым. Наверное я все же схожу с ума.<br>
				- Нет, я не воображение.<br>
				- Чем докажешь?<br>
				- Скоро поймешь.<br>
				Потом я хотела что-то спросить, но поняла, что не заметила, куда мы шли и как далеко я ушла от костра. Начала проваливаться в сон. Посмотрела на него. Он оскалился и исчез. Потом прозвенел будильник, который предусмотрительная "я" поставила заранее.</div>
		</div>
		<div id="msg104704" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104704">2017.11.25 15:04:48</a></div>
			<div class="msg_body">Погоди чуток</div>
		</div>
		<div id="msg104705" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104705">2017.11.25 15:05:36</a></div>
			<div class="msg_body">Денни</div>
		</div>
		<div id="msg104706" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104706">2017.11.25 15:05:43</a></div>
			<div class="msg_body">Я на треню опаздываю)</div>
		</div>
		<div id="msg104707" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104707">2017.11.25 15:05:51</a></div>
			<div class="msg_body">Попробуй зайти снова</div>
		</div>
		<div id="msg104708" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104708">2017.11.25 15:05:57</a></div>
			<div class="msg_body">Его не ищи</div>
		</div>
		<div id="msg104709" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104709">2017.11.25 15:06:05</a></div>
			<div class="msg_body">Просто посмотри на изначальные детали</div>
		</div>
		<div id="msg104710" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104710">2017.11.25 15:06:32</a></div>
			<div class="msg_body">В маршрутку сяду</div>
		</div>
		<div id="msg104711" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104711">2017.11.25 15:06:35</a></div>
			<div class="msg_body">Посмотрю</div>
		</div>
		<div id="msg104712" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104712">2017.11.25 15:07:00</a></div>
			<div class="msg_body"><img src="./work with spaces/blank.gif" emoji="D83DDC4D" alt="??" class="emoji_css" style="background-position: 0px -459px;"></div>
		</div>
		<div id="msg104713" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104713">2017.11.25 15:07:30</a></div>
			<div class="msg_body">Как Кая Напоминает</div>
		</div>
		<div id="msg104714" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104714">2017.11.25 15:07:38</a></div>
			<div class="msg_body">Кай</div>
		</div>
		<div id="msg104715" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104715">2017.11.25 15:07:51</a></div>
			<div class="msg_body">Чего?</div>
		</div>
		<div id="msg104716" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104716">2017.11.25 15:11:39</a></div>
			<div class="msg_body">Да так. Есть один друг у меня. Приходит только когда я сильно нуждаюсь в нем. Всегда помогает, но мы с ним уже как год не пересекались. Просто манера общения такая же, как у........ Джина... если для сравнения</div>
		</div>
		<div id="msg104717" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104717">2017.11.25 15:16:33</a></div>
			<div class="msg_body">Как вспомню так</div>
		</div>
		<div id="msg104718" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104718">2017.11.25 15:16:35</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(21).png">Стикер #3495</div>
		</div>
		<div id="msg104719" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104719">2017.11.25 15:16:42</a></div>
			<div class="msg_body">Настрой еще на 20+</div>
		</div>
		<div id="msg104720" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104720">2017.11.25 15:21:39</a></div>
			<div class="msg_body">А кстати, вы ведушие какнала НТВ... я вас так обзываю потому что вы не поздравили меня, что я вчера первый раз в жизни своей пирог испек...... <img class="emoji" alt="??" src="./work with spaces/D83DDE01.png"></div>
		</div>
		<div id="msg104721" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104721">2017.11.25 15:22:03</a></div>
			<div class="msg_body">Ну поздравляю</div>
		</div>
		<div id="msg104722" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104722">2017.11.25 15:22:09</a></div>
			<div class="msg_body">СПАСИБО</div>
		</div>
		<div id="msg104723" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104723">2017.11.25 15:22:11</a></div>
			<div class="msg_body">=)</div>
		</div>
		<div id="msg104724" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104724">2017.11.25 15:22:26</a></div>
			<div class="msg_body">*приподнял одну бровь*</div>
		</div>
		<div id="msg104725" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104725">2017.11.25 15:22:32</a></div>
			<div class="msg_body">если честно ты первый человек который поздравил</div>
		</div>
		<div id="msg104726" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104726">2017.11.25 15:22:50</a></div>
			<div class="msg_body">Остальные посылают?</div>
		</div>
		<div id="msg104727" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104727">2017.11.25 15:22:59</a></div>
			<div class="msg_body">Остальные просто едят</div>
		</div>
		<div id="msg104728" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104728">2017.11.25 15:23:08</a></div>
			<div class="msg_body">и говорят вкустно</div>
		</div>
		<div id="msg104729" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104729">2017.11.25 15:23:21</a></div>
			<div class="msg_body"><img src="./work with spaces/blank.gif" emoji="D83DDE10" alt="??" class="emoji_css" style="background-position: 0px -255px;"></div>
		</div>
		<div id="msg104730" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104730">2017.11.25 15:23:43</a></div>
			<div class="msg_body">вкусно это круто, приятно, я не вкусное не подаю на стол</div>
		</div>
		<div id="msg104731" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104731">2017.11.25 15:24:31</a></div>
			<div class="msg_body">А вот в с дебютом, что начал увлекатся выпечкой, молвить никто не захотел</div>
		</div>
		<div id="msg104732" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104732">2017.11.25 15:24:59</a></div>
			<div class="msg_body">А для меня важно это<img class="emoji" alt="??" src="./work with spaces/D83DDE01.png"></div>
		</div>
		<div id="msg104832" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104832">2017.11.25 18:53:08</a></div>
			<div class="msg_body">Поздравляю с пирогом</div>
		</div>
		<div id="msg104833" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104833">2017.11.25 18:54:04</a></div>
			<div class="msg_body">Денни, помнишь ты сказал понаблюдать не произойдет ли что-нибудь в моей жизни?</div>
		</div>
		<div id="msg104834" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104834">2017.11.25 18:54:09</a></div>
			<div class="msg_body">Так вот</div>
		</div>
		<div id="msg104835" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104835">2017.11.25 18:54:14</a></div>
			<div class="msg_body">Спасибо. Третий человек =)</div>
		</div>
		<div id="msg104862" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104862">2017.11.25 19:05:10</a></div>
			<div class="msg_body">У меня украли обруч (15тыс. тг)<br>Бутылку с Испании (10 евро)<br>И в довершении у нас появился вор и с раздевалки крадет деньги. Сегодня у меня украли 300тг (100, 100, 50, 50) и эти сволочи мне даже на проезд не оставили (70тг), и я перлась домой пешком (3км - 30мин)</div>
		</div>
		<div id="msg104864" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104864">2017.11.25 19:05:36</a></div>
			<div class="msg_body">Ууууу</div>
		</div>
		<div id="msg104865" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104865">2017.11.25 19:05:38</a></div>
			<div class="msg_body">Ооой</div>
		</div>
		<div id="msg104866" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104866">2017.11.25 19:06:39</a></div>
			<div class="msg_body">Танге?</div>
		</div>
		<div id="msg104867" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104867">2017.11.25 19:06:47</a></div>
			<div class="msg_body">Теньге</div>
		</div>
		<div id="msg104868" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104868">2017.11.25 19:07:10</a></div>
			<div class="msg_body">Сорь</div>
		</div>
		<div id="msg104870" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104870">2017.11.25 19:07:28</a></div>
			<div class="msg_body">На кол его</div>
		</div>
		<div id="msg104871" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104871">2017.11.25 19:07:39</a></div>
			<div class="msg_body">Почему его?</div>
		</div>
		<div id="msg104872" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104872">2017.11.25 19:08:44</a></div>
			<div class="msg_body">потому что парень, или тот, кто знал, что вы его никогда не увидите</div>
		</div>
		<div id="msg104873" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104873">2017.11.25 19:09:09</a></div>
			<div class="msg_body">А с чего ты взял, что это не могла быть девушка?</div>
		</div>
		<div id="msg104875" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104875">2017.11.25 19:10:06</a></div>
			<div class="msg_body">их или было от 2 до 3 человек (кто-то смотрел за палевом), или тот, кто знал, что пока будет копатся никто не зайдёт</div>
		</div>
		<div id="msg104876" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104876">2017.11.25 19:10:11</a></div>
			<div class="msg_body">У нас на тренировке только девочки</div>
		</div>
		<div id="msg104877" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104877">2017.11.25 19:10:31</a></div>
			<div class="msg_body">Чтобы зайти в раздевалку, надо пройти мимо тренера</div>
		</div>
		<div id="msg104878" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104878">2017.11.25 19:10:40</a></div>
			<div class="msg_body">Значит кто-то свой</div>
		</div>
		<div id="msg104879" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104879">2017.11.25 19:11:03</a></div>
			<div class="msg_body">Если бы на шухере стояли - спалились бы</div>
		</div>
		<div id="msg104880" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104880">2017.11.25 19:11:18</a></div>
			<div class="msg_body">значит знали</div>
		</div>
		<div id="msg104881" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104881">2017.11.25 19:11:28</a></div>
			<div class="msg_body">Денис</div>
		</div>
		<div id="msg104883" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104883">2017.11.25 19:11:42</a></div>
			<div class="msg_body">Я даже знаю кто это</div>
		</div>
		<div id="msg104884" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104884">2017.11.25 19:11:54</a></div>
			<div class="msg_body">на кол ее</div>
		</div>
		<div id="msg104885" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104885">2017.11.25 19:12:02</a></div>
			<div class="msg_body">Бетонную плиту на... Нее!</div>
		</div>
		<div id="msg104886" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104886">2017.11.25 19:12:06</a></div>
			<div class="msg_body">Мы до этого палили с поличным ту девочку</div>
		</div>
		<div id="msg104891" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104891">2017.11.25 19:12:44</a></div>
			<div class="msg_body">Но добрые "старшие" сказали</div>
		</div>
		<div id="msg104894" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104894">2017.11.25 19:12:56</a></div>
			<div class="msg_body">Ее тренера наругают и родители</div>
		</div>
		<div id="msg104895" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104895">2017.11.25 19:13:07</a></div>
			<div class="msg_body">Наругают</div>
		</div>
		<div id="msg104896" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104896">2017.11.25 19:13:21</a></div>
			<div class="msg_body">запугают</div>
		</div>
		<div id="msg104897" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104897">2017.11.25 19:13:26</a></div>
			<div class="msg_body">На кол Её</div>
		</div>
		<div id="msg104898" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104898">2017.11.25 19:13:30</a></div>
			<div class="msg_body">Неа</div>
		</div>
		<div id="msg104899" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104899">2017.11.25 19:13:35</a></div>
			<div class="msg_body">И где они теперь возьмут столько денег, чтобы нам вернуть (22тыс)</div>
		</div>
		<div id="msg104900" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104900">2017.11.25 19:13:41</a></div>
			<div class="msg_body">Но теперь старшие мы</div>
		</div>
		<div id="msg104901" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104901">2017.11.25 19:13:51</a></div>
			<div class="msg_body">И пошли все в задницу</div>
		</div>
		<div id="msg104902" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104902">2017.11.25 19:14:01</a></div>
			<div class="msg_body">Сучка!</div>
		</div>
		<div id="msg104903" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104903">2017.11.25 19:14:21</a></div>
			<div class="msg_body">ПИздОв Ей ПОЛОн рОТ нАДОвАТЬ</div>
		</div>
		<div id="msg104904" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104904">2017.11.25 19:14:31</a></div>
			<div class="msg_body">Чисто по-свойский</div>
		</div>
		<div id="msg104906" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104906">2017.11.25 19:15:19</a></div>
			<div class="msg_body">1 раз, второй для профилактики, третий для закрепления урока</div>
		</div>
		<div id="msg104907" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104907">2017.11.25 19:15:44</a></div>
			<div class="msg_body">сорь за мат</div>
		</div>
		<div id="msg104908" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104908">2017.11.25 19:15:58</a></div>
			<div class="msg_body">Ладно в магазине воровать, но у своих</div>
		</div>
		<div id="msg104909" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg104909">2017.11.25 19:16:06</a></div>
			<div class="msg_body">....</div>
		</div>
		<div id="msg104910" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104910">2017.11.25 19:19:44</a></div>
			<div class="msg_body">У Адины 500 украли, тоже на проезд не оставили</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:14:24</div>
			<div class="msg_body"> Привет</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/xtY8iuAr2EU.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Адина Жумабекова</b> <a href="http://vk.com/id193403508" target="_blank">@id193403508</a> 2017.11.25 19:14:33</div>
			<div class="msg_body"> Привет</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:14:41</div>
			<div class="msg_body"> Я только пришла</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:14:58</div>
			<div class="msg_body"> Пешком шла</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:15:19</div>
			<div class="msg_body"> У меня 300тг украли</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:15:33</div>
			<div class="msg_body"> Сучки, даже на проезд не оставили</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/xtY8iuAr2EU.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Адина Жумабекова</b> <a href="http://vk.com/id193403508" target="_blank">@id193403508</a> 2017.11.25 19:17:37</div>
			<div class="msg_body"> Серьезно?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/xtY8iuAr2EU.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Адина Жумабекова</b> <a href="http://vk.com/id193403508" target="_blank">@id193403508</a> 2017.11.25 19:17:40</div>
			<div class="msg_body"> Капееец</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/xtY8iuAr2EU.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Адина Жумабекова</b> <a href="http://vk.com/id193403508" target="_blank">@id193403508</a> 2017.11.25 19:17:43</div>
			<div class="msg_body"> Вот твари</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:17:45</div>
			<div class="msg_body"> Да</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:18:02</div>
			<div class="msg_body"> В понедельник пойду к Н.Е.</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:18:14</div>
			<div class="msg_body"> Они в общей сумме 1000 украли</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/xtY8iuAr2EU.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Адина Жумабекова</b> <a href="http://vk.com/id193403508" target="_blank">@id193403508</a> 2017.11.25 19:18:14</div>
			<div class="msg_body"> Она приедет?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:18:22</div>
			<div class="msg_body"> Должна</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:18:30</div>
			<div class="msg_body"> Если нет то к Л.Е.</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:18:39</div>
			<div class="msg_body"> Ты пойдешь со мной?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/xtY8iuAr2EU.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Адина Жумабекова</b> <a href="http://vk.com/id193403508" target="_blank">@id193403508</a> 2017.11.25 19:18:50</div>
			<div class="msg_body"> Даа</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.25 19:19:02</div>
			<div class="msg_body"> Спасибо</div>
				</div>
			</div>
		</div>
		<a name="5exp"></a><h2>5 эксперимент (неудачный)</h2>
		<div id="msg104911" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104911">2017.11.25 21:25:07</a></div>
			<div class="msg_body">Дори</div>
		</div>
		<div id="msg104912" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104912">2017.11.25 21:25:13</a></div>
			<div class="msg_body">Ты тута?</div>
		</div>
		<div id="msg104927" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104927">2017.11.25 21:44:21</a></div>
			<div class="msg_body">Тута</div>
		</div>
		<div id="msg104930" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104930">2017.11.25 21:45:21</a></div>
			<div class="msg_body">Будем засыпать у костра? А утром что и как?</div>
		</div>
		<div id="msg104936" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104936">2017.11.25 21:48:34</a></div>
			<div class="msg_body">Засыпать у костра</div>
		</div>
		<div id="msg104937" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104937">2017.11.25 21:48:54</a></div>
			<div class="msg_body">Будильник в 6 (5 у тебя)</div>
		</div>
		<div id="msg104938" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104938">2017.11.25 21:49:13</a></div>
			<div class="msg_body">Потом опять на поляну</div>
		</div>
		<div id="msg104939" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104939">2017.11.25 21:49:27</a></div>
			<div class="msg_body">Спишемся утром тут?</div>
		</div>
		<div id="msg104943" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104943">2017.11.25 21:53:04</a></div>
			<div class="msg_body">Нет</div>
		</div>
		<div id="msg104944" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg104944">2017.11.25 21:53:17</a></div>
			<div class="msg_body">У меня утром инета не будет</div>
		</div>
		<div id="msg104946" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg104946">2017.11.25 21:53:22</a></div>
			<div class="msg_body">Ну ок</div>
		</div>
		<div id="msg105007" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105007">2017.11.25 23:31:34</a></div>
			<div class="msg_body">Дори</div>
		</div>
		<div id="msg105008" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105008">2017.11.25 23:31:44</a></div>
			<div class="msg_body">Ты там еще не уснула?</div>
		</div>
		<div id="msg105009" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105009">2017.11.25 23:47:23</a></div>
			<div class="msg_body">Го?</div>
		</div>
		<div id="msg105010" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105010">2017.11.25 23:47:39</a></div>
			<div class="msg_body">Уже</div>
		</div>
		<div id="msg105011" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105011">2017.11.25 23:47:52</a></div>
			<div class="msg_body">Там у костра кто-то сидит</div>
		</div>
		<div id="msg105012" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105012">2017.11.25 23:47:55</a></div>
			<div class="msg_body">Хз кто</div>
		</div>
		<div id="msg105013" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105013">2017.11.25 23:48:02</a></div>
			<div class="msg_body">Уже как час</div>
		</div><hr>
		<div id="msg105014" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg105014">2017.11.26 05:02:11</a></div>
			<div class="msg_body">Яяяяяяя</div>
		</div>
		<div id="msg105015" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg105015">2017.11.26 05:12:10</a></div>
			<div class="msg_body">Я в 3 часа проснулся, посмотрел печку и в костёр пошол</div>
		</div>
		<div id="msg105016" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105016">2017.11.26 05:13:18</a></div>
			<div class="msg_body">Не хочешь присоединиться к нам сейчас?</div>
		</div>
		<div id="msg105017" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg105017">2017.11.26 05:13:52</a></div>
			<div class="msg_body">Щас не могу, печку топлю, дома холодно</div>
		</div>
		<div id="msg105046" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105046">2017.11.26 10:10:18</a></div>
			<div class="msg_body">Вчера, когда я сказал, что у костра кто-то сидит уже как час, я видел кого-то, сидящего на бревне, словно статуя, черная, плотная, будто из гранита</div>
		</div>
		<div id="msg105048" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105048">2017.11.26 10:11:00</a></div>
			<div class="msg_body">Потом мне его присутствие надоело и я его буквально распылил, выпихивая из пространства. Даже сейчас я чувствую там осколки этой статуи</div>
		</div>
		<div id="msg105049" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105049">2017.11.26 10:11:18</a></div>
			<div class="msg_body">Все пытался ее совсем уничтожить, что бы без следов, да фиг там</div>
		</div>
		<div id="msg105060" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg105060">2017.11.26 10:34:51</a></div>
			<div class="msg_body">Не, значит это не я, я рисовал и прыгал через костёр</div>
		</div>
		<div id="msg105066" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105066">2017.11.26 10:43:55</a></div>
			<div class="msg_body">Это ты когда делал?</div>
		</div>
		<div id="msg105067" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg105067">2017.11.26 10:58:57</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> 2017.11.26 05:12:10</div>
			<div class="msg_body"> Я в 3 часа проснулся, посмотрел печку и в костёр пошол</div></div></div>
		</div>
		<div id="msg105068" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105068">2017.11.26 10:59:26</a></div>
			<div class="msg_body">У меня было 22:00</div>
		</div>
		<div id="msg105069" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105069">2017.11.26 10:59:45</a></div>
			<div class="msg_body">Я был у костра где-то около 22:15-22:30</div>
		</div>
		<div id="msg105071" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105071">2017.11.26 11:33:30</a></div>
			<div class="msg_body">Я проснулась в 6 зашла на костер, через 5 минут не удержалась</div>
		</div>
		<div id="msg105072" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105072">2017.11.26 11:33:36</a></div>
			<div class="msg_body">Провалилась в сон</div>
		</div>
		<div id="msg105073" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105073">2017.11.26 11:34:01</a></div>
			<div class="msg_body">А у меня вообще что-то странное было</div>
		</div>
		<div id="msg105074" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105074">2017.11.26 11:34:51</a></div>
			<div class="msg_body">В 5:00 прозвенел будильник. Пару минут я поворочался в кровати, а потом ушел к костру. Там я пробыл от силы минуту, но тут в беседу написал Илья. Смотрю на часы - 5:12!</div>
		</div>
		<div id="msg105075" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105075">2017.11.26 11:35:09</a></div>
			<div class="msg_body">Мне будто кусок памяти вырезали</div>
		</div>
		<a name="6exp"></a><h2>6 эксперимент (неудачный) - эмоция в домике</h2>
		<div id="msg105076" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105076">2017.11.26 11:50:24</a></div>
			<div class="msg_body">Я седня положу в домик на дереве эмоцию. Все желающие могут зайти туда и попробовать ее учуять. Но есть одно условие: свои результаты писать СТРОГО МНЕ В ЛИЧКУ. Чтобы потом сверить</div>
		</div>
		<div id="msg105077" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105077">2017.11.26 11:51:59</a></div>
			<div class="msg_body">А еще сделаю новый рисунок, уже с домиком на дереве</div>
		</div>
		<div id="msg105079" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105079">2017.11.26 13:19:58</a></div>
			<div class="msg_body">Во</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img src="./work with spaces/YB5n0aSLpY8.jpg">[photo256884832_456239546] (540x405)</div>
		</div>
		<div id="msg105118" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105118">2017.11.26 15:18:38</a></div>
			<div class="msg_body">Эмоция в домик загружена</div>
		</div>
		<div id="msg105119" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105119">2017.11.26 15:36:33</a></div>
			<div class="msg_body">Надеюсь, вы не забыли, что учуянную эмоцию не надо описывать здесь? Делать это надо мне в личку</div>
		</div>
		<div id="msg105120" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105120">2017.11.26 15:37:02</a></div>
			<div class="msg_body">Помним</div>
		</div>
		<div id="msg105304" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105304">2017.11.26 21:50:36</a></div>
			<div class="msg_body">Кто у костра?</div>
		</div>
		<div id="msg105305" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105305">2017.11.26 21:52:21</a></div>
			<div class="msg_body">Илья ушел к нему 30 мин назад, но он пиздец хотел спать, так что он стопудов уже вне его</div>
		</div>
		<div id="msg105306" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105306">2017.11.26 21:52:27</a></div>
			<div class="msg_body">Денису рано еще</div>
		</div>
		<div id="msg105307" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105307">2017.11.26 21:52:35</a></div>
			<div class="msg_body">Понятно</div>
		</div>
		<div id="msg105308" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105308">2017.11.26 21:52:50</a></div>
			<div class="msg_body">Влад в трипиздинске пропадает, от него ни слуху, ни духу</div>
		</div>
		<div id="msg105309" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105309">2017.11.26 21:52:56</a></div>
			<div class="msg_body">А то я когда только зашла кроме тебя еще кого-то чуяла</div>
		</div>
		<div id="msg105310" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105310">2017.11.26 21:53:07</a></div>
			<div class="msg_body">Но он тоже в часовом поясе москвы, ему тоже рано</div>
		</div>
		<div id="msg105392" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105392">2017.11.26 22:43:03</a></div>
			<div class="msg_body">Ну се</div>
		</div>
		<div id="msg105393" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105393">2017.11.26 22:43:05</a></div>
			<div class="msg_body">Я к костру</div>
		</div>
		<div id="msg105394" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105394">2017.11.26 22:43:13</a></div>
			<div class="msg_body">Всем</div>
		</div>
		<div id="msg105395" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105395">2017.11.26 22:43:17</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b.png">Стикер #1909</div>
		</div>
		<div id="msg105396" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105396">2017.11.26 22:43:39</a></div>
			<div class="msg_body">Стояяяять</div>
		</div>
		<div id="msg105397" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105397">2017.11.26 22:43:46</a></div>
			<div class="msg_body">Я с тобой</div>
		</div>
		<div id="msg105398" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105398">2017.11.26 22:43:55</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(1).png">Стикер #52</div>
		</div>
		<div id="msg105399" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105399">2017.11.26 22:47:42</a></div>
			<div class="msg_body">Все</div>
		</div>
		<div id="msg105400" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105400">2017.11.26 22:47:43</a></div>
			<div class="msg_body">Го</div>
		</div>
		<div id="msg105401" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105401">2017.11.26 22:48:02</a></div>
			<div class="msg_body">го</div>
		</div>
		<div id="msg105401" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a></div>
			<div class="msg_body"></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a></div>
			<div class="msg_body"></div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="https://vk.com/ilyaz3529" target="_blank">@ilyaz3529</a></div>
			<div class="msg_body">что-то весёлое, но в то же время грустное</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a></div>
			<div class="msg_body">Знаешь... То, что я ложил туда, подходит под радость и грусть только настолько иносказательно, что является неправдой. Нет, там не радость с грустью</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a></div>
			<div class="msg_body"></div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a></div>
			<div class="msg_body">Ощущения будто я медитирую. Спокойствие. Какая то задумчивость и распирающий комок радости или предвкушения чего то хорошего</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a></div>
			<div class="msg_body">О-окей... Ну по идее я закладывал не это, но ты вторая, кто говорит о радости.</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a></div>
			<div class="msg_body"></div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a></div>
			<div class="msg_body">Не было ж эмоции... Может я не почувствовал</div>
				</div>
					</div>
				</div>
			</div>
		</div>
		<a name="fall"></a><h2>Потеря связи с костром</h2>
		<div id="msg105170" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105170">2017.11.26 17:54:58</a></div>
			<div class="msg_body">А проблем с попаданием к костру не было?</div>
		</div>
		<div id="msg105171" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105171">2017.11.26 17:58:25</a></div>
			<div class="msg_body">Неа</div>
		</div>
		<div id="msg105172" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105172">2017.11.26 17:58:50</a></div>
			<div class="msg_body">Плохо</div>
		</div>
		<div id="msg105173" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105173">2017.11.26 17:58:59</a></div>
			<div class="msg_body">Очень плохо</div>
		</div>
		<div id="msg105174" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105174">2017.11.26 17:59:11</a></div>
			<div class="msg_body">А что так?</div>
		</div>
		<div id="msg105175" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105175">2017.11.26 17:59:12</a></div>
			<div class="msg_body">Я теряю связь с костром</div>
		</div>
		<div id="msg105176" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105176">2017.11.26 17:59:26</a></div>
			<div class="msg_body">Вчера я не видел никого, кроме той статуи</div>
		</div>
		<div id="msg105177" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105177">2017.11.26 17:59:34</a></div>
			<div class="msg_body">Сегодня ее уже не было</div>
		</div>
		<div id="msg105180" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105180">2017.11.26 17:59:40</a></div>
			<div class="msg_body">Но никого я так и не вижу</div>
		</div>
		<div id="msg105184" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105184">2017.11.26 17:59:54</a></div>
			<div class="msg_body">И вот барьер на заход не работает</div>
		</div>
		<div id="msg105186" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105186">2017.11.26 17:59:57</a></div>
			<div class="msg_body">И эмоция не та</div>
		</div>
		<div id="msg105187" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105187">2017.11.26 18:00:06</a></div>
			<div class="msg_body">Ты когда последний раз заходил?</div>
		</div>
		<div id="msg105189" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105189">2017.11.26 18:00:17</a></div>
			<div class="msg_body">И ловушки твои меня игнорят</div>
		</div>
		<div id="msg105190" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105190">2017.11.26 18:00:24</a></div>
			<div class="msg_body">Седня днем</div>
		</div>
		<div id="msg105193" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105193">2017.11.26 18:02:09</a></div>
			<div class="msg_body">Они одноразовые</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.26 18:00:17</div>
			<div class="msg_body"> И ловушки твои меня игнорят</div>
				</div>
			</div>
		</div>
		<div id="msg105194" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105194">2017.11.26 18:02:36</a></div>
			<div class="msg_body">Не, какие-то сигналы мне идут от пространства. Я кого-то вижу, но только там, где я ожидаю их увидеть. Я чувствую настройки пространства, но теперь у меня ощущение, что это все ложное</div>
		</div>
		<div id="msg105196" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105196">2017.11.26 18:03:08</a></div>
			<div class="msg_body">А с волками что? Они на месте или исчезают после первого появления?</div>
		</div>
		<div id="msg105206" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105206">2017.11.26 18:10:03</a></div>
			<div class="msg_body">Нет, волки постоянные (это простенький тип)</div>
		</div>
		<div id="msg105207" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105207">2017.11.26 18:10:17</a></div>
			<div class="msg_body">На остальное у меня бы энергии не хватило</div>
		</div>
		<div id="msg105208" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105208">2017.11.26 18:10:25</a></div>
			<div class="msg_body">Я иногда обновляю</div>
		</div>
		<div id="msg105209" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105209">2017.11.26 18:12:15</a></div>
			<div class="msg_body">Давай седня посидим некоторое время у костра, сверимся по вк, и на боковую</div>
		</div>
		<div id="msg105210" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105210">2017.11.26 18:19:06</a></div>
			<div class="msg_body">Я за</div>
		</div>
		<div id="msg105211" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105211">2017.11.26 18:19:28</a></div>
			<div class="msg_body">В 21:30 (20:30 по твоему) сядем</div>
		</div>
		<div id="msg105212" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105212">2017.11.26 18:19:31</a></div>
			<div class="msg_body">Ок?</div>
		</div>
		<div id="msg105213" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105213">2017.11.26 18:19:49</a></div>
			<div class="msg_body">Ну давай</div>
		 </div>
		<div id="msg105216" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105216">2017.11.26 20:58:09</a></div>
			<div class="msg_body">Денни</div>
		</div>
		<div id="msg105217" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105217">2017.11.26 20:58:23</a></div>
			<div class="msg_body">Дори</div>
		</div>
		<div id="msg105218" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105218">2017.11.26 20:58:41</a></div>
			<div class="msg_body">Я уже там</div>
		</div>
		<div id="msg105219" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105219">2017.11.26 20:59:41</a></div>
			<div class="msg_body">Давно?</div>
		</div>
		<div id="msg105220" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105220">2017.11.26 20:59:54</a></div>
			<div class="msg_body">Да черт его знает</div>
		</div>
		<div id="msg105221" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105221">2017.11.26 21:00:04</a></div>
			<div class="msg_body">Может пять, может пятнадцать минут</div>
		</div>
		<div id="msg105222" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105222">2017.11.26 21:00:34</a></div>
			<div class="msg_body">Сейчас присоединюсь</div>
		</div>
		<div id="msg105223" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105223">2017.11.26 21:03:52</a></div>
			<div class="msg_body">Я там</div>
		</div>
		<div id="msg105224" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105224">2017.11.26 21:10:52</a></div>
			<div class="msg_body">Я вышла</div>
		</div>
		<div id="msg105225" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105225">2017.11.26 21:11:45</a></div>
			<div class="msg_body">Я тебя не видел. Ну или видел, но как прозрачный столбик дыма, который итак еле улавливаем</div>
		</div>
		<div id="msg105226" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105226">2017.11.26 21:12:17</a></div>
			<div class="msg_body">Ты вроде как за мной ходила</div>
		</div>
		<div id="msg105234" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105234">2017.11.26 21:12:58</a></div>
			<div class="msg_body">Ты мне что-то говорил?</div>
		</div>
		<div id="msg105246" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105246">2017.11.26 21:14:39</a></div>
			<div class="msg_body">Я монолог вел</div>
		</div>
		<div id="msg105248" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105248">2017.11.26 21:14:51</a></div>
			<div class="msg_body">На всем протяжении своего пребывания там</div>
		</div>
		<div id="msg105257" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105257">2017.11.26 21:16:27</a></div>
			<div class="msg_body">Я слышала, что ты говорил</div>
		</div>
		<div id="msg105258" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105258">2017.11.26 21:16:35</a></div>
			<div class="msg_body">Но не слышала что</div>
		</div>
		<div id="msg105259" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105259">2017.11.26 21:16:45</a></div>
			<div class="msg_body">Я пыталась прервать тебя</div>
		</div>
		<div id="msg105260" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105260">2017.11.26 21:16:55</a></div>
			<div class="msg_body">Но ты будто не слышал</div>
		</div>
		<div id="msg105261" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105261">2017.11.26 21:17:10</a></div>
			<div class="msg_body">Я действительно ничего не слышал и не чувствовал</div>
		</div>
		<div id="msg105262" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105262">2017.11.26 21:17:22</a></div>
			<div class="msg_body">Ты мне "да" отвечала?</div>
		</div>
		<div id="msg105263" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105263">2017.11.26 21:17:32</a></div>
			<div class="msg_body">Отвечала</div>
		</div>
		<div id="msg105264" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105264">2017.11.26 21:17:44</a></div>
			<div class="msg_body">А на какой вопрос?</div>
		</div>
		<div id="msg105265" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105265">2017.11.26 21:20:27</a></div>
			<div class="msg_body">Когда ты вроде спросил: "Это ты?"</div>
		</div>
		<div id="msg105266" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105266">2017.11.26 21:20:47</a></div>
			<div class="msg_body">Не, я такого не спрашивал вообще</div>
		</div>
		<div id="msg105267" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105267">2017.11.26 21:20:50</a></div>
			<div class="msg_body">Вроде</div>
		</div>
		<div id="msg105268" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105268">2017.11.26 21:20:54</a></div>
			<div class="msg_body">Кхм</div>
		</div>
		<div id="msg105269" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105269">2017.11.26 21:20:57</a></div>
			<div class="msg_body">Нда</div>
		</div>
		<div id="msg105270" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105270">2017.11.26 21:21:20</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83DDE05.png"></div>
		</div>
		<div id="msg105271" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105271">2017.11.26 21:21:59</a></div>
			<div class="msg_body">Проблема в том, что я не помню половину своего монолога. Включая ту часть, когда я тебя спрашивал, а ты ответила "да"</div>
		</div>
		<div id="msg105272" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105272">2017.11.26 21:22:46</a></div>
			<div class="msg_body">Вспомнил!</div>
		</div>
		<div id="msg105274" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105274">2017.11.26 21:25:18</a></div>
			<div class="msg_body">Я стоял лицом к тому месту, откуда выпригивают волки. Это на темной поляне, прямо напротив костра. Я спросил "Ты видишь лес перед нами?" После твоего утвердительного ответа я сказал "А я вижу только тьму. И барьер, после которого ничего нет. Там нет больше пространства! Леса вокруг вообще нет. Ну, разве что, есть немного за освещенными деревьями, там." и указал на светлую поляну</div>
		</div>
		<div id="msg105278" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105278">2017.11.26 21:37:48</a></div>
			<div class="msg_body">Неа, такого я не слышала</div>
		</div>
		<div id="msg105279" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105279">2017.11.26 21:38:03</a></div>
			<div class="msg_body">Может это последствия НЕО?</div>
		</div>
		<div id="msg105280" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105280">2017.11.26 21:38:36</a></div>
			<div class="msg_body">А я о нем говорил в своем монологе</div>
		</div>
		<div id="msg105281" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105281">2017.11.26 21:38:41</a></div>
			<div class="msg_body">Ну или после этого</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.26 10:10:18</div>
			<div class="msg_body"> Вчера, когда я сказал, что у костра кто-то сидит уже как час, я видел кого-то, сидящего на бревне, словно статуя, черная, плотная, будто из гранита</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.26 10:11:00</div>
			<div class="msg_body"> Потом мне его присутствие надоело и я его буквально распылил, выпихивая из пространства. Даже сейчас я чувствую там осколки этой статуи</div>
				</div>
			</div>
		</div>
		<div id="msg105282" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105282">2017.11.26 21:39:11</a></div>
			<div class="msg_body">Я убежден, не было никакого нео. Мы с тобой были поглощены собственными иллюзиями</div>
		</div>
		<div id="msg105283" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105283">2017.11.26 21:39:29</a></div>
			<div class="msg_body">Иллюзиями, возникшими на почве эго</div>
		</div>
		<div id="msg105284" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105284">2017.11.26 21:40:02</a></div>
			<div class="msg_body">Возможно это не нео</div>
		</div>
		<div id="msg105285" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105285">2017.11.26 21:40:03</a></div>
			<div class="msg_body">Почему новичкам везет? Потому что их взор ничем не затуманен. Они смотрят на мир словно младенцы. И в этом их преимущество</div>
		</div>
		<div id="msg105287" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105287">2017.11.26 21:41:21</a></div>
			<div class="msg_body">А опытные люди, обладающие знанием, учат других. Их эго растет, растет, заставляя видеть то, чего нет, а то, что есть, - игнорировать. Мы с тобой самые опытные и умудреные в нашей компании. И мы особенно подвержены иллюзиям</div>
		</div>
		<div id="msg105288" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105288">2017.11.26 21:41:33</a></div>
			<div class="msg_body">И вчерашний инцидент с нео это только подтвердил</div>
		</div>
		<div id="msg105289" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105289">2017.11.26 21:41:40</a></div><div class="attacments"> <b>Материалы:</b> </div><div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(22).png"></div>
		</div>
		<div id="msg105290" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105290">2017.11.26 21:42:32</a></div>
			<div class="msg_body">Мы с тобой видим то, что хотим видеть! Я не спорю, проглядываются иногда осколки действительности, но эти лишь осколки</div>
		</div>
		<div id="msg105293" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105293">2017.11.26 21:43:09</a></div>
			<div class="msg_body">Может, мой туман перед глазами накануне был знаком? Знаком этого? Вдруг так со мной говорило подсознание? Я не знаю</div>
		</div>
		<div id="msg105296" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105296">2017.11.26 21:43:41</a></div>
			<div class="msg_body">Об этом я и вел монолог сегодня</div>
		</div>
		<div id="msg105297" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105297">2017.11.26 21:43:57</a></div>
			<div class="msg_body">И теперь собираюсь с нуля учиться всему</div>
		</div>
		<div id="msg105298" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105298">2017.11.26 21:44:10</a></div>
			<div class="msg_body">Что касается виртуальных пространств</div>
		</div>
		<div id="msg105299" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105299">2017.11.26 21:44:19</a></div>
			<div class="msg_body">Которые лучше назвать воображаемыми</div>
		</div><hr>
		<div id="msg105402" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105402">2017.11.27 08:47:17</a></div>
			<div class="msg_body">Ребят всем привет</div>
		</div>
		<div id="msg105453" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105453">2017.11.27 09:03:09</a></div>
			<div class="msg_body">Что у вас нового?</div>
		</div>
		<div id="msg105454" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105454">2017.11.27 09:04:24</a></div>
			<div class="msg_body">Ни-че-го</div>
		</div>
		<div id="msg105455" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105455">2017.11.27 09:04:30</a></div>
			<div class="msg_body">Черт</div>
		</div>
		<div id="msg105456" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105456">2017.11.27 09:05:18</a></div>
			<div class="msg_body">Только дошло, что на мое падение чувствительности повлияла программа Бряка, которая обламывает человека, когда тот почти достиг вершины своих возможностей</div>
		</div>
		<div id="msg105458" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105458">2017.11.27 09:06:53</a></div>
			<div class="msg_body">Погодь</div>
		</div>
		<div id="msg105459" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105459">2017.11.27 09:07:01</a></div>
			<div class="msg_body">Я думала Бряк затих</div>
		</div>
		<div id="msg105461" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105461">2017.11.27 09:07:09</a></div>
			<div class="msg_body">Что за программа?</div>
		</div>
		<div id="msg105475" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105475">2017.11.27 09:23:21</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 16:09:02</div>
			<div class="msg_body"> Поздравляю, теперь этот вопрос задел и меня. Задорнов от рака головного мозга умер. Отчего я подумал: хорошие сильные люди не умирают своей смертью. ПОЧЕМУ?!</div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.10.28 23:51:11</div>
			<div class="msg_body"> И умер он не так, как должен был, я про Цоя. Однако есть ещё деталь которую я заметил. Он в последние годы косил под Брюса Ли. Он тоже умер молодым и не так, как должен был. У него даже целая школа учеников была</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.10.28 23:56:06</div>
			<div class="msg_body"> Мораль в том, что я пытаюсь понять, почему умирают люди, которые не должны умирать?</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 16:19:36</div>
			<div class="msg_body"> У меня никаких идей... Так что я тот же вопрос задал Денису и Дарине в беседу</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 16:19:43</div>
			<div class="msg_body"> Мб они что надумают</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 16:40:18</div>
			<div class="msg_body"> </div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.11 16:31:38</div>
			<div class="msg_body"> Если конкретизировать до тех личностей, которые были перечислены выше, то ты хочешь подчеркнуть, что вокруг их смерти кураж и разные смуты?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 16:32:34</div>
			<div class="msg_body"> Частично. Но меня больше интересует очевидная неестественность смерти</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.11 16:33:05</div>
			<div class="msg_body"> Я не исключаю, говорят же фразу, аж в душу запало. Может, есть таланты которые могут помочь скинуть на время цепи</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 16:34:14</div>
			<div class="msg_body"> Будто бы некто убивает хороших людей. Причем в какое-то строго определенное время. Т.е. они успели пожить, успели натворить добра, но немного не успели до чего-то еще более грандиозного</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 16:38:41</div>
			<div class="msg_body"> Если бы кто-то хотел, чтобы такие люди не несли просвещение, то, наверное, стоило бы их мочить раньше? Но ведь этого не происходит. Значит этому кому-то не нужно отсутствие просвещения. Но и завершить дела этим людям не дают... Значит, точно расчитанная дозировка. Опять же: зачем?!</div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
						<div class="msg_item">
							<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
							<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.11 16:33:05</div>
							<div class="msg_body"> Я не исключаю, говорят же фразу, аж в душу запало. Может, есть таланты. которые могут помочь скинуть на время цепи</div>
						</div>
					</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 17:35:04</div>
			<div class="msg_body"> если идет дозировка просвещения и благодетельства, то я вижу 2 варианта: <br>1) некто/нечто держит добро и зло в балансе. но тогда получается, что добра в мире происходит слишком много??? че-то как-то не верится... <br>2) все это - почва для чего-то большего. кто-то готовит событийную и условную (от слова условие) почву для... для чего? мб это то, о чем говорил Денис? <br>мб, все то, что не успели сделать погибшие, помешало бы для этого чего-то? но как именно?...</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 17:44:24</div>
			<div class="msg_body"> впрочем, почему я не рассматриваю это как некий естественный процесс? что так было всегда, так есть и так будет всегда? но почему, почему так?...</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 17:49:39</div>
			<div class="msg_body"> а что, если на таких личностях скапливается слишком много положительного внимания, и они становятся слишком могущественны? как с реальной, так и с магической точки зрения? тогда мочить их могут и люди, а, вернее, мировое правительство, жрецы</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 17:54:50</div>
			<div class="msg_body"> все-таки мертвый мученик лучше мага немыслимого могущества, способный повести за собой миллионы...</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:42:40</div>
			<div class="msg_body"> На счёт дозировки. Могу точно сказать, что есть некий алгоритм, который опускает могущество человека ниже (или, если опустить невозможно, убивает). Я кучу раз замечал во время стрельбы, что попадая стабильно и туда, куда нужно, я думал: "Ну всё,ещё чуть чуть и я мастер/чемпион/победитель" После чего случалась какая-нибудь хрень, которая скидывала мой скилл до прошлой ступени. Однако это не только в стрельбе. Практически в каждой области жизни я встречал этот алгоритм.</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:43:12</div>
			<div class="msg_body"> Кстати, вспомнил, что Чингисхан тоже рано умер. Т.к. мог захватить мир</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:43:43</div>
			<div class="msg_body"> Я считаю этот алгоритм одним из фундаментальных</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:43:57</div>
			<div class="msg_body"> скрипт, снижающий скилл, не дающий реализовать весь потенциал... да, это имеет место быть</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:44:07</div>
			<div class="msg_body"> и я с этим тысячи раз встречался!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:44:15</div>
			<div class="msg_body"> у меня намерение сотни раз сбоило из-за этого!!!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:44:23</div>
			<div class="msg_body"> и не только оно!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:46:29</div>
			<div class="msg_body"> Кстати, я тут подумал, что стрельба для меня является событийным тренажёром. Я на нём узнаю новые алгоритмы событий. Замечаю какие-нибудь закономерности и перевожу в глобальный масштаб и получается, что они идеально интегрируются в картину мира</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:47:46</div>
			<div class="msg_body"> Однако, чтобы ими пользоваться, мне не хватает решимости. Т.к. каждый раз это как падение в пропасть; знаю, что сработает, но всё равно боишься</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:48:08</div>
			<div class="msg_body"> И всё равно они в итоге сбываются</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:49:49</div>
			<div class="msg_body"> И помнишь насчёт абстрактного мышления? Это, как оказалось, тоже было продуктом такого способа, только ты не мог меня понять т.к. я мыслил сразу в глобальном масштабе не переводя на человеческий</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:50:17</div>
			<div class="msg_body"> я и теперь тебя не понял</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:50:27</div>
			<div class="msg_body"> Что конкретно?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:51:23</div>
			<div class="msg_body"> про абстрактное мышление</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:54:03</div>
			<div class="msg_body"> Я, загнавшись с переводами событийных цепочек с человеческого на глобальный, начинал судить о человеческих вещах глобальными мыслями. И это было в корне не правильно, т.к. там разная система. Теперь понятно? Если снова нет, то процитируй конкретные непонятные предложения, я ещё подробнее объясню</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:54:43</div>
			<div class="msg_body"> ладно, пока забей</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:54:50</div>
			<div class="msg_body"> тут мои проблемы, ты ни при чем</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:55:16</div>
			<div class="msg_body"> Хотя подробнее я всё равно не объясню т.к. я это понимаю не словами. Таких слов нет</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:55:43</div>
			<div class="msg_body"> Ты помнишь, как мыслил в детстве, когда не знал слова?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:55:51</div>
			<div class="msg_body"> неа</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:55:58</div>
			<div class="msg_body"> я вообще мало что помню из детства</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:56:37</div>
			<div class="msg_body"> Грустно. Просто я вот помню и это есть абстрактное мышление</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:56:57</div>
			<div class="msg_body"> </div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:54:43</div>
			<div class="msg_body"> ладно, пока забей</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:58:21</div>
			<div class="msg_body"> Ты согласен с этим?</div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:57:38</div>
			<div class="msg_body"> только твой ответ по теме смертей, что это фундаментальный алгоритм</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:58:42</div>
			<div class="msg_body"> эта теория имеет право на жизнь</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 18:58:47</div>
			<div class="msg_body"> очень серьезное право имеет</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:59:21</div>
			<div class="msg_body"> Я не знаю почему, но я железно знаю, что это так</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:00:43</div>
			<div class="msg_body"> я ведь сказал, что сам с этим постоянно встречась</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:06:20</div>
			<div class="msg_body"> Добавлю к этому, может станет понятнее. Стрельба из лука - спорт, который требует полного отрешения от словесных мыслей и принятия ощущений, каждое малейшее ощущение, отклоняющееся от принятого мной идеального выстрела, будет играть очень большую роль т.к. полетит не туда. Так же это очень монотонный и однообразный вид спорта, который позволяет воспроизводить одну и ту же ситуацию тысячи раз. Невольно в таких условиях начинаешь видеть алгоритмы. События автоматически распределяются на типичные и нетипичные, обычные и необычные. Дальше я представляю что произойдёт если такую ситуацию воспроизвести в других областях жизни. И это работает. Только я не знаю, как сделать это специально</div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 18:46:29</div>
			<div class="msg_body"> Кстати, я тут подумал, что стрельба для меня является событийным тренажёром. Я на нём узнаю новые алгоритмы событий. Замечаю какие-нибудь закономерности и перевожу в глобальный масштаб, и получается, что они идеально интегрируются в картину мира</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:08:41</div>
			<div class="msg_body"> Что думаешь?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:09:21</div>
			<div class="msg_body"> что оно все верно и правильно. а специально это делать и не получится</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:09:39</div>
			<div class="msg_body"> Почему?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:10:06</div>
			<div class="msg_body"> потому что это магия, бл*ть! (читать с выражением, будто это мем)</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:10:11</div>
			<div class="msg_body"> тут ничего не делается специально</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:10:26</div>
			<div class="msg_body"> Мдя, ну ладно</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:10:27</div>
			<div class="msg_body"> все по наитию, как бог на душу ляжет</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:11:17</div>
			<div class="msg_body"> настоящая магия не может быть осознанна умом - она производится телом, на уровне инстинктов</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:11:46</div>
			<div class="msg_body"> Вот, инстинкты. То самое слово которое я не мог подобрать</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:13:04</div>
			<div class="msg_body"> ум - якорь, удерживающий магов в здравом рассудке и твердой памяти. он невероятно важен на начальных этапах, когда маг привязан к своей жизни. позже он становится чудовищно вреден и крайне тесен для мага. и тогда маг сбрасывает кожу, превращается черт-знает-в-кого и идет дальше, в непознанное и непознаваемое</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:14:17</div>
			<div class="msg_body"> Я начинаю понимать что значит "тесно в уме". Раньше не понимал.</div>
				</div>
			</div>
		</div>
		<div id="msg105476" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105476">2017.11.27 09:24:01</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:17:17</div>
			<div class="msg_body"> а про Дениса-пророка и его предчувствия что думаешь?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:38:43</div>
			<div class="msg_body"> Ну думаю, что он тоже дойдет до определенной ступени могущества, а потом его отопнут обратно</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:39:09</div>
			<div class="msg_body"> оно логично</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:39:34</div>
			<div class="msg_body"> но отсюда следует, что у всех магов есть определенный потолок, выше которого им нельзя прыгать</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:40:11</div>
			<div class="msg_body"> проводим знак =</div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:13:04</div>
			<div class="msg_body"> ум - якорь, удерживающий магов в здравом рассудке и твердой памяти. он невероятно важен на начальных этапах, когда маг привязан к своей жизни. позже он становится чудовищно вреден и крайне тесен для мага. и тогда маг сбрасывает кожу, превращается черт-знает-в-кого и идет дальше, в непознанное и непознаваемое</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:39:34</div>
			<div class="msg_body"> но отсюда следует, что у всех магов есть определенный потолок, выше которого им нельзя прыгать</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:41:00</div>
			<div class="msg_body"> Мне кажется, этот потолок можно пробить</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:41:03</div>
			<div class="msg_body"> и получаем, что этот самый потолок обусловлен разумом. "сбрасывая" разум как кожу, маги выходят из-под действия программы</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:41:08</div>
			<div class="msg_body"> и идут дальше</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:41:51</div>
			<div class="msg_body"> =&gt; сия программа расположена в разуме</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:41:58</div>
			<div class="msg_body"> или им и является</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:42:01</div>
			<div class="msg_body"> или нечто среднее</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:42:58</div>
			<div class="msg_body"> как все-таки иногда обидно, что маги так скрытны...</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:44:11</div>
			<div class="msg_body"> а про предчувствия Дениса? про нечто грядущее, сынициированное неким могущественным бесконечно добрым существом</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:52:06</div>
			<div class="msg_body"> Ну я тоже так думаю</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:52:50</div>
			<div class="msg_body"> (и тут мне захотелось сузить глаза в удивлении и подозрении всемирного заговора)</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.11.11 19:53:34</div>
			<div class="msg_body"> Очевидно, что что-то произойдёт, просто каждый интерпретирует по-своему</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:54:11</div>
			<div class="msg_body"> ох уж эти пророки...</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.11 19:54:56</div>
			<div class="msg_body"> вечно наговорят такого, что мозги в трубочку свернутся, а колени задрожат в благоговении и страхе перед тем-не-знаю-чем, а в итоге окажется сущий пустяк</div>
				</div>
			</div>
		</div>
		<div id="msg105465" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105465">2017.11.27 09:07:48</a></div>
			<div class="msg_body">...</div>
		</div>
		<div id="msg105478" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105478">2017.11.27 09:25:55</a></div>
			<div class="msg_body">А, все, вспомнила</div>
		</div>
		<a name="locInDream"></a><h2>Определение местоположения костра в сновиденном мире</h2>
		<div id="msg105467" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105467">2017.11.27 09:16:24</a></div>
			<div class="msg_body">Денни, ты тут?</div>
		</div>
		<div id="msg105468" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105468">2017.11.27 09:18:44</a></div>
			<div class="msg_body">Нас тут препод орфоэпическими нормами мучает</div>
		</div>
		<div id="msg105469" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105469">2017.11.27 09:18:49</a></div>
			<div class="msg_body">Где какое ударение ставить</div>
		</div>
		<div id="msg105470" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105470">2017.11.27 09:20:19</a></div>
			<div class="msg_body">Ты не думал, где ты расположил поляну?</div>
		</div>
		<div id="msg105471" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105471">2017.11.27 09:20:30</a></div>
			<div class="msg_body">Всм</div>
		</div>
		<div id="msg105472" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105472">2017.11.27 09:21:03</a></div>
			<div class="msg_body">Где именно на карте она распологается?</div>
		</div>
		<div id="msg105473" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105473">2017.11.27 09:21:18</a></div>
			<div class="msg_body">На сновиденной карте?</div>
		</div>
		<div id="msg105474" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105474">2017.11.27 09:23:06</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg105479" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105479">2017.11.27 09:25:56</a></div>
			<div class="msg_body">Ура</div>
		</div>
		<div id="msg105480" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105480">2017.11.27 09:25:58</a></div>
			<div class="msg_body">У меня двояк</div>
		</div>
		<div id="msg105481" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105481">2017.11.27 09:26:02</a></div>
			<div class="msg_body">По ударениям</div>
		</div>
		<div id="msg105482" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105482">2017.11.27 09:26:04</a></div>
			<div class="msg_body">Уиии</div>
		</div>
		<div id="msg105483" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105483">2017.11.27 09:26:15</a></div>
			<div class="msg_body">Так что там с картой</div>
		</div>
		<div id="msg105484" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105484">2017.11.27 09:26:19</a></div>
			<div class="msg_body">А</div>
		</div>
		<div id="msg105485" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105485">2017.11.27 09:26:28</a></div>
			<div class="msg_body">По идее, его вообще там нет</div>
		</div>
		<div id="msg105486" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105486">2017.11.27 09:26:37</a></div>
			<div class="msg_body">Он МЕЖДУ сном и реалом</div>
		</div>
		<div id="msg105487" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105487">2017.11.27 09:26:41</a></div>
			<div class="msg_body">Он ни там, ни там</div>
		</div>
		<div id="msg105488" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105488">2017.11.27 09:26:44</a></div>
			<div class="msg_body">Он ровно между</div>
		</div>
		<div id="msg105489" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105489">2017.11.27 09:27:23</a></div>
			<div class="msg_body">Просто если выходить из леса, то с одной стороны точно завод</div>
		</div>
		<div id="msg105490" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105490">2017.11.27 09:27:29</a></div>
			<div class="msg_body">С другой водоем</div>
		</div>
		<div id="msg105491" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105491">2017.11.27 09:27:37</a></div>
			<div class="msg_body">Река или озеро</div>
		</div>
		<div id="msg105492" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105492">2017.11.27 09:28:03</a></div>
			<div class="msg_body">И так всегда, если идти в определенную сторону</div>
		</div>
		<div id="msg105500" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105500">2017.11.27 10:33:53</a></div>
			<div class="msg_body">Интересно, что вчера я решил уделить больше внимания звукам. А в реале я слышал звуки с завода, который у меня буквально под боком. И у костра, соответственно, тоже</div>
		</div>
		<div id="msg105501" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105501">2017.11.27 10:38:04</a></div>
			<div class="msg_body">Т.е. она где-то у отмеченных точек</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/3YE3rV1Pna4.jpg">[photo256884832_456239557] (533x540)</div>
		</div>
		<div id="msg105502" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105502">2017.11.27 10:38:11</a></div>
			<div class="msg_body">Черт!</div>
		</div>
		<div id="msg105503" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105503">2017.11.27 10:38:12</a></div>
			<div class="msg_body">Черт!!!</div>
		</div>
		<div id="msg105504" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105504">2017.11.27 10:38:15</a></div>
			<div class="msg_body">ЧЕРТ!</div>
		</div>
		<div id="msg105505" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105505">2017.11.27 10:38:52</a></div>
			<div class="msg_body">Я же когда почти вышел в КС, оседлал коня и по дороге скакал мимо какого-то храма, скорее католического!</div>
		</div>
		<div id="msg105506" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105506">2017.11.27 10:39:02</a></div>
			<div class="msg_body">А он именно в тех местах!</div>
		</div>
		<div id="msg105514" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105514">2017.11.27 10:48:52</a></div>
			<div class="msg_body">Скорее, третья сверху</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 10:38:04</div>
			<div class="msg_body"> Т.е. она где-то у отмеченных точек</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/3YE3rV1Pna4.jpg">[photo256884832_456239557] (533x540)</div>
				</div>
			</div>
		</div>
		<div id="msg105515" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105515">2017.11.27 10:50:41</a></div>
			<div class="msg_body">Что ж, мост через реку тоже имеет начало и конец, которые имеют четкие координаты на местности и принадлежат разным берегам реки</div>
		</div>
		<div id="msg105516" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105516">2017.11.27 10:50:42</a></div>
			<div class="msg_body">Но...</div>
		</div>
		<div id="msg105517" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105517">2017.11.27 10:50:58</a></div>
			<div class="msg_body">Тогда где же начало нашего моста, которое в реале?</div>
		</div>
		<div id="msg105518" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105518">2017.11.27 10:50:58</a></div>
			<div class="msg_body">А его нету</div>
		</div>
		<div id="msg105519" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105519">2017.11.27 11:02:00</a></div>
			<div class="msg_body">Денни, у нас карты разные</div>
		</div>
		<div id="msg105520" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105520">2017.11.27 11:03:41</a></div>
			<div class="msg_body">Если брать эту, то возможно где-то здесь (если это не завод, а электростанция)</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/6qhXYSlY05w.jpg">[photo236175365_456240332] (540x530)</div>
		</div>
		<div id="msg105521" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg105521">2017.11.27 11:08:59</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/nDD14oFsC00.jpg">[photo236175365_456240333] (540x405)</div>
		</div>
		<div id="msg105522" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105522">2017.11.27 11:17:53</a></div>
			<div class="msg_body">У тебя устаревшая</div>
		</div>
		<div id="msg105523" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105523">2017.11.27 11:17:59</a></div>
			<div class="msg_body">Я на свою добавил значков</div>
		</div>
		<div id="msg105524" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105524">2017.11.27 11:18:08</a></div>
			<div class="msg_body">Но в целом, объекты те же и там же</div>
		</div>
		<div id="msg105525" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105525">2017.11.27 11:18:38</a></div>
			<div class="msg_body">Еее-мае</div>
		</div>
		<div id="msg105526" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105526">2017.11.27 11:18:47</a></div>
			<div class="msg_body">Так у тебя вообще древняя карта!</div>
		</div>
		<div id="msg105527" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105527">2017.11.27 11:18:51</a></div>
			<div class="msg_body">Еще времен Ольгерда!</div>
		</div>
		<div id="msg105528" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105528">2017.11.27 11:19:13</a></div>
			<div class="msg_body">Я-то ее проработал, усовершенствовал, все в соответствии с каноном</div>
		</div>
		<div id="msg105529" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105529">2017.11.27 11:19:27</a></div>
			<div class="msg_body">Ее даже на форуме признали</div>
		</div>
		<div id="msg105530" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105530">2017.11.27 11:20:56</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/JjwnSmgoG6g.jpg">[photo256884832_456239558] (1628x1652)</div>
		</div>
		<div id="msg105531" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105531">2017.11.27 11:21:21</a></div>
			<div class="msg_body">Я два года собирал текстовые описания сновиденных локаций, постепенно нанося их на карту</div>
		</div>
		<div id="msg105532" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105532">2017.11.27 11:21:34</a></div>
			<div class="msg_body">Там есть обозначения, которые с виду непонятны</div>
		</div>
		<div id="msg105533" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105533">2017.11.27 11:22:10</a></div>
			<div class="msg_body">И тем не менее, район завода и религиозных лок не менялся со времен старой карты</div>
		</div>
		<div id="msg105534" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105534">2017.11.27 11:22:12</a></div>
			<div class="msg_body">Так что все норм</div>
		</div>
		<div id="msg105535" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105535">2017.11.27 11:23:01</a></div>
			<div class="msg_body">А завод может быть у некоторых людей электростанцией</div>
		</div>
		<div id="msg105536" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105536">2017.11.27 11:23:05</a></div>
			<div class="msg_body">Такое бывает</div>
		</div>
		<div id="msg105538" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105538">2017.11.27 11:27:06</a></div>
			<div class="msg_body">Хм...</div>
		</div>
		<div id="msg105543" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105543">2017.11.27 11:28:27</a></div>
			<div class="msg_body">Впрочем, спор несколько бестолковый</div>
		</div>
		<div id="msg105544" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105544">2017.11.27 11:29:52</a></div>
			<div class="msg_body">Я в свое время шел туда, вышел на дорогу, и поскакал вниз. Там я попал к церкви</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/TsUKSvWvS08.jpg">[photo256884832_456239560] (540x405)</div>
		</div>
		<div id="msg105545" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105545">2017.11.27 11:30:35</a></div>
			<div class="msg_body">А твой водоем - одна из лок на пути в Йондо</div>
		</div>
		<div id="msg105546" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105546">2017.11.27 11:34:58</a></div>
			<div class="msg_body">Канонический путь в Йондо идет через пирамиду, потом через тот пруд, - река - Йондо. Почему люди идут так, а не сразу к пруду и дальше? Видимо, обходного пути нет. Вывод - к этому пруду не попасть! А, значит, либо наш костер вклинился на путь в Йондо, либо костер все же не там (а это значит, что река вклинивается между городом и зоной религии; впрочем, это возможно)</div>
		</div>
		<div id="msg105547" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105547">2017.11.27 11:36:23</a></div>
			<div class="msg_body">Нет</div>
		</div>
		<div id="msg105548" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105548">2017.11.27 11:36:24</a></div>
			<div class="msg_body">Что-то тут нечисто</div>
		</div>
		<div id="msg105551" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105551">2017.11.27 11:45:18</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/OCu0VUqlOSQ.jpg">[photo256884832_456239561] (540x468)</div>
		</div>
		<div id="msg105552" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105552">2017.11.27 11:45:32</a></div>
			<div class="msg_body">Я все-таки склоняюсь к этому варианту</div>
		</div>
		<div id="msg105553" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105553">2017.11.27 11:45:39</a></div>
			<div class="msg_body">Там южнее и водоем есть</div>
		</div>
		<div id="msg105554" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105554">2017.11.27 11:45:48</a></div>
			<div class="msg_body">На который попасть - раз плюнуть</div>
		</div>
		<div id="msg105555" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105555">2017.11.27 11:46:07</a></div>
			<div class="msg_body">И река может образоваться из восточной границы Города</div>
		</div>
		<div id="msg105556" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105556">2017.11.27 11:46:35</a></div>
			<div class="msg_body">И юго-востоку есть завод</div>
		</div>
		<a name="strange"></a><h2>Странное происшествие - кража светимости</h2>
		<div id="msg105558" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105558">2017.11.27 13:38:30</a></div>
			<div class="msg_body">Еее</div>
		</div>
		<div id="msg105559" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105559">2017.11.27 13:38:34</a></div>
			<div class="msg_body">Всем привет</div>
		</div>
		<div id="msg105560" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105560">2017.11.27 13:38:49</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b.png">Стикер #1909</div>
		</div>
		<div id="msg105565" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105565">2017.11.27 13:40:17</a></div>
			<div class="msg_body">Ха! В кого я кинул бутылку?</div>
		</div>
		<div id="msg105567" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105567">2017.11.27 13:40:53</a></div>
			<div class="msg_body">Чего?</div>
		</div>
		<div id="msg105568" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105568">2017.11.27 13:41:31</a></div>
			<div class="msg_body">Ни в кого бутылка не прилетела?</div>
		</div>
		<div id="msg105569" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105569">2017.11.27 13:41:56</a></div>
			<div class="msg_body">Если в меня и прилетала, то я не чувствовал</div>
		</div>
		<div id="msg105570" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105570">2017.11.27 13:42:07</a></div>
			<div class="msg_body">Ты ж у костра был?</div>
		</div>
		<div id="msg105571" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105571">2017.11.27 13:43:46</a></div>
			<div class="msg_body">Нет, на крыльце дома, внутри, я еще за бревном стоял да кинул</div>
		</div>
		<div id="msg105572" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105572">2017.11.27 13:44:03</a></div>
			<div class="msg_body">А когда ты там был?</div>
		</div>
		<div id="msg105577" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105577">2017.11.27 13:48:16</a></div>
			<div class="msg_body">С 7:30 по мск</div>
		</div>
		<div id="msg105579" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105579">2017.11.27 14:06:49</a></div>
			<div class="msg_body">Может, Дарина?</div>
		</div>
		<div id="msg105580" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105580">2017.11.27 14:07:19</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 13:44:56</div>
			<div class="msg_body"> Короче, выходя из дома, в доме 2 персонажа что-то грабили, чувство было такое, сейф в шкафу</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 13:46:55</div>
			<div class="msg_body"> Когда я узрел их, вышел из двери, один за мной пошел тоже вышел, я за бревно, подумал, чем бы кинуть, и помню, как люблю бутылки швырять. Запустил в него</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 13:47:22</div>
			<div class="msg_body"> Потому что он хотел, чтобы я покончил жизнь суицидно</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 13:47:34</div>
			<div class="msg_body"> Или же подставить меня</div>
				</div>
			</div>
		</div>
		<div id="msg105582" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105582">2017.11.27 14:08:03</a></div>
			<div class="msg_body">Ты спал или визуализировал?</div>
		</div>
		<div id="msg105583" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105583">2017.11.27 14:18:18</a></div>
			<div class="msg_body">Вот я теперь задумался</div>
		</div>
		<div id="msg105584" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105584">2017.11.27 14:18:55</a></div>
			<div class="msg_body">Я мог не заметить как провалился в сон?</div>
		</div>
		<div id="msg105585" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105585">2017.11.27 14:21:00</a></div>
			<div class="msg_body">Просто как я кинул бутылку, она разбилась об того в кого кинул</div>
		</div>
		<div id="msg105586" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105586">2017.11.27 14:21:12</a></div>
			<div class="msg_body">Он зашел в дом</div>
		</div>
		<div id="msg105587" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105587">2017.11.27 14:21:45</a></div>
			<div class="msg_body">Я следом, открываю дверь а там уже никого, ну я и встал</div>
		</div>
		<div id="msg105588" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105588">2017.11.27 14:23:46</a></div>
			<div class="msg_body">Мог</div>
		</div>
		<div id="msg105589" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105589">2017.11.27 14:24:45</a></div>
			<div class="msg_body">Фуф.... Ну и лучше, не надо извиняться не перед кем</div>
		</div>
		<div id="msg105590" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105590">2017.11.27 14:25:02</a></div>
			<div class="msg_body">Как было выяснено, наш костер имеет ипостась в сновиденном мире</div>
		</div>
		<div id="msg105591" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105591">2017.11.27 14:25:10</a></div>
			<div class="msg_body">Они же грабили!</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 14:24:45</div>
			<div class="msg_body"> Фуф.... Ну и лучше, не надо извиняться не перед кем</div>
				</div>
			</div>
		</div>
		<div id="msg105592" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105592">2017.11.27 14:25:20</a></div>
			<div class="msg_body">Так что извиняться не за что</div>
		</div>
		<div id="msg105593" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105593">2017.11.27 14:25:46</a></div>
			<div class="msg_body">Бутылку-то я сам создал.... значит ОСил</div>
		</div>
		<div id="msg105594" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105594">2017.11.27 14:26:03</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg105595" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105595">2017.11.27 14:26:04</a></div>
			<div class="msg_body">Ты ОСил</div>
		</div>
		<div id="msg105596" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105596">2017.11.27 14:26:11</a></div>
			<div class="msg_body">И это круто!</div>
		</div>
		<div id="msg105597" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105597">2017.11.27 14:26:43</a></div>
			<div class="msg_body">А ограбили они не ваш костер?</div>
		</div>
		<div id="msg105598" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105598">2017.11.27 14:27:02</a></div>
			<div class="msg_body">Я в него просто нечего не вкладывал</div>
		</div>
		<div id="msg105601" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105601">2017.11.27 14:27:52</a></div>
			<div class="msg_body">Я хз</div>
		</div>
		<div id="msg105602" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105602">2017.11.27 14:27:58</a></div>
			<div class="msg_body">Дори может сказать</div>
		</div>
		<div id="msg105603" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105603">2017.11.27 14:28:02</a></div>
			<div class="msg_body">Она домик делала</div>
		</div>
		<div id="msg105604" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105604">2017.11.27 14:28:15</a></div>
			<div class="msg_body">Ей одной известно все его содержимое</div>
		</div>
		<div id="msg105605" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105605">2017.11.27 14:28:41</a></div>
			<div class="msg_body">Я скажу даже где они искали</div>
		</div>
		<div id="msg105606" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105606">2017.11.27 14:28:52</a></div>
			<div class="msg_body">Но при ней</div>
		</div>
		<div id="msg105607" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105607">2017.11.27 14:29:03</a></div>
			<div class="msg_body">ДОРИИИИ ИИИТИИИИИИИИ</div>
		</div>
		<div id="msg105608" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105608">2017.11.27 14:29:21</a></div>
			<div class="msg_body">Дааарииииинаааааааааааааа</div>
		</div>
		<div id="msg105609" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg105609">2017.11.27 14:31:34</a></div>
			<div class="msg_body">На паре наверное</div>
		</div>
		<div id="msg105610" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105610">2017.11.27 14:47:15</a></div>
			<div class="msg_body">Скорее, на трене</div>
		</div>
		<div id="msg105611" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105611">2017.11.27 14:47:25</a></div>
			<div class="msg_body">Или на пути к ней</div>
		</div>
		<div id="msg105614" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105614">2017.11.27 15:02:45</a></div>
			<div class="msg_body">Скорее всего, с эмоцией зафейлил я</div>
		</div>
		<div id="msg105615" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105615">2017.11.27 15:03:02</a></div>
			<div class="msg_body">Посему я прошу Илью или Влада положить в домик свою эмоцию</div>
		</div>
		<div id="msg105616" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105616">2017.11.27 15:03:48</a></div>
			<div class="msg_body">Но Влада нет, поэтому все делать придется тебе, Илья</div>
		</div>
		<div id="msg105621" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105621">2017.11.27 15:54:53</a></div>
			<div class="msg_body">Илья</div>
		</div>
		<div id="msg105622" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg105622">2017.11.27 15:55:11</a></div>
			<div class="msg_body">Ты загрузишь эмоцию в домик?</div>
		</div>
		<div id="msg106301" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106301">2017.11.27 19:47:20</a></div>
			<div class="msg_body">Сходим к костру, проверим прошел ли твой сбой в системе?</div>
		</div>
		<div id="msg106302" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106302">2017.11.27 19:47:36</a></div>
			<div class="msg_body">Да ж куда он денется?!</div>
		</div>
		<div id="msg106305" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106305">2017.11.27 19:48:04</a></div>
			<div class="msg_body">Туда же, куда и остальные</div>
		</div>
		<div id="msg106525" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106525">2017.11.27 21:30:06</a></div>
			<div class="msg_body">Дарина</div>
		</div>
		<div id="msg106526" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106526">2017.11.27 21:30:14</a></div>
			<div class="msg_body">Скажи пожалуйста</div>
		</div>
		<div id="msg106527" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106527">2017.11.27 21:30:15</a></div>
			<div class="msg_body">А?</div>
		</div>
		<div id="msg106528" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106528">2017.11.27 21:30:41</a></div>
			<div class="msg_body">А ты дом планировала на костре. Точнее, в нем.</div>
		</div>
		<div id="msg106530" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106530">2017.11.27 21:31:08</a></div>
			<div class="msg_body">Домик на дереве, да</div>
		</div>
		<div id="msg106548" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106548">2017.11.27 21:35:36</a></div>
			<div class="msg_body">Если я без вас был на костре</div>
		</div>
		<div id="msg106549" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106549">2017.11.27 21:36:08</a></div>
			<div class="msg_body">в доме было 3</div>
		</div>
		<div id="msg106550" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106550">2017.11.27 21:36:13</a></div>
			<div class="msg_body">со мной 4</div>
		</div>
		<div id="msg106551" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106551">2017.11.27 21:36:25</a></div>
			<div class="msg_body">одного убили, сказали, обвинят меня</div>
		</div>
		<div id="msg106552" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106552">2017.11.27 21:36:32</a></div>
			<div class="msg_body">ой</div>
		</div>
		<div id="msg106553" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106553">2017.11.27 21:36:34</a></div>
			<div class="msg_body">нет</div>
		</div>
		<div id="msg106554" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106554">2017.11.27 21:36:41</a></div>
			<div class="msg_body">что типо суицид</div>
		</div>
		<div id="msg106555" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106555">2017.11.27 21:36:44</a></div>
			<div class="msg_body">=)</div>
		</div>
		<div id="msg106556" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106556">2017.11.27 21:36:47</a></div>
			<div class="msg_body">Ахаха</div>
		</div>
		<div id="msg106557" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106557">2017.11.27 21:37:33</a></div>
			<div class="msg_body">Украли на двоих поделили, третьего кинули, двое на улице ждали. Как-то так.... Простите за путаницу......... Уфффф</div>
		</div>
		<div id="msg106558" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106558">2017.11.27 21:38:01</a></div>
			<div class="msg_body">и без вас. Одного бутылкой зацепил, простите</div>
		</div>
		<div id="msg106560" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106560">2017.11.27 21:38:37</a></div>
			<div class="msg_body">Спиздили</div>
		</div>
		<div id="msg106561" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106561">2017.11.27 21:38:40</a></div>
			<div class="msg_body">Да это седня утром было</div>
		</div>
		<div id="msg106563" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106563">2017.11.27 21:38:44</a></div>
			<div class="msg_body">Ой простите за мат</div>
		</div>
		<div id="msg106569" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106569">2017.11.27 21:40:05</a></div>
			<div class="msg_body">Так вот...... Почему..... Костра почему не видел, стоял спиной, когда заходил, выбежал, уже не было</div>
		</div>
		<div id="msg106573" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106573">2017.11.27 21:40:26</a></div>
			<div class="msg_body">Видать, кто на улице ждал, спер</div>
		</div>
		<div id="msg106574" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106574">2017.11.27 21:40:48</a></div>
			<div class="msg_body">Костра не было?</div>
		</div>
		<div id="msg106578" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106578">2017.11.27 21:41:18</a></div>
			<div class="msg_body">Сначала был, когда заходил, как только встал возле двери.... о господи инсайд</div>
		</div>
		<div id="msg106581" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106581">2017.11.27 21:41:52</a></div>
			<div class="msg_body">Господи - Ф.Э. (Фигура Эмоции *в тексте*)</div>
		</div>
		<div id="msg106588" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106588">2017.11.27 21:42:55</a></div>
			<div class="msg_body">Денис, можешь с нами через 15 мин к костру сходить?</div>
		</div>
		<div id="msg106591" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106591">2017.11.27 21:44:06</a></div>
			<div class="msg_body">пишу в тет</div>
		</div>
		<div id="msg106592" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106592">2017.11.27 21:44:27</a></div>
			<div class="msg_body">Эт что значит?</div>
		</div>
		<div id="msg106593" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106593">2017.11.27 21:44:36</a></div>
			<div class="msg_body">Note</div>
		</div>
		<div id="msg106594" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106594">2017.11.27 21:44:47</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:44:27</div>
			<div class="msg_body"> Эт что значит?</div></div></div>
		</div>
		<div id="msg106595" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106595">2017.11.27 21:45:56</a></div>
			<div class="msg_body">note <br>not <br> <br>заметка <br>zametka</div>
		</div>
		<div id="msg106597" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106597">2017.11.27 21:46:23</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:38:41</div>
			<div class="msg_body"> </div>
					<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
					<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:25:11</div>
			<div class="msg_body"> Эммм</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:25:23</div>
			<div class="msg_body"> Скажи пожалуйста</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:25:27</div>
			<div class="msg_body"> Дом у костра</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:25:30</div>
			<div class="msg_body"> Ты планировала?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:30:30</div>
			<div class="msg_body"> Погодь</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:30:33</div>
			<div class="msg_body"> Что?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:31:40</div>
			<div class="msg_body"> Сейф в шкафу? что там было?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:32:37</div>
			<div class="msg_body"> Половина моей врожденной энергии и немного положительных эмоций</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:33:50</div>
			<div class="msg_body"> Если я это видел, то я думаю</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:33:53</div>
			<div class="msg_body">.....</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:34:17</div>
			<div class="msg_body"> Что это украли?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:34:44</div>
			<div class="msg_body"> Я когда с Денни была на костре тоже третьего в доме чуяла</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:34:51</div>
			<div class="msg_body"> Но думала кто то из вас</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:34:55</div>
			<div class="msg_body"> Ан нет</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:35:10</div>
			<div class="msg_body"> Вообще их 3</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:35:22</div>
			<div class="msg_body"> если я без вас был на костре</div>
				</div>
					</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:39:16</div>
			<div class="msg_body"> Я энергию отдавала, чтобы дом в каком-то смысле был одушевленным</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:39:50</div>
			<div class="msg_body"> Э-эк как все интересно оборачивается</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:40:07</div>
			<div class="msg_body"> Шо-то тут нечисто</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:40:16</div>
			<div class="msg_body"> Так он лучше бы удерживал эмоции и все, что там бы было</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:40:24</div>
			<div class="msg_body"> Это нечто вроде сердца</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:41:00</div>
			<div class="msg_body"> И небольшая защита от заграбастания энергии из дома</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:41:04</div>
			<div class="msg_body"> Но не от взлома</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:41:11</div>
			<div class="msg_body"> Не предусмотренно было</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:41:37</div>
			<div class="msg_body"> Да кто в это пространство пройдет-то?! О нем 6 человек знают!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:41:40</div>
			<div class="msg_body"> И все свои!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:41:56</div>
			<div class="msg_body"> Что-то там другое...</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:41:59</div>
			<div class="msg_body"> Да я хз!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:42:02</div>
			<div class="msg_body"> Потому от взламывания защиту не ставила!</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:42:08</div>
			<div class="msg_body"> Какое-то неизвестное доселе явление...</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:42:18</div>
			<div class="msg_body"> Обитатели сна не способны на взламывание</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:42:45</div>
			<div class="msg_body"> Если спрайты туда лезли, то не случайно</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:43:15</div>
			<div class="msg_body"> Мб Денис чувствовал клад и своим подсознанием одушевил страхи? Создал спрайтов, не понимая того?</div>
				</div>
			</div>
		</div>
		<div id="msg106598" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106598">2017.11.27 21:46:30</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(14).png">Стикер #1923</div>
		</div>
		<div id="msg106599" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106599">2017.11.27 21:46:36</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 21:45:56</div>
			<div class="msg_body"> note <br>not <br> <br>заметка <br>zametka</div>
				</div>
			</div>
		</div>
		<div id="msg106600" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106600">2017.11.27 21:46:52</a></div>
			<div class="msg_body">Но мне кажется вариант с Денисом - бред</div>
		</div>
		<div id="msg106601" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106601">2017.11.27 21:47:14</a></div>
			<div class="msg_body">Если бы это были его спрайты - они бы не знали код от сейфа</div>
		</div>
		<div id="msg106602" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106602">2017.11.27 21:47:55</a></div>
			<div class="msg_body">Денис. Они взломали сейф или открыли его с кодом? Они вообще добрались до содержимого?</div>
		</div>
		<div id="msg106603" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106603">2017.11.27 21:48:06</a></div>
			<div class="msg_body">Я так и не понял этого момента</div>
		</div>
		<div id="msg106604" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106604">2017.11.27 21:48:19</a></div>
			<div class="msg_body">А я-то думаю, что это я такая нервная стала, да и слабость подкатила</div>
		</div>
		<div id="msg106607" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106607">2017.11.27 21:49:39</a></div>
			<div class="msg_body">Так</div>
		</div>
		<div id="msg106608" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106608">2017.11.27 21:49:42</a></div>
			<div class="msg_body">Все я тут</div>
		</div>
		<div id="msg106609" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106609">2017.11.27 21:51:12</a></div>
			<div class="msg_body">Ты пойдешь с нами?</div>
		</div>
		<div id="msg106610" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106610">2017.11.27 21:51:25</a></div>
			<div class="msg_body">Now?</div>
		</div>
		<div id="msg106613" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106613">2017.11.27 21:51:56</a></div>
			<div class="msg_body">Йес</div>
		</div>
		<div id="msg106614" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106614">2017.11.27 21:52:03</a></div>
			<div class="msg_body">Нет</div>
		</div>
		<div id="msg106615" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106615">2017.11.27 21:52:11</a></div>
			<div class="msg_body">Через 10-15 минут</div>
		</div>
		<div id="msg106616" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106616">2017.11.27 21:52:21</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 21:52:11</div>
			<div class="msg_body"> Через 10-15 минут</div>
				</div>
			</div>
		</div>
		<div id="msg106617" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106617">2017.11.27 21:52:32</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 21:47:55</div>
			<div class="msg_body"> Денис. Они взломали сейф или открыли его с кодом? Они вообще добрались до содержимого?</div>
				</div>
			</div>
		</div>
		<div id="msg106618" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106618">2017.11.27 21:52:43</a></div>
			<div class="msg_body">Почему когда я второй раз вошел....Кто меня слил? за что?</div>
		</div>
		<div id="msg106619" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106619">2017.11.27 21:52:50</a></div>
			<div class="msg_body">Я просил не делать</div>
		</div>
		<div id="msg106620" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106620">2017.11.27 21:52:52</a></div>
			<div class="msg_body">Чуваки</div>
		</div>
		<div id="msg106621" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106621">2017.11.27 21:53:20</a></div>
			<div class="msg_body">Что такое? Что не так?</div>
		</div>
		<div id="msg106623" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106623">2017.11.27 21:53:49</a></div>
			<div class="msg_body">у меня 20:00</div>
		</div>
		<div id="msg106625" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106625">2017.11.27 21:53:57</a></div>
			<div class="msg_body">Везунчики</div>
		</div>
		<div id="msg106626" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106626">2017.11.27 21:54:06</a></div>
			<div class="msg_body">Ща покурю</div>
		</div>
		<div id="msg106641" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106641">2017.11.27 22:01:20</a></div>
			<div class="msg_body">Я к костру</div>
		</div>
		<div id="msg106644" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106644">2017.11.27 22:01:31</a></div>
			<div class="msg_body">Потом сразу в сон свалю</div>
		</div>
		<div id="msg106647" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106647">2017.11.27 22:01:41</a></div>
			<div class="msg_body">Ибо инета не будет</div>
		</div>
		<div id="msg106648" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106648">2017.11.27 22:02:15</a></div>
			<div class="msg_body">Денни, опишешь потом в беседе, что было у костра, ок?</div>
		</div>
		<div id="msg106650" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106650">2017.11.27 22:02:30</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 22:00:00</div>
			<div class="msg_body"> Я когда подходил к столу в дальней комнате... потянула настальгия... прошу прощения... сильно светило</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 22:00:32</div>
			<div class="msg_body"> Я просто помню, как убегать начал...</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 22:00:45</div>
			<div class="msg_body"> после убийства</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 22:01:08</div>
			<div class="msg_body"> А когда один за мной ломанулся, за бревном швырнул бутыль</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 22:01:25</div>
			<div class="msg_body"> В ногу попал... в левую..</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 22:02:18</div>
			<div class="msg_body"> Когда обратно побежал, открыв дверь, меня убили походу....</div>
				</div>
			</div>
		</div>
		<div id="msg106651" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106651">2017.11.27 22:02:35</a></div>
			<div class="msg_body">Попытаюсь</div>
		</div>
		<div id="msg106652" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106652">2017.11.27 22:02:58</a></div>
			<div class="msg_body">Мне, наверное, выходить придется, а то забуду половину</div>
		</div>
		<a name="houseOnTree"></a><h2>Определение планировки домика на дереве</h2>
		<div id="msg106653" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106653">2017.11.27 22:03:13</a></div>
			<div class="msg_body">Стол меж двух окон</div>
		</div>
		<div id="msg106654" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106654">2017.11.27 22:03:25</a></div>
			<div class="msg_body">Есть</div>
		</div>
		<div id="msg106655" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106655">2017.11.27 22:03:41</a></div>
			<div class="msg_body">Только он в углу стоит</div>
		</div>
		<div id="msg106656" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106656">2017.11.27 22:03:42</a></div>
			<div class="msg_body">Шкаф будто с кучей полок</div>
		</div>
		<div id="msg106658" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106658">2017.11.27 22:04:01</a></div>
			<div class="msg_body">Но иногда они со шкафом местами меняются</div>
		</div>
		<div id="msg106657" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106657">2017.11.27 22:03:49</a></div>
			<div class="msg_body">Дори, можешь как-нибудь нарисовать план домика?</div>
		</div>
		<div id="msg106659" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106659">2017.11.27 22:04:07</a></div>
			<div class="msg_body">Ок</div>
		</div>
		<div id="msg106661" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106661">2017.11.27 22:04:36</a></div>
			<div class="msg_body">Есть</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 22:03:42</div>
			<div class="msg_body"> Шкаф будто с кучей полок</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> 2017.11.27 22:04:25</div>
			<div class="msg_body"> Есть</div>
				</div>
			</div>
		</div>
		<div id="msg106662" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106662">2017.11.27 22:04:55</a></div>
			<div class="msg_body">Генний!!!!!!</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:03:49</div>
			<div class="msg_body"> Дори, можешь как-нибудь нарисовать план домика?</div>
				</div>
			</div>
		</div>
		<div id="msg106663" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106663">2017.11.27 22:05:02</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(23).png">Стикер #3487</div>
		</div>
		<div id="msg106664" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106664">2017.11.27 22:05:04</a></div>
			<div class="msg_body">Он в левом дальнем углу от входа?</div>
		</div>
		<div id="msg106669" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106669">2017.11.27 22:05:39</a></div>
			<div class="msg_body">Шкаф, книжная полка, стол и стулья в первой половине дома</div>
		</div>
		<div id="msg106671" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106671">2017.11.27 22:05:48</a></div>
			<div class="msg_body">Настальгия потянула епта</div>
		</div>
		<div id="msg106672" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106672">2017.11.27 22:05:50</a></div>
			<div class="msg_body">Говорю же</div>
		</div>
		<div id="msg106673" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106673">2017.11.27 22:05:58</a></div>
			<div class="msg_body">Не смог удержаться</div>
		</div>
		<div id="msg106674" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106674">2017.11.27 22:06:07</a></div>
			<div class="msg_body">Первой или правой?</div>
		</div>
		<div id="msg106675" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106675">2017.11.27 22:06:18</a></div>
			<div class="msg_body">Там небольшая тумба с телевизором</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:05:04</div>
			<div class="msg_body"> Он в левом дальнем углу от входа?</div></div></div>
		</div>
		<div id="msg106676" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106676">2017.11.27 22:06:29</a></div>
			<div class="msg_body">Первой</div>
		</div>
		<div id="msg106677" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106677">2017.11.27 22:06:33</a></div>
			<div class="msg_body">Ясненько</div>
		</div>
		<div id="msg106678" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106678">2017.11.27 22:06:41</a></div>
			<div class="msg_body">Херова</div>
		</div>
		<div id="msg106679" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106679">2017.11.27 22:06:46</a></div>
			<div class="msg_body">Даша Петрович</div>
		</div>
		<div id="msg106680" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106680">2017.11.27 22:07:10</a></div>
			<div class="msg_body">Так</div>
		</div>
		<div id="msg106682" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106682">2017.11.27 22:08:34</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(24).png">Стикер #1927</div>
		</div>
		<div id="msg106685" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106685">2017.11.27 22:09:02</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_doc"></div> <img width="400" src="./work with spaces/GRAF_1511802555492.png"></div>
		</div>
		<div id="msg106686" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106686">2017.11.27 22:09:38</a></div>
			<div class="msg_body">Окна так, чисто что бы вы поняли</div>
		</div>
		<div id="msg106687" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106687">2017.11.27 22:09:50</a></div>
			<div class="msg_body">Потом на бумаге нормально начерчу</div>
		</div>
		<div id="msg106692" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106692">2017.11.27 22:10:34</a></div>
			<div class="msg_body">Ндааа</div>
		</div>
		<div id="msg106693" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106693">2017.11.27 22:10:38</a></div>
			<div class="msg_body">Ток оно что-то перевернулось</div>
		</div>
		<div id="msg106694" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106694">2017.11.27 22:10:41</a></div>
			<div class="msg_body">Я вообще неправильно его представлял</div>
		</div>
		<div id="msg106695" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106695">2017.11.27 22:11:24</a></div>
			<div class="msg_body">Не, нарисовал правильно, я просто показала где первая, где вторая половина</div>
		</div>
		<div id="msg106697" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106697">2017.11.27 22:11:53</a></div>
			<div class="msg_body">Я боковые окна уже неправильно видел</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 22:11:24</div>
			<div class="msg_body"> Не, нарисовал правильно, я просто показала где первая, где вторая половина</div></div></div>
		</div>
		<div id="msg106698" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106698">2017.11.27 22:11:56</a></div>
			<div class="msg_body">Абсолютно точная лицевая сторона</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/9N6ZMTZRzSM.jpg">[photo236175365_456240335] (540x405)</div>
		</div>
		<div id="msg106699" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106699">2017.11.27 22:12:01</a></div>
			<div class="msg_body">Я их видел по одной штуке на стену</div>
		</div>
		<div id="msg106700" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106700">2017.11.27 22:12:28</a></div>
			<div class="msg_body">Вообще задуманно было 2 окна</div>
		</div>
		<div id="msg106701" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106701">2017.11.27 22:12:31</a></div>
			<div class="msg_body">Телек на столе (не тумбе) по середине стены слева</div>
		</div>
		<div id="msg106702" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106702">2017.11.27 22:12:37</a></div>
			<div class="msg_body">От входа</div>
		</div>
		<div id="msg106703" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106703">2017.11.27 22:12:44</a></div>
			<div class="msg_body">Шкаф в дальнем левом углу</div>
		</div>
		<div id="msg106704" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106704">2017.11.27 22:12:46</a></div>
			<div class="msg_body">Но когда рисовала графити</div>
		</div>
		<div id="msg106705" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106705">2017.11.27 22:12:53</a></div>
			<div class="msg_body">Сама задумалась</div>
		</div>
		<div id="msg106706" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106706">2017.11.27 22:13:14</a></div>
			<div class="msg_body">Ибо никогда не видела 2-рые окна</div>
		</div>
		<div id="msg106709" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106709">2017.11.27 22:20:01</a></div>
			<div class="msg_body">Как то так</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/7gOJCwe-fM8.jpg">[photo236175365_456240336] (301x540)</div>
		</div>
		<div id="msg106710" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106710">2017.11.27 22:20:59</a></div>
			<div class="msg_body">Совпадает, кроме книжной полки. Там у меня стол, на котором я в свое время делал бутерики разные<img src="./work with spaces/blank.gif" emoji="D83DDE0A" alt="??" class="emoji_css" style="background-position: 0px 0px;"></div>
		</div>
		<div id="msg106711" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106711">2017.11.27 22:21:03</a></div>
			<div class="msg_body">Ну че, время</div>
		</div>
		<div id="msg106712" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106712">2017.11.27 22:21:07</a></div>
			<div class="msg_body">Го к костру?</div>
		</div>
		<div id="msg106713" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106713">2017.11.27 22:21:55</a></div>
			<div class="msg_body">Шкаф и стол со стульями иногда меняются местами</div>
		</div>
		<div id="msg106714" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106714">2017.11.27 22:22:04</a></div>
			<div class="msg_body">Поэтому вместе написала</div>
		</div>
		<div id="msg106715" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106715">2017.11.27 22:22:18</a></div>
			<div class="msg_body">Денис, ты с нами?</div>
		</div>
		<div id="msg106716" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106716">2017.11.27 22:22:23</a></div>
			<div class="msg_body">А вот в дальнем правом углу у меня есть книжная полка</div>
		</div>
		<div id="msg106717" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106717">2017.11.27 22:22:29</a></div>
			<div class="msg_body">Он не в сети</div>
		</div>
		<div id="msg106718" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106718">2017.11.27 22:22:40</a></div>
			<div class="msg_body">Может там, может просто ушел по делам</div>
		</div>
		<div id="msg106719" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106719">2017.11.27 22:22:44</a></div>
			<div class="msg_body">Там не книжная полка</div>
		</div>
		<div id="msg106720" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106720">2017.11.27 22:22:53</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83DDE15.png"></div>
		</div>
		<div id="msg106721" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106721">2017.11.27 22:22:55</a></div>
			<div class="msg_body">А небольшой стенд с книжками</div>
		</div>
		<div id="msg106722" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106722">2017.11.27 22:23:08</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83DDE11.png"></div>
		</div>
		<div id="msg106723" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106723">2017.11.27 22:23:08</a></div>
			<div class="msg_body">Просто приложение к креслу</div>
		</div>
		<div id="msg106724" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106724">2017.11.27 22:24:03</a></div>
			<div class="msg_body">Го?</div>
		</div>
		<div id="msg106726" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106726">2017.11.27 22:24:45</a></div>
			<div class="msg_body">По типу такой хрени, только поуже</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/5itFbtwmV-Y.jpg">[photo236175365_456240337] (364x540)</div>
		</div>
		<div id="msg106727" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106727">2017.11.27 22:24:57</a></div>
			<div class="msg_body">Вроде 5-и этажная</div>
		</div>
		<div id="msg106728" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106728">2017.11.27 22:24:58</a></div>
			<div class="msg_body">Ну</div>
		</div>
		<div id="msg106729" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106729">2017.11.27 22:25:03</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg106730" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106730">2017.11.27 22:25:09</a></div>
			<div class="msg_body">Что ж</div>
		</div>
		<div id="msg106731" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106731">2017.11.27 22:25:24</a></div>
			<div class="msg_body">Не все растерял еще способности</div>
		</div>
		<div id="msg106732" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106732">2017.11.27 22:25:26</a></div>
			<div class="msg_body">Это радует</div>
		</div>
		<div id="msg106733" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106733">2017.11.27 22:25:37</a></div>
			<div class="msg_body">Завтра по возможности нарисую</div>
		</div>
		<div id="msg106734" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106734">2017.11.27 22:25:43</a></div>
			<div class="msg_body">Да уже не надо</div>
		</div>
		<div id="msg106735" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106735">2017.11.27 22:25:48</a></div>
			<div class="msg_body">Все понятно</div>
		</div>
		<div id="msg106736" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106736">2017.11.27 22:25:56</a></div>
			<div class="msg_body">Я детали нарисую</div>
		</div>
		<div id="msg106737" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106737">2017.11.27 22:26:03</a></div>
			<div class="msg_body">Я вот мечтаю такую херь в 3д сделать</div>
		</div>
		<div id="msg106738" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106738">2017.11.27 22:26:12</a></div>
			<div class="msg_body">Что бы правильно картинка сложилась</div>
		</div>
		<div id="msg106739" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106739">2017.11.27 22:26:14</a></div>
			<div class="msg_body">Скажем, на юнити</div>
		</div>
		<div id="msg106740" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106740">2017.11.27 22:26:30</a></div>
			<div class="msg_body">Будет как мини-игра</div>
		</div>
			<div id="msg106749" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106749">2017.11.27 22:27:12</a></div>
				<div class="msg_body">Ты в майнкрафт еще играешь?</div>
			</div>
			<div id="msg106750" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106750">2017.11.27 22:27:19</a></div>
				<div class="msg_body">Не особо</div>
			</div>
			<div id="msg106753" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106753">2017.11.27 22:27:26</a></div>
				<div class="msg_body">Но намек понят</div>
			</div>
			<div id="msg106754" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106754">2017.11.27 22:27:26</a></div>
				<div class="msg_body">Да, там проще</div>
			</div>
			<div id="msg106755" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106755">2017.11.27 22:27:32</a></div>
				<div class="msg_body">)</div>
			</div>
			<div id="msg106756" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106756">2017.11.27 22:27:35</a></div>
				<div class="msg_body">Построю, а потом видюху запишу</div>
			</div>
			<div id="msg106757" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106757">2017.11.27 22:27:41</a></div>
				<div class="msg_body">Просто вспомнила</div>
			</div>
			<div id="msg106758" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106758">2017.11.27 22:27:43</a></div>
				<div class="msg_body">Окей</div>
			</div>
			<div id="msg106759" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106759">2017.11.27 22:28:05</a></div>
				<div class="msg_body">Мне домик отдельно построить?</div>
			</div>
			<div id="msg106760" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106760">2017.11.27 22:28:14</a></div>
				<div class="msg_body">Да не</div>
			</div>
			<div id="msg106761" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106761">2017.11.27 22:28:15</a></div>
				<div class="msg_body">Или дашь сервер?</div>
			</div>
			<div id="msg106762" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106762">2017.11.27 22:28:28</a></div>
				<div class="msg_body">Я уже все увидел</div>
			</div>
			<div id="msg106763" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106763">2017.11.27 22:28:30</a></div>
				<div class="msg_body">Понял т.е.</div>
			</div>
			<div id="msg106764" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106764">2017.11.27 22:28:32</a></div>
				<div class="msg_body">Построю</div>
			</div>
			<div id="msg106765" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106765">2017.11.27 22:28:45</a></div>
				<div class="msg_body">Я на всяк случай тебе скину</div>
			</div>
			<div id="msg106766" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106766">2017.11.27 22:28:57</a></div>
				<div class="msg_body">Правда, наверное, придется в фурнитурных модах порыться, чтоб реалистичнее</div>
			</div>
			<div id="msg106767" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106767">2017.11.27 22:29:04</a></div>
				<div class="msg_body">Ну там цвета, формы, и т.д.</div>
			</div>
			<div id="msg106768" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106768">2017.11.27 22:29:12</a></div>
				<div class="msg_body">Ок</div>
			</div>
		<a name="7exp"></a><h2>7 эксперимент (наполовину удачный) - кикиморы и легионеры</h2>
		<div id="msg106741" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106741">2017.11.27 22:26:34</a></div>
			<div class="msg_body">Ну се</div>
		</div>
		<div id="msg106742" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106742">2017.11.27 22:26:37</a></div>
			<div class="msg_body">Го?</div>
		</div>
		<div id="msg106743" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg106743">2017.11.27 22:26:40</a></div>
			<div class="msg_body">Го</div>
		</div>
		<div id="msg106744" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106744">2017.11.27 22:26:43</a></div>
			<div class="msg_body">О!</div>
		</div>
		<div id="msg106745" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106745">2017.11.27 22:26:46</a></div>
			<div class="msg_body">Какие люди!</div>
		</div>
		<div id="msg106748" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106748">2017.11.27 22:26:59</a></div>
			<div class="msg_body">Го-го</div>
		</div>
			<div id="msg106770" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106770">2017.11.27 22:29:19</a></div>
				<div class="msg_body">Го</div>
			</div>
			<div id="msg106771" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106771">2017.11.27 22:29:30</a></div>
				<div class="msg_body">Если инет будет</div>
			</div>
			<div id="msg106772" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106772">2017.11.27 22:29:38</a></div>
				<div class="msg_body">Заскачу сюды</div>
			</div>
			<div id="msg106773" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106773">2017.11.27 22:43:51</a></div>
				<div class="msg_body">Я тутоньки</div>
			</div>
			<div id="msg106774" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106774">2017.11.27 22:44:30</a></div>
				<div class="msg_body">Я вошел быстро и легко и сразу увидел вас обоих</div>
			</div>
			<div id="msg106775" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106775">2017.11.27 22:44:41</a></div>
				<div class="msg_body">Денис быстро поднялся в домик</div>
			</div>
			<div id="msg106776" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106776">2017.11.27 22:44:52</a></div>
				<div class="msg_body">Я не могла выкинуть мысли из головы</div>
			</div>
			<div id="msg106777" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106777">2017.11.27 22:44:59</a></div>
				<div class="msg_body">Я поприветствовал тебя и мы вместе последовали за Денисом</div>
			</div>
			<div id="msg106778" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106778">2017.11.27 22:45:09</a></div>
				<div class="msg_body">Зашла минуты через 2</div>
			</div>
			<div id="msg106779" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106779">2017.11.27 22:45:16</a></div>
				<div class="msg_body">Немного постояли там, я тебя поблагодарил за то, что вернула веру в себя</div>
			</div>
			<div id="msg106780" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106780">2017.11.27 22:45:31</a></div>
				<div class="msg_body">Потом я почувствовал две вторгшиеся тени</div>
			</div>
			<div id="msg106781" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106781">2017.11.27 22:45:34</a></div>
				<div class="msg_body">Спустился, позвал тебя</div>
			</div>
			<div id="msg106782" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106782">2017.11.27 22:45:40</a></div>
				<div class="msg_body">Подтверждаю</div>
				<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
				<div class="fwd">
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:44:30</div>
				<div class="msg_body"> Я вошел быстро и легко и сразу увидел вас обоих</div>
					</div>
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:44:41</div>
				<div class="msg_body"> Денис быстро поднялся в домик</div>
					</div>
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:44:59</div>
				<div class="msg_body"> Я поприветствовал тебя и мы вместе последовали за Денисом</div>
					</div>
				</div>
			</div>
			<div id="msg106783" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106783">2017.11.27 22:45:41</a></div>
				<div class="msg_body">Они кружили вокруг костра</div>
			</div>
			<div id="msg106784" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106784">2017.11.27 22:45:45</a></div>
				<div class="msg_body">Потом убежали в лес</div>
			</div>
			<div id="msg106785" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106785">2017.11.27 22:45:51</a></div>
				<div class="msg_body">Стоп</div>
			</div>
			<div id="msg106786" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106786">2017.11.27 22:45:56</a></div>
				<div class="msg_body">Ты поколебалась, но после пошла за ними</div>
			</div>
			<div id="msg106787" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106787">2017.11.27 22:46:02</a></div>
				<div class="msg_body">На этом моменте</div>
			</div>
			<div id="msg106788" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106788">2017.11.27 22:46:13</a></div>
				<div class="msg_body">Я побыл с Денисом, тот спустился вниз, прошел к бревну</div>
			</div>
			<div id="msg106789" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106789">2017.11.27 22:46:28</a></div>
				<div class="msg_body">Тут пришел кто-то. Я подумал, ты вернулась</div>
			</div>
			<div id="msg106790" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106790">2017.11.27 22:46:48</a></div>
				<div class="msg_body">Я спустилась, почуяла, что у костра еще пятеро (ты, Денис и еще 3)</div>
			</div>
			<div id="msg106791" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106791">2017.11.27 22:47:04</a></div>
				<div class="msg_body">Я сходила за ними</div>
			</div>
			<div id="msg106792" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106792">2017.11.27 22:47:06</a></div>
				<div class="msg_body">А</div>
			</div>
			<div id="msg106793" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106793">2017.11.27 22:47:07</a></div>
				<div class="msg_body">Забыл</div>
			</div>
			<div id="msg106794" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106794">2017.11.27 22:47:22</a></div>
				<div class="msg_body">Я в самом начале поставил двоих римских легионеров<img src="./work with spaces/blank.gif" emoji="D83DDE0A" alt="??" class="emoji_css" style="background-position: 0px 0px;"></div>
			</div>
			<div id="msg106795" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106795">2017.11.27 22:47:27</a></div>
				<div class="msg_body">Зверушки опасные, но мы вроде подружились</div>
			</div>
			<div id="msg106796" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106796">2017.11.27 22:47:35</a></div>
				<div class="msg_body">Ты вроде даже рассмотрела одного</div>
			</div>
			<div id="msg106797" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106797">2017.11.27 22:47:50</a></div>
				<div class="msg_body">Че за зверушки?</div>
				<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
				<div class="fwd">
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.27 22:47:27</div>
				<div class="msg_body"> Зверушки опасные, но мы вроде подружились</div>
					</div>
				</div>
			</div>
			<div id="msg106798" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106798">2017.11.27 22:48:53</a></div>
				<div class="msg_body">Похожи на болотных кикимор</div>
			</div>
			<div id="msg106799" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106799">2017.11.27 22:49:03</a></div>
				<div class="msg_body">Или леших</div>
			</div>
			<div id="msg106800" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106800">2017.11.27 22:49:09</a></div>
				<div class="msg_body">Крупные</div>
			</div>
			<div id="msg106801" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106801">2017.11.27 22:49:15</a></div>
				<div class="msg_body">С зубками</div>
			</div>
			<div id="msg106802" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106802">2017.11.27 22:49:30</a></div>
				<div class="msg_body">Когтями и крыльями</div>
			</div>
			<div id="msg106803" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106803">2017.11.27 22:49:44</a></div>
				<div class="msg_body">Крылья как у летучих мышей</div>
			</div>
			<div id="msg106804" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106804">2017.11.27 22:50:00</a></div>
				<div class="msg_body">Мдя</div>
			</div>
			<div id="msg106805" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106805">2017.11.27 22:50:04</a></div>
				<div class="msg_body">Я еще сидела на крыльце</div>
			</div>
			<div id="msg106806" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106806">2017.11.27 22:50:17</a></div>
				<div class="msg_body">До "зверушек"</div>
			</div>
			<div id="msg106807" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106807">2017.11.27 22:50:34</a></div>
				<div class="msg_body">И смотрела, как ты ко мне поднялся</div>
			</div>
			<div id="msg106808" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106808">2017.11.27 22:50:45</a></div>
				<div class="msg_body">Еще кто-то был в доме</div>
			</div>
			<div id="msg106809" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106809">2017.11.27 22:50:49</a></div>
				<div class="msg_body">И у костра</div>
			</div>
			<div id="msg106810" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106810">2017.11.27 22:50:55</a></div>
				<div class="msg_body">То бишь итого 4</div>
			</div>
			<div id="msg106811" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106811">2017.11.27 22:51:50</a></div>
				<div class="msg_body">Я кроме вас двоих никого не видел и не чувствовал</div>
			</div>
			<div id="msg106812" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106812">2017.11.27 22:52:04</a></div>
				<div class="msg_body">Ну это было что-то типо глюка</div>
			</div>
			<div id="msg106813" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106813">2017.11.27 22:52:08</a></div>
				<div class="msg_body">Ох и быстро же там время летит... Я там пробыл минуты 3!</div>
			</div>
			<div id="msg106814" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106814">2017.11.27 22:52:41</a></div>
				<div class="msg_body">Будто это было твое прошлое местоположение</div>
			</div>
			<div id="msg106815" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106815">2017.11.27 22:52:46</a></div>
				<div class="msg_body">Ты проверяла сейф?</div>
			</div>
			<div id="msg106816" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106816">2017.11.27 22:52:51</a></div>
				<div class="msg_body">Нет</div>
			</div>
			<div id="msg106817" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106817">2017.11.27 22:52:58</a></div>
				<div class="msg_body">Не трогала</div>
			</div>
			<div id="msg106818" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106818">2017.11.27 22:53:10</a></div>
				<div class="msg_body">Проверю, когда буду наедине</div>
			</div>
			<div id="msg106819" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106819">2017.11.27 22:53:18</a></div>
				<div class="msg_body">Хех</div>
			</div>
			<div id="msg106820" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106820">2017.11.27 22:53:24</a></div>
				<div class="msg_body">Я буду следить<img class="emoji" alt="??" src="./work with spaces/D83DDE11.png"></div>
			</div>
			<div id="msg106821" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106821">2017.11.27 22:54:05</a></div>
				<div class="msg_body">Ты еще вроде хлопнул по плечу или приобнял</div>
				<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
				<div class="fwd">
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:45:16</div>
				<div class="msg_body"> Немного постояли там, я тебя поблагодарил за то, что вернула веру в себя</div>
					</div>
				</div>
			</div>
			<div id="msg106822" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106822">2017.11.27 22:54:21</a></div>
				<div class="msg_body">Да, хлопал</div>
			</div>
			<div id="msg106823" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106823">2017.11.27 22:54:35</a></div>
				<div class="msg_body">Даже дважды. Один раз при встрече, другой раз в домике</div>
			</div>
			<div id="msg106824" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106824">2017.11.27 22:54:55</a></div>
				<div class="msg_body">Я не тебя опасаюсь, а обитателей сна</div>
				<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
				<div class="fwd">
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:53:18</div>
				<div class="msg_body"> Хех</div>
					</div>
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:53:24</div>
				<div class="msg_body"> Я буду следить<img class="emoji" alt="??" src="./work with spaces/D83DDE11.png"></div>
					</div>
				</div>
			</div>
			<div id="msg106825" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106825">2017.11.27 22:55:05</a></div>
				<div class="msg_body">+</div>
				<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
				<div class="fwd">
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:54:21</div>
				<div class="msg_body"> Да, хлопал</div>
					</div>
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:54:35</div>
				<div class="msg_body"> Даже дважды. Один раз при встрече, другой раз в домике</div>
					</div>
				</div>
			</div>
			<div id="msg106826" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106826">2017.11.27 22:55:22</a></div>
				<div class="msg_body">Круууууть!!!!!!!!!!</div>
			</div>
			<div id="msg106827" class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg106827">2017.11.27 22:55:22</a></div>
				<div class="msg_body">Я не нашел смайла с биноклем<img src="./work with spaces/blank.gif" emoji="D83DDE22" alt="??" class="emoji_css" style="background-position: 0px -187px;"></div>
				<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
				<div class="fwd">
					<div class="msg_item">
				<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.27 22:53:24</div>
				<div class="msg_body"> Я буду следить<img class="emoji" alt="??" src="./work with spaces/D83DDE11.png"></div>
					</div>
				</div>
			</div>
			<div id="msg106828" class="msg_item">
				<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
				<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg106828">2017.11.27 22:55:32</a></div>
				<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
			</div><hr><a name="8exp"></a><h2>8 эксперимент (неудачный)</h2>
		<div id="msg107437" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107437">2017.11.28 20:55:27</a></div>
			<div class="msg_body">Я через пару минут к костру</div>
		</div>
		<div id="msg107438" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107438">2017.11.28 20:55:36</a></div>
			<div class="msg_body">Кто со мной?</div>
		</div>
		<div id="msg107439" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107439">2017.11.28 20:55:37</a></div>
			<div class="msg_body">Нах?</div>
		</div>
		<div id="msg107440" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107440">2017.11.28 20:55:50</a></div>
			<div class="msg_body">Ну у меня тип 21:55</div>
		</div>
		<div id="msg107441" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107441">2017.11.28 20:56:44</a></div>
			<div class="msg_body">С каких это пор ты ложишься в 22:00?</div>
		</div>
		<div id="msg107442" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107442">2017.11.28 20:57:19</a></div>
			<div class="msg_body">Я спать хочу</div>
		</div>
		<div id="msg107443" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107443">2017.11.28 20:57:21</a></div>
			<div class="msg_body">Не, я пойду с тобой, я и сам спать хочу</div>
		</div>
		<div id="msg107444" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107444">2017.11.28 20:57:36</a></div>
			<div class="msg_body">Хах</div>
		</div>
		<div id="msg107445" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107445">2017.11.28 20:57:45</a></div>
			<div class="msg_body">Я НЕ ВЫСЫПАЮСЬ!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!</div>
		</div>
		<div id="msg107446" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107446">2017.11.28 20:57:56</a></div>
			<div class="msg_body">Уууй</div>
		</div>
		<div id="msg107447" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107447">2017.11.28 20:57:58</a></div>
			<div class="msg_body">Заметно</div>
		</div>
		<div id="msg107448" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107448">2017.11.28 20:58:17</a></div>
			<div class="msg_body">Го?</div>
		</div>
		<div id="msg107449" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107449">2017.11.28 20:58:17</a></div>
			<div class="msg_body">Ока</div>
		</div>
		<div id="msg107450" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107450">2017.11.28 20:58:18</a></div>
			<div class="msg_body">Го?</div>
		</div>
		<div id="msg107451" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107451">2017.11.28 20:58:22</a></div>
			<div class="msg_body">Го</div>
		</div>
		<div id="msg107457" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107457">2017.11.28 21:07:25</a></div>
			<div class="msg_body">Я зашла на костер</div>
		</div>
		<div id="msg107458" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107458">2017.11.28 21:07:36</a></div>
			<div class="msg_body">Поприветствовала Денни</div>
		</div>
		<div id="msg107459" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107459">2017.11.28 21:07:45</a></div>
			<div class="msg_body">Посмотрела на домик</div>
		</div>
		<div id="msg107460" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107460">2017.11.28 21:07:59</a></div>
			<div class="msg_body">Сделала круг вокруг костра</div>
		</div>
		<div id="msg107461" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107461">2017.11.28 21:08:09</a></div>
			<div class="msg_body">Посмотрела на небо</div>
		</div>
		<div id="msg107462" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107462">2017.11.28 21:08:15</a></div>
			<div class="msg_body">На пролетающих птиц</div>
		</div>
		<div id="msg107463" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107463">2017.11.28 21:08:21</a></div>
			<div class="msg_body">Пошла в домик</div>
		</div>
		<div id="msg107464" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107464">2017.11.28 21:08:25</a></div>
			<div class="msg_body">Поднялась</div>
		</div>
		<div id="msg107465" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107465">2017.11.28 21:08:33</a></div>
			<div class="msg_body">Села на крыльцо</div>
		</div>
		<div id="msg107466" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107466">2017.11.28 21:08:45</a></div>
			<div class="msg_body">Денни вроде пошел за мной</div>
		</div>
		<div id="msg107467" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107467">2017.11.28 21:08:53</a></div>
			<div class="msg_body">Но прошел мимо</div>
		</div>
		<div id="msg107468" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107468">2017.11.28 21:08:58</a></div>
			<div class="msg_body">Зашел в домик</div>
		</div>
		<div id="msg107469" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107469">2017.11.28 21:09:04</a></div>
			<div class="msg_body">На улице похолодало</div>
		</div>
		<div id="msg107470" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107470">2017.11.28 21:09:23</a></div>
			<div class="msg_body">Я решила посидеть на веранде</div>
		</div>
		<div id="msg107471" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107471">2017.11.28 21:09:56</a></div>
			<div class="msg_body">Вспомнила о книжной полке</div>
		</div>
		<div id="msg107472" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107472">2017.11.28 21:10:01</a></div>
			<div class="msg_body">Взяла книгу</div>
		</div>
		<div id="msg107473" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107473">2017.11.28 21:10:21</a></div>
			<div class="msg_body">Вспомнила, что три верхние полки - литература ХС</div>
		</div>
		<div id="msg107474" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107474">2017.11.28 21:11:01</a></div>
			<div class="msg_body">Открыла середину книги, пусто. "Логично" - подумала я</div>
		</div>
		<div id="msg107475" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107475">2017.11.28 21:11:15</a></div>
			<div class="msg_body">Еще две страницы пустые</div>
		</div>
		<div id="msg107476" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107476">2017.11.28 21:11:54</a></div>
			<div class="msg_body">А потом страница со скрытым шрифтом, как в тумане, а в центре эта надпись. Напрягла зрение, присмотрелась</div>
		</div>
		<div id="msg107454" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107454">2017.11.28 21:06:53</a></div>
			<div class="msg_body">"Он не хотел этого делать. За что это ему? Пусть будет, то что должно было случиться. Давно уже бегаете от этого, может хватит?"</div>
		</div>
		<div id="msg107477" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107477">2017.11.28 21:12:02</a></div>
			<div class="msg_body">Увидела это</div>
		</div>
		<div id="msg107478" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107478">2017.11.28 21:12:27</a></div>
			<div class="msg_body">Когда в дом заходила - чуяла Денни, но не видела, что он делает</div>
		</div>
		<div id="msg107479" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107479">2017.11.28 21:12:46</a></div>
			<div class="msg_body">То ли шкаф разглядывал, то ли записки на столе</div>
		</div>
		<div id="msg107480" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107480">2017.11.28 21:12:55</a></div>
			<div class="msg_body">То ли просто интерьер</div>
		</div>
		<div id="msg107482" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107482">2017.11.28 21:13:02</a></div>
			<div class="msg_body">А может думал о чем-то</div>
		</div><hr>
		<div id="msg107488" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107488">2017.11.29 02:23:46</a></div>
			<div class="msg_body">До этого момента соглашусь. Дальше - нет</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.11.28 21:07:59</div>
			<div class="msg_body"> Сделала круг вокруг костра</div></div></div>
		</div>
		<div id="msg107489" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107489">2017.11.29 02:24:40</a></div>
			<div class="msg_body">Я сидел на бревне</div>
		</div>
		<div id="msg107490" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107490">2017.11.29 02:24:44</a></div>
			<div class="msg_body">Чувствовал троих</div>
		</div>
		<div id="msg107491" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107491">2017.11.29 02:24:53</a></div>
			<div class="msg_body">Кто-то сидел рядом со мной</div>
		</div>
		<div id="msg107492" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107492">2017.11.29 02:25:06</a></div>
			<div class="msg_body">Еще один стоял по другую сторону костра</div>
		</div>
		<div id="msg107493" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107493">2017.11.29 02:25:09</a></div>
			<div class="msg_body">А потом...</div>
		</div>
		<div id="msg107494" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107494">2017.11.29 02:26:26</a></div>
			<div class="msg_body">Потом я отчетливо услышал "Данил". Причем голосом Дарины. Это было так реалистично, будто бы ты лежала рядом с мной и в голос позвала меня</div>
		</div>
		<div id="msg107495" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107495">2017.11.29 02:27:24</a></div>
			<div class="msg_body">У меня аж внутри все сжалось и похолодело, я прям чувствовал, как расширяются зрачки, а по коже бегут мурашки. Меня выбросило с костра, но я с усилием успокоился и вернулся туда</div>
		</div>
		<div id="msg107496" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107496">2017.11.29 02:27:32</a></div>
			<div class="msg_body">Не без труда, надо сказать</div>
		</div>
		<div id="msg107510" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107510">2017.11.29 02:30:07</a></div>
			<div class="msg_body">А потом я благополучно уснул, забыв сон</div>
		</div>
		<div id="msg107511" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107511">2017.11.29 02:30:23</a></div>
			<div class="msg_body">Эх... 2 часа ночи - не время вспоминать сны</div>
		</div>
		<div id="msg107512" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107512">2017.11.29 02:30:40</a></div>
			<div class="msg_body">Причем я уже второй раз после костра просыпаюсь ровно в 2:10</div>
		</div>
		<div id="msg107513" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107513">2017.11.29 02:30:44</a></div>
			<div class="msg_body">Как по часам</div>
		</div>
		<div id="msg107517" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg107517">2017.11.29 02:32:04</a></div>
			<div class="msg_body">Когда я увижусь с вами на костре, я буду двигать облака от радости</div>
		</div>
		<div id="msg107520" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107520">2017.11.29 02:32:42</a></div>
			<div class="msg_body">А я вот запутался...</div>
		</div>
		<div id="msg107521" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107521">2017.11.29 02:32:53</a></div>
			<div class="msg_body">Дарину я обычно хорошо воспринимаю</div>
		</div>
		<div id="msg107522" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107522">2017.11.29 02:33:16</a></div>
			<div class="msg_body">А все остальное, что я вижу у костра - глюки и иллюзии чистой воды</div>
		</div>
		<div id="msg107523" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107523">2017.11.29 02:33:33</a></div>
			<div class="msg_body">Настроен я на нее, что ли...</div>
		</div>
		<div id="msg107524" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg107524">2017.11.29 02:33:50</a></div>
			<div class="msg_body">Ну... это понятное дело</div>
		</div>
		<div id="msg107525" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg107525">2017.11.29 02:34:15</a></div>
			<div class="msg_body">Воспоминания часто прокручиваешь?</div>
		</div>
		<div id="msg107526" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107526">2017.11.29 02:34:26</a></div>
			<div class="msg_body">Не больше пары раз</div>
		</div>
		<div id="msg107527" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg107527">2017.11.29 02:35:37</a></div>
			<div class="msg_body">Наслаждайся моментами<img class="emoji" alt="??" src="./work with spaces/D83DDE43.png"></div>
		</div>
		<div id="msg107528" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107528">2017.11.29 02:36:26</a></div>
			<div class="msg_body">Вспоминать приятно... Это да... Но как-то пока не хочется. Обстановка не та</div>
		</div>
		<div id="msg107949" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107949">2017.11.29 11:04:21</a></div>
			<div class="msg_body">Я тебя звала только тогда, когда ты мимо меня в дом пошел. И все</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.11.29 02:26:26</div>
			<div class="msg_body"> Потом я отчетливо услышал "Данил". Причем голосом Дарины. Это было так реалистично, будто бы ты лежала рядом с мной и в голос позвала меня</div></div></div>
		</div>
		<div id="msg107950" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107950">2017.11.29 11:04:46</a></div>
			<div class="msg_body">Вот только я в дом не ходил</div>
		</div>
		<div id="msg107951" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107951">2017.11.29 11:04:47</a></div>
			<div class="msg_body">Совсем</div>
		</div>
		<div id="msg107996" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107996">2017.11.29 12:39:26</a></div>
			<div class="msg_body">Забыл! Я же вчера неожиданно для себя обнаружил траву на светлой поляне!</div>
		</div>
		<div id="msg107997" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg107997">2017.11.29 12:40:28</a></div>
			<div class="msg_body">А я тебе говорила про нее</div>
		</div>
		<div id="msg107998" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107998">2017.11.29 12:49:50</a></div>
			<div class="msg_body">Да</div>
		</div>
		<div id="msg107999" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg107999">2017.11.29 12:50:01</a></div>
			<div class="msg_body">Ток увидел я ее ток седня</div>
		</div>
		<div id="msg108000" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg108000">2017.11.29 12:50:07</a></div>
			<div class="msg_body">До этого почва была голая и каменистая</div>
		</div><hr>
		<a name="dreams"></a><h2>Сны</h2>
		<div id="msg108762" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg108762">2017.11.30 11:02:24</a></div>
			<div class="msg_body">Такой сон странный снился... Я играл в майн, строил там на пустынном берегу многоэтажные дома из камня и терракота. Они потом превращались в настоящие, в которые я, в порядке обычного сна, проникал и хотел что-то украсть. После того я вновь возвращался в майнкрафт. У одного дома я встретил Бряка, который спросил, чем я занимаюсь. Я что-то начал объяснять, после чего мы перешли к деятелности Влада. Он начал рассказывать, что делает вообще по жизни - узнает о жизни как можно больше и что-то еще... Често, диалогов не помню совсем. Чисто остаточные воспоминания и ощущения.<br>После я перенесся в село, которое чувствовалось, как местность вокруг моего дома. Я шел домой, неся бутылку с зеленой жидкостью. По пути я вылил в невесть откуда взявшийся унитаз ее содержимое, однако бутылка не опустела ни на грамм, а унитаз был заполнен до краев. Пройдя дальше, эмиссар начал говорить: "Ты слил из бутылки осадок Са... (Кальций+кислотный остаток, который я не запомнил), который образовался из... соединений. То, что осталось, - вода с красителем. Она не нужна. Главное - остаток. Так и со Знанием - нужно отделить бессмысленное, оставив самое полезное."<br>После я проснулся</div>
		</div>
		<div id="msg108763" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108763">2017.11.30 12:26:32</a></div>
			<div class="msg_body">Только странно, смотри остаток ты вылил, а воду оставил</div>
		</div>
		<div id="msg108764" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108764">2017.11.30 12:26:42</a></div>
			<div class="msg_body">Хотя нужно было наоборот</div>
		</div>
		<div id="msg108765" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108765">2017.11.30 12:26:51</a></div>
			<div class="msg_body">Может это намек?</div>
		</div>
		<div id="msg108766" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108766">2017.11.30 12:27:16</a></div>
			<div class="msg_body">Типо ты что-то не так делаешь</div>
		</div>
		<div id="msg108767" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108767">2017.11.30 12:27:20</a></div>
			<div class="msg_body">Ну или мы</div>
		</div>
		<div id="msg108768" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg108768">2017.11.30 12:31:11</a></div>
			<div class="msg_body">?\_(?)_/?</div>
		</div>
		<div id="msg108769" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg108769">2017.11.30 12:32:20</a></div>
			<div class="msg_body">Мы обращаем внимание не на то</div>
		</div>
		<div id="msg108770" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg108770">2017.11.30 12:32:23</a></div>
			<div class="msg_body">Игнорируя главное</div>
		</div>
		<div id="msg108771" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg108771">2017.11.30 12:32:43</a></div>
			<div class="msg_body">Надо попробовать пересмотреть свою деятельность</div>
		</div>
		<div id="msg108787" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg108787">2017.11.30 13:35:27</a></div>
			<div class="msg_body">А если трактовать как сонник</div>
		</div>
		<div id="msg108788" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg108788">2017.11.30 13:36:28</a></div>
			<div class="msg_body">То задуманное свершилось, не дав плодов, а закончить надо, а результат как рыба об лед</div>
		</div>
		<div id="msg108789" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg108789">2017.11.30 13:37:04</a></div>
			<div class="msg_body">Тоже верно....</div>
		</div>
		<div id="msg108790" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108790">2017.11.30 14:12:36</a></div>
			<div class="msg_body">Мне сегодня обычный сон приснился</div>
		</div>
		<div id="msg108791" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108791">2017.11.30 14:12:51</a></div>
			<div class="msg_body">Тип я с сориков приехала</div>
		</div>
		<div id="msg108792" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108792">2017.11.30 14:12:59</a></div>
			<div class="msg_body">Вышла с поезда обнять маму</div>
		</div>
		<div id="msg108793" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108793">2017.11.30 14:13:10</a></div>
			<div class="msg_body">И чемодан в вагоне забыла</div>
		</div>
		<div id="msg108794" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108794">2017.11.30 14:13:31</a></div>
			<div class="msg_body">Разворачиваюсь, а поезд уже уехал</div>
		</div>
		<div id="msg108795" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108795">2017.11.30 14:13:39</a></div>
			<div class="msg_body">Ну мама орет на меня</div>
		</div>
		<div id="msg108796" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108796">2017.11.30 14:13:47</a></div>
			<div class="msg_body">А я звоню в такси</div>
		</div>
		<div id="msg108797" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108797">2017.11.30 14:14:01</a></div>
			<div class="msg_body">Рядом со мной мужик берет трубку</div>
		</div>
		<div id="msg108798" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108798">2017.11.30 14:14:20</a></div>
			<div class="msg_body">Он оказывается и есть мой таксист</div>
		</div>
		<div id="msg108799" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108799">2017.11.30 14:14:28</a></div>
			<div class="msg_body">Едем в Ленинский</div>
		</div>
		<div id="msg108800" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108800">2017.11.30 14:14:38</a></div>
			<div class="msg_body">(Поселок через речку)</div>
		</div>
		<div id="msg108801" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108801">2017.11.30 14:14:48</a></div>
			<div class="msg_body">На машине туда быстрее попасть</div>
		</div>
		<div id="msg108802" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108802">2017.11.30 14:15:11</a></div>
			<div class="msg_body">Приезжаю, забрала вещи</div>
		</div>
		<div id="msg108803" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108803">2017.11.30 14:15:26</a></div>
			<div class="msg_body">Не успела выйти с поезда</div>
		</div>
		<div id="msg108804" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108804">2017.11.30 14:15:33</a></div>
			<div class="msg_body">Уехала в Алмату</div>
		</div>
		<div id="msg108805" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108805">2017.11.30 14:15:56</a></div>
			<div class="msg_body">Там я с каким-то парнем бизнес открыла</div>
		</div>
		<div id="msg108806" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108806">2017.11.30 14:16:03</a></div>
			<div class="msg_body">Нелегальный</div>
		</div>
		<div id="msg108807" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108807">2017.11.30 14:16:09</a></div>
			<div class="msg_body">А потом нас спалили</div>
		</div>
		<div id="msg108808" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108808">2017.11.30 14:16:23</a></div>
			<div class="msg_body">И мы сожгли все здания для заметания следов</div>
		</div>
		<div id="msg108809" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108809">2017.11.30 14:16:33</a></div>
			<div class="msg_body">Сами домой пошли</div>
		</div>
		<div id="msg108810" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108810">2017.11.30 14:16:58</a></div>
			<div class="msg_body">Потом власти нам выразили соболезнование, что здание сгорело</div>
		</div>
		<div id="msg108811" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108811">2017.11.30 14:17:15</a></div>
			<div class="msg_body">И выплатили 1 млн долларов</div>
		</div>
		<div id="msg108812" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108812">2017.11.30 14:17:41</a></div>
			<div class="msg_body">А мы купили 3-ех этажный огроменный дом</div>
		</div>
		<div id="msg108813" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108813">2017.11.30 14:17:52</a></div>
			<div class="msg_body">Потом будильник прозвенел</div>
		</div>
		<div id="msg108814" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108814">2017.11.30 14:20:06</a></div>
			<div class="msg_body">Сон был бы обычным</div>
		</div>
		<div id="msg108815" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108815">2017.11.30 14:20:28</a></div>
			<div class="msg_body">Если бы я не запомнила его до мизерных деталей</div>
		</div>
		<div id="msg108816" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg108816">2017.11.30 14:21:09</a></div>
			<div class="msg_body">От полных диалогов до того, во что были одеты люди (массовка) на вокзале</div>
		</div>
		<div id="msg108817" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg108817">2017.11.30 14:23:03</a></div>
			<div class="msg_body">Ого</div>
		</div>
		<div id="msg108818" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg108818">2017.11.30 14:23:08</a></div>
			<div class="msg_body">Много событий</div>
		</div><hr>
		<a name="inHistory"></a><h2>След в магической истории</h2>
		<div id="msg109026" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109026">2017.12.01 10:37:46</a></div>
			<div class="msg_body">Интересно... Орден Золотой Зари в 19 веке (может и раньше) имплантировали свою локацию в сон и скрыли там свои архивы, которые позже обнаружили ХС</div>
		</div>
		<div id="msg109027" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109027">2017.12.01 10:38:01</a></div>
			<div class="msg_body">Интересно, а найдут ли другие сновидцы наш костер?</div>
		</div>
		<div id="msg109028" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109028">2017.12.01 10:38:23</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(7).png">Стикер #46</div>
		</div>
		<div id="msg109029" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109029">2017.12.01 10:38:57</a></div>
			<div class="msg_body">Это, если что, ковбойский луна-парк, что севернее нашего костра. На карте он отмечен</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 10:37:46</div>
			<div class="msg_body"> Интересно... Орден Золотой Зари в 19 веке (может и раньше) имплантировали свою локацию в сон и скрыли там свои архивы, которые позже обнаружили ХС</div></div></div>
		</div>
		<div id="msg109030" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109030">2017.12.01 10:39:07</a></div>
			<div class="msg_body">Будет прикольно</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 10:38:01</div>
			<div class="msg_body"> Интересно, а найдут ли другие сновидцы наш костер?</div></div></div>
		</div>
		<div id="msg109031" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109031">2017.12.01 10:39:20</a></div>
			<div class="msg_body">Оставить свой след в магической истории<img src="./work with spaces/blank.gif" emoji="D83DDE0A" alt="??" class="emoji_css" style="background-position: 0px 0px;"></div>
		</div>
		<div id="msg109032" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109032">2017.12.01 10:39:47</a></div>
			<div class="msg_body">Ага, было бы неплохо<img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"></div>
		</div>
		<a name="inReal"></a><h2>Костер в реальности</h2>
		<div id="msg109033" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109033">2017.12.01 10:43:12</a></div>
			<div class="msg_body">Я тут подумал... Нет, подумал я еще давно, но ток щас дошел до озвучивания идеи</div>
		</div>
		<div id="msg109034" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109034">2017.12.01 10:46:53</a></div>
			<div class="msg_body">Мы создали наш костер с помощью воображения и тот непонятным рандомайзером имплантировался в сновиденный мир. (Причем, в один район с другим человеческим имплантом. Совпадение?)<br>А что, если создать тем же способом свое особое пространство в реале? Мы знаем, что костер способен нарушать действие фундаментальных программ сознания (оспрайтизации (лишения осознанности) и сновиденной программы; и это как минимум!); также, мы можем контролировать настройки того пространства. К чему приведет создание воображаемого/виртуального пространства в реальности? К нарушению каких программ? К насколько обширному контролю над пространством в указанной зоне?</div>
		</div>
		<div id="msg109035" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109035">2017.12.01 10:51:24</a></div>
			<div class="msg_body">Это будет сложнее</div>
		</div>
		<div id="msg109036" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109036">2017.12.01 10:51:35</a></div>
			<div class="msg_body">Ну логично</div>
		</div>
		<div id="msg109037" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109037">2017.12.01 10:51:45</a></div>
			<div class="msg_body">Сновиденный мир по определению пластичен</div>
		</div>
		<div id="msg109039" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109039">2017.12.01 10:51:55</a></div>
			<div class="msg_body">А наше воображение вообще пюре</div>
		</div>
		<div id="msg109038" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109038">2017.12.01 10:51:51</a></div>
			<div class="msg_body">Мы должны будем попасть на костер в реальности между пробуждением и реальностью</div>
		</div>
		<div id="msg109040" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109040">2017.12.01 10:52:11</a></div>
			<div class="msg_body">Я не об этом думал...</div>
		</div>
		<div id="msg109041" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109041">2017.12.01 10:52:24</a></div>
			<div class="msg_body">Но... Тоже могут быть интересные результаты!</div>
		</div>
		<div id="msg109042" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109042">2017.12.01 10:53:05</a></div>
			<div class="msg_body">Я думал в реальности создавать новые пространства, как ты во сне делаешь новые шары восприятия</div>
		</div>
		<div id="msg109043" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109043">2017.12.01 10:54:05</a></div>
			<div class="msg_body">На ландшафт оно влиять не будет, но в существующих пространствах будет создавать зоны, принадлежащие хозяину и с особыми свойствами</div>
		</div>
		<div id="msg109044" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109044">2017.12.01 10:54:19</a></div>
			<div class="msg_body">Короче, это как рисовать пентаграмму вокруг себя</div>
		</div>
		<div id="msg109045" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109045">2017.12.01 10:54:47</a></div>
			<div class="msg_body">Ты ее нарисовал и, своей верой в защитную силу символа, наделил данную зону свойствами защиты от нечисти</div>
		</div>
		<div id="msg109064" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109064">2017.12.01 12:54:46</a></div>
			<div class="msg_body">Все сказать забываю.<br>Я вчера довольно продуктивно посидел у костра. Увидел качели, создал кресло-качалку, в котором классно так посидел, посадил ловушку в кусты, поселил эмоцию в домик</div>
		</div>
		<div id="msg109065" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109065">2017.12.01 13:44:31</a></div>
			<div class="msg_body">О</div>
		</div>
		<div id="msg109066" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109066">2017.12.01 13:44:41</a></div>
			<div class="msg_body">Значит мои качели прижились</div>
		</div>
		<div id="msg109067" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109067">2017.12.01 13:56:40</a></div>
			<div class="msg_body">Они как садовые? Т.е. со спинкой, из ткани</div>
		</div>
		<div id="msg109068" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109068">2017.12.01 13:57:04</a></div>
			<div class="msg_body">А вот с количеством мест я путаюсь, они не то двухместные, не то одноместные</div>
		</div>
		<div id="msg109143" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109143">2017.12.01 15:16:04</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 14:32:13</div>
			<div class="msg_body"> Я поразмышлял над этим. У меня почему-то возникло ощущение, что в реальности сбываются только те намерения, которые никому не мешают (под этим никого я подразумеваю могущественное существо которое преследует в мире свои цели и у которого заготовлены на будущее свои цепочки событий, которым мы своим намерением можем противоречить). Однако играет роль сила. У кого больше силы, тот и может прервать/отменить намерение другого. Это всё взято из ощущений. Никаких фактов подтверждающих эту теорию у меня нет. Поэтому решил излить тебе,может у тебя есть подобные ощущения.</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 10:46:53</div>
			<div class="msg_body"> Мы создали наш костер с помощью воображения и тот непонятным рандомайзером имплантировался в сновиденный мир. (Причем, в один район с другим человеческим имплантом. Совпадение?)<br>А что, если создать тем же способом свое особое пространство в реале? Мы знаем, что костер способен нарушать действие фундаментальных программ сознания (оспрайтизации (лишения осознанности) и сновиденной программы; и это как минимум!); также, мы можем контролировать настройки того пространства. К чему приведет создание воображаемого/виртуального пространства в реальности? К нарушению каких программ? К насколько обширному контролю над пространством в указанной зоне?</div></div></div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 14:33:18</div>
			<div class="msg_body"> И соответственно возвращаясь к теме личного пространства в реале, я опять же подумал, что это возможно только никому не мешая, что очень маловероятно.</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:35:31</div>
			<div class="msg_body"> Я с тобой согласен. А невозможно то, что мешает этому никому, потому, что этот кто-то обладает бОльшей силой, знаниями и опытом. Т.е. в определенных ситуациях нужно вложить много силы в намерение, чтобы преодолеть сопротивление</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:37:07</div>
			<div class="msg_body"> Мне думается, что в разных ситуациях сопротивление разной силы. Т.е. нет только "Дух согласен" и "Дух несогласен". Есть градация, определяющая, сколько усилий надо применить, чтобы протолкнуть свое желание в мир</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:38:05</div>
			<div class="msg_body"> Но из этого выходит, что либо Дух обладает нечеловеческим поведением, либо он является чем-то иным, неразумным существом</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:38:24</div>
			<div class="msg_body"> Скорее, не существом вообще</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 14:40:33</div>
			<div class="msg_body"> Ты похоже меня неправильно понял. Я имел ввиду, что есть куча разных могущественных существ в мире, которые преследуют свои цели и есть люди, которые только в виде исключения иногда добиваются своих целей посредством соперничества с ними (силой). И чтобы намерение человека сбылось, нужно очень много энергии и силы. Вот. Или ты всё понял именно так?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:41:38</div>
			<div class="msg_body"> А вдруг Дух и является совокупностью уже встроенных в мир желаний?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:41:52</div>
			<div class="msg_body"> Никто и никогда не давал определения Духу</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:42:05</div>
			<div class="msg_body"> Мы не знаем, что он такое</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:42:18</div>
			<div class="msg_body"> Но его существование констатируют почти все маги</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 14:42:24</div>
			<div class="msg_body"> И так же есть вариант, что люди, не противореча ни одному из существ, не встречая сопротивления, получают результат своего намерения</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:42:48</div>
			<div class="msg_body"> Это когда их намерение ничему не переходит дорогу</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 14:43:02</div>
			<div class="msg_body"> Ну хз вообще-то</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:41:38</div>
			<div class="msg_body"> А вдруг Дух и является совокупностью уже встроенных в мир желаний?</div>
				</div>
			</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:43:12</div>
			<div class="msg_body"> Вот именно</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:45:03</div>
			<div class="msg_body"> Никто не знает, кем или чем он является. Можо лишь выдвинуть несколько гипотез. Это может быть программа, созданная, чтобы поддерживать существование Орла. Это может быть самый могущественный маг всех времен. Это может быть вышеописанная совокупность. Или же совокупностью сразу нескольких сущностей</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 14:45:44</div>
			<div class="msg_body"> И, мне кажется, никто не узнает, чем является Дух</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:05:24</div>
			<div class="msg_body"> Я во всем с тобой согласен</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 15:06:17</div>
			<div class="msg_body"> Почему ты считаешь так же? Тоже ощущения?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:06:26</div>
			<div class="msg_body"> Логика</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:06:40</div>
			<div class="msg_body"> Основанная на знаниях</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:06:46</div>
			<div class="msg_body"> Все банально</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:08:05</div>
			<div class="msg_body"> Получается, что создание виртуального пространства в реале возможно при условии, что оно не будет никому мешать</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 15:08:23</div>
			<div class="msg_body"> да</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:08:47</div>
			<div class="msg_body"> Нууу... А мешает ли оно кому мы узнаем лишь попытавшись создать его</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 15:10:21</div>
			<div class="msg_body"> У тебя такое бывает, что ты заранее понимаешь, сработает намерение или нет? У меня да. И с помощью этого ощущения можно понять мешает оно кому-то или нет</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:11:06</div>
			<div class="msg_body"> Что-то внутри меня почти всегда знает, сработает оно или нет. Только услышать его трудно, а прислушаться - почти невозможно</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 15:11:23</div>
			<div class="msg_body"> Так же</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:11:33</div>
			<div class="msg_body"> Т.е. мое сознание часто не хочет признавать правду</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:11:48</div>
			<div class="msg_body"> Ну а тут уже чистая психология</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 15:14:18</div>
			<div class="msg_body"> Там пути воина, отсутствие привязанностей, смирение, осознание смерти, и прочая хня</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/95ozO1BHDFE.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Владислав Брежнев</b> <a href="http://vk.com/id172240516" target="_blank">@id172240516</a> 2017.12.01 15:14:51</div>
			<div class="msg_body"> Да,всё именно так же</div></div></div>
		</div>
		<div id="msg109184" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109184">2017.12.01 18:34:12</a></div>
			<div class="msg_body">Две одноместные</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.01 13:57:04</div>
			<div class="msg_body"> А вот с количеством мест я путаюсь, они не то двухместные, не то одноместные</div></div></div>
		</div>
		<div id="msg109186" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109186">2017.12.01 19:01:00</a></div>
			<div class="msg_body">О как</div>
		</div><hr>
		<a name="9exp"></a><h2>9 эксперимент (удачный) - порталы</h2>
		<div id="msg109670" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg109670">2017.12.02 19:29:55</a></div>
			<div class="msg_body">Ладно я спать, заскочу на костёр заодно<br>Всем ОСов</div>
		</div>
		<div id="msg109671" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109671">2017.12.02 19:30:05</a></div>
			<div class="msg_body">Стоять</div>
		</div>
		<div id="msg109674" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109674">2017.12.02 19:30:13</a></div>
			<div class="msg_body">Подождешь полчасика</div>
		</div>
		<div id="msg109675" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109675">2017.12.02 19:30:19</a></div>
			<div class="msg_body">Я с тобой свалю</div>
		</div>
		<div id="msg109676" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg109676">2017.12.02 19:30:23</a></div>
			<div class="msg_body">Визуны</div>
		</div>
		<div id="msg109677" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg109677">2017.12.02 19:30:26</a></div>
			<div class="msg_body">Нет я спать хочу</div>
		</div>
		<div id="msg109679" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109679">2017.12.02 19:30:35</a></div>
			<div class="msg_body">Стой!</div>
		</div>
		<div id="msg109680" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg109680">2017.12.02 19:30:44</a></div>
			<div class="msg_body">0:30 у меня время</div>
		</div>
		<div id="msg109681" class="msg_item">
			<div class="upic"><img src="./work with spaces/b28VrEhDNMs.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Денис Абдураманов</b> <a href="http://vk.com/id57804205" target="_blank">@tinyko</a> <a href="#msg109681">2017.12.02 19:31:00</a></div>
			<div class="msg_body">17<br>:38</div>
		</div>
		<div id="msg109682" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109682">2017.12.02 19:31:29</a></div>
			<div class="msg_body">Когда в сон начнешь погружаться, сходи в этом направлении</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/tBhhvh6oPxg.jpg">[photo236175365_456240376] (540x405)</div>
		</div>
		<div id="msg109684" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109684">2017.12.02 19:31:39</a></div>
			<div class="msg_body">Потом скажешь, что приснилось</div>
		</div>
		<div id="msg109685" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg109685">2017.12.02 19:31:52</a></div>
			<div class="msg_body">Ок</div>
		</div>
		<div id="msg109686" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109686">2017.12.02 19:31:56</a></div>
			<div class="msg_body">Спасибо</div>
		</div>
		<div id="msg109688" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109688">2017.12.02 19:32:05</a></div>
			<div class="msg_body">ОСов</div>
		</div>
		<div id="msg109692" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109692">2017.12.02 19:32:29</a></div>
			<div class="msg_body">Мне кое-что проверить надо будет</div>
		</div>
		<div id="msg109695" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109695">2017.12.02 19:32:44</a></div>
			<div class="msg_body">Илья, да прибудет с тобой сила нашей команды!</div>
		</div>
		<div id="msg109689" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109689">2017.12.02 19:32:10</a></div>
			<div class="msg_body">я тогда тоже туда пойду</div>
		</div>
		<div id="msg109691" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109691">2017.12.02 19:32:15</a></div>
			<div class="msg_body">попробую во всяком случае</div>
		</div>
		<div id="msg109693" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109693">2017.12.02 19:32:36</a></div>
			<div class="msg_body">Найн!</div>
		</div>
		<div id="msg109694" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109694">2017.12.02 19:32:42</a></div>
			<div class="msg_body">Ни в коем случае!</div>
		</div>
		<div id="msg109697" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109697">2017.12.02 19:32:53</a></div>
			<div class="msg_body">На толпе точно не сработает</div>
		</div>
		<div id="msg109698" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109698">2017.12.02 19:33:03</a></div>
			<div class="msg_body">...</div>
		</div>
		<div id="msg109699" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109699">2017.12.02 19:33:09</a></div>
			<div class="msg_body">окей</div>
		</div>
		<div id="msg109700" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109700">2017.12.02 19:33:16</a></div>
			<div class="msg_body">куда тогда?</div>
		</div>
		<div id="msg109707" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109707">2017.12.02 19:34:52</a></div>
			<div class="msg_body">Я туда тогда</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/e6IzPNWqzNM.jpg">[photo256884832_456239626] (540x405)</div>
		</div>
		<div id="msg109708" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109708">2017.12.02 19:35:06</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b.png">Стикер #1909</div>
		</div>
		<div id="msg109709" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109709">2017.12.02 19:35:44</a></div>
			<div class="msg_body">Сюда можете сходить<br>(Синие стрелочки)</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/WshMkuP99Ek.jpg">[photo236175365_456240377] (540x405)</div>
		</div>
		<div id="msg109710" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109710">2017.12.02 19:35:58</a></div>
			<div class="msg_body">о</div>
		</div>
		<div id="msg109711" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109711">2017.12.02 19:36:05</a></div>
			<div class="msg_body">*За дом*</div>
		</div>
		<div id="msg109712" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109712">2017.12.02 19:36:08</a></div>
			<div class="msg_body">да мы на одной волне<img src="./work with spaces/blank.gif" emoji="D83DDE09" alt="??" class="emoji_css" style="background-position: 0px -34px;"></div>
		</div>
		<div id="msg109713" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109713">2017.12.02 19:36:17</a></div>
			<div class="msg_body">или ты у меня подсмотрела?</div>
		</div>
		<div id="msg109714" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109714">2017.12.02 19:36:26</a></div>
			<div class="msg_body">Что именно?</div>
		</div>
		<div id="msg109715" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109715">2017.12.02 19:36:34</a></div>
			<div class="msg_body">стрелочки</div>
		</div>
		<div id="msg109716" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109716">2017.12.02 19:36:40</a></div>
			<div class="msg_body">Не</div>
		</div>
		<div id="msg109717" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109717">2017.12.02 19:36:55</a></div>
			<div class="msg_body">Я просто не люблю, когда все сливается</div>
		</div>
		<div id="msg109718" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109718">2017.12.02 19:37:08</a></div>
			<div class="msg_body">а я выбрал по общему цвету своей авы</div>
		</div>
		<div id="msg109719" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109719">2017.12.02 19:37:28</a></div>
			<div class="msg_body">А, понятненько)</div>
		</div>
		<div id="msg109720" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109720">2017.12.02 19:39:47</a></div>
			<div class="msg_body">Ну че</div>
		</div>
		<div id="msg109721" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109721">2017.12.02 19:39:52</a></div>
			<div class="msg_body">че</div>
		</div>
		<div id="msg109722" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109722">2017.12.02 19:39:53</a></div>
			<div class="msg_body">О чем поболтаем</div>
		</div>
		<div id="msg109723" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109723">2017.12.02 19:40:20</a></div>
			<div class="msg_body">Лан пойду кексы печь</div>
		</div>
		<div id="msg109725" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109725">2017.12.02 19:40:24</a></div>
			<div class="msg_body">?\_(?)_/?</div>
		</div>
		<div id="msg109726" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109726">2017.12.02 19:40:53</a></div>
			<div class="msg_body">вообще-то, накануне мы вроде хотели пересмотреть свои цели</div>
		</div>
		<div id="msg109727" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109727">2017.12.02 19:43:13</a></div>
			<div class="msg_body">на мой взгляд, нашей основной целью является Знание ради счастья в жизни. промежуточная цель - освоение сновиденного искусства. промежуточная цель - изучение виртуальных пространств, как самого эффективного способа достижение цели уровнем выше. мы изучаем? вроде. но... что-то не так</div>
		</div>
		<div id="msg109728" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109728">2017.12.02 19:45:53</a></div>
			<div class="msg_body">Денни</div>
		</div>
		<div id="msg109729" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109729">2017.12.02 19:46:04</a></div>
			<div class="msg_body">Кажется я поняла в чем проблема</div>
		</div>
		<div id="msg109730" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109730">2017.12.02 19:46:35</a></div>
			<div class="msg_body">У нас у всех кажись разные цели</div>
		</div>
		<div id="msg109731" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109731">2017.12.02 19:46:59</a></div>
			<div class="msg_body">поэтому я написал "на мой взгляд"</div>
		</div>
		<div id="msg109732" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109732">2017.12.02 19:47:11</a></div>
			<div class="msg_body">у Дениса - как-то совладать с даром пророка</div>
		</div>
		<div id="msg109733" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109733">2017.12.02 19:47:25</a></div>
			<div class="msg_body">а у тебя, Дори, какая?</div>
		</div>
		<div id="msg109734" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109734">2017.12.02 19:48:07</a></div>
			<div class="msg_body">У меня основная цель - освоение сновиденного искусства, поиск истины. И вообще я бы хотеле полностью погрузиться в сновиденный мир (надолго).</div>
		</div>
		<div id="msg109735" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109735">2017.12.02 19:48:22</a></div>
			<div class="msg_body">тебе реальность не нравится, да?</div>
		</div>
		<div id="msg109736" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109736">2017.12.02 19:48:41</a></div>
			<div class="msg_body">Нет, мне она нравится</div>
		</div>
		<div id="msg109737" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109737">2017.12.02 19:49:06</a></div>
			<div class="msg_body">Просто я хочу провести углубленное исследование сновиденного мира</div>
		</div>
		<div id="msg109738" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109738">2017.12.02 19:49:22</a></div>
			<div class="msg_body">Для этого придется погрузиться в гибернатический сон</div>
		</div>
		<div id="msg109739" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109739">2017.12.02 19:49:58</a></div>
			<div class="msg_body">В худшем случае - мое тело станет овощем, ибо сознание будет далеко не в реальности</div>
		</div>
		<div id="msg109740" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109740">2017.12.02 19:54:42</a></div>
			<div class="msg_body">Чет все подозрительно затихли</div>
		</div>
		<div id="msg109741" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109741">2017.12.02 19:54:50</a></div>
			<div class="msg_body">все?</div>
		</div>
		<div id="msg109742" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109742">2017.12.02 19:54:54</a></div>
			<div class="msg_body">кроме нас двоих никого нет</div>
		</div>
		<div id="msg109743" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109743">2017.12.02 19:55:01</a></div>
			<div class="msg_body">так что затих только я</div>
		</div>
		<div id="msg109744" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109744">2017.12.02 19:55:15</a></div>
			<div class="msg_body">Ой, точно</div>
		</div>
		<div id="msg109750" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109750">2017.12.02 20:02:17</a></div>
			<div class="msg_body">отток энергии сильный пошел</div>
		</div>
		<div id="msg109751" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109751">2017.12.02 20:02:34</a></div>
			<div class="msg_body">вероятно, Илье отдал</div>
		</div>
		<div id="msg109752" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109752">2017.12.02 20:25:45</a></div>
			<div class="msg_body">Деннииии</div>
		</div>
		<div id="msg109753" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109753">2017.12.02 20:26:14</a></div>
			<div class="msg_body">Дори</div>
		</div>
		<div id="msg109754" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109754">2017.12.02 20:26:28</a></div>
			<div class="msg_body">Вот что ты не присоединился?</div>
		</div>
		<div id="msg109756" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109756">2017.12.02 20:26:43</a></div>
			<div class="msg_body">а что такое?</div>
		</div>
		<div id="msg109757" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109757">2017.12.02 20:26:58</a></div>
			<div class="msg_body">Вместе веселее<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg109758" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109758">2017.12.02 20:27:26</a></div>
			<div class="msg_body">ты так орала, будто вы там что-то ошеломительное нашли</div>
		</div>
		<div id="msg109759" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109759">2017.12.02 20:27:37</a></div>
			<div class="msg_body">я уж весь такой приготовился</div>
		</div>
		<div id="msg109760" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109760">2017.12.02 20:27:42</a></div>
			<div class="msg_body">тьфу</div>
		</div>
		<div id="msg109761" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109761">2017.12.02 20:28:11</a></div>
			<div class="msg_body">Не орала, а протяжно сетовала)</div>
		</div>
		<div id="msg109762" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109762">2017.12.02 20:28:37</a></div>
			<div class="msg_body">тьфу</div>
		</div>
		<div id="msg109763" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg109763">2017.12.02 20:29:07</a></div>
			<div class="msg_body">Да хватит плевать, верблюжонок<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
		</div>
		<div id="msg109764" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109764">2017.12.02 20:29:36</a></div>
			<div class="msg_body">если я не буду плевать как верблюд, то буду материться как сапожник</div>
		</div>
		<div id="msg109765" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg109765">2017.12.02 20:29:52</a></div>
			<div class="msg_body">и лучше будет, если я буду вот так плеваться</div>
		</div><hr>
		<div id="msg110043" class="msg_item">
			<div class="upic"><img src="./work with spaces/JrJrt8puonI.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Илья Загородний</b> <a href="http://vk.com/id321143421" target="_blank">@ilyaz3529</a> <a href="#msg110043">2017.12.03 10:47:01</a></div>
			<div class="msg_body">Приснилось поле, бесконечное</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.02 19:31:29</div>
			<div class="msg_body"> Когда в сон начнешь погружаться, сходи в этом направлении</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="400" src="./work with spaces/tBhhvh6oPxg.jpg">[photo236175365_456240376] (540x405)</div></div></div>
		</div>
		<div id="msg110044" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110044">2017.12.03 11:04:42</a></div>
			<div class="msg_body">Окей, спасибо</div>
		</div><hr>
		<div id="msg110091" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110091">2017.12.04 07:53:30</a></div>
			<div class="msg_body">Я вчера хз что делал... Все помню в мельчайших деталях, но было ли оно правдой - вопрос. Я будто бы был в уменьшенной копии сновиденного мира. Костер, лес вокруг, все это посередь болота, с юга большое здание, зайти за которое я не смог - барьер. С севера уже известная церковь, с запада - болото, горная цепь и опять барьер.<br>А еще меня с костра иногда выкидывало в город. Транзитом.<br>А в самый первый раз, как я попытался выйти с костра, меня отправило будто бы на копию костра. Там все было в других цветах, плыло, повсюду глюканы жестчайшие, скримеры, монстры... Для упокоения души своей оделся в красивые такие латы и накрыл себя энерго защитой. Поспокойнее стало, смог хоть мало-мальски вернуть костру изначальный облик и выйти в округу.<br>Вот только, думается мне, что все это время со мной играло мое подсознание. Не спал я, а наблюдал извращенные психоделические картины того, что, по идее я должен был увидеть.</div>
		</div>
		<div id="msg110092" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110092">2017.12.04 07:53:37</a></div>
			<div class="msg_body">Херня короче, а не поход</div>
		</div>
		<div id="msg110093" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110093">2017.12.04 09:15:00</a></div>
			<div class="msg_body">О, Дори, вопрос еще есть. Ты ставила за домиком скримера?</div>
		</div>
		<div id="msg110101" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110101">2017.12.04 09:25:42</a></div>
			<div class="msg_body">Неа</div>
		</div>
		<div id="msg110103" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110103">2017.12.04 09:25:49</a></div>
			<div class="msg_body">Плоха</div>
		</div>
		<div id="msg110102" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110102">2017.12.04 09:25:48</a></div>
			<div class="msg_body">У меня тоже вопрос</div>
		</div>
		<div id="msg110105" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110105">2017.12.04 09:25:59</a></div>
			<div class="msg_body">Ты ставил ловушку на качели?</div>
		</div>
		<div id="msg110106" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110106">2017.12.04 09:26:25</a></div>
			<div class="msg_body">Неа. Только если случайно</div>
		</div>
		<div id="msg110108" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110108">2017.12.04 09:26:40</a></div>
			<div class="msg_body">Но неподалеку действительно есть моя ловушка</div>
		</div>
				<div id="msg110113" class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110113">2017.12.04 09:53:34</a></div>
			<div class="msg_body">Где она и в чем состоит?</div>
				</div>
				<div id="msg110114" class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110114">2017.12.04 09:53:54</a></div>
			<div class="msg_body">В кустах выемка. Скример</div>
				</div>
		<div id="msg110107" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110107">2017.12.04 09:26:31</a></div>
			<div class="msg_body">Я, кстати, кажется, поняла, как нам перенести костер в реальность не создавая нового</div>
		</div>
		<div id="msg110154" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110154">2017.12.04 11:05:14</a></div>
			<div class="msg_body">10% из 100%, что получится, но впринципе это не сложно, попробуем?</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:11:42</div>
			<div class="msg_body"> Костер пространство между сном и реалом</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:11:45</div>
			<div class="msg_body"> Верно?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.04 10:12:08</div>
			<div class="msg_body"> +</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:12:12</div>
			<div class="msg_body"> Значит лишь половина костра находиться во сне</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:12:31</div>
			<div class="msg_body"> Вторая чисто гиппотетически находиться в реальности</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:12:42</div>
			<div class="msg_body"> Но мы ее не "осадили"</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:12:53</div>
			<div class="msg_body"> Т.е. не определили местоположение</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:13:14</div>
			<div class="msg_body"> Я предполагаю, что бермудский треугольник- тоже чей то костер</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:13:34</div>
			<div class="msg_body"> В общем</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:13:47</div>
			<div class="msg_body"> Что бы осадить костер во сне- мы засыпали через него</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:14:01</div>
			<div class="msg_body"> Соответственно теперь надо просыпаться через него</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:14:12</div>
			<div class="msg_body"> Тут встает вопрос: "как?"</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:14:33</div>
			<div class="msg_body"> Помнишь я Илью просила пойти в определенном направлении?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:15:33</div>
			<div class="msg_body"> Так вот я там портал поставила, т.к. мне было лень конкретизировать его, то я просто создала портал на что нибудь бесконечное, типо космоса или долины, как у него</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:16:02</div>
			<div class="msg_body"> Из этого выходит, что и в костер можно попасть с помощью портала</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:16:22</div>
			<div class="msg_body"> Значит теперь нам надо проанализировать свои сны</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:16:46</div>
			<div class="msg_body"> И узнать наиболее посещаемые локации во сне</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:17:01</div>
			<div class="msg_body"> Сообщить мне, а я там расставлю порталов</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:17:50</div>
			<div class="msg_body"> "Но мы же будем просыпаться у себя в комнате?" - спросишь ты</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:18:11</div>
			<div class="msg_body"> Чисто по теории ответ на этот вопрос будет являться таковым:</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:19:19</div>
			<div class="msg_body"> В момент выхода из костра - то бишь просыпания - должен быть миг, когда ты увидишь с чем граничит костер: будь то море или улица, ну или поле</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 10:19:24</div>
			<div class="msg_body"> В общем ты понял</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.04 10:19:44</div>
			<div class="msg_body"> Неа</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.04 10:28:27</div>
			<div class="msg_body"> Давай заново. Ты из костра поставила для Ильи прртал в сон. Теперь ты хочешь наставить порталов из сна в костер, чтобы мы просыпались, находясь в костре. Так?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.04 10:32:16</div>
			<div class="msg_body"> Ты думаешь, что в момент просыпания из костра мы увидим его привязку к местности реала?</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.04 10:39:06</div>
			<div class="msg_body"> Маловероятно, вообще-то. И я действительно скажу "Мы же просыпаемся в своей кроватке в своей комнате!"</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.04 10:39:32</div>
			<div class="msg_body"> У подсознания может не быть времени на привязку к местности</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 11:01:02</div>
			<div class="msg_body"> Но проверить теорию можно</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 11:01:12</div>
			<div class="msg_body"> И еще</div>
				</div>
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> 2017.12.04 11:01:59</div>
			<div class="msg_body"> Что бы во время выхода из костра мы проснулись, а не уснули назад - на полянке должен быть день</div></div></div>
		</div>
		<div id="msg110162" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110162">2017.12.04 16:20:37</a></div>
			<div class="msg_body">Дори, а портал был одноразовым?</div>
		</div>
		<div id="msg110164" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110164">2017.12.04 19:26:11</a></div>
			<div class="msg_body">Хз</div>
		</div>
		<div id="msg110165" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110165">2017.12.04 19:27:00</a></div>
			<div class="msg_body">Я вчера тоже шел туда, на запад. Попал только туда же, куда и раньше</div>
		</div>
		<div id="msg110166" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110166">2017.12.04 19:54:42</a></div>
			<div class="msg_body">Куда?</div>
		</div>
		<div id="msg110173" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110173">2017.12.04 21:15:30</a></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.04 07:53:30</div>
			<div class="msg_body"> Я вчера хз что делал... Все помню в мельчайших деталях, но было ли оно правдой - вопрос. Я будто бы был в уменьшенной копии сновиденного мира. Костер, лес вокруг, все это посередь болота, с юга большое здание, зайти за которое я не смог - барьер. С севера уже известная церковь, с запада - болото, горная цепь и опять барьер.<br>А еще меня с костра иногда выкидывало в город. Транзитом.<br>А в самый первый раз, как я попытался выйти с костра, меня отправило будто бы на копию костра. Там все было в других цветах, плыло, повсюду глюканы жестчайшие, скримеры, монстры... Для упокоения души своей оделся в красивые такие латы и накрыл себя энерго защитой. Поспокойнее стало, смог хоть мало-мальски вернуть костру изначальный облик и выйти в округу.<br>Вот только, думается мне, что все это время со мной играло мое подсознание. Не спал я, а наблюдал извращенные психоделические картины того, что, по идее я должен был увидеть.</div></div></div>
		</div>
		<div id="msg110176" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110176">2017.12.04 21:17:44</a></div>
			<div class="msg_body">Я седня на свежую голову попытаюсь еще раз туды пойти. Хочу в бесконечное поле!</div>
		</div>
		<div id="msg110177" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110177">2017.12.04 21:19:46</a></div>
			<div class="msg_body">...</div>
		</div>
		<div id="msg110178" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110178">2017.12.04 21:19:55</a></div>
			<div class="msg_body">Я портал убрала уже</div>
		</div>
		<div id="msg110183" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110183">2017.12.04 21:20:56</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(25).png">Стикер #59</div>
		</div>
		<div id="msg110184" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110184">2017.12.04 21:20:58</a></div>
			<div class="msg_body">Во</div>
		</div>
		<div id="msg110185" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110185">2017.12.04 21:21:06</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(26).png">Стикер #65</div>
		</div>
		<div id="msg110186" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110186">2017.12.04 21:21:25</a></div>
			<div class="msg_body">Я его изучить хотел...</div>
		</div>
		<div id="msg110187" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110187">2017.12.04 21:21:37</a></div>
			<div class="msg_body">Я хочу научиться такие же ставить!</div>
		</div>
		<div id="msg110188" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110188">2017.12.04 21:22:16</a></div>
			<div class="msg_body">Я случайно порталы ставить научилась</div>
		</div>
		<div id="msg110189" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110189">2017.12.04 21:22:25</a></div>
			<div class="msg_body">Сон приснился</div>
		</div>
		<div id="msg110190" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110190">2017.12.04 21:22:25</a></div>
			<div class="msg_body">Я в лабиринте</div>
		</div>
		<div id="msg110191" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110191">2017.12.04 21:22:29</a></div>
			<div class="msg_body">В самом центре</div>
		</div>
		<div id="msg110192" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110192">2017.12.04 21:22:42</a></div>
			<div class="msg_body">А вокруг убийцы подступили</div>
		</div>
		<div id="msg110193" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110193">2017.12.04 21:22:56</a></div>
			<div class="msg_body">Я там что-то типа гаража увидела</div>
		</div>
		<div id="msg110194" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110194">2017.12.04 21:23:03</a></div>
			<div class="msg_body">Зашла и притаилась</div>
		</div>
		<div id="msg110195" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110195">2017.12.04 21:23:22</a></div>
			<div class="msg_body">А гараж двух этажный оказался</div>
		</div>
		<div id="msg110196" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110196">2017.12.04 21:23:28</a></div>
			<div class="msg_body">Ко мне дедок спустился</div>
		</div>
		<div id="msg110197" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110197">2017.12.04 21:23:34</a></div>
			<div class="msg_body">Сел и смотрит на меня</div>
		</div>
		<div id="msg110198" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110198">2017.12.04 21:23:37</a></div>
			<div class="msg_body">Изучает</div>
		</div>
		<div id="msg110199" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110199">2017.12.04 21:23:43</a></div>
			<div class="msg_body">Потом просто говорит</div>
		</div>
		<div id="msg110200" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110200">2017.12.04 21:23:55</a></div>
			<div class="msg_body">Думалка что ли не работает?</div>
		</div>
		<div id="msg110201" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110201">2017.12.04 21:24:05</a></div>
			<div class="msg_body">Ты же спишь - проснись</div>
		</div>
		<div id="msg110202" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110202">2017.12.04 21:24:15</a></div>
			<div class="msg_body">Я отвечаю: "не хочу"</div>
		</div>
		<div id="msg110203" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110203">2017.12.04 21:24:27</a></div>
			<div class="msg_body">Он: "ну тогда хоть портал открой"</div>
		</div>
		<div id="msg110204" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110204">2017.12.04 21:24:52</a></div>
			<div class="msg_body">Я хлопнула себя по лбу и была обсолютно уверенна, что умею это делать</div>
		</div>
		<div id="msg110205" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110205">2017.12.04 21:25:27</a></div>
			<div class="msg_body">Дальше просто представила портал, точку в которую он ведет и смешала все это</div>
		</div>
		<div id="msg110206" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110206">2017.12.04 21:25:42</a></div>
			<div class="msg_body">Потом создала между руками что-то типа напряжения</div>
		</div>
		<div id="msg110207" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110207">2017.12.04 21:25:54</a></div>
			<div class="msg_body">И начала раскрывать руки</div>
		</div>
		<div id="msg110208" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110208">2017.12.04 21:25:59</a></div>
			<div class="msg_body">Сначала туго было</div>
		</div>
		<div id="msg110209" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110209">2017.12.04 21:26:27</a></div>
			<div class="msg_body">Да и портал только начнет открываться, а потом лопнет, как мыльный пузырь</div>
		</div>
		<div id="msg110210" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110210">2017.12.04 21:26:37</a></div>
			<div class="msg_body">В итоге у меня получилось</div>
		</div>
		<div id="msg110211" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110211">2017.12.04 21:27:09</a></div>
			<div class="msg_body">А на следующую ночь я решила проверить в ОСе действенность порталов</div>
		</div>
		<div id="msg110212" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110212">2017.12.04 21:27:12</a></div>
			<div class="msg_body">Получилось</div>
		</div>
		<div id="msg110213" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110213">2017.12.04 21:27:21</a></div>
			<div class="msg_body">Потом стала использовать их</div>
		</div>
		<div id="msg110214" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110214">2017.12.04 21:27:29</a></div>
			<div class="msg_body">Развивать свои способности</div>
		</div>
		<div id="msg110215" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110215">2017.12.04 21:27:44</a></div>
			<div class="msg_body">В итоге "телекинезом" открывать научилась</div>
		</div>
		<div id="msg110216" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110216">2017.12.04 21:28:03</a></div>
			<div class="msg_body">Только глаза чуть приоткрытыми держу</div>
		</div>
		<div id="msg110217" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110217">2017.12.04 21:28:35</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_sticker"></div> <img class="sticker1" width="128" src="./work with spaces/256b(22).png">Стикер #4565</div>
		</div>
		<div id="msg110218" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110218">2017.12.04 21:28:54</a></div>
			<div class="msg_body">Если хочешь могу сходить к костру</div>
		</div>
		<div id="msg110219" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110219">2017.12.04 21:29:06</a></div>
			<div class="msg_body">Поставлю где-нибудь портал</div>
		</div>
		<div id="msg110220" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110220">2017.12.04 21:29:09</a></div>
			<div class="msg_body">Просто</div>
		</div>
		<div id="msg110221" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110221">2017.12.04 21:29:11</a></div>
			<div class="msg_body">Пустой</div>
		</div>
		<div id="msg110222" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110222">2017.12.04 21:29:24</a></div>
			<div class="msg_body">Изучишь его</div>
		</div>
		<div id="msg110224" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110224">2017.12.04 21:30:17</a></div>
			<div class="msg_body">Ну довай</div>
		</div>
		<div id="msg110226" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110226">2017.12.04 21:30:28</a></div>
			<div class="msg_body">Погодь</div>
		</div><hr>
		<div id="msg110362" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110362">2017.12.05 12:01:04</a></div>
			<div class="msg_body">А твой портал куда вел?</div>
		</div>
		<div id="msg110363" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110363">2017.12.05 12:26:02</a></div>
			<div class="msg_body">И еще. Ты разрешала его изменять?</div></div>

		<div id="msg110382" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110382">2017.12.05 12:31:52</a></div>
			<div class="msg_body">Конечно, ты же собирался исследовать его</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.05 12:26:02</div>
			<div class="msg_body"> И еще. Ты разрешала его изменять?</div></div></div>
		</div>
		<div id="msg110387" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110387">2017.12.05 12:33:28</a></div>
			<div class="msg_body">Изначально никуда, а потом почему-то на концерт<img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"><img class="emoji" alt="??" src="./work with spaces/D83DDE02.png"></div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.05 12:01:04</div>
			<div class="msg_body"> А твой портал куда вел?</div></div></div>
		</div>
		<div id="msg110389" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110389">2017.12.05 12:33:38</a></div>
			<div class="msg_body">Вроде в здании каком-то</div></div>

		<div id="msg110403" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110403">2017.12.05 12:37:27</a></div>
			<div class="msg_body">Я тот портал удалять не стал и он в конце вел просто в серую мглу нигде. А потом поставил еще два</div>
		</div>
		<div id="msg110404" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110404">2017.12.05 12:37:33</a></div>
			<div class="msg_body">Они видимы</div>
		</div>
		<div id="msg110405" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110405">2017.12.05 12:37:46</a></div>
			<div class="msg_body">И красиво оформлены в древне-римском стиле</div>
		</div>
		<div id="msg110407" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110407">2017.12.05 12:38:15</a></div>
			<div class="msg_body">Значит все-таки как и задумывалось</div>
		</div>
		<div id="msg110408" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110408">2017.12.05 12:38:18</a></div>
			<div class="msg_body">В никуда</div></div>

		<div id="msg110511" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110511">2017.12.05 21:39:20</a></div>
			<div class="msg_body">а</div>
		</div>
		<div id="msg110512" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110512">2017.12.05 21:39:22</a></div>
			<div class="msg_body">забыл</div>
		</div>
		<div id="msg110513" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110513">2017.12.05 21:39:56</a></div>
			<div class="msg_body">карта более старой версии, но на ней я отмечал свои сны</div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <div class="att_ico att_photo"></div> <img width="600" src="./work with spaces/eQacmEYOPYE.jpg">[photo256884832_456239658] (1628x1652)</div>
		</div>
		<div id="msg110514" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110514">2017.12.05 21:40:51</a></div>
			<div class="msg_body">это тебе, Дори, для установки порталов</div>
		</div>
		<div id="msg110515" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110515">2017.12.05 21:40:56</a></div>
			<div class="msg_body">вот только проблема</div>
		</div>
		<div id="msg110516" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110516">2017.12.05 21:41:04</a></div>
			<div class="msg_body">если Илью ты направила точно</div>
		</div>
		<div id="msg110517" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110517">2017.12.05 21:41:11</a></div>
			<div class="msg_body">и он не мог не попасть в портал</div>
		</div>
		<div id="msg110518" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110518">2017.12.05 21:41:24</a></div>
			<div class="msg_body">то как же я на него наткнусь?!</div>
		</div>
		<div id="msg110519" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110519">2017.12.05 21:41:32</a></div>
			<div class="msg_body">О чем ты?</div>
		</div>
		<div id="msg110520" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110520">2017.12.05 21:41:41</a></div>
			<div class="msg_body">ну</div>
		</div>
		<div id="msg110521" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110521">2017.12.05 21:41:44</a></div>
			<div class="msg_body">твоя теория</div>
		</div>
		<div id="msg110522" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110522">2017.12.05 21:41:53</a></div>
			<div class="msg_body">как просыпаться через костер</div>
		</div>
		<div id="msg110523" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110523">2017.12.05 21:42:03</a></div>
			<div class="msg_body">чтобы осуществить его привязку к реалу</div>
		</div>
		<div id="msg110524" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110524">2017.12.05 21:42:59</a></div>
			<div class="msg_body">Просто в той локации, где ты чаще всего будешь, я установлю один большой портал типа купола</div>
			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>
			<div class="fwd">
				<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.05 21:41:24</div>
			<div class="msg_body"> то как же я на него наткнусь?!</div></div></div>
		</div>
		<div id="msg110525" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110525">2017.12.05 21:43:11</a></div>
			<div class="msg_body">Работать он слабенько будет</div>
		</div>
		<div id="msg110526" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110526">2017.12.05 21:43:38</a></div>
			<div class="msg_body">всм?</div>
		</div>
		<div id="msg110527" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110527">2017.12.05 21:44:27</a></div>
			<div class="msg_body">Ну может не донести до костра</div>
		</div>
		<div id="msg110528" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110528">2017.12.05 21:44:37</a></div>
			<div class="msg_body">Выкинуть где нибудь на пол пути</div>
		</div>
		<div id="msg110529" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110529">2017.12.05 21:44:47</a></div>
			<div class="msg_body">Может не сработать</div>
		</div>
		<div id="msg110530" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110530">2017.12.05 21:45:47</a></div>
			<div class="msg_body">а что если поставить норм портал, но видимый и ярко оформленный. главное, чтобы я намеревался к нему попасть. будет еще и практика в настройке сновиденных локаций<img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"></div>
		</div>
		<div id="msg110531" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110531">2017.12.05 21:46:01</a></div>
			<div class="msg_body">но это как доп</div>
		</div>
		<div id="msg110532" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110532">2017.12.05 21:46:07</a></div>
			<div class="msg_body">портал-купол поставить надо</div>
		</div>
		<div id="msg110533" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110533">2017.12.05 21:46:28</a></div>
			<div class="msg_body">У меня сил не хватит</div>
		</div>
		<div id="msg110534" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110534">2017.12.05 21:46:34</a></div>
			<div class="msg_body">я подкину</div>
		</div>
		<div id="msg110535" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110535">2017.12.05 21:46:38</a></div>
			<div class="msg_body">Иначе бы портал купол сильным был</div>
		</div>
		<div id="msg110536" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110536">2017.12.05 21:46:42</a></div>
			<div class="msg_body">и зачерпни у костра</div>
		</div>
		<div id="msg110537" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110537">2017.12.05 21:46:53</a></div>
			<div class="msg_body">Не хватит на всю площадь</div>
		</div>
		<div id="msg110538" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110538">2017.12.05 21:47:02</a></div>
			<div class="msg_body">И я не смогу использовать костер</div>
		</div>
		<div id="msg110539" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110539">2017.12.05 21:47:13</a></div>
			<div class="msg_body">Я из врожденной энергии черпаю</div>
		</div>
		<div id="msg110540" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110540">2017.12.05 21:47:24</a></div>
			<div class="msg_body">Для порталов это разные вещи</div>
		</div>
		<div id="msg110541" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110541">2017.12.05 21:47:26</a></div>
			<div class="msg_body">а из внешней поч не можешь?</div>
		</div>
		<div id="msg110543" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110543">2017.12.05 21:48:15</a></div>
			<div class="msg_body">И во снах такие порталы стороной обходишь - типо это своеобразный взлом, а сон от взлома будет защищаться</div>
		</div>
		<div id="msg110544" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110544">2017.12.05 21:48:27</a></div>
			<div class="msg_body">И внушит тебе, что это нечто опасное</div>
		</div>
		<div id="msg110545" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110545">2017.12.05 21:48:34</a></div>
			<div class="msg_body"><img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"><img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"><img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"></div>
		</div>
		<div id="msg110546" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110546">2017.12.05 21:48:36</a></div>

			<div class="att_head"> <div class="att_ico att_fwd"></div> Пересланные сообщения: </div>

			<div class="fwd">

			<div class="msg_item">
					<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> 2017.12.05 21:45:47</div>
			<div class="msg_body"> а что если поставить норм портал, но видимый и ярко оформленный. главное, чтобы я намеревался к нему попасть. будет еще и практика в настройке сновиденных локаций<img class="emoji" alt="??" src="./work with spaces/D83EDD14.png"></div>
				</div>
			</div>
		</div>
		<div id="msg110547" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110547">2017.12.05 21:48:41</a></div>
			<div class="msg_body">а ты как это выяснила?</div>
		</div>
		<div id="msg110548" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110548">2017.12.05 21:48:52</a></div>
			<div class="msg_body">Практика</div>
		</div>
		<div id="msg110549" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110549">2017.12.05 21:49:01</a></div>
			<div class="msg_body">Я давно с ними работаю</div>
		</div>
		<div id="msg110550" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110550">2017.12.05 21:49:03</a></div>
			<div class="msg_body">много подопытных?</div>
		</div>
		<div id="msg110551" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110551">2017.12.05 21:49:16</a></div>
			<div class="msg_body">Потом, когда порталы забывала закрыть</div>
		</div>
		<div id="msg110552" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110552">2017.12.05 21:49:26</a></div>
			<div class="msg_body">Шла во сне мимо них по сюжету</div>
		</div>
		<div id="msg110553" class="msg_item">
			<div class="upic"><img src="./work with spaces/462X67f3Dk8.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Дарина Тулегенова</b> <a href="http://vk.com/id236175365" target="_blank">@mandarinkarg</a> <a href="#msg110553">2017.12.05 21:49:35</a></div>
			<div class="msg_body">И пипец, как шарахалась</div>
		</div>
		<div id="msg110554" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110554">2017.12.05 21:49:52</a></div>
			<div class="msg_body">я подумаю<img class="emoji" alt="??" src="./work with spaces/D83DDE11.png"></div>
		</div>
		<div id="msg110555" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110555">2017.12.05 21:50:37</a></div>
					<div class="attacments"> <b>Материалы:</b> </div>
					<div class="attacment"> <img class="emoji" src="./work with spaces/MzcF2-on4LA.jpg"></div>
		</div>
		<div id="msg110557" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110557">2017.12.05 22:43:47</a></div>
			<div class="msg_body">Слуушай</div>
		</div>
		<div id="msg110558" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110558">2017.12.05 22:44:58</a></div>
			<div class="msg_body">А я возьму, и сам поставлю себе портал во сне. Т.е. сначала буду намереваться поставить портал к костру, а потом попасть к нему. Шанс на успех, конечно, исчезающе мал с моими склонностями, но я попробую</div>
		</div>
		<hr>
		<a name="end"></a><h2>Послесловие</h2>
		<div id="msg110558" class="msg_item">
			<div class="upic"><img src="./work with spaces/TkL-LLPId44.jpg" alt="[photo_100]"></div>
			<div class="from"> <b>Данила Шилов</b> <a href="http://vk.com/id256884832" target="_blank">@wilson_dh</a> <a href="#msg110558">2018.02.03 22:10:24</a></div>
			<div class="msg_body">
				Далее мы с Дариной несколько отвлеклись от костра и ушли в повседневные проблемы. На костер мы больше не ходили, и тот постепенно "зарос". Как видно из переписки, тема фиксации воображаемых пространств в реале осталась нераскрыта. А жаль, кто знает, какие еще возможности открывают воображаемые пространства?<br>
				Далее я хочу как бы подвести итог, сделать резюме данному сохранению.<br><h2>РЕЗЮМЕ</h2>
				Воображаемые пространства - это миры, которые намеренно создаются человеком, подконтрольны ему и основываются на сновиденном мире. Они, в силу своего происхождения, близки к сновиденному миру, но обладают рядом измененных свойств. Например, в таких пространствах нет запрета на осознание и нет ничего, что бы ее отбирало. В то же время, опыт показал, что наш костер вклинился в сновиденный мир и стал просто офигенным плацдармом для дальнейшего освоения сновиденного пространства. Единственную серьезную проблему составляет лишь то, что, по мере погружения в сон, память все более приближается ко второму вниманию - недоступному в реале. Я множество раз отмечал в своих опытах, что в первые секунды или, иногда, минуты нахождения в костре внимание реала хорошо запоминало окружение и события, а, когда я засыпал, запоминать становилось все труднее. В итоге я просыпался, отчетливо помня лишь первое время, а дальше качество воспоминаний понижалось вплоть до абсолютно отсутствия.<br>
				Итак, основной целью воображаемых пространств изначально ставилось создание плацдарма для освоения сновиденного мира. Однако далее они превзошли все ожидания.<br>
				Когда мы концентрировались на сигналах от подсознания - фиксировались в локации костра -, то попадали в архетипичный костер - и начинали видеть, слышать и чувствовать друг друга. Были опыты удачные и не очень, все это отражено выше. Это открыло возможность коммуникации через воображаемые пространства.<br>
				Однако главной проблемой на этом этапе стало появление тех картин локации и событий, которые мы хотели видеть - мы начали принимать личную интерпретацию костра за архетип. Данный момент, иначе как отключением собственного ума (в нашем случае - откат к самому началу), не исключить. Иными словами, нужно научиться полностью отключать ум (а лучше - отключать внутренний диалог) и прислушиваться только к подсознанию. Оно не врет.<br>
				Особым прорывом стали порталы - они дали возможность мгновенно перемещаться из костра в любую точку сновиденного мира. Ведь в самом сновиденном мире создание транзитов ограничено некоторыми правилами. Больше не нужно выходить с костра и пешком идти по локациям. К тому же, порталы не отнимают осознанности, в отличии от транзитов, что позволяет использовать их даже полным новичкам в сновиденном контроле.<br>
				Также хочу отметить, что работа с эмоциями в костре, как мы с Ильей и Владом работали с ними в символах, провалилась, и, скорее всего, из-за меня. Так что оставлю данную перспективу открытой, на будущее.
			</div>
			<div style="height: 200px"></div>
		</div>
		</div>
		</div>
		 </body></html>