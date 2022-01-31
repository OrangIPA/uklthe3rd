<?php

include '../../connect.php';

$query = "SELECT * FROM siswa, kelas WHERE siswa.id_kelas = kelas.id_kelas";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Siswa</title>
    </head>
    <body>
        <a href="../../home/home.php">kembali</a>
        <h2>Data Siswa</h2>
        <a href="create.php">tambah siswa</a>
        <table border="1">
            <tr>
                <th>NISN</th>
                <th>NIS</th>
                <th>Kelas</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>no telepon</th>
                <th colspan="2">Aksi</th>
            </tr>
            <?php
            if ($num>0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?=$data['nisn']?></td>
                        <td><?=$data['nis']?></td>
                        <td><?=$data['nama_kelas'] . " | " . $data['angkatan']?></td>
                        <td><?=$data['nama']?></td>
                        <td><?=$data['alamat']?></td>
                        <td><?=$data['no_tlp']?></td>
                        <td><a href="update.php?nisn=<?=$data['nisn']?>">Edit</a></td>
                        <td><a href="../../crud/siswa/delete.php?nisn=<?=$data['nisn']?>" onclick='return confirm("Apakah Anda yakin ingin menghapus data?")'>Hapus</a></td>
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