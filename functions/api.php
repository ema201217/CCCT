<?php
include 'CRUD_USERS.php';

var_dump($exist_email_db($_GET['email']));
$existEmail = mysqli_fetch_array($exist_email_db($_GET['email']));
if (!empty($existEmail)) {
    $res = ['ok' => true, 'msg' => 'El email existe'];
    echo json_encode($res);
} else {
    $res = ['ok' => false, 'msg' => 'El email no existe'];
    echo json_encode($res);
}

?>
