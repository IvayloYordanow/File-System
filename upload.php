<?PHP

if ($_POST){
    
    if (count($_FILES>0)){
        
        print_r($_FILES);
        
        if (move_uploaded_file($_FILES['MyPictures']['tmp_name'],'Pictures'.DIRECTORY_SEPARATOR.$_FILES['MyPictures']['name'] )){
            
            echo 'File uploaded successfuly ';
        }
            
            else {
                
                echo 'File is not uploaded';
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
   <form enctype='multypart/form-data' name="files" method="POST" action="">
       
      
       <input type="file" name="MyPictures"/>
       <input type="submit" value="Upload">

   </form>
    </body>
</html>
