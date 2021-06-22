<?php

$error = "";

if((array_key_exists("email", $_COOKIE) AND $_COOKIE['email'])){
        session_start();
        $_SESSION['email'] = $_COOKIE['email'];
        header("Location: https://barathdandu-com.stackstaging.com/p/home.php/"); 
    }

    if($_POST['sub']=='sb'){
        session_start();
        
        $link = mysqli_connect("sdb-g.hosting.stackcp.net", "userDatabase-31383520f7", "fall2018", "userDatabase-31383520f7");
        if(mysqli_connect_error()){
            die("Error connecting to Database");
        }

        $query = "SELECT * FROM `twitter` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";

        $result = mysqli_query($link, $query);

        if($row = mysqli_fetch_assoc($result)){
            
            $databasepass =  $row['password'];
                        
            if (password_verify($_POST['pass'], $databasepass)) {

                $_SESSION['email'] = $row['email'];

                if($_POST['stayLogin'] == '1'){

                    setcookie("email", $row['email'], time() + 60*60*24*365);             
                
                }
                header("Location: https://barathdandu-com.stackstaging.com/p/home.php/"); 
                exit();

            } else {
                $error .= "<div class='alert alert-danger' role='alert'>Incorrect Password.<br> Please check your email/password.<br></div>";  
            }
        }else{
            $error .= "<div class='alert alert-danger' role='alert'>Account not found.<br> Please check your email/password.<br></div>";
        }
    }


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Log in to Twitter</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="icon" href="https://barathdandu-com.stackstaging.com/p/images/Bluelogo.png">

    <style>
       
       html, body{height:100%; margin:0;padding:0}

       .tex{
            font-family: 'Work Sans', sans-serif;    
            font-weight: bold;
            font-size: 35px;
            color: #cccccc;
        }

        body{
            background: #000000;
            color:#fff
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
            padding:1.2em 10.5em;
            margin: 1em 0 1em 0;
        }

        .btn-primary:hover {
            color: #FFF;
            opacity: 0.9;
            border: 2px solid #00b0f0;
        }

        #b{
            width:450px;
        }

        @media only screen and
        (max-width : 1249px ) {

            #b{
                width:100%;
            }

        }

        .form-control {
            background-color: #000000;
            color: white;
        }

        .form-control:focus {
            background-color: #000000;
            color: white;
        }
        #log{
        height: 4vh;
    }   

    </style>

  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <div class="container ">

        <div class="row justify-content-center ">

            <form id = "b" class = "requires-validation p-5 m-5" novalidate method = "POST">
                <img id = "log" src="https://barathdandu-com.stackstaging.com/p/images/logowhiteonblack.png" alt="Twitter">
                <p></p>

                <h1 class="tex">Log in to Twitter</h1>
                
                <div><?    echo $error;    ?></div>

                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control" id="Email" name = "email" placeholder="E-mail Address" aria-describedby="emailHelp" required value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"/>
                    <div class="invalid-feedback">
                        Please enter a valid email.
                    </div>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password"  class="form-control" name = "pass" id="Password"placeholder="Password" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>"/>
                    <div class="invalid-feedback">Password needs to be 8 characters long</div>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="Check" value = 1 name = "stayLogin">
                    <label class="form-check-label" for="Check ">Stay Logged In</label>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary" name = "sub" Value = "sb">Log in</button>
                </div>
                <p class = "mt-4">Don't have an account?  <a href="https://barathdandu-com.stackstaging.com/p/signup.php" style="color:dodgerblue">Sign Up</a>.</p>
            </form>
        </div>
    </div>    
        
       <script type="text/javascript">

       function emailCheck(){
            if($("#Email").val()==""){
                $("#Email").addClass('is-invalid');
                return false;
            }else{
                var regMail     =   /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;
                if(regMail.test($("#Email").val()) == false){
                    $("#Email").addClass('is-invalid');
                    return false;
                }else{
                    $("#Email").removeClass('is-invalid');
                    $("#Email").addClass('is-valid');
                    return true;
                }
    
            }
        }
        function passwordCheck(){
            if($("#Password").val().length > 7){
                $("#Password").removeClass('is-invalid');
                $("#Password").addClass('is-valid');
                return true;
            }else {
                $("#Password").addClass('is-invalid');
                return false;
            }
        }

        var alreadySubmitted = false;

        $("#Email, #Password").keyup(function(){
            if(alreadySubmitted == true){
                emailCheck();
                passwordCheck();
            }
        });
        $("form").submit(function(e) {
            
            if(emailCheck() != true || passwordCheck() != true){
                e.preventDefault();
                emailCheck();
                passwordCheck();
                alreadySubmitted = true;
            }
        });

    </script>


  </body>
</html>