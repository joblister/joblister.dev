<?php

if(isset($_SESSION['logged_in_user'])){

 
}


?>
<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Lister</title>
    <!-- order matters, my own stylesheet must go unederneath -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'> 
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/joblister.css">

      
      <!---external personalized stylesheet-->
    <style type="text/css">

    * {
        margin: 0;
    }
    html, body {
        height: 100%;
    }
    .page-wrap {
        min-height: 100%;
      /* equal to footer height */
        margin-bottom: -142px; 
    }

    .page-wrap:after {
      content: "";
      display: block;
    }

    .site-footer, .page-wrap:after {
      height: 142px; 
    }

    h3{
        text-align: center;
        text-decoration: underline;
        color: red;
    }

    </style>  

</head>
<body>
<div class="page-wrap">
    <?php include 'partials/navbar.php';?>
  
    <div class="jumbotron">
        <h1>Job Lister has the job that you're looking for!</h1>

        <p>This region's number one site for employers looking for qualified professionals.
         Also, the region's number one site for job seekers from all fields.
        </p> 

    </div> <!-- end jumbotron -->
   
    <div id="posts-screenshot">
        <h3>Browse Job listings!</h3>
        <div class="index-posts">
            <img src="/img/posts.png">
        </div>
        <br>
        <br>
        <h3>Apply to the jobs that interest you!</h3>
        <div class="index-posts">
            <img src="/img/posts-details-comments.png">
        </div>
    </div>

</div> <!-- end page-wrap -->
    <br>
    <br>
 
<div>
    <?php include 'partials/footer.php';?>
</div>
  <!--- js here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
<!---personalized js external file-->
  </body>
  </html>  