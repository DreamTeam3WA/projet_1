<?php
	$page = 'home';
	if (isset($_GET['page']))
		$page = $_GET['page'];
	require('./views/skel.phtml');
	if (!isset($user)){
		$user = 'none';
	}
?>
