<?php

require_once '../utils/Auth.php';
require_once '../models/postsModel.php';

extract(postsModel::paginate());

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/joblister.css">
	<meta charset="UTF-8">
	<title>Add Listings</title>
	<style>
		body{
			position: relative;
			height: auto;

		}

		.form-control, .sign-placeholders {

			width: 50%;
			margin: 0 auto;
			
		}

		#select-post {

			margin-left: 285.250px;
			
		}

		#inputlg-content{

			height: 200px;

		}

		#posts-ordered-list li {


			font-size: 20px;
			text-align: center;
			list-style: none;

		}

		h1{
			text-align: center;
			margin: 0 auto;
			font-size: 25px;
			color: green;
		}

		#page-navs{
			
			display: flex;
			flex-direction: row;
			justify-content: center;
			
		}

		#page-navs a {
			
			margin: 10px;
			
		}

		#footer-posts{
			position: absolute;
			margin-bottom: 0px;
			width: 100%;
		}

	</style>
</head>
<body>
	<?php include 'partials/navbar.php';?>
	
		<div class="col-lrg-6">	
			
			<h1>Click on the job listing link to see more information.<h1>
			<hr>
			<br>
			 	<ul id="posts-ordered-list">
			   	<?php foreach($posts as $row => $value): ?>
		        <li><a href="oneSelectedPost.php?name=<?= $posts[$row]['post_id']?>"> <?= $posts[$row]['title'] ?></a></li><br>
		   		<?php endforeach; ?>
		   		</ul>
		</div>

		<div id="page-navs">
			<?php if($page < $total_pages) { ?> 
			<a href="posts.php?page=<?=($page+1)?>">NEXT</a><br>
			<?php } ?>

			<?php if($page > 1) { ?>     
			<a href="posts.php?page=<?=($page-1)?>">PREVIOUS</a><br>
			<?php } ?>
		</div>
		<br>
		<br>
		<br>
		<br>
	 <div id="footer-posts"><?php include 'partials/footer.php';?></div>

	<script src="/js/practice.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>	
</body>
</html>