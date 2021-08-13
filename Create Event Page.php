<?php
session_start();
include "database/connect.php";

	
if(!(isset($_SESSION['name']))){
header("location:index.php");
}
	
$name=$_SESSION['name'];

$email=$_SESSION['email'];

$eventid=$_POST['eventid'];





if(isset($_POST['submit'])){
					
					$title=$_POST['title'];
					$description=$_POST['description'];
										
					$venueName=$_POST['venueName'];
					$venueaddress=$_POST['venueaddress'];
					$startDate=$_POST['sdate'];
					$startTime=$_POST['startTime'];
					
					$endTime=$_POST['endTime'];
					
					
					
					$price=$_POST['price'];
					
					//var_dump($endTime);
					//$bannerImage=$_FILES["bannerImage"]["name"];
					move_uploaded_file($_FILES["bannerImage"]["tmp_name"],"images_event/".$title.'.jpg');
					$bannerImage=$title.'.jpg';
					
					$serv_id=time();
				$adm_query="insert into services_details (serv_id,serv_name,serv_desc,venue_name,venue_address,date,start_time,end_time,total_amount,venue_photo) values ('$serv_id','$title','$description','$venueName','$venueaddress','$startDate','$startTime','$endTime','$price','$bannerImage')";	
				//var_dump($adm_query);
				$query=mysqli_query($conn, $adm_query);
				
				if($query){
					
					echo"<script>alert('Event Created Successfully');</script>";
				}
				
					
				}
					


?>
