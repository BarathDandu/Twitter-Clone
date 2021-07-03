<?php

if(array_key_exists("email", $_COOKIE) && $_COOKIE['email']){
    session_start();
    $_SESSION['email'] = $_COOKIE['email'];
}

if(array_key_exists("email", $_SESSION) && $_SESSION['email']){
    
    header("Location: http://barathdandu-com.stackstaging.com/twitter/home.php"); 
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Twitter</title>
    <link rel="icon" href="http://barathdandu-com.stackstaging.com/twitter/images/Bluelogo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@600&display=swap" rel="stylesheet">
    <style>
    
    body, html{
        margin: 0;
        padding: 0;
        background-color: #000000;
    }

    body {
        overflow-y: hidden; /* Hide vertical scrollbar */
        overflow-x: hidden; /* Hide horizontal scrollbar */
    }

    .container{
        color: #ffffff;
        padding-left:6.5vw;
    }

    #img{
        height: 96.5vh;
    }

    #log{
        height: 4vh;
    }

    .footer{
        margin: 0.7em;
        color: #808080;
        font-size: 80%;
        text-align: center;
    }


    #hap{
        font-family: 'Work Sans', sans-serif;       
        font-weight: 900;
        font-size: 64px;
        color: #cccccc;
    }
    
    #join{
        font-family: 'Work Sans', sans-serif;    
        font-weight: 900;
        font-size: 35px;
        color: #cccccc;
    }

    .btn-primary {
        background-color:#00b0f0;
        font-weight: 900;
        font-size: 90%;
        color: #ffffff;
        line-height: 15px;
        border: 1px solid #00b0f0;
        border-radius: 40px;
        transition: all 0.3s ease 0s;
        padding:1.2em 11.5em 1.2em 11.5em;
        margin: 1em 0 1em 0;
    }

    .btn-primary:hover {
        color: #FFF;
        opacity: 0.9;
        border: 2px solid #00b0f0;
    }

    .btn-secondary {
        font-weight: 900;
        font-size: 90%;
        color: #00b0f0;;
        line-height: 15px;
        border: 2px solid #00b0f0;
        border-radius: 40px;
        background: transparent;
        transition: all 0.3s ease 0s;
        padding:1.2em 11.8em 1.2em 11.8em;
        margin: 0.5em 0 0.5em 0;
    }

    .btn-secondary:hover {
        color: #FFF;
        opacity: 0.9;
        border: 2px solid #00b0f0;
    }

   

    </style>


  </head>
  <body>

    
    <div class="row">
        <div class="col-6"><img id = "img" src="http://barathdandu-com.stackstaging.com/twitter/images/home.jpg" alt="Twitter"></div>
        <div class="col-5">
            
            <div class="container h-100">
                <div class="row h-100  align-items-center">
                    <form>
                        <br>
                        <img id = "log" src="https://barathdandu-com.stackstaging.com/twitter/images/logowhiteonblack.png" alt="Twitter">
                        <p>  </p>
                        <br>
                            <p id = "hap">Happening now</p>  
                        <br>
                            <p id = "join">Join Twitter today</p>
                        <a href="https://barathdandu-com.stackstaging.com/twitter/signup.php" type="button" class="btn btn-primary ">Sign up</a>
                        <br>                       
                        <a  href="https://barathdandu-com.stackstaging.com/twitter/login.php" type="button" class="btn btn-secondary">Log in</a>

                    </form>
                </div>
            </div>
        </div>
    </div>




    <footer class="footer">
        <span>&copy 2021 Barath, Inc.</span>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
  </body>
</html>

