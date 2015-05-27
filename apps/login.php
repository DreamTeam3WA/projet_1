<?php 
if (isset($_POST) && isset($_POST['user']) && isset($_POST['pass'])) {
		$user = $db->quote($_POST['user']);
		$pass = $_POST['pass'];

		$tab = $db->query("SELECT * FROM user WHERE login = ".$user)->fetch(PDO::FETCH_ASSOC);

		if ($tab !=null){
			if (password_verify($pass,$tab['password'])){
				$_SESSION['id'] = $tab['id'];
				$_SESSION['login'] = $tab['login'];
				$_SESSION['droits'] = $tab['droits'];
				header('Location: index.php');
			}
			$commentaire="Erreur login ou mot de passe. ";
			require('views/erreur.phtml');
		}
}
else{
	$commentaire="Erreur informations de connection. ";
	require('views/erreur.phtml');
}


?>