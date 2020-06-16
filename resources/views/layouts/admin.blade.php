<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Controle Bar 486</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

</head>
<body class="hold-transition skin-red sidebar-mini">

<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>bar 486</b>bar</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Bar 486</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Navegação</span>
            </a>

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- User Account: style can be found in dropdown.less -->

                    <li class="dropdown user user-menu">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <small class="bg-green">Ativo</small>
                            <span class="hidden-xs">Mariana Pereira</span>
                            <span class="hidden-xs">| Administrador</span>

                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                                <p>
                                    Usuário: Mariana<br>
                                    <br>
                                    <small>Função: Gerente<br>
                                        Hora: 20:35<br>
                                        Data: 08/06/2020</small>
                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="{{url('http://127.0.0.1:8000/')}}" class="btn btn-default btn-flat">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header"></li>
                <li class="treeview">
                    <a href="{{url('home/inicio')}}">
                        <i class="fa fa-laptop"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>cadastro</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('cadastro/produto')}}"><i class="fa fa-circle-o"></i> Produto</a></li>
                        <li><a href="{{url('cadastro/cliente')}}"><i class="fa fa-circle-o"></i> Cliente</a></li>
                        <li><a href="{{url('cadastro/fornecedor')}}"><i class="fa fa-circle-o"></i>Fornecedor</a></li>
                        <li><a href="{{url('cadastro/funcionario')}}"><i class="fa fa-circle-o"></i>Funcionário</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Caixa</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('vendas/venda')}}"><i class="fa fa-circle-o"></i>Caixa</a></li>
                        <li><a href="{{url('home')}}"><i class="fa fa-circle-o"></i>Controle Caixa</a></li>

                    </ul>
                </li>
                <!--<li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Estoque</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="vendas/venda"><i class="fa fa-circle-o"></i> Produtos</a></li>
                        <li><a href="vendas/cliente"><i class="fa fa-circle-o"></i> </a></li>
                    </ul>
                </li>!-->

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Acesso</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('acesso/usuario')}}"><i class="fa fa-user-plus"></i> Usuarios</a></li>

                    </ul>
                </li>
                <li>
                    <a href="{{url('relatorio/venda')}}">
                        <i class="fa fa-plus-square"></i> <span>Listagem Vendas</span>
                        <small class="label pull-right bg-red">exibir</small>
                    </a>
                </li>
                <li>
                    <a href="{{url('relatorio/grafico/grafico')}}">
                        <i class="fa fa-plus-square"></i> <span>Relatorio Grafico</span>
                        <small class="label pull-right bg-red">exibir</small>
                    </a>
                </li>
                <li>
                    <a href="{{url('relatorio/vendasdiarias')}}">
                        <i class="fa fa-plus-square"></i> <span>Relatorio Venda Diária</span>
                        <small class="label pull-right bg-red">Exibir</small>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info-circle"></i> <span>Manual Usuário</span>
                        <small class="label pull-right bg-yellow">Consultar</small>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>





    <!--Conteudo-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Gestão e Gerenciamento | Bar 486</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    @yield('conteudo')
                                </div>
                            </div>

                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Conteudo-->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>versão</b> 2.1.0
    </div>

    <strong>Copyright &copy; 2020 <a href="www.mariana.silva.com">Developer Mariana Silva</a>.</strong>  Todos os direitos reservados Política de Privacidade
</footer>


<!-- jQuery 2.1.4 -->
<script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/app.min.js')}}"></script>

</body>
</html>
