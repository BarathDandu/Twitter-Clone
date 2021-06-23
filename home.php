

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
            font-size: 0.9vw;
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
              border: 1px solid white;
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
              padding: 1vh 9vh ;              
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
                <input type = "button"  id = "tweet-left-col" class = "texx" value = "Tweet" >
        
                  <a class = "foote" href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">      
                      <img class = "profilepicleft" src="/p/images/userIcon.png" > 
                      <div class = "data">
                       <span class="name"> Barath Dandu</span> 
                       <span class="usernametext"> @barathdandu</span> 
                      </div>
                          <img class = "treedots" src="/p/images/treedotswhitelogo.png" > 
                          <img class = "treedots hovlogo" src="/p/images/tdh.png" >   
                </a>
            </div>
            </div>
            <div class="col-5">col-5</div>
            <div class="col-4">col-4</div>
            </div>
        </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script type="text/javascript">
        
        $("#tweet-left-col").click(function(e){
            alert("hello");
        })
     
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
          $('[data-toggle="popover"]').popover()
        })
      
      
      
      
      
    </script>
  </body>
</html>