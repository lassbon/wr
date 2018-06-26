<?php

include('connection.php');

if(isset($_POST['email'])){
	
	// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
	  $email = htmlentities(addslashes($_POST['email']));
	  	   if(!$email || $email==""){
		//pop up for no email error, email is required
		   echo("err");//email is required");
	   }
	   else{
		     $sql = "select * from user_details where email='$email'";
			 $result = $conn->query($sql);
			 $details = $result->fetch_assoc();	
			 if(count($details) > 0)
			 {				 
				echo $details["fullname"]."/". $details["token"];		
			 }
			 else{
				 echo "error";//Email does not exist, kindly regsiter as a new user
			 }
			 
			
		   
		   
	   }
	   
	   
	
}
	
	
	
	
	
}

?>