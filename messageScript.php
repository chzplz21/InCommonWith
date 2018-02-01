<?php 
session_start();
$link = mysqli_connect("shareddb1b.hosting.stackcp.net", "users5-358b16", "BlahBlah2", "users5-358b16");


if (mysqli_connect_error()) {

die ("error");

}
else {
	
}

/*
$bmail = $_SESSION['email'];
$maxRowEmail = $_SESSION['maxRowEmail']; 
$questionsArray = $_SESSION['questionsArray'];
$commonAmount = $_SESSION['commonAmount'];
*/

$commonArray = $_SESSION['commonArray'];
$_SESSION['commonArray'] = $commonArray;







/*

 if ($_POST['SubMessage'] == '1') {
	 

	 $ID = $_SESSION['ID'];
	 $bmail = $_SESSION['email']; 
	 $maxRowEmail = $_SESSION['maxRowEmail']; 
	 $maxRowId = $_SESSION['maxRowId'];
	
	$message = $_POST['Message']; 
			
	$query = "INSERT INTO messages (FromID, FromEmail, RecievedID, ReceivedEmail, Message)
		VALUES ('$ID', '$bmail', '$maxRowId', '$maxRowEmail', '$message')";
	
		if (mysqli_query($link, $query)) {
			echo "New message created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $link->error;
		}

	
	
 }
 
 */
 
 
 
 ?>
 
 
 
 <html>
 
 
 <head>
 
 
 </head>
 
 
 <body>
 
 <a href = "results2.php">Back home </a>
 

 
 </body>
 
 </html>
 
 
  
