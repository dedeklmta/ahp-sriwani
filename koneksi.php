<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "pegawai_terbaik";

$kon = mysqli_connect($host, $user, $pass);
if (!$kon)
 die("Gagal Koneksi");

$hasil = mysqli_select_db($kon, $dbName);
if(!$hasil){
	$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
	if(!$hasil)
		die("Gagal Buat Database");
	else
		$hasil = mysqli_select_db($kon, $dbName);
		if (!$hasil) die ("Gagal Konek Database");
}
?>
