<?php
session_start();
if(isset($_SESSION['mobno']))
{
	$mobno=$_SESSION['mobno'];
	include('config1.php');
	$queryget="select  * from customer where mobno='$mobno'";
	$resultget=mysqli_query($connect,$queryget);
	$row=mysqli_fetch_array($resultget);
	if(isset($_POST['update']))
	{
		$name=$_REQUEST['name'];
		$mobno=$_REQUEST['mobno'];
		$email=$_REQUEST['email'];
		include('config1.php');
		$query="update customer set name='$name',email='$email' where mobno='$mobno'";
		$result=mysqli_query($connect,$query) or die("could not execute query");
		if($result==1)
		{
			echo '<script language="javascript">';
		    echo 'alert("updated Successfully!")';
		     echo '</script>';
		}else{
			echo '<script language="javascript">';
		    echo 'alert("not updated! please check details")';
		     echo '</script>';
		}
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>User Home</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/housel.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/ViewProfilestyle.css?v=1" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/style.css?v=1" rel="stylesheet" type="text/css" media="all" />
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
  <a style="color: black;background-color:#35f50f;border-radius:10px;" href="ViewProfile.php">PROFILE</a>
  <button class="dropdown-btn">BOOKINGS</button>
  <div class="dropdown-container">
    <a href="ViewProduct.php" class="fa fa-eye">VIEW HOUSES</a>
    <a href="ViewOrders.php" class="fa fa-plus" >VIEW BOOKED HOUSES</a>
  </div>
<button class="dropdown-btn" >FEEDBACK
    
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

  <div class="container3">
    <center>
    <h2 style="color:purple;">View Profile</h2>
    <b>Following Details are the Your Profile Details.</b>
	</center>
    <hr>
	
	
	<table  width="50%">
	<?php
	$mobno=$_SESSION['mobno'];
include('config1.php');
$query="select * from customer where mobno='$mobno'";
$result=mysqli_query($connect,$query) or die("could not execute query");

$row=mysqli_fetch_array($result);

	
?>
<form action="#" method="post">

  <tr>
    <td>NAME</td>
	<td><input type="text" name="name" value="<?php echo $row['name'];?>"/></td></tr>
	<tr>
	<td>MOBILE NO</td>
	<td><input type="text" name="mobno" value="<?php echo $row['mobno'];?>"/></td></tr>
	<tr>
	<td>EMAIL</td>
	<td><input type="text" name="email" value="<?php echo $row['email'];?>"/></td></tr>
	<tr>
	<td>PASSWORD</td>
	<td><input type="text" value="<?php echo $row['password'];?>"/></td></tr>
	<tr>
	<td>ACTION</td>
	<td><button type="submit" class="btn" name="update">UPDATE </button></td></tr>
</form>	
  </tr>
  

	</table>
	
  </div>
  <br><br>
  

<!--end of view profile -->
</div>	
<!-- start of footer-->
<div class="footer">
  
  <p>&copy; 2022 Online House Rental Management| Design by 3A(Mob-0143143143).</p>
</div>
<!-- end of footer-->
<script type="text/javascript" src="JS/dropdownjs.js"></script>
</body>
</html> 
<?php
}else{
	header('location:../customersignin.php');
}
?>