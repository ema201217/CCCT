<?php

$connection = mysqli_connect("localhost","root","","bd_conferencias");
if(mysqli_connect_errno()){
    echo 'ocurrió un error';
    exit;
} 

?>