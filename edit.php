<?php
session_start();
?>

<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $password = $_POST['password'];
  if (!empty($fname) || !empty($lname)|| !empty($phone) || !empty($gender) ||  !empty($city) ||  !empty($state) ||  !empty($country) || !empty($password)) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "jaaydat";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
		
	$user=$_SESSION['email'];
	$query  = "SELECT * FROM register WHERE email='$user'";
	$result = $conn->query($query);
	$row = $result->fetch_array(MYSQLI_NUM);
	$user_id = $row[0];
	
     //$INSERT = "INSERT Into register (fname, lname, email, phone, gender, city,state,country,password) values(?, ?, ?, ?, ?, ?, ?,?, ?)";
	 $UPDATE = "UPDATE register SET fname='$fname' , lname='$lname' , phone='$phone', gender='$gender' , city='$city',state='$state',country='$country' , password='$password' WHERE uid='$user_id'";
     //Prepare statement
      $stmt = $conn->prepare($UPDATE);
      $stmt->execute();
      echo "<script>window.open('profile.php','_self')</script>";
     $stmt->close();
     $conn->close();
	}
	}
	 else {
 echo "All field are required";
 die();
 }
  ?>