<?php
require 'session.php';
require  'connection.php';
if( (isset($_POST['email'])) && (isset($_POST['password'])) ){


$email = $_POST['email'];
$pass = $_POST['password'];
$pass_hash = md5($pass);


if((!empty($_POST['email'])) && (!empty($_POST['password']))){
  // echo "okk";
  $query = "SELECT * FROM user WHERE email = '" .$email."'" AND "password = '" .$pass_hash. "'"; 


  if($result = mysql_query($query)){
    // echo "string";
  $rows=  mysql_num_rows($result);
  if($rows == 0){
    // echo "not a member";
  }
  elseif($rows == 1){
    // echo "is a member";
   $id= mysql_result($result, 0, 'id');
   echo $id;
  $_SESSION['id'] =$id;
  
  header("Location:home.php ");
  }
  }
  else{
    echo mysql_error();
  }
}
else{
  echo "not okk";
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
<link rel="stylesheet" type="text/css" href="stle.css">
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
			<li><a  type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" >LogIn </a></li>
			<li style="padding-left: 20px;"><a  type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal2" > SignUp</a></li>
			</ul>

		</div>
	</div>
</nav>

<img src="carousel/image1.jpg" style="width: 100%;">


<div class="container-fluid bg-grey" style="padding-top: 100px; padding-bottom: 90px;">
	<h3 class="text-center">How it Works</h3>
	<div class="row">
		<div class="col-sm-3 col-sm-push-1" style="padding-left: 140px;">
			<img src="doc.jpg" class="img-responsive img-circle slideanim" style="width:250px; padding-top: 30px; padding-bottom: 30px;">
			<b style="padding-left: 30px;">Find a Doctor</b>
		</div>
		<div class="col-sm-3 col-sm-push-1" style="padding-left: 140px;">
			<img src="pay.jpg" class="img-responsive img-circle slideanim" style="width:300px; padding-top: 30px; padding-bottom: 50px;">
			<b style="padding-left: 30px;">Consultation Charges</b>
		</div>
		<div class="col-sm-3 col-sm-push-1" style="padding-left: 140px;">
			<img src="book.jpg" class="img-responsive img-circle slideanim"  style="width:250px; padding-top: 30px; padding-bottom: 68px;">
			<b style="padding-left: 30px;">Book an Appointment</b>
		</div>
	</div>
</div>



<div class="container-fluid " style="padding-top: 100px;" id="about">
<div class="row">
	<div class="col-sm-4">
		<span class="glyphicon glyphicon-globe logo slideanim"></span>
	</div>
	<div class="col-sm-8">
		<h3>About Us</h3>
		<p style="padding-top: 30px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>
	
</div>



  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Already a Member? LogIn</h4>
        </div>
        <div class="modal-body">
          <form action="index.php" method="POST">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password">
  </div>
  <input type="submit" class="btn btn-info" name="submit" value="LogIn"><br>
  <hr>
  <!-- 
   -->
  <button type="submit" class="btn btn-primary btn-block">LogIn with Facebook</button>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Not a Member? SignUp Now</h4>
        </div>
        <div class="modal-body">
          <form  >
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" required>
  </div>
    <div class="form-group">
    <label for="pwd">Re-Enter Password:</label>
    <input type="password" class="form-control" id="repwd" required>
  </div>
  <div class="form-group">
    <label for="pwd">Mob No.:</label>
    <input type="text" class="form-control" id="phone" required>
  </div>

  <button type="submit" class="btn btn-info">SignUp</button>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<script type="text/javascript">
	$(document).ready(function(){
		$(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
	})
</script>
</body>
</html>