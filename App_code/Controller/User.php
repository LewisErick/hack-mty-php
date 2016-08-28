<?php
class User
{
    function createUser($username, $password, $rol)
    {
        $encrypt = new Encrypt();

        $myCripPassword = $encrypt -> encryptPassword($password);
        $model = new Model();
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $aux = $model -> doSelectAll($sql);
        if($aux -> num_rows <= 0){
            $sql = "INSERT INTO user (username, password, rol) VALUES ('$username','$myCripPassword','0')";
            if ($model -> doUpdate_or_Create($sql))
                return "";
            else
                return "db";
        }
        else
            return "existe";
    }
    function updateUser($id, $username, $password)
    {

        $encrypt = new Encrypt();


        //$myCripPassword = crypt($mypassword, '$%DM&k6eE@&*');
        $model = new Model();
        $sql = "SELECT * FROM user WHERE id=$id";
        $data = $model -> doSelect($sql);
        //echo $data['password'];
        if($data['password'] != $password)
            $myCripPassword = $encrypt -> encryptPassword($password);
        else
            $myCripPassword = $password;

        //$myCripPassword = $encrypt -> encryptPassword($password);
        //$sql = "UPDATE user SET username = '$username', password = '$myCripPassword' WHERE id = $id";
        $sql = "UPDATE user SET password = '$myCripPassword' WHERE id = $id";
        return $model -> doUpdate_or_Create($sql);
    }
    function deleteUser($id)
    {
        $model = new Model();
        $sql = "DELETE FROM  user WHERE id = $id";
        return $model -> doUpdate_or_Create($sql);
    }
}
?>