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

}

function mostrarNosotros(){

    inicio.style.display = "none";
    nosotros.style.display = "block";
    contacto.style.display = "none";
    productos.style.display = "none";

}

function mostrarContacto(){

    inicio.style.display = "none";
    nosotros.style.display = "none";
    contacto.style.display = "block";
    productos.style.display = "none";

}

const categorias = document.getElementById("productos");
const productosCategoria =
    document.getElementById("productos-categoria");

const tituloCategoria =
    document.getElementById("titulo-categoria");

function abrirCategoria(nombre){

    categorias.style.display = "none";

    productosCategoria.style.display = "block";

    tituloCategoria.textContent =
        nombre;

}

function volverCategorias(){

    productosCategoria.style.display = "none";

    categorias.style.display = "block";

}