@extends('layouts.admin')
@section('conteudo')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Novo Fornecedor</h3>


       {!!Form::open(array('url'=>'cadastro/fornecedor', 'method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text " name="nome" class="form-control"  placeholder="nome">
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text " name="sobrenome" class="form-control" placeholder="sobrenome">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text " name="endereco"  class="form-control" placeholder="endereco">
        </div>
        <div class="form-group">
            <label for="bairro">Bairro</label>
            <input type="text " name="bairro" class="form-control" placeholder="bairro">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text " name="cidade" class="form-control" placeholder="cidade">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text " name="telefone" class="form-control" placeholder="telefone">
        </div>
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text " name="celular" class="form-control" placeholder="celular">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" class="alert alert-danger" type="submit">Adicionar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
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

