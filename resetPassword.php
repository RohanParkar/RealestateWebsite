<?php
include("config.php");

if (!isset($_GET["code"])) {
	exit("cant find the page lala");
}

$code = $_GET["code"];

$getEmailQuery = mysqli_query($con, "SELECT email FROM resetPassword WHERE code='$code'");
if (mysqli_num_rows($getEmailQuery)== 0) {
	# code...
	exit("cant find the page");
}

if (isset($_POST["password"])) {
	$pw = $_POST["password"];

	$row = mysqli_fetch_array($getEmailQuery);
	$email = $row["email"];

	$query = mysqli_query($con, "UPDATE register SET password='$pw' WHERE email='$email'"); 
	# code...
	if ($query) {

		$query = mysqli_query($con,"DELETE FROM resetPassword WHERE code='$code'");
		//exit("Password update");
    echo "<script>window.open('login.html','_self')</script>";
		# code...
  }
  else{
    exit("Something went wrong");
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style>
   .form-gap {
    padding-top: 70px;
  }
</style>
</head>
<body>
 <div class="form-gap"></div>
 <div class="container">
   <div class="row">
    <div class="col-md-4 col-md-offset-4">  
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="text-center">
            <h3><i class="fa fa-lock fa-4x"></i></h3>
            <h2 class="text-center">Forgot Password?</h2>
            <p>You can reset your password here.</p>
            <div class="panel-body">
              
              <form id="register-form" role="form" autocomplete="off" class="form" method="POST">
               
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                    <input id="password" name="password" placeholder="New Password" class="form-control"  type="password">
                  </div>
                </div>
                <div class="form-group">
                  <input name="recover-submit" class="btn btn-lg btn-primary btn-block" name="submit" value="update Password" type="submit">
                </div>
                
                <input type="hidden" class="hide" name="token" id="token" value=""> 
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

