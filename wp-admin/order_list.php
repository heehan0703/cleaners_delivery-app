<?php
session_start();
require_once('include/connectdb.php');
include('pager.php');
$run=$_GET['count'];
if($run==!1)
{
	header('location:http://m.bluehangers.com/wp-admin/index.php');
}
$product_date =mysql_query(dopaging("select distinct DATE_FORMAT(FROM_UNIXTIME(`order_date`), '%m-%d-%Y') as date from order_detail order by date desc",5));

$sql=mysql_query(dopaging("select * from member order by id DESC",5));

//$sql=mysql_query("select * from order_detail order");
?>
<!doctype html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="../skin/square/blue.css" rel="stylesheet">
<link href="../skin/square/square.css" rel="stylesheet">
<link href="../skin/square/green.css" rel="stylesheet">
<link href="../skin/square/red.css" rel="stylesheet">
<script type="text/javascript" src="../icheck.js"></script>
<title>PICK UP</title>
<style type="text/css">
body,h1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
body{
	margin:opx 0px opx opx;
	padding:0px 0px 0px 0px
	}
	
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
<script language="javascript">
function check_black(i)
{
 $(document).ready(function(){
  
  var id = $('#radio4_'+i).val();
 
	$.ajax({   
       type: 'POST',   
       url: 'ajax_order_nobag.php',   
       data: {id:id ,stat:'complete'}
    });
  
});
}


</script>
<script>

function check_green(i){

}


</script>



<script language="javascript">
function check_blue(i){
  var id = $('#radio3_'+i).val();
 //alert(""+id);
 if($('#radio3_'+i).is(':checked')) {
   var stat=1;
  //alert("dhirendra"+stat);
} else {
    var stat=0;
	//alert("shashi"+stat);
}
	$.ajax({   
       type: 'POST',   
       url: 'ajax_order_pick_up.php',   
       data: {id:id ,stat:stat}
    });

}


</script>

<script>
function check_red(i){

  var id = $('#radio4_'+i).val();
 if($('#radio4_'+i).is(':checked')) {
   var stat=1;
 // alert("dhirendra");
} else {
    var stat=0;
	//alert("shashi"+stat);
}
	$.ajax({   
       type: 'POST',   
       url: 'ajax_order_complete.php',   
       data: {id:id ,stat:stat}
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
        <?php
		$search=$_POST['search'];
        
		?>
      </div>
      <div class="col-xs-4">
        <button type="submit" name="submit" class="btn btn-default" style="background:#24AAE1; color:#FFF;">Search</button>
      </div>
    </div>
</form>
</div>



<div class="col-xs-12" style=" font-size:8px;">
<div class="row" style=" font-size:12px; margin-left:0px" >


    <div class="col-xs-1" style="width:9%; float:left; font-size:9px; margin-left:-25px; " >ID</div>
    <div class="col-xs-2"  style="width:20%; float:left; margin-left:-8px; font-size:9px; ">Phone</div>
    <div class="col-xs-2"  style="width:11%; float:left; margin-left:-2px;font-size:9px;  ">Address</div>
    
    <div class="col-xs-1" style="width:13%; float:left; margin-left:48px; font-size:9px;">NoBag</div>
    <div class="col-xs-2"  style="width:10%; float:left;margin-left:-5px;font-size:9px; ">Other</div>
    <div class="col-xs-2"  style="width:13%; float:left; margin-left:-2px; margin-top:0px;font-size:9px;">Pickup</div>
    <div class="col-xs-2" style="width:13%; float:left; margin-left:-4px; font-size:9px; ">Delivery</div>
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
$sql=mysql_query("select id, order_no, dry_cleaning_laundry, households, alterlation, memo, DATE_FORMAT(FROM_UNIXTIME(`order_date`), '%m-%d-%Y'), delivery_date_want, pick_up_date, total_amount, payment_status, customer_id, f_name, l_name, email, phone, address,order_status,nobag,complete,delivery_type from order_detail where DATE_FORMAT(FROM_UNIXTIME(`order_date`), '%m-%d-%Y') ='$admin_date[date]' order by order_no desc ");



while($admin_row= mysql_fetch_assoc($sql)){
$i++;
$member_id=$admin_row['customer_id'];


$mem_row=mysql_fetch_array(mysql_query("select * from member where id='$member_id'"));


?>
<div class="row" style="margin-left:0px; font-size:9px;">
    <div style="width:15%; float:left;  margin-left:0px; font-size:!important" >
    <a href="order_detail?order_id=<?=$admin_row['order_no']?>&count=<?=$run?>"><?=$admin_row['order_no']?></a>
    </div>
    
    
    <div style="width:22%; float:left; margin-left:-8px; "><?=$admin_row['phone']?><font color="#FFFFFF">.</font></div>
    <div style="width:16%; float:left; "> <a href="http://maps.google.com/?q=<?=$admin_row['address']?>" target="_blank"><?=$admin_row['address']?></a><font color="#FFFFFF">.</font></div>
   
    <div style="width:8%; float:left; margin-left:11px;">
      <label class="myCheckbox">
    <input type="checkbox" name="radiog_dark1_<?=$i?>" id="radio1_<?=$i?>" onclick="check_black(<?=$i?>)"  class="radio1" 
     <? if($admin_row['nobag']=='1'){?> checked="checked"  <? } ?> />
    <span></span> 
</label>
    
    
    </div>
    
    <div style="width:8%; float:left;">
    
    
    
    
    
     <label class="myCheckbox">
    <input type="checkbox" name="radiog_dark_2_<?=$i?>" id="radio2_<?=$i?>" class="radio2" onclick="check_green(<?=$i?>)" <? if(($mem_row['want_to_pickup']!='front_door')&&($mem_row['want_to_pickup']!='')){?> checked="checked"  <? } ?>  />
    <span></span> 
</label>
    
    
    
    
   
    
    </div>
    <div style="width:8%; float:left; " >
    
     <label class="myCheckbox">
    <input type="checkbox" name="radiog_dark_3_<?=$i?>" id="radio3_<?=$i?>" onclick="check_blue(<?=$i?>)"
     value="<?=$admin_row['id']?>" <? if($admin_row['order_status']=='pickup'){?> checked="checked" <? } ?> />
    <span></span> 
</label>
    
   
   </div>
    <div style="width:10%; float:left; ">
     <label class="myCheckbox">
    <input type="checkbox" name="radiog_dark_4_<?=$i?>" id="radio4_<?=$i?>" onclick="check_red(<?=$i?>)"  
    value="<?=$admin_row['id']?>"
     <? if($admin_row['complete']=='1'){?> checked="checked" <? } ?>/>
    <span></span>
</label>
    </div>
    <? if($admin_row['delivery_type']=='sameday'){ ?>
    <div style="float:left; text-align:left;"><font size="+1" color="#FF0000"><b>S</b></font></div><? }?>
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