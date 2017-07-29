<?php
require_once('include/connectdb.php');
$id=$_GET['id'];
$query=$con_pdo->prepare("select * from member where id = '$id'");
$query->execute();
$run=$_GET['count'];
if($run==!1)
{
	header('location:http://m.bluehangers.com/wp-admin/index.php');
}

/* Exercise PDOStatement::fetch styles */
//print("PDO::FETCH_ASSOC: ");
//print("Return next row as an array indexed by column name\n");
$result = $query->fetch(PDO::FETCH_ASSOC);
//$result['zip_code'];
if(isset($_POST['submit'])){	
	$f_name= $_POST['f_name'];
	$l_name= $_POST['l_name'];
	$address= $_POST['address'];
	$city= $_POST['city'];
	$state= $_POST['state'];
	$phone= $_POST['phone'];
	
	$zipcode= $_POST['zip_code'];
	$password= $_POST['password'];
	$email= $_POST['email'];
	$pants= $_POST['pants'];
	$starch= $_POST['starch'];
	$finish= $_POST['finish'];
	$perform_alteration= $_POST['perform'];
	
	$pickup= $_POST['pickup'];
	
	
	$card_type= $_POST['card_type'];
	$card_name= $_POST['card_name'];
	$card_number= $_POST['card_number'];
	$expiration_date= $_POST['expiration_date'];	
                $cgv=$_POST['cgv'];
	$payment_later= $_POST['payment_later'];
	//echo $payment_later;
	
	
	
	
	
	

 $sql = "UPDATE member SET first_name = '$f_name', 
            last_name = '$l_name', 
            address = '$address',  
            city = '$city',  
            phone = '$phone',
			zip_code='$zipcode',
			password= '$password',
			email = '$email',
			state ='$state',
			pants ='$pants',
			starch ='$starch',
			finish ='$finish',
			perform_alteration ='$perform_alteration',
			want_to_pickup='$pickup',
			pay_load ='$payload',
			card_type ='$card_type',
			card_name ='$card_name',
			card_number ='$card_number',
			expiration_date ='$expiration_date ',
			cgv=' $cgv',
			payment_later='$payment_later'
			where id = '$id'";
			
			
			
			$rec=mysql_query($sql);
			//echo $sql;
			
			

			
	 


header('Location: customer_list.php');
}
if($_GET['act']=='del'){
	
	
	$id=$_GET['id'];
	
	mysql_query("delete from member where id = '$id'");

	header("location:customer_list.php");	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CUSTOMER DETAIL PROFILE</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
function validation(){
f_name=document.getElementById('f_name').value;
l_name=document.getElementById('l_name').value;
address=document.getElementById('address').value;
city=document.getElementById('city').value;
state=document.getElementById('state').value;
phone=document.getElementById('phone').value;
zipcode=document.getElementById('zipcode').value;
password=document.getElementById('password').value;
pants=document.getElementById('pants').value;
starch=document.getElementById('starch').value;
finish=document.getElementById('finish').value;
pay_period=document.getElementById('pay_period').value;
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

if(pay_period==''){
alert('Please enter Pay Period!');
document.getElementById('pay_period').focus();
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

</head>

<body>
<div class="container" style="background:#F9F9F9;">

<div class="row" style="background:#1E5AA7">
<div class="col-xs-4" style="float:left;"><img src="img/grid02.jpg" style="margin-top: 12px;"></div>
<div class="col-xs-8"><h3 style="color: #FFF;">CUSTOMER DETAIL PROFILE</h3></div>
</div>

<div class="row" style="margin-top:10%;">

<form class="form-horizontal" role="form" onsubmit="return validation()" method="post">
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="f_name">FIRST NAME</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="f_name" name="f_name" value="<?= $result['first_name'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="l_name">Last NAME</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="l_name" name="l_name" value="<?= $result['last_name'] ?>">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="address">ADDRESS</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="address" name="address"  value="<?= $result['address'] ?>">
      </div>
    </div>
    
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="city">CITY</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="city" name="city" value="<?= $result['city'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="state">STATE</label>
      <div class="col-xs-8">          
       <select id="state" class="" align="left" name="state" style="height: 30px; width: 60px; margin-top: 2px; margin-left:-3px">
<option >CA</option>
<option>UA</option>
<option>DA</option>

<option value="CA" <?php if($result['state']=='CA') {?> selected="selected"<?php }?>>CA</option>
<option value="UA" <?php if($result['state']=='UA') {?> selected="selected"<?php }?>>UA</option>
<option value="DA" <?php if($result['state']=='DA') {?> selected="selected"<?php }?> >DA</option>
</select>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="phone">PHONE</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="phone" name="phone" value="<?= $result['phone'] ?>">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="email">EMAIL</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="email" name="email" value="<?= $result['email'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="zipcode">ZIP CODE</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="zipcode" name="zip_code" value="<?= $result['zip_code']?>">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="password">PASSWORD</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="password" name="password" value="<?= $result['password'] ?>">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="pants">PANTS</label>
      <div class="col-xs-8">          
       <select id="pants" class="input" align="left" style="height: 30px; width: 127px; margin-top: 2px; margin-left: 34px;" name="pants" >
<option value="carease" <?php if($result['pants']=='carease') {?> selected="selected"<?php }?>>carease</option>
<option value="no_carease" <?php if($result['pants']=='no_carease') {?> selected="selected"<?php }?>>no_carease</option>
<option value="no_preference" <?php if($result['pants']=='no_preference') {?> selected="selected"<?php }?> >no_preference</option>

</select>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="starch">STARCH</label>
      <div class="col-xs-8">          
<select id="starch" class="input" align="left" style="height: 30px; width: 127px; margin-top: 8px; margin-left: 22px;" name="starch" >
<option value="light"<?php if($result['starch']=='none') {?> selected="selected"<?php }?> >none</option>
<option value="light"<?php if($result['starch']=='light') {?> selected="selected"<?php }?>>light</option>
<option value="medium"<?php if($result['starch']=='medium') {?> selected="selected"<?php }?>>medium</option>
<option value="heavy"<?php if($result['starch']=='heavy') {?> selected="selected"<?php }?>>heavy</option>
</select>
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="finish">FINISH</label>
      <div class="col-xs-8">          
        <select id="finish" class="input" align="left" style="height: 30px; width: 127px; margin-top: 12px; margin-left: 35px;" name="finish">
<option value="box" <?php if($result['finish']=='box') {?>selected="selected"<?php }?>>box</option>
<option value="hanger" <?php if($result['finish']=='hanger') {?> selected="selected"<?php }?>>hanger</option>
</select>
      </div>
    </div>
   
    <div class="form-group">
      <label class="control-label col-xs-4" for="perform">Perform Alteration Up $5 As Necessary  </label>
      <div class="col-xs-8">          
        <select id="perform" class="input" align="left" style="height: 30px; width: 127px; margin-top: 12px; margin-left: 35px;" name="perform">
<option value="yes" <?php if($result['perform_alteration']=='yes' || $result['perform_alteration']=='1') {?>selected="selected"<?php }?>>yes</option>
<option value="no" <?php if($result['perform_alteration']=='no' || $result['perform_alteration']=='0') {?> selected="selected"<?php }?>>no</option>
</select>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4" for="pickup">Pick up Place </label>
      <div class="col-xs-8">          
       <select id="pickup" class="input" align="left" style="height: 30px; width: 127px; margin-top: 2px; margin-left: 34px;" name="pickup" >
<option value="Front Door" <?php if($result['want_to_pickup']=='front_door') {?> selected="selected"<?php }?> >Front Door</option>
<option value="other" 
<?php if($result['want_to_pickup']==$result['want_to_pickup']) {?> selected="selected"<?php }?> ><?=$result['want_to_pickup']?></option>
</select>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="pay_period">Pay Period  </label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="pay_period" name="pay_period" value="<?php if($result['payment_option']== '1'){?> Every Order<?php } elseif($result['payment_option']== '2') { ?> Once a month for outstanding balance <?php } else {?> - <?php } ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="card_type">CARD TYPE </label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="card_type" name="card_type" value="<?= $result['card_type'] ?>">
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="card_name">CARD HOLDER'S NAME </label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="card_name" name="card_name" value="<?= $result['card_name'] ?>">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="card_number">CARD NUMBER </label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="card_number" name="card_number" value="<?= $result['card_number'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="expiration_date"> Expiration Date </label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="expiration_date" name="expiration_date" value="<?= $result['expiration_date'] ?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="expiration_date"> CVV </label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" name="cgv" id="cgv" name="expiration_date" value="<?= $result['cgv'] ?>">
      </div>
    </div>

    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="payment_later"> PAYMENT LATER </label>
      <div class="col-xs-8" style="width:30%">  
      <select class="form-control" id="payment_later" name="payment_later">
    <option value="yes" <?php if($result['payment_later']== 'yes') {?> selected="selected" <?php } ?>>YES</option>
    <option value="no" <?php if($result['payment_later']!= 'yes') {?> selected="selected" <?php } ?>>NO</option>
    </select>
    </div>
    </div>
    
    
    
    
    
   
   
    <div class="form-group">        
      <div class="col-xs-6" align="center";>
        <button type="submit" name="submit" class="btn btn-default" style="width:90%; background:#24AAE1; color:#FFF;">EDIT</button>
      </div>
      
      <div class="col-xs-6" align="center";>
       <a href="customer_profile.php?act=del&id=<?= $result['id']?>"> <button type="button" class="btn btn-default" style="width:90%; background:#24AAE1; color:#FFF;" onclick="return confirm('Are you sure you want to delete?');">DELETE</button></a>
      </div>
    </div>
  </form>
  </div>
  
</div>


</body>
</html>