<?php
session_start();
require_once('include/connectdb.php');
include('pager.php');
$run=$_GET['count'];
if($run==!1)
{
	header('location:http://m.bluehangers.com/wp-admin/index.php');
}



$sql=mysql_query(dopaging("select * from member order by id DESC",5));


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CUSTOMER LIST</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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

</head>

<body>
<div class="container" style="background:#F9F9F9;">

<div class="row" style="background:#1E5AA7">
<div class="col-xs-4" style="float:left;"><a href="admin_menu.php"><img src="img/grid02.jpg" style="margin-top: 12px;"></a></div>
<div class="col-xs-8"><h3 style="color: #FFF;">CUSTOMER LIST </h3></div>
</div>

<div class="row">
<form class="form-horizontal" role="form"  method="post" action="search_customer_list.php">
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




<div class="row" style="margin:2%"">
    <div class="col-xs-2">ID</div>
    <div class="col-xs-3">NAME</div>
    <div class="col-xs-3">PHONE</div>
    <div class="col-xs-4">ADDRESS</div>
</div>

<hr />
<?php while($admin_row= mysql_fetch_assoc($sql)) { ?>

<div class="row" style="margin:2%"">
    <div class="col-xs-2"><a href="cutomer_profile.php?id=<?=$admin_row['id']?>&count=<?=$run?>"><?= $admin_row['id'] ?></a></div>
    <div class="col-xs-3"><?= $admin_row['first_name'] ?></div>
    <div class="col-xs-3" style="padding: 0px;"><?= $admin_row['phone'] ?></div>
    <div class="col-xs-4"><?= $admin_row['address'] ?></div>
</div>
<hr />

<?php } ?>
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