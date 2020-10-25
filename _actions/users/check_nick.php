<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/sessions.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/users.php');
if (isset($_GET['nick'])) {
	echo check_nick($_GET['nick']);
} else {
	$_SESSION['message'] = 'Пустой запрос';
	header('location: /');
}
?>