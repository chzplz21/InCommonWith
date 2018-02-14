<?php
	$link = mysqli_connect("shareddb1b.hosting.stackcp.net", "users5-358b16", "BlahBlah2", "users5-358b16");

	if (mysqli_connect_error()) {
		die ("error");
	}
	
	if ($_POST) {
		$email= mysqli_real_escape_string($link, $_POST['email']);
		$query = "SELECT * FROM users WHERE email = '$email' ";
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result);
		$password = $row[4];
		$message = "";
		
			
		if (isset($row)) {
			
			$emailTo = $email;
			$subject = "Forgotten Password";
			$body = "Hi friend here is your password: ".$password." ";
			$headers = "From: MostInCommonWith";
			
			if (mail($emailTo, $subject, $body, $headers)) {
				$message = "Thank you, an email has been sent to you with your password";
				
			}
			else {
				
			}
		
			
		}
		
		else {
			$message = "Sorry that email address could not be found";
		}
	
	}
	
	/*
	if (isset($row)) {
		echo '<script type="text/javascript">alert("hello!");</script>';
		
	}
	*/
	

?>


<html>

<head>
<link rel="stylesheet" type="text/css" href="styles/forgot.css">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Finger+Paint|Knewave|Tillana" rel="stylesheet">
<meta name="viewport" content="width=device-width">
</head>


<body>
	<a href = "yo.php" id = "back">Back Home</a>
	<div id = "middleBox">
		Forgot Password?
	</div>
	
	<div id = "inputHolder">
		
		Please enter your email address
		<form action="forgot.php" method="post" id = "input">
			<input type="text" id = "enterText" name="email"> <br>
			<input type="submit" id = "button" value="Submit">
		</form>
		<div id = "thanks"> <?php echo $message; ?> </div>
		
	</div>


</body>

</html>