<?php 
include 'connection.php';

/* Function para crear un usuario */
$create_user = fn($firstName,$lastName, $email,$dni,$phone,$address,$username,$pass) => 
mysqli_query($connection,"INSERT INTO users (id, lastName, firstName, email, phone, dni, username,address,password) 
VALUES (NULL,'$lastName','$firstName','$email','$phone','$dni','$username','$address','$pass')");


/* Función para actualizar un usuario */
$update_user = fn($id,$firstName,$lastName,$dni,$phone,$address,$username,$pass) => 
mysqli_query($connection, "UPDATE users SET lastName='$lastName', firstName='$firstName', phone='$phone', dni='$dni', username='$username',address='$address',password='$pass' WHERE id=$id");

/* Funcion para corroborar que el email a registrar no exista */
$exist_email_db = fn($email) => mysqli_query($connection,"SELECT email FROM users WHERE email=$email");

/* Función para eliminar un usuario */
$delete_user = fn($id) => mysqli_query($connection,"DELETE FROM users WHERE id=$id");

/* Función para traer un usuario */
$get_user_by_id = fn($id) => mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM users WHERE id=$id"));

/* Función para traer todos los usuario */
$get_user_all = fn() => mysqli_query($connection,"SELECT * FROM users");
?>