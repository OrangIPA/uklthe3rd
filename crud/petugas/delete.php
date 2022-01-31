<?php
    include '../../connect.php';

    $id_petugas = $_GET["id_petugas"];
    $query = "DELETE FROM petugas WHERE id_petugas='$id_petugas'";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num>0) {
        echo "Berhasil Hapus Data <br>";
        header('location: ../../form-crud/petugas/read.php');
    }else {
        echo "Gagal Hapus Data <br>";
        echo mysqli_error($connect);
    }
    echo "<a href='../../form-crud/petugas/read.php'>Lihat Data</a>"
?>