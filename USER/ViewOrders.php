<!DOCTYPE html>
<html>
<head>
<title>User Home</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/housel.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--header-->
<header>
<table>
  <tr><td><img src="IMAGES/housel.jpg" style="margin-left:400px;" /></td><td><h2 style="color:#0A3D62;margin-left:
  0px;"><b></b></h2></td></tr></table>

</header>
<!-- end of header-->
<!-- start of side navigation bar-->
<div class="sidenav">
  <a href="UserHome.php">USER HOME</a>
  <a href="ViewProfile.php">PROFILE</a>
  <button style="color: black;background-color:#35f50f;border-radius:10px;"class="dropdown-btn">BOOKINGS</button>
  <div class="dropdown-container">
    <a href="ViewProduct.php" class="fa fa-eye">VIEW HOUSES</a>
    <a  href="ViewOrders.php" class="fa fa-plus" >VIEW BOOKED HOUSES</a>
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
<div class="content">
  <br>
<br>
<form action="#" method="POST">
  <div class="container3">
    <center>
    <h2 style="color:purple;">View Booked Details....</h2>
    
	</center>
    <hr>
	<table>
  <tr>
    <th>b-ID</th>
    <th>Model</th>
    <th>Price</th>
	<th>Address</th>
	<th>Image</th>
	<th>Status</th>
	
	
  </tr>

  
  
</form>

</div>	
<footer>
  <p>&copy; 2022 ONLINE HOUSE RENTAL MANAGEMENT| Design by 3A-(Mob-0143143143).</p>
</footer> 
<script type="text/javascript" src="JS/dropdownjs.js"></script>

  </body>
</html>