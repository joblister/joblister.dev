<?php
require_once '../Model.php';
require_once '../User.php';











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

	<div class="account-form container">	
		<div class="col-md-4 account-txt">
		<h1 id="account-direction">Account</h1>
		<h4 class="account-info">Made a mistake putting in your information?<br>
			No Worries! We got you covered</h4>

		<div class='line'>
      	</div>
      	<h4 class="account-info"> Step 1. On your right you will see the original information you put in. To 
 			make a change, just type in the fields you wish to correct. Yup it's easy as that!
 		</h4>
 		<div class='line'>
      	</div>
 		<h4 class="account-info"> Step 2. Review Your changes. Are they correct?</h4>
 		<div class='line'>
      	</div>
 		<h4 class="account-info"> Step 3. If so, Congrats! Just click on the submit button, You have
 			now officially edited your information. Your wish is our command.</h4>
 		<div class='line'>
      	</div>
		</div>
		<div class="col-md-8">
		<form method="POST">
			<h3 class="sign-placeholders">First Name</h3>
		    <textarea type="text" class="form-control form1" placeholder="<?= $result['first_name']?>" aria-describedby="basic-addon1"></textarea>
		    <h3 class="sign-placeholders">Last Name</h3>
		    <textarea type="text" class="form-control form1" placeholder="<?= $result['last_name']?>"  aria-describedby="basic-addon1"></textarea>
		    <h3 class="sign-placeholders">Email</h3>
		    <textarea type="text" class="form-control form1" placeholder="<?= $result['email']?>"   aria-describedby="basic-addon1"></textarea>
		    <h3 class="sign-placeholders">Password</h3>
		    <textarea type="password" class="form-control form1" placeholder="<?= $result['password']?>"   aria-describedby="basic-addon1"></textarea>
		    <button  id="edit-btn" type="submit" class="btn btn-default">Edit</button>
	</div>
	</div>









 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>

</body>
</html>