@extends('layouts.admin')
@section('conteudo')
    <tr>
        <td style="width: 460px;">

            <div id="pos">
                <form action="http://www.scriptphp.ru/pdv/pos" id="pos-sale-form" method="post" accept-charset="utf-8">
                    <input type="hidden" name="spos_token" value="eb10d74c2b79ff43435a57242866aaa9" style="display:none;">
                    <div class="well well-sm" id="leftdiv">
                        <div id="lefttop" style="margin-bottom:5px;">
                            <div class="form-group" style="margin-bottom:5px;">
                                <div class="input-group">
                                    <select name="customer_id" id="spos_customer" data-placeholder="Selecione Cliente" required="required" class="form-control select2 select2-hidden-accessible" style="width:100%;" tabindex="-1" aria-hidden="true">
                                        <option value="1" selected="selected">Selecionar Cliente</option>
                                        <option value="5">cliente 1</option>
                                        <option value="6">cliente 2</option>
                                        <option value="8">cliente 3</option>

                                        <input type="text" name="code" id="add_item" class="form-control ui-autocomplete-input" placeholder="Procure o produto pelo código ou nome" autocomplete="off">

                                    </select>
                                    <div class="input-group-addon no-print" style="padding: 2px 5px;">
                                        <a href="#" id="add-customer" class="external" data-toggle="modal" data-target="#myModal"><i class="fa fa-2x fa-plus-circle" id="addIcon"></i></a>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                            </div>

                        </div>
                        <div id="printhead" class="print">
                            <h2>CAIXA </h2>Av. Joaquim da Costa Lima<br>Belford-Roxo - RJ											<p>Date: 08/06/2020</p>
                        </div>
                        <div id="print">
                            <div id="list-table-div" class="ps-container" data-ps-id="3f992443-d394-729c-8a4d-f25ad2c1a5c7" style="height: 344px;">
                                <table id="posTable" class="table table-striped table-condensed table-hover list-table" style="margin:0;">
                                    <thead>
                                    <tr class="alert-success">
                                        <th>Produto</th>
                                        <th style="width: 5%;text-align:justify-all;">Preço</th>
                                        <th style="width: 15%;text-align:center;">Quantidade</th>
                                        <th style="width: 5%;text-align:center;">Subtotal</th>
                                        <th style="width: 10px;" class="satus"><i class="fa fa-trash-o"></i></th>
                                    </tr>
                                    </thead>
                                    <tr id="1588912769264" class="39" data-item-id="39"><td><input name="product_id[]" type="hidden" class="rid" value="39"><button type="button" class="btn bg-purple btn-block btn-xs edit bg-red-active" id="1588912769264" data-item="39"><span class="sname" id="name_1588912769264">Cerveja Brahma Latão</span></button></td><td class="text-right"><input class="realuprice" name="real_unit_price[]" type="hidden" value="6.00" style="width: 15%;text-align:justify-all;"><span class="text-right sprice" id="sprice_1588912769264">7.00</span></td><td><input class="form-control input-qty kb-pad text-center rquantity ui-keyboard-input ui-widget-content ui-corner-all" name="quantity[]" type="text" value="6" data-id="1588912769264" data-item="39" id="quantity_1588912769264" onclick="this.select();" aria-haspopup="true" role="textbox"></td><td class="text-right"><span class="text-right ssubtotal" id="subtotal_1588912769264">42.00</span></td><td class="text-center"><i class="fa fa-trash-o tip pointer posdel" id="1588912769264" title="Remove"></i></td></tr>
                                    <tr id="1588912769256" class="38 danger" data-item-id="38"><td><input name="product_id[]" type="hidden" class="rid" value="38"><button type="button" class="btn btn-block btn-xs edit bg-red-active" id="1588912769256" data-item="38"><span class="sname" id="name_1588912769256">Suco 600 ML</span></button></td><td class="text-right"><input class="realuprice" name="real_unit_price[]" type="hidden" value="4.50"><input class="rdiscount" name="product_discount[]" type="hidden" id="discount_1588912769256" value="0"><span class="text-right sprice" id="sprice_1588912769256">4.50</span></td><td><input class="form-control input-qty kb-pad text-center rquantity ui-keyboard-input ui-widget-content ui-corner-all" name="quantity[]" type="text" value="1" data-id="1588912769256" data-item="38" id="quantity_1588912769256" onclick="this.select();" aria-haspopup="true" role="textbox"></td><td class="text-right"><span class="text-right ssubtotal" id="subtotal_1588912769256">4.50</span></td><td class="text-center"><i class="fa fa-trash-o tip pointer posdel" id="1588912769256" title="Remove">
                                    <tr id="1588912769256" class="38 danger" data-item-id="38"><td><input name="product_id[]" type="hidden" class="rid" value="38"><button type="button" class="btn btn-block btn-xs edit bg-red-active" id="1588912769256" data-item="38"><span class="sname" id="name_1588912769256">Pizza Mussarela</span></button></td><td class="text-right"><input class="realuprice" name="real_unit_price[]" type="hidden" value="10.00"><input class="rdiscount" name="product_discount[]" type="hidden" id="discount_1588912769256" value="0"><span class="text-right sprice" id="sprice_1588912769256">10.00</span></td><td><input class="form-control input-qty kb-pad text-center rquantity ui-keyboard-input ui-widget-content ui-corner-all" name="quantity[]" type="text" value="3" data-id="1588912769256" data-item="38" id="quantity_1588912769256" onclick="this.select();" aria-haspopup="true" role="textbox"></td><td class="text-right"><span class="text-right ssubtotal" id="subtotal_1588912769256">30.00</span></td><td class="text-center"><i class="fa fa-trash-o tip pointer posdel" id="1588912769256" title="Remove">
                                    <tr id="1588912769256" class="38 danger" data-item-id="38"><td><input name="product_id[]" type="hidden" class="rid" value="38"><button type="button" class="btn btn-block btn-xs edit bg-red-active" id="1588912769256" data-item="38"><span class="sname" id="name_1588912769256">Coca-Cola 1LT</span></button></td><td class="text-right"><input class="realuprice" name="real_unit_price[]" type="hidden" value="9.50"><input class="rdiscount" name="product_discount[]" type="hidden" id="discount_1588912769256" value="0"><span class="text-right sprice" id="sprice_1588912769256">9.50</span></td><td><input class="form-control input-qty kb-pad text-center rquantity ui-keyboard-input ui-widget-content ui-corner-all" name="quantity[]" type="text" value="1" data-id="1588912769256" data-item="38" id="quantity_1588912769256" onclick="this.select();" aria-haspopup="true" role="textbox"></td><td class="text-right"><span class="text-right ssubtotal" id="subtotal_1588912769256">9.50</span></td><td class="text-center"><i class="fa fa-trash-o tip pointer posdel" id="1588912769256" title="Remove">



                                    <tbody> </tbody>

                                </table>
                                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px; display: block;"><div class="ps-scrollbar-x" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; display: block;"><div class="ps-scrollbar-y" style="top: 0px; height: 0px;"></div></div></div>
                            <div style="clear:both;"></div>
                            <div id="totaldiv">
                                <table id="totaltbl" class="table table-condensed totals" style="margin-bottom:10px;">
                                    <tbody>
                                    <tr class="bg-green-gradient">
                                        <td width="25%">Total de Itens</td>
                                        <td class="text-right" style="padding-right:20px;"><span id="count">11</span></td>
                                        <td width="25%">Total</td>
                                        <td class="text-right" colspan="2"><span id="total">86.00</span></td>
                                    </tr>
                                    <tr class="bg-green-gradient">
                                        <td width="25%">Desconto</td>
                                        <td class="text-right" style="padding-right:10px;"><span id="ds_con">0.00</span></td>
                                        <td width="25%">Taxa</td>
                                        <td class="text-right"><span id="ts_con">5.00</span></td>
                                    </tr>
                                    <tr class="bg-yellow-gradient">
                                        <td colspan="2" style="font-weight:bold;">Total a Pagar</td>
                                        <td class="text-right" colspan="2" style="font-weight:bold;"><span id="total-payable">91.00</span></td>
                                    </tr>
                                    <tr class="bg-green-gradient">
                                        <td width="25%">Valor Pago</td>
                                        <td class="text-right" style="padding-right:10px;"><span id="ds_con">100.00</span></td>
                                        <td width="25%">Troco</td>
                                        <td class="text-right"><span id="ts_con">9.00</span></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="botbuttons" class="col-xs-12 text-center">
                            <div class="row">
                                <div class="col-xs-4" style="padding: 0;">
                                    <div class="btn-group-vertical btn-block">
                                        <button type="button" class="btn btn-danger btn-block btn-flat" id="reset">Cancelar</button>
                                    </div>

                                </div>
                                <div class="col-xs-4" style="padding: 0 5px;">
                                    <div class="btn-group-vertical btn-block">
                                        <button type="button" class="btn  btn-block btn-flat" id="print_order"></button>

                                        <button type="button" class="btn btn-block btn-flat" id="print_bill"></button>
                                    </div>
                                </div>
                                <div class="col-xs-4" style="padding: 0;" >
                                    <a class="btn btn-block " href="{{url('imprimir/extrato')}}">
                                    <button type="button" class="btn btn-success btn-block btn-flat bg-green-gradient" id="payment" style="height:67px;">Finalizar Venda</button>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <span id="hidesuspend"></span>
                        <input type="hidden" name="spos_note" value="" id="spos_note">
                    </div>
                </form>
            </div>

        </td>
    </tr>
@endsection




















   <!--     <div class="form-group">
    <form action="" method="post" accept-charset="utf-8" id="select_customer_form">		<label id="customer_label" for="customer">Selecionar Cliente (Opcional)</label>
        <input type="text" name="customer" value="Digite o nome do cliente..." id="customer" size="30" autocomplete="off" class="ac_input">		</form>
    <div style="margin-top:5px;text-align:center;">
        <h3 style="margin: 5px 0 5px 0">OU</h3>
        <a href="cliente/create" class="thickbox none" title="Novo Cliente"><div class="small_button" style="margin:0 auto;"><span>Novo Cliente</span></div></a>		</div>
    <div class="clearfix">&nbsp;</div>

    <div id="sale_details">
        <div class="float_left" style="width:55%;">Sub Total:</div>
        <div class="float_left" style="width:45%;font-weight:bold;">R$0.00</div>


        <div class="float_left" style="width:55%;">Total:</div>
        <div class="float_left" style="width:45%;font-weight:bold;">R$0.00</div>
    </div>
</div>!-->
