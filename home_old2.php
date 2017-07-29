<?
session_start();
if($_SESSION["member_id"]=="")
{
header("location:sign_in.php");
}
$id= $_SESSION["member_id"];
require_once('wp-admin/include/connectdb.php');
$row_admin=mysql_fetch_row(mysql_query("select * from `admin`"));
?>

<style type="text/css">
html, html a {
    text-shadow: 1px 1px 1px rgba(0,0,0,0.004);
text-rendering: optimizeLegibility !important;
-webkit-font-smoothing: antialiased !important;
}
.col{ background-color:#00aced;

	}
p{margin-top:0px;
padding:0px;
	}
body,td,th {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

.pick{
	width: 33px; margin-bottom: 11px; margin-top: 6px;	}
	#ab{
		height: 46.2px; margin-top: 4.2px; margin-left: 5.6px;"
	}
		
		.col:hover{background-image:url(./images/blue_bg.png);background-repeat:repeat-x;}
body {
	background-color: #00aced;
}
			
</style>


<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style_test.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BlueHangers Home</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="04_home.css" rel="stylesheet" type="text/css">
<link href="radio.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
</head>
<body background-color="#00aced">
<div class="gridContainer clearfix">
<form>

  <div id="LayoutDiv1" style="background-color:#00aced;height: 55.6px;">
  
  <table width="100%" border="0" >
  <tr> <td height="5"> </td></tr>
    <tr>
    <td width="10%" align="left"><a href="menu.php"><img src="images/menu.png" alt="menu" style="width:22.4px;" ></a> </td>
      
      <td width="30%" align="left"> 
      <img src="images/bluehanges_logo.png" alt="logo" style="width:120px; height:33px"></td>
      <td width="50%"></td>
      <td width="70"><a href="home.php"><img src="images/home.png" width="25"></a></td>
      <td width="70"><a href="mailto:jaysbaek@yahoo.com"><img src="images/mail.png" width="25"></a></td>
      <td width="70"><a href="tel://858-997-4882"><img src="images/phone.png" width="25"></a></td>
      <td width="70"> <a href="<?=$row_admin['44']?>"><img src="images/facebook.png" width="25"> </a></td>
    </tr>
  </table>
 </div>
  <a href="pick_up2.php" style="text-decoration:none;">
  <div align="center" class="col">
  <p style="height:1px; padding:0px; margin:0px; border-bottom:2px thick #CCC; width:100%; background:#FFF;"></p>
    <p  style="padding:opx; margin:0px;"><img src="images/pickuptruck.png" alt="hello"  style="margin-top: 8.8px;" longdesc="http://request.com" height="50px;"> </p>
    <p style="color:#FFF; font-size:34px; font-family:Arial, Helvetica, sans-serif;  padding:0px; margin-bottom:10px; letter-spacing:2px; "><b> Request Pickup </b></p>
    <p style="height:1px; padding:0px; margin:0px; border-bottom:2px thick #CCC; width:100%; background:#FFF;"></p>
  </div></a>
 <a href="myorder2.php" style="text-decoration:none;"> <div align="center" class="col">
    <p style="padding:opx; margin:0px;" ><img src="images/myorder.png"  style="margin-top: 8.8px;" height="30px;"></p>
    <p style="color:#FFF; font-size:30px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin-bottom:10px; letter-spacing:2px; ">My Orders</p>
    <p style="height:1px; padding:0px; margin:0px; border-bottom:2px thick #CCC; width:100%; background:#FFF;"></p>
  </div> </a>
 <a href="my_profile.php" style="text-decoration:none;"> <div align="center" class="col"  >
    <p style="padding:opx; margin:0px;"><img src="images/profile.png"  style="margin-top: 8.8px;" longdesc="http://myprofile.com" height="30px;"></p>
    <p  style="color:#FFF; font-size:30px; font-family:Arial, Helvetica, sans-serif;  padding:0px; margin-bottom:10px; letter-spacing:2px;">My Profile</p>
    <p style="height:1px; padding:0px; margin:0px; border-bottom:2px thick #CCC; width:100%; background:#FFF;"></p>
  </div></a>
 <a href="order_history.php" style="text-decoration:none;"> <div align="center" class="col" >
    <p style="padding:opx; margin:0px;"><img src="images/order_history.png"  style="margin-top: 8.8px;" longdesc="http://orderhistorycom" height="30px;"></p>
    <p style="color:#FFF; font-size:30px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin-bottom:10px; letter-spacing:2px; ">Order History</p>
    <p style="height:1px; padding:0px; margin:0px; border-bottom:2px thick #CCC; width:100%; background:#FFF;"></p>
  </div></a>
  
 <a href="bluehangers.php" style="text-decoration:none;"> 
 <div align="center" class="col" >
    <p style="padding:opx; margin:0px;"><img src="images/bluehangers.png"   style="margin-top: 8.8px; margin-bottom:0px; longdesc=http://Bluehangers.Org" height="30px;"></p>
    <p style="color:#FFF; font-size:30px; font-family:Arial, Helvetica, sans-serif; padding:0px; margin-bottom:10px; letter-spacing:2px;">Bluehangers.Org</p>
    <p style="height:1px; padding:0px; margin:0px; border-bottom:2px thick #CCC; width:100%; background:#FFF;"></p>
    
    </div></a>
 
  <div style="height:60px;  margin-top: 0px; background-color:#00aced"></div>
</form>
</div>
</body>
</html>
