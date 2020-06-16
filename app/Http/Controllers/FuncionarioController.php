<?php

namespace SistemaControleBar\Http\Controllers;

use Illuminate\Http\Request;
use SistemaControleBar\Http\Requests;
use SistemaControleBar\Funcionario;
use Illuminate\Support\Facades\Redirect;
use SistemaControleBar\Http\Requests\FuncionarioFormRequest;
use DB;
class FuncionarioController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $funcionarios=DB::table('funcionario')->where('nome','LIKE','%'.$query.'%')
                ->orderBy('id_funcionario');
            $funcionario=Funcionario::query()->orderBy('id_funcionario','asc')->get();

            return view('cadastro.funcionario.index',compact('funcionario'));


        }

    }
    public function create()
    {

        return view("cadastro.funcionario.create");

    }
    public function store(FuncionarioFormRequest $request)
    {


        $funcionario=new Funcionario;
        $funcionario->id_funcionario=$request->get('id_funcionario');
        $funcionario->nome=$request->get('nome');
        $funcionario->sobrenome=$request->get('sobrenome');
        $funcionario->cargo=$request->get('cargo');
        $funcionario->endereco=$request->get('endereco');
        $funcionario->telefone=$request->get('telefone');
        $funcionario->save();
        return Redirect::to('cadastro/funcionario');

    }
    public function show($id)
    {
        return view("cadastro.funcionario.show",["funcionario"=>Funcionario::findOrFail($id)]);

    }
    public function edit($id)
    {
        return view("cadastro.funcionario.edit",["funcionario"=>Funcionario::findOrFail($id)]);

    }
    public function update(FuncionarioFormRequest $request,$id)
    {
        $funcionario=Funcionario::findOrFail($id);
        $funcionario->nome=$request->get('nome');
        $funcionario->sobrenome=$request->get('sobrenome');
        $funcionario->cargo=$request->get('cargo');
        $funcionario->endereco=$request->get('endereco');
        $funcionario->telefone=$request->get('telefone');
        $funcionario->update();
        return Redirect::to('cadastro/funcionario');


    }
    public function destroy($id)
    {
        $funcionario=Funcionario::findOrFail($id);
        $funcionario->update();
        return Redirect::to('cadastro/funcionario');


    }
}
