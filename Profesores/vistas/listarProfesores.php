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
            <?php if (!empty($datos)) { ?>
            <?php foreach ($datos as $fila) { ?>
                <tr>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td>
                        <form action="index.php?c=ProfesorControlador&m=mostrarEditar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $fila['idProfesor']; ?>">
                            <input type="submit" value="Editar">
                        </form>

                        <form action="index.php?c=ProfesorControlador&m=confirmarEliminar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $fila['idProfesor']; ?>">
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr><td colspan="2">No hay datos</td></tr>
        <?php } ?>
        </tbody>
    </table> 
</body>
</html>
