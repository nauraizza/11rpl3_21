<?php
$host="localhost";
$user="root";
$password="";
$cek=mysqli_connect($host,$user,$password);
mysqli_select_db($cek, "dbinstagram");
	if ($cek)
	{
	echo "Database berhasil terkoneksi";
	}else
	{
	echo "Database tidak berhasil terkoneksi";
	}
?>
