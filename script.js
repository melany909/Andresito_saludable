/* ================= BOTÓN VER PRODUCTOS ================= */

const boton = document.getElementById("btnProductos");

const inicio = document.getElementById("inicio");
const nosotros = document.getElementById("nosotros");
const contacto = document.getElementById("contacto");
const productos = document.getElementById("productos");

const productosCategoria = document.getElementById("productos-categoria");
const hierbasCategoria = document.getElementById("hierbas-categoria");
const frutsecosCategoria = document.getElementById("frutsecos-categoria");
const harinasCategoria = document.getElementById("harinas-categoria");
const cerealesCategoria = document.getElementById("cereales-categoria");

boton.addEventListener("click", function (e) {
    e.preventDefault();

    inicio.style.display = "none";
    nosotros.style.display = "none";
    contacto.style.display = "none";

    productos.style.display = "block";
});

/* ================= NAVEGACIÓN ================= */

function mostrarInicio() {

    inicio.style.display = "flex";
    nosotros.style.display = "none";
    contacto.style.display = "none";
    productos.style.display = "none";

    ocultarCategorias();
}

function mostrarProductos() {

    inicio.style.display = "none";
    nosotros.style.display = "none";
    contacto.style.display = "none";

    productos.style.display = "block";

    ocultarCategorias();
}

function mostrarNosotros() {

    inicio.style.display = "none";
    nosotros.style.display = "block";
    contacto.style.display = "none";
    productos.style.display = "none";

    ocultarCategorias();
}

function mostrarContacto() {

    inicio.style.display = "none";
    nosotros.style.display = "none";
    contacto.style.display = "block";
    productos.style.display = "none";

    ocultarCategorias();
}

/* ================= CATEGORÍAS ================= */

function abrirCategoria(id) {

    productos.style.display = "none";

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";
    frutsecosCategoria.style.display = "none";
    harinasCategoria.style.display = "none";
    cerealesCategoria.style.display = "none";

    document.getElementById(id).style.display = "block";
}

function volverCategorias() {

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";
    frutsecosCategoria.style.display = "none";
    harinasCategoria.style.display = "none";
    cerealesCategoria.style.display = "none";

    productos.style.display = "block";
}

function ocultarCategorias() {

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";
    frutsecosCategoria.style.display = "none";
    harinasCategoria.style.display = "none";
    cerealesCategoria.style.display = "none";
}

/* ================= PRODUCTOS EXPANDIR ================= */

function alternarProducto(tarjeta) {

    tarjeta.classList.toggle("abierta");

    const texto =
        tarjeta.querySelector(".abrir-info") ||
        tarjeta.querySelector(".abrir-info-frutos") ||
        tarjeta.querySelector(".abrir-info-harinas");

    if (!texto) return;

    if (tarjeta.classList.contains("abierta")) {
        texto.innerHTML = "▲ Ocultar información";
    } else {

        if (texto.classList.contains("abrir-info-frutos")) {
            texto.innerHTML = "✨ Descubrí sus propiedades";
        } else if (texto.classList.contains("abrir-info-harinas")) {
            texto.innerHTML = "🌾 Descubrí sus beneficios";
        } else {
            texto.innerHTML = "▼ Tocá para más información";
        }
    }
}

/* ================= MODAL BASE ================= */

const modalProducto = document.getElementById("modalProducto");
const cerrarModal = document.getElementById("cerrarModal");

const modalTitulo = document.getElementById("modalTitulo");
const modalBeneficios = document.getElementById("modalBeneficios");
const modalPreparacion = document.getElementById("modalPreparacion");
const modalIngredientes = document.getElementById("modalIngredientes");

cerrarModal.addEventListener("click", () => {
    modalProducto.style.display = "none";
});

modalProducto.addEventListener("click", (e) => {
    if (e.target === modalProducto) {
        modalProducto.style.display = "none";
    }
});

/* =========================================================
   CARRUSEL PREMEZCLAS (3)
========================================================= */

const imagenPremezcla = document.getElementById("imagenPremezcla");
const tituloPremezcla = document.getElementById("tituloPremezcla");

const imagenesPremezclas = [
    "img/harinas y premezcla/prem-pastas.png",
    "img/harinas y premezcla/prem-panqueso.png",
    "img/harinas y premezcla/prem-universal.png"
];

const titulosPremezclas = [
    "🍝 Premezcla con legumbres 350gr",
    "🧀 Premezcla con granos ancestrales 300gr",
    "🌾 Blend de harinas con legumbres y semillas 400gr"
];

const datosPremezclas = [
    {
        beneficios: "✔ Libre de gluten.<br>✔ Alto aporte de fibra.<br> ✔Proteína vegetal.<br>✔Menos carbohidratos.",
        preparacion: "➼ Usar como indica el paquete.",
        ingredientes: "🌱 Legumbres varias: Lentejas, garbanzos, porotos negros y arvejas"
    },
    {
        beneficios: "✔ Rica en minerales.<br>✔ Apto celíacos.<br>✔ Mayor contenido de fibra.",
        preparacion: "➼ Ideal para pan de queso.",
        ingredientes: "🌾 Quinoa, sarraceno y amaranto"
    },
    {
        beneficios: "✔ Uso universal.<br>✔ Versátil.<br> ✔Alto contenido de fibra.<br>✔ Bajo en grasas y sin sodio.",
        preparacion: "➼ Para panes y tortas.",
        ingredientes: "🌱 Mix de harinas, incluyendo legumbres"
    }
];

let indicePremezcla = 0;
window.addEventListener("DOMContentLoaded", function () {

    imagenPremezcla.src = imagenesPremezclas[indicePremezcla];
    tituloPremezcla.textContent = titulosPremezclas[indicePremezcla];

});

document.getElementById("siguientePremezcla").addEventListener("click", function () {

    indicePremezcla++;

    if (indicePremezcla >= imagenesPremezclas.length) {
        indicePremezcla = 0;
    }

    imagenPremezcla.src = imagenesPremezclas[indicePremezcla];
    tituloPremezcla.textContent = titulosPremezclas[indicePremezcla];
});

document.getElementById("anteriorPremezcla").addEventListener("click", function () {

    indicePremezcla--;

    if (indicePremezcla < 0) {
        indicePremezcla = imagenesPremezclas.length - 1;
    }

    imagenPremezcla.src = imagenesPremezclas[indicePremezcla];
    tituloPremezcla.textContent = titulosPremezclas[indicePremezcla];
});

imagenPremezcla.addEventListener("click", function () {

    modalProducto.style.display = "flex";

    modalTitulo.textContent = titulosPremezclas[indicePremezcla];
    modalBeneficios.innerHTML = datosPremezclas[indicePremezcla].beneficios;
    modalPreparacion.innerHTML = datosPremezclas[indicePremezcla].preparacion;
    modalIngredientes.innerHTML = datosPremezclas[indicePremezcla].ingredientes;
});

/* =========================================================
   CARRUSEL PREMIUM (4)
========================================================= */

const imagenPremium = document.getElementById("imagenPremium");
const tituloPremium = document.getElementById("tituloPremium");

const imagenesPremium = [
    "img/harinas y premezcla/prem.especial pastas.png",
    "img/harinas y premezcla/prem.especial pasteleria.png",
    "img/harinas y premezcla/prem.especial masa madre.png",
    "img/harinas y premezcla/prem.especial pizza.png"
];

const titulosPremium = [
    "🍝 Premezcla Pastas 1kg",
    "🎂 Premezcla Pastelería 1kg",
    "🍞 Premezcla Masa Madre 1kg",
    "🍕 Premezcla Pizza Napolitana 1kg"
];

const datosPremium = [
    {
        beneficios: "✔ Ideal para pastas.<br>✔ Proteica.",
        preparacion: "➼ Amasar y hervir.",
        ingredientes: "🌾 Harinas seleccionadas"
    },
    {
        beneficios: "✔ Esponjosa.<br>✔ Dulces.",
        preparacion: "➼ Hornear.",
        ingredientes: "🍬 Azúcar, harina"
    },
    {
        beneficios: "✔ Fermentación natural.",
        preparacion: "➼ Reposar 24h.",
        ingredientes: "🌱 Cultivos"
    },
    {
        beneficios: "✔ Pizza perfecta.",
        preparacion: "➼ Horno fuerte.",
        ingredientes: "🌾 Harina 0000"
    }
];

let indicePremium = 0;
window.addEventListener("DOMContentLoaded", function () {

    imagenPremium.src = imagenesPremium[indicePremium];
    tituloPremium.textContent = titulosPremium[indicePremium];

});

document.getElementById("siguientePremium").addEventListener("click", function () {

    indicePremium++;

    if (indicePremium >= imagenesPremium.length) {
        indicePremium = 0;
    }

    imagenPremium.src = imagenesPremium[indicePremium];
    tituloPremium.textContent = titulosPremium[indicePremium];
});

document.getElementById("anteriorPremium").addEventListener("click", function () {

    indicePremium--;

    if (indicePremium < 0) {
        indicePremium = imagenesPremium.length - 1;
    }

    imagenPremium.src = imagenesPremium[indicePremium];
    tituloPremium.textContent = titulosPremium[indicePremium];
});

imagenPremium.addEventListener("click", function () {

    modalProducto.style.display = "flex";

    modalTitulo.textContent = titulosPremium[indicePremium];
    modalBeneficios.innerHTML = datosPremium[indicePremium].beneficios;
    modalPreparacion.innerHTML = datosPremium[indicePremium].preparacion;
    modalIngredientes.innerHTML = datosPremium[indicePremium].ingredientes;
});

/* =========================================================
   CARRUSEL HARINAS FUNCIONALES CHACABUCO
========================================================= */

/* ================= IMÁGENES ================= */

const imagenesHarinas = [

    "img/harinas y premezcla/harina int.organica.png",

    "img/harinas y premezcla/harina trig.ancestral.png",

    "img/harinas y premezcla/harina int.legumbres.png",

    "img/harinas y premezcla/harina int.semillas.png"

];

/* ================= TÍTULOS ================= */

const titulosHarinas = [

    "🌾 Harina Integral de Trigo Orgánica",

    "🌾 Harina de Trigo + Granos Ancestrales",

    "🌾 Harina Integral de Trigo + Legumbres",

    "🌾 Harina Integral de Trigo + Semillas"

];

/* ================= DATOS MODAL ================= */

const datosHarinas = [

    {

        beneficios: `
        ✔ Harina integral orgánica.<br>
        ✔ Rica en fibra.<br>
        ✔ Ideal para panes y masas.
        `,

        preparacion: `
        ➼ Ideal para panificados, pizzas y masas caseras.<br><br>
        ➼ También para tortas y budines.
        `,

        ingredientes: `
        🌾 Trigo integral orgánico.
        `

    },

    {

        beneficios: `
        ✔ Mayor aporte nutricional.<br>
        ✔ Contiene granos ancestrales.<br>
        ✔ Excelente textura.
        `,

        preparacion: `
        ➼ Perfecta para panes, budines y masas.<br><br>
        ➼ Uso diario.
        `,

        ingredientes: `
        🌾 Trigo.<br>
        🌱 Quinoa.<br>
        🌱 Sarraceno.<br>
        🌱 Amaranto.
        `

    },

    {

        beneficios: `
        ✔ Más proteínas vegetales.<br>
        ✔ Rica en fibra.<br>
        ✔ Muy nutritiva.
        `,

        preparacion: `
        ➼ Ideal para panes, pizzas y masas caseras.
        `,

        ingredientes: `
        🌾 Trigo integral.<br>
        🌱 Garbanzos.<br>
        🌱 Lentejas.<br>
        🌱 Porotos.<br>
        🌱 Arvejas.
        `

    },

    {

        beneficios: `
        ✔ Fuente natural de semillas.<br>
        ✔ Excelente sabor.<br>
        ✔ Más fibra.
        `,

        preparacion: `
        ➼ Perfecta para panes, budines, galletitas y masas.
        `,

        ingredientes: `
        🌾 Trigo integral.<br>
        🌱 Lino.<br>
        🌱 Chía.<br>
        🌱 Amaranto.
        `

    }

];

/* ================= ELEMENTOS ================= */

const imagenHarinas = document.getElementById("imagenHarinas");

const tituloHarinas = document.getElementById("tituloHarinas");

let indiceHarinas = 0;

/* ================= CARGAR PRIMERA ================= */

window.addEventListener("DOMContentLoaded", function () {

    imagenHarinas.src = imagenesHarinas[indiceHarinas];

    tituloHarinas.textContent = titulosHarinas[indiceHarinas];

});

/* ================= SIGUIENTE ================= */

document.getElementById("siguienteHarinas").addEventListener("click", function () {

    indiceHarinas++;

    if(indiceHarinas >= imagenesHarinas.length){

        indiceHarinas = 0;

    }

    imagenHarinas.src = imagenesHarinas[indiceHarinas];

    tituloHarinas.textContent = titulosHarinas[indiceHarinas];

});

/* ================= ANTERIOR ================= */

document.getElementById("anteriorHarinas").addEventListener("click", function () {

    indiceHarinas--;

    if(indiceHarinas < 0){

        indiceHarinas = imagenesHarinas.length - 1;

    }

    imagenHarinas.src = imagenesHarinas[indiceHarinas];

    tituloHarinas.textContent = titulosHarinas[indiceHarinas];

});

/* ================= MODAL ================= */

imagenHarinas.addEventListener("click", function () {

    modalProducto.style.display = "flex";

    modalTitulo.textContent = titulosHarinas[indiceHarinas];

    modalBeneficios.innerHTML = datosHarinas[indiceHarinas].beneficios;

    modalPreparacion.innerHTML = datosHarinas[indiceHarinas].preparacion;

    modalIngredientes.innerHTML = datosHarinas[indiceHarinas].ingredientes;

});