<?php
session_start();
?>

<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=5">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/hpage.css">
  <title>Home</title>
</head>

  <?php

  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "jaaydat";
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);





  $user=$_SESSION['email'];
  $query  = "SELECT * FROM register WHERE email='$user'";
  $result = $conn->query($query);
  $row = $result->fetch_array(MYSQLI_NUM);
  $user_id = $row[0];
  $user_name = $row[1];
  $user_city = $row[6];
				//$user_image = $row[8];
include('header.php');?>
 

 <body>

 <div class="bg">
 <div class="container">
    
       <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">

                <img id="logo" src="css/j1.jpg" height="300px" alt="logo" align="center" />
            </div>
            <div class="col-md-4">
            </div>
        </div>

		<div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">

              <h1 align="center">JAAYDAT.com</h1>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        
        
</div></div>	<hr>	<div id="myCarousel" class="carousel slide" data-ride="carousel">      <!-- Indicators -->      <ol class="carousel-indicators">        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>        <li data-target="#myCarousel" data-slide-to="1"></li>        <li data-target="#myCarousel" data-slide-to="2"></li>      </ol>      <!-- Wrapper for slides -->      <div class="carousel-inner">        <div class="item active">          <img src="css/images/p1.jpg" alt="pic1" style="width:100%;">		  <div class="carousel-caption">			<h1>Welcome Back</h1>			<h2><strong><?php echo $user_name ?></strong></h2>			</div>        </div>        <div class="item">          <img src="css/images/p2.jpg" alt="pic2" style="width:100%;">		  <div class="carousel-caption">			<h1>Best Houses In Best Prices</h1>			</div>        </div>                <div class="item">          <img src="css/images/p3.jpg" alt="pic3" style="width:100%;">		  <div class="carousel-caption">			<h1>Get Your Dream House </h1>			<h2>in <strong><?php echo $user_city ?></strong></h2>			</div>        </div>      </div>      <!-- Left and right controls -->      <a class="left carousel-control" href="#myCarousel" data-slide="prev">        <span class="glyphicon glyphicon-chevron-left"></span>        <span class="sr-only">Previous</span>      </a>      <a class="right carousel-control" href="#myCarousel" data-slide="next">        <span class="glyphicon glyphicon-chevron-right"></span>        <span class="sr-only">Next</span>      </a></div>	<div class="container">	<div class="row">		<h2>Up Comming Projects</h2>	</div>	<br>		<div class="row" style="border:3px solid black; border-radius: 10px;">		<br>  <div class="col-md-4" >     <a href="https://www.hiranandani.com">	<img src="css/1.jpg" alt="l1" width="300" height="200" align="center"  >	</a>	<h3 align="center" ><strong>Location</strong></h3>	<p align="center"  >Sambhaji Nagar Rd, Sambhaji Nagar, Thane West, Thane, Maharashtra 400606</p>  </div>  <div class="col-md-4">  <a href="https://www.tatahousing.com">    <img src="css/2.png" alt="l2" width="300" height="200">	</a>	<h3 align="center" ><strong>Location</strong></h3>	<p align="center" >Near Holy Cross School, K. Villa, Opposite Varad Hospital, Thane West, Thane, Maharashtra 400601</p>  </div>  <div class="col-md-4">  <a href="https://www.lodha-majiwada.org.in/">    <img src="css/3.jpg" alt="l3"  width="300" height="200">	</a>	<h3 align="center" ><strong>Location</strong></h3>	<p align="center" >Agiary Ln, Near Thane Station Road (West), Uthalsar Naka, Thane West, Thane, Maharashtra 400601</p>  </div>	<hr>  </div>
  </div>
<br>
	<br>
	<br>
	<?php include('footer.php');?>







</body>
</html>