@extends('layouts.main')

@section('title', 'You Service')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Registre-se</h1>
    <form action="/services" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
        </div>

        <div class="form-group">
            <label for="nome">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email do Cliente">
        </div>

        <div class="form-group">
            <label for="nome">Senha:</label>
            <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha do Cliente">
        </div>

        <div class="form-group">
            <label for="nome">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Cliente">
        </div>

        <div class="form-group">
            <label for="nome">Cpf:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cpf do Cliente">
        </div>

        <div class="form-group">
            <label for="nome">Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_nasc" name="data_nasc" placeholder="Data de nascimento">
        </div>
        <input type="submit" class="btn btm-primary" value="Cadastrar">
    </form>
</div>

@endsection
