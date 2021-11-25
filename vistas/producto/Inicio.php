<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad Disponible</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto) { ?>
        <tr>
            <td scope="row"><?php echo $producto->id ?></td>
            <td><?php echo $producto->nombre ?></td>
            <td><?php echo $producto->precio ?></td>
            <td><?php echo $producto->cantidad ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="index.php?accion=editar&id=<?php echo $producto->id ?>" class="btn btn-info">Editar</a>
                    <a href="index.php?accion=borrar&id=<?php echo $producto->id ?>" class="btn btn-danger">Borrar</a>
                </div>
            </td>

        </tr>

        <?php  } ?>
    </tbody>
</table>