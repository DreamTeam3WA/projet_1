<?php
if(isset($tab[0]['droits']) && $tab[0]['droits'] == 1 || $tab[0]['droits'] == 2)
{
	$db->exec("DELETE FROM articles WHERE id='$id_article'");

	require('./views/article.phtml');
}
else {
	require('./views/home.phtml');
}
?>