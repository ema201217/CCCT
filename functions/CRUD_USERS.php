<?php 

$create_user = fn() => (
    include 'connection.php';
    include 'varsRequestRegister';
    $queryCreate = "INSERT INTO users (id, lastName, firstName, email, phone, dni, username,address,password)
VALUES (NULL,'$lastName','$firstName','$email','$phone','$dni','$username','$address','$pass')";

    mysqli_query($connection,$queryCreate);
)

$update_user = fn($id) => (
    include 'connection.php';
    include 'varsRequestRegister';
    $queryUpdate = "UPDATE users SET lastName='$lastName', firstName='$firstName', email='$email', phone='$phone', dni='$dni', username='$username',address='$address',password='$pass' WHERE id=$id";
    mysqli_query($connection,$queryUpdate); 
)

$remove_user = fn($id) => (
    include 'connection.php';
    include 'varsRequestRegister';
    $queryDelete = "DELETE FROM users WHERE id=$id";
    mysqli_query($connection,$queryDelete);
)

$get_user_by_id = fn($id) => (
    include 'connection.php';
    include 'varsRequestRegister';
    $queryDelete = "SELECT * FROM users WHERE id=$id";
    mysqli_query($connection,$queryDelete);
)

$get_user_all = fn() => (
    include 'connection.php';
    include 'varsRequestRegister';
    $queryDelete = "SELECT * FROM users WHERE id=$id";
    mysqli_query($connection,$queryDelete);
)
?>