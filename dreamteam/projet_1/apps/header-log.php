<?php
/** Pascal : $_SESSION ne sera jamais égal a null, mais plutôt a un tableau vide **/
if($_SESSION!= null){
	$id_user = $_SESSION['id'];
	/** Pascal : CONCATENATIONNNNNNNNNNNNNNN **/
	$tab = $db->query("SELECT * FROM user WHERE id = '$id_user'")->fetchAll(PDO::FETCH_ASSOC);
	/** Pascal : Et si l'user existe pas ? **/
	$user = $_SESSION['login'];
	if (droits() == 1)
	{
		require('views/header-super-admin.phtml');
	}
	if (droits() == 1 || droits() == 2)
	{
		require('views/header-admin.phtml');
	}
	else {
		require('views/header-user.phtml');
	}
}

else {
	require('views/header-log-off.phtml');
}

?>