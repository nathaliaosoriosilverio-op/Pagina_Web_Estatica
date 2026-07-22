<h2 class="mb-4">Agregar Producto</h2>

<form action="actions/producto.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">

        <label class="form-label">
            Descripción
        </label>

        <input
            type="text"
            name="descripcion_producto"
            class="form-control"
            required>

    </div>

    <div class="mb-3">

        <label class="form-label">
            Precio Unitario
        </label>

        <input
            type="number"
            step="0.01"
            name="precio_unitario"
            class="form-control"
            required>

    </div>

    <div class="mb-3">

        <label class="form-label">
            Imagen
        </label>

        <input
            type="file"
            name="imagen_producto"
            class="form-control"
            accept="image/*"
            required>

    </div>

    <button
        type="submit"
        name="guardar"
        class="btn btn-success">

        Guardar Producto

    </button>

</form>