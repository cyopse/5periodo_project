@extends('layouts.main')

@section('title', 'Editando Cliente')
@section('content')
<div id="cliente-edit-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$cliente->nome}}</h1>
    <form action="/cliente_update/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente" value="{{$cliente->nome}}">
        </div>

        <div class="form-group">
            <label for="nome">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email do Cliente" value="{{$cliente->email}}">
        </div>

        <div class="form-group">
            <label for="nome">Senha:</label>
            <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha do Cliente" value="{{$cliente->senha}}">
        </div>

        <div class="form-group">
            <label for="nome">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Cliente" value="{{$cliente->endereco}}">
        </div>

        <div class="form-group">
            <label for="nome">Cpf:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cpf do Cliente" value="{{$cliente->cpf}}">
        </div>

        <div class="form-group">
            <label for="nome">Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_nasc" name="data_nasc" placeholder="Data de nascimento" value="{{$cliente->data_nasc}}">
        </div>
        <input type="submit" class="btn btm-primary" value="Editar">
    </form>
</div>
@endsection
