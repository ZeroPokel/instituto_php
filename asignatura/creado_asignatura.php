<?php
    require 'asignaturas.php';

    session_start();

    $asignaturas = $_SESSION['asignatura'];
    $codigo = $_POST['codigo'];
    $posicion = 0;

    foreach($asignaturas as $list) {

        if ($list->get_codigo() == $codigo){
            $existe = true;
        }

        $posicion++;
    }

    if ($existe){
        header('Location:coincide_codigo.php');
    } else {
        $nueva_asignatura = new asignatura($_POST['codigo'], $_POST['descripcion']);
        array_push($_SESSION['asignatura'], $nueva_asignatura);
        header('Location:lista_asignaturas.php');
    }


?>