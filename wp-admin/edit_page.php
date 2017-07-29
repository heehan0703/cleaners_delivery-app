<?
session_start();
require_once('include/connectdb.php');
////////////////////////////////////////////////////////////////////////////  
$run=$_GET['count'];
if($run==!1)
{
	header('location:http://m.bluehangers.com/wp-admin/index.php');
}

$pid=$_GET['page'];
$page_row=mysql_fetch_row(mysql_query("SELECT * FROM `pages` where id=$pid"));
//echo  "SELECT * FROM `pages` where id=$pid";
if(isset($_POST['description'])){
	$id=$_POST['page_id'];
	$desc= mysql_real_escape_string($_POST['description']);
	//echo $desc;
  $page=mysql_query("update `pages` set page_detail='$desc' where id=$id");
  //echo "update `pages` set page_detail='$desc' where id=$id";
  
    header("location:page.php");
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>admin</title>

<link href="style/style.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<script type="text/javascript">
bkLib.onDomLoaded(function() {
	//new nicEditor().panelInstance('area1');
	new nicEditor({fullPanel : true}).panelInstance('area2');
	//new nicEditor({iconsPath : '/nicEdit/nicEditorIcons.gif'}).panelInstance('area3');
	//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	//new nicEditor({maxHeight : 100}).panelInstance('area5');
});

function script(){
     $("div.nicEdit-main").focus(function(e) {
        
  
	
$("div.nicEdit-selected").css("text-align","left");

});

}
$(document).ready(function(e) {
      $("div.nicEdit-main").css("text-align","left");
});
</script>

<style type="text/css">
.nicEdit-main .nicEdit-selected {
	text-align:left !important;
}
</style>

<style type="text/css">

.col{
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
		
		.col:hover{ }
			
		
body,td,th {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>


</head>



<body onload="script();">

<div class="gridContainer clearfix">
    <form  action="" method="post" enctype="multipart/form-data">
	 
      <div id="LayoutDiv1" style="background-color:#00aced">
     <table width="100%" border="0">
    <tr>
      <td width="1368"><img src="../images/close.png" alt="menu" style="width: 22.4px;" > <img  src="../images/blue_hangers_logo.png" alt="logo" style="width: 110.2px;"></td>
      
    </tr>
  </table>
 </div>
 
 <table width="100%" height="100%">
 <tr><td width="100%" height="100%">
      <input type="hidden"  name="page_id" value="<?=$pid;?>" />
     <textarea  id="area2" name="description" style="width: 600px; text-align:left; height:300px" autofocus="autofocus"><?=$page_row[2]?></textarea>
      
      </td>
     </tr>
     <tr><td>
     
      <b>   <input name="sub"  type="submit"  value="submit"/></b> 
      
      </td>
     </tr>
       </table>
  </form>
    
    
    </div> <!--end container-->
</body>
</html>
