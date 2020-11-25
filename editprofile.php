<?php
session_start();
 ?> 

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

  $fname= $row[1];
$lname= $row[2];
$phone = $row[4];
$gender= $row[5];
$city= $row[6];
$state = $row[7];
$country=$row[8];
$password= $row[9];
?>

<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=5">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/editprofile.css">
  <meta charset="utf-8">
  <title>Home</title>
</head>

<body class="bg">
  <?php include('header.php');?>
  
  
  
  
  
  
  <div class="container">
   <div class="row">
     <div class="col-md-3 ">
     </div>

     <div class="col-md-5 ">

      <div class="panel panel-default">
        <div class="panel-body" style="background-color:#E8E8E8">

          <div class="box box-info">

            <div class="box-body">
              <h1 align="center"> Edit Profile</h1>
              <div class="col-md-12">
              </div>
              <div class="clearfix"></div>
              <hr style="margin:5px 0 5px 0;">
              <div>
               <form action="edit.php" method="POST" enctype="multipart/form-data">
                <div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "><input type="text" placeholder="First Name" value="<?php echo $fname; ?>" name="fname" class="input-xlarge" required></div>
                <div class="clearfix"></div>
                <div class="bot-border"></div>
                <hr style="margin:5px 0 5px 0;">

                <div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"><input type="text" placeholder="last name" value="<?php echo $lname; ?>" name="lname" class="input-xlarge" required></div>
                <div class="clearfix"></div>
                <div class="bot-border"></div>
                <hr style="margin:5px 0 5px 0;">

                <div class="col-sm-5 col-xs-6 tital " >Phone Number:</div><div class="col-sm-7"><input type="text" placeholder="phone number" value="<?php echo $phone; ?>" name="phone" class="input-xlarge" required></div>

                <div class="clearfix"></div>
                <div class="bot-border"></div>
                <hr style="margin:5px 0 5px 0;">

                <div class="col-sm-5 col-xs-6 tital " >Gender:</div><div class="col-sm-7"><select class="input-xlarge" value="<?php echo $gender; ?>" name="gender" required>
		    <option value="male">male</option>
		    <option value="female">female</option>
		    <option value="others">others</option>
		</select></div>

                <div class="clearfix"></div>
                <div class="bot-border"></div>
                <hr style="margin:5px 0 5px 0;">

                <div class="col-sm-5 col-xs-6 tital " >City:</div><div class="col-sm-7"><input type="text" placeholder="city" value="<?php echo $city; ?>" name="city" class="input-xlarge" required></div>

                <div class="clearfix"></div>
                <div class="bot-border"></div>
                <hr style="margin:5px 0 5px 0;">

                <div class="col-sm-5 col-xs-6 tital " >State:</div><div class="col-sm-7"><input type="text" placeholder="state" value="<?php echo $state; ?>" name="state" class="input-xlarge" required></div>
                <div class="clearfix"></div>
                <div class="bot-border"></div>
                <hr style="margin:5px 0 5px 0;">
                
                <div class="col-sm-5 col-xs-6 tital " >Country:</div><div class="col-sm-7"><input type="text" placeholder="country" value="<?php echo $country; ?>" name="country" class="input-xlarge" required></div>
                <div class="clearfix"></div>
                <div class="bot-border"></div>
                <hr style="margin:5px 0 5px 0;">
                
                <div class="col-sm-5 col-xs-6 tital " >New Password:</div><div class="col-sm-7"><input type="password" placeholder="New Password" value="<?php echo $password; ?>" name="password" class="input-xlarge" required></div>
                <div class="clearfix"></div>
                <div class="bot-border"></div>
                <hr style="margin:5px 0 5px 0;">
                <br/>
                <div>
                  
                  <div class="col-sm-5 col-xs-6 tital " ><button type="submit" class="btn btn-primary" value="submit" > Update </button></form></div><div class="col-sm-7"><form id="b2" action="profile.php"><button type="submit" class="btn btn-primary" > Back </button></div>
                  
                </div>
              </form>
            </div>
          </div>
		

          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </div>


    </div> 
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