<?php
require_once '../utils/Auth.php';
require_once '../models/User.php';
$errors = [];

if(!empty($_POST)){

    $errors=descAdd($dbc);

}

function descAdd($dbc){

     $errors = [];

    try {
          $first_name = Input::getString('first_name');

    } catch (Exception $e){

        
        $errors[] = $e->getMessage();

    }

    try {
          $last_name = Input::getString('last_name');

    } catch (Exception $e){

        $errors[] = $e->getMessage();

    }

    try {

        $user_name = Input::getString('user_name');

        $user = User::findByUserName($user_name);

        if($user != null){

        	$errors[] = "Username already exists!";

          }

    } catch (Exception $e){

        $errors[] = $e->getMessage();

    }

    try {
          $email = Input::getString('email');

    } catch (Exception $e){

        $errors[] = $e->getMessage();

    }

    try {

        $password = Input::getString('password');

    } catch (Exception $e){

        $errors[] = $e->getMessage();

    }

   

    if ($_POST["password"] == $_POST["confirmPassword"]) {
   		
	} else {
   
      	$errors[] = "Passwords do not match.";
   
	}

    if(empty($errors)){

        $user = new User();
        $user->first_name = Input::getString('first_name');
        $user->last_name = Input::getString('last_name');
        $user->user_name = Input::getString('user_name');
        $user->email = Input::getString('email');
        $password = Input::getString('password');
        $user->password = $password;
        $user->save();

        if (Auth::attempt($user->user_name, $password)) {
            header("Location: posts.php");
        }

    }

   var_dump($errors);     
    return $errors;


}//end descAdd

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
			
		}

	</style>
</head>
<body>
	<?php include 'partials/navbar.php';?>



	<div class="sign-up-form container">	
		<div class="col-md-4 sign-up-txt">
		<h1 id="sign-up-direction">Sign Up</h1>
		
		</div>
		<div class="col-md-8">	
		<form method="POST">
			<h3 class="sign-placeholders">First Name</h3>
		    <textarea type="text" class="form-control form1" name="first_name"  aria-describedby="basic-addon1"><?=empty($errors)? '' : Input::get('first_name','')?></textarea>
		    <h3 class="sign-placeholders">Last Name</h3>
		    <textarea type="text" class="form-control form1"  name="last_name"  aria-describedby="basic-addon1"><?=empty($errors)? '' : Input::get('last_name','')?></textarea>
		    <h3 class="sign-placeholders">Email</h3>
		    <textarea type="text" class="form-control form1"  name="email"  aria-describedby="basic-addon1"><?=empty($errors)? '' : Input::get('email','')?></textarea>
		    <h3 class="sign-placeholders">Username</h3>
		    <textarea type="text" class="form-control form1"  name="user_name"  aria-describedby="basic-addon1"><?=empty($errors)? '' : Input::get('user_name','')?></textarea>
		    <h3 class="sign-placeholders">Password</h3>
		    <textarea type="password" class="form-control form1"  name="password"  aria-describedby="basic-addon1"><?=empty($errors)? '' : Input::get('password','')?></textarea>
		     <h3 class="sign-placeholders">Confirm Password</h3>
		    <textarea type="password" class="form-control form1" name="confirmPassword" aria-describedby="basic-addon1"></textarea>
		    <button  id="profile-create" type="submit" class="btn btn-default">sign up</button>
		</form>
		</div>
	</div>

	<?php foreach($errors as $error): ?>
        <p><?= $error ?></p><br>
    <?php endforeach; ?>
   
  <?php include 'partials/footer.php';?>
		<script src="/js/practice.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>	
	
</body>
</html>