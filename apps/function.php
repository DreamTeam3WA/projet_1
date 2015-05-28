<?php
	function droits()
	{
		if(isset($_SESSION['droits']) && ($_SESSION['droits'] == 1))
		{
			$superAdmin = 1;
			return $superAdmin;
		}
		else if(isset($_SESSION['droits']) && ($_SESSION['droits'] == 2))
		{
			$admin = 2;
			return $admin;
		}
		else if(isset($_SESSION['droits']) && ($_SESSION['droits'] == 3))
		{
			$user = 3;
			return $user;
		}
	}
	// function email()
	// {
	// 	$email = $db->quote($_POST['email']);
	// 	$tab_email = $db->query("SELECT * from user WHERE email=".$email);
	// 	if($tab_email->rowCount() > 0){ 
	// 		$commentaire="L'adresse mail est déjà utilisée !";
	// 		require('views/erreur.phtml');
	// 	}
	// 	else {
	// 		return $email;
	// 	} 
	// }
	function balise($text){
		$html5 = "<source><embed><img><br><span><u><b><i><code><abbr><q><cite><s><small><strong><em><a><div><figcaption><figure><li><ul><ol><blockquote><pre><hr><p><address><link>";

        $text = strip_tags($text,$html5);
        return $text;
    
	}
	
?>