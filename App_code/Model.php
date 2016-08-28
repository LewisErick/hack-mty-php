<?php
require 'Model/mysql.php';
require 'Model/session.php';
require 'Model/encrypt.php';

class Model
{
    private $session;
    private $mysql;
    private $encrypt;

    function verify_User($user, $pass)
    {
        $session = new Session();
        $mysql = new Mysql();
        $encrypt = new Encrypt();
        //$passCrypt = $encrypt->encryptPassword($pass);
        $passCrypt = $pass;
        //$passCrypt = crypt($pass,'$%DM&k6eE@&*');
        echo $passCrypt;
        $conn = $mysql->start_connection();
        $query = "SELECT * FROM cliente WHERE email= '$user'";
        if ($stmnt = $conn->query($query)) {
            if ($row = $stmnt->fetch_assoc()) {
                
                if (/*$encrypt->decryptPassword(*/$row['password']/*)*/ === $pass)
                {
                    $session->createSession($row['email'], $user, $passCrypt);
                    return true;
                }
                else{
                    return false;
                }
            } else
                return false;
        } else
            return false;
        $mysql->close_connection($conn);
    }

    function close_Session()
    {
        $session = new Session();
        $session->deleteSession();
    }

    function doUpdate_or_Create($query)
    {
        $mysql = new Mysql();
        $conn = $mysql->start_connection();
        if ($conn->query($query)) {
            return true;
        } else
            return false;
        $mysql->close_connection($conn);
    }

    function doSelect($query)
    {
        $mysql = new Mysql();
        $conn = $mysql->start_connection();
        if ($stmnt = $conn->query($query)) {
            if ($data = $stmnt->fetch_assoc()) {
                return $data;
            } else {
                return NULL;
            }
        } else {
            return NULL;
        }
        $mysql->close_connection($conn);
    }

    function doDelete($query)
    {
        $mysql = new Mysql();
        $conn = $mysql->start_connection();
        return $conn->query($query);
        $mysql->close_connection($conn);
    }

    function doSelectAll($query)
    {
        $mysql = new Mysql();
        $conn = $mysql->start_connection();
        if ($stmnt = $conn->query($query)) {
            return $stmnt;
        } else {
            return NULL;
        }
        $mysql->close_connection($conn);
    }
}

?>