<?php
$tab = $db->query("SELECT * FROM articles WHERE id= '$articleid' ")->fetchAll(PDO::FETCH_ASSOC);
	$id = $tab[0]['id'];
	$titre = $tab[0]['titre'];
	$date = $tab[0]['date'];
	$user = $tab[0]['user'];
	$lien = $tab[0]['lien'];
	$description = $tab[0]['description'];
	

if($_SESSION!= null){
	$id = $_SESSION['id'];
	$tab = $db->query("SELECT * FROM user WHERE id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
	$user = $tab[0]['login'];
	if(isset($tab[0]['droits']) && ($tab[0]['droits'] == 1 || $tab[0]['droits'] == 2))
	{
		require('apps/article-modif.php');
		require('apps/article-suppr.php');
	}
}

require('views/article-single.phtml');
?>