<?php
require 'session.php';
require 'connection.php';

if(isset($_SESSION['name']) && (!empty($_SESSION['name']))){
	header("Location:home.php ");
}
else {
	include 'test.php';
}

?>

