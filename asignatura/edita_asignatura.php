<?php
    require 'asignaturas.php';

    session_start();

    $asignaturas = $_SESSION['asignatura'];
    $codigo = $_POST['codigo'];
    $posicion = 0;
    $pos = $_POST['i'];

    foreach($asignaturas as $list) {

        if ($list->get_codigo() == $codigo){
            $existe = true;
        }

        $posicion++;
    }

    $nueva_asignatura = new asignatura($_POST['codigo'], $_POST['descripcion']);
    $asignaturas[$pos] = $nueva_asignatura;
    $_SESSION['asignatura'] = $asignaturas;
    
    header('Location:lista_asignaturas.php');

?>