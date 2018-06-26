<?php
session_start();
require_once 'twitteroauth.php';
require_once 'OAuth.php';

define("CONSUMER_KEY", "LcRJaC64Kgg2hmtt4UX0Mt1OM");
define("CONSUMER_SECRET", "Ikg47dGRfMHXKS8y4j9XpBMzC8SHWp5DXNFiOuAYssHt3zmJCt");
define("OAUTH_TOKEN", "991992816678133760-vfkueS9prOf3YjcSF29H4FZLfPemwgb");
define("OAUTH_SECRET", "aoYiKyTdD2gnSYnRxhvwlJMrA8bEIMz83hpylSP0gFeS7");
define("OAUTH_CALLBACK", "https://www.whodoyouwanttofind.com/tw_share/callback.php");


if(isset($_GET["redirect"]) && isset($_GET["image"]))
{
	  $status_image = $_GET["image"];
		$_SESSION['image'] =  $status_image;	  
      //define('ROOT_PATH',$_SERVER['DOCUMENT_ROOT']);
        $link_dir = "https://whodoyouwanttofind.com/".$status_image;	
  
    $access_token = $_SESSION['access_token'];
    $connection_1 = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
   $contentcallback ="raven is coming.Share and Win a Drone. click www.whodoyouwanttofind.com to get more info.";
 
 $content = $connection_1->get('account/verify_credentials');
$status = $connection_1->upload('statuses/update_with_media', array('status' => $contentcallback, 'media[]' => file_get_contents($link_dir)));

 json_encode($status_image);
  
 if($status){
	   $message = "Tweeted Sucessfully!!";
	  print('<script> console.log("i ma here"); </script>');
 }
 else{

 }
 
 
print_r($tweetMsg);
	
	
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

     $request_token = $connection->getRequestToken(OAUTH_CALLBACK);
 //var_dump($request_token);
    $_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
    $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
 
    switch ($connection->http_code) {
      case 200:
        $url = $connection->getAuthorizeURL($token);
		 print '<script>window.location ="'.$url.'"</script>';
       // header('Location: ' . $url); 
		
        break;
      default:
        $error =  'Could not connect to Twitter. Refresh the page or try again later.';
    }
    exit;
}


if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) 
{
    $image = $_GET["image"];
    echo '<a href="index.php?redirect=true?image='.$image.'><img src="./images/lighter.png" alt="Sign in with Twitter"/></a>';

  // header("Location: " .$link_dir);
}
else
{
    echo "<a href='destroysession.php'>Logout</a><br>";
    echo '<style>
    #status
    {
        width: 357px;
        height: 28px;
        font-size: 15px;
    }
    </style>
    <br>';
	if(isset($message))echo $message;
	echo'<br>';
 
}
?>