<?php
	session_start();
	
	$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
	$db->exec("SET CHARACTER SET utf8");
	
	if (isset($_GET['sujetid'])){
		$sujetid = $_GET['sujetid'];
	}

	$page = 'home';
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}

	require('./views/skel.phtml');
?>
