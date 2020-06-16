@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Fornecedor: {{ $fornecedor->nome }}</h3>
            {!!Form::model(['method_field'=>'PATCH','route'=>['cadastro.fornecedor.update', $fornecedor->id]])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text " name="nome" class="form-control" value="{{  $fornecedor->nome }}" placeholder="nome">
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text " name="sobrenome" class="form-control" value="{{  $fornecedor->sobrenome }}" placeholder="sobrenome">
            </div>
            <div class="form-group">
                <label for="endereco">Endereçp</label>
                <input type="double " name="endereco"  class="form-control" value="{{ $fornecedor->endereco }}" placeholder="endereco">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text " name="bairro" class="form-control" value="{{  $fornecedor->bairro }}" placeholder="bairro">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text " name="cidade" class="form-control" value="{{  $fornecedor->cidade }}" placeholder="cidade">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text " name="telefone" class="form-control" value="{{  $fornecedor->telefone }}" placeholder="telefone">
            </div>
            <div class="form-group">
                <label for="celular">celular</label>
                <input type="text " name="celular" class="form-control" value="{{  $fornecedor->celular }}" placeholder="celular">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Adicionar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}
        </div>
    </div>

@endsection
