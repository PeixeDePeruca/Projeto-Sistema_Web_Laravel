<?php

namespace App\Http\Controllers;

use App\Models\Hospede;
use Illuminate\Http\Request;

class HospedeController extends Controller
{
    public function index()
    {
        $hospedes = Hospede::all();
        return view('hospedes.index', compact('hospedes'));
    }

    public function create()
    {
        return view('hospedes.create');
    }


    //informacoes do usuario/cliente
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:hospedes,cpf',
            'telefone' => 'required|string|max:20',
            'tipo_transformacao' => 'required|string|max:255',
        ]);

        Hospede::create($request->all());

        return redirect()->route('hospedes.index')->with('success', 'Hóspede cadastrado com sucesso!');
    }



    public function show(Hospede $hospede)
    {
        return view('hospedes.show', compact('hospede'));
    }

    public function edit(Hospede $hospede)
    {
        return view('hospedes.edit', compact('hospede'));
    }



    public function update(Request $request, Hospede $hospede)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:hospedes,cpf,' . $hospede->id,
            'telefone' => 'required|string|max:20',
            'tipo_transformacao' => 'required|string|max:255',
        ]);

        $hospede->update($request->all());

        return redirect()->route('hospedes.index')->with('success', 'Hóspede atualizado com sucesso!');
    }



    public function destroy(Hospede $hospede)
    {
        $hospede->delete();

        return redirect()->route('hospedes.index')->with('success', 'Hóspede removido com sucesso!');
    }
}