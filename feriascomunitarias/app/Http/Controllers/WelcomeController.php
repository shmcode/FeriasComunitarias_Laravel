<?php

namespace App\Http\Controllers;

use App\Models\Feria;

class WelcomeController extends Controller
{
    public function index()
    {
        // Se obtienen las ferias próximas despues de HOY y los emprendedores 
        $proximasFerias = Feria::where('fecha_evento', '>=', now()) 
            ->with('emprendedores') 
            ->orderBy('fecha_evento', 'asc') 
            ->take(20) 
            ->get();

        return view('welcome', compact('proximasFerias'));
    }
}