<?php
session_start();
require_once('include/connectdb.php');
include('pager.php');


$product_date =mysql_query(dopaging("select distinct DATE_FORMAT(FROM_UNIXTIME(`order_date`), '%m-%d-%Y') as date from order_detail order by date desc",5));

$sql=mysql_query(dopaging("select * from member order by id DESC",5));

//$sql=mysql_query("select * from order_detail order");

 

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ORDER LIST</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link href="../skin/square/blue.css" rel="stylesheet">
<link href="../skin/square/square.css" rel="stylesheet">
<link href="../skin/square/green.css" rel="stylesheet">
<link href="../skin/square/red.css" rel="stylesheet">
<script type="text/javascript" src="../icheck.js"></script>

<style>

body{
	margin:opx 0px opx opx;
	padding:0px 0px 0px 0px
	}
</style>


<script type="text/javascript">


function validation(){
email=document.getElementById('email').value;
password=document.getElementById('pwd').value;

if(email==''){
alert('Please enter User Name!');
document.getElementById('email').focus();
return false;
}

if(password==''){
alert('Please enter Password!');
document.getElementById('pwd').focus();
return false;
}



}
</script>
<script>
function check_black(i)
{
$(document).ready(function(){
  $('#radio1_'+i).iCheck({
    checkboxClass: 'icheckbox_square',
	 radioClass: 'iradio_square',
    increaseArea: '20%' // optional
  });
 });
 $(document).ready(function(){
  $('#radio1_'+i).iCheck({
    checkboxClass: 'icheckbox_square',
	 radioClass: 'iradio_square',
    increaseArea: '20%' // optional
  });
});
}
</script>
<script>

function check_green(i){
$(document).ready(function(){
  $('#radio2_'+i).iCheck({
    checkboxClass: 'icheckbox_square',
    radioClass: 'iradio_square',
    increaseArea: '20%' // optional
  });
});

$(document).ready(function(){
  $('#radio2_'+i).iCheck({
    checkboxClass: 'icheckbox_square-red',
    radioClass: 'iradio_square-green',
    increaseArea: '20%' // optional
  });
});
}
</script>

<script>
function check_blue(i){
$(document).ready(function(){
  $('#radio3_'+i).iCheck({
    checkboxClass: 'icheckbox_square',
    radioClass: 'iradio_square',
    increaseArea: '20%' // optional
  });
});

$(document).ready(function(){
  $('#radio3_'+i).iCheck({
    checkboxClass: 'icheckbox_square-red',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' // optional
  });
  var id = $('#radio4_'+i).val();
	$.ajax({   
       type: 'POST',   
       url: 'ajax_order_pick_up.php',   
       data: {id:id ,stat:'complete'}
    });
});
}
</script>

<script>
function check_red(i){
$(document).ready(function(){
  $('#radio4_'+i).iCheck({
    checkboxClass: 'icheckbox_square',
    radioClass: 'iradio_square',
    increaseArea: '20%' // optional
  });
});

$(document).ready(function(){
  $('#radio4_'+i).iCheck({
    checkboxClass: 'icheckbox_square-red',
    radioClass: 'iradio_square-red',
    increaseArea: '20%' // optional
	
	
  });
  var id = $('#radio4_'+i).val();
	$.ajax({   
       type: 'POST',   
       url: 'ajax_order_complete.php',   
       data: {id:id ,stat:'complete'}
    });
});
}
</script>
</head>

<body>
 <div  style="background-color:#00aced;">
 <h1 style="margin-top:0px;height: 45px;padding-left: 15px; padding-top: 8.6px; alignment-adjust:central; font-size:24px;"> <img src="img/menu.png" width="30" height="28"><font color="#FFFFFF" style="margin-left: 17.6px; margin-top:-19px;">ORDER LIST</font></h1></div>
<div>
<div >
<form class="form-horizontal" role="form" action="search_order_list.php"  method="post">
    <div class="form-group">
      <div class="col-xs-8">
        <input type="text" class="form-control" id="search" name="search" placeholder="Enter Phone No">
      </div>
      <div class="col-xs-4">
        <button type="submit" name="submit" class="btn btn-default" style="background:#24AAE1; color:#FFF;">Search</button>
      </div>
    </div>
</form>
</div>



<div class="col-xs-12">
<div class="row" style=" font-size:12px; margin-left:0px" >


    <div class="col-xs-1" style="width:10%; float:left; margin-left:0px; " >ID</div>
    <div class="col-xs-1"  style="width:22%; float:left;  ">Phone</div>
    
    <div class="col-xs-2" style="width:15%; float:left;  ">NoBag</div>
    <div class="col-xs-2"  style="width:12%; float:left; ">Other</div>
    <div class="col-xs-2"  style="width:15%; float:left;" >Pickup</div>
    <div class="col-xs-2" style="width:15%; float:left;  ">Delivery</div>
    </div>
</div>

<hr />
<?php 

$i=0;
while($admin_date= mysql_fetch_assoc($product_date))
{ 

?>

<div class="row" style="margin: 0px 0px 0px opx; background:#999; padding-left:2%; padding-top: .5%; padding-bottom: .5%;">
<?= $admin_date['date']?></div>
<?php  
$sql=mysql_query("select id, order_no, dry_cleaning_laundry, households, alterlation, memo, DATE_FORMAT(FROM_UNIXTIME(`order_date`), '%m-%d-%Y'), delivery_date_want, pick_up_date, total_amount, payment_status, customer_id, f_name, l_name, email, phone, address,order_status from order_detail where DATE_FORMAT(FROM_UNIXTIME(`order_date`), '%m-%d-%Y') ='$admin_date[date]' order by order_no desc ");



while($admin_row= mysql_fetch_assoc($sql)){
$i++;
$member_id=$admin_row['customer_id'];


$mem_row=mysql_fetch_array(mysql_query("select * from member where id='$member_id'"));


?>
<div class="row" style="margin-left:0px;">
    <div style="width:18%; float:left;  margin-left:10px; font-size:!important" >
    <a href="order_detail?order_id=<?=$admin_row['order_no']?>"><?=$admin_row['order_no']?></a>
    </div>
    
    
    <div style="width:25%; float:left; "><?=$admin_row['phone']?></div>
   
    <div style="width:12%; float:left; margin-left:11px;">
    <input  type="checkbox" name="radiog_dark1_<?=$i?>" id="radio1_<?=$i?>" onclick="check_black(<?=$i?>)"  /><label for="radio1" class="css-label radGroup2"></label></div>
    
    <div style="width:12%; float:left;">
    <input  type="checkbox" class="icheckbox_square" name="radiog_dark_2_<?=$i?>" id="radio2_<?=$i?>" onclick="check_green(<?=$i?>)" <? if($mem_row['want_to_pickup']=='other_place'){?> checked="checked"  <? } ?> />
    <label for="radio2" class="css-label radGroup2"></label></div>
    <div style="width:10%; float:left; " >
    <input type="radio" name="radiog_dark_3_<?=$i?>" id="radio3_<?=$i?>" onclick="check_blue(<?=$i?>)"
     <? if($admin_row['order_status']=='pickup'){?> checked="checked" <? } ?>  />
    <label for="radio3" class="css-label radGroup2"></label></div>
    <div style="width:16%; float:left; ">
    <input type="radio" name="radiog_dark_4_<?=$i?>" id="radio4_<?=$i?>" onclick="check_red(<?=$i?>)"  value="<?=$admin_row['id']?>"
     <? if($admin_row['order_status']=='Complete'){?> checked="checked" <? } ?> />
    <label for="radio4" class="css-label radGroup2"></label></div>
</div>
<hr />
<?php   } ?>
<?php  } ?>




<div class="row" align="center">
 <?php  echo rightpaging(); ?>
</div>


<div class="row">        
      <div class="col-xs-12" align="center";>
        <a href="admin_menu.php" style="color:#FFF"><button type="submit" name="submit" class="btn btn-default" style="width:40%; background:#24AAE1; color:#FFF;">MENU</button></a>
      </div>
    </div>
</body>
</html>