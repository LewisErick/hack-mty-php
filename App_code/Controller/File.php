<?php

class File
{
    function upload_File($file_tmp_name, $target_file, $file_name, $id, $campo, $tabla, $event, $ext)
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


    function update_File($file, $file_tmp, $folder, $event, $id, $tabla)
    {

        $target_dir = "../../files/$folder/";
        $ext = 'pdf';//explode(".",$file); echo $ext[1];
        $target_file = $target_dir . basename($event.$id.'.'.$ext);
        $uploadOk = 1;
        //$finfo = finfo_open(FILEINFO_MIME_TYPE);
        //$FileType = finfo_file($finfo, $file_tmp);
        //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        //if(!getimagesize($file_tmp)){
        //    header("location: ../view/profile.php");
        //}

        // Check if image file is a actual image or fake image
        //if(isset($_POST["submit"])) {
            $check = filesize($file_tmp);
            if($check !== false) {
                //echo "File is a PDF - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                //echo "File is not a PDF.";
                $uploadOk = 0;
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
        //if($FileType != 'application/pdf') {
        //    echo "Sorry, only PDF files are allowed.";
        //    $uploadOk = 0;
        //}
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return true;
        // if everything is ok, try to upload file
        } else {
            $file = new File();
            if($file -> upload_File($file_tmp, $target_file, $file, $id, "pdf", $tabla, $event, $ext))
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