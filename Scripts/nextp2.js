


var master_array = new Array();
	master_array[0] = new Array("Big City", "Small Town", "Mountains", "Farm", "Woods", "Desert");
   
    master_array[1] = new Array("Dog", "Sloth", "Lion", "Bird", "Monkey", "Dolphin");

	master_array[2] = new Array("Horror", "Drama", "Animated", "Action/Adventure", "Romantic Comedy", "Documentary", "Comedy", "Experimental");
	
	master_array[3] = new Array("Manual/Physical Labor", "Sitting in front of computer", "Teaching", "Customer Service/Retail-Hospitality", "Playing Music", "Art(Painting, Illustration, etc.)",
	"Medical", "Acting", "Dancing", "Law", "Transportation");
	
	master_array[4] = new Array("Be the richest person in the world", "Have a two hour conversation with God", "Easily have sex with anyone you want");
	
	master_array[5] = new Array("Jazz/Blues/Funk", "Rock", "Rap", "Folk", "New Age/Ambient", "Electronic",  "Pop", "Classical", "Ethnic" );
	
	master_array[6] = new Array("Video Games", "Sports", "Dancing", "Eating", "Sex", "Conversation", "Working");
	
	master_array[7] = new Array("Beer", "Wine", "Juice", "Water", "Milk", "Liqour", "Soda", "Sports Drink", "Tea", "Coffee");
	
	
	master_array[8] = new Array("Hunter Gathering Tribe Member", "Small Agricultural Community Farmer", "Desert Nomad Camel Caravan Member",  "Middle Age Townfolk", "Nomadic Warrior/Rapist");
	
	master_array[9] = new Array("Agression", "Kindness", "Percerverence", "Intuition", "Rationality");
	
	master_array[10] = new Array("Meat", "Pasta", "Rice", "Pizza", "Cereal", "Salad", "Bread");
	
	master_array[11] = new Array("Fun", "Self Expression", "Sex", "Money", "Meaning", "Family", "Religion");
	
	master_array[12] = new Array("Being Part of a team", "Leading a team", "Being a lone wolf");
	
	master_array[13] = new Array("Exploring Nature", "Exploring cities", "Gambling", "Cruise", "Humanitarian trip");
		
	master_array[14] = new Array("Walk in the other direction", "Approach them and ask what going on", "Pour your drink on them", "Ask for security", "Ask your friends to come over for some backup");
	
	master_array[15] = new Array("90 Degrees", "80 Degrees", "70 Degrees", "60 Degrees", "50 Degrees", "40 Degrees", "30 Degrees");
	
	master_array[16] = new Array("Green", "Yellow", "Blue", "Orange", "Yellow", "Red", "Purple", "White", "Black", "Brown", "Pink");
	
	master_array[17] = new Array("Flying", "Read Minds", "Super Strength", "Become Invisible", "Walk through Walls");
	
	master_array[18] = new Array("Football", "Tennis", "Basketball", "Soccer", "Golf",
	"Baseball", "Gymnastics", "Boxing", "Cricket", "Volleyball",
	"Hockey", "Skiing", "Archery", "Badminton", "Bowling", 
	"Martial Arts", "Lacrosse", "Surfing", "Polo", "Running",
	"Softball", "Ice Skating", "Rugby", "Water Polo", "Squash",
	"Snowboarding", "Ping Pong", "Billiards", "Figure Skating", "Horse Racing", "Climbing",
	"Cycling", "Running", "Wrestling");
	

   
	
	
	
  
   
	var elements = document.getElementById("my_form").elements;
	
	for (var i = 0; i < master_array.length; i++) {
		master_array[i].sort();
		
		for (var x = 0; x < master_array[i].length; x++) {
			var label = document.getElementById(elements[i].id);
			var option = document.createElement("option");
			option.text=master_array[i][x];
			option.value = master_array[i][x];
			label.add(option);
	 }
	}


	

  var qs = document.getElementsByClassName("q");
   sessionStorage.setItem('myArray', qs);
   
   	
  //window.localStorage.setItem("qs2", JSON.stringify(qs)); 
   
  console.log(myArray[2].innerHTML);
	
	

