<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Profesor</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <p>¿Estás seguro de eliminar a <?= $datos['nombre']; ?>?</p>
    <a class="btn-accion" href="index.php?c=ProfesorControlador&m=eliminar&id=<?= $datos['id']; ?>">Sí, eliminar</a>
    <a class="btn-accion" href="index.php?c=ProfesorControlador&m=listar">Cancelar</a>
</body>
</html>
