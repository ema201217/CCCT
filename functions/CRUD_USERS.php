<?php
include 'connection.php';

/* Function para crear un usuario */
function create_user(
    $firstName,
    $lastName,
    $email,
    $dni,
    $phone,
    $address,
    $username,
    $pass
) {
    $pass = password_hash($pass,PASSWORD_DEFAULT);
    return mysqli_query(
      $GLOBALS['connection'],
        "INSERT INTO users (id, lastName, firstName, email, phone, dni, username,address,password) 
VALUES (NULL,'$lastName','$firstName','$email','$phone','$dni','$username','$address','$pass')"
    );
};

/* Función para actualizar un usuario */
function update_user(
    $id,
    $firstName,
    $lastName,
    $dni,
    $phone,
    $address,
    $username,
    $pass
) {
    return mysqli_query(
      $GLOBALS['connection'],
        "UPDATE `users` SET `lastName`='$lastName', `firstName`='$firstName', `phone`='$phone', `dni`='$dni', `username`='$username',`address`='$address',`password`='$pass' WHERE `id`=$id"
    );
};
/* Funcion para corroborar que el email a registrar no exista */
function exist_email_db($email)
{
    return mysqli_query(
      $GLOBALS['connection'],
        "SELECT email FROM users WHERE email='$email';"
    );
};

/* Buscar un usuario por su email */
function find_by_email($email)
{
    return mysqli_query(
      $GLOBALS['connection'],
        "SELECT * FROM users WHERE email='$email'"
    );
};

/* Función para eliminar un usuario */
function delete_user($id)
{
    return mysqli_query($GLOBALS['connection'], "DELETE FROM users WHERE id=$id");
};

/* Función para traer un usuario */
function get_user_by_id($id)
{
    return mysqli_fetch_array(
        mysqli_query($GLOBALS['connection'], "SELECT * FROM users WHERE id=$id")
    );
};

/* Función para traer todos los usuario */
function get_user_all()
{
  return mysqli_query($GLOBALS['connection'], 'SELECT * FROM users');
};
?>
