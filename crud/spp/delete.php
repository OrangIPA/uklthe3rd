<?php
    session_start();
    include '../../connect.php';
    if($_SESSION['level']!="admin"){
        header("location: ../permission_error.php");
    }

    $id_spp = $_GET["id_spp"];
    $query = "DELETE FROM spp WHERE id_spp='$id_spp'";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num>0) {
        echo "Berhasil Hapus Data <br>";
        header('location: ../../form-crud/spp/read.php');
    }else {
        echo "Gagal Hapus Data <br>";
        echo mysqli_error($connect);
    }
    echo "<a href='../../form-crud/spp/read.php'>Lihat Data</a>"
?>