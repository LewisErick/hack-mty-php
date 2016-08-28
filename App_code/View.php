<?php
class View
{
	private $session = NULL;
	function checkUser()
	{
		$session = new Session();
		if(!($session -> isLogged()))
		{
			header("Location: ../index.html");
		}
	}
	function haveSession()
	{
		$session = new Session();
		if($session -> isLogged())
		{
			header("Location: index.php");
		}
	}
	function getActualUser()
	{
		$session = new Session();
		$model = new Model();
		$user = $session -> getUser();
		$sql = "SELECT * FROM user WHERE id='$user'";
		return $model -> doSelect($sql);
	}
}
?>