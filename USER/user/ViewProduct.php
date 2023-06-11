<?php
session_start();

if(isset($_SESSION['mobile']))
{
  $mobile=$_SESSION['mobile'];
  
  include ('dbconnection.php');
  $query = "select * from sign where mobile='$mobile'";
  $result =mysqli_query($conn,$query);
  $rows =mysqli_num_rows($result);
	 if($rows==1)
	 {
		 while($row =mysqli_fetch_assoc($result))
		 {
			 $name =$row['firstname'];
		 }
	 }

?>	 
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
<link href="CSS/viewproductstyle.css" rel="stylesheet" type="text/css" media="all" />
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
  <button style="color: black;background-color:#35f50f;border-radius:10px;" class="dropdown-btn" >BOOKINGS
    
  </button>
  <div class="dropdown-container">
    <a href="ViewProduct.php" class="fa fa-eye">VIEW HOUSES</a>
    <a href="ViewOrders.php" class="fa fa-plus" >VIEW BOOKED HOUSES</a>
  </div>
<button class="dropdown-btn" >FEEDBACK
    
  </button>
  <div class="dropdown-container">
    <a href="UserGiveFeedback.php" class="fa fa-plus" >GIVE FEEDBACK</a>
    <a href="UserViewFeedback.php" class="fa fa-eye">VIEW FEEDBACK</a>
	</div>
	<a href="changepassword.php">CHANGE PASSWORD</a>
  <a href="logout.php?logout">LOGOUT</a>
</div>  
</div>
<!-- end of side navigation bar-->
<div class="">
   <br>
<form action="#" method="POST">
  <div class="container3">
    <h2 style="color:purple;"><center>House Details</center></h2>
	<center>
    <p>Please see the House details you can delete or update(price,model) of House.</p>
	</center><br>
    <hr>
	<table>
  <tr>
  <th>s_no</th>
  <th>h-ID</th>
    <th>Image</th>
    <th>House Model</th>
	<th>Price</th>
    <th>Address</th>
   <th>Action</th>
</tr>
<?php
  
  $query = "select * from product";
  
  $result = mysqli_query($conn,$query);
  
  $rows = mysqli_num_rows($result);
  
    if($rows>0)
	{
	$i=0;
		while($rows = mysqli_fetch_assoc($result))
		{
			$hid=$rows['h_id'];
			$i++;
		
?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $rows['h_id'];?></td readonly>
	<td><img src="IMAGES/<?php echo $rows['image'];?>" width="100px" height="100px"/></td>
    <td><input type="text" name="h_model" value="<?php echo $rows['h_model']; ?>" style="width:90px;" /></td>
    <td><?php echo $rows['price']; ?></td>
	<td><textarea  style="width:90px;" rows=2 cols=20><?php echo $rows['h_address'];?></textarea></td>
    <td><a href="book.php?id=<?php echo $pid;?>"><img src="IMAGES/book.jpg" style="width:100px;"/></a></td>
	
  </tr>
   </form>
<?php 
		 }
	}
		 else 
		 {
			echo "<tr>
			<td colspan='8'><marquee><h1>data not found</h1></marquee></td>
			</tr>";
		 }
		 
 ?>

  
</table>
  </div>
  <br><br>
  
</form>
<!--end of add product --> 

</div>	
	
	
<footer>
  <p>&copy; 2022 ONLINE HOUSE RENTAL MANAGEMENT| Design by 3A-(Mob-0143143143).</p>
</footer>
<script type="text/javascript" src="JS/dropdownjs.js"></script>
  </body>
</html>

<?php 
}
        else
		{
		header('Location:../customersignin.php');
		}
		
?>