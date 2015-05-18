<?php
/* Pas de connection a la db ici mais plutot dans l'index.php grrrr */
$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
$tab = $db->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
var_dump($tab);
var_dump($tab[0]['login']);
?>