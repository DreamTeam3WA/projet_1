<?php
/** Pascal : Vérifier la case 0 de $tab avant de vérifier l'intérieur de $tab[0] **/
if(isset($tab[0]['droits']) && $tab[0]['droits'] == 1 || $tab[0]['droits'] == 2)
{
	/** Pascal : CONCATENATION !!!!! **/
	$db->exec("DELETE FROM articles WHERE id='$id_article'");

	require('./views/article.phtml');
}
else {
	require('./views/home.phtml');
}
?>