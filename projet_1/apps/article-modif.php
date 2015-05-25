<?php

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
	var_dump($req);
	var_dump($id_article);
	$db->exec("UPDATE articles SET $req WHERE id='$id_article'");
}

	require('./views/article-modif.phtml');
?>