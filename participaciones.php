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
    <title>Participaciones | Catalín Munteanu</title>
    <link rel="icon" href="../C-Munteanu-php/img/astronautita.png" type="image/x-icon">
</head>

<body id="bodyParticipaciones">

    <?php require_once 'header.php'; ?>

    <main>
        <h1 class="titulosSecciones">PARTICIPACIONES</h1>
        <section id="participacionesEnDiscos">

            <article class="cadaDisco">
                <figure class="elementoDiscoTapa">
                    <a href="https://open.spotify.com/album/2OHSWVVWZayCYkGuIms6uL">
                        <img class="tapaDisco" src="../C-Munteanu-php/img/los_incendios_forestales.jpg" width="300" height="300"
                        alt="Los incendios forestales">
                    </a>
                </figure>
                <figure class="elementoDiscoSpotify">
                    <iframe src="https://open.spotify.com/embed/album/2OHSWVVWZayCYkGuIms6uL" width="250" height="300"
                        frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                </figure>
            </article>

            <article class="cadaDisco">
                <figure class="elementoDiscoTapa">
                    <a href="https://open.spotify.com/album/05qTM0VRUdTV8Bw3yMj8K6?si=EpePyRBFRY-B5eJHpM66jA">
                        <img class="tapaDisco" src="../C-Munteanu-php/img/fuega_camina_conmigo.jpg" width="300" height="300"
                            alt="Fuega camina conmigo">
                    </a>
                </figure>
                <figure class="elementoDiscoSpotify">
                    <iframe src="https://open.spotify.com/embed/album/05qTM0VRUdTV8Bw3yMj8K6" width="250" height="300"
                        frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                </figure>
            </article>

            <article id="participacionesBandcamp">
                <iframe class="participacionesBandcamp"
                    src="https://bandcamp.com/EmbeddedPlayer/album=3717669713/size=large/bgcol=333333/linkcol=4ec5ec/tracklist=false/track=692135236/transparent=true/"
                    seamless><a href="https://batsukin.bandcamp.com/album/ciudad-de-mil-elefantes">Ciudad de mil
                        Elefantes by Batsûkin</a></iframe>
                <iframe class="participacionesBandcamp"
                    src="https://bandcamp.com/EmbeddedPlayer/album=2059693862/size=large/bgcol=333333/linkcol=e99708/tracklist=false/track=428596116/transparent=true/"
                    seamless><a href="https://eugeniasasso.bandcamp.com/album/alma-sabe">Alma sabe by Eugenia
                        Sasso</a></iframe>
                <iframe class="participacionesBandcamp"
                    src="https://bandcamp.com/EmbeddedPlayer/album=1061584651/size=large/bgcol=333333/linkcol=e32c14/tracklist=false/transparent=true/"
                    seamless><a href="https://elguitarrazo.bandcamp.com/album/a-granel">A granel by El
                        Guitarrazo</a></iframe>
            </article>
        </section>
    </main>

    <?php require_once 'footer.php'; ?>

</body>

</html>