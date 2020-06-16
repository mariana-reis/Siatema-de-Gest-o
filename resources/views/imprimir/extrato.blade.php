@extends('layouts.admin')
@section('conteudo')
    <html><head>
        <meta charset="utf-8">
        <title>Extrato </title>
        <base href="#">
        <meta http-equiv="cache-control" content="max-age=0">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="expires" content="0">
        <meta http-equiv="pragma" content="no-cache">
        <link rel="shortcut icon" href="#">
        <link href="#" rel="stylesheet" type="text/css">
        <style type="text/css" media="all">
            body { color: #000; }
            #wrapper { max-width: 480px; margin: 0 auto; padding-top: 20px; }
            .btn { border-radius: 0; margin-bottom: 5px; }
            .table { border-radius: 3px; }
            .table th { background: #f5f5f5; }
            .table th, .table td { vertical-align: middle !important; }
            h3 { margin: 5px 0; }

            @media print {
                .no-print { display: none; }
                #wrapper { max-width: 480px; width: 100%; min-width: 250px; margin: 0 auto; }
            }
        </style>
    </head>

    <body>

    <div id="wrapper">
        <div id="receiptData">
            <div class="no-print">
                <div class="alert alert-success">
                    <button data-dismiss="alert" class="close" type="button">×</button>
                    Venda efetuada com sucesso            </div>
            </div>
            <div id="receipt-data">
                <div class="text-center">
                    <h2>Bar 486</h2>Av. Joaquim Da Costa Lima<br>Belford-Roxo - RJ                <p>

                        Cliente: Mariana Silva <br>
                        Data: 11/05/20 08:30:05 PM                </p>
                    <div style="clear:both;"></div>
                    <table class="table table-striped table-condensed">
                        <thead>
                        <tr>
                            <th class="text-center col-xs-6">Descrição</th>
                            <th class="text-center col-xs-1">Qtd</th>
                            <th class="text-center col-xs-2">Preço</th>
                            <th class="text-center col-xs-3">Subtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr><td class="text-left">Cerveja Brahma  Latão</td>
                            <td class="text-center">6</td><td class="text-right">7.00</td><td class="text-right">42.00</td></tr>
                        <tr><td class="text-left">Suco 600 ML</td><td class="text-center">1</td><td class="text-right">4.50</td><td class="text-right">4.50</td></tr>
                        <tr><td class="text-left">Pizza Mussarela</td><td class="text-center">3</td><td class="text-right">10.00</td><td class="text-right">30.00</td></tr>
                        <tr><td class="text-left">Cola-Cola 1 LT</td><td class="text-center">1</td><td class="text-right">9.50</td><td class="text-right">9.50</td></tr>                </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="2">Total</th>
                            <th colspan="2" class="text-right">86.00</th>
                        </tr>
                        <tr>
                            <th colspan="2">Total Geral</th>
                            <th colspan="2" class="text-right">86.00</th>
                        </tr>
                        <tr>
                            <th colspan="2">Valor pago</th>
                            <th colspan="2" class="text-right">100.00</th>
                        </tr>
                        <tr>
                            <th colspan="2">Troco</th>
                            <th colspan="2" class="text-right">9.00</th>
                        </tr>
                        </tfoot>
                    </table>
                    <table class="table table-striped table-condensed"><tbody><tr><td>Pagamento via: Dinheiro</td><td>Valor Pago: 100.00</td><td>Troco: 9</td></tr></tbody></table><img src="https://chart.googleapis.com/chart?cht=qr&amp;chs=300x300&amp;chl=http%3A%2F%2Fwww.nfe.fazenda.gov.br%2Fportal%2Fconsulta.aspx%3FtipoConsulta%3Dcompleta%26tipoConteudo%3DXbSeqxE8pl8%3DMobLanche_PDVPARATODOS.COM.BR&amp;choe=UTF-8&amp;chld=L|4">
                    <div class="well well-sm">
                        Obrigado pela preferência. Volte Sempre!
                        <br>            </div>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div id="buttons" style="padding-top:10px; text-transform:uppercase;" class="no-print">
                <hr>
                <div class="alert alert-success">
                    <button data-dismiss="alert" class="close" type="button">×</button>
                    Venda efetuada com sucesso    </div>

                <span class="pull-right col-xs-12">
        <a href="javascript:window.print()" id="web_print" class="btn btn-block btn-primary" onclick="window.print();return false;">Impressão Web</a>
    </span>

                <span class="col-xs-12">
        <a class="btn btn-block btn-warning" href="{{url('vendas/venda')}}">Voltar ao Caixa</a>
    </span>

                        <div style="clear:both;"></div>

                    </div><font size="-2"><font>

                </font></font></div><font size="-2"><font>
                <canvas id="hidden_screenshot" style="display:none;">

                </canvas>
                <div class="canvas_con" style="display:none;"></div>
                <script src="http://www.bar486.gestao/pdv/themes/default/assets/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                    });
                    $(window).load(function () {
                        window.print();
                    });
                </script>


            </font></font></div></body></html>
@endsection
