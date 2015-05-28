 <?php
/** Pascal : Vérifier si : isset($_POST) est pas utile, vous devez vérifier ce qu'il y a a l'intérieur plutot **/ 
var_dump($_POST);
if (isset($_POST['message']) && !empty(trim($_POST['message']," \t\n\r\0\x0B")) && isset($_POST['id_user']) && !empty($_POST['id_user']))
{
	$message=$db->quote($_POST['message']);
	$id_user=$_POST['id_user'];

	if ($_SESSION['id']==$id_user){
		$db-> exec("INSERT INTO tchat SET message=".$message.", id_user=".$id_user);	
	}
	else {
		$commentaire= "Vous n'avez pas les droits !";
		require('./views/erreur.phtml');
	}
}
else {
	$commentaire="Formulaire incomplet !";
	require('./views/erreur.phtml');
}


?>