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
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BlueHangers Home</title>
<style type="text/css">
@font-face {
    font-family: myFirstFont;
    src: url(/font/TCB_____.TTF);
}


</style>
</head>
<body>
<div class="gridcontainer clearfix">
  <div  style="width:100%;">
  <table width="100%" >
    <tr>
      <td width="70%" align="left"><a href="about_us.php" style="text-decoration:none;"><img src="images/Capture4.PNG"></a></td>
      <td width="20%" align="right"><a href="contactus.php" style="text-decoration:none;"><img src="images/mail.png" width="16"></a></td>
      <td  width="5%" align="right"><a href="Faq.php" style="text-decoration:none;"><img src="images/question.png" width="16"></a></td>
      <!--<td  width="5%" align="right"><a href="bluehangers.php" style="text-decoration:none;"><img src="images/hanger.png" alt="HANGERS"></a></td>-->
      </tr>
    <tr> <td colspan="3" height="10"></td></tr>
  </table>

</div>

<div style="width:100%; float:left; height:150px; ">

       <a href="myorder2.php" style="text-decoration:none;">  <div style="width:62%; float:left; line-height: 150px; background:#466db5; text-align:center;   display: inline-block;" >
                <div style="vertical-align:middle;font-family:myFirstFont;">
                <font color="#FFFFFF"> My Orders </font>
                </div>
        </div></a>
        <a href="order_history.php" style="text-decoration:none;"><div style="width:36%; height:150px; text-align:center; float:right; background:#466db5; line-height: 150px;"> 
            <div style="vertical-align:middle;font-family:myFirstFont;">
             <font color="#FFFFFF">  History </font>
            </div>
     
        </div></a>
</div>
<div style="width:100%; height:20px; background:#FFF; clear:both;"> </div>

<a href="price.php" style="text-decoration:none;"><div style="width:100%; line-height:80px; vertical-align:middle; background:#466db5; text-align:center; margin-top:-14px;">
   <div style="width:100%; vertical-align:middle;font-family:myFirstFont;">
     <font color="#FFFFFF">  Pricing </font>
   </div>
</div></a>
<div style="width:100%; height:20px; background:#FFF; clear:both;"> </div>

<a href="pick_up2.php" style="text-decoration:none;"><div style="width:100%; line-height:162px; vertical-align:middle; background:#466db5; text-align:center; margin-top:-14px;">
   <div style="width:100%; vertical-align:middle; font-family:myFirstFont;">
     <font color="#8DC96C"> <b> Request Pickup </b></font>
   </div>
</div></a>
<div style="width:100%; height:20px; background:#FFF; "> </div>

<a href="my_profile.php" style="text-decoration:none;"><div style="width:100%; line-height:100px; vertical-align:middle; background:#466db5; text-align:center; margin-top:-14px;">
   <div style="width:100%; vertical-align:middle; font-family:myFirstFont;">
     <font color="#FFFFFF">  My Profile </font>
   </div>
</div></a>


</div>
</body>
</html>