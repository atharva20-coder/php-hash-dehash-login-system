<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>    
<meta charset="utf-8">
    <title></title>
</head>
<body>
    <ul>
    <li><a href="site.php">HOME</a></li>
    <li><a href="indie.php">contact</a></li>
    </ul>
    <?php
      echo $_SESSION['username']
    ?>
</body>
</html>