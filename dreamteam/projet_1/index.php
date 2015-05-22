<?php
	session_start();
	
	$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
	$db->exec("SET CHARACTER SET utf8");

	if(isset($_GET['logout']) && $_GET['logout']==1){
		$_SESSION = array();
		session_destroy();

		header('Location: index.php?page=home');	
	}
	
<<<<<<< HEAD
if (isset($_GET['ajax']))
{
	$page = $_GET['ajax'];
	require('apps/'.$page.'.php');
}
else
{

	if (isset($_GET['articleid'])){
		$articleid = $_GET['articleid'];
=======
	if (isset($_GET['id_article'])){
		$id_article = $_GET['id_article'];
>>>>>>> 8c07e1d27732403ddab9c12a9da3e4b5630b051e
	}
	if (isset($_GET['id_sujet'])){
		$id_sujet = $_GET['id_sujet'];
	}
	$page = 'home';
	if (isset($_GET['page'])){
		$page = $_GET['page'];
	}

	require('./views/skel.phtml');
}
?>
