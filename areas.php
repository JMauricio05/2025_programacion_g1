<?php
include 'oop.php';
// require 'oop.php';
$figura = !empty($_POST['figura']) ? $_POST['figura'] : $_GET['figura'];
$area = '';
if ($figura == 'cuadrado') {
    $arista = $_POST['arista'];
    $cuadrado = new Cuadrado();
    $cuadrado->set('arista', $arista);
    $area = $cuadrado->toString();
} else if ($figura == 'triangulo') {
    $triangulo = new Triangulo();
    $triangulo->set('base', $_GET['base']);
    $triangulo->set('altura', $_GET['altura']);
    $area = $triangulo->toString();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Areas</title>
</head>

<body>
    <h1>Area del <?php echo $figura; ?></h1>
    <p><?php echo $area; ?></p>
    <a href="index.html">Volver</a>
</body>

</html>