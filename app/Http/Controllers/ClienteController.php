<?php

namespace SistemaControleBar\Http\Controllers;

use Illuminate\Http\Request;
use SistemaControleBar\Http\Requests;
use SistemaControleBar\Cliente;
use Illuminate\Support\Facades\Redirect;
use SistemaControleBar\Http\Requests\ClienteFormRequest;
use DB;

class ClienteController extends Controller
{
    public function __construct()
    {


    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $clientes=DB::table('clientes')->where('nome','LIKE','%'.$query.'%')
                ->orderBy('id_clientes');
            $clientes = Cliente::query()->orderBy('nome')->get();
            return view('cadastro.cliente.index',compact('clientes'));
            //["clientes"=>$clientes,"searchText"=>$query]);  subistituição do codigo por compact que identifica a variavel com o nome q foi declarado


        }

    }
    public function create()
    {

        return view("cadastro.cliente.create");

    }
    public function store(ClienteFormRequest $request)
    {


        $cliente=new Cliente;
        $cliente->id_clientes=$request->get('id_clientes');
        $cliente->nome=$request->get('nome');
        $cliente->sobrenome=$request->get('sobrenome');
        $cliente->telefone=$request->get('telefone');
        $cliente->logradouro=$request->get('logradouro');
        $cliente->bairro=$request->get('bairro');
        $cliente->numero=$request->get('numero');
        $cliente->complemento=$request->get('complemento');





        $cliente->save();
        return Redirect::to('cadastro/cliente');

    }
    public function show($id)
    {
        return view("cadastro.cliente.show",["cliente"=>Cliente::findOrFail($id)]);

    }
    public function edit($id)
    {
        return view("cadastro.cliente.edit",["cliente"=>Cliente::findOrFail($id)]);

    }
    public function update(ClienteFormRequest $request,$id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->nome=$request->get('nome');
        $cliente->sobrenome=$request->get('sobrenome');
        $cliente->telefone=$request->get('telefone');
        $cliente->logradouro=$request->get('logradouro');
        $cliente->bairro=$request->get('bairro');
        $cliente->numero=$request->get('numero');
        $cliente->complemento=$request->get('complemento');
        $cliente->update();
        return Redirect::to('cadastro/cliente');


    }
    public function destroy($id)
    {

        Cliente::find($id)->delete();
        return redirect()->back();
//        $cliente=Cliente::findOrFail($id);
//        $cliente->update();
//        return Redirect::to('cadastro/cliente');

    }


}
