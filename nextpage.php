<?php
session_start();
 

 $email = $_SESSION['email'];
 $name = $_SESSION['name'];
 $location = $_SESSION['location'];
 
 
?>

<html>

<head>

<link rel="stylesheet" type="text/css" href="styles/nextpage.css">
<link href="https://fonts.googleapis.com/css?family=Chonburi" rel="stylesheet">
<meta name="viewport" content="width=device-width">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="Scripts/nextp2.js"> </script>
<script src="Scripts/loadImage.js"></script>

</head>

<body>


<img src = "NightSkyBigNow.jpg" id = "backgroundImage" onload="imgLoad(this)">


	
	

	<h1 id = "welcome"> Welcome <?php echo $name?>! </h1>

	<a id = "logout" href = "index.php?logout=1">Log Out</a>
	
		<div id = "promptContainer">
			<div class = "whitePrompt">
				Here are the  <span style = "color: white; text-decoration: underline; text-shadow: none">15</span> questions!
			</div>
			<div id = "blackPrompt">
				Just click on a picture to answer each question...
			</div>
			<div class = "whitePrompt" style = "margin-top: 0">
				At the buttom hit submit
			</div>
		</div>
		
		<!--start of the form -->
			<form action = "results2.php" id = "my_form" method="post">
				 <div class = "centeringDiv">
					<p class = "q">1. Which of these settings would you want to live in the most?</p>
					 
							<label>
							<input type = "radio" name = "Settings" value = "Big City" class = "blah">
								<div class = "box">
									<img src = "Images/BigCityNew.jpg" class = "squarePic" onload="imgLoad(this)">
									<div class = "boxText">Big City</div>
								</div>
							</label>
							
							<label>
							<input type = "radio" name = "Settings" value = "Town" class = "box">
								<div class = "box">
									<img src = "Images/smalltownNew.jpg" class = "squarePic" onload="imgLoad(this)">
									<div class = "boxText">Small Town</div>
								</div>
							<label>
							
							
							<label>
							<input type = "radio" name = "Settings" value = "Mountains" class = "box">
								<div class = "box">
									<img src = "Images/mountainNew.jpg" class = "squarePic" onload="imgLoad(this)">
									<div class = "boxText">Mountains</div>
								</div>
							</label>
							
							<label>
							<input type = "radio" name = "Settings" value = "Farm" class = "box">
								<div class = "box">
									<img src = "Images/FarmNew.jpg" class = "squarePic" onload="imgLoad(this)">
									<div class = "boxText">Farm</div>
								</div>
							</label>
							
						
							
							<label>
							<input type = "radio" name = "Settings" value = "Beachside Town" class = "box">
								<div class = "box">
									<img src = "Images/beachsideNew.jpg" class = "squarePic" onload="imgLoad(this)">
									<div class = "boxText">Beachside Town</div>
								</div>
							</label>
							
							<label>
							<input type = "radio" name = "Settings" value = "Old Style Market" class = "blah">
								<div class = "box">
									<img src = "Images/marketNew.jpg" class = "squarePic" onload="imgLoad(this)">
									<div class = "boxText">Old Style Village</div>
								</div>
							</label>
							
							<label>
							<input type = "radio" name = "Settings" value = "Outer Space" class = "box">
								<div class = "box">
								<img src = "Images/spaceNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Outer Space</div>
								</div>
							</label>		  	
			 <br>

				</div>
			
			<div class = "centeringDiv">
				<p class = "q">2. Which of these animals do you most identify with?</p>
					
						<label>
							<input type = "radio" name = "Animal" value = "Dog" class = "box">
								<div class = "box">
								<img src = "Images/DogNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Dog</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Animal" value = "Dolphin" class = "box">
								<div class = "box">
								<img src = "Images/dolphinNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Dolphin</div>
								</div>
						</label>
						
						
						
						
						<label>
							<input type = "radio" name = "Animal" value = "Bird" class = "box">
								<div class = "box">
								<img src = "Images/birdNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Bird </div>
								</div>
						</label>
						
						<label>
							<input type = "radio" name = "Animal" value = "Lion" class = "box">
								<div class = "box">
								<img src = "Images/lionNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Lion</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Animal" value = "Monkey" class = "box">
								<div class = "box">
								<img src = "Images/monkeyNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Monkey</div>
								</div>
						</label>

						<label>
							<input type = "radio" name = "Animal" value = "Sloth" class = "box">
								<div class = "box">
								<img src = "Images/slothNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Sloth</div>
								</div>
						</label>
						
					
			   <br>
			  
				 </div>
			  
			  

				<div class = "centeringDiv">
					<p class = "q">3. Which of these movie genres do you like the most?</p>
				   
						<label>
							<input type = "radio" name = "Movie" value = "Horror" class = "box">
								<div class = "box">
								<img src = "Images/horrorNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Horror</div>
								</div>
							</label>
							
						<label>
							<input type = "radio" name = "Movie" value = "Drama" class = "box">
								<div class = "box">
								<img src = "Images/titanicNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Drama</div>
								</div>
							</label>
							
						
						<label>
							<input type = "radio" name = "Movie" value = "Animated" class = "box">
								<div class = "box">
								<img src = "Images/animationNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Animated</div>
								</div>
							</label>
							
						
						<label>
							<input type = "radio" name = "Movie" value = "Action" class = "box">
								<div class = "box">
								<img src = "Images/actionNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Action/Adventure</div>
								</div>
							</label>
							
							
						<label>
							<input type = "radio" name = "Movie" value = "Documentary" class = "box">
								<div class = "box">
								<img src = "Images/documentaryNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Documentary</div>
								</div>
							</label>
							
							
								
						<label>
							<input type = "radio" name = "Movie" value = "Comedy" class = "box">
								<div class = "box">
								<img src = "Images/comedyNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Comedy</div>
								</div>
							</label>
							
							
						<label>
							<input type = "radio" name = "Movie" value = "Romantic Comedy" class = "box">
								<div class = "box">
								<img src = "Images/romanticComedyNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Romantic Comedy</div>
								</div>
							</label>
							
								
						<label>
							<input type = "radio" name = "Movie" value = "Experimental" class = "box">
								<div class = "box">
								<img src = "Images/experimentalNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Experimental Film</div>
								</div>
							</label>
							
				   <br>
			  
				 </div>		
					  
					  
					  
			 
				 <div class = "centeringDiv">
					<p class = "q">4. What kind of work do you do?</p>
				  
					  <label>
							<input type = "radio" name = "Work" value = "Arts/Entertainment" class = "box">
								<div class = "box">
								<img src = "Images/artsNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Arts/Entertainment</div>
								</div>
					</label>
					  
					  
					  <label>
							<input type = "radio" name = "Work" value = "Manual Labor" class = "box">
								<div class = "box">
								<img src = "Images/manualNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Manual Labor</div>
								</div>
					</label>
					
					
					
					
					 <label>
							<input type = "radio" name = "Work" value = "Customer Service/Retail-Hospitality" class = "box" >
								<div class = "box">
								<img src = "Images/customerNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Customer Service/Retail-Hospitality</div>
								</div>
					</label>
					
					
					 <label>
							<input type = "radio" name = "Work" value = "Education" class = "box">
								<div class = "box">
								<img src = "Images/teacherNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Education</div>
								</div>
					</label>
					
					
				
					
					
						
					<label>
							<input type = "radio" name = "Work" value = "Healthcare Field" class = "box">
								<div class = "box">
								<img src = "Images/doctorNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Healthcare Field</div>
								</div>
					</label>
					  
					  
					<label>
							<input type = "radio" name = "Work" value = "Law and Order" class = "box">
								<div class = "box">
								<img src = "Images/legalNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Law and Order</div>
								</div>
					</label>
					
					
					<label>
							<input type = "radio" name = "Work" value = "Mostly sitting in front of a computer doing stuff" class = "box">
								<div class = "box">
								<img src = "Images/computerManNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Mostly sitting in front of a computer doing stuff</div>
								</div>
					</label>
					  
					 <br>
			  
				 </div>		  
					  
					  
					 
			 <div class = "centeringDiv">
				<p class = "q">5. Would you rather?</p>
	
						<label>
							<input type = "radio" name = "rather_one" value = "Be the richest person in the world" class = "box">
								<div class = "box">
								<img src = "Images/moneyNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Be the richest person in the world</div>
								</div>
					</label>
					
					
					<label>
							<input type = "radio" name = "rather_one" value = "Easily have sex with anyone you want" class = "box">
								<div class = "box">
								<img src = "Images/pimpNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Easily have sex with anyone you want</div>
								</div>
					</label>
					
						
					<label>
							<input type = "radio" name = "rather_one" value = "Have a two hour conversation with God" class = "box">
								<div class = "box">
								<img src = "Images/God2New.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Have a two hour conversation with God</div>
								</div>
					</label>
					
						  
					 <br>
			  
				 </div>		  
						
					

			 <div class = "centeringDiv"> 
				<p class = "q">6. What kind of music do you listen to the most?</p>
			    
					<label>
							<input type = "radio" name = "Music" value = "Pop" class = "box">
								<div class = "box">
								<img src = "Images/popNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Pop</div>
								</div>
					</label>
					
					
						<label>
							<input type = "radio" name = "Music" value = "Rap" class = "box">
								<div class = "box">
								<img src = "Images/rapNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Rap</div>
								</div>
					</label>
					
					
						<label>
							<input type = "radio" name = "Music" value = "Rock" class = "box">
								<div class = "box">
								<img src = "Images/rockNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Rock</div>
								</div>
					</label>
					
					
					<label>
							<input type = "radio" name = "Music" value = "Electronic" class = "box">
								<div class = "box">
								<img src = "Images/electronicNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Electronic </div>
								</div>
					</label>
					
					
						
					<label>
							<input type = "radio" name = "Music" value = "New Age/Ambient" class = "box">
								<div class = "box">
								<img src = "Images/halpernNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">New Age/Ambient</div>
								</div>
					</label>
					
					
					<label>
							<input type = "radio" name = "Music" value = "Jazz" class = "box">
								<div class = "box">
								<img src = "Images/jazzNew.png" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Jazz</div>
								</div>
					</label>
					
					
							
					<label>
							<input type = "radio" name = "Music" value = "Classical" class = "box">
								<div class = "box">
								<img src = "Images/classicalNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Classical</div>
								</div>
					</label>
					
					
					<label>
							<input type = "radio" name = "Music" value = "Ethnic/World Music" class = "box">
								<div class = "box">
								<img src = "Images/ethnicNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Ethnic/World Music</div>
								</div>
					</label>
					 
					 <br>
			  
				 </div>		  
							
				
					
			  <div class = "centeringDiv">
				<p class = "q">7. Out of these experiences, during which have you felt the most intense enjoyment?</p>
 
					<label>
							<input type = "radio" name = "Experience" value = "Video Games" class = "box">
								<div class = "box">
								<img src = "Images/videoGamesNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Video Games</div>
								</div>
					</label>
					
					
						  
					<label>
							<input type = "radio" name = "Experience" value = "Playing Sports" class = "box">
								<div class = "box">
								<img src = "Images/sportsNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Playing Sports</div>
								</div>
					</label>
			 
			 
					<label>
							<input type = "radio" name = "Experience" value = "Dancing" class = "box">
								<div class = "box">
								<img src = "Images/dancing2New.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Dancing</div>
								</div>
					</label>
					
					
					
					<label>
							<input type = "radio" name = "Experience" value = "Eating" class = "box">
								<div class = "box">
								<img src = "Images/eatingNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Eating</div>
								</div>
					</label>
					
					
						
						<label>
							<input type = "radio" name = "Experience" value = "Conversation" class = "box">
								<div class = "box">
								<img src = "Images/conversationNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Conversation</div>
								</div>
					</label>
					
					
					<label>
							<input type = "radio" name = "Experience" value = "Sex" class = "box">
								<div class = "box">
								<img src = "Images/doghumpNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Sex</div>
								</div>
					</label>
					
					
						
					<label>
							<input type = "radio" name = "Experience" value = "Working" class = "box">
								<div class = "box">
								<img src = "Images/workingNew.png" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Working</div>
								</div>
					</label>
					
					
					<label>
							<input type = "radio" name = "Experience" value = "Making Art" class = "box">
								<div class = "box">
								<img src = "Images/artNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Making art</div>
								</div>
					</label>
					
				 <br>
			  
				 </div>		
				
			 
			 
			 
			   <div class = "centeringDiv">
				<p class = "q">8. Favorite Type of Beverage?</p>
			
						<label>
							<input type = "radio" name = "Beverage" value = "Beer" class = "box">
								<div class = "box">
								<img src = "Images/beerNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Beer</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Beverage" value = "Coffee" class = "box">
								<div class = "box">
								<img src = "Images/coffeeNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Coffee</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Beverage" value = "Juice" class = "box">
								<div class = "box">
								<img src = "Images/juiceNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Juice</div>
								</div>
						</label>
						
						
							
						<label>
							<input type = "radio" name = "Beverage" value = "Water" class = "box">
								<div class = "box">
								<img src = "Images/waterNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Water</div>
								</div>
						</label>
						
						
						
								
						<label>
							<input type = "radio" name = "Beverage" value = "Milk" class = "box">
								<div class = "box">
								<img src = "Images/milkNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Milk</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Beverage" value = "Liquor" class = "box">
								<div class = "box">
								<img src = "Images/liquorNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Liquor</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Beverage" value = "Soda" class = "box">
								<div class = "box">
								<img src = "Images/sodaNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Soda</div>
								</div>
						</label>
						
						
						
						
						<label>
							<input type = "radio" name = "Beverage" value = "Sports Drink" class = "box">
								<div class = "box">
								<img src = "Images/sportsdrinkNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Sports Drink</div>
								</div>
						</label>
						
						<label>
							<input type = "radio" name = "Beverage" value = "Tea" class = "box">
								<div class = "box">
								<img src = "Images/teaNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Tea</div>
								</div>
						</label>
						
						
						
						<label>
							<input type = "radio" name = "Beverage" value = "Wine" class = "box">
								<div class = "box">
								<img src = "Images/wineNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Wine</div>
								</div>
						</label>
						
			   <br>
			   
			   
				   </div>		
			 
			 <div class = "centeringDiv">
				<p class = "q">9. Out of these historical roles, which would you most want to be?</p>
				
						<label>
							<input type = "radio" name = "Historical" value = "Hunter Gathering Tribe Member" class = "box">
								<div class = "box">
								<img src = "Images/hunterNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Hunter Gathering Tribe Member</div>
								</div>
						</label>
						
						<label>
							<input type = "radio" name = "Historical" value = "Small Agricultural Community Farmer" class = "box">
								<div class = "box">
								<img src = "Images/farmerNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Small Agricultural Community Farmer</div>
								</div>
						</label>
						
					
						
							<label>
							<input type = "radio" name = "Historical" value = "Desert Nomad Caravan Member" class = "box">
								<div class = "box">
								<img src = "Images/DesertNomadNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Desert Nomad Caravan Member</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Historical" value = "Mideival Townfolk Member" class = "box">
								<div class = "box">
								<img src = "Images/MiddleAgesNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Mideival Townfolk Member</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Historical" value = "Nomadic Warrior" class = "box">
								<div class = "box">
								<img src = "Images/NomadsNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Nomadic Warrior </div>
								</div>
						</label>
						
					

						
			   <br>
			   
			   
				   </div>			
						
						
			  
			<div class = "centeringDiv">
				<p class = "q">10. Which of these is the most important quality to succeed in the world?</p>

						<label>
							<input type = "radio" name = "Qualities" value = "Agression" class = "box">
								<div class = "box">
								<img src = "Images/bullyNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Agression</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Qualities" value = "Kindness" class = "box">
								<div class = "box">
								<img src = "Images/kindnessNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Kindness</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Qualities" value = "Perserverence" class = "box">
								<div class = "box">
								<img src = "Images/perserveranceNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Perserverence</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Qualities" value = "Intuition" class = "box">
								<div class = "box">
								<img src = "Images/IntuitionNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Intuition</div>
								</div>
						</label>
						
						<label>
							<input type = "radio" name = "Qualities" value = "Rationality" class = "box">
								<div class = "box">
								<img src = "Images/rationalityNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Rationality</div>
								</div>
						</label>
						
						
			 
			 <br>
			   
			   
				   </div>	
			 
			 
			<div class = "centeringDiv">		   
				<p class = "q">11. Which of these concepts motivates you the most?</p>
				
						
						<label>
							<input type = "radio" name = "Motivation" value = "Fun" class = "box">
								<div class = "box">
								<img src = "Images/funNew.png" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Fun</div>
								</div>
						</label>
						
						<label>
							<input type = "radio" name = "Motivation" value = "Self Expression" class = "box">
								<div class = "box">
								<img src = "Images/self-expressionNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Self Expression</div>
								</div>
						</label>
						
						<label>
							<input type = "radio" name = "Motivation" value = "Money" class = "box">
								<div class = "box">
								<img src = "Images/moneyNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Money</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Motivation" value = "Meaning" class = "box">
								<div class = "box">
								<img src = "Images/meaningNew.png" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Meaning</div>
								</div>
						</label>
						
						
							
						<label>
							<input type = "radio" name = "Motivation" value = "Family" class = "box">
								<div class = "box">
								<img src = "Images/familyNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Family</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Motivation" value = "Religion" class = "box">
								<div class = "box">
								<img src = "Images/religionNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Religion</div>
								</div>
						</label>
						
						
						
						<label>
							<input type = "radio" name = "Motivation" value = "Sex" class = "box">
								<div class = "box">
								<img src = "Images/doghumpNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Sex</div>
								</div>
						</label>
			   <br>
			   
				</div>	
			
			<div class = "centeringDiv">			
				<p class = "q">12. Which of these roles would you want the most?</p>
				
					<label>
							<input type = "radio" name = "WorkRoles" value = "Being part of a team" class = "box">
								<div class = "box">
								<img src = "Images/teamworkNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Being part of a team</div>
								</div>
						</label>
						
						<label>
						
						<input type = "radio" name = "WorkRoles" value = "Leading a team" class = "box">
								<div class = "box">
								<img src = "Images/red-leaderNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Leading a team</div>
								</div>
						</label>
						
						
						<label>
						
						<input type = "radio" name = "WorkRoles" value = "Being a wolf" class = "box">
								<div class = "box">
								<img src = "Images/wolfNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Being a lone wolf</div>
								</div>
						</label>

			 <br>
			 </div>	
			 
			 <div class = "centeringDiv">
				<p class = "q">13. Which of these would make the best vacation?</p>	
					<label>
							<input type = "radio" name = "Vacation" value = "Exploring Nature" class = "box">
								<div class = "box">
								<img src = "Images/NatureExploreNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Exploring Nature</div>
								</div>
						</label>
						
						
					<label>
							<input type = "radio" name = "Vacation" value = "Exploring Cities" class = "box">
								<div class = "box">
								<img src = "Images/CityExploreNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Exploring Cities</div>
								</div>
						</label>
						
						
					<label>
							<input type = "radio" name = "Vacation" value = "Gambling" class = "box">
								<div class = "box">
								<img src = "Images/gamblingNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Gambling</div>
								</div>
						</label>
						
					
							
					<label>
							<input type = "radio" name = "Vacation" value = "Cruise" class = "box">
								<div class = "box">
								<img src = "Images/cruiseNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Cruise</div>
								</div>
						</label>
						
						<label>
							<input type = "radio" name = "Vacation" value = "Humanitarian Trip" class = "box">
								<div class = "box">
								<img src = "Images/humanitarianNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Humanitarian Trip</div>
								</div>
						</label>

			  <br>
			</div>


			 <div class = "centeringDiv">
				<p class = "q">14. Which of these superpowers would you want the most?</p>
					
					<label>
							<input type = "radio" name = "Superpower" value = "Flying" class = "box">
								<div class = "box">
								<img src = "Images/flyingNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Flying</div>
								</div>
						</label>
						
						
					<label>
							<input type = "radio" name = "Superpower" value = "Read Minds" class = "box">
								<div class = "box">
								<img src = "Images/readMindsNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Read Minds</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Superpower" value = "Super Strength" class = "box">
								<div class = "box">
								<img src = "Images/super-strengthNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Super Strength</div>
								</div>
						</label>
						
						
						<label>
							<input type = "radio" name = "Superpower" value = "Become Invisible" class = "box">
								<div class = "box">
								<img src = "Images/Invisible-ManNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Become Invisible</div>
								</div>
						</label>
						
					  <label>
							<input type = "radio" name = "Superpower" value = "Walk through walls" class = "box">
								<div class = "box">
								<img src = "Images/walk-throughNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Walk through Walls</div>
								</div>
						</label>
						
						
						
			 <br>
			</div>


			<div class = "centeringDiv">
				<p class = "q">15. Which of these flowers would you want to smell the most right now if you could?</p>
				
					<label>
							<input type = "radio" name = "Flower" value = "Daisy" class = "box">
								<div class = "box">
								<img src = "Images/DaisyNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Daisy</div>
								</div>
						</label>
						
						
					<label>
							<input type = "radio" name = "Flower" value = "Rose" class = "box">
								<div class = "box">
								<img src = "Images/roseNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Rose</div>
								</div>
						</label>
						
						
					<label>
							<input type = "radio" name = "Flower" value = "Purple Hibiscus" class = "box">
								<div class = "box">
								<img src = "Images/purpleNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Purple Hibiscus</div>
								</div>
						</label>
						
						<label>
							<input type = "radio" name = "Flower" value = "Sunflower" class = "box">
								<div class = "box">
								<img src = "Images/sunflowerNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Sunflower</div>
								</div>
						</label>
						
							<label>
							<input type = "radio" name = "Flower" value = "Orange Primrose" class = "box">
								<div class = "box">
								<img src = "Images/orangeNew.jpg" class = "squarePic" onload="imgLoad(this)">
								<div class = "boxText">Orange Primrose</div>
								</div>
						</label>
						

			 <br>
			</div>
			  

			 
			<input type="submit" id = "subButton"> 
		</form>


</body>
<!--<script src="nextp2.js"> </script>-->




</html>


<script>



/*

$( document ).ready(function() {
	
	
	

	 $(".box").find('img').each(function(){ 
		var new_string = this.src.substring(0, this.src.lastIndexOf(".")) + "New" + this.src.substring(this.src.lastIndexOf("."));
		this.src = new_string;
	}) 
	
		
});
*/

</script>
