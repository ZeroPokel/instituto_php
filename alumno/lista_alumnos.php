<?php
    require 'alumnos.php';

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
    
    <h1>Alumnos</h1>
    <button id="alta"><a href="alta_alumno.php">Alta alumno</a></button>
    <button id="atras"><a href="../index.php">Volver</a></button>
    <br/>

    <br/>
    <table border="1" width='700px' style="text-align:center">
        <tr>
            <td>
                <p>DNI</p>
            </td>
            <td>
                <p>Nombre</p>
            </td>
            <td>
                <p>Apellidos</p>
            </td>
            <td>
                <p>Dirección</p>
            </td>
            <td>
                <p>Email</p>
            </td>
            <td colspan='2'>
                <p>Operaciones</p>
            </td>
        </tr>
    
        <?php
            $alumnos = $_SESSION['alumno'];

            foreach($alumnos as $list) {
                echo "<tr>";
                echo "<td>". $list->get_dni() ."</td>";
                echo "<td>". $list->get_nombre() ."</td>";
                echo "<td>". $list->get_apellidos() ."</td>";
                echo "<td>". $list->get_direccion() ."</td>";
                echo "<td>". $list->get_email() ."</td>";
                $dni = $list->get_dni();
                echo "<td width='70px'>   
                            <form action='modifica_alumnos.php' method='post'>
                                <input type='submit' value='Editar'/>
                                <input type='hidden' name='_dni' value='$dni'/>
                            </form>";
                echo "</td>";
                echo "<td width='70px'>
                            <form action='elimina_alumnos.php' method='post'>
                                <input type='hidden' name='_dni' value='$dni'>
                                <input type='submit' value='Eliminar'/>
                             </form>
                    </td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>