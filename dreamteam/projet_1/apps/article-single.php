<?php
$tab = $db->query("SELECT * FROM articles WHERE id= '$id_article'")->fetchAll(PDO::FETCH_ASSOC);
	$titre = $tab[0]['titre'];
	$date = $tab[0]['date'];
	$user = $tab[0]['user'];
	$lien = $tab[0]['lien'];
	$description = $tab[0]['description'];
	

if($_SESSION!= null){
	$id_user = $_SESSION['id'];
	$tab = $db->query("SELECT * FROM user WHERE id = '$id_user'")->fetchAll(PDO::FETCH_ASSOC);
	$user = $tab[0]['login'];
	if(isset($tab[0]['droits']) && ($tab[0]['droits'] == 1 || $tab[0]['droits'] == 2))
	{
		require('apps/article-modif.php');
		require('views/article-suppr.phtml');
	}
}

require('views/article-single.phtml');
?>