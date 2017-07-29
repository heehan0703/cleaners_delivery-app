<?php
require_once('include/connectdb.php');

$id=$_GET['order_id'];

$query=$con_pdo->prepare("select * from order_detail where order_no = '$id'");
$query->execute();

/* Exercise PDOStatement::fetch styles */
//print("PDO::FETCH_ASSOC: ");
//print("Return next row as an array indexed by column name\n");
$result = $query->fetch(PDO::FETCH_ASSOC);



if(isset($_POST['submit'])){

	
	
	$phone= $_POST['phone'];
	$f_name= $_POST['f_name'];
	$l_name= $_POST['l_name'];
	$dry_clean=$_POST['dry_cleaming'];
	$households=$_POST["households"];
	$alterlation=$_POST["radiog_dark"];
	$memo=$_POST['memo'];
	$delivery_date=$_POST['delivery_date'];
	$total_amount= $_POST['total_amount'];
	$deliveryoption= $_POST['deliveryoption'];

	$sql = "UPDATE order_detail SET phone = '$phone', f_name = '$f_name', l_name = '$l_name',  dry_cleaning_laundry ='$dry_cleaming', households ='$households', alterlation='$alterlation',memo= '$memo',delivery_date_want ='$delivery_date',total_amount ='$total_amount',delivery_type='$deliveryoption' where order_no = '$id'";
	
	

$stmt = $con_pdo->prepare($sql);                                  
$stmt->execute(); 



header("Location:http://s584682460.onlinehome.us/wp-admin/order_list.php");



	
	
	
}
if(isset($_POST['delete'])){





	
	
	
	
	
	$sql = "delete from order_detail where order_no=$id";
	
	

$stmt = $con_pdo->prepare($sql);                                  
$stmt->execute(); 


	
header("Location:/wp-admin/order_list.php");
	
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CUSTOMER ORDER DETAIL</title>
<link rel="stylesheet" href="../style.css"/>
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


}
</script>
<style type="text/css">
.myCheckbox input {
    display: none;
}

.myCheckbox span {
    width: 21px;
    height: 21px;
    display: block;
	padding-left:26px;
    background: url(../images/blue_button.png);
	background-repeat:no-repeat;
	background-position: 0 0;
}

.myCheckbox input:checked + span {
    background: url(../images/blue_button.png);
	background-position: 0 -21px;
	background-repeat:no-repeat;
}
</style>
</head>

<body>
<div class="container-fluid" style="background:#F9F9F9;">

<div class="row" style="background:#1E5AA7">
<div class="col-xs-4" style="float:left;"><img src="img/grid02.jpg" style="margin-top: 12px;"></div>
<div class="col-xs-8"><h3 style="color: #FFF;">CUSTOMER ORDER DETAIL</h3></div>
</div>

<div class="row" style="margin-top:10%; margin-left:2%;">

<form class="form-horizontal" role="form" onsubmit="return validation()" method="post">
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="order_id">ORDER #</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="order_id" name="order_id" value="<?= $result['order_no'] ?>" disabled="disabled">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="phone">PHONE</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="phone" name="phone" value="<?= $result['phone'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="f_name">FIRST NAME</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="f_name" name="f_name" value="<?= $result['f_name'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="l_name">LAST NAME</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="l_name" name="l_name" value="<?= $result['l_name'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="dry_cleaming">DRY CLEAMING LANDRY <?=$result['dry_cleaning_laundry'];?></label>
      <div class="col-xs-8" style="width:30%">  
      <select class="form-control" id="dry_cleaming" name="dry_cleaming">
    <option  value="Laundry"<?php if($result['dry_cleaning_laundry']=='Laundry'){echo "dhirendra"; ?> selected <?php }?>>YES</option>
    <option value="0" <?php if($result['dry_cleaning_laundry']!='Laundry') {?> selected="selected"<?php }?>>NO</option>
    </select>
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="households">HOUSEHOLDS</label>
      <div class="col-xs-8" style="width:30%">  
      <select class="form-control" id="households" name="households">
    <option value="1" <?php if($result['households']=='House') {?> selected <?php }?>>YES</option>
    <option value="0" <?php if($result['households']!='House') {?> selected <?php }?>>NO</option>
    </select>
      </div>
    </div>
    
    
    
    <div class="form-group">
     <label class="control-label col-xs-4 text-center" for="alterlation">ALTERLATION</label>
      <div class="col-xs-8"> 
       <label class="myCheckbox">
    <input type="checkbox" name="RadioGroup3" value="<?=$result['alterlation']?>" <? if($result['alterlation']=="Hem"){ ?>checked="checked" <? } ?>/><span><font color="#9F9E9A" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Hem</font></span> 
</label>

 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
   <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_sew"  value="<?=$result['Alterlation_sew']?>"  <? if($result['Alterlation_sew']=="Sew"){ ?>checked="checked" <? } ?> />
    <span><font color="#9F9E9A" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Sew</font></span> 
</label>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
  <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_button" value="<?=$result['Alterlation_button']?>" <? if($result['Alterlation_button']=="Button"){ ?>checked="checked" <? } ?>  />
    <span><font color="#9F9E9A" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Button</font></span>
</label>


   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 

 
 <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_zipper"  value="<?=$result['Alterlation_zipper']?>" <? if($result['Alterlation_zipper']=="Zipper"){ ?>checked="checked" <? } ?> />
   <span><font color="#9F9E9A" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Zipper</font></span> 
</label>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <label class="myCheckbox">
    <input type="checkbox" name="Alterlation_etc" value="<?=$result['Alterlation_etc']?>"  <? if($result['Alterlation_etc']=="Etc"){ ?>checked="checked" <? } ?> />
    <span><font color="#9F9E9A" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; ">Etc</font></span> 
</label>
  
      </div>
      </div>
   
    
    
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="memo">MEMO</label>
      <div class="col-xs-8">          
        <input type="test" class="form-control" id="memo" name="memo" value="<?= $result['memo'] ?>">
      </div>
    </div>
    
    
    
   
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="delivery_date">DELIVERY DATE</label>
      <div class="col-xs-4" style="float:left;">  
      
      
      
            
        <input type="test" class="form-control" id="delivery_date" name="delivery_date" value="<?= $result['delivery_date_want'] ?>">
          </div>
        <div class="col-xs-4">  
        <!-- <button type="button" name="date_update" class="btn btn-default" style="width:70%; background: #009; color: #FFF;">UPDATE</button>-->
      
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="delivery_option">Delivery option</label>
      <div class="col-xs-8">    
      
        
         <select name="selectbox2" >
        <option value="">Please select</option>
        <option value="ajax">Ajax</option>
        <option value="json">Json</option>
        <option value="jquery">jQuery</option>
        <option value="php"   >PHP</option>
        <option value="html" selected="selected">HTML</option>
    </select> 
      </div>
    </div>
    
    
    
    <div class="form-group" style="margin-top:20px;">
      <label class="control-label col-xs-4 text-center" for="total_amount">TOTAL AMOUNT</label>
      <div class="col-xs-4" style="float:left;">          
        <input type="test" class="form-control" id="total_amount" name="total_amount" value="<?= $result['total_amount'] ?>">
          </div>
        <div class="col-xs-4">  
         <!--<button type="button" class="btn btn-default" style="width:70%; background: #009; color: #FFF">UPDATE</button>-->
      
      </div>
    </div>
    
    
    
    
    
    
   
   
    <div class="form-group" style="margin-top: 5%;">        
      <div class="col-xs-6" align="center";>
        <button type="submit" name="submit" class="btn btn-default" style="width:90%; background:#24AAE1; color:#FFF;" >EDIT</button>
      </div>
      
      <div class="col-xs-6" align="center";>
        <button type="submit" class="btn btn-default" name="delete" style="width:90%; background:#24AAE1; color:#FFF;">DELETE</button>
      </div>
    </div>
    
    
    
     <div class="form-group" align="center";>
      
      <div class="col-xs-12">          
        <a href="">Go To Menu</a>
      </div>
    </div>
  </form>
  </div>
  
</div>


</body>
</html>