<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/sessions.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/users.php');
if (isset($_SESSION['session'])){
	destroy_session($_SESSION['session']);
	unset($_SESSION['session']);
	unset($_SESSION['nick']);
	unset($_SESSION['role']);
	$sessions = get_sessions();
	header('location: /');
} else {
	$_SESSION['message'] = 'Пустой запрос';
	header('location: /');
}
?>