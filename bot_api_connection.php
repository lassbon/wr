<?php

function filter($data){
	
	$data = htmlentities(addslashes($data));
	return $data;
	
	
}
if(isset($_POST['message']))
{
	$msg = filter($_POST['message']);
	$msg = preg_replace('/\s+/', '_', $msg);
$jsonurl = 'http://40.76.200.154/api/v1/resource/books?msg="'.$msg.'"';
$json = file_get_contents($jsonurl);
//var_dump(json_decode($json));
$a = json_decode($json, true);

//print_r($a);

echo $a['msg'][0]['content'];
    
}

?>