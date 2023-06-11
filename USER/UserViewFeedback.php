<?php
session_start();
if(isset($_SESSION['mobno']))
{
	$mobno=$_SESSION['mobno'];
	include('config1.php');
	$queryget="select  * from customer where mobno='$mobno'";
	$resultget=mysqli_query($connect,$queryget);
	$row=mysqli_fetch_array($resultget);
?>
<!
<!DOCTYPE html>
<html>
<head>
<title>User:Give Feedback</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="housel.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/addproductstyle.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--header-->
<header>
<table>
  <tr><td><img src="IMAGES/housel.jpg" style="margin-left:400px;" /></td><td><h2 style="color:#0A3D62;margin-left:
  0px;"><b>Online House Rental Management</b></h2></td></tr></table>

</header>
<!-- end of header-->
<!-- start of side navigation bar-->
<div class="sidenav">
  <a href="UserHome.php">USER HOME</a>
  <a href="ViewProfile.php">PROFILE</a>
  <button class="dropdown-btn">BOOKINGS</button>
  <div class="dropdown-container">
    <a href="ViewProduct.php" class="fa fa-eye">VIEW HOUSES</a>
    <a href="ViewOrders.php" class="fa fa-plus" >VIEW BOOKED HOUSES</a>
  </div>
<button style="color: black;background-color:#35f50f;border-radius:10px;" class="dropdown-btn" >FEEDBACK
    
  </button>
  <div class="dropdown-container">
    <a href="UserGiveFeedback.php" class="fa fa-plus" >GIVE FEEDBACK</a>
    <a href="UserViewFeedback.php" class="fa fa-eye">VIEW FEEDBACK</a> </div>
	<a href="changepassword.php">CHANGE PASSWORD</a>
  <a href="logout.php?logout">LOGOUT</a>
</div>
<!-- end of side navigation bar-->
<!-- START of CONTAINER  -->
<div class="content">
	<!--start of view profile --> 
<br>
<form action="#">
  <div class="container3">
    <center>
    <h2 style="color:purple;">View Feedback</h2>
    
	</center>
    <hr>
	<table>
 <tr>
    <th>F.ID</th>
    <th>NAME</th>
	<th>MOBILE NUMBER</th>
	<th>FEEDBACKON</th>
	<th>FEEDBACKDATE</th>
	<th>FEEDBACKMSG</td>
	<th>REPLY MSG</th>
	<th>RATING</th>
	
  </tr>
  <?php
include('config1.php');
$query="select * from feedback";
$result=mysqli_query($connect,$query) or die("could not execute query");

while($row=mysqli_fetch_array($result))
{
	
?>

  <tr>
    
	<td><?php echo $row['fid']; ?></td>
	<td><?php echo $row['fname']; ?></td>
	<td><?php echo $row['mobno']; ?></td>
	<td><?php echo $row['fon']; ?></td>
	<td><?php echo $row['fmsg']; ?></td>
	<td><?php echo $row['fdate']; ?></td>
	<td><?php echo $row['frmsg'];?></td>
	<td><?php echo $row['frname']; ?></td>
	
	
  </tr>
  
<?php

}
?>
  
</table>
  </div>
  <br><br>
  
</form>
<!--end of view profile -->
</div>	
<!-- END of CONTAINER  -->	
<!-- start of footer-->
<div class="footer">
  
  <p>&copy; 2022 Online House Rental Management| Design by 3A(Mob-0143143143).</p>
</div>
<!-- end of footer-->
  </body>
  </body>
</html>
<?php
}
else{
	header('location:../customersignin.php');
}
?>