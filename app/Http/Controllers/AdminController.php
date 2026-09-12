<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use App\Models\Hospede;
use App\Models\Reserva;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Acesso restrito ao Administrador.');
        }

        $totalQuartos = Quarto::count();
        $totalHospedes = Hospede::count();
        $totalReservas = Reserva::count();

        return view('admin', compact('totalQuartos', 'totalHospedes', 'totalReservas'));
    }
}