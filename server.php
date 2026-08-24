<?php
// Controllo se il post è stato inviato
if ($titolo = $_POST['titolo'] && $artista = $_POST['artista'] && $genere = $_POST['genere'] && $anno_di_pubblicazione = $_POST['anno_di_pubblicazione'] && $url_della_cover = $_POST['url_della_cover']) {

    // Recupero i dati inviati dal form e li salvo in variabili
    $titolo = $_POST['titolo'];
    $artista = $_POST['artista'];
    $genere = $_POST['genere'];
    $anno_di_pubblicazione = $_POST['anno_di_pubblicazione'];
    $url_della_cover = $_POST['url_della_cover'];

    // Leggiamo il file json e lo salviamo in una variabile
    $json_object = file_get_contents('./dischi.json');

    // Convertiamo la stringa da formato json in una struttura dati php
    $dischi = json_decode($json_object, true);

    // Inserire un nuovo disco nella struttura dati
    $dischi[] = [
        'titolo' => $titolo,
        'artista' => $artista,
        'genere' => $genere,
        'anno_di_pubblicazione' => $anno_di_pubblicazione,
        'url_della_cover' => $url_della_cover
    ];

    // Convertiamo la struttura dati in formato json
    $json_object = json_encode($dischi);

    // sovrascriviamo il file json con i nuovi dati
    file_put_contents('./dischi.json', $json_object);

    // Reinderizziamo l'utente alla pagina index.php
    header('Location: ./index.php');
} else {
    // Se il post non è stato inviato, reinderizziamo l'utente alla pagina index.php
    header('Location: ./index.php');
}
