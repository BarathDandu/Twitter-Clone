<?php

    if(isset($_GET['call_Page'])){

        $callPage = $_GET['call_Page'];

        if($callPage == "home") {
            echo json_encode(array(
                'status' => 'success',
                'title' => 'Home / Twitter',
                'description' => 'Home/ Twitter',
                'url'=>'home',
                'data'=>'Home'
            ));
        }

        else if($callPage == "explore") {
            echo json_encode(array(
                'status' => 'success',
                'title' => 'Explore / Twitter',
                'description' => 'Explore / Twitter',
                'url'=>'explore',
                'data'=>'explore'
            ));
        }

        else if($callPage == "notifications") {
            echo json_encode(array(
                'status' => 'success',
                'title' => 'Notifications / Twitter',
                'description' => 'Notifications / Twitter',
                'url'=>'notifications',
                'data'=>'notifications'
            ));
        }

        else if($callPage == "messages") {
            echo json_encode(array(
                'status' => 'success',
                'title' => 'Messages / Twitter',
                'description' => 'Messages / Twitter',
                'url'=>'messages',
                'data'=>'Messages'
            ));
        }

        else if($callPage == "bookmarks") {
            echo json_encode(array(
                'status' => 'success',
                'title' => 'Bookmarks / Twitter',
                'description' => 'Bookmarks / Twitter',
                'url'=>'bookmarks',
                'data'=>'Bookmarks'
            ));
        }

        else if($callPage == "lists") {
            echo json_encode(array(
                'status' => 'success',
                'title' => 'Lists / Twitter',
                'description' => 'Lists / Twitter',
                'url'=>'lists',
                'data'=>'Lists'
            ));
        }

        else if($callPage == "more") {
            echo json_encode(array(
                'status' => 'success',
                'title' => 'More',
                'description' => 'More / Twitter',
                'url'=>'more',
                'data'=>'more'
            ));
        }

        else{
                
            $link = mysqli_connect("sdb-g.hosting.stackcp.net", "userDatabase-31383520f7", "fall2018", "userDatabase-31383520f7");
            if(mysqli_connect_error()){
                die("Error connecting to Database");
            }

            $query = "SELECT `id` FROM `twitter` WHERE username = '".$callPage."'LIMIT 1";

            $result = mysqli_query($link, $query);

            if(mysqli_num_rows($result) == 0){
                echo json_encode(array(
                    'status' => 'fail',
                    'title' => 'Profile / Twitter',
                    'description' => 'Page not found / Twitter',
                    'url'=> $callPage,
                    'data'=>'This account doesn’t exist, Try searching for another.'
                ));      
            } else{
                echo json_encode(array(
                    'status' => 'success',
                    'title' => $callPage.' / Twitter',
                    'description' => 'Profile of user',
                    'url'=> $callPage,
                    'data'=> file_get_contents("http://barathdandu-com.stackstaging.com/twitter/user.php?username=".$callPage)
                ));
            }
        }   
    }
?>