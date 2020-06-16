<?php

namespace SistemaControleBar\Http\Controllers;

use Illuminate\Http\Request;
use SistemaControleBar\Http\Requests;
use SistemaControleBar\Fornecedor;
use Illuminate\Support\Facades\Redirect;
use SistemaControleBar\Http\Requests\FornecedorFormRequest;
use DB;

class FornecedorController extends Controller
{
    public function __construct()
    {


    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $fornecedores=DB::table('fornecedores')->where('nome','LIKE','%'.$query.'%')
                ->orderBy('id_fornecedor');
            $fornecedores = Fornecedor::query()->orderBy('nome')->get();
            return view('cadastro.fornecedor.index',compact('fornecedores'));
            //["produtos"=>$produtos,"searchText"=>$query]);  subistituição do codigo por compact que identifica a variavel com o nome q foi declarado


        }

    }
    public function create()
    {

        return view("cadastro.fornecedor.create");

    }
    public function store(FornecedorFormRequest $request)
    {


        $fornecedor=new Fornecedor;
        $fornecedor->id_fornecedor=$request->get('id_fornecedor');
        $fornecedor->nome=$request->get('nome');
        $fornecedor->sobrenome=$request->get('sobrenome');
        $fornecedor->endereco=$request->get('endereco');
        $fornecedor->bairro=$request->get('bairro');
        $fornecedor->cidade=$request->get('cidade');
        $fornecedor->telefone=$request->get('telefone');
        $fornecedor->celular=$request->get('celular');
        $fornecedor->save();
        return Redirect::to('cadastro/fornecedor');

    }
    public function show($id)
    {
        return view("cadastro.fornecedor.show",["fornecedor"=>Fornecedor::findOrFail($id)]);

    }
    public function edit($id)
    {
        return view("cadastro.fornecedor.edit",["fornecedor"=>Fornecedor::findOrFail($id)]);

    }
    public function update(FornecedorFormRequest $request,$id)
    {
        $fornecedor=Fornecedor::findOrFail($id);
        $fornecedor->nome=$request->get('nome');
        $fornecedor->sobrenome=$request->get('sobrenome');
        $fornecedor->endereco=$request->get('endereco');
        $fornecedor->bairro=$request->get('bairro');
        $fornecedor->cidade=$request->get('cidade');
        $fornecedor->telefone=$request->get('telefone');
        $fornecedor->celular=$request->get('celular');
        $fornecedor->update();
        return Redirect::to('cadastro/fornecedor');


    }
    public function destroy($id)
    {
        $fornecedor=Fornecedor::findOrFail($id);
        $fornecedor->update();
        return Redirect::to('cadastro/fornecedor');

    }


}
