<?php
session_start();
require_once('include/connectdb.php');
include('pager.php');


$phone= trim($_POST['search']);
$result = mysql_query("select * from order_detail where phone ='$phone'");
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
});
}
</script>
</head>

<body>
<div class="container-fluid" style="background:#F9F9F9;">

<div class="row" style="background:#1E5AA7">
<div class="col-xs-4" style="float:left;"><img src="img/grid02.jpg" style="margin-top: 12px;"></div>
<div class="col-xs-8"><h3 style="color: #FFF;">ORDER LIST </h3></div>
</div>






<div class="row"  >
    <div style="width:10%; float:left; text-align: center;">ID</div>
    <div style="width:29%; float:left; text-align: center;">PHONE</div>
    <div style="width:15%; float:left; text-align: center;">NoBag</div>
    <div style="width:14%; float:left; text-align: center;">Other</div>
    <div style="width:15%; float:left; text-align: center;" >Pickup</div>
    <div style="width:15%; float:left; text-align: center;">Delivery</div>
</div>

<hr />
<?php 

$i=0;
while($admin_row= mysql_fetch_assoc($result))
{ 

?>


<div class="row" >
    <div style="width:10%; float:left; text-align: center; margin-left:1px" ><a href="order_detail?order_id=<?=$admin_row['order_no']?>"><?=$admin_row['order_no']?></a></div>
    <div style="width:30%; float:left; text-align:right;margin-left:1px"><?=$admin_row['phone']?></div>
    <div style="width:15%; float:left; text-align: center;"><input type="radio" name="radiog_dark1_<?=$i?>" id="radio1_<?=$i?>" onclick="check_black(<?=$i?>)"  /><label for="radio1" class="css-label radGroup2"></label></div>
    <div style="width:14%; float:left; text-align: center;"><input type="radio" name="radiog_dark_2_<?=$i?>" id="radio2_<?=$i?>" onclick="check_green(<?=$i?>)" /><label for="radio2" class="css-label radGroup2"></label></div>
    <div style="width:15%; float:left; text-align: center;" ><input type="radio" name="radiog_dark_3_<?=$i?>" id="radio3_<?=$i?>" onclick="check_blue(<?=$i?>)" /><label for="radio3" class="css-label radGroup2"></label></div>
    <div style="width:15%; float:left; text-align: center;"><input type="radio" name="radiog_dark_4_<?=$i?>" id="radio4_<?=$i?>" onclick="check_red(<?=$i?>)" /><label for="radio4" class="css-label radGroup2"></label></div>
</div>
<hr />
<?php   } ?>





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