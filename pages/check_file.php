<?php
/**
 * Created by PhpStorm.
 * User: lagwy
 * Date: 28/08/16
 * Time: 11:52 AM
 */
//if they DID upload a file...
if($_FILES['photo']['name'])
{
    $Controller = new Controller();
    $Pfile = isset($_FILES["photo"]["name"])? $_FILES["photo"]["name"] : "";
    $Pfile_tmp = isset($_FILES["photo"]["tmp_name"])? $_FILES["photo"]["tmp_name"] : "";
    //if no errors...
    if(!$_FILES['photo']['error'])
    {
        //now is the time to modify the future file name and validate the file
        $new_file_name = strtolower($_FILES['photo']['tmp_name']); //rename file
            //move it to where we want it to be
            move_uploaded_file($_FILES['photo']['tmp_name'], 'pages/assets/img/'.$new_file_name);
            $message = 'Congratulations!  Your file was accepted.';
        start_session();
        $email = $_SESSION['user'];
        $Controller ->updateImage($email, $Pfile, $Pfile_tmp, "img", $email, "", "");

    }
    //if there is an error...
    else
    {
        //set that to be the returned message
        $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
    }
}
$message = $_FILES['photo']['tmp_name'];
var_dump($message);

//you get the following information for each file:
$_FILES['field_name']['name'];
$_FILES['field_name']['size'];
$_FILES['field_name']['type'];
$_FILES['field_name']['tmp_name'];