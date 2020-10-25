<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
	<title>Библиотека</title>
	<link rel="stylesheet" type="text/css" href="/_styles/hider.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
	<div class="container">
				<!--<blockquote class="book">
					<p><b>Читать: </b><a href="read/.php"><span class="link"></span></a></p>
					<p><b>Скачать: </b><a href="download/.zip"><span class="link">Файл .html.zip ( КБ)</span></a></p>
					<p><b>Описание: </b></p>
				</blockquote>-->
		<div class="section">
			<div class="header"><span>Хакеры Сновидений</span></div>
			<div class="items">
				<blockquote class="book">
					<p><b>Читать: </b><a href="read/am_duat_original.php"><span class="link">Египетская Книга Ам-Дуат</span></a></p>
					<p><b>Скачать: </b><a href="download/am_duat_original.zip"><span class="link">Файл .html.zip (1448 КБ)</span></a></p>
					<p><b>Описание: </b>Ам-Дуат - царство мертвых в верованиях древних египтян. Путь в загробный мир они описывали двенадцатью ступенями, часами перед восходом Солнца и новым рождением. Однако Равенна была уверена, что в книге Ам-Дуат описывает не загробный мир, а сновиденный и то, куда лежит путь сновидца после него. В своем практикуме Вторые врата Равенна говорила, что весь путь от Дома до Моста Летунов - лишь первый час пути из двенадцати. Приведенная здесь книга является переводом оригинала в изложении Е.Лазарева с комментариями Анджея Нивинського.</p>
				</blockquote>
				<blockquote class="book">
					<p><b>Читать: </b><a href="read/interview_with_node.php"><span class="link">Интервью с Ноде</span></a></p>
					<p><b>Скачать: </b><a href="download/interview_with_node.zip"><span class="link">Файл .html.zip (1494 КБ)</span></a></p>
					<p><b>Описание: </b>В декабре 2003 года проводник Сети Ноде провел интервью, на котором ответил на вопросы желающих и показал некоторые возможности Сети.</p>
				</blockquote>
				<blockquote class="book">
					<p><b>Читать: </b><a href="read/сергей_трофимов_таинственная_мана.php"><span class="link">Сергей Трофимов - Таинственная мана</span></a></p>
					<p><b>Скачать: </b><a href="download/sergey_trofimov_tainstvennaya_mana.zip"><span class="link">Файл .html.zip (1456 КБ)</span></a></p>
					<p><b>Описание: </b>В декабре 2002 года знакомый Сергея Изриги Сергей Трофимов (вероятно тоже псевдоним) выложил в сеть серию статей, рассказывающую его соображения по поводу "маны" и Сириуса В.</p>
				</blockquote>
			</div>
		</div>
		<blockquote class="book">
			<p><b>Читать: </b><a href="read/clark_ashton_smith_uzhasy_jondo.php"><span class="link">Кларк Эштон Смит - Ужасы Йондо</span></a></p>
			<p><b>Скачать: </b><a href="download/clark_ashton_smith_uzhasy_jondo.zip"><span class="link">Файл .html.zip (1388 КБ)</span></a></p>
			<p><b>Описание: </b>Рассказ, описывающий мир Йондо.</p>
		</blockquote>
		<blockquote class="book">
			<p><b>Читать: </b><a href="read/jung_karl_prakticheskoe_ispolzovanie_analiza_snovidenii.php"><span class="link">Карл Густав Юнг - Практическое использование анализа сновидений</span></a></p>
			<p><b>Скачать: </b><a href="download/jung_karl_prakticheskoe_ispolzovanie_analiza_snovidenii.zip"><span class="link">Файл .html.zip (1451 КБ)</span></a></p>
			<p><b>Описание: </b>Терапевтическая применимость анализа сновидений — все еще очень спорная тема. Многие считают анализ сновидений в лечении неврозов обязательным и тем самым поднимают сновидение до функции, эквивалентной по психической важности сознанию. Другие, напротив, оспаривают правомерность анализа сновидений и, следовательно, считают их маловажным, побочным психическим продуктом. Само собой разумеется, что всякая точка зрения, приписывающая бессознательному решающую роль в этиологии неврозов, одновременно признает важное практическое значение сновидений как непосредственного проявления бессознательного. Точно так же воззрения, отвергающие бессознательное или хотя бы считающие его этиологически незначимым, объявляют и анализ снов необязательным.</p>
		</blockquote>
				<!--<blockquote class="book">
					<p><b>Читать: </b><a href="read/.php"><span class="link"></span></a></p>
					<p><b>Скачать: </b><a href="download/.zip"><span class="link">Файл .html.zip ( КБ)</span></a></p>
					<p><b>Описание: </b></p>
				</blockquote>-->
	</div>
	<script type="text/javascript">
		$('.header').on("click", function(event){
			elem = event.currentTarget.parentNode.lastElementChild;
			if(elem.style.display != "block"){
				elem.style.display = "block";
				event.currentTarget.style.backgroundImage = "url('/_styles/light_arrow_open.gif')";
			} else {
				elem.style.display = "none";
				event.currentTarget.style.backgroundImage = "url('/_styles/light_arrow_shut.gif')";
			}
			localStorage.setItem('menu', $('#menu').html());
		});
	</script>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
</body>
</html>