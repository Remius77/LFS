<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$path = "/var/www/html/LFS";

	include_once("./controller/Controller.php");

	$controller = new Controller();
	$controller->invoke();

?>
