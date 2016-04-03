<?php

require_once '../Auth.php';
require_once '../postsModel.php';


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

			width: 50%;
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
			width: 50%;

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
			
			<h1>Your Comments will be posted with the selected job Title. Date will be attached automatically.<h1>
			<hr>
			<h3 class="sign-placeholders">Title</h3>
		    <textarea  class="form-control" id="inputlg" name="title" aria-describedby="basic-addon1" placeholder="Enter Title: " ></textarea>
		    <h3 class="sign-placeholders">Content</h3>
		    <textarea type="text" class="form-control"  id="inputlg-content" name="content"  aria-describedby="basic-addon1" placeholder="Enter Content: "></textarea>
		    <h3 class="sign-placeholders">Date</h3>
		    <textarea type="text" class="form-control" id="inputlg" name="date" aria-describedby="basic-addon1" value="<?= DATETIME() ?>" style="display:none"></textarea>
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