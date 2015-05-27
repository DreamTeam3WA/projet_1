<?php
if (droits() == 1 || droits() == 2)
{
	$db->exec("DELETE FROM articles WHERE id='$id_article'");

	require('./views/article.phtml');
}
else {
	require('./views/home.phtml');
}
?>