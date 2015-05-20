<?php 

$login = $_POST;
$user = $login['user'];
$pass = $login['pass'];

echo $_POST['user'];

echo $user." ".$pass;

$tab = $db->query("SELECT * FROM user WHERE login = ".$db->quote($user))->fetchAll(PDO::FETCH_ASSOC);

if ($tab !=null){
	if ($tab[0]['password'] == $pass){
		$_SESSION['id'] = $tab[0]['id'];
		header('Location: index.php');
	}
	require('views/erreur.phtml');
}
else{
	require('views/erreur.phtml');
}


?>