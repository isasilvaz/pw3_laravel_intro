<?php

namespace App\Http\Controllers;
use App\Models\Oficina;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    public function index()
    {
        $oficinas = Oficina::all();

        return view('oficinas.index', compact('oficinas'));

    }
    public function store(Request $request)
    {
         $request->validate([
        'nome_oficina' => 'required|min:4|',
        'professor_responsavel' => 'required|min:4',
        'carga_horaria' => 'required|integer|min:20|max:120',
        'turno' => 'required'
        ]);
        Oficina::create([
            'nome_oficina' => $request->nome_oficina,
            'professor_responsavel' => $request -> professor_responsavel,
            'carga_horaria' => $request -> carga_horaria,
            'turno' => $request -> turno
        ]);

        return redirect('/oficinas');
    }
}