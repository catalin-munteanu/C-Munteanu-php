<?php

// primero defino las variables y les paso un valor por default (puede ser vacío o no)

$nombre  = '';
$email   = '';
$asunto  = '';
$mensaje = '';

// voy a buscar que se llenen esas variables

// siempre lo primero que validamos es que la data exista

/* VALIDACIÓN */

if ( !empty ( $_POST ) ) {

    if  ( !empty ( $_POST['nombre'] ) &&
        is_string( $_POST['nombre'] ) ) {
            $nombre = $_POST['nombre'];
    }

    if ( !empty ( $_POST['email'] ) &&
        is_string( $_POST['email'] ) &&
        filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) !== false ) {
            $email = $_POST['email'];
        }

    if ( !empty ( $_POST['asunto'] ) &&
        is_string( $_POST['asunto'] ) ) {
            $asunto = $_POST['asunto'];
    }

    if ( !empty ( $_POST['mensaje'] ) &&
        is_string( $_POST['mensaje'] ) ) {
            $mensaje = $_POST['mensaje'];
    }
}

if ( $nombre !== '' &&
        $email !== '' &&
        $asunto !== '' &&
        $mensaje !== '') {

            /* CONEXIÓN CON LA BASE DE DATOS */

            $connection = new mysqli( 'localhost', 'root', '', 'c-munteanu-mensajes' );

            if ( $connection->connect_error ) {
                die( 'No se ha podido establecer una conexión.' );
            }

            /* SANITIZACIÓN */

            $nombreEsc  = $connection->real_escape_string( $nombre );
            $emailEsc   = $connection->real_escape_string( $email );
            $asuntoEsc  = $connection->real_escape_string( $asunto );
            $mensajeEsc = $connection->real_escape_string( $mensaje );

            /* INSERCIÓN */

            $insercion = $connection->query( 'INSERT INTO mensajes(nombre, email, asunto, mensaje) VALUES
            ("' . $nombreEsc . '", "' . $emailEsc . '", "' . $asuntoEsc . '", "' . $mensajeEsc . '")');
            
            echo 'INSERT INTO mensajes(nombre, email, asunto, mensaje) VALUES
            ("' . $nombreEsc . '", "' . $emailEsc . '", "' . $asuntoEsc . '", "' . $mensajeEsc . '")';

            // var_dump( $asuntoEsc );

            mail ( 'cmunteanumusica@gmail.com', 'Nuevo mensaje en Catalín Munteanu', 'Nuevo mensaje:' . $nombreEsc . $emailEsc . $asuntoEsc . $mensajeEsc );
        
        header( 'Location: contacto.php?success=true' );

} else {
    echo 'algo salió mal';
}

?>