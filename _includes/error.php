<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/errors.php');
error_reporting(-1);
set_error_handler('onerror');
register_shutdown_function('onshutdown');
ob_start();
?>