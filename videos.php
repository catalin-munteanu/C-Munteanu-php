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
    <title>Videos | Catalín Munteanu</title>
    <link rel="icon" href="../C-Munteanu-php/img/astronautita.png" type="image/x-icon">
</head>

<body id="bodyVideos">

<?php require_once 'header.php'; ?>

    <main>

        <h1 class="titulosSecciones">VIDEOS</h1>

        <section id="videos">

            <article id="videoDestacado">
                <iframe class="videoDestacado" width="560" height="315" src="https://www.youtube.com/embed/kzuCR0aFkew"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </article>

            <article class="videosNoDestacados">
                <iframe class="otrosVideos" width="360" height="315" src="https://www.youtube.com/embed/kzuCR0aFkew"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <iframe class="otrosVideos" width="360" height="315" src="https://www.youtube.com/embed/7_1poysP21U"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <iframe class="otrosVideos" width="360" height="315" src="https://www.youtube.com/embed/IU3B35eAGW4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </article>
        
        <!-- Puedo meter más contenido del canal de Youtube... ver cómo hacer para poner "más" y que me mande a todo
        el contenido del canal o algo así -->

        </section>
    </main>

    <footer>
        <a class="iconosFooter" href="https://open.spotify.com/artist/3Bo4iMIQ1fapJEYcvBb42S" target="_blank">
            <i class="fab fa-spotify fa-1.5x" id="iconoSpotify"></i>
        </a>
        <a class="iconosFooter" href="https://www.youtube.com/c/CatalinMunteanuMusica" target="_blank">
            <i class="fab fa-youtube fa-1.5x" id="iconoYoutube"></i>
        </a>
        <a class="iconosFooter" href="https://catalinmunteanu.bandcamp.com/" target="_blank">
            <i class="fab fa-bandcamp fa-1.5x" id="iconoBandcamp"></i>
        </a>
        <a class="iconosFooter" href="https://instagram.com/catalinmunteanu_" target="_blank">
            <i class="fab fa-instagram fa-1.5x" id="iconoInstagram"></i>
        </a>
    </footer>

</body>

</html>