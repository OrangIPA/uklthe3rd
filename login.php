<?php

    session_start();
    include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        echo "<script>alert('username/password kosong');location.href='form_login.php';</script>";
    }else{
        $md5pass = md5($password);
        $query = "SELECT * FROM petugas WHERE username = '$username' AND password = '$md5pass'";
        echo $query;
        $result = mysqli_query($connect, $query);
        $num = mysqli_num_rows($result);
        if($num == 1){
            $data = mysqli_fetch_array($result);
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $data['level'];
            header('location: home/home.php');
        }else{
            echo "<script>alert('username/password salah');location.href='form_login.php';</script>";
        }
    }

?>