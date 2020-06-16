@extends('layouts.admin')
@section('conteudo')
<div class="row">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <h3>Novo Usuario</h3>
    </div>

       {!!Form::open(array('url'=>'acesso/usuario', 'method'=>'POST','autocomplete'=>'off'))!!}
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
            <label for="email">Email</label>
            <input type="text " name="email" required value="{{old('email')}}" class="form-control"  placeholder="email">
        </div>
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group ">
            <label for="senha">Senha</label>
            <input type="password " name="senha" required value="{{old('senha')}}" class="form-control"  placeholder="senha">
        </div>
    </div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text " name="status" required value="{{old('status')}}" class="form-control"  placeholder="status">
    </div>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
        <label for="cargo">Cargo</label>
        <input type="text " name="cargo" required value="{{old('cargo')}}" class="form-control"  placeholder="cargo">
    </div>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
        <label for="tipo_usuario">Tipo Usuario</label>
        <input type="text " name="tipo_usuario" required value="{{old('tipo_usuario')}}" class="form-control"  placeholder="tipo usuario">
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








