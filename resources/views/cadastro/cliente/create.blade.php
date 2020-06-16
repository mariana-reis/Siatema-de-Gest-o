@extends('layouts.admin')
@section('conteudo')
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <h3>Novo Cliente</h3>
    </div>

       {!!Form::open(array('url'=>'cadastro/cliente', 'method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}

        </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
        <div class="form-group">
            <label for="nome">nome</label>
            <input type="text " name="nome" required value="{{old('nome')}}" class="form-control"  placeholder="nome">
        </div>
    </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="telefone">telefone</label>
            <input type="text " name="telefone" required value="{{old('telefone')}}" class="form-control"  placeholder="telefone">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <label for="sobrenome">sobrenome</label>
            <input type="text " name="sobrenome" required value="{{old('sobrenome')}}" class="form-control"  placeholder="sobrenome">
        </div>
    </div>



    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text " name="logradouro" required value="{{old('logradouro')}}" class="form-control"  placeholder="logradouro">
                 <br>
                <input type="text " name="bairro" required value="{{old('bairro')}}" class="form-control"  placeholder="bairro">
                <br>
                <input type="text " name="numero" required value="{{old('numero')}}" class="form-control"  placeholder="numero">
                <br>
                <input type="text " name="complemento" required value="{{old('complemento')}}" class="form-control"  placeholder="complemento">
            </div>
        </div>
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

