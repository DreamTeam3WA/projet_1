<?php
$tab = $db->query("SELECT * FROM user WHERE id= '$id_user'")->fetchAll(PDO::FETCH_ASSOC);
	
	$login = $tab[0]['login'];
	$email = $tab[0]['email'];
	$date_register = $tab[0]['date_register'];
	$nom = $tab[0]['nom'];
	$prenom = $tab[0]['prenom'];
	$date_naissance = $tab[0]['date_naissance'];
	$nbr_sujets = $tab[0]['nbr_sujets'];
	$avatar = $tab[0]['avatar'];

if (empty($nom) == true ) {
	$nom = 'Pas renseigné';
}
if (empty($prenom) == true ) {
	$prenom = 'Pas renseigné';
}
if (empty($avatar) == true ) {
	$avatar = 'http://www.google.fr/url?source=imglanding&ct=img&q=http://2.bp.blogspot.com/-omUBwmauN5o/UzVo2kr-NaI/AAAAAAAAAD0/lHpilGBoKoU/s1600/profileholder.gif&sa=X&ei=19hgVbCyF8T6UvjFgNAF&ved=0CAkQ8wc&usg=AFQjCNEjhQzaRNZcHzHLJHf7vq7CJAZDlw';
}
require('apps/profil-modif.php');
require('./views/profil-user.phtml');

?>