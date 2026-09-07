@extends('layout')

@section('title', 'Novo Hóspede - Hotel Lobisomem')

@section('content')
    <h2>Cadastrar Novo Hóspede</h2>

    <form action="{{ route('hospedes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome">Nome Completo:</label><br>
            <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>
        </div>



        <div class="form-group">
            <label for="cpf">CPF:</label><br>
            <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}" required>
        </div>



        <div class="form-group">
            <label for="telefone">Telefone:</label><br>
            <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" required>
        </div>



        <div class="form-group">
            <label for="tipo_transformacao">Tipo de Transformação:</label><br>
            <input type="text" name="tipo_transformacao" id="tipo_transformacao" value="{{ old('tipo_transformacao', 'Humano') }}" placeholder="Ex: Lican, Alfa, Betan, Humano" required>
        </div>


        
        <button type="submit">Salvar Hóspede</button>
        <a href="{{ route('hospedes.index') }}">Cancelar</a>
    </form>
@endsection