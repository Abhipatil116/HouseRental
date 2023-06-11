<?php
session_start();
if(isset($_SESSION['username']))
{
	
	if(isset($_POST['delete']))
	{
		$mobno=$_REQUEST['mobno'];
		include('config1.php');		
		$query3="delete from feedback where mobno='$mobno'";
		$result3=mysqli_query($connect,$query3) or die('could not execute query');
		$query2="delete from customer where mobno='$mobno'";
		$result2=mysqli_query($connect,$query2) or die('could not execute query');
		if($result2==1)
		{
			
		echo '<script language="javascript">';
		echo 'alert("Customer Account  deleted  Successfully!")';
		echo '</script>';
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("Customer Account Is Not deleted...!")';
		echo '</script>';		
	}
	
	
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin::View Users </title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="IMAGES/housel.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/addproductstyle.css" rel="stylesheet" type="text/css" media="all" />
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
  <a href="AdminHome.php">ADMIN HOME</a>
   <button class="dropdown-btn" >BOOKINGS
    
  </button>
  <div class="dropdown-container">
    <a href="AddProduct.php" class="fa fa-plus" >ADD HOUSES</a>
    <a href="ViewProduct.php" class="fa fa-eye">VIEW HOUSES</a>
  </div>
    <a style="color:black;background-color:#35f50f;border-radius:10px;" href="ViewUsers.php" class="fa fa-user">VIEW USERS</a>
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

  <div class="container3">
    <center><!--header-->

    <h1 style="color:red;">Customer Details</h1>
    <p>Please see the customer details you can delete or update(price,model) of House.</p>
	</center>
    <hr>
	<table >
  <tr>
    <th>SL.NO</th>
    <th>NAME</th>
	<th>MOBILE NO</th>
    <th>EMAIL</th>
    <th>PASSWORD</th>
	<th>DELETE</th>
    </tr>
	
	<?php
include('config1.php');
$query="select * from customer";
$result=mysqli_query($connect,$query) or die("could not execute query");
$slno=1;
while($row=mysqli_fetch_array($result))
{
	
?>
<form action="#" method="post">
<input type="hidden" name="mobno" value="<?php echo $row['mobno']; ?>"/>

  <tr>
    <td><?php echo $slno;?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['mobno']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['password']; ?></td>
	<td><input type="submit" class="btn" name="delete" value="DELETE"/></td>
	
  </tr>
  </form>
  
<?php
$slno=$slno+1;
}
?>
  
  
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
		 else
		 {
			 header('Location:../adminsignin.php');
		 }
		 
 ?>
