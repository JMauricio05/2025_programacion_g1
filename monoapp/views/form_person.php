<?php
$id = empty($_GET['id']) ? null : $_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear persona</title>
</head>

<body>
    <h1>
        <?php
        if (empty($id)) {
            echo 'Registrar persona';
        } else {
            echo 'Modificar persona';
        }
        ?>
    </h1>
    <br>
    <form action="actions/savePerson.php" method="post">
        <?php
        if (!empty($id)) {
            echo '<input type="hidden" name="idPerson" value="' . $id . '">';
        }
        ?>
        <div>
            <label for="namePerson">Nombre</label>
            <input type="text" id="namePerson" name="namePerson" required>
        </div>
        <div>
            <label for="emailPerson">Email</label>
            <input type="email" id="emailPerson" name="emailPerson" required>
        </div>
        <div>
            <label for="agePerson">Edad</label>
            <input type="number" id="agePerson" name="agePerson" min="1" required>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
    <a href="personas.php">Volver</a>
</body>

</html>