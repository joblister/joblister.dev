<?php
require_once '../Model.php';
require_once '../User.php';



if(!empty($_POST)){
	$errors = extract(userInput($dbc));

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
		$password = Input::getString('password');
	} catch (Exception $e) {
		$errors['password'] = $e->getMessage();
	}

	try {
		$user_name = Input::getString('user_name');
	} catch (Exception $e) {
		$errors['user_name'] = $e->getMessage();
	}

	if($_POST['password'] == $_POST['confirm_password']) {
		var_dump($_POST);
		echo 'the top is $POST';

	} else {
		 $errors[] ='passwords do not match. Please try again';
	}
	var_dump($errors);
	echo 'the top is errors';

	if(empty($errors)){
		$first_name = Input::getString('first_name');
    	$last_name = Input::getString('last_name');
    	$user_name = Input::getString('user_name');
    	$email = Input::getString('email');
    	$password = password_hash(Input::getString('password'), PASSWORD_DEFAULT);
    	
    	$user = New User;
		$user->first_name = $first_name;
		$user->last_name = $last_name;
		$user->user_name = $user_name;
		$user->email = $email;
		$user->password = $password;
		$user->save();
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
		 		<h3><?= $error['password']?></h3>
		 		<?php endforeach; ?>
		 	<?php endif; ?>
		<form method="POST">
		 		 
			<h3 class="sign-placeholders">First Name</h3>
		    <textarea type="text" class="form-control form1" placeholder="<?=$user->first_name?>" name="first_name"aria-describedby="basic-addon1"></textarea>
		    <h3 class="sign-placeholders">Last Name</h3>
		    <textarea type="text" class="form-control form1" placeholder="<?=$user->last_name?>" name="last_name"aria-describedby="basic-addon1"></textarea>
		     <h3 class="sign-placeholders">Username</h3>
		      <textarea type="text" class="form-control form1" placeholder="<?=$user->user_name?>" name="user_name"aria-describedby="basic-addon1"></textarea>
		    <h3 class="sign-placeholders">Email</h3>
		    <textarea type="email" class="form-control form1" placeholder="<?=$user->email?>" name="email"aria-describedby="basic-addon1"></textarea>
		    <h3 class="sign-placeholders">Password</h3>
		    <textarea type="password" class="form-control form1" placeholder="Password" name="password" aria-describedby="basic-addon1"></textarea>
		    <h3 class="sign-placeholders">Confirm Password</h3>
		     <textarea type="password" class="form-control form1" placeholder="Confirm Password" name="confirm_password" aria-describedby="basic-addon1"></textarea>
		    <button  id="edit-btn" type="submit" class="btn btn-default">Submit</button>
		</form>
		
	</div>
	</div>









 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>

</body>
</html>