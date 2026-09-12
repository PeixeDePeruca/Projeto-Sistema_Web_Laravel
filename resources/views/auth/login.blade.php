@extends('layout')

@section('title', 'Entrar - Hotel Lobisomem')

@section('content')
    <h2>Entrar</h2>

    @if (session('status'))
        <div class="alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus style="width:320px; padding:6px; border:1px solid #ccc; border-radius:4px;">
        </div>

        <div class="form-group">
            <label for="password">Senha:</label><br>
            <input type="password" name="password" id="password" required style="width:320px; padding:6px; border:1px solid #ccc; border-radius:4px;">
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="remember"> Lembrar de mim
            </label>
        </div>

        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Esqueceu a senha?</a>
            <br><br>
        @endif

        <button type="submit">Entrar</button>
        <a href="{{ route('register') }}">Criar conta</a>
    </form>
@endsection