@extends('layout')

@section('title', 'Dashboard - Hotel Lobisomem')

@section('content')
    <div style="text-align:center; padding: 40px 10px;">
        <div style="font-size: 55px; line-height: 1;"></div>
        <h2 style="margin-top: 10px;">Bem-vindo ao Hotel Lobisomem!</h2>
        <p style="font-size: 15px; color: #444;">
            Você está logado como <strong>{{ auth()->user()->name }}</strong>.
        </p>

        <div style="margin-top: 25px;">
            <a href="{{ route('quartos.index') }}"
               style="display:inline-block; margin: 5px; padding: 8px 18px; background:#2c3e50; color:#fff; border-radius:4px; text-decoration:none;">
                Ver Quartos
            </a>
            <a href="{{ route('hospedes.index') }}"
               style="display:inline-block; margin: 5px; padding: 8px 18px; background:#2c3e50; color:#fff; border-radius:4px; text-decoration:none;">
                Ver Hóspedes
            </a>
            <a href="{{ route('reservas.index') }}"
               style="display:inline-block; margin: 5px; padding: 8px 18px; background:#2c3e50; color:#fff; border-radius:4px; text-decoration:none;">
                Ver Reservas
            </a>
        </div>
    </div>
@endsection