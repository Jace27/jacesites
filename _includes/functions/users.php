<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/errors.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/options.php');

function get_user_data($nickname){
	$mysqli = connect_db();
	
	$query = "SELECT * FROM users WHERE nick='$nickname'";
	$result = $mysqli->query($query);
	if(!$result){
		trigger_error('{ "status": "error", "error": "get user data error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else {
		mysqli_close($mysqli);
		if (mysqli_num_rows($result) == 0){
			return null;
		} else {
			return mysqli_fetch_assoc($result);
		}
	}

	mysqli_close($mysqli);
}
function check_nick($nick){
	$mysqli = connect_db();
	
	$query = "SELECT nick FROM users WHERE nick='".trim($nick)."'";
	$result = $mysqli->query($query);
	if(!$result){
		trigger_error('{ "status": "error", "error": "check nick error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else {
		mysqli_close($mysqli);
		if (mysqli_num_rows($result) == 0){
			return 'available';
		} else {
			return 'busy';
		}
	}

	mysqli_close($mysqli);
}
function add_user($nick, $pass){
	$mysqli = connect_db();
	
	$pass = password_hash($pass, PASSWORD_BCRYPT);
	if (check_nick($nick) == 'available'){
		$query = "INSERT INTO users (nick, pass) VALUES ('$nick', '$pass')";
		$result = $mysqli->query($query);
		if(!$result){
			trigger_error('{ "status": "error", "error": "add new user error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
		}
	}

	mysqli_close($mysqli);
}
function change_user_options($nick, $new_data){
	$id = get_user_data($nick)['id'];
	foreach ($new_data as $fn => $fv){
		set_option_record($id, get_option_id($fn), $fv['value'], $fv['hidden']);
	}
}
function change_user_account($nick, $new_data){
	$mysqli = connect_db();
	
	$fields = [];
	foreach ($new_data as $fn => $fv){
		array_push($fields, "$fn='$fv'");
	}
	$query = "UPDATE users SET ".implode(', ', $fields)." WHERE nick='$nick'";
	$result = $mysqli->query($query);
	if (!$result){
		trigger_error('{ "status": "error", "error": "change user data error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	}
	
	$mysqli->close();
}
?>