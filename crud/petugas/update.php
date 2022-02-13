<?php
    session_start();
    include '../../connect.php';
    if($_SESSION['level']!="admin"){
        header("location: ../permission_error.php");
    }
    
    $id_petugas = $_POST["id_petugas"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nama_petugas = $_POST["nama_petugas"];
    $level = $_POST['level'];

    $md5pass = md5($password);
    $query = "UPDATE petugas SET username='$username', password='$md5pass', nama_petugas='$nama_petugas', level='$level' WHERE id_petugas='$id_petugas'";
-
    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num>0) {
        echo "Berhasil Update Data <br>";
        header("location: ../../form-crud/petugas/read.php");
    }else {
        echo "Gagal Update Data <br>";
        echo mysqli_error($connect);
    }
    echo "<br><a href='../../form-crud/petugas/read.php'>Lihat Data</a>";
    
    ?>