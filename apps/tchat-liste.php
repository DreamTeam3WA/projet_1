 <?php
$tab = $db->query("SELECT tchat.*, user.login, user.id AS user_id FROM tchat
	JOIN user ON user.id = id_user
	WHERE tchat.date > (NOW() - INTERVAL 30 MINUTE)

	")->fetchAll(PDO::FETCH_ASSOC);

$i=0;
while (isset($tab[$i]['message']) && isset($tab[$i]['login']) && isset($tab[$i]['user_id'])){

	$message = htmlentities($tab[$i]['message']);
	$user = htmlentities($tab[$i]['login']);
		if($_SESSION && $tab[$i]['user_id'] == $_SESSION['id']){
			$class='tchat-impair';
		}
		else{
			$class='tchat-pair';
		}
	require('views/tchat-liste.phtml');
	$i++;
}


?>