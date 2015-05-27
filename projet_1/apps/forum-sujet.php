<?php
/** Pascal : CONCATENATION AHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH **/
$tab = $db->query("SELECT forum.*, user.login
FROM forum
JOIN user ON user.id=forum.id_user
WHERE forum.id= '$id_sujet' 
	")->fetchAll(PDO::FETCH_ASSOC);
/** Pascal : Qui vous dit que $id_sujet existe ? **/
	$id_sujet = $tab[0]['id'];
	$user_pseudo = $tab[0]['login'];
	$sujet = $tab[0]['sujet'];
	$date = $tab[0]['date'];
	$description = $tab[0]['description'];
	$id_user = $tab[0]['id_user'];

/** Pascal : $_SESSION ne sera jamais égal a null, mais plutôt a un tableau vide **/
if($_SESSION){
	$user_id = $_SESSION['id'];
	/** Pascal : CONCATENATION BAHHHHHHHHHHHHHHHHHHHHHHHHHHHH **/
	$tab = $db->query("SELECT * FROM user WHERE id = '$user_id'")->fetchAll(PDO::FETCH_ASSOC);
	/** Pascal : Qui vous dis que l'id en question existe ? **/
	$user = $_SESSION['login'];
	if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user)
	{
		require('apps/forum-modif.php');
		require('views/forum-suppr.phtml');
	}
}

	require('views/forum-sujet.phtml');

?>