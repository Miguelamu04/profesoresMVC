<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar Profesor</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Modificar Profesor</h1>
    <form action="modificar.php" method="POST">
        <input type="hidden" name="idProfesor" value="<?php echo $datos['idProfesor']; ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" required>
        <br><br>
        <input type="submit" value="Actualizar">
    </form><br>
    <a href="listar.php">Volver al listado</a>
</body>
</html>
