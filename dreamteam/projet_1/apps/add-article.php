<?php

if (isset($_POST) && isset($_POST['action']) && $_POST['action']=="addarticle")
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
	//var_dump($req);
	$db->exec("INSERT INTO articles SET $req");
}

	require('./views/add-article.phtml');
?>

