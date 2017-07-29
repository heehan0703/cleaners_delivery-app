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
alert("Your email or password not match! Please try again ");
</script>';	 

}
}

?>
<script type="text/javascript">
function validation(){
Username=document.getElementById('username').value;
password=document.getElementById('password').value;
if(Username==''){
document.getElementById('username').focus();
return false;
}

if(Password==''){
document.getElementById('password').focus();
return false;

}
}
</script>

<html>
<head>


<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
</body></html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bluehangers Sing In</title>
<style type="text/css">
mar{ margin-left:27px;
}
Text{ color:#9F9E9A}

#previous{ border-radius: 20px;
    background: #7A7F95;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px    


}
#next{
 border-radius: 20px;
    background:#3BADE3;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px 
	
	}
	form,h1{font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}


 h2,label { 
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

form {
	/*width:100%;*/
border:thin solid #aaa;/*padding:10px 30px 40px;*/
/*background-color:#f0f8ff*/
}
form h2 {
/*text-align:center;*/
}

input {
	

-moz-box-shadow: 10px 10px 5px #888;
-webkit-box-shadow: 10px 10px 5px #888;
 


	 border: 1px solid #C3C3C3;
	margin-left: 10px;
/*width:100%;*/
height:30px;
border-radius:7px;
box-shadow:0 0 1px #888;
margin-top:5px;
padding:6px;
border:none;
margin-bottom:10px
}


span {
text-align:center;
color:white
}

label{margin-left: 21.7px;
color:color:#9F9E9A;
	}
	
	.show_div
	{
		display: block;
		
		}
		
		.hide_div
		{
			
			display: none}

body,td,th {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: 9F9E9A;
}

body {
	background-color: #FFF;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>


</head>
<body>
<html>
<div class="gridcontainer clearfix" >
  <form action="" method="post" style="border:1px grey"  >
  <div id="LayoutDiv1" style=" background-color:#00aced;height: 55.6px;">
  <table width="100%" border="0">
    <tr>
      <td width="1368"><a href="/menu.php" style="text-decoration:none;"><img style="width: 30px; margin-left: 10px;"  src="images/menu.png" alt="menu" > </a></td>
      <td width="70"><a href="" style="text-decoration:none;"><img src="images/home.png" width="25"> </a></td>
      <td width="70"><a href="mailto:jaysbaek@yahoo.com" style="text-decoration:none;"><img src="images/mail.png" width="25"> </a></td>
      <td width="70"><a href="tel:#858-997-4882" style="text-decoration:none;"><img src="images/phone.png" width="25"></a></td>
      <td width="70"><a href="<?=$row_admin['44']?>" style="text-decoration:none;"><img src="images/facebook.png" width="25"> </a> </td>
    </tr>
  </table>

</div>

<div class="row" align="center" style="margin-top:20%; margin-bottom: 20%;">
<img src="img/capture1.jpg" alt="" width="70%" class="img-responsive">
</div>

<div class="m1" style="margin-top:94px;margin-left: 20.6px; color:#CCC;">
  <label>USERNAME (YOUR E-mail)</label><br>
<input name="username" type="text" class="input" autocomplete='on'  value="" id="username" style="height: 30px; width: 90%; border:0px;" placeholder="Enter your Email">
</div>
<div class="m2" style="color:#CCC;margin-left: 20.6px;">
  <div style="width:45%">
<label>Password</label><br>
<input class="input" name="password" autocomplete='on' type="password" value="" id="password" 
style="height:30px; width:80%; border:0px; " placeholder="Enter your Password"></div>
<div style="color:#CCC; width:40%;margin-top: -33px; margin-right: 45px;float:right"><a href="forget_password.php" style="text-decoration:none; font-size:12px;">Forgot Password</a></div>
</div>
<input type="submit" name="Signin" value="Sign In" style="height:55; width: 90%; border-radius:7px;margin-left: 20.6px; alignment-adjust:central;
    background-color:#00aced;
    color:white;
">
<div class="main">
<div class="not account">
<h5 style="color:#CCC; margin-left:20px;">YOU DON'T HAVE AN ACCOUNT? <a href="http://m.bluehangers.com/sign_up.php" style="text-decoration:none">SIGN UP</a></h5>
</div>


</form>
</div>
</html>
</body>