<?php
if(isset($tab[0]['droits']) && $tab[0]['droits'] == 1 || $tab[0]['droits'] == 2)
{
	$db->exec("DELETE FROM user WHERE id='$id_user'");
	$_SESSION = array();
	session_destroy();
	header('Location: index.php');
}
else {
	require('./views/home.phtml');
}
?>