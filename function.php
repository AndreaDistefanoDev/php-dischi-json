<?php
function getDischi()
{
    // Leggiamo il file json
    $json_object = file_get_contents('./dischi.json');

    // Salvo la struttura dati presente file tadotta dal json in una variabile
    return $dischi = json_decode($json_object, true);
};
