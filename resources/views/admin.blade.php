@extends('layout')

@section('title', 'Área Restrita - Hotel Lobisomem')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; min-height: 60vh; padding: 20px;">
        <div style="background: rgba(255, 255, 255, 0.92); backdrop-filter: blur(10px); padding: 32px 40px; border-radius: 16px; text-align: center; max-width: 500px; width: 100%; box-shadow: 0 10px 25px rgba(0,0,0,0.4); border: 1px solid rgba(255, 255, 255, 0.4);">
            
            <h2 style="font-size: 22px; font-weight: 700; color: #1e293b; margin-bottom: 8px;">
                Área Restrita
            </h2>

            <p style="font-size: 14px; color: #475569; line-height: 1.5; margin-bottom: 20px;">
                Bem-vindo, Administrador! Só quem manda na alcateia entra aqui.
            </p>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-bottom: 24px;">
                <div style="background: #ffffff; padding: 12px; border-radius: 8px; border: 1px solid #cbd5e1;">
                    <span style="font-size: 20px; font-weight: bold; color: #1e293b; display: block;">{{ $totalQuartos }}</span>
                    <span style="font-size: 12px; color: #64748b;">Quartos</span>
                </div>
                <div style="background: #ffffff; padding: 12px; border-radius: 8px; border: 1px solid #cbd5e1;">
                    <span style="font-size: 20px; font-weight: bold; color: #1e293b; display: block;">{{ $totalHospedes }}</span>
                    <span style="font-size: 12px; color: #64748b;">Hóspedes</span>
                </div>
                <div style="background: #ffffff; padding: 12px; border-radius: 8px; border: 1px solid #cbd5e1;">
                    <span style="font-size: 20px; font-weight: bold; color: #1e293b; display: block;">{{ $totalReservas }}</span>
                    <span style="font-size: 12px; color: #64748b;">Reservas</span>
                </div>
            </div>

            <a href="{{ url('/quartos') }}"
               style="display: inline-block; background: #2c3e50; color: #ffffff; padding: 10px 20px; border-radius: 8px; font-size: 14px; font-weight: 600; text-decoration: none; box-shadow: 0 4px 6px rgba(0,0,0,0.15);">
                ← Voltar ao Painel
            </a>

        </div>
    </div>
@endsection