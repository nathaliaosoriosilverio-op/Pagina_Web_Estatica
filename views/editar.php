<?php

$id = $_GET["id"];

$producto = obtenerProductoPorId($id);

?>


<h2 class="mb-4">
Editar Producto
</h2>


<form 
action="actions/producto.php" 
method="POST"
enctype="multipart/form-data">


<input 
type="hidden"
name="id_producto"
value="<?php echo $producto['id_producto'];?>">


<div class="mb-3">

<label class="form-label">
Descripción
</label>


<input

type="text"

name="descripcion_producto"

class="form-control"

value="<?php echo $producto['descripcion_producto'];?>"

required>


</div>


<div class="mb-3">

<label class="form-label">
Precio
</label>


<input

type="number"

step="0.01"

name="precio_unitario"

class="form-control"

value="<?php echo $producto['precio_unitario'];?>"

required>


</div>


<div class="mb-3">

<label class="form-label">
Imagen actual
</label>


<br>


<img 
src="uploads/<?php echo $producto['imagen_producto'];?>"
width="150">


</div>



<div class="mb-3">

<label class="form-label">
Nueva imagen
</label>


<input

type="file"

name="imagen_producto"

class="form-control"

accept="image/*">


</div>



<button

type="submit"

name="editar"

class="btn btn-primary">

Actualizar Producto

</button>


</form>