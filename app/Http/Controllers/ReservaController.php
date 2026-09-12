<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Quarto;
use App\Models\Hospede;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with(['quarto', 'hospede'])->get();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $quartos = Quarto::all();
        $hospedes = Hospede::all();
        return view('reservas.create', compact('quartos', 'hospedes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'quarto_id' => 'required|exists:quartos,id',
            'hospede_id' => 'required|exists:hospedes,id',
            'data_entrada' => 'required|date',
            'data_saida' => 'required|date|after:data_entrada',
        ]);

        $quarto = Quarto::findOrFail($request->quarto_id);

        $entrada = Carbon::parse($request->data_entrada);
        $saida = Carbon::parse($request->data_saida);
        $dias = $entrada->diffInDays($saida);
        if ($dias == 0) {
            $dias = 1;
        }

        $valor_total = $dias * $quarto->preco_diaria;

        Reserva::create([
            'quarto_id' => $request->quarto_id,
            'hospede_id' => $request->hospede_id,
            'data_entrada' => $request->data_entrada,
            'data_saida' => $request->data_saida,
            'valor_total' => $valor_total,
        ]);

        return redirect()->route('reservas.index')->with('success', 'Reserva realizada com sucesso!');
    }

    public function show(Reserva $reserva)
    {
        return view('reservas.show', compact('reserva'));
    }

    public function edit(Reserva $reserva)
    {
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

        $quartos = Quarto::all();
        $hospedes = Hospede::all();
        return view('reservas.edit', compact('reserva', 'quartos', 'hospedes'));
    }

    public function update(Request $request, Reserva $reserva)
    {
        // Bloqueia se for hóspede
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

        $request->validate([
            'quarto_id' => 'required|exists:quartos,id',
            'hospede_id' => 'required|exists:hospedes,id',
            'data_entrada' => 'required|date',
            'data_saida' => 'required|date|after:data_entrada',
        ]);

        $quarto = Quarto::findOrFail($request->quarto_id);

        $entrada = Carbon::parse($request->data_entrada);
        $saida = Carbon::parse($request->data_saida);
        $dias = $entrada->diffInDays($saida);
        if ($dias == 0) {
            $dias = 1;
        }

        $valor_total = $dias * $quarto->preco_diaria;

        $reserva->update([
            'quarto_id' => $request->quarto_id,
            'hospede_id' => $request->hospede_id,
            'data_entrada' => $request->data_entrada,
            'data_saida' => $request->data_saida,
            'valor_total' => $valor_total,
        ]);

        return redirect()->route('reservas.index')->with('success', 'Reserva atualizada com sucesso!');
    }

    public function destroy(Reserva $reserva)
    {
        if (auth()->user()->role === 'hospede') {
            abort(403, 'Ação não autorizada para hóspedes.');
        }

        $reserva->delete();

        return redirect()->route('reservas.index')->with('success', 'Reserva cancelada com sucesso!');
    }
}