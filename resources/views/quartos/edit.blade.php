<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Quarto - Hotel Lobisomem</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        input[type="text"],
        input[type="number"] {
            width: 320px;
            padding: 6px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <h1>Editar Quarto #{{ $quarto->id }}</h1>

    @if ($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif



    <form action="{{ route('quartos.update', $quarto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome / Identificação:</label><br>
            <input type="text" name="nome" id="nome" value="{{ $quarto->nome }}" required>
        </div>

        <div class="form-group">
            <label for="nivel_blindagem">Nível de Blindagem do Quarto:</label><br>
            <input type="text" name="nivel_blindagem" id="nivel_blindagem" value="{{ $quarto->nivel_blindagem }}" required>
        </div>

        <div class="form-group">
            <label for="capacidade">Capacidade (Pessoas):</label><br>
            <input type="number" name="capacidade" id="capacidade" value="{{ $quarto->capacidade }}" min="1" required>
        </div>

        <div class="form-group">
            <label for="preco_diaria">Preço da Diária (R$):</label><br>
            <input type="number" step="0.01" name="preco_diaria" id="preco_diaria" value="{{ $quarto->preco_diaria }}" required>
        </div>

        <button type="submit">Atualizar Quarto</button>
        <a href="{{ route('quartos.index') }}">Cancelar</a>
    </form>
</body>
</html>