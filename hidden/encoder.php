<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/preload.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/encryption.php'); ?>
<?php session_start(); ?>
<?php
if (!isset($_SESSION['nick']) || ($_SESSION['nick'] != 'max' && $_SESSION['nick'] != 'jace')){
    header('location: /');
    die;
}
?>
<?php
if (isset($_FILES['file']) && isset($_POST['password']) && isset($_POST['downloadable'])){
    require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/functions/database.php');
    if (!$_FILES['file']['error']) {
        $new_name = time().'';
        $mysqli = connect_db();
        $res = $mysqli->query("INSERT INTO `hidden` (`file`, `password`, `downloadable`, `mime`) VALUES ('" . $new_name . "', '" . password_hash($_POST['password'], PASSWORD_BCRYPT) . "', '" . $_POST['downloadable'] . "', '".mime_content_type($_FILES['file']['tmp_name'])."')");
        move_uploaded_file($_FILES['file']['tmp_name'], __DIR__.'/uploaded/'.$new_name);
        file_put_contents(__DIR__.'/uploaded/'.$new_name, encrypt_decrypt('encrypt', base64_encode(file_get_contents(__DIR__.'/uploaded/'.$new_name)), $_POST['password']));
        if ($res)
            echo 'Успешно закодировано';
        else
            echo 'Не удалось закодировать: '.$mysqli->error;
    } else {
        echo 'Не удалось сохранить файл: '.$_FILES['file']['error'];
    }
} else { ?>
    <!doctype html>
    <html lang="ru">
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); ?>
        <title>Одноразовая передача - отправление</title>
        <style>
            .placeholder {
                position: fixed;
                width: 100%;
                height: 100%;
                background-color: black;
            }
            .placeholder * {
                color: white;
                width: 100%;
                text-align: center;
                margin-top: 5em;
            }
            .d-none {
                display: none;
            }
        </style>
    </head>
    <body>
        <input type="file"> макс. размер 128мб<br>
        Ключ получения: <input type="text"> | <label for="downloadable">Разрешить сохранение <input type="checkbox" id="downloadable"></label><br>
        <button>Закодировать</button>
        <script src="encoder.js"></script>
    </body>
    </html>
<?php }
