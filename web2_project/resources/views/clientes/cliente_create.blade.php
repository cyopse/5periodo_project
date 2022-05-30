@extends('layouts.main')

@section('title', 'You Service')

@section('content')
<section id="form_cliente" class="d-flex">
    <div style="background-color: white;" class="container align-self-center">
        <div class="row">
            <div class="col-12 capa">
                <h1>Registre-se</h1>
                <form action="/clientestore" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Cliente">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email do Cliente">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha do Cliente">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Cliente">
                    </div>

                    <div class="form-group">
                        <label for="cpf">Cpf:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Cpf do Cliente">
                    </div>

                    <div class="form-group">
                        <label for="data_nasc">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="data_nasc" name="data_nasc" placeholder="Data de nascimento">
                    </div>
                    <input type="submit" class="btn btn-primary mt-2" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
