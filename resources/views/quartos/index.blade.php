<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Quartos - Hotel Lobisomem</title>
</head>
<body>
    <h1>Quartos Cadastrados</h1>

    <a href="{{ route('quartos.create') }}">Cadastrar Novo Quarto</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Nível de Blindagem do Quarto</th>
                <th>Capacidade</th>
                <th>Preço Diária (R$)</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($quartos as $quarto)
                <tr>
                    <td>{{ $quarto->id }}</td>
                    <td>{{ $quarto->nome }}</td>
                    <td>{{ $quarto->nivel_blindagem }}</td>
                    <td>{{ $quarto->capacidade }} pessoa(s)</td>
                    <td>R$ {{ number_format($quarto->preco_diaria, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('quartos.edit', $quarto->id) }}">Editar</a>

                        <form action="{{ route('quartos.destroy', $quarto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja remover este quarto?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Nenhum quarto cadastrado até o momento.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>