<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Añadir Profesor</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Añadir Profesor</h1>
    <form action="index.php?c=ProfesorControlador&m=crear" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br><br>
        <input type="submit" value="Guardar">
    </form><br>
    <a href="index.php?c=ProfesorControlador&m=listar">Volver al listado</a>
</body>
</html>
