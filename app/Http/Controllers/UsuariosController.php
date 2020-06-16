<?php

namespace SistemaControleBar\Http\Controllers;

use Illuminate\Http\Request;
use SistemaControleBar\Http\Requests;
use SistemaControleBar\Usuario;
use Illuminate\Support\Facades\Redirect;
use SistemaControleBar\Http\Requests\UsuarioFormRequest;
use DB;

class UsuariosController extends Controller
{
    public function __construct()
    {


    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $usuarios=DB::table('usuarios')->where('nome','LIKE','%'.$query.'%')
                ->orderBy('id_usuarios');
            $usuarios = Usuario::query()->orderBy('id_usuarios')->get();
            return view('acesso.usuario.index',compact('usuarios'));


        }

    }
    public function create()
    {

        return view("acesso.usuario.create");

    }
    public function store(UsuarioFormRequest $request)
    {


        $usuario=new Usuario;
        $usuario->id_usuarios=$request->get('id_usuarios');
        $usuario->nome=$request->get('nome');
        $usuario->email=$request->get('email');
        $usuario->senha=$request->get('senha');
        $usuario->status=$request->get('status');
        $usuario->cargo=$request->get('cargo');
        $usuario->tipo_usuario=$request->get('tipo_usuario');


        $usuario->save();
        return Redirect::to('acesso/usuario');

    }
    public function show($id)
    {
        return view("acesso.usuario.show",["usuario"=>Usuario::findOrFail($id)]);

    }
    public function edit($id)
    {
        return view("acesso.usuario.edit",["usuario"=>Usuario::findOrFail($id)]);

    }
    public function update(UsuarioFormRequest $request,$id)
    {
        $usuario=Usuario::findOrFail($id);
        $usuario->nome=$request->get('nome');
        $usuario->email=$request->get('email');
        $usuario->senha=$request->get('senha');
        $usuario->status=$request->get('status');
        $usuario->cargo=$request->get('cargo');
        $usuario->tipo_usuario=$request->get('tipo_usuario');

        $usuario->update();
        return Redirect::to('acesso/usuario');


    }
    public function destroy($id)
    {
        $usuario=Usuario::findOrFail($id);
        $usuario->update();
        return Redirect::to('acesso/usuario');

    }


}
