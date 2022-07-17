<?php 
include 'CRUD_USERS.php';
$existErrors = true;

$id = $_GET['id']; 

$firstName = $_POST['firstName'];
$lastName =  $_POST['lastName'];
$dni =  $_POST['dni'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$username = $_POST['username'];
$pass = $_POST['pass'];

    
  
    switch (true) {
      case empty($firstName):
      case strlen($firstName) > 20:
      case strlen($firstName) < 5:
      case is_numeric($firstName):
      case empty($lastName):
      case strlen($lastName) > 15:
      case strlen($lastName) < 5:
      case is_numeric($lastName):
      case empty($dni):
      case strlen($dni) < 8:
      case strlen($dni) > 9:
      case empty($phone):
      case !is_numeric($phone):
      case strlen($phone) > 10:
      case empty($address):
      case strlen($address) < 7:
      case strlen($address) > 50:
      case empty($username):
      case is_numeric($username):
      case strlen($username) < 6:
      case strlen($username) > 20:
      case empty($pass):
      case strlen($pass) < 8:
        $existErrors = true;
      break;
      default:
        $existErrors = false;
    }


 if(!$existErrors){
   $update_user($id,$firstName,$lastName,$dni,$phone,$address,$username,$pass);
   header("Location: ../views/listUsers.php#$id");
 }else{
   header("Location: ../views/update.php?id=$id" );
 }

?>