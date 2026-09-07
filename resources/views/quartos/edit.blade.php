@extends('layout')

@section('title', 'Editar Quarto - Hotel Lobisomem')

@section('content')
    <h2>Editar Quarto #{{ $quarto->id }}</h2>

    <form action="{{ route('quartos.update', $quarto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome / Identificação:</label><br>
            <input type="text" name="nome" id="nome" value="{{ old('nome', $quarto->nome) }}" required>
        </div>



        <div class="form-group">
            <label for="nivel_blindagem">Nível de Blindagem do Quarto:</label><br>
            <input type="text" name="nivel_blindagem" id="nivel_blindagem" value="{{ old('nivel_blindagem', $quarto->nivel_blindagem) }}" required>
        </div>



        <div class="form-group">
            <label for="capacidade">Capacidade de Pessoas:</label><br>
            <input type="number" name="capacidade" id="capacidade" value="{{ old('capacidade', $quarto->capacidade) }}" required>
        </div>



        <div class="form-group">
            <label for="preco_diaria">Preço da Diária (R$):</label><br>
            <input type="number" step="0.01" name="preco_diaria" id="preco_diaria" value="{{ old('preco_diaria', $quarto->preco_diaria) }}" required>
        </div>



        <button type="submit">Atualizar Quarto</button>
        <a href="{{ route('quartos.index') }}">Cancelar</a>
    </form>
@endsection