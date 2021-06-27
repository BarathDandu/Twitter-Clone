<?php

    /*session_start();

    $pic = "";
    $error = "";

   // echo $_SESSION['email'];
    //echo "<br>";
    //echo $_POST['username'];
    //echo "<br>";
    //echo $_POST['picloc'];
    //echo "<br>";

    if(array_key_exists("email", $_SESSION) && $_SESSION['email']){
        
        $link = mysqli_connect("sdb-g.hosting.stackcp.net", "userDatabase-31383520f7", "fall2018", "userDatabase-31383520f7");
        if(mysqli_connect_error()){
            die("Error connecting to Database");
        }
        
        if($_POST['sub']=='sb'){
                    
            $query = "SELECT `id` FROM `twitter` WHERE username = '".mysqli_real_escape_string($link, strtolower($_POST['username']))."'";

            $result = mysqli_query($link, $query);
            
            if(mysqli_num_rows($result) > 0){

                $error .= "<div class='alert alert-danger' role='alert'>Username has already been taken<br></div>";

            }else{
            
                $query = "UPDATE `twitter` SET `username`= '".mysqli_real_escape_string($link, strtolower($_POST['username']))."',`name`= '".mysqli_real_escape_string($link, $_POST['name'])."' WHERE email = '".$_SESSION['email']."' LIMIT 1";
                
                //echo $query;
                
                if(mysqli_query($link, $query)){
                    $error .= "<div class='alert alert-success' role='alert'>You have been signed up!<br></div>";
                    header("Location: http://barathdandu-com.stackstaging.com/p/home.php/"); 
                    exit();
                }
                else{
                    $error .= "<div class='alert alert-danger' role='alert'>There was an error signing you up.<br> Please try again later</div>";
                }
            }
        }
        }else{
             header("Location: http://barathdandu-com.stackstaging.com/p/welcome.php/"); 
             exit();
        }  */
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@600&display=swap" rel="stylesheet">      
    <link rel="icon" href="http://barathdandu-com.stackstaging.com/p/images/Bluelogo.png">		

    <title>Twitter Home</title>
      
      <style type="text/css">
      
          body, html{
              margin: 0;
              padding: 0;
          }

          input, button, submit { border:none; } 
        
          body{
              color: white;
              background-color: #000000;
          }
          
          input, button, submit { border:none; } 
          
          .texx{
            font-family: 'Work Sans', sans-serif;    
            font-weight: 900;
            font-size: 0.8vw;
            color: #fff;
          }    
        
          #tweetmodal{
                background-color:rgba(36,45,52, 0.75);                 
          }
          .modal-backdrop.show {
                opacity: 0;
            }
          .modal-body{
                background-color: #000;
              padding: 1vh 1vh 0 1vh ;
            }
          .modal-footer{
                background-color: #000;
                border-top-color: #2F3336;
            }

          .modal-header{
                background-color: #000;
                border-bottom-color: #2F3336;
              padding: 0;
          }
        .tweetmodalbtn{
              background-color:#1DA1F2; 
               border-radius: 40px;
              padding: 1vh 2vh ;              
              margin-top: 0.75vh;
              color: #fff;
            float: right;
          }
          .modal-lg {
              margin-top: 5.5vh;
                max-width: 33%;
                min-width: 33%;
              height: auto;
            }
            .modalclose {
              position: relative;
              background-color:  #000;
                  color: #1DA1F2;
            font-size: 200%;
                  margin:0 0 0.75vh 1vh;       
          }
          
          .modal-content {
              border-radius: 15px !important;
              border: 6px solid black!important;
            }

            .contain{
                width: 350px;
                margin:5vh auto 0 auto;
            }
            #log{
                height: 4vh;
            }
            .tex{
            font-family: 'Work Sans', sans-serif;    
            font-weight: bold;
            font-size: 35px;
            color: #cccccc;
            }        
            .image_area {
		        position: relative;
                width: 25vh !important;
                margin: auto;
                margin-top: 0;
                margin-bottom: 0;
		    }
            .image_area:hover .overlay {
                height: 50%;
                cursor: pointer;
            }
            .overlay {
                position: absolute;
                bottom: 0px;
                left: 0;
                right: 0;
                background-color: rgba(0, 0, 0, 0.5);
                overflow: hidden;
                height: 0;
                transition: .5s ease;
                width: 100%;
            }

            .image_area:hover .overlay {
                height: 50%;
                cursor: pointer;
	        }
            .text {
                color: #fff;
                font-size: 20px;
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                text-align: center;
            }                    
            
            #inp{
                width:35vh;
                margin: auto;
            }

            .form-control {
                background-color: #000000;
                color: white;
            }

            .form-control:focus {
                background-color: #000000;
                color: white;
            }

            #signupbtn{
               background-color:hsla(203, 89%, 53%, 1); 
               border-radius: 40px;
               width:35.2vh;
               padding: 1.5vh 0;
               margin-top: 2vh;             
            }
            #signupbtn:hover{
                background-color:hsla(203, 89%, 53%, 0.8); 
            }

            .texx{
                font-family: 'Work Sans', sans-serif;    
                font-weight: 900;
                font-size: 0.8vw;
                color: #fff;
            }    
      </style>
      
      
  </head>
  <body>
        <div class="contain" >
            <img id = "log" src="https://barathdandu-com.stackstaging.com/p/images/logowhiteonblack.png" alt="Twitter">

            <p></p>

            <h1 class="tex">Sign up to Twitter</h1>
                            
            <p></p>
            
            <div><?php echo $error ?></div>
        </div>
        <div class="container"  >
            <div class="image_area" align="center">
                <form method="post">
                    <label for="upload_image">
                        <div class="overlay" >
                            <div class="text">Change Profile Picture</div>
                        </div>
                    </label>                            
                    <img src="http://barathdandu-com.stackstaging.com/p/images/userIcon.png" id="uploaded_image" style = "border-radius: 50%; width:100%;"/>
                    <input type="file" name="image" class="image" id="upload_image" style="display:none" accept="image/x-png,image/gif,image/jpeg" />
                </form>
            </div>
            <form method="POST" id = "inp">
                        
                <label style="text-align:left;margin-top:2vh;" for="name">Enter Name:</label>

                <input type="text" class="form-control" id="username" name = "name" placeholder="Enter Name" required>
                <div class="invalid-feedback">
                    Please enter your name.
                </div>

                <label style="text-align:left;margin-top:1vh;" for="username">Enter Username:</label>

                <input type="text" class="form-control" id="username" name = "username" placeholder="Username" required>
                <div class="invalid-feedback">
                    Please enter a username without white space.
                </div>
            
                <button id = "signupbtn" class = "texx" type="submit" class="btn btn-primary" name = "sub" Value = "sb">Sign Up</button>
            
            </form>
                            
            <!-- Modal -->
            <div id="tweetmodal" class="modal" tabindex="-1" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content   ">
                  <div class="modal-header">
                    <button type="button" class="modalclose" data-dismiss="modal">
                      <span >&times;</span>
                    </button>
                  </div>
                    <div class="modal-body" >
                            <div class = "editdiv" style ="width:95%; height: 28vh;float:right;overflow:hidden; margin:1vh;border-radius: 20px;">
                                <span id = "h" ></span>
                            </div>
                            <div class = "modalfooter" style = "float:right; width:90%;height:auto;margin:0.5vh;border-top: 1px solid #2F3336;">
                                <button id = "saveedit" type="button" class="tweetmodalbtn texx">Save</button>
                            </div>
                    </div>
                </div>
              </div>
            </div>
              

              
        </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.js"></script>
    <link href="crop.css" rel="stylesheet"/>

    <script>

    $("#signupbtn").click(function(e){
        
        

    });

    $(document).ready(function(){

        $image_crop = $('#h').croppie({
            enableExif: true,
            viewport: {
                width:200,
                height:200,
                type:'square' 
            }
        });

        $('#upload_image').on('change', function(){
            var reader = new FileReader();
            reader.onload = function (event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
            }
            reader.readAsDataURL(this.files[0]);
            $('#tweetmodal').modal('show');
        });

        $("#saveedit").click(function(event){
            $image_crop.croppie('result', {
                type: 'canvas',
                size:'original',
                format: 'jpeg',
                quality: '1',
                circle: 'false'
            }).then(function(response){
                uploaded_image.src = response;      
                $('#tweetmodal').modal('hide');
            });
        });

    });     

    </script>
  </body>
</html>