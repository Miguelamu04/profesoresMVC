<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <p>¿Estas seguro de elimiar a <?php echo $datos['nombre']; ?></p>
    <form action="index.php?accion=eliminar" method="POST">
        <input type="hidden" name="id" value="<?php echo $datos['id']; ?>">
        <a href="index.php">Volver</a>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>