<?php
$tab = $db->query("SELECT * FROM livredor ORDER BY date DESC")->fetchAll(PDO::FETCH_ASSOC);
/** Pascal : Il se passe quoi si la table livredor est vide ? :) **/
$titre = $tab[0]['titre'];
$description = $tab[0]['description'];
require('views/livredorfooter.phtml');
?>