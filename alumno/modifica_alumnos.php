<?php

    require 'alumnos.php';
    session_start();

    $alumnos = $_SESSION['alumno'];
    $dni = $_POST['_dni'];
    $posicion = 0;

    foreach($alumnos as $list) {

        if ($list->get_dni() == $dni){
            $nombre = $list->get_nombre();
            $apellido = $list->get_apellidos();
            $direccion = $list->get_direccion();
            $email = $list->get_email();
            break;
        }

        $posicion++;
    }

    echo "<form method='post' action='edita_alumno.php'>
            <label>DNI</label>
                <input type='text' name='dni' required='true' value='$dni'>
            <br/>
            <label>Nombre </label>
                <input type='text' name='nombre' required='true' value='$nombre'>
            <br/>
            <label>Apellidos</label>
                <input type='text' name='apellido' required='true' value='$apellido'>
            <br/>
            <label>Direccion</label>
            <input type='text' name='direccion' required='true' value='$direccion'>
            <br/>
            <label>Apellidos</label>
            <input type='text' name='email' required='true' value='$email'>
            <br/>

            <input type='submit' value='Editar'>
            <input type='hidden' name='i' value='$posicion'/>
    </form>";

?>