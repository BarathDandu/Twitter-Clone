<?php

    session_start();

    if(!(array_key_exists("email", $_SESSION) && $_SESSION['email'])){
        header("Location: http://barathdandu-com.stackstaging.com/p/welcome.php/"); 
        exit();
    }
     
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

    <title>Sign up to Twitter</title>
      
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
            <div id = "phpresult"></div>
            <div id="processing" style = "display:none;"><div class='alert alert-warning' role='alert'>Processing...<br></div></div>
        </div>
        <div class="container">
            <div class="image_area" align="center">
                <label for="upload_image">
                    <div class="overlay" >
                        <div class="text" style = "font-size:2vh;">Change Profile Picture</div>
                    </div>
                </label>                            
                <img src="http://barathdandu-com.stackstaging.com/p/images/userIcon.png" id="uploaded_image" style = "border-radius: 50%; width:100%;"/>
                <input type="file" name="image" class="image" id="upload_image" style="display:none" accept="image/x-png,image/gif,image/jpeg" />
            </div>
            <form method="POST" id = "inp">
                <label style="text-align:left;margin-top:2vh;" for="name">Name:</label>
                <input type="text" class="form-control" id="name" name = "name" placeholder="Name" >
                <div id = "n" class="invalid-feedback">
                    Please enter your name.
                </div>
                <div id = "nw" class="invalid-feedback">
                    Please enter your name without special characters.
                </div>
                <label style="text-align:left;margin-top:1vh;" for="username">Username:</label>
                <input type="text" class="form-control" id="username" name = "username" placeholder="Username" >
                <div id = "un" class="invalid-feedback">
                    Please enter a username.
                </div>
                <div id = "unw" class="invalid-feedback">
                    Please enter a username without white space or special characters.
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
                                <span id = "h"></span>
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
    <link href="http://barathdandu-com.stackstaging.com/p/crop.css" rel="stylesheet"/>

    <script>

    $("#signupbtn").click(function(e){
       
        var nameerror;
        var usernameerror;        

        if( $("#username").val() == "" ){
            usernameerror = 1;
            e.preventDefault();
            $("#un").css("display", "block");
            $("#unw").css("display", "none");
        }else{
            usernameerror = 0;
            $("#un").css("display", "none");

            if (/^[A-Za-z0-9]+$/.test( $("#username").val())) {
                usernameerror = 0;
                $("#unw").css("display", "none");
            }else{
                usernameerror = 1;
                e.preventDefault();
                $("#unw").css("display", "block");
            }
        }
        
        if(  $("#name").val() == "" ){
            nameerror = 1;  
            e.preventDefault();
            $("#n").css("display", "block");
            $("#nw").css("display", "none");

        }else{
            nameerror = 0;
            $("#n").css("display", "none");

            if (/^([a-zA-Z]+\s)*[a-zA-Z]+$/.test($("#name").val()) ) {
                nameerror = 0;
                $("#nw").css("display", "none");
            }else{
                nameerror = 1;
                e.preventDefault();
                $("#nw").css("display", "block");
            }
        }

        if(nameerror == 0  && usernameerror == 0){
            $("#processing").show();
            e.preventDefault();
            if(uploaded_image.src == "http://barathdandu-com.stackstaging.com/p/images/userIcon.png"){
                $.ajax({
                    url:'http://barathdandu-com.stackstaging.com/p/upload.php/',
                    method:'POST',
                    data:{name: $("#name").val(), username: $("#username").val()},
                    success:function(data)
                    {
                        $("#phpresult").html(data);
                        $("#processing").hide();
                        //console.log(data);
                    },
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        alert(err.Message);
                    }
                });
            }else{
                var img = new Image;
                img.src = uploaded_image.src;
                img.onload = function (event) {
                    const canvas = document.createElement("canvas");
                    const maxWidth = 300;

                    const scaleSize = maxWidth / img.width;
                    canvas.width = maxWidth;
                    canvas.height = img.height * scaleSize;

                    const ctx = canvas.getContext("2d");
                    ctx.drawImage(img, 0 , 0 , canvas.width, canvas.height);
                    const srcEncoded = ctx.canvas.toDataURL(img, "image/png"); 
                    
                    $.ajax({
                        url:'http://barathdandu-com.stackstaging.com/p/upload.php/',
                        method:'POST',
                        data:{image: srcEncoded, name: $("#name").val(), username: $("#username").val()},
                        success:function(data)
                        {
                            $("#phpresult").html(data);
                            $("#processing").hide();
                            //console.log(data);
                        },
                        error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                            alert(err.Message);
                        }
                    });
                };
            }
        } 
    });

    $(document).ready(function(){

        $image_crop = $('#h').croppie({
            enableExif: true,
            viewport: {
                width:200,
                height:200
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
            };
            reader.readAsDataURL(this.files[0]);
            $('#tweetmodal').modal('show');
        });

        $("#saveedit").click(function(event){
            $image_crop.croppie('result', {
                type: 'canvas',
                size:'original',
                format: 'png',
                quality: '1',
                circle: 'false'
            }).then(function(response){
                //console.log(response);
                uploaded_image.src = response;      
                $('#tweetmodal').modal('hide');
            });
        });
    });     

    </script>
  </body>
</html>