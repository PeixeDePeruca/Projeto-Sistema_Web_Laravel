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
            background: url('/images/Moon_water.jfif') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }


        header {
            background-color: rgba(44, 62, 80, 0.85);
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 0 auto 15px auto;
            max-width: 900px;
        }


        header h1 {
            margin: 0;
            font-size: 20px;
        }


        nav {
            margin-top: 8px;
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

        /*responsavel por mudar o container branco onde fica a tabela  */
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.65);
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
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


        .alert-danger ul {
            margin: 0;
            padding-left: 20px;
        }


        .form-group {
            margin-bottom: 15px;
        }
        input[type="text"], 
        input[type="number"], 
        input[type="date"], 
        select {
            width: 320px;
            padding: 6px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #2c3e50;
            color: white;
        }
    </style>
</head>
<body>

    <header>
        <h1>
            <a href="{{ auth()->check() ? route('dashboard') : url('/') }}" style="color:#fff; text-decoration:none;">
                Hotel Lobisomem
            </a>
        </h1>
        <nav>
    <a href="{{ route('quartos.index') }}">Quartos</a>
    <a href="{{ route('hospedes.index') }}">Hóspedes</a>
    <a href="{{ route('reservas.index') }}">Reservas</a>

    {{-- Link visível apenas para Administradores --}}
    @can('admin')
        <a href="{{ url('/admin') }}">
            Painel Admin
        </a>
    @endcan

    <!-- Botão de Sair existente -->
    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button type="submit">Sair</button>
    </form>
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