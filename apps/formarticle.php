<?php
header('Content-Type: text/html; charset=utf-8');
var_dump($_POST);
$fd = fopen("../models/article.csv", "a");
// On ouvre le fichier data.csv
// On ouvre le fichier data.csv
fputcsv($fd, $_POST, ";");
// On écrit les données du tableau $_POST séparées par des ; dans le fichier
fclose($fd);
?>