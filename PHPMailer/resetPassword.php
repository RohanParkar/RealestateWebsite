<?php
include("config.php");

if (isset($_GET["code"])) {
	exit(cant find the page);
}

$code = $_GET["code"];

$getEmailQuery = mysqli_query($con, "SELECT email FROM resetPassword WHERE code='$code'");
if (mysqli_num_rows($getEmailQuery)== 0) {
	# code...
	exit("cant find the page");
}

?>