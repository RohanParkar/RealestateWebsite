

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php

  $host = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbname = "jaaydat";
          //create connection
  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

  $user=$_SESSION['email'];
  $query  = "SELECT * FROM register WHERE email='$user'";
  $result = $conn->query($query);
  $row = $result->fetch_array(MYSQLI_NUM);

  $user_id = $row[0];
  $user_name = $row[1];
  $user_country = $row[7];
				//$user_image = $row[8];
  ?> 
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">JAAYDAT</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="buy.php">Buy</a></li>
      <li><a href="sell.php">Sell</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="about.php">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><img src="uploads/images/<?php echo $user ?>.jpg" width="30" height="30" alt="pp" style="margin-top:10px"></li>
      <li><a href="profile.php"> <?php echo $user_name ?></a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <li><a></a></li>
    </ul>
  </nav>
</body>
</html>