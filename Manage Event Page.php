<?php
	session_start();
	include "database/connect.php";

	
if(!(isset($_SESSION['name']))){
header("location:index.php");
}
	
$name=$_SESSION['name'];



if(isset($_POST['submit']))
{
	$status=$_POST['status'];
    $bookid=$_POST['bookid'];
    
	$adn=mysqli_query($conn,"update booking_details set astatus='$status' where b_id='$bookid'");
		   
        echo "<script>alert('Status updated');
        window.location.href='admin_manage_users.php';
        </script>" ;
}	
	
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="manifest" href="extra/site.webmanifest">
        <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5f259f">
        <meta name="msapplication-TileColor" content="#fdda24">
        <meta name="theme-color" content="#5f259f">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        
              
                    <title>Events4u | My Account</title>
            <link rel="stylesheet" type="text/css" href="css/dashboard.min.css">
            <link rel="stylesheet" type="text/css" href="css/me-font.min.css">
            <link rel="stylesheet" type="text/css" href="css/fa-style.min.css">
            <link rel="stylesheet" href="css/jquery-ui.min.css">
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/jQuery-ui.min.js"></script>
			      <script src="js/intlTelInput.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/intlTelInput.min.css">
            
   
<style type="text/css">


.wrapper1{
    margin:80px;
}
.form-signin{
    max-width: 380px;
    margin: 0 auto;
    background: #fff;
    padding: 15px 40px 50px;
    border: 1px solid #e5e5e5;
    border-radius: 10px;
}

.form-signin .form-signin-heading{
    margin-bottom: 30px;
}
.form-signin input[type="text"], .form-signin input[type="password"]{
    margin-bottom: 20px;
}

</style>



</head>
        <!--   we are adding pageurl as a class name   --->
<body class="bodyLeft page-profile" >
            <div id="dvLoading" class="loadingopacity" style="display:none;background-color: rgba(136, 136, 136, 0.4);
                 height: 100%;
                 position: fixed;
                 width: 100%;
                 z-index: 1000;opacity: 1;
                 filter: alpha(opacity=100);"><img src="images/loading.gif" class="loadingimg" alt="Loading.." style="left: 50%;
                   opacity: 1;
                   filter: alpha(opacity=100);
                   position: absolute;
                   top: 50%;
                   border-radius: 4px;
                   display: block;
                   background-color: white;
                   -webkit-transform: translate(-50%, -55%);
                   -moz-transform: translate(-50%, -55%);
                   -o-transform: translate(-50%, -55%);
                   -ms-transform: translate(-50%, -55%);
                   transform: translate(-50%, -55%);
                   padding: 30px 70px;" /></div>
                   <div id="menudvLoading" class="menuloadingopacity" style="display:none;"><img src="images/loading.gif" class="menuloadingimg" alt="Loading.."/></div>
            <div class="wrapper"> 
                <!--Top Area-->
                <div class="headerSec">
                    <div class="float-left">
                        <a href="#" id="mobile-menu-toggle"><span class="icon2-bars" aria-hidden="true"></span></a>
                        <a href="admin_manage_users.php" class="logo">
                            <img src='images/logo_event.jpg'	width="200" height="50" alt="PMIWB" title="PMIWB" />
                        </a>
                    </div>
                    <div class="float-right">
                        <div class="rightList">
                            <ul >
									<li class="off"><a href="admin_manage_users.php" target="_self">Home</a></li>
																																								<li class="off"><a href="logout.php" target="_self">Log Out</a></li>
                                
                                 									
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearBoth"></div>
            </div>
    <div class="container"><div class="leftFixed">
 <div id="cssmenu"><!--class="fs-special-view-left-menu"-->
         <ul>
          <li class="has-sub"><a href='admin_profile.php' ><span class="glyphicon glyphicon-user"></span>Admin Profile</a>
            <ul  id="currentMenu" style="display: block">
              
			   <li><a    href="admin_manage_users.php"  class="unselected">Manage Users</a></li>
              
              <li><a   	href="admin_manage_services.php"  class="unselected">Manage Events</a></li>
              <li><a   	href="admin_delete_services.php"  class="unselected">Delete Events</a></li>
              <li><a   	href="admin_create_services.php"  class="unselected">Create Events</a></li>
			  <li><a   	href="admin_read_contact.php"  class="unselected">Read Message</a></li>
            </ul>
          </li>
          
          
          
        </ul>
      </div>
      <div class="sidebar-full-height-bg"></div>
 </div>	
				  


				  
				  
				  
				  
				  
<?php

if(isset($_GET['bid']))
{
    $id=intval($_GET['bid']);
    
    $q=mysqli_query($conn,"select * from booking_details where b_id='$id'");
    $row=mysqli_fetch_assoc($q);

}

?>
				  
				  
				  
				  
<div class="rightArea">

    <div class="wrapper1">

        <form method="post" action="" class="form-signin">
            <h2 class="form-signin-heading text-center">Update Status for Booking Id:<?php echo $id ?></h2>

            <div class="form-group">
              <label for="">Curren Status:<?php echo $row['astatus']; ?></label>
              <select class="form-control" name="status" id="">
            
                <option value="<?php echo $row['astatus']; ?>">Current:<?php echo $row['astatus']; ?></option>
                <option value="Approved">Approve</option>
                <option value="Disapproved">Disapprove</option>
                <option value="Refund Initiated">Refund Initiated</option>
                <option value="Refund Completed">Refund Completed</option>
                <option value="No Refund">No Refund</option>
              </select>
              <input type="hidden" name="bookid" value="<?php echo $id ?>" />
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Update</button>
            
        </form>

    </div>
    
        
</div>
    
</body>
</html>