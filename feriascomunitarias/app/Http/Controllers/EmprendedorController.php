<?php

namespace App\Http\Controllers;

use App\Models\Emprendedor;
use Illuminate\Http\Request;

class EmprendedorController extends Controller
{

    public function index()
    {
        $emprendedores = Emprendedor::all();
        return view('emprendedores.index', compact('emprendedores'));
    }

    public function create()
    {
        return view('emprendedores.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'rubro' => 'required|string|max:255',
        ]);

        Emprendedor::create($request->all());
        return redirect()->route('emprendedores.index')->with('success', 'Emprendedor creado exitosamente.');
    }

    public function show(Emprendedor $emprendedor)
    {
        return view('emprendedores.show', compact('emprendedor'));
    }

    public function edit(Emprendedor $emprendedor)
    {
        return view('emprendedores.edit', compact('emprendedor'));
    }

    public function update(Request $request, Emprendedor $emprendedor)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'rubro' => 'required|string|max:255',
        ]);

        $emprendedor->update($request->all());
        return redirect()->route('emprendedores.index')->with('success', 'Emprendedor actualizado exitosamente.');
    }

    public function destroy(Emprendedor $emprendedor)
    {
        $emprendedor->delete();
        return redirect()->route('emprendedores.index')->with('success', 'Emprendedor eliminado exitosamente.');
    }
}
