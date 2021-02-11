<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/errors.php');

function get_sessions(){
	$mysqli = connect_db();
	
	$query = 'SELECT * FROM sessions';
	$result = $mysqli->query($query);
	if(!$result){
		trigger_error('{ "status": "error", "error": "get sessions data error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else {
		mysqli_close($mysqli);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}

	mysqli_close($mysqli);
}
function add_session($nick, $session, $time){
	$mysqli = connect_db();
	
	$_SESSION['nick'] = $nick;
	$_SESSION['session'] = $session;

	$sessions = get_sessions();
	if (count($sessions) > 0){
		foreach ($sessions as $sess) {
			if ($sess['nick'] == $nick){
				$_SESSION['session'] = $sess['session'];
				mysqli_close($mysqli);
				return;
			}
		}
	}

	$query = "INSERT INTO sessions SET nick='$nick', session='$session', time_start='$time'";
	$result = $mysqli->query($query);
	if(!$result){
		trigger_error('{ "status": "error", "error": "add session error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	}

	mysqli_close($mysqli);
}
function destroy_session($session){
	$mysqli = connect_db();

	$query = "DELETE FROM sessions WHERE session='$session'";
	$result = $mysqli->query($query);
	if(!$result){
		trigger_error('{ "status": "error", "error": "destroy session error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	}

	mysqli_close($mysqli);
}
function change_session_nick($session, $new_nick){
	$mysqli = connect_db();

	$query = "UPDATE sessions SET nick='".$new_nick."' WHERE session='".$session."'";
	$result = $mysqli->query($query);
	if(!$result){
		trigger_error('{ "status": "error", "error": "change session error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	}

	mysqli_close($mysqli);
}
?>