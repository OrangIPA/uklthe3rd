<?php
    session_start();
    include "../../connect.php";
    if($_SESSION['level']!="admin"){
        header("location: ../permission_error.php");
    }

    $angkatan = $_POST["angkatan"];
    $tahun = $_POST["tahun"];
    $nominal = $_POST["nominal"];

    $query = "INSERT INTO spp(id_spp, angkatan, tahun, nominal) VALUES(NULL, '$angkatan', '$tahun', '$nominal')";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num > 0) {
        echo "Berhasil!";
        header('location: ../../form-crud/spp/read.php');
    }else {
        echo "Gagal :(";
    }

    echo "<br><a href='../../form-crud/spp/read.php'>lihat data</a>";
?>