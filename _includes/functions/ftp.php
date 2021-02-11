<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/ftp.php');
function connect_ftp(){
    $conn_id = ftp_connect(FTP_HOST);
    $login_res = ftp_login($conn_id, FTP_USER, FTP_PASSWORD);
    return $conn_id;
}