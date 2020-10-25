<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/database.php');

function get_sessions(){
	$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if ($connection == false){
		if($connection->error){
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$connection->errno.'", "description":"'.$connection->error.'" }', E_USER_ERROR);
		}
	}
	mysqli_set_charset($connection, "utf8");

	$query = 'SELECT * FROM `sessions`';
	$result = mysqli_query($connection, $query);
	if ($result == false){
		if ($result->connect_error) {
			trigger_error('{ "status": "error", "error": "get sessions data error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
	} else {
		mysqli_close($connection);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}
}
function add_session($nick, $session, $time){
	$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if ($connection == false){
		if($connection->error){
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$connection->errno.'", "description":"'.$connection->error.'" }', E_USER_ERROR);
		}
	}
	mysqli_set_charset($connection, "utf8");

	$_SESSION['nick'] = $nick;
	$_SESSION['session'] = $session;

	$sessions = get_sessions();
	if (count($sessions) > 0){
		foreach ($sessions as $sess) {
			if ($sess['nick'] == $nick){
				$_SESSION['session'] = $sess['session'];
				mysqli_close($connection);
				return;
			}
		}
	}

	$query = 'INSERT INTO `sessions` SET `nick`="'.$nick.'", `session`="'.$session.'", `time_start`='.$time;
	$result = mysqli_query($connection, $query);
	if ($result == false){
		if ($result->connect_error) {
			trigger_error('{ "status": "error", "error": "add session error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
	}

	mysqli_close($connection);
}
function destroy_session($session){
	$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if ($connection == false){
		if($connection->error){
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$connection->errno.'", "description":"'.$connection->error.'" }', E_USER_ERROR);
		}
	}
	mysqli_set_charset($connection, "utf8");

	$query = 'DELETE FROM `sessions` WHERE `session`="'.$session.'"';
	$result = mysqli_query($connection, $query);
	if ($result == false){
		if ($result->connect_error) {
			trigger_error('{ "status": "error", "error": "destroy session error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
	}

	mysqli_close($connection);
}
function change_session_nick($session, $new_nick){
	$connection = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_DATABASE);
	if ($connection == false){
		if($connection->error){
			trigger_error('{ "status": "core error", "error": "mysql connect error", "errno":"'.$connection->errno.'", "description":"'.$connection->error.'" }', E_USER_ERROR);
		}
	}
	mysqli_set_charset($connection, "utf8");

	$query = 'UPDATE `sessions` SET `nick`="'.$new_nick.'" WHERE `session`="'.$session.'"';
	$result = mysqli_query($connection, $query);
	if ($result == false){
		if ($result->connect_error) {
			trigger_error('{ "status": "error", "error": "change session error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
	}

	mysqli_close($connection);
}
?>