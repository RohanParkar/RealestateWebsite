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
        
        
</div>
  </div>
<br>
	<br>
	<br>
	<?php include('footer.php');?>







</body>
</html>