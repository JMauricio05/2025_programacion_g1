<?php
$hostDB = "localhost";
$userDB = "root";
$pwdDB = "";
$nameDB = "programacion_avanzada_db1";
//$portDB = "4203";
$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);
if ($conexDB->connect_error) {
    echo $conexDB->connect_error;
    die();
}
echo "Conexión exitosa<br>";

$sql = "select * from estudiantes";
$resultadosSQL = $conexDB->query($sql);
if ($resultadosSQL->num_rows > 0) {
    while ($row = $resultadosSQL->fetch_assoc()) {
        $id = $row['id'];
        $nombre = $row['nombre'];
        $cod = $row['codigo'];
        $email = $row['email'];
        echo "$id $cod $nombre $email <br>";
    }
} else {
    echo "<br>No hay registros<br>";
}

$sql = "insert into estudiantes (codigo, nombre, email) values ";
$sql .= "(23555, 'María', 'maria@test.com')";

$resultadoSQL = $conexDB->query($sql);
if($resultadoSQL){
    echo "<br>Datos guardados<br>";
}else{
    echo "<br>No fue posible guardar la información<br>";
}

$conexDB->close();
