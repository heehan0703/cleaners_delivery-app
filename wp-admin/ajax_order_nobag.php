
<?php
session_start();
require_once('include/connectdb.php');
$id=$_POST['id'];

mysql_query("update order_detail set nobag='1' where id='$id'"); 
$row=mysql_fetch_array(mysql_query("select * from order_detail where id='$id'"));
$email=$row['email'];
$name=$row['f_name'];
/*$email="jaysbaek@yahoo.com";
$to      = $email;
$subject = 'sorry we could not complete your order';
$message = 'sir \n we could not complete your order ';
$headers = 'From: webmaster@blubangers.com' . "\r\n" .
    'Reply-To: jaysbaek@yahoo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
*/
?>
<?php
//$to = $email;
$to=$email;
//$to='jsbbhatirohit47@gmail.com';

//$to = 'email';
$from = "Bluehangers.com";
$subject ="WE MISSED YOUR PICK-UP. THERE WILL BE A $5.00 SERVICE CHARGE.";

$body = "<html><body>
        
          <table>
          <tr><td> Dear $name <br>
            Uh-oh! It seems that you had forgotten to leave your order at your designated area of pick-up!<br> We unfortunately have to charge you a $5.00 service fee.<br> 
		    In order to provide efficient service to all our customers,<br> please remember to leave your laundry bag at your designated area of pick-up prior to our arrival.<br>
		   
Questions or concerns?<br> 
 
Feel free to reply to this email!<br><br>
<br>Sincerly
<br>BlueHangers.com

</td></tr>
          </table>
           </body></html>";

$headers .= 'From: Blue Hangers <info@bluehangers.com>' . "\r\n";
   $headers .= 'MIME-Version: 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
   
  
        mail($to,$subject,html_entity_decode($body),$headers);
  
?>

