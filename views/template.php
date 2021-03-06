<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Astrajuri</title>

    <!-- Bootstrap -->
    <link href="<?= HOME; ?>/assets/bootstrap/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= HOME; ?>/assets/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= HOME; ?>/assets/bootstrap/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= HOME; ?>/assets/bootstrap/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?= HOME ?>/assets/css/custom.min.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="<?= HOME; ?>/assets/bootstrap/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

</head>
<body class="nav-md">
<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><span>Astrajuri</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?= HOME; ?>/assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem Vindo,</span>
                <h2>Usuário</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- MENU LATERAL -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>Geral</h3> -->
                <ul class="nav side-menu">
				
                    <li><a href="#.html"><i class="fa fa-calendar"></i> Agenda </a></li>
                    <li><a href="http://localhost/astrajuri/producao/listaCliente.php"><i class="fa fa-users"></i> Clientes </a></li>
                    <li><a href="#.html"><i class="fa fa-folder"></i> Processos </a></li>
                    <li><a href="#.html"><i class="fa fa-user"></i> Usuários </a></li>
                    <li><a href="#.html"><i class="fa fa-money"></i> Despesas Fixas </a></li>

                    <li><a><i class="fa fa-bar-chart-o"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                    <li><a href="chartjs.html">Chart JS</a></li>
                                    <li><a href="chartjs2.html">Chart JS2</a></li>
                                    <li><a href="morisjs.html">Moris JS</a></li>
                                    <li><a href="echarts.html">ECharts</a></li>
                                    <li><a href="other_charts.html">Other Charts</a></li>
                            </ul>
                    </li>
                  
                </ul>
              </div>
            
            </div>
            <!-- /MENU LATERAL -->

            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Configrações">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>

              <a data-toggle="tooltip" data-placement="top" title="Sair" href="http://localhost/astrajuri/producao/sair.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>

          </div>
        </div>


        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?= HOME; ?>/assets/images/img.jpg" alt="">Usuário
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">

                        <span>Configurações</span>
                      </a>
                    </li>

                    <li><a href="http://localhost/astrajuri/producao/sair.php"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>

    <div>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    </div>

</body>
</html>