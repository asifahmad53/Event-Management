<?php
session_start();
include "database/connect.php";
$email=$_SESSION['email'];
ob_start();



//$pnr=$_SESSION['pnr'];
$cardno=$_POST['cardno'];
$exdate=$_POST['exdate'];
$cvv=$_POST['cvv'];
$owner=$_POST['owner'];
$upi=$_POST['upi'];




$q=mysqli_query($conn,"SELECT * FROM `booking_details` WHERE b_id=(SELECT MAX(b_id) FROM `booking_details` where UserID='$email')");


$row=mysqli_fetch_array($q);

$b_id=$row['b_id'];


$q3=mysqli_query($conn,"insert into card_details (card_no,exp_date,cv_code,name,bid,upi) values ('$cardno','$exdate','$cvv','$owner','$b_id','$upi')");

if($q3)
{


header("location:home.php");
}
else
{

}
ob_end_flush();
?>