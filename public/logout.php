<?php
session_start();
require_once '../utils/Log.php';
require_once '../utils/Auth.php';
require_once '../models/User.php';

Auth::logout();

?>

<!DOCTYPE html>
<html lang="en">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'> 
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/joblister.css">
<head>
	<meta charset="UTF-8">
	<title>Log Out</title>
	<style>

		#block1{

			position:relative;
			top:15em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1000;
			margin-right: 10px;
  	 	
  	 	}
		

		#block2{

			position:relative;
			top:15em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		#block3{

			position:relative;
			top:15em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		#block4{


			position:relative;
			top:15em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}
		#block5{

			position:relative;
			bottom:10em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1000;
			margin-right: 10px;
  	 	
  	 	}
		

		#block6{

			position:relative;
			bottom:10em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		#block7{

			position:relative;
			bottom:10em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		#block8{


			position:relative;
			bottom:10em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		.hal {

		    z-index: 0;

		}

		@media (max-width: 400px) {
			#block1{

			position:relative;
			top:15em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1000;
			margin-right: 10px;
  	 	
  	 	}
		

		#block2{

			position:relative;
			top:15em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		#block3{

			position:relative;
			top:15em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		#block4{


			position:relative;
			top:15em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}
		#block5{

			position:relative;
			bottom:10em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1000;
			margin-right: 10px;
  	 	
  	 	}
		

		#block6{

			position:relative;
			bottom:10em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		#block7{

			position:relative;
			bottom:10em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		#block8{


			position:relative;
			bottom:10em;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		.hal {

		    z-index: 0;

		}


		}

	</style>
</head>
<body>

	<div class="row">
		<div id="block1" class="col-md-2 blue-block"></div>
		<div id="block2" class="col-md-2 blue-block"></div>
		<div id="block3" class="col-md-2 blue-block"></div>
		<div id="block4" class="col-md-2 blue-block"></div>
	</div>
	<div class="row">
		<img class="col-md-2 hal" src="/img/hal.gif" alt="HAL 9000">
	</div>

	<div class="row">
		<div id="block5" class="col-md-2 blue-block"></div>
		<div id="block6" class="col-md-2 blue-block"></div>
		<div id="block7" class="col-md-2 blue-block"></div>
		<div id="block8" class="col-md-2 blue-block"></div>
	</div>

<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
"use strict";

	var exitLogout =setInterval(function newDoc() {
   window.location.assign("index.php")
}, 2000);
 
$( document ).ready(function() {

    console.log( "ready!" );


	 $("#block1").animate({
	    
	    top:  "-=160px"
	}, 1000);
	console.log('this worked');

	$("#block2").animate({
	    
	    top:  "-=160px"
	}, 1000);

	$("#block3").animate({
	    
	    top:  "-=160px"
	}, 1000);

	$("#block4").animate({
	    
	    top:  "-=160px"
	}, 1000);

	 $("#block5").animate({
	    
	    top:  "+=50px"
	}, 1000);
	console.log('this worked');

	$("#block6").animate({
	    
	    top:  "+=50px"
	}, 1000);

	$("#block7").animate({
	    
	    top:  "+=50px"
	}, 1000);

	$("#block8").animate({
	    
	    top:  "+=50px"
	}, 1000);


});	

</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>