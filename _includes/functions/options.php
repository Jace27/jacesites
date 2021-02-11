<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');

function get_option_pages(){
	$ret = [];
	$mysqli = connect_db();
	
	$query = "SELECT id, text_id, title FROM options_pages";
	$result = $mysqli->query($query);
	if (!$result){
		trigger_error('{ "status": "error", "error": "get option pages error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			if ($row != null){
				array_push($ret, [ 'id'=>$row['id'], 'text_id'=>$row['text_id'], 'title'=>$row['title'] ]);
			}
		}
	}
	
	$mysqli->close();
	return $ret;
}
function get_options($user_id){
	$ret = [];
	$mysqli = connect_db();
	
	$query = "SELECT options.page, options.text_id, options.attrs, options.title, options.type, options_values.value, options_values.hidden FROM options LEFT JOIN options_values ON options_values.option=options.id AND options_values.user=$user_id ORDER BY options.page";
	$result = $mysqli->query($query);
	if (!$result){
		trigger_error('{ "status": "error", "error": "get user options data error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			if ($row != null){
				array_push($ret, [
					'page' => $row['page'],
					'option' => $row['text_id'],
					'attrs' => $row['attrs'],
					'type' => $row['type'],
					'title' => $row['title'],
					'value' => $row['value'],
					'hidden' => $row['hidden']
				]);
			}
		}
	}
	
	$mysqli->close();
	return $ret;
}
function get_option_id($text_id){
	$ret = -1;
	$mysqli = connect_db();
	
	$query = "SELECT id FROM options WHERE `text_id`='$text_id'";
	$result = $mysqli->query($query);
	if (!$result){
		trigger_error('{ "status": "error", "error": "get option id by text_id error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else if ($result->num_rows > 0){
		$ret = $result->fetch_assoc()['id'];
	}
	
	$mysqli->close();
	return $ret;
}
function is_option_record_exist($user_id, $option_id){
	$ret = false;
	$mysqli = connect_db();
	
	$query = "SELECT id FROM options_values WHERE `option`='$option_id' AND `user`=$user_id";
	$result = $mysqli->query($query);
	if (!$result){
		trigger_error('{ "status": "error", "error": "check option record existence error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else if ($result->num_rows > 0){
		$ret = true;
	}
	
	$mysqli->close();
	return $ret;
}
function set_option_record($user_id, $option_id, $value, $hidden){
	$mysqli = connect_db();
	
	$query = '';
	if (is_option_record_exist($user_id, $option_id))
		$query = "UPDATE options_values SET `value`='$value', hidden=$hidden WHERE `user`=$user_id AND `option`=$option_id";
	else
		$query = "INSERT INTO options_values (`user`, `option`, `value`, hidden) VALUES ($user_id, $option_id, '$value', $hidden)";
	$result = $mysqli->query($query);
	if (!$result){
		trigger_error('{ "status": "error", "error": "set option record error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else {
		$ret = true;
	}
	
	$mysqli->close();
	return $result;
}
?>