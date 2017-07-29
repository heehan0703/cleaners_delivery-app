<?php
session_start();
if($_SESSION["member_id"]=="")
{
header("location:sign_in.php");
}
require_once('wp-admin/include/connectdb.php');
$id=$_SESSION['member_id'];

/*$member_details=mysql_num_rows($member);*/
/*$row=mysql_fetch_array($member_details);*/
$f_name=$member_row['first_name'];
$l_name =$member_row['last_name'];
 $email= $member_row['email'];
 $password=$member_row['password'];
 $address=$member_row['address'];
 $city=$member_row['city'];
 $state=$member_row['state'];
 $phone=$member_row['phone'];
 $zip_code=$member_row['zip_code'];
 $pants=$member_row['pants'];
 
// echo "frist--$pants";
 $starch=$member_row['starch'];
 $finish=$member_row['finish'];
 $palt=$member_row['perform_alteration'];
 $pay_load=$member_row['pay_load'];
 
 $c_type=$member_row['card_type'];
 $c_name=$member_row['card_name'];
 $c_number=$member_row['card_number'];
 $expiration_date =$member_row['expiration_date'];
 $cgv=$member_row['cgv'];
 $later=$member_row['later'];
 if(isset($_POST['edit'])){
	 
	
	 
	 $f_name=$_POST['first_name'];
$l_name =$_POST['last_name'];
 $email= $_POST['email'];
 $password=$_POST['password'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $phone=$_POST['phone'];
 $zip_code=$_POST['zip_code'];
 $pants=$_POST['pants'];
 //echo "frist--$pants";
 $starch=$_POST['starch'];
 $finish=$_POST['finish'];
 $perform_alteration=$_POST['perform_alteration'];
 $pick_up=$_POST['pick_up'];
 
 $payload=$_POST['pay_load'];
 $card_type=$_POST['card_type'];
 $card_name=$_POST['card_name'];
 $card_number=$_POST['card_number'];
 $expiration_date=$_POST['expiration_date'];
 $cgv=$_POST['cgv'];
 $payment_later=$_POST['payment_later'];
 
 
 $sql = "UPDATE member SET first_name = '$f_name', 
            last_name = '$l_name', 
            address = '$address',  
            city = '$city',  
            phone = '$phone',
			zip_code= '$zip_code',
			password= '$password',
			email = '$email',
			state ='$state',
			pants ='$pants',
			starch ='$starch',
			finish ='$finish',
			perform_alteration ='$perform_alteration',
			want_to_pickup='$pick_up',
			pay_load ='$payload',
			card_type ='$card_type',
			card_name ='$card_name',
			card_number ='$card_number',
			expiration_date ='$expiration_date ',
			cgv=' $cgv',
			payment_option='$payment_later'
			where id = '$id'";
			
			$rec=mysql_query($sql);
			
	// echo"$sql";
	 
	 }
	 
	 $member = mysql_query("select * from member where id= '$id'");
$run=mysql_query($member);
 $member_row= mysql_fetch_assoc($member);
?>
<script type="text/javascript">
function validation(){
f_name=document.getElementById('first_name').value;
l_name=document.getElementById('last_name').value;
address=document.getElementById('address').value;
city=document.getElementById('city').value;
state=document.getElementById('state').value;
phone=document.getElementById('phone').value;
zipcode=document.getElementById('zipcode').value;
password=document.getElementById('password').value;
pants=document.getElementById('pants').value;
starch=document.getElementById('starch').value;
finish=document.getElementById('finish').value;
permorm_alternation=document.getElementById('permorm_alternation').value;

pay_period=document.getElementById('pay_load').value;
card_type=document.getElementById('card_type').value;
card_name=document.getElementById('card_name').value;
card_number=document.getElementById('card_number').value;
expiration_date=document.getElementById('expiration_date').value;
cgv=document.getElementById('cgv').value;
payment_later=document.getElementById('payment_later').value;



if(f_name==''){
alert('Please enter first name!');
document.getElementById('f_name').focus();
return false;
}

if(l_name==''){
alert('Please enter Last name!');
document.getElementById('l_name').focus();
return false;

}


if(address==''){
alert('Please enter address!');
document.getElementById('address').focus();
return false;
}

if(city==''){
alert('Please enter city!');
document.getElementById('city').focus();
return false;

}

if(state==''){
alert('Please enter state!');
document.getElementById('state').focus();
return false;
}

if(phone==''){
alert('Please enter phone!');
document.getElementById('phone').focus();
return false;

}

if(zipcode==''){
alert('Please enter zipcode!');
document.getElementById('zipcode').focus();
return false;
}

if(password==''){
alert('Please enter password!');
document.getElementById('password').focus();
return false;
}

if(pants==''){
alert('Please enter Pants!');
document.getElementById('pants').focus();
return false;
}


if(starch==''){
alert('Please enter Starch!');
document.getElementById('starch').focus();
return false;
}

if(finish==''){
alert('Please enter Finish!');
document.getElementById('finish').focus();
return false;
}
if(permorm_alternation==''){
alert('Please enter permorm alternation!');
document.getElementById('permorm_alternation').focus();
return false;
}

if(pay_period==''){
alert('Please enter Pay Period!');
document.getElementById('pay_load').focus();
return false;
}

if(card_type==''){
alert('Please enter Card Type!');
document.getElementById('card_type').focus();
return false;
}


if(card_name==''){
alert('Please enter Card Name!');
document.getElementById('card_name').focus();
return false;
}

if(expiration_date==''){
alert('Please enter Expiration Date!');
document.getElementById('expiration_date').focus();
return false;
}
if(cgv==''){
alert('Please enter cgv!');
document.getElementById('cgv').focus();
return false;
}


if(payment_later==''){
alert('Please enter Payment_Later!');
document.getElementById('payment_later').focus();
return false;
}


if(card_number==''){
alert('Please enter Card Number!');
document.getElementById('card_number').focus();
return false;
}

}
</script>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"> <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>MY PROFILE</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<style>
form {
	border:none;


width:100%;
}
.input {
border-radius:0px;
width:100%;
}



</style>
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

/*background-color:#f0f8ff*/
}
form h2 {
/*text-align:center;*/
}

input {margin-left: 10px;
/*width:100%;*/
height:30px;
border-radius:7px;
box-shadow:0 0 2px;
margin-top:5px;
padding:6px;
border: 1px solid gray;
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

<body>
<div class="gridcontainer clearfix">

<div style="width:100%; height:10px;"></div>
 
  <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
  <div style="vertical-align:middle;  text-align:center; color:#FFF; float:left; width:90%;">
    <font>MY PROFILE</font>
    </div>
    <div style="float:left;"><a href="Faq.php" style="text-decoration:none;"><img src="images/home2.png"></a></div>
    <div style="clear:both;"></div>
  </div>
  
  </div>
<form action="" method="post" onSubmit="return validation()">


<div style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-right: 1px; margin-left:10px; ">
<font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">FIRST NAME* </font>
</label> </div>

<div >
<input id="first_name" class="input" type="text" style="height: 28px; width: 130px;"name="first_name" value="<?php echo $f_name?>">
</div>
</div>


<div class="first" style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">LAST NAME*</font></label>
</div>
<div >
<input id="last_name" class="input" type="text" style="height: 28px; width: 130px; " value="<?php echo $l_name?>" name="last_name">
</div>
</div>

<div class="address"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">ADDRESS*</font></label>
</div>
<div >
<input id="address" class="input" type="text" name="address" value="<?php echo $address?>" 
style="height: 30px; width: 130px; ">
</div>
</div>



<div class="address" >
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">CITY*</font></label>
<input id="city" class="input" type="text" name="city" value="<?php echo $city?>" style="height: 30px; width: 120px; margin-top: -5px; margin-left: 2px;">
<label style="margin: 0px 1px 0px 0px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">STATE*</font></label>
<select id="state"   align="left" name="state" style="height: 30px; width: 60px; margin-top: 2px; margin-left:-3px" 
value="<?php echo $state?>" >
<option  value="CA" <? if($state=='CA'){ ?> selected  <? } ?>>CA </option>
<option value="UA" <? if($state=='UA'){ ?> selected  <? } ?>>UA</option>
<option value="DA" <? if($state=='DA'){ ?> selected  <? } ?>>DA</option>
</select>
</div>

<div class="address"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">PHONE*</font></label>
</div>
<div >
<input id="phone" class="input" type="text" style="height: 30px; width: 130px; " value="<?php echo $phone?>" name="phone" >
</div>
</div>


<div class="address"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">EMAIL*</font></label>
</div>
<div >
<input id="email" class="input" type="email" onBlur="check_email()" style="height: 30px; width: 130px; " value=" <?php echo $email?>" name="email">
</div>
</div>

<div class="email"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">ZIP CODE*</font></label>
</div>
<div >
<input id="zip_code" class="input" type="text"  style="height: 30px;  width: 115px;" value=" <?php echo $zip_code?>" name="zip_code">
</div>
</div>


<div class="email"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">PASSWORD*</font></label>
</div>
<div >
<input id="password" class="input" type="password" style="height: 30px; width: 120px;" value="<?php echo $password?>" name="password" placeholder="5 to 8 character" title="5 to 8 character" required pattern=".{5,8}">
<br>
</div>
</div>


<div class="email"  style="width:100%">
<div style=" width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">PANTS*</font></label>
</div>
<div >&nbsp;

<select id="pants" class="input" align="left" style="height: 30px; width: 130px; margin-top: 2px; " name="pants" >
<option value="no_carease" <?php if($member_row['pants']=='carease') { echo "dhirendra"?>  selected <?php }?> > carease</option>
<option value="no_carease" <?php if($member_row['pants']=='no_carease') {?>  selected <?php }?> >no carease</option>
<option value="no_prefrence" <?php if($member_row['pants']=='no_prefrence') { echo "dhirendra"?>  selected <?php }?> >no prefrence</option>
</select>
</div>
</div>

<div class="email"  style="width:100%">
<div style=" width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">STARCH*</font></label>
</div>
<div >&nbsp;
<select id="starch" class="input" align="left" style="height: 30px; width: 130px; margin-top: 8px; " name="starch" >
<option value="none"<?php if($member_row['starch']=='none') {?> selected="selected"<?php }?> >none</option>
<option value="light"<?php if($member_row['starch']=='light') {?> selected="selected"<?php }?> >light</option>
<option value="medium"<?php if($member_row['starch']=='medium') {?> selected="selected"<?php }?> >medium</option>
<option value="heavy"<?php if($member_row['starch']=='heavy') {?> selected="selected"<?php }?> >heavy</option>
</select>
</div>
</div>


<div class="email"  style="width:100%">
<div style=" width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">FINISH*</font></label>
</div>
<div >&nbsp;
<select id="finish" class="input" align="left" style="height: 30px; width: 130px; margin-top: 12px; " name="finish">
<option value="box" <?php if($member_row['finish']=='box') {?> selected <?php }?>>box</option>
<option value="hanger" <?php if($member_row['finish']=='hanger') {?> selected <?php }?>>hanger</option>
</select>
</div>
</div>


<div class="email"  style="width:100%">
<div style=" width:80%; float:left;">
<label style="font-size: 9px; ">Perform Alteration  up to $s as neccery *</label>
</div>
<div >&nbsp;
<select id="perform_alteration" class="input" align="left" style="height: 30px; width: 45px; margin-top: 12px; margin-left: 0px;" name="perform_alteration" >
<option value= "yes" <?php if($member_row['perform_alteration']=='1') {?> selected <?php }?>>yes</option>
<option value="no" <?php if($member_row['perform_alteration']=='0') {?> selected <?php }?>>no</option>
</select>
</div>
</div>

<div class="email"  style="width:100%">
<div style="width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">PICK UP PLACE*</font></label>
</div>
<div >&nbsp;
<select id="pick_up" class="input" align="left" style="height: 30px; width: 130px; margin-top: 12px; " name="pick_up" >
<option value= "front door" <?php if($member_row['want_to_pickup']=='front_door') {?> selected <?php }?>>front door</option>
<option value="other" <?php if($member_row['want_to_pickup']==$member_row['want_to_pickup']) {?> selected="selected"<?php }?> ><?=$member_row['want_to_pickup']?></option>
</select>
</div>
</div>

<!-- 
<div class="email"  style="width:100%">
<div style="width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">PAY PAYLOAD*</font></label>
</div>
<div >&nbsp;
<select id="pay_load" class="input" align="left" style="height: 30px; width: 130px; margin-top: 12px; " name="pay_load" >
<option value= "every order" <?php if($member_row['pay_load']=='every order') {?> selected <?php }?>>every order</option>
<option value="once a month" <?php if($member_row['pay_load']=='once a month') {?> selected <?php }?>>once a month</option>
</select>
</div>
</div>  -->


<div class="email"  style="width:100%">
<div style="width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">CARD TYPE*</font></label>
</div>
<div >&nbsp;
<select id="state" class="input" align="left" style="height: 30px; width: 130px; margin-top: 12px; " name="card_type"  >
<option value="visa" <?php if($member_row['card_type']=='visa') {?> selected <?php }?>>visa</option>
<option value="paypal"<?php if($member_row['card_type']=='paypal') {?> selected <?php }?>>paypal</option>
</select>
</div>
</div>

<div class="email"  style="width:100%">
<div style="width:50%; float:left;">
<label style="font-size: 12px; margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">Card holder name*</font></label>
</div>
<div >
<input id="Card_name" class="input" type="text" name="card_name" value="<?=$c_name?>" style="height: 30px; width: 130px; margin-top: 12px;">
</div>
</div>

<div class="email"  style="width:100%">
<div style="width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">Card number*</font></label>
</div>
<div >
<?
$card=substr($c_number, -4);
?>
<input id="card_number" class="input" type="text" style="height: 30px; width: 130px;" value="XXXXXXXXXX<?=$card?>" name="card_number">
<input id="card_number" class="input"  type="hidden" style="height: 30px; width: 130px;" value="<?=$c_number ?>" name="card_number">

</div>
</div>
<div class="email"  style="width:100%">
<div style="width:50%; float:left;">
<label style="margin-left: 10px; font-size:14px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">Expiration date*</font></label>
</div>

<div style="width:20%; float:left;" >
<input id="expiration_date" class="input" type="text" name="expiration_date" style="height: 30px; width: 43px; margin-top: -5px; " value=" <?php echo $expiration_date  ?>">
</div>
<div style="width:10%; float:left;">
<label style="margin: 0px 1px 0px 0px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">CGV*</font></label>
</div>
<div style="vertical-align:text-top;">
<input id="cgv" class="input" type="text" style="height: 30px; width: 38px; margin-top: -5px;" value="<?=$cgv ?>" name="cgv">
</div>
</div>



<!--
<div class="email"  style="width:100%">
<div style="width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:Arial, Helvetica, sans-serif; font-size:14px;">payment later*</font></label>
</div>
<div >

<select id="payment_later" class="input" align="left" style="height: 30px; width: 90px; margin-top: 12px; margin-left: 18px;" name="payment_later" >
<option value="1" <?php if($result['payment_option']=='1') {?>selected="selected"<?php }?>>yes</option>
<option value="0"<?php if($result['payment_option']!='1') {?>selected="selected"<?php }?>>no</option>
</select>
</div>
</div> -->

<p class="mar">
  <input type="submit" name="edit" id="previous" value="EDIT">
  <a href="home.php" style="text-decoration:none"><input type="button" name="home" id="NEXT" value="HOME"> </a></p>
</form></body></html>