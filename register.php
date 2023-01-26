<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require_once 'conn.php';
	session_start();
	
	$firstnameErr = $lastnameErr  = $emailErr  = $usernameErr = $passwordErr = NULL;
	$firstname = $lastname  = $email  = $username = $password = NULL;
	$flag = true;
	
	if(ISSET($_POST['register'])){
	
		if (empty($_POST["firstname"])) {
			$firstnameErr = "First name is required";
			$flag = false;
		} else {
			$firstname = test_input($_POST["firstname"]);
		}
	
		if (empty($_POST["lastname"])) {
			$lastnameErr = "Last name is required";
			$flag = false;
		} else {
			$lastname = test_input($_POST["lastname"]);
		}
	
		if (empty($_POST["email"])) {
			$emailErr = "Email is required";
			$flag = false;
		} else {
			$email  = $_POST['email'];
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
				$emailErr = "Invalid email format";
				$flag = false;
			}
		}
	
		if (empty($_POST["username"])) {
			$usernameErr = "Username is required";
			$flag = false;
		} else {
			$username = test_input($_POST["username"]);
		}
	
		if (empty($_POST["password"])) {
			$passwordErr = "Input password";
			$flag = false;
		} else {
			$password = test_input($_POST["password"]);
		}
	
		if (strlen($_POST["password"]) < 8) {
			$passwordErr = "Password must be at least 8 characters";
			$flag = false;
		}
		if (!preg_match("/[a-z]/i", $_POST["password"])) {
			$passwordErr = "Password must contain at least one letter";
			$flag = false;
		}
		if (!preg_match("/[0-9]/", $_POST["password"])) {
			$passwordErr = "Password must contain at least one number";
			$flag = false;
		}
	
		if ($flag) {
			$password_hash = password_hash($password, PASSWORD_DEFAULT);
			mysqli_query($conn, "INSERT INTO `user` VALUES('', '$username', '$password_hash', '$firstname', '$lastname', '$email', '')") or die(mysqli_error());
			$link = "localhost/SEV/verified.php?email=".$email."";
			$message = "Hello $firstname $lastname! <br>"
				. "Please click the link below to confirm your email and complete the registration process.<br>"
				. "You will be automatically redirected to a welcome page where you can then sign in.<br><br>"            
				. "Please click below to activate your account:<br>"
				. "<a href='$link'>Click Here!</a>";
			}
		//Load composer's autoloader
		require 'vendor/autoload.php';

		$mail = new PHPMailer(true);                               

	try {
		//Server settings
		$mail->isSMTP();                                     
		$mail->Host = 'smtp.gmail.com';                      
		$mail->SMTPAuth = true;                             
		$mail->Username = 'janicecuagdan.bsit.ucu@gmail.com';     
		$mail->Password = 'hmotvekpsfdcoiaf';             
		$mail->SMTPOptions = array(
			'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			)
		);                         
		$mail->SMTPSecure = 'ssl';                           
		$mail->Port = 465;                                   

		//Send Email
		$mail->setFrom('janicecuagdan.bsit.ucu@gmail.com');

		//Recipients
		$mail->addAddress($email);              
		$mail->addReplyTo('janicecuagdan.bsit.ucu@gmail.com');

		//Content
		$mail->isHTML(true);                                  
		$mail->Subject = "Account registration confirmation";
		$mail->Body    = $message;

		$mail->send();

		header("location:verification.php?firstname=".$firstname."&lastname=".$lastname."&email=".$email."");
		
	} catch (Exception $e) {
		$_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
		$_SESSION['status'] = 'error';
	}

}
?>