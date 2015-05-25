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
?>