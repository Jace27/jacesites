<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] < 10) header('location: /');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Игры</title>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); ?>
        <br>
        <a href="stalker_game/">Сталкерская игра</a>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/message.php') ?>
    </body>
</html>