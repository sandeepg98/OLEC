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
</head>

<body>
 <div id="whole">
 <?php 
include"header.php";
?>
<?php 
include"menu.php";
?>
  <div id="bo__dy">
     <div id="bo__dy_p1">
	 </div>
	 
	 <div id="bo__dy_pub">
	 
<?php 
session_start();
include"connection.php";
if (isset($_REQUEST['GOBtn']))
{
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$query = "SELECT * FROM admin WHERE admin_id='$_REQUEST[username]' AND admin_pwd='$_REQUEST[password]'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count==1)
		{
		$_SESSION['username'] = $username;
		echo"<meta HTTP-EQUIV='Refresh' CONTENT='0; URL=http://localhost/E-Votings/admin_db.php'>";
		}
		else
		{
		$fmsg = "Invalid Login Credentials!! Please try again.";
		}
		mysqli_close($con);
}
?>
	 	  
<br /><br />
<br /><br />		<span style="font-size:24px; color:#000033; margin-left:18px; text-decoration:underline">Welcome To Admin Dashboard</span><br /><br /><br />
 	      <fieldset><legend> <h3 style="color:#FFFFFF; font-size:14px">Admin LogIn</h3></legend>
		  
	   <form id="login" method="post" enctype="multipart/form-data" action="#">
	   <table width="308" border="0">
  <tr>
    <th width="149" scope="row"><h3><span class="style19">Admin ID</span> <span class="style16"></span></h3></th>
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
    <th scope="row"><p></p></th>
    <td><span class="legend" style="color:#FF0000;"></span><input style="margin-top:2px" type="submit" name="GOBtn" id="GOBtn" value="Go"></td>
  </tr>
</table>
</form><br /><br />
<div style="color:#FF0000"><?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
</fieldset>
    </div>
	 
  </div>
 <?php 
include"footer.php";
?>
</div>

</body>
</html>
