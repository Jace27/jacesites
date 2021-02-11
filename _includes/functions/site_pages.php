<?php
function get_site_pages(){
	$ret = [];
	$mysqli = connect_db();
	
	$query = "SELECT title, link FROM site_pages WHERE site_pages.hide=0";
	$result = $mysqli->query($query);
	if(!$result){
		trigger_error('{ "status": "error", "error": "get site pages list error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
	} else if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			if ($row != null){
				array_push($ret, $row);
			}
		}
	}
	
	mysqli_close($mysqli);
	return $ret;
}
?>