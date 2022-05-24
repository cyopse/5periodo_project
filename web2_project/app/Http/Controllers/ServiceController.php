<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ServiceController extends Controller
{   

    public function index() {
        
        $clientes = Cliente::all();

        return view('home',['clientes' => $clientes]);

    }

    public function cadastro(){
        return view('services.cadastro');
    }

    public function store(Request $request){

        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->senha = $request->senha;
        $cliente->endereco = $request->endereco;
        $cliente->cpf = $request->cpf;
        $cliente->data_nasc = $request->data_nasc;

        $cliente->save();

        return redirect('/')->with('msg', 'Cliente Cadastrado!');

    }

    public function show($id) {

        $cliente = Cliente::findOrFail($id);

        return view('home', ['cliente' => $cliente]);
    }

    public function edit($id){

        $cliente = Cliente::findOrFail($id);

        return view('edit', ['cliente' => $cliente]);
    }

    public function destroy($id){

        Cliente::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'cliente deletado!');
    }

    public function update(Request $request){

        Cliente::findOrFail($request->id)->update($request->all());

        return redirect('/')->with('msg', 'cliente editado!');
    }
}
