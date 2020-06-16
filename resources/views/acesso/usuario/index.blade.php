@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3> Usuários <a href="usuario/create"><button class="btn btn-success">Cadastrar</button></a></h3>
            @include('acesso.usuario.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    @csrf
                    <thead>
                    <th>Cod</th>
                    <th>Nome </th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Status</th>
                    <th>Cargo</th>
                    <th>Tipo Usuário</th>
                    <th>Opções</th>
                    </thead>
                    @foreach ($usuarios as $usu)
                    <tr>
                        <td>{{ $usu->id_usuarios }}</td>
                        <td>{{ $usu->nome }}</td>
                        <td>{{ $usu->email }}</td>
                        <td>{{$usu->senha }}</td>
                        <td>{{ $usu->status }}</td>
                        <td>{{ $usu->cargo }}</td>
                        <td>{{ $usu->tipo_usuario }}</td>
                        <td>


                            <a href="{{URL::action('UsuariosController@edit',$usu->id_usuarios)}}"><button class="btn btn-info">Editar</button></a>
                            <a href="" data-target="#modal=delete-{{$usu->id_usuarios}}" data-toggle="modal"> <button class="btn btn-danger">Excluir</button></a>
                        </td>
                    </tr>
                    @include('acesso.usuario.modal')
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
