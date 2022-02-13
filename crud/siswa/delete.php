<?php
    session_start();
    include '../../connect.php';
    if($_SESSION['level']!="admin"){
        header("location: ../permission_error.php");
    }

    $nisn = $_GET["nisn"];
    $query = "DELETE FROM siswa WHERE nisn='$nisn'";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num>0) {
        echo "Berhasil Hapus Data <br>";
        header('location: ../../form-crud/siswa/read.php');
    }else {
        echo "Gagal Hapus Data <br>";
        echo mysqli_error($connect);
    }
    echo "<a href='../../form-crud/siswa/read.php'>Lihat Data</a>"
?>