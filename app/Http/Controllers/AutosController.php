<?php

namespace App\Http\Controllers;

use App\Models\Autos;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autos = Autos::all();

        return response()->json(["data" => $autos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $auto = new Autos;
            $auto->marca = $request->marca;
            $auto->modelo = $request->modelo;
            $auto->tipo = $request->tipo;
            $auto->save();

            return response()->json(["message" => "datos guardados"]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            // return response()->json(["message" => "error al guardar los datos"],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $auto = Autos::where("id",$id)->first();

        return response()->json(["data" => $auto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $auto = Autos::find($id);

        $auto->update($request->all()); 

        return response()->json(["message" => "Datos actualizados"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $autos = Autos::find($id);

        $autos->delete();

        return response()->json(["message" => "Datos eliminados"]);
    }
}
