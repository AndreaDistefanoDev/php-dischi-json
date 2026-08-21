<?php
// Leggiamo il file json
$json_object = file_get_contents('./dischi.json');


// Salvo la struttura dati presente file tadotta dal json in una variabile
$dischi = json_decode($json_object);
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
        <div class="container">
            <h1>I tuoi brani</h1>
            <div class="row">
                <?php foreach ($dischi as $disco) { ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $disco->url_della_cover ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $disco->titolo ?></h5>
                                <p class="card-text"><?php echo $disco->artista ?></p>
                                <p class="card-text"><?php echo $disco->genere ?></p>
                                <p class="card-text text-center"><?php echo $disco->anno_di_pubblicazione ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

</body>

</html>