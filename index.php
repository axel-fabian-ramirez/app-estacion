<?php 
	include 'env.php';

	include 'lib/Trivi.php';

	$_SECTION = explode("app-estacion/", $_SERVER["REQUEST_URI"]);

	unset($_SECTION[0]);

	$_SECTION = array_values($_SECTION);

	var_dump($_SECTION);

	//router
	if($_SECTION[0]==""){
		$section = 'landing';	
	}else{
		$section = $_SECTION[0];

		if(!file_exists("controllers/{$section}Controller.php")){
			$section = 'error404';
		}
		
	}

	include "controllers/{$section}Controller.php";

 ?>