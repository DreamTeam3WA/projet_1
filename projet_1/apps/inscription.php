<?php 

if ($_POST['password'] === $_POST['password2'])
{
	$req = "SET ";
	foreach($_POST as $key => $val){
		$_POST[$key] = $db -> quote($val);
		$req.= $key."=".$_POST[$key].", ";
	}

	$req = substr($req,0,-2);

	
	$db-> exec("INSERT INTO user $req");
	
	require('views/inscription-ok.phtml');
}
else {
	require('views/inscription-nok.phtml');
}

?>