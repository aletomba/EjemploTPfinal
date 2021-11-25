<!-- Vista desde donde editaremos un producto -->
<div class="card">
    <div class="card-header">
            Buscar por id
        <div class="mb-3">
            <input type="text"
            class="form-control"  id="nombre" aria-describedby="helpId" placeholder="Ingrese el id de producto">
        </div>
        <input name="" id="" class="btn btn-success" type="submit" value="buscar" >
    </div>
</div>

<div class="card" color="red">
    <div class="card-header">
        Editar producto
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
              <label for="id" class="form-label">Id: </label>
              <input type="text"
                class="form-control" name="id" value="<?php echo $producto -> id ?>" readonly id="id" aria-describedby="helpId" >
            </div>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre: </label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" value="<?php echo $producto -> nombre ?>" aria-describedby="helpId" placeholder="Nombre del producto">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio unitario: </label>
              <input type="text"
                class="form-control" name="precio" id="precio" value="<?php echo $producto -> precio ?>" aria-describedby="helpId" placeholder="Precio unitario del producto">
            </div>
            <div class="mb-3">
              <label for="cantidad" class="form-label">Cantidad disponible</label>
              <input type="number"
                class="form-control" name="cantidad" id="cantidad" value="<?php echo $producto -> cantidad ?>" aria-describedby="helpId" placeholder="Cantidad disponible">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar producto">
            <a href="index.php?accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>