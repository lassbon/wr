<?php
if(isset($_POST['email'])){
	
	echo bin2hex($_POST['email']);
}

?>