<?php

if($_SESSION!= null){
	$id = $_SESSION['id'];
	$tab = $db->query("SELECT * FROM user WHERE id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
	$user = $tab[0]['login'];
	if($tab[0]['droits'] == 1)
	{
		require('views/forum-admin.phtml');
	}
	else {
		require('views/forum-user.phtml');
	}
}

?>