<?php
session_start();
$link = mysqli_connect("shareddb1b.hosting.stackcp.net", "users5-358b16", "BlahBlah2", "users5-358b16");



if (mysqli_connect_error()) {

die ("error");

}


	$bmail = $_SESSION['email'];
	$name = $_SESSION['name'];
	$location = $_SESSION['location'];
	$ID = $_SESSION['id'];
	
	//If survey just taken, then this triggers
	if ($_POST) {
	
		/*Session variable for current email which just registered or logged in*/
		
		$bmail = $_SESSION['email'];
		$name = $_SESSION['name'];
		$location = $_SESSION['location'];
		$ID = $_SESSION['id'];
		
		
		/*Rest of post variables submitted from form */
		
		
		$settings = $_POST['Settings'];

		$animal = $_POST['Animal'];
		$movie = $_POST['Movie'];
		$work = $_POST['Work'];
		$rather = $_POST['rather_one'];
		$music = $_POST['Music'];
		$experience = $_POST['Experience'];
		$beverage = $_POST['Beverage'];
		$historical = $_POST['Historical'];
		$qualities = $_POST['Qualities'];
		
		$motivation = $_POST['Motivation'];
		$roles = $_POST['WorkRoles'];
		$vacation = $_POST['Vacation'];
		$superpowers = $_POST['Superpower'];
		$flower = $_POST['Flower'];
		
		
		

	   /*Updates users from form data */

		$query = "UPDATE users SET  
		
		Setting = '$settings',
		Animal = '$animal',
		Movie = '$movie',
		Work = '$work',
		rather_one = '$rather', 
		Music = '$music',	
		Experience = '$experience', 
		Beverage = '$beverage',
		Historical = '$historical',
		Qualities = '$qualities',
		Motivation = '$motivation',
		WorkRoles = '$roles',
		Vacation = '$vacation',
		Superpower= '$superpowers',
		Flower = '$flower'
		
		
		

		WHERE email = '$bmail'";
		
		
	  //Does mysqli_query from the UPDATE 
		if (mysqli_query($link, $query)) {
			
		
		} else {
			echo "Error: " . $query . "<br>" . $link->error;
		} 
	
   }

	
  //This part always triggers
	//Query to get all data from the table 
	$sql = ("SELECT * FROM users") or die("Error: ". mysql_error(). " with query ");
	//Stores all the data into the object 'result' 
	$result = mysqli_query($link, $sql);
	//Variable for how many rows and how many columns in table 
	$num_rows = mysqli_num_rows($result);
	$num_fields = mysqli_num_fields($result);
	
	
	//Fetches all the rows and stores them in a 2d integer array 
	$rows = mysqli_fetch_all($result, MYSQLI_NUM);
	

	//query to get current row's id that has either logged in or signed up
	$query = "SELECT id FROM users WHERE email = '$bmail'";
	$result = mysqli_query($link, $query);
	$idResult = mysqli_fetch_object($result);
	$LoggedInId = $idResult->id;
	
	//Checks to see which row is currently logged in
	for ($i = 0; $i < $num_rows; $i++) {
		if ($rows[$i][0] == $LoggedInId) {
			$cur_row = $i;
			
		}
			
	}
	
	$array = array();
	$count=0;
	//Traverses every row and determines how many cells the current
	//row has in common with all other rows 
	for ($i=0; $i < $num_rows; $i++) {
		for ($z=5; $z < $num_fields; $z++) {
			
			if ($i != $cur_row) {
				if ($rows[$cur_row][$z] == $rows[$i][$z]) {
					$count++;
				}
			}
		
		}
		$array[$i] = $count;
		
		$count = 0;
	}
	

	
	//Determines which row has the most in common with the current row 
	$max=0;	
	$maxRow;
	for ($i=0; $i<$num_rows; $i++) {
		if ($array[$i]>$max) { 
			$max = $array[$i];
			$maxRow = $i; 				
	}
	}	
	
	//Gets the Email of the Row that has the most in common with the subject
	$maxRowName = $rows[$maxRow][1];
	
	//Gets every field that you have in common  
	$commonArray = array();
	$index = 0;
	for($i=5; $i<$num_fields; $i++) {
		
		if ($rows[$cur_row][$i] == $rows[$maxRow][$i]) {
		    $commonArray[$index] = $rows[$cur_row][$i];	
		} 
		else {
			$commonArray[$index] = "No";
		
			
		}
		
		$index++;
	


unset($value);
//Counts how many total you have in common 
	$commonAmount = 0;
	foreach ($commonArray as $value) {
		if ($value != "No") {
			$commonAmount++;
		}
			
	}


	}


$questionsArray = array("Which of these settings would you want to live in the most?", 
                        "Which of these animals do you most identify with?",
						"Favorite Genre of Movie?",
						"What kind of work do you do?",
						"Would you rather?",
						"What kind of music do you listen to the most?",
						"Out of these experiences, during which have you felt the most intense enjoyment?",
						"Favorite Type of Beverage?",
						"Out of these historical roles, which would you most want to be ?",
						"Which of these is the most important quality to succeed in the world?",
						"Which of these concepts motivates you the most?",
						"Which of these roles would you want the most?",
						"Which of these would make the best vacation?",
						"Which of these superpowers would you want the most?",
						"Which of these flowers you want to smell the most right now?"
						);
						
	
	$maxRowEmail = $rows[$maxRow][3];
		
	$maxRowId = $rows[$maxRow][0];
	
	$maxRowLocation = $rows[$maxRow][2];

	
		//Handles a logout
	if (array_key_exists("logout", $_GET)) {
		unset($_SESSION);	
		
		echo "You are now logged out";
	}


	
	
 



?>




<html> 


<head>

<link rel="stylesheet" type="text/css" href="results7.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Arvo|Merriweather+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>






<body>

<!--logout and retake -->
<div id = "leftTopText">
	<a href = "yo.php?logout=1">Log Out</a>
	<br>

	<a href = "nextpage.php?logout=1">Retake the Questionairre?</a>
</div>
	
<div class = "topText">Thanks <?php echo $name?>! Here are your results:</div>



	<!--Box which contains the three divs on left side -->
	<div class = "side" id = "sideOne">
	
		<div class = "smallBox" id = "first">
			<p class = "center">Your Info:</p>
			<div class = "info">
				<p class = "InfoLine">
					<span style = "color: blue">Name: </span><?php echo $name?> <br>
				</p>
				<p class = "InfoLine">
					<span style = "color: blue">Location: </span><?php echo $location?> <br>
				</p>
				<p class = "InfoLine">
					<span style = "color: blue">Email: </span><?php echo $bmail?> <br>
				</p>
			</div>
		 </div>
		 
		<!--What you have in common -->
		<div class = "BigBox" id = "commonBox">
			<p id = "text">
			
			</p>
				
		</div>
			 

	
	</div>	

	<!--Photo credit -->
<!--	
<div id = "credit">Photo Credit: Sam Wheeler</div>
-->

<div class = "side" id = "sideTwo">
	<div id = "bottomContainer">

			<div class = "smallBox" id = "SecondSmall">
				<p class = "center">You have the most in common with:</p>
					<div class = "info">
					   <p class = "InfoLine">
							<span style = "color: blue">Name: </span> <?php echo $maxRowName?> <br>
						</p>
						<p class = "InfoLine">
							<span style = "color: blue">Location: </span> <?php echo $maxRowLocation?><br>
						</p>
						<p class = "InfoLine">
							<span style = "color: blue">Email: </span><?php echo $maxRowEmail?><br>
						</p>
					</div>
				 
				 </p>
			</div>


		<!--personality description box-->		
		<div class = "BigBox">
			<p class = "center">Personality Analysis</p>
			
			Thank you for taking the time to answer these questions!
			<br><br>
			Based on your answers, we can create the following personality analysis:
			<br><br>
			You like the company of others, yet sometimes you would rather spend time by yourself. Out of the many people that you have met throughout your life, 
			you feel that you can only really "let loose" around a few.
			<br><br>
			You feel things deeply, but you are also deeply aware of the impermanence of emotions.
			<br><br>	
			When you engage in certain activities, you really put all of your effort into them. Then there are times when you relax and 
			step away from your work. You feel most creative while doing things you enjoy, but often times you must push through 
			or "grind" just to get the work done.
			<br><br>
			You are not greedy with money but you do wish you had more. You have a few possessions that you value highly but many are unnecessary and it wouldn’t 
			trouble you too much if you didn’t have them.  
			<br><br>
			You take pride in your appearance, and although you don’t always keep up with the latest fashion trends out of 
			Paris, you still like to choose clothes that you think look good on you. 
			<br><br>
			Spirituality is important to you. You may not always feel the need to proclaim to others what your beliefs are, but 
			deep down you know that there is something more “out there.” 
			<br><br>
			Looking back on your past, there are certain things that you wish you had done differently, but you have learned 
			from many of your mistakes.
			<br><br>
			You like to try new things, but you still understand that some caution is necessary before really diving in. 

			
		</div>
</div>	
			

	
</div>










		

	 <!--<button id = "myBtn">Send them a Message</button>-->
	
	
	<!--
	<div id = "myModal" class = "modal">
		 <div class = "modal-content">
			
			<form action = "results2.php" method="post">
				  
				  <div>Message:</div>
				  <textarea rows = "10" cols = "50" name = "Message">
				  bubEnter text here...
				  </textarea>
				  <input type="hidden" name="SenderId" value="<?php echo $ID;?>" >
				  <input type="hidden" name="SenderEmail" value="<?php echo $bmail;?>" >
				  <input type="hidden" name="MaxId" value="<?php echo $maxRowId;?>" >
				  <input type="hidden" name= "MaxEmail" value="<?php echo $maxRowEmail;?>" >
				  <input type="hidden" name= "CommonArray" value= '<?php echo json_encode($commonArray);?>' >
				  <input type="hidden" name= "CommonAmount" value="<?php echo $commonAmount;?>" >
				  
				  <input type="submit" name = "SubmitButton" >
				  
			</form>
		 
			<span class = "close">&times;</span>		
			</div>
	</div>
-->



	

</body>

</html>


<script>

	$(document).ready(function(){
			var commonArray = <?php echo json_encode($commonArray) ?>;
			
			var questionsArray = <?php echo json_encode($questionsArray) ?>;
			

			var commonAmount = <?php echo $commonAmount ?>;

			
			
			var text =  document.createElement('p');
			text.style.color = "blue";
			text.innerHTML = "You guys have " +commonAmount+ " things in common!";
			document.getElementById("commonBox").appendChild(text);
			
			
			//Used to keep track of how many are in common so height of "commonBox" div can be adjusted accordingly 

			var count = 0;
			

			
			for (var i=0; i < commonArray.length; i++) {
				
				if (commonArray[i] != "No") {
					//Put questions inside "commonBox" div
					var text = document.createElement("P");
					var t = document.createTextNode(questionsArray[i]);
					text.appendChild(t);
					document.getElementById("commonBox").appendChild(text);
					
				
					var text = document.createElement("P");
					var t = document.createTextNode(commonArray[i]);
					text.appendChild(t);
					document.getElementById("commonBox").appendChild(text).style.color = "blue";

					count++;
				}
			}
			
			
			 // run test on initial page load
			checkSize();

			// run test on resize of the window
			$(window).resize(checkSize);
			
			/////
			function checkSize () {
				
				if ( $(".side").css("display") == "block") {
					var element = $("#SecondSmall").detach();
					$(element).insertAfter("#first");
				}
				
				
				else {
					var element = $("#SecondSmall").detach();
					$("#sideTwo").prepend(element);
				}
			
			}
	
	
	});
	
		
</script>


	

	





