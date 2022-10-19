<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta asignaturas</title>
</head>
<body>
    <form method="post" action="creado_asignatura.php">
        <label>Código</label>
        <input type="text" name="codigo" required="true">
        <br/>
        <label>Descripción </label>
        <input type="text" name="descripcion"required="true">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>