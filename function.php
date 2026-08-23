<?php
// Leggiamo il file json
$json_object = file_get_contents('./dischi.json');


// Salvo la struttura dati presente file tadotta dal json in una variabile
$dischi = json_decode($json_object);
