<?php

session_start();

include '../../connect.php';
if($_SESSION['level']!="admin"){
    header("location: ../permission_error.php");
}

$query = "SELECT * FROM spp";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data SPP</title>
    </head>
    <body>
        <a href="../../home/home.php">kembali</a>
        <h2>Data SPP</h2>
        <a href="create.php">tambah Data SPP</a>
        <table border="1">
            <tr>
                <th>ID SPP</th>
                <th>Angkatan</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
            if ($num>0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?=$data['id_spp']?></td>
                        <td><?=$data['angkatan']?></td>
                        <td><?=$data['tahun']?></td>
                        <td><?=$data['nominal']?></td>
                        <td><a href="update.php?id_spp=<?=$data['id_spp']?>">Edit</a></td>
                        <td><a href="../../crud/spp/delete.php?id_spp=<?=$data['id_spp']?>" onclick='return confirm("Apakah Anda yakin ingin menghapus data?")'>Hapus</a></td>
                    </tr>
                    <?php
                }
            }else {
                echo " <td colspan='3'> Tidak ada data</td>";
            }
            ?>
        </table>
    </body>
</html>