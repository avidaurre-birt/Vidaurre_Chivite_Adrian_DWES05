<?php

namespace App\Http\Controllers;

use App\Models\Plantacion;
use Illuminate\Http\Request;

class PlantacionController extends Controller
{
    public function index()
    {
        $plantaciones = Plantacion::all();
        return view('plantacion_vista', compact('plantaciones'));
    }

    public function edit($id)
    {
        $plantacion = Plantacion::findOrFail($id);
        return view('plantacion_editar_vista', compact('plantacion'));
    }

    public function create()
    {
        return view('plantacion_create_vista');
    }

    public function store(Request $request)
    {
        Plantacion::create($request->all());

        return redirect()->route('plantacion.create')->with('success', 'Plantación creada correctamente.');
    }

    public function update(Request $request, $id)
    {
        $plantacion = Plantacion::findOrFail($id);
        $plantacion->update($request->all());

        return redirect()->route('plantacion_vista')->with('success', 'Plantación actualizada correctamente');
    }

    public function destroy($id)
    {
        $plantacion = Plantacion::findOrFail($id);
        $plantacion->delete();

        return redirect()->route('plantacion_vista')->with('success', 'Plantación eliminada correctamente');
    }
}
