
<?php

$conexion = new mysqli("localhost","root","","dietetica");

if($conexion->connect_error){

    die("Error de conexión");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andresito Saludable</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>🌿Andresito Saludable🌿</h1>


        <nav>
    <ul>
        <li><a href="#" onclick="mostrarInicio()">Inicio</a></li>
        <li><a href="#" onclick="mostrarNosotros()">Nosotros</a></li>
        <li><a href="#" onclick="mostrarContacto()">Contacto</a></li>
    </ul>
</nav>
    </header>

   <!-- ==================== SECCIÓN INICIO ==================== -->
    <section id="inicio" class="inicio">

        <div class="inicio-contenido">

        
        <h2>Tu espacio de alimentación saludable</h2>

        <p>
            Encontrá en nuestro local suplementos, hierbas medicinales,
            frutos secos, semillas, frutas congeladas y mucho más.
        </p>

        <a href="#productos" class="btn" id="btnProductos">
            Ver productos
        </a>

        </div>
    </section>

    <!-- ==================== SECCIÓN NOSOTROS ==================== -->
    <section id="nosotros">

        <h2>Sobre Nosotros</h2>

        <div class="nosotros-contenido">

            <p class="maquina">
            🌿 Alimentación saludable para toda la familia.<br>
            </p>
            
            <p>
                En Andresito Saludable Creemos que una buena alimentación es el primer paso hacia una vida más saludable. 
                Por eso, nos dedicamos a ofrecer productos de alta calidad
                que te ayuden a alcanzar tus objetivos de bienestar. Desde suplementos hasta hierbas medicinales.
            </p>

            <p>
                Trabajamos cada día para ofrecer productos naturales, suplementos, 
                productos para personas con intolerancias alimentarias, y mucho más. 
                Nuestro compromiso es brindarte opciones saludables que se adapten a tus necesidades y estilo de vida.
            </p>

            <p>
                Gracias por elegirnos y formar parte de esta comunidad que apuesta por el bienestar y la salud. 
                Estamos aquí para acompañarte en cada paso de tu camino hacia una vida más saludable.
            </p>
        </div>

    </section>
<!-- ==================== SECCIÓN SUPLEMENTOS ==================== -->
    <section id="productos-categoria" class="suplementos">

        <button class="btn-volver"
        onclick="volverCategorias()">
        ← Volver a Categorías

    </button>

        <h2 class="titulo-categoria">
            Suplementos
        </h2>

       <!--SUPLEMENTOS-->
        <div class="grilla-productos">

            <div class="producto-card" onclick="alternarProducto(this)">

            <h3>Glicinato de magnesio</h3>

            <img src="img/suplementos/glic de magnesio.jpg" alt="Glicinato de magnesio" loading="lazy">

<?php

$sql_glici_magnesio = "SELECT * FROM productos WHERE nombre='Glicinato de magnesio'";

$resultado_glici_magnesio = $conexion->query($sql_glici_magnesio);

$glici_magnesio = $resultado_glici_magnesio->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($glici_magnesio["estado"]); ?>">

<?php

if($glici_magnesio["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>


            <div class="contenido-producto">

            <ul>

            <li>
                <strong>➥Mejora el sueño:</strong>
                Calma al sistema nervioso y relaja los músculos,
                ayudando a un descanso más profundo y reparador.
            </li>

            <li>
                <strong>➥Reduce el estrés y ansiedad:</strong>
                Ayudan a disminuir los niveles de cortisol, favoreciendo
                el equilibrio emocional.
            </li>

            <li>
                <strong>➥Salud muscular y nerviosa:</strong>
                Es clave para la contracción y relajación muscular normal.
                Previene calambres y espasmos.
            </li>

            <li>
                <strong>➥Soporte muscular y nerviosa:</strong>
                Regula los niveles de glucosa en la sangre y apoya
                al funcionamiento rítmico del corazón.
            </li>

            <li>
                <strong>➥Fortalecimiento óseo:</strong>
                Regula el calcio, siendo fundamental para mantener
                a los huesos fuertes.
            </li>
            </ul>

        <div class="precios-producto">

        <h4>💰 Precio</h4>

        <p>$<?php echo $glici_magnesio["precio"]; ?></p>

        </div>

        <div class="consumo">

            <h4>Modo de consumo🛡️</h4>

            <p>
                Disolver la porción indicada en la etiqueta,
                utilizando la cuchara dosificadora incluida dentro del envase.<br>
                Mezclarlo con agua o alguna otra bebida.<br>
                Consumirlo 30min antes de dormir
            </p>
        </div>
        </div>
            </div>
            
        

        <div class="producto-card" onclick="alternarProducto(this)">

            <h3>Golden Mix Moringuero</h3>

            <img src="img/suplementos/golden mix.webp" alt="Golden Mix" loading="lazy">

<?php

$sql_golden_mix = "SELECT * FROM productos WHERE nombre='Golden Mix'";

$resultado_golden_mix = $conexion->query($sql_golden_mix);

$golden_mix = $resultado_golden_mix->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($golden_mix["estado"]); ?>">

<?php

if($golden_mix["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>

                <li>
                    <strong>➥Acción antiinflamatoria:</strong>
                    Reduce la inflamación crónica en el cuerpo,
                    ayudando a aliviar dolores articulares y musculares.
                </li>

                <li>
                    <strong>➥Fortalece el sistema inmune:</strong>
                    Refuerza las defensas naturales del organismo,
                    gracias a su Vitamina C y la cúrcuma.
                </li>

                <li> 
                    <strong>➥Apoyo digestivo:</strong>
                    Ayuda al tránsito intestinal, mejora la digestión 
                    y reduce molestias estomacales e hinchazón.
                </li>

                <li>
                    <strong>➥Energia y vitalidad:</strong>
                    Gracias a la moringa, por sus nutrientes combate
                    el cansancio y brinda energía durante todo el día.
                </li>
            </ul>

        <div class="precios-producto">

        <h4>💰 Precio</h4>

        <p>$<?php echo $golden_mix["precio"]; ?></p>

        </div>

            <div class="consumo">

                <h4>Modo de consumo🛡️</h4>

                <p>
                    Tomar <b>1 a 2 capsulas al dia</b> con agua, preferiblemente durante las comidas.

                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">

            <h3>Golden Milk</h3>

            <img src="img/suplementos/golden milk.png" alt="Golden milk" loading="lazy">

<?php

$sql_golden_milk = "SELECT * FROM productos WHERE nombre='Golden Milk'";

$resultado_golden_milk = $conexion->query($sql_golden_milk);

$golden_milk = $resultado_golden_milk->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($golden_milk["estado"]); ?>">

<?php

if($golden_milk["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Acción antiinflamatoria:</strong>
                    Reduce los dolores articulares y musculares,
                    lo cual es útil para las personas con artritis.
                </li>

                <li>
                    <strong>➥Refuerzo inmunológico:</strong>
                    Fortalecen las defensas y previene resfriados.
                </li>

                <li>
                    <strong>➥Mejora la digestón:</strong>
                    Gracias al jenjibre y la pimienta negra,
                    alivia la hinchazón abdominal y los gases.
                </li>

                <li>
                    <strong>➥Bienestar mental y sueño:</strong>
                    Si se consume tibia por la noche, ayuda a relajar
                    el cuerpo y la mente, combatiendo el insomnio 
                    y mejorando el descanso.
                </li>

                <li>
                    <strong>➥Poder antioxidante:</strong>
                    Combate el estrés y protege las células del
                    envejecimiento prematuro.
                </li>
            </ul>

        <div class="precios-producto">

        <h4>💰 Precio</h4>

        <p>$<?php echo $golden_milk["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>

                <p>
                    Calienta una taza de leche (vacuna) o bebida vegetal (almendras, coco o avena),
                    Luego agrega el polvo de Golden Milk a la bebida caliente.
                    Le puedes añadir miel o stevia a gusto...
                    Por ultimo mezcla bien hasta que el polvo se integre por completo.
                    Se recomienda tomarlo 30 y 60min antes de dormir.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Hibiscus Complex</h3>
            <img src="img/suplementos/hibiscus complex.jpg" alt="Hibiscus complex" loading="lazy">

<?php

$sql_hibiscus = "SELECT * FROM productos WHERE nombre='Hibiscus Complex'";

$resultado_hibiscus  = $conexion->query($sql_hibiscus);

$hibiscus = $resultado_hibiscus->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($hibiscus["estado"]); ?>">

<?php

if($hibiscus["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Acción antioxidante:</strong>
                    Combate el envejecimiento celular y el
                    daño oxidativo.
                </li>

                <li>
                    <strong>➥Salud digestiva:</strong>
                    Ayuda a desinflamar, mejora e tránsito intestinal y
                    favorece la digestión, siendo útil después de las comidas pesadas.
                </li>

                <li>
                    <strong>➥Salud cardiovascular:</strong>
                    Es muy valorado por su capacidad de ayudar a regular la presión arterial
                    y los niveles de colesterol en sangre.
                </li>

                <li>
                    <strong>➥Efecto diurético y detox:</strong>
                    Elimina toxinas y liquidos retenidos, promoviendo
                    una sensación de ligereza corporal.
                </li>

                <li>
                    <strong>➥Apoyo metabólico:</strong>
                    El té verde acompaña el metabolismo de forma constante,
                    ayudando a la quema de grasas y al control de peso.
                </li>
            </ul>

        <div class="precios-producto">

        <h4>💰 Precio</h4>

        <p>$<?php echo $hibiscus["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>

            <p>
                Consumir de<b>2 a 3 comprimidos por día.</b>
                Tomarlos preferentemente con las comidas.
                <b>No consumir en caso de tener presión arterial baja</b>
                ya que el hibisco puede reducirla aún más.
            </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Triple maca vigorizante</h3>

            <img src="img/suplementos/triple maca.png" alt="Triple Maca" loading="lazy">

<?php

$sql_triple_maca = "SELECT * FROM productos WHERE nombre='Triple maca vigorizante'";

$resultado_triple_maca  = $conexion->query($sql_triple_maca);

$triple_maca = $resultado_triple_maca->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($triple_maca["estado"]); ?>">

<?php

if($triple_maca["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Energía y vitalidad:</strong>
                    Proporciona un aumento en la energía física y mental,
                    ayudando a combatir el descanso y la fatiga.
                </li>

                <li>
                    <strong>➥Rendimiento sexual:</strong>
                    Actúa como un vigorizante que estimula el libido 
                    y puede mejorar la función sexual tanto en hombres como mujeres.
                </li>

                <li>
                    <strong>➥Equilibrio hormonal:</strong>
                    Regula las hormonas, siendo beneficioso para aliviar sintomas
                     de la menopausia y mejorar la fertilidad.
                </li>

                <li>
                    <strong>➥Rendimiento cognitivo:</strong>
                    Contribuye a mejorar la memoria, el enfoque mental y la 
                    capacidad de aprendizaje.
                </li>

                <li>
                    <strong>➥Adaptógeno:</strong>
                    Ayuda al cuerpo a gestionar mejor el estrés y fortalece
                    el sistema inmunológico.
                </li>
            </ul>

        <div class="precios-producto">

        <h4>💰 Precio</h4>

        <p>$<?php echo $triple_maca["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    <b>Leer cuántas capsulas tomar en el envase.</b>
                    Es preferible consumirla por la mañana o al mediodia,
                    para aprovechar su efecto energizante y evitar que interfiera en el sueño nocturno.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Semillas de palta en polvo</h3>

            <img src="img/suplementos/sem. palta en polvo.jpg" alt="semilla de palta en polvo" loading="lazy">

<?php

$sql_palta = "SELECT * FROM productos WHERE nombre='Semillas de palta en polvo'";

$resultado_palta  = $conexion->query($sql_palta);

$palta= $resultado_palta->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($palta["estado"]); ?>">

<?php

if($palta["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Salud cardiovascular:</strong>
                    Reduce el colesterol "malo"(LDL) y regula los triglicéridos.
                </li>

                <li>
                    <strong>➥Sistema inmunológico:</strong>
                    Refuerza las defensas naturales del cuerpo,
                    gracias a sus Vitaminas y compuestos fenólicos.
                </li>

                <li>
                    <strong>➥Digestión y peso:</strong>
                    Mejora el tránsito intestinal, combate la inflamación
                    y favorece la pérdida de peso al aumentar la saciedad.
                </li>

                <li>
                    <strong>➥Propiedades antioxidantes:</strong>
                    Neutraliza los radicales libres, lo que podría retardar
                    el envejecimiento celular.
                </li>
            </ul>

        <div class="precios-producto">

        <h4>💰 Precio</h4>

        <p>$<?php echo $palta["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>

                <p>
                    Se puede consumir en infusiones, en acompañamiento de comidas,
                    Batidos, yogures e incluso en el mate.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">

            <h3>Clorofila</h3>

            <img src="img/suplementos/clorofila.webp" alt="Clorofila" loading="lazy">

<?php

$sql_clorofila = "SELECT * FROM productos WHERE nombre='Clorofila'";

$resultado_clorofila  = $conexion->query($sql_clorofila);

$clorofila= $resultado_clorofila->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($clorofila["estado"]); ?>">

<?php

if($clorofila["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">


            <ul>
                <li>
                    <strong>➥Salud digestiva:</strong>
                    Calma la acidez estomacal y combate procesos inflamatorios.
                </li>

                <li>
                    <strong>➥Desintoxicación y PH:</strong>
                    Al actuar como un desintoxicante general, 
                    elimina toxinas y metales pesados del sistema
                    digestivo, tambien ayuda a regular el PH.
                </li>

                <li>
                    <strong>➥Energía y apariencia:</strong>
                    Combate la fatiga y el estrés oxidativo,
                    aportando una mayor energia natural y
                    mejorando la apariencia de la piel.
                </li>

                <li>
                    <strong>➥Acción refrescante:</strong>
                    Gracias a su combinación con sabor a menta,
                    ayuda a neutralizar el mal aliento (halitosis).
                </li>

                <li>
                    <strong>➥Antioxidante:</strong>
                    Gracias a su Vitamina C, protege las células contra
                    el daño de los radicales libres.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $clorofila["precio"]; ?></p>

        </div>

            <div class="consumo">

                <h4>Modo de consumo🛡️</h4>

                <p>
                    Consumir de <b>1 a 2 tomas diarias de 5ml </b>(1 cucharada),
                    solas o diluidas en agua o jugos naturales.
                    <b>TOMA EN AYUNA...</b> Si buscas efecto antioxidante y 
                    un plus de energía para arrancar el día.<br>
                    <b>TOMA ANTES O DESPUÉS DE LAS COMIDAS...</b>si buscas mejorar la digestión,
                    calmar la acidez estomacal o evitar la pesadez.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">

            <h3>Vinagre de Manzana</h3>
            <img src="img/suplementos/vinagre de manzana.jpg" alt="Vinagre de manzana" loading="lazy">

<?php

$sql_vinagre_manzana = "SELECT * FROM productos WHERE nombre='Vinagre de Manzana'";

$resultado_vinagre_manzana = $conexion->query($sql_vinagre_manzana);

$vinagre_manzana= $resultado_vinagre_manzana->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($vinagre_manzana["estado"]); ?>">

<?php

if($vinagre_manzana["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Digestión:</strong>
                    Alivia la inflamación abdominal y mejora la salud
                    gastrointestinal.
                </li>

                <li>
                    <strong>➥Control glucémico:</strong>
                    Ayuda a moderar y controlar los niveles de azúcar en la sangre,
                    mejorando la sensibilidad a la insulina.
                </li>

                <li>
                    <strong>➥Control del apetito:</strong>
                    Genera una mayor sensación de saciedad, lo que
                    reduce la ingesta calórica y favorece el control de peso.
                </li>

                <li>
                    <strong>➥Antioxidante y defensas:</strong>
                    Al tener Vitamina C incluido, actúa como un potente
                    depurativo y refuerza el sistema inmunitario.
                </li>

                <li>
                    <strong>➥Salud cardiovascular:</strong>
                    Tiene un efecto positivo sobre los niveles de colesterol y
                    triglicéridos en sangre.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $vinagre_manzana["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>

                <p>
                    Consumir <b>1 a 3 cucharadas </b>(de 5ml cada una)
                    disueltas en un vaso de agua.
                    Se puede consumir en cualquier momento del día o 30min
                    antes/después de las comidas principales.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Vinagre de sidra de manzana en capsulas</h3>

            <img src="img/suplementos/vinagre sidra de manzana caps..webp" alt="Vinagre de manzana en capsulas" loading="lazy">

<?php

$sql_vinagre_manzana_capsulas = "SELECT * FROM productos WHERE nombre='Vinagre de sidra de manzana en capsulas'";

$resultado_vinagre_manzana_capsulas = $conexion->query($sql_vinagre_manzana_capsulas);

$vinagre_manzana_capsulas= $resultado_vinagre_manzana_capsulas->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($vinagre_manzana_capsulas["estado"]); ?>">

<?php

if($vinagre_manzana_capsulas["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Control glucémico:</strong>
                    modera los picos de azúcar en sangre después de comer.
                </li>

                <li>
                    <strong>➥Soporte intestinal:</strong>
                    Aporta enzimas digestivas y mejora el tránsito intestinal.
                </li>

                <li>
                    <strong>➥Estrategia de peso:</strong>
                    Promueve la saciedad ayudando al control calório.
                </li>

                <li>
                    <strong>➥Acción antioxidante:</strong>
                    Su contenido de Vitamina C refuerza las defensas del organismo.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $vinagre_manzana_capsulas["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Ingreir 1 cápsula al día acompañado con agua.
                    Consumir 30min antes o después de alguna de las 
                    comidas principales(almuerzo o cena).
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Jugo de Aloe vera Sistema digestivo</h3>


            <img src="img/suplementos/aloe vera digest....jpg" alt="Jugo Aloe Vera" loading="lazy">

<?php

$sql_aloe = "SELECT * FROM productos WHERE nombre='Jugo de aloe vera sistema digestivo'";

$resultado_aloe = $conexion->query($sql_aloe);

$aloe= $resultado_aloe->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($aloe["estado"]); ?>">

<?php

if($aloe["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

             <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Depurativo y Detox:</strong>
                    Limpia el aparato digestivo y elimina
                    toxinas acumuladas.
                </li>

                <li>
                    <strong>➥Regulador intestinal:</strong>
                    Favorece el transito intestinal y ayuda en casos
                    de estreñimiento, pesadez o inflamación abdominal.
                </li>

                <li>
                    <strong>➥Alivio de síntomas:</strong>
                    Mejora condiciones como gastritis, acidez y reflujo,
                    debido a sus propiedades antiinflamatorias y alcalinizantes.
                </li>

                <li>
                    <strong>➥Salud hepatobiliar:</strong>
                    Facilita la expulsión de bilis retenida en la vesícula
                    y estimula la secreción biliar.
                </li>

                <li>
                    <strong>➥Inmunológico:</strong>
                    Refuerza el sistema inmunológico y aumenta
                    las defensas naturales del cuerpo.
                </li>

                <li>
                    <strong>➥Riqueza Nutricional:</strong>
                    Aporta aminoácidos esenciales, minerales
                    (calcio, magnesio, potasio y hierro) y Vitaminas
                    (A, C, B1, B2, B6 y B12).
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $aloe["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>

                <p>
                    Ingerir de <b>1 a 2 cdas diarias</b> (o tapitas)
                    diluidas en agua o algun jugo natural.<br>
                    Se puede tomar en ayunas, 30min antes o después
                    de las comidas principales.

                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Omega-3 Vegetal</h3>

            <img src="img/suplementos/omega-3 vegetal.webp" alt="Omega-3 Natier" loading="lazy">

<?php

$sql_omega = "SELECT * FROM productos WHERE nombre='Omega-3 vegetal'";

$resultado_omega = $conexion->query($sql_omega);

$omega= $resultado_omega->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($omega["estado"]); ?>">

<?php

if($omega["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">
            <ul>
                <li>
                    <strong>➥Salud cardiovascular:</strong>
                    Regula los niveles de colesterol y triglicéridos,
                    además de contribuir al control de la presión arterial.
                </li>

                <li>
                    <strong>➥Acción antiinflamatoria:</strong>
                    Gracias a sus propiedades, son útiles en procesos inflamatorios
                    generales y articulares.
                </li>

                <li>
                    <strong>➥Función cognitiva:</strong>
                    Previene el deterioro cognitivo y mejora la comunicación
                    entre neuronas.
                </li>

                <li>
                    <strong>➥Piel y digestión:</strong>
                    Mejora la apariencia de la piel y favorece los procesos
                    digestivos e intestinales.
                </li>

                <li>
                    <strong>➥Redimiento físico:</strong>
                    Ayuda en la recuperación y rendimiento muscular
                    tras el ejercicio.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $omega["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>

                <p>
                    Ingerir <b>1 cda de 5ml</b> (equivalente a la tapita del envase)
                    1 vez por día.
                    Se recomienda tomarlo 30min antes o después de las comidas prinicpales
                    para optimizar su absorción.
                </p>
            </div>
        </div>
        </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        
        <h3>Aceite de prímula</h3>

        <img src="img/suplementos/primula natier.webp" alt="Primula Natier" loading="lazy">

<?php

$sql_primula = "SELECT * FROM productos WHERE nombre='Aceite de prímula'";

$resultado_primula = $conexion->query($sql_primula);

$primula= $resultado_primula->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($primula["estado"]); ?>">

<?php

if($primula["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


        <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

        <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥Equilibrio hormonal:</strong>
                Reduce el balance entre estrógenos y progesterona.
            </li>

            <li>
                <strong>➥Salud hormonal:</strong>
                Alivia sintomas del síndrome premenstrual
                (como hinchazón, irritabilidad y calambres) y 
                de la menopausia (sofocos, sequedad vaginal e insomnio).
            </li>

            <li>
                <strong>➥Acción antiinflamatoria:</strong>
                Reduce los dolores musculares y articulares.
            </li>

            <li>
                <strong>➥Cuidado de la piel y cabello:</strong>
                Ayuda a combatir el acné y fortalece el cabello.
            </li>

            <li>
                <strong>➥Sistema inmunológico:</strong>
                Actúa como un potenciador de las defensas naturales del organismo.
            </li>
        </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $primula["precio"]; ?></p>

        </div>

        <div class="consumo">
            <h4>Modo de consumo🛡️</h4>
            <p>
                <b>Ingerir 1cda diaria </b>(aprox. 5ml o una tapita del envase).
                Tomarlo en ayunas o 30min antes/después de las comidas principales.
            </p>
        </div>
       </div> 
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Jugo de Aloe Vera máximas defensas</h3>

        <img src="img/suplementos/aloe vera defensas.webp" alt="Jugo aloe vera" loading="lazy">

<?php

$sql_max_defensas = "SELECT * FROM productos WHERE nombre='Jugo de Aloe Vera máximas defensas'";

$resultado_max_defensas = $conexion->query($sql_max_defensas);

$max_defensas= $resultado_max_defensas->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($max_defensas["estado"]); ?>">

<?php

if($max_defensas["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

        <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥Sistema inmunológico:</strong>
                Refuerza las defensas naturales del cuerpo.
            </li>

            <li>
                <strong>➥Salud digestiva:</strong>
                Regula el tránsito intestinal y favorece la restauración 
                de la muscosa gástrica.
            </li>

            <li>
                <strong>➥Desintoxicación:</strong>
                Colabora en la eliminación de toxinas y mejora la absorción
                de nutrientes.
            </li>

            <li>
                <strong>➥Aporte nutricional:</strong>
                Contiene Vitaminas (A,C,B1,B6 y B12),
                aminoácidos esenciales y minerales (calcio, magnesio, potasio,zinc e hierro).
            </li>
        </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $max_defensas["precio"]; ?></p>

        </div>

        <div class="consumo">
            <h4>Modo de consumo🛡️</h4>
            <p>
                Ingerir de 1 a 2cdas soperas (aprox. 5ml por porción) por día,
                diluido en agua o algun jugo natural.
                Consumir 30min antes o después de las comidas principales.
            </p>
        </div>
       </div>
       </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Centella Asiática</h3>

            <img src="img/suplementos/centella asiatica.jpg" alt="Centella Asiática Natier" loading="lazy">

<?php

$sql_centella = "SELECT * FROM productos WHERE nombre='Centella asiática'";

$resultado_centella = $conexion->query($sql_centella);

$centella= $resultado_centella->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($centella["estado"]); ?>">

<?php

if($centella["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Salud cutánea:</strong>
                    Facilita la formación de colágeno, lo que aporta firmeza
                    y elasticidad a la piel. Acelera la reparación de tejidos
                    y la cicatrización.
                </li>

                <li>
                    <strong>➥Control de Celulitis:</strong>
                    Gracias a sus propiedades, combate la celulitis y mejora
                    la textura de la piel.
                </li>

                <li>
                    <strong>➥Soporte circulatorio:</strong>
                    Alivia la sensación de piernas cansadas, varices y ademas
                    al mejorar el tono de las paredes venosas.
                </li>

                <li>
                    <strong>➥Efecto detox:</strong>
                    Contiene funciones depurativas y antioxidantes
                    que protegen la piel de los radicales libres.
                </li>

                <li>
                    <strong>➥Sistema nervioso:</strong>
                    Se considera un tónico que ayuda a mantener la concentración
                    y la memoria.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $centella["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>

                <p>
                    Ingerir de 1 a 2 cásulas diarias.
                    Se sugiere tomarlas antes de las comidas principales.
                    Se puede consumir de forma continua, ya que no requiere 
                    periodos de descanso obligatorio.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Hierro Quelado</h3>
            <img src="img/suplementos/hierro quelado caps..jpg" alt="Hierro quelado capsulas" loading="lazy">

<?php

$sql_hierro = "SELECT * FROM productos WHERE nombre='Hierro Quelado'";

$resultado_hierro = $conexion->query($sql_hierro);

$hierro= $resultado_hierro->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($hierro["estado"]); ?>">

<?php

if($hierro["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Combate la anemia:</strong>
                    Estimula la producción de globulos rojos.
                </li>

                <li>
                    <strong>➥Aumenta la energía:</strong>
                    Reduce el cansancio físico y mental.
                </li>

                <li>
                    <strong>➥Refuerza defensas:</strong>
                    Fortalece el funcionamiento del sistema inmune.
                </li>
            </ul>

         <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $hierro["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Ingerir <b>1 capsula diaria.</b>
                    Consumir 30min antes o después de cualquiera de sus pricipales comidas.<br>
                    Para mejorar la absorción, puede tomar junto con Vitamina C
                    (como jugo de cítricos).
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Creatina Dark Lab</h3>
            <img src="img/suplementos/creatina dark lab.webp" alt="Creatina Dark Lab" loading="lazy">

<?php

$sql_creatina = "SELECT * FROM productos WHERE nombre='Creatina Dark Lab'";

$resultado_creatina= $conexion->query($sql_creatina);

$creatina= $resultado_creatina->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($creatina["estado"]); ?>">

<?php

if($creatina["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Energía cerebral:</strong>
                        Activa las neuronas y reduce el cansancio de la mente.
                    </li>

                    <li>
                        <strong>➥ Mejor memoria:</strong>
                        Ayuda a recordar más fácil y a pensar con mayor rapidez.
                    </li>

                    <li>
                        <strong>➥ Músculos más fuertes:</strong>
                        Evita la pérdida de fuerza que viene con la edad.
                    </li>

                    <li>
                        <strong>➥ Menos caídas:</strong>
                        Al dar mas estabilidad física, ayuda a prevenir accidentes.
                    </li>

                    <li>
                        <strong>➥ Más vitalidad:</strong>
                        Brinda energía extra para las actividades de todos los días.
                    </li>
                </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $creatina["precio"]; ?></p>

        </div>

                <div class="consumo">
                    <h4>🛡️ Modo de consumo</h4>

                    <p>
                        La toma diaria constante es fundamental para mantener los niveles elevados de creatina en los músculos.<br>
                        La dosis común es de 3gr, 1 vez por día.
                    </p>
                </div>
            </div>


        </div>

        <div class="producto-card" onclick="alternarProducto(this)">

            <h3>Jugo de uva Tinto 100% natural</h3>

            <img src="img/suplementos/jugo de uva tinto.webp" alt="jugo de uva tinto" loading="lazy">

<?php

$sql_jugo_uva = "SELECT * FROM productos WHERE nombre='Jugo de uva tinto'";

$resultado_jugo_uva= $conexion->query($sql_jugo_uva);

$jugo_uva= $resultado_jugo_uva->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($jugo_uva["estado"]); ?>">

<?php

if($jugo_uva["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Salud cardiovascular:</strong>
                    Protege al corazón y reduce la oxidsción dañina de lípidos
                    (colesterol LDL).
                </li>

                <li>
                    <strong>➥Poder antioxidante:</strong>
                    Combate el envejecimiento celular y el daño de los radicales libres.
                </li>

                <li>
                    <strong>➥Bbeida energética natural:</strong>
                    Se considera una fuente de energía saludable, ideal para deportistas
                    o cualquier momento del día.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $jugo_uva["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Se consume fresco y para obtener una opción más
                    ligera, se puede diluir con agua o agua con gas...
                    <b>Apto para todas las edades, desde niños hasta adultos mayores</b>
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tintura madre Melisa</h3>

            <img src="img/suplementos/tintura madre melisa.jpg" alt="Tintura madre" loading="lazy">

<?php

$sql_melissa = "SELECT * FROM productos WHERE nombre='Tintura madre melissa'";

$resultado_melissa= $conexion->query($sql_melissa);

$melissa= $resultado_melissa->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($melissa["estado"]); ?>">

<?php

if($melissa["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Relajante y sedante suave:</strong>
                    Reduce estados de ansiedad, estrés y nerviosismo.
                </li>

                <li>
                    <strong>➥Mejora el sueño:</strong>
                    Favorece el descanso profundo y ayuda a combatir el insomnio
                    de manera natural.
                </li>

                <li>
                    <strong>➥Aliado digestivo:</strong>
                    Alivia cólicos, gases, pesadez estomacal e indigestión nerviosa.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $melissa["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Tomar <b>entre 15 a 20 gotas</b> diluidas en un poco de agua.
                    Se puede consumir de 1 a 3 veces al día.
                    Para mejorar el sueño, tomarlo una dosis entre 30 y 60min antes de acostarse.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tintura madre Garcinia Cambogia</h3>

            <img src="img/suplementos/tintura madre garcinia cambogia.jpg" alt="Tintura madre" loading="lazy">

<?php

$sql_cambogia = "SELECT * FROM productos WHERE nombre='Tintura madre garcinia cambogia'";

$resultado_cambogia= $conexion->query($sql_cambogia);

$cambogia= $resultado_cambogia->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($cambogia["estado"]); ?>">

<?php

if($cambogia["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Control del apetito:</strong>
                    Reduce los antojos y la ansiedad por comer.
                </li>

                <li>
                    <strong>➥Bloquea grasas:</strong>
                    Evita que los azúcares se transformen en tejido adiposo.
                </li>

                <li>
                    <strong>➥Usa reservas:</strong>
                    Estimula al cuerpo a quemar la grasa acumulada.
                </li>

                <li>
                    <strong>➥Sin nerviosismo:</strong>
                    No altera el sistema nervioso ni quita el sueño.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $cambogia["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Consumir de <b>15 a 20 gotas</b> en un vaso de agua.
                    3 veces por dia, entre 30 y 60min antes de las comidas principales.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tintura Madre Fucus</h3>
            <img src="img/suplementos/tintura madre fucus.jpg" alt="Tintura madre" loading="lazy">

<?php

$sql_fucus = "SELECT * FROM productos WHERE nombre='Tintura madre fucus'";

$resultado_fucus= $conexion->query($sql_fucus);

$fucus= $resultado_fucus->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($fucus["estado"]); ?>">

<?php

if($fucus["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Bajar de peso:</strong>
                    Activa tu metabolismo para que quemes grasa de manera más eficiente.
                </li>

                <li>
                    <strong>➥Control de apetito:</strong>
                    Se expande en el estomago y te da una sensación de
                    llenado que reduce el hambre.
                </li>

                <li>
                    <strong>➥Evita retención de liquidos:</strong>
                    Funciona como un diurético natural que te ayuda a deshincharte.
                </li>

                <li>
                    <strong>➥Mejora la digestión:</strong>
                    Actua como un laxante suave, ayudando a regular el 
                    tránsito intestinal.
                </li>

                <li>
                    <strong>➥Aporta energía:</strong>
                    Al estimular el metabolismo, te ayuda a sentir menos
                    cansancio durante el día.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $fucus["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Consumir de <b>20 a 60 gotas</b> diluidas en agua.
                    Consumir antes de las comidas para aprovechar su efecto saciante.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tintura Madre Ortiga</h3>

            <img src="img/suplementos/tintura madre ortiga.webp" alt="Tintura madre" loading="lazy">

<?php

$sql_ortiga = "SELECT * FROM productos WHERE nombre='Tintura madre ortiga'";

$resultado_ortiga= $conexion->query($sql_ortiga);

$ortiga= $resultado_ortiga->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($ortiga["estado"]); ?>">

<?php

if($ortiga["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Depurativa:</strong>
                    Purifica el organismo eliminando toxinas acumuladas.
                </li>

                <li>
                    <strong>➥Diurética:</strong>
                    Estimula la producción de orina, reduce la retención
                    de liquidos y previene cálculos renales.
                </li>

                <li>
                    <strong>➥Desinflamatoria:</strong>
                    Alivia dolores articulares causados por artritis, artrosis
                    y reumatismo.
                </li>

                <li>
                    <strong>➥Bienestar prostático:</strong>
                    Colabora en el tratamiento y alivio de moestias por
                    hipertrofia protática benigna.
                </li>

                <li>
                    <strong>➥Antialérgica:</strong>
                    Refuerza defensas y mitiga síntomas de rinitis o alergias
                    estacionales.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $ortiga["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Diluir en agua <b>entre 20 y 30 gotas.</b>
                    Generalmente se toma 2 a 3 veces al día,
                    preferentemente alejado de las comidas.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tintura madre Sen Hojas</h3>
            <img src="img/suplementos/tintura madre sen hojas.jpg" alt="Tintura Madre" loading="lazy">

<?php

$sql_hojas = "SELECT * FROM productos WHERE nombre='Tintura madre sen hojas'";

$resultado_hojas= $conexion->query($sql_hojas);

$hojas= $resultado_hojas->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($hojas["estado"]); ?>">

<?php

if($hojas["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Alivio del estreñimiento:</strong>
                    Estimula el colon para facilitar la evacuación
                    inestinal de forma rápida.
                </li>

                <li>
                    <strong>➥Ablandamiento de heces:</strong>
                    Reduce la absorción de agua para permitir una eliminación
                    menos dolorosa.
                </li>

                <li>
                    <strong>➥Acción depurativa:</strong>
                    Favorece la expulsión de toxinas y desechos acumulados
                    en el sistema digestivo.
                </li>

                <li>
                    <strong>➥Efecto predecible:</strong>
                    Actúa habitualmente entre 6 y 12hs 
                    después de su ingesta nocturna.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $hojas["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>

                <p>
                    Tomar entre <b>10 a 20 gotas diluidas en un vaso de agua.</b>
                    Tomarla por la noche, antes de acostarse.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tintura Madre Cardo Mariano</h3>
            <img src="img/suplementos/tintura madre cardo mariano.jpg" alt="Tintura madre" loading="lazy">

<?php

$sql_mariano = "SELECT * FROM productos WHERE nombre='Tintura madre cardo mariano'";

$resultado_mariano= $conexion->query($sql_mariano);

$mariano= $resultado_mariano->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($mariano["estado"]); ?>">

<?php

if($mariano["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Protege al hígado:</strong>
                    Repara las células hepaticas dañadas por toxinas,
                    alcohol o medicamentos.
                </li>

                <li>
                    <strong>➥Mejora la digestión:</strong>
                    Estimula la producción de bilis, facilitando la digestión
                    de grasas y aliviando la pesadez.
                </li>

                <li>
                    <strong>➥Desintoxica el organismo:</strong>
                    Colabora de manera activa en la eliminación de impurezas
                    y desechos del cuerpo.
                </li>

                <li>
                    <strong>➥Es antioxidante:</strong>
                    Combate los radicales libres que causan el envejecimiento celular.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $mariano["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Tomar <b>20 gotas(1ml)</b> en un vaso con agua,
                    de 1 a 3 veces por día.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tintura Madre Valeriana</h3>

            <img src="img/suplementos/tintura madre valeriana.jpg" alt="Tintura madre" loading="lazy">

<?php

$sql_valeriana = "SELECT * FROM productos WHERE nombre='Tintura madre valeriana'";

$resultado_valeriana= $conexion->query($sql_valeriana);

$valeriana= $resultado_valeriana->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($valeriana["estado"]); ?>">

<?php

if($valeriana["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Combate el insomnio:</strong>
                    Ayuda a reconciliar el sueño rápido.
                </li>

                <li>
                    <strong>➥Reduce la ansiedad:</strong>
                    Calma el estrés y los nervios.
                </li>

                <li>
                    <strong>➥Alivia tensiones:</strong>
                    Relaja los espasmos musculares y cólicos
                </li>
            </ul>
            
        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $valeriana["precio"]; ?></p>

        </div>
            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Tomar <b>20 gotas(1ml)</b>en un vaso con agua,
                    de 1 a 3 veces por día.<br>
                    Para mejorar el descanso se toma cerca del horario de descanso nocturno.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tintura Madre pasionaria</h3>
            <img src="img/suplementos/tintura madre pasionaria.jpg" alt="Tintura madre" loading="lazy">

<?php

$sql_pasionaria = "SELECT * FROM productos WHERE nombre='Tintura madre pasionaria'";

$resultado_pasionaria= $conexion->query($sql_pasionaria);

$pasionaria= $resultado_pasionaria->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($pasionaria["estado"]); ?>">

<?php

if($pasionaria["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Reduce el estrés:</strong>
                    Alivia la ansiedad, los nervios y la tensión diaria.
                </li>

                <li>
                    <strong>➥Combate el insomnio:</strong>
                    Favorece un sueño profundo, relajado y reparador.
                </li>

                <li>
                    <strong>➥Alivia tensiones:</strong>
                    Ayuda a relajar espasmos y dolores musculares por nerviosismo.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $pasionaria["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Tomar <b>20 gotas</b> diluidas en un vaso de agua.
                    Tomar de 1 a 3 veces al día.<br>
                    Para trastornos de sueño, tomar antes de acostarse.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Caldo de huesos vacuno</h3>
            <img src="img/suplementos/caldo de huesos vacuno.webp" alt="caldo de huesos vacuno Colabella" loading="lazy">

<?php

$sql_vacuno = "SELECT * FROM productos WHERE nombre='Caldo de huesos vacuno'";

$resultado_vacuno= $conexion->query($sql_vacuno);

$vacuno= $resultado_vacuno->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($vacuno["estado"]); ?>">

<?php

if($vacuno["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Articulaciones:</strong>
                    Fortalece cartílagos, tendones y huesos.
                </li>

                <li>
                    <strong>➥Piel y cabello:</strong>
                    Aporta colágeno para dar elasticidad a la piel y fortalecer uñas
                    y cabello.
                </li>

                <li>
                    <strong>➥Digestión:</strong>
                    Protege y repara la mucosa del intestino.
                </li>

                <li>
                    <strong>➥Defensas:</strong>
                    Aporta nutrientes que colaboran con el sistema inmunológico.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $vacuno["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Consumir <b>2 comprimidos diarios,</b>
                    preferentemente en el desayuno.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Cáscara de huevo</h3>
            <img src="img/suplementos/cáscara de huevo.webp" alt="cascara de huevo Colabella" loading="lazy">

<?php

$sql_huevo = "SELECT * FROM productos WHERE nombre='Cáscara de huevo'";

$resultado_huevo= $conexion->query($sql_huevo);

$huevo= $resultado_huevo->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($huevo["estado"]); ?>">

<?php

if($huevo["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Fortalece los huesos:</strong>
                    Aporta calcio natural de alta absorción para prevenir 
                    la debilidad ósea.
                </li>

                <li>
                    <strong>➥Protege las articulaciones:</strong>
                    Reduce el dolor y la rigidez articular.
                </li>

                <li>
                    <strong>➥Mejora la función muscular:</strong>
                    El magnesio y calcio optimizan la contracción de los músculos.
                </li>

                <li>
                    <strong>➥Aporta energía celular:</strong>
                    Contiene Coenzima Q10 y Vitamina B12 
                    para el metabolismo energético.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $huevo["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Consumir <b>2 comprimidos diarios,</b>
                    preferentemente en el desayuno.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Caldo de huesos marino</h3>
            <img src="img/suplementos/caldo de huesos marino.webp" alt="Caldo de huesos marino Colabella" loading="lazy">

<?php

$sql_marino = "SELECT * FROM productos WHERE nombre='Caldo de huesos marino'";

$resultado_marino= $conexion->query($sql_marino);

$marino= $resultado_marino->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($marino["estado"]); ?>">

<?php

if($marino["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Articulaciones y huesos:</strong>
                    Fortalece la estructura ósea, reduce dolores
                    articulares y mejora la movilidad.
                </li>

                <li>
                    <strong>➥Salud intestinal:</strong>
                    Protege la mucosa del sistema digestivo y ayuda
                    a aliviar trastornos como la gastritis.
                </li>

                <li>
                    <strong>➥Estética:</strong>
                    Aporta colágeno que mejora la elasticidad de la piel
                    y fortalece el cabello y las uñas.
                </li>

                <li>
                    <strong>➥Defensas:</strong>
                    Aporta minerales esenciales que refuerzan 
                    el sistema inmunológico.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $marino["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Consumir <b>2 comprimidos diarios,</b>
                    preferentemente en el desayuno.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Aceite de Romero</h3>
            <img src="img/suplementos/aceite de romero.jpg" alt="Aceite de romero" loading="lazy">

<?php

$sql_romero = "SELECT * FROM productos WHERE nombre='Aceite de romero'";

$resultado_romero= $conexion->query($sql_romero);

$romero= $resultado_romero->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($romero["estado"]); ?>">

<?php

if($romero["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>


            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Hidrata profundamente:</strong>
                    Mantiene la humedad de la piel.
                </li>

                <li>
                    <strong>➥Nutre intensamente:</strong>
                    Aporta nutrientes esenciales para el tejido cutáneo.
                </li>

                <li>
                    <strong>➥Aporta firmeza:</strong>
                    Ayuda a tonificar y mejorar la elasticidad.
                </li>

                <li>
                    <strong>➥Efecto astringente:</strong>
                    Útil para equilibrar la piel y el cuero cabelludo.
                </li>

                <li>
                    <strong>➥Ideal para masajes:</strong>
                    Facilita el deslizamiento y promueve la relajación corporal.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $romero["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    <b>No consumir por vía oral...</b>
                    Para aplicacíon se utiliza una pequeña cantidad,
                    ya sea en el cabello, o en la piel.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Aceite de orégano</h3>
            <img src="img/suplementos/aceite de orégano.webp" alt="Aceite de oregano" loading="lazy">

<?php

$sql_oregano = "SELECT * FROM productos WHERE nombre='Aceite de orégano'";

$resultado_oregano= $conexion->query($sql_oregano);

$oregano= $resultado_oregano->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($oregano["estado"]); ?>">

<?php

if($oregano["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Combate infecciones:</strong>
                    Destruye bacterias, hongos (como la cándida) y virus.
                </li>

                <li>
                    <strong>➥Sube defensas:</strong>
                    Fortalece el sistema inmunitario de forma natural.
                </li>

                <li>
                    <strong>➥Alivia la respiración:</strong>
                    Calma la tos y limpia las vías aéreas.
                </li>

                <li>
                    <strong>➥Mejora la digestión:</strong>
                    Reduce gases, pesadez y protege el estómago.
                </li>

                <li>
                    <strong>➥Sana la piel:</strong>
                    Elimina hongos en uñas, acné y verrugas.
                </li>

                <li>
                    <strong>➥Reduce inflamación:</strong>
                    Calma dolores musculares y articulares leves.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $oregano["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Ingrerir <b>4 gotas,</b> 2 veces al día, 30min antes o después 
                    de las comidas peincipales.<br>
                    Puedes mezclarla con agua o colocarlas bajo la lengua.<br>
                    Para uso externo colocar <b>4 a 8 gotas</b> de forma externa.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Aceite de CBD Bioactiva</h3>
        <img src="img/suplementos/bioactiva.png" alt="Bioactiva" loading="lazy">


<?php

$sql_bioactiva = "SELECT * FROM productos WHERE nombre='Aceite de CBD bioactiva'";

$resultado_bioactiva= $conexion->query($sql_bioactiva);

$bioactiva= $resultado_bioactiva->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($bioactiva["estado"]); ?>">

<?php

if($bioactiva["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info">
            ▼ Tocá para mas información
        </p>

        <div class="contenido-producto">
            <ul>
                <li>
                    <strong>➥ Reduce la asniedad:</strong>
                    Calma la mente y disminuye el estrés.
                </li>

                <li>
                    <strong>➥ Mejora el sueño:</strong>
                    Facilita el descanso y combate el insomnio.
                </li>

                <li>
                    <strong>➥ Alivia dolores:</strong>
                    Actúa como un analgésico y antiinflamatorio natural.
                </li>

                <li>
                    <strong>➥ Efecto seguro:</strong>
                    No genera efectos psicoactivos por ser libre de THC.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $bioactiva["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Se colocan gotas sublinguales y se mantienen ahí 
                    de 30 a 60seg antes de tragarlas por una absorción rápida.<br><br>
                    <b>Para dormir mejor,</b> Consume a la noche de 30 a 60min antes de acostarse.<br>
                    <b>Para estrés y dolores,</b> se toma por la mañana o en la tarde, repartiendo su dosis
                    según la necesidad del día.
                </p>
            </div>
            </div>
        </div>


        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Zeolita extracto líquido</h3>
            <img src="img/suplementos/zeolita extracto liquido.webp" alt="Zeolita" loading="lazy">

<?php

$sql_zeolita = "SELECT * FROM productos WHERE nombre='Zeolita extracto líquido'";

$resultado_zeolita= $conexion->query($sql_zeolita);

$zeolita= $resultado_zeolita->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($zeolita["estado"]); ?>">

<?php

if($zeolita["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Elimina toxinas:</strong>
                    Atrapa y expulsa del cuerpo metales pesados.
                </li>

                <li>
                    <strong>➥Efecto antioxidante:</strong>
                    Limpia los radicales libres del organismo.
                </li>

                <li>
                    <strong>➥Regula el PH:</strong>
                    Ayuda a equilibrar la acidez corporal.
                </li>

                <li>
                    <strong>➥Refuerza defensas:</strong>
                    Favorece el sistema inmunológico y digestivo
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $zeolita["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Se recomiendas gotas en cantidades pequeñas, se suele aumentar la cantidad,
                    distribuida en varias tomas diarias durante un periodo de 4 a 6 semanas.<br>
                    Disolver las gotas en agua o en jugos naturales.<br>
                    Es fundamental batirlo con energía antes de usarlo.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Lax Fibras</h3>
            <img src="img/suplementos/lax fibras.webp" alt="Lax fibras Geonat" loading="lazy">


<?php

$sql_fibras= "SELECT * FROM productos WHERE nombre='Lax fibras'";

$resultado_fibras= $conexion->query($sql_fibras);

$fibras= $resultado_fibras->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($fibras["estado"]); ?>">

<?php

if($fibras["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥Regula el tránsito:</strong>
                    Alivia el estreñimiento de forma suave y natural.
                </li>

                <li>
                    <strong>➥Aumenta la motilidad:</strong>
                    Favorece los movimientos del intestino.
                </li>

                <li>
                    <strong>➥Aporta fibra:</strong>
                    Mejora la salud de la flora digestiva.
                </li>

                <li>
                    <strong>➥Efecto laxante suave:</strong>
                    Ablanda las heces facilitando la evacuación.
                </li>
            </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $fibras["precio"]; ?></p>

        </div>

            <div class="consumo">
                <h4>Modo de consumo🛡️</h4>
                <p>
                    Tomar <b>1 comprimido diario,</b>
                    1 hora antes de acostarse, con un vaso de agua o jugo colmado.
                </p>
            </div>
        </div>
        </div>
        
    </section>
    
    <!-- ==================== SECCIÓN HIERBAS MEDICINALES ==================== -->

    <section id="hierbas-categoria">

        <button class="btn-volver"
        onclick="volverCategorias()">
        ← Volver a Categorías
    </button>

    <h2 class="titulo-categoria">
        Hierbas Medicinales
    </h2>

    <div class="grilla-productos">

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>🌼Manzanilla</h3>
            <img src="img/hierbas/manzanilla.webp" alt="Manzanilla" loading="lazy">

<?php

$sql_manzanilla= "SELECT * FROM productos WHERE nombre='Manzanilla'";

$resultado_manzanilla= $conexion->query($sql_manzanilla);

$manzanilla= $resultado_manzanilla->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($manzanilla["estado"]); ?>">

<?php

if($manzanilla["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥ Calma el estómago:</strong>
                    Alivia los gases, dolor de panza y la pesadez después de
                    comer.
                </li>

                <li>
                    <strong>➥ Ayuda a dormir:</strong>
                    Relaja el cuerpo, reduce el estrés y te ayuda a descansar mejor.
                </li>

                <li>
                    <strong>➥ Sana la piel:</strong>
                    Alivia las zonas rojas, las alergias y también a cerrar
                    heridas leves si se usa fría.
                </li>

                <li>
                    <strong>➥ Reduce dolores:</strong>
                    Calma las molestias de los cólicos cuando las mujeres tienen el periodo.
                </li>
            </ul>

            <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $manzanilla["precio100"]; ?></p>

                    <p><strong>50 g:</strong> $<?php echo $manzanilla["precio50"]; ?></p>

                </div>

            <div class="consumo-hierbas">
                <h4>🍵 Como preparar</h4>

                <p>
                    ↪ En una taza con agua caliente, añade una cucharada de manzanilla.<br> 
                    ↪ Tapa y deja reposar entre 5 y 10min. <br>
                    ↪ Pasa el líquido por un colador y disfrutalo tibio.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Cola de quirquincho</h3>
            <img src="img/hierbas/cola de quirquincho.webp" alt="Cola de quirquincho" loading="lazy">

<?php

$sql_quirquincho= "SELECT * FROM productos WHERE nombre='Cola de quirquincho'";

$resultado_quirquincho= $conexion->query($sql_quirquincho);

$quirquincho= $resultado_quirquincho->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($quirquincho["estado"]); ?>">

<?php

if($quirquincho["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥ Mejora el deseo sexual:</strong>
                    Funciona como un vigorizante natural para hombres y mujeres.
                </li>

                <li>
                    <strong>➥ Protege el cerebro:</strong>
                    Ayuda a cuidar las neuronas y mejora la memoria.
                </li>

                <li>
                    <strong>➥ Aumento de energía:</strong>
                    Combate el cansancio físico y el agotamiento mental.
                </li>
            </ul>

            <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $quirquincho["precio100"]; ?></p>

                    <p><strong>50 g:</strong> $<?php echo $quirquincho["precio50"]; ?></p>

                </div>

            <div class="consumo-hierbas">
                <h4>🍵 Como preparar</h4>

                <p>
                    ↪ Hierve agua y colocalo en una taza.<br> 
                    ↪ Añade una cucharita muy pequeña de la cola de menta.<br>
                    ↪ Tapa la taza y déjala reposar entre 10 y 15min, cuela el liquido y tómalo.<br>
                    <b>Puedes endulzarlo si te parece muy amargo.</b><br><br>
                    <b>💡También puedes agregar solo una ramita pequeña dentro del termo con agua caliente o en el mate.</b>
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">

            <h3>🌺 Flor de Jamaica (Hibiscus)</h3>

            <img src="img/hierbas/flor hibiscus.png" alt="Flor hibiscus" loading="lazy">

<?php

$sql_jamaica= "SELECT * FROM productos WHERE nombre='Flor de jamaica'";

$resultado_jamaica= $conexion->query($sql_jamaica);

$jamaica= $resultado_jamaica->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($jamaica["estado"]); ?>">

<?php

if($jamaica["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥ Baja la presión: </strong>
                    Ayuda a controlar la presión baja y limpia las arterias.
                </li>

                <li>
                    <strong>➥ Bajar de peso:</strong>
                    Evita que tu cuerpo absorba tanta grasa y azúcares.
                </li>

                <li>
                    <strong>➥ Elimina líquidos:</strong>
                    Actúa como un diurético, lo que quita la hinchazón del cuerpo.
                </li>

                <li>
                    <strong>➥ Combate el colesterol:</strong>
                    Reduce la grasa mala en la sangre.
                </li>

                <li>
                    <strong>➥ Contiene gran cantidad de Vitaminas:</strong>
                    Fortalece las defensas para no enfermarse de seguido.
                </li>
            </ul>

            <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $jamaica["precio100"]; ?></p>

                    <p><strong>50 g:</strong> $<?php echo $jamaica["precio50"]; ?></p>

                </div>

            <div class="consumo-hierbas">
                <h4>🍵 Como preparar</h4>

                <p>
                    ↪ Pon a calentar 1 litro de agua.<br>
                    ↪ Cuando empiece a hervir, añade 2 cdas soperas de flores secas de Jamaica (10gr).<br>
                    ↪ Apaga el fuego, tapa la olla y deja reposar 10min.<br>
                    ↪ Cuela el liquido y tomalo caliente o dejalo enfriar para tomarlo como agua fresca.<br><br>
                    <b>💡Evita el azúcar. Si prefieres endulzar, usa un toque de Stevia o miel.</b>
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>🍃 Menta</h3>
            <img src="img/hierbas/menta.jpg" alt="Menta" loading="lazy">


<?php

$sql_menta= "SELECT * FROM productos WHERE nombre='Menta'";

$resultado_menta= $conexion->query($sql_menta);

$menta= $resultado_menta->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($menta["estado"]); ?>">

<?php

if($menta["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">
            
            <ul>
                <li>
                    <strong>➥ Mejora la digestión:</strong>
                    Alivia gases, la hinchazón y el dolor de panza.
                </li>

                <li>
                    <strong>➥ Descongestiona:</strong>
                    Ayuda a respirar mejor cuando tienes gripe o tos.
                </li>

                <li>
                    <strong>➥ Calma dolores:</strong>
                    Calma dolores de cabeza y dolores musculares.
                </li>

                <li>
                    <strong>➥ Quita mal aliento:</strong>
                    Elimina las bacterias de la boca.
                </li>

                <li>
                    <strong>➥ Relaja:</strong>
                    Ayuda a bajar el estrés y la ansiedad.
                </li>
            </ul>

            
            <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $menta["precio100"]; ?></p>

                    <p><strong>50 g:</strong> $<?php echo $menta["precio50"]; ?></p>

                </div>

            <div class="consumo-hierbas">
                <h4>🍵 Como preparar</h4>

                <p>
                    ↪ Coloca agua caliente en una taza.<br>
                    ↪ Añade 1 cucharita de menta.<br>
                    ↪ Tapa y deja reposar 10min.<br>
                    ↪ Cuela y ya esta listo para disfrutar!
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Laurel</h3>
            <img src="img/hierbas/laurel.png" alt="Laurel" loading="lazy">

<?php

$sql_laurel= "SELECT * FROM productos WHERE nombre='Laurel'";

$resultado_laurel= $conexion->query($sql_laurel);

$laurel= $resultado_laurel->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($laurel["estado"]); ?>">

<?php

if($laurel["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>
            

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥ Alivia la digestión:</strong>
                    Reduce gases, la hinchazón y dolor de panza.
                </li>

                <li>
                    <strong>➥ Mejora la respiración:</strong>
                    Combate la tos y desinflama los pulmones.
                </li>

                <li>
                    <strong>➥ Reduce dolores:</strong>
                    Alivia molestias en músculos y articulaciones.
                </li>

                <li>
                    <strong>➥ Calma el estrés:</strong>
                    Relaja la mente y ayuda a dormir mejor.
                </li>

                <li>
                    <strong>➥ Controla el azúcar:</strong>
                    Ayuda a regular los niveles de glucosa en sangre.
                </li>
            </ul>

             <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $laurel["precio100"]; ?></p>

                    <p><strong>30 g:</strong> $<?php echo $laurel["precio30"]; ?></p>

                </div>


            <div class="consumo-hierbas">
                <h4>🍵 Como preparar</h4>

                <p>
                     ↪ Hierve de 3 a 4 hojas secas con agua por 5min.<br>
                     ↪ Tapa y deja reposar.<br>
                     ↪ Colocalo en una taza y tomalo para la digestión o el estrés.
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tomillo</h3>
            <img src="img/hierbas/tomillo.png" alt="Tomillo" loading="lazy">

<?php

$sql_tomillo= "SELECT * FROM productos WHERE nombre='Tomillo'";

$resultado_tomillo= $conexion->query($sql_tomillo);

$tomillo= $resultado_tomillo->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($tomillo["estado"]); ?>">

<?php

if($tomillo["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>



            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥ Alivia la tos:</strong>
                    Abre los pulmones y te ayuda a sacar las flemas cuando estás
                    resfriado.
                </li>

                <li>
                    <strong>➥ Mejora la digestión:</strong>
                    Evita gases y quita el dolor de panza después de comer pesado.
                </li>

                <li>
                    <strong>➥ Mata gérmenes:</strong>
                    Funciona como escudo que limpia y combate bacterias y hongos.
                </li>

                <li>
                    <strong>➥ Protege tus células:</strong>
                    Mantiene tu cuerpo fuerte y sano gracias a sus antioxidantes.
                </li>
            </ul>

             <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $tomillo["precio100"]; ?></p>

                    <p><strong>50 g:</strong> $<?php echo $tomillo["precio50"]; ?></p>

                </div>

            <div class="consumo-hierbas">
                <h4>🍵 Como preparar</h4>

                <p>
                    ↪ Hierve agua.<br>
                    ↪ Coloca en una taza y añade una cucharadita de tomillo.<br>
                    ↪ Tapa la taza y deja reposar 10min.<br>
                    ↪ Cuela y disfruta!<br><br>
                    <b>💡Puedes endulzarlo con miel y agregar unas gotas de limón.</b>
                </p>
            </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Zarza</h3>
            <img src="img/hierbas/zarza.jpg" alt="Zarza" loading="lazy">

<?php

$sql_zarza= "SELECT * FROM productos WHERE nombre='Zarza'";

$resultado_zarza= $conexion->query($sql_zarza);

$zarza= $resultado_zarza->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($zarza["estado"]); ?>">

<?php

if($zarza["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Limpia la piel:</strong>
                        Combate el acné, las ecemas, la psoriasis y la dermatitis.
                    </li>

                    <li>
                        <strong>➥ Purifica la sangre:</strong>
                        Funciona como un excelente depurativo natural que elimina toxinas.
                    </li>

                    <li>
                        <strong>➥ Evita retención de líquidos:</strong>
                        Tiene un fuerte efecto diurético que estimula el trabajo de los riñones.
                    </li>

                    <li>
                        <strong>➥ Alivia dolores:</strong>
                        Reduce la inflamación en las articulaciones, siendo útil para el reumatismo y la artritis.
                    </li>

                    <li>
                        <strong>➥ Protege el hígado:</strong>
                        Mejora la función hepática y defiendea a las células del cuerpo.
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $zarza["precio100"]; ?></p>

                    <p><strong>50 g:</strong> $<?php echo $zarza["precio50"]; ?></p>

                </div>

                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>

                    <p>
                        ↪ Hierve con agua una cucharada sopera (aprox. 5 y 10gr) de zarza.<br>
                        ↪ Dejalo a fuego suave durante 5-10min.<br>
                        ↪Apaga el fuego, tapa el recipiente y deja reposar durante 10min.<br>
                        ↪ Colar el líquido y puedes tomarlo tanto tibio como frío.<br>
                    </p>
                </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Peperina</h3>
            <img src="img/hierbas/peperina.jpg" alt="Peperina" loading="lazy">

<?php

$sql_peperina= "SELECT * FROM productos WHERE nombre='Peperina'";

$resultado_peperina= $conexion->query($sql_peperina);

$peperina= $resultado_peperina->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($peperina["estado"]); ?>">

<?php

if($peperina["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Alivia la digestió:</strong>
                        Calma el dolor de panza, reduce gases, evita la pesadez después de comer y ayuda contra 
                        los vómitos.
                    </li>

                    <li>
                        <strong>➥ Mejora la respiración:</strong>
                        Ayuda a abrir los bronquios, limpia los pulmones y alivia la tos
                        o los resfríos.
                    </li>

                    <li>
                        <strong>➥ Calma los nervios:</strong>
                        Funciona como relajante natural que ayuda a bajar el estrés y alivia
                        los dolores de cabeza.
                    </li>
                </ul>


                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $peperina["precio100"]; ?></p>

                    <p><strong>50 g:</strong> $<?php echo $peperina["precio50"]; ?></p>

                </div>

                <div class="consumo-hierbas">

                    <h4>🍵 Como preparar</h4>

                    <p>
                        ↪ Añade la peperina en una taza con agua caliente.<br>
                        ↪ Tapa y deja reposar 10min.<br>
                        ↪ Cuela el liquido y tomalo.<br>
                        <b>⏰ Se consume tradicionalmente después de las comidas para favorecer la digestión.</b>
                    </p>
                </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Burrito</h3>
            <img src="img/hierbas/burrito.webp" alt="burrito" loading="lazy">


<?php

$sql_burrito= "SELECT * FROM productos WHERE nombre='Burrito'";

$resultado_burrito= $conexion->query($sql_burrito);

$burrito= $resultado_burrito->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($burrito["estado"]); ?>">

<?php

if($burrito["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">
                <ul>
                    <li>
                        <strong>➥ Mejora la digestión:</strong>
                        Alivia pesadez estomacal, elimina gases, calma los dolores de panza
                        y reduce la acidez.
                    </li>

                    <li>
                        <strong>➥ Calma los nervios:</strong>
                        Actúa como un ansiolítico y sedante natural que ayuda a bajar el estrés,
                        relajar la mente y dormir mejor.
                    </li>

                    <li>
                        <strong>➥ Aporta nutrientes:</strong>
                        Contiene antioxidantes y minerales (calcio, zinc y cobre).
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $burrito["precio100"]; ?></p>

                    <p><strong>50 g:</strong> $<?php echo $burrito["precio50"]; ?></p>

                </div>

                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>

                    <p>
                        ↪ En una taza de agua caliente, agrega 5 a 10gr de burrito, tapa y
                        deja reposar unos 10min.<br>
                        ↪ Cuela el líquido y tomalo caliente o tibio.<br><br>
                        <b>⏰ Consume de 1 a 2 tazas de té al día</b><br>
                        <b>🧉 Le puedes agregar al mate o al tereré.</b>
                    </p>
                </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">

            <h3>Moringa</h3>
            <img src="img/hierbas/moringa.webp" alt="moringa" loading="lazy">

<?php

$sql_moringa= "SELECT * FROM productos WHERE nombre='Moringa'";

$resultado_moringa= $conexion->query($sql_moringa);

$moringa= $resultado_moringa->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($moringa["estado"]); ?>">

<?php

if($moringa["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            
             <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Aporta nutrientes:</strong>
                        Llena tu cuerpo de Vitaminas, hierro, calcio y proteínas
                        de alta calidad.
                    </li>

                    <li>
                        <strong>➥ Contiene antioxidantes:</strong>
                        Protege tus células y combate el envejecimiento del cuerpo.
                    </li>

                    <li>
                        <strong>➥ Reduce inflamación:</strong>
                        Alivia dolores corporales e inflamaciones internas.
                    </li>

                    <li>
                        <strong>➥ Controla el azúcar:</strong>
                        Mantiene estables los niveles de glucosa en la sangre.
                    </li>

                    <li>
                        <strong>➥ Baja el colesterol:</strong>
                        Cuida tu corazón al reducir las grasas malas.
                    </li>

                    <li>
                        <strong>➥ Mejora la digestión:</strong>
                        Protege al estómago y ayuda a evitar la gastritis.
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>50 g:</strong> $<?php echo $moringa["precio50"]; ?></p>

                    <p><strong>30 g:</strong> $<?php echo $moringa["precio30"]; ?></p>

                </div>

                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar </h4>

                    <p>
                    ↪ Agrega moringa en una taza con agua caliente.<br>
                    ↪ Tapa y deja reposar 10min.<br>
                    ↪ Cuela el líquido y disfruta del "Té de Moringa".<br><br>
                    <b>💡 Puedes agregar unas gotas de limón o miel si preferís.</b><br>
                    <b>🧉 También le puedes agregar a tus mates.</b>
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Valeriana</h3>
            <img src="img/hierbas/valeriana.png" alt="Valeriana" loading="lazy">

<?php

$sql_valeriana= "SELECT * FROM productos WHERE nombre='Valeriana'";

$resultado_valeriana= $conexion->query($sql_valeriana);

$valeriana= $resultado_valeriana->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($valeriana["estado"]); ?>">

<?php

if($valeriana["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Combate el insomnio:</strong>
                        Ayuda a recponciliar el sueño más rápido y mejora la calidad
                        del descanso nocturno.
                    </li>

                    <li>
                        <strong>➥ Reduce la ansiedad:</strong>
                        Calma la mente, alivia el estrés y promueve una sensación de tranquilidad.
                    </li>

                    <li>
                        <strong>➥ Alivia dolores corporales:</strong>
                        Actúa como un relajante muscular natural y disminuye las molestias
                        de los cólicos estomacales o menstruales.
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>50 g:</strong> $<?php echo $valeriana["precio50"]; ?></p>
                    <p><strong>30 g:</strong> $<?php echo $valeriana["precio30"]; ?></p>


                </div>

                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>

                    <p>
                    ↪ En una taza con agua caliente, agrega 2 o 3 ramas de valeriana.<br>
                    ↪ Tapa y deja reposar unos 10min.<br>
                    ↪ Saca las ramas del agua y tómalo caliente.<br><br>
                    <b>💡 Puedes tomarlo 2hs antes de dormir, ya que su uso continuo durante dos semanas
                        suele ofrecer los mejores resultados!.</b>
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Stevia</h3>
            <img src="img/hierbas/stevia.png" alt="Stevia" loading="lazy">

<?php

$sql_stevia= "SELECT * FROM productos WHERE nombre='Stevia'";

$resultado_stevia= $conexion->query($sql_stevia);

$stevia= $resultado_stevia->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($stevia["estado"]); ?>">

<?php

if($stevia["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Controla el azúcar:</strong>
                        No eleva la glucosa en sangre, por lo que es ideal para personas
                        con diabetes.
                    </li>

                    <li>
                        <strong>➥ Cero calorías:</strong>
                        Ayuda a bajar de peso al reemplazar por completo el azúcar común.
                    </li>

                    <li>
                        <strong>➥ Presión saludable:</strong>
                        Ayuda a regular la presión arterial y mejora la circulación.
                    </li>
                </ul>

                
                <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>50 g:</strong> $<?php echo $stevia["precio50"]; ?></p>
                    <p><strong>30 g:</strong> $<?php echo $stevia["precio30"]; ?></p>


                </div>


                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>

                    <p>
                        🧉 Lo puedes agregar a los mates.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Boldo</h3>
            <img src="img/hierbas/boldo.webp" alt="Boldo" loading="lazy">

<?php

$sql_boldo= "SELECT * FROM productos WHERE nombre='Boldo'";

$resultado_boldo= $conexion->query($sql_boldo);

$boldo= $resultado_boldo->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($boldo["estado"]); ?>">

<?php

if($boldo["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Mejora la digestión:</strong>
                        Alivia pesadez estomacal después de comidas abundantes.
                    </li>

                    <li>
                        <strong>➥ Protege al hígado:</strong>
                        Estimula la producción de bilis y ayuda a depurar las toxinas del cuerpo.
                    </li>

                    <li>
                        <strong>➥ Reduce los gases:</strong>
                        Evita la hinchazón de la panza y ayuda a eliminar el exceso de gases.
                    </li>

                    <li>
                        <strong>➥ Elimina líquidos:</strong>
                        Actúa como un diurético natural para evitar la retención de agua.
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>20 g:</strong> $<?php echo $boldo["precio20"]; ?></p>
                    <p><strong>50 g:</strong> $<?php echo $boldo["precio50"]; ?></p>


                </div>

                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>
                    <p>
                        ↪ Poné algunas hojas secas en una taza con agua caliente.<br>
                        ↪ Tapá la taza y deja reposar entre 5-10min.<br>
                        ↪ Colá el líquido y tomalo tibio.<br><br>
                        <b>⏰ Para mejor digestón, puedes tomarla 1 taza después de almorzar o cenar (1-2 tazas por día).</b><br>
                        <b>💡 Si resulta muy amargo, puedes sumarle un chorrito de limón o un poquito de miel.</b>
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Graviola</h3>
            <img src="img/hierbas/graviola.jpg" alt="Graviola" loading="lazy">

<?php

$sql_graviola= "SELECT * FROM productos WHERE nombre='Graviola'";

$resultado_graviola= $conexion->query($sql_graviola);

$graviola= $resultado_graviola->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($graviola["estado"]); ?>">

<?php

if($graviola["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>
            
             <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Sube defensas:</strong>
                        Su contenido de Vitamina C protege al cuerpo.
                    </li>

                    <li>
                        <strong>➥ Alivia dolores:</strong>
                        Desinflama los músculos y las articulaciones.
                    </li>
                    
                    <li>
                        <strong>➥ Mejora la digestión:</strong>
                        Alivia el malestar del estómago y los cólicos.
                    </li>

                    <li>
                        <strong>➥ Ayuda a dormir:</strong>
                        Calma los nervios y combate el insomnio.
                    </li>

                    <li>
                        <strong>➥ Controla el cuerpo:</strong>
                        Ayuda a bajar la presión y el azúcar en sangre.
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>30 g:</strong> $<?php echo $graviola["precio30"]; ?></p>
                

                </div>


                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>

                    <p>
                        ↪ En una taza con agua caliente, agrega entre 3 y 5 hojas secas de graviola.<br>
                        ↪ Tapa la taza y deja reposar durante 10min.<br>
                        ↪ Cuela el líquido y puedes tomarlo tibio o frío.<br><br>
                        <b>💡 Puedes agregar un chorrito de limón o miel.</b><br>
                        <b>⏰ Se recomienda tomarlo tras las comidas o en momentos que se busca relajación.</b>
                    </p>
                </div>
                </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Palta anisada</h3>
            <img src="img/hierbas/palta anisada.png" alt="Palta anisada" loading="lazy">

<?php

$sql_palta= "SELECT * FROM productos WHERE nombre='Palta anisada'";

$resultado_palta= $conexion->query($sql_palta);

$palta= $resultado_palta->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($palta["estado"]); ?>">

<?php

if($palta["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Alivia la indigestión:</strong>
                        Calma gases, la pesadez y la hinchazón del estómago.
                    </li>

                    <li>
                        <strong>➥ Reduce los dolores:</strong>
                        Alivia cólicos menstruales y dolores de cabeza leves.
                    </li>

                    <li>
                        <strong>➥ Efecto relajante:</strong>
                        Calma los nervios y disminuye el estrés cotidiano.
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>100 g:</strong> $<?php echo $graviola["precio100"]; ?></p>
                

                </div>

                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>

                    <p>
                        ↪ En una taza con agua caliente, coloca una cucharadita de palta anisada.<br>
                        ↪ Tapa y deja reposar 10min.<br>
                        ↪ Cuela el líquido y tomalo.<br><br>
                        <b>🧉 Lo puedes agregar en los mates.</b>
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Ruda</h3>
            <img src="img/hierbas/ruda.webp" alt="Ruda" loading="lazy">

<?php

$sql_ruda= "SELECT * FROM productos WHERE nombre='Ruda'";

$resultado_ruda= $conexion->query($sql_ruda);

$ruda= $resultado_ruda->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($ruda["estado"]); ?>">

<?php

if($palta["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Alivia el estómago:</strong>
                        Calma cólicos, gases y mejora digestiones lentas.
                    </li>

                    <li>
                        <strong>➥ Regula menstruación:</strong>
                        Ayuda a equilibrar el ciclo y disminuye los dolores menstruales.
                    </li>

                    <li>
                        <strong>➥ Mejora la circulación:</strong>
                        Refuerza los vasos sanguíneo, ayudando con várices y piernas cansadas.
                    </li>

                    <li>
                        <strong>➥ Efecto relajante:</strong>
                        Reduce el estrés leve, los dolores de cabeza y ayuda a dormir mejor.
                    </li>

                    <li>
                        <strong>➥ Uso externo:</strong>
                        Combate piojos y calma dolores musculares o reumáticos en la piel.
                    </li>

                    <li>
                        <strong>➥ Tradicionalmente se usa en el hogar para alejar las malas energías.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>100 g:</strong> $<?php echo $ruda["precio30"]; ?></p>
                

                </div>

                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>

                    <p>
                        ↪ En una taza de agua caliente, agrega aprox. 1 o 2gr de ruda.<br>
                        ↪ Tapa y deja reposar 10min.<br>
                        ↪ Cuela el líquido y ya puedes tomarlo.<br><br>
                        🧉 Le puedes agregar al mate.<br>
                        <b>⏰ Se recomienda tomar solo 1 taza al día.</b><br>
                        <b>NO CONSUMIR POR MÁS DE 7 DÍAS SEGUIDOS</b><br>
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Lapacho</h3>
            <img src="img/hierbas/lapacho.jpg" alt="Lapacho" loading="lazy">

<?php

$sql_lapacho= "SELECT * FROM productos WHERE nombre='Lapacho'";

$resultado_lapacho= $conexion->query($sql_lapacho);

$lapacho= $resultado_lapacho->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($lapacho["estado"]); ?>">

<?php

if($lapacho["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

             <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Sube defensas:</strong>
                        Fortalece el sistema inmunológico frente a virus y resfríos.
                    </li>

                    <li>
                        <strong>➥ Calma dolores:</strong>
                        Actúa como antiinflamatorio natural para el cuerpo.
                    </li>
                    
                    <li>
                        <strong>➥ Combate hongos y bacterias:</strong>
                        Ayuda a frenar infecciones comunes.
                    </li>

                    <li>
                        <strong>➥ Protege las células:</strong>
                        Aporta antioxidantes que cuidan el organismo.
                    </li>

                    <li>
                        <strong>➥ Limpia el cuerpo:</strong>
                        Colabora en los procesos de digestión y depuración.
                    </li>
                </ul>

                 <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>50 g:</strong> $<?php echo $lapacho["precio50"]; ?></p>
                

                </div>

                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>
                    <p>
                        ↪ Hervís una cucharada de lapacho en una taza de agua durante 5min.<br>
                        ↪ Apagás el fuego, dejás reposar y colás antes de tomar.<br><br>
                        <b>🧉 Lo puedes añadir al mate.</b>
                    </p>
                </div>
            </div>
        </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Amargon - Diente de Leon</h3>
        <img src="img/hierbas/Amargon-Diente-de-Leon.png" alt="Amargón-diente de león" loading="lazy">

<?php

$sql_amargon= "SELECT * FROM productos WHERE nombre='Amargón-diente de león'";

$resultado_amargon= $conexion->query($sql_amargon);

$amargon= $resultado_amargon->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($amargon["estado"]); ?>">

<?php

if($amargon["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info">
                  ▼ Tocá para mas información
            </p>

            <div class="contenido-producto">

                <ul>
                    <li>
                        <strong>➥ Limpia el hígado:</strong>
                        Ayuda a desintoxicarlo y mejora la digestión de las grasas.
                    </li>

                    <li>
                        <strong>➥ Elimina líquidos:</strong>
                        Actúa como un diurético, lo que ayuda a deshinchar el cuerpo y limpiar los riñones.
                    </li>

                    <li>
                        <strong>➥ Mejora la digestión:</strong>
                        Alivia el malestar estomacal y combate el estreñimiento leve.
                    </li>

                    <li>
                        <strong>➥ Aporta nutrientes:</strong>
                        Contiene gran cantidad de vitaminas y minerales buenos para las defensas.
                    </li>
                </ul>

                
                 <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>20 g:</strong> $<?php echo $amargon["precio20"]; ?></p>
                

                </div>

                <div class="consumo-hierbas">
                    <h4>🍵 Como preparar</h4>

                    <p>
                        ↪ En una taza con agua caliente, agrega 1 o 2 cucharaditas de amargon.<br>
                        ↪ Tapa y deja reposar 10min.<br>
                        ↪ Cuela el líquido y ya está listo para tomar.<br><br>
                        <b>🧉 Puedes agregar a tus mates</b>
                    </p>
                </div>
            </div>
       </div> 

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Carqueja</h3>
        <img src="img/hierbas/carqueja.webp" alt="Carqueja" loading="lazy">

<?php

$sql_carqueja= "SELECT * FROM productos WHERE nombre='Carqueja'";

$resultado_carqueja= $conexion->query($sql_carqueja);

$carqueja= $resultado_carqueja->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($carqueja["estado"]); ?>">

<?php

if($carqueja["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info">
            ▼ Tocá para mas información
        </p>

        <div class="contenido-producto">

            <ul>
                <li>
                    <strong>➥ Mejora la digestión:</strong>
                    Alivia la acidez, los gases, la gastritis y la pesadez estomacal.
                </li>

                <li>
                    <strong>➥ Protege al hígado:</strong>
                    Ayuda a limpiar el organismo y estimula la producción de bilis.
                </li>

                <li>
                    <strong>➥ Elimina líquidos:</strong>
                    Actúa como un diurético, lo que ayuda a deshinchar el cuerpo.
                </li>

                <li>
                    <strong>➥ Regula el azúcar:</strong>
                    Colabora en el control de la glucemia en la sangre.
                </li>
            </ul>

            <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>50 g:</strong> $<?php echo $carqueja["precio50"]; ?></p>
                

                </div>

            <div class="consumo-hierbas">
                <h4>🍵 Como preparar</h4>
                
                <p>
                    ↪ En una taza con agua caliente, agrega 1 cucharada de carqueja.<br>
                    ↪ Tapá la taza y deja reposar 10min.<br>
                    ↪ Colá la preparación antes de tomarla.<br><br>
                    <b>⏰ Tomar entre 1 y 3 tazas al día, toma después de las comidas principales (almuerzo y cena).</b> 
                </p>
            </div>
        </div>
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Pasionaria</h3>
        <img src="img/hierbas/pasionaria.png" alt="Pasionaria" loading="lazy">

<?php

$sql_pasionaria= "SELECT * FROM productos WHERE nombre='Pasionaria'";

$resultado_pasionaria= $conexion->query($sql_pasionaria);

$pasionaria= $resultado_pasionaria->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($pasionaria["estado"]); ?>">

<?php

if($pasionaria["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info">
             ▼ Tocá para mas información
        </p>

       <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥ Reduce la ansiedad:</strong>
                Alivia el estrés, el nerviosismo y la tensión del día.
            </li>

            <li>
                <strong>➥ Combate el insomnio:</strong>
                Ayuda a dormir más rápido y a tener un sueño más profundo.
            </li>

            <li>
                <strong>➥ Alivia dolores musculares:</strong>
                Relaja el cuerpo y calma tensiones o contracturas.
            </li>
            
            <li>
                <strong>➥ Mejora la digestión:</strong>
                Calma los dolores de panza causados por los nervios.
            </li>
        </ul>

         <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>20 g:</strong> $<?php echo $pasionaria["precio20"]; ?></p>
                

        </div>

        <div class="consumo-hierbas">
            <h4>🍵 Como preparar</h4>

            <p>
                ↪ En una taza con agua caliente, agrega una cucharadita de pasionaria.<br>
                ↪ Tapa y deja reposar 10min.<br>
                ↪ Colá el líquido y ya lo puedes tomar.<br><br>
                <b>⏰ Si es para el estrés, se toma durante el día. <br>
                Si es para dormir, se toma una taza media hora antes de acostarse.</b>
            </p>
        </div>
       </div> 
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Alcachofa</h3>
        <img src="img/hierbas/alcachofa.png" alt="Alcachofa" loading="lazy">

<?php

$sql_alcachof= "SELECT * FROM productos WHERE nombre='Alcachofa'";

$resultado_alcachof= $conexion->query($sql_alcachof);

$alcachof= $resultado_alcachof->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($alcachof["estado"]); ?>">

<?php

if($alcachof["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


         <p class="abrir-info">
             ▼ Tocá para mas información
        </p>

       <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥ Protege al hígado:</strong>
                Estimula la producción de bilis y ayuda a limpiar toxinas.
            </li>

            <li>
                <strong>➥ Mejora la digestión:</strong>
                Alivia los gases, la pesadez y ayuda a procesar las grasas.
            </li>

            <li>
                <strong>➥ Elimina líquidos:</strong>
                Actúa como diurético, lo que reduce la hinchazón del cuerpo.
            </li>

            <li>
                <strong>➥ Controla el colesterol:</strong>
                Ayuda a bajar los niveles de grasa mala en la sangre.
            </li>
        </ul>

        <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>50 g:</strong> $<?php echo $alcachof["precio50"]; ?></p>
                

        </div>

        <div class="consumo-hierbas">
            <h4>🍵 Como preparar</h4>

            <p>
                 En una taza con agua caliente, agrega 1 cucharadita de alcachofa.<br>
                ↪ Tapa la taza y deja reposar 10min.<br>
                ↪ Cuela el líquido y ya se puede consumir.<br><br>
                <b>⏰ Lo ideal es tomar de 2 a 3 tazas al día.</b><br>
                <b>Se recomienda tomarlo antes de las comidas principales (almuerzo y cena).</b>
            </p>
        </div>
       </div>
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Melisa</h3>
        <img src="img/hierbas/melisa.png" alt="Melisa" loading="lazy">

<?php

$sql_meli= "SELECT * FROM productos WHERE nombre='Melisa'";

$resultado_meli= $conexion->query($sql_meli);

$meli= $resultado_meli->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($meli["estado"]); ?>">

<?php

if($meli["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

         <p class="abrir-info">
             ▼ Tocá para mas información
        </p>

       <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥ Reduce el estrés:</strong>
                Calma la ansiedad y los nervios.
            </li>

            <li>
                <strong>➥ Mejora el sueño:</strong>
                Ayuda a dormir mejor y combate el insomnio.
            </li>

            <li>
                <strong>➥ Alivia la digestión:</strong>
                Quita los gases, la hinchazón y los dolores de panza.
            </li>

            <li>
                <strong>➥ Calma dolores:</strong>
                Alivia dolores de cabeza y dolores menstruales.
            </li>

            <li>
                <strong>➥ Protege el corazón:</strong>
                Controla las palpitaciones causadas por los nervios.
            </li>
        </ul>

         <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>50 g:</strong> $<?php echo $meli["precio50"]; ?></p>
                

        </div>

        <div class="consumo-hierbas">
            <h4>🍵 Como preparar</h4>

            <p>
                ↪ En una taza con agua caliente, agrega 1 cucharada pequeña de melisa (unos 2 o 3gr).<br>
                ↪ Tapá la taza y dejá reposar 10min.<br>
                ↪ Colá la preparación y tomala.<br>
                <b>💡 Podés endulzarla con un pcoo de miel si preferís.</b><br>
                <b>🧉 Le puedes añadir al mate (ideal para el día a día).</b>
            </p>
        </div>
       </div>
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Cola de caballo</h3>
        <img src="img/hierbas/cola de caballo.png" alt="Cola de caballo" loading="lazy">

<?php

$sql_caballo= "SELECT * FROM productos WHERE nombre='Cola de caballo'";

$resultado_caballo= $conexion->query($sql_caballo);

$caballo= $resultado_caballo->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($caballo["estado"]); ?>">

<?php

if($caballo["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


        <p class="abrir-info">
             ▼ Tocá para mas información
        </p>

       <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥ Elimina líquidos:</strong>
                Actúa como un potente diurético natural contra la retención de líquidos.
            </li>

            <li>
                <strong>➥ Fortalece el cuerpo:</strong>
                Su alto contenido de silicio mejora la salud de uñas, cabello y huesos.
            </li>

            <li>
                <strong>➥ Limpia los riñones:</strong>
                Ayuda a cuidar el sistema urinario y a eliminar toxinas.
            </li>

            <li>
                <strong>➥ Ayuda a cicatrizar:</strong>
                Favorece la curación de heridas de la piel cuando se usa de forma externa.
            </li>
        </ul>

         <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>50 g:</strong> $<?php echo $caballo["precio50"]; ?></p>
                

        </div>

        <div class="consumo-hierbas">
            <h4>🍵 Como preparar</h4>

            <p>
                ↪ Agrega agua caliente en una taza y añade 1 cucharadita de cola de caballo.<br>
                ↪ Tapá la taza y deja reposar 10min.<br>
                ↪ Colá el líquido y ya puedes consumir caliente o fría.<br><br>
                <b>🩹 La infusión fría se puede aplicar sobre la piel para limpieza o cuidado del cabello.</b><br>
            </p>
        </div>
       </div>
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Yerba de pollo</h3>
        <img src="img/hierbas/yerba de pollo.webp" alt="Yerba de pollo" loading="lazy">

<?php

$sql_pollo= "SELECT * FROM productos WHERE nombre='Yerba de pollo'";

$resultado_pollo= $conexion->query($sql_pollo);

$pollo= $resultado_pollo->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($pollo["estado"]); ?>">

<?php

if($pollo["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

         <p class="abrir-info">
             ▼ Tocá para mas información
        </p>

       <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥ Alivia el empacho:</strong>
                Calma la indigestión, los gases y el dolor de panza.
            </li>

            <li>
                <strong>➥ Limpia el cuerpo:</strong>
                Ayuda a eliminar líquidos y toxinas a través de la orina.
            </li>

            <li>
                <strong>➥ Desinflama:</strong>
                Reduce la hinchazón en el cuerpo y las articulaciones.
            </li>

            <li>
                <strong>➥ Protege al hígado:</strong>
                Mejora el funcionamiento del sistema digestivo en general.
            </li>
        </ul>

         <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>30 g:</strong> $<?php echo $pollo["precio30"]; ?></p>
                

        </div>

        <div class="consumo-hierbas">
            <h4>🍵 Como preparar</h4>

            <p>
                ↪ En una taza con agua caliente, agrega 1 cucharadita de yerba de pollo.<br>
                ↪ Tapar la taza y dejá reposar 10min.<br>
                ↪ Colar el líquido antes de beberlo.<br>
            </p>
        </div>
       </div>
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Salvia</h3>
        <img src="img/hierbas/salvia.webp" alt="Salvia" loading="lazy">

<?php

$sql_salvia= "SELECT * FROM productos WHERE nombre='Salvia'";

$resultado_salvia= $conexion->query($sql_salvia);

$salvia= $resultado_salvia->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($salvia["estado"]); ?>">

<?php

if($salvia["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info">
             ▼ Tocá para mas información
        </p>

       <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥ Mejora la digestión:</strong>
                Alivia los gases, la hinchazón y el dolor de panza.
            </li>

            <li>
                <strong>➥ Controla los sofocos:</strong>
                Reduce los calores y la sudoración excesiva durante la menopausia.
            </li>

            <li>
                <strong>➥ Alivia la garganta:</strong>
                Desinflama y combate bacterias al usarla para hacer gárgaras.
            </li>

            <li>
                <strong>➥ Ayuda a la mente:</strong>
                Mejora la memoria, la concentración y la atención.
            </li>

            <li>
                <strong>➥ Baja el azúcar:</strong>
                Ayuda a disminuir los niveles de glucosa en la sangre.
            </li>

            <li>
                <strong>➥ Cuida las células:</strong>
                Sus antioxidantes protegen al cuerpo del envejecimiento celular.
            </li>
        </ul>

        <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>30 g:</strong> $<?php echo $salvia["precio30"]; ?></p>
                

        </div>

        <div class="consumo-hierbas">
            <h4>🍵 Como preparar</h4>

            <p>
                ↪ Agrega agua caliente en una taza, luego añade una cucharadita (aprox. 1-2gr) de salvia.<br>
                ↪ Tapá la taza y deja reposar 10min.<br>
                ↪ Colá el líquido y ya puedes consumirla.<br><br>
                <b>💡 Puedes endulzarlo con miel o agregarle unas gotas de limón.</b>
                <b>⏰ Beber entre 2 y 3 tazas al día.</b><br>
                <b>Consumirla después de las comidas principales(almuerzo y cena) para mejorar la digestión.</b>
            </p>
        </div>
       </div>
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Eucalipto</h3>
        <img src="img/hierbas/eucalipto.webp" alt="Eucalipto" loading="lazy">


<?php

$sql_euca= "SELECT * FROM productos WHERE nombre='Eucalipto'";

$resultado_euca= $conexion->query($sql_euca);

$euca= $resultado_euca->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($euca["estado"]); ?>">

<?php

if($euca["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info">
             ▼ Tocá para mas información
        </p>

       <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥ Destapa las vías respiratorias:</strong>
                Ayuda a expulsar los mocos y alivia la tos o la congestión.
            </li>

            <li>
                <strong>➥ Combate gérmenes:</strong>
                Funciona como un desinfectante natural contra bacterias y virus.
            </li>

            <li>
                <strong>➥ Calma el dolor:</strong>
                Reduce la inflamación en los músculos y ayuda a aliviar los dolores de cabeza.
            </li>

            <li>
                <strong>➥ Mejora el aliento:</strong>
                Elimina las bacterias de la boca y cuida las encías.
            </li>
        </ul>

        <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>50 g:</strong> $<?php echo $euca["precio50"]; ?></p>
                

        </div>

       <div class="consumo-hierbas">
        <h4>🍵 Como preparar</h4>

        <p>
            ↪ En una taza con agua caliente, agrega 2-3gr de las hojas de eucalipto.<br>
            ↪ Tapá la taza y dejá reposar 10min.<br>
            ↪ Colá el líquido y ya está listo para consumirla.<br><br>
            <b>⏰ La dosis general para adultos es de 2-3 tazas al día</b>
        </p>
       </div>
       </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Ambay</h3>
        <img src="img/hierbas/Ambay.png" alt="Ambay" loading="lazy">

<?php

$sql_ambay= "SELECT * FROM productos WHERE nombre='Ambay'";

$resultado_ambay= $conexion->query($sql_ambay);

$ambay= $resultado_ambay->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($ambay["estado"]); ?>">

<?php

if($ambay["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info">
             ▼ Tocá para mas información
        </p>

       <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥ Alivia la tos:</strong>
                Calma la tos seca y los accesos de tos.
            </li>

            <li>
                <strong>➥ Expulsa la mucosidad:</strong>
                Funciona como un excelente expectorante, ideal para resfríos y bronquitis.
            </li>

            <li>
                <strong>➥ Mejora la respiración:</strong>
                Relaja los bronquios y ayuda a aliviar los síntomas del asma.
            </li>

            <li>
                <strong>➥ Baja la fiebre:</strong>
                Tiene un efecto leve para reducir la temperatura corporal.
            </li>

            <li>
                <strong>➥ Cuida el corazón: </strong>
                Actúa como un tónico suave que ayuda a regular los latidos.
            </li>
        </ul>

         <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>20 g:</strong> $<?php echo $ambay["precio20"]; ?></p>
                

        </div>

        <div class="consumo-hierbas">
            <h4>🍵 Como preparar</h4>

            <p>
                ↪ En una taza con agua caliente, coloca 1 o 2 cucharaditas de la hierba ambay.<br>
                ↪ Tapá la taza y dejá reposar unos 10min.<br>
                ↪ Colá el líquido y ya lo puedes beber.<br><br>
                <b>⏰ Podés tomar entre 2 y 3 tazas al día, preferentemente calentito.</b>
                <b>💡 Lo puedes endulzar con 1 cucharadita de miel.</b>
            </p>
        </div>
        </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Cedron</h3>
        <img src="img/hierbas/cedron.webp" alt="Cedron" loading="lazy">


<?php

$sql_cedron= "SELECT * FROM productos WHERE nombre='Cedrón'";

$resultado_cedron= $conexion->query($sql_cedron);

$cedron= $resultado_cedron->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($cedron["estado"]); ?>">

<?php

if($cedron["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info">
             ▼ Tocá para mas información
        </p>

       <div class="contenido-producto">

        <ul>
            <li>
                <strong>➥ Mejora la digestión:</strong>
                Alivia los gases, la hinchazón y calma los dolores de panza.
            </li>

            <li>
                <strong>➥ Reduce el estrés:</strong>
                Ayuda a relajar el cuerpo, calma la ansiedad y ayuda a dormir mejor.
            </li>

            <li>
                <strong>➥ Cuida tus células:</strong>
                Tiene antioxidantes que protegen al cuerpo y desinflaman.
            </li>

            <li>
                <strong>➥ Combate bacterias:</strong>
                Ayuda a defender el cuerpo en estados gripales.
            </li>
        </ul>

         <div class="precios-producto">

                    <h4>💰 Precios</h4>
                    <p><strong>20 g:</strong> $<?php echo $cedron["precio20"]; ?></p>
                

        </div>





        <div class="consumo-hierbas">
            <h4>🍵 Como preparar</h4>

            <p>
                ↪ En una taza con agua caliente, agrega una cucharadita de cedron.<br>
                ↪ Tapá la taza y dejalo reposar 10min.<br>
                ↪ Colá y tomá caliente.<br><br>
                <b>⏰ Se recomienda tomar 1 taza después de almorzar o cenar para la digestión.</b><br>
                <b>También puedes tomar antes de acostarte para relajarte.</b>
                <b>🧉 Le puedes añadir al mate.</b>
            </p>
        </div>
       </div>
    </div>
    </div>
    </section>

    <!-- ==================== SECCIÓN FRUTOS SECOS ==================== -->

    <section id="frutsecos-categoria">

        <button class="btn-volver"
        onclick="volverCategorias()">
        ← Volver a Categorías
    </button>

    <h2 class="titulo-categoria">
        Frutos Secos
    </h2>

    <div class="grilla-productos">

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Almendras</h3>
            <img src="img/frutos secos/almendras.jpg" alt="Almendras" loading="lazy">

<?php

$sql_almendras = "SELECT * FROM productos WHERE nombre='Almendras'";

$resultado_almendras= $conexion->query($sql_almendras);

$almendras= $resultado_almendras->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($almendras["estado"]); ?>">

<?php

if($almendras["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Protege al corazón.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Regula el azúcar en sangre.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Promueve la salud de la piel y el cerebro.</strong>
            </li>
        </ul>
    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $almendras["precio100"]; ?></p>

    <p><strong>500 g:</strong> $<?php echo $almendras["precio500"]; ?></p>

    <p><strong>1 kg:</strong> $<?php echo $almendras["precio1000"]; ?></p>
    </div>

        

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Combinala con pasas de uva y semillas para un increible snack.<br>
                ⇢ Sumalas picadas al yogur con frutas o a la avena del desayuno.<br>
            </p>
        </div>
       </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Nueces</h3>
            <img src="img/frutos secos/nueces.png" alt="Nueces" loading="lazy">

<?php

$sql_nueces = "SELECT * FROM productos WHERE nombre='Nueces'";

$resultado_nueces= $conexion->query($sql_nueces);

$nueces= $resultado_nueces->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($nueces["estado"]); ?>">

<?php

if($nueces["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
               <span class="flecha-frutos">➥</span>
               <strong>Baja el colesterol "malo" y cuidan tus arterias.</strong>
            </li>


            <li>
            <span class="flecha-frutos">➥</span>
            <strong>Mejoran la memoria y protegen la salud de tu cerebro.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Gracias a su melatonina natural, ayuda a regular el sueño.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Aporta magnesio y potasio para tus músculos.</strong>
            </li>
        </ul>

        <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $nueces["precio100"]; ?></p>

    <p><strong>500 g:</strong> $<?php echo $nueces["precio500"]; ?></p>

    <p><strong>1 kg:</strong> $<?php echo $nueces["precio1000"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Sumalas picadas a tu yogur, avena o tazón de frutas para empezar el día con energía.<br>
                ⇢ Leva un poco a un lugar donde pasas más tiempo para calmar el hambre entre comidas.<br>
                ⇢ Pastas y salsas.<br>
                ⇢ Agregalas a tus budines, galletitas de avena, panes caseros o brownies.<br>
            </p>
        </div>
       </div>
        </div>

    <div class="producto-card" onclick="alternarProducto(this)">
       <h3>Pistacho</h3> 
       <img src="img/frutos secos/pistacho.webp" alt="Pistachos" loading="lazy">

<?php

$sql_pistacho = "SELECT * FROM productos WHERE nombre='Pistacho'";

$resultado_pistacho= $conexion->query($sql_pistacho);

$pistacho= $resultado_pistacho->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($pistacho["estado"]); ?>">

<?php

if($pistacho["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

       <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Cuidan tu corazón.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Mantienen el azúcar en sangre controlado.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Gracias a sus nutrientes, protegen tus ojos del daño del sol y de pantallas.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Mejora la digestión.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>por su gran cantidad de potasio y magnesio, evitan los calambres.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $pistacho["precio100"]; ?></p>

    <p><strong>500 g:</strong> $<?php echo $pistacho["precio200"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Comelos solos, tostados y con una pizca de sal marina.<br>
                ⇢ Picá un puñado y sumalos a tu yogur con frutas.<br>
                ⇢ Trituralos bien y sumalos arriba de una bocha de helado de crema o chocolate amargo.<br>
                ⇢ Untá una tostada con queso crema o palta, y tira los pistachos picados por arriba.<br>
            </p>
        </div>
    </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Damasco deshidratado</h3>
        <img src="img/frutos secos/damasco deshidratado.jpg" alt="Damasco deshidratado" loading="lazy">

<?php

$sql_damasco = "SELECT * FROM productos WHERE nombre='Damasco'";

$resultado_damasco= $conexion->query($sql_damasco);

$damasco= $resultado_damasco->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($damasco["estado"]); ?>">

<?php

if($damasco["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Actúa como un motor para la digestión gracias a su fibra.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Cuida tus ojos y hace que tu piel se vea más sana.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Te ayuda a eliminar el exceso de líquido acumulado.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Es como un cargador natural cuando te sentís cansado.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Ideal para comer después de mover el cuerpo y recuperar fuerzas.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Colabora con mantener la estructura de todo tu esqueleto.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $damasco["precio100"]; ?></p>

    <p><strong>500 g:</strong> $<?php echo $damasco["precio200"]; ?></p>
    <p><strong>150 g:</strong> $<?php echo $damasco["precio150"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Cortalos en cubitos y sumalos a tu yogur natural con un toque de avena.<br>
                ⇢ Armá un frasco con nueces, almendras y damascos para acompañar el mate.<br>
            </p>
        </div>
    </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Maní sin sal</h3>
        <img src="img/frutos secos/mani sin sal.webp" alt="Maní sin sal" loading="lazy">

<?php

$sql_mani_sinsal = "SELECT * FROM productos WHERE nombre='Maní sin sal'";

$resultado_mani_sinsal= $conexion->query($sql_mani_sinsal);

$mani_sinsal= $resultado_mani_sinsal->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($mani_sinsal["estado"]); ?>">

<?php

if($mani_sinsal["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Reduce el colesterol "malo" y los triglicérido.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Te llena por más tiempo gracias a su fibra.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Ideal para los músculos por su magnesio y potasio.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Retrasa el envejecimiento de las células.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Al ser sin sodio, no sube la presión arterial.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $mani_sinsal["precio100"]; ?></p>

    <p><strong>150 g:</strong> $<?php echo $mani_sinsal["precio150"]; ?></p>
    <p><strong>1 kg:</strong> $<?php echo $mani_sinsal["precio1000"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Lo puedes mezclar con frutas como manzana o banana untadas con pasta de maní.<br>
                ⇢ Agrega en ensaldas picado para dar un toque crocante.<br>
                ⇢ En yogur o avena para tus desayunos o meriendas.
                ⇢ Lo puedes comer solo.<br>
            </p>
        </div>
    </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Maní con sal</h3>
        <img src="img/frutos secos/mani con sal.webp" alt="Maní con sal" loading="lazy">

 <?php

$sql_mani_consal = "SELECT * FROM productos WHERE nombre='Maní con sal'";

$resultado_mani_consal= $conexion->query($sql_mani_consal);

$mani_consal= $resultado_mani_consal->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($mani_consal["estado"]); ?>">

<?php

if($mani_consal["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Aporta vitaminas (E y complejo B) y minerales esenciales (magnesio, fósforo y potasio).</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Ayuda a la salud cardiovascular.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Mejora la función cerebral.</strong>
            </li>
        </ul>

     <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $mani_consal["precio100"]; ?></p>

    <p><strong>150 g:</strong> $<?php echo $mani_consal["precio150"]; ?></p>
    <p><strong>1 kg:</strong> $<?php echo $mani_consal["precio1000"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄Ideas para disfrutar</h4>
            <p>
                ⇢ Mezcla con trocitos de chocolate amarg y pasa de uva para un mix de energía.<br>
                ⇢ Cómelos solos acompañado de unos mates🧉.<br>
            </p>
        </div>
       </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Maní saborizado</h3>
        <img src="img/frutos secos/mani saborizado.png" alt="Maní saborizado" loading="lazy">

<?php

$sql_mani_saborizado = "SELECT * FROM productos WHERE nombre='Maní saborizado'";

$resultado_mani_saborizado= $conexion->query($sql_mani_saborizado);

$mani_saborizado= $resultado_mani_saborizado->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($mani_saborizado["estado"]); ?>">

<?php

if($mani_saborizado["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

         <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Te da energía y ayuda a los músculos.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Protegen a tu corazón y a tu salud.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Ayuda a tu panza y te llena rápido.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Cuidan tus células y tus defensas</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $mani_saborizado["precio100"]; ?></p>

    <p><strong>150 g:</strong> $<?php echo $mani_saborizado["precio150"]; ?></p>
    <p><strong>500 g:</strong> $<?php echo $mani_saborizado["precio500"]; ?></p>
    <p><strong>1 kg:</strong> $<?php echo $mani_saborizado["precio1000"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Sumalo a una picada saludable con aceitunas y daditos de queso.<br>
                ⇢ Cómelos solos acompañado de mates🧉
            </p>
        </div>
    </div>
    </div>
    </div>

    <!----------------------FRUTAS DESECAS------------------------>

    <h2 class="titulo-categoria subtitulo-categoria">
        Frutas Desecadas
    </h2>

    <div class="grilla-productos">

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Pasas Morochas</h3>
            <img src="img/frutos secos/pasas-de-uva.jpg" alt="Pasas de uva" loading="lazy">

<?php

$sql_pasas = "SELECT * FROM productos WHERE nombre='Pasas morochas'";

$resultado_pasas= $conexion->query($sql_pasas);

$pasas= $resultado_pasas->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($pasas["estado"]); ?>">

<?php

if($pasas["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Contienen azúcares naturales que dan fuerza rápidamente.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Ayudan a que el estómago funcione bien y evitan el estreñimiento</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Cuidan el corazón y controlan la presión.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Ayudan a tener defensas fuertes, evitar anemia y cuidar los huesos.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Protegen el cuerpo y ayudan a que las células no se dañen.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $pasas["precio100"]; ?></p>
    <p><strong>200 g:</strong> $<?php echo $pasas["precio200"]; ?></p>
    <p><strong>500 g:</strong> $<?php echo $pasas["precio500"]; ?></p>
    <p><strong>1 kg:</strong> $<?php echo $pasas["precio1000"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Con yogur y cereales.<br>
                ⇢ Podés preparar galletitas de avena y pasas, las clásicas.<br>
                ⇢ Budines y panes.
            </p>
        </div>
        </div>
        </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Pasas de uva Rubias</h3>
        <img src="img/frutos secos/pasas rubias.jpg" alt="Pasas de uva rubia" loading="lazy">


<?php

$sql_rubias = "SELECT * FROM productos WHERE nombre='Pasas de uva rubias'";

$resultado_rubias= $conexion->query($sql_rubias);

$rubias= $resultado_rubias->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($rubias["estado"]); ?>">

<?php

if($rubias["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


        <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Tienen azúcares naturales que te dan fuerza rápido.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Aportan calcio y boro, que cuidan tus huesos.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Tienen hierro que ayuda a evitar la anemia.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Su fibra ayuda a una mejor digestión.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>El potasio que contiene, ayuda a controlar la presión.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Tiene antioxidantes que ayudan a la protección del cuerpo.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

   

    <p><strong>100 g:</strong> $<?php echo $rubias["precio100"]; ?></p>
    <p><strong>200 g:</strong> $<?php echo $rubias["precio200"]; ?></p>
    <p><strong>500 g:</strong> $<?php echo $rubias["precio500"]; ?></p>
    <p><strong>1 kg:</strong> $<?php echo $rubias["precio1000"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <P>
                ⇢ Topping de yogur o avena.<br>
                ⇢ Qudan increíbles dentro de budines, galletas de avena y muffins.<br>
                ⇢ Puedes comerlas solas en cualquier momento del día.<br>
            </P>
        </div>
       </div> 
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Arándanos</h3>
        <img src="img/frutos secos/arandanos.webp" alt="Arándanos" loading="lazy">

<?php

$sql_arandanoseco = "SELECT * FROM productos WHERE nombre='Arándano seco'";

$resultado_arandanoseco= $conexion->query($sql_arandanoseco);

$arandanoseco= $resultado_arandanoseco->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($arandanoseco["estado"]); ?>">

<?php

if($arandanoseco["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

         <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Evitan infecciones de orina.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Protegen las células del desgaste.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Cuidan al corazón y bajan el colesterol "malo".</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Ayuda a la digestión por su fibra.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $arandanoseco["precio100"]; ?></p>
    <p><strong>200 g:</strong> $<?php echo $arandanoseco["precio200"]; ?></p>
    <p><strong>500 g:</strong> $<?php echo $arandanoseco["precio500"]; ?></p>
    <p><strong>1 kg:</strong> $<?php echo $arandanoseco["precio1000"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Con yogur y granola.<br>
                ⇢ Cocina avena con leche o agua, y échale arándanos arriba para que se hidraten un poco con calor.<br>
                ⇢ En licuados o batidos.<br>
                ⇢ Los puedes comer solos curante el día.
            </p>
        </div>
       </div>
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Dátiles</h3>
        <img src="img/frutos secos/datiles.jpg" alt="Dátiles" loading="lazy">


<?php

$sql_datiles = "SELECT * FROM productos WHERE nombre='Dátiles'";

$resultado_datiles= $conexion->query($sql_datiles);

$datiles= $resultado_datiles->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($datiles["estado"]); ?>">

<?php

if($datiles["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

         <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Previenen infecciones urinarias.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Contiene antioxidantes que ayudan a proteger las células y a mantener la piel y el cuerpo jóven.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Cuidan el corazón, regulan el colesterol "malo" y mejora la circulación de la sangre.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>250 g:</strong> $<?php echo $datiles["precio100"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Abrí el dátil a la mitad, sacale el carozo y ponele adentro una almendra o nuez.<br>
                ⇢ Rellenalos con un poco de manquequilla de maní.<br>
            </p>
        </div>
       </div>
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Higos negros</h3>
        <img src="img/frutos secos/higos negros.jpeg" alt="Higos negros" loading="lazy">

<?php

$sql_higos = "SELECT * FROM productos WHERE nombre='Higos negros'";

$resultado_higos= $conexion->query($sql_higos);

$higos= $resultado_higos->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($higos["estado"]); ?>">

<?php

if($higos["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Ayudan a proteger tu cuerpo del envejecimiento celular.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Contienen calcio y potasio, esenciales para tu organismo.</strong>
            </li>

            <li>
                <span class="flecha-frutos">➥</span>
                <strong>Ideales para un snack saludable ncualquier momento del día.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>250 g:</strong> $<?php echo $datiles["precio100"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Cortalos en pedacitos y sumalos a un yogur natural o una avena tibia. Quedan geniales si agregar un toque de canela.<br>
                ⇢ Untá una tostada de pan integral con queso crema o ricota, poné láminas de higos por encima y sumá unas nueces picadas.<br>
            </p>
        </div>
       </div>
       </div>
    </div>

    <!----------------------COCO Y DERIVADOS------------------------>

    <h2 class="titulo-categoria subtitulo-categoria">
        Coco Y Derivados
    </h2>

    <div class="grilla-productos">

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Coco rallado</h3>
            <img src="img/coco y derivados/coco rallado.webp" alt="Coco rallado" loading="lazy">

<?php

$sql_cocorallado = "SELECT * FROM productos WHERE nombre='Coco rallado'";

$resultado_cocorallado= $conexion->query($sql_cocorallado);

$cocorallado= $resultado_cocorallado->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($cocorallado["estado"]); ?>">

<?php

if($cocorallado["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Tiene grasas saludables que el cuerpo transforma en energía al instante.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Ayuda a que la panza funcione bien y da sensación de estar lleno.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Aporta gran cantidad de potasio y magnesio, que cuidan los músculos y el corazón.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $cocorallado["precio100"]; ?></p>
    <p><strong>500 g:</strong> $<?php echo $cocorallado["precio500"]; ?></p>
    <p><strong>1 kg:</strong> $<?php echo $cocorallado["precio1000"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Puedes hacer mate de leche con coco rallado.<br>
                ⇢ Pone en un bowl tu yogur preferido, sumale pedacitos de fruta fresca (banan, frutilla, kiwi),<br>
                ⇢ Espolvoreá una buena cucharada de coco rallado por encima para darle un toque crocante y aromátivo.<br>
            </p>
        </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
           <h3>Coco en escamas</h3> 
           <img src="img/coco y derivados/coco en escamas.jpg" alt="Coco escamas" loading="lazy">

<?php

$sql_cocoescamas = "SELECT * FROM productos WHERE nombre='Coco en escamas'";

$resultado_cocoescamas= $conexion->query($sql_cocoescamas);

$cocoescamas= $resultado_cocoescamas->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($cocoescamas["estado"]); ?>">

<?php

if($cocoescamas["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

           <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Gracias a su cantidad de fibra, ayuda a que el intestino funcione bien y te haga sentir lleno por más tiempo.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Da más energía de forma natural.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Te da nutrienetes importantes (potasio, hierro, magnesio y zinc), para mantener fuertes tus defensas y músculos.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $cocoescamas["precio100"]; ?></p>
    <p><strong>500 g:</strong> $<?php echo $cocoescamas["precio500"]; ?></p>
    <p><strong>1 kg:</strong> $<?php echo $cocoescamas["precio1000"]; ?></p>
    </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Mezcla yogur natural, frutas secas (banana o frutilla) y una lluvia de escamas por encima.<br>
                ⇢ Hornéalo junto con avena, almendras, miel y semillas para crear tu propia granola crocante.<br>
                ⇢ Le puedes añadir a tus mates para darle un sabor diferente🧉.
            </p>
        </div>
        </div>
        </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Aceite de coco neutro</h3>
        <img src="img/coco y derivados/aceite de coco neutro.jpg" alt="Aceite de coco" loading="lazy">


<?php

$sql_aceitecoco = "SELECT * FROM productos WHERE nombre='Aceite de coco neutro'";

$resultado_aceitecoco= $conexion->query($sql_aceitecoco);

$aceitecoco= $resultado_aceitecoco->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($aceitecoco["estado"]); ?>">

<?php

if($aceitecoco["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

         <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Estimula el metabolismo y ayuda a absorber mejor los nutrientes.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Funciona como un excelente hidratante natural para la piel y el cabello.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Contiene grasas saludable que el cuerpo transforma en energía inmediata.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Ayuda a regular los niveles de colesterol, reduciendo triglicéridos y aumentando el colesterol "bueno".</strong>
            </li>
        </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $aceitecoco["precio"]; ?></p>

        </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Usalo para cocinar verduras, carnes o pollo a fuego fuerte sin que el aceite se queme.<br>
                ⇢ Reemplazá la manteca o el aceite común en tortas, budines y muffins usando la misma cantidad.<br>
                ⇢ Sumá una cucharadita a tus batidos de frutas o proteínas para absorber mejor las vitaminas.<br>
                ⇢ Para crema corporal, usalo después de salir de la ducha para dejar la piel super suave, ideal para zonas como codos y talones.<br><br>
            </p>
        </div>
       </div> 
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Aceite de coco virgen</h3>
        <img src="img/coco y derivados/aceite de coco virgen.jpg" alt="Aceite de coco virgen" loading="lazy">


<?php

$sql_aceitecoco_virgen = "SELECT * FROM productos WHERE nombre='Aceite de coco virgen'";

$resultado_aceitecoco_virgen= $conexion->query($sql_aceitecoco_virgen);

$aceitecoco_virgen= $resultado_aceitecoco_virgen->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($aceitecoco_virgen["estado"]); ?>">

<?php

if($aceitecoco_virgen["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Fortalece el sistema inmunológico al combatir bacterias y hongos.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Contiene ácido láurico, que ayuda a combatir bacterias, hongos y virus.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Ideal para cocinar y freir porque no se quema ni se daña a altas temperaturas.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Ayuda a controlar el apetito de forma natural entre comidas.</strong>
            </li>
        </ul>

         <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $aceitecoco_virgen["precio"]; ?></p>

        </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ En ensaladas frescas, usalo derretido como aderezo junto con un toque de limón.<br><br>
                ⇢ Usalo para cocinar verduras, pollo o carne a la plancha porque aguanta muy bien el calor.<br><br>
                ⇢ Para mascarilla para pelo, aplicalo de medios a puntas una hora antes de lavarte la cabeza para dejarlo súper suave.<br><br>
                ⇢ Usalo directo sobre la piel después de bañarte para hidratar zonas secas como codos y rodillas.
            </p>
        </div>
       </div>
       </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Leche de coco en polvo</h3>
        <img src="img/coco y derivados/leche de coco en polvo.webp" alt="Leche de coco en polvo" loading="lazy">

<?php

$sql_lechecoco = "SELECT * FROM productos WHERE nombre='Leche de coco en polvo'";

$resultado_lechecoco= $conexion->query($sql_lechecoco);

$lechecoco= $resultado_lechecoco->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($lechecoco["estado"]); ?>">

<?php

if($lechecoco["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


        <p class="abrir-info-frutos">
             ✨ Descubrí sus propiedades
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-frutos">
            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Libre de gluten (sin TACC).</strong> 
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Mejora la digestión (gracias a sus grasas de fácil absorción).</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Fortalece las defensas del cuerpo.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Ayuda a controlar el peso al dar más saciedad.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Previene la anemia gracias a su contenido de hierro.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Cuida la salud de la piel y el cabello por sus vitaminas y antioxidantes.</strong>
            </li>

            <li>
                <span class="flecha-cocos">➥</span>
                <strong>Mantiene los músculos sanos por su aporte de magnesio y potasio.</strong>
            </li>
        </ul>

        <div class="precios-producto">
        <h4>💰 Precio</h4>

        <p>$<?php echo $lechecoco["precio"]; ?></p>

        </div>

        <div class="consumo-frutos">
            <h4>🥄 Ideas para disfrutar</h4>

            <p>
                ⇢ Agrega una cucharita de polvo directo a tu taza de cafe caliente para lograr una cremosidad increíble.<br>
                ⇢ Batila junto con banana, frutillas o mango congelado para obtener un desayuno súper energético.<br>
                ⇢ Mezclá el polvo con cacao amargo y agua caliente para una versión más liviana y sin lactosa.<br>
            </p>
        </div>
       </div>
       </div>
    </div>
    </section>

    <!-- ==================== SECCIÓN HARINAS ==================== -->

    <section id="harinas-categoria">

        <button class="btn-volver"
        onclick="volverCategorias()">
        ← Volver a Categorías
    </button>

    <h2 class="titulo-categoria titulo-harinas">
        🌾Harinas
    </h2>

    <div class="grilla-productos-harinas">

        <div class="producto-card producto-card-harina" onclick="alternarProducto(this)">
            <h3>Harina de Pistacho</h3>
            <img src="img/harinas y premezcla/harina pistacho.jpg" alt="Harina pistacho" loading="lazy">

<?php

$sql_harina_pistacho = "SELECT * FROM productos WHERE nombre='Harina de pistacho'";

$resultado_harina_pistacho= $conexion->query($sql_harina_pistacho);

$harina_pistacho= $resultado_harina_pistacho->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_pistacho["estado"]); ?>">

<?php

if($harina_pistacho["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-harinas">
            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Aporta proteínas vegetales, clave para los músculos</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Aporta mucha fibra, que mejora la digestión.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Da mucha saciedad, excelente para controlar el peso.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Es rica en antioxidantes, ideales para la vista y la piel.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Baja el colesterol malo y los trigilcéridos.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Controla el azúcar en la sangre.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Libre de gluten, ideal para celíacos.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_pistacho["precio500"]; ?></p>
    </div>

        <div class="consumo-harinas">
            <h4>👩‍🍳 Ideas para preparar</h4>

            <p>
                ➼ Galletitas saludables.<br><br>
                ➼ Budines y muffins, cambiá la parte de harina común por la de pistacho para que queden súper húmedos.<br><br>
                ➼ Panqueques verdes.<br><br>
                ➼ Trufas exprés, uní la harina con dátiles procesados o dulce de leche, armá bolitas y pasalas por coco rallado.
            </p>
        </div>
       </div>
        </div>

        <div class="producto-card producto-card-harina" onclick="alternarProducto(this)">
            <h3>Harina de Arroz</h3>
            <img src="img/harinas y premezcla/harina arroz.webp" alt="Harina de arroz" loading="lazy">

<?php

$sql_harina_arroz = "SELECT * FROM productos WHERE nombre='Harina de arroz'";

$resultado_harina_arroz= $conexion->query($sql_harina_arroz);

$harina_arroz= $resultado_harina_arroz->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_arroz["estado"]); ?>">

<?php

if($harina_arroz["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-harinas">
            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Aporta mucha energía.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Cuida al hígado (contiene colina).</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Rica en fibra (en su versión integral).</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Ayuda a controlar el colesterol.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Aporta hierro, calcio y Vitaminas B.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Baja en sodio.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Sin gluten (apta para celíacos).</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_arroz["precio500"]; ?></p>
    </div>

        <div class="consumo-harinas">
            <h4>👩‍🍳 Ideas para preparar</h4>

            <p>
                ➼ Panqueques de harina de arroz y avena.<br><br>
                ➼ Bizcochos y budines.<br><br>
                ➼ Crepes dulces, podes hacer la masa bien fina para rellenar con frutas, miel o chocolate.
            </p>
        </div>
        </div>
        </div>

        <div class="producto-card producto-card-harina" onclick="alternarProducto(this)">
            <h3>Harina de coco</h3>
            <img src="img/harinas y premezcla/harina coco.jpg" alt="Harina de coco" loading="lazy">

<?php

$sql_harina_coco = "SELECT * FROM productos WHERE nombre='Harina de coco'";

$resultado_harina_coco= $conexion->query($sql_harina_coco);

$harina_coco= $resultado_harina_coco->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_coco["estado"]); ?>">

<?php

if($harina_coco["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-harinas">
            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Alto contenido de fibra.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Controla el azúcar en la sangre.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Mejora la salud inmunológica y cardiovascular.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Libre de gluten.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Gran efecto saciante.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_coco["precio500"]; ?></p>
    </div>

        <div class="consumo-harinas">
            <h4>👩‍🍳 Ideas para preparar</h4>

            <p>
                ➼ Licuados y yogures, aporta sabor dulce natural y una textura más espesa.<br><br>
                ➼ En el mate o café.<br><br>
                ➼ Espesante de salsas (sopas, cremas o salsas), sin necesidad de usar harina de trigo o almidón.
            </p>
        </div>
        </div>
        </div>

        <div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">
            <h3>Harina de maíz</h3>
            <img src="img/harinas y premezcla/harina maiz.jpg" alt="Harina de maíz" loading="lazy">

<?php

$sql_harina_maiz = "SELECT * FROM productos WHERE nombre='Harina de maíz'";

$resultado_harina_maiz= $conexion->query($sql_harina_maiz);

$harina_maiz= $resultado_harina_maiz->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_maiz["estado"]); ?>">

<?php

if($harina_maiz["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
        </p>

       <div class="contenido-producto">

        <ul class="beneficios-harinas">
            <li>
                <span class="flecha-harinas">➥</span>
                <strong>No tiene gluten(ideal para celíacos).</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Aporta mucha energía, gracias a sus carbohidratos.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Mejora la digestión, por su alto contenido de fibra.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Fortalece los huesos y músculos, gracias a sus minerales.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Cuida el corazón por sus grasas saludables y potasio.</strong>
            </li>

            <li>
                <span class="flecha-harinas">➥</span>
                <strong>Protege las células gracias a sus antioxidantes y vitaminas.</strong>
            </li>
        </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_maiz["precio500"]; ?></p>
    </div>


        <div class="consumo-harinas">
            <h4>👩‍🍳 Ideas para preparar</h4>

            <p>
                ➼ Polenta, cocinas la harina en agua hasta que quede como crema suave. Se acompaña con salsa de tomate y queso.<br><br>
                ➼ Podés usarla para hacer pan de maíz o budines dulces para el mate🧉.<br><br>
                ➼ Usala para rebozar milanesas, pollos o pescados antes de cocinarlos.¡Quedan súper crujientes!.
            </p>
        </div>
        </div>
        </div>

        <div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">
            <h3>Harina de Almendra</h3>
            <img src="img/harinas y premezcla/harina almendras.webp" alt="Harina de almendra" loading="lazy">

<?php

$sql_harina_almendras = "SELECT * FROM productos WHERE nombre='Harina de almendras'";

$resultado_harina_almendras= $conexion->query($sql_harina_almendras);

$harina_almendras= $resultado_harina_almendras->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_almendras["estado"]); ?>">

<?php

if($harina_almendras["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-harinas">
                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>No tiene gluten(ideal para celíacos).</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Reduce el colesterol malo y protege al corazón.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Ayuda a regular los niveles de azúcar en sangre.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Contiene minerales (calcio, magnesio y fósforo), fundamentales para la salud ósea.</strong>
                    </li>
                </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_almendras["precio500"]; ?></p>
    </div>

                <div class="consumo-harinas">
                    <h4>👩‍🍳 Ideas para preparar</h4>
                    <p>
                       ➼ Budines y tortas, reemplazando parte de la harina común por harina de almendra.<br><br>
                       ➼ Galletitas, mezclando harina de almendra con avena y miel.<br><br>
                       ➼ Panqueques, agregando harina de almendra a la mezcla para obtener una textura más suave y un sabor delicioso.<br><br>
                       ➼ Rebozados, usando harina de almendra para empanizar pollo, pescado o vegetales antes de cocinarlos. 
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">
            <h3>Harina de Arveja</h3>
            <img src="img/harinas y premezcla/harina arveja.jpg" alt="Harina arveja" loading="lazy">


<?php

$sql_harina_arveja = "SELECT * FROM productos WHERE nombre='Harina de arveja'";

$resultado_harina_arveja= $conexion->query($sql_harina_arveja);

$harina_arveja= $resultado_harina_arveja->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_arveja["estado"]); ?>">

<?php

if($harina_arveja["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-harinas">
                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Regula el tránsito inestinal, ayudando a prevenir el estreñimiento.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Contiene minerales como hierro, zinc y magnesio.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Es ideal para personas con intolerancia al gluten.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Contribuye a la saciedad y al control del apetito, lo que ayuda a mantener un peso saludable.</strong>
                    </li>
                </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_arveja["precio500"]; ?></p>
    </div>

                <div class="consumo-harinas">
                    <h4>👩‍🍳 Ideas para preparar</h4>
                    <p>
                       ➼ Pan de arveja, reemplazando parte de la harina común por harina de arveja.<br><br>
                       ➼ Panqueques y Crepes salados.<br><br>
                       ➼ Espesante Nutritivo para sopas y salsas..<br><br>
                       ➼ Rebozados, usando harina de arveja para empanizar pollo, pescado o vegetales antes de cocinarlos. 
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">
            <h3>Harina de lino molido</h3>
            <img src="img/harinas y premezcla/harina lino molido.png" alt="Harina lino molido" loading="lazy">

<?php

$sql_harina_lino = "SELECT * FROM productos WHERE nombre='Harina de lino molido'";

$resultado_harina_lino= $conexion->query($sql_harina_lino);

$harina_lino= $resultado_harina_lino->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_lino["estado"]); ?>">

<?php

if($harina_lino["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-harinas">
                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Ayuda al colesterol "malo" y los triglicéridos, disminuyendo el riesgo de enfermedades cardíacas.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Combate el estreñimiento, mejora el tránsito intestinal y puede ser aliada contra la gastritis..</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Aumenta la sensación de saciedad, lo que favorece la pérdida de peso.</strong>
                    </li>
                </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_lino["precio500"]; ?></p>
    </div>

                <div class="consumo-harinas">
                    <h4>👩‍🍳 Ideas para preparar</h4>
                    <p>
                       ➼ Agregala a tus batidos de frutas o proteínas para aumentar el contenido de fibra y ácidos grasos omega-3.<br><br>
                       ➼ Espolvoreala sobre yogur, avena o ensaladas para un toque crujiente y nutritivo.<br><br>
                       ➼ Usala como sustituto parcial de la harina en recetas de panqueques, muffins, masa de pizza o galletas para aumentar el contenido de fibra y nutrientes.
                    </p>

                </div>
            </div>
        </div>

        <div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">
            <h3>Harina de sésamo</h3>
            <img src="img/harinas y premezcla/harina sesamo.jpg" alt="Harina sésamo" loading="lazy">


<?php

$sql_harina_sesamo = "SELECT * FROM productos WHERE nombre='Harina de sésamo'";

$resultado_harina_sesamo= $conexion->query($sql_harina_sesamo);

$harina_sesamo= $resultado_harina_sesamo->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_sesamo["estado"]); ?>">

<?php

if($harina_sesamo["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-harinas">
                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong> Gracias a su contenido de calcio, fortalece los huesos y ayuda a prevenir la pérdida de densidad ósea..</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Su alto contenido de fibra favorece el tránsito intestinal, estimula la digestión y combate el estreñimiento..</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Previene el colesterol y los triglicéridos.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas"></span>
                        <strong>Rica en vitamina E, zinc y selenio, que protegen las células contra la oxidación.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Pueden mejorar la salud de la piel y el cabello.</strong>
                    </li>
                </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_sesamo["precio500"]; ?></p>
    </div>

                <div class="consumo-harinas">
                    <h4>👩‍🍳 Ideas para preparar</h4>
                    <p>
                       ➼ Usala sola o mezclada con pan rallado para rebozar milanesas, patitas de pollo o bastoncitos de queso.<br><br>
                       ➼ Espesante de salsas<br><br>
                       ➼ Saborizantes para purés.<br><br>
                       ➼ Agregala a tus batidos de frutas o proteínas para aumentar el contenido de fibra y ácidos grasos omega-3.<br><br>
                       ➼ Espolvoreala sobre yogur, avena o ensaladas para un toque crujiente y nutritivo.<br><br>
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">
            <h3>Harina de avena</h3>
            <img src="img/harinas y premezcla/harina avena.jpg" alt="Harina avena" loading="lazy">

<?php

$sql_harina_avena = "SELECT * FROM productos WHERE nombre='Harina de avena'";

$resultado_harina_avena= $conexion->query($sql_harina_avena);

$harina_avena= $resultado_harina_avena->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_avena["estado"]); ?>">

<?php

if($harina_avena["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-harinas">
                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong> Su fibra atrapa las grasas para cuidar tu corazón.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Controla el azúcar en la sangre.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Combate el estreñimiento y cuida tu flora intestinal.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Da mucha saciedad y ayuda a mantener un peso saludable.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Baja el colesterol malo y protege el corazón.</strong>
                    </li>
                </ul>


    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_avena["precio500"]; ?></p>
    </div>

                <div class="consumo-harinas">
                    <h4>👩‍🍳 Ideas para preparar</h4>
                    <p>
                       ➼ Panqueques y crepes dulces o salados.<br><br>
                       ➼ Budines y tortas, reemplazando parte de la harina común por harina de avena.<br><br>
                       ➼ Licuados energéticos.<br><br>
                       ➼ rebozados crujientes.<br><br>
                       ➼ Espesante natural.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">
            <h3>Harina integral de sarraceno</h3>
            <img src="img/harinas y premezcla/harina integral sarraceno.webp" alt="Harina integral sarraceno" loading="lazy">


<?php

$sql_harina_sarraceno = "SELECT * FROM productos WHERE nombre='Harina integral sarraceno'";

$resultado_harina_sarraceno= $conexion->query($sql_harina_sarraceno);

$harina_sarraceno= $resultado_harina_sarraceno->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_sarraceno["estado"]); ?>">

<?php

if($harina_sarraceno["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>
</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-harinas">
                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Contiene proteínas completas, fibras, antioxidantes y minerales como hierro y magnesio.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Su fibra ayuda a mantener un buen tránsito intestinal.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Ayuda a controlar los niveles de azúcar en la sangre.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Contiene compuestos que ayudan a regular la presión y a cuidar las arterias.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Es libre de gluten, ideal para personas con enfermedad celíaca.</strong>
                    </li>
                </ul>


    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_sarraceno["precio500"]; ?></p>
    </div>

                <div class="consumo-harinas">
                    <h4>👩‍🍳 Ideas para preparar</h4>
                    <p>
                       ➼ Panqueques de desayuno.<br><br>
                       ➼ Poder usarla para hacer pasta oscura al estilo de los fideos de soba japoneses..<br><br>
                       ➼ Te sirve para armar masas saladas bien crocantes de agua con semillas.<br><br>
                       ➼ Rebozados crujientes.<br><br>
                       ➼ Espesante nutritivo.
                    </p>

                </div>
            </div>
        </div>

        <div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">
            <h3>Harina de algarroba</h3>
            <img src="img/harinas y premezcla/harina de algarroba.webp" alt="Harina de algarroba" loading="lazy">

<?php

$sql_harina_algarroba = "SELECT * FROM productos WHERE nombre='Harina de algarroba'";

$resultado_harina_algarroba= $conexion->query($sql_harina_algarroba);

$harina_algarroba= $resultado_harina_algarroba->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($harina_algarroba["estado"]); ?>">

<?php

if($harina_algarroba["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>
</div>

            <p class="abrir-info-harinas">
             🌾 Descubrí sus beneficios.
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-harinas">
                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Por su cantidad de fibra, combate el estreñimiento y cuida la microbiota del intestino.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Su bajo índice glucémico ayuda a mantener niveles estables de azúcar en sangre.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Es libre de gluten, ideal para personas con enfermedad celíaca.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>No contiene cafeína ni teobromina, por lo que no altera el sueño ni los nervios.</strong>
                    </li>

                    <li>
                        <span class="flecha-harinas">➥</span>
                        <strong>Aporta mucho calcio, hierro, potasio y antioxidantes que protegen las células del cuerpo.</strong>
                    </li>
                </ul>

    <div class="precios-producto">
    <h4>💰 Precios</h4>
    <p><strong>500 g:</strong> $<?php echo $harina_algarroba["precio500"]; ?></p>
    </div>

                <div class="consumo-harinas">
                    <h4>👩‍🍳 Ideas para preparar</h4>
                    <p>
                       ➼ Chocolatada saludable.<br><br>
                       ➼ Agregala a tus licuados de banana, a vena o frutos rojos para darle un toque dulce y achocolatado.<br><br>
                       ➼ Sustituto del cacao.<br><br>
                       ➼ Endulzante natural.<br><br>
                       ➼ Espolvoréa una cucharadita sobre tu yogur con cereales o frutas cortadas.
                    </p>
                </div>
            </div>
        </div>
        </div>
        

    <!-- ==================== REBOZADORES ==================== -->
    

<h3 class="titulo-categoria subtitulo-categoria">
    Rebozadores
</h3>

<div class="grilla-productos">

<div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">

<h3>Rebozador de arroz</h3>

<img src="img/rebozadores/rebozador de arroz.webp" alt="Rebozador de arroz" loading="lazy">

<?php
// Buscar el producto en la base de datos
$sql_rebozador_arroz = "SELECT * FROM productos WHERE nombre='Rebozador de arroz'";

$resultado_rebozador_arroz = $conexion->query($sql_rebozador_arroz);

$rebozador_arroz = $resultado_rebozador_arroz->fetch_assoc();
?>

<!-- Estado -->
<div class="estado-producto <?php echo strtolower(trim($rebozador_arroz["estado"])); ?>">

<?php

if(strtolower(trim($rebozador_arroz["estado"])) == "disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

 <p class="abrir-info-harinas">
    🌾 Descubrí sus beneficios.
</p>

    <div class="contenido-producto">

<ul class="beneficios-harinas">

<?php

$beneficios = explode("|", $rebozador_arroz["beneficios"]);

// Recorre todos los beneficios
foreach($beneficios as $beneficio){

?>

        <li>
            <span class="flecha-harinas">➥</span>

             <!-- Muestra un beneficio -->
            <strong><?php echo $beneficio; ?></strong>
        </li>

<?php

}

?>

</ul>

    <!-- Precio -->
    <div class="precios-producto">

        <h4>💰 Precio</h4>

        <p>$<?php echo $rebozador_arroz["precio"]; ?></p>

    </div>

    <!-- Consumo -->
    <div class="consumo">

        <h4>Modo de uso 🛡️</h4>

<?php

$consumos = explode("|", $rebozador_arroz["consumo"]);

foreach($consumos as $consumo){

?>

<p>➜ <?php echo $consumo; ?></p>

<?php

}

?>

</div>

</div>

</div>


<!------------------ Rebozador de arroz integral con y sin sal------------------------>

<div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">

<h3>Rebozador de arroz integral con sal</h3>

<img src="img/rebozadores/rebozador con sal.jpg" alt="Rebozador de arroz integral con sal" loading="lazy">

<?php
// Buscar el producto en la base de datos
$sql_rebozador_sal = "SELECT * FROM productos WHERE nombre='Rebozador con sal'";

$resultado_rebozador_sal = $conexion->query($sql_rebozador_sal);

$rebozador_sal = $resultado_rebozador_sal->fetch_assoc();
?>

<!-- Estado -->
<div class="estado-producto <?php echo strtolower(trim($rebozador_sal["estado"])); ?>">

<?php

if(strtolower(trim($rebozador_sal["estado"])) == "disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

 <p class="abrir-info-harinas">
    🌾 Descubrí sus beneficios.
</p>

    <div class="contenido-producto">

<ul class="beneficios-harinas">

<?php

$beneficios = explode("|", $rebozador_sal["beneficios"]);

// Recorre todos los beneficios
foreach($beneficios as $beneficio){

?>

        <li>
            <span class="flecha-harinas">➥</span>

             <!-- Muestra un beneficio -->
            <strong><?php echo $beneficio; ?></strong>
        </li>

<?php

}

?>

</ul>

    <!-- Precio -->
    <div class="precios-producto">

        <h4>💰 Precio</h4>

        <p>$<?php echo $rebozador_sal["precio"]; ?></p>

    </div>

    <!-- Consumo -->
    <div class="consumo">

        <h4>Modo de uso 🛡️</h4>

<?php

$consumos = explode("|", $rebozador_sal["consumo"]);

foreach($consumos as $consumo){

// Si está vacío, lo saltea
    if(trim($consumo) == ""){
        continue;
    }

?>

<p style="margin-bottom:15px;">
    ➜ <?php echo $consumo; ?>
</p>

<?php
}

?>

</div>

</div>

</div>



<div class="producto-card producto-card-harinas" onclick="alternarProducto(this)">

<h3>Rebozador de arroz integral sin sal</h3>

<img src="img/rebozadores/rebozador sin sal.jpg" alt="Rebozador de arroz integral sin sal" loading="lazy">

<?php
// Buscar el producto en la base de datos
$sql_rebozador_sin_sal = "SELECT * FROM productos WHERE nombre='Rebozador sin sal'";

$resultado_rebozador_sin_sal = $conexion->query($sql_rebozador_sin_sal);

$rebozador_sin_sal = $resultado_rebozador_sin_sal->fetch_assoc();
?>

<!-- Estado -->
<div class="estado-producto <?php echo strtolower(trim($rebozador_sin_sal["estado"])); ?>">

<?php

if(strtolower(trim($rebozador_sin_sal["estado"])) == "disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

 <p class="abrir-info-harinas">
    🌾 Descubrí sus beneficios.
</p>

    <div class="contenido-producto">

<ul class="beneficios-harinas">

<?php

$beneficios = explode("|", $rebozador_sin_sal["beneficios"]);

// Recorre todos los beneficios
foreach($beneficios as $beneficio){

?>

        <li>
            <span class="flecha-harinas">➥</span>

             <!-- Muestra un beneficio -->
            <strong><?php echo $beneficio; ?></strong>
        </li>

<?php

}

?>

</ul>

    <!-- Precio -->
    <div class="precios-producto">

        <h4>💰 Precio</h4>

        <p>$<?php echo $rebozador_sin_sal["precio"]; ?></p>

    </div>

    <!-- Consumo -->
    <div class="consumo">

        <h4>Modo de uso 🛡️</h4>

<?php

$consumos = explode("|", $rebozador_sin_sal["consumo"]);

foreach($consumos as $consumo){

// Si está vacío, lo saltea
    if(trim($consumo) == ""){
        continue;
    }

?>

<p style="margin-bottom:15px;">
    ➜ <?php echo $consumo; ?>
</p>

<?php
}

?>

</div>

</div>

</div>

</div>














<!----------------CARRUSEL 3 PREMEZCLAS---------------->

<h2 class="titulo-categoria subtitulo-categoria">
    🥣 Premezclas Chacabuco
</h2>

<div class="carrusel-premezclas">

    <button id="anteriorPremezcla" class="flecha-carrusel">
        ❮
    </button>

    <div class="contenido-carrusel">

        <h3 id="tituloPremezcla" class="titulo-premezcla">
            🍝 Premezcla con legumbres
        </h3>

        <img
            id="imagenPremezcla"
            src="img/harinas y premezcla/prem. pastas.jpg"
            alt="Premezcla Chacabuco"
            class="imagen-carrusel"
            loading="lazy"
        >

    <div id="estadoPremezcla" class="estado-carrusel"></div>

    <div id="precioPremezcla" class="precio-carrusel"></div>

    </div>

    <button id="siguientePremezcla" class="flecha-carrusel">
        ❯
    </button>

</div>

<!-- ==================== MODAL PRODUCTO ==================== -->

<div id="modalProducto" class="modal-producto">

    <div class="modal-contenido">

        <button id="cerrarModal" class="cerrar-modal">
            ✕
        </button>

        <h2 id="modalTitulo">
    Premezcla
</h2>

<hr class="linea-modal">

<h3 class="titulo-modal">
    🌿 ¿Por qué elegirla?
</h3>

<div id="modalBeneficios">

</div>

<hr class="linea-modal">

<h3 class="titulo-modal">
    👩‍🍳 Ideas para preparar
</h3>

<div id="modalPreparacion">

</div>

<hr class="linea-modal">

<h3 class="titulo-modal">
    🌾 ¿Qué contiene?
</h3>

<div id="modalIngredientes"></div>

<hr class="linea-modal">

<h3 class="titulo-modal">
    💰 Precio
</h3>

<p id="modalPrecio"></p>

<hr class="linea-modal">

<h3 class="titulo-modal">
    📦 Estado
</h3>

<div id="modalEstado" class="estado-producto"></div>

</div>

    </div>

</div>

<!----------------- CARRUSEL DE LAS 4 PREMEZCLAS 1KG ----------------->

<h2 class="titulo-categoria subtitulo-categoria">
    🍞 Premezclas Chacabuco Premium 1kg
</h2>

<div class="carrusel-premezclas" id="carruselPremium">

    <button id="anteriorPremium" class="flecha-carrusel">
        ❮
    </button>

    <div class="contenido-carrusel">

        <h3 id="tituloPremium" class="titulo-premezcla">
            🍝 Premezcla Especial para pastas
        </h3>

        <img
            id="imagenPremium"
            src="img/harinas y premezcla/prem.semolin pastas.webp"
            alt="Premezcla Premium Chacabuco"
            class="imagen-carrusel"
            loading="lazy"
        >

    <div id="estadoPremium" class="estado-producto"></div>
    <div id="precioPremium" class="precio-carrusel"></div>

    </div>

    <button id="siguientePremium" class="flecha-carrusel">
        ❯
    </button>

</div>
<!----------------- CARRUSEL HARINAS FUNCIONALES(4)----------------->

<h2 class="titulo-categoria subtitulo-categoria">
    🌾 Harinas Funcionales Chacabuco
</h2>

<div class="carrusel-premezclas carrusel-harinas">

    <button id="anteriorHarinas" class="flecha-carrusel">
        ❮
    </button>

    <div class="contenido-carrusel">

        <h3 id="tituloHarinas" class="titulo-premezcla">
            🌾 Harina Integral de Trigo Orgánica
        </h3>

        <img
            id="imagenHarinas"
            src="img/harinas y premezcla/harina-organica.webp"
            alt="Harinas Funcionales Chacabuco"
            class="imagen-carrusel"
            loading="lazy"
        >

    <div id="estadoHarinas" class="estado-producto"></div>
    <div id="precioHarinas" class="precio-carrusel"></div>

    </div>

    <button id="siguienteHarinas" class="flecha-carrusel">
        ❯
    </button>

</div>
    </section>
    

<!------------------------------SECCION CEREALES------------------------------------>

<section id="cereales-categoria">

        <button class="btn-volver"
        onclick="volverCategorias()">
        ← Volver a Categorías
    </button>

    <h2 class="titulo-categoria">
        Cereales
    </h2>

    <div class="grilla-productos">

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Bastón de salvado</h3>
            <img src="img/cereales/baston salvado.jpeg" alt="Bastones de salvado" loading="lazy">

            <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-cereales">
                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Aceleran el tránsito instestinal y son muy eficaces contra el estreñimiento. </strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Controlan el apetito y ayudan a mantener un peso saludable.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Regulan los niveles de azúcar en la sangre y reduce los niveles de colesterol.</strong>
                    </li>
                </ul>

                <div class="consumo-cereales">
                    <h4>🥣 Como lo puedes consumir</h4>
                    <p>
                        ➨ Mezclados con yogur natural o de vainilla.<br><br>
                        ➨ Con leche fría.<br><br>
                        ➨ Armá un snack para la tarde mezclando los bastones con nueces, almendras y pasas de uva 😋.
                    </p>
                </div>
        </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Tutuca</h3>
            <img src="img/cereales/tutuca.jpeg" alt="Tutucas" loading="lazy">

            <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-cereales">
                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Aporta energía de forma simple.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Bajo aporte calórico por volumen.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Libre de gluten.</strong>
                    </li>
                </ul>

                <div class="consumo-cereales">
                    <h4>🥣 Como lo puedes consumir</h4>
                    <p>
                        ➨ Lo puedes consumir solos en meriendas o desayunos.<br><br>
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Almohaditas rellenas</h3>
            <img src="img/cereales/almohaditas.webp" alt="Almohadillas rellenas" loading="lazy">

            <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

                <h4 class="titulo-sabores">
                    🥜 Sabores disponibles
                </h4>

                <div class="sabores-almohaditas">

                    <span class="sabor">🥜 Maní</span>
                    <span class="sabor">🍓 Frutilla</span>
                    <span class="sabor">🌰 Avellana</span>
                    <span class="sabor">🍋 Limón</span>
                    <span class="sabor">🍫 Chocolate</span>
                    <span class="sabor">🌾 Salvado</span>
                </div>

                <ul class="beneficios-cereales">
                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Aportan energía para comenzar el día o disfrutar en una merienda.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Aporte de fibra.</strong>
                    </li>
                </ul>

                <div class="consumo-cereales">
                    <h4>🥣 Como lo puedes consumir</h4>
                    <p>
                        ➨ Lo puedes consumir con unos mates 🧉.<br><br>
                        ➨ Con lácteos(leche o yogur).
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Quinoa pop</h3>
            <img src="img/cereales/quinoa opo.jpg" alt="Quinoa pop" loading="lazy">

            <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

                <h4 class="titulo-sabores">
                    🥣 Sabores disponibles
                </h4>

                <div class="sabores-almohaditas">

                    <span class="sabor">Algarroba</span>
                    <span class="sabor">Arándanos</span>
                    <span class="sabor">Original</span>
                    <span class="sabor">Kids</span>
                </div>

                <ul class="beneficios-cereales">
                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Aporta todos los aminoácidos esenciales que el cuerpo necesita.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Contiene alrededor de 5gr de proteína.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Regula el tránsito inestinal y mejora la digestión.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Aporta Vitaminas del complejo B(B1, B2, B3) y Vitaminas C y E.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Apto para celíacos (sin TACC).</strong>
                    </li>
                </ul>

                <div class="consumo-cereales">
                    <h4>🥣 Como lo puedes consumir</h4>
                    <p>
                        ➨ Con yogur natural o de vainilla.<br><br>
                        ➨ Con leche o bebidas vegetales (de almendras, avena o coco).<br><br>
                        ➨ Mezcladas con miel, pasta de mani y frutos secos para armar tus propias barritas energéticas sin horno.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card" onclick="alternarProducto(this)">
            <h3>Bolitas de chocolate</h3>
            <img src="img/cereales/bolitas chocolate.png" alt="Bolitas de chocolate" loading="lazy">

            <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-cereales">
                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Fuente de energía</strong>
                    </li>

                    <li>
                     <span class="flecha-cereales">❖</span>
                     <strong>Enriquecidas con Vitaminas del grupo B(B1, B2, B3, B6, B12), hierro, zinc y vitamina C.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Gracias a su pequeña cantidad de fibra, ayuda levemente a la digestión.</strong>
                    </li>
                </ul>

                <div class="consumo-cereales">
                    <h4>🥣 Como lo puedes consumir</h4>
                    <p>
                        ➨ Con leche fría o tibia.<br><br>
                        ➨ Con yogur.<br><br>
                        ➨ Como snack, directamente del paquete.<br><br>
                        ➨ Con avena.<br><br>
                    </p>
                </div>
            </div>
        </div>

       <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Copos de maíz sin azúcar</h3>
        <img src="img/cereales/copos de maiz sin azucar.webp" alt="Copos de maíz" loading="lazy">

        <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

            <ul class="beneficios-cereales">
                <li>
                    <span class="flecha-cereales">❖</span>
                    <strong>Normalizan la digestión.</strong>
                </li>

                <li>
                    <span class="flecha-cereales">❖</span>
                    <strong>Mejoran la memoria.</strong>
                </li>

                <li>
                    <span class="flecha-cereales">❖</span>
                    <strong>Fuente de magnesio y zinc.</strong>
                </li>

                <li>
                    <span class="flecha-cereales">❖</span>
                    <strong>Bajo en grasas.</strong>
                </li>
            </ul>

            <div class="consumo-cereales">
                <h4>🥣 Como lo puedes consumir</h4>

                <p>
                    ➨ Con lácteos (leche fría, leche vegetal o yogur natural).<br><br>
                    ➨ Mezclados con frutas secas cortadas (banana, frutillas o arándanos) y un poco de frutos secos (nueces o almendras).
                </p>
            </div>
       </div>
       </div> 

      <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Copos de maíz con azúcar</h3>
        <img src="img/cereales/copos de maiz con azucar.jpeg" alt="Copos de maíz" loading="lazy">

        <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

            <ul class="beneficios-cereales">
                <li>
                    <span class="flecha-cereales">❖</span>
                    <strong>Aporte energético.</strong>
                </li>

                <li>
                    <span class="flecha-cereales">❖</span>
                    <strong>Enriquecidas con hierro y Vitaminas del grupo B (como B6, B9 y B12).</strong>
                </li>

                <li>
                    <span class="flecha-cereales">❖</span>
                    <strong>Se digieren rápido y no generan una sensación duradera.</strong>
                </li>
            </ul>

            <div class="consumo-cereales">
                <h4>🥣 Como lo piedes consumir</h4>

                <p>
                    ➨ Con lácteos.<br><br>
                    ➨ Con frutas.<br><br>
                    ➨ Puedes agregar nueces picadas, almendras o semillas para mejorar la saciedad y el valor nutricional.
                </p>
            </div>
      </div>
      </div> 

      <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Cereal de arroz</h3>
        <img src="img/cereales/cereal arroz.webp" alt="Cereal arroz" loading="lazy">

        <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-cereales">
                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Bajo en calorías, aporta aprox.83 calorías.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Aporte de energía.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Vitaminas del complejo B, fósforo, magnesio y selenio.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Libre de grasas.</strong>
                    </li>
                </ul>

                <div class="consumo-cereales">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                        ➨ Con yogur.<br><br>
                        ➨ Con leche vegetal o vacuna.<br><br>
                        ➨ Licúa tus frutas congeladas favoritas y usá el cereal por arriba como un agregado crujiente (topping).<br><br>
                        ➨ Barritas de cereal express.
                    </p>
                </div>
            </div>
      </div>

      <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Cereal multisemillas</h3>
        <img src="img/cereales/multisemillas.png" alt="Cereal multisemillas" loading="lazy">

        <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-cereales">
                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Contiene proteínas completas que tus músculos necesitan.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Contienen aminoácidos grasos Omega 3 y 6 (provenientes del lino y la chía) que ayudan a proteger al corazón.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Son fuente natural de hierro, calcio, magnesio, zinc y fósforo.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Brinda energía rápida y carbohidratos livianos ideales para arrancar el día o antes de hacer actividad física.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                       <strong>Al no tener grasas trans ni colesterol, es un snack ideal para cuidar tus arterias y tu peso.</strong> 
                    </li>
                </ul>

                <div class="consumo-cereales">
                    <h4>🥣 Como lo puedes consumir</h4>
                    <p>
                        ➨ Con yogur o leche.<br><br>
                        ➨ En boles de frutas.<br><br>
                        ➨ Agrega 2 o 3 cdas en la licuadora acompañado de banana o frutas con leche.
                    </p>
                </div>
            </div>
      </div>

      <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Ositos de avena y miel</h3>
        <img src="img/cereales/ositos miel.webp" alt="Ositos avena y miel" laoding="lazy">

        <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">

                <ul class="beneficios-cereales">
                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Aporte de energía duradera, gracias al maíz, el trigo y la avena.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>La avena contiene fibra soluble e insoluble. Esto ayuda que te sientas lleno más tiempo y evita los ataques de hambre a media mañana.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Mejora la digestión.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Enriquecen de nutrientes como hierro, calcio y Vitaminas del complejo B, estos elementos ayudan a un correcto funcionamiento de las defensas y músculos..</strong>
                    </li>
                </ul>

                <div class="consumo-cereales">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                        ➨ Con leche fría.<br><br>
                        ➨ Con bebidas vegetales (leche de almendras, coco o avena).<br><br>
                        ➨ Con yogur.<br><br>
                        ➨ Con boles de frutas.
                    </p>
                </div>
            </div>
      </div>

      <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Trigo inflado dulce</h3>
        <img src="img/cereales/trigo inflado dulce.webp" alt="Trigo inflado dulce" loading="lazy">

        <p class="abrir-info-cereales">
                ✨ Ver propiedades
            </p>

            <div class="contenido-producto">
                
                <ul class="beneficios-cereales">
                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Aporta cerca de 100-114 calorías.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Gracias a su alto contenido de hidratos de carbono de rápida absorción, proporciona energía de forma rápida.</strong>
                    </li>

                    <li>
                        <span class="flecha-cereales">❖</span>
                        <strong>Contiene minerales (magnesio, silicio, calcio, hierro y fósforo), además de Vitaminas del grupo B (B1, B2, B3).<br>
                        Esenciales para el metabolismo energético y el sistema nervioso.</strong>
                    </li>
                </ul>

                <div class="consumo-cereales">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                        ➨ Con yogur.<br><br>
                        ➨ Como snack.<br><br>
                        ➨ Como <b>topping</b>, espolvoreado sobre postres, helados o ensaladas de frutas.<br><br>
                        ➨ Combinado con frutos secos (almendras o nueces), para armar una merienda rápida.
                    </p>
                </div>
            </div>
      </div>
    </div>

      <!------------------ GRANOLAS ------------------->
      <h2 class="titulo-categoria subtitulo-categoria">
      Granolas
      </h2>

      

      <div class="grilla-productos">
        <div class="producto-card producto-card-granola granola-tradicional" onclick="alternarProducto(this)">

            <p class="etiqueta-granola etiqueta-tradicional">
                🌾 Tradicional
            </p>

           <h3>Granola Tradicional</h3> 
           <img src="img/granolas/granola TRADICIONAL.png" alt="Granola tradicional" loading="lazy">

           <p class="abrir-info-cereales">
                ✨ Que contiene
            </p>

           <div class="contenido-producto">

            <ul class="beneficios-cereales">
                <li>
                    <span class="flecha-tradicional">❖</span>
                    <strong>Mezcla de Avena.</strong>
                </li>

                <li>
                    <span class="flecha-tradicional">❖</span>
                    <strong>Miel.</strong>
                </li>

                <li>
                    <span class="flecha-tradicional">❖</span>
                    <strong>Pasas de uva.</strong>
                </li>

                <li>
                    <span class="flecha-tradicional">❖</span>
                    <strong>Maní.</strong>
                </li>

                <li>
                    <span class="flecha-tradicional">❖</span>
                    <strong>Semillas.</strong>
                </li>

                <li>
                    <span class="flecha-tradicional">❖</span>
                    <strong>Frutos secos.</strong>
                </li>
            </ul>

            <div class="consumo-cereales">
                <h4>🥣 Ideas para disfrutar</h4>

                <p>
                    ➼ Mezcla tu yogur favorito (natural o griego) con una porción de granola para añadir una textura crocante.<br><br>
                    ➼ Unta una tostada con miel, canela o mantequilla de maní y esparce la granola encima.<br><br>
                    ➼ Acompaña rodajas de banana, frutilla o manzana con un puñado de granola.
                </p>
            </div>
           </div>
        </div>
      

      <div class="producto-card producto-card-granola granola-energetica" onclick="alternarProducto(this)">

            <p class="etiqueta-granola etiqueta-energetica">
                ⚡ Energética
            </p>

           <h3>Granola Energética</h3> 
           <img src="img/granolas/granola ENERGETICA.png" alt="Granola energética" loading="lazy">

           <p class="abrir-info-cereales">
                ✨ Que contiene
            </p>

           <div class="contenido-producto">

            <ul class="beneficios-cereales">
                <li>
                    <span class="flecha-energetica">❖</span>
                    <strong>Mezcla de avena.</strong>
                </li>

                <li>
                    <span class="flecha-energetica">❖</span>
                    <strong>Miel.</strong>
                </li>

                <li>
                    <span class="flecha-energetica">❖</span>
                    <strong>Pasas de uva.</strong>
                </li>

                <li>
                    <span class="flecha-energetica">❖</span>
                    <strong>Maní.</strong>
                </li>

                <li>
                    <span class="flecha-energetica">❖</span>
                    <strong>Frutos secos.</strong>
                </li>

                <li>
                    <span class="flecha-energetica">❖</span>
                    <strong>Arándanos deshidratados.</strong>
                </li>
            </ul>

            <div class="consumo-cereales">
                <h4>🥣 Ideas para disfrutar</h4>
                <p>
                    ➼ Úsala como topping crujiente en tus batidos de frutas para añadir textura.<br><br>
                    ➼ Barritas saludables.<br><br>
                    ➼ Agrega un puñado a tu avena remojada para darle un toque crocante al momento de comerla.
                </p>
            </div>
           </div>
      </div>
    

    <div class="producto-card producto-card-granola granola-cocada" onclick="alternarProducto(this)">

        <p class="etiqueta-granola etiqueta-cocada">
                🥥 Cocada
            </p>

           <h3>Granola Cocada</h3> 
           <img src="img/granolas/granola COCADA.png" alt="Granola cocada" loading="lazy">

           <p class="abrir-info-cereales">
                ✨ Que contiene
            </p>

           <div class="contenido-producto">

            <ul class="beneficios-cereales">
                <li>
                    <span class="flecha-cocada">❖</span>
                    <strong>Mezcla de cereales.</strong>
                </li>

                <li>
                    <span class="flecha-cocada">❖</span>
                    <strong>Azúcar mascabo.</strong>
                </li>

                <li>
                    <span class="flecha-cocada">❖</span>
                    <strong>Maní.</strong>
                </li>

                <li>
                    <span class="flecha-cocada">❖</span>
                    <strong>Coco rallado.</strong>
                </li>

                <li>
                    <span class="flecha-cocada">❖</span>
                    <strong>Semillas de girasol.</strong>
                </li>

                <li>
                    <span class="flecha-cocada">❖</span>
                    <strong>Nueces.</strong>
                </li>
            </ul>

            <div class="consumo-cereales">
                <h4>🥣 Ideas para disfrutar</h4>
                <p>
                    ➼ Combinala con yogur natural o vegetal y frutas frescas de estacoón (como banana, frutillas o arándanos).<br><br>
                    ➼ Úsala como topping crocante sobre un licuado espeso de frjutas para darle textura y un extra de energía.<br><br>
                    ➼ Mezclala con miel o pasta de maní, presionar la mezcla en un molde y enfriar para obtener barritas de cereal naturales.
                </p>
            </div>
           </div>
    </div>
    

    <div class="producto-card producto-card-granola granola-base" onclick="alternarProducto(this)">

        <p class="etiqueta-granola etiqueta-base">
                🟠 Base
        </p>

           <h3>Granola Base</h3> 
           <img src="img/granolas/granola BASE.png" alt="Granola base" loading="lazy">

           <p class="abrir-info-cereales">
                ✨ Que contiene
            </p>

           <div class="contenido-producto">

            <ul class="beneficios-cereales">
                <li>
                    <span class="flecha-base">❖</span>
                    <strong>Mezcla de avena.</strong>
                </li>

                <li>
                    <span class="flecha-base">❖</span>
                    <strong>Azúcar mascabo.</strong>
                </li>

                <li>
                    <span class="flecha-base">❖</span>
                    <strong>Maní.</strong>
                </li>

                <li>
                    <span class="flecha-base">❖</span>
                    <strong>Semillas de girasol.</strong>
                </li>
            </ul>

            <div class="consumo-cereales">
                <h4>🥣 Ideas para disfrutar</h4>
                <p>
                    ➼ Añádela como topping a tu yogur favorito (especialm. griego) junto con frutas frescas (como banana, manzana o frutos rojos).<br><br>
                    ➼ Úsala como sustituto de los cereales industriales acompañándola con leche fría o bebidas vegetales (almendras, coco o nuez).<br><br>
                    ➼ Espolvoréala sobre rodajas de piña, papaya o un "banana split" saludable para aportar una textura crujiente.
                </p>
            </div>
           </div>
    </div>
</div>
</section>

<!------------------------------SECCION SEMILLAS------------------------------------>

<section id="semillas-categoria">

        <button class="btn-volver"
        onclick="volverCategorias()">
        ← Volver a Categorías
    </button>

    <h2 class="titulo-categoria">
        Semillas
    </h2>

<?php

$sql = "SELECT * FROM productos WHERE nombre='Chía'";

$resultado = $conexion->query($sql);

while($fila = $resultado->fetch_assoc()){

    $carpeta = strtolower($fila["categoria"]);

?>

    <div class="grilla-productos">
        <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
            <h3><?php echo $fila["nombre"]; ?></h3>
            <img src="img/<?php echo $carpeta; ?>/<?php echo $fila["imagen"]; ?>" alt="<?php echo $fila["nombre"]; ?>" loading="lazy">

<div class="estado-producto <?php echo strtolower(trim($fila["estado"])); ?>">

<?php

if(strtolower(trim($fila["estado"])) == "disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">

        <ul class="beneficios-semillas">

        <?php

        $beneficios = explode("|", $fila["beneficios"]);

        foreach($beneficios as $beneficio){

        ?>
            <li>
                <span class="flecha-semillas">𖧧</span>

                <strong><?php echo $beneficio; ?></strong>
            </li>

        <?php

        }

        ?>
        </ul>

    <div class="precios-producto">

    <h4>💰 Precios</h4>

    <p><strong>100 g:</strong> $<?php echo $fila["precio100"]; ?></p>

    <p><strong>500 g:</strong> $<?php echo $fila["precio500"]; ?></p>

    <p><strong>1 kg:</strong> $<?php echo $fila["precio1000"]; ?></p>
    </div>

            <div class="consumo-semillas">
                ✨ Como lo puedes consumir

            <p>
            <?php

            $consumos = explode("|", $fila["consumo"]);

            foreach($consumos as $consumo){

            ?>

        ⮕ <?php echo $consumo; ?><br><br>

        <?php

        }

        ?>
        </p>
        </div>
        </div>
        </div>

        <?php

}

?>

        <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
            <h3>Linaza</h3>
            <img src="img/semillas/lino.webp" alt="semilla de lino" loading="lazy">

<?php

$sql_linaza = "SELECT * FROM productos WHERE nombre='Linaza'";

$resultado_linaza = $conexion->query($sql_linaza);

$linaza = $resultado_linaza->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($linaza["estado"]); ?>">

<?php

if($linaza["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>



            

            <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">

                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Su fibra combate el estreñimiento de forma rápida.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>El Omega-3 vegetal limpia las arterias y baja el colesterol malo.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Te llena por más tiempo, ayudando a controlar el peso.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Evitan las subidas bruscas de glucosa en la sangre.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $linaza["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $linaza["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $linaza["precio1000"]; ?></p>

                </div>

                <div class="consumo-semillas">
                    <h4>✨ Como lo puedes consumir</h4>
                    <p>
                       ⮕ ¡Consúmelas siempre <b>molidas</b> para que tu cuerpo pueda absorber sus nutrientes!<br><br> 
                       ⮕ espolvorea una cucharada sobre tu yogur favorito con frutas o granola.<br><br>
                       ⮕ Incorpóralas en masas de pan casero, crackers de semillas o incluso para preparar tortillas sin harina (solo lino molido y agua).
                    </p>
                </div>

            </div>

        </div>

        <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
            <h3>Girasol</h3>
            <img src="img/semillas/girasol.jpg" alt="semillas de girasol sin cascara" loading="lazy">

<?php

$sql_girasol = "SELECT * FROM productos WHERE nombre='Girasol'";

$resultado_girasol = $conexion->query($sql_girasol);

$girasol = $resultado_girasol->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($girasol["estado"]); ?>">

<?php

if($girasol["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        


            

            <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Sus grasas buenas ayudan a bajar el colesterol malo.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Tienen gran cantidad de Vitamina E que frena el envejecimiento.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Aportan magnesio y calcio para mantener los huesos fuertes.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Su zinc ayuda al cuerpo a evitar enfermedades.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Son ideales para vencer el cansancio durante el día.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $girasol["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $girasol["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $girasol["precio1000"]; ?></p>

                </div>

                <div class="consumo-semillas">
                    <h4>✨ Como lo puedes consumir</h4>

                    <p>
                        ⮕ Por la mañana, añádelas a tu desayuno (yogur, avena o licuados).<br><br>
                        ⮕ A media tarde, consúmelas como un snack saludable entre comidas para calmar el hambre.<br><br>
                        ⮕ Espolvoréalas sobre ensaladas, sopas, cremas de verduras o úsalas para preparar panes caseros.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
            <h3>Calabaza</h3>
            <img src="img/semillas/calabaza.webp" alt="semilla de calabaza" loading="lazy">

<?php

$sql_calabaza = "SELECT * FROM productos WHERE nombre='Calabaza'";

$resultado_calabaza = $conexion->query($sql_calabaza);

$calabaza = $resultado_calabaza->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($calabaza["estado"]); ?>">

<?php

if($calabaza["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        

            <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Te ayudan a dormir más profundo.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Protegen la salud masculina.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Previenen la diabetes.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Mantienen la presión arterial sana.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Evitan que te enfermes seguido.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $calabaza["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $calabaza["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $calabaza["precio1000"]; ?></p>

                </div>

                <div class="consumo-semillas">
                    <h4>✨ Como lo puedes consumir</h4>

                    <p>
                        ⮕ Agrega a ensaladas, sopas, yogur o avena.<br><br>
                        ⮕ Puedes licuarlas y sumarlas a tus licuados o batidos.<br><br>
                        ⮕ Se pueden consumir crudas directamente.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
            <h3>Sésamo blanco</h3>
            <img src="img/semillas/sesamo blanco.webp" alt="Sésamo blanco" loading="lazy">

<?php

$sql_sesamo_blanco = "SELECT * FROM productos WHERE nombre='Sésamo blanco'";

$resultado_sesamo_blanco = $conexion->query($sql_sesamo_blanco);

$sesamo_blanco = $resultado_sesamo_blanco->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($sesamo_blanco["estado"]); ?>">

<?php

if($sesamo_blanco["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

             <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">

                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Aporta gran cantidad de calcio para el esqueleto.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Limpian las arterias y bajan el colesterol.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Mejoran la memoria y la concentración.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Son ligeras y fáciles de procesar.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Sus aceites naturales la hidratan por dentro.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $sesamo_blanco["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $sesamo_blanco["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $sesamo_blanco["precio1000"]; ?></p>

                </div>


                <div class="consumo-semillas">
                    <h4>✨ Como lo puedes consumir</h4>

                    <p>
                         ⮕ Espolvorea una cucharada por encima de las ensaladas para darles un toque crujiente.<br><br>
                         ⮕ Agrégalo a tu tazón de yogur, avena o frutas picadas por la mañana.<br><br>
                         ⮕ Ponlo encima de una tostada con queso crema o aguacate (palta).<br><br>
                         ⮕ Úsalo para hacer panes caseros.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
            <h3>Sésamo integral</h3>
            <img src="img/semillas/sesamo integral.webp" alt="Sésamo integral" loading="lazy">

<?php

$sql_sesamo_integral = "SELECT * FROM productos WHERE nombre='Sésamo integral'";

$resultado_sesamo_integral = $conexion->query($sql_sesamo_integral);

$sesamo_integral = $resultado_sesamo_integral->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($sesamo_integral["estado"]); ?>">

<?php

if($sesamo_integral["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            

            

            <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">

                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Tienen muchísimo más calcio por su cáscara.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Aportan mucha fibra para ir mejor al baño.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Tienen hierro para dar fuerza a la sangre.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Mantienen la energía estable.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Su cáscara tiene potentes antioxidantes.</strong>
                    </li>
                </ul>

                 <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $sesamo_integral["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $sesamo_integral["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $sesamo_integral["precio1000"]; ?></p>

                </div>

                <div class="consumo-semillas">
                    <h4>✨ Como lo puedes consumir</h4>
                    <p>
                        ⮕ Agrégalos a tus desayunos para empezar el día con mucha fibra.<br><br>
                        ⮕ Ponlo encima de un pan con aguacate (palta) o queso crema.<br><br>
                        ⮕ Para panes y galletas caseras.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
            <h3>Sésamo negro</h3>
            <img src="img/semillas/sesamo negro.webp" alt="Sésamo negro" loading="lazy">

<?php

$sql_sesamo_negro = "SELECT * FROM productos WHERE nombre='Sésamo negro'";

$resultado_sesamo_negro = $conexion->query($sql_sesamo_negro);

$sesamo_negro = $resultado_sesamo_negro->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($sesamo_negro["estado"]); ?>">

<?php

if($sesamo_negro["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">

                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Son las que tienen más antioxidantes.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Aportan mucho calcio para el esqueleto.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Tienen hierro para darte energía.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Nutren desde adentro para dar brillo.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Ayudan a proteger a tu corazón.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $sesamo_negro["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $sesamo_negro["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $sesamo_negro["precio1000"]; ?></p>

                </div>

                <div class="consumo-semillas">
                    <h4>✨ Como lo puedes consumir</h4>

                    <p>
                        ⮕ En tostadas por arriba del pan con queso.<br><br>
                        ⮕ En ensaladas y tartas.<br><br>
                        ⮕ Arroz y fideos estilo asiático.<br><br>
                        ⮕ Panes y galletitas caseras.
                    </p>
                </div>
            </div>
        </div>

    <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
        <h3>Zaragatona Psyllium</h3>
        <img src="img/semillas/psyllium.jpg" alt="psyllium" loading="lazy">

<?php

$sql_zaragatona_psyllium = "SELECT * FROM productos WHERE nombre='Zaragatona psyllium'";

$resultado_zaragatona_psyllium = $conexion->query($sql_zaragatona_psyllium);

$zaragatona_psyllium = $resultado_zaragatona_psyllium->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($zaragatona_psyllium["estado"]); ?>">

<?php

if($zaragatona_psyllium["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


        <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">

                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Limpia el intestino y ayuda a ir al baño con facilidad.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Absorbe el exceso de agua y da consistencia a las heces.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Atrapa las grasas malas antes de que el cuerpo las absorba.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Evita los picos altos de glucosa después de comer.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Se infla en el estómago y ayuda a controlar el apetito.</strong>
                    </li>
                </ul>

                 <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $zaragatona_psyllium["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $zaragatona_psyllium["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $zaragatona_psyllium["precio1000"]; ?></p>

                </div>

                <div class="consumo-semillas">
                    <h4> ✨ Como lo puedes consumir</h4>

                    <p>
                        ⮕ Mezcla un poco directamente en tu yogur favorito, casi no tiene sabor así que no arruinará tu desayuno.<br><br>
                        ⮕ Espesante de sopas y salsas.<br><br> 
                        ⮕ En panadería (¡El ingrediente secreto sin gluten!)🤩.
                    </p>
                </div>
            </div>
    </div>
    

    <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
        <h3>Quinoa</h3>
        <img src="img/semillas/quinoa.jpg" alt="semilla quinoa" loading="lazy">

<?php

$sql_quinoa = "SELECT * FROM productos WHERE nombre='Quinoa'";

$resultado_quinoa = $conexion->query($sql_quinoa);

$quinoa = $resultado_quinoa->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($quinoa["estado"]); ?>">

<?php

if($quinoa["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


        <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Tiene todos los aminoácidos que tu cuerpo necesita.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Su fibra te ayuda a ir mejor al baño.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>No da pocos altos de azúcar en la sangre.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Ayuda a bajar el colestrol malo.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Es perfecta para personas celíacas.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Aporta mucho hierro y magnesio.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $quinoa["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $quinoa["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $quinoa["precio1000"]; ?></p>

                </div>

                <div class="consumo-semillas">
                    <h4> ✨Como lo puedes consumir</h4>

                    <p>

                        ⮕ Agrégalas a las ensaladas.<br><br>
                        ⮕ Úsala como guarnición para compañar carnes, pollos, pescados o vegetales salteados.<br><br>
                        ⮕ En el desayuno (estilo avena).<br><br>
                        ⮕ Mezcla la quinoa cocida con verduras ralladas, un huevo y pan rallado para formar medallones y dorarlos en la sartén.
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
        <h3>Amaranto</h3>
        <img src="img/semillas/amaranto.jpg" alt="semilla amaranto" loading="lazy">

<?php

$sql_amaranto = "SELECT * FROM productos WHERE nombre='Amaranto'";

$resultado_amaranto = $conexion->query($sql_amaranto);

$amaranto = $resultado_amaranto->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($amaranto["estado"]); ?>">

<?php

if($amaranto["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Aporta mucho <b>calcio</b> y proteínas de gran calidad.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Tiene gran cantidad de <b>hierro</b> para darte energía.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Su fibra mejora la digestión y no contiene gluten.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $amaranto["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $amaranto["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $amaranto["precio1000"]; ?></p>

                </div>

                <div class="consumo-semillas">
                    <h4>✨ Como lo puedes consumir</h4>

                    <p>
                       ⮕ Usa el amaranto como si fuera cereal crujiente arriba del yogur con frutas.<br><br>
                       ⮕ Pica una banana o una manzana, agrégale un hilo de miel y espolvorea el amaranto por encima.<br><br>
                       ⮕ Sumá una cucharada en tus licuados de frutas. 
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
        <h3>Mijo</h3>
        <img src="img/semillas/mijo.webp" alt="semilla mijo" loading="lazy">

<?php

$sql_mijo = "SELECT * FROM productos WHERE nombre='Mijo'";

$resultado_mijo = $conexion->query($sql_mijo);

$mijo = $resultado_mijo->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($mijo["estado"]); ?>">

<?php

if($mijo["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Tiene mucho <b>magnesio</b> que te ayuda a relajarte y te da fuerzas.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Aporta mineral especial que fortalece desde adentro ( deja el pelo, piel y uñas lindas).</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Es súper fácil de digerir, evita la acidez y <b>no tiene gluten</b>.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $mijo["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $mijo["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $mijo["precio1000"]; ?></p>

                </div>

                    <div class="consumo-semillas">
                        <h4>✨ Como lo puedes consumir</h4>

                        <p>
                            ⮕ Cocínalo con un poco de sal y úsalo para compañar pollo, carne, pescado o tus vegetales favoritos.<br><br>
                            ⮕ Deja enfriar el mijo cocido y mézclalo con tomate, cubitos de queso, albahaca y un chorrito de aceite de oliva.<br><br>
                            ⮕ En sopas y guisos.
                        </p>
                    </div>
            </div>
    </div>

    <div class="producto-card producto-card-semillas" onclick="alternarProducto(this)">
        <h3>Amapola</h3>
        <img src="img/semillas/amapola.jpg" alt="semilla amapola" loading="lazy">

<?php

$sql_amapola = "SELECT * FROM productos WHERE nombre='Amapola'";

$resultado_amapola = $conexion->query($sql_amapola);

$amapola = $resultado_amapola->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($amapola["estado"]); ?>">

<?php

if($amapola["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌱 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Relajan el sistema nervioso, ideales paar reducir el estrés y dormir mejor.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Tienen muchísimo calcio y fósforo, lo que ayudan a cuidar tus dientes y esqueleto.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">𖧧</span>
                        <strong>Aportan grasas saludables (Omega-3 y 6) que protegen tus arterias y zinc para reforzar tu sistema inmune.</strong>
                    </li>
                </ul>

                <div class="precios-producto">

                    <h4>💰 Precios</h4>

                    <p><strong>100 g:</strong> $<?php echo $amapola["precio100"]; ?></p>

                    <p><strong>500 g:</strong> $<?php echo $amapola["precio500"]; ?></p>

                    <p><strong>1 kg:</strong> $<?php echo $amapola["precio1000"]; ?></p>

                </div>

                <div class="consumo-semillas">
                    <h4>✨ Como lo puedes consumir</h4>
                    <p>
                        ⮕ Budín de limón y amapola, la combinación más famosa del mundo.<br><br>
                        ⮕ Espolvorea las semillas por encima del yogur con un poco de frutas o avena.<br><br>
                        ⮕ Ponlo un poco por encima de tostadas con queso crema, mermelada o palta.
                    </p>
                </div>
            </div>
    </div>
</div>  <!--cerrar grilla productos---->

<!-------------------ESPECIAS Y CONDIMENTOS----------------------->
<h2 class="titulo-categoria subtitulo-categoria">
    🌿 Especias y condimentos
</h2>

<div class="grilla-productos">

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Canela en polvo</h3>
        <img src="img/especias y condim/canela polvo.jfif" alt="canela en polvo" loading="lazy">

<?php

$sql_canela = "SELECT * FROM productos WHERE nombre='Canela en polvo'";

$resultado_canela = $conexion->query($sql_canela);

$canela = $resultado_canela->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($canela["estado"]); ?>">

<?php

if($canela["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                
             <ul class="beneficios-semillas">
            <li>
                <span class="flecha-semillas">💠</span>
                <strong>Controla la glucosa y evita los antojos de dulce.</strong>
            </li>

            <li>
                <span class="flecha-semillas">💠</span>
                <strong>Alivia dolores en el cuerpo y protege tus células.</strong>
            </li>


            <li>
                <span class="flecha-semillas">💠</span>
                <strong>Evita los gases y la hinchazón de la panza.</strong>
            </li>
            </ul>

<div class="precios-producto">

<h4>💰 Precios</h4>

<p><strong>100 g:</strong> $<?php echo $canela["precio100"]; ?></p>

<p><strong>150 g:</strong> $<?php echo $canela["precio150"]; ?></p>

</div>
            

            <div class="consumo-semillas">
                <h4>🥣 Como lo puedes consumir</h4>

                <P>
                    ⮕ Agrega una pizca directo a tu taza diaria para endulzar de forma natural sin usar azúcar.<br><br>
                    ⮕ Leche con canela.<br><br>
                    ⮕ Queda espectacular si la sumas a batidos que tengan banana, manzana o avena..<br><br>
                    ⮕ Agrega media cucharita arriba de tu tazón de avena o de tu yogur con cereales.
                </P>
            </div>
            </div>
    </div>

<div class="producto-card" onclick="alternarProducto(this)">
<h3>Canela en rama</h3>
<img src="img/especias y condim/canela rama.jpg" alt="Canela en rama" loading="lazy">

<?php

$sql_canela_rama = "SELECT * FROM productos WHERE nombre='Canela en rama'";

$resultado_canela_rama = $conexion->query($sql_canela_rama);

$canela_rama = $resultado_canela_rama->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($canela["estado"]); ?>">

<?php

if($canela["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>
    

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Sus aceites naturales calman rápido los dolores de panza y los gases.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Mantiene el azúcar bajo control para que no tiente lo dulce.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Ideal para calmar la tos, dolor de garganta y calentar el cuerpo.</strong>
                    </li>
                </ul>
            <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $canela_rama["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $canela_rama["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $canela_rama["precio150"]; ?></p>


            </div>

                <div class="consumo-semillas">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                       ⮕ Té de canela cásico.<br><br> 
                       ⮕ Para saborizar tu café o té.<br><br>
                       ⮕ Arroz con leche tradicional.<br><br>
                       ⮕ Salsas y guisos.
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Canela quebrada</h3>
        <img src="img/especias y condim/canela quebrada.png" alt="canela quebrada" loading="lazy">

<?php

$sql_canela_quebrada = "SELECT * FROM productos WHERE nombre='Canela quebrada'";

$resultado_canela_quebrada = $conexion->query($sql_canela_quebrada);

$canela_quebrada = $resultado_canela_quebrada->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($canela_quebrada["estado"]); ?>">

<?php

if($canela_quebrada["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

         <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Sus trozos sueltas nutrientes que controlan la glucosa de forma muy eficiente.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Calma la acidez, dolores de panza y los gases en minutos.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Sus antioxidantes protegen tus células y reducen la hinchazón.</strong>
                    </li>
                </ul>

                <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $canela_quebrada["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $canela_quebrada["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $canela_quebrada["precio150"]; ?></p>


            </div>

                <div class="consumo-semillas">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                        ⮕ Té express de canela.<br><br>
                        ⮕ Saborizar el termo del mate.<br><br>
                        ⮕ En tu café de filtro.<br><br>
                        ⮕ Arroz con leche y avena.
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Clavo de olor</h3>
        <img src="img/especias y condim/Clavo de olor.jpg" alt="clavo de olor" loading="lazy">

<?php

$sql_clavo_olor = "SELECT * FROM productos WHERE nombre='Clavo de olor'";

$resultado_clavo_olor = $conexion->query($sql_clavo_olor);

$clavo_olor = $resultado_clavo_olor->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($clavo_olor["estado"]); ?>">

<?php

if($clavo_olor["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Actúa como un anestésico natural, ideal para el dolor de muelas o encías.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Desinflama la panza y mejora la digestión pesada rápidamente.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Combate bacterias en la boca y ayuda a eliminar el mal aliento.</strong>
                    </li>
                </ul>

                <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $clavo_olor["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $clavo_olor["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $clavo_olor["precio150"]; ?></p>


            </div>

                <div class="consumo-semillas">
                    <h4>🥣 Como lo puedes consumir</h4>
                    <p>
                        ⮕ Té digestivo, agregando 2 clavos de olor a una taza con agua caliente, deja reposar 5min y tómalo después de comer.<br><br>
                        ⮕ Mate aromático.<br><br>
                        ⮕ Suma 1 clavo de olor en el filtro junto  con el café molido antes de pasar el agua.<br><br>
                        ⮕ Pon 1 clavo de olor en el agua donde vas a hervir el arroz. Le da un aroma delicioso estilo oriental.
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Clavo de olor en polvo</h3>
        <img src="img/especias y condim/clavo olor en polvo.jpg" alt="clavo de olor en polvo" loading="lazy">

<?php

$sql_clavo_olor_polvo = "SELECT * FROM productos WHERE nombre='Clavo de olor en polvo'";

$resultado_clavo_olor_polvo = $conexion->query($sql_clavo_olor_polvo);

$clavo_olor_polvo = $resultado_clavo_olor_polvo->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($clavo_olor_polvo["estado"]); ?>">

<?php

if($clavo_olor_polvo["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">

                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Calma dolores corporales y de muelas de forma muy rápida.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Reduce los gases y las digestiones pesadas casi al instante.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Aporta muchos antioxidantes que desinflaman todo tu cuerpo.</strong>
                    </li>
                </ul>

                <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $clavo_olor_polvo["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $clavo_olor_polvo["precio50"]; ?></p>

            </div>

                <div class="consumo-semillas">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <P>
                        ⮕ Mezcla para repostería (galletas, budines o pancakes).<br><br>
                        ⮕ Hierve agua con una ramita de canela y un trozo de jengibre fresco. Luego agrega té negro (o bebida vegetal) y una pizca de clavo de olor en polvo.<br><b>Endulza con miel.</b>
                    </P>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Anís estrellado</h3>
        <img src="img/especias y condim/anis estrellado.jpg" alt="anis estrellado" loading="lazy">

<?php

$sql_anis_estrellado = "SELECT * FROM productos WHERE nombre='Anís estrellado'";

$resultado_anis_estrellado = $conexion->query($sql_anis_estrellado);

$anis_estrellado = $resultado_anis_estrellado->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($anis_estrellado["estado"]); ?>">

<?php

if($anis_estrellado["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Quita los gases, desinflama el estómago y mejora la digestión pesada.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Ayuda al cuerpo a protegerse de los virus y bacterias.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Limpia los pulmones y abre las vías respiratorias si tienes un resfriado.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Combate los gérmenes de la boca y quita el mal olor si masticas un pedacito.</strong>
                    </li>
                </ul>

            <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $anis_estrellado["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $anis_estrellado["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $anis_estrellado["precio150"]; ?></p>

            </div>

                <div class="consumo-semillas">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                        ⮕ Puedes agregar en el mate🧉.<br><br>
                        ⮕ Infusión sencilla.<br><br>
                        ⮕ Agrega media estrella a tu taza de té habitual mientras reposa para darle un toque dulce y aromático.
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Anís estrellado en tallo</h3>
        <img src="img/especias y condim/anis estrellado tallo.png" alt="anis estrellado en tallos" loading="lazy">

<?php

$sql_anis_estrellado_tallo = "SELECT * FROM productos WHERE nombre='Anís estrellado en tallo'";

$resultado_anis_estrellado_tallo = $conexion->query($sql_anis_estrellado_tallo);

$anis_estrellado_tallo = $resultado_anis_estrellado_tallo->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($anis_estrellado_tallo["estado"]); ?>">

<?php

if($anis_estrellado_tallo["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">

               <ul class="beneficios-semillas">
                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Desinflama la panza y alivia dolores de estómago.</strong>
                </li>

                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Abre los pulmones y ayuda a respirar mejor si estás resfriado.</strong>
                </li>

                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Combate gérmenes y hongos en el cuerpo.</strong>
                </li>

                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Al ser tallos y trozos sueltos, es más económico pero funciona igual de bien que las estrellas enteras.</strong>
                </li>
               </ul> 

               <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $anis_estrellado_tallo["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $anis_estrellado_tallo["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $anis_estrellado_tallo["precio150"]; ?></p>

            </div>

               <div class="consumo-semillas">
                <h4>🥣 Como lo puedes consumir</h4>

                <p>
                    ⮕ Té digestivo para después de comer.<br><br>
                    ⮕ Si tomás mate, agrega una pizca de estos tallos mezclados directamente con la yerba🧉.
                </p>
               </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(This)">
        <h3>Cúrcuma en polvo</h3>
        <img src="img/especias y condim/curcuma en polvo.jpg" alt="curcuma en polvo" loading="lazy">

<?php

$sql_curcuma = "SELECT * FROM productos WHERE nombre='Cúrcuma en polvo'";

$resultado_curcuma = $conexion->query($sql_curcuma);

$curcuma = $resultado_curcuma->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($curcuma["estado"]); ?>">

<?php

if($curcuma["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">

               <ul class="beneficios-semillas">
                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Desinflama el cuerpo y alivia las articulaciones.</strong>
                </li>

                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Evita los gases y quita la hinchazón de la panza.</strong>
                </li>

                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Funciona como un fuerte antioxidante que protege tus células.</strong>
                </li>

                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Ayuda a mejorar la circulación de la sangre.</strong>
                </li>
               </ul>

               <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $curcuma["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $curcuma["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $curcuma["precio150"]; ?></p>

            </div>

               <div class="consumo-semillas">
                <h4>🥣 Como lo puedes consumir</h4>

                <p>
                    ⮕ Mezcla media cucharita de cúrcuma, una pizca de pimienta negra y un chorrito de jugo de limón en medio vaso de agua. Tómatelo de un trago por la mañana.<br><br>
                    ⮕ Agrega una pequeña piozca a tu café mañanero o a un té verde caliente.
                </p>
               </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Jengibre en polvo</h3>
        <img src="img/especias y condim/jengibre en polvo.jpg" alt="jengibre en polvo" loading="lazy">

<?php

$sql_jengibre = "SELECT * FROM productos WHERE nombre='Jengibre en polvo'";

$resultado_jengibre = $conexion->query($sql_jengibre);

$jengibre = $resultado_jengibre->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($jengibre["estado"]); ?>">

<?php

if($jengibre["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">

               <ul class="beneficios-semillas">
                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Calma rápido el asco, los mareos y el malestar de estómago.</strong>
                </li>

                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Alivia el dolor de músculos y articulaciones.</strong>
                </li>

                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Calienta el cuerpo, quita la tos y afloja los mocos.</strong>
                </li>

                <li>
                    <span class="flecha-semillas">💠</span>
                    <strong>Evita los gases y hace que la comida no te caiga pesada.</strong>
                </li>
               </ul>

               <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $jengibre["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $jengibre["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $jengibre["precio150"]; ?></p>

            </div>

               <div class="consumo-semillas">
                <h4>🥣 Como lo puedes consumir</h4>

                <p>
                    ⮕ Té express limpia-garganta.<br><br>
                    ⮕ En tu café matutino.<br><br>
                    ⮕ Échale media cucharita a tus licuados de fruta (combina perfecto con manzana, piña o banana).
                </p>
               </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Pimienta negra</h3>
        <img src="img/especias y condim/pimienta negra.jpg" alt="pimienta negra" loading="lazy">

<?php

$sql_pimienta = "SELECT * FROM productos WHERE nombre='Pimienta negra'";

$resultado_pimienta = $conexion->query($sql_pimienta);

$pimienta = $resultado_pimienta->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($pimienta["estado"]); ?>">

<?php

if($pimienta["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>"
                        <span class="flecha-semillas">💠</span>
                        <strong>Multiplica la absorción de nutrientes y vitaminas de otros alimentos.</strong>
                    </li>

                    <li>"
                        <span class="flecha-semillas">💠</span>
                        <strong>Estimula el estómago para procesar la comida más rápido y evitar gases.</strong>
                    </li>

                    <li>"
                        <span class="flecha-semillas">💠</span>
                        <strong>Protege tus células contra el envejecimiento y el daño diario.</strong>
                    </li>

                    <li>"
                        <span class="flecha-semillas">💠</span>
                        <strong>Reduce dolores e inflamaciones en el cuerpo.</strong>
                    </li>

                    <li>"
                        <span class="flecha-semillas">💠</span>
                        <strong>Apoya el control del peso y ayuda a regular el azúcar en la sangre.</strong>
                    </li>
                </ul>

                <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $pimienta["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $pimienta["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $pimienta["precio150"]; ?></p>

            </div>

                <div class="consumo-semillas">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                       ⮕ Agrega pimienta recién molida sobre un plato de tomates, aguacate o verduras asadas para resaltar su sabor.<br><br>
                       ⮕ Carnes y legumbres. 
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Chimichurri</h3>
        <img src="img/especias y condim/chimichurri.png" alt="chimichurri" loading?="lazy">

<?php

$sql_chimichurri = "SELECT * FROM productos WHERE nombre='Chimichurri'";

$resultado_chimichurri = $conexion->query($sql_chimichurri);

$chimichurri = $resultado_chimichurri->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($chimichurri["estado"]); ?>">

<?php

if($chimichurri["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>
        
        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Tiene antioxidantes que cuidan tus células y desinflaman.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>El ajo ayuda a tu sangre a correr mejor.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Sus hierbas ayudan a combatir bacterias malas.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Hace que te sientas menos pesado después de comer.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Te da hierro y vitaminas para tus huesos y defensas.</strong>
                    </li>
                </ul>

                <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $chimichurri["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $chimichurri["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $chimichurri["precio150"]; ?></p>

            </div>

                <div class="consumo-semillas">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                        ⮕ <b>Pollo al horno,</b> úsalo como adobo antes de cocinarlo para que quede jugoso.<br><br>
                        ⮕ <b>Pescado a la plancha,</b> ponle una cucharadita encima justo antes de sacarlo del fuego.<br><br>
                        ⮕ <b>Cerdo o cordero,</b> Combina perfecto con cortes magros para darles más humedad.<br><br>
                        ⮕ <b>Papas al horno,</b> mezcla las papas cortadas con chimichurri antes de meterlas al horno.
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Provenzal</h3>
        <img src="img/especias y condim/provenzal.webp" alt="provenzal" loading="lazy">

<?php

$sql_provenzal = "SELECT * FROM productos WHERE nombre='Provenzal'";

$resultado_provenzal = $conexion->query($sql_provenzal);

$provenzal = $resultado_provenzal->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($provenzal["estado"]); ?>">

<?php

if($provenzal["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>El ajo que contiene, ayuda a combatir bacterias y virus.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Ayuda a bajar la presión alta y el colesterol malo</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Evita los gases y la hinchazón después de comer.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>El perejil ayuda a eliminar el exceso de líquido a través de la orina.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Aporta Vitamina A, C y K, además de minerales como el hierro y calcio.</strong>
                    </li>
                </ul>

                <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $provenzal["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $provenzal["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $provenzal["precio150"]; ?></p>

            </div>

                <div class="cosumo-semillas">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                        ⮕ <b>Papas a la provenzal,</b> Puedes espolvorearlo sobre papas fritas recién hechas.<br><br>
                        ⮕ Queda delicioso sobre calabaza, berenjenas o zanahorias cocinadas al horno con un chorrito de aceite.<br><br>
                        ⮕ <b>Milanesas,</b> es el ingrediente secreto indispensabale. Se añade directamente al huevo batido antes de pasar la carne o el pollo por pan rallado.
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Orégano</h3>
        <img src="img/especias y condim/pregano.jpg" alt="oregano" loading="lazy">

<?php

$sql_oregano = "SELECT * FROM productos WHERE nombre='Orégano'";

$resultado_oregano = $conexion->query($sql_oregano);

$oregano = $resultado_oregano->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($oregano["estado"]); ?>">

<?php

if($oregano["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

         <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Combate de forma activa bacterias, virus y hongos en el cuerpo.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Su efecto antiinflamatorio reduce los cólicos menstruales y molestias musculares.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Disminuye notablemente los gases, la hinchazón y la pesadez estomacal.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Por su gran acntidad de antioxidantes, protegen tu salud y retrasan el envejecimiento.</strong>
                    </li>

                     <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Su consumo en infusiones es ideal para calmar la tos y ablandar la mucosidad.</strong>
                    </li>
                </ul>

                <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $oregano["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $oregano["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $oregano["precio150"]; ?></p>

            </div>

                <div class="consumo-semillas">
                    <h4>🥣 Como lo puedes consumir</h4>

                    <p>
                        ⮕ Espolvorealo sobre la pizza.<br><br>
                        ⮕ Queda espectacular sobre rodajas de tomate fresco, queso criollo, muzzarella o ricota, junto con un buen chorrito de aceite de oliva.<br><br>
                        ⮕ Adobo para carnes y cerdos.
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Perejil</h3>
        <img src="img/especias y condim/perejil.avif" alt="perejil" loading="lazy">

<?php

$sql_perejil = "SELECT * FROM productos WHERE nombre='Perejil'";

$resultado_perejil = $conexion->query($sql_perejil);

$perejil = $resultado_perejil->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($perejil["estado"]); ?>">

<?php

if($perejil["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Ayuda a los riñones a deshinchar el cuerpo y a controlar la presión.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Su mezcla de hierrro y Vitamina C, es ideal para evitar la anemia.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Aporta mucha Vitamina K, que ayuda a cuidar tu esqueleto.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Alivia la pesadez, los gases y los espasmos estomacales.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Combate el mal aliento de forma natural.</strong>
                    </li>
                </ul>

                <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $perejil["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $perejil["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $perejil["precio150"]; ?></p>

            </div>

                

                <div class="consumo-semillas">
                    <h4> 🥣Como lo puedes consumir</h4>

                    <p>
                        ⮕ Queda genial mezclado en huevos revueltos, omelettes o una clásica tortilla de papas o de zapallitos verdes.<br><br>
                        ⮕ Sobre tostadas con palta.<br><br>
                        ⮕ Pescados y pollos.<br><br>
                        ⮕ Purés y sopas.
                    </p>
                </div>
            </div>
    </div>

    <div class="producto-card" onclick="alternarProducto(this)">
        <h3>Adobo para pizza</h3>
        <img src="img/especias y condim/adobo pizza.webp" alt="adobo para pizza" loading="lazy">

<?php

$sql_adobo_pizza = "SELECT * FROM productos WHERE nombre='Adobo para pizza'";

$resultado_adobo_pizza = $conexion->query($sql_adobo_pizza);

$adobo_pizza = $resultado_adobo_pizza->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($adobo_pizza["estado"]); ?>">

<?php

if($adobo_pizza["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

        <div class="ver-info-semillas">
                🌿 Ver beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-semillas">
                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Ayuda a que las comidas pesadas (masas y quesos), caigan mejor.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Su toque pocante estimula al cuerpo a quemar energía de forma mas eficiente.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Está lleno de antioxidantes que protegen tus células y cuidan al corazón.</strong>
                    </li>

                    <li>
                        <span class="flecha-semillas">💠</span>
                        <strong>Combina hierbas y especias que ayudan a desinflamar el organismo de forma natural.</strong>
                    </li>
                </ul>

                <div class="precios-producto">
                <h4>💰 Precios</h4>

                <p><strong>100 g:</strong> $<?php echo $adobo_pizza["precio100"]; ?></p>

                <p><strong>50 g:</strong> $<?php echo $adobo_pizza["precio50"]; ?></p>

                <p><strong>150 g:</strong> $<?php echo $adobo_pizza["precio150"]; ?></p>

            </div>

                <div class="consumo-semillas">
                    <h4> 🥣Como lo puedes consumir</h4>

                    <p>
                        ⮕ Agrega una cucharada a tu salsa de tomate para fideos o polenta, le da un gusto clásico.<br><br>
                        ⮕ Súmalo a principios de cocción cuando hagas guisos de lentejas, de arroz o estofados de carne.<br><br>
                        ⮕ Espolvorea por encima de la pizza antes de colocar en el horno.

                    </p>
                </div>
            </div>
    </div>
</div>
</section>

<!--------------------------------------- SECCIÓN FRUTAS CONGELADAS------------------------------------------>
<section id="congelados-categoria">

        <button class="btn-volver"
        onclick="volverCategorias()">
        ← Volver a Categorías
    </button>

    <h2 class="titulo-categoria">
        Frutas congeladas
    </h2>

    <div class="grilla-productos">

        <div class="producto-card producto-card-congelados" onclick="alternarProducto(this)">
            <h3>Frutilla Entera</h3>
            <img src="img/congelados/frutilla cong.jpg" alt="frutilla congelada" loading="lazy">

<?php

$sql_frutilla = "SELECT * FROM productos WHERE nombre='Frutilla Entera'";

$resultado_frutilla = $conexion->query($sql_frutilla);

$frutilla = $resultado_frutilla->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($frutilla["estado"]); ?>">

<?php

if($frutilla["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

             <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Conservan intactas la Vitamina C y los antioxidantes.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Puedes consumirlas en cualquier época del año sin importar la temporada.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Duran meses en el freezer y solo usas la cantidad que necesitas.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Bajas en calorías, ricas en fibra y ayudan a cuidar al corazón.</strong>
                    </li>

                </ul>

<div class="precios-producto">

<h4>💰 Precio</h4>

<p><strong>1 kg :</strong> $<?php echo $frutilla["precio1000"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4>🥤 Formas de disfrutarla</h4>

                    <p>
                        ➼ Ideal para preparar smoothies y licuados.<br><br>
                        ➼ Perfecta para acompañar yogures, avena o granolas.<br><br>
                        ➼ Excelente para postres, helados caseros y repostería.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-congelados" onclick="alternarProducto(this)">
            <h3>Pulpa Frutilla</h3>
            <img src="img/congelados/pulpa frutilla.webp" alt="Pulpa frutilla de congelada" loading="lazy">

<?php

$sql_frut_pulpa = "SELECT * FROM productos WHERE nombre='Pulpa Frutilla'";

$resultado_frut_pulpa = $conexion->query($sql_frut_pulpa);

$frut_pulpa = $resultado_frut_pulpa->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($frut_pulpa["estado"]); ?>">

<?php

if($frut_pulpa["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Mantiene la Vitamina C y los antioxidantes de la fruta fresca.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>No tiene hojas ni partes dañadas; rinde 100% de su peso.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Viene lista para usar, sin necesidas de lavar, pelar ni licuar.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Facilita lograr texturas perfectas en jugos, salsas y postres.</strong>
                    </li>
                </ul>

<div class="precios-producto">
<h4>💰 Precio</h4>

<p><strong>1 kg :</strong> $<?php echo $frut_pulpa["precio1000"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4>🥤 Ideas para disfrutar</h4>

                    <p>
                        ➼ Smoothie cremoso.<br><br>
                        ➼ <b>Limonada rosa,</b> mezcla la pulpa descong. con agua fría, jugo de limón exprimido y endulzante al gusto.<br><br>
                        ➼ <b>Agua fresca,</b> Licúa la pulpa con agua, hielo y unas hojas de menta fresca para un día caluroso.<br><br>
                        ➼ <b>Helado express,</b> Procesa la pulpa congelada con yogur griego firme y endulzante hasta lograr una textura cremosa.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-congelados" onclick="alternarProducto(this)">
            <h3>Arándanos</h3>
            <img src="img/congelados/arándano cong..webp" alt="Arándanos congelados" loading="lazy">

<?php

$sql_arandanos = "SELECT * FROM productos WHERE nombre='Arándanos'";

$resultado_arandanos = $conexion->query($sql_arandanos);

$arandanos = $resultado_arandanos->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($arandanos["estado"]); ?>">

<?php

if($arandanos["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

             <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Aportan mucha Vitamina C y K.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Ayudan a bajar la presión, mejoran la memoria y reducen la inflamación.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Su congelación rompe la fibra celular y facilita que tu cuerpo absorba mejor sus nutrientes.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Se congelan en su punto de madurez, manteniendo todas sus propiedades por meses.</strong>
                    </li>
                </ul>
<div class="precios-producto">
<h4>💰 Precio</h4>

<p><strong>500 g :</strong> $<?php echo $arandanos["precio500"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4>🥤 Ideas para disfrutar</h4>

                    <p>
                        ➼ úsalos en lugar de hielo para espesar tus batidos de proteína o leche.<br><br>
                        ➼ Mézclalos congelados directamente en yogur natural para que se enfríe al instante.<br><br>
                        ➼ Cómelos directo del congelador como si fueran pequeños caramelos refrescantes.<br><br>
                        ➼ <b>Mermelada saludable en minutos,</b> Cocínalos a fuego lento con un chorrito de agua y endulzante hasta que se espesen.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-congelados" onclick="alternarProducto(this)">
            <h3>Mix frutos rojos</h3>
            <img src="img/congelados/mix frutos rojos.webp" alt="Mix frutos rojos congelados" loading="lazy">

<?php

$sql_frutos_rojos = "SELECT * FROM productos WHERE nombre='Mix frutos rojos'";

$resultado_frutos_rojos = $conexion->query($sql_frutos_rojos);

$frutos_rojos = $resultado_frutos_rojos->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($frutos_rojos["estado"]); ?>">

<?php

if($frutos_rojos["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Se congelan en su mejor momento, manteniendo intactas sus Vitaminas y minerales.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>El frío facilita que el cuerpo absorba mejor sus compuestos protyectores y antiinflmatorios.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Desinflaman las arterias y controlan el azúcar en la sangre.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Son más económicos, duran meses en el freezer y están listos para usar todo el año.</strong>
                    </li>
                </ul>
<div class="precios-producto">
<h4>💰 Precio</h4>

<p><strong>1 kg :</strong> $<?php echo $frutos_rojos["precio1000"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4>🥤 Ideas para disfrutar</h4>

                    <p>
                        ➼ Licuado antioxidante rápido.<br><br>
                        ➼ Licúa los frutos rojos con yogur natural o griego, un poco de leche y una cucharada de avena.<br><br>
                        ➼ Helado express, licuando los frutos rojos con rodajas de banana.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-congelados" oncliK="alternarProducto(this)">
           <h3>Maracuyá con semillas</h3>
           <img src="img/congelados/maracuya con semillas.webp" alt="Maracuyá C/semillas congelado" loading="lazy">

<?php

$sql_maracuya_semilla = "SELECT * FROM productos WHERE nombre='Maracuyá con semillas'";

$resultado_maracuya_semilla = $conexion->query($sql_maracuya_semilla);

$maracuya_semilla = $resultado_maracuya_semilla->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($maracuya_semilla["estado"]); ?>">

<?php

if($maracuya_semilla["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

           <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Las semillas limpian el colon y mejoran el tránsito intestinal.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Reducen la ansiedad y mejora el sueño.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Aporta mucha Vitamina C y A para la inmunidad y la piel.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Sus grasas buenas (Omega-6) y potasio protegen las arterias.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Evita el trabajo de pelarlo y mantiene su acidez perfecta.</strong>
                    </li>
                </ul>
<div class="precios-producto">
<h4>💰 Precio</h4>

<p><strong>1 kg :</strong> $<?php echo $maracuya_semilla["precio1000"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4>🥤 Ideas para disfrutar</h4>

                    <p>
                        ➼ Limonada tropical de maracuyá (con agua fría, limón y endulzante a gusto).<br><br>
                        ➼ Agua saborizada express (dentro del termo con agua fría o agua con gas).<br><br>
                        ➼ Smoothie "Tropical" (Maracuyá + Frutos rojos).
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-congelados" onclick="alternarProducto(this)">
            <h3>Maracuyá sin semillas</h3>
            <img src="img/congelados/maracuya sin semilla.png" alt="Maracuyá S/semillas congelado" loading="lazy">

<?php

$sql_maracuya_sin_semilla = "SELECT * FROM productos WHERE nombre='Maracuyá sin semillas'";

$resultado_maracuya_sin_semilla = $conexion->query($sql_maracuya_sin_semilla);

$maracuya_sin_semilla = $resultado_maracuya_sin_semilla->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($maracuya_sin_semilla["estado"]); ?>">

<?php

if($maracuya_sin_semilla["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

             <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Reduce el estrés, calma ansiedad y mejora el sueño.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Ideal para estómagos sensibles o colon irritable al no tener la fibra dura de la semilla.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Perfecto para usar directamente en cremas, postres y salsas sin tener que colar.</strong>
                    </li>

                     <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Conserva su acidez tropical intacta y viene listo para usar sin ensuciar</strong>
                    </li>
                </ul>
<div class="precios-producto">
<h4>💰 Precio</h4>

<p><strong>1 kg :</strong> $<?php echo $maracuya_sin_semilla["precio1000"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4> 🥤Ideas para disfrutar</h4>

                    <p>
                        ➼ Jugo express de maracuyá.<br><br>
                        ➼ Mezcla la pulpa con agua con gas, hielo y rodajas de menta. Si consumes alcohol combina perfecto con vodka, ginebra o espumante.<br><br>
                        ➼ Licúa la pulpa con leche condensada y crema de leche (o yogur firme).
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-congelados" onclick="alternarProducto(This)">
            <h3>Ananá en cubos</h3>
            <img src="img/congelados/ananá en cubos.png" alt="Ananá en cubo congelado" loading="lazy">

<?php

$sql_anana = "SELECT * FROM productos WHERE nombre='Ananá en cubos'";

$resultado_anana= $conexion->query($sql_anana);

$anana = $resultado_anana->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($anana["estado"]); ?>">

<?php

if($anana["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Contiene bromelina, que desinflama y ayuda a digerir proteínas.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Aporta mucha Vitamina C para fortalecer el sitema inmune.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Es diurética y depurativa gracias a su agua y potasio.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Rica en manganeso, ideal para la salud ósea.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Conserva todos sus nutreinetes, no se echa a perder rápido y viene lista para usar</strong>
                    </li>
                </ul>
<div class="precios-producto">
<h4>💰 Precio</h4>

<p><strong>1 kg :</strong> $<?php echo $anana["precio1000"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4>🥤 Ideas para disfrutar</h4>

                    <p>
                        ➼ Licúa los cubos congelados con leche de coco, banana y un toque de jengibre.<br><br>
                        ➼ Procesa el ananá con yogur natural espeso hasta lograr una consistencia de helado (decora con granola).<br><br>
                        ➼ Añade los cubos directamente sobre tu avena caliente, panqueques o waffles.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-congelados" onclick="alternarProducto(this)">
            <h3>Açaí</h3>
            <img src="img/congelados/açaí cong.png" alt="Açaí Congelado" loading="lazy">

<?php

$sql_açaí = "SELECT * FROM productos WHERE nombre='Açaí'";

$resultado_açaí= $conexion->query($sql_açaí);

$açaí = $resultado_açaí->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($açaí["estado"]); ?>">

<?php

if($açaí["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Combaten el envejecimiento celular y protegen el corazón.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Contiene Omega 3, 6 y 9, lo que ayuda a controlar el colesterol malo (LDL) y cuidar las arterias.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Rico en carbohidratos saludables y proteínas, ideal para deportistas o paa empezar el día.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Favorece el tránsito intestinal y ayuda a mantener la saciedad por más tiempo.</strong>
                    </li>
                </ul>
<div class="precios-producto">
<h4>💰 Precio</h4>

<p><strong>1 kg :</strong> $<?php echo $açaí["precio1000"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4>🥤 Ideas para disfrutar</h4>

                    <p>
                     ➼ Licúa la pulpa con media banana y un poco de agua hasta lograr una textura cremosa como de helado suave.<br> Sírve en un tazon (decora con granola, frutills, etc).<br><br>
                     ➼ Smoothie energético.<br><br>
                     ➼ Paletas heladas.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-congelados" onclick="alternarProducto(this)">
            <h3>Mamón en cubo</h3>
            <img src="img/congelados/mamon cubo.png" alt="Mamón en cubos congelado" loading="lazy">

<?php

$sql_mamon = "SELECT * FROM productos WHERE nombre='Mamón en cubo'";

$resultado_mamon= $conexion->query($sql_mamon);

$mamon = $resultado_mamon->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($mamon["estado"]); ?>">

<?php

if($mamon["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>

            <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Aporta papaína contra el estreñimiento.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Rico en Vitaminas C y A.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Protege las células y el corazón.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                        <strong>Muy bajo en calorías y alto de agua.</strong>
                    </li>
                </ul>
<div class="precios-producto">
<h4>💰 Precio</h4>

<p><strong>1 kg :</strong> $<?php echo $mamon["precio1000"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4>🥤 Ideas para disfrutar</h4>
                    <p>
                        ➼ Licúa los cubos con leche de coco, jugo de naranja y un toque de jengibre.<br><br>
                        ➼ <b>Smoothie verde,</b> Mezcla el mamón con espinaca fresca, agua y media banana.<br><br>
                        ➼ <b>Batido proteico,</b> procésalo con yogur griego natural, leche y unacucharada de avena.
                    </p>
                </div>
            </div>
        </div>

        <div class="producto-card producto-card-congelados" onclick="alternarProducto(this)">
            <h3>Limón</h3>
            <img src="img/congelados/limon cong.png" alt="Limón congelado" loading="lazy">

<?php

$sql_limon = "SELECT * FROM productos WHERE nombre='Limón'";

$resultado_limon= $conexion->query($sql_limon);

$limon = $resultado_limon->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower($limon["estado"]); ?>">

<?php

if($limon["estado"] == "Disponible"){

    echo "🟢 Disponible";

}else{

    echo "🔴 Agotado";

}

?>

</div>


            <div class="ver-info-congelados">
                ❄️ Descubrí sus beneficios
            </div>

            <div class="contenido-producto">
                <ul class="beneficios-congelados">
                    <li>
                        <span class="flecha-congelados">❄</span>
                            <strong>Mantiene intacta la Vitamina C poara el sistema inmune.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                            <strong>Conserva los flavonoides que protegen las células.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                            <strong>Estimula los jugos gástricos y reduvce la pesadez.</strong>
                    </li>

                    <li>
                        <span class="flecha-congelados">❄</span>
                            <strong>Aporta poquísimas calorías y es un diurético natural.</strong>
                    </li>
                </ul>
<div class="precios-producto">
<h4>💰 Precio</h4>

<p><strong>1 kg :</strong> $<?php echo $limon["precio1000"]; ?></p>

</div>

                <div class="consumo-congelados">
                    <h4> 🥤Ideas para disfrutar</h4>
                    <p>
                        ➼ Agua sabporizada instantánea.<br><br>
                        ➼ Limonada frappé rápida.<br><br>
                        ➼ <b>Toque para postres,</b> ralla el limón congelado sobre un yogur natutral, porciones de budín o helado de crema.
                    </p>
                </div>
            </div>
        </div>

        <!-- ==================== MANGO PULPA ==================== -->
        <div class="producto-card producto-card-congelados" onclick="alternarProducto(this)">

    <h3>Mango pulpa</h3>

    <img src="img/congelados/mango cong.png" alt="Mango congelado" loading="lazy">

<?php
// Consulta SQL: busca el producto "Mango pulpa"
$sql_mango = "SELECT * FROM productos WHERE nombre='Mango pulpa'";

// Ejecuta la consulta
$resultado_mango = $conexion->query($sql_mango);

// Guarda los datos encontrados en la variable $mango
$mango = $resultado_mango->fetch_assoc();

?>

<div class="estado-producto <?php echo strtolower(trim($mango["estado"])); ?>">

<?php

// Si el estado es "Disponible"
if(strtolower(trim($mango["estado"])) == "disponible"){

    echo "🟢 Disponible";

}else{
// Si no, muestra Agotado
    echo "🔴 Agotado";

}

?>

</div>

<div class="ver-info-congelados">
    ❄️ Descubrí sus beneficios
</div>

<div class="contenido-producto">

    <ul class="beneficios-congelados">

<?php

// Divide los beneficios usando el símbolo |
// Ejemplo:
// beneficio1|beneficio2|beneficio3
$beneficios = explode("|", $mango["beneficios"]);

// Recorre todos los beneficios
foreach($beneficios as $beneficio){

?>

        <li>
            <span class="flecha-congelados">❄</span>

             <!-- Muestra un beneficio -->
            <strong><?php echo $beneficio; ?></strong>
        </li>

<?php

}

?>

    </ul>

    <div class="precios-producto">

        <h4>💰 Precio</h4>
         <!-- Precio de 1 kg -->
        <p><strong>1 kg :</strong> $<?php echo $mango["precio1000"]; ?></p>

    </div>

    <div class="consumo-congelados">

        <h4>🥤 Ideas para disfrutar</h4>

<?php

// Divide las formas de consumo usando |
// Ejemplo:
// consumo1|consumo2|consumo3
$consumos = explode("|", $mango["consumo"]);

// Recorre todas las formas de consumo
foreach($consumos as $consumo){

?>

        <p>➼ <?php echo $consumo; ?></p>

<?php

}

?>

    </div>

</div>

</div>

   

























</div>   <!--Grilla productos cerrar-->

</section>   <!--cerrar  congeladas-->

   













































    














    






       
    <!--SECCIÓN CONTACTO-->
    <section id="contacto">

        <div class="contacto-contenido">

            <h2>Contacto</h2>

            <p>
                Estamos para ayudarte y asesorarte en la elección de nuestros productos.
                No dudes en contactarnos a través de nuestro Whatsapp o redes sociales.
            </p>

            <div class="info-contacto">

                <a href="https://wa.me/5493757307919" target="_blank" class="contacto-card whatsapp">
                    <h3>📲Whatsapp</h3>

                    <p>
                        Consultanos directamente
                    </p>
                    <span class="btn-whatsapp">
                      Abrir WhatsApp →
                    </span>
                </a>

                <div class="contacto-card">
                    <h3>📸 Instagram</h3>
                    <p>@andresitosaludable</p>
                </div>

                <div class="contacto-card">
                    <h3>📍Dirección</h3>
                    <p> Andresito, Misiones Calle Neuquen<br>
                        Frente al Supermercado El Gallego de la rotonda.
                    </p>
                </div>

                <div class="contacto-card">
                    <h3>🕒 Horarios</h3>

                    <p>
                        
                        <strong>Lunes a Viernes</strong><br>
                        08:00 a 12:00hs<br>
                        15:30 a 19:30hs<br><br>

                        <strong>Sábados</strong><br>
                        08:00 a 12:00hs<br>
                        16:30 a 19:30hs<br>
                    </p>
                </div>

                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d795.3771774678577!2d-54.0423585821854!3d-25.6786156840251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses-419!2sar!4v1781819691765!5m2!1ses-419!2sar" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>




    <!--SECCIÓN PRODUCTOS-->
    <section id="productos">

        <h2> Categorías de nuestros productos</h2>

        <div class="contenedor-categorias">

            <div class="tarjeta" onclick="abrirCategoria('productos-categoria')">
                <h3>💪</h3>

                <h4>Suplementos</h4>

                <p class="ver-categoria">
                    Toca para ver →
                </p>
            </div>

            <div class="tarjeta" onclick="abrirCategoria('hierbas-categoria')">
                <h3>🌱</h3>
                <h4>Hierbas Medicinales</h4>

                <p class="ver-categoria">
                    Toca para ver →
                </p>
            </div>

            <div class="tarjeta" onclick="abrirCategoria('frutsecos-categoria')">
                <h3>🥜🥥</h3>
                <h4>Frutos Secos/Desecos.<br><br>
                    Coco y Derivados.</h4>

                <p class="ver-categoria">
                    Toca para ver →
                </p>
            </div>

            <div class="tarjeta" onclick="abrirCategoria('harinas-categoria')">
                <h3>🌾</h3>
                <h4>Harinas, Premezclas y Rebozadores.</h4>

                <p class="ver-categoria">
                    Toca para ver →
                </p>
            </div>

            <div class="tarjeta" onclick="abrirCategoria('cereales-categoria')">
                <h3>🥣</h3>
                <h4>Cereales</h4>

                <p class="ver-categoria">
                    Toca para ver →
                </p>
            </div>

            <div class="tarjeta" onclick="abrirCategoria('semillas-categoria')">
                <h3>🌱</h3>
                <h4>Semillas</h4>
            

                <p class="ver-categoria">
                    Toca para ver →
                </p>
            </div>

            <div class="tarjeta" onclick="abrirCategoria('congelados-categoria')">
                <h3>🍓</h3>
                <h4>Frutas congeladas</h4>

                <p class="ver-categoria">
                    Toca para ver →
                </p>
            </div>
        </div>
    </section>

    <script src="script.js"></script>

</body>
</html>

