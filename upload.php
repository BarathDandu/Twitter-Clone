<?php

session_start();

if(array_key_exists("email", $_SESSION) && $_SESSION['email']){
        
    $link = mysqli_connect("sdb-g.hosting.stackcp.net", "userDatabase-31383520f7", "fall2018", "userDatabase-31383520f7");
    if(mysqli_connect_error()){
        echo "<div class='alert alert-danger' role='alert'>Error connecting to Database<br></div>";
        die("Error connecting to Database");
    }

    if(isset($_POST['name'])&& isset($_POST['username'])){

        $query = "SELECT `id` FROM `twitter` WHERE username = '".mysqli_real_escape_string($link, $_POST['username'])."'";

        $result = mysqli_query($link, $query);
        
        if(mysqli_num_rows($result) > 0){

            echo "<div class='alert alert-danger' role='alert'>Username has already been taken<br></div>";

        }else{

            if(isset($_POST['image'])){
               
                $data = $_POST['image'];
    
                $image_array_1 = explode(";", $data);
    
                $image_array_2 = explode(",", $image_array_1[1]);
    
                $decodedData = base64_decode($image_array_2[1]);
    
                $filename = '/public_html/twitter/upload/' . time() . '.png';
                $ech =  explode("public_html", $filename);
                    
                $cid = ftp_connect("ftp.stackcp.com") or die("Couldn't connect to $ftp_host");
                ftp_login($cid, "barathdandu.com", "c00b6407346c" )or die("Couldn't login to ftp server");
                ftp_pasv($cid, true);    
                    
                file_put_contents('/tmp/image.jpg', $decodedData);
    
                if (ftp_put($cid, $filename , '/tmp/image.jpg', FTP_ASCII)) {
                    
                    $query = "UPDATE `twitter` SET `username`= '".mysqli_real_escape_string($link, $_POST['username'])."',`name`= '".mysqli_real_escape_string($link, $_POST['name'])."',`piclocation`= '".$ech[1]."' WHERE email = '".$_SESSION['email']."' LIMIT 1";
            
                    //echo $query;
                    
                    if(mysqli_query($link, $query)){
                        echo"<div class='alert alert-success' role='alert'>You have been signed up!<br></div>";
                    }
                    else{
                        echo "<div class='alert alert-danger' role='alert'>There was an error signing you up.<br> Please try again later</div>";
                    }

                }else{
                    echo "<div class='alert alert-danger' role='alert'>There was a problem uploading Profile picture.<br> Please try again later</div>";
                }
                // close the connection
                ftp_close($conn_id); 

            }else{//if no image was sent
                $query = "UPDATE `twitter` SET `username`= '".mysqli_real_escape_string($link, $_POST['username'])."',`name`= '".mysqli_real_escape_string($link, $_POST['name'])."',`piclocation`= '/twitter/images/userIcon.png' WHERE email = '".$_SESSION['email']."' LIMIT 1";
            
                //echo $query;
                
                if(mysqli_query($link, $query)){
                    echo "<div class='alert alert-success' role='alert'>You have been signed up!<br></div>";
                }
                else{
                    echo "<div class='alert alert-danger' role='alert'>There was an error signing you up.<br> Please try again later</div>";
                }
            }     
        }
    }
    else if(isset($_POST['naam'])){

        if(strncmp($_POST['profileEdit'], "data", 4) === 0 ){

            //echo "profilepic";
            
            $data = $_POST['profileEdit'];

            $image_array_1 = explode(";", $data);

            $image_array_2 = explode(",", $image_array_1[1]);

            $decodedData = base64_decode($image_array_2[1]);

            $filename = '/public_html/twitter/upload/' . time() . '.png';
            $ech =  explode("public_html", $filename);
                
            $cid = ftp_connect("ftp.stackcp.com") or die("Couldn't connect to $ftp_host");
            ftp_login($cid, "barathdandu.com", "c00b6407346c" )or die("Couldn't login to ftp server");
            ftp_pasv($cid, true);    
                
            file_put_contents('/tmp/image.jpg', $decodedData);

            if (ftp_put($cid, $filename , '/tmp/image.jpg', FTP_ASCII)) {
                
                $profilePicLoc = $ech[1];

            }
            ftp_close($conn_id); 
        }else{
            $str = $_POST['profileEdit'];
            $tmp = (explode("com",$str));
            $profilePicLoc = $tmp[2];
        }

        if(strncmp($_POST['bannerEdit'], "data", 4) === 0){

            //echo "bannerpic";
            
            $data = $_POST['bannerEdit'];

            $image_array_1 = explode(";", $data);

            $image_array_2 = explode(",", $image_array_1[1]);

            $decodedData = base64_decode($image_array_2[1]);

            $filename = '/public_html/twitter/upload/' . time() . '.png';
            $ech =  explode("public_html", $filename);
                
            $cid = ftp_connect("ftp.stackcp.com") or die("Couldn't connect to $ftp_host");
            ftp_login($cid, "barathdandu.com", "c00b6407346c" )or die("Couldn't login to ftp server");
            ftp_pasv($cid, true);    
                
            file_put_contents('/tmp/image.jpg', $decodedData);

            if (ftp_put($cid, $filename , '/tmp/image.jpg', FTP_ASCII)) {
                
                $bannerPicLoc = $ech[1];

            }
            ftp_close($conn_id); 
        }else{
            $str = $_POST['bannerEdit'];
            $tmp = (explode("com",$str));
            $bannerPicLoc = $tmp[2];
        }
        
        $query = "UPDATE `twitter` SET `name`= '".mysqli_real_escape_string($link, $_POST['naam'])."',`description`= '".mysqli_real_escape_string($link, $_POST['bio'])."',`piclocation`= '".$profilePicLoc."',`bannerlocation`= '".$bannerPicLoc."' WHERE email = '".$_SESSION['email']."' LIMIT 1";
    
        //echo $query;
        
        if(mysqli_query($link, $query)){
            echo "succ";
        }
        else{
            echo "fail";
        }
    }  
}
?>
