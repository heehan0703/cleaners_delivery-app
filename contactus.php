<?php 
if(isset($_POST['send'])){
    $to = "jaysbaek@yahoo.com"; // this is your Email address
	$from = "bluehangers.com";
    $email = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message= $_POST['message'];
	$subject = "customer contact us message";
$body = "<html><body>
         <p>NAME EMAIL MESSAGE</p>
          <table border ='2'>
    <tr><td> Name :</td><td>$name</td></tr>
          <tr><td> Email :</td><td>$email</td></tr>
           <tr><td> Message :</td><td>$message</td></tr>
          </table>
           </body></html>";
 
   $headers =  "From:bluehangers.com\r\n";
   $headers .= 'MIME-Version: 1.0' . "\r\n";
         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
       mail($to,$subject,html_entity_decode($body),$headers);
     //echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
	header('Location: /thanku21.php');
    }
?>
<html>
<head>


<meta charset="utf-8">
<link rel="stylesheet" href="style_test.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CONTACT US</title>
<style type="text/css">
@font-face {
    font-family: myFirstFont;
    src: url(/font/TCM_____.TTF);
}</style>

</head>
<body>
<html>
<form action="" method="post" name="form">
 <div class="container-fluid" >

  <div class="row"  style="padding-top: 1%; padding-bottom: 1%; margin-left:11px; margin-right:11px; margin-top:14px">
  <div style="width:100%; height:10px;"></div>
 
  <div  style=" width:100%;background-color:#3A5699; margin-top:-17px; line-height:30px; margin-left:-7px; margin-right:10px; padding-right:14px;">
  <div style="vertical-align:middle;  font-family:myFirstFont; text-align:center; color:#FFF; float:left; width:90%;">
    <font>CONTACT US</font>
    </div>
    <div style="float:left;"><a href="home.php" style="text-decoration:none; margin-top:8px;"><img src="images/home2.png"></a></div>
    <div style="clear:both;"></div>
  </div>
  
  </div>

<div class="m1">
  <label style="margin-left:12px;">Name</label><br>
<input name="name" type="text"  class="input" value="" style="height: 30px; width: 90%; border:1px solid #999999;">
</div>
<div class="m2">
  <div>
<label style="margin-left:12px;">Your E-mail</label><br>
<input class="EMAIL" name="email" type="email" value="" style="height:30;width:90%; border:1px solid #999999;"></div>
<div class="m3">
<label style="margin-left:12px;">Message</label>
<br>
<input class="MESSAGE" name="message" type="MESSAGE" value="" style="height:120px;width:90%; border:1px solid #999999;"></div>
 <input type="submit" name="send" value="SEND"  style="height:35px; width:90% ; border-radius:7px;alignment-adjust:central; font-family:myFirstFont;
    background-color:#3A5699;
    color:white; font-size:14px;
"></a>
</div><P>
<div>
<a href="home.php" style="text-decoration:none;">
<input type="button" name="CLOSE" value="CLOSE" id="close" style="height:35; width: 90%; border-radius:7px;
font-family: myFirstFont;background-color:#3A5699;color:white;margin-top:28;font-size:14px;
"></a>
</div></P>
</form>
</html>
</body>