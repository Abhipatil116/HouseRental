<?php
session_start();
if(isset($_SESSION['username']))
{
	if(isset($_POST['submit']))
	{
	$check=getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false)
	{
		$image=$_FILES['image']['tmp_name'];
		$imgContent=addslashes(file_get_contents($image));
		$hid=$_REQUEST['hid'];
		$hmodel=$_REQUEST['hmodel'];
		$price=$_REQUEST['price'];
		$address=$_REQUEST['address'];
		include('config1.php');
	$query="insert into adhouse(hid,hmodel,price,address,image) values('$hid','$hmodel','$price','$address','$imgContent')";
	$result=mysqli_query($connect,$query) or die("could not execute query");
	if($result==1)
	{
		echo '<script language="javascript">';
		echo 'alert("House Inserted Successfully!")';
		echo '</script>';
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("House Details Not Inserted Please Check!")';
		echo '</script>';		
	}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" Please upload Image ")';
		echo '</script>';
	}
	}	


	
?>
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
<link href="CSS/addproductstyle.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--header-->
<header>
<table>
  <tr><td><img src="IMAGES/housel.jpg" style="margin-left:400px;" /></td><td><h2 style="color:#F1F1F1;margin-left:
  0px;"><b>WELCOME TO OUR RENTAL SYSTEM</b></h2></td></tr></table>

</header>
<!-- end of header-->
<!-- start of side navigation bar-->
<div class="sidenav">
  <a href="AdminHome.php">ADMIN HOME</a>
   <button class="dropdown-btn" >BOOKINGS
    
  </button>
  <div class="dropdown-container">
    <a style="color:black;background-color:#35f50f;border-radius:10px;" href="AddProduct.php" class="fa fa-plus" >ADD HOUSES</a>
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

<div class="main">
<!--start of add product --> 
<br>
<form action="#" method="POST" enctype="multipart/form-data">
  <div class="container3">
    <center>
    <h1 style="color:purple;">Add House Form</h1>
    <p>Please fill the correct details to add house.</p>
	</center>
    <hr>
	<table class="producttable" width="100%">
	
	<tr>
	<td><label><b>House_id:</b></label></td>
    <td><input type="text" placeholder="Enter House id" name="hid" id="hid" required></td>
	</tr>
	
	<tr>
	<td><label><b>House_Model:</b></label></td>
    <td><input type="text" placeholder="Enter  Model" name="hmodel" id="model" required></td>
	</tr>
	
	<tr>
    <td><label><b>House_Price:</b></label></td>
    <td><input type="text" placeholder="Enter House Price" name="price" id="price" required></td>
    </tr>
	

	
	<tr>
    <td><label><b>House Address:</b></label></td>
    <td><textarea placeholder="Enter house address" name="address" id="address" required></textarea></td>
    </tr>
	
	<tr>
    <td><label><b>Upload House Image:</b></label></td>
    <td><input type="file" placeholder="Upload House Image" name="image" id="image" required></td>
	</tr>
	
    <td><button type="submit"  name="submit" class="btn">Add Product</button></td>
	<td><button type="reset" class="btn">Reset</button></td>
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
  
    <p>&copy; 2022 ONLINE HOUSE RENTAL MANAGEMENT| Design by 3A-(Mob-0143143143).</p>
</div>
<!-- end of footer-->
<script type="text/javascript" src="JS/dropdownjs.js"></script>
</body>
</html> 
	

<?php
}
else{
	header('Location:../adminsignin.php');
}


?>




























