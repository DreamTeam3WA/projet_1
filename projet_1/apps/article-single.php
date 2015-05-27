<?php
/** Pascal : CONCATENATION !!!!!!!!!!!!!!! **/
$tab = $db->query("SELECT * FROM articles WHERE id= '$id_article'")->fetchAll(PDO::FETCH_ASSOC);
/** Pascal : $tab[0] existe ? bisounours land **/
	$titre = $tab[0]['titre'];
	$date = $tab[0]['date'];
	$user = $tab[0]['user'];
	$lien = $tab[0]['lien'];
	$description = $tab[0]['description'];
	
/** Pascal : $_SESSION ne sera jamais égal a null, mais plutôt a un tableau vide **/
if($_SESSION!= null){
	$id_user = $_SESSION['id'];
	/** Pascal : CONCATENATION §§§§§§§§§§§§§§§§§§§§§§§§§§ **/
	$tab = $db->query("SELECT * FROM user WHERE id = '$id_user'")->fetchAll(PDO::FETCH_ASSOC);
	/** Pascal : $tab[0] existe tjs, tjs bisounours land ? **/
	$user = $tab[0]['login'];
	if (droits() == 1 || droits() == 2)
	{
		require('apps/article-modif.php');
		require('views/article-suppr.phtml');
	}
}

require('views/article-single.phtml');
?>