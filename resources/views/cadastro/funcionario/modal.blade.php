<div class="modal fade modal-slide-in-right" aria-hidden="true">
 role="dialog" tabindex="-1" id="modal-delete-{{$fun->id_funcionario}}">
{{Form::open(array('action'=>array('FuncionarioController@destroy',$fun->id_funcionario),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">x</span>
               </button>
               <h4 class="modal-title">Excluir funcionario</h4>

            </div>
            <div class="modal-body">
                <p>Confirme se deseja eliminar o funcionario</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>


            </div>
        </div>
    </div>
{{Form::Close()}}
</div>
