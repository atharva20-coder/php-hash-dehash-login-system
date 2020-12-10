<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sign-Up</h2>
    <form action="include/signupserro.inc.php" method="post">
        <?php
        //check for first name
        if(isset($_GET['first'])){
            $first = $_GET['first'];
            echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'"><br>';
        }else{
            echo ' <input type="text" name="first" placeholder="Firstname"><br>';
        }
        //check for last name
        if(isset($_GET['last'])){
            $last = $_GET['last'];
            echo '<input type="text" name="last" placeholder="lastname" value="'.$last.'"><br>';
        }else{
            echo '<input type="text" name="last" placeholder="lastname"><br>';
        }
        ?>
       <!-- <input type="text" name="first" placeholder="Firstname">
        <br>
         <input type="text" name="last" placeholder="lastname">
        <br>--> 
        <input type="text" name="email" placeholder="E-mail">
        <br>
        <?php 
        if(isset($_GET['uid'])){
            $uid = $_GET['uid'];
            echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'"><br>';
        }else{
            echo '<input type="text" name="uid" placeholder="Username"><br>';
        }
        ?>
       <!--<input type="text" name="uid" placeholder="Username">-->
        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type="submit" name="submit">Sign-up</button>
    </form>    
<?php
    /*  method 1 where all fields are erased for one mistake
    $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    
    if(strpos($fullurl, "signup=empty")== true){
        echo "you did not fill all fields!";
        exit();
    }
     elseif(strpos($fullurl, "signup=char")== true){
        echo "you filled invalid character!";
         exit();
    }
    elseif(strpos($fullurl, "signup=email")== true){
        echo "you filled invalid email!";
        exit();
    }
    elseif(strpos($fullurl, "signup=success")== true){
        echo "you did filled form correctly";
        exit();
    }
=======================================================================================================================================================*/
    //METHOD 2 IN THIS METHOD WE DIDN'T REQUIRED TO GET ENTIRE URL of website
    
    //here we check if the url has not set to sign up the we dont want to do anything bcoz user has not clicked submit button 
    if(!isset($_GET['signup'])){
        exit();
    }else{
        //when user submitted the form
        //I WANT DATA WHICH IS AFTER SIGN-UP
        $signupCheck  = $_GET['signup'];
        if($signupCheck == "empty"){
             echo "you did not fill all fields!";
        exit();
        }elseif($signupCheck == "email"){
             echo "you filled invalid email!";
             exit();
        }elseif($signupCheck == "char"){
            echo "you filled invalid character!";
            exit();
        }elseif($signupCheck == "success"){
            echo "<h3>YUPP!</h3>";
            exit();
        }
    }   
    
?>
</body>
</html>