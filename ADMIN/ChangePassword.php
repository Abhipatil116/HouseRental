<?php
session_start();
  if(isset($_SESSION['username']))
  {
   if(isset($_POST['changepassword']))
   {
	   $username=$_SESSION['username'];
	   $oldpsw=$_REQUEST['oldpsw'];
	   $newpsw=$_REQUEST['newpsw'];
	    $repsw=$_REQUEST['repsw'];
	   include('config1.php');
	   $query="select * from admin where username='$username'";
	   $result=mysqli_query($connect,$query) or die("could not execute query");
	   $row=mysqli_fetch_array($result);
	   $password=$row['password'];
	   if($password==$oldpsw && $newpsw==$repsw)
	   {
        $query2="update admin set password='$newpsw' where username='$username'";
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
<title>Admin::ChangePassword</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/housel.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/createstaffstyle.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--header-->
<header>
<table>
  <tr><td><img src="IMAGES/housel.jpg" style="margin-left:400px;" /></td><td><h2 style="color:#F1F1F1;margin-left:
  0px;"><b>WELCOME TO OUR RENTAL SYSTEM<b></h2></td></tr></table>

</header>
<!-- end of header-->
<!-- start of side navigation bar-->
<div class="sidenav">
  <a href="AdminHome.php">ADMIN HOME</a>
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
  <a style="color:black;background-color:#35f50f;border-radius:10px;" href="changepassword.php" class="fa fa-lock">CHANGE PASSWORD</a>
  <a href="logout.php?logout" class="fa fa-sign-out">LOGOUT</a>
</div>
<!-- end of side navigation bar-->
<!-- start of main content-->

<div class="main">
<!--start of add product --> 
<br>
<form action="#" method="post" >

  <div class="container3">
    <center>
    <h1 style="color:#4B5320;">CHANGE PASSWORD</h1>
	</center>
    <hr>
	<table class="producttable" width="100%">
	<tr>
	<td><label><b>OLD PASSWORD:</b></label></td>
    <td><input type="password"  placeholder="Enter the old password" name="oldpsw" id="oldpsw" required></td>
	</tr>
    <tr>
	<td><label><b>NEW PASSWORD:</b></label></td>
    <td><input type="password" placeholder="Enter the new password" name="newpsw" id="newpsw" required></td>
	</tr>
	<tr>
	<td><label><b>CONFIRM PASSWORD:</b></label></td>
    <td><input type="password" placeholder="confirm the new password" name="repsw" id="repsw" required></td>
	</tr>
	

	
    <tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td></td><td></td></tr>
    <tr>
    <td><button type="submit" class="btn" name="changepassword">CHANGE </button></td>
	<td><button type="reset" class="btn">CANCEL</button></td>
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
<?php
}
else{
	header('location:../adminsignin.php');
}
?>
