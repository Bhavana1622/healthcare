<?php
require 'session.php';
require 'connection.php';

if(isset($_SESSION['id']) && (!empty($_SESSION['id']))){

function getField(){
   $query = "SELECT name FROM user WHERE id = '" .$_SESSION['id']."'"; 


  if($result = mysql_query($query)){
  if($rows=  mysql_result($result, 0, 'name')){
    return $rows;
  }
}
}
}



?>









<!DOCTYPE html>
<html>
<head>
	<title>DocHealthCare -Find the right Doctor for you today</title>
	<meta charset="utf-8">
	<meta name="author" content="Bhavana Sahil Shenai">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar">

<nav class="navbar navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		<button class="navbar-toggle" data-toggle="collapse" data-target="#view">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
			<a href="#" class="navbar-brand"><img src="logo.png" class="img-responsive img-circle" 
			style="width: 50px; position: absolute; top: 10px; left: 100px;"><h3 style="padding-left: 30px; position: absolute; top: 10px;left: 120px;">DocHealthCare</h3></a>
		</div>
		<div class="collapse navbar-collapse" id="view">
			<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <?php
           echo getField(); 
          ?>
        <span class="glyphicon glyphicon-option-vertical" style="color: blue"></span></a>
        <ul class="dropdown-menu">
          <li><a href="logout.php">LogOut</a></li>
          <li><a href="#">History</a></li>
          <li><a href="profile.php">Profile Settings</a></li>
        </ul>
      </li>
			
			</ul>

		</div>
	</div>
</nav>

<img src="carousel/image1.jpg" style="width: 100%;">





</body>
</html>
