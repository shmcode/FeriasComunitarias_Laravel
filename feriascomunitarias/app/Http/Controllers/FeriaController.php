<?php

namespace App\Http\Controllers;

use App\Models\Feria;
use Illuminate\Http\Request;

class FeriaController extends Controller
{
    public function index()
    {
        $ferias = Feria::all();
        return view('ferias.index', compact('ferias'));
    }

    public function create()
    {
        return view('ferias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_evento' => 'required|date',
            'direccion' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        Feria::create($request->all());
        return redirect()->route('ferias.index')->with('success', 'Feria creada correctamente.');
    }

    public function show(Feria $feria)
    {
        return view('ferias.show', compact('feria'));
    }

    public function edit(Feria $feria)
    {
        return view('ferias.edit', compact('feria'));
    }

    public function update(Request $request, Feria $feria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_evento' => 'required|date',
            'direccion' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $feria->update($request->all());
        return redirect()->route('ferias.index')->with('success', 'Feria actualizada correctamente.');
    }

    public function destroy(Feria $feria)
    {
        $feria->delete();
        return redirect()->route('ferias.index')->with('success', 'Feria eliminada correctamente.');
    }
}

