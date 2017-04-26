<html>
<head><title>Login User</title>
<link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">  
<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">  
<link href="./css/bootswatch.css" rel="stylesheet" media="screen">  
<script type="text/javascript">  
function printValue(sliderID, textbox) {  
var x = document.getElementById(textbox);  
var y = document.getElementById(sliderID);  
x.value = y.value;  
}  
</script>  </head>
<body background='images/bg.jpg' onload='isi_ulang('reload');' marginwidth='0' marginheight='0'>
  <form action='ceklogin.php' method='post'>
    <table id='head' border='0'>
      <tr><td colspan='2' align='center'><h3>Login User</h3></td>
      </tr>
      <tr>
        <td style='padding-left: 20px;'>Username</th>
        <td><input type='text' name='username'></td>
      </tr>
      <tr>
         <td style='padding-left: 20px;'>Password</th>
         <td><input type='password' name='password'></td>
      </tr>
      <tr>
         <td colspan='2' align='center'><input id='submit' type='submit' value='Login'></td>
      </tr>
    </table>
  <center>
  <?php
      if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 1) {
            echo "Username dan Password belum diisi";
        }
        else if ($error == 2) {
            echo "Username belum diisi!";
        }
        else if ($error == 3) {
            echo "Password belum diisi!";
        }
        else if ($error == 4) {
            echo "Username dan Password tidak terdaftar";
        }
    }
  ?>
  </center>
  </form>
</body>
</html>