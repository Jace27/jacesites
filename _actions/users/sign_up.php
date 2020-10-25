<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/sessions.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/users.php');
if (isset($_POST['nick']) && isset($_POST['pass'])){
	$check_nick = check_nick($_POST['nick']);
	if ($check_nick == 'busy'){
		$_SESSION['message'] = 'Пользователь с таким ником уже существует';
		header('location: /');
	} else if ($check_nick == 'available') {
		add_user($_POST['nick'], $_POST['pass']);

		$time = time();
		$_SESSION['role'] = 99;

		add_session($_POST['nick'], hash('sha256', $time), $time);
		$sessions = get_sessions();

		$_SESSION['message'] = 'Вы успешно зарегистрированы';
		header('location: /');
	} else {
		$_SESSION['message'] = 'Извините, произошла ошибка, обратитесь к системному администратору';
		header('location: /');
	}
} else {
	$_SESSION['message'] = 'Пустой запрос';
	header('location: /');
}
?>