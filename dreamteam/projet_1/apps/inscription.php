<?php 
/** Pascal : $_POST existera toujours et sera "au pire" un tableau vide **/
if (isset($_POST) && isset($_POST['action']) && $_POST['action'] == "register"){
	// $_POST['login'] => champ input de name login
	// $db->quote(...) => permet de protéger les strings (en rajoutant des quotes avant et apres)
	// ici je créé des variables qui préparent les informations à envoyer dans la future requète...
	/** Pascal : Par contre là il faut faire un isset($_POST['login']) etc... **/
	if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['email']) && isset($_POST['date_naissance']) ){
		$login = $db->quote($_POST['login']);
		$email = $db->quote($_POST['email']);
		$date_naissance = $_POST['date_naissance'];	
		// dans $tab, je me connecte à la Table user de la Bdd dont la colonne login peut contenir le contenu du champs $login que le visiteur vient de renseigner.
		$tab_login = $db->query("SELECT * from user WHERE login=".$login);
		$tab_email = $db->query("SELECT * from user WHERE email=".$email);
		
		$caractere_mauvais= array(".","/"," ",":","|", ",");
		$date_naissance = str_replace($caractere_mauvais,"-", $date_naissance);
		list($year, $month, $day) = explode("-", $date_naissance);



		if($tab_login->rowCount() > 0){ // si quelqu'un a deja ce pseudo ; c-a-d si le compte de cette colonne est supérieur à 0
			$commentaire="Le pseudo est déjà utilisé";
			require('views/erreur.phtml');
		}
		 	// si le pseudo n'est pas utilisé
			// je check si l'email est deja renseigné... de la même façon qe pour le login...

		else if($tab_email->rowCount() > 0){ // si l'email est déjà renseignée : ERREUR (compte de la colonne supérieur à 0)
				$commentaire="L'adresse mail est déjà utilisée !";
				require('views/erreur.phtml');
		} 
	
		else if (!is_numeric($year) || !is_numeric($month) || !is_numeric($day)) {
			$commentaire="Votre date de naissance ne doit comporter que des chiffres et des tirets";
			require('views/erreur.phtml');
		}
		else if (strlen($year)!=4 || strlen($month)!=2 || strlen($day)!=2) {
			$commentaire="Respectez la forme aaaa-mm-jj";
			require('views/erreur.phtml');
		}
		else if ($year < 1940)
		{
			$commentaire="Ce site n'accepte pas les vampires immortels";
			require('views/erreur.phtml');
		}
		else if ($year > date("Y"))
		{
			$commentaire="Ce site n'accepte pas les voyageurs temporels venant du futur";
			require('views/erreur.phtml');
		}
		else if ($year > (date("Y")-4))
		{
			$commentaire="Dis donc, t'as quel âge pour savoir écrire dans un formulaire toi ?! Je vais le dire à tes parents !";
			require('views/erreur.phtml');
		}
		else if ($year > (date("Y")-13))
		{
			$commentaire="Dis donc, t'as quel âge pour venir sur ce site ! Je vais le dire à tes parents !";
			require('views/erreur.phtml');
		}
		else if ($month < 1 || $month > 12)
		{
			$commentaire="Sur cette planète les années n'ont qu'un maximum de 12 mois";
			require('views/erreur.phtml');
		}
		else if ($month==2 && $year%4 == 0 and $year%100 != 0 || $year%400 == 0 && $day <1 || $day > 29)
		{
			$commentaire="Sur cette planète pendant une année bissextile, les jours du mois de Février sont compris entre 1 et 29";
			require('views/erreur.phtml');
		}
		else if ($month==2 && $day <1 || $day > 28)
		{
			$commentaire="Sur cette planète pendant une année bissextile, les jours du mois de Février sont compris entre 1 et 28";
			require('views/erreur.phtml');
		}
		else if ($month%2==0 && $month!=2 && $day <1 || $day > 30)
		{
			$commentaire="Sur cette planète les jours sont compris entre 1 et 30 pour les mois d'Avril, Juin, Septembre, Novembre";
			require('views/erreur.phtml');
		}
		else if ($month%2!=0 && $month!=2 && $day <1 || $day > 31)
		{
			$commentaire="Sur cette planète, les jours sont compris entre 1 et 30 pour les mois de Janvier, Mars, Mai, Juillet, Aout, Octobre, Decembre";
			require('views/erreur.phtml');
		}
		else if ($_POST['password'] === $_POST['password2']) // je verifie que les mdp sont identiques
		{
			$login = $db->quote($_POST['login']);
			$email = $db->quote($_POST['email']);
			$date_naissance = $db->quote($_POST['date_naissance']);	
			$password = $db->quote(password_hash($_POST['password'], PASSWORD_BCRYPT,["cost"=>10]));
			$droits = 3;

			$db-> exec("INSERT INTO user SET login=".$login.", password=".$password.", email=".$email.", date_naissance=".$date_naissance.", droits=".$droits);
			require('views/inscription-ok.phtml');
		}
		else {
			$commentaire="Les mots de passe ne sont pas identiques";
			require('views/erreur.phtml');
		}
	}
	else {
		$commentaire="Tous les champs ne sont pas remplis";
		require('views/erreur.phtml');
	}
}

require('views/inscription.phtml');
?>