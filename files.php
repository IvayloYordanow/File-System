<?php

if ($_POST) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if ( $username=='user'&& $password=='qwerty'){
        echo 'Welcome';
    }
      else {
          echo 'Wrong username or password';
      }
}

 
 
 
?>
