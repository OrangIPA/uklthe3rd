<?php
    include "../../connect.php";

    $nisn = $_POST["nisn"];
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $id_kelas = $_POST["kelas"];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];

    $query = "INSERT INTO siswa(nisn, nis, nama, id_kelas, alamat, no_tlp) VALUES('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_tlp')";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num > 0) {
        echo "Berhasil!";
        header('location: ../../form-crud/siswa/read.php');
    }else {
        echo "Gagal :(";
    }

    echo "<br><a href='../../form-crud/siswa/read.php'>lihat data</a>";
?>