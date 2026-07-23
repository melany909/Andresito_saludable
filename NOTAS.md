<!-- ==================== REBOZADORES ==================== -->

<h3 class="subtitulo-productos">
    Rebozadores
</h3>

<div class="producto-card" onclick="alternarProducto(this)">

<h3>Rebozador de arroz</h3>

<img src="img/harinas/rebozador arroz.webp" alt="Rebozador de arroz" loading="lazy">

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

<p class="abrir-info">
    ▼ Tocá para más información
</p>

<div class="contenido-producto">

<!-- Beneficios -->
<ul>

<?php

$beneficios = explode("|", $rebozador_arroz["beneficios"]);

foreach($beneficios as $beneficio){

?>

<li>
    <strong>➥ <?php echo $beneficio; ?></strong>
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