<?php

session_start();

include '../../connect.php';
if($_SESSION['level']!="admin"){
    header("location: ../permission_error.php");
}
?>

<html>
    <head>
        <title>Tambah Data Siswa</title>
    </head>
    <body>
        <a href="../../home/home.php">kembali</a>
        <h3>Tambah Data Siswa</h3>
        <form action="../../crud/siswa/create.php" method="POST">
            <table>
                <tr>
                    <td>NISN</td>
                    <td><input type="text" name="nisn"></td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td><input type="text" name="nis"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Nama Kelas</td>
                    <td>
                        <select name="kelas">
                        <?php
                        $kelas = mysqli_query($connect, "SELECT * FROM kelas");
                        while($r = mysqli_fetch_assoc($kelas)){?>
                            <option value="<?= $r['id_kelas']; ?>"><?=$r['nama_kelas'] . " | " . $r['angkatan'];?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td><input type="text" name="no_tlp"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="tambah siswa"></td>
                </tr>
            </table>
        </form>
    </body>
</html>