<!DOCTYPE html>
<html>
    <head>
        <title>Hash-Dehash</title>
    </head>
    <body>
        <?php
        
       /* echo "test123";
        echo "<br>";
        echo password_hash("test123", PASSWORD_DEFAULT);
        */
        
        $input = "test123";
        //encrypting
        $hashPwdInDb =  password_hash("test123", PASSWORD_DEFAULT);  
        
        //decrypting
        echo password_verify($input, $hashPwdInDb);
        //it is very secure function bcoz the website owner also could not see  user password in database
        // IT RETURNS 1 OR 0 FOR TRUE AND FALSE RESPECTIVELY FOR COREECT AND INCORRECT .
        ?>
    </body>
</html>