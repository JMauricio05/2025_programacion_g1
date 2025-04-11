<?php
include '../../models/drivers/conexDB.php';
include '../../models/entities/model.php';
include '../../models/entities/persona.php';
include '../../controllers/personasController.php';

use App\controllers\PersonasController;

$controller = new PersonasController();

$res = $controller->removePerson($_GET['id']);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar datos de la persona</title>
</head>

<body>
    <h1>Resultados de la operacion</h1>
    <?php
    switch ($res) {
        case 'yes':
            echo '<p>Datos borrados</p>';
            break;
        case 'not':
            echo  '<p>No se pudo borrar los datos</p>';
            break;
        default:
            echo  '<p>El registro no existe</p>';
            break;
    }
    ?>
    <br>
    <a href="../personas.php">Volver</a>
</body>

</html>