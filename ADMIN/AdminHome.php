<!DOCTYPE html>
<html>
<head>
<title>Admin Home</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/housel.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!--header-->
<header>
<table>
  <tr><td><img src="IMAGES/housel.jpg" style="margin-left:400px;" /></td><td><h2 style="color:#F1F1F1;margin-left:
  0px;"><b>WELCOME TO OUR RENTAL SYSTEM</b></h2></td></tr></table>

</header>
<!-- end of header-->
<!-- start of side navigation bar-->
<div class="sidenav">
  <a  style="color:black;background-color:#35f50f;border-radius:10px;" href="AdminHome.php">ADMIN HOME</a>
   <button class="dropdown-btn" >BOOKINGS
    
  </button>
  <div class="dropdown-container">
    <a href="AddProduct.php" class="fa fa-plus" >ADD HOUSES</a>
    <a href="ViewProduct.php" class="fa fa-eye">VIEW HOUSES</a>
  </div>
    <a href="ViewUsers.php" class="fa fa-user">VIEW USERS</a>
  <a href="FeedbackView.php" class="fa fa-comments-o">VIEW FEEDBACKS</a>
  <a href="queries.php" class="fa fa-comments-o">VIEW QUERIES</a>
  <a href="view order.php" class="fa fa-shopping-cart">VIEW BOOKINGS</a>
  <a href="changepassword.php" class="fa fa-lock">CHANGE PASSWORD</a>
  <a href="logout.php?logout" class="fa fa-sign-out">LOGOUT</a>
</div>
<!-- end of side navigation bar-->
<!-- start of main content-->
<div class="main" style="color:white;">
<br><br><br><br><br><br>

  
  
	  <table style="color:#f1f1f1;">
	 <center> <img src="IMAGES/house5.jpg" " /></center> 
	 
	 
  </div> 
<!-- end of main content-->
<!-- start of footer-->
<div class="footer">
  
  <p>&copy; 2022 ONLINE HOUSE RENTAL MANAGEMENT| Design by 3A-(Mob-0143143143).</p>
</div>
<!-- end of footer-->
<script type="text/javascript" src="JS/dropdownjs.js"></script>
</body>
</html> 
