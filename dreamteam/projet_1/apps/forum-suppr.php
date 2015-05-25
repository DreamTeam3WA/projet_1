<?php
if(isset($tab[0]['droits']) && $tab[0]['droits'] == 1 || $tab[0]['droits'] == 2)
{
	$db->exec("DELETE FROM forum WHERE id='$id_sujet'");

}
else {
	require('./views/home.phtml');
}
?>