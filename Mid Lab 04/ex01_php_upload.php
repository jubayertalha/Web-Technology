<?php
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file1']['name'];
        $fileType = $_FILES['file1']['type'];
        $fileSize = $_FILES['file1']['size'];
        $fileTempLoc = $_FILES['file1']['tmp_name'];

        $targeteLoc = "photos/";

        if(!empty($fileName)){
            if($fileType === "image/jpeg" || $fileType == "image/png"){
                if($fileSize<=5000000){
                    move_uploaded_file($fileTempLoc, $targeteLoc.$fileName);
                    echo "Uploaded Successfully";
                }else{
                    echo "Select lower file size";
                }
            }else{
                echo "Select jpeg or png file";
            }
        }else{
            echo "Select a file";
        }
    }
?>

<form actioin="ex01_php_upload.php" method="POST" enctype="multipart/form-data">
    <p><input type="file" name="file1"></p>
    <p>Max 5MB Size</p>
    <p><input type="submit" name="submit" value="Upload"></p>
</form>