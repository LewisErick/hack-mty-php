<?php
class Session
{
	function createSession($id, $user, $myCripPassword)
	{
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION["user"] = "$user";
		$_SESSION["password"] = "$myCripPassword";
		$_SESSION['login'] = "true";
	}
	function deleteSession()
	{
		session_start();
		unset($_SESSION['login']);
		session_destroy();
	}
	function isLogged()
	{
		session_start();
		return isset($_SESSION['login']);
	}
	function getUser()
	{
		return $_SESSION['id'];
	}
}
?>