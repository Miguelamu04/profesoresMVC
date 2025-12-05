<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Confirmar eliminación</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <p>¿Estas seguro de eliminar a <?php echo $datos['nombre']; ?>?</p>
    <form action="confirmarEliminar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $datos['id']; ?>">
        <input type="hidden" name="confirmar" value="1">
        <input type="submit" value="Eliminar">
    </form>
    <a href="listar.php">Volver</a>
</body>
</html>
