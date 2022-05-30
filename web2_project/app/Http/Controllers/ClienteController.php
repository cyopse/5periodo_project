<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller {

    /* pagina do cliente */
    public function cliente() {
        $clientes = Cliente::all();
        return view('cliente',['clientes' => $clientes]);
    }

    /* pagina do Create cliente */
    public function cliente_create() {
        return view('clientes.cliente_create');
    }

    /* Insere os dados no banco */
    public function cliente_store(Request $request){
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->senha = $request->senha;
        $cliente->endereco = $request->endereco;
        $cliente->cpf = $request->cpf;
        $cliente->data_nasc = $request->data_nasc;
        $cliente->save();
        return redirect('/cliente')->with('msg', 'Cliente Cadastrado!');
    }

    /* Read do cliente */
    public function cliente_show($id) {
        $cliente = Cliente::findOrFail($id);
        return view('cliente', ['cliente' => $cliente]);
    }

    /* pagina do Update do cliente */
    public function cliente_edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.cliente_edit', ['cliente' => $cliente]);
    }

    /* Update do cliente */
    public function cliente_update(Request $request){
        Cliente::findOrFail($request->id)->update($request->all());
        return redirect('/cliente')->with('msg', 'cliente editado!');
    }

    /* Delete do cliente */
    public function cliente_destroy($id){
        Cliente::findOrFail($id)->delete();
        return redirect('/cliente')->with('msg', 'cliente deletado!');
    }
}
