<?php
//the page after signed up
require_once('config.php');


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$country = $_POST['country'];


session_start();

try{
	sign_up($firstname,$lastname,$email,$country);
	echo ' Thanks for your sign up ! Enjoy the Ontario Summer ! </br> time：'.date('Y-m-d H:i:s');
	
}catch(Exception $e){
	echo $e -> getMessage();
	exit;
}
	

// $message = sign_up($firstname,$lastname,$email,$country);

// echo json_encode($message);

?>