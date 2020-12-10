<?php
   include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content = "width=device-width, initial=1.0">
        <title>Prepared statement</title>
    </head>
    <body>
        <?php 
        $data = "Admin";
        //created a template
        $sql = "select * from users where user_uid=?;";
        //create a prepared stmt
        $stmt = mysqli_stmt_init($conn);
        //prepare the prepared stmt
        if (!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL Stament failed";
        }else{
            //bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $data);
            //run parameters inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            while ($row = mysqli_fetch_assoc($result)){
                echo $row['user_uid']."<br>";
            }
        }
               //the letter s means that the parameter will be string data type.
        //s=string,i=integer, b=blob, d=double.
        ?>
    </body>
</html>    