<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materiales;
use Illuminate\Support\Facades\DB;

class MaterialesController extends Controller
{

    public function index()
    {
        $materiales = Materiales::all();
        return $materiales;
    }

    public function store(Request $request)
    {
        $material = new Materiales();
        $material->estado = $request->estado;
        $material->nombre = $request->nombre;
        $material->categoria_id = $request->categoria_id;
        $material->descripcion = $request->descripcion;
        $material->stock_minimo = $request->stock_minimo;
        $material->save();

    }

    public function show($id)
    {
        $material = Materiales::find($id);
        return $material;
    }

    public function update(Request $request, $id)
    {
        $material = Materiales::findOrFail($request->id);
        $material->estado = $request->estado;
        $material->nombre = $request->nombre;
        $material->categoria_id = $request->categoria_id;
        $material->descripcion = $request->descripcion;
        $material->stock_minimo = $request->stock_minimo;
        $material->save();
        return $material;

    }

    public function destroy($id)
    {
        $material = Materiales:: destroy($id);
        return $material;
    }
}
