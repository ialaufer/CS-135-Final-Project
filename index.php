<?php 
    echo  "index";
	include_once("application/controller/controller.php");
	$controller = new Controller();
	$controller->invoke();
?>