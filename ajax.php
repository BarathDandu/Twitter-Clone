<?php

    if(isset($_GET['call_Page'])){

        $callPage = $_GET['call_Page'];

        if($callPage == "home") {
            echo json_encode(array(
                'data'=>'Home'
            ));
        }

        else if($callPage == "explore") {
            echo json_encode(array(
                'data'=>'explore'
            ));
        }

        else if($callPage == "notifications") {
            echo json_encode(array(
                'data'=>'notifications'
            ));
        }

        else if($callPage == "messages") {
            echo json_encode(array(
                'data'=>'Messages'
            ));
        }

        else if($callPage == "bookmarks") {
            echo json_encode(array(
                'data'=>'Bookmarks'
            ));
        }

        else if($callPage == "lists") {
            echo json_encode(array(
                'data'=>'Lists'
            ));
        }

        else if($callPage == "more") {
            echo json_encode(array(
                'data'=>'more'
            ));
        }

        else{
                
            $link = mysqli_connect("sdb-g.hosting.stackcp.net", "userDatabase-31383520f7", "fall2018", "userDatabase-31383520f7");
            if(mysqli_connect_error()){
                die("Error connecting to Database");
            }

            $query = "SELECT `name`, `piclocation` FROM `twitter` WHERE username = '".$callPage."' LIMIT 1";
            
            if($row = mysqli_fetch_array(mysqli_query($link, $query))){
                $piclocation .= $row['piclocation'];
                $name .= $row['name'];
            }

            if(array_key_exists("0", $row) && $row['0']){
                echo json_encode(array(
                    'name' => $name,
                    'data'=> $piclocation
                ));
                
            }else{
                echo json_encode(array(
                    'data'=>'This account doesn’t exist, Try searching for another.'
                ));      
            } 
        }   
    }
?>