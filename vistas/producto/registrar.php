<!-- Vista desde donde registraremos un producto -->
<div class="card">
    <div class="card-header">
        Agregar producto
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre: </label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del producto">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio unitario: </label>
              <input type="text"
                class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Precio unitario del producto">
            </div>
            <div class="mb-3">
              <label for="cantidad" class="form-label">Cantidad disponible</label>
              <input type="number"
                class="form-control" name="cantidad" id="cantidad" aria-describedby="helpId" placeholder="Cantidad disponible">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Agregar producto">
            <a href="index.php?accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>