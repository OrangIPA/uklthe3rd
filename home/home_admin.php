<?php
    session_start();
?>
<html>
    <head>
        <title>Admin</title>
    </head>

    <body>
        <h3>Selamat Datang <?=$_SESSION['username']?>  Role Anda Adalah <?=$_SESSION['level']?>. <br><br>
        <a href="../form-crud/siswa/read.php">data siswa</a><br>
        <a href="../form-crud/petugas/read.php">data petugas</a><br>
        <a href="../logout.php">logout</a></h3>
    </body>
</html>