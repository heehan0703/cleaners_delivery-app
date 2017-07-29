<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style type="text/css">
@media (max-width: 426px) {
	
	.send { margin-top:5px;
	}
}
form{
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

</style>

<?php
 session_start();
 require_once('wp-admin/include/connectdb.php');

 if(isset($_POST["save"]))
 {
 
$email = $_POST['email'];

$member = mysql_query("select * from member where email='$email'");
$member_details = mysql_fetch_assoc($member);
 $rowcount=mysql_num_rows($member);
 

	if($rowcount==1)
	 {
$member_email =$member_details['email'];

$member_password =$member_details['password'];
$to = $member_email;




		 
		$subject = "Your Bluehangers Password";
 $message="\n ".
"User Email Id and Password Details \n
Email :".$member_email."
Password :".$member_password."


\n \n
 

Bluehangers.com ";

//$res="Go to Pickup Request now!";
//$res1="Sincerely,";
//$res2="Bluehangers.com ";
  //  $message =" Hi :". $row['f_name']. "\n ". $sub. "\n ". $sub. "\n  ". $mess. "\n". $sub. "\n ". $sub. "\n ". $sub. "\n ". $sub. "\n  ".  $res1. "\n :". $sub. "\n  ". $res2. "\n" ;
$headers = "From: Bluehangers.com " . "\r\n" .
mail($to,$subject,$message,$headers);
		
		
      //  mail($to,$subject,html_entity_decode($body),$headers);
		echo "<script>alert('your email and password sent to your email adress')</script>";
	}
	else
	{
		echo "<script>alert('your emailid is not our database')</script>";
	}
		


 }

	 
  
 
 
 
 ?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FORGET PASSWORD</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript">
function validation(){
var Username=document.getElementById('email').value;

	if(Username==''){
		alert("please enter your email id");
	document.getElementById('email').focus();
	return false;
	}else{
		document.getElementById("forget").submit();
			}
}
</script>

<style type="text/css">

</style>
</head>

<body>
<div class="container-fluid" style="background:#F9F9F9; border:1px solid black; ">
  <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
    <div style="vertical-align:middle;  text-align:center; color:#FFF; float:left; width:90%;"> <font>Forget Password</font></div>
    <div style="float:left;"><a href="home.php" style="text-decoration:none;"><img src="images/home2.png" alt=""></a></div>
    <div style="clear:both;"></div>
  </div>
  <form  method="post" action="" name="form_1" id="forget" >
<div class="row">

<span style="color:#999999; font-weight:bold;margin-left: 13.2px;">Forget Password</span>
<div class="form-group">
      <label class="control-label col-sm-2 text-right" style="margin-left:20px" for="email" > Email:</label>
      <div class="col-sm-8 "  style="width:250px; margin-left:20px">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"></div>
         <div class="col-sm-2 send" style="margin-top:15px; margin-left:40px">
         <input  type="submit" class="btn btn-success" value="send" name="save" id="save" onClick="validation()">
         
         </div>
         
   
    
    </div>

</div>

    
</form>
</div><!--close container-->


</body>
</html>