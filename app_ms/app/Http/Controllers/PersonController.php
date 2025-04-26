<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Person::all();
        return response()
            ->json(["data" => $rows], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newPerson = new Person();
        $newPerson->nombre = $data['name'];
        $newPerson->email = $data['email'];
        $newPerson->edad = $data['age'];
        $newPerson->save();
        return response()->json(["data" => "Resgitro creado"], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $person = Person::find($id);
        if (empty($person)) {
            return response()->json(['data' => 'No existe'], 404);
        }
        $person->nombre = $data['name'];
        $person->email = $data['email'];
        $person->edad = $data['age'];
        $person->save();
        return response()->json(["data" => "Resgitro modificao"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person = Person::find($id);
        if (empty($person)) {
            return response()->json(['data' => 'No existe'], 404);
        }
        $person->delete();
        return response()->json(["data" => "Resgitro eliminado"], 200);
    }
}
