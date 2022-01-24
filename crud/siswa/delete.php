<?php
    include '../../connect.php';

    $nisn = $_GET["nisn"];
    $query = "DELETE FROM dosen WHERE id_dosen='$nisn'";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num>0) {
        echo "Berhasil Hapus Data <br>";
    }else {
        echo "Gagal Hapus Data <br>";
        echo mysqli_error($connect);
    }
    echo "<a href='read.php'>Lihat Data</a>"
?>