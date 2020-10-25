<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/database.php');

$connection123 = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
if ($connection123 == false){
	if($connection123->error){
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$connection123->errno.'", "description":"'.$connection123->error.'" }', E_USER_ERROR);
		}
}
mysqli_set_charset($connection123, "utf8");

$query = "INSERT INTO `visits` SET `id`=NULL, `time`='".date('d.m.Y H:i:s:v', time())."', `page`='".$_SERVER['REQUEST_URI']."', `ip`='".GetIP()."'";
$result = mysqli_query($connection123, $query);
if ($result == false){
	if ($result->connect_error) {
    trigger_error('{ "status": "error", "error": "add visit record error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
  }
}

function GetIP() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return $ip;
}

mysqli_close($connection123);
?>