@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3> Fornecedor <a href="fornecedor/create"><button class="btn btn-success">Adicionar</button></a></h3>
            @include('cadastro.fornecedor.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    @csrf
                    <thead>
                    <th>Cod</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Endereço</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Opções</th>
                    </thead>
                    @foreach ($fornecedores as $for)
                    <tr>
                        <td>{{ $for->id_fornecedor }}</td>
                        <td>{{ $for->nome }}</td>
                        <td>{{ $for->sobrenome }}</td>
                        <td>{{ $for->endereco }}</td>
                        <td>{{ $for->bairro }}</td>
                        <td>{{ $for->cidade }}</td>
                        <td>{{ $for->telefone }}</td>
                        <td>{{ $for->celular }}</td>

                        <td>


                            <a href="{{URL::action('FornecedorController@edit',$for->id_fornecedor)}}"><button class="btn btn-info">Editar</button></a>
                            <a href="" data-target="#modal=delete-{{$for->id_fornecedor}}" data-toggle="modal"> <button class="btn btn-danger">Excluir</button></a>
                        </td>
                    </tr>
                    @include('cadastro.fornecedor.modal')
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
