<?php

include '../../connect.php';

$query = "SELECT * FROM petugas";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Petugas</title>
    </head>
    <body>
        <a href="../../home/home.php">kembali</a>
        <h2>Data Petugas</h2>
        <a href="create.php">tambah petugas</a>
        <table border="1">
            <tr>
                <th>ID Petugas</th>
                <th>Username</th>
                <th>Nama Petugas</th>
                <th>Level</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
            if ($num>0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?=$data['id_petugas']?></td>
                        <td><?=$data['username']?></td>
                        <td><?=$data['nama_petugas']?></td>
                        <td><?=$data['level']?></td>
                        <td><a href="update.php?id_petugas=<?=$data['id_petugas']?>">Edit</a></td>
                        <td><a href="../../crud/petugas/delete.php?id_petugas=<?=$data['id_petugas']?>" onclick='return confirm("Apakah Anda yakin ingin menghapus data?")'>Hapus</a></td>
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