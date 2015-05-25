 <?php
$tab = $db->query("SELECT tchat.*, user.login, user.id AS user_id FROM tchat
	JOIN user ON user.id = id_user
	WHERE tchat.date > (NOW() - INTERVAL 30 MINUTE)

	")->fetchAll(PDO::FETCH_ASSOC);

$i=0;
while ($i<count($tab)){

	$message = strip_tags ($tab[$i]['message']);
	$user = $tab[$i]['login'];
		if($_SESSION!= null && $tab[$i]['user_id'] == $_SESSION['id']){
			$class='tchat-impair';
		}
		else{
			$class='tchat-pair';
		}
	require('views/tchat-liste.phtml');
	$i++;
}


?>