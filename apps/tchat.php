 <?php
/*
Connection a la db dans index.php plutot qu'ici
*/
$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
$db->exec("SET CHARACTER SET utf8");
$tab = $db->query("SELECT * FROM tchat")->fetchAll(PDO::FETCH_ASSOC);

$i=0;
while ($i<count($tab)){
	$message = $tab[$i]['message'];
		if($i%2 == 0){
			$class='tchat-pair';
		}
		else{
			$class='tchat-impair';
		}
	require('views/tchat.phtml');
	$i++;
}

?>