@extends('layouts.admin')
@section('conteudo')

    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"><span class="text-warning">Relatório | Venda Diária</span></h3>
        </div>
        <div class="box-body">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-aqua-gradient">
                            <span class="info-box-icon"><i class="fa fa-shopping-cart"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">TOTAL DE VENDAS</span>
                                <span class="info-box-number">14,320.88</span>
                                <div class="progress">
                                    <div style="width: 100%" class="progress-bar"></div>
                                </div>
                                <span class="progress-description">
                                            50 Vendas |
                                            1,027.57 Recebido |
                                            127.95 Taxa                                        </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-red-gradient">
                            <span class="info-box-icon"><i class="fa fa-plus"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">TOTAL DE COMPRAS</span>
                                <span class="info-box-number">700.00</span>
                                <div class="progress">
                                    <div style="width: 0%" class="progress-bar"></div>
                                </div>
                                <span class="progress-description">
                                            0 Compras                                        </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-purple-gradient">
                            <span class="info-box-icon"><i class="fa fa-circle-o"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">TOTAL DE DESPESAS</span>
                                <span class="info-box-number">30.90</span>
                                <div class="progress">
                                    <div style="width: 0%" class="progress-bar"></div>
                                </div>
                                <span class="progress-description">
                                            0 Despesas                                        </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-green-gradient">
                            <span class="info-box-icon"><i class="fa fa-dollar"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">LUCROS E PERDAS</span>
                                <span class="info-box-number">14,320.88</span>
                                <div class="progress">
                                    <div style="width: 100%" class="progress-bar"></div>
                                </div>
                                <span class="progress-description">
                                            18512.71 -  -                                         </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="calendar table-responsive">
                    <table border="0" cellpadding="0" cellspacing="0" class="table table-bordered" style="min-width:522px;">

                        <tbody><tr class="active">
                            <th><div class="text-center"><a href="">&lt;&lt;</a></div></th>
                            <th colspan="5"><div class="text-center">Maio&nbsp;2020</div></th>
                            <th><div class="text-center"><a href="grafico/grafico">&gt;&gt;</a></div></th>
                        </tr>

                        <tr>
                            <td class="cl_equal"><div class="cl_wday">Domingo</div></td><td class="cl_equal"><div class="cl_wday">Segunda</div></td><td class="cl_equal"><div class="cl_wday">Terça</div></td><td class="cl_equal"><div class="cl_wday">Quarta</div></td><td class="cl_equal"><div class="cl_wday">Quinta</div></td><td class="cl_equal"><div class="cl_wday">Sexta</div></td><td class="cl_equal"><div class="cl_wday">Sábado</div></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>1</td><td>2</td>
                        </tr>

                        <tr>
                            <td>3</td><td><div class="cl_left">4</div><div class="cl_right"><span class="text-warning">10.00</span><br>5000.00<br><span class="text-success">21804.00</span><br><span style="border-top:1px solid #db0b0b;">16814.00</span></div></td><td><div class="cl_left">5</div><div class="cl_right"><span class="text-warning">0.00</span><br>0.00<br><span class="text-success">16.00</span><br><span style="border-top:1px solid #ef1111;">16.00</span></div></td><td><div class="cl_left">6</div><div class="cl_right"><span class="text-warning">0.00</span><br>0.00<br><span class="text-success">583.00</span><br><span style="border-top:1px solid #e51212;">583.00</span></div></td><td>7</td><td><div class="cl_left">8</div><div class="cl_right"><span class="text-warning">117.95</span><br>0.00<br><span class="text-success">981.76</span><br><span style="border-top:1px solid #f10e0e;">1099.71</span></div></td><td><div class="highlight">9</div></td>
                        </tr>

                        <tr>
                            <td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td><td>16</td>
                        </tr>

                        <tr>
                            <td>17</td><td>18</td><td>19</td><td>20</td><td>21</td><td>22</td><td>23</td>
                        </tr>

                        <tr>
                            <td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td><td>30</td>
                        </tr>

                        <tr>
                            <td>31</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                        </tr>

                        </tbody></table>                        </div>
            </div>
        </div>
    </div>
@endsection
