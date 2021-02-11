<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['nick']) || ($_SESSION['nick'] != 'max' && $_SESSION['nick'] != 'jace')){
    header('location: /');
    die;
}
?>
<!doctype html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
    <title>Одноразовая передача - получение</title>
</head>
<body>
    <div id="main">
        <input type="text">
        <button>Получить файл</button><hr>
    </div>
    <div id="response"></div>
    <script src="index.js"></script>
</body>
</html>
