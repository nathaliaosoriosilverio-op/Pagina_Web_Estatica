<?php

$productos = obtenerProductos();

?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Listado de Productos</h2>

    <input
        type="text"
        id="buscar"
        class="form-control w-25"
        placeholder="Buscar producto...">

</div>

<div class="row" id="contenedorProductos">

<?php

if(count($productos)>0){

    foreach($productos as $producto){

        include("views/components/tarjeta.php");

    }

}else{

?>

<div class="alert alert-warning">

    No existen productos registrados.

</div>

<?php

}

?>

</div>