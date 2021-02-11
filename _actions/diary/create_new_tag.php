<?php
header('Content-Type: application/json;charset=utf-8');
$tag = file_get_contents('php://input');
$tag = urldecode($tag);
$tag = json_decode($tag, true);
$tag['tag'] = str_replace('%', '', $tag['tag']);
$tag['tag'] = str_replace('^', '', $tag['tag']);
$tag['tag'] = str_replace('[', '', $tag['tag']);
$tag['tag'] = str_replace(']', '', $tag['tag']);
$tag['tag'] = str_replace('_', '', $tag['tag']);
include($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/dreams.php');
$status = create_tag($tag);
$res = '{ "tag": "'.$tag['tag'].'", "status": "'.$status.'" }';
echo $res;
?>