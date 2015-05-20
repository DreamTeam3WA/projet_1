 <?php
<<<<<<< HEAD

if (isset($_POST))
{
	$req = "";
	foreach($_POST as $key => $val)
	{
		$_POST[$key] = $db->quote($val);
		$req .= $key."=".$_POST[$key].", ";
	}

	$req = substr($req,0,-2);
	// var_dump($req);
	$db->exec("INSERT INTO tchat SET $req");
}



$tab = $db->query("SELECT * FROM tchat")->fetchAll(PDO::FETCH_ASSOC);
=======
 
if (isset($_POST) && isset($_POST['tchat']) && !empty($_POST['tchat']))
{
	$db->exec('INSERT INTO tchat SET message='.$db->quote($_POST['tchat']));
>>>>>>> fec2063008fc2d923660144897e51da83d34fcb0

}
	require('views/tchat.phtml');
?>