<?php
require("sessions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
   <form enctype='multipart/form-data' name="files" method="POST" action="">
       
      
       <input type="file" name="strFile"/>
       <input type="submit" name="submit" value="Upload"/>

   </form>
    </body>
</html>


<?PHP


if ($_POST){
    
    $strFilname=$_FILES['strFile']['tmp_name'];
    $strRealname=$_FILES['strFile']['name'];
     
    
    if (is_uploaded_file($strFilname))
             if(move_uploaded_file( $strFilname,"Pictures/$strRealname")){
                     echo'File uploaded successfully';
             
             $filetext=fopen("uploadedfiles.txt",'a');
             fwrite($filetext,"$strRealname\r\n");
             if (!fclose($filetext))
                 echo "<p>Error closing file</p>";
}
             
             else {
                 echo 'Error:File not moved';
             }
             
             else 'Error: Not an uplodaded file';
} 


?>
</br>
<a href="files.php">Uploaded files</a>

