<?php
	$db->exec("DELETE FROM user WHERE id='$id_user'");
	$_SESSION = array();
	session_destroy();
	header('Location: index.php');
?>