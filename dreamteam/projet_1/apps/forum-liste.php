<?php
$tab = $db->query("SELECT f.*, u.login, c.date AS date_commentaire, f.date as date_forum,  COUNT(c.id) AS nbCommentaire
FROM forum f
LEFT OUTER JOIN commentaires c ON f.id=c.id_forum
JOIN user u ON u.id=f.id_user
GROUP BY f.id
ORDER BY date DESC
	")->fetchAll(PDO::FETCH_ASSOC);


foreach ($tab as $tab2) {
	$id_user = $tab2['id_user'];
	$user_pseudo = $tab2['login'];
	$id_sujet = $tab2['id'];
	$sujet = $tab2['sujet'];
	$description = $tab2['description'];
	$nbCommentaire = $tab2['nbCommentaire'];
	$date= $tab2['date_commentaire'];	
	$db->exec("UPDATE forum SET date='$date'");
	if ($tab2['date_commentaire'] == null){
		$date= $tab2['date'];
	}
	
	require('views/forum-liste.phtml');
}

?>