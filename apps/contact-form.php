<?php
// var_dump($_POST, $_GET);
if (!empty($_POST["email"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["objet"]) && !empty($_POST["message"]))
{	
	$emailcontact= $db->quote($_POST["email"]);
	$nomcontact= $db->quote($_POST["nom"]);
	$prenomcontact= $db->quote($_POST["prenom"]);
	$objetcontact= $db->quote($_POST["objet"]);
	$messagecontact= $db->quote($_POST["message"]);
	$db->exec("INSERT INTO contact SET email=".$emailcontact.", nom=".$nomcontact.",  prenom=".$prenomcontact.", objet=".$objetcontact.", message=".$messagecontact);
	// echo "INSERT INTO contact SET email=".$emailcontact.", nom=".$nomcontact.",  prenom=".$prenomcontact.", objet=".$objetcontact.", message=".$messagecontact;
}


// $email => "toto"
// quote()
// $email => "'toto'"


// "INSERT INTO contact SET email=".$emailcontact.", nom=".$nomcontact.", prenom=".

/*
var prenom = "toto";
var nom = "titi";
document.write(prenom+" "+nom);
toto titi
*/





	require('./views/contact.phtml');

?>