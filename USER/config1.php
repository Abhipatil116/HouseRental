<?php
	$servername='localhost';
	$username1='root';
	$password1='';
	$connect=mysqli_connect($servername,$username1,$password1,"houserent");
	if(!$connect)
	{
		die('Could not /connect My Sql:'.mysqli_error());
	}

?>