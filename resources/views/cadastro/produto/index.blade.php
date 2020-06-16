@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3> Produtos <a href="produto/create"><button class="btn btn-success">Adicionar</button></a></h3>
            @include('cadastro.produto.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    @csrf
                    <thead>
                    <th>Cod</th>
                    <th>Tipo Produto </th>
                    <th>Nome</th>
                    <th>Preço Unidade</th>
                    <th>Quantidade Estoque</th>
                    <th>Opções</th>
                    </thead>
                    @foreach ($produtos as $prod)
                        <tr>
                            <td>{{ $prod->id_produtos }}</td>
                            <td>{{ $prod->tipo_produto }}</td>
                            <td>{{ $prod->nome }}</td>
                            <td>R$ {{ $prod->preco }}</td>
                            <td>{{ $prod->quantidade_estoque }}</td>
                            <td>


                                <a href="{{URL::action('ProdutoController@edit',$prod->id_produtos)}}"><button class="btn btn-info">Editar</button></a>
                                <a href="" data-target="modal-delete-{{$prod->id_produtos}}" data-toggle="modal"> <button class="btn btn-danger">Excluir</button></a>
                            </td>
                        </tr>

                        @include('cadastro.produto.modal')
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
