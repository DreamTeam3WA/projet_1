<?php
if (isset($_POST) && isset($_POST['action']) && $_POST['action']=="modifProfil")
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
	$db->exec("UPDATE user SET $req WHERE id='$id_user'");
}


	require('./views/profil-modif.phtml');

?>