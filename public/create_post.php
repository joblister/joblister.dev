<?php

require_once '../Auth.php';
require_once '../postsModel.php';
require_once '../Input.php';
var_dump($_REQUEST);
$title = Input::has('title')? Input::get('title'): '';
$content = Input::has('content')? Input::get('content'): '';
$user_id = Auth::user()->id;
$date_posted = strtotime('now');
$date_posted = gmdate("Y-m-d H:i:s", $date_posted);

var_dump($user_id);
var_dump($date_posted);
var_dump($title);
var_dump($content);


if(( $title != ''|| $title != null) && ($content != ''|| $content != null)){

	$newPost = new postsModel();
	$newPost->title = $title;
	$newPost->content = $content;
	$newPost->date = $date_posted;
	$newPost->user_id = $user_id;
	$newPost->save();

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/joblister.css">
	<meta charset="UTF-8">
	<title>Post Details</title>
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


		h3{
			text-align: center;
			margin: 0 auto;
			font-size: 25px;
			color: green;
		}
		
		h1{
			text-align: center;
			margin: 0 auto;
			font-size: 30px;
			color: green;
		}

		/*centers button*/
		form{
			text-align: center;
		}


	</style>
</head>
<body>
	<?php include 'partials/navbar.php';?>
	
		<div class="col-lrg-6">	
			
			<h1>Your Post will be added to Job listing page. <h1>
			<h3>(Date will be attached automatically).</h3>
			<hr>
			<form>
				<h3 class="sign-placeholders">Title</h3>
			    <textarea  class="form-control" id="inputlg" name="title" aria-describedby="basic-addon1" placeholder="Enter Title: " ></textarea>
			    <h3 class="sign-placeholders">Content</h3>
			    <textarea type="text" class="form-control"  cols="80" id="inputlg-content" name="content"  aria-describedby="basic-addon1" placeholder="Enter Content: "></textarea>
			    <button id="select-post"  type="submit">Save and Return to Job Listings</button>
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