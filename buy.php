<?php
session_start();
?>

<?php


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "jaaydat";
				//create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Buy</title>
	<link rel="stylesheet" href="css/buy.css"  >
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  
<style>
.card-horizontal {
    display: flex;
    flex: 1 1 auto;
}

.container-fluid {
  border: double;
  padding: 35px;
  margin: 10px;
}

.card{ margin: 20px; }

.card-horizontal{ float: center;
padding: 10px;
 }

.img-square-wrapper
{
	padding: 10px;
}
.card-body
{
	padding: 30px;
}

</style>
</head>
<body>
	<?php include('header.php');?>
	<div class="header">
		<form>
			<h1>Jaaydat.com</h1>
			<div class="form-box">
				<input type="text" class="search-field location" name="city" placeholder="City">
				<input type="text" class="search-field location" name="bhk" placeholder="bhk">
				<button class="search-btn" type="submit" name="search" id="search" >Search</button>

			</div>
		</form>
	</div>





	<?php
	if(isset($_GET['search']))
	{

		$city = $_GET['city'];
		$bhk = $_GET['bhk'];



		$query  = "SELECT * FROM property WHERE prop_city='$city' and bhk_type='$bhk'";
		$result = $conn->query($query);
		$row = $result->fetch_array(MYSQLI_NUM);


		$rows = $result->num_rows;
		echo"<h4> $rows  Results</h4>";
		for ($j = 0 ; $j < $rows ; ++$j)
		{
			$result->data_seek($j);
			$row = $result->fetch_array(MYSQLI_NUM);



echo"<div class='container-fluid'>";
    echo"<div class='row'>";
        echo"<div class='col-12 mt-3'>";
            echo"<div class='card'>";
                echo"<div class='card-horizontal'>";
                    echo"<div class='img-square-wrapper'>";
							echo" <img class='card-img-top' src='images/$row[3].jpg' width='300'  height='350' style='float: left;  ' >";
		
                   echo" </div>";
                   echo" <div class='card-body'>";
						


			echo "<p ><b> Apartment Type: </b>$row[2]</p>";
			echo "<p ><b> Apartment Name: </b>$row[3]</p>";
			echo "<p ><b> No of Bedrooms: </b>$row[4]</p>";
			echo "<p ><b> floors: </b>$row[5] <b> Total floors: </b>$row[6]</p>";
			echo "<p ><b> Property Age: </b>$row[7]</p>";
			echo "<p ><b> Property Size: </b>$row[8]</p>";
			echo "<p ><b>Proprty city: </b>$row[9]</p>";
			echo "<p ><b> Propert locality: </b>$row[10]</p>";
			echo "<p ><b> Property street: </b>$row[11]</p>";
			echo "<p ><b> Property state: </b>$row[12]</p>";
			echo "<p ><b> Expected Amount: </b>$row[13]</p>";
			echo"<div align='center'><input type='submit'  class='btn btn-primary' value='Contact_us'></div>";
                    echo"</div>";
                echo"</div>";
                
            echo"</div>";
        echo"</div>";
    echo"</div>";
echo "</div>";

echo" <br><br>";







/*
			echo "<div class='card' style='width: 18rem'>";
			echo "<div class='c_img' style=' float: left '>";
			echo" <img class='card-img-top' src='images/$row[3].jpg' width='300'  height='350' style='float: left;  ' >";
			echo"</div>";

			echo "<div id='messages' style='padding: 2px;  float: right '>";


			echo "<p ><b> Apartment Type: </b>$row[2]</p>";
			echo "<p ><b> Apartment Name: </b>$row[3]</p>";
			echo "<p ><b> No of Bedrooms: </b>$row[4]</p>";
			echo "<p ><b> floors: </b>$row[5] <b> Total floors: </b>$row[6]</p>";
			echo "<p ><b> Property Age: </b>$row[7]</p>";
			echo "<p ><b> Property Size: </b>$row[8]</p>";
			echo "<p ><b>Proprty city: </b>$row[9]</p>";
			echo "<p ><b> Propert locality: </b>$row[10]</p>";
			echo "<p ><b> Property street: </b>$row[11]</p>";
			echo "<p ><b> Property state: </b>$row[12]</p>";
			echo "<p ><b> Expected Amount: </b>$row[13]</p>";
			echo "</div>";
			echo"</div>";
*/

		}







	}












	?>

<br>
	<br>
	<?php include('footer.php');?>









</body>
</html>
