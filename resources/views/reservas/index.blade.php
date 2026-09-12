@extends('layout')

@section('title', 'Reservas - Hotel Lobisomem')

@section('content')
    <h2>Reservas</h2>

    <a href="{{ route('reservas.create') }}">Nova Reserva</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Quarto</th>
                <th>Hóspede</th>
                <th>Entrada</th>
                <th>Saída</th>
                <th>Valor Total (R$)</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->quarto->nome }}</td>
                    <td>{{ $reserva->hospede->nome }}</td>
                    <td>{{ $reserva->data_entrada }}</td>
                    <td>{{ $reserva->data_saida }}</td>
                    <td>R$ {{ number_format($reserva->valor_total, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('reservas.show', $reserva->id) }}">Ver</a> |
                        <a href="{{ route('reservas.edit', $reserva->id) }}">Editar</a> |
                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza?')">Cancelar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Nenhuma reserva cadastrada.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection