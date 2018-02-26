<?php
//$username="";
//$email="";
$errors=array();

//connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration');

if($db){
	//die ("connection success");
}

//if register button is clicked
if(isset($_POST['register'])){
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

	//ensure that formfiels are filled properly
	if(empty($username)){
		array_push($errors, "Username is required");
	} 
	if(empty($email)){
		array_push($errors, "Email is required");
	} 
	if(empty($password_1)){
		array_push($errors, "Password is required");
	} 
	if($password_1 !=$password_2){
		array_push($errors, "The two passwords do not match");
	}

	//die( count($errors));
	//if there is no errors, save user to database
	if(count($errors)==0){
		$password=md5($password_1); //encrypt password before storing to db(security)
		$sql="INSERT INTO users(username, email, password) VALUES('$username','$email','$password')";
		$responce=mysqli_query($db,$sql);
		if ($responce){
			die ("SUCCESSFULL REGISTRATION");
			//return;
		}
		die ("REGISTRATION failed");
		
	}
	die(json_encode($errors));

return;
}
//die("not registration");

?>