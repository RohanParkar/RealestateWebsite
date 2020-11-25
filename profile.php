<?php
session_start();
?>
<html lang="en" dir="ltr">
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="css/profile.css">

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

  $user_id = $row[0];
  $user_fname = $row[1];
  $user_lname = $row[2];
  $user_email = $row[3];
  $user_phone = $row[4];
  $user_gender = $row[5];
  $user_city = $row[6];
  $user_state = $row[7];
  $user_coun = $row[8];
  ?> 
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
              <h1 align="center"> Your Profile</h1>
              <div class="col-md-12">
              </div>
              
              <div class="col-md-12">
               <div  align="center"> <img src="uploads/images/<?php echo $user ?>.jpg" width="200" height="200"> 
               </div> 
               <br>
             </div>
             <div class="clearfix"></div>
             <hr style="margin:5px 0 5px 0;">


             <div class="col-sm-5 col-xs-6 tital " >First Name :</div><div class="col-sm-7 col-xs-6 "><strong><?php echo $user_fname ?></strong></div>
             <div class="clearfix"></div>
             <div class="bot-border"></div>

             <div class="col-sm-5 col-xs-6 tital " >Last Name :</div><div class="col-sm-7"><strong><?php echo $user_lname ?></strong></div>
             <div class="clearfix"></div>
             <div class="bot-border"></div>

             <div class="col-sm-5 col-xs-6 tital " >Email :</div><div class="col-sm-7"><strong><?php echo $user_email ?></strong></div>

             <div class="clearfix"></div>
             <div class="bot-border"></div>
             <hr style="margin:5px 0 5px 0;">

             <div class="col-sm-5 col-xs-6 tital " >Phone Number :</div><div class="col-sm-7"><strong><?php echo $user_phone ?></strong></div>

             <div class="clearfix"></div>
             <div class="bot-border"></div>

             <div class="col-sm-5 col-xs-6 tital " >Gender :</div><div class="col-sm-7"><strong><?php echo $user_gender ?></strong></div>

             <div class="clearfix"></div>
             <div class="bot-border"></div>

             <div class="col-sm-5 col-xs-6 tital " >City :</div><div class="col-sm-7"><strong><?php echo $user_city ?></strong></div>

             <div class="clearfix"></div>
             <div class="bot-border"></div>

             <div class="col-sm-5 col-xs-6 tital " >State :</div><div class="col-sm-7"><strong><?php echo $user_state ?></strong></div>
             <div class="clearfix"></div>
             <div class="bot-border"></div>
             <hr style="margin:5px 0 5px 0;">
             
             <div class="col-sm-5 col-xs-6 tital " >Country :</div><div class="col-sm-7"><strong><?php echo $user_coun ?></strong></div>
             <div class="clearfix"></div>
             <div class="bot-border"></div>
             
             <br/>
             <form action="editprofile.php">
               <div align="center"><input type="submit"  class="btn btn-primary" value="Edit Profile"></div>
             </form>


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
