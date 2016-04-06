<?php
require_once '../Auth.php';
require_once '../Model.php';
require_once '../User.php';
require_once '../postsModel.php';
require_once '../commentsModel.php';
// var_dump($_POST);
$user = $_SESSION['logged_in_user'];
var_dump($user);
var_dump($_POST);
$post_id = Input::has('name')? Input::get('name'): 1;
$id = Auth::user()->id;
$allPostsbyUser = postsModel::allPostsbyUser($id);
// var_dump($allPostsbyUser[0]['title']);
// var_dump($allPostsbyUser);
$allCommentsbyUser = commentsModel::allCommentsbyUser($id);
// var_dump($allCommentsbyUser);

$post_title = Input::has('userPostsTitle')? Input::get('userPostsTitle'): 1;
$post_content = Input::has('userPostsContent')? Input::get('userPostsContent'): 1; 
$date_posted = strtotime('now');
$date_posted = gmdate("Y-m-d H:i:s", $date_posted);
$post_id = Input::get('updatePostId');
$user_id = Auth::user()->id;
var_dump($post_id . ' =post id');
var_dump($user_id . ' =user_id');
var_dump($date_posted . ' =date_posted');
var_dump($post_content);
var_dump($post_title . ' =post_title');


if(($post_title != ''|| $post_title != null) && ($post_content != ''|| $post_content != null) && Input::has('post_update_btn')){
	$postArrayUpdate = postsModel::postId($post_id);
	$postArrayUpdate->user_id = $user_id;
	$postArrayUpdate->content = $post_content;
	$postArrayUpdate->date = $date_posted;
	$postArrayUpdate->title = $post_title;
	$postArrayUpdate->post_id = $post_id;
	$postArrayUpdate->save();
	header('Location: posts.php');
}

if(($post_title != ''|| $post_title != null) && ($post_content != ''|| $post_content != null) && Input::has('post_delete_btn')){

	postsModel::deletePost($post_id);

	header('Location: posts.php');
}



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

    	//overwriting $user obj, see findbyUserName in User.php Model

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
		<div class="col-md-8">
			<?php if(!empty($errors) && (Input::get('post_update_btn') == null) && (Input::get('post_delete_btn') == null) && (Input::get('comment_update_btn') == null) && (Input::get('comment_delete_btn') == null)): ?>
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
		    <br>
		    <a href="changePassword.php?user=<?= $user->user_name ?>">Click on link to change password</a>
		</form>

		</div>  <!-- end col-md-8 -->

	</div>  <!-- end container -->
	<div class='commentsAndPost'>

			<h3 class="sign-placeholders3">All My Post</h3>
			<?php if(!empty($allPostsbyUser)): ?>
				<?php foreach ($allPostsbyUser as $key => $value): ?>
				<form method ="POST">
					<textarea  type="text"  name="updatePostId" cols="3" rows="1" value="<?= $value['post_id']?> "aria-describedby="basic-addon1" readonly><?= $value['post_id'] ?></textarea>
				 	<textarea maxlength="200" type="text" class="form-control form3" name="userPostsTitle" aria-describedby="basic-addon1"><?= $value['title'] ?>, posted on:  <?= $value['date'] ?></textarea>			
				 	<textarea  type="text" class="form-control form3" name="userPostsContent" aria-describedby="basic-addon1"><?= $value['content'] ?></textarea>
				 	<div class='postbtns'>
				 		<button  id="post_delete_btn" name="post_delete_btn" type="submit" value="post_delete_btn" class="btn btn-default">delete</button>
				 		<button  id="post_update_btn" name="post_update_btn" type="submit" value="post_update_btn"  class="btn btn-default">update</button>
					</div>
				</form>	
				<?php endforeach; ?>
			<?php endif; ?>

			<h3 class="sign-placeholders3">All My Comments</h3>
			<?php if(!empty($allCommentsbyUser)): ?>
				<?php foreach ($allCommentsbyUser as $key => $value): ?>
				 <form method ="POST">
				 	<textarea  type="text"  name="updateCommentId" cols="3" rows="1" value="<?= $value['comment_id']?> "aria-describedby="basic-addon1" readonly><?= $value['comment_id'] ?></textarea>
				  	<textarea  type="text" class="form-control form3" name="userComments" aria-describedby="basic-addon1"><?= $value['comment'] ?></textarea>
				  	<div class='postbtns'>
				 		<button  id="comment_delete_btn" name="comment_delete_btn" type="submit" value="comment_delete_btn" class="btn btn-default">delete</button>
				 		<button  id="comment_update_btn" name="comment_update_btn" type="submit" value="comment_update_btn"  class="btn btn-default">update</button>
					</div>
				 </form>
				 <?php endforeach; ?>
			<?php endif;?>

		</div>

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>

</body>
</html>