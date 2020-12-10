<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="site.php">HOME</a></li>
    <li><a href="indie.php">contact</a></li>
    </ul>
    <?php
   $_SESSION['username'] = "Danie948a";
    echo $_SESSION['username'];
    if (!isset($_SESSION['username'])){
        echo "you are not logged in";
    }else{
        echo "<br>you are logged in";
    }
    ?>
</body>
</html>
