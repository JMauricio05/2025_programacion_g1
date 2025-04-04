<?php

namespace App\models\entities;

use App\models\drivers\ConexDB;

class Persona extends Model
{
    protected $id = null;
    protected $nombre = '';
    protected $email = '';
    protected $edad = null;

    public function all()
    {
        $conexDb = new ConexDB();
        $sql = "select * from personas";
        $res = $conexDb->exeSQL($sql);
        $personas = [];
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $persona = new Persona();
                $persona->set('id', $row['id']);
                $persona->set('nombre', $row['nombre']);
                $persona->set('edad', $row['edad']);
                $persona->set('email', $row['email']);
                array_push($personas, $persona);
            }
        }
        $res->close();
        return $personas;
    }
}
