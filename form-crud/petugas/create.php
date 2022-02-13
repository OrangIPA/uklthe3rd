<?php

session_start();

include '../../connect.php';
if($_SESSION['level']!="admin"){
    header("location: ../permission_error.php");
}

?>

<html>
    <head>
        <title>Tambah Data Petugas</title>
    </head>
    <body>
        <a href="../../home/home.php">kembali</a>
        <h3>Tambah Data Petugas</h3>
        <form action="../../crud/petugas/create.php" method="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Nama Petugas</td>
                    <td><input type="text" name="nama_petugas"></td>
                </tr>
                <tr>
                    <td>level</td>
                    <td>
                        <select name="level">
                            <option value="petugas">petugas</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="tambah petugas"></td>
                </tr>
            </table>
        </form>
    </body>
</html>