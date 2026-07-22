<?php

require_once("methods/productos.php");

$view = isset($_GET['view']) ? $_GET['view'] : "inicio";

include("views/components/header.php");

switch($view){

    case "inicio":
        include("views/inicio.php");
    break;

    case "agregar":
        include("views/agregar.php");
    break;

    case "editar":
        include("views/editar.php");
    break;

    default:
        include("views/inicio.php");

}

include("views/components/footer.php");

?>