<?php
if (isset($_REQUEST['pass'])) {
    echo $_REQUEST['password'].'<br>';
    echo $_REQUEST['pass'].'<br>';
    echo password_hash($_REQUEST['pass'], PASSWORD_BCRYPT);
}