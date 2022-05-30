@extends('layouts.main')

@section('title', 'You Service')

@section('content')
    <section id="crud_cliente" class="d-flex">
        <div style="background-color: white;" class="container align-self-center">
            <div class="row">
                <div class="col-12 capa">
                    <h1>Demostração CRUD cliente</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">nome</th>
                                <th scope="col">email</th>
                                <th scope="col">senha</th>
                                <th scope="col">endereço</th>
                                <th scope="col">cpf</th>
                                <th scope="col">data de nascimento</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <th scope="row">{{$cliente->id}}</th>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->senha}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>{{$cliente->cpf}}</td>
                                <td>{{$cliente->data_nasc}}</td>
                                <td>
                                    <a href="/cliente_edit/{{$cliente->id}}">
                                        <button class="btn btn-primary">Editar</button>
                                    </a>

                                    <form action="/clientedelete/{{$cliente->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger delete-btn">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>    
    </section>

    <section id="crud_cliente" class="d-flex">
        <div style="background-color: white;" class="container align-self-center">
            <div class="row">
                <div class="col-12 capa">
                    <h1>Demostração CRUD cliente</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">nome</th>
                                <th scope="col">email</th>
                                <th scope="col">senha</th>
                                <th scope="col">endereço</th>
                                <th scope="col">cpf</th>
                                <th scope="col">data de nascimento</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <th scope="row">{{$cliente->id}}</th>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->senha}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>{{$cliente->cpf}}</td>
                                <td>{{$cliente->data_nasc}}</td>
                                <td>
                                    <a href="/cliente_edit/{{$cliente->id}}">
                                        <button class="btn btn-primary">Editar</button>
                                    </a>

                                    <form action="/clientedelete/{{$cliente->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger delete-btn">Deletar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>    
        </div>    
    </section>
@endsection
