<?php
session_start();
if (!empty($_COOKIE['USER'])) {
    $_SESSION['user'] = get_object_vars(json_decode($_COOKIE['USER']));
}
?>
