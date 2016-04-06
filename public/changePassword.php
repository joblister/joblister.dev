<?php
require_once '../Auth.php';
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
  	 <style>

  	 body{
  	 	background-color: lightblue;
  	 }

  	 .form3{
  	 	width: 100%;
  	 	margin: 0 auto;
  	 }

  	 .sign-placeholders3{
  	 	text-align: center;
  	 	
  	 }

  	 .postbtns{
  	 	display: flex;
  	 	flex-direction: row;
  	 	justify-content: center;
  	 	margin:10px;
  	 }
  	 #comment_delete_btn,#post_delete_btn{
			margin-right: 30px;
  	 }

  	  #comment_update_btn,#post_update_btn{
  	  		margin-left: 30px;
  	 	
  	 }

  	 </style>

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
 		</div>
 	    <div class='line'>
        </div>	
	
			
		
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>

</body>
</html>