<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		

		.btn-primary {
				position:relative;
				right:60px;
			    margin-left: 30px;
			    top: 30px;
			    background-color: #96B7A3;
			    border-color:#96B7A3;

		}



		.navbar-default {
		    background-color: #96B7A3;
		    border-color: #96B7A3;
			height: 100px;

		}

		.btn-primary:hover {
    			color: #fff;

    			background-color: #96B7A3;
   
    			border-color: #849189;
    			border-width:1px;
		}	

		.modal-content {
			height:300px;
			width:350px;
			background-color: #96B7A3;
		}

		.sign-in {
			position:relative;
		    top: 50px;
		    left: 25%;

		}

		.sign-txt {
		    color:white;
		    text-shadow :1.5px 1.5px 2px grey;
		    margin-left: 20px;
		    margin-bottom: 20px;

		}

		#no-member {
		    position: relative;
		    top: 25px;
		    left: 150px;
		    margin: 10px;
		}

		.sign-up-link {
		    position: relative;
		    left: 263px;
		    bottom: 5px;
		}

		#sign-in-btn {
			margin:10px;
		}

		#no-member {
		    position: relative;
		    top: 10px;
		    left: 160px;
		    margin: 10px;
		}

		.sign-up-link {
		    position: relative;
		     left: 270px;
   			 bottom: 20px;

		}


	</style>
</head>
<body>
<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <button type="button" 	id='sign-up-btn' class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Sign In/Sign Up</button>

				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
				  <div class="modal-dialog modal-sm">
				    <div class="modal-content">
				    	  <form method="POST">
				    	  <div class="sign-in">
				    	  	<h2 class="sign-txt">Log In</h2>
					        <label for "username"></label>
					        <input  id="username" type="text" placeholder="Enter your username" name=""><br>
					        <label for "password"></label>
					        <input id="password" type="password" placeholder="Enter your password" name=""><br>
					        <button  id="sign-in-btn" type="button" class="btn btn-default">sign in</button>
					      </div>
					      <p id='no-member'>Not a member?</p>
					      <p class='sign-up-link'><a href="users.create.php">Sign Up!</a></p>
					    </form>
				    </div>
				  </div>
				</div>
					<a href="" type="button" id='' class="btn btn-primary">Home</a>
					<a href="" type="button" id='' class="btn btn-primary">Account</a>
					<a href="" type="button" id='' class="btn btn-primary">Create</a>
					<a href="" type="button" id='' class="btn btn-primary">Logout</a>
			     
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>





	<script src="/js/practice.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>	

</body>
</htm