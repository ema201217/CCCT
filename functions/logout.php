<?php
session_start();
session_destroy();
setcookie(
  'USER',
  '',
  time() - 60,
  '/php2022/TP%20INTEGRADOR%20PHP%20-%20registro/Conferencias%203%20-%20registro/',
  'localhost',
  false,
  false
);
header('Location: ../views/login.php');
?>