<?php
/** Pascal : $tab[0] existe ? vive les bisounours ! **/
if(isset($tab[0]['droits']) && $tab[0]['droits'] == 1)
{
	/** Pascal : $_POST ne sera jamais égal a null, mais plutôt a un tableau vide **/
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
	/** Pascal : Sécurité + CONCATENATION BORRRRRRRRDELLLLLLLLLLLLLLLLLLLLLLLLLLLL **/
	$db->exec("UPDATE user SET $req WHERE id='$id_user'");
}


	require('./views/administration.phtml');
}
else {
	require('./views/home.phtml');
}
?>