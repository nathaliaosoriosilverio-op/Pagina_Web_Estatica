<div class="col-md-4 mb-4 producto">

    <div class="card shadow h-100">

        <img
            src="uploads/<?php echo $producto['imagen_producto'];?>"
            class="card-img-top">

        <div class="card-body">

            <h5 class="card-title descripcion">

                <?php echo $producto['descripcion_producto'];?>

            </h5>

            <p class="precio">

                $<?php echo number_format($producto['precio_unitario'],2);?>

            </p>

        </div>

        <div class="card-footer d-flex justify-content-between">

            <a
                href="?view=editar&id=<?php echo $producto['id_producto'];?>"
                class="btn btn-warning">

                Editar

            </a>

          <a 
                href="actions/producto.php?eliminar=<?php echo $producto['id_producto'];?>"
                class="btn btn-danger"
                onclick="return confirm('¿Desea eliminar este producto?')">

                Eliminar

            </a>

        </div>

    </div>

</div>