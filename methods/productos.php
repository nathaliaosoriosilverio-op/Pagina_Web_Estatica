<?php

include(__DIR__ . "/../config/conexion.php");



function obtenerProductos(){

    global $conexion;

    $sql = "SELECT * FROM productos ORDER BY id_producto DESC";

    $consulta = $conexion->prepare($sql);

    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_ASSOC);

}


function obtenerProductoPorId($id){

    global $conexion;

    $sql = "SELECT * FROM productos
            WHERE id_producto = ?";

    $consulta = $conexion->prepare($sql);

    $consulta->execute([$id]);

    return $consulta->fetch(PDO::FETCH_ASSOC);

}


function agregarProducto($descripcion,$precio,$imagen){

    global $conexion;

    $sql = "INSERT INTO productos
            (
                descripcion_producto,
                precio_unitario,
                imagen_producto
            )
            VALUES
            (
                ?,
                ?,
                ?
            )";

    $consulta = $conexion->prepare($sql);

    return $consulta->execute([
        $descripcion,
        $precio,
        $imagen
    ]);

}


function actualizarProducto($id,$descripcion,$precio,$imagen){

    global $conexion;

    $sql = "UPDATE productos SET

            descripcion_producto=?,
            precio_unitario=?,
            imagen_producto=?

            WHERE id_producto=?";

    $consulta = $conexion->prepare($sql);

    return $consulta->execute([
        $descripcion,
        $precio,
        $imagen,
        $id
    ]);

}


function eliminarProducto($id){

    global $conexion;

    $sql = "DELETE FROM productos
            WHERE id_producto=?";

    $consulta = $conexion->prepare($sql);

    return $consulta->execute([$id]);

}

?>