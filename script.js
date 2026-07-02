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
    frutsecosCategoria.style.display = "none";
    harinasCategoria.style.display = "none";

}

function mostrarNosotros(){

    inicio.style.display = "none";
    nosotros.style.display = "block";
    contacto.style.display = "none";
    productos.style.display = "none";

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";
    frutsecosCategoria.style.display="none";
    harinasCategoria.style.display = "none";

}

function mostrarContacto(){

    inicio.style.display = "none";
    nosotros.style.display = "none";
    contacto.style.display = "block";
    productos.style.display = "none";

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";
    frutsecosCategoria.style.display="none";
    harinasCategoria.style.display = "none";

}

const categorias = document.getElementById("productos");

const productosCategoria =
    document.getElementById("productos-categoria");

const hierbasCategoria =
    document.getElementById("hierbas-categoria");

const frutsecosCategoria =
    document.getElementById("frutsecos-categoria");

const harinasCategoria =
    document.getElementById("harinas-categoria");


function abrirCategoria(id){

    categorias.style.display = "none";

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";
    frutsecosCategoria.style.display="none";
    harinasCategoria.style.display = "none";

    document.getElementById(id).style.display = "block";

}


function volverCategorias(){

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";
    frutsecosCategoria.style.display="none";
    harinasCategoria.style.display = "none";

    categorias.style.display = "block";

}


function alternarProducto(tarjeta){

    tarjeta.classList.toggle("abierta");

    const texto =
        tarjeta.querySelector(".abrir-info") ||
        tarjeta.querySelector(".abrir-info-frutos")||
        tarjeta.querySelector(".abrir-info-harinas");

    if(!texto) return;

    if(tarjeta.classList.contains("abierta")){

        texto.innerHTML = "▲ Ocultar información";

    }else{

        if(texto.classList.contains("abrir-info-frutos")){

            texto.innerHTML = "✨ Descubrí sus propiedades";

            }else if(texto.classList.contains("abrir-info-harinas")){

            texto.innerHTML = "🌾 Descubrí sus beneficios";

        }else{

            texto.innerHTML = "▼ Tocá para más información";

        }

    }

}

const imagenPremezcla =
    document.getElementById("imagenPremezcla");

    imagenPremezcla.addEventListener("click", function(){

    modalProducto.style.display = "flex";

});

const tituloPremezcla =
    document.getElementById("tituloPremezcla");

const modalProducto =
    document.getElementById("modalProducto");

const cerrarModal =
    document.getElementById("cerrarModal");

    const modalBeneficios =
    document.getElementById("modalBeneficios");

const modalPreparacion =
    document.getElementById("modalPreparacion");

const modalIngredientes =
    document.getElementById("modalIngredientes");

    const modalTitulo =
    document.getElementById("modalTitulo");

   imagenPremezcla.addEventListener("click", function(){

    modalProducto.style.display = "flex";

    modalTitulo.textContent =
        titulosPremezclas[indicePremezcla];

    modalBeneficios.innerHTML =
        datosPremezclas[indicePremezcla].beneficios;

    modalPreparacion.innerHTML =
        datosPremezclas[indicePremezcla].preparacion;

    modalIngredientes.innerHTML =
        datosPremezclas[indicePremezcla].ingredientes;

});

cerrarModal.addEventListener("click", function(){

    modalProducto.style.display = "none";

});


const imagenesPremezclas = [

    "img/harinas y premezcla/prem-pastas.png",

    "img/harinas y premezcla/prem-panqueso.png",

    "img/harinas y premezcla/prem-universal.png"

];

const titulosPremezclas = [

    "🍝 Premezcla con legumbres",

    "🧀 Premezcla con granos ancestrales",

    "🌾 Blend de harinas con legumbres y semillas"

];

const datosPremezclas = [

    {
        beneficios: `
        ✔ Libre de gluten.<br>
        ✔ Alto aporte de fibra y proteínas.<br>
        ✔ Elaborada con cuatro legumbres.<br>
        ✔ 100% vegetal.
        `,

        preparacion: `
        ➼ Prepará pastas caseras siguiendo las instrucciones del envase.<br><br>
        ➼ Acompañalas con salsa de tomate, pesto o verduras salteadas.
        `,

        ingredientes: `
        🌱 Garbanzos<br>
        🌱 Lentejas<br>
        🌱 Porotos negros<br>
        🌱 Arvejas
        `
    },

    {
        beneficios: `
        ✔ Mayor aporte de fibra.<br>
        ✔ Contiene hierro y ácido fólico.<br>
        ✔ Libre de grasas trans.<br>
        ✔ Apto para celíacos.
        `,

        preparacion: `
        ➼ Prepará pan de queso para desayunos o meriendas.<br><br>
        ➼ Disfrutalo recién horneado con queso crema o mermeladas.
        `,

        ingredientes: `
        🌾Mix de granos ancestrales:<br>
        🌾Quinoa.<br>
        🌾Sarraceno.<br>
        🌾Amaranto.<br>
        `
    },

    {
        beneficios: `
        ✔ Uso universal.<br>
        ✔ Rico en fibra.<br>
        ✔ Con semillas y legumbres.<br>
        ✔ Ideal para múltiples recetas.
        `,

        preparacion: `
        ➼ Utilizalo para panes, budines, muffins o tortas.<br><br>
        ➼ También sirve para rebozados y preparaciones saladas.
        `,

        ingredientes: `
        <span>🌱 Blend de harinas, legumbres y semillas:<br></span>
        🌱 Garbanzos.<br>
        🌱 Quinoa.<br>
        🌱 Amaranto.<br>
        `
    }

];



let indicePremezcla = 0;

document.getElementById("siguientePremezcla").addEventListener("click", function(){

   indicePremezcla++;

    if(indicePremezcla >= imagenesPremezclas.length){
        indicePremezcla = 0;
    }

    imagenPremezcla.src = imagenesPremezclas[indicePremezcla];

    tituloPremezcla.textContent =
        titulosPremezclas[indicePremezcla];

}); 

document.getElementById("anteriorPremezcla").addEventListener("click", function(){

     indicePremezcla--;

    if(indicePremezcla < 0){
        indicePremezcla = imagenesPremezclas.length - 1;
    }

    imagenPremezcla.src = imagenesPremezclas[indicePremezcla];

    tituloPremezcla.textContent =
        titulosPremezclas[indicePremezcla];

});