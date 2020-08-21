<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request){   //listrar produtos



        $cliente = \App\Cliente::query()
        ->orderBy('nome')
        ->get();


         $mensagem = $request->session()->get('mensagem');  // msg de produto criado

         $titulo = "Clientes";

         return view('clientes.index', compact('cliente', 'mensagem', 'titulo'));
}

public function create()
{
    $titulo = "Cliente";
    return view('clientes.create', compact('titulo'));
}

public function store(Request $request)
{

    $cliente = \App\Cliente::create($request->all());


    $request->session()
        ->flash(
    'mensagem',
    "Cliente   $cliente->nome  criada com sucesso."
    );

  return redirect()->route( 'listar_clientes'); //nome da rota

}


public function edit($id)
{
    // recupera produto do BD
    $cliente = \App\Cliente::findOrFail($id);

    $titulo = "Editar Clientes";

   if(empty($cliente)) {

        return "Esse produto não existe";
    }
  //  $pessoas = \App\Pessoa::find($id);
    //  dd($pessoas->nome.$pessoas->cep);
   //   return view ('clientes.update', ['pessoas' => $pessoas]);

    return view('clientes.update', compact('cliente', 'titulo'))->with('p', $cliente);;

}

public function update(Request $request, $id)
{
    $cliente = \App\Cliente::all();

    $validaDados = $request->validate([
        'nome' => 'required',
        'cpf' => 'required',
        'valorgasto' => 'required',


        ]);

    $request->session()
        ->flash(
            'mensagem',
            "Modificações  salvas com sucesso"
        );

        \App\Cliente::whereId($id)->update($validaDados);
        return redirect()->route( 'listar_clientes');


}

public function destroy(Request $request)
    {

     /*   $vendas = Venda::join('produtos', 'vendas.produto_id', '=', 'produtos.id')
        ->select('vendas.produto_id')
        ->get();*/


      /*  foreach($vendas as $item) {
            if($item->produto_id == $request->id){
                $request->session()
                ->flash(
                'mensagem',
                "Este produto está sendo usado em Vendas, impossível remove-lo"
                );
                return redirect()->route( 'listar_produtos');

            }
        }*/

            \App\Cliente::destroy($request->id);
            $request->session()
                ->flash(
                    'mensagem',
                    "Produto removido com sucesso"
                );
            return redirect()->route( 'listar_clientes');
    }


}

