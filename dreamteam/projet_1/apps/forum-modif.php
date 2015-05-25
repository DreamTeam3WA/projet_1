<?php
/** Pascal : D'abord vérifier que la case 0 de $tab existe avant de vérifier des cases dans $tab[0] **/
if(isset($tab[0]['droits']) && $tab[0]['droits'] == 1 || $tab[0]['droits'] == 2)
{
	/** Pascal : $_POST ne sera jamais égal a null, mais plutôt a un tableau vide **/
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
	/** Pascal : CONCATENATIONNNNNNNNNNNNNNNNNNNNN CCCHHHHHHHHHHHHHHHHHHH + securité **/
	$db->exec("UPDATE forum SET $req WHERE id='$id_sujet'");
}

	require('./views/forum-modif.phtml');
}
else{
	require('./views/home.phtml');
}
?>