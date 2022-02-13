<?php

session_start();

include '../../connect.php';
if($_SESSION['level']!="admin"){
    header("location: ../permission_error.php");
}

$getnisn = $_GET['nisn'];
$result = mysqli_query($connect, "SELECT * FROM petugas where id_petugas='$id_petugas'");
$value = mysqli_fetch_array($result);
?>

<html>
    <head>
        <title>Edit Data Petugas</title>
    </head>
    <body>
        <a href="../../home/home.php">kembali</a>
        <h3>Ubah Data</h3>
        <form action="../../crud/petugas/update.php" method="POST">
            <td><input type="hidden" name="id_petugas" value="<?=$_GET['id_petugas']?>"></td>
            <table>
                <tr>
                    <td>ID Petugas</td>
                    <td>: <?=$_GET['id_petugas']?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" value="<?=$value['username'];?>"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Nama Petugas</td>
                    <td><input type="text" name="nama_petugas" value="<?=$value['nama_petugas'];?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="update data"></td>
                </tr>
            </table>
        </form>
    </body>
</html>