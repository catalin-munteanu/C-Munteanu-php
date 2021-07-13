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
    <title>En vivo | Catalín Munteanu</title>
    <link rel="icon" href="../C-Munteanu-php/img/astronautita.png" type="image/x-icon">
</head>

<body id="bodyVivo">

<?php require_once 'header.php'; ?>

    <main>
        <section class=vivo>
            <article id="songkick-w">
                <a href="https://www.songkick.com/artists/9091409" class="songkick-widget" data-theme="dark" data-other-artists="on" data-track-button="on" data-detect-style="true" data-font-color="#FFFFFF" data-locale="es">Catalín Munteanu en vivo</a>
                <script src="//widget.songkick.com/9091409/widget.js"></script>
            </article>
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