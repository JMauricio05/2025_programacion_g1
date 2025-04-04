<?php
namespace App\models\drivers;

use mysqli;

class ConexDB {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dataBase = 'examen_pr2';

    private $conex = null;

    public function __construct(){
        $this->conex = new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->dataBase
        );
    }

    public function close(){
        $this->conex->close();
    }

    public function exeSQL($sql){
        return $this->conex->query($sql);
    }


}



