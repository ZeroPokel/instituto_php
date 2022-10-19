<?php
    require 'alumnos.php';

    session_start();

    $alumnos = $_SESSION['alumno'];
    $dni = $_POST['dni'];
    $posicion = 0;
    $pos = $_POST['i'];

    foreach($alumnos as $list) {

        if ($list->get_dni() == $dni){
            $existe = true;
        }

        $posicion++;
    }

    $nuevo_alumno = new Alumno($_POST['nombre'], $_POST['apellidos'], $_POST['direccion'], $_POST['dni'], $_POST['email']);
    $alumnos[$pos] = $nuevo_alumno;
    $_SESSION['alumno'] = $alumnos;
    
    header('Location:lista_alumnos.php');

?>