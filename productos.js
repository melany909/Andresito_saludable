// Cargar productos desde productos.json

let listaProductos = [];

fetch("productos.json")
    .then(respuesta => respuesta.json())
    .then(datos => {

        listaProductos = datos;

cargarProducto("chía");
cargarProducto("linaza");
cargarProducto("Girasol");
cargarProducto("Calabaza");
cargarProducto("Sésamo blanco");
cargarProducto("Sésamo integral");
cargarProducto("Sésamo negro");
cargarProducto("Zaragatona psyllium");
cargarProducto("Quinoa");
cargarProducto("Amaranto");
cargarProducto("Mijo");
cargarProducto("Amapola");
cargarProducto("Canela en polvo");
cargarProducto("Canela en rama");
cargarProducto("Canela quebrada");
cargarProducto("Clavo de olor");
cargarProducto("Clavo de olor en polvo");
cargarProducto("Anís estrellado");
cargarProducto("Anís estrellado en tallo");
cargarProducto("Cúrcuma en polvo");
cargarProducto("Jengibre en polvo");
cargarProducto("Pimienta negra");
cargarProducto("Chimichurri");
cargarProducto("Provenzal");
cargarProducto("Orégano");
cargarProducto("Perejil");
cargarProducto("Adobo para pizza");
cargarProducto("Mostaza");
cargarProducto("Ajo deshidratado");
cargarProducto("Frutilla Entera");
cargarProducto("Ajo en polvo");
cargarProducto("Pimentón");
cargarProducto("Pulpa Frutilla");
cargarProducto("Arándanos");
cargarProducto("Mix frutos rojos");
cargarProducto("Maracuyá con semillas");
cargarProducto("Maracuyá sin semillas");
cargarProducto("Ananá en cubos");
cargarProducto("Açaí");
cargarProducto("Glicinato de magnesio");
cargarProducto("Golden Mix");
cargarProducto("Golden Milk");
cargarProducto("Hibiscus Complex");
cargarProducto("Triple maca vigorizante");
cargarProducto("Semillas de palta en polvo");
cargarProducto("Clorofila");
cargarProducto("Vinagre de Manzana");
cargarProducto("Vinagre de sidra de manzana en capsulas");
cargarProducto("Jugo de aloe vera sistema digestivo");
cargarProducto("Omega-3 vegetal");
cargarProducto("Aceite de prímula");
cargarProducto("jugo de aloe vera máximas defensas");
cargarProducto("Centella asiática");
cargarProducto("Hierro quelado");
cargarProducto("Creatina Dark Lab");
cargarProducto("Jugo de uva tinto");
cargarProducto("Tintura madre melissa");
cargarProducto("Tintura madre fucus");
cargarProducto("Tintura madre garcinia cambogia");
cargarProducto("Tintura madre ortiga");
cargarProducto("Tintura madre sen hojas");
cargarProducto("Tintura madre cardo mariano");
cargarProducto("Tintura madre valeriana");
cargarProducto("Tintura madre pasionaria");
cargarProducto("Caldo de huesos vacuno");
cargarProducto("Cáscara de huevo");
cargarProducto("Caldo de huesos marino");
cargarProducto("Aceite de romero");
cargarProducto("Aceite de orégano");
cargarProducto("Aceite de CBD bioactiva");
cargarProducto("Zeolita extracto líquido");
cargarProducto("Lax fibras");
cargarProducto("Manzanilla");
cargarProducto("Cola de quirquincho");
cargarProducto("Flor de jamaica");
cargarProducto("Menta");
cargarProducto("Laurel");
cargarProducto("Tomillo");
cargarProducto("Zarza");
cargarProducto("Peperina");
cargarProducto("Burrito");
cargarProducto("Moringa");
cargarProducto("Valeriana");
cargarProducto("Stevia");
cargarProducto("Boldo");
cargarProducto("Graviola");
cargarProducto("Palta anisada");
cargarProducto("Ruda");
cargarProducto("Lapacho");
cargarProducto("Amargón-diente de león");
cargarProducto("Carqueja");
cargarProducto("Pasionaria");
cargarProducto("Alcachofa");
cargarProducto("Melisa");
cargarProducto("Cola de caballo");
cargarProducto("Yerba de pollo");
cargarProducto("Salvia");
cargarProducto("Eucalipto");
cargarProducto("Ambay");
cargarProducto("Cedrón");
cargarProducto("Almendras");
cargarProducto("Nueces");
cargarProducto("Pistacho");
cargarProducto("Damasco");
cargarProducto("Maní sin sal");
cargarProducto("Maní con sal");
cargarProducto("Maní saborizado");
cargarProducto("Pasas morochas");
cargarProducto("Pasas de uva rubias");
cargarProducto("Arándano seco");
cargarProducto("Dátiles");
cargarProducto("Higos negros");
cargarProducto("Coco rallado");
cargarProducto("Coco en escamas");
cargarProducto("Aceite de coco neutro");
cargarProducto("Aceite de coco virgen");
cargarProducto("Leche de coco en polvo");
cargarProducto("Bastón de salvado");
cargarProducto("Tutuca");
cargarProducto("Almohaditas rellenas");
cargarProducto("Bastón de salvado");
cargarProducto("Quinoa pop");
cargarProducto("Bolitas de chocolate");
cargarProducto("Copos de maíz sin azúcar");
cargarProducto("Copos de maís con azúcar");
cargarProducto("Cereal de arroz");
cargarProducto("Cereal multisemillas");
cargarProducto("Ositos de avena y miel");
cargarProducto("Trigo inflado dulce");
cargarProducto("Granola tradicional");
cargarProducto("Granola energética");
cargarProducto("Granola cocada");
cargarProducto("Granola base");
cargarProducto("Harina de pistacho");
cargarProducto("Harina de arroz");
cargarProducto("Harina de coco");
cargarProducto("Harina de maíz");
cargarProducto("Harina de almendras");
cargarProducto("Harina de arveja");
cargarProducto("Harina de lino molido");
cargarProducto("Harina de sésamo");
cargarProducto("Harina de avena");
cargarProducto("Harina integral sarraceno");
cargarProducto("Harina de algarroba");





















function cargarProducto(nombreProducto) {

    const producto = listaProductos.find(p =>
        p.nombre.toLowerCase() === nombreProducto.toLowerCase()
    );

    if (!producto) return;

    /*================ ESTADO ================*/

    const estado = document.getElementById("estado-" + nombreProducto);

    if (estado) {

        if (producto.estado.toLowerCase() === "disponible") {

            estado.innerHTML = "🟢 Disponible";
            estado.className = "estado-imagen disponible";

        } else {

            estado.innerHTML = "🔴 Agotado";
            estado.className = "estado-imagen agotado";

        }

    }

    /*================ PRECIOS ================*/

    const precios = document.getElementById("precios-" + nombreProducto);

    if (!precios) return;

    let html = "";

    const presentaciones = [
        ["20 g", producto.precio20],
        ["30 g", producto.precio30],
        ["50 g", producto.precio50],
        ["100 g", producto.precio100],
        ["150 g", producto.precio150],
        ["200 g", producto.precio200],
        ["250 g", producto.precio250],
        ["500 g", producto.precio500],
        ["1 kg", producto.precio1000]
    ];

    presentaciones.forEach(([nombre, precio]) => {

        if (precio > 0) {

            html += `
<p>
    <span>${nombre}</span>
    <span class="linea-precio"></span>
    <span>$${precio}</span>
</p>`;

        }

    });

    if (producto.sabores && producto.sabores.length > 0) {

    producto.sabores.forEach(sabor => {

        html += `
<p>
    <span>${sabor.nombre} (${sabor.peso})</span>
    <span class="linea-precio"></span>
    <span>$${sabor.precio}</span>
</p>`;

    });

}

// Si no tiene presentaciones ni sabores, usa un solo precio

else if (html === "" && producto.precio > 0) {

    html = `
<p>
    <span>Precio</span>
    <span class="linea-precio"></span>
    <span>$${producto.precio}</span>
</p>`;

}

    precios.innerHTML = html;

}
                
precios.innerHTML = html;
            }
        

    )

    .catch(error => {

    console.error("Error al cargar productos:", error);

});

/*================ BUSCADOR DE CATEGORÍAS ================*/

function crearBuscador(idInput, idCategoria) {

    const input = document.getElementById(idInput);
    const categoria = document.getElementById(idCategoria);

    if (!input || !categoria) return;

    const tarjetas = categoria.querySelectorAll(".producto-card");

    input.addEventListener("input", function () {

        const texto = this.value.toLowerCase();

        tarjetas.forEach(tarjeta => {

            const nombre = tarjeta.querySelector("h3").textContent.toLowerCase();

            if (nombre.includes(texto)) {

                tarjeta.style.display = "";

            } else {

                tarjeta.style.display = "none";

            }

        });

    });

}

crearBuscador("buscar-harinas", "harinas-categoria");
crearBuscador("buscar-suplementos", "productos-categoria");
crearBuscador("buscar-hierbas medicinales", "hierbas-categoria");
crearBuscador("buscar-frutos secos", "frutsecos-categoria");
crearBuscador("buscar-frutas desecadas", "grilla-frutas desecadas");
crearBuscador("buscar-coco", "grilla-coco");
crearBuscador("buscar-cereales", "cereales-categoria");
crearBuscador("buscar-semillas", "semillas-categoria");
crearBuscador("buscar-especias y condimentos", "especias y condimentos");
crearBuscador("buscar-fruta congelada", "congelados-categoria");

    