<?php

if($_SESSION!= null){
	$id = $_SESSION['id'];
	$tab = $db->query("SELECT * FROM user WHERE id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
	$user = $tab[0]['login'];
	require('views/header-log-in.phtml');
}
else {
	require('views/header-log-off.phtml');
}

?>