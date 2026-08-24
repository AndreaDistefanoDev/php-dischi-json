<?php
// Leggiamo il file json
require_once './function.php';
$dischi = getDischi();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CD's Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body class="bg-dark text-white">
    <header class="mb-5">
        <nav
            class="navbar navbar-expand-sm navbar-dark bg-dark border-bottom border-top border-left border-right border-success">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./img/ChatGPT Image 21 ago 2026, 20_18_53.png" alt="Logo App Musica" style="width: 90px; height: 60px;"></a>

            </div>
        </nav>

    </header>

    <main>
        <div class="container bg-dark text-white p-5 mb-4">
            <h1>I tuoi brani</h1>
            <div class="row">
                <?php foreach ($dischi as $disco) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card bg-secondary text-white" style="width: 18rem;">
                            <div class="card-img">
                                <img class="card-img-top w-100" src="<?php echo $disco['url_della_cover'] ?>" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $disco['titolo'] ?></h5>
                                <p class="card-text"><?php echo $disco['artista'] ?></p>
                                <p class="card-text"><?php echo $disco['genere'] ?></p>
                                <p class="card-text text-center"><?php echo $disco['anno_di_pubblicazione'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="container bg-dark text-white mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 bg-dark text-white p-5 border border-success border-3 rounded">
                        <h1 class="h3 mb-4">Aggiungi un brano</h1>
                        <form action="./server.php" method="POST" class="form-inline mt-3">
                            <div class="form-group mb-3">
                                <label for="titolo">Titolo</label>
                                <input type="text" class="form-control" id="titolo" name="titolo" placeholder="Titolo">
                            </div>
                            <div class="form-group mb-3">
                                <label for="artista">Artista</label>
                                <input type="text" class="form-control" id="artista" name="artista" placeholder="Artista">
                            </div>
                            <div class="form-group mb-3">
                                <label for="genere">Genere</label>
                                <input type="text" class="form-control" id="genere" name="genere" placeholder="Genere">
                            </div>
                            <div class="form-group mb-3">
                                <label for="url_della_cover">Url della cover</label>
                                <input type="url" class="form-control" id="url_della_cover" name="url_della_cover" placeholder="Url della cover">
                            </div>
                            <div class="form-group mb-3">
                                <label for="anno_di_pubblicazione">Anno di pubblicazione</label>
                                <input type="number" class="form-control" id="anno_di_pubblicazione" name="anno_di_pubblicazione" placeholder="Anno di pubblicazione">
                            </div>
                            <button class="btn btn-success mt-3">Aggiungi</button>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </main>

</body>

</html>