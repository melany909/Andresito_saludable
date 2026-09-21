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
const semillasCategoria = document.getElementById("semillas-categoria");
const congeladosCategoria = document.getElementById("congelados-categoria");
const aceitesCategoria = document.getElementById("aceites-categoria");
const legumbresCategoria = document.getElementById("legumbres-categoria");
const despensaCategoria = document.getElementById("despensa-categoria");




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

    productos.classList.remove("seccion-animada");
    void productos.offsetWidth;
    productos.classList.add("seccion-animada");

    ocultarCategorias();
}

function mostrarNosotros() {

    inicio.style.display = "none";
    nosotros.style.display = "block";
    contacto.style.display = "none";
    productos.style.display = "none";

    nosotros.classList.remove("seccion-animada");
    void nosotros.offsetWidth;
    nosotros.classList.add("seccion-animada");

    ocultarCategorias();
}

function mostrarContacto() {

    inicio.style.display = "none";
    nosotros.style.display = "none";
    contacto.style.display = "block";
    productos.style.display = "none";

    contacto.classList.remove("seccion-animada");
    void contacto.offsetWidth;
    contacto.classList.add("seccion-animada");

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
    semillasCategoria.style.display = "none";
    congeladosCategoria.style.display = "none";
    aceitesCategoria.style.display = "none";
    legumbresCategoria.style.display = "none";
    despensaCategoria.style.display = "none";



    document.getElementById(id).style.display = "block";
}



function volverCategorias() {

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";
    frutsecosCategoria.style.display = "none";
    harinasCategoria.style.display = "none";
    cerealesCategoria.style.display = "none";
    semillasCategoria.style.display = "none";
    congeladosCategoria.style.display = "none";
    aceitesCategoria.style.display = "none";
    legumbresCategoria.style.display = "none";
    despensaCategoria.style.display = "none";


    

    productos.style.display = "block";
}

function ocultarCategorias() {

    productosCategoria.style.display = "none";
    hierbasCategoria.style.display = "none";
    frutsecosCategoria.style.display = "none";
    harinasCategoria.style.display = "none";
    cerealesCategoria.style.display = "none";
    semillasCategoria.style.display = "none";
    congeladosCategoria.style.display = "none";
    aceitesCategoria.style.display = "none";
    legumbresCategoria.style.display = "none";
    despensaCategoria.style.display = "none";


   
    
}

/* ================= PRODUCTOS EXPANDIR ================= */

function alternarProducto(tarjeta) {

    tarjeta.classList.toggle("abierta");

    const texto =
        tarjeta.querySelector(".abrir-info") ||
        tarjeta.querySelector(".abrir-info-frutos") ||
        tarjeta.querySelector(".abrir-info-harinas") ||
        tarjeta.querySelector(".ver-info-semillas");

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

/* ==================================================
       PESTAÑAS BENEFICIOS / CONSUMO
================================================== */

document.addEventListener("DOMContentLoaded", function () {

    const tarjetas = document.querySelectorAll(".producto-card");

    tarjetas.forEach(function (tarjeta) {

        const contenido = tarjeta.querySelector(".contenido-producto");

        if (!contenido) return;


        /* Buscar la lista de beneficios */

        const beneficios = contenido.querySelector("ul");
        const precios = contenido.querySelector(".precios");


        /* Buscar cualquier tipo de consumo */

        const consumo = contenido.querySelector(`
            .consumo,
            .consumo-hierbas,
            .consumo-frutos,
            .consumo-cereales,
            .consumo-harinas,
            .consumo-semillas,
            .consumo-congelados,
            .consumo-legumbres,
            .consumo-despensa
        `);


        /* Si no tiene beneficios o consumo,
           dejamos esa tarjeta como está */

        if (!beneficios || !consumo) return;


        /* Crear las pestañas */

        const pestañas = document.createElement("div");

        pestañas.className = "pestanas-producto";

        pestañas.innerHTML = `
            <button
                type="button"
                class="pestana-producto activa"
                data-pestana="beneficios">
                🌿 Beneficios
            </button>

            <button
                type="button"
                class="pestana-producto"
                data-pestana="consumo">
                🍽️ Consumo
            </button>
        `;


        /* Colocarlas antes de los beneficios */

        contenido.insertBefore(pestañas, beneficios);

        /* Mover los precios al final de la información */
        if (precios) {
            contenido.appendChild(precios);
}


        /* Al principio mostramos beneficios */

        beneficios.classList.add("panel-beneficios");
        consumo.classList.add("panel-consumo");

        consumo.style.display = "none";


        /* Funcionamiento de botones */

        const botones =
            pestañas.querySelectorAll(".pestana-producto");


        botones.forEach(function (boton) {

            boton.addEventListener("click", function (event) {

                /* Evita que el clic cierre la tarjeta */

                event.stopPropagation();


                botones.forEach(function (btn) {
                    btn.classList.remove("activa");
                });


                boton.classList.add("activa");


                if (boton.dataset.pestana === "beneficios") {

                    beneficios.style.display = "";
                    consumo.style.display = "none";

                } else {

                    beneficios.style.display = "none";
                    consumo.style.display = "block";

                }

            });

        });

    });

});

/* ================= MODAL BASE ================= */

const modalProducto = document.getElementById("modalProducto");
const cerrarModal = document.getElementById("cerrarModal");

const modalTitulo = document.getElementById("modalTitulo");
const modalBeneficios = document.getElementById("modalBeneficios");
const modalPreparacion = document.getElementById("modalPreparacion");
const modalIngredientes = document.getElementById("modalIngredientes");

const modalPrecio = document.getElementById("modalPrecio");
const modalEstado = document.getElementById("modalEstado");

cerrarModal.addEventListener("click", () => {
    modalProducto.style.display = "none";
});

modalProducto.addEventListener("click", (e) => {
    if (e.target === modalProducto) {
        modalProducto.style.display = "none";
    }
});



/* =========================================================
   CARRUSEL DELICEL
========================================================= */

/*
    Todos los productos Delicel están guardados acá.
    Para agregar otro producto en el futuro,
    solamente agregamos otro objeto al array.
*/

const productosDelicel = [

    {
        nombre: "Premezcla para pan casero",
        imagen: "img/harinas y premezcla/premezcla para pan casero delicel.png",
        peso: "500 g",
        precio: 0,
        estado: "Disponible",
        descripcion: "Ideal para preparar panes caseros de manera práctica."
    },

    {
        nombre: "Premezcla para pizza",
        imagen: "img/harinas y premezcla/premezcla para pizza delicel.png",
        peso: "500 g",
        precio: 0,
        estado: "Disponible",
        descripcion: "Ideal para preparar pizzas caseras."
    },

    {
        nombre: "Premezcla universal",
        imagen: "img/harinas y premezcla/premezcla universal delicel.webp",
        peso: "500 g",
        precio: 0,
        estado: "Disponible",
        descripcion: "Una opción versátil para preparaciones de panadería, repostería y pastas."
    },

    {
        nombre: "Bizcochuelo de chocolate",
        imagen: "img/harinas y premezcla/premezcla bizcochuelo de chocolate delicel.jpg",
        peso: "500 g",
        precio: 0,
        estado: "Disponible",
        descripcion: "Ideal para preparar bizcochuelos de chocolate."
    },

    {
        nombre: "Bizcochuelo de vainilla",
        imagen: "img/harinas y premezcla/premezcla biszcochuelo de vainilla delicel.webp",
        peso: "500 g",
        precio: 0, 
        estado: "Disponible",
        descripcion: "Ideal para preparar bizcochuelos de vainilla."
    },

    {
        nombre: "Rebozador",
        imagen: "img/harinas y premezcla/rebozador delicel.webp",
        peso: "500 g",
        precio: 0,
        estado: "Disponible",
         descripcion: "Ideal para utilizar en preparaciones horneadas o fritas."
    },

    {
        nombre: "Premezcla para pan integral",
        imagen: "img/harinas y premezcla/premezcla para pan integral delicel.png",
        peso: "500 g",
        precio: 0,
        estado: "Disponible",
        descripcion: "Ideal para preparar pan integral de manera práctica."
    },

    {
        nombre: "Premezcla para ñoquis de papa",
        imagen: "img/harinas y premezcla/premezcla para ñoquis delicel.webp",
        peso: "500 g",
        precio: 0,
        estado: "Disponible",
        descripcion: "Ideal para preparar ñoquis de papa."
    }

];


/* =========================================================
   ELEMENTOS DEL CARRUSEL
========================================================= */

const imagenDelicel = document.getElementById("imagenDelicel");
const tituloDelicel = document.getElementById("tituloDelicel");
const pesoDelicel = document.getElementById("pesoDelicel");
const contadorDelicel = document.getElementById("contadorDelicel");

const anteriorDelicel = document.getElementById("anteriorDelicel");
const siguienteDelicel = document.getElementById("siguienteDelicel");
const precioDelicel = document.getElementById("precioDelicel");
const estadoDelicel = document.getElementById("estadoDelicel");


/* Producto que estamos viendo actualmente */

let indiceDelicel = 0;


/* =========================================================
   ACTUALIZAR PRODUCTO
========================================================= */

function actualizarDelicel() {

    const producto = productosDelicel[indiceDelicel];

    /* Cambiamos imagen */
    imagenDelicel.src = producto.imagen;

    /* Cambiamos texto alternativo de la imagen */
    imagenDelicel.alt = producto.nombre + " Delicel";

    /* Cambiamos nombre */
    tituloDelicel.textContent = producto.nombre;

    /* Cambiamos presentación */
    pesoDelicel.textContent = producto.peso;

    precioDelicel.textContent =
    "$" + producto.precio.toLocaleString("es-AR");

    /* Actualizamos contador: 1 / 8, 2 / 8, etc. */
    contadorDelicel.textContent =
        (indiceDelicel + 1) + " / " + productosDelicel.length;

        /* Actualizamos el estado */

if (producto.estado === "Disponible") {

    estadoDelicel.textContent = "🟢 Disponible";
    estadoDelicel.className = "estado-imagen disponible";

} else {

    estadoDelicel.textContent = "🔴 Agotado";
    estadoDelicel.className = "estado-imagen agotado";

}
}


/* =========================================================
   FLECHA SIGUIENTE
========================================================= */

siguienteDelicel.addEventListener("click", function () {

    indiceDelicel++;

    /* Si llegamos al final, volvemos al primero */
    if (indiceDelicel >= productosDelicel.length) {
        indiceDelicel = 0;
    }

    actualizarDelicel();

});


/* =========================================================
   FLECHA ANTERIOR
========================================================= */

anteriorDelicel.addEventListener("click", function () {

    indiceDelicel--;

    /* Si estamos en el primero, vamos al último */
    if (indiceDelicel < 0) {
        indiceDelicel = productosDelicel.length - 1;
    }

    actualizarDelicel();

});


/* =========================================================
   MOSTRAR PRIMER PRODUCTO AL CARGAR
========================================================= */

actualizarDelicel();

/* =========================================================
   MODAL DELICEL
========================================================= */

const verInfoDelicel = document.getElementById("verInfoDelicel");

const modalDelicel = document.getElementById("modalDelicel");
const cerrarModalDelicel = document.getElementById("cerrarModalDelicel");

const modalDelicelTitulo = document.getElementById("modalDelicelTitulo");
const modalDelicelImagen = document.getElementById("modalDelicelImagen");
const modalDelicelPeso = document.getElementById("modalDelicelPeso");
const modalDelicelDescripcion = document.getElementById("modalDelicelDescripcion");
const modalDelicelEstado = document.getElementById("modalDelicelEstado");
const modalDelicelPrecio = document.getElementById("modalDelicelPrecio");


/* =========================================================
   ABRIR MODAL
========================================================= */

verInfoDelicel.addEventListener("click", function () {

    const producto = productosDelicel[indiceDelicel];


    /* NOMBRE */

    modalDelicelTitulo.textContent = producto.nombre;


    /* IMAGEN */

    modalDelicelImagen.src = producto.imagen;
    modalDelicelImagen.alt = producto.nombre + " Delicel";


    /* PRESENTACIÓN */

    modalDelicelPeso.textContent = producto.peso;


    /* DESCRIPCIÓN */

    modalDelicelDescripcion.textContent = producto.descripcion;


    /* PRECIO */

    modalDelicelPrecio.textContent =
        "$" + producto.precio.toLocaleString("es-AR");


    /* ESTADO */

    if (producto.estado === "Disponible") {

        modalDelicelEstado.textContent = "🟢 Disponible";
        modalDelicelEstado.className = "estado-imagen disponible";

    } else {

        modalDelicelEstado.textContent = "🔴 Agotado";
        modalDelicelEstado.className = "estado-imagen agotado";

    }


    /* MOSTRAR MODAL */

    modalDelicel.style.display = "flex";

});


/* =========================================================
   CERRAR CON LA X
========================================================= */

cerrarModalDelicel.addEventListener("click", function () {

    modalDelicel.style.display = "none";

});


/* =========================================================
   CERRAR TOCANDO FUERA DE LA CAJA
========================================================= */

modalDelicel.addEventListener("click", function (e) {

    if (e.target === modalDelicel) {

        modalDelicel.style.display = "none";

    }

});


/* =========================================================
   CARRUSEL GLUTAL
========================================================= */

const productosGlutal = [

    {
        nombre: "Harina de Arroz",
        imagen: "img/harinas y premezcla/harina de arroz glutal.png",
        peso: "1 kg",
        precio: 0,
        estado: "Disponible",
        descripcion: "Ideal para elaborar panificados y distintas recetas."
    },

    {
        nombre: "Premezcla para Panificados",
        imagen: "img/harinas y premezcla/premezcla para panificados glutal.png",
        peso: "1 kg",
        precio: 0,
        estado: "Disponible",
        descripcion: "Premezcla especialmente pensada para elaborar panificados."
    },

    {
        nombre: "Fécula de Mandioca",
        imagen: "img/harinas y premezcla/fecula de mandioca glutal.png",
        peso: "1 kg",
        precio: 0,
        estado: "Disponible",
        descripcion: "Ideal para utilizar en la elaboración de panificados."
    }

];

/* =========================================================
   ELEMENTOS DEL CARRUSEL GLUTAL
========================================================= */

const imagenGlutal = document.getElementById("imagenGlutal");
const tituloGlutal = document.getElementById("tituloGlutal");
const pesoGlutal = document.getElementById("pesoGlutal");
const contadorGlutal = document.getElementById("contadorGlutal");

const precioGlutal = document.getElementById("precioGlutal");
const estadoGlutal = document.getElementById("estadoGlutal");

const anteriorGlutal = document.getElementById("anteriorGlutal");
const siguienteGlutal = document.getElementById("siguienteGlutal");


/* Producto que estamos viendo */

let indiceGlutal = 0;

/* =========================================================
   ACTUALIZAR PRODUCTO GLUTAL
========================================================= */

function actualizarGlutal() {

    const producto = productosGlutal[indiceGlutal];


    /* IMAGEN */

    imagenGlutal.src = producto.imagen;
    imagenGlutal.alt = producto.nombre + " Glutal";


    /* NOMBRE */

    tituloGlutal.textContent = producto.nombre;


    /* PESO */

    pesoGlutal.textContent = producto.peso;


    /* PRECIO */

    precioGlutal.textContent =
        "$" + producto.precio.toLocaleString("es-AR");


    /* ESTADO */

    if (producto.estado === "Disponible") {

        estadoGlutal.textContent = "🟢 Disponible";
        estadoGlutal.className = "estado-imagen disponible";

    } else {

        estadoGlutal.textContent = "🔴 Agotado";
        estadoGlutal.className = "estado-imagen agotado";

    }


    /* CONTADOR */

    contadorGlutal.textContent =
        (indiceGlutal + 1) + " / " + productosGlutal.length;

}


/* =========================================================
   FLECHA SIGUIENTE GLUTAL
========================================================= */

siguienteGlutal.addEventListener("click", function () {

    indiceGlutal++;

    /* Si llegamos al último, volvemos al primero */

    if (indiceGlutal >= productosGlutal.length) {
        indiceGlutal = 0;
    }

    actualizarGlutal();

});


/* =========================================================
   FLECHA ANTERIOR GLUTAL
========================================================= */

anteriorGlutal.addEventListener("click", function () {

    indiceGlutal--;

    /* Si retrocedemos desde el primero, vamos al último */

    if (indiceGlutal < 0) {
        indiceGlutal = productosGlutal.length - 1;
    }

    actualizarGlutal();

});


/* Mostrar el primer producto */

actualizarGlutal();


/* =========================================================
   MODAL GLUTAL
========================================================= */

const verInfoGlutal = document.getElementById("verInfoGlutal");

const modalGlutal = document.getElementById("modalGlutal");
const cerrarModalGlutal = document.getElementById("cerrarModalGlutal");

const modalGlutalTitulo = document.getElementById("modalGlutalTitulo");
const modalGlutalImagen = document.getElementById("modalGlutalImagen");
const modalGlutalPeso = document.getElementById("modalGlutalPeso");
const modalGlutalDescripcion = document.getElementById("modalGlutalDescripcion");
const modalGlutalEstado = document.getElementById("modalGlutalEstado");
const modalGlutalPrecio = document.getElementById("modalGlutalPrecio");


/* =========================================================
   ABRIR MODAL GLUTAL
========================================================= */

verInfoGlutal.addEventListener("click", function () {

    const producto = productosGlutal[indiceGlutal];


    /* NOMBRE */

    modalGlutalTitulo.textContent = producto.nombre;


    /* IMAGEN */

    modalGlutalImagen.src = producto.imagen;
    modalGlutalImagen.alt = producto.nombre + " Glutal";


    /* PESO */

    modalGlutalPeso.textContent = producto.peso;


    /* DESCRIPCIÓN */

    modalGlutalDescripcion.textContent = producto.descripcion;


    /* PRECIO */

    modalGlutalPrecio.textContent =
        "$" + producto.precio.toLocaleString("es-AR");


    /* ESTADO */

    if (producto.estado === "Disponible") {

        modalGlutalEstado.textContent = "🟢 Disponible";
        modalGlutalEstado.className = "estado-imagen disponible";

    } else {

        modalGlutalEstado.textContent = "🔴 Agotado";
        modalGlutalEstado.className = "estado-imagen agotado";

    }


    /* MOSTRAR MODAL */

    modalGlutal.style.display = "flex";

});


/* =========================================================
   CERRAR MODAL CON LA X
========================================================= */

cerrarModalGlutal.addEventListener("click", function () {

    modalGlutal.style.display = "none";

});


/* =========================================================
   CERRAR TOCANDO FUERA
========================================================= */

modalGlutal.addEventListener("click", function (e) {

    if (e.target === modalGlutal) {

        modalGlutal.style.display = "none";

    }

});

/* =========================================================
   CARRUSEL PREMEZCLAS (3)
========================================================= */

const imagenPremezcla = document.getElementById("imagenPremezcla");
const tituloPremezcla = document.getElementById("tituloPremezcla");


function actualizarPremezcla() {

    imagenPremezcla.src = imagenesPremezclas[indicePremezcla];

    tituloPremezcla.textContent = titulosPremezclas[indicePremezcla];

    const estado = document.getElementById("estadoPremezcla");
    const precio = document.getElementById("precioPremezcla");

    if (datosPremezclas[indicePremezcla].estado == "Disponible") {

        estado.innerHTML = "🟢 Disponible";
        estado.className = "estado-imagen disponible";

    } else {

        estado.innerHTML = "🔴 Agotado";
        estado.className = "estado-imagen agotado";

    }

    // ← ESTA LÍNEA TE FALTA
    precio.innerHTML = datosPremezclas[indicePremezcla].precio;

}

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
        ingredientes: "🌱 Legumbres varias: Lentejas, garbanzos, porotos negros y arvejas",
        precio: "$3.400",
        estado: "Disponible"
                
    },


    {
        beneficios: "✔ Rica en minerales.<br>✔ Apto celíacos.<br>✔ Mayor contenido de fibra.",
        preparacion: "➼ Ideal para pan de queso.",
        ingredientes: "🌾 Quinoa, sarraceno y amaranto",
        precio: "$3.800",
        estado: "Disponible"
    
    },


    {  

        beneficios: "✔ Uso universal.<br>✔ Versátil.<br> ✔Alto contenido de fibra.<br>✔ Bajo en grasas y sin sodio.",
        preparacion: "➼ Para panes y tortas.",
        ingredientes: "🌱 Mix de harinas, incluyendo legumbres",
        precio: "$4.000",
        estado: "Disponible"
    
    }
];

let indicePremezcla = 0;
    window.addEventListener("DOMContentLoaded", function () {

    actualizarPremezcla();

});


document.getElementById("siguientePremezcla").addEventListener("click", function () {

    indicePremezcla++;

    if (indicePremezcla >= imagenesPremezclas.length) {
        indicePremezcla = 0;
    }

   actualizarPremezcla();
});

document.getElementById("anteriorPremezcla").addEventListener("click", function () {

    indicePremezcla--;

    if (indicePremezcla < 0) {
        indicePremezcla = imagenesPremezclas.length - 1;
    }

    actualizarPremezcla();
});

imagenPremezcla.addEventListener("click", function () {

    modalProducto.style.display = "flex";

    modalTitulo.textContent = titulosPremezclas[indicePremezcla];
    modalBeneficios.innerHTML = datosPremezclas[indicePremezcla].beneficios;
    modalPreparacion.innerHTML = datosPremezclas[indicePremezcla].preparacion;
    modalIngredientes.innerHTML = datosPremezclas[indicePremezcla].ingredientes;

    modalPrecio.innerHTML = datosPremezclas[indicePremezcla].precio;

    if (datosPremezclas[indicePremezcla].estado == "Disponible") {

        modalEstado.innerHTML = "🟢 Disponible";
        modalEstado.className = "estado-producto disponible";

    } else {

        modalEstado.innerHTML = "🔴 Agotado";
        modalEstado.className = "estado-producto agotado";

    }

});



/* =========================================================
   CARRUSEL PREMIUM (4)
========================================================= */

const imagenPremium = document.getElementById("imagenPremium");
const tituloPremium = document.getElementById("tituloPremium");

function actualizarPremium() {

    imagenPremium.src = imagenesPremium[indicePremium];

    tituloPremium.textContent = titulosPremium[indicePremium];

    const estado = document.getElementById("estadoPremium");

    const precio = document.getElementById("precioPremium");

    if (datosPremium[indicePremium].estado == "Disponible") {

        estado.innerHTML = "🟢 Disponible";
        estado.className = "estado-imagen disponible";
    } else {

        estado.innerHTML = "🔴 Agotado";
        estado.className = "estado-imagen agotado";

    }

    precio.innerHTML = datosPremium[indicePremium].precio;

}

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
        ingredientes: "🌾 Harinas seleccionadas",
        precio: "$1.800",
        estado: "Disponible"
    },
    {
        beneficios: "✔ Esponjosa.<br>✔ Dulces.",
        preparacion: "➼ Hornear.",
        ingredientes: "🍬 Azúcar, harina",
        precio: "$1.900",
        estado:"Disponible"
    },
    {
        beneficios: "✔ Fermentación natural.",
        preparacion: "➼ Reposar 24h.",
        ingredientes: "🌱 Cultivos",
        precio: "$2.200",
        estado: "Disponible"
    },
    {
        beneficios: "✔ Pizza perfecta.",
        preparacion: "➼ Horno fuerte.",
        ingredientes: "🌾 Harina 0000",
        precio: "$3.500",
        estado: "Disponible"
    }
];

let indicePremium = 0;
window.addEventListener("DOMContentLoaded", function () {

    actualizarPremium();

});

document.getElementById("siguientePremium").addEventListener("click", function () {

    indicePremium++;

    if (indicePremium >= imagenesPremium.length) {
        indicePremium = 0;
    }

    actualizarPremium();
});

document.getElementById("anteriorPremium").addEventListener("click", function () {

    indicePremium--;

    if (indicePremium < 0) {
        indicePremium = imagenesPremium.length - 1;
    }

    actualizarPremium();
});

imagenPremium.addEventListener("click", function () {

    modalProducto.style.display = "flex";

    modalTitulo.textContent = titulosPremium[indicePremium];
    modalBeneficios.innerHTML = datosPremium[indicePremium].beneficios;
    modalPreparacion.innerHTML = datosPremium[indicePremium].preparacion;
    modalIngredientes.innerHTML = datosPremium[indicePremium].ingredientes;

    modalPrecio.innerHTML = datosPremium[indicePremium].precio;

if (datosPremium[indicePremium].estado == "Disponible") {

    modalEstado.innerHTML = "🟢 Disponible";
    modalEstado.className = "estado-producto disponible";

} else {

    modalEstado.innerHTML = "🔴 Agotado";
    modalEstado.className = "estado-producto agotado";

}
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
        `,

        precio: "$3.200",
        estado: "Disponible"

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
        `,
        precio:"$3.000",
        estado: "Disponible"

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
        `,

        precio:"$2.500",
        estado: "Disponible"

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
        `,

        precio: "$2.600",
        estado: "Disponible"

    }

];

/* ================= ELEMENTOS ================= */

const imagenHarinas = document.getElementById("imagenHarinas");
const tituloHarinas = document.getElementById("tituloHarinas");

function actualizarHarinas() {

    imagenHarinas.src = imagenesHarinas[indiceHarinas];
    tituloHarinas.textContent = titulosHarinas[indiceHarinas];

    const estado = document.getElementById("estadoHarinas");
    const precio = document.getElementById("precioHarinas");

    if (datosHarinas[indiceHarinas].estado == "Disponible") {

        estado.innerHTML = "🟢 Disponible";
        estado.className = "estado-imagen disponible";

    } else {

        estado.innerHTML = "🔴 Agotado";
        estado.className = "estado-imagen agotado";

    }

    precio.innerHTML = datosHarinas[indiceHarinas].precio;

}

let indiceHarinas = 0;

/* ================= CARGAR PRIMERA ================= */

window.addEventListener("DOMContentLoaded", function () {

    actualizarHarinas();

});

/* ================= SIGUIENTE ================= */

document.getElementById("siguienteHarinas").addEventListener("click", function () {

    indiceHarinas++;

    if (indiceHarinas >= imagenesHarinas.length) {

        indiceHarinas = 0;

    }

    actualizarHarinas();

});

/* ================= ANTERIOR ================= */

document.getElementById("anteriorHarinas").addEventListener("click", function () {

    indiceHarinas--;

    if (indiceHarinas < 0) {

        indiceHarinas = imagenesHarinas.length - 1;

    }

    actualizarHarinas();

});

/* ================= MODAL ================= */

imagenHarinas.addEventListener("click", function () {

    modalProducto.style.display = "flex";

    modalTitulo.textContent = titulosHarinas[indiceHarinas];
    modalBeneficios.innerHTML = datosHarinas[indiceHarinas].beneficios;
    modalPreparacion.innerHTML = datosHarinas[indiceHarinas].preparacion;
    modalIngredientes.innerHTML = datosHarinas[indiceHarinas].ingredientes;

});