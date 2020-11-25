<?php
session_start();
?>


<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/sell.css"/>
 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 -->
</head>

<body class="bg">

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
  $email=$row[3];
  $user_id = $row[0];
  $user_name = $row[1];
  $user_country = $row[7];
        //$user_image = $row[8];
  ?>


  <?php include('header.php');?>

  <div class="container contact-form">
    <div class="row">
        <div class="col-md-12 order-md-2">
            <strong>
                <h1 class="mb-3" font="times">SELL</h1>
            </strong>
            <hr>
            <hr />

            <h3 class="mb-3">Property Details</h3>
            <hr>


            <form  action="sell.php" method="POST" class="needs-validation" enctype='multipart/form-data' >
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="apartment type">Apartment Type*</label>
                        <input type="text" class="form-control" name="apartmentType" placeholder="apartmentType"  required>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="apartmentname">Apartment name*</label>
                        <input type="text" class="form-control" name="apartmentName" placeholder="apartmentName"  required>
                    </div>
                </div>


                <div>
                    <br />


                </div>



                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="bhk type">Bhk Type*</label>
                        <select  class="form-control" name="Tbhkype"  required>
                           <option value=""><------BHK?-----></option>
                           <option value="1">1BHK</option>
                           <option value="2">2BHK</option>
                           <option value="3">3BHK</option>
                           <option value="4">4BHK</option>
                       </select>
                   </div>
                   <div class="col-md-4 mb-2">
                    <label for="floor">Floor*</label>
                    <input type="number" class="form-control" name="floors"   min="0" max="100" placeholder="floor"  required>
                </div>
                <div class="col-md-4 mb-2">
                    <label for="floor">Total Floor*</label>
                    <input type="number" class="form-control" name="totalfloor"   min="0" max="100" placeholder="total floors"  required>
                </div>
            </div>

            <div>
                <br />
            </div>



            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="property age">Property Age*</label>
                    <input type="number" class="form-control" name="property_age"   min="0" max="100" placeholder="property age in years" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="apartmentname">Property Size*</label>
                    <input type="text" class="form-control" name="propertysize" placeholder="propertySize in sqft"  required>
                    <div class="invalid-feedback">
                        Property Size in sqft
                    </div>
                </div>
            </div>

            <div>
                <br />
                <br>
            </div>

            <hr>
            <h2 class="mb-3">Location Details</h2>
            <hr>



            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="city">City*</label>
                    <input type="text" class="form-control" name="city" placeholder="City" value="" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="locality">Locality*</label>
                    <input type="text" class="form-control" name="locality" placeholder="Locality" value="" required>
                </div>
            </div>

            <div>
                <br />
                <br>
            </div>



            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="streetarea">Street/Area*</label>
                    <input type="text" class="form-control" name="street" placeholder="Street/Area" value="" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="state">State*</label>
                    <select class="form-control" name="state" required>
                     <option value="">------------Select State------------</option>
                     <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                     <option value="Andhra Pradesh">Andhra Pradesh</option>
                     <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                     <option value="Assam">Assam</option>
                     <option value="Bihar">Bihar</option>
                     <option value="Chandigarh">Chandigarh</option>
                     <option value="Chhattisgarh">Chhattisgarh</option>
                     <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                     <option value="Daman and Diu">Daman and Diu</option>
                     <option value="Delhi">Delhi</option>
                     <option value="Goa">Goa</option>
                     <option value="Gujarat">Gujarat</option>
                     <option value="Haryana">Haryana</option>
                     <option value="Himachal Pradesh">Himachal Pradesh</option>
                     <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                     <option value="Jharkhand">Jharkhand</option>
                     <option value="Karnataka">Karnataka</option>
                     <option value="Kerala">Kerala</option>
                     <option value="Lakshadweep">Lakshadweep</option>
                     <option value="Madhya Pradesh">Madhya Pradesh</option>
                     <option value="Maharashtra">Maharashtra</option>
                     <option value="Manipur">Manipur</option>
                     <option value="Meghalaya">Meghalaya</option>
                     <option value="Mizoram">Mizoram</option>
                     <option value="Nagaland">Nagaland</option>
                     <option value="Orissa">Orissa</option>
                     <option value="Pondicherry">Pondicherry</option>
                     <option value="Punjab">Punjab</option>
                     <option value="Rajasthan">Rajasthan</option>
                     <option value="Sikkim">Sikkim</option>
                     <option value="Tamil Nadu">Tamil Nadu</option>
                     <option value="Tripura">Tripura</option>
                     <option value="Uttaranchal">Uttaranchal</option>
                     <option value="Uttar Pradesh">Uttar Pradesh</option>
                     <option value="West Bengal">West Bengal</option>
                 </select>
             </div>
         </div>

         <div>
            <br />
            <br>
        </div>



        <div>
            <br />
            <br>
        </div>

        <hr>
        <h3 class="mb-3">Buy Details</h3>
        <hr>



        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="Expectedsell">Expected Amount*</label>
                <input type="text" class="form-control" name="expected_amount" placeholder="Expected Amount" value="" required>
            </div>
        </div>

        <div>
            <br />
            <br>
        </div>




        <hr />
        <div>

            <label for="avatar">Insert images:</label>

            <input type="file" name="userFile"  required>
        </div>

        <div>
            <br />
            <br>
        </div>


        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Accept terms and condition</label>
        </div>
        <hr class="mb-4">
        <div class="row">
            <div class="col-md-6 mb-3">
                <button class="button" type="submit" name="submit">Save</button>
            </div>
            <div class="col-md-6 mb-3">
                <button class="button" type="back"><a href="home.php">Back</a></button>
            </div>
        </div>

    </form>
</div>
</div>
</div>

<br>
	<br>
	<br>
	<?php include('footer.php');?>

</body>
</html>









<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php

if(isset($_POST['submit']))
{


  $user=$_SESSION['email'];
  $query  = "SELECT * FROM register WHERE email='$user'";
  $result = $conn->query($query);
  $row = $result->fetch_array(MYSQLI_NUM);
  $email=$row[3];


  $apt_type = $_POST['apartmentType'];
  $apt_name = $_POST['apartmentName'];
  $bhk_type = $_POST['Tbhkype'];
  $floors = $_POST['floors'];
  $tfloor = $_POST['totalfloor'];
  $prop_age = $_POST['property_age'];
  $prop_size = $_POST['propertysize'];
  $city= $_POST['city'];
  $locality = $_POST['locality'];
  $street = $_POST['street'];
  $state = $_POST['state'];
  $exp_amt = $_POST['expected_amount'];
  $p_image=$_POST['userFile'];



$sql = "INSERT INTO property VALUES (null,'$email','$apt_type','$apt_name','$bhk_type','$floors','$tfloor','$prop_age','$prop_size','$city','$locality','$street','$state','$exp_amt','$p_image')";
$result   = $conn->query($sql);

if($result)
{
	$info = pathinfo($_FILES['userFile']['name']);
	$ext = $info['extension']; // get the extension of the file
	echo $ext;
	$dot='.';
	$newname = $apt_name.$dot.$ext; 

	$target = 'images/'.$newname;
	move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);

    echo "<script>window.open('home.php','_self')</script>";
} else
echo "Someone already register using this email";
}





?>


</body>

</html>
