<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/errors.php');

function ip_watcher(){
	if (GetIP() == '127.0.0.1') return;
	session_start();
	$user = "'null'";
	if (isset($_SESSION['nick'])) $user = "'".$_SESSION['nick']."'";
	$mysqli = connect_db();
	$query = "INSERT INTO visits (time, page, ip, user) VALUES ('".date('Y-m-d H:i:s')."', '".$_SERVER['REQUEST_URI']."', '".GetIP()."', ".$user.")";
	$result = $mysqli->query($query);
	if (!$result){
		trigger_error('{ "status": "error", "error": "add visit record error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	}
	$mysqli->close();
}
ip_watcher();

function GetIP() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}
?>
