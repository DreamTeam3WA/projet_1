 <?php



if (isset($_POST))
{
/*
	$req = "";
	foreach($_POST as $key => $val)
	{
		$_POST[$key] = $db->quote($val);
		$req .= $key."=".$_POST[$key].", ";
	}
	$req = substr($req,0,-2);
*/
	// var_dump($req);
	
	$db->exec('INSERT INTO tchat SET message='.$db->quote($_POST['tchat']));
	// $db->exec("INSERT INTO tchat SET $req");
}

$tab = $db->query("SELECT * FROM tchat")->fetchAll(PDO::FETCH_ASSOC);
print_r($_POST);

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