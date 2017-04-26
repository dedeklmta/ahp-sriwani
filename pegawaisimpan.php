<head>  
<title>Pegawai Terbaik</title>  
<!-- Bootstrap -->  
<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">  
<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">  
<link href="./css/bootswatch.css" rel="stylesheet" media="screen">  
<script type="text/javascript">  
function printValue(sliderID, textbox) {  
var x = document.getElementById(textbox);  
var y = document.getElementById(sliderID);  
x.value = y.value;  
}  
</script>  
</head> 
<?php
include "koneksi.php";
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$pendidikan = $_POST['pendidikan'];

$dataValid="YA";
if(strlen(trim($nik))==0){
	echo "Harus diisi <br/>";
	$dataValid ="TIDAK";
}
if(strlen(trim($nama))==0){
	echo "Harus diisi <br/>";
	$dataValid ="TIDAK";
}
if(strlen(trim($tempat_lahir))==0){
	echo "Harus diisi <br/>";
	$dataValid ="TIDAK";
}
if(strlen(trim($tanggal_lahir))==0){
	echo "Harus diisi <br/>";
	$dataValid ="TIDAK";
}
if(strlen(trim($jk))==0){
	echo "Harus diisi <br/>";
	$dataValid ="TIDAK";
}
if(strlen(trim($alamat))==0){
	echo "Harus diisi <br/>";
	$dataValid ="TIDAK";
}
if(strlen(trim($jabatan))==0){
	echo "Harus diisi <br/>";
	$dataValid ="TIDAK";
}
if(strlen(trim($tanggal_masuk))==0){
	echo "Harus diisi <br/>";
	$dataValid ="TIDAK";
}
if(strlen(trim($pendidikan))==0){
	echo "Harus diisi <br/>";
	$dataValid ="TIDAK";
}
if ($dataValid == "TIDAK"){
	echo "Masih ada kesalahan, silahkan perbaiki</br>";
	echo "<input type='button' value='kembali' onClick='self.history.back()'>";
	exit;
}
include "koneksi.php";
$sql = "insert into pegawai(nik,nama,tempat_lahir,tanggal_lahir,jk,alamat,jabatan,tanggal_masuk,pendidikan) values ($nik, '$nama', '$tempat_lahir', $tanggal_lahir, '$jk', '$alamat', '$jabatan', $tanggal_masuk, '$pendidikan')";
$hasil = mysqli_query($kon, $sql);

if(!$hasil){
echo "Gagal simpan, ulangi lagi<br/>";
echo mysqli_error($kon);
echo "<br/> <input type='button' value='kembali' onClick='self.history.back()'>";
exit;
}
else {
	echo "Simpan Data berhasil";
}
?>
<hr/>
<a href="pegawaitampil.php" /> Daftar Pegawai</a>
