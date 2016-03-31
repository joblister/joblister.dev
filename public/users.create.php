<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/joblister.css">
	<meta charset="UTF-8">
	<title>Sign-Up</title>
	<style>
		body {
			overflow:hidden;
		}

	</style>
</head>
<body>
	<?php include 'partials/navbar.php';?>



	<div class="sign-up-form">	
		<div class="sign-up-txt">
		<h1 id="sign-up-direction">Sign Up</h1>

		</div>	
		<form method="POST">
			<h3 class="sign-placeholders">First Name</h3>
		    <input type="text" class="form-control form1"  aria-describedby="basic-addon1">
		    <h3 class="sign-placeholders">Last Name</h3>
		    <input type="text" class="form-control form1"  aria-describedby="basic-addon1">
		    <h3 class="sign-placeholders">Email</h3>
		    <input type="text" class="form-control form1"  aria-describedby="basic-addon1">
		    <h3 class="sign-placeholders">Username</h3>
		    <input type="text" class="form-control form1"  aria-describedby="basic-addon1">
		    <h3 class="sign-placeholders">Password</h3>
		    <input type="password" class="form-control form1"  aria-describedby="basic-addon1">
		     <h3 class="sign-placeholders">Confirm Password</h3>
		    <input type="password" class="form-control form1"  aria-describedby="basic-addon1">
		    <button  id="profile-create" type="button" class="btn btn-default">sign up</button>

	</div>

		<script src="/js/practice.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>	
	
</body>
</html>