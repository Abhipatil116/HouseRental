<?php
session_start();
  if(isset($_SESSION['mobno']))
  {
	  $mobno=$_SESSION['mobno'];
	include('config1.php');
	$queryget="select  * from customer where mobno='$mobno'";
	$resultget=mysqli_query($connect,$queryget);
	$row=mysqli_fetch_array($resultget);
   if(isset($_POST['changepassword']))
   {
	   $mobno=$_SESSION['mobno'];
	   $oldpsw=$_REQUEST['oldpsw'];
	   $newpsw=$_REQUEST['newpsw'];
	   $repsw=$_REQUEST['repsw'];
	   include('config1.php');
	   $query="select * from customer where mobno='$mobno'";
	   $result=mysqli_query($connect,$query) or die("could not execute query");
	   $row=mysqli_fetch_array($result);
	   $password=$row['password'];
	   if($password==$oldpsw && $newpsw==$repsw)
	   {
        $query2="update customer set password='$newpsw' where mobno='$mobno'";
		$result2=mysqli_query($connect,$query2) or die('could not execute query');	
		if($result2==1)
		{
			echo'<script language="javascript">';
			echo 'alert("password changed Successfully!")';
			echo '</script>';
	    }else{
		    echo'<script language="javascript">';
			echo 'alert("password not changed")';
			echo '</script>';
			
		   
	   }
	   }else{
		    echo'<script language="javascript">';
			echo 'alert("old password or new password is not equal.!!")';
			echo '</script>';
	   }
   }
  
?>
<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/housel.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/changepassword.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
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
<button class="dropdown-btn" >FEEDBACK
    
  </button>
  <div class="dropdown-container">
    <a href="UserGiveFeedback.php" class="fa fa-plus" >GIVE FEEDBACK</a>
    <a href="UserViewFeedback.php" class="fa fa-eye">VIEW FEEDBACK</a> </div>
	<a style="color: black;background-color:#35f50f;border-radius:10px;" href="changepassword.php">CHANGE PASSWORD</a>
  <a href="logout.php?logout">LOGOUT</a>
</div>
<!-- end of side navigation bar-->
<!-- start of main content-->
<div class="main">
<br>

  
<!--start of add product --> 
<br>
<form action="#" method="post">
  <div class="container3">
    <center>
    <h1 style="color:purple;">CHANGE PASSWORD</h1>
    <p>Please fill the correct details to add Password.</p>
	</center>
    <hr>
	<table class="producttable" width="100%">
	<tr>
    <td><label><b>OLD PASSWORD:</b></label></td>
    <td><input type="password"  name="oldpsw" id="oldpsw"> </td>
    </tr>
	<tr>
    <td><label><b>NEW PASSWORD:</b></label></td>
    <td><input type="password"  name="newpsw" id="newpsw"> </td>
    </tr>
	<tr>
    <td><label><b>REPEAT PASSWORD:</b></label></td>
    <td><input type="password"  name="repsw" id="repsw"> </td>
    </tr>
	<tr>
    <td><button type="submit" class="btn" name="changepassword">CHANGE</button></td>
	<td><button type="reset" class="btn1">CANCEL</button></td>
	</tr>
	</table>
	
	
   
  </div>
  <br><br>
  
</form>
<!--end of add product --> 
</div>
<!-- start of footer-->
<div class="footer" style="margin-left:200px;">

  
  <p>&copy; 2022 Online House Rental Management| Design by 3A(Mob-0143143143).</p>
</div>
<!-- end of footer-->
<script type="text/javascript" src="JS/dropdownjs.js"></script>
</body>
</html> 
  <?php
  }
  else{
	  header('location:../usersignin.php');
  }
  ?>
