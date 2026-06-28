const boton = document.getElementById("btnProductos");

const inicio = document.getElementById("inicio");
const nosotros = document.getElementById("nosotros");
const contacto = document.getElementById("contacto");
const productos = document.getElementById("productos");

boton.addEventListener("click", function(e){

    e.preventDefault();

    inicio.style.display = "none";
    nosotros.style.display = "none";
    contacto.style.display = "none";

    productos.style.display = "block";

});

function mostrarInicio(){

    inicio.style.display = "flex";
    nosotros.style.display = "none";
    contacto.style.display = "none";
    productos.style.display = "none";

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";

}

function mostrarNosotros(){

    inicio.style.display = "none";
    nosotros.style.display = "block";
    contacto.style.display = "none";
    productos.style.display = "none";

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";

}

function mostrarContacto(){

    inicio.style.display = "none";
    nosotros.style.display = "none";
    contacto.style.display = "block";
    productos.style.display = "none";

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";

}

const categorias = document.getElementById("productos");

const productosCategoria =
    document.getElementById("productos-categoria");

const hierbasCategoria =
    document.getElementById("hierbas-categoria");


function abrirCategoria(id){

    categorias.style.display = "none";

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";

    document.getElementById(id).style.display = "block";

}


function volverCategorias(){

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";

    categorias.style.display = "block";

}


function alternarProducto(tarjeta){

    const contenido = tarjeta.querySelector(".contenido-producto");

    if(contenido.style.display === "block"){

        contenido.style.display = "none";

    }else{

        contenido.style.display = "block";

    }

}

