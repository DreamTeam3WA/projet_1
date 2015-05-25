 <?php
 
if (isset($_POST) && isset($_POST['message']) && !empty($_POST['message']))
{
	
	$db->exec('INSERT INTO tchat SET message='.$message = $db->quote($_POST['message']).', id_user='.$message = $db->quote($_POST['$id_user']));

}
	
?>