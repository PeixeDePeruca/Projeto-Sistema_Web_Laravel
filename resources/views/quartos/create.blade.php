<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Quarto - Hotel Lobisomem</title>
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
    <h1>Cadastrar Novo Quarto</h1>

    <form action="{{ route('quartos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome">Nome / Identificação:</label><br>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div class="form-group">
            <label for="nivel_blindagem">Nível de Blindagem do Quarto:</label><br>
            <input type="text" name="nivel_blindagem" id="nivel_blindagem" placeholder="Ex: Prata Reforçada, Aço Titânio" required>
        </div>

        <div class="form-group">
            <label for="capacidade">Capacidade (Pessoas):</label><br>
            <input type="number" name="capacidade" id="capacidade" min="1" required>
        </div>

        <div class="form-group">
            <label for="preco_diaria">Preço da Diária (R$):</label><br>
            <input type="number" step="0.01" name="preco_diaria" id="preco_diaria" required>
        </div>

        <button type="submit">Salvar Quarto</button>
        <a href="{{ route('quartos.index') }}">Cancelar</a>
    </form>
</body>
</html>