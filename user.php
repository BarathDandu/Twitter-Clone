<?php

$link = mysqli_connect("sdb-g.hosting.stackcp.net", "userDatabase-31383520f7", "fall2018", "userDatabase-31383520f7");
if(mysqli_connect_error()){
    die("Error connecting to Database");
}

$query = "SELECT `name`, `piclocation` FROM `twitter` WHERE username = '". $_GET['username']."' LIMIT 1";
            
if($row = mysqli_fetch_array(mysqli_query($link, $query))){
    $piclocation .= $row['piclocation'];
    
    $name .= $row['name'];
}


echo $name;
echo "<br>";
echo $_GET['username'];
echo "<br>";
echo $piclocation;


?>
<h1>Hello this is User kaushcuagciu askuydoisahdkgao uaishdoijahiudhoe</h1>