<?php
if (($handle = fopen("./models/data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {
           $date = $data[0];
           $h2 = $data[1];
          $description = $data[2];
          $source = $data[3];
			require('views/content.phtml');
    }
    fclose($handle);
}
?>