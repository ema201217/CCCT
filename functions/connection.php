<?php
/* Traemos las constantes */
include 'constants.php';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()){
    exit();
} 
?>