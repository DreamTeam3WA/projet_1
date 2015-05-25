<?php
/*
$_SESSION ne sera jamais égal a null :)
Au pire ça sera égal a un tableau vide !
*/
/** Pascal : Ca fait deux fois, faudrait corriger de temps en temps... :( **/
if($_SESSION!= null){
	$id = $_SESSION['id'];
	/** Pascal : CONCATENATION BORDELLLLL **/
	$tab = $db->query("SELECT * FROM user WHERE id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
	/** Pascal : Partir du principe que tab[0] existe c'est bien, mais on vit pas dans un monde de bisounours **/
	$user = $tab[0]['login'];
	if($tab[0]['droits'] == 1 || $tab[0]['droits'] == 2)
	{
		require('views/forum-admin.phtml');
	}
	else {
		require('views/forum-user.phtml');
	}
}

?>