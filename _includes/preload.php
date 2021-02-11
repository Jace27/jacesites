<?php
ini_set('session.gc_maxlifetime', 172800);
ini_set('session.cookie_lifetime', 172800);

header('Content-Type: text/html;charset=utf-8');
header('Accept-Charset: utf-8');
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/error.php');
require_once($_SERVER['DOCUMENT_ROOT']."/_includes/ip_watcher.php");
?>