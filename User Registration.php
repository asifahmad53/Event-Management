<?php
include "database/connect.php";

if(isset($_POST['submit'])){
	
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phonenumber=$_POST['phonenumber'];
	
	$query=mysqli_query($conn,"insert into user_details (UserID,UserFullName,UserPassword,mobile) values ('$email','$name','$password','$phonenumber')");
	
	if($query){
		
		echo"<script>alert('Registration Complete. You may login now.'); window.location.href='user_login.php';</script>";
	}else{
		
		echo"<script>alert('Please try again.');</script>";
	}
	
}
?>
