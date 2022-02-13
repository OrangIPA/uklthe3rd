<?php
    session_start();
    include '../../connect.php';
    if($_SESSION['level']!="admin"){
        header("location: ../permission_error.php");
    }

    $id_spp = $_POST["id_spp"];
    $angkatan = $_POST['angkatan'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    $query = "UPDATE spp SET angkatan='$angkatan', tahun='$tahun', nominal='$nominal' WHERE id_spp='$id_spp'";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num>0) {
        echo "Berhasil Update Data <br>";
        header("location: ../../form-crud/spp/read.php");
    }else {
        echo "Gagal Update Data <br>";
        echo mysqli_error($connect);
    }
    echo "<br><a href='../../form-crud/spp/read.php'>Lihat Data</a>";
    
    ?>