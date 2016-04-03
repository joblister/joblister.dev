<?php

require_once '../Auth.php';
require_once '../postsModel.php';

$post_id = $_GET['name'];
var_dump($post_id);
postsModel::postId($post_id);
extract(postsModel::postId($post_id));


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



	</style>
</head>
<body>
	<?php include 'partials/navbar.php';?>


	
		<div class="col-lrg-6">	
			
			<h2>Your Comments will be posted below the 'Title' that you selected. <h2>
			<h3>(Date will be attached automatically).</h3>
			<hr>
			
		    <h3 class="sign-placeholders">Comment</h3>
		    <textarea type="text" class="form-control"  id="inputlg-content" name="comment"  aria-describedby="basic-addon1" placeholder="Enter Content: "></textarea>
		   
		    <button  id="select-post" type="submit" class="btn btn-default">Save</button>

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