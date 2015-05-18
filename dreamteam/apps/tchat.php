 <?php
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