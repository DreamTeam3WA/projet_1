<?php 

if (isset($_POST) && isset($_POST['action']) && $_POST['action'] == "register"){
	if ($_POST['password'] === $_POST['password2'])
	{
		$req = "SET ";

		$exclude_key = array("password2", "action");
 
		foreach($_POST as $key => $val){
			if(!in_array($key, $exclude_key)){
				$_POST[$key] = $db -> quote($val);
				$req.= $key."=".$_POST[$key].", ";
			}
		}

		$req = substr($req,0,-2);


		$db-> exec("INSERT INTO user $req");
		
		require('views/inscription-ok.phtml');
	}
	else {
		require('views/inscription-nok.phtml');
	}
}
require('./views/inscription.phtml');
?>