<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar Profesor</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Modificar Profesor</h1>
    <form action="index.php?c=ProfesorControlador&m=editar" method="POST">
        <input type="hidden" name="idProfesor" value="<?php echo $datos['idProfesor']; ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" required>
        <br><br>
        <input type="submit" value="Actualizar">
    </form>
    <a href="index.php?c=ProfesorControlador&m=listar">Volver al listado</a>
</body>
</html>
