<?php
if (isset($_SESSION['message'])){
    echo "<script> ";
        echo "document.body.onload = function(){ ";
            echo "alert('".$_SESSION["message"]."'); ";
        echo "} ";
    echo "</script>";
    unset($_SESSION['message']);
}
