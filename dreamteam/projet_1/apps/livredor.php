<?php
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
	$db->exec("INSERT INTO livredor SET $req");
}
	require('./views/livredor.phtml');
?>
