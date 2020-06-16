@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Funcionário: {{ $funcionario->nome }}</h3>
            {!!Form::model(['method'=>'PATCH','route'=>['cadastro.funcionario.edit',$funcionario->id_funcionario]])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text " name="nome" class="form-control" value="{{ $funcionario->nome }}" placeholder="nome">
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text " name="sobrenome" class="form-control" value="{{ $funcionario->sobrenome }}" placeholder="sobrenome">
            </div>
            <div class="form-group">
                <label for="preco">Cargo</label>
                <input type="text " name="cargo"  class="form-control" value="{{ $funcionario->cargo }}" placeholder="cargo">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text " name="endereco" class="form-control" value="{{ $funcionario->endereco }}" placeholder="endereco">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text " name="telefone" class="form-control" value="{{ $funcionario->telefone }}" placeholder="telefone">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Adicionar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}
        </div>
    </div>

@endsection






















