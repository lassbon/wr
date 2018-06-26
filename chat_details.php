<?php

include('connection.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{

//echo "<script> console.log('gooo'); </script>";

	if(isset($_POST['email']))
	{
	
	   $email = htmlentities(addslashes($_POST['email']));
	$fullname = htmlentities(addslashes($_POST['username']));
	   $phone = htmlentities(addslashes($_POST['phone']));
	   
	   $encrypted_email =  bin2hex($email);
	   
	   if(!$email || $email==""){
		//pop up for no email error, email is required
		   echo("err");//email is required");
	   }
	   else{
		   //check if users submit users details 
		   //check if user email exist before if not go ahead to register user , else pop up for error
		    $sql = "select * from user_details where email='$email'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) //email exists so pop out to user
			{
				//pop out error for already existing email
				
				echo("error");//emails existed
				
			}
			else
			{
				//email does not exist so go ahead to register user
				$createdDate = date("Y-m-d G:i:s");
				$sql = "insert into user_details(email,phone_number,fullname,token,date)VALUES('$email','$phone','$fullname','$encrypted_email','$createdDate')";
				$result = $conn->query($sql);
				
					if($result)
					{
						echo("Details created successfully");

					} else{

						echo("Error inserting details into the database...");

					}	
					
				
			}
		
	}
	
	}
	
}


?>