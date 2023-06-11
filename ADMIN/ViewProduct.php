<?php
session_start();
if(isset($_SESSION['username']))
{
	
	$hid=$_SESSION['username'];
	include('config1.php');
	$queryget="select  * from adhouse where hid='$hid'";
	$resultget=mysqli_query($connect,$queryget);
	$row=mysqli_fetch_array($resultget);
	if(isset($_POST['update']))
	{
		$price=$_REQUEST['price'];
		$hid=$_REQUEST['hid'];
		include('config1.php');
		$query="update adhouse set price='$price' where hid='$hid'";
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
	if(isset($_POST['delete']))
	{
		$hid=$_REQUEST['hid'];
		include('config1.php');		
		$query2="delete from adhouse where hid='$hid'";
		$result2=mysqli_query($connect,$query2) or die('could not execute query');
		if($result2==1)
		{
			
		echo '<script language="javascript">';
		echo 'alert("House deleted Successfully!")';
		echo '</script>';
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("House Not Is deleted...!")';
		echo '</script>';		
	}
	
	
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin::View-Product</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/housel.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/admin.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/viewstaffstyle.css" rel="stylesheet" type="text/css" media="all" />
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
    <a href="AddProduct.php" class="fa fa-plus" >ADD HOUSES</a>
    <a style="color:black;background-color:#35f50f;border-radius:10px;" href="ViewProduct.php" class="fa fa-eye">VIEW HOUSES</a>
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

  <div class="container3" style="width:1400px;" >
    <center>
    <h1 style="color:purple;">House Details</h1>
    <p>Please see the house details you can delete or update(price,model) of house.</p>
	</center>
    <hr>
	
  	<table colspan="2">
  <tr>
    <th>SL.NO</th>
    <th>HOUSE ID</th>
    <th>HOUSE MODEL</th>
    <th>PRICE</th>
	<th>ADDRESS</th>
	<th>IMAGE</th>
	<th>DELETE</th>
	<th>UPDATE</th>
  </tr>
 <?php
include('config1.php');
$query="select * from adhouse";
$result=mysqli_query($connect,$query) or die("could not execute query");
$slno=1;
while($row=mysqli_fetch_array($result))
{
	
?>
<form action="#" method="post">
<input type="hidden" name="hid" value="<?php echo $row['hid']; ?>"/>
  <tr>
    <td><?php echo $slno;?></td>
	<td><input type="text" name="hid" value="<?php echo $row['hid'];?>"/></td>
	<td><?php echo $row['hmodel']; ?></td>
	<td><input type="text" name="price" value="<?php echo $row['price'];?>"/></td>
	<td><?php echo $row['address']; ?></td>
	<td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image" style="width:200px;height:200px;">'; ?></td>
	<td><input type="submit" class="btn" value="DELETE" name="delete"/></td>
	<td><input type="submit" class="btn" value="UPDATE" name="update"/></td>
	
  </tr>
  </form>
<?php
$slno=$slno+1;
}
?>
</table>
  </div>
  <br><br>
  

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
	header('location:../adminsignin.php');
}
?>
