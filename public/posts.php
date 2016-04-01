<?php

require_once '../Auth.php';
require_once '../postsModel.php';

extract(postsModel::paginate());

postsModel::all();
var_dump($page);
var_dump($posts[0]['title']);

// $page =1;
// $total_pages=100;
$today = date("F j, Y, g:i a"); 

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

	</style>
</head>
<body>
	<?php include 'partials/navbar.php';?>
	
		<div class="col-lrg-6">	
			

		   	<?php foreach($posts as $key => $value): ?>
	        <p><a><?= $posts[$key]['title'] ?><a></p><br>
	   		<?php endforeach; ?>
	
		    
		
		</div>

		<div>
			<?php if($page < $total_pages) { ?> 
			<a href="posts.php?page=<?=($page+1)?>">NEXT</a><br>
			<?php } ?>

			<?php if($page > 1) { ?>     
			<a href="posts.php?page=<?=($page-1)?>">PREVIOUS</a><br>
			<?php } ?>

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