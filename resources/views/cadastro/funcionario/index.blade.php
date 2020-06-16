@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3> Funcionário <a href="funcionario/create"><button class="btn btn-success">Adicionar</button></a></h3>
            @include('cadastro.funcionario.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    @csrf
                    <thead>
                    <th>Cod</th>
                    <th>Nome </th>
                    <th>Sobrenome</th>
                    <th>Cargo</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Opções</th>
                    </thead>
                    @foreach ($funcionario as $fun)
                        <tr>
                            <td>{{ $fun->id_funcionario}}</td>
                            <td>{{ $fun->nome }}</td>
                            <td>{{ $fun->sobrenome }}</td>
                            <td>{{ $fun->cargo }}</td>
                            <td>{{ $fun->endereco }}</td>
                            <td>{{ $fun->telefone }}</td>
                            <td>


                                <a href="{{URL::action('FuncionarioController@edit',$fun->id_funcionario)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal=delete-{{$fun->id_funcionario}}" data-toggle="modal"> <button class="btn btn-danger">Excluir</button></a>
                            </td>
                        </tr>

                        @include('cadastro.funcionario.modal')
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
