<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Сохранения переписок</title>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
	</head>
	<body link="#009" alink="#009" vlink="#009">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
		<div class="container">
			<a href="symbols/">Исследования символов</a><br>
			<!--<a href="intrig/">Игра интриганов (Файл PDF (396 КБ))</a><br>-->
			<a href="campfire/">Исследование Костра</a><br>
		</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
	</body>
</html>