<?php
require_once('wp-admin/include/connectdb.php');
require_once('wp-admin/include/config.php');


	
$pants= $_POST['radiog_dark'];
$starch =$_POST['radiog_dark1'];
$finish =$_POST['radiog_dark2'];
$perform_alteration=$_POST['radiog_dark3'];
$want_to_pickup=$_POST['radiog_dark4'];
$check=$_POST['check'];
echo $check;
if($want_to_pickup=='')
{
$want_to_pickup=$_POST['other'];
 }
//echo "dhirendra--$want_to_pickup";
$zip=$_POST['zip'];

$name_1=$_POST['fname'];

$lname=$_POST['lname'];

$address=$_POST['addr'];

$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];

$email=$_POST['email'];
$pass=$_POST['pass'];


?>
<style type="text/css">
.input{ height:40px;
border-radius:8px
 
	
	}
p{margin-left:27px; 
color:#9F9E9A}
#previous{ border-radius: 20px;
    background: #7A7F95;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px ;   


}
#next{
 border-radius: 20px;
    background:#3BADE3;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px    

	}
	form,h1{
	font-family: myFirstFont;
    src: url(/font/TCM_____.TTF);
}

@font-face {
    font-family: myFirstFont;
    src: url(/font/TCM_____.TTF);
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PAYMENT</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="radio.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="style.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="respond.min.js"></script>
<script type="text/javascript">
function validate_creditcardnumber()
{
if($('#billlater').is(':checked')){
    var credit=0;
     
	 document.getElementById("myform").submit();
   
    }
    else
    {
       var credit=1;
    }
	if(credit){
	
var re16digit=/^\d{16}$/

var x=document.getElementById('card_number').value;
var y=document.getElementById('card_name').value;
var z=document.getElementById('expiration_date').value;
var k=document.getElementById('cgv').value;


if (x.search(re16digit)==-1){
alert("Please enter your 16 digit credit card numbers");
return false;
}

if (y==""){
alert("Please enter your  credit card name");
return false;
}
if (z==""){
alert("Please enter your explaration date");
return false;
}
if (k==""){
alert("Please enter your cgv");
return false;
}
else{
document.getElementById("myform").submit();
}

	}

}

function disable_input(){
	$('#card_type').attr("disabled", true);
    $('#card_name').attr("disabled", true);
    $('#card_number').attr("disabled", true);
    $('#expiration_date').attr("disabled", true);
    $('#cgv').attr("disabled", true);	
	} 
	
	
	function enable_input(){
	$('#card_type').removeAttr("disabled");	
	$('#card_name').removeAttr("disabled");
	$('#card_number').removeAttr("disabled");
	$('#expiration_date').removeAttr("disabled");
	$('#cgv').removeAttr("disabled");
	} 

	</script>
    <script>
	function hide()
	{
		
		  var lblShowHide = document.getElementById('card_type');
		  lblShowHide.style.visibility = 'hidden';
	}
	</script>
</head>
<body>
<div class="gridContainer clearfix">
<form action="agreement.php" method="post" name="myform" id="myform" style="width:100%" >

     <input type="hidden" name="zip" value="<?=$zip; ?>">
	 <input type="hidden" name="fname" value="<?= $name_1; ?>">
     <input type="hidden" name="lname" value="<?= $lname; ?>">
     <input type="hidden" name="addr" value="<?= $address; ?>">
     <input type="hidden" name="city" value="<?= $city; ?>">
     <input type="hidden" name="state" value="<?= $state; ?>">
     <input type="hidden" name="phone" value="<?= $phone; ?>">
     <input type="hidden" name="email" value="<?= $email; ?>">
     <input type="hidden" name="pass" value="<?= $pass; ?>">
     <input type="hidden" name="pants" value="<?= $pants; ?>">
     <input type="hidden" name="starch" value="<?= $starch; ?>">
     <input type="hidden" name="finish" value="<?= $finish; ?>">
     <input type="hidden" name="perform_alteration" value="<?= $perform_alteration; ?>">
     <input type="hidden" name="want_to_pickup" value="<?=$want_to_pickup; ?>">
    <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
       <div style="vertical-align:middle; font-family:myFirstFont; text-align:center; color:#FFF; float:left; width:90%;"> PAYMENT </div>
       <div style="float:left;"><a href="home.php" style="text-decoration:none;"><img src="images/home2.png" alt="payment"></a></div>
       <div style="clear:both;"></div>
     </div>
     <p>Blue Hangers Will Follow Up Every Order With A Detailed Statement Using Our Professional Dry Cleaners Invoice System From Royal Western.</p>
  
  <p>
    <label for="select" class="input">Card Type</label>
</p>
  <p>
    <select name="card_type" id="card_type" class="input" style="width:40%" >
    <option value="visa">VISA</option>
    <option value="master">Mastercard</option>
    <option value="amex">AMEX</option>
    <option value="discovery">DISCOVERY</option>
    
    
    </select>
  </p>
  <p>
    <label for="chn">Card Holder's Name <br>
    </label>
    <input class="input" type="text" name="card_name" id="card_name" size="30%">
  </p>
  <p>
    <label for="cn">Card Number (Please enter your 16-digit  credit card number.)<br>
    </label> 
    <input class="input" type="text" name="card_number" id="card_number"size="30%">
  </p>
  <div style="color:#9F9E9A">
  <div style="float:left;margin-left:27px; width: 120px;">
    <lable>
  Expiration Date (MM/YY)                                      
    </lable>
    <br>
    <input  class="input" name="expiration_date" id="expiration_date" type="text" value="" placeholder="" style="width: 107px;"> </div>
    <div style="float:left; margin-left: 38.2px; width: 100px;">CVV<br>
    <input  class="input" name="cgv" id="cgv" type="text" value="" style="width: 91.4px;"></div>
  
    
    
  </div>
  
  <br><br>
  <p style="margin-top: 30px;">You will be charged only when  your order has been successfully delivered.<br>
    
  <br />
  <input  type="checkbox" name="check"  id="billlater" value="yes" name="bill">Bill Me Later</p>
  <p class="mar">
  <input type="button" name="previous"  value="PREVIOUS" id="previous">
  <input type="button" name="NEXT"  value="NEXT" id="next" onClick="validate_creditcardnumber()">
</p>
  </form>
</div>
</body>
</html>