<?php
session_start();
if (!isset($_SESSION['nick']) || $_SESSION['nick'] != 'jace'){
    header('location: /');
} else {
    require_once($_SERVER['DOCUMENT_ROOT'] . '/_includes/preload.php'); ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Искры Костра</title>
        <meta http-equiv="Cache-Control" content="no-cache">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/_includes/head.php'); ?>
    </head>
    <body link="#009" alink="#009" vlink="#009">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/_includes/header.php'); ?>
        <div class="container">
            <form action="#" method="get" id="encode_form">
                <input type="text" name="password" id="encode_form_input_password"><br>
                <input type="text" name="pass" id="encode_form_input_pass" style="display: none;">
                <button id="btn_submit">Закодировать</button>
            </form>
            <script type="text/javascript">
                $('#btn_submit').on('click', function() {
                    $('#encode_form').attr('action', '/_actions/encode_password.php');
                    console.log(sha256($.trim($('#encode_form_input_password').val())));
                    $('#encode_form_input_pass').val(sha256($.trim($('#encode_form_input_password').val())));
                    $('#encode_form').submit();
                });
                $('#encode_form').on('submit', function(e){
                    if ($('#encode_form').attr('action') == '#'){
                        e.preventDefault();
                    }
                });
            </script>
        </div>
    </body>
    </html>
<?php
}