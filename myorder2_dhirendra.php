<style type="text/css"> 
.mar{ margin-left:27px;
}
.text{ color:#9F9E9A}

#previous{ border-radius: 20px;
    background: #7A7F95;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px    


}
#next{
 border-radius: 20px;
    background:#3BADE3;
    padding: 2px; 
    width: 40%;
    height: 50px;
	border:0px 
	
	}
	form,h1{font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}



input[type=radio].css-checkbox + label.css-label{
	padding-right:50px;
	background-position:right top;
	display:inline-block;
	background-repeat:no-repeat;

}

     input[type=radio].css-checkbox:checked + label.css-label {
							background-position:right bottom
						}

						
			label.css-label {
				background-image:url(images/blue_button.png);
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			
</style>













<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->

<!--<![endif]-->
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<title>PREFERENCE</title>
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
<script type="text/javascript">

function disable_input(){
	$('#other_place').attr("disabled", true);	
	} 
	
	function enable_input(){
	$('#other_place').removeAttr("disabled");	
	} 



</script>


</head>
<body>
<div class="gridContainer clearfix">
<form style=" border:1px solid black;" >
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
 
     
  
  <p>

</p>

<p class="mar">
<label for="radio1" class="css-label radGroup2"><font color="#9F9E9A">Crease</font></label>
<input type="radio" name="radiog_dark" id="radio1" class="css-checkbox" value="crease" />
<label for="radio2" class="css-label radGroup2"><font color="#9F9E9A">No Crease</font></label>
<input type="radio" name="radiog_dark" id="radio2" class="css-checkbox" value="no_crease" checked/>
<label for="radio3" class="css-label radGroup2"><font color="#9F9E9A">No Preference</font></label>

<input type="radio" name="radiog_dark" id="radio3" class="css-checkbox" value="no_preference" />
<label for="radio3" class="css-label radGroup2"><font color="#9F9E9A">No Preference</font></label>

<input type="radio" name="radiog_dark" id="radio3" class="css-checkbox" value="no_preference" />

</p>
  
  
    
      
 
</form>
</div>
<!--end of container-->
</body>
</html>
