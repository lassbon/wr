<?php
require_once('Facebook/autoload.php');

$fb = new Facebook\Facebook([
 'app_id' => '396372690766288',
 'app_secret' => 'e829619f77fe493a7b05385fbbdc2611',
 'default_graph_version' => 'v3.0',
]);


//Post property to Facebook
$linkData = [
 'link' => 'https://www.facebook.com/WorkRaven-188763121939653/',
 'message' => 'abayomi is testing WR here'
];
$pageAccessToken ='EAAFof7VuidABAPfN2OQfzGhIDoegsUZA0YKFCvPxNdPdKUREZCs5OQhxfEZCUOqyHdjrkZCPUTSGkjLYbCekKDXWVSOtmMCRsxl3KA0SIKngnwPEV7QOXo1zwhOs7sfX1KDqovecYUvR6HZAQEQFcYNZCTy3CRBgjcbNyrYG5zYSmWOJVVMKd7ZA3Y3k4RJ8EWOQ9M2yaXiPhMyKaaTMmrurYI0PWjvwLKPZBBFvSNgLXwZDZD';
try {
 $response = $fb->post('/me/feed', $linkData, $pageAccessToken);
 //header('location: ../index.html?share=true');
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 echo 'Graph returned an error: '.$e->getMessage();
 exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 echo 'Facebook SDK returned an error: '.$e->getMessage();
 exit;
}
$graphNode = $response->getGraphNode();


?>