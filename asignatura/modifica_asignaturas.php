<?php

    require 'asignaturas.php';
    session_start();

    $asignaturas = $_SESSION['asignatura'];
    $codigo = $_POST['_codigo'];
    $posicion = 0;

    foreach($asignaturas as $list) {

        if ($list->get_codigo() == $codigo){
            $descripcion = $list->get_descripcion();
            break;
        }

        $posicion++;
    }

    echo "<form method='post' action='edita_asignatura.php'>
            <label>Código</label>
                <input type='text' name='codigo' required='true' value='$codigo'>
            <br/>
            <label>Descripción </label>
                <input type='text' name='descripcion' required='true' value='$descripcion'>
            <br/>

            <input type='submit' value='Editar'>
            <input type='hidden' name='i' value='$posicion'/>
    </form>";

?>