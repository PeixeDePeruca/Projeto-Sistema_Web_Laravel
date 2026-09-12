<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use App\Http\Requests\QuartoRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class QuartoController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $quartos = Quarto::all();
        return view('quartos.index', compact('quartos'));
    }

    public function create()
    {
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

        return view('quartos.create');
    }

    public function store(QuartoRequest $request)
    {
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

        Quarto::create($request->validated());

        return redirect()->route('quartos.index')->with('success', 'Quarto cadastrado com sucesso!');
    }

    public function show(Quarto $quarto)
    {
        return view('quartos.show', compact('quarto'));
    }

    public function edit(Quarto $quarto)
    {
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

        return view('quartos.edit', compact('quarto'));
    }

    public function update(QuartoRequest $request, Quarto $quarto)
    {
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

        $quarto->update($request->validated());

        return redirect()->route('quartos.index')->with('success', 'Quarto atualizado com sucesso!');
    }

    public function destroy(Quarto $quarto)
    {
        $this->authorize('delete', $quarto);

        $quarto->delete();

        return redirect()->route('quartos.index')->with('success', 'Quarto removido com sucesso!');
    }
}