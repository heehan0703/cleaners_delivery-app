<?php
session_start();
$id=$_SESSION['member_id'];
require_once('wp-admin/include/connectdb.php');
//echo "SELECT * FROM `order_detail` where customer_id=$id and order_status='Pickup_request'";
$result=mysql_query("SELECT * FROM `order_detail` where customer_id=$id and complete='0' order by order_date desc ");
$num=mysql_num_rows($result);
//echo "dhirendra---$num";
//$num=1;
//if($num>1)
//{
 //$result= mysql_query("select * from `order_detail`");
 //}
 if($num==1){
$page_row=mysql_fetch_row($result);
 }
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




<script language="javascript">

function def()
	{
		 offset='-8';

// create Date object for current location
    d = new Date();
   
    // convert to msec
    // add local time zone offset
    // get UTC time in msec
    utc = d.getTime() + (d.getTimezoneOffset() * 60000);
   
    // create new Date object for different city
    // using supplied offset
    nd = new Date(utc + (3600000*offset));
     //localtime=nd.toLocaleFormat("%d.%m.%Y %H:%M (%a)");

 var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 
    /*var today=document.getElementById("inc_date").value;*/
 //var myDate = new Date();
 var d = new Date();
 
var day0 = days[0];/*sun*/
var day1 = days[1];
var day2 = days[2];
var day3 = days[3];
var day4 = days[4];
var day5 = days[5];
var day6 = days[6];/*sat*/

var day = days[ nd.getDay() ];

if((day==day1) || (day==day2)|| (day==day3) || (day==day4) ){
	var d = new Date();
 nd.setDate(nd.getDate() +2);
 
 

 
 //var day =myDate.getDay();
 
 

var day = days[ nd.getDay() ];
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();

 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value= "dafault";
}


if((day==day5)|| (day==day6) || (day==day0)){
	var d = new Date();
 nd.setDate(nd.getDate() +3);
 
 

 
 //var day =myDate.getDay();
 
 

var day = days[ nd.getDay() ];
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();
var time=nd.getTime();
//alert(time);
 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value= "dafault";
}
/* alert("dhirendra"+day);*/
 /*document.getElementById("inc_date").value=newdate;*/
 
 return false;
 }
	
///////////////////////////////////////// same day delivery //////////////////////
function sameday()
	{
	
   offset='-8';

// create Date object for current location
    d = new Date();
   
    // convert to msec
    // add local time zone offset
    // get UTC time in msec
    utc = d.getTime() + (d.getTimezoneOffset() * 60000);
   
    // create new Date object for different city
    // using supplied offset
    nd = new Date(utc + (3600000*offset));
     //localtime=nd.toLocaleFormat("%d.%m.%Y %H:%M (%a)");
	 
	 time=nd.toLocaleFormat("%H:%M");

//alert(""+time);


 var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 
    /*var today=document.getElementById("inc_date").value;*/
 //var myDate = new Date();
 var d = new Date();
 
var day0 = days[0];/*sun*/
var day1 = days[1];
var day2 = days[2];
var day3 = days[3];
var day4 = days[4];
var day5 = days[5];
var day6 = days[6];/*sat*/

var day = days[ nd.getDay() ];

//alert(""+day);

//var m = moment().tz('America/Los_Angeles');
//var dt = new timezoneJS.Date(2008, 9, 31, 11, 45, 'America/Los_Angeles');

//var s = m.toISOString();  // if you need a string output representing UTC
//var dt = m.toDate();
//alert("tt"+dt);

if((day==day1) || (day==day2)|| (day==day3) || (day==day4) || (day==day5) || (day==day6)){
//alert(""+d);
 //var day =myDate.getDay();
var day = days[ nd.getDay() ];
//alert(""+day);
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();

 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value= "sameday";
}


if((day==day0) || (time>'09:00')){
	//var d = new Date();
// d.setDate(d.getDate() +1);
 //var day =myDate.getDay();
alert("Same day delivery not available , please order before Mon- Sat 9 Am");


document.getElementById("wn").value= "";
 document.getElementById("month").value= "";
 document.getElementById("date").value= "";
 document.getElementById("delivery_type").value= "";
/*
var day = days[ d.getDay() ];
var month = months[ d.getMonth() ];
var year=d.getFullYear();
var date=d.getDate();
var time=d.getTime();
//alert(time);
 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 
 */
}
/* alert("dhirendra"+day);*/
 /*document.getElementById("inc_date").value=newdate;*/
 
 return false;
 }
		
		
///////////////////////////////////next day delivery //////////////////////////////


function nextday()
	{
	 offset='-8';

// create Date object for current location
    d = new Date();
   
    // convert to msec
    // add local time zone offset
    // get UTC time in msec
    utc = d.getTime() + (d.getTimezoneOffset() * 60000);
   
    // create new Date object for different city
    // using supplied offset
    nd = new Date(utc + (3600000*offset));
     //localtime=nd.toLocaleFormat("%d.%m.%Y %H:%M (%a)");
	 
	// time=nd.toLocaleFormat("%H:%M");
var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 
    /*var today=document.getElementById("inc_date").value;*/
 //var myDate = new Date();
 var d = new Date();
 
var day0 = days[0];/*sun*/
var day1 = days[1];
var day2 = days[2];
var day3 = days[3];
var day4 = days[4];
var day5 = days[5];
var day6 = days[6];/*sat*/

var day = days[ nd.getDay() ];
//alert(""+day);
if((day==day1) || (day==day2)|| (day==day3) || (day==day4) || (day==day5) || (day==day0)){
//alert(""+d);
 var d = new Date();
 nd.setDate(nd.getDate() +1);

 //var day =myDate.getDay();
var day = days[ nd.getDay() ];
//alert(""+day);
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();

 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value= "nextday";
}


if(day==day6){
	//var d = new Date();
// d.setDate(d.getDate() +1);
 alert("Next day delivery not available on Saturday");

 document.getElementById("wn").value= "";
 document.getElementById("month").value= "";
 document.getElementById("date").value= "";
 document.getElementById("delivery_type").value= "";
 //var day =myDate.getDay();
 
 
/*
var day = days[ d.getDay() ];
var month = months[ d.getMonth() ];
var year=d.getFullYear();
var date=d.getDate();
var time=d.getTime();
//alert(time);
 var newdate=year+"/"+month+"/"+date;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 
 */
}
/* alert("dhirendra"+day);*/
 /*document.getElementById("inc_date").value=newdate;*/
 
 return false;
 }
	
	

</script>


<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>REQUEST PICKUP</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="skin/square/blue.css" rel="stylesheet">
<link rel="stylesheet" href="style_test.css"/>

<script type="text/javascript" src="icheck.js"></script>




<style type="text/css">


input[type=radio].css-checkbox {
							position:absolute; z-index:-1000; left:-1000px; overflow: hidden; clip: rect(0 0 0 0); height:1px; width:1px;
							margin:-1px; padding:0; border:0;
						}

						input[type=radio].css-checkbox + label.css-label {
							padding-left:26px;
							height:21px; 
							display:inline-block;
							line-height:21px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:10px;
							font-color:#9F9E9A;
							vertical-align:middle;
							cursor:pointer;

						}

						input[type=radio].css-checkbox:checked + label.css-label {
							background-position: 0 -21px;
						}
						label.css-label {
				background-image:url(images/blue_button.png);
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
}

.myCheckbox input {
    display: none;
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

.myCheckbox input:checked + span {
    background: url(images/blue_button.png);
	background-position: 0 -21px;
	background-repeat:no-repeat;
}

#home{
 border-radius: 20px;
    background:#3BADE3;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px 
	
	} 
	@font-face {
    font-family: myFirstFont;
    src: url(/font/TCM_____.TTF);
}
</style>


</head>
<body>
<div class="gridContainer clearfix">
<form style=" border:1px solid black;" action="" method="post" enctype="multipart/form-data" >
  <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
    <div style="vertical-align:middle;   font-family: myFirstFont; text-align:center; color:#FFF; float:left; width:90%;"> <font>MY ORDERS</font></div>
    <div style="float:left;"><a href="home.php" style="text-decoration:none;"><img src="images/home2.png" alt="payment"></a></div>
    <div style="clear:both;"></div>
  </div>
  <? if($num==1){ ?>
 
  <p style="color:#9F9E9A;margin-left:2%; margin-top: 19px; font-size:14px">Your Order is Being Processed</p>
     
  <div>
  <? if($page_row[21]=='pickup'){?>
  <img src="images/myorderpag2.jpg" style="width:80%; margin-left: 31px;">
  <? }elseif($page_row[21]=='Pickup_request'){ ?>
  <img src="myorderpag.jpg" style="width:80%; margin-left: 31px;">
  <? }elseif($page_row[24]=='1'){ ?>
  <img src="images/myorderpag3.jpg" style="width:80%; margin-left: 31px;">
  <? } ?>
  </div>
  <p style="color:#00aced; margin-left:10%">Your Last Order</p>
  
  
  
  
  
 <p style=" color:#9F9E9A;">
 
 
 <div style="width:100%;">
 
  <div style="width:50%; float:left; margin-left:2%;"> <font color="#9F9E9A" style="font-family: myFirstFont; font-size:24px;" >Dry Cleaning  Laundry</font> </div>
  <div style="text-align:right; margin-right:6px;"> <label class="myCheckbox">
    <input type="checkbox" name="Laundry_type" value="Laundry"  <? if($page_row[2]=='Laundry'){ ?>checked="checked" <? } ?>/>
    <span></span> 
</label>  </div>
 
 </div>
 </p>
 <p><br/>
  <hr />
  </p>
  <p>
 

 <div style="width:100%;">
 
  <div style="width:50%; float:left; margin-left:2%; font-family: myFirstFont;"><font color="#9F9E9A"> Households </font> </div>
  <div style="text-align:right; margin-right:6px;"> <label class="myCheckbox">
    <input type="checkbox" name="Households" value="Laundry" <? if($page_row[3]=='House'){ ?>checked="checked" <? } ?>/>
    <span></span> 
</label>  </div>
 
 </div>
 
  
  
  
  </p>
  
  <p> <br/>
  <hr />
  </p>
  
  <div class="row">
  <div class="col-xs-12" style=" margin-left:2%; font-family: myFirstFont;"> <font color="#9F9E9A" >Alterations</font></div>
  </div>
      
        
   <div class="row" style="font-size:10;" >
  
  
  <label class="myCheckbox">
    <input type="checkbox" name="RadioGroup3" value="Hem" <? if($page_row[4]=="Hem"){ ?>checked="checked" <? } ?>/><span><font color="#9F9E9A" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Hem</font></span> 
</label>

 
 &nbsp;
  
   <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_sew" value="Sew" <? if($page_row[5]=="Sew"){ ?>checked="checked" <? } ?>  />
    <span><font color="#9F9E9A" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Sew</font></span> 
</label>

  &nbsp;
 
  <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_button" value="Button" <? if($page_row[6]=="Button"){ ?>checked="checked" <? } ?> />
    <span><font color="#9F9E9A" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Button</font></span> 
</label>


   &nbsp;&nbsp;&nbsp;&nbsp;
 

 
 <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_zipper" value="Zipper" <? if($page_row[7]=="Zipper"){ ?>checked="checked" <? } ?> />
    <span><font color="#9F9E9A" style="font-family: myFirstFont; font-size:12px; ">Zipper</font></span> 
</label>

 &nbsp;&nbsp;&nbsp;&nbsp;

 <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_etc" value="Etc"   <? if($page_row[8]=="Etc"){ ?>checked="checked" <? } ?>/>
    <span><font color="#9F9E9A" style="font-family: myFirstFont; font-size:12px; ">Etc</font></span> 
</label>



  </div>
  
  <div class="row">
  <div class="col-xs-12" style=" margin-left:2%; font-family: myFirstFont;"><font color="#9F9E9A" >Special Instructions</font></div>
  </div>
  
  <div class="row">
  
  <div class="col-xs-12" style=" margin-left:2%;"><textarea rows="4" style="width: 97%" name="memo" ><?=$page_row[9]?> </textarea></div>
  </div>

      
 <div class="row" style="margin-top: 1%; width:97%; margin-left:5%;">
<div class="col-xs-8">
<p>
  <font color="#9F9E9A">
  <label for="radio8"  ><font color="#9F9E9A" style="margin-left: -15.9px;">Order Date</font></label>
  </font>
  </p>
  <p>
  <font color="#9F9E9A">
  <label for="radio8"  ><font color="#9F9E9A" style="margin-left: -15.9px;">Delivery Request</font></label><br/>
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
  <label for="radio8"  ><font color="#9F9E9A" style="margin-left: -15.9px;"><?=$page_row[25]?></font></label>
  </font>
  </p>
<!--
 <span style="margin-left: 50%"><input type="button" value="+" onclick="incre()" style="width: 45px;" /></span><br>
 <input type="text"  value="<?=$month?>"  id="wn" style="border:2px solid #9F9E9A; border-left: ;  border-right: ; padding: 1%;width:44.9px;color: #00ACED; margin-left: 11.1px; margin-left: 49.5%; height: 29.9px; border-radius:7px; "  name="datemonth" /><br>
 <span style="margin-left: 50%"><input type="button" value="-" onclick="decr()" style="width: 45px;" /></span>
</div>
<div class="col-xs-2">
 <span style="margin-left: 50%"><input type="button" value="+" onClick="mont()" style="width: 45px;" /></span><br>
 <input type="text"  value="<?=$day?>" id="month" name="dateday" style="border:2px solid #9F9E9A; border-left: ;  border-right: ; padding: 1%; width:44.9px; color: #00ACED; margin-left: 11.1px; margin-left: 49.5%; height: 29.9px; border-radius:7px ; "   /><br>
 <span style="margin-left: 50%"><input type="button" value="-" onClick="montdec()" style="width: 45px; " /></span>
</div>
<div class="col-xs-2">
 <span style="margin-left: 50%"><input type="button" value="+" onclick="incre()"  style="width: 45px;"/></span><br>
 
 <input type="text" value="<?=$year?>" id="date"  name="dateyear" style="border:2px solid #9F9E9A; border-left: ;  border-right: ; padding: 1%; width:44.9px ;color: #00ACED; margin-left: 11.1px; margin-left: 49.5%; height: 29.9px; border-radius:7px ;"  /><br>
 
 <span style="margin-left: 50%">
 <input type="button" value="-" onClick="decr()"  style="width: 45px;"/>
 <input type="hidden" value="2015/08/19" name="inc_date" id="inc_date">
 </span>
</div> -->
  </div>
 <!--      
<p style="margin-left: 44px; margin-top: 14.6px;">
 <input type="submit" name="edit" id="edit" value="EDIT"> 
 
</p>-->
</div>
<div class="row">
<div class="col-xs-12" style="text-align:center;"> 
<a href="home.php" style="text-decoration:none;"><input type="button" name="button2" id="home" value="HOME" style="color:#FFF;"></a> 
</div>
</div>
</form>
<? }elseif($num==0) { ?>
<p style="margin-top:24px; text-align:center; font-family: myFirstFont; font-size:30px"><b>Your Order is empty </b></p>
<p style="text-align:center;">  <a href="pick_up2.php" style="text-decoration:none;"><input type="button" name="button2" id="PICKUP_REQUEST" value="PICKUP REQUEST"></a>   </p>
<? }else{ ?>


    <form style="border:1px solid black;" onSubmit="return validation()" action=""  method="post">
  
 
    
	  <P style="text-align:center;" align="center"> <center>  <h1 style="margin-top: 0px;">&nbsp;</h1> </center> </P>
        
        <p style="margin-top: 70.7px; color:24aae1; font-weight:bold; font-size:24px; font-family:Verdana, Geneva, sans-serif;"> 
        
        <p>
       
        <div style="width:17%; float:left; text-align: center;">No</div>
    <div style="width:28%; float:left; text-align: center;">Order date</div>
    <div style="width:28%; float:left; text-align: center;">Pickup date</div>
    <div style="width:27%; float:left; text-align: center;">Price</div>
    
 
        
        
      </p>
      
      
      <p style="width:100%;border-bottom:2px solid #bcbdc0; "><br/><br/></p>
      
	  <? while($row=mysql_fetch_assoc($result)) {  
	  $orderdate=gmdate("Y-m-d", $row['order_date']);
	   ?>
      <a href="myorder_edit?id=<?=$row['id']?>" style="text-decoration:none; background:#000;"  >
      
       
       <div class="row" style="border-bottom:2px solid #bcbdc0; height:50px;" >
        <div style="width:17%; float:left; text-align: center;display:inline-table">  <?=$row['order_no']?><font style="color:#FFF">.</font>  </div>
    <div style="width:28%; float:left; text-align: center;display:inline-table"><?=$orderdate?> <font style="color:#FFF">.</font></div>
    <div style="width:28%; float:left; text-align: center;display:inline-table"><?=$row['pick_up_date']?> <font style="color:#FFF">.</font></div>
    <div style="width:27%; float:left; text-align: center; display:inline-table">$ <?=$row['total_amount']?> <font style="color:#FFF">.</font></div>
    
 </div>
        
        
      </a>
     
      
      <? } ?>
        
        
        
        </p>
      <div style="margin-top:29px; text-align:center; margin:auto;">
      
      <p align="center" style="height:200px;">  </p>
       
        </div>
      
      
     
    </form>
	
<? } ?>

</div>
<!--end of container-->
</body>
</html>
