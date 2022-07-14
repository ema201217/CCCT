<?php 
include 'connection.php';
include 'varsRequestRegister.php';

/* Function para crear un usuario */
$queryCreate = "INSERT INTO users (id, lastName, firstName, email, phone, dni, username,address,password) 
VALUES (NULL,'$lastName','$firstName','$email','$phone','$dni','$username','$address','$pass')";
$create_user = fn() => mysqli_query($connection,$queryCreate);

/* Función para actualizar un usuario */
$queryUpdate = fn($id) => "UPDATE users SET lastName='$lastName', firstName='$firstName', email='$email', phone='$phone', dni='$dni', username='$username',address='$address',password='$pass' WHERE id=$id";
$update_user = fn($id) => mysqli_query($connection,$queryUpdate($id)); 

/* Función para eliminar un usuario */
$queryDelete = fn($id) => "DELETE FROM users WHERE id=$id";
$delete_user = fn($id) => mysqli_query($connection,$queryDelete($id));

/* Función para traer un usuario */
$querySelectOne = fn($id) => "SELECT * FROM users WHERE id=$id";
$get_user_by_id = fn($id) => mysqli_query($connection,$querySelectOne($id));

/* Función para traer todos los usuario */
$querySelectAll = "SELECT * FROM users";
$get_user_all = fn() => mysqli_query($connection,$querySelectAll);
?>