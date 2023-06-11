<?php
 //login
 session_start();
 if(isset($_SESSION['mobno']))
 {
	 $mobno=$_SESSION['mobno'];
	 header('location:USER/UserHome.php?mobno='.$mobno);
 }else{
if(isset($_POST['login']))
{
	$mobno=$_REQUEST['mobno'];
	$password=$_REQUEST['password'];
	include('config1.php');
	$query="select * from customer where mobno='$mobno' and password='$password'";
	$result=mysqli_query($connect,$query) or die("could not execute query");
	if(mysqli_num_rows($result)<1)
	{
		echo '<script language="javascript">';
		echo 'alert("Wrong password or Mobile No...!")';
		echo '</script>';
		
		
	}
	else{
		$_SESSION['mobno']=$mobno;
		header("Location:USER/UserHome.php?mobno=".$mobno);
		exit;
		
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Project Demo::about us</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/housel.jpg" type="image/x-icon">
<!-- 
viewport to make your website look good on all devices.
width=device-width:Depending on width of the device it takes width.
initial-scale=1.0:sets the initial zoom level when the page is first loaded by the browser.
-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 
Linking Externall css file and 
media=all :Used for all media type devices.
-->
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/adminsigninstyle.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--header-->
<header>
  <a href="#" class="logo"><img src="IMAGES/housel.jpg"/> Online House Rental Management</a>
  <div class="header-right">
  <a>Email ID:houserent@gmail.com,<br><br>Contact No:0143143143</a>
  </div>
</header>
<!-- end of header-->
<!--menu/navigation bar-->
<nav class="navbar">
  <a  href="index.php">HOME</a>
  <a  href="aboutus.php">ABOUT US</a>
  <a href="contactus.php" >CONTACT US</a>
  <a href="signup.php" >SIGNUP</a>
  
<div class="dropdown">
    <button class="dropbtn" >SIGNIN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="adminsignin.php">ADMIN</a>
      <a href="customersignin.php">CUSTOMER</a>

    </div>
  </div>  
</nav>
<!--end of menu/navigation bar-->

<!-----start- login---->
	 <div class="main">
		<div class="login-form">
			<h1>Customer Login</h1>
					<div class="head">
						<img src="IMAGES/customer.jpg" width="100px" height="100px" alt="" />
					</div>
					<form action="#" method="post">
							<input type="text" class="text" placeholder="MOBILE NO" name="mobno"	 />
							<input type="password" placeholder="Password" name="password" />
							
							<div class="submit">
								<input type="submit" value="LOGIN" name="login" >
							</div>
							
						   <p><a href="index.php">Go Back? Click Here</a></p>
					</form>
		</div>
			
	</div>
			 <!-----//end-login---->
<br/><br/><br/>
<!--start of footer -->
<footer>
  <p>&copy; 2022 Online House Rental Management| Design by 3A(Mob-0143143143).</p>
</footer> 
<!--end of footer --> 
</body>
</html>
<?php
 }
 ?>
