<?php
header('Content-Type: application/json;charset=utf-8');
$tag = $_GET['tag'];
$tag = str_replace('%', '', $tag);
$tag = str_replace('^', '', $tag);
$tag = str_replace('[', '', $tag);
$tag = str_replace(']', '', $tag);
$tag = str_replace('_', '', $tag);
include($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/dreams.php');
$exist = is_tag_exist($tag);
if ($exist) $exist = "true";
       else $exist = "false";
$res = '{ "tag": "'.$tag.'", "exist": '.$exist.' }';
echo $res;
?>