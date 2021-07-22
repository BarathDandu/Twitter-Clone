<?php

$username = '';
$name = '';
$piclocation = '';
$bannerlocation = '';
$description = '';
$joined = '';

if($_GET['name']=='lauda'){

    unset($_SESSION);

    setcookie("email", "", time() - 60 * 60);

    $_COOKIE['email'] = "";

    header("Location: http://barathdandu-com.stackstaging.com/twitter/welcome.php"); 
    exit();

}else{

    if(array_key_exists("email", $_COOKIE) && $_COOKIE['email']){
        session_start();
        $_SESSION['email'] = $_COOKIE['email'];
    }
    
    session_start();

    if(array_key_exists("email", $_SESSION) && $_SESSION['email']){           

        $link = mysqli_connect("sdb-g.hosting.stackcp.net", "userDatabase-31383520f7", "fall2018", "userDatabase-31383520f7");
        if(mysqli_connect_error()){
            echo "<div class='alert alert-danger' role='alert'>Error connecting to Database<br></div>";
            die("Error connecting to Database");
        }
    
        $query = "SELECT `name`, `username`, `piclocation`,`bannerlocation` FROM `twitter` WHERE email = '".mysqli_real_escape_string($link, $_SESSION['email'])."' LIMIT 1";
    
        $row = mysqli_fetch_array(mysqli_query($link, $query));
    
        $username .= $row['username'];
        
        $name .= $row['name'];
        
        $piclocation .= $row['piclocation'];
            
        $bannerlocation .= $row['bannerlocation'];

    }else{
        header("Location: http://barathdandu-com.stackstaging.com/twitter/welcome.php"); 
        exit();
    }
}

include('main.html');

?>

