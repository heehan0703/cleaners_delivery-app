<?php

session_start();
require_once('wp-admin/include/connectdb.php');
$email1=$_SESSION["member_email"];
$pass1=$_SESSION["member_pass"];

$userk=$_COOKIE['username'];
$passk=$_COOKIE["nertpassword"];
//echo "$passk";

if(isset($_POST['Signin'])){
$email=$_POST['username'];
$pass=$_POST['password'];
$res = mysql_query("SELECT * FROM member where email='$email'and password='$pass'");
$count=mysql_num_rows($res);
$member_row =mysql_fetch_assoc($res);
$email= $member_row['email'];
$pass=$member_row['password'];
$id= $member_row['id'];

$name = $member_row['first_name'];
 if($count>0){
	 
	 $_SESSION["member_email"] = $email;
	 $_SESSION["member_pass"] = $pass;
	  $_SESSION["member_id"] = $id;
	   $_SESSION["member_name"] = $name;
	   
	   
	  
setcookie('username', $email, time() + (60*60*24*365), "/");
setcookie('nertpassword', $pass, time() + (60*60*24*365), "/");
//setcookie($cookie_value, $cookie_value1, time()+3600, "/", ".bluehangers.com", 0);
//echo "$cookie_value--$cookie_value1 ";
$userk=$_COOKIE['username'];
$passk=$_COOKIE["nertpassword"];


echo "$passk";
	      
echo '<script type="text/javascript">
window.location="home.php";
</script>';
}
else
{
 echo '<script type="text/javascript">
alert("Your email or password not match! Please try again ");
</script>';	 

}

}
?>

<script type="text/javascript">
function validation()
{
	var username=document.getElementById('username').value;
var password= document.getElementById('password').value;
if(username== null ||username=="")
{
	alert("plese enter your username");
	document.getElementById('username').focus();
	return false;
}
if(password== null ||password=="")
{
	alert("plese enter your password");
	document.getElementById('password').focus();
	return false;
}

}
</script>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bluehangers Sign In</title>
<style type="text/css">
@font-face {
    font-family: myFirstFont;
    src: url(/font/TCM_____.TTF);
}


</style>
</head>
<body>
<div class="gridcontainer clearfix">
 <form action="" method="post" style="border:1px grey" autocomplete="on" onSubmit="return validation();">
<div class="row" align="center" style="margin-top:20%; margin-bottom: 20%;">
<img src="images/logo_new.png" style="height:45px; width:45px;">
<center style="color:#3D599C;font-family:myFirstFont; font-size:34px;">BLUE HANGERS</center>
</div>
<div class="1">
<div class="m1" style="font-family:myFirstFont;">
  <center>USERNAME</center>
  </div><br>
<div class="m2">
<input name="username" type="text" class="input"  value="<? echo $userk;?>" id="username" style="height: 30px; width: 100%; margin-top:-17px; font-family:myFirstFont;  border:1px solid black; border-radius:7px;" placeholder="Enter your Email" autocomplete="on" >
</div>
</div>
<div class="m3">
<div class="m3" style="font-family:myFirstFont;">
<center>PASSWORD</center>
<div class="m3">
<br>
<div class="m3">
<input class="input" name="password" type="password" value="<? echo $passk;?>" id="password" style="height:30;width:100%; margin-top:-17px;font-family:myFirstFont;  border:1px solid black; border-radius:7px;" placeholder="Enter your Password" autocomplete="on"   ></div>
</div>
</div>
<div class="m3">
<input type="submit" name="Signin" value="Sign In" style="height:45; width: 100%;
margin-top:35px;
 alignment-adjust:central;
    background-color:#3A5699;
    color:white;
    font-family:myFirstFont;
    border-radius:25px;
    border:1px solid black;
    " >
</div>
<div class="1">
<center style="margin-top:35px;font-family:myFirstFont;"><a href="forget_password.php">Forgot Password?</a></center>
</div>
<div class="main" style="font-family:myFirstFont; ">
<center>Don't have an account? <a href="sign_up.php" style="text-decoration:none;font-family:myFirstFont; color:#3A5699" >SIGN UP</a></center>
</div>
</form>
</div>
</body>
</html>