<?php

if($_SESSION!= null){
	$id = $_SESSION['id'];
	$tab = $db->query("SELECT * FROM user WHERE id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
	$user = $tab[0]['login'];
<<<<<<< HEAD

	require('views/header-log-in.phtml');
=======
	if($tab[0]['droits'] == 1)
	{
		require('views/header-admin.phtml');
	}
	else {
		require('views/header-user.phtml');
	}
>>>>>>> 640a34326868e3fd7120c2f84de541250bad248c
}

else {
	require('views/header-log-off.phtml');
}

?>