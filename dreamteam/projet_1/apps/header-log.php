<?php

if($_SESSION!= null){
	$id_user = $_SESSION['id'];
	$tab = $db->query("SELECT * FROM user WHERE id = '$id_user'")->fetchAll(PDO::FETCH_ASSOC);
	$user = $tab[0]['login'];
	if(isset($tab[0]['droits']) && $tab[0]['droits'] == 1)
	{
		require('views/header-super-admin.phtml');
	}
	if(isset($tab[0]['droits']) && $tab[0]['droits'] == 2)
	{
		require('views/header-admin.phtml');
	}
	else {
		require('views/header-user.phtml');
	}
}

else {
	require('views/header-log-off.phtml');
}

?>