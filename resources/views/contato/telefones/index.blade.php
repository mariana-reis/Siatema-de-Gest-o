@extends('layouts.admin')
@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Telefone <a href="telefone/create"><button>Novo</button></a></h3>
            @include('contato.telefones.search')
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                    <th>Id</th>
                    <th>Numero Telefone</th>
                    <th>Opções</th>
                    </thead>
                    <tr>
                        <td> 1 </td>
                        <td>(21) 983684981</td>
                        <td>
                           <a href=""> <button class="btn btn-info">Editar</button></a>
                            <a href=""> <button class="btn btn-danger">Excluir</button></a>
                        </td>
                    </tr>





                </table>
            </div>
        </div>
    </div>
@endsection
