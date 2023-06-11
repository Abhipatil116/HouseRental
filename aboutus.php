<!DOCTYPE html>
<html>
<head>
<title>Online House Rental Management::about us</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="housel.jpg" type="image/x-icon">
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
</head>
<body>
<!--header-->
<header>
  <a href="#" class="logo"><img src="IMAGES/housel.jpg"/>Online House Rental Management</a>
  <div class="header-right">
<pre> <a>Email ID:houserent@gmail.com
 Contact No:0143143143</a><pre>
  </div>
</header>
<!-- end of header-->
<!--menu/navigation bar-->
<nav class="navbar">
  <a  href="index.html">HOME</a>
  <a class="active" href="aboutus.html">ABOUT US</a>
  <a href="contactus.html">CONTACT US</a>
    <a href="signup.html">SIGN UP</a>
<div class="dropdown">
    <button class="dropbtn">SIGNIN
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="adminsignin.html">ADMIN</a>
      <a href="customersignin.html">CUSTOMER</a>
    </div>
  </div>  
</nav>
<!--end of menu/navigation bar-->

<!--start of about us --> 
<section>
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</section>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card1">
      <img src="IMAGES/professional.jpg" alt="Abhi" style="width:100%" >
      <div class="container1">
        <h2>Abhi D P</h2>
        <a> Email ID:abhishek1008@gmail.com</a>
         <p>Satya@example.com</p>
		 </div>
    </div>
  </div>

  <div class="column">
    <div class="card1">
      <img src="images/professional.jpg" alt="Akash" style="width:100%">
      <div class="container1">
        <h2>Akash Dhanawade</h2>
        <a> Email ID:akash@gmail.com</a>
		<p>Bill@example.com</p>
        </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card1">
      <img src="IMAGES/professional.jpg" alt="Abhishek" style="width:100%">
      <div class="container1">
        <h2>Abhi R P</h2>
        <a> Email ID:abhishek@gmail.com</a>
        <p>Ravi@example.com</p>
      </div>
    </div>
  </div>
</div>

<!--end of about us --> 
<br/><br/><br/>
<!--start of footer -->
<footer>
  <p>&copy; 2022 Online House Rental Management| Design by 3A(Mob-0143143143).</p>
</footer> 
<!--end of footer --> 
</body>
</html>
