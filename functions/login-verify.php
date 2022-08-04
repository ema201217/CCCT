<?php
session_start();
include 'CRUD_USERS.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$user = mysqli_fetch_array(find_by_email($email));
if (!empty($user)) {
    $_SESSION['user'] = $user;
    header('Location: ../views/index.php');
} else {
    header('Location: ../views/login.php');
} 
?>