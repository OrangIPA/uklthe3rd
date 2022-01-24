<?php

    session_start();

?>
<html>
    <head>
        <title>Admin</title>
    </head>

    <body>
        <h3>Username <?=$_SESSION['username']?> berhasil login, Role sebagai <?=$_SESSION['level']?>. <br><br>
        <a href="../logout.php">logout</a></h3>
    </body>
</html>