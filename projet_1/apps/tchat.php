 <?php

if($_SESSION!= null){
	$id_user = $_SESSION['id'];

	$tab = $db->query("SELECT * FROM user WHERE id = '$id_user'")->fetchAll(PDO::FETCH_ASSOC);
	echo $user;
	$user = $tab[0]['login'];
	require('views/tchat.phtml');
}
else {
	require('views/tchat-logout.phtml');
}
	
?>