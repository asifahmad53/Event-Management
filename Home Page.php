<?php
	//Connect database
	include "database/connect.php";

?>
<?php
				//$conn = mysqli_connect($servername, $username, $password, $dbname);
				//Read all event
				
				
				
				$admin_serv = "SELECT * FROM services_details";
				$admin_result = mysqli_query($conn, $admin_serv);
				
				
				if(isset($_POST['submit1'])){
					
					$ename=$_POST['ename'];
					
					$search=mysqli_query($conn,"SELECT * FROM services_details where serv_name LIKE '$ename%'");
					$row=mysqli_fetch_assoc($search);
					$eventid=$row['serv_id'];
					header('location:search_event.php?eventid='.$eventid);
					
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
      
       
        <script src="js/jQuery.min.js.gz?v=131"></script>        
                <title>Events4u</title> 
                <meta name="viewport" content="width=device-width,initial-scale=1.0">
                <meta name="apple-mobile-web-app-capable" content="yes">
                <meta name="description" http-equiv="description" content="Buy tickets & passes online for upcoming events in Chennai, live concerts, and events happening in Chennai. Book latest events at MeraEvents.com">
                <meta name="keywords" http-equiv="keywords" content="Events in Chennai,Upcoming Events in Chennai,Latest Events in Chennai,Events in Chennai,Chennai Events,Events in Chennai Today,Events in Chennai this weekend,Chennai upcoming events,upcoming events Chennai,live concert events in Chennai,Latest Events in Chennai" />
                                            <meta name="author" content="MeraEvents" />
                    <meta name="rating" content="general" />          


                <link rel="shortcut icon" href="images/favicon.ico">
				<link rel="stylesheet" type="text/css" href="css/me_custom.min.css">

                

        

         <!-------------------------------------------new------------------------------------------>
	


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap/css/jumbotron.css" rel="stylesheet">
	
	<!-------------------------------------------new------------------------------------------>
	<style>
        body  {
            background-image: url("images/7.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-color: #cccccc;
        }


        #bottom-nav{
            margin-top: 200px;
        }
		
		
    </style>                                                  



</head>




<body class="single-winner" ng-app=homeModule>


<!-------------------------------------------new------------------------------------------>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src='images/logo_event.jpg'	width="200" height="50" alt="PMIWB" title="PMIWB" /></a>

        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
		
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
             
						
							
							<li><a href="aboutus.php"><span class=""></span>&nbsp;About Us</a></li>
							 <li><a href="contactus.php"><span class=""></span>&nbsp;Contact Us</a></li>
							
							
							
							 <li><a href="user_login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;User Login</a></li>
							 <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Admin Login</a></li>
							 
							 
                    
							
							
							
				
          
            </ul>
        </div>
		
		
      </div>
    </nav>

<!-------------------------------------------new------------------------------------------>

                    




<!--important-->
<div ng-controller="filterController">
<div class="page-container" >
	<div class="wrap">
		<div class="container HomeContainer">
			<!-- Main component for a primary marketing message or call to action -->
			
			<div class="search-container searchABC">
			
			
					
				
<br>					







<!------------------------------------------Slider Photo-------------------------------->


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


<div class="carousel-inner" role="listbox">

<div class="item active">
<a target="_self" href=""><img src='images/1.jpg'	width="1280" height="370"/></a>
<div class="carousel-caption">
</div>
</div>

	
</div>



</div>

<!------------------------------------------Slider Photo-------------------------------->	



<div class="clearfix"></div>
			
</div>
 </div>


</div>
   													
															
	


<section class="eventlist">
      <div class="container HomeContainer mt-zero">
        
		
      <div class="row">
        <h3 class="subHeadingFont" id="eventCaption" >
          <span>Events </span>
        </h3>
        
         <ul id="eventThumbs" class="eventThumbs">

	<?php if($admin_result){
					while($row = mysqli_fetch_array($admin_result, MYSQLI_ASSOC)){

					$event=$row['serv_name'];
					$descrip=$row['serv_desc'];
					$photo=$row['venue_photo'];
					$EventID=$row['serv_id'];
					$EventDate=$row['date'];
					$amount=$row['total_amount'];
					//var_dump($EventID);
					
				?>	 
		 
		 

<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4 thumbBlock bookmarkid_229839">
	<div class="event-box-shadow">
		<a href="" class="thumbnail">
		<form action='services_detail.php' method='POST'>
			<div class="eventImg">
				<img src="<?php echo 'images_event/'.$photo;?>" width="220" height="150" />
			</div>
			
			<div class="eventpadding">
				<h2>
				<span class="eveHeadWrap"><?php echo "$event"; ?></span>
				</h2>
				<h2>
				<span class="eveHeadWrap">Rs.<?php echo "$amount"; ?></span>
				</h2>
				<div class="info">
					<span content="2020-04-29 15:30:00"><i class=""></i> <?php echo "$EventDate"; ?></span>
					<input type="hidden" name="eventid" value="<?php echo"$EventID"; ?>"
				</div>
				<div class="eventCity" style='display: none ;'>
					<span></span>
				</div>
			</div>
			
		</a> 
		
		
		<center><input type="submit" class="btn btn-info btn-sm" value="More Details"/></center>
		</form>
</div>
</li>  

	<?php } } ?>
                                 
</ul>   
                                
                                
                                
                     
      </div>  
      </div>
    </section> 







<footer id="footer">

  <div class="container">
    <div class="row">
      

    <div class="row">
      <div class="col-lg-12">
        <p class="footer-copyright text-left">
           &copy; 2021, Copyright @ . All Rights Reserved
        </p>
      </div>
    </div> <!-- row -->


  </div> <!-- container -->
  
</footer>






	
											
	

<script type="application/ld+json">
</script>

 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>

<script src="js/angular.min.js"></script>
<script src="js/combined.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/home_combined.min.js"></script>


</body>
</html>