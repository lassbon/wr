<?php

session_start();
session_destroy();

	 
$url = "../index.php";
	 print '<script>window.location ="'.$url.'"</script>';
      //   header('Location:' .$url);

 //header('Location: .$link_dir);
?>