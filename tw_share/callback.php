<?php

session_start();
require_once 'twitteroauth.php';

define("CONSUMER_KEY", "LcRJaC64Kgg2hmtt4UX0Mt1OM");
define("CONSUMER_SECRET", "Ikg47dGRfMHXKS8y4j9XpBMzC8SHWp5DXNFiOuAYssHt3zmJCt");
define("OAUTH_TOKEN", "991992816678133760-vfkueS9prOf3YjcSF29H4FZLfPemwgb");
define("OAUTH_CALLBACK", "https://www.whodoyouwanttofind.com/tw_share/callback.php");
 
if (isset($_REQUEST['oauth_token']) && $_SESSION['oauth_token'] !== $_REQUEST['oauth_token']) {
  $_SESSION['oauth_status'] = 'oldtoken';
 // header('Location: ./destroysession.php');
 $url = "./destroysession.php";
  	 print '<script>window.location ="'.$url.'"</script>';
}



$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
//save new access tocken array in session
$_SESSION['access_token'] = $access_token;
 
unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_token_secret']);
 
if (200 == $connection->http_code)
	{
	
      define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']);
    //  echo $link_dir = ROOT_PATH. "wrr/WR/tw_share/".$status_image;	
	  
  $_SESSION['status'] = 'verified';
  $image = $_SESSION['image'] ;
  //$link = ROOT_PATH. "wrr/WR/WR__/tw_share/index.php";
  	 
$url = "../index.php?s=true";
                 // header('Location:' .$url);
  	 print '<script>window.location ="'.$url.'"</script>';
				  
  //echo $link;

  
} else {
 // header('Location: ./destroysession.php');
  
 $url = "./destroysession.php";
  	 print '<script>window.location ="'.$url.'"</script>';
}


?>