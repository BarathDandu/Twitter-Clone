<?php

if(isset($_POST['image']))
{
    
    $data = $_POST['image'];


	$image_array_1 = explode(";", $data);


	$image_array_2 = explode(",", $image_array_1[1]);


	$decodedData = base64_decode($image_array_2[1]);
    

	$filename = '/public_html/p/upload/' . time() . '.png';
    $ech =  explode("public_html", $filename);

    
    $cid = ftp_connect("ftp.stackcp.com") or die("Couldn't connect to $ftp_host");
    ftp_login($cid, "barathdandu.com", "c00b6407346c" )or die("Couldn't login to ftp server");
    ftp_pasv($cid, true);    
    
    file_put_contents('/tmp/image.jpg', $decodedData);

    if (ftp_put($cid, $filename , '/tmp/image.jpg', FTP_ASCII)) {
       
        echo $ech[1];
    
    }else{
        
        echo "There was a problem while uploading";

    }
    
    // close the connection
    ftp_close($conn_id); 

}

?>




