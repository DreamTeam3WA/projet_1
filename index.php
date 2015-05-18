<?php
/*
Faire la connection a la base de données ici plutôt que dans les autre fichiers
*/
	$page = 'home';
	if (isset($_GET['page']))
		$page = $_GET['page'];
	require('./views/skel.phtml');
	if (!isset($user)){
		$user = 'none';
	}
?>
