<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/_includes/database.php';
function connect_db(){
	$mysqli = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if ($mysqli->connect_error){
		trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$mysqli->connect_errno.'", "description":"'.format($mysqli->connect_error).'" }', E_USER_ERROR);
	}
	$mysqli->query("SET NAMES 'utf8'");
	return $mysqli;
}