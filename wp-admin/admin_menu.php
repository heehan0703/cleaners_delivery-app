<?php
session_start();
$run=$_GET['count'];
if($run==!1)
{
	header('location:http://m.bluehangers.com/wp-admin/index.php');
}


?>
<!doctype html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADMIN MENU</title>

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
      <td width="1368"><img src="../images/bluehangers_icon_1.png" width="50" height="50"></td>
      <td width="70">&nbsp;</td>
      <td width="70">&nbsp;</td>
      <td width="70">&nbsp;</td>
      <td width="70">&nbsp;</td>
    </tr>
  </table>
 </div>
      <hr style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
       <a href="admin_setup.php?count=<?php echo $run;?>" style="color:#FFF; text-decoration:none;"><div class="col" style="margin-top:1.3px;">
       Admin Setup
      </div>
      <hr  style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
      <a href="customer_list.php?count=<?php echo $run;?>" style="color:#FFF; text-decoration:none;"><div class="col" id="p" onMouseOver="mouseOver()" onMouseOut="mouseOut()"> Customer</div></a>
       <hr  style="margin-top: 0px;margin-bottom: 0px; color: #FFF">
      <a href="order_list.php?count=<?php echo $run;?>" style="color:#FFF; text-decoration:none;"><div class="col" id="s" onMouseOver="mouseOver()" onMouseOut="mouseOut()">Order</div></a>
       <hr style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
      <div class="col" id="f" onMouseOver="mouseOver()" onMouseOut="mouseOut()">Contact Us </div>
       <hr  style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
      <div class="col" id="c" onMouseOver="mouseOver()" onMouseOut="mouseOut()">Go To Shop</div>
       <hr style="margin-top: 0px;margin-bottom: 0px; color:#FFF">
      <a href="page.php?count=<?php echo $run;?>" style="color:#FFF; text-decoration:none;"> <div class="col" id="c" onMouseOver="mouseOver()" onMouseOut="mouseOut()">Manage Pages</div>
       <hr style="margin-top: 0px;margin-bottom: 0px; color:#FFF"> </a>
  </form>
    
    
    </div> <!--end container-->
</body>
</html>
