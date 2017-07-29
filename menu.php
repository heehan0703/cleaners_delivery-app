




<!--<script>
function mouseOver() {
	document.getElementById("ab").style.color = "#40606D";
    document.getElementById("p").style.color = "#40606D";
	document.getElementById("s").style.color = "#40606D";
	document.getElementById("f").style.color = "#40606D";
	document.getElementById("c").style.color = "#40606D";
	
}

function mouseOut() {
	document.getElementById("p").style.color = "00aced";
    document.getElementById("p").style.color = "#00aced";
	 document.getElementById("s").style.color = "#00aced";
	  document.getElementById("f").style.color = "#00aced";
	   document.getElementById("c").style.color = "#00aced";
}
</script>



-->


























<style type="text/css">

.col{ background-color:#00aced;
/*margin-top:2px;*/
height: 60px;
 color:#FFF;
font-size:25px;
margin-left: 30px;
}
	
.text{ color:#FFF;
font-size:25px;
margin-left: 30px;
 
	}
.pick{
	width: 33px; margin-bottom: 11px; margin-top: 6px;	}
	#ab{
	height: 46.2px;
	margin-top: 4.2px;
	margin-left: 0px;
"
	}
		
		.col:hover{ background:#3F606F;}
			
		
body,td,th {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
body {
	background-color: #00aced;
}
</style>






<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>menu</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">

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
<script src="../../../Program Files (x86)/Adobe/Adobe Dreamweaver CS6/Configuration/BuiltIn/Fluid Grid Layout/respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
    <form style="border:1px solid #FFF;background-color:#3B636B;">
	 
      <div id="LayoutDiv1" style="background-color:#00aced">
     <table width="100%" border="0">
    <tr>
      <td width="1368"><a href="home.php"><img src="images/close.png" alt="menu" style="width: 22.4px;" border="0" ></a> <a href="home.php"><img  src="images/blue_hangers_logo.png" alt="logo" style="width: 110.2px;" border="0"></a></td>
      <td width="70"><a href="home.php"><img src="images/home.png" width="25"></a></td>
      <td width="70"><a href="mailto:jaysbaek@yahoo.com"><img src="images/mail.png" width="25"></a></td>
      <td width="70"><a href="tel://858-997-4882"><img src="images/phone.png" width="25"></a></td>
      <td width="70"><a href="<?=$row_admin['44']?>"><img src="images/facebook.png" width="25"></a></td>
    </tr>
  </table>
 </div>
      <hr style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
     <a href="about_us.php" style="text-decoration:none"> <div class="col" style="margin-top:1.3px;">
        <img src="images/aboutus.jpg" width="50" align="absbottom"id="ab" longdesc="http://aboutus.com" onMouseOver="mouseOver()" onMouseOut="mouseOut()"> About Us
      </div></a>
      <hr  style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
      <a href="price.php" style="text-decoration:none"> <div class="col" id="p" onMouseOver="mouseOver()" onMouseOut="mouseOut()"><img src="images/price.png" width="51" height="51" align="absmiddle" longdesc="http://price.com"> Price</div> </a>
       <hr  style="margin-top: 0px;margin-bottom: 0px; color: #FFF">
     <a href="service_area.php" style="text-decoration:none"> <div class="col" id="s" onMouseOver="mouseOver()" onMouseOut="mouseOut()"><img src="images/servicearea.png" width="50" align="absmiddle" longdesc="http://service.com"> Service Area</div> </a>
       <hr style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
      <a href="Faq.php" style="text-decoration:none"> <div class="col" id="f" onMouseOver="mouseOver()" onMouseOut="mouseOut()"><img src="images/faq.png" width="50" align="absmiddle" longdesc="http://faq.com"> FAQ</div></a>
       <hr  style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
     <a href="contactus.php" style="text-decoration:none"> <div class="col" id="c" onMouseOver="mouseOver()" onMouseOut="mouseOut()"><img src="images/contactus.png" width="50" align="absmiddle" longdesc="http://contectus.com"> Contact Us</div></a>
       <hr style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
       <div style="height:225px;margin-left: 30px;background-color:#00aced;"></div>
  </form>
    
    
    </div> <!--end container-->
</body>
</html>
