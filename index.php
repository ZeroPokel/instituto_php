<?php
    require 'alumno/alumnos.php';
    require 'asignatura/asignaturas.php';
    session_start();

    if(!isset($_SESSION['alumno'])){
        $_SESSION['alumno'] = [];
        $nuevo_alumno = new Alumno('Miguel Angel', 'Femenia Vazquez', 'Calle Falsa 123', '1', 'emailfalsogmail.com');
        array_push($_SESSION['alumno'], $nuevo_alumno);
    }

    if(!isset($_SESSION['asignatura'])){
        $_SESSION['asignatura'] = [];
        $nueva_asignatura = new Asignatura('1', 'Programación');
        array_push($_SESSION['asignatura'], $nueva_asignatura);
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto</title>
</head>
<body>
    
    <h1>Instituto</h1>
    <form action="alumno/lista_alumnos.php" method="post">
        <input type="submit" value="Alumnos"/>
    </form>
    <form action="asignatura/lista_asignaturas.php" method="post">
        <input type="submit" value="Asignaturas"/>
    </form>
</body>
</html>