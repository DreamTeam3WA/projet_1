<?php
	function droits()
	{
		if(isset($_SESSION['droits']) && ($_SESSION['droits'] == 1))
		{
			$superAdmin = 1;
			return $superAdmin;
		}
		if(isset($_SESSION['droits']) && ($_SESSION['droits'] == 2))
		{
			$admin = 2;
			return $admin;
		}
		if(isset($_SESSION['droits']) && ($_SESSION['droits'] == 3))
		{
			$user = 3;
			return $user;
		}
		if(isset($_SESSION['droits']) && ($_SESSION['id']=4))
		{
			$userSession = 4;
			return $userSession;
		}
	}
?>