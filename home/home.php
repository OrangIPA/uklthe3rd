<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location: ../form-login.php");
}

switch($_SESSION['level']){
    case 'admin':
        header("location: home_admin.php");
        break;
    case 'petugas':
        header("location: home_petugas.php");
        break;
    default:
        header("location: home_user.php");
        break;
}

?>