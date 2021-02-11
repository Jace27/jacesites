<?php
session_start();
if ((!isset($_SESSION['nick']) || !isset($_SESSION['session'])) && !isset($_GET['user'])) {
	$_SESSION['message'] = 'У вас недостаточно прав на изменение данных пользователя';
	header('location: /');
}

require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/sessions.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/users.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/options.php');

$new_data = []; $target = $_SESSION['nick'];

foreach ($_POST as $fn => $fv){
	if ($fn == 'nick'){
		$target = $fv;
	} else if ($fn == 'new_pass'){
		if (trim($fv) != ''){
			change_user_account($_SESSION['nick'], [
				'pass' => password_hash($fv, PASSWORD_BCRYPT)
			]);
		}
	} else {
		if (strpos($fn, '-hidden') > 0){
			if (!isset($new_data[str_replace('-hidden', '', $fn)])) $new_data[str_replace('-hidden', '', $fn)] = [
				'value' => '',
				'hidden' => 0
			];
			if ($fv == '1' || $fv == 'on') $fv = 1;
									  else $fv = 0;
			$new_data[str_replace('-hidden', '', $fn)]['hidden'] = $fv;
		} else {
			if (!isset($new_data[$fn])) $new_data[$fn] = [
				'value' => '',
				'hidden' => 0
			];
			$new_data[$fn]['value'] = $fv;
		}
	}
}
if (isset($_FILES['avatar_filename'])){
	if ($_FILES['avatar_filename']['error'] == 0 &&
		($_FILES['avatar_filename']['type'] == 'image/jpeg' || $_FILES['avatar_filename']['type'] == 'image/jpg' || $_FILES['avatar_filename']['type'] == 'image/png')){
		unlink($_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$_SESSION['nick']);
		if (isset($_POST['nick']))
			$new_name = trim($_POST['nick']);
		else
			$new_name = $_SESSION['nick'];
		move_uploaded_file($_FILES['avatar_filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$new_name);
	}
}

change_user_options($target, $new_data);
$_SESSION['message'] = 'Успешно обновлено';
header('location: /profile/');
/*
if (isset($_POST['nick']) && trim($_POST['nick']) != ""){
	$new_data['nick'] = trim($_POST['nick']);
	change_session_nick($_SESSION['session'], trim($_POST['nick']));
	rename($_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.$_SESSION['nick'], $_SERVER['DOCUMENT_ROOT'].'/_images/avatars/'.trim($_POST['nick']));
	$_SESSION['nick'] = trim($_POST['nick']);
}
if (isset($_POST['new_pass']) && trim($_POST['new_pass']) != ""){
	$new_data['pass'] = $_POST['new_pass'];
}
*/
?>