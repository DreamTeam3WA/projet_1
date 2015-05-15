<?php
$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa');
$tab = $db->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
var_dump($tab);
var_dump($tab[0]['login']);
?>