<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/sessions.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/users.php');
if (isset($_POST['nick']) && isset($_POST['pass'])){
	$user_data = get_user_data($_POST['nick']);
	if ($user_data == null){
		$_SESSION['message'] = 'Неверное имя пользователя';
		header('location: /');
	} else {
		if (!password_verify($_POST['pass'], $user_data['pass'])){
		    //var_dump($_POST['pass']);
		    //var_dump(password_hash($_POST['pass'], PASSWORD_BCRYPT));
			$_SESSION['message'] = 'Неверный пароль';
			header('location: /');
		} else {
			$time = time();
			$_SESSION['role'] = $user_data['role'];

			add_session($_POST['nick'], hash('sha256', $time), $time);
			$sessions = get_sessions();

			//$_SESSION['message'] = 'Вы успешно вошли в систему';
			header('location: /');
		}
	}
} else {
	$_SESSION['message'] = 'Пустой запрос';
	header('location: /');
}
?>