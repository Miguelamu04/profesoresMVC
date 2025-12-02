<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profesores</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Profesores</h1>
    <a href="crear.php" class="boton-anadir">Añadir Profesor</a>
    <table class="tabla-datos">
        <thead>
            <tr>
                <th>Profesor</th>
                <th class="columna-acciones">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($datos)) { ?>               
                <?php foreach ($datos as $fila) { ?>
                    <tr>
                        <td><?php echo $fila['nombre']; ?></td>
                        <td>
                            <div class="contenedor-acciones">
                                <form action="modificar.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $fila['idProfesor']; ?>">
                                    <input type="submit" value="Editar" class="btn btn-editar">
                                </form>
                                <form action="confirmarEliminar.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $fila['idProfesor']; ?>">
                                    <input type="submit" value="Eliminar" class="btn btn-eliminar">
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php } ?>

            <?php } else { ?>
                <tr>
                    <td colspan="2">No hay datos en la base de datos</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
