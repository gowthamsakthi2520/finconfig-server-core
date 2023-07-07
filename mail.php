<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

session_start();
$type = $_POST['type'];
$mail = new PHPMailer(true);
//Enable SMTP debugging.
$mail->SMTPDebug = 2;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name                          
$mail->Host = "mail.oceansoftwares.in";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password     
$mail->Username = "gowtham@oceansoftwares.in";
$mail->Password = "Ocean@123456";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl";
//Set TCP port to connect to
$mail->Port = 465;
$mail->From = $_POST["email"];
$mail->FromName = $_POST["name"];
$mail->addAddress("gowthamsakthi2520@gmail.com", "ocean softwares");
$mail->isHTML(true);
$mail->Subject = $type . " Form";

// contact form mail

	if ($_POST['type'] !== "") { // inculdes forms mails


		if (!empty($_POST["message"])) {
			// NAME
			$name = $_POST["name"];
			// NUMBER
			$phone = $_POST["phone"];
			// EMAIL
			$email = $_POST["email"];
			$message = $_POST["message"];
			$Body = "";
			$Body .= "<table><tr><th>Name</th><td> : </td><td>$name</td></tr><tr><th>Number</th><td>:</td><td>$phone;</td></tr><tr><th>Email</th><td> : </td><td>$email</td></tr><tr><tr><th>Message</th><td> : </td><td>$message</td</tr>";
		} else {

			// NAME
			$name = $_POST["name"];
			// NUMBER
			$phone = $_POST["phone"];
			// EMAIL
			$email = $_POST["email"];
			// prepare email body text
			$Body = "";
			$Body .= "<table><tr><th>Name</th><td> : </td><td>$name</td></tr><tr><th>Number</th><td>:</td><td>$phone;</td></tr><tr><th>Email</th><td> : </td><td>$email</td></tr>";
		}

	}

$mail->Body = $Body;
try {
	$mail->send();
	echo "success";
} catch (Exception $e) {
	echo $e->getMessage();
}