<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Искры Костра</title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
</head>
<body link="#009" alink="#009" vlink="#009">
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
	<div class="container">
		<h3>Доступные Вам страницы:</h3>
		<a href="group/">Искры Костра</a><br>
		<a href="dreammap/">Карта сновиденного мира</a><br>
		<a href="knowledge/">Лекториум Джейса</a><br>
		<a href="saves/">Сохранения переписок</a><br>
		<a href="practical/">Сохранения практикумов</a><br>
		<a href="library/">Библиотека</a><br>
		<a href="pmcalcs/">ПМ калькуляторы</a><br>
		<a href="avest/">Авестийский калькулятор</a><br>
        <a href="games/randomizer/">Рандомайзер</a><br>
		<?php
		if(isset($_SESSION['session']) && isset($_SESSION['role']) && $_SESSION['role'] < 10){
		?>
		<a href="knowledge/arcanes/">Арканы мира</a><br>
		<a href="games/">Игры</a><br>
		<?php
		}
		?>
		<hr>
		<h3>Последние события:</h3>
		<p><b><a href="/games/randomizer/">Рандомайзер</a>: </b>Добавлен рандомайзер.</p>
		<p><b><a href="/group/">Искры Костра</a>: </b>Добавлен манифест группы.</p>
		<p><b><a href="/profile/">Профиль</a>: </b>добавлена возможность загружать аватарки.</p>
		<p><b><a href="/library/">Библиотека</a>: новая публикация! </b><a href="/library/read/clark_ashton_smith_uzhasy_jondo.php">Кларк Эштон Смит - Ужасы Йондо</a></p>
		<p><b><a href="/library/">Библиотека</a>: новая публикация! </b><a href="/library/read/jung_karl_prakticheskoe_ispolzovanie_analiza_snovidenii.php">Карл Густав Юнг - Практическое использование анализа сновидений</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=мироописание">Важность мироописания</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=цитаты ДХ">Великие изречения Дона Хуана Матуса</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=неорганы">Неорганы (история Индиго)</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=леалинии">Леалинии</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=графика">Графическая магия</a></p>
		<p><b><a href="/pmcalcs/">ПМ калькуляторы</a>:</b> Создан раздел для калькуляторов цепочек ПМ. К каждому калькулятору есть описание его основного функционала и ссылка на скачивание архива.</p>
		<p><b><a href="/library/">Библиотека</a>: новая публикация! </b><a href="/library/read/am_duat_original.php">Египетская Книга Ам-Дуат</a></p>
		<p><b><a href="/library/">Библиотека</a>: новая публикация! </b><a href="/library/read/сергей_трофимов_таинственная_мана.php">Сергей Трофимов - Таинственная мана</a></p>
		<p><b><a href="/library/">Библиотека</a>: новая публикация! </b><a href="/library/read/interview_with_node.php">Интервью с Ноде</a></p>
		<p><b><a href="/library/">Библиотека</a>:</b> Создан раздел Библиотека, куда будут складироваться различные интересные книги и статьи, которые не помещаются в лекториуме. Отличительная черта библиотеки - каждая публикация скачивается в архиве (пока что) в формате html, потом может буду пилить pdf.</p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=социум летуны NPC игроки">Социум, летуны, NPC и игроки</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=ошо об ОСах">Ошо об ОСах</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=администрирование пространств">Администрирование пространств</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=намерение и цель">Рейвен о намерении и цели</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=эмиссар">Эмиссар сновидения</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: новая статья! </b><a href="/knowledge/?page=дубль">Дубль</a></p>
		<p><b><a href="/knowledge/">Лекториум</a>: </b>На сайт перенесены все статьи из <a href="https://vk.com/dh_follower">группы ВК</a> в раздел <a href="/knowledge/">Лекториум Джейса</a>. Также все статьи были перечитаны и в связи с этим были внесены правки и дополнения. В дальнейшем новые статьи будут выкладываться сперва здесь и только спустя неопределенное время в группе.</p>
		<p><b><a href="/dreammap/">Интерактивная сновиденная карта</a>: </b>Каждая локация на сновиденной карте теперь имеет отдельную ссылку.</p>
		<p><b><a href="/">Сайт</a>: </b>Добавлена система регистрации и авторизации. И для того, и для другого нужен только никнейм и пароль, поэтому кнопка "Регистрация" не перенаправит вас на страницу регистрации, а сразу использует введенные данные и зарегистрирует Вас. Все остальные данные опционально заполняются на странице профиля. В будущем система пользователей будет использована в играх и чатах на данном сайте.</p>
		<p><b><a href="/">Сайт</a>: </b>Пересозданы разделы, весь материал перераспределен.</p>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
</body>
</html>