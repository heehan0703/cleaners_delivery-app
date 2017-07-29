<?php
ini_set('date.timezone', 'America/Los_Angeles');
session_start();
if($_SESSION["member_id"]=="")
{
header("location:sign_in.php");
}
require_once('wp-admin/include/connectdb.php');
$member_email = $_SESSION["member_email"];
$member_id = $_SESSION["member_id"];
$member_name= $_SESSION["member_name"];
$datedelevery=$_POST['dateday']."/".$_POST['datemonth']."/".$_POST['datenum'];
$orderdate=date("M,d,y");
$date=date("D,M d");

// $timelos=date('H:i:s', time());
 //echo "$timelos";
//$date1=date("D ",strtotime($date .' +3 day'));
//$date6=date("w ",strtotime($date .' +3 day'));/*sat,6*/
//$date9=date("w ",strtotime($date .' +4 day'));/*sun,0*/
//$date7="sat";
//$date4=date("D ",strtotime($date1 .' +2 day'));
//$date5=date("D ",strtotime($date1 .' +1 day'));
//echo $date4;
//echo $date6;
//echo $date8;
// echo $date9;
//$date2=date("M",strtotime($date .' +0 month'));
//$date10=date("M",strtotime($date .' +5'));
//$date3=date("d",strtotime($date .' +3 day') );
//$date8=date("d",strtotime($date .' +5 day') );
// 

if(isset($_POST['submit'])){
	
$orderno=mysql_fetch_row(mysql_query("SELECT MAX(order_no) AS order_no FROM order_detail"));
$orderno=$orderno[0]+1;
$tradecode = sprintf("%04d", $orderno);
$dry=$_POST['dry'];
$households=$_POST['hous'];
$alterlation=$_POST['alt'];
$memo=$_POST['memo'];
$time= time();
 


$Laundry_type=$_POST['Laundry_type'];
$Households=$_POST['Households'];
$RadioGroup3=$_POST['RadioGroup3'];
$Alterlation_sew=$_POST['Alterlation_sew'];
$Alterlation_button=$_POST['Alterlation_button'];
$Alterlation_zipper=$_POST['Alterlation_zipper'];
$Alterlation_etc=$_POST['Alterlation_etc'];
$delivery_type=$_POST['delivery_type'];



$delivery_date = $_POST['dateday']."-".$_POST['month']."-".$_POST['datenum'];
 $delivery_type=$_POST['delivery_type'];

$member_row = mysql_fetch_assoc(mysql_query("select * from member where id = '$member_id'"));

mysql_query("insert into order_detail set order_no ='$tradecode', dry_cleaning_laundry ='$Laundry_type', households ='$Households', alterlation='$RadioGroup3',Alterlation_sew='$Alterlation_sew',Alterlation_button='$Alterlation_button',Alterlation_zipper='$Alterlation_zipper',Alterlation_etc='$Alterlation_etc',memo='$memo',order_date='$time',customer_id='$member_row[id]',f_name ='$member_row[first_name]',l_name='$member_row[last_name]',email = '$member_row[email]',phone='$member_row[phone]',address='$member_row[address]',delivery_date_want='$delivery_date',order_status='Pickup_request',delivery_type='$delivery_type'");

$insertid=mysql_insert_id();
if($insertid)
{
	$to=$member_row['email'];
	//$to='tes@test.com';
$name=$_POST["first_name"]; 
 
	 $subject = "Thank you for your Request"; 
	 
	 $mess="Thanks for your order, You will receive a confirmation email once your bag has been received.
In order to provide efficient service to all our customers, please remember to leave your laundry bag at your designated area of pick-up prior to our arrival.

If you placed your order after hours (5:00 pm - 7:00 am), we will pick it up the next day during normal business hours.

If you have any questions, please do not hesitate to email us.
Thank you! ";

$res2="(c) 2015 Blue Hangers, Inc. | San Diego, CA 92129 ";
 
  


	$message =" Hi ". $member_row['first_name']. "\n ". $sub. "\n ". $sub. "\n  ". $mess. "\n". $sub. "\n ". $sub. "\n ". $sub. "\n ". $sub. "\n  ".  $res1. "\n :". $sub. "\n  ". $res2. "\n" ;
 
   //end of message

    // To send the HTML mail we need to set the Content-type header.
    

$header = 'From: Blue Hangers <info@bluehangers.com>' . "\r\n";
 $retval = mail ($to,$subject,$message,$header);
   

  header("Location:THANKU.php?id=$insertid");
  }

}
 ?>
 <?php
 if(isset($_POST["submit"]))
 {
$to ='test@test.com';
$from = "Bluehangers.com";
$subject = "Blue Hangers New Order";

$body = "<html><body>
        
          <table>
          <tr><td> Order #:</td><td>$orderno </td><td>Custmore Ordered</td></tr>
         
          </table>
           </body></html>";
 
   $headers =  "From:Bluehangers.com\r\n";
   $headers .= 'MIME-Version: 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
  
        mail($to,$subject,html_entity_decode($body),$headers); 
 
 }
 $test="dhirendra";
 ?>



<script language="javascript">

function def()
	{
		 offset='-7';

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


 var date_today=nd.getDate();
	 var day_today = days[ nd.getDay() ];
	 var month = months[ nd.getMonth() ];
	 var completedate="<font style='color:#000;font-size:8px;font-family:myFirstFont;'>"+month+" "+date_today+"</font>";
	 
	// alert("today is "+completedate);

var day = days[ nd.getDay() ];

if((day==day1) || (day==day2)|| (day==day3) || (day==day4) ){
	//var d = new Date();
 nd.setDate(nd.getDate() +2);
 
 

 
 //var day =myDate.getDay();
 
 

var day_new = days[ nd.getDay() ];
//alert(day_new);

var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();
var delivery="<font style='color:#8DC96C;font-size:16px;font-family:myFirstFont;'>"+day_new +","+ month +" &nbsp;" + date+"</font>";
 var newdate=year+"/"+month+"/"+date;
 
 
 document.getElementById("pppp").innerHTML=delivery;
  document.getElementById("pptoday").innerHTML=completedate;
 document.getElementById("wn").value= day_new;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value= "default";
}


if((day==day5)||(day==day6)||(day==day0)){
	var d = new Date();
 nd.setDate(nd.getDate() +2);
 
// alert(day);

 
 //var day =myDate.getDay();
 
 

var day_new = days[ nd.getDay() ];
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();
var time=nd.getTime();
//alert(time);
var delivery="<font style='color:#8DC96C;font-size:16px;font-family:myFirstFont;'>"+day_new  + "," + month+ " &nbsp;"+ date + "</font>";
 var newdate=year+"/"+month+"/"+date;
document.getElementById("pppp").innerHTML=delivery;
  document.getElementById("pptoday").innerHTML=completedate;
 document.getElementById("wn").value= day_new;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value= "default";
}
/* alert("dhirendra"+day);*/
 /*document.getElementById("inc_date").value=newdate;*/
 
 return false;
 }
	
///////////////////////////////////////// same day delivery //////////////////////
function sameday()
	{
	
   offset='-7';

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
	 
	
	// var time=nd.toLocaleTimeString('en-US', { hour12: false });
	//alert("time:"+time);
	 
	 var hour=   nd.getHours();
	 var minutes = nd.getMinutes();
	 
	// alert("hour:"+hour+"minutes:"+minutes);
	
	
	// alert("dhirendra"+time);
    //time="09:58:59";
//if(time>'09:00:00'){
//alert("dhirendra"+time);
//}else{
  // alert("shashi"+time);
   //}

//alert(""+time);


 var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 
    /*var today=document.getElementById("inc_date").value;*/
 //var myDate = new Date();
// var d = new Date();
 
var day0 = days[0];/*sun*/
var day1 = days[1];
var day2 = days[2];
var day3 = days[3];
var day4 = days[4];
var day5 = days[5];
var day6 = days[6];/*sat*/

 var date_today=nd.getDate();
	 var day_today = days[ nd.getDay() ];
	 var month = months[ nd.getMonth() ];
	 var completedate="<font style='color:#000;font-size:8px;font-family:myFirstFont;'>"+month+" "+date_today+"</font>";

var day = days[ nd.getDay() ];

//alert(""+day);

//var m = moment().tz('America/Los_Angeles');
//var dt = new timezoneJS.Date(2008, 9, 31, 11, 45, 'America/Los_Angeles');

//var s = m.toISOString();  // if you need a string output representing UTC
//var dt = m.toDate();
//alert("tt"+dt);

if((day==day0) || (day==day1) || (day==day2)|| (day==day3) || (day==day4) || (day==day5) || (day==day6) ){
//alert(""+d);
 //var day =myDate.getDay();
var day = days[ nd.getDay() ];
//alert(""+day);
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();

var delivery="<font style='color:#8DC96C;font-size:16px;font-family:myFirstFont;'>"+day +"," + month + " &nbsp; "+ date + "</font>";

 var newdate=year+"/"+month+"/"+date;
 
  document.getElementById("pppp").innerHTML=delivery;
  document.getElementById("pptoday").innerHTML=completedate;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value="sameday";
}

//var timeres = time.split(":");
var numbertime=hour+"."+minutes;

//alert(""+numbertime);
if(Number(numbertime)>9){
	//var d = new Date();
	
	
// d.setDate(d.getDate() +1);
 //var day =myDate.getDay();
//alert("Same day delivery not available , please order before Mon- Sat 9 Am");


document.getElementById('light').style.display='block';
document.getElementById('fade').style.display='block';

 document.getElementById("pppp").innerHTML="";
 document.getElementById("pptoday").innerHTML=completedate;
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
	 offset='-7';

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
	 var time=nd.toLocaleTimeString('en-US', { hour12: false });
	 
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

     var date_today=nd.getDate();
	 var day_today = days[ nd.getDay() ];
	 var month = months[ nd.getMonth() ];
	 var completedate="<font style='color:#000;font-size:8px;font-family:myFirstFont;'>"+month+" "+date_today+"</font>";
//alert("time:"+time);
var day = days[ nd.getDay() ];

var timeres = time.split(":");
var numbertime=timeres[0]+"."+timeres[1];

//alert(Number(numbertime));

if(Number(numbertime)>19){
	//alert("time:"+time);
  document.getElementById("result").style.display='block';
  document.getElementById("fade1").style.display='block';
  
 // alert("dhirendra");
 }

//alert(""+day);
if((day==day1) || (day==day2)|| (day==day3) || (day==day4) || (day==day5) || (day==day0)||(day==day6)){
//alert(""+d);
 var d = new Date();
 nd.setDate(nd.getDate() +1);

 //var day =myDate.getDay();
var day = days[ nd.getDay() ];
//alert(""+day);
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();

var delivery="<font style='color:#8DC96C;font-size:18px;font-family:myFirstFont;'>"+day+","+month+" "+date+"</font>";

 var newdate=year+"/"+month+"/"+date;notice
  document.getElementById("pppp").innerHTML=delivery;
  document.getElementById("pptoday").innerHTML=completedate;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value= "nextday";
}


if(day==day6){
	//var d = new Date();
// d.setDate(d.getDate() +1);

 
 // document.getElementById("pppp").innerHTML="";
//  document.getElementById("pptoday").innerHTML=completedate;
 //document.getElementById("wn").value= "";
// document.getElementById("month").value= "";
// document.getElementById("date").value= "";
// document.getElementById("delivery_type").value= "";
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

<script language="javascript">
$(document).ready(function () {
	$("#hem").click(function(){
      def();
   });
	
   $("#sew").click(function(){
      sameday();
   });

   $("#button").click(function(){
      nextday();
   });
});


</script>

<link href="skin/square/blue.css" rel="stylesheet">
<link rel="stylesheet" href="style_test.css"/>

<script type="text/javascript" src="icheck.js"></script>

<style type="text/css">

.black_overlay{
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 200%;
        background-color:#999;
        z-index:1001;
        -moz-opacity: 0.8;
        opacity:.80;
        filter: alpha(opacity=80);
    }
.white_content {
        display: none;
        position: absolute;
        top: 50%;
        left: 10%;
        width: 80%;
        height: 30%;
        padding: 16px;
        border: 0px solid orange;
        background-color: white;
        z-index:1002;
        overflow: auto;
    }

</style>


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
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
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

@font-face {
    font-family: myFirstFont;
    src: url(/font/TCB_____.TTF);
}

</style>


</head>
<body onLoad="def()">

 <div id="light" class="white_content" >
 
 <p style="width:100%; text-align:right; padding-top:-40px;">
  <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a></p>
 
 <p style="text-align:center;"> Uh-oh! In order to provide efficient service to all our customers, we cannot provide Same-Day Service after 9:00 am. Please select a different Delivery Date. </p>
 
 </div>
    <div id="fade" class="black_overlay"></div>
     
     <div id="result" class="white_content" >
 
 <p style="width:100%; text-align:right; padding-top:-40px;">
  <a href = "javascript:void(0)" onclick = "document.getElementById('result').style.display='none';document.getElementById('fade1').style.display='none'">Close</a></p>
 
 <p style="text-align:center;"> We will pick up your bag on next business day </p>
 
 </div>
    <div id="fade1" class="black_overlay"></div>
       

<form method="post" style="border: 1px solid #000 !important; "  action="">

    
<div class="container-fluid" >

  <div class="row"  style="padding-top: 1%; padding-bottom: 1%;">
  <div style="width:100%; height:10px;"></div>
 
  <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
  <div style="vertical-align:middle;  text-align:center; color:#FFF; float:left; width:90%;">
    <font>REQUEST PICKUP</font>
    </div>
    <div style="float:left;"><a href="home.php" style="text-decoration:none;"><img src="images/home2.png"></a></div>
    <div style="clear:both;"></div>
  </div>
  
  </div>
  
  <div class="row" style="margin-top: 1%;">
  <div class="col-xs-9"  style="text-align:left"> <font color="#000" style="font-size:18px;font-family:myFirstFont;">Dry Cleaning <br/> Laundry</font></div>
  <div class="col-xs-3" style="margin-top: 5%; float:left; margin-left:0px;"> 
  <label class="myCheckbox">
    <input type="checkbox" name="Laundry_type" style="" value="Laundry"  <? if($page_row[2]=='Laundry'){ ?>checked="checked" <? } ?>/>
    <span></span> 
</label> 
   
  </div>
    </div>
    
    <hr />
  
  <div class="row">
  <div class="col-xs-9">  <font color="#000" style="font-size:18px;font-family:myFirstFont;">Households
  </font></div>
  <div class="col-xs-3" style="float:left;">
  
   <label class="myCheckbox">
    <input type="checkbox" name="Households" value="House"  <? if($page_row[3]=='House'){ ?>checked="checked" <? } ?>/>
    <span></span> 
</label> 

  </div>
  </div>
  
  <hr />
  
  <div class="row">
  <div class="col-xs-12"> <font color="#000" style="font-size:18px;font-family:myFirstFont;">Alterations</font></div>
  </div>
 
 <div class="row" style="font-size:10" >
  
  
  <label class="myCheckbox">
    <input type="checkbox" name="RadioGroup3" value="Hem"/><span><font color="#000" style="font-family:myFirstFont; font-size:12px;">Hem</font></span> 
</label>

 
 &nbsp;
  
   <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_sew" value="Sew" />
    <span><font color="#000" style="font-family:myFirstFont; font-size:12px; ">Sew</font></span> 
</label>

  &nbsp;
 
  <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_button" value="Button" />
    <span><font color="#000" style="font-family:myFirstFont; font-size:12px; ">Button</font></span> 
</label>


   &nbsp;&nbsp;&nbsp;&nbsp;
 

 
 <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_zipper" value="Zipper" />
    <span><font color="#000" style="font-family:myFirstFont; font-size:12px; ">Zipper</font></span> 
</label>

 &nbsp;&nbsp;&nbsp;&nbsp;

 <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_etc" value="Etc" />
    <span><font color="#000" style="font-family:myFirstFont; font-size:12px; ">Etc.</font></span> 
</label>



  </div>
  
  <hr />
  <div class="row">
  <div class="col-xs-12"><font color="#000" style="font-size:18px;font-family:myFirstFont;">Special Instructions</font></div>
  </div>
  
  <div class="row">
  
  <div class="col-xs-12"><textarea rows="4" style="width: 97%" name="memo" ></textarea></div>
  </div>


<div class="row" style="margin-top: 1%;">
<div class="col-xs-7"><font color="#000" style="font-size:18px;font-family:myFirstFont;">Delivery Date:</font></div>

<div class="col-xs-5"><span id="pppp"><font  style="color:#8DC96C;font-size:16px;font-family:myFirstFont;">dsds </font></span><br/> 
<font  style="color:#000;font-size:8px;font-family:myFirstFont;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Today is:&nbsp;</font><span id="pptoday"> </span> </div>
</div>



<!-- for Default Delivery -->
  
  <div class="row" style="width:100%;" >
  <div style="width:7%; float:left;"><font color="#FFFFFF">.</font></div>
  <div style="width:70%; float:left;">
  <font color="#9F9E9A">
   <input type="radio" class="css-checkbox" name="RadioGroup2" value="radio"  id="hem"  checked >
         <label  class="css-label radGroup2" for="hem" ><font style="color:#000;font-family:myFirstFont;font-size:12px;"> Default Delivery </font> <br><font style="color:#000;font-family:myFirstFont;font-size:8px;">(2 days from today)</font></label>
     </font>
  <br><br>
 </div> 
 </div>
  <!-- for Next Day -->
   <div class="row" >
  <div  style="width:7%; float:left;"><font color="#FFFFFF">.</font></div>
  <div style="width:50%%; float:left;">
  <font color="#9F9E9A">
   
   <input type="radio" class="css-checkbox" name="RadioGroup2" value="radio" id="button"  >
                 <label class="css-label radGroup2"  for="button"><font style="color:#000;font-family:myFirstFont;font-size:12px;">Next-Day Delivery </font>
<br><font style="color:#000;font-family:myFirstFont; font-size:8px;">(+ 10% per order)</font></label >            
  </font>
  <br><br>
 </div> 
  <div style="width:43%; float:left;"><span id="notice" style=" display:none;"><font style="color:#000;font-family:myFirstFont; font-size:10px;">we will pickup your bag on next business day</font> </span></div>
 </div>
 
  <!-- for Same Day -->
 
  <div class="row" >
  <div style="width:7%; float:left;"><font color="#FFFFFF">.</font></div>
  <div style="width:70%; float:left;">
  <font color="#9F9E9A">
   
  <input type="radio" class="css-checkbox" name="RadioGroup2" value="radio" id="sew"  >
         <label  class="css-label radGroup2"  for="sew" ><font style="color:#000;font-family:myFirstFont;font-size:12px;"> Same-Day Delivery  </font><br><font style="color:#000;font-family:myFirstFont; font-size:8px;">(+ 15% per order)</font></label>  </font>
  
 </div> 
 </div>
 
 
 
  
  
  
  
  
  
  
 <div class="row" style="margin-top: 1%; margin-left:-20px; ">
<div  style="width:60%; float:left;">
  
  
</div>
  

<div style="text-align:left;" >
 <span style=""><!--<input type="button" value="+" onClick="mont()" />--></span><br>
  <input  type="hidden" value="<?php  if( $date6==6 || $date9==0 ){ echo $date4;}else {echo $date1;}?>" id="wn" style="border-bottom:border:2px solid #00ACED; border-top:border:2px solid #00ACED; color: #00ACED; width:40px; margin-left:-2px; "  name="dateday"   />
  
 <input type="hidden" value="<?php if( $date6==6 || $date6==0) {echo $date10;}else { echo $date2;} ?>" id="month" name="month" 
 style="border:2px solid #00ACED; border-left: #FFF;  border-right: #FFF; width:45px; color: #00ACED; margin-left:-2px; " readonly  /> 
 
 <input type="hidden" value="<?php if( $date6==6 || $date6==0){ echo $date8;}else {echo $date3;}?>" id="date"  name="datenum" style="border:2px solid #00ACED; border-left: #FFF;  border-right: #FFF; width:30px; color: #00ACED;  margin-left:-2px;" readonly /><br>
 <span style="margin-left: 50%"><!--<input type="button" value="-" onClick="montdec()" />--></span>
</div>



  </div>

<div class="row" style="margin-top: 5%; margin-bottom: 2%;">        
      <div class="col-xs-12" align="center";>
        <button type="submit" name="submit" class="btn btn-default" style="width:100%; height:50px; background:#486DB5; color:#FFF;">PLACE ORDER</button>
        
      </div>


</div>
  
  <div><input type="hidden" value= "<?php echo  date("Y/m/d/");?>" name="inc_date" id="inc_date">
  <input type="hidden" value= "" name="delivery_type" id="delivery_type">
  
  </div>
  
  </form>
  
  


</body>
</html>
