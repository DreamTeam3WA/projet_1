 <?php
if($_SESSION!= null){
	$id_user = $_SESSION['id'];

	$tab = $db->query("SELECT * FROM user WHERE id = '$id_user'")->fetchAll(PDO::FETCH_ASSOC);
	$user = $tab[0]['login'];
	if(isset($tab[0]['droits']) && ($tab[0]['droits'] == 1 || $tab[0]['droits'] == 2))
	{
		require('views/tchat.phtml');
	}
}
else {
	require('views/tchat-logout.phtml');
}
	
?>