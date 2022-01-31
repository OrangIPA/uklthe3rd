<?php
include '../../connect.php';

$getnisn = $_GET['nisn'];
$result = mysqli_query($connect, "SELECT * FROM siswa, kelas WHERE nisn = '$getnisn'");
$value = mysqli_fetch_array($result);
?>

<html>
    <head>
        <title>Edit Data Siswa</title>
    </head>
    <body>
        <a href="../../home/home.php">kembali</a>
        <h3>Ubah Data</h3>
        <form action="../../crud/siswa/update.php" method="POST">
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
                    <td>Nama Kelas</td>
                    <td>
                        <select name="id_kelas">
                        <?php
                        $kelas = mysqli_query($connect, "SELECT * FROM kelas");
                        while($r = mysqli_fetch_assoc($kelas)){?>
                            <option value="<?= $r['id_kelas']; ?>"
                            <?php
                            if($value['id_kelas'] == --$r['id_kelas']){
                                echo "selected";
                            }
                            ?>
                            ><?=$r['nama_kelas'] . " | " . $r['angkatan'];?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?=$value['alamat'];?>"></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td><input type="text" name="no_tlp" value="<?=$value['no_tlp'];?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="update data"></td>
                </tr>
            </table>
        </form>
    </body>
</html>