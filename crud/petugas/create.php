<?php
    session_start();
    include "../../connect.php";
    if($_SESSION['level']!="admin"){
        header("location: ../permission_error.php");
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama_petugas = $_POST["nama_petugas"];
    $level = $_POST['level'];

    if($username == "" || $password == "" || $nama_petugas == "" || $level == ""){
        echo "<script>alert('data tidak boleh kosong');location.href='../../form-crud/petugas/create.php';</script>";
    }

    $md5pass = md5($password);
    $query = "INSERT INTO petugas(id_petugas, username, password, nama_petugas, level) VALUES(NULL, '$username', '$md5pass', '$nama_petugas', '$level')";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num > 0) {
        echo "Berhasil!";
        header('location: ../../form-crud/petugas/read.php');
    }else {
        echo "Gagal :(";
    }

    echo "<br><a href='../../form-crud/petugas/read.php'>lihat data</a>";
?>