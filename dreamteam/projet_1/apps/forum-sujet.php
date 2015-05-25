<?php
$tab = $db->query("SELECT forum.*, user.login
FROM forum
JOIN user ON user.id=forum.id_user
WHERE forum.id= '$id_sujet' 
	")->fetchAll(PDO::FETCH_ASSOC);
	$id_sujet = $tab[0]['id'];
	$user_pseudo = $tab[0]['login'];
	$sujet = $tab[0]['sujet'];
	$date = $tab[0]['date'];
	$description = $tab[0]['description'];
	$id_user = $tab[0]['id_user'];

	

if($_SESSION!= null){
	$user_id = $_SESSION['id'];
	$tab = $db->query("SELECT * FROM user WHERE id = '$user_id'")->fetchAll(PDO::FETCH_ASSOC);
	$user = $tab[0]['login'];
	if(isset($_SESSION['droits']) && (($_SESSION['droits'] == 1 || $_SESSION['droits'] == 2) || ($id_user==$_SESSION['id'])))
	{
		require('apps/forum-modif.php');
		require('views/forum-suppr.phtml');
	}
}

	require('views/forum-sujet.phtml');

?>