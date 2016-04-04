<?php
session_start();
require_once '../Auth.php';
require_once '../User.php';


if(isset($_SESSION['logged_in_user'])){
  var_dump($_SESSION['logged_in_user']);
  $user= $_SESSION(['logged_in_user']);
	var_dump($user);
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





<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    	  <form method="POST">
    	  <div class="sign-in">
    	  	<h2 class="sign-txt">Log In</h2>
	        <label for "username"></label>
	        <input  id="username" type="text" placeholder="Enter your username" name="user_name"><br>
	        <label for "password"></label>
	        <input id="password" type="password" placeholder="Enter your password" name="password"><br>
	        <button  id="sign-in-btn" type="submit" name='log-in' value='true' class="btn btn-default">Log In</button>
	      </div>
	      <p id='no-member'>Not a member?</p>
	      <p class='sign-up-link'><a href="users.create.php">Sign Up!</a></p>

	    </form>
    </div>
  </div>
</div>

<nav class="navbar navbar-default">
	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
			<li><a class="nav-text" href="index.php" id=''>Home</a></li>
			<li><a class="nav-text" href="account.php"  id='account' >Account</a></li>
			<li><a class="nav-text" href=""  id='' >Create</a></li>
			<li><a class="nav-text" href="logout.php"  id='log-out' >Logout</a></li>
			<li><a class="nav-text" href="" data-toggle="modal" data-target=".bs-example-modal-sm">Log In/Sign Up</a></li>
		  </ul>	     
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->


</nav>
