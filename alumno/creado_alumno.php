<?php
    require 'alumnos.php';

    session_start();

    $alumnos = $_SESSION['alumno'];
    $dni = $_POST['dni'];
    $posicion = 0;

    foreach($alumnos as $list) {

        if ($list->get_dni() == $dni){
            $existe = true;
        }

        $posicion++;
    }

    if ($existe){
        header('Location:coincide_dni.php');
    } else {
        $nuevo_alumno = new Alumno($_POST['nombre'], $_POST['apellidos'], $_POST['direccion'], $_POST['dni'], $_POST['email']);
        array_push($_SESSION['alumno'], $nuevo_alumno);
        header('Location:lista_alumnos.php');
    }


?>