<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PRESIDENT CANDIDATES</title>
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
	 
	 

<br  />
<br />
<br />

<?php
session_start();
include"connection.php";

$sql = "SELECT * FROM candidate WHERE election_id=101";

$result = mysqli_query($con,$sql) ;

       if(! $result ) {
      die('Could not create database:'.mysqli_error("Error!!"));
       }
?>
<h1> PRESIDENT CANDIDATES </h1>



<?php
if(mysqli_num_rows($result) > 0)
	{
	while($row= mysqli_fetch_assoc($result))
{ ?>

<h2>
<?php   echo '<tr>
         <td>
          <input type="radio" name="president" value="president">
         </td>
         <td>
          '.$row['user_name'].'
         </td>
      </tr>';  
echo "<br>";
echo "<br>"; ?>
</h2>
<?php 
	}
	}

?>

<input type=button onClick="location.href='vice_president.php'" value='Next'>
<div id="bo__dy">
     <div id="bo__dy_p1">
	 </div>

	 <div id="bo__dy_pub">
<br /><br />
<br /><br />		
 <?php
include"footer_a.php";
?>
</div>

</body>
</html>
