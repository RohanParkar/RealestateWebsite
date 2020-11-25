<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="TRAN DINH HONG" />
	<title>Contact us</title>
  <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
   <?php include('header.php');?>
   <div class="contact-wapper">
      <h2 class="title"><strong>Contact</strong> Us</h2>
      <form id="contactForm" action="contact-form.php" method="POST" >
         <div class="row">
            <div class="form-group">
               <div class="col-md-6">
                  <input type="text" value=""  maxlength="100" placeholder="Name"  class="form-control" name="name" id="name" required="" aria-required="true">
               </div>
               <div class="col-md-6">
                  <input type="email" value=""   maxlength="100" class="form-control" placeholder="Email" name="email" id="email" required="" aria-required="true">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group">
               <div class="col-md-12">
                  <input type="text" value=""  maxlength="100" class="form-control" placeholder="Subject" name="subject" id="subject" required="" aria-required="true">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group">
               <div class="col-md-12">
                  <textarea maxlength="5000" rows="10" class="form-control" name="message" id="message" placeholder="Message" required="" aria-required="true"></textarea>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <input type="submit" value="Send Message" class="btn btn-primary btn-lg"/>
            </div>
         </div>
		 
      </form>
   </div>
	<br>
	<br>
	<br>
	<?php include('footer.php');?>
</body>
</html>