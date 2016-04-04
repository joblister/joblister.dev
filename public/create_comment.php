<?php

require_once '../Auth.php';
require_once '../postsModel.php';
require_once '../Input.php';
session_start();
$post_id = Input::has('name')? Input::get('name'): 1;
var_dump($post_id . ' =post_id');

//name="comment" = $key
$commentText = Input::get('comment');
var_dump($_REQUEST);

$date_posted = strtotime('now');

$date_posted = gmdate("Y-m-d H:i:s", $date_posted);

if($commentText !='' || $commentText != null){
	$comment = [];
	$comment['user_id'] = Auth::user()->id;
	$comment['post_id'] = $post_id;
	$comment['comment'] = Input::get('comment');
	$comment['date'] = $date_posted;

	postsModel::insertComment($comment);

	// header('Location: create_comment.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/joblister.css">
	<meta charset="UTF-8">
	<title>Create Comment</title>
	<style>

		.form-control, .sign-placeholders {

			width: 75%;
			margin: 10px auto;
		}

		textarea{

			text-align: center;
		}

		.col-lrg-6{

			display: flex;
			flex-direction: column;
			align-items: center;
			
		}

		#inputlg-content{

			height: auto;
			width: 75%;

		}

		/*centers button*/
		form{
			text-align: center;
		}


		h3{
			text-align: center;
			margin: 0 auto;
			font-size: 25px;
			color: green;
		}
		
		h2{
			text-align: center;
			margin: 0 auto;
			font-size: 30px;
			color: green;
		}

	</style>
</head>
<body>
	<?php include 'partials/navbar.php';?>
	
		<div class="col-lrg-6">	
			
			<h2>Your Comments will be posted below the 'Title' that you selected. <h2>
			<h3>(Date will be attached automatically).</h3>
			<hr>
			<form method="POST" action="create_comment.php" name="myform">
		    <h3 class="sign-placeholders">Comment</h3>
		    <textarea type="text" class="form-control"  cols="80" id="inputlg-content" name="comment"  aria-describedby="basic-addon1" placeholder="Enter Comment: "></textarea>
		 
		    <button  id="select-post"  type="submit" >SAVE</button>
			</form>


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