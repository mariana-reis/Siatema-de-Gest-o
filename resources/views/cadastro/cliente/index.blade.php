@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3> Clientes<a href="cliente/create"> <button class="btn btn-success">Adicionar</button></a></h3>
            @include('cadastro.cliente.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    @csrf
                    <thead>
                    <th>Cod</th>
                    <th>nome </th>
                    <th> Sobrenome</th>
                    <th> Telefone</th>
                    <th> Logradouro </th>
                    <th> Bairro </th>
                    <th> Numero </th>
                    <th> Complemento </th>

                    <th>Opções</th>
                    </thead>
                    @foreach ($clientes as $cli)
                        <tr>
                            <td>{{ $cli->id_clientes }}</td>
                            <td>{{ $cli->nome }}</td>
                            <td>{{ $cli->sobrenome }}</td>
                            <td>{{ $cli->telefone }}</td>
                            <td>{{ $cli->logradouro }}</td>
                            <td>{{ $cli->bairro }}</td>
                            <td>{{ $cli->numero }}</td>
                            <td>{{ $cli->complemento }}</td>



                            <td>
                                <a href="{{URL::action('ClienteController@edit',$cli->id_clientes)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="#modal-delete-{{$cli->id_clientes}}" data-toggle="modal"><button class="btn btn-danger">Excluir</button></a>
                            </td>
                        </tr>
                        @include('cadastro.cliente.modal')
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
