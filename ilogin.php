<!DOCTYPE html>
<html>


<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/ilogin.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body class="bg">
<br>
<br>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
					<br>
					<br>
                        <form action="login.html" method="POST" >
                            <h1 align="center" >Sorry Incorrect Credentials</h1>
							<h3 align="center">try again</h3>							
							<form action="login.html">
							<div align="center"><input type="submit"  class="btn btn-primary" value="Sign In"></div>
							</form>
                        </form>
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