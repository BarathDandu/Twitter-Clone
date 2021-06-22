<?php

    session_start();

    $pic = "";
    $error = "";

   // echo $_SESSION['email'];
    //echo "<br>";
    //echo $_POST['username'];
    //echo "<br>";
    //echo $_POST['picloc'];
    //echo "<br>";

if(array_key_exists("picloc", $_POST) && $_POST['picloc']){
    $pic .= $_POST['picloc'];
}else{
    $pic .= "/p/images/userIcon.png";
}

    if(array_key_exists("email", $_SESSION) && $_SESSION['email']){
        
        $link = mysqli_connect("sdb-g.hosting.stackcp.net", "userDatabase-31383520f7", "fall2018", "userDatabase-31383520f7");
        if(mysqli_connect_error()){
            die("Error connecting to Database");
        }  
        
        if($_POST['sub']=='sb'){
                    
            $query = "SELECT `id` FROM `twitter` WHERE username = '".mysqli_real_escape_string($link, $_POST['username'])."'";

            $result = mysqli_query($link, $query);
            
            if(mysqli_num_rows($result) > 0){

                $error .= "<div class='alert alert-danger' role='alert'>Username has already been taken<br></div>";

            }else{
            
                
                $query = "UPDATE `twitter` SET `username`= '".mysqli_real_escape_string($link, $_POST['username'])."',`piclocation`= '".$_POST['picloc']."' WHERE email = '".$_SESSION['email']."' LIMIT 1";
                
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
    }
?>

<!DOCTYPE html>
<html>
	<head>
        <title>Sign up to Twitter</title>

        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        
		<link rel="stylesheet" href="https://unpkg.com/dropzone/dist/dropzone.css" />
		<link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet"/>
		<script src="https://unpkg.com/dropzone"></script>
		<script src="https://unpkg.com/cropperjs"></script>
		
        <link rel="icon" href="http://barathdandu-com.stackstaging.com/p/images/Bluelogo.png">
        
		<style>

		.image_area {
		  position: relative;
		}
            
            

		img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}

		.overlay {
             position: absolute;
		  bottom: 10px;
		  left: 0;
		  right: 0;
		  background-color: #000;
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
            
            .contain{
                width: 350px;
                margin:5vh auto 5vh auto;
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
                padding:1.2em 12em;
                margin: 1em 0 1em 0;
            }

            .btn-primary:hover {
                color: #FFF;
                opacity: 0.9;
                border: 2px solid #00b0f0;
            }
            
            #inp{
                margin: 1em 0 0 0 ;
            }
            
            .invalid-feedback{
                color: red;
                display: none;
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
        
		<div class="container">
			
            <div class="row">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4">
					<div class="image_area"  align="center">
						<form method="post">
							<label for="upload_image">
								<img src="<?php echo $pic ?>" id="uploaded_image" class="img-responsive img-circle" />
								<div class="overlay">
									<div class="text">Click to Change Profile Image</div>
                                    </div>
								<input type="file" name="image" class="image" id="upload_image" style="display:none" accept="image/x-png,image/gif,image/jpeg" />
							</label>                            
						</form>
					</div>
                   
                    <form method="POST" id = "inp">
                        
                        <label style="text-align:left;" for="username">Enter Username:</label>

                        <input type="text" class="form-control" id="username" name = "username" placeholder="Username" aria-describedby="emailHelp" required>
                        <div class="invalid-feedback">
                            Please enter a username without white space.
                        </div>
                        
                        <input id = "hidinp" type="hidden" name = "picloc" value = "<?php echo $pic ?>"> 

                        <button id = "signupbtn" type="submit" class="btn btn-primary" name = "sub" Value = "sb">Sign Up</button>
                    
                    </form>
			
                </div>
    		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			  	<div class="modal-dialog modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title">Crop Image Before Upload</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
			      			<button type="button" id="crop" class="btn btn-primary">Crop</button>
			        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			      		</div>
			    	</div>
			  	</div>
			</div>			
		</div>
	</body>
</html>

<script>
    
    $("#signupbtn").click(function(e){
        
        var strrr = $("#username").val();
        if( strrr.indexOf(" ") !== -1 )
        {
            e.preventDefault();
            $(".invalid-feedback").css("display", "block");
        }else{
            $(".invalid-feedback").css("display", "none");
        }
        
        $loc = $("#uploaded_image").attr('src');
        
        $store = $loc.trim();
        
        $("#hidinp").val($store);
                      
    });
    
    $(document).ready(function(){

	var $modal = $('#modal');

	var image = document.getElementById('sample_image');

	var cropper;

	$('#upload_image').change(function(event){
		var files = event.target.files;

		var done = function(url){
			image.src = url;
			$modal.modal('show');
		};

		if(files && files.length > 0)
		{
			reader = new FileReader();
			reader.onload = function(event)
			{
				done(reader.result);
			};
			reader.readAsDataURL(files[0]);
		}
	});

	$modal.on('shown.bs.modal', function() {
		cropper = new Cropper(image, {
			aspectRatio: 1,
			viewMode: 1,
			preview:'.preview'
		});
	}).on('hidden.bs.modal', function(){
		cropper.destroy();
   		cropper = null;
	});

	$('#crop').click(function(){
		canvas = cropper.getCroppedCanvas({
			width:300,
			height:300
		});
        
        canvas.toBlob(function(blob){
			url = URL.createObjectURL(blob);
			var reader = new FileReader();
			reader.readAsDataURL(blob);
			reader.onloadend = function(){
				var base64data = reader.result;
                //alert(base64data);
				$.ajax({
					url:'http://barathdandu-com.stackstaging.com/p/upload.php/',
					method:'POST',
					data:{image:base64data},
					success:function(data)
					{
						$modal.modal('hide');
						$('#uploaded_image').attr('src', data);
                        console.log(data);
					},
                    error: function(xhr, status, error) {
                      var err = eval("(" + xhr.responseText + ")");
                      alert(err.Message);
                    }
				});
			};
		});
	});
	
});
</script>