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
$sql ="select * from pegawai";
$hasil = mysqli_query($kon, $sql);
if (!$hasil) 
	die("Gagal query..".mysqli_error($kon));
?>
<table border="1">
<tr>
<th>No</th>
<th>NIK</th>
<th>Nama</th>
<th>Tempat, Tgl Lahir</th>
<th>Jenis Kelamin</th>
<th>Alamat</th>
<th>Jabatan</th>
<th>Tanggal Masuk</th>
<th>Pendidikan</th>
</tr>

<?php
$no = 0;
while ($row = mysqli_fetch_assoc($hasil)) {
	echo "<tr>";
	echo "<td>".$row['nik']."</td>";
	echo "<td>".$row['nama']."</td>";
	echo "<td>".$row['tempat_lahir']."</td>";
	echo "<td>".$row['tanggal_lahir']."</td>";
	echo "<td>".$row['jk']."</td>";
	echo "<td>".$row['alamat']."</td>";
	echo "<td>".$row['jabatan']."</td>";
	echo "<td>".$row['tanggal_masuk']."</td>";
	echo "<td>".$row['pendidikan']."</td>";
	echo "</tr>";
	}	
	?>

</table>