@extends('layouts.main')

@section('title', 'You Service')
@section('content')
<section id="form_cliente" class="d-flex">
    <div style="background-color: white;" class="container align-self-center">
        <div class="row">
            <div class="col-12 capa">
                <h1>Registre-se</h1>
                <form action="/prestadorstore" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Prestador/Empresa">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email do Prestador/Empresa">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="text" class="form-control" id="senha" name="senha" placeholder="Senha do Prestador/Empresa">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço do Prestador/Empresa">
                    </div>

                    <div class="form-group">
                        <label for="cnpj">Cnpj:</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Cnpj do Prestador/Empresa">
                    </div>

                    
                    <input type="submit" class="btn btn-primary mt-2" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>



</section>



@endsection