<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<?php
if (!isset($_COOKIE['game']) || !isset($_COOKIE['id'])){
	$_SESSION['message'] = 'Не указана игра для входа';
	header('location: /games/stalker_game/index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Создание персонажа < Сталкерская игра</title>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
</head>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
	<div class="container">
		<p id="game_data"></p>
		<h2>Создайте предысторию для игры</h2>
		<form name="identity" action="/_actions/games/stalker_game/player_registration.php" method="post">
			<div class="input w-half" required><input class="form-control" type="text" name="i_name" placeholder="Имя персонажа"></div>
			<div class="input w-half" required><input class="form-control" type="text" name="i_surname" placeholder="Фамилия персонажа"></div>
			<div class="input w-half" required><input class="form-control" type="date" name="i_birth" placeholder="Дата рождения"></div>
			<input type="submit" value="Начать игру!" class="btn btn-primary" name="submit"><br>
		</form>
		<script type="text/javascript">
			function getCookie(name) {
				let matches = document.cookie.match(new RegExp(
					"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
				));
				return matches ? decodeURIComponent(matches[1]) : undefined;
			}
			$('#game_data').html('Игра ' + getCookie('game') + ', сессия ' + getCookie('id'));
		</script>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
</body>
</html>