@extends('layout')

@section('title', 'Editar Hóspede - Hotel Lobisomem')

@section('content')
    <h2>Editar Hóspede #{{ $hospede->id }}</h2>

    <form action="{{ route('hospedes.update', $hospede->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome Completo:</label><br>
            <input type="text" name="nome" id="nome" value="{{ old('nome', $hospede->nome) }}" required>
        </div>



        <div class="form-group">
            <label for="cpf">CPF:</label><br>
            <input type="text" name="cpf" id="cpf" value="{{ old('cpf', $hospede->cpf) }}" required>
        </div>



        <div class="form-group">
            <label for="telefone">Telefone:</label><br>
            <input type="text" name="telefone" id="telefone" value="{{ old('telefone', $hospede->telefone) }}" required>
        </div>



        <div class="form-group">
            <label for="tipo_transformacao">Tipo de Transformação:</label><br>
            <input type="text" name="tipo_transformacao" id="tipo_transformacao" value="{{ old('tipo_transformacao', $hospede->tipo_transformacao) }}" required>
        </div>




        <button type="submit">Atualizar Hóspede</button>
        <a href="{{ route('hospedes.index') }}">Cancelar</a>
    </form>
@endsection