<?php
if ($_POST) {
	
	$name = trim($_POST['name']);
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	////////////////////////////////
	/// edit following two lines ///
	////////////////////////////////
	
	$your_email = 'poorni@ensiz.com'; // Change the email address to which you want to receive emails.
	$subject = 'A message from  Peace - Responsive Landing Page'; // Change this subject for the emails that you receive
	
	
	///////////////////////////////
	
	
	$errors = array();
	$output = array();
	
	//form validation
	
	if(!empty($name)) {
		if (strlen($name) < 3) {
			$errors['name'] = "The name you entered is too short";	//You may change this line ->("The name you entered is too short")<- if you wish
		}else {
			$output['name'] = $name;	
		}
		
	} else {
		$errors['name'] = "Please enter your name";	//You may change this line ->("Please enter your name")<- if you wish
	}
	
	if(!empty($message)) {
		if (strlen($message) < 3) {
			$errors['message'] = "The message you entered is too short";	//You may change this line ->("The message you entered is too short")<- if you wish
		}else {
			$output['message'] = $name;	
		}
		
	} else {
		$errors['message'] = "Please leave a message";	//You may change this line ->("Please leave a message")<- if you wish
	}
	
	if(!empty($email)) {
		if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $_POST['email'])) {
			$errors['email'] = "Please enter a valid email address";	//You may change this line ->("Please enter a valid email address")<- if you wish
		}else {
			$output['email'] = $email;	
		}
		
	} else {
		$errors['email'] = "Please enter a valid email address";	//You may change this line ->("Please enter a valid email address")<- if you wish
	}
	
	
	
	if (!empty($errors)) {
		$array = array('error' => true, 'fields' => $errors);
	} else {
	
		// sending email		
		
		$to = $your_email;
		$from = $email;
		$headers = "From: " . strip_tags($_POST['name']) . "<" . strip_tags($_POST['email']) . ">\r\n";
		$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		
		
		$message = preg_replace('/\n/', '</p><p>', strip_tags( $message, "\n"));

		$message = '<!DOCTYPE html>
		<html lang="en">
		<head><meta charset="utf-8"><title>' . $subject . '</title></head>
		<body><div><p>' . $message . '</p></div></body>
		</html>';
			
		$sent = mail($to,$subject,$message,$headers);	
	
		$success_alert = '<h3>Your message was sent successfully</h3>'; //you may change the text between <h3> and </h3>, if you like.	
		$array = array('error' => false, 'message' => $success_alert);
	}
	
	echo json_encode($array);


}