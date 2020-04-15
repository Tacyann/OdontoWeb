<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OdontoWEB</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../../bootstrap/components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../bootstrap/components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../bootstrap/components/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../bootstrap/components/dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="load"> <i class="fa fa-cog fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> </div>
    <div class="wrapper">

        <header class="main-header">
            <!-- LOGO -->
            <a href="index.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">WEB</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>OdontoWEB</b></span>
            </a>
            <!-- LOGO -->
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Alternar a navegação</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- DROPDOWN USUÁRIO -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Caíque Santos Silveira</span>
                            </a>
                        </li>
                        <li>
                            <a href="../../index.php">
                                <i class="glyphicon glyphicon-off"> </i>
                            </a>
                        </li>
                        </li>
                    </ul>
                    </li>
                    <!-- DROPDOWN USUÁRIO -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <!-- MENU -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU DE NAVEGAÇÃO</li>
                    <!-- PÁGINA INICIAL -->
                    <li class="active">
                        <a href="../util/home.php">
                            <i class="fa fa-home"></i> <span>Página Inicial</span>
                        </a>
                    </li>
                    <!-- PÁGINA INICIAL -->
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-briefcase"></i>
                            <span>Questionários</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../../view/form/indicecarie.php"><i class="fa fa-address-book"></i>Índice de carie</a></li>
                            <li><a href="../../view/form/indiceriscosaudebucal.php"><i class="fa fa-address-book"></i>Índice risco saúde bucal</a></li>
                            <li><a href="../../view/form/sociodemografico.php"><i class="fa fa-address-book"></i>Sociodemográfico</a></li>
                            <li><a href="../../view/form/guiaalimentar.php"><i class="fa fa-address-book"></i>Guia Alimentar</a></li>
                            <li><a href="#"><i class="fa fa-address-book"></i>Inventario alimentar</a></li>
                        </ul>
                    </li>
                    <!-- RELATÓRIOS -->
                    <li class="treeview">
                        <a href="#"> <i class="fa fa-file-pdf-o"></i> <span>Relatórios</span> <span
                                class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span> </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-file-pdf-o"></i> Relação</a></li>
                        </ul>
                    </li>
                    <!-- RELATÓRIOS -->
                    <!-- HELPD-->
                    <li class="treeview"></li>
                    <li class="header">SUPORTE</li>
                    <li><a href="#" target="_blank"><i class="fa fa-headphones"></i> <span>HELP</span></a></li>
                    <!-- HELP -->

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
       
    </div>
     <script src="../../bootstrap/components/jquery/dist/jquery.min.js"></script>
     <script src="../../bootstrap/components/jquery-ui/jquery-ui.min.js"></script>
     <script src="../../bootstrap/components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../bootstrap/components/dist/js/adminlte.min.js"></script>
    <script>
   //código usando jQuery
   $(document).ready(function() {
   $('.load').hide(); });
</script>
</body>

</html>