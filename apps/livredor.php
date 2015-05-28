<?php

if (isset($_POST["nomldo"]) && isset($_POST["titreldo"]) && isset($_POST["descriptionldo"]))
{
	if (!empty($_POST["nomldo"]) && !empty($_POST["titreldo"]) && !empty($_POST["descriptionldo"]))
	{	
		$nomldo= $db->quote($_POST["nomldo"]);
		$titreldo= $db->quote($_POST["titreldo"]);
		$descriptionldo= $db->quote($_POST["descriptionldo"]);
		
		$db->exec("INSERT INTO livredor SET nom=".$nomldo.", titre=".$titreldo.", description=".$descriptionldo);
	}
	else
	{
		
	}
}
require('./views/livredor.phtml');
?>

