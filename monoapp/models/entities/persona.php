<?php

namespace App\models\entities;

use App\models\drivers\ConexDB;

class Persona extends Model
{
    protected $id = null;
    protected $nombre = '';
    protected $email = '';
    protected $edad = null;

    public function mayorEdad()
    {
        if ($this->edad >= 18) {
            return 'Si';
        } else {
            return 'No';
        }
    }

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
        $conexDb->close();
        return $personas;
    }

    public function save()
    {
        $conexDb = new ConexDB();
        $sql = "insert into personas (nombre, email, edad) values ";
        $sql .= "('" . $this->nombre . "','" . $this->email . "'," . $this->edad . ")";
        $res = $conexDb->exeSQL($sql);
        $conexDb->close();
        return $res;
    }

    public function update()
    {
        $conexDb = new ConexDB();
        $sql = "update personas set ";
        $sql .= "nombre='" . $this->nombre . "',";
        $sql .= "email='" . $this->email . "',";
        $sql .= "edad=" . $this->edad . " ";
        $sql .= " where id=" . $this->id;
        $res = $conexDb->exeSQL($sql);
        $conexDb->close();
        return $res;
    }

    public function delete() {}
}
