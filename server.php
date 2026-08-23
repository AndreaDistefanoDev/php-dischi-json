<?php
// Leggiamo il file json e lo salviamo in una variabile

$json_object = file_get_contents('./dischi.json');

// Convertiamo la stringa da formato json in una struttura dati php

$dischi = json_decode($json_object, true);

// Inserire un nuovo disco nella struttura dati

$dischi[] = [
    'titolo' => $_POST['titolo'],
    'artista' => $_POST['artista'],
    'genere' => $_POST['genere'],
    'anno_di_pubblicazione' => $_POST['anno_di_pubblicazione'],
    'url_della_cover' => $_POST['url_della_cover']
];

// Convertiamo la struttura dati in formato json
$json_object = json_encode($dischi);

// Reinderizziamo l'utente alla pagina index.php
header('Location: ./index.php');
