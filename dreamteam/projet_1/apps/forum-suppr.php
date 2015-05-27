<?php
$tab = $db->query("SELECT *
FROM forum
WHERE forum.id= '$id_sujet' 
	")->fetchAll(PDO::FETCH_ASSOC);
if (droits() == 1 || droits() == 2 || $_SESSION['id']==$id_user)
{
	$db->exec("DELETE FROM forum WHERE id='$id_sujet'");
}
?>