 <?php
 
if (session_status() == PHP_SESSION_ACTIVE) {
    header("Location: upload.php");
}
    
    
     $error='';
    
    if (isset($_POST)) {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
	    $username = $_POST["username"];
		$password = $_POST["password"];
		
		if ($username == "user" && $password == "qwerty") {
		    session_start();
			$_SESSION["user"] = $username;
			header("Location: upload.php");
			exit();
		}
		else {
			$error = "Invalid username or password ";
		}
	}
}

    
    
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        if($error!=''){
         
            echo "<p>".$error."</p>";
        }
           ?>
        
       <form method="POST">
       <label for="user">Username</label>
       <input type="text" name="username" value="" id="user"/><br>
       <label for="pass">Password</label>
       <input type="password" name="password" id="pass"/><br>
       <input type="submit" value="Submit"/>

             </form>
 
        
        
    </body>
</html>

