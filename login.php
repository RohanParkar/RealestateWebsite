<?php  session_start();
?>


<?php



$email = $_POST['email'];
$password = $_POST['password'];
if (!empty($email) || !empty($password)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "jaaydat";
    //create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {



		$query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
		$result   = mysqli_query($conn,$query);
		$resultset= mysqli_fetch_array($result,MYSQLI_ASSOC);
	//$rows = $result->num_rows;
		if($resultset>0)
		{
			$_SESSION['email']=$email;


			echo "<script>window.open('home.php' , '_self')</script>";
		}
		else
			echo "<script>window.open('ilogin.php', '_self')</script>";
	}


}


?>
