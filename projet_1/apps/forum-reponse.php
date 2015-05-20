test
<?php
	$req = "SET ";
	foreach($_POST as $key => $val){
		$_POST[$key] = $db -> quote($val);
		$req .= $key."=".$_POST[$key].", ";
	}
	// $req .= "id_forum='".$sujetid."'";
	$req = substr($req,0,-2);
	$db->exec("INSERT INTO commentaires ".$req);

	require('views/sujet-ok.phtml');
?>