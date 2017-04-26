<h2><center>Input Data Pegawai</center></h2>  
<form class="form-horizontal" method="post" action="pegawaisimpan.php" name="frmpegawai" enctype="multipart/form-data">  
<head>  
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
</head> >  
<center>
<table>
  <p>
  <label>NIK</label>
  <input class="input" type="text" name="nik"></p>
  <p>
  <label>Nama</label>
  <input class="input" type="text" name="nama"></p>
  <p>
  <label>Tempat Lahir</label>
  <input class="input" type="text" name="tempat_lahir"></p>
  <p>
  <label>Tanggal Lahir</label>
  <input class="input" type="text" name="tanggal_lahir"></p>
  <p>
  <label>Jenis Kelamin</label>
  <input class="input" type="text" name="jk"></p>
  <p>
  <label>Alamat</label>
  <input class="input" type="text" name="alamat"></p>
  <p>
  <label>Jabatan</label>
  <input class="input" type="text" name="jabatan"></p>
  <p>
  <label>Tanggal Masuk</label>
  <input class="input" type="text" name="tanggal_masuk"></p>
  <p>
  <label>Pendidikan</label>
  <input class="input" type="text" name="pendidikan"></p>
  <div class="control-group">  
<div class="controls">  
<button type="submit" class="btn btn-primary">Simpan</button>   
</div>  
</div>  
</center>
</form>  


