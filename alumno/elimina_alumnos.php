<?php

    require 'alumnos.php';
    session_start();

    $alumnos = $_SESSION['alumno'];
    $dni = $_POST['_dni'];
    $posicion = 0;

    foreach($alumnos as $list) {

        if ($list->get_dni() == $dni){
            array_splice($alumnos, $posicion, 1);
            break;
        }

        $posicion++;
    }

    $_SESSION['alumno'] = $alumnos;

    header('Location:lista_alumnos.php');

?>