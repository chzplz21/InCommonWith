


	var commonArray = <?php echo json_encode($commonArray) ?>;
	
	var questionsArray = <?php echo json_encode($questionsArray) ?>;
	
	
	
	document.write(typeof(questionsArray));
	
	var commonAmount = <?php echo $commonAmount ?>;
	document.write(commonAmount);
	
	
	var text =  document.createElement('p');
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
	
		


<!--Jquery -->


    // your code 
	
	window.onload = function(){ 
	
		$("#descriptionBox").click(function() {
			alert("yo");
		
		});

		
	$(window).resize(function(){
		
		 if ($(window).innerWidth() < 600) {
			 /*takes away parent divs */
			
			 $(".smallBox").unwrap();
			 $("#commonBox").unwrap();
			 /*puts commonBox befoe descripttion Box */
			 $("#commonBox").insertBefore("#descriptionBox");
			 
		 }
		 
	
		if ($(window).innerWidth() > 600) {
			 
			 if (!$('.smallBox').parent().hasClass('leftSide')) {
				$('.smallBox').wrap("<div class="leftSide"></div>");
				 
			 }
			 
		} 
			 
		
	});

		
	
	
	
	}