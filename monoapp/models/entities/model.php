<?php

namespace App\models\entities;

abstract class Model
{

    public function get($nameProp)
    {
        return $this->{$nameProp};
    }

    public function set($nameProp, $value)
    {
        $this->{$nameProp} = $value;
    }
}
