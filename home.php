<?php

   if($_GET['name']=='lauda'){
       
        unset($_SESSION);

        setcookie("email", "", time() - 60 * 60);

        $_COOKIE['email'] = "";
       
        header("Location: http://barathdandu-com.stackstaging.com/p/welcome.php");  
        exit();
   }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@600&display=swap" rel="stylesheet">

      
    <link rel="icon" href="http://barathdandu-com.stackstaging.com/p/images/Bluelogo.png">		

    <title>Twitter Home</title>
      
      
      <style type="text/css">
      
          body, html{
              margin: 0;
              padding: 0;
          }
        
          body{
              color: white;
              background-color: #000000;
          }
          
          input, button, submit { border:none; } 
          
          .tex{
            font-family: 'Work Sans', sans-serif;    
            font-weight: 900;
            font-size: 1.1vw;
            color: #D9D9D9;
          }
          .texx{
            font-family: 'Work Sans', sans-serif;    
            font-weight: 900;
            font-size: 0.8vw;
            color: #fff;
          }    
       
           
          .col-4{
                border: 1px solid #cccccc;
              height: 100vh;
              padding: 0;          
          }
          .col-3{
                border: 1px solid #cccccc;
              height: 100vh;
              padding: 0;
          }.col-5{
              border: 1px solid #cccccc;
              height: 100vh;
              padding: 0;
          }
          .left-col{
              border-radius: 40px;
              padding: 1vh 3vh 1vh 1vh;
              margin-top: 0.5vh;
              display: inline-block;
              clear:both;
              float:left;
          } 
          
          .left-col:hover{
              background: rgba(29, 161, 242, .1) ;
              color: #1DA1F2;
          }
          
          .logodiv{
              border-radius: 40px;
              padding: 1vh 0 1vh 1vh;
              margin-right: 5vh;
              display: inline-block;
              background-color: #000;
               clear:both;
              float:left;
          }
          
          .logodiv:hover{
               background-color: #031019;  
          }
          
          .log{
                height: 2.5vh;
                margin: 0.25vh 1.5vh 0.5vh 1vh;   
            } 

          .hovlogo{
              display: none;
          }
          
          #cont{
              display: inline-block;
              width: auto; 
              margin-right: 3vh;
          }
      
          @media (min-width: 1200px) {
                .container{
                    max-width: 80vw;
                }
            }
          
          a:hover{
              text-decoration: none;
              
          }
          
          #tweet-left-col{
              background-color:#1DA1F2; 
               border-radius: 40px;
              padding: 1.2vh 9vh ;              
              margin-top: 1.5vh;
              display: inline-block;
              clear:both;
              float:left;
             
          }
        
          .foote{
              border-radius: 40px;
              padding: 0;
              margin-top: 0.5vh;
              display: block;
              float: left;
              position: fixed;   
              bottom: 1vh;
              
          }
          .foote:hover{
              color:#D9D9D9; 
              background: rgba(29, 161, 242, .1) ;
              float: left;
          }
          .profilepicleft{
              height: 4vh;
              margin: 1vh;  
              border-radius: 50%;
              float: left;
          }
          .profilepictweet{
              width: 100%;
              margin: 0;  
              padding: 0;
              border-radius: 50%;
              float: left;
          }
          
          .data{
              position: relative;
              display: inline-block;
              padding: 0;
              margin: 0.8vh 0 0.2vh 0;
          }
          .name{
              font-family: 'Work Sans', sans-serif;    
            font-weight: 900;
            font-size: 0.9vw;
            color: #D9D9D9;
              clear: both;
              float: left;
              padding: 0;
              margin: 0;
             
          }
          .usernametext{
            font-size: 0.7vw;
            color: #D9D9D9;
              clear: both;
              float: left; 
              padding: 0;
              margin: 0;
          }
          .treedots{
               height: 2vh;
              margin: 1vh 0;  
              border-radius: 50%;
              float: right;
            margin: 2vh;  
             
          }
          
          .popover {
                background: #000;
               box-shadow: 0 0 3px #fff;
              z-index: 99;
              color: #fff;
            }
       .bs-popover-top .arrow::after,
        .bs-popover-auto[x-placement^="top"] .arrow::after {
            border-top-color: #000; 
            -webkit-filter: drop-shadow(0 2px 1px #666666);
            filter: drop-shadow(0 2px 1px #666666);
            
        }
          .logoutpopover{
              background-color:rgba(29, 161, 242, .5); 
               border-radius: 40px;
              padding: 1vh 4vh ;              
              margin: 1.5vh 1.5vh 2vh 1.5vh;
              display: inline-block;
              clear:both;
              float:left;
              color: #fff;
          }
          
          .logoutpopover:hover{
               background-color:rgba(29, 161, 242, 1); 
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
        .tweetmodal{
              background-color:#1DA1F2; 
               border-radius: 40px;
              padding: 1vh 2vh ;              
              margin: 0vh;
              display: inline-block;
              float:left;
              color: #fff;
            float: right;
          }
          .modal-lg {
              margin-top: 5.5vh;
                max-width: 33%;
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
          
          .textarea{
                display: block;
              margin:0.5vh 1vh;
              width: 98%;
              height: 12vh;
              resize: both;
              min-height: 40px;
              line-height: 20px;
              border:none;
              resize: none;
              color: #fff;
              outline: none;
            
            
          }
          #mediaicon{
               height: 2vh;
              margin: 0; 
              margin-right: 1.2vh;
              float: left;
          }
          .modalfooter>input {
              display: none;
            }

          #mediainserted{
              max-width:85%;
              max-height: 48%;
              margin: 1vh;
              border-radius: 20px;
              float:right;
            }
          
      </style>
      
      
  </head>
  <body>
        <div class="container">
          <div class="row">
            <div class="col-3">
            <div id = "cont" class="float-right">
                <a class = "logodiv">                
                    <img class = "log" src="http://barathdandu-com.stackstaging.com/p/images/logowhiteonblack.png" alt="Twitter">
                </a>
                
                <a href="https://www.w3schools.com" class = "left-col tex">
                    <img class = "log" src="http://barathdandu-com.stackstaging.com/p/images/homewhitelogo.png" alt="Twitter">
                    <img class = "log hovlogo" src="http://barathdandu-com.stackstaging.com/p/images/hhl.png" alt="Twitter">
                    Home   
                </a >
                
                <a href="https://www.w3schools.com" class = "left-col tex">
                    <img class = "log" src="http://barathdandu-com.stackstaging.com/p/images/explorewhitelogo.png" alt="Twitter">
                    <img class = "log hovlogo" src="http://barathdandu-com.stackstaging.com/p/images/ehl.png" alt="Twitter">
                    Explore
                </a>
                
                <a href="https://www.w3schools.com" class = "left-col tex">
                    <img class = "log" src="http://barathdandu-com.stackstaging.com/p/images/notificationswhitelogo.png" alt="Twitter">
                    <img class = "log hovlogo" src="http://barathdandu-com.stackstaging.com/p/images/nhl.png" alt="Twitter">
                    Notifications
                </a>
                
                <a href="https://www.w3schools.com" class = "left-col tex">
                    <img class = "log" src="http://barathdandu-com.stackstaging.com/p/images/messageswhitelogo.png" alt="Twitter">
                    <img class = "log hovlogo" src="http://barathdandu-com.stackstaging.com/p/images/mhl.png" alt="Twitter">
                    Messages
                </a>
                
                <a href="https://www.w3schools.com" class = "left-col tex">
                    <img class = "log" src="http://barathdandu-com.stackstaging.com/p/images/bookmarkswhitelogo.png" alt="Twitter">                  
                    <img class = "log hovlogo" src="http://barathdandu-com.stackstaging.com/p/images/bhl.png" alt="Twitter">
                    Bookmarks
                </a>
                
                <a href="https://www.w3schools.com" class = "left-col tex">
                    <img class = "log" src="http://barathdandu-com.stackstaging.com/p/images/listswhitelogo.png" alt="Twitter">
                    <img class = "log hovlogo" src="http://barathdandu-com.stackstaging.com/p/images/lhl.png" alt="Twitter">
                    Lists
                </a>
                
                <a href="https://www.w3schools.com" class = "left-col tex">
                    <img class = "log" src="http://barathdandu-com.stackstaging.com/p/images/profilewhitelogo.png" alt="Twitter">
                    <img class = "log hovlogo" src="http://barathdandu-com.stackstaging.com/p/images/phl.png" alt="Twitter">
                    Profile
                </a>
                
                <a href="https://www.w3schools.com" class = "left-col tex">
                    <img class = "log" src="http://barathdandu-com.stackstaging.com/p/images/morewhitelogo.png" alt="Twitter">
                    <img class = "log hovlogo" src="http://barathdandu-com.stackstaging.com/p/images/morehl.png" alt="Twitter">
                    More
                </a>
                <br><br>
                <input type = "button"  id = "tweet-left-col" class = "texx" value = "Tweet" data-toggle="modal" data-target="#tweetmodal" >
        
                  <a class = "foote popover-dismiss" data-html='true' tabindex="0" data-toggle="popover" data-placement="top"  
                     data-content="<a class = 'logoutpopover texx' href='http://barathdandu-com.stackstaging.com/p/home.php?name=lauda'>Log Out</a>.">      
                      <img class = "profilepicleft" src="/p/images/userIcon.png" > 
                      <div class = "data">
                       <span class="name"> Barath Dandu</span> 
                       <span class="usernametext"> @barathdandu</span> 
                      </div>
                          <img class = "treedots" src="/p/images/treedotswhitelogo.png" > 
                          <img class = "treedots hovlogo" src="/p/images/tdh.png" >   
                </a>
            </div>
            
                
            <!-- Modal -->
            <div class="modal fade" id="tweetmodal" tabindex="-1" >
              <div class="modal-dialog modal-lg">
                <div class="modal-content   ">
                  <div class="modal-header">
                    <button type="button" class="modalclose" data-dismiss="modal">
                      <span >&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" >
                     
                      <div style = "height:100%; width:10%; float:left;">
                            <img class = "profilepictweet" src="/p/images/userIcon.png" > 
                      </div>
                      <div id = "te" style = "float:left; width:90%;height:auto;">
                         <span class="textarea" role="textbox" contenteditable placeholder="Remember, be nice!"></span>
                      </div>
                      
                          <img id="mediainserted" src=""  >
                        
                    
                      <div class = "modalfooter" style = "float:right; width:90%;height:auto;margin:0; ">
                            
                            <label for = "fileinp" class = "logodiv" id = "insrtpht">  
                                <img id = "mediaicon" src="http://barathdandu-com.stackstaging.com/p/images/insertmedia.png" alt="Twitter">
                            </label>
                            <input id="fileinp" type="file" accept="image/png, image/gif, image/jpeg" >

                            <button type="button" class="tweetmodal texx">Tweet</button>
                      </div>
                  </div>
                 
                </div>
              </div>
            </div>
              
              
              
              </div>
            <div class="col-5">col-5</div>
            <div class="col-4">col-4</div>
            </div>
        </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script >
        fileinp.onchange = evt => {
          const [file] = fileinp.files
          if (file) {
            mediainserted.src = URL.createObjectURL(file)
          }
        }

     
        $(".left-col").hover(function(){
           $(this).children('img:nth(0)').hide();
           $(this).children('img:nth(1)').show();
        }, function(){
            $(this).children('img:nth(0)').show();
           $(this).children('img:nth(1)').hide();        
        });
        
         $(".foote").hover(function(){
           $(this).children('img:nth(1)').hide();
           $(this).children('img:nth(2)').show();
        }, function(){
            $(this).children('img:nth(1)').show();
           $(this).children('img:nth(2)').hide();     
        });
      
        $(function () {
          $('[data-toggle="popover"]').popover({html:true,sanitize: false})
        });
        
        $('#te').on('input', function () {
            this.style.height = 'auto';
             
            this.style.height =
                    (this.scrollHeight) + 'px';
        });
     

        $(document).on("click", "#funcid", function () {
            $(this).parents(".popover").popover('hide');
        });


    </script>
  </body>
</html>