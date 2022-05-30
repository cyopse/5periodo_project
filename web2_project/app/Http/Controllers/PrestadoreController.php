<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestadore;

class PrestadoreController extends Controller
{
    
    /* pagina do prestador */
    public function prestador() {
        $prestadores = Prestadore::all();
        return view('prestador',['prestadores' => $prestadores]);
    }

    /* pagina do Create do prestador */
    public function prestador_create() {
        return view('prestadores.prestador_create');
    }

    /* insere os dados no banco */
    public function prestador_store(Request $request) {
        $prestador = new Prestadore;
        $prestador->nome = $request->nome;
        $prestador->email = $request->email;
        $prestador->senha = $request->senha;
        $prestador->endereco = $request->endereco;
        $prestador->cnpj = $request->cnpj;
        $prestador->save();
        return redirect('/prestador')->with('msg', 'Prestador Cadastrado!');
    }

    /* Read do prestador */
    public function prestador_show($id) {
        $prestador = Prestadore::findOrFail($id);
        return view('prestador', ['prestador' => $prestador]);
    }

    /* pagina do Update do prestador */
    public function prestador_edit($id) {
        $prestador = Prestadore::findOrFail($id);
        return view('prestadores.prestador_edit', ['prestador' => $prestador]);
    }

    /* Update do prestador */
    public function prestador_update(Request $request) {
        Prestadore::findOrFail($request->id)->update($request->all());
        return redirect('/prestador')->with('msg', 'Prestador editado!');
    }

    /* Delete do prestador */
    public function prestador_destroy($id) {
        Prestadore::findOrFail($id)->delete();
        return redirect('/prestador')->with('msg', 'Prestador Deletado!');
    }
}
