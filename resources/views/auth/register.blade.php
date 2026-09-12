@extends('layout')

@section('title', 'Cadastrar - Hotel Lobisomem')

@section('content')
    <h2>Criar Conta</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nome:</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required style="width:320px; padding:6px; border:1px solid #ccc; border-radius:4px;">
        </div>

        <div class="form-group">
            <label for="password">Senha:</label><br>
            <input type="password" name="password" id="password" required style="width:320px; padding:6px; border:1px solid #ccc; border-radius:4px;">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Senha:</label><br>
            <input type="password" name="password_confirmation" id="password_confirmation" required style="width:320px; padding:6px; border:1px solid #ccc; border-radius:4px;">
        </div>

        <button type="submit">Cadastrar</button>
        <a href="{{ route('login') }}">Já tenho conta</a>
    </form>
@endsection