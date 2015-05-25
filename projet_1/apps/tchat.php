 <?php
<<<<<<< HEAD:projet_1/apps/tchat.php
 
if (isset($_POST) && isset($_POST['tchat']) && !empty($_POST['tchat']))
{

	$db->exec('INSERT INTO tchat SET message='.$db->quote($_POST['tchat']));
=======
if($_SESSION!= null){
	$id_user = $_SESSION['id'];
>>>>>>> 5c118b441cee25585f4984c2a5f6b82aa61d167c:dreamteam/projet_1/apps/tchat.php

	$tab = $db->query("SELECT * FROM user WHERE id = '$id_user'")->fetchAll(PDO::FETCH_ASSOC);
	echo $user;
	$user = $tab[0]['login'];
	require('views/tchat.phtml');
}
else {
	require('views/tchat-logout.phtml');
}
	
?>