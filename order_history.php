<?php
session_start();
$id=$_SESSION['member_id'];
require_once('wp-admin/include/connectdb.php');
 $order_detail=mysql_query("SELECT * FROM `order_detail` where customer_id='$id' and complete='1'");
// echo "SELECT * FROM `order_detail` where member_id='$id'";
// echo member_id;
// $order_no= $order_detail['order_no'];
/* echo"$order_no";
 $pick_up_date= $order_detail['pick_up_date'];
 $delivery_date_want=$order_detail['delivery_date_want'];
 
$order_detail=mysql_query("SELECT * FROM `order_detail` where id='member_id'" );
 

 $order_no= $order_detail['order_no'];
 $pick_up_date= $order_detail['pick_up_date'];
 $delivery_date_want=$order_detail['delivery_date_want'];
 $cate=mysql_query("SELECT * FROM order_detail ");
 */
 
?>

<style type="text/css" >
p{margin-left:0px; 
color:#9F9E9A;
text-align:center;}

#signup{ width:70%;
         height: 45px;
		 background-color:#00aced;
		 border-radius:8px;
		 color:#FFF;
	        
		  }
		  
		  form,h1{
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>











<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="">
<!--<![endif]-->
<head>
<script>
function validation(){
var name= document.getElementById('agree').checked;

if(name== null ||name=="")
{
alert (" Please Slelect Agree & confirm  ");

   return false;

}

}
</script>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ORDER HISTORY</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="signup04.php" rel="stylesheet" type="text/css">
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
<body>
	<div class="gridContainer clearfix">
    <form style="" onSubmit="return validation()" action=""  method="post">
      <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
        <div style="vertical-align:middle;  text-align:center; color:#FFF; float:left; width:90%;">ORDER HISTORY</div>
        <div style="float:left;"><a href="home.php" style="text-decoration:none;"><img src="images/home2.png" alt="payment"></a></div>
        <div style="clear:both;"></div>
      </div>
      <p style="margin-top: 70.7px; color:24aae1; font-weight:bold; font-size:24px; font-family:Verdana, Geneva, sans-serif;"> 
        
      <p>
       
        <div style="width:17%; float:left; text-align: center;">No</div>
    <div style="width:28%; float:left; text-align: center;">Pick-Up</div>
    <div style="width:28%; float:left; text-align: center;">Delivery</div>
    <div style="width:27%; float:left; text-align: center;">Price</div>
    
 
        
        
      </p>
      
      
      <p style="width:100%;border-bottom:2px solid #bcbdc0; "><br/><br/></p>
      <? while($row=mysql_fetch_assoc($order_detail)) { 
	  
	  $orderdate=$row['pick_up_date'];
	  
	  $newdate= str_replace('/', '-', $orderdate);
$day=date("D",strtotime($newdate));
$month=date("M",strtotime($newdate));
$date=date("d ",strtotime($newdate));
	  
	   ?>
      <p>
       
        <div style="width:17%; float:left; text-align: center; display:inline-block;"><?=$row['order_no']?></div>
    <div style="width:28%; float:left; text-align: center;display:inline-block;"><?=$day?>-<?=$month?>-<?=$date?></div>
    <div style="width:28%; float:left; text-align: center;display:inline-block;"><?=$row['delivery_date_want']?></div>
    <div style="width:27%; float:left; text-align: center; display:inline-block;">$ <?=$row['total_amount']?></div>
    
 
        
        
      </p>
      <p style="width:100%;border-bottom:2px solid #bcbdc0; "><br/><br/></p>
      
      <? } ?>
        
        
        
        </p>
      <div style="margin-top:29px; text-align:center; margin:auto;">
      
      <p align="center" style="height:200px;">  </p>
       
        </div>
      
      
     
    </form>
	</div>
</body>
</html>
