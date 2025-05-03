<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Curso::all();
        return response()->json(
            ['data' => $rows],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $model = new Curso();
        $model->codigo = $data['cod'];
        $model->nombre = $data['nombre'];
        $model->idDocente = $data['idDocente'];
        $model->save();
        return response()->json(
            ['msg' => "Datos guardados"],
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $codigo)
    {
        $row = Curso::find($codigo);
        if (empty($row)) {
            return response()->json(['data' => 'No existe'], 404);
        }
        return response()->json(
            ['data' => $row],
            201
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $codigo)
    {
        $row = Curso::find($codigo);
        if (empty($row)) {
            return response()->json(['data' => 'No existe'], 404);
        }
        $data = $request->all();
        $row->nombre = $data['nombre'];
        $row->idDocente = $data['idDocente'];
        $row->save();
        return response()->json(
            ['msg' => "Datos guardados"],
            200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $codigo)
    {
        $row = Curso::find($codigo);
        if (empty($row)) {
            return response()->json(['data' => 'No existe'], 404);
        }
        $row->delete();
        return response()->json(
            ['msg' => "Datos eliminados"],
            200
        );
    }
}
