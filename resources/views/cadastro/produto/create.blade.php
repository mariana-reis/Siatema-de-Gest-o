@extends('layouts.admin')
@section('conteudo')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Novo Produto</h3>


       {!!Form::open(array('url'=>'cadastro/produto', 'method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}

        <div class="form-group">
            <label for="tipo_produto">Tipo Produto</label>
            <input type="text " name="tipo_produto" class="form-control"  placeholder="tipo produto">
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text " name="nome" class="form-control" placeholder="nome">
        </div>
        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="double " name="preco"  class="form-control" placeholder="preço">
        </div>
        <div class="form-group">
            <label for="quantidade_estoque">Quantidade Estoque</label>
            <input type="text " name="quantidade_estoque" class="form-control" placeholder="quantidade">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" class="alert alert-danger" type="submit">Adicionar</button>
{{--            <button class="btn btn-danger" type="reset">Cancelar</button>--}}
            <a href="{{url('http://127.0.0.1:8000/cadastro/produto')}}" class="btn btn-danger btn-flat">Cancelar</a>

        </div>

        {!!Form::Close()!!}
    </div>
</div>

@endsection







    <!--<a href='cadastro.produto'> <button class="btn btn-info">Voltar</button></a>

    <form>

        <div class="input-group">
            <label for="nome" class="">Tipo Produto</label>
            <input type="text" class="form-control" name="nome">
            <br><br><br>
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome">
            <br><br><br>

            <label for="nome" class="">Preço</label>
            <input type="text" class="form-control" name="nome" >
        </div>
        <br>
        <button class="btn btn-info">Adicionar</button>
        <button class="btn btn-primary">Limpar Campos</button>
        <button class="btn btn-danger">Cancelar</button>

    </form>
    !-->

