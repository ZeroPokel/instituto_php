<?php

    require 'asignaturas.php';
    session_start();

    $asignaturas = $_SESSION['asignatura'];
    $codigo = $_POST['_codigo'];
    $posicion = 0;

    foreach($asignaturas as $list) {

        if ($list->get_codigo() == $codigo){
            array_splice($asignaturas, $posicion, 1);
            break;
        }

        $posicion++;
    }

    $_SESSION['asignatura'] = $asignaturas;

    header('Location:lista_asignaturas.php');

?>