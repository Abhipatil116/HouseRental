<?php
session_start();
if(isset($_SESSION['mobno']))
{
	$mobno=$_SESSION['mobno'];
	include('config1.php');
	$queryget="select  * from student where mobno='$mobno'";
	$resultget=mysqli_query($connect,$queryget);
	$row=mysqli_fetch_array($resultget);
	if(isset($_POST['submit1']))
	{
		
		$fname=$_REQUEST['fname'];
		$mobno=$_REQUEST['mobno'];
		$fon=$_REQUEST['fon'];
		$fdate=$_REQUEST['fdate'];
		$fmsg=$_REQUEST['fmsg'];
		$frname=$_REQUEST['frname'];
		$frmsg=$_REQUEST['frmsg'];
		include('config1.php');
	$query="insert into feedback(fname,mobno,fon,fmsg,fdate,frname,frmsg) values('$fname','$mobno','$fon','$fmsg','$fdate','$frname','$frmsg')";
	$result=mysqli_query($connect,$query) or die("could not execute query");
	if($result==1)
	{
		echo '<script language="javascript">';
		echo 'alert("feedback is given Successfully!")';
		echo '</script>';
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("feedback is not given Please Check Your Details...!")';
		echo '</script>';		
	}
	
	}	


	
?>
<!DOCTYPE html>
<html>
<head>
<title>User:Give Feedback</title>
<!--
Setting logo for title bar and image size should be 50X50.
-->
<link rel="shortcut icon" href="housel.jpg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="CSS/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS/addproductstyle.css" rel="stylesheet" type="text/css" media="all" />
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
<button style="color: black;background-color:#35f50f;border-radius:10px;" class="dropdown-btn" >FEEDBACK
    
  </button>
  <div class="dropdown-container">
    <a href="UserGiveFeedback.php" class="fa fa-plus" >GIVE FEEDBACK</a>
    <a href="UserViewFeedback.php" class="fa fa-eye">VIEW FEEDBACK</a> </div>
	<a href="changepassword.php">CHANGE PASSWORD</a>
  <a href="logout.php?logout">LOGOUT</a>
</div>
<!-- end of side navigation bar-->
<!-- start of main content-->

<div class="main">
<!--start of add product --> 
<br>
<form action="#" method="post">
  <div class="container3">
    <center>
    <h1 style="color:purple;">Feedback Form</h1>
    <p>Please fill the correct details to Give Feedback.</p>
	</center>
    <hr>
	<table class="producttable" width="100%">
	
	<tr>
	<td><label><b> NAME:</b></label></td>
    <td><input type="text"  name="fname" id="fname" value=""></td>
	</tr>
	<tr>
    <td><label><b>MOBILE NO:</b></label></td>
    <td><input type="text"  name="mobno" id="mobno" value="" ></td>
    </tr>
	<tr>
	<td><label><b>FEEDBACKON:</b></label></td>
    <td><input type="text"  name="fon" id="fon" value=""></td>
	</tr>
	<tr>
	<td><label><b>FEEDBACK DATE</b></label></td>
    <td><input type="date" name="fdate" id="fdate" ></td>
	</tr>
	<tr>
	<td><label><b>FEEDBACK MSG:</b></label></td>
    <td><input type="text"  name="fmsg" id="fmsg" value=""></td>
	</tr>
	<tr>
	<tr>
	<td><label><b>REPLY MSG:</b></label></td>
    <td><input type="text"  name="frmsg" id="frmsg" value=""></td>
	</tr>
	<td><label><b>RATINGS:</b></label></td>
    <td><select  name="frname" id="frname" value="">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	</select></td>
	</tr>
	
    <tr>
    <td><button type="submit" class="btn" name="submit1" id="submit1" style="background-color: lightgreen;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  border-radius:30px;
  width: 50%;" >Submit</button></td>
	<td><button type="reset" class="btn" style="background-color: red;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  border-radius:30px;
  width: 50%;">Clear</button></td>
	
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
	header('location:../customersignin.php');
}
?>
 