<?php
include 'CRUD_USERS.php';

$existErrors = true;

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$dni = $_POST['dni'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$terms = isset($_POST['terms']) ? $_POST['terms'] : '';

/* VALIDATION FirstName */
switch (true) {
    case empty($firstName):
    case strlen($firstName) < 5:
    case strlen($firstName) > 20:

    case empty($lastName):
    case strlen($lastName) < 5:
    case strlen($lastName) > 15:

    case empty($email):
    case !filter_var($email, FILTER_VALIDATE_EMAIL):

    case empty($dni):
    case !is_numeric($dni):
    case strlen($dni) < 8:
    case strlen($dni) > 9:

    case empty($phone):
    case !is_numeric($phone):
    case strlen($phone) < 7:
    case strlen($phone) > 11:

    case empty($address):
    case strlen($address) < 7:
    case strlen($address) > 50:

    case empty($username):
    case strlen($username) < 6:
    case strlen($username) > 20:

    case empty($pass):
    case strlen($pass) < 8:
    case strlen($pass) > 20:

    case $terms != 'on':
        $existErrors = true;
        break;
    default:
        $existErrors = false;
}

// var_dump(exist_email_db($email)->lengths);
if (!$existErrors && exist_email_db($email)->lengths == null) {
    /* Incluimos las funciones para crear recursos */
    create_user(
        $firstName,
        $lastName,
        $email,
        $dni,
        $phone,
        $address,
        $username,
        $pass
    );
    header('Location: ../views/login.php#login');
} else {
    header('Location: ../views/register.php#register');
}
?>