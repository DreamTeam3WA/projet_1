<?php 
/** Pascal : $_POST existera toujours et sera "au pire" un tableau vide **/
if (isset($_POST) && isset($_POST['action']) && $_POST['action'] == "register"){


	// $_POST['login'] => champ input de name login
	// $db->quote(...) => permet de protéger les strings (en rajoutant des quotes avant et apres)
	// ici je créé des variables qui préparent les informations à envoyer dans la future requète...
	/** Pascal : Par contre là il faut faire un isset($_POST['login']) etc... **/
	$login = $db->quote($_POST['login']);
	$email = $db->quote($_POST['email']);
	$date_naissance = $_POST['date_naissance'];
	$caractere_mauvais= array(".","/"," ",":","|", ",");
	$date_naissance = str_replace($caractere_mauvais,"-", $date_naissance);
	list($year, $month, $day) = explode("-", $date_naissance);
	// dans $tab, je me connecte à la Table user de la Bdd dont la colonne login peut contenir le contenu du champs $login que le visiteur vient de renseigner...
	$tab = $db->query("SELECT * from user WHERE login=".$login);

	if($tab->rowCount() > 0){ // si quelqu'un a deja ce pseudo ; c-a-d si le compte de cette colonne est supérieur à 0
		echo "Le pseudo est déjà utilisé";
	}else{ // si le pseudo n'est pas utilisé
		// je check si l'email est deja renseigné... de la même façon qe pour le login...
		$tab = $db->query("SELECT * from user WHERE email=".$db->quote($email));
		if($tab->rowCount() > 0){ // si l'email est déjà renseignée : ERREUR (compte de la colonne supérieur à 0)
			echo "L'adresse mail est déjà utilisée !";
		} 
		if (!is_numeric($year) || !is_numeric($month) || !is_numeric($day)) {
			echo "Votre date de naissance ne doit comporter que des chiffres et des tirets";
		}
		else if (strlen($year)!=4 || strlen($month)!=2 || strlen($day)!=2) {
			echo "Respectez la forme aaaa-mm-jj";
		}
		else if ($year < 1940)
		{
			echo "Ce site n'accepte pas les vampires immortels";
		}
		else if ($year > date("Y"))
		{
			echo "Ce site n'accepte pas les voyageurs temporels venant du futur";
		}
		else if ($year > (date("Y")-4))
		{
			echo "Dis donc, t'as quel âge pour savoir écrire dans un formulaire toi ?! Je vais le dire à tes parents !";
		}
		else if ($year > (date("Y")-13))
		{
			echo "Dis donc, t'as quel âge pour venir sur ce site ! Je vais le dire à tes parents !";
		}
		else if ($month < 1 || $month > 12)
		{
			echo "Sur cette planète les années n'ont qu'un maximum de 12 mois";
		}
		else if ($month==2 && $year%4 == 0 and $year%100 != 0 || $year%400 == 0 && $day <1 || $day > 29)
		{
			echo "Sur cette planète pendant une année bissextile, les jours du mois de Février sont compris entre 1 et 29";
		}
		else if ($month==2 && $day <1 || $day > 28)
		{
			echo "Sur cette planète pendant une année bissextile, les jours du mois de Février sont compris entre 1 et 28";
		}
		else if ($month%2==0 && $month!=2 && $day <1 || $day > 30)
		{
			echo "Sur cette planète les jours sont compris entre 1 et 30 pour les mois d'Avril, Juin, Septembre, Novembre";
		}
		else if ($month%2!=0 && $month!=2 && $day <1 || $day > 31)
		{
			echo "Sur cette planète les jours sont compris entre 1 et 30 pour les mois de Janvier, Mars, Mai, Juillet, Aout, Octobre, Decembre";
		}
		else{ // si l'email n'est pas enregistré dans la table user

			if ($_POST['password'] === $_POST['password2']) // je verifie que les mdp sont identiques
			{
				// je construis ma requête pour l'insertion
				$req = "SET ";
				$exclude_key = array("password2", "action");
				foreach($_POST as $key => $val){
					if(!in_array($key, $exclude_key)){
					$_POST[$key] = $db -> quote($val);
					$req.= $key."=".$_POST[$key].", ";
					}
				}
				$req = substr($req,0,-2);

				// j'exécute mon insertion pour ajouter l'utilisateur
				/** Pascal : Pas du tout sécurisé :o **/
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