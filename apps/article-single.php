 <?php

$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
$db->exec("SET CHARACTER SET utf8");
$tab = $db->query("SELECT * FROM articles")->fetchAll(PDO::FETCH_ASSOC);

$i=0;
<<<<<<< HEAD
while ($i<4){
=======
while ($i<3){
>>>>>>> 21cc5c77505d357ed28112de02a5ba5f773f561c
	$titre = $tab[$i]['titre'];
	$date = $tab[$i]['date'];
	$user = $tab[$i]['user'];
	$lien = $tab[$i]['lien'];
	$description = $tab[$i]['description'];
	require('views/article-single.phtml');
	$i++;
}

?>