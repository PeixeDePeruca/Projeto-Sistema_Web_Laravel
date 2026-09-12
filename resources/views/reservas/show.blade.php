@extends('layout')

@section('title', 'Detalhes da Reserva - Hotel Lobisomem')

@section('content')
    <h2>Detalhes da Reserva #{{ $reserva->id }}</h2>

    <p><strong>Quarto:</strong> {{ $reserva->quarto->nome }}</p>
    <p><strong>Hóspede:</strong> {{ $reserva->hospede->nome }}</p>
    <p><strong>Data de Entrada:</strong> {{ $reserva->data_entrada }}</p>
    <p><strong>Data de Saída:</strong> {{ $reserva->data_saida }}</p>
    <p><strong>Valor Total:</strong> R$ {{ number_format($reserva->valor_total, 2, ',', '.') }}</p>

    <p>
    @if(auth()->user()->role !== 'hospede')
        <a href="{{ route('reservas.edit', $reserva->id) }}">Editar</a> |
    @endif
    <a href="{{ route('reservas.index') }}">Voltar</a>
</p>
@endsection