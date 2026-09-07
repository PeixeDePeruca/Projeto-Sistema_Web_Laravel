<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use Illuminate\Http\Request;

class QuartoController extends Controller
{
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
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'nivel_blindagem' => 'required|string|max:255',
            'capacidade' => 'required|integer',
            'preco_diaria' => 'required|numeric',
        ]);

        Quarto::create($request->all());

        return redirect()->route('quartos.index');
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
    public function update(Request $request, Quarto $quarto)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'nivel_blindagem' => 'required|string|max:255',
            'capacidade' => 'required|integer',
            'preco_diaria' => 'required|numeric',
        ]);

        $quarto->update($request->all());

        return redirect()->route('quartos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quarto $quarto)
    {
        $quarto->delete();

        return redirect()->route('quartos.index');
    }
}