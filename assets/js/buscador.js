document.addEventListener("DOMContentLoaded", function(){


    const buscador = document.getElementById("buscar");


    buscador.addEventListener("keyup", function(){


        let texto = buscador.value.toLowerCase();


        let productos = document.querySelectorAll(".producto");


        productos.forEach(function(producto){


            let descripcion = producto
                .querySelector(".descripcion")
                .textContent
                .toLowerCase();


            if(descripcion.includes(texto)){


                producto.style.display = "";


            }else{


                producto.style.display = "none";


            }


        });


    });


});