<?php

session_start();

include 'CRUD_USERS.php'; /* funciones de CRUD */

$email = $_POST['email'];
$pass = $_POST['pass'];

$isRemember = isset($_POST['remember']); /* comprobamos el checkbox remember */

$user = mysqli_fetch_array(
    find_by_email($email)
); /* buscamos el usuario por el email */
$isPassValid = password_verify(
    $pass,
    $user['password']
); /* verificamos si el password es correcto */

if (!empty($user) && $isPassValid) {

    if ($isRemember) {
        setcookie(
            'USER',
            json_encode($user),
            time() + 60,
            '/php2022/TP%20INTEGRADOR%20PHP%20-%20registro/Conferencias%203%20-%20registro/',
            'localhost',
            false,
            false
        ); /* creamos una cookie del usuario con expiración de una hora */

        $_SESSION['user'] = get_object_vars(json_decode($_COOKIE['USER']));

    } else {
        $_SESSION['user'] = $user; /* creamos la session */
    }

   header('Location: ../views/index.php'); /* direccionamiento */

} else {

    header('Location: ../views/login.php?error=true'); /* direccionamiento */
}
?>
