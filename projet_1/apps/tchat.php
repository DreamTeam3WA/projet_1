 <?php
 
if (isset($_POST) && isset($_POST['tchat']) && !empty($_POST['tchat']))
{

	$db->exec('INSERT INTO tchat SET message='.$db->quote($_POST['tchat']));

}
	require('views/tchat.phtml');
?>