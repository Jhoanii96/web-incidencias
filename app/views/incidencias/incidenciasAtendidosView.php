<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Incidencias atendidas | USI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?= FOLDER_PATH . '/' ?>src/assets/media/image/usi-image_icon.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/jquery-jvectormap.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <div class="wrapper">

    <!-- include head -->
    <?php require(ROOT . '/' . PATH_VIEWS . 'head_admin.php'); ?>
    <!-- include navbar -->
    <?php require(ROOT . '/' . PATH_VIEWS . 'rightnavigation_admin.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <?= $data['titulo'] ?>
        </h1>
        <h5>
          Control de incidencias
        </h5>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-table"></i> USI</a></li>
          <li class="active">Incidencias</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header" style="text-align: center;">
                <h3 class="box-title">TABLA DE SOLICITUDES DE SERVICIO</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-hover" style="font-size: 12px;">
                <thead>
                    <tr>
                      <th>Nro</th>
                      <th>Fecha reporte</th>
                      <th>Nombre solicitud</th>
                      <th>Tipo incidencia</th>
                      <th>Administrativo</th>
                      <th>Oficina</th>
                      <th>Estado</th>
                      <th>Detalle</th>
                      <th>Contador</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($datosTSolicitud = $data['tsolicitud']->fetch_assoc()) {

                      if ($datosTSolicitud['estado'] == '0') {
                        $estado = 'En espera';
                        $color = '#007a80';
                      } elseif ($datosTSolicitud['estado'] == '1') {
                        $estado = 'Atendido';
                        $color = '#1400d2';
                      } elseif ($datosTSolicitud['estado'] == '2') {
                        $estado = 'En observación';
                        $color = '#650080';
                      } elseif ($datosTSolicitud['estado'] == '3') {
                        $estado = 'Anulado';
                        $color = '#9e0707';
                      }

                      echo '
												<tr>
													<td>' . $datosTSolicitud['nums'] . '</td>	
													<td title="' . $datosTSolicitud['fecha'] . '">' . $datosTSolicitud['fecha'] . '</td>
													<td>' . $datosTSolicitud['nombre'] . '</td>
													<td>' . $datosTSolicitud['tipo'] . '</td>
													<td>' . $datosTSolicitud['usuario'] . '</td>
													<td>' . $datosTSolicitud['oficina'] . '</td>
                          <td><p align=\'center\' style="background-color: ' . $color . ';color: white;white-space: nowrap; padding: 0px 4px;">' . $estado . '</p></td>
                          <td><a href="' . FOLDER_PATH . '/detalle/' . $datosTSolicitud['nums'] . '" style="text-decoration: underline;color: #0020c5;">Ver detalle</a></td>
                          <td>3 min</td>
                          <td style="display: flex;">
														<form method="post" style="margin-right: 7px;">
															<input style="display: none" name="admi" value="' . $datosTSolicitud['nums'] . '">
															<button id="btndlt-' . $datosTSolicitud['nums'] . '" type="button" title="Incidencia solucionada" class="btn btn-block btn-success" style="padding: 2px 6px;" onclick="deleteAdm(' . $datosTSolicitud['nums'] . ')">
																<span class="fa fa-check"></span>
															</button>
														</form>
														<form method="post">
															<input style="display: none" name="admi" value="' . $datosTSolicitud['nums'] . '">
															<button id="btndlt-' . $datosTSolicitud['nums'] . '" type="button" title="Cancelar atención" class="btn btn-block btn-warning" style="padding: 2px 8px;" onclick="deleteAdm(' . $datosTSolicitud['nums'] . ')">
																<span class="fa fa-times"></span>
															</button>
														</form>
														<div id="spinner-dlt-' . $datosTSolicitud['nums'] . '"></div>
													</td>
													
												</tr>
											';
                    }
                    ?>

                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nro</th>
                      <th>Fecha reporte</th>
                      <th>Nombre solicitud</th>
                      <th>Tipo incidencia</th>
                      <th>Administrativo</th>
                      <th>Oficina</th>
                      <th>Estado</th>
                      <th>Detalle</th>
                      <th>Contador</th>
                      <th>Acciones</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->





      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
      reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Actividad reciente</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cumpleaños de Langdon</h4>

                  <p>Cumplirá 23 años el 24 de abril</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo actualizó su perfil</h4>

                  <p>Nuevo teléfono +1(800)555-1234</p>
                </div>
              </a>
            </li>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Alex creó una Incidencia</h4>

                  <p>Hace 3 minutos</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->
        </div>
        <!-- /.tab-pane -->

        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">Configuración general</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Mostrar cuando estás activo
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Otros usuarios pueden ver tu estado activo o tu estado en línea.
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Desactivar las notificaciones
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Apaga las notificaciones de windows y de la navegación.
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Eliminar el historial de incidencias
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>

              <p>
                ¡Advertencia! Borra todos los informes de incidencias.
              </p>
            </div>
            <!-- /.form-group -->

          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="src/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="src/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="src/js/jquery.dataTables.min.js"></script>
  <script src="src/js/dataTables.bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="src/js/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="src/dist/js/adminlte.min.js"></script>
  <!-- Sparkline -->
  <script src="src/js/jquery.sparkline.min.js"></script>
  <!-- jvectormap  -->
  <script src="src/js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="src/js/jquery-jvectormap-world-mill-en.js"></script>
  <!-- SlimScroll -->
  <script src="src/js/jquery.slimscroll.min.js"></script>
  <!-- ChartJS -->
  <script src="src/js/Chart.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="src/dist/js/demo.js"></script>

  <script>
    $(function() {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>
</body>

</html>