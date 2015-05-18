<?php 


$login = $_POST;
$user = $login['user'];
$pass = $login['pass'];



$tab = $db->query("SELECT * FROM user WHERE login = '$user'")->fetchAll(PDO::FETCH_ASSOC);



if ($tab[0]['password'] != $pass){
	$user = "none";
}
require('index.php');
 ?>