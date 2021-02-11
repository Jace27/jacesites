<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
		<title>Игра интриганов</title>
		<style>
iframe {
	border: 0px solid white;
	width: 100%;
	height: 100%;
}
		</style>
	</head>
	<body>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/back_button.php'); ?>
		<iframe src="game.pdf"></iframe>
	</body>
</html>