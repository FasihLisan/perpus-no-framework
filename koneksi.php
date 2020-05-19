<?php 
$servername = "localhost";
$user		= "root";
$pasword	= "";
$db			= "perpus1";

$koneksi = mysqli_connect ($servername,$user, $pasword,)
			or die ('gagal terkoneksi'.mysqli_error());
			
$database = mysqli_select_db ($koneksi, $db)
			or die ('gagal terhubung ke database'.mysqli_error());
?>