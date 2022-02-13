<?php

session_start();

include '../../connect.php';
if($_SESSION['level']!="admin"){
    header("location: ../permission_error.php");
}

$getid_spp = $_GET['id_spp'];
$result = mysqli_query($connect, "SELECT * FROM spp WHERE id_spp='$getid_spp'");
$value = mysqli_fetch_array($result);
?>

<html>
    <head>
        <title>Edit Data SPP</title>
    </head>
    <body>
        <a href="../../home/home.php">kembali</a>
        <h3>Ubah Data</h3>
        <form action="../../crud/spp/update.php" method="POST">
            <td><input type="hidden" name="id_spp" value="<?=$_GET['id_spp']?>"></td>
            <table>
                <tr>
                    <td>ID SPP</td>
                    <td>: <?=$_GET['id_spp']?></td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td><input type="number" name="angkatan" value="<?=$value['angkatan'];?>" max="9" min="1"></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td><input type="number" name="tahun" value="<?=$value['tahun'];?>" max="9999"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="number" name="nominal" value="<?=$value['nominal'];?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="update data"></td>
                </tr>
            </table>
        </form>
    </body>
</html>