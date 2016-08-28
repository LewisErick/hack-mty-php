<?php
class Image
{
    function upload_img($file_tmp_name, $target_file, $file_name, $id, $campo, $tabla, $event, $ext)
    {
        if (move_uploaded_file($file_tmp_name, $target_file)) {
            //echo "The file ". basename($file_name). " has been uploaded.";
            $model = new Model();
            $ffile = $event.$id.'.'.$ext;
            $query = "UPDATE $tabla SET $campo='$ffile' WHERE id='$id'";
            return $model -> doUpdate_or_Create($query);
        } else {
            return false;
        }
    }
    function update_Image($email, $file, $file_tmp, $folder, $event, $id, $tabla)
    {
        $nofile = 1;
        $target_dir = "../../images/$folder/";
        $ext = explode(".",$file);
        //echo $ext[1];
        $target_file = $target_dir . basename($event.$id.'.'.$ext[1]);
        $uploadOk = 1;
        $imageFileType = pathinfo($file,PATHINFO_EXTENSION);
        //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        //echo $imageFileType;
        //if(!getimagesize($file_tmp)){
        //    header("location: ../view/profile.php");
        //}
        // Check if image file is a actual image or fake image
        //if(isset($_POST["submit"])) {
        
        $check = getimagesize($file_tmp);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $nofile = 0;
        }
        //}
        // Check if file already exists
        //if (file_exists($target_file)) {
        //    echo "Sorry, file already exists.";
        //    $uploadOk = 0;
        //}
        // Check file size
        //if ($file["size"] > 500000000) {
        //    echo "Sorry, your file is too large.";
        //    $uploadOk = 0;
        //}
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        //Check if there is no file and returns the end of the upload
        if($nofile == 0) {
            return true;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return false;
            // if everything is ok, try to upload file
        } else {
            $img = new Image();
            if($img -> upload_img($file_tmp, $target_file, $file, $id, "imagen", $tabla, $event, $ext[1]))
            {
                //header("location: ../view/profile.php");
                return true;
            }
            else
            {
                //echo "Sorry, there was an error uploading your file.";
                return false;
            }
        }
    }
    function upload_imgS($file_tmp_name, $target_file, $file_name, $id, $campo, $tabla, $event, $ext)
    {
        if (move_uploaded_file($file_tmp_name, $target_file)) {
            //echo "The file ". basename($file_name). " has been uploaded.";
            $model = new Model();
            $ffile = $event.$id.'.'.$ext;
            $query = "INSERT INTO $tabla (idevento, url) VALUES ('$id','$ffile')";
            return $model -> doUpdate_or_Create($query);
        } else {
            return false;
        }
    }
    function update_ImageEvento($email, $file, $file_tmp, $folder, $event, $id, $tabla)
    {
        $target_dir = "../../images/$folder/";
        $ext = explode(".",$file);
        //echo $file;
        $target_file = $target_dir . basename($event.$id.'.'.$ext[1]);
        $uploadOk = 1;
        $imageFileType = pathinfo($file,PATHINFO_EXTENSION);

        $check = getimagesize($file_tmp);
        if($check !== false) {
            //echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            //echo "File is not an image.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return false;
            // if everything is ok, try to upload file
        } else {
            $img = new Image();
            if($img -> upload_imgS($file_tmp, $target_file, $file, $id, "imagen", $tabla, $event, $ext[1]))
            {
                //header("location: ../view/profile.php");
                return true;
            }
            else
            {
                //echo "Sorry, there was an error uploading your file.";
                return false;
            }
        }
    }
}
?>