<?php
session_start();
require_once('wp-admin/include/connectdb.php');
$id=$_GET['id'];
if($id)
{
$sql="select * from order_detail where id='$id'";
$page_row= mysql_fetch_array(mysql_query($sql));


$date_del= $page_row['delivery_date_want'];
$pieces = explode("-", $date_del);
$day=$pieces[0];
$month=$pieces[1];
$Year=$pieces[2];

}
$member_email = $_SESSION["member_email"];
$member_id = $_SESSION["member_id"];
$member_name= $_SESSION["member_name"];
$datedelevery=$_POST['dateday']."/".$_POST['datemonth']."/".$_POST['datenum'];

$orderdate=date("M,d");
$ord1=date("d,M ",strtotime($orderdate .' +2 day'));
$ord2=date("d,M ",strtotime($orderdate .' +1 day'));
//echo $ord1;

$date=date("D-M-d");
$date1=date("D-M-d ",strtotime($date .' +2 day'));

//echo $date1;
$date2=date("D-M-d",strtotime($date .' +1 day'));
//echo $date2;

if($dateday=='Sat')
{
 $date1=date("M,Y,D ",strtotime($date .' +4 day'));
 }elseif($dateday=='Sun'){
     $date1=date("M,Y,D ",strtotime($date .' +3 day'));
	 }

/*sat,6*/
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
	

$Laundry_type=$_POST['Laundry_type'];
$Households=$_POST['Households'];
$RadioGroup3=$_POST['RadioGroup3'];
$Alterlation_sew=$_POST['Alterlation_sew'];
$Alterlation_button=$_POST['Alterlation_button'];
$Alterlation_zipper=$_POST['Alterlation_zipper'];
$Alterlation_etc=$_POST['Alterlation_etc'];
$delivery_type=$_POST['delivery_type'];

$memo=$_POST['memo'];
$time= time();


$delivery_date = $_POST['dateday']."-".$_POST['month']."-".$_POST['datenum'];
 

$member_row = mysql_fetch_assoc(mysql_query("select * from member where id = '$member_id'"));


$sql="update order_detail set dry_cleaning_laundry='$Laundry_type',	households='$Households',alterlation='$RadioGroup3',Alterlation_sew='$Alterlation_sew',Alterlation_button='$Alterlation_button',Alterlation_zipper='$Alterlation_zipper',Alterlation_etc='$Alterlation_etc',memo='$memo',delivery_date_want='$delivery_date',delivery_type='$delivery_type' where id='$id'";



if(mysql_query($sql))
{
	
  header("Location:THANKU.php?id=$id");
  }

}
 ?>
  <?php
 if(isset($_POST["submit"]))
 {
	//$to='jaysbaek@yahoo.com';
	$to='jaysbaek@yahoo.com';
//$name=$_POST["first_name"]; 
 
	 $subject = "custmore edited order"; 
	 
	 $mess="custmore Edited new ordered ";
$res1=$id;
$res2="Bluehangers.com ";
 
  
    $message =" Hi :". $mess.  "\n  ".  $res1. "\n :". $sub. "\n  ". $res2. "\n"  ;
 
   //end of message

    // To send the HTML mail we need to set the Content-type header.
    
    $header = "from:Bluehangers.com";
 $retval = mail ($to,$subject,$message,$header); 
 
 }
 ?>
<!doctype html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>REQUEST PICKUP</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="skin/square/blue.css" rel="stylesheet">
<link rel="stylesheet" href="style_test.css"/>

<script type="text/javascript" src="icheck.js"></script>

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

var day = days[ nd.getDay() ];

//alert(day);

if((day==day1) || (day==day2)|| (day==day3) || (day==day4) ){
	var d = new Date();
 nd.setDate(nd.getDate() +2);
 
 

 
 //var day =myDate.getDay();
 
 

var day_new = days[ nd.getDay() ];
//alert(day_new);
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();
var delivery="<font style='color:#8DC96C;font-size:18px;font-family:myFirstFont;'>"+day_new+","+month+" "+date+"</font>";
 var newdate=year+"/"+month+"/"+date;
document.getElementById("pppp").innerHTML=delivery;
  document.getElementById("pptoday").innerHTML=completedate;
 document.getElementById("wn").value= day_new;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value= "default";
  document.getElementById("hem").checked = true;
}


if((day==day5)|| (day==day6) || (day==day0)){
	var d = new Date();
 nd.setDate(nd.getDate() +2);
 
 

 
 //var day =myDate.getDay();
 
 

var day_new = days[ nd.getDay() ];
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();
var time=nd.getTime();
//alert(time);
var delivery="<font style='color:#8DC96C;font-size:18px;font-family:myFirstFont;'>"+day_new+","+month+" "+date+"</font>";
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

 var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 
    /*var today=document.getElementById("inc_date").value;*/
 //var myDate = new Date();
 var d = new Date();
// alert("dhirendra");
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
	 document.getElementById("button").checked = true;

var day = days[ nd.getDay() ];

if((day==day1) || (day==day2)|| (day==day3) || (day==day4) || (day==day5) || (day==day0)||(day==day6)){
	var d = new Date();
 nd.setDate(nd.getDate() +1);
 
 

 
 //var day =myDate.getDay();
 
 

var day = days[ nd.getDay() ];
var month = months[ nd.getMonth() ];
var year=nd.getFullYear();
var date=nd.getDate();
var delivery="<font style='color:#8DC96C;font-size:18px;font-family:myFirstFont;'>"+day+","+month+" "+date+"</font>";
 var newdate=year+"/"+month+"/"+date;
document.getElementById("pppp").innerHTML=delivery;
  document.getElementById("pptoday").innerHTML=completedate;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value= "default";
}



/* alert("dhirendra"+day);*/
 /*document.getElementById("inc_date").value=newdate;*/
 
 return false;
	
 }
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
	 
	// time=nd.toLocaleFormat("%H:%M");
	var time=nd.toLocaleTimeString('en-US', { hour12: false });

//alert(""+time);


 var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 
    /*var today=document.getElementById("inc_date").value;*/
	document.getElementById("sew").checked = true;
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
var delivery="<font style='color:#8DC96C;font-size:18px;font-family:myFirstFont;'>"+day+","+month+" "+date+"</font>";

 var newdate=year+"/"+month+"/"+date;
   
 document.getElementById("sew").checked = true;
document.getElementById("pppp").innerHTML=delivery;
  document.getElementById("pptoday").innerHTML=completedate;
 document.getElementById("wn").value= day;
 document.getElementById("month").value= month;
 document.getElementById("date").value= date;
 document.getElementById("delivery_type").value="sameday";
}

var timeres = time.split(":");
var numbertime=timeres[0]+"."+timeres[1];

if((day==day0) || (Number(numbertime)>9)){
	//var d = new Date();
//d.setDate(d.getDate() +1);
 //var day =myDate.getDay();
alert("Same day delivery not available , please order before MON -SUN 9: AM");
var delivery="<font style='color:#8DC96C;font-size:18px;font-family:myFirstFont;'>"+day+","+month+" "+date+"</font>";

document.getElementById("pppp").innerHTML=delivery;
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
	
	</script>
 
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
<body <? if($page_row[25]=='default'){?> onLoad="def()" <?  } elseif($page_row[25]=='sameday'){ ?> onLoad="sameday()"   <? }else{ ?> onLoad="nextday()" <? } ?> >

<form method="post" style="border: 1px solid #000 !important; "  action="">
<div class="container-fluid" >

 <div class="row"  style="padding-top: 1%; padding-bottom: 1%;">
  <div style="width:100%; height:10px;"></div>
 
  <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
  <div style="vertical-align:middle;  text-align:center; color:#FFF; float:left; width:90%;">
    <font>EDIT PICKUP</font>
    </div>
    <div style="float:left;"><a href="home.php" style="text-decoration:none;"><img src="images/home2.png"></a></div>
    <div style="clear:both;"></div>
  </div>
  
  </div>
  
  
  
  <div class="row" style="margin-top: 1%;">
  <div class="col-xs-9"  style="text-align:left"> <font color="#000" style="font-size:18px;font-family:myFirstFont;">Dry Cleaning <br/> Laundry</font></div>
  <div class="col-xs-3" style="margin-top: 5%; float:left; margin-left:-5px;">
  
  <label class="myCheckbox">
    <input type="checkbox" name="Laundry_type" value="Laundry"  <? if($page_row[2]=='Laundry'){ ?>checked="checked" <? } ?>/>
    <span></span> 
</label> 
 
  
 </div>
    </div>
    
    <hr />
  
  <div class="row">
  <div class="col-xs-9"> <font color="#9F9E9A">
   <font color="#000" style="font-size:18px;font-family:myFirstFont;">Households
  </font>
  </font></div>
  <div class="col-xs-3" style="float:left;">
  
  
   <label class="myCheckbox">
    <input type="checkbox" name="Households" value="House"  <? if($page_row[3]=='House'){ ?> checked="checked" <? } ?>/>
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
    <input type="checkbox" name="RadioGroup3" value="Hem" <? if($page_row[4]=="Hem"){ ?>checked="checked" <? } ?>/><span>
   <font color="#000" style="font-family:myFirstFont; font-size:12px;">Hem</font></span> 
</label>

 
 &nbsp;
  
   <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_sew"  value="Sew"  <? if($page_row[5]=="Sew"){ ?>checked="checked" <? } ?> />
    <span><font color="#000" style="font-family:myFirstFont; font-size:12px; ">Sew</font></span> 
</label>

  &nbsp;
 
  <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_button" value="Button" <? if($page_row[6]=="Button"){ ?>checked="checked" <? } ?>  />
    <span><font color="#000" style="font-family:myFirstFont; font-size:12px; ">Button</font></span>
</label>


   &nbsp;&nbsp;&nbsp;&nbsp;
 

 
 <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_zipper"  value="Zipper" <? if($page_row[7]=="Zipper"){ ?>checked="checked" <? } ?> />
   <span><font color="#000" style="font-family:myFirstFont; font-size:12px; ">Zipper</font></span> 
</label>

 &nbsp;&nbsp;&nbsp;&nbsp;

 <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_etc" value="Etc"  <? if($page_row[8]=="Etc"){ ?>checked="checked" <? } ?> />
    <span><font color="#000" style="font-family:myFirstFont; font-size:12px; ">Etc</font></span> 
</label>
  

</div>
  
  <hr />
  <div class="row">
  <div class="col-xs-12"><font color="#000" style="font-size:18px;font-family:myFirstFont;">Special Instructions</font></div>
  </div>
  
  <div class="row">
  
  <div class="col-xs-12"><textarea rows="4" style="width: 97%" name="memo" ><?=$page_row[9]?> </textarea></div>
  </div>


<div class="row" style="margin-top: 1%;">
<div class="col-xs-7"><font color="#000" style="font-size:18px;font-family:myFirstFont;">Delivery Date:</font></div>

<div class="col-xs-5"><span id="pppp"><font  style="color:#8DC96C;font-size:18px;font-family:myFirstFont;">dsds </font></span><br/> 
<font  style="color:#000;font-size:8px;font-family:myFirstFont;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Today is &nbsp;:</font><span id="pptoday"> </span> </div>
</div>

 <div class="row" >
  
  <div class="col-xs-2"></div>
  <div class="col-xs-8">
  
  <font color="#9F9E9A">
  
         
     
<input type="radio" class="css-checkbox" name="RadioGroup2" value="radio" id="hem"  >
                 <label class="css-label radGroup2"  for="hem"> <font style="color:#000;font-family:myFirstFont;font-size:12px;">Default Deliviry </font><br><font style="color:#000;font-family:myFirstFont; font-size:8px;">(+ 10% per order)</font></label >
 
    <br> <br>
   <input type="radio" class="css-checkbox" name="RadioGroup2" value="radio" id="button"  >
                 <label class="css-label radGroup2"  for="button"> <font style="color:#000;font-family:myFirstFont;font-size:12px;">Next Day </font><br><font style="color:#000;font-family:myFirstFont; font-size:8px;">(+ 10% per order)</font></label >
                 
               
                 
                 
  <br> <br>
  <input type="radio" class="css-checkbox" name="RadioGroup2" value="radio" id="sew"  >
         <label  class="css-label radGroup2"  for="sew" ><font style="color:#000;font-family:myFirstFont;font-size:12px;"> Same Day </font><br><font style="color:#000;font-family:myFirstFont; font-size:8px;">(+ 15% per order)</font></label>
  
  
  
 
  
 </font>
  
  </div>
  <div class="col-xs-2"></div>
  
  </div>
  
  
 <div class="row" style="margin-top: 1%; margin-left:-20px; ">
<div  style="width:60%; float:left;">
 
  
</div>
  

<div style="text-align:left;" >
 <span style=""><!--<input type="button" value="+" onClick="mont()" />--></span><br>
 <input  type="hidden" value="<?=$day?>" id="wn" style="border-bottom:border:2px solid #00ACED; border-top:border:2px solid #00ACED; color: #00ACED; width:40px; margin-left:-2px; "  name="dateday"  readonly/>
 <input type="hidden" value="<?=$month?>" id="month" name="month" style="border:2px solid #00ACED; border-left: #FFF;  border-right: #FFF; width:45px; color: #00ACED; margin-left:-2px; "   readonly  />
  <input type="hidden" value="<?=$Year?>" id="date"  name="datenum" style="border:2px solid #00ACED; border-left: #FFF;  border-right: #FFF; width:30px; color: #00ACED;  margin-left:-2px;"  readonly  />
 <br>
 <span style="margin-left: 50%"><!--<input type="button" value="-" onClick="montdec()" />--></span>
</div>



  </div>

<div class="row" style="margin-top: 5%; margin-bottom: 2%;">        
      <div class="col-xs-12" align="center";>
        <button type="submit" name="submit" class="btn btn-default" style="width:100%;height:50px; background:#486DB5; color:#FFF;">EDIT ORDER</button>
        
      </div>


</div>
  
  <div><input type="hidden" value= <?php echo  date("Y/m/d/");?> name="inc_date" id="inc_date">
  <input type="hidden" value= "<?=$page_row[25]?>" name="delivery_type" id="delivery_type">
  </div>
  
  </form>
  
  
</div>

</body>
</html>
