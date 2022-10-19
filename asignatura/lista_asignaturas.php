<?php
    require 'asignaturas.php';

    session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaturas</title>
</head>
<body>
    
    <h1>Asignaturas</h1>
    <button id="alta"><a href="alta_asignatura.php">Alta asignatura</a></button>
    <button id="atras"><a href="../index.php">Volver</a></button>
    <br/>

    <br/>
    <table border="1" width='700px' style="text-align:center">
        <tr>
            <td>
                <p>Código</p>
            </td>
            <td>
                <p>Descripción</p>
            </td>

            <td colspan='2'>
                <p>Operaciones</p>
            </td>
        </tr>
    
        <?php
            $asignaturas = $_SESSION['asignatura'];

            foreach($asignaturas as $list) {
                echo "<tr>";
                echo "<td>". $list->get_codigo() ."</td>";
                echo "<td>". $list->get_descripcion() ."</td>";
                $codigo = $list->get_codigo();
                echo "<td width='70px'>   
                            <form action='modifica_asignaturas.php' method='post'>
                                <input type='submit' value='Editar'/>
                                <input type='hidden' name='_codigo' value='$codigo'/>
                            </form>";
                echo "</td>";
                echo "<td width='70px'>
                            <form action='elimina_asignaturas.php' method='post'>
                                <input type='hidden' name='_codigo' value='$codigo'>
                                <input type='submit' value='Eliminar'/>
                             </form>
                    </td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>