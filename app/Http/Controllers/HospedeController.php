<?php

namespace App\Http\Controllers;

use App\Models\Hospede;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HospedeController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $hospedes = Hospede::all();
        return view('hospedes.index', compact('hospedes'));
    }

    public function create()
    {
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

        return view('hospedes.create');
    }

    public function store(Request $request)
    {
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

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
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

        return view('hospedes.edit', compact('hospede'));
    }

    public function update(Request $request, Hospede $hospede)
    {
        $this->authorize('update', $hospede);

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
        $this->authorize('delete', $hospede);

        $hospede->delete();

        return redirect()->route('hospedes.index')->with('success', 'Hóspede removido com sucesso!');
    }
}