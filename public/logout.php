<?php
session_start();
require_once '../Log.php';
require_once '../Auth.php';
require_once '../User.php';


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
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
  	 	
  	 	}
		

		#block2{
			position:relative;
			background-color: #199AEE;
			height:20em;
			left:10em;
			z-index: 1;
			margin-right: 10px;
		}

		.hal {
			position: center;
		    left: 0px;
		    top: 0px;
		    z-index: -1;
		}
    		  

    	}

    	#bye {
	    position: relative;
	    top:10px;
	    z-index:0;
	    }

		@media (max-width: 400px) {
			

		}
		
		


	</style>
</head>
<body>
	
	 
		<div class="top hatch">
			<div id="block1" class="col-sm-2 blue-block"></div>
			<div id="block1" class="col-sm-2 blue-block"></div>
			<div id="block1" class="col-sm-2 blue-block"></div>
			<div id="block1" class="col-sm-2 blue-block"></div>
		</div>	
		
	
		<img class="col-md-2 hal" src="/img/hal.gif" alt="HAL 9000">
	
      	
		<h1 id="bye" class='logout-txt'>Farewell..</h1>
		<div class="bottom hatch">
			<div id="block2" class="col-sm-2 blue-block"></div>
			<div id="block2" class="col-sm-2 blue-block"></div>
			<div id="block2" class="col-sm-2 blue-block"></div>
			<div id="block2" class="col-sm-2 blue-block"></div>
		</div>

	




	
	
   



<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
"use strict";

	//var exitLogout =setInterval(function newDoc() {
  // window.location.assign("index.php")
//}, 2000);


 
$( document ).ready(function() {
    console.log( "ready!" );


	 $("#block1").animate({
	    
	    top:  "+=50px"
	}, 500);
	console.log('this worked');

});	
	   
	 

	


</script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
</body>
</html>