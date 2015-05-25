<?php 

$login = $_POST;
$user = $login['user'];
$pass = $login['pass'];

$tab = $db->query("SELECT * FROM user WHERE login = ".$db->quote($user))->fetchAll(PDO::FETCH_ASSOC);

if ($tab !=null){
	if ($tab[0]['password'] == $pass){
		$_SESSION['id'] = $tab[0]['id'];
		$_SESSION['login'] = $tab[0]['login'];
		$_SESSION['droits'] = $tab[0]['droits'];
		header('Location: index.php');
	}
	require('views/erreur.phtml');
}
else{
	require('views/erreur.phtml');
}


?>