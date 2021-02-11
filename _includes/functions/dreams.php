<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/errors.php');
function get_tag_types(){
	$ret = [];
	$mysqli = connect_db();
	$q = "SELECT text_id, title FROM tags_groups";
	$res = $mysqli->query($q);
	if (!$res){
		trigger_error('{ "status": "error", "error": "get dream tag types error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }');
	} else if ($res->num_rows > 0){
		while($row = $res->fetch_assoc()){
			if ($row != null){
				array_push($ret, $row);
			}
		}
	}
	$mysqli->close();
	return $ret;
}
function get_dream_tags($type){
	$ret = [];
	$mysqli = connect_db();
	$q = "SELECT tag, description FROM dream_tags WHERE `group`='$type'";
	$res = $mysqli->query($q);
	if (!$res){
		trigger_error('{ "status": "error", "error": "get dream tags error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }');
	} else if ($res->num_rows > 0){
		while($row = $res->fetch_assoc()){
			if ($row != null){
				array_push($ret, $row);
			}
		}
	}
	$mysqli->close();
	return $ret;
}
function is_tag_exist($tag){
	$ret = false;
	$mysqli = connect_db();
	$q = "SELECT tag FROM dream_tags WHERE lower(tag) LIKE '".mb_strtolower($tag)."'";
	$res = $mysqli->query($q);
	if (!$res){
		trigger_error('{ "status": "error", "error": "check tag existence error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }');
	} else if ($res->num_rows > 0){
		$ret = true;
	}
	$mysqli->close();
	return $ret;
}
function create_tag($tag){
	$ret = 'fail';
	if (is_tag_exist($tag['tag'])){
		$ret = 'exist';
	} else {
		$mysqli = connect_db();
		$description = $tag['description'];
		if ($description == null) $description = 'null';
							 else $description = "'$description'";
		$q = "INSERT INTO dream_tags (tag, description, `group`) VALUES ('".$tag['tag']."', $description, '".$tag['group']."')";
		$res = $mysqli->query($q);
		if (!$res) {
			trigger_error('{ "status": "error", "error": "add new dream tag error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }');
		} else {
			$ret = 'created';
		}
		$mysqli->close();
	}
	return $ret;
}
?>