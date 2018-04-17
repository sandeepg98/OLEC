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

<br />
	 <br  />
<br />
<br />
	 
	<h1>
	CANDIDATES PROFILE
	</h1> 

<br  />
<br />
<br />
<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST">  
<select  id="election" name='election' value="election"  onchange='this.form.submit()'>
      <option value="">select</option> 
      <option value="101">President</option>
      <option value="102">Vice-President</option>
      <option value="103">Cultural Secretary</option>
      <option value="104">Sports Secretary</option>
	  <option value="105">Technical Secretary</option>
	  <option value="106">Welfare Secretary</option>
    </select>
    <noscript><input type="submit" value="Submit"></noscript>            
</form>

<br  />
<br />
<br />

<?php
//session_start();
include"connection.php";


if(isset($_POST))
{
$val=$_POST['election']; 

//echo $val;// To make sure value is posted
$sql = "SELECT * FROM candidate WHERE election_id='.$val.'";
//$result=mysqli_query("Select * from product_info where product_name= '.$val.' "); 

}


//$sql = "SELECT * FROM candidate WHERE election_id=101";

$result = mysqli_query($con,$sql) ;

       if(! $result ) {
      die('Could not create database:'.mysqli_error("Error!!"));
       }
?>


<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<table style="width:140%">
  <tr>
    <th>Picture</th>
    <th>Name</th> 
    <th>Batch</th>
	<th>E-mail</th>
  </tr>
<?php
if(mysqli_num_rows($result) > 0)
	{
	
	while($row= mysqli_fetch_assoc($result))
{ ?>
 
  <tr>
    <td> </td>
    <td><?php echo $row['user_name'] ?></td>
    <td><?php echo $row['batch_id'] ?></td>
	<td><?php echo $row['email'] ?></td>
  </tr>
  
<?php

 }
	}
?>
</table>
<br />
<br />
<br />

<input type=button onClick="location.href='election.php'" value='Next'>
<div id="bo__dy">
     <div id="bo__dy_p1">
	 </div>

	 <div id="bo__dy_pub">
	
 <?php
include"footer_a.php";
?>
</div>

</body>
</html>
