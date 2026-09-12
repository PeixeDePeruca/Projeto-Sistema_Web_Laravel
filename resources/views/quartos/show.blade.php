@extends('layout')

@section('title', 'Detalhes do Quarto - Hotel Lobisomem')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; min-height: 60vh; padding: 20px;">
        <div style="background: rgba(255, 255, 255, 0.92); backdrop-filter: blur(10px); padding: 32px 40px; border-radius: 16px; max-width: 450px; width: 100%; box-shadow: 0 10px 25px rgba(0,0,0,0.4); border: 1px solid rgba(255, 255, 255, 0.4);">
            
            <h2 style="font-size: 22px; font-weight: 700; color: #1e293b; margin-bottom: 16px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px; text-align: center;">
                {{ $quarto->nome }}
            </h2>

            <div style="margin-bottom: 20px; font-size: 15px; color: #334155; line-height: 1.8;">
                <p><strong>Nível de Blindagem:</strong> {{ $quarto->nivel_blindagem }}</p>
                <p><strong>Capacidade:</strong> {{ $quarto->capacidade }} pessoa(s)</p>
                <p><strong>Preço da Diária:</strong> R$ {{ number_format($quarto->preco_diaria, 2, ',', '.') }}</p>
            </div>

            <div style="display: flex; gap: 10px; justify-content: center;">
                <a href="{{ route('quartos.index') }}" 
                   style="background: #64748b; color: white; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 14px; font-weight: 600;">
                    ← Voltar
                </a>

                @if(auth()->user()->role === 'hospede')
                    <a href="{{ route('reservas.create', ['quarto_id' => $quarto->id]) }}" 
                       style="background: #2563eb; color: white; padding: 8px 16px; border-radius: 6px; text-decoration: none; font-size: 14px; font-weight: 600;">
                        Reservar Este Quarto
                    </a>
                @endif
            </div>

        </div>
    </div>
@endsection