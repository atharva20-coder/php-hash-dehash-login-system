 <?php

       if(isset($_POST['submit'])){
           //user get access after signup
           include_once 'dbh.inc.php';
           $first = $_POST['first'];
           $last = $_POST['last'];
           $email = $_POST['email'];
           $uid = $_POST['uid'];
           $pwd = $_POST['pwd'];
           
          //check if inputs are empty
          if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
              header("Location: ../errorhandlingsign.php?signup=empty");
              exit();
          } else{
              if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
                   header("Location: ../errorhandlingsign.php?signup=char");
                   exit();
              } else{
                  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                       header("Location: ../errorhandlingsign.php?signup=email&first=$first&last=$last&uid=$uid");
                       exit();
                  } else{
                       header("Location: ../errorhandlingsign.php?signup=success");
                       exit();
                  }
              }
          } 
       }else{
               header("Location: ../errorhandlingsign.php");
               exit();
          }   
           