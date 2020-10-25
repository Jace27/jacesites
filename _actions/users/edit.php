<?php
session_start();
if ((!isset($_SESSION['nick']) || !isset($_SESSION['session'])) && !isset($_GET['user'])) {
	$_SESSION['message'] = 'У вас недостаточно прав на изменение данных пользователя';
	header('location: /');
}

require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/sessions.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/users.php');

$new_data = [];

if (isset($_POST['nick']) && trim($_POST['nick']) != ""){
	$new_data['nick'] = trim($_POST['nick']);
	change_session_nick($_SESSION['session'], trim($_POST['nick']));
	rename($_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$_SESSION['nick'], $_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.trim($_POST['nick']));
	$_SESSION['nick'] = trim($_POST['nick']);
}
if (isset($_POST['name']) && trim($_POST['name']) != ""){
	$new_data['name'] = $_POST['name'];
}
if (isset($_POST['surname']) && trim($_POST['surname']) != ""){
	$new_data['surname'] = $_POST['surname'];
}
if (isset($_POST['patronymic']) && trim($_POST['patronymic']) != ""){
	$new_data['patronymic'] = $_POST['patronymic'];
}
if (isset($_POST['city']) && trim($_POST['city']) != ""){
	$new_data['city'] = $_POST['city'];
}
if (isset($_POST['hour']) && trim($_POST['hour']) != ""){
	$new_data['hour'] = $_POST['hour'];
}
if (isset($_POST['birth']) && trim($_POST['birth']) != ""){
	$new_data['birth'] = $_POST['birth'];
}
if (isset($_POST['new_pass']) && trim($_POST['new_pass']) != ""){
	$new_data['pass'] = $_POST['new_pass'];
}
if (isset($_FILES['ava'])){
	if ($_FILES['ava']['error'] == 0 &&
		($_FILES['ava']['type'] == 'image/jpeg' || $_FILES['ava']['type'] == 'image/jpg' || $_FILES['ava']['type'] == 'image/png')){
		unlink($_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$_SESSION['nick']);
		if (isset($_POST['nick']))
			$new_name = trim($_POST['nick']);
		else
			$new_name = $_SESSION['nick'];
		move_uploaded_file($_FILES['ava']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$new_name);
	}
}
change_user_data($_SESSION['nick'], $new_data);

$_SESSION['message'] = 'Успешно обновлено';
header('location: /profile/');
?>