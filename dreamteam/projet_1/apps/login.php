<?php 

$login = $_POST;
$user = $login['user'];
$pass = $login['pass'];

$tab = $db->query("SELECT * FROM user WHERE login = ".$db->quote($user))->fetch(PDO::FETCH_ASSOC);

if ($tab !=null){
	if ($tab['password'] == $pass){
		$_SESSION['id'] = $tab['id'];
		$_SESSION['login'] = $tab['login'];
		$_SESSION['droits'] = $tab['droits'];
		header('Location: index.php');
	}
	require('views/erreur.phtml');
}
else{
	require('views/erreur.phtml');
}


?>