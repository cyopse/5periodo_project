@extends('layouts.main')

@section('title', 'Editando Prestador')
@section('content')
<div id="prestador-edit-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $prestador->nome }}</h1>
    <form action="/prestador_update/{{$prestador->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Prestador" value="{{$prestador->nome}}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email do Prestador" value="{{$prestador->email}}">
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha do Prestador" value="{{$prestador->senha}}">
        </div>

        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Prestador" value="{{$prestador->endereco}}">
        </div>

        <div class="form-group">
            <label for="cnpj">Cnpj:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cnpj do Prestador" value="{{$prestador->cnpj}}">
        </div>
        <input type="submit" class="btn btm-primary" value="Editar">
    </form>
</div>
@endsection
