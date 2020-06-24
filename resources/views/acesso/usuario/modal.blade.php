<div class="modal fade modal-slide-in-right" aria-hidden="true"
     role="dialog" tabindex="-1" id="modal-delete-{{ $usu->id_usuarios}}" >
    {{Form::Open(array('action'=>array('UsuariosController@destroy',  $usu->id_usuarios),'method'=>'DELETE'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
                <h4 class="modal-title"> Excluir </h4>
            </div>
            <div class="modal-body">
                <p>Confirmar exclusão | {{$usu->nome}} {{$usu->sobrenome}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
    {{Form::Close()}}
</div>

