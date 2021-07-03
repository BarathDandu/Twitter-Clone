<?php

    if(isset($_GET['call_Page'])){
        $callPage = $_GET['call_Page'];

        if($callPage == "profileBtn") {
            echo json_encode(array(
                'status' => 'success',
                'title' => 'Profile',
                'description' => 'Profile of user',
                'url'=>'profile',
                'data'=>'hello my children'
            ));
        }
    }




?>