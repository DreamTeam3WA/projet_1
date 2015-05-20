<?php
$db = new PDO("mysql:dbname=filrouge;host=127.0.0.1", 'root', 'troiswa'); //créer une variable avec un connecteur à la Bdd MySQL de type "PDO" ; on y demande la nom de la Bdd ; l'URL (localhost) ; le login à la Bdd ; le Pass à la Bdd.
$tab = $db->query("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC); //fetchAll sert à créer un tableau associatif ; PDO::FETCH_ASSOC en est l'instruction.
var_dump($tab);
var_dump($tab[0]['password']);
?>