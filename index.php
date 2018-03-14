<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>IIITG Election Portal</title>
<link rel="shortcut icon" type="image/ico" href="__styles/favicon.ico"  />
<link rel="stylesheet" type="text/css" href="__styles/main__$tyle.css" />
<link rel="stylesheet" href="__styles/menu/style.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="__styles/functions.js"></script>
<style type="text/css">
<!--
.style13 {
	font-size: 22px;
	font-weight: bold;
	color: #000033;
}
.style14 {color: #000033}
body {
	background-color: #000033;
}
.style16 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style19 {font-size: 16px}
-->
</style></head>
<body>
 <div id="whole">
 <?php 
include"header.php";
?>
<?php 
include"menu.php";
?>
  <div id="bo__dy">
     <div id="bo__dy_pub">
			<br />
		  <fieldset><legend> <h3 style="color:#FFFFFF; font-size:14px">Notice Board</h3></legend>
	   	  
		  </fieldset>
		
		<fieldset><legend> <h3 style="color:#FFFFFF; font-size:14px">Log In</h3></legend>
	   <form id="login" method="post" enctype="multipart/form-data" action="#">
	   <table width="300" border="0">
  <tr>
    <th width="149" scope="row"><h3><span class="style19">Username</span> <span class="style16"></span></h3></th>
    <td width="149"><label>
        <span class="legend"></span><input type="text" name="username" id="rollno" class="desing"  required placeholder=""/>
        </label>
    </td>
  </tr>
  <tr>
    <th scope="row"><h3><span class="style19">Password</span></h3></th>
    <td><label>
        <span class="legend"></span><input type="password" name="password" id="password" class="desing"  required placeholder="">
        </label>
    </td>
  </tr>
  <tr>
    <th scope="row"><p style="color:#000066; font-size:12px"> <a href="#"> Forgot Password ?</a></p></th>
    <td><span class="legend" style="color:#FF0000;"></span><input style="margin-top:0px" type="submit" name="GOBtn" id="GOBtn" value="Go"></td>
  </tr>
</table>
</form></fieldset>
	 </div>
	<div id="bo__dy_conts">
	    <div id="HEa__DER"><h2> Change Your Mindset</h2></div>
		<div id="PiC__cont">
		   <ul class="imageslider" style="margin-left:0px;">
		      <li class="slide"><img src="__styles/slide/nm"height="300px"/></li>
			  <li class="slide"><img src="__styles/slide/bo"height="300px"/></li>
			  <li class="slide"><img src="__styles/slide/hc"height="300px"/></li>
			  <li class="slide"><img src="__styles/slide/vote"height="300px"/></li>
		   </ul>
	  </div>
		<div id="CO__nt">
		    <p  style="box-shadow:0px 0px 5px #000; text-align:center">
"Always vote for principle, though you may vote alone, and you may cherish the sweetest reflection that your vote is never lost."</p>
		</div>
    </div>
  </div>
 <?php 
include"footer.php";
?>
</div>

</body>
</html>
