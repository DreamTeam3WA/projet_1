<?php

if (isset($_POST) && isset($_POST['message']) && !empty($_POST['message']))
{
	$req = "";
	foreach($_POST as $key => $val)
	{
		$_POST[$key] = $db->quote($val);
		$req .= $key."=".$_POST[$key].", ";
	}

	$req = substr($req,0,-2);
	var_dump($req);
	$db->exec("INSERT INTO contact SET $req");
	require('./views/contact-ok.phtml');
}
else{
	require('./views/contact.phtml');
}
?>