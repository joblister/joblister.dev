<?php
session_start();
require_once '../Auth.php';
require_once '../User.php';
if(isset($_SESSION['logged_in_user'])){
  var_dump($_SESSION['logged_in_user']);
}

if(Auth::check()) {
	echo 'checking if user is already logged on' .PHP_EOL;
	//header('Location:/posts.php');
	//die();
}

if(!empty($_POST['user_name']) && !empty($_POST['password'])&&isset($_POST['log-in'])) {


	$attemptedUsername = Input::has('user_name') ?(Input::get('user_name')): "";
	$attemptedPassword = Input::has('password') ?(Input::get('password')): "";
	
	var_dump($attemptedUsername, $attemptedPassword);

	
	if(Auth::attempt($attemptedUsername, $attemptedPassword)){
	header('Location:/posts.php');

	die();
	}
	var_dump(Auth::attempt($attemptedUsername, $attemptedPassword));
	

	if(Auth::check()) {
		echo 'log in 1';
		header('Location:/posts.php');
		die();

		
	} elseif(isset($_SESSION['logged_in_user']) && $_SESSION['logged_in_user'] != ""){
		echo 'log in 2' . PHP_EOL;
		
		 header('Location:/posts.php');
		 die(); 


	}elseif(User::findByUserName($attemptedUsername) == $attemptedUsername && User::findByPassword($attemptedPassword) == $attemptedPassword) {
		echo 'log in 3' . PHP_EOL;
			$_SESSION['logged_in_user'] = $attemptedUsername;
			header('Location:/posts.php');
			die();

			

	} elseif($attemptedUsername != '' || $attemptedPassword != '') {
	echo "unsuccessful login attempt" .PHP_EOL;

	}

	


}






?>