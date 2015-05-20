<?php 

if (isset($_POST) && isset($_POST['action']) && $_POST['action'] == "register"){


	// $_POST['login'] => champ input de name login
	// $db->quote(...) => permet de protéger les strings (en rajoutant des quotes avant et apres)
	// ici je créé des variables qui préparent les informations à envoyer dans la future requète...
	$login = $db->quote($_POST['login']);
	$email = $db->quote($_POST['email']);


	// dans $tab, je me connecte à la Table user de la Bdd dont la colonne login peut contenir le contenu du champs $login que le visiteur vient de renseigner...
	$tab = $db->query("SELECT * from user WHERE login=".$login);

	if($tab->rowCount() > 0){ // si quelqu'un a deja ce pseudo ; c-a-d si le compte de cette colonne est supérieur à 0
		echo "Le pseudo est déjà utilisé";
	}else{ // si le pseudo n'est pas utilisé
		// je check si l'email est deja renseigné... de la même façon qe pour le login...
		$tab = $db->query("SELECT * from user WHERE email=".$db->quote($email));
		if($tab->rowCount() > 0){ // si l'email est déjà renseignée : ERREUR (compte de la colonne supérieur à 0)
			echo "L'adresse mail est déjà utilisée !";
		} else{ // si l'email n'est pas enregistré dans la table user

			if ($_POST['password'] === $_POST['password2']) // je verifie que les mdp sont identiques
			{
				// je construis ma requête pour l'insertion
				$req = "SET ";
				foreach($_POST as $key => $val){
					$_POST[$key] = $db -> quote($val);
					$req.= $key."=".$_POST[$key].", ";
				}

				$req = substr($req,0,-2);

				// j'exécute mon insertion pour ajouter l'utilisateur
				$db-> exec("INSERT INTO user $req");
				
				require('views/inscription-ok.phtml');
			}
			else {
				require('views/inscription-nok.phtml');
			}		

		}
	}
}
require('views/inscription.phtml');
?>