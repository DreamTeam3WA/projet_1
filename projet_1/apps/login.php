<?php 

$login = $_POST;
$user = $login['user'];
$pass = $login[pass];

<<<<<<< HEAD
$_SESSION['id'] = 1;


// echo $pass;

$tab = $db->query("SELECT * FROM user WHERE login = ".$db->quote($user))->fetchAll(PDO::FETCH_ASSOC);
=======
$tab = $db->query("SELECT * FROM user WHERE login = '$user'")->fetchAll(PDO::FETCH_ASSOC);
>>>>>>> 640a34326868e3fd7120c2f84de541250bad248c

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