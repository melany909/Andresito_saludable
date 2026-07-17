<?php

include("conexion.php");

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Productos</title>

    <style>

body{

    font-family: Arial;

    background:#f5f5f5;

}

.producto{

    width:300px;

    background:white;

    border-radius:15px;

    padding:20px;

    margin:20px;

    box-shadow:0 5px 15px rgba(0,0,0,.1);

}

.producto img{

    width:180px;
    height:180px;
    object-fit:contain;
    display:block;
    margin:auto;

}

</style>

</head>

<body>

    <h1>Productos de la Dietética</h1>

    <?php

$sql = "SELECT * FROM productos";

$resultado = $conexion->query($sql);    /*Ejecutá esta consulta*/

while($fila = $resultado->fetch_assoc()){

?>

<div class="producto">
    <?php $carpeta = strtolower($fila["categoria"]); ?>

<img src="img/<?php echo $carpeta; ?>/<?php echo $fila["imagen"]; ?>" alt="">

    <h2><?php echo $fila["nombre"]; ?></h2>

    <p><?php echo $fila["categoria"]; ?></p>

    <p>$<?php echo $fila["precio"]; ?></p>

    
    <h3>Beneficios</h3>
    <p><?php echo nl2br($fila["beneficios"]); ?></p>        

    <h3>Cómo consumir</h3>

    <p><?php echo nl2br($fila["consumo"]); ?></p>

<?php

if($fila["disponible"] == 1){

    echo "<p style='color:green; font-weight:bold;'>🟢 Disponible</p>";

}else{

    echo "<p style='color:red; font-weight:bold;'>🔴 Agotado</p>";

}

?>

</div>

<?php

}

?>

</body>

</html>