<?php
	$req = "SET ";
	foreach($_POST as $key => $val){
		$_POST[$key] = $db -> quote($val);
		$req.= $key."=".$_POST[$key].", ";
	}

	$req = substr($req,0,-2);
	$db-> exec("INSERT INTO forum $req");

	require('views/sujet-ok.phtml');
?>