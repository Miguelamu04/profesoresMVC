<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profesores</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Profesores</h1>
    <a href="index.php?c=ProfesorControlador&m=mostrarCrear" class="boton-anadir">Añadir Profesor</a>
    <table class="tabla-datos">
        <thead>
            <tr>
                <th>Profesor</th>
                <th class="columna-acciones">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($datos)) {
                foreach ($datos as $fila) { ?>
                    <tr>
                        <td><?= $fila['nombre']; ?></td>
                        <td class="columna-acciones">
                            <div class="contenedor-acciones">
                                <a class='btn-accion'href="index.php?c=ProfesorControlador&m=mostrarEditar&id=<?= $fila['idProfesor']; ?>">Modificar</a>
                                <a class='btn-accion'href="index.php?c=ProfesorControlador&m=confirmarEliminar&id=<?= $fila['idProfesor']; ?>">Eliminar</a>
                            </div>
                        </td>
                    </tr>
        <?php   }
            } else { ?>
                <tr>
                    <td colspan="2">No hay datos</td>
                </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>
