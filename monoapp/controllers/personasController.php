<?php

namespace App\controllers;

use App\models\entities\Persona;

class PersonasController
{

    public function getAllPersons()
    {
        $model = new Persona();
        $persons = $model->all();
        return $persons;
    }

    public function saveNewPerson($resquest)
    {
        $model = new Persona();
        $model->set('nombre', $resquest['namePerson']);
        $model->set('email', $resquest['emailPerson']);
        $model->set('edad', $resquest['agePerson']);
        $res = $model->save();
        return $res ? 'yes' : 'not';
    }

    public function updatePerson($resquest){
        $model = new Persona();
        $model->set('id', $resquest['idPerson']);
        $model->set('nombre', $resquest['namePerson']);
        $model->set('email', $resquest['emailPerson']);
        $model->set('edad', $resquest['agePerson']);
        $res = $model->update();
        return $res ? 'yes' : 'not';
    }

    public function removePerson($id){
        $model = new Persona();
        $model->set('id', $id);
        if(empty($model->find())){
            return "empty";
        }
        $res =  $model->delete();
        return $res ? 'yes' : 'not';
    }

    public function getPersona($id){
        $model = new Persona();
        $model->set('id', $id);
        return $model->find();
    }
}
