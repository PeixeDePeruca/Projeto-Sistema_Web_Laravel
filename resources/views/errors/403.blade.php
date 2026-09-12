@extends('layout')

@section('title', 'Acesso Negado - Hotel Lobisomem')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; min-height: 60vh; padding: 20px;">
        <div style="background: rgba(255, 255, 255, 0.92); backdrop-filter: blur(10px); padding: 40px; border-radius: 16px; text-align: center; max-width: 420px; width: 100%; box-shadow: 0 10px 25px rgba(0,0,0,0.4); border: 1px solid rgba(255, 255, 255, 0.4);">
            
            <h1 style="font-size: 48px; font-weight: 800; color: #dc2626; margin-bottom: 8px;">403</h1>

            <h2 style="font-size: 20px; font-weight: 700; color: #1e293b; margin-bottom: 12px;">
                Acesso Não Autorizado
            </h2>

            <p style="font-size: 14px; color: #475569; line-height: 1.5; margin-bottom: 24px;">
                Você não possui permissão para acessar esta área da alcateia.
            </p>

            <a href="{{ url('/dashboard') }}"
               class="btn-hover"
               style="display: inline-block; background: #2c3e50; color: #ffffff; padding: 10px 22px; border-radius: 8px; font-size: 14px; font-weight: 600; text-decoration: none; box-shadow: 0 4px 6px rgba(0,0,0,0.15); transition: all 0.2s;">
                ← Voltar ao Dashboard
            </a>

        </div>
    </div>
@endsection