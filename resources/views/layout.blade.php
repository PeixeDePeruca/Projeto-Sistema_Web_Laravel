<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Hotel Lobisomem')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 15px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            color: #ecf0f1;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="text"], input[type="number"] {
            width: 320px;
            padding: 6px;
            box-sizing: border-border-box;
        }
    </style>
</head>
<body>

    <header>
        <h1>Hotel Lobisomem 🌕</h1>
        <nav>
            <a href="{{ route('quartos.index') }}">Quartos</a>
            <a href="{{ route('hospedes.index') }}">Hóspedes</a>
            <a href="{{ route('reservas.index') }}">Reservas</a>
        </nav>
    </header>

    <div class="container">
        {{-- Mensagem Flash de Sucesso --}}
        @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Erros de Validação --}}
        @if ($errors->any())
            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Conteúdo dinâmico das telas --}}
        @yield('content')
    </div>

</body>
</html>