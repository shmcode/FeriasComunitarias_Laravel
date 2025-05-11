<?php

namespace App\Http\Controllers;

use App\Models\Feria;
use App\Models\Emprendedor;
use Illuminate\Http\Request;

class FeriaController extends Controller
{
    /**
     * Muestra una lista de todas las ferias.
     */
    public function index()
    {
        $ferias = Feria::all();
        return view('ferias.index', compact('ferias'));
    }

    /**
     * Muestra el formulario para crear una nueva feria.
     */
    public function create()
    {
        $emprendedores = Emprendedor::all(); // Carga todos los emprendedores
        return view('ferias.create', compact('emprendedores'));
    }

    /**
     * Almacena una nueva feria en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_evento' => 'required|date',
            'direccion' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $feria = Feria::create($request->only(['nombre', 'fecha_evento', 'direccion', 'descripcion']));
        $feria->emprendedores()->sync($request->input('emprendedores', [])); // Sincroniza emprendedores

        return redirect()->route('ferias.index')->with('success', 'Feria creada correctamente.');
    }

    /**
     * Muestra los detalles de una feria específica.
     */
    public function show(Feria $feria)
    {
        return view('ferias.show', compact('feria'));
    }

    /**
     * Muestra el formulario para editar una feria existente.
     */
    public function edit(Feria $feria)
    {
        $emprendedores = Emprendedor::all(); // Carga todos los emprendedores
        return view('ferias.edit', compact('feria', 'emprendedores'));
    }

    /**
     * Actualiza una feria existente en la base de datos.
     */
    public function update(Request $request, Feria $feria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_evento' => 'required|date',
            'direccion' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $feria->update($request->only(['nombre', 'fecha_evento', 'direccion', 'descripcion']));
        $feria->emprendedores()->sync($request->input('emprendedores', [])); // Sincroniza emprendedores

        return redirect()->route('ferias.index')->with('success', 'Feria actualizada correctamente.');
    }

    /**
     * Elimina una feria de la base de datos.
     */
    public function destroy(Feria $feria)
    {
        $feria->delete();
        return redirect()->route('ferias.index')->with('success', 'Feria eliminada correctamente.');
    }
}