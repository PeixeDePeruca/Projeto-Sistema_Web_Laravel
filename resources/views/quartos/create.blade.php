@extends('layout')

@section('title', 'Novo Quarto - Hotel Lobisomem')

@section('content')
    <h2>Cadastrar Novo Quarto</h2>

    <form action="{{ route('quartos.store') }}" method="POST">
        @csrf


        <div class="form-group">
            <label for="nome">Nome / Identificação:</label><br>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>
        </div>



        <div class="form-group">
            <label for="nivel_blindagem">Nível de Blindagem do Quarto:</label><br>
            <input type="text" name="nivel_blindagem" id="nivel_blindagem" value="{{ old('nivel_blindagem') }}" placeholder="Ex: Prata Reforçada, Aço Titânio" required>
        </div>



        <div class="form-group">
            <label for="capacidade">Capacidade de Pessoas:</label><br>
            <input type="number" name="capacidade" id="capacidade" value="{{ old('capacidade') }}" required>
        </div>



        <div class="form-group">
            <label for="preco_diaria">Preço da Diária (R$):</label><br>
            <input type="number" step="0.01" name="preco_diaria" id="preco_diaria" value="{{ old('preco_diaria') }}" required>
        </div>



        <button type="submit">Salvar Quarto</button>
        <a href="{{ route('quartos.index') }}">Cancelar</a>
    </form>
@endsection