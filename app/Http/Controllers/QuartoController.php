<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use App\Http\Requests\QuartoRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class QuartoController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quartos = Quarto::all();
        return view('quartos.index', compact('quartos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quartos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuartoRequest $request)
    {
        Quarto::create($request->validated());

        return redirect()->route('quartos.index')->with('success', 'Quarto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quarto $quarto)
    {
        return view('quartos.show', compact('quarto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quarto $quarto)
    {
        return view('quartos.edit', compact('quarto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuartoRequest $request, Quarto $quarto)
    {
        $quarto->update($request->validated());

        return redirect()->route('quartos.index')->with('success', 'Quarto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quarto $quarto)
    {
        $this->authorize('delete', $quarto);

        $quarto->delete();

        return redirect()->route('quartos.index')->with('success', 'Quarto removido com sucesso!');
    }
}