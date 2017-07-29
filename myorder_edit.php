<?php
session_start();
$id=$_SESSION['member_id'];
require_once('wp-admin/include/connectdb.php');
$id=$_GET['id'];
//echo "SELECT * FROM `order_detail` where customer_id=$id and order_status='Pickup_request'";
$result=mysql_query("SELECT * FROM `order_detail` where id='$id'");
//$num=mysql_num_rows($result);

$page_row=mysql_fetch_row($result);

 $pickupdate=$page_row[7];
 $year= date("Y", strtotime($pickupdate));
 $month= date("M", strtotime($pickupdate));
 $day=date("d", strtotime($pickupdate));
// echo"$pickupdate--$year--$month--$day";
$fuldate=$year."/".$month."/".$day;
if($_POST['edit']){
	
	
	
	$Laundry_type=$_POST['Laundry_type'];
	$altration=$_POST['RadioGroup3'];
	$Alterlation_sew=$_POST['Alterlation_sew'];
	$Alterlation_button=$_POST['Alterlation_button'];
	$Alterlation_zipper=$_POST['Alterlation_zipper'];
	$Alterlation_etc=$_POST['Alterlation_etc'];
	
	
	$memo=$_POST['memo'];
	$datemonth=$_POST['datemonth'];
	$dateday=$_POST['dateday'];
	$dateyear=$_POST['dateyear'];
	$pickupdate=$dateyear."/".$datemonth."/".$dateday;
	$sql="update order_detail set dry_cleaning_laundry='$Laundry_type',alterlation='$altration',Alterlation_sew='$Alterlation_sew',Alterlation_button='$Alterlation_button',Alterlation_zipper='$Alterlation_zipper',Alterlation_etc='$Alterlation_etc',memo='$memo',pick_up_date='$pickupdate' where id='$id'";
	
if(mysql_query($sql))
{
header("location:home.php");
}
	

}

 
?>




<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<style type="text/css">

input[type=radio].css-checkbox {
							position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px; margin:-1px; padding:0; border:0;
						}

						input[type=radio].css-checkbox + label.css-label {
							padding-left:26px;
							height:21px;
							display: inline-block;
					        line-height:21px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:8px;
							font-color:#9F9E9A;
							vertical-align:middle;
							cursor:pointer;

						}

						input[type=radio].css-checkbox:checked + label.css-label {
							background-position: 0 -21px;
						}
						label.css-label {
				background-image:url(blue_button.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			
		
body,h1 {
	    font-family: myFirstFont;
    src: url(/font/TCM_____.TTF);
};
 label,p{color:#9F9E9A;}
 
 #edit{ border-radius: 20px;
    background: #7A7F95;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px  } 
	
	
	
	#home{
	border-radius: 20px;
	background:#3BADE3;
	padding: 2px;
	width: 70%;
	height: 50px;
	border:0px	
	} 
	
	#PICKUP_REQUEST{
 border-radius: 20px;
    background:#3BADE3;
    padding: 2px; 
    width: 60%;
    height: 50px;
	border:0px ;
	color:#FFF;
	
	} 
	.myCheckbox span {
    width: 21px;
    height: 21px;
    display: block;
	padding-left:26px;
    background: url(images/blue_button.png);
	background-repeat:no-repeat;
	background-position: 0 0;
}
.myCheckbox input {
    display: none;
}
.myCheckbox input:checked + span {
    background: url(images/blue_button.png);
	background-position: 0 -21px;
	background-repeat:no-repeat;
}
	@font-face {
    font-family: myFirstFont;
    src: url(/font/TCM_____.TTF);
}
	
</style>

<script language="javascript">
function def()
	{
	
var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nove','Dec'];
	

    /*var today=document.getElementById("inc_date").value;*/
 //var myDate = new Date();
 var d = new Date();
 
 d.setDate(d.getDate() +3);
 
 //var day =myDate.getDay();
 
 

var day = days[ d.getDay() ];
var month = months[ d.getMonth() ];
var year=d.getFullYear();
var date=d.getDate();

 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 
/* alert("dhirendra"+day);*/
 /*document.getElementById("inc_date").value=newdate;*/
 
 return false;
 }
	
	
	
	

function incre(){

	
 var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nove','Dec'];
 
    var today=document.getElementById("inc_date").value;
 //var myDate = new Date();
 var d = new Date(today);
 
 d.setDate(d.getDate() + 1);
 
 //var day =myDate.getDay();
 
 

var day = days[ d.getDay() ];
var month = months[ d.getMonth() ];
var year=d.getFullYear();
var date=d.getDate();

 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 
 
/* alert("dhirendra"+day);*/
 document.getElementById("inc_date").value=newdate;
 
 
}
 
 
 
 
 
 function decr()
{
	

 var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 
    var today=document.getElementById("inc_date").value;
 //var myDate = new Date();
 var d = new Date(today);
 
 d.setDate(d.getDate() - 1);
 
 //var day =myDate.getDay();
 
 

var day = days[ d.getDay() ];
var month = months[ d.getMonth() ];
var year=d.getFullYear();
var date=d.getDate();

 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 
/* alert("dhirendra"+day);*/
 document.getElementById("inc_date").value=newdate;
 
 
 return false;
}

	   
	   
	   
	   
	   
	   function mont(){
		   
		   

	var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

 
    var today=document.getElementById("inc_date").value;
 //var myDate = new Date();
 var d = new Date(today);
 
 d.setDate(d.getDate() + 30);
 
 //var day =myDate.getDay();
 
 

var day = days[ d.getDay() ];
var month = months[ d.getMonth() ];
var year=d.getFullYear();
var date=d.getDate();

 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 
 
/* alert("dhirendra"+day);*/
 document.getElementById("inc_date").value=newdate;
 
 
}
        

function montdec(){
		   
		   

	var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nove','Dec'];
	

 
    var today=document.getElementById("inc_date").value;
 //var myDate = new Date();
 var d = new Date(today);
 
 d.setDate(d.getDate() - 30);
 
 //var day =myDate.getDay();
 
 

var day = days[ d.getDay() ];
var month = months[ d.getMonth() ];
var year=d.getFullYear();
var date=d.getDate();

 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 
 
/* alert("dhirendra"+day);*/
 document.getElementById("inc_date").value=newdate;
 
 
}
        

</script>



<meta charset="utf-8">
<link rel="stylesheet" href="style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="skin/square/blue.css" rel="stylesheet">
<link rel="stylesheet" href="style.css"/>
<script type="text/javascript" src="icheck.js"></script>
<link rel="stylesheet" href="style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My order edit</title>

<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="myorder.css" rel="stylesheet" type="text/css">
<style>

</style>
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
<form style="" action="" method="post" enctype="multipart/form-data" >
  <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
    <div style="vertical-align:middle;  font-family: myFirstFont; text-align:center; color:#FFF; float:left; width:90%;"> <font>MY ORDER</font> </div>
    <div style="float:left;"><a href="home.php" style="text-decoration:none;"><img src="images/home2.png" alt="my order"></a></div>
    <div style="clear:both;"></div>
  </div>
  <p align="center" style="color:#9F9E9A; font-family: myFirstFont; margin-left:10%;margin-top: 19px; font-size:14px; ">Your Order is Being Processed</p>
  
  
  <p> 
  
   <div class="row" style="margin-top: 1%;margin-left:10px;">
  <div class="col-xs-9"  style="text-align:left"> <font color="#000" style="font-size:18px;font-family:myFirstFont; ">Dry Cleaning <br/> Laundry</font></div>
  <div class="col-xs-3" style="margin-top: 5%; float:left; margin-left:0px;"> 
  <label class="myCheckbox">
    <input type="checkbox" name="Laundry_type"  value="Laundry" <? if($page_row[2]=='Laundry'){ ?> checked="checked" <? } ?>/>
    <span></span> 
</label> 
   
  </div>
    </div>
    
    <hr />
  
  <div class="row" style="margin-left:10px;">
  <div class="col-xs-9">  <font color="#000" style="font-size:18px;font-family:myFirstFont;">Households
  </font></div>
  <div class="col-xs-3" style="float:left;">
  
   <label class="myCheckbox">
    <input type="checkbox" name="Laundry_type" value="House" <? if($page_row[3]=='House'){ ?>  checked <? } ?>/>
    <span></span> 
</label> 

  </div>
  </div>
  </p>
     
 
 
 
  
  
 
  
  
 
  
    <label style="font-family: myFirstFont; margin-left:10%; color:#9F9E9A;">Alterations</label>
      <p style="margin-left:10%;">
        
    <input  type="radio" class="css-checkbox" name="RadioGroup3" value="Hem"  id="hem" <? if($page_row[4]=="Hem"){ ?>checked="checked" <? } ?>>
         <label style="font-family: myFirstFont; color:#9F9E9A;" class="css-label radGroup3" for="hem" > Hem</label>
         
        
        
          <input type="radio" class="css-checkbox" name="Alterlation_sew" value="Sew" id="sew" <? if($page_row[5]=="Sew"){ ?>checked="checked" <? } ?>>
         <label style="font-family: myFirstFont; color:#9F9E9A;" class="css-label Alterlation_sew"  for="sew" > Sew</label>
        

          <input type="radio" class="css-checkbox" name="Alterlation_button" value="Button" id="button" <? if($page_row[6]=="Button"){ ?>checked="checked" <? } ?>>
                 <label style="font-family: myFirstFont; color:#9F9E9A;" class="css-label Alterlation_button"  for="button"> Button</label >

          <input type="radio" class="css-checkbox" name="Alterlation_zipper" value="Zipper" id="zipper" <? if($page_row[7]=="Zipper"){ ?>checked="checked" <? } ?>>
                   <label style="font-family: myFirstFont; color:#9F9E9A;" class="css-label Alterlation_zipper" for="zipper" > Zipper </label>
          
          <input type="radio" class="css-checkbox" name="Alterlation_etc" value="Etc" id="etc" <? if($page_row[8]=="Etc"){ ?>checked="checked" <? } ?>>
          <label style="font-family: myFirstFont; color:#9F9E9A;" class="css-label Alterlation_etc"  for="etc">Etc.</label>
      </p>
      <p style="margin-left:10%">
        <label for="memo" style="color:#9F9E9A; font-family: myFirstFont;">Special Instructions</label>
        <textarea name="memo" id="memo" style="width:80%"> <?=$page_row[9]?></textarea>
      </p>
      <div class="row" style="margin-top: 1%; width:97%; margin-left:5%;">
<div class="col-xs-8">
<p>
  <font color="#9F9E9A">
  <label for="radio8"  ><font color="#9F9E9A" style="font-family: myFirstFont; margin-left: -15.9px;">Order Date</font></label>
  </font>
  </p>
  <p>
  <font color="#9F9E9A">
  <label for="radio8"  ><font color="#9F9E9A" style="font-family: myFirstFont; margin-left: -15.9px;">Delivery Request</font></label><br/>
  </font>
  </p>
  </div>
  
<div class="col-xs-4" style="margin-left:-46.6px;"  >
<p>
<? 
$orderdate=$page_row[10];
//echo "$orderdate";
$day=gmdate("D",$orderdate);
$month=gmdate("M",$orderdate);
$date=gmdate("d",$orderdate);
?>

<font color="#9F9E9A">
  <label for="radio8"  ><font color="#9F9E9A" style="margin-left: -15.9px;"><?=$day?>-<?=$month?>-<?=$date?></font></label>
  </font>
  </p>
  <p>
  <font color="#9F9E9A">
  
 
  <label for="radio8"  ><font color="#9F9E9A" style="margin-left: -15.9px;"><?=$page_row[25]?> (<?=$page_row[11]?>)</font></label>
  </font>
  </p>
<!-- <div class="row" style="margin-top: 1%;margin-left:10%"">
<div class="col-xs-6">
  <font color="#9F9E9A">
  <label for="radio8"  ><font color="#9F9E9A" style="margin-left: -15.9px;">Pickup Date</font></label>
  </font></div>
  
<div class="col-xs-2" style=" margin-left:-46.6px;"  >
 <span style="margin-left: 50%"><input type="button" value="+" onClick="incre()" style="width: 45px;" /></span><br>
 <input type="text"  value="<?=$month?>"  id="wn" style="border:2px solid #9F9E9A; border-left: ;  border-right: ; padding: 1%;width:44.9px;color: #00ACED; margin-left: 11.1px; margin-left: 49.5%; height: 29.9px; border-radius:7px; "  name="datemonth" /><br>
 <span style="margin-left: 50%"><input type="button" value="-" onClick="decr()" style="width: 45px;" /></span>
</div>
<div class="col-xs-2">
 <span style="margin-left: 50%"><input type="button" value="+" onClick="mont()" style="width: 45px;" /></span><br>
 <input type="text"  value="<?=$day?>" id="month" name="dateday" style="border:2px solid #9F9E9A; border-left: ;  border-right: ; padding: 1%; width:44.9px; color: #00ACED; margin-left: 11.1px; margin-left: 49.5%; height: 29.9px; border-radius:7px ; "   /><br>
 <span style="margin-left: 50%"><input type="button" value="-" onClick="montdec()" style="width: 45px; " /></span>
</div>
<div class="col-xs-2">
 <span style="margin-left: 50%"><input type="button" value="+" onClick="incre()"  style="width: 45px;"/></span><br>
 
 <input type="text" value="<?=$year?>" id="date"  name="dateyear" style="border:2px solid #9F9E9A; border-left: ;  border-right: ; padding: 1%; width:44.9px ;color: #00ACED; margin-left: 11.1px; margin-left: 49.5%; height: 29.9px; border-radius:7px ;"  /><br>
 
 <span style="margin-left: 50%">
 <input type="button" value="-" onClick="decr()"  style="width: 45px;"/>
 <input type="hidden" value="2015/08/19" name="inc_date" id="inc_date">
 </span>
</div>
  </div>-->
      
</div>
 <div class="row" style="margin-top: 1%; width:100%; margin-left:0%;">
<div class="col-xs-12">
    <a href="home.php" style="text-decoration:none;"><input type="button" name="button2" id="home" value="HOME"  style="width:100%;height:50px; background:#486DB5; color:#FFF;"></a>
    </div>
    </div>

</form>



<!--end of container-->
</body>
</html>
