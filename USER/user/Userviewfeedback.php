<!DOCTYPE html>
<html>
<head>
<title>User::View Feedback</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/housel" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/viewproductstyle.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--header-->
<header>
<table>
  <tr><td><img src="IMAGES/housel" style="margin-left:400px;" /></td><td><h2 style="color:#0A3D62;margin-left:
  0px;"><b>Online House Rental Management</b></h2></td></tr></table>

</header>
<!-- end of header-->
<!-- start of side navigation bar-->
<div class="sidenav">
  <a href="UserHome.php">USER HOME</a>
  <a href="ViewProfile.php">PROFILE</a>
  <button class="dropdown-btn" >BOOKINGS
    
  </button>
  <div class="dropdown-container">
    <a href="ViewProduct.php" class="fa fa-eye">VIEW HOUSES</a>
    <a href="ViewOrders.php" class="fa fa-plus" >VIEW BOOKED HOUSES</a>
    
  </div>
<button style="color: black;background-color:#35f50f;border-radius:10px;" class="dropdown-btn" >FEEDBACK
    
  </button>
  <div class="dropdown-container">
    <a href="UserGiveFeedback.php" class="fa fa-plus" >GIVE FEEDBACK</a>
    <a href="UserViewFeedback.php" class="fa fa-eye">VIEW FEEDBACK</a>
	</div>
	<a href="changepassword.php">CHANGE PASSWORD</a>
  <a href="logout.php?logout">LOGOUT</a>
</div>
<!-- end of side navigation bar-->
<!-- start of main content-->

<div class="main">
<!--start of add product --> 
<br>
<form action="#">
  <div class="container3">
    <center>
    <h1 style="color:purple;">Feedback Details</h1>
    <p>Please see the Feedback details you can delete or update.</p>
	</center>
    <hr>
	<table>
  <tr>
    <th>Name</th>
    <th>Email Id</th>
    <th>Mobile NO</th>
	<th>Feedback</th>
	
  </tr>
  <tr>
    <td>Ashish</td>
    <td>@gmail.com</td>
    <td>123456789</td>
	<td>Good</td>
  </tr>
  <tr>
    <td>Prakash</td>
    <td>@gmail.com</td>
    <td>941234567</td>
	<td> Still Improment </td>
	
  </tr>
  <tr>
    <td>Jaggu dada</td>
    <td>@gamil.com</td>
    <td>123456789</td>
	<td>Very Good</td>
	
  </tr>
  
  
</table>
  </div>
  <br><br>
  
</form>
<!--end of add product --> 
  
</div>
<!-- end of main content-->
<!-- start of footer-->
<div class="footer">
  
  <p>&copy; 2022 Online House Rental Management| Design by 3A(Mob-0143143143).</p>
</div>
<!-- end of footer-->
<script type="text/javascript" src="JS/dropdownjs.js"></script>
</body>
</html> 
