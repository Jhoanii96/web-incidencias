<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrador USI | UNJBG</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?= FOLDER_PATH . '/' ?>src/assets/media/image/usi-image_icon.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="src/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="src/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="src/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="src/css/jquery-jvectormap.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="src/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="src/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="src/css/_all-skins.min.css">

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
          Informe de incidencias
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-table"></i> OSIS</a></li>
          <li class="active">Inicio</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="ion ion-ios-list-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pendientes</span>
                <span class="info-box-number">10</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="ion ion-ios-person-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">En línea</span>
                <span class="info-box-number">25</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Miembros</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="ion ion-ios-personadd-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Nuevos Miembros</span>
                <span class="info-box-number">45</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->




        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Tabla de Incidencias Pendientes</h3>
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
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($datosTSolicitud = $data['tsolicitud']->fetch_assoc()) {

                      if ($datosTSolicitud['usuario'] == 0) {
                        $estado = 'En espera';
                      } elseif ($datosTSolicitud['usuario'] == 1) {
                        $estado = 'Atendido';
                      } elseif ($datosTSolicitud['usuario'] == 2) {
                        $estado = 'En observación';
                      } elseif ($datosTSolicitud['usuario'] == 3) {
                        $estado = 'Anulado';
                      }

                      echo '
												<tr>
													<td>' . $datosTSolicitud['nums'] . '</td>	
													<td title="' . $datosTSolicitud['fecha'] . '">' . $datosTSolicitud['fecha'] . '</td>
													<td>' . $datosTSolicitud['nombre'] . '</td>
													<td>' . $datosTSolicitud['tipo'] . '</td>
													<td>' . $datosTSolicitud['usuario'] . '</td>
													<td>' . $datosTSolicitud['oficina'] . '</td>
                          <td><p align=\'center\' style="background-color: #007a80;color: white;">' . $estado . '</p></td>
                          <td><a href="' . FOLDER_PATH . '/mostrar/' . $datosTSolicitud['nums'] . '" style="text-decoration: underline;color: #0020c5;">Ver detalle</a></td>
                          ';
                          if ($data['tipouser'] == 'Super Administrador' || $data['tipouser'] == 'Administrador') {
                            echo '
                                <td style="display: flex;padding: 8px 34%;">
                                  <form method="post">
                                    <input style="display: none" name="admi" value="' . $datosTSolicitud['nums'] . '">
                                    <button id="btndlt-' . $datosTSolicitud['nums'] . '" type="button" title="Anular incidencia" class="btn btn-block btn-danger" style="padding: 2px 8px;" onclick="deleteAdm(' . $datosTSolicitud['nums'] . ')">
                                      <span class="fa fa-times"></span>
                                    </button>
                                  </form>
                                </td>
                              </tr>
                            ';
                          } elseif ($data['tipouser'] == 'Técnico') {
                            echo '
                                <td style="display: flex;">
                                  <a href="' . FOLDER_PATH . '/administrador/edit/' . $datosTSolicitud['nums'] . '" title="Atender incidencia" style="margin-right: 7px;">
                                    <button id="btn-edit" type="button" data-value="' . $datosTSolicitud['nums'] . '" class="btn btn-block btn-success" style="padding: 2px 6px;">
                                      <span class="fa fa-check"></span>
                                    </button>
                                  </a>
                                  <form method="post" style="margin-right: 7px;">
                                    <input style="display: none" name="admi" value="' . $datosTSolicitud['nums'] . '">
                                    <button id="btndlt-' . $datosTSolicitud['nums'] . '" type="button" title="Poner en observación" class="btn btn-block btn-info" style="padding: 2px 6px;" onclick="deleteAdm(' . $datosTSolicitud['nums'] . ')">
                                      <span class="fa fa-eye"></span>
                                    </button>
                                  </form>
                                  <form method="post">
                                    <input style="display: none" name="admi" value="' . $datosTSolicitud['nums'] . '">
                                    <button id="btndlt-' . $datosTSolicitud['nums'] . '" type="button" title="Anular incidencia" class="btn btn-block btn-danger" style="padding: 2px 8px;" onclick="deleteAdm(' . $datosTSolicitud['nums'] . ')">
                                      <span class="fa fa-times"></span>
                                    </button>
                                  </form>
                                  <div id="spinner-dlt-' . $datosTSolicitud['nums'] . '"></div>
                                </td>
                              </tr>
                            ';
                          }
                          
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

    <!-- Control Sidebar -->
    <?php require(ROOT . '/' . PATH_VIEWS . 'aside_control.php'); ?>
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