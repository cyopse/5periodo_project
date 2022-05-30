@extends('layouts.main')

@section('title', 'You Service')

@section('content')
    <section id="crud_prestador" class="d-flex">
        <div style="background-color: white;" class="container align-self-center">
            <div class="row">
                <div class="col-12 capa">
                    <h1>Demostração CRUD Prestador</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">nome</th>
                                <th scope="col">email</th>
                                <th scope="col">senha</th>
                                <th scope="col">endereço</th>
                                <th scope="col">cnpj</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($prestadores as $prestador)
                            <tr>
                                <th scope="row">{{$prestador->id}}</th>
                                <td>{{$prestador->nome}}</td>
                                <td>{{$prestador->senha}}</td>
                                <td>{{$prestador->endereco}}</td>
                                <td>{{$prestador->cnpj}}</td>
                                <td>
                                    <a href="/prestador_edit/{{$prestador->id}}">
                                        <button class="btn btn-primary">Editar</button>
                                    </a>

                                    <form action="/prestadordelete/{{$prestador->id}}" method="POST">
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

    <section id="crud_prestador" class="d-flex">
        <div style="background-color: white;" class="container align-self-center">
            <div class="row">
                <div class="col-12 capa">
                    <h1>Demostração CRUD Prestador</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">nome</th>
                                <th scope="col">email</th>
                                <th scope="col">senha</th>
                                <th scope="col">endereço</th>
                                <th scope="col">cnpj</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($prestadores as $prestador)
                            <tr>
                                <th scope="row">{{$prestador->id}}</th>
                                <td>{{$prestador->nome}}</td>
                                <td>{{$prestador->senha}}</td>
                                <td>{{$prestador->endereco}}</td>
                                <td>{{$prestador->cnpj}}</td>
                                <td>
                                    <a href="/prestador_edit/{{$prestador->id}}">
                                        <button class="btn btn-primary">Editar</button>
                                    </a>

                                    <form action="/prestadordelete{{$prestador->id}}" method="POST">
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
