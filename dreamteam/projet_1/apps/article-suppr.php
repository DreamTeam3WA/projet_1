<?php

if (isset($_POST) && isset($_POST['action']) && $_POST['action']=="addarticle")
{
	$req = "";
	foreach($_POST as $key => $val)
	{
		$_POST[$key] = $db->quote($val);
		$req .= $key."=".$_POST[$key].", ";
	}

	$req = substr($req,0,-2);
	// var_dump($req);
	$db->exec("INSERT INTO articles SET $req");
}

	require('./views/article-suppr.phtml');
?>