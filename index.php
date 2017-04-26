<!DOCTYPE html>
<html>  
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
<body>  
<div class="navbar navbar-inverse navbar-fixed-top">  
<div class="navbar-inner">  
<div class="container-fluid">  
<a class="brand" href="index.php">Beranda</a>  
<div class="nav-collapse collapse">    
</div>  
</div>  
</div>  
</div>  
<div class="container-fluid">  
<div class="row-fluid">  
<div class="span3">  
<?php include("menu.php");?>  
</div><!--/span-->  
<div class="span9">  
<!--letak konten-->  
<?php  
if(empty($_GET['link']))  
include "pegawai.php";  
else  
include($_GET['link']);     
?>  
</div><!--/span-->  
</div><!--/span-->  
</div><!--/row-->  
<hr>  
<footer>  
<p>PT Global Eushanosoft</p>  
</footer>  
</div><!--/.fluid-container-->  
<script src="./js/latest.js"></script>  
<script src="./js/bootstrap.min.js"></script>  
</body>  
</html>  
