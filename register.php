<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$password = $_POST['password'];
if (!empty($fname) || !empty($lname) ||!empty($email) || !empty($phone) || !empty($gender) ||  !empty($city) ||  !empty($state) ||  !empty($country) || !empty($password)) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "jaaydat";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
       die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   } else {
       $SELECT = "SELECT email From register Where email = ? Limit 1";
       $INSERT = "INSERT Into register (fname, lname, email, phone, gender, city,state,country,password) values(?, ?, ?, ?, ?, ?, ?,?, ?)";
     //Prepare statement
       $stmt = $conn->prepare($SELECT);
       $stmt->bind_param("s", $email);
       $stmt->execute();
       $stmt->bind_result($email);
       $stmt->store_result();
       $rnum = $stmt->num_rows;
       if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("sssisssss", $fname, $lname, $email, $phone, $gender, $city,$state,$country,$password);
          $stmt->execute();
          echo "<script>window.open('tregister.php','_self')</script>";
      } else {
          echo "Someone already register using this email";
      }
      $stmt->close();
      $conn->close();
      $filename = $_FILES["avatar"]["name"];
	//echo $filename;
    $file_basename = substr($filename, 0, strripos($filename, '.')); // get file extension
    //echo $file_basename;
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	//echo $file_ext;
	//$filesize = $_FILES["avatar"]["size"];
    //echo $filesize;
	$allowed_file_types = array('.jpg','.JPG');
	//if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000))
   // {
        // Rename file
    $newfilename = $email . $file_ext;
    if (file_exists("uploads/images/" . $newfilename))
    {
        unlink("uploads/images/".$newfilename);
    }
    $imageInformation = getimagesize($_FILES['avatar']['tmp_name']);
            //print_r($imageInformation);
            //$imageWidth = $imageInformation[0];
            //$imageHeight = $imageInformation[1];

            //if ($imageWidth <= 700 && $imageHeight <= 700) {
    move_uploaded_file($_FILES["avatar"]["tmp_name"], "uploads/images/" . $newfilename);
			//echo "<script>window.open('regend.html','_self')</script>";
            //} else{
            //    echo "image size is too large";
            //}

}
}
else {
   echo "All field are required";
   die();
}
?>
