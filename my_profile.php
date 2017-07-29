<?php
session_start();
if($_SESSION["member_id"]=="")
{
header("location:sign_in.php");
}
require_once('wp-admin/include/connectdb.php');
$id=$_SESSION['member_id'];
$member = mysql_query("select * from member where id= '$id'");
$run=mysql_query($member);
 $member_row= mysql_fetch_assoc($member);
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
	 
	 $id=$_SESSION['member_id'];
$member = mysql_query("select * from member where id= '$id'");
$run=mysql_query($member);
 $member_row= mysql_fetch_assoc($member);
	 
	 $id=$_SESSION['member_id'];
$member = mysql_query("select * from member where id= '$id'");
$run=mysql_query($member);
 $member_row= mysql_fetch_assoc($member);
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
	 
	 
	 $fi_name=$_POST['first_name'];
$la_name =$_POST['last_name'];
 $emailid= $_POST['email'];
 $pass=$_POST['password'];
 $add=$_POST['address'];
 $ci=$_POST['city'];
 $sta=$_POST['state'];
 $pho=$_POST['phone'];
 $zip=$_POST['zip_code'];
 $pant=$_POST['pants'];
 
 $star=$_POST['starch'];
 $fin=$_POST['finish'];
 $perform=$_POST['perform_alteration'];
 $pick=$_POST['pick_up'];
 
 $pay=$_POST['pay_load'];
 
 $cardty=$_POST['card_type'];

 $cardna=$_POST['card_name'];
 $cardnu=$_POST['card_number'];
 $expiration=$_POST['expiration_date'];
 $cg=$_POST['cgv'];
 $payment=$_POST['payment_later'];
 
 
 $sql = "UPDATE member SET first_name = '$fi_name', 
            last_name = '$la_name', 
            address = '$add',  
            city = '$ci',  
            phone = '$pho',
			zip_code= '$zip',
			password= '$password',
			email = '$email',
			state ='$sta',
			pants ='$pant',
			starch ='$star',
			finish ='$fin',
			perform_alteration ='$perform',
			want_to_pickup='$pick',
			pay_load ='$pay',
			card_type ='$cardty',
			card_name ='$cardna',
			card_number ='$cardnu',
			expiration_date ='$expiration ',
			cgv=' $cg',
			payment_option='$payment'
			where id = '$id'";
			
			
			$rec=mysql_query($sql);
			header("Location: http://m.bluehangers.com/my_profile.php");
			
			
	 
	 }
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


<script type="text/javascript">
  
	function mesage(){
            var text = document.getElementById("card_number").value;
            //alert(text);
			var elem = document.getElementById("cardnumberh");
                elem.value = text;
    }
	
</script>






<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"> <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>MY PROFILE</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="style_test.css"/>
</head>

<style type="text/css" >
form {

border:1px solid #FFF;
width:100%;
}
.input {
border-radius:0px;
width:100%;
}
@font-face {
    font-family: myFirstFont;
    src: url(/font/TCM_____.TTF);
}
</style>

<body>
<div class="gridcontainer clearfix" style="border:0px solid #FFF;">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onSubmit="return validation()">
  <div class="gridcontainer clearfix" style="border:0px solid #FFF;" >
    <div style="width:100%; height:10px;"></div>
    <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
      <div style="vertical-align:middle;  font-family: myFirstFont;
text-align:center; color:#FFF; float:left; width:90%;"> <font>MY PROFILE</font> </div>
      <div style="float:left;"><a href="home.php" style="text-decoration:none;"><img src="images/home2.png" alt="home"></a></div>
      <div style="clear:both;"></div>
    </div>
  </div>
  <div style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-right: 1px; margin-left:10px; ">
<font style="font-family:myFirstFont; font-size:14px;">First Name </font>
</label> </div>

<div >
<input id="first_name" class="input" type="text" style="height: 28px; width: 130px;"name="first_name" value="<?php echo $f_name?>">
</div>
</div>


<div class="first" style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Last Name</font></label>
</div>
<div >
<input id="last_name" class="input" type="text" style="height: 28px; width: 130px; " value="<?php echo $l_name?>" name="last_name">
</div>
</div>

<div class="address"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Address</font></label>
</div>
<div >
<input id="address" class="input" type="text" name="address" value="<?php echo $address?>" 
style="height: 30px; width: 130px; ">
</div>
</div>



<div class="address" >
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">City</font></label>
<input id="city" class="input" type="text" name="city" value="<?php echo $city?>" style="height: 30px; width: 120px; margin-top: -5px; margin-left: 2px;">
<label style="margin: 0px 1px 0px 0px;"><font style="font-family:myFirstFont; font-size:14px;">State</font></label>
<select id="state"   align="left" name="state" style="height: 30px; width: 60px; margin-top: 2px; margin-left:-3px" 
value="<?php echo $state?>" >
<option  value="CA" <? if($state=='CA'){ ?> selected  <? } ?>>CA </option>
</select>
</div>

<div class="address"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Phone</font></label>
</div>
<div >
<input id="phone" class="input" type="text" style="height: 30px; width: 130px; " value="<?php echo $phone?>" name="phone" >
</div>
</div>


<div class="address"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Email</font></label>
</div>
<div >
<input id="email" class="input" type="email" onBlur="check_email()" style="height: 30px; width: 130px; " value=" <?php echo $email?>" name="email">
</div>
</div>

<div class="email"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Zip Code</font></label>
</div>
<div >
<input id="zip_code" class="input" type="text"  style="height: 30px;  width: 115px;" value=" <?php echo $zip_code?>" name="zip_code">
</div>
</div>


<div class="email"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Password</font></label>
</div>
<div >
<input id="password" class="input" type="password" style="height: 30px; width: 120px;" value="<?php echo $password?>" name="password" placeholder="5 to 8 character" title="5 to 8 character" required pattern=".{5,8}">
<br>
</div>
</div>


<div class="email"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Pants</font></label>
</div>
<div >&nbsp;
<select id="pants" class="input" align="left" style="height: 30px; width: 130px; margin-top: 2px; " name="pants" >
<option value="carease" <?php if($member_row['pants']=='crease') { echo "dhirendra"?>  selected <?php }?> > Crease</option>
<option value="no_crease" <?php if($member_row['pants']=='no_crease') {?>  selected <?php }?> >No crease</option>
<option value="no_prefrence" <?php if($member_row['pants']=='no_prefrence') { echo "dhirendra"?>  selected <?php }?> >No Preference</option>
</select>
</div>
</div>

<div class="email"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Starch</font></label>
</div>
<div >&nbsp;
<select id="starch" class="input" align="left" style="height: 30px; width: 130px; margin-top: 8px; " name="starch" >
<option value="none"<?php if($member_row['starch']=='none') {?> selected="selected"<?php }?> >None</option>
<option value="light"<?php if($member_row['starch']=='light') {?> selected="selected"<?php }?> >Light</option>
<option value="medium"<?php if($member_row['starch']=='medium') {?> selected="selected"<?php }?> >Medium</option>
<option value="heavy"<?php if($member_row['starch']=='heavy') {?> selected="selected"<?php }?> >Heavy</option>
</select>
</div>
</div>


<div class="email"  style="width:100%">
<div style=" width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Finish</font></label>
</div>
<div >&nbsp;
<select id="finish" class="input" align="left" style="height: 30px; width: 130px; margin-top: 12px; " name="finish">
<option value="box" <?php if($member_row['finish']=='box') {?> selected <?php }?>>Box</option>
<option value="hanger" <?php if($member_row['finish']=='hanger') {?> selected <?php }?>>Hanger</option>
</select>
</div>
</div>


<div class="email"  style="width:100%">
<div style=" width:70%; float:left;">
  <label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Perform Alteration</font></label>
</div>
<div >&nbsp;
<select id="perform_alteration" class="input" align="left" style="height: 30px; width: 45px; margin-top: 12px; margin-left: 0px;" name="perform_alteration" >
<option value= "yes" <?php if($member_row['perform_alteration']=='1') {?> selected <?php }?>>Yes</option>
<option value="no" <?php if($member_row['perform_alteration']=='0') {?> selected <?php }?>>No</option>
</select>
</div>
</div>

<div class="email"  style="width:100%">
<div style="width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Pickup Place</font></label>
</div>
<div >&nbsp;
<select id="pick_up" class="input" align="left" style="height: 30px; width: 130px; margin-top: 12px; " name="pick_up" >
<option value= "front door" <?php if($member_row['want_to_pickup']=='front_door') {?> selected <?php }?>>Front Door</option>
<option value="Other" <?php if($member_row['want_to_pickup']=='Other') {?> selected="selected"<?php }?> >Other</option>
</select>
</div>
</div>


<!--<div class="email"  style="width:100%">
<div style="width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">PAY PAYLOAD*</font></label>
</div>
<div >&nbsp;
<select id="pay_load" class="input" align="left" style="height: 30px; width: 130px; margin-top: 12px; " name="pay_load" >
<option value= "every order" <?php if($member_row['pay_load']=='every order') {?> selected <?php }?>>every order</option>
<option value="once a month" <?php if($member_row['pay_load']=='once a month') {?> selected <?php }?>>once a month</option>
</select>
</div>
</div>-->


<div class="email"  style="width:100%">
<div style="width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Card Type</font></label></div>
<div >&nbsp;
<select id="state" class="input" align="left" style="height: 30px; width: 130px; margin-top: 12px; " name="card_type"  >
<option value="visa" selected <?php if($member_row['card_type']=='visa') {?> selected="selected"<?php }?>>VISA</option>

<option value="master"<?php if($member_row['card_type']=='master') {?>selected="selected" <?php }?>>MASTERCARD</option>
<option value="american"<?php if($member_row['card_type']=='american') {?>selected="selected" <?php }?>>AMERICAN</option>
<option value="discovery"<?php if($member_row['card_type']=='discovery') {?>selected="selected" <?php }?>>DISCOVERY</option>
</select>
</div>
</div>

<div class="email"  style="width:100%">
<div style="width:40%; float:left;">
<label style="font-size: 12px; margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Card Holder Name</font></label></div>
<div >
<input id="Card_name" class="input" type="text" name="card_name" value="<?=$c_name?>" style="height: 30px; width: 130px; margin-top: 12px;">
</div>
</div>

<div class="email"  style="width:100%">
<div style="width:40%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">Card Number</font></label></div>
<div >
<?
$card=substr($c_number, -4);
?>
<input id="card_number" class="input" type="text" style="height: 30px; width: 130px;"
 value="XXXXXXXXXX<?=$card?>" name="card_number" onBlur="mesage()">
<input id="cardnumberh" class="input"  type="hidden" style="height: 30px; width: 130px;" value="<?=$c_number ?>" name="card_number">
</div>
</div>
<div class="email"  style="width:100%">
<div style="width:40%; float:left;">
<label style="margin-left: 10px; font-size:14px;"><font style="font-family:myFirstFont; font-size:14px;">Expiration Date (MM/YY)</font></label>
</div>

<div style="width:20%; float:left;" >
<input id="expiration_date" class="input" type="text" name="expiration_date" style="height: 30px; width: 46px; margin-top: -5px; " value="<?php echo $expiration_date  ?>">
</div>
<div style="width:10%; float:left;">
<label style="margin: 0px 1px 0px 0px;"><font style="font-family:myFirstFont; font-size:14px;">CVV</font></label>
</div>
<div style="vertical-align:text-top;">
<input id="cgv" class="input" type="text" style="height: 30px; width: 38px; margin-top: -5px;" value="<?=$cgv ?>" name="cgv">
</div>
</div>



<!--
<div class="email"  style="width:100%">
<div style="width:50%; float:left;">
<label style="margin-left: 10px;"><font style="font-family:myFirstFont; font-size:14px;">payment later*</font></label>
</div>
<div >

<select id="payment_later" class="input" align="left" style="height: 30px; width: 90px; margin-top: 12px; margin-left: 18px;" name="payment_later" >
<option value="1" <?php if($result['payment_option']=='1') {?>selected="selected"<?php }?>>yes</option>
<option value="0"<?php if($result['payment_option']!='1') {?>selected="selected"<?php }?>>no</option>
</select>
</div>
</div>-->

<p class="mar" style="">
  <input type="submit" name="edit" id="previous"  value="SAVE">
  <a href="home.php" style="text-decoration:none"><input type="button" name="home" id="NEXT" value="HOME"> </a></p>
</form></body></html>