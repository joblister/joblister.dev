<?php
require_once '../utils/Auth.php';
require_once '../models/Model.php';
require_once '../models/User.php';
require_once '../utils/Input.php';

$user = ($_SESSION['logged_in_user']);

var_dump($user);


if(!empty($_POST)){
    extract(userInput($dbc));
}

function userInput($dbc) {
$errors = [];
$success = [];

if (Input::get('password') == '') {
    $errors['emptyPassword'] = 'Password can not be empty';
}else{
    $password = Input::get('password');
}

if (Input::get('confirmPassword') == '') {
    $errors['emptyPassword'] = 'Password can not be empty';
}else{
    $password = Input::get('password');
}

if (Input::get('password') != Input::get('confirmPassword')) {
    $errors['doNotMatch'] = 'Password does not match';
}else{
    $password = Input::get('password');

}

 if (Input::get('password') == Input::get('confirmPassword'))  {
    $success['successful'] = 'Update Successful!';
 }

try { 
    $password = Input::getString('password');

} catch (Exception $e) {
    $errors['password'] = $e->getMessage();
}

try { 
    $confirmPassword = Input::getString('confirmPassword');

} catch (Exception $e) {
    $errors['confirmPassword'] = $e->getMessage();
}

if (empty($errors) && $password == $confirmPassword) {

    $user = User::find(Auth::user()->id);
    
    $user->updatePassword($password);

    var_dump($user->password);

    $_SESSION['logged_in_user'] = $user;

    var_dump($user);
  
    return array('user'=>$user,'errors'=>$errors);
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
    		
    		<h4 class="account-info">Made a mistake entering your information?<br>
    			No Worries! Follow the instructions below:</h4>
    	    <div class='line'>
          	</div>
          	<h4 class="account-info"> Step 1. On your right, you will see your current information. To 
     			make a change, just type in the fields you wish to correct. Yes, it's as easy as that!
     		</h4>
     	    <div class='line'>
            </div>	
     		<h4 class="account-info"> Step 2. Review Your changes. Are they correct?</h4>
    		<div class='line'>
            </div>
     		<h4 class="account-info"> Step 3. If so, Congrats! Just click on the submit button, You have
     			now officially edited your information.</h4>
 		</div>

 	    <div class='line'></div>	

    <div class="col-md-8">

      <form method='POST'>
        <h3 class="sign-placeholders">Password</h3>
        <textarea type="password" class="form-control form1" value="<?= $user->password ?>" name="password" aria-describedby="basic-addon1"></textarea>
        <h3 class="sign-placeholders">Confirm Password</h3>
        <span> 
          <?php if (isset($errors['emptyPassword'])): ?>
            <?=  $errors['emptyPassword'] ?>
          <?php endif ?>
        </span>

        <span> 
          <?php if (isset($errors['doNotMatch'])): ?>
            <?=  $errors['doNotMatch'] ?>
          <?php endif ?>
        </span>

        <span> 
          <?php if (isset($success['successful'])): ?>
            <?=  $success['successful'] ?>
          <?php endif ?>
        </span>
        <textarea type="password" class="form-control form1" value="<?= $user->password ?>" name="confirmPassword" aria-describedby="basic-addon1"></textarea>
        <button  id="edit-btn" name="edit-btn" type="submit" class="btn btn-default">Submit</button>
	     </form>
		</div>	
		
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>

</body>
</html>