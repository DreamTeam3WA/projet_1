<?php
if (isset($_POST) && isset($_POST['action']) && $_POST['action']=="modifCommentaire")
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
	$db->exec("UPDATE commentaires SET $req WHERE id='$id_commentaire'");
}
else{
	require('views/forum-commentaires-modif.phtml');
}
?>