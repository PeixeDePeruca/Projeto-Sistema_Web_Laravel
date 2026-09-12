@extends('layout')

@section('title', 'Hotel Lobisomem')

@section('content')
    <div style="text-align:center; padding: 50px 10px;">
        <div style="font-size: 70px; line-height: 1;"></div>
        <h1 style="margin-top: 10px; font-size: 28px;">Hotel Lobisomem</h1>
        <p style="font-size: 15px; color: #444; max-width: 500px; margin: 10px auto 25px;">
            Hospedagem tranquila... contanto que você respeite a lua cheia.
        </p>

        @auth
            <a href="{{ route('dashboard') }}"
               style="display:inline-block; padding: 10px 24px; background:#2c3e50; color:#fff; border-radius:4px; text-decoration:none;">
                Ir para o Dashboard
            </a>
        @else
            <a href="{{ route('login') }}"
               style="display:inline-block; margin: 5px; padding: 10px 24px; background:#2c3e50; color:#fff; border-radius:4px; text-decoration:none;">
                Entrar
            </a>
            <a href="{{ route('register') }}"
               style="display:inline-block; margin: 5px; padding: 10px 24px; background:transparent; color:#2c3e50; border: 1px solid #2c3e50; border-radius:4px; text-decoration:none;">
                Cadastrar
            </a>
        @endauth
    </div>
@endsection