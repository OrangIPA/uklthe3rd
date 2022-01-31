<!-- <?php
// session_start();
// if(isset('username')){
//     switch($_SESSION['level']){
//         case 'admin':
//             header('home/home_admin.php');
//             break;
//         case 'petugas':
//             header('home/home_petugas.php');
//             break;
//         case 'user':
//             header('home/home_user.php');
//             break;
//     }
// }
?> -->
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <h3>Form Login</h3>
            Username:
            <input type="text" name="username"/><br>
            Password:
            <input type="password" name="password"/><br>
            <input type="submit" name="login" value="login"/>
        </form>
    </body>
</html>