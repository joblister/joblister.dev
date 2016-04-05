<?php
require_once '../Auth.php';
require_once '../Model.php';
require_once '../User.php';




if(!empty($_POST)){
	extract(userInput($dbc));
}

function userInput($dbc) {
	$errors = [];

	try { 
		$first_name = Input::getString('first_name');

	} catch (Exception $e) {
		$errors['first_name'] = $e->getMessage();
	}

	try {
		$last_name = Input::getString('last_name');
	} catch (Exception $e) {
		$errors['last_name'] = $e->getMessage();
	}

	try {
		$email = Input::getString('email');
	} catch (Exception $e) {
		$errors['email'] = $e->getMessage();
	}

	

	try {
		$user_name = Input::getString('user_name');
	} catch (Exception $e) {
		$errors['user_name'] = $e->getMessage();
	}

	

	
	var_dump($errors);
	echo 'the top is errors';

	if(empty($errors)){

		$first_name = Input::getString('first_name');
    	$last_name = Input::getString('last_name');
    	$user_name = Input::getString('user_name');
    	$email = Input::getString('email');
    
    	
    	$user = User::find(Auth::user()->id);

    	//overwriting user obj, see findbyUserName in User.php Model
    	

		$user->first_name = $first_name;
		
		$user->last_name = $last_name;
		
		$user->user_name = $user_name;
		
		$user->email = $email;
		var_dump($user);
		
		$user->save();
		$_SESSION['logged_in_user'] = $user;
		return array('user'=>$user,'errors'=>[]);
		
	} else {
		return array('errors'=>$errors,'user'=>new User);
	}

}


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

  	 .form3{
  	 	width: 99%;
  	 	margin: 0 auto;
  	 }

  	 .sign-placeholders3{
  	 	text-align: center;
  	 	
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
		<div class="col-md-8">
			<?php if(!empty($errors)): ?>
		 		<?php foreach ($errors as $error): ?>
		 		<h3><?= $error['first_name']?></h3>
		 		<h3><?= $error['last_name']?></h3>
		 		<h3><?= $error['user_name']?></h3>
		 		<h3><?= $error['email']?></h3>
		 		
		 		<?php endforeach; ?>
		 	<?php endif; ?>
		<form method="POST">
		 		 
			<h3 class="sign-placeholders">First Name</h3>
		    <textarea type="text" class="form-control form1"  name="first_name" aria-describedby="basic-addon1"><?= $user->first_name ?></textarea>
		    <h3 class="sign-placeholders">Last Name</h3>
		    <textarea type="text" class="form-control form1"  name="last_name" aria-describedby="basic-addon1"><?= $user->last_name ?></textarea>
		     <h3 class="sign-placeholders">Username</h3>
		      <textarea type="text" class="form-control form1"  name="user_name" aria-describedby="basic-addon1"><?= $user->user_name ?></textarea>
		    <h3 class="sign-placeholders">Email</h3>
		    <textarea type="text" class="form-control form1"  name="email" aria-describedby="basic-addon1"><?= $user->email ?></textarea>
		
		    <button  id="edit-btn" type="submit" class="btn btn-default">Submit</button>
		</form>

			 


		</div>



	</div>  <!-- end container -->


 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>

</body>
</html>