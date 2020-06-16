@extends('template.template')

@section('title', 'Entrar no sistema')


@section('conteudo')
<div class="m-b-md row" style="align-items: center;">
    <div class="content" style="text-align: center;">
        <h2>Entrar no Sistema</h2>
        <p>Acesse o sistema para poder fazer todo o seu controle :</p>
    </div>

    <div class="panel panel-default col-md-6 col-md-offset-3 ">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">E-Mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Senha</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
{{--                        <button type="submit" class="btn btn-succes">
{{--                       --}}
                        <a href="{{url('http://127.0.0.1:8000/home/inicio')}}" class="btn btn-default btn-flat">Entrar</a> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
