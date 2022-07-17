<?php 

include '../functions/CRUD_USERS.php';

$delete_user($_GET['id']);

header('Location: listUsers.php');
?>