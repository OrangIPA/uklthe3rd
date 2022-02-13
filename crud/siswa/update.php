<?php
    session_start();
    include '../../connect.php';
    if($_SESSION['level']!="admin"){
        header("location: ../permission_error.php");
    }    
    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $id_kelas = $_POST['id_kelas'];
    $alamat = $_POST['alamat'];
    $no_tlp = $_POST['no_tlp'];

    $query = "UPDATE siswa SET nis='$nis', nama='$nama', id_kelas=$id_kelas, alamat='$alamat', no_tlp='$no_tlp' WHERE nisn='$nisn'";

    $result = mysqli_query($connect, $query);
    $num = mysqli_affected_rows($connect);

    if ($num>0) {
        echo "Berhasil Update Data <br>";
        header("location: ../../form-crud/siswa/read.php");
    }else {
        echo "Gagal Update Data <br>";
        echo mysqli_error($connect);
    }
    echo "<br><a href='../../form-crud/siswa/read.php'>Lihat Data</a>";
    
    ?>