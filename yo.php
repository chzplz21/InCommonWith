<?php
session_start();   
$link = mysqli_connect("shareddb1b.hosting.stackcp.net", "users5-358b16", "BlahBlah2", "users5-358b16");


if (mysqli_connect_error()) {

die ("error");

}

//Handles a signup
if ($_POST['signUp'] == '1') {
		  
		  $error = "";
		
		  //no name
		  if (!$_POST['name']) {
			  $error .= "A name is required";
			  
			  //echo "<script type='text/javascript'>alert('$error');</script>";
			  
		  }
		  
		     // no password 
		  else if (!$_POST['location']) {
			  $error .= "A location is required";
			 //echo "<script type='text/javascript'>alert('$error');</script>";
			  
		  }
		  //no email 
		  else if (!$_POST['email']) {
			  $error .= "An email address is required";
			 // echo "<script type='text/javascript'>alert('$error');</script>";
			  
		  }
		  // no password 
		 else if (!$_POST['password']) {
			  $error .= "A password is required";
			  //echo "<script type='text/javascript'>alert('$error');</script>";
			  
		  }
		  
		 
		  else {
			
				$query = "SELECT id FROM users WHERE email = 
				'".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
				
				$result = mysqli_query($link, $query);
				//email already taken 
				if (mysqli_num_rows($result) > 0) {
					$error = "That email address is taken";
					//echo "<script type='text/javascript'>alert('$error');</script>";
				
				}
				//good, start inserting 	
				else {		
				  
				  //Variables for  email and password
				  $name = mysqli_real_escape_string($link, $_POST['name']); 
				  $location = mysqli_real_escape_string($link, $_POST['location']); 
				  $email = mysqli_real_escape_string($link, $_POST['email']);
				  $password = mysqli_real_escape_string($link, $_POST['password']);
				  
				  
				  //Inserts login info into DB
				  $query = "INSERT INTO users (Name, Location, email, password)
				  VALUES ('$name', '$location', '$email', '$password' )";
				  
				  $_SESSION['email'] = $email;
				  $_SESSION['name'] = $name;
				  $_SESSION['location'] = $location;
				 
				  
				  
				  header('Location: nextpage.php');
						
				  if (mysqli_query($link, $query)) {
						echo "New record created successfully";
					} else {
						echo "Error: " . $query . "<br>" . $link->error;
					}  
			
				}
			  
			  
			  }
	
		}


else {

	//Handles a login
	if ($_POST['LogIn'] == '0')	{
		
		//Variables for  email and password
		$email = mysqli_real_escape_string($link, $_POST['email']);
		$password = mysqli_real_escape_string($link, $_POST['password']);
			
		$query = "SELECT * FROM users WHERE email = '$email' ";
		
		$result = mysqli_query($link, $query);
		
		$row = mysqli_fetch_array($result);
		$error = "";
		
		if (isset($row)) {
			
			$enteredPassword = $password;
			
			if ($enteredPassword == $row['password']) {
				
				//Gets id of user who just logged in
				$_SESSION['id'] = $row['id'];
				
				//Gets email name of user to be sent to next page
				$_SESSION['email'] = $row['email'];
				$_SESSION['name']  = $row['Name'];
				$_SESSION['location'] = $row['Location']; 
				header('Location: results2.php');			
			
			}
			
				else {
				$error = "Sorry, wrong Password";
			}
			
		}
		
		
			else {	
				$error = "Sorry, that email address could not be found";	
			}
		
		
				
	}
	
}	

$logout = "";
//Handles a logout
if (array_key_exists("logout", $_GET)) {
	unset($_SESSION);	
	
	$logOut = "You are now logged out";
}

?>



<html>


<head>

<link rel="stylesheet" type="text/css" href="yo8.css">
<link href="https://fonts.googleapis.com/css?family=Finger+Paint|Knewave|Tillana" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arvo|Merriweather+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<meta name="viewport" content="width=device-width">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="loadImage.js"></script>


<style>







</style>



</head>

<body>



<img src = "NightSkyBigNow.jpg" onload="imgLoad(this)" >


<p id = "logout"> 
	<?php echo $logOut; ?> 
</p>


<div id = "middleBox">
 <div id = "Who"> Who do you have the most in common with...</div>
	<div id = "world">In the World?</div>
</div>


<div id = "text-box">

	Have you ever stared up at the night sky on a Friday, or even Tuesday night and wondered to yourself, “Who in this world do I have the common with?” And not even in a soul mate, lovey-duvvey way.
	<br>
	<br>
	Just straight up: Which human is the most similar to me? Do they live across the street? Or do they live across the Universe? 
	<br>
	<br>
	Just enter your name and location and you will be a guided through a simple 15 questions which have been expertly designed by Personality Scientists to determine who is the most similar to you in the world. From there you can send them a private message, get in touch with them, and perhaps even meet them! 


</div>

<div id = "error">
	<?php echo $error; ?>
	<button type="button" onclick="myFunction()">Ok</button>

</div>

<div id = "rightContainer">

	<div id = "form-holder-holder">
	 <div class = "form-holder">
		<div class = "TopText"> Sign up to take the questionairre! </div>
		<form class = "FormItself" method="post">
			
			<label>Your Name: 
				<input type="text" class = "enterText" name="name">
			</label>
			
			<label>Your Location: 
				<input type="text" class = "enterText" name="location">
			</label>
			
			<label>Email: 
			<input type="text" class = "enterText" name="email">
			</label>
			
			<label>Password:
			<input type="text" class = "enterText" name="password">
			</label>
			
			<input type = "hidden"  name="signUp" value = "1">
			<input class = "subButton" type="submit">
		</form>
		</div>
	  </div>	
	  
		
	<div id = "form-holder-holder2">
	 <div class = "form-holder">
		<div class = "TopText"> Sign In! </div>
		<form class = "FormItself" method="post">
			<label>Email:
				<input type="text" name="email">
			</label> 
			
			<label>Password:
				<input type="text" name="password">
			</label> 
			
			<input type = "hidden" name="LogIn" value = "0">
			
			<input class = "subButton" type="submit">
			<!--forgot password link -->
			<div id = "forgot">
				<a href = "forgot.php" style = "color: white">Forgot Password?</a>
			</div>
			
		</form>
	   </div>
	</div>

</div>


<!--Only displays when on small screens -->
<div id = "text-box2">
	Have you ever stared up at the night sky on a Friday, or even Tuesday night and wondered to yourself, “Who in this world do I have the common with?” And not even in a soul mate, lovey-duvvey way.
	<br>
	<br>
	Just straight up: Which human on this planet is the most similar to me? Do they live across the street? Or do they live across the planet? 
	<br>
	<br>
	Just enter your name and location and you will be a guided through a simple 15 questions which have been expertly designed by Personality Scientists to determine who is the most similar to you in the world. From there you can send them a private message, get in touch with them, and perhaps even meet them! 


</div>


<div id = "credit">Photo Credit: Aperture Vintage</div>
	
</div>


</body>
</html>


<script>
	


	 
	/*Handles Errors */
	var ErrorMessage = "";
	ErrorMessage = "<?php echo $error ?>";
	var error = document.getElementById("error");
	
	if (ErrorMessage != "") {
		
		error.style.display = "block";
		
	}
	
	/*Handles logout */
	var logoutMessage = "";
	logoutMessage = "<?php echo $logOut ?>";
	
	if (logoutMessage != "") {
		
		logout.style.display = "block";
		
	}
	
	function myFunction() {
		
		error.style.display = "none";
		
	}
	//document.write(message);
	



</script>