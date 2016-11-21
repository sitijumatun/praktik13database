<?php
$rumah = "localhost";
$username = "root";
$passwordd ="";
$database = "perpus";
$koneksi = mysqli_connect($rumah,$username,$passwordd);
if($koneksi)
{
	$buka = mysql_select_db($database);
	if(!$buka){
		//ini makanya
		printf("Database tidak ada");
	}
	else
	{
		printf("Database yang anda cari tersedia");
	}
}
else
{
	printf("Koneksi tidak terhubung");
}
?>
