<?php
$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$dni = isset($_POST['dni']) ? $_POST['dni'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
$terms = isset($_POST['terms']) ? $_POST['terms'] : 'off';
$btn_register = isset($_POST['btn-register']) ? $_POST['btn-register'] : ''; 
?>