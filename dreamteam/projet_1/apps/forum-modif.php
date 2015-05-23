<?php

if (isset($_POST) && isset($_POST['action']) && $_POST['action']=="modifSujet")
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
	$db->exec("UPDATE forum SET $req WHERE id='$id_sujet'");
}

	require('./views/forum-modif.phtml');
?>