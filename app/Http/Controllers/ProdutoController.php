<?php

namespace SistemaControleBar\Http\Controllers;

use Illuminate\Http\Request;
use SistemaControleBar\Http\Requests;
use SistemaControleBar\Produto;
use Illuminate\Support\Facades\Redirect;
use SistemaControleBar\Http\Requests\ProdutoFormRequest;
use DB;

class ProdutoController extends Controller
{
    public function __construct()
    {


    }
    public function index(Request $request)
    {
        if ($request)
       {
           $query=trim($request->get('searchText'));
           DB::table('produtos')->where('nome','LIKE','%'.$query.'%')
           ->orderBy('tipo_produto');
          $produtos = Produto::query()->orderBy('id_produtos','asc')->get();

         return view('cadastro.produto.index', ["produtos"=>$produtos,"searchText"=>$query]);


       }

    }

    public function create()
    {

        return view("cadastro.produto.create");


    }
    public function store(ProdutoFormRequest $request)
    {


        $produto=new Produto;
        $produto->id_produtos=$request->get('id_produtos');
        $produto->tipo_produto=$request->get('tipo_produto');
        $produto->nome=$request->get('nome');
        $produto->preco=$request->get('preco');
        $produto->quantidade_estoque=$request->get('quantidade_estoque');
        $produto->save();
        return Redirect::to('cadastro/produto');

    }
    public function show($id)
    {
        return view("cadastro.produto.show",["produto"=>Produto::findOrFail($id)]);

    }
    public function edit($id)
    {
        return view("cadastro.produto.edit",["produto"=>Produto::findOrFail($id)]);

    }
    public function update(ProdutoFormRequest $request,$id)
    {

        $produto=Produto::findOrFail($id);
        $produto->tipo_produto=$request->get('tipo_produto');
        $produto->nome=$request->get('nome');
        $produto->preco=$request->get('preco');
        $produto->quantidade_estoque=$request->get('quantidade_estoque');
        $produto->update();
        return Redirect::to('cadastro/produto');


    }
    public function destroy($id)
    {


        $produto=Produto::findOrFail($id);
        $produto->update();
        return Redirect::to('cadastro/produto');

//       $produto=Produto::find($id);
//       $produto-> produto ->each(function (Produto $produto){
//           $produto->delete();
//       });
//       $produto->delete();
//       $produto->session()
//           ->flash(
//           'mensagem',
//        "produto removido com sucesso"
//           );
//       $produto->update();
//
//       return Redirect::to('cadastro/produto');


    }


}
