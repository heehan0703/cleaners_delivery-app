<?php
session_start();
require_once('include/connectdb.php');
$id=$_POST['id'];
$sta=$_POST['stat'];
if($sta=='1')
{
	$orderstatus='pickup';
	$pickupdate=date("Y/M/d");
}else{
	$orderstatus='Pickup_request';
	$pickupdate='';
	}
mysql_query("update order_detail set order_status='$orderstatus',pick_up_date='$pickupdate' where id='$id'");
$row=mysql_fetch_array(mysql_query("select * from order_detail where id='$id'"));
$email=$row['email'];
//$to="jaysbaek@yahoo.com";
$to = $email;
//$to = "amit91550@gmail.com";
$subject = "PICK-UP CONFIRMATION";
 $message="Hi ". $row['f_name']. "\n "."\n
<br>
Yay! We are successfully received your laundry bag, and your order is on its way to the dry cleaners! <br>\n\n We promise to deliver fresh and clean results at your designated delivery date.\n\n
<br>Questions or concerns?\n\n<br>

Feel free to reply to this email!\n\n<br><br><br>
\n\n Thank you.<br>

(c) 2015 Blue Hangers, Inc. | San Diego, CA 92129¡± ";

//$headers = "From: Bluehangers.com " . "\r\n" .
$headers .= 'From: Blue Hangers <info@bluehangers.com>' . "\r\n";
   $headers .= 'MIME-Version: 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";




mail($to,$subject,$message,$headers);
?>