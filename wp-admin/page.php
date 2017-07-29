<?php
session_start();
require_once('include/connectdb.php');
include('pager.php');
$run=$_GET['count'];
if($run==!1)
{
	header('location:http://m.bluehangers.com/wp-admin/index.php');
}



$sql=mysql_query("select * from pages order by id DESC");


?>



<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--> 
<!--<![endif]-->
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADMIN MENU</title>




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
		height: 46.2px; margin-top: 4.2px; margin-left: 5.6px;"
	}
		
		.col:hover{ background:#3F606F;}
			
		
body,td,th {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>

</head>
<body>
<div class="gridContainer clearfix">
    <form style="border:1px solid #FFF;background-color:#3B636B">
	 
      <div id="LayoutDiv1" style="background-color:#00aced">
     <table width="100%" border="0">
    <tr>
      <td width="1368"><img src="../images/close.png" alt="menu" style="width: 22.4px;" > <img  src="../images/blue_hangers_logo.png" alt="logo" style="width: 110.2px;"></td>
      
    </tr>
  </table>
 </div>
 
 <? while($row=mysql_fetch_row($sql)){ ?>
      <hr style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
       <a href="edit_page.php?page=<?=$row[0]?>&count=<?=$run?>" style="color:#FFF; text-decoration:none;"><div class="col" style="margin-top:1.3px;">
      <?=$row[1]?>
      </div></a>
      <? } ?>
      
       <hr style="margin-top: 0px;margin-bottom: 0px; color:#FFF"> </a>
  </form>
    
    
    </div> <!--end container-->
</body>
</html>
