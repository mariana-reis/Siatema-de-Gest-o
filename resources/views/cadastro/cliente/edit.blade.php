@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar cliente: {{ $cliente->nome }}</h3>
            {!!Form::model(['method'=>'POST','route'=>['cadastro.cliente.update',$cliente->id_clientes]])!!}
            {{Form::token()}}

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text " name="nome" class="form-control" value="{{$cliente->nome}}" placeholder="nome">
            </div>

            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text " name="sobrenome" class="form-control" value="{{$cliente->sobrenome}}" placeholder="sobrenome">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text " name="telefone" class="form-control" value="{{$cliente->telefone}}" placeholder="telefone">
            </div>

            <div class="form-group">
                <label for="logradouro">logradouro</label>
                <input type="text " name="logradouro" class="form-control" value="{{$cliente->logradouro}}" placeholder="logradouro">
            </div>

            <div class="form-group">
                <label for="bairro">bairro</label>
                <input type="text " name="bairro" class="form-control" value="{{$cliente->bairro}}" placeholder="bairro">
            </div>

            <div class="form-group">
                <label for="numero">numero</label>
                <input type="text " name="numero" class="form-control" value="{{$cliente->numero}}" placeholder="numero">
            </div>

            <div class="form-group">
                <label for="complemento">complemento</label>
                <input type="text " name="complemento" class="form-control" value="{{$cliente->complemento}}" placeholder="complemento">
            </div>




            <div class="form-group">
                <button class="btn btn-primary" type="submit">Adicionar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}
        </div>
    </div>

@endsection
