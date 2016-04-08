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

    img.post {

        width:100%;
        height:auto;
        border:1px solid red;
    
    }   


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

    .txt{
        text-align: center;
        text-decoration: underline;
        color: red;
    }

    #sign-up-jumbotron {
        font-size: 50px;
        color:white;
        text-decoration: bold;
        margin: 35px 0px 0px 0px;
    }

    @media (max-width: 400px) {

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

        .txt{
            text-align: center;
            text-decoration: underline;
            color: red;
        }
    }

    </style>  
</head>
<body>
    <?php include 'partials/navbar.php';?>
<div class="page-wrap container">
    
  
    <div class="jumbotron">
        <h1>Job Lister has the job that you're looking for!</h1>
        
        <p id='sign-up-jumbotron'>Sign Up Now!</p> 

    </div> <!-- end jumbotron -->
   
    <div id="posts-screenshot">
        <h3 class='txt'> Step 1: Browse Job listings!</h3>
       <!--  <div class="index-posts"> -->
            <img class='post' height="471" width="900" src="/img/posts.png">
       <!--  </div> -->
        <br>
        <br>
        <h3 class='txt'> Step 2: Apply to the jobs that interest you!</h3>
       <!--  <div class="index-posts"> -->
            <img class='post' height="495" width="900" src="/img/posts-details-comments.png">
       <!--  </div> -->
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