@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Produto: {{ $produto->tipo_produto }}</h3>
            {!! Form::model(['method'=>'POST','route'=>['cadastro.produto.update',$produto->id]]) !!}
            {{Form::token()}}
            @csrf
            <div class="form-group">
                <label for="tipo_produto">Tipo Produto</label>
                <input type="text " name="tipo_produto" class="form-control" value="{{ $produto->tipo_produto }}" placeholder="tipo produto">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text " name="nome" class="form-control" value="{{ $produto->nome }}" placeholder="nome">
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="double " name="preco"  class="form-control" value="{{ $produto->preco }}" placeholder="preço">
            </div>
            <div class="form-group">
                <label for="quantidade_estoque">Quantidade Estoque</label>
                <input type="text " name="quantidade_estoque" class="form-control" value="{{ $produto->quantidade_estoque }}" placeholder="quantidade">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Adicionar</button>
{{--                <button class="btn btn-danger" type="reset">Cancelar</button>--}}
                <a href="{{url('http://127.0.0.1:8000/cadastro/produto')}}" class="btn btn-danger btn-flat">Cancelar</a>

            </div>

            {!!Form::close()!!}
        </div>
    </div>

@endsection
