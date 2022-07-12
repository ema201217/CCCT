<?php 

include 'connection.php';

include 'requestRegister.php';

$queryCreate = "INSERT INTO users (id, lastName, firstName, email, phone, dni, username,address,password)
VALUES (NULL,'$lastName','$firstName','$email','$phone','$dni','$username','$address','$pass')";

mysqli_query($connection,$queryCreate);

?>