<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/errors.php');

define("GAME_STATUSES", array('created', 'started', 'paused', 'ended'));

function create_game($game, $title) {
	$mysqli = connect_db();

	$time_start = time();
	$query = "INSERT INTO game_sessions SET game='$game', title='$title', time_start='$time_start', status='created'";
	$result = $mysqli->query($query);
	if(!$result) {
		trigger_error('{ "status": "error", "error": "create game session error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else {
		$query = "SELECT id FROM game_sessions WHERE game='$game' AND title='$title' AND time_start='$time_start'";
		$result = $mysqli->query($query);
		if(!$result){
			trigger_error('{ "status": "error", "error": "getting game session id error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		} else {
			mysqli_close($mysqli);
			return mysqli_fetch_all($result, MYSQLI_ASSOC)[0]['id'];
		}
	}
	mysqli_close($mysqli);
	return false;
}
function change_game_status($id, $status){
	$mysqli = connect_db();

	if (in_array($status, GAME_STATUSES)){
		$query = "UPDATE game_sessions SET status='$status' WHERE id='$id'";
		$result = $mysqli->query($query);
		if (!$result) {
			trigger_error('{ "status": "error", "error": "change game status error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		} else {
			mysqli_close($mysqli);
			return true;
		}
	} else {
		trigger_error('{ "status": "error", "error": "invalid game status error", "errno": "-1", "description": "" }', E_USER_ERROR);
	}

	mysqli_close($mysqli);
	return false;
}
function get_active_games($game_type){
	$mysqli = connect_db();

	$query = "SELECT * FROM game_sessions WHERE status<>'ended' AND game='$game_type'";
	$result = $mysqli->query($query);
	if (!$result){
		trigger_error('{ "status": "error", "error": "get active games error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else {
		mysqli_close($mysqli);
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}

	$mysqli_close($mysqli);
	return false;
}
?>