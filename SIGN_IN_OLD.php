<?php

session_start();
require_once('wp-admin/include/connectdb.php');

if(isset($_POST['Signin'])){
$email=$_POST['username'];
$pass=$_POST['password'];

$res = mysql_query("SELECT * FROM member where email='$email'and password='$pass'");
$count=mysql_num_rows($res);
$member_row =mysql_fetch_assoc($res);
$email= $member_row['email'];
$id= $member_row['id'];
$name = $member_row['first_name'];


 if($count>0){
	 
	 $_SESSION["member_email"] = $email;
	  $_SESSION["member_id"] = $id;
	   $_SESSION["member_name"] = $name;
	   
	   
	   
	   

 echo '<script type="text/javascript">
window.location="home.php";
</script>';
}
else
{
 echo '<script type="text/javascript">
alert("You email or password not match! Please try again ");
</script>';	 

}
}

?>










<html>
<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<style>
form h2 { 
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-family:14;

form {
/*border:1px solid #000;*/
/*padding:10px 30px 40px;*/
}
form h2 {
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
.input {
width:50%;
height:30px;
border-radius:7px;
box-shadow:0 0 1px;
margin-top:5px;
/*padding:6px;*/
border:none;
margin-bottom:20px
}
span {
text-align:center;
color:white
}
</style></body></html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>0ne</title>
</head>
<body>
<html>

<div class="gridcontainer clearfix" >
<form action="" method="post" style="border:1px solid black">
<div id="LayoutDiv1" style=" background-color:#00aced;height: 55.6px;">
  <table width="100%" border="0">
    <tr>
      <td width="1368"><img style="width: 57.1px; margin-left: 18.3px;"  src="images/menu.png" alt="menu" ></td>
      <td width="70"><img src="images/home.png" width="25"></td>
      <td width="70"><img src="images/mail.png" width="25"></td>
      <td width="70"><img src="images/phone.png" width="25"></td>
      <td width="70"><img src="images/facebook.png" width="25"></td>
    </tr>
  </table>

</div>


<div class="image">
<img src="img/Capture1.JPG" width="75%" height="100px" style="margin-top:122px; margin-left:50px;">
</div>
<div class="m1" style="margin-top:94px;margin-left: 20.6px; color:#CCC;">
  <label>USERNAME (YOUR E-mail)</label><br>
<input name="username" type="text" class="input" value="" style="height: 30px; width: 90%; border:0px;" placeholder="Enter your Email">
</div>
<hr color="#9F9E9A">
<div class="m2" style="color:#CCC;margin-left: 20.6px;">
<div style="width:45%">
<label>Password</label><br>
<input class="input" name="password" type="password" value="" style="height:30;width:80%; border:0px;" placeholder="Enter your Password"></div>
<div style="color:#CCC; width:40%;margin-top: -33px; margin-right: 45px;float:right"><a href="forget_password.php" style="text-decoration:none; font-size:12px;">Forgot Password</a></div>
</div>

<hr color="#9F9E9A">

<input type="submit" name="Signin" value="Sign In" style="height:55; width: 90%; border-radius:7px;margin-left: 20.6px;
    background-color:#00aced;
    color:white;
">
<div class="main">
<div class="not account">
<h5 style="color:#CCC; margin-left:20px;">YOU DON'T HAVE AN ACCOUNT?</h5>
</div>
<div class="sign up">
<h5 style="margin-left:225px; font-size:7px; margin-top:-33.817px;"><a href="sign_up.php" style="text-decoration:none">SIGN UP</a> </h5>
</div>
</div>


</form>
</div>
</html>
</body>