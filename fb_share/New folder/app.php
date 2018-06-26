<?php
	require "main.php";
	
	 $helper = $fb->getRedirectLoginHelper();
	 // $_SESSION['FBRLH_state']=$_GET['code'];
	
	try {
		
	   	$accessToken = $helper->getAccessToken();
		
		
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  	echo "Graph returned error: " . $e->getMessage();
		//echo "i got heere into error";
	  	exit;
	}catch(Facebook\Exceptions\FacebookSDKException $e) {
	  	echo "Facebook SDK returned error: " . $e->getMessage();
		//echo "i got heere into error";
	  	exit;
	}
	 
	if (isset($accessToken)) {
	
		$cilent = $fb->getOAuth2Client();
		try {
		  $accessToken = $cilent->getLongLivedAccessToken($accessToken);
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  echo $e->getMessage();
		  exit;
		}
		 $_SESSION['token'] = (string) $accessToken;
		
	  	header('Location: index.php');
	  	
	} elseif ($helper->getError()) {
	 	echo "Sorry, You cannot use the app without these permissions. Go back to <a href = 'index.php'>home</a>.";
	  	exit;
	}
	
	if(isset($accessToken)){
		
		try {

  $response = $fb->get('me/accounts', $accessToken->getValue());
  $response = $response->getDecodedBody();

} catch(Facebook\Exceptions\FacebookResponseException $e) {
  
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;

} catch(Facebook\Exceptions\FacebookSDKException $e) {
  
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;

}
		
	}
	
	echo "<pre>";
print_r($response);
echo "</pre>";
		
?>