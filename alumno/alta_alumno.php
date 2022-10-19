<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta alumnos</title>
</head>
<body>
    <form method="post" action="creado_alumno.php">
        <label>Nombre</label>
        <input type="text" name="nombre" required="true">
        <br/>
        <label>Apellidos </label>
        <input type="text" name="apellidos"required="true">
        <br/>
        <label>Dirección</label>
        <input type="text" name="direccion" required="true">
        <br/>
        <label>DNI </label>
        <input type="text" name="dni" required="true">
        <br/>
        <label>Email </label>
        <input type="text" name="email" required="true">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>