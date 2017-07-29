<?php
session_start();
require_once('include/connectdb.php');
$run=$_GET['count'];
if($run==!1)
{
	header('location:http://m.bluehangers.com/wp-admin/index.php');
}

$query=$con_pdo->prepare("select * from admin_member where idx = 1");
$query->execute();

/* Exercise PDOStatement::fetch styles */
//print("PDO::FETCH_ASSOC: ");
//print("Return next row as an array indexed by column name\n");
$result = $query->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['submit'])){

	
	$f_name= $_POST['f_name'];
	$l_name= $_POST['l_name'];
	$address= $_POST['address'];
	$city= $_POST['city'];
	$state= $_POST['state'];
	$phone= $_POST['phone'];
	$zipcode= $_POST['zipcode'];
	$password= $_POST['password'];
	$email= $_POST['email'];
	$service_area= $_POST['service_area'];
	$facebook = $_POST['facebook'];
	
	
	
	$sql = "UPDATE admin_member SET f_name = '$f_name', 
            l_name = '$l_name', 
            address = '$address',  
            city = '$city',  
            phone = '$phone',
			zipcode= '$zipcode',
			admin_Pwd= '$password',
			admin_Id = '$email',
			state ='$state',
			service_zipcode ='$service_area',
			facebook ='$facebook'
			 where idx = 1";

$stmt = $con_pdo->prepare($sql);                                  
$stmt->execute(); 

header('Location: admin_menu.php');
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Setup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

</head>

<body>
<div class="container" style="background:#F9F9F9;">

<div class="row" style="background:#1E5AA7">
<div class="col-xs-4" style="float:left;"><a href="admin_menu.php"><img src="img/grid02.jpg" style="margin-top: 12px;"></a></div>
<div class="col-xs-8"><h3 style="color: #FFF;">ADMIN SETUP </h3></div>
</div>

<div class="row" style="margin-top:10%;">

<form class="form-horizontal" role="form" onsubmit="return validation()" method="post">
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="f_name">FIRST NAME</label>
      <div class="col-xs-8">
        <input type="text" class="form-control" id="f_name" name="f_name" value="<?= $result['f_name'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="l_name">Last NAME</label>
      <div class="col-xs-8">          
        <input type="text" class="form-control" id="l_name" name="l_name" value="<?= $result['l_name'] ?>">
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
        <input type="test" class="form-control" id="state" name="state" value="<?= $result['state'] ?>">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="email">PHONE</label>
      <div class="col-xs-8">          
        <input type="test" class="form-control" id="phone" name="phone" value="<?= $result['phone'] ?>">
      </div>
    </div>
    
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="email">EMAIL</label>
      <div class="col-xs-8">          
        <input type="test" class="form-control" id="email" name="email" value="<?= $result['admin_Id'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="zipcode">ZIP CODE</label>
      <div class="col-xs-8">          
        <input type="test" class="form-control" id="zipcode" name="zipcode" value="<?= $result['zipcode'] ?>">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="password">PASSWORD</label>
      <div class="col-xs-8">          
        <input type="test" class="form-control" id="password" name="password" value="<?= $result['admin_Pwd'] ?>">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="service_area">SERVICE AREA ZIPCODE</label>
      <div class="col-xs-8">          
        <input type="test" class="form-control" id="service_area" name="service_area" value="<?= $result['service_zipcode'] ?>">
      </div>
    </div>
   
   <div class="form-group">
      <label class="control-label col-xs-4 text-center" for="facebook">FACEBOOK</label>
      <div class="col-xs-8">          
        <input type="test" class="form-control" id="facebook" name="facebook" value="<?= $result['facebook'] ?>">
      </div>
    </div>
   
   
    <div class="form-group">        
      <div class="col-xs-6" align="center";>
        <button type="submit" name="submit" class="btn btn-default" style="width:90%; background:#24AAE1; color:#FFF;">EDIT</button>
      </div>
      
      <div class="col-xs-6" align="center";>
       <a href="admin_menu.php" style="color:#FFF"> <button type="button" class="btn btn-default" style="width:90%; background:#24AAE1; color:#FFF;">MENU</button></a>
      </div>
    </div>
  </form>
  </div>
  
</div>


</body>
</html>