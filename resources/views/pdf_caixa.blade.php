<!DOCTYPE html>
<html>
<head>
    <title>Relátorio Caixa</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
        }
    </style>
</head>
<body>
<div class="header">
    <img src="{{ public_path('img/bar.jpg')}}"  height="100" width="100"/>
</div>
<br />
<div class="container">
    <h3 align="center">Relátorio Caixa</h3><br />

    <div class="row">
        <div class="col-md-7" align="right">
            <h4> 1 = Entradas | 2 = Saídas</h4>
        </div>

        <div class="row">
            <div class="col-md-7" align="right"dan >
                <h4>Data:23/06/2020</h4>
            </div>

    </div>
    <br />
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Tipo</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Valor</th>

            </tr>
            </thead>
            <tbody>
            @foreach($caixas as $caixa)

                <tr>
                    <td>{{$caixa->tipo}}</td>
                    <td> {{date('d/m/Y', strtotime($caixa->data))}} </td>
                    <td>{{$caixa->descricao}}</td>
                    <td>R$ &nbsp;{{$caixa->preco}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
