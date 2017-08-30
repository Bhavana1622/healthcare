<?php
require 'session.php';
require  'connection.php';
if( (isset($_POST['email'])) && (isset($_POST['password'])) ){


$email = $_POST['email'];
$pass = $_POST['password'];
$pass_hash = md5($pass);
echo $pass_hash;

if((!empty($_POST['email'])) && (!empty($_POST['password']))){
	echo "okk";
	$query = "SELECT * FROM users WHERE email = '" .$email."'" AND "password = '" .$pass_hash. "'"; 


	if($result = mysql_query($query)){
		echo "string";
	$rows=	mysql_num_rows($result);
	if($rows == 0){
		echo "not a member";
	}
	elseif($rows == 1){
		echo "is a member";
	echo $name=	mysql_result($result, 0, 'name');
	$_SESSION['$name'] =$name;
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


<form method="POST" action="test.php">
	<input type="email" name="email">
	<input type="password" name="password">
	<input type="submit" name="submit" value="Login">
</form>




