<?php
	session_start();
	
	$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
	$db->exec("SET CHARACTER SET utf8");
	require('./apps/function.php');
	if(isset($_GET['logout']) && $_GET['logout']==1){
		$_SESSION = array();
		session_destroy();

		header('Location: index.php?page=home');	
	}

if (isset($_GET['ajax']))
{
	if (isset($_GET['id_sujet'])){
		$id_sujet = $_GET['id_sujet'];
	}
	$page = $_GET['ajax'];
	require('apps/'.$page.'.php');
}
else
{
	/** Pascal : Faire attention avec ça, ça peut être dangereux pour la suite (sécurité) **/
	if (isset($_GET['id_user'])){
		$id_user = $_GET['id_user'];
		
	}
	if (isset($_GET['id_article'])){
		$id_article = $_GET['id_article'];

	}
	if (isset($_GET['id_commentaire'])){
		$id_commentaire = $_GET['id_commentaire'];
	}
	if (isset($_GET['id_sujet'])){
		$id_sujet = $_GET['id_sujet'];
	}
	$page = 'home';
	if (isset($_GET['page']) && !empty($_GET['page'])){
		$page = $_GET['page'];
	}
	require('./views/skel.phtml');
}
?>
