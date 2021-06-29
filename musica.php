<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/fa4853c74e.js" crossorigin="anonymous"></script>
    <title>Música | Catalín Munteanu</title>
    <link rel="icon" href="../C-Munteanu-php/img/astronautita.png" type="image/x-icon">
</head>

<body id="bodyMusica">

<?php require_once 'header.php'; ?>

    <h1 class=titulosSecciones>MÚSICA</h1>

    <section class="discos">
        <article class="cadaDisco">
            <figure class="elementoDiscoTapa">
                <a href="https://open.spotify.com/album/31t5YnjAt782oUyU5lhTUI?si=v3O5eIj6TX-Da2jfjt8DpA" target="_blank">
                    <img class="tapaDisco" src="../C-Munteanu-php/img/las_fuerzas_invisibles.jpg" width="300" height="300"
                    alt="Las fuerzas invisibles">
                </a>
            </figure>
            <figure class="elementoDiscoSpotify">
                <iframe src="https://open.spotify.com/embed/album/31t5YnjAt782oUyU5lhTUI" width="250" height="300"
                    frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </figure>
        </article>
        <article class="cadaDisco">
            <figure class="elementoDiscoTapa">
                <a href="https://open.spotify.com/album/1Ege2vnYYSEgKQ9zJ3YRAS?si=gus-I8iAQKS76XmOVe9wcg" target="_blank">
                    <img class="tapaDisco" src="../C-Munteanu-php/img/la_conviccion.jpg" width="300" height="300"
                    alt="La convicción permanente de que las cosas siempre están un poco mal">
                </a>
            </figure>
            <figure class="elementoDiscoSpotify">
                <iframe src="https://open.spotify.com/embed/album/1Ege2vnYYSEgKQ9zJ3YRAS" width="250" height="300"
                    frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </figure>
        </article>
    </section>

    <?php require_once 'footer.php'; ?>

</body>

</html>