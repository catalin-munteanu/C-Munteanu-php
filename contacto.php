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
    <title>Contacto | Catalín Munteanu</title>
    <link rel="icon" href="../C-Munteanu-php/img/astronautita.png" type="image/x-icon">
</head>

<body id="bodyContacto">

<?php require_once 'header.php'; ?>

    <main>
        <h1 class="titulosSecciones">CONTACTO</h1> 

        <?php
        if ( empty( $_GET['success'] ) ) {
        ?>

        <form action="mensajes.php" method="post" class="opacidadElementos">
            <label for="nombre">NOMBRE</label><br>
                <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" required><br><br>
            <label for="email">E-MAIL</label><br>
                <input type="email" name="email" id="email" placeholder="ejemplo@mail.com" required><br><br>
            <label for="asunto">ASUNTO</label><br>
                <input type="text" name="asunto" id="asunto" placeholder="Asunto" required><br><br>
            <label for="mensaje">MENSAJE</label><br>
                <textarea name="mensaje" id="mensaje" rows="4" cols="22" maxlength="3000"
                    placeholder="Tu mensaje" required></textarea><br><br>
            <input type="submit" value="ENVIAR" id="botonContacto">
        </form>

            <?php
        } else {
            ?>
            
            <section id="graciasForm">
                <h2>¡Gracias por tu mensaje!</h2>
            </section>
        <?php
        };
        ?>

    </main>

    <?php require_once 'footer.php'; ?>

</body>

</html>