<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<style type="text/css">
body,h1 {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
};
 lavel, p{ color:#9F9E9A}
 
 #edit{ border-radius: 20px;
    background: #7A7F95;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px  } 
	
	
	
	#home{
 border-radius: 20px;
    background:#3BADE3;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px 
	
	} 
</style>


<meta charset="utf-8">
<link rel="stylesheet" href="style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="skin/square/blue.css" rel="stylesheet">
<link rel="stylesheet" href="style.css"/>
<script type="text/javascript" src="icheck.js"></script>
<link rel="stylesheet" href="style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>

<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="myorder.css" rel="stylesheet" type="text/css">
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
<form style=" border:1px solid black" >
  <div id="LayoutDiv1" style=" background-color:#00aced;height: 55.6px;" >
  <table width="" border="0">
    <tr>
      <td width="1368"><img src="images/menu.png" alt="menu" style="width: 22.4px;" > <img src="images/blue_hangers_logo.png" alt="logo" style="width: 110.2px;"></td>
      <td width="70"><img src="images/home.png" width="25"></td>
      <td width="70"><img src="images/mail.png" width="25"></td>
      <td width="70"><img src="images/phone.png" width="25"></td>
      <td width="70"><img src="images/facebook.png" width="25"></td>
    </tr>
  </table>
 </div>
  <p style="color:#9F9E9A;margin-left:10%">Your Order is Being Processed</p>
     
  <div><img src="img/myorderpag.jpg" style="width:80%; margin-left: 14.4px;"></div>
  
    <p style="margin-left:10%">Alterlation</p>
      <p style="margin-left:10%">
        <label>
          <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_0">
          Hem</label>
        
        <label>
          <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_1">
          Sew</label>
        
        <label>
          <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_2">
          Button</label>
          <label>
          <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_2">
          Zipper</label>
          <label>
          <input type="radio" name="RadioGroup2" value="radio" id="RadioGroup2_2">
          Etc</label>
      </p>
      <p style="margin-left:10%">
        <label for="memo">Memo</label>
        <textarea name="memo" id="memo"></textarea>
      </p>
      
 <div class="row" style="margin-top: 1%;margin-left:10%"">
<div class="col-xs-6">
  <font color="#9F9E9A">
  <label for="radio8"  ><font color="#9F9E9A" style="margin-left: -15.9px;">Pickup Date</font></label>
  </font></div>
  
<div class="col-xs-2" style=" margin-left:-34.3px;"  >
 <span style="margin-left: 50%"><input type="button" value="+" onclick="incre()" /></span><br>
 <input type="text" value="<?php echo $date1 ?>"  id="wn" style="border:2px solid #00ACED; border-left: ;  border-right: ; padding: 1%;width:1;color: #00ACED; margin-left: 11.1px; "  name="dateday" /><br>
 <span style="margin-left: 50%"><input type="button" value="-" onclick="decr()" /></span>
</div>
<div class="col-xs-2">
 <span style="margin-left: 50%"><input type="button" value="+" onClick="mont()" /></span><br>
 <input type="text" value="<?php echo $date2 ?>" id="month" name="month" style="border:2px solid #00ACED; border-left: ;  border-right: ; padding: 1%; width:100%; color: #00ACED; margin-left: 11.1px; "   /><br>
 <span style="margin-left: 50%"><input type="button" value="-" onClick="montdec()" /></span>
</div>
<div class="col-xs-2">
 <span style="margin-left: 50%"><input type="button" value="+" onclick="incre()" /></span><br>
 <input type="text" value="<?php echo $date3 ?>" id="date"  name="datenum" style="border:2px solid #00ACED; border-left: ;  border-right: ; padding: 1%; width:100% ;color: #00ACED; margin-left: 11.1px;"   /><br>
 <span style="margin-left: 50%"><input type="button" value="-" onclick="decr()" /></span>
</div>
  </div>
      
<p>
  <input type="submit" name="button" id="edit" value="EDIT"> 
  <input type="submit" name="button2" id="home" value="HOME">
</p>
</form>
</div>
<!--end of container-->
</body>
</html>
