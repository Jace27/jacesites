<?php
function get_title_events(){
	$ret = [];
	$mysqli = connect_db();
	
	$query = "SELECT site_pages.link, site_pages.title AS page, title_events.title AS event, title_events.description FROM site_pages, title_events WHERE site_pages.id=title_events.page ORDER BY title_events.id DESC";
	$result = $mysqli->query($query);
	if(!$result){
		trigger_error('{ "status": "error", "error": "get title events error", "errno": "'.$mysqli->errno.'", "description": "'.format($mysqli->error).'" }', E_USER_ERROR);
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