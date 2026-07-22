<?php

require_once("../methods/productos.php");


// GUARDAR

if(isset($_POST["guardar"])){

    $descripcion = $_POST["descripcion_producto"];
    $precio = $_POST["precio_unitario"];

    $nombreImagen = $_FILES["imagen_producto"]["name"];
    $rutaTemporal = $_FILES["imagen_producto"]["tmp_name"];

    move_uploaded_file(
        $rutaTemporal,
        "../uploads/".$nombreImagen
    );


    agregarProducto(
        $descripcion,
        $precio,
        $nombreImagen
    );


    header("Location: ../index.php");
    exit();

}



// ELIMINAR

if(isset($_GET["eliminar"])){

    $id = $_GET["eliminar"];


    eliminarProducto($id);


    header("Location: ../index.php");

    exit();

}



if(isset($_POST["editar"])){


    $id = $_POST["id_producto"];

    $descripcion = $_POST["descripcion_producto"];

    $precio = $_POST["precio_unitario"];



    // Imagen actual

    $imagen = $_FILES["imagen_producto"]["name"];



    if($imagen != ""){


        $ruta = $_FILES["imagen_producto"]["tmp_name"];


        move_uploaded_file(

            $ruta,

            "../uploads/".$imagen

        );


    }else{


        // Mantener imagen anterior

        $producto = obtenerProductoPorId($id);

        $imagen = $producto["imagen_producto"];

    }



    actualizarProducto(

        $id,

        $descripcion,

        $precio,

        $imagen

    );



    header("Location: ../index.php");

    exit();


}


?>