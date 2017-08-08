<?php
/* Hee Han heehan0703@gmail.com */
session_start();

require_once('include/connectdb.php');
if(isset($_POST['submit'])){
$username=$_POST['email'];
$pass=$_POST['pwd'];
$query="select * from admin where admin_Id='$username' and admin_Pwd='$pass'";
$res=mysql_query($query);
$count=mysql_num_rows($res);
$admin_row=mysql_fetch_assoc($res);
$_SESSION['count']=$count;
if($count>0)
{
$_SESSION['ADMIN_ID']=$admin_row['idx'];
$_SESSION['ADMIN_NAME']=$admin_row['admin_Id'];
$_SESSION['ADMIN_PASS']=$admin_row['admin_Pwd'];
$_SESSION['COUNT']=$count;
print_r($_SESSION);
?>
<script type="text/javascript">
window.location="http://s584682460.onlinehome.us/wp-admin/admin_menu.php";
</script>

<?php
//header("location: http://s584682460.onlinehome.us/wp-admin/admin_setup.php");

}



}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Login</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
html {
   height: 100%;
}

body {
   height: 100%;
}
</style>
<script type="text/javascript">
function validation(){
email=document.getElementById('email').value;
password=document.getElementById('pwd').value;

if(email==''){
alert('Please enter User Name!');
document.getElementById('email').focus();
return false;
}

if(password==''){
alert('Please enter Password!');
document.getElementById('pwd').focus();
return false;
}



}
</script>

</head>

<body>
<div class="container-fluid" style="background:#F9F9F9;">

<div class="row" style="background:#1E5AA7">
<div class="col-xs-4 col-sm-4" style="float:left;"><img src="img/grid02.jpg" style="margin-top: 12px;"></div>
<div class="col-xs-8 col-sm-8"><h3 style="color: #FFF;">ADMIN LOGIN GGG</h3></div>
</div>


<div class="row" align="center" style="margin-top:20%; margin-bottom: 20%;">
<img class="img-responsive" src="img/blue.png" alt="">
</div>





<div class="row">

<form class="form" role="form" onSubmit="return validation()" method="post">
    <div class="form-group">
      <label class="control-label col-xs-12 col-sm-12" for="email"><font color="#9F9E9A">USERNAME&nbsp;(YOUR E-MAIL)</font></label>
      <div class="col-xs-12 col-sm-12">
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-xs-12 col-sm-12" for="pwd"> <font color="#9F9E9A">PASSWORD: <font color="#9F9E9A"></label>
      <div class="col-xs-12 col-sm-12">          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-12 col-sm-12" for="pwd" style="text-align:center;"><font color="#9F9E9A">Forgot Password<font color="#9F9E9A"></label>
      
    </div>
    <div class="form-group">        
      <div class="col-xs-12 col-sm-12" align="center";>
        <button type="submit" name="submit" class="btn btn-default" style="width:90%; background:#24AAE1; color:#FFF;">Sign In</button>
      </div>
    </div>
  </form>
  </div>
  
</div>


</body>
</html>
