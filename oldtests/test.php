<?php

echo $_GET['id'];
echo "<br>";
echo $_GET['name'];
echo "<br>";
echo "allah";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="get">
        <input type="text" name="id" >
        <input type="text" name="name" >    
    </form>
    <button onclick="updateURL();">Update</button>
  <script type="text/javascript">
    function updateURL() {
      if (history.pushState) {
          var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?id=hello';
          window.history.pushState({path:newurl},'',newurl);
          //window.location.reload();
      }
    }

   
  </script>
</body>
</html>