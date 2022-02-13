<?php

session_start();

include '../../connect.php';
if($_SESSION['level']!="admin"){
    header("location: ../permission_error.php");
}
?>

<html>
    <head>
        <title>Tambah Data SPP</title>
    </head>
    <body>
        <a href="../../home/home.php">kembali</a>
        <h3>Tambah Data SPP</h3>
        <form action="../../crud/spp/create.php" method="POST">
            <table>
                <tr>
                    <td>Angkatan</td>
                    <td><input type="number" name="angkatan" max="9" min="1"></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td><input type="number" name="tahun" max="9999"></td>
                </tr>
                <tr>
                    <td>Nominal</td>
                    <td><input type="number" name="nominal"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="tambah siswa"></td>
                </tr>
            </table>
        </form>
    </body>
</html>