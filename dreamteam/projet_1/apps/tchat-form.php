 <?php
 
if (isset($_POST) && isset($_POST['message']) && !empty($_POST['message']))
{
	$db->exec('INSERT INTO tchat SET message='.$db->quote($_POST['message']));

}
	
?>