 <?php
/** Pascal : Vérifier si : isset($_POST) est pas utile, vous devez vérifier ce qu'il y a a l'intérieur plutot **/ 
if (isset($_POST) && isset($_POST['message']) && !empty($_POST['message']))
{
	$req = "SET ";
	foreach($_POST as $key => $val){
		$_POST[$key] = $db -> quote($val);
		$req .= $key."=".$_POST[$key].", ";
	}

	$req = substr($req,0,-2);
	/** Pascal : Très dangereux niveau sécurité... **/
	$db-> exec("INSERT INTO tchat ".$req);

}

// if (isset($_POST['message']) && !empty($_POST['message']))
// {
// 	print_r($message);
// 	if (isset($_POST['message']) && $_POST['message']!= NULL && isset($_POST['id_user']) && $_POST['id_user']!= NULL) {
// 			$message=$db->quote($_POST['message']);
// 			$id_user=$db->quote($_POST['id_user']);
// 			print_r($message);
// 			print_r($_SESSION['id']);
// 			print_r($id_user);
// 			if ($_SESSION['id']==$id_user){
// 				$db-> exec("INSERT INTO tchat SET message=".$message);	
// 			}
// 			else {
// 				$commentaire= "Vous n'avez pas les droits !";
// 				require('./views/erreur.phtml');
// 			}
// 	}
// 	else {
// 		$commentaire="Formulaire incomplet !";
// 		require('./views/erreur.phtml');
// 		}


// }
?>