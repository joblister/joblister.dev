<?php
require_once '../Model.php';
require_once '../User.php';


extract(User::find(5));
var_dump($id);
var_dump($result['first_name']);

extract(User::loggedInUser());
var_dump($first_name);



?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account</title>
	 <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'> 
  	 <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  	 <link rel="stylesheet" type="text/css" href="/css/joblister.css">

</head>
<body>
	<?php include 'partials/navbar.php';?>

	<div class="sign-up-form container">	
		<div class="col-md-4 sign-up-txt">
		<h1 id="sign-up-direction">Account</h1>
		
		</div>
		<div class="col-md-8">
		<form method="POST">
			<h3 class="sign-placeholders">First Name</h3>
		    <input type="text" class="form-control form1" placeholder="<?= $result['first_name']?>" aria-describedby="basic-addon1">
		    <h3 class="sign-placeholders">Last Name</h3>
		    <input type="text" class="form-control form1" placeholder="<?= $result['last_name']?>"  aria-describedby="basic-addon1">
		    <h3 class="sign-placeholders">Email</h3>
		    <input type="text" class="form-control form1" placeholder="<?= $result['email']?>"   aria-describedby="basic-addon1">
		    <h3 class="sign-placeholders">Password</h3>
		    <input type="password" class="form-control form1" placeholder="<?= $result['password']?>"   aria-describedby="basic-addon1">
		    <button  id="edit-btn" type="submit" class="btn btn-default">Edit</button>
	</div>
	</div>









 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>

</body>
</html>