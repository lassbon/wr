<?php
session_start();
	require "Facebook/autoload.php";
	
	$fb = new Facebook\Facebook([
	  'app_id'                => '216867789112785',
	  'app_secret'            => '19e2e23a19800ddb4142f79f84ba73e3',
	  'default_graph_version' => 'v2.5',
	  'persistant_data_handler' => 'session'
	]);
?>