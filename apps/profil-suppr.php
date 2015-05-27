<?php
if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user)
{
	$db->exec("DELETE FROM user WHERE id=".$id_user);
	$_SESSION = array();
	session_destroy();
	header('Location: index.php');
}
else {
	require('./views/home.phtml');
}
?>