<?php
include '../models/drivers/conexDB.php';
include '../models/entities/model.php';
include '../models/entities/persona.php';
include '../controllers/personasController.php';

use App\controllers\PersonasController;

$controller = new PersonasController();
$persons = $controller->getAllPersons();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>

<body>
    <h1>Personas</h1>
    <a href="form_person.php">Crear</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Mayor de edad</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($persons as $person) {
                echo '<tr>';
                echo '  <td>' . $person->get('nombre') . '</td>';
                echo '  <td>' . $person->get('email') . '</td>';
                echo '  <td>' . $person->get('edad') . '</td>';
                echo '  <td>' . $person->mayorEdad() . '</td>';
                echo '  <td>';
                echo '      <a href="form_person.php?id=' . $person->get('id') . '">Modificar</a>';
                echo '      <a href="actions/deletePerson.php?id=' . $person->get('id') . '">Eliminar</a>';
                echo '  </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>