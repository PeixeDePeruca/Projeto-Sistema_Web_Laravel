@extends('layout')

@section('title', 'Lista de Hóspedes - Hotel Lobisomem')

@section('content')
    <h2>Hóspedes Cadastrados</h2>

    <a href="{{ route('hospedes.create') }}">Cadastrar Novo Hóspede</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Tipo de Transformação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($hospedes as $hospede)
                <tr>
                    <td>{{ $hospede->id }}</td>
                    <td>{{ $hospede->nome }}</td>
                    <td>{{ $hospede->cpf }}</td>
                    <td>{{ $hospede->telefone }}</td>
                    <td>{{ $hospede->tipo_transformacao }}</td>
                    <td>


                        <a href="{{ route('hospedes.edit', $hospede->id) }}">Editar</a> |
                        <form action="{{ route('hospedes.destroy', $hospede->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza que deseja remover este hóspede?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Nenhum hóspede cadastrado. </td>
                </tr>
            @endforelse


        </tbody>
    </table>
@endsection