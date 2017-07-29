<?php
session_start();
$id=$_SESSION['member_id'];
require_once('wp-admin/include/connectdb.php');
$page_row=mysql_fetch_row(mysql_query("SELECT * FROM `pages` where id=3"));
 
?>

<style type="text/css" >
p{margin-left:0px; 
color:#9F9E9A;
text-align:center;}

#signup{ width:70%;
         height: 45px;
		 background-color:#00aced;
		 border-radius:8px;
		 color:#FFF;
	        
		  }
		  
		  form,h1{
	font-family: myFirstFont;
    src: url(/font/TCB_____.TTF);
}

@font-face {
    font-family: myFirstFont;
    src: url(/font/TCB_____.TTF);
}
</style>











<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="">
<!--<![endif]-->
<head>
<script>
function validation(){
var name= document.getElementById('agree').checked;

if(name== null ||name=="")
{
alert (" Please Slelect Agree & confirm  ");

   return false;

}

}
</script>



<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FAQ</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="signup04.php" rel="stylesheet" type="text/css">
<link href="radio.css" rel="stylesheet" type="text/css">
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
    <form style="" onSubmit="return validation()" action=""  method="post">
      <div  style=" width:90%;background-color:#486DB5; line-height:30px; margin-left:14px; margin-right:10px;">
        <div style="vertical-align:middle; font-family: myFirstFont; text-align:center; color:#FFF; float:left; width:90%;"> <font>FAQ</font> </div>
        <div style="float:left;"><a href="home.php" style="text-decoration:none;"><img src="images/home2.png" alt=""></a></div>
        <div style="clear:both;"></div>
      </div>
      <p style="margin-top: 22.7px; color:24aae1; font-weight:bold; font-size:24px; font-family:Verdana, Geneva, sans-serif;"> 
        
        
      
       <?=$page_row[2]?>
      </p>
      
     
      
      <p align="center" style="height:200px;"> (c) 2015 Blue Hangers, Inc. | San Diego, CA 92129 </p>
       
     
      
      
     
    </form>
	</div>
</body>
</html>
