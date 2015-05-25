<?php
/** Pascal : $_POST existera toujours et sera "au pire" un tableau vide **/
if (isset($_POST))
{
	$req = "";
	foreach($_POST as $key => $val)
	{
		$_POST[$key] = $db->quote($val);
		$req .= $key."=".$_POST[$key].", ";
	}

	$req = substr($req,0,-2);
	// var_dump($req);
	/** Pascal : Pas du tout bien niveau sécurité :o **/
	$db->exec("INSERT INTO livredor SET $req");
}
	require('./views/livredor.phtml');
?>

