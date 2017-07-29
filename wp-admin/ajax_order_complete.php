<?php
session_start();
require_once('include/connectdb.php');
$id=$_POST['id'];
$sta=$_POST['stat'];
mysql_query("update order_detail set complete='$sta' where id='$id'");


 
$row=mysql_fetch_array(mysql_query("select * from order_detail where id='$id'"));
$email=$row['email'];
$name=$row['f_name'];

//$to="jaysbaek@yahoo.com";
$to = $email;
//$to='amit91550@gmail.com';





$from = "Bluehangers.Com";
$subject = "DELIVERY CONFIRMATION";

$body = "<html><body>
        
          <table>
          <tr><td> Hi $name,</td></tr>
           <tr><td>Yay! We have successfully delivered your order at your designated area of delivery! <br>
We hope that you are satisfied with the results and that we will see you again soon!<br>
Thank you for use bluehangers.com
<br>
<br>
<br>Thank you.
<br>(c) 2015 Blue Hangers, Inc. | San Diego, CA 92129</td></tr>
          </table>
           </body></html>";
 
$headers .= 'From: Blue Hangers <info@bluehangers.com>' . "\r\n";
   $headers .= 'MIME-Version: 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
  
        mail($to,$subject,html_entity_decode($body),$headers);
?>