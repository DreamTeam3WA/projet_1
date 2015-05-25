<?php
/** Pascal : $tab[0] existe ? **/
if(isset($tab[0]['droits']) && $tab[0]['droits'] == 1 || $tab[0]['droits'] == 2)
{
	/** Pascal : $_POST ne sera jamais égal a null, mais plutôt a un tableau vide **/
if (isset($_POST) && isset($_POST['action']) && $_POST['action']=="modifarticle")
{
	$req = "";
	$exclude_key = array("action");
	foreach($_POST as $key => $val)
	{
		if(!in_array($key, $exclude_key)){
		$_POST[$key] = $db->quote($val);
		$req .= $key."=".$_POST[$key].", ";
		}
	}

	$req = substr($req,0,-2);
	/** Pascal : Securité + CONCATENATION BORDELLLLLLLLL **/
	$db->exec("UPDATE articles SET $req WHERE id='$id_article'");
}

	require('./views/article-modif.phtml');
}
else {
	require('./views/home.phtml');
}
?>