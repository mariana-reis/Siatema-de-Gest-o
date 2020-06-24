<!DOCTYPE html>
<html>
<head>
    <title>Relátorio Produto</title>
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
    <h3 align="center">Relátorio Produtos</h3><br />

    <div class="row">
        <div class="col-md-7" align="right">
            <h4>Data:23/06/2020</h4>
        </div>

    </div>
    <br />
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Cod</th>
                <th>Tipo Produto </th>
                <th>Nome</th>
                <th>Preço Unidade</th>
                <th>Quantidade Estoque</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($produto as $prod)

                <tr>
                    <td>{{ $prod->id_produtos }}</td>
                    <td>{{ $prod->tipo_produto }}</td>
                    <td>{{ $prod->nome }}</td>
                    <td>R$ {{ $prod->preco }}</td>
                    <td>{{ $prod->quantidade_estoque }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
