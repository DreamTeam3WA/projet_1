<?php
/** Pascal : Avant de vérifier la case "droits" de la case 0 du tableau, je vérifierais la case 0 du tableau en premier ! **/
if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user)
{
	/** Pascal : CONCATENATIONNNNNNNNNNNN **/
	$db->exec("DELETE FROM forum WHERE id='$id_sujet'");
}
?>