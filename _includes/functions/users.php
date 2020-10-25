<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/database.php');

function get_user_data($nickname){
	$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if ($connection == false){
		if($connection->error){
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$connection->errno.'", "description":"'.$connection->error.'" }', E_USER_ERROR);
		}
	}
	mysqli_set_charset($connection, "utf8");

	$query = 'SELECT * FROM `users` WHERE `nick`="'.$nickname.'"';
	$result = mysqli_query($connection, $query);
	if ($result == false){
		if ($result->connect_error) {
			trigger_error('{ "status": "error", "error": "get user data error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
	} else {
		mysqli_close($connection);
		if (mysqli_num_rows($result) == 0){
			return null;
		} else {
			return mysqli_fetch_assoc($result);
		}
	}
}
function check_nick($nick){
	$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if ($connection == false){
		if($connection->error){
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$connection->errno.'", "description":"'.$connection->error.'" }', E_USER_ERROR);
		}
	}
	mysqli_set_charset($connection, "utf8");

	$query = 'SELECT `nick` FROM `users` WHERE `nick`="'.trim($nick).'"';
	$result = mysqli_query($connection, $query);
	if ($result == false){
		if ($result->connect_error) {
			trigger_error('{ "status": "error", "error": "check nick error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
	} else {
		mysqli_close($connection);
		if (mysqli_num_rows($result) == 0){
			return 'available';
		} else {
			return 'busy';
		}
	}
}
function add_user($nick, $pass){
	$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if ($connection == false){
		if($connection->error){
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$connection->errno.'", "description":"'.$connection->error.'" }', E_USER_ERROR);
		}
	}
	mysqli_set_charset($connection, "utf8");

	if (check_nick($nick) == 'available'){
		$query = 'INSERT INTO `users` SET `id`=NULL, `nick`="'.$nick.'", `pass`="'.$pass.'", `role`=99';
		$result = mysqli_query($connection, $query);
		if ($result == false){
			if ($result->connect_error) {
				trigger_error('{ "status": "error", "error": "add new user error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
			}
		}
	}

	mysqli_close($connection);
}
function change_user_data($nick, $new_data){
	$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if ($connection == false){
		if($connection->error){
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$connection->errno.'", "description":"'.$connection->error.'" }', E_USER_ERROR);
		}
	}
	mysqli_set_charset($connection, "utf8");

	$query = "UPDATE `users` SET ";
	if (isset($new_data['nick']) && trim($new_data['nick']) != "" && check_nick($new_data['nick']) == 'available'){
		$query = $query.'`nick`="'.trim($new_data['nick']).'", ';
	}
	if (isset($new_data['name']) && trim($new_data['name']) != ""){
		$query = $query.'`name`="'.trim($new_data['name']).'", ';
	}
	if (isset($new_data['surname']) && trim($new_data['surname']) != ""){
		$query = $query.'`surname`="'.trim($new_data['surname']).'", ';
	}
	if (isset($new_data['patronymic']) && trim($new_data['patronymic']) != ""){
		$query = $query.'`patronymic`="'.trim($new_data['patronymic']).'", ';
	}
	if (isset($new_data['city']) && trim($new_data['city']) != ""){
		$query = $query.'`city`="'.trim($new_data['city']).'", ';
	}
	if (isset($new_data['hour']) && trim($new_data['hour']) != ""){
		$query = $query.'`hour`="'.trim($new_data['hour']).'", ';
	}
	if (isset($new_data['birth']) && trim($new_data['birth']) != ""){
		$query = $query.'`birth`="'.trim($new_data['birth']).'", ';
	}
	if (isset($new_data['new_pass']) && trim($new_data['new_pass']) != ""){
		$query = $query.'`pass`="'.trim($new_data['new_pass']).'", ';
	}

	$query = rtrim($query, ', ');
	$query = $query.' WHERE `nick`="'.$_SESSION['nick'].'"';
	$result = mysqli_query($connection, $query);
	if ($result == false){
		if ($result->connect_error) {
			trigger_error('{ "status": "error", "error": "change user data error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
	}

	mysqli_close($connection);
}
?>