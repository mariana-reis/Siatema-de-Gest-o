@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Usuário: {{ $usuario->id_usuarios }}</h3>
            {!!Form::model(['method'=>'PATCH','route'=>['acesso.usuario.update',$usuario->id_usuarios]])!!}
            {{Form::token()}}

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text " name="nome" class="form-control" value="{{$usuario->nome}}" placeholder="nome">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text " name="email" class="form-control" value="{{$usuario->email}}" placeholder="email">
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password " name="senha" class="form-control" value="{{$usuario->senha}}" placeholder="senha">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text " name="status" class="form-control" value="{{$usuario->status}}" placeholder="status">
            </div>

            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text " name="cargo" class="form-control" value="{{$usuario->cargo}}" placeholder="cargo">
            </div>

            <div class="form-group">
                <label for="tipo_usuario">Tipo Usuario</label>
                <input type="text " name="tipo_usuario" class="form-control" value="{{$usuario->tipo_usuario}}" placeholder="tipo usuario">
            </div>




            <div class="form-group">
                <button class="btn btn-primary" type="submit">Adicionar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}
        </div>
    </div>

@endsection
