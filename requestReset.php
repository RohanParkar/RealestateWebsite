
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'config.php';

if (isset($_POST['email'])) {
	# code...
	$emailTo = $_POST['email'];
	$code = uniqid(true);
	$query = mysqli_query($con,"INSERT INTO resetPassword(code,email) VALUES('$code','$emailTo')");
	if (!$query) {
		# code...
		exit("error");
	}

// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	                        // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = 'yashpayare27@gmail.com';                     // SMTP username
	    $mail->Password   = 'iamacooldude';                               // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
	    $mail->Port       = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom('yashpayare27@gmail.com', 'Mailer');
	      // Add a recipient
	    $mail->addAddress($emailTo);              
	    $mail->addReplyTo('yashpayare27@gmail.com', 'No reply');
	    // Attachments

	    // Content
	    $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code=$code";
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = ' Your password reset link';
	    $mail->Body    = "Hello<br>
	    Click<a href='$url'>this link</a> this to reset your password";
	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    echo "<script>window.open('login.html','_self')</script>";
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}

?>