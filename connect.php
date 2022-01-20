<?php

$host = "127.0.0.1";
$db = "spp";
$uname = "root";
$pass = "";

$connect = mysqli_connect($host, $uname, $pass, $db);
if(!$connect){
	echo "Koneksi ke databse gagal : ".mysqli_connect_error();
}

?>
