@extends('layout')

@section('title', 'Editar Reserva - Hotel Lobisomem')

@section('content')
    <h2>Editar Reserva #{{ $reserva->id }}</h2>

    <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="quarto_id">Quarto:</label><br>
            <select name="quarto_id" id="quarto_id" required>
                @foreach ($quartos as $quarto)
                    <option value="{{ $quarto->id }}" {{ old('quarto_id', $reserva->quarto_id) == $quarto->id ? 'selected' : '' }}>
                        {{ $quarto->nome }} (R$ {{ number_format($quarto->preco_diaria, 2, ',', '.') }}/diária)
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="hospede_id">Hóspede:</label><br>
            <select name="hospede_id" id="hospede_id" required>
                @foreach ($hospedes as $hospede)
                    <option value="{{ $hospede->id }}" {{ old('hospede_id', $reserva->hospede_id) == $hospede->id ? 'selected' : '' }}>
                        {{ $hospede->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="data_entrada">Data de Entrada:</label><br>
            <input type="date" name="data_entrada" id="data_entrada" value="{{ old('data_entrada', $reserva->data_entrada) }}" required>
        </div>

        <div class="form-group">
            <label for="data_saida">Data de Saída:</label><br>
            <input type="date" name="data_saida" id="data_saida" value="{{ old('data_saida', $reserva->data_saida) }}" required>
        </div>

        <button type="submit">Atualizar Reserva</button>
        <a href="{{ route('reservas.index') }}">Cancelar</a>
    </form>
@endsection