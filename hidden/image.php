<?php
header('Accept-Charset: utf-8');
require_once($_SERVER['DOCUMENT_ROOT']."/_includes/ip_watcher.php");
?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/encryption.php'); ?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['nick']) || ($_SESSION['nick'] != 'max' && $_SESSION['nick'] != 'jace')){
    header('location: /');
    die;
}
?>
<?php
if (isset($_POST['password'])){
    require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');
    $mysqli = connect_db();
    $result = $mysqli->query("SELECT `id`, `password` FROM `hidden`");
    $echoed = false;
    while($row = $result->fetch_assoc()){
        if (password_verify($_POST['password'], $row['password'])){
            $file = $mysqli->query("SELECT `file`, `downloadable` FROM `hidden` WHERE `id`=".$row['id']);
            if ($file){
                $file = $file->fetch_assoc();
                $mysqli->query("DELETE FROM `hidden` WHERE `id`=".$row['id']);
                header('Content-Type: image/png');
                echo $file['downloadable'].'|'.encrypt_decrypt('decrypt', file_get_contents(__DIR__.'/uploaded/'.$file['file']), $_POST['password']);
                unlink(__DIR__.'/uploaded/'.$file['file']);
                $echoed = true;
            }
        }
    }
    if (!$echoed) {
        header('Content-Type: text/plain;charset=utf-8');
        echo 'nothing found';
    }
}
?>
