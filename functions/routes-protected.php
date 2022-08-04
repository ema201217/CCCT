<?php 

session_start();
$user = $_SESSION["user"];
if(empty($user)){
  header("Location: login.php");
}

/* if($_SESSION["user"]["role"] != 1){
  header("Location: index.php");
} */

?>