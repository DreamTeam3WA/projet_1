<?php
/** Pascal : Avant de vérifier la case "droits" de la case 0 du tableau, je vérifierais la case 0 du tableau en premier ! **/
if(isset($tab[0]['droits']) && $tab[0]['droits'] == 1 || $tab[0]['droits'] == 2)
{
	/** Pascal : CONCATENATIONNNNNNNNNNNN **/
	$db->exec("DELETE FROM forum WHERE id='$id_sujet'");

}
else {
	require('./views/home.phtml');
}
?>