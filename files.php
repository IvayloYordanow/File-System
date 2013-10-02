<?php
require("sessions.php");


   
   $filetext=fopen("uploadedfiles.txt",'r');
     
   echo "<p>These files have been uploaded</p>";
     while(!feof($filetext)) {
         
         $strLine=fgets($filetext);
         
         echo"<p> <a href='Pictures/$strLine'target=\"_blank\">$strLine</a></p>";
     }
   
    
      
?>

<html>
<body>

<?php

if (isset($_POST)) {
   session_unset();
   session_destroy();
}
?>

<form method="POST">
   <input type="submit" value="Logout"/>
</form>

</body>
</html>
