<?php
    include "../connect.php";

    $nama_dosen = $_POST["nama_dosen"];
    $telp = $_POST["telp"];

    $query = "INSERT INTO dosen(nama_dosen, telp) VALUES('$nama_dosen', '$telp')";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num > 0) {
        echo "Berhasil menambah data <br>";
    }else {
        echo "Gagal menambah data <br>";
    }

    echo "<a href='read.php'>lihat data</a>";
?>