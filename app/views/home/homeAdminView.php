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
                <span id="nlists" class="info-box-number">

                  <?php
                  while ($datoNumSolicitud = $data['NumSoli']->fetch_assoc()) {

                    echo $datoNumSolicitud['num_solicitud'];
                  }

                  ?>

                </span>
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
                <span class="info-box-number">

                  <?php
                  while ($datoNumLinea = $data['EnLinea']->fetch_assoc()) {

                    echo $datoNumLinea['num_oline'];
                  }

                  ?>


                </span>
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
                <span id="nusers" class="info-box-number">

                  <?php
                  while ($datoNumUsuario = $data['NumUsu']->fetch_assoc()) {

                    echo $datoNumUsuario['num_usuario'];
                  }

                  ?>

                </span>
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
                <span class="info-box-text" title="Nuevos Miembros(hoy)">Nuevos Miembros(hoy)</span>
                <span class="info-box-number">

                  <?php

                    while ($datoNuevoUsuario = $data['NueMiem']->fetch_assoc()) {

                      echo $datoNuevoUsuario['num_nuevo_usu'];

                    }

                  ?>

                </span>
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
                  <tbody id="tlist">
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
                          <td><p id="data_color-' . $datosTSolicitud['nums'] . '" align=\'center\' style="background-color: ' . $color . ';color: white;white-space: nowrap; padding: 0px 4px;">' . $estado . '</p></td>
                          <td><a href="' . FOLDER_PATH . '/detalle/' . $datosTSolicitud['nums'] . '" style="text-decoration: underline;color: #0020c5;">Ver detalle</a></td>
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
                                  <a href="#" title="Atender incidencia" style="margin-right: 7px;">
                                    <button id="btnatnd-' . $datosTSolicitud['nums'] . '" type="button" data-value="' . $datosTSolicitud['nums'] . '" class="btn btn-block btn-success" style="padding: 2px 6px;" onclick="AtendSolc(' . $datosTSolicitud['nums'] . ')">
                                      <span class="fa fa-check"></span>
                                    </button>
                                  </a>
                                  <form method="post" style="margin-right: 7px;">
                                    <input style="display: none" name="admi" value="' . $datosTSolicitud['nums'] . '">
                                    <button id="btnobs-' . $datosTSolicitud['nums'] . '" type="button" title="Poner en observación" class="btn btn-block btn-info" style="padding: 2px 6px;" onclick="ObservSolc(' . $datosTSolicitud['nums'] . ')">
                                      <span class="fa fa-eye"></span>
                                    </button>
                                  </form>
                                  <form method="post">
                                    <input style="display: none" name="admi" value="' . $datosTSolicitud['nums'] . '">
                                    <button id="btnanl-' . $datosTSolicitud['nums'] . '" type="button" title="Anular incidencia" class="btn btn-block btn-danger" style="padding: 2px 8px;" onclick="AnulSolc(' . $datosTSolicitud['nums'] . ')">
                                      <span class="fa fa-times"></span>
                                    </button>
                                  </form>
                                  <div id="spinner-aoa-' . $datosTSolicitud['nums'] . '"></div>
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

  <div id="jscrt"></div>

  <!-- jQuery 3 -->
  <script src="src/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="src/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
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

  <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('49adf0ba4a6c31a67467', {
      cluster: 'us2',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      if (data.home == 'user') {
        $.ajax({
          url: "<?= FOLDER_PATH ?>/home/user/",
          success: function(result) {
            $("#notifications").html(result);
          }
        });

        $.ajax({
          url: "<?= FOLDER_PATH ?>/home/nuser/",
          success: function(result) {
            $("#nusers").html(result);
          }
        });
        var audio = new Audio('<?= FOLDER_PATH ?>/src/assets/media/sound/notification.mp3');
        audio.play();
      }
      if (data.home == 'ticket') {
        
        $.ajax({
          url: "<?= FOLDER_PATH ?>/home/list/",
          success: function(result) {
            
            $("#jscrt").html(result);
            
          }
        });

        $.ajax({
          url: "<?= FOLDER_PATH ?>/home/nlist/",
          success: function(result) {
            $("#nlists").html(result); 
          }
        });
        var audio = new Audio('<?= FOLDER_PATH ?>/src/assets/media/sound/notification.mp3');
        audio.play();

      }

    });

  </script>

  <script>
    $(function() {
      $('#example1').DataTable({
        order: [0, 'desc']
      })
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


  <script>
    function AtendSolc(idSol) {
      var solicitud_code = idSol;
      $.ajax({
        beforeSend: function() {
          $("#spinner-aoa-" + solicitud_code).append("<span id='spinner-dlt2-'" + solicitud_code + " class='fa fa-spinner fa-spin' style='width: 14px; height: 14px; margin: 10px 5px;'></span>");
          $("#btnatnd-" + solicitud_code).attr("disabled", true);
        },
        url: "<?= FOLDER_PATH ?>/actions/attend/",
        type: "POST",
        data: {
          cdSlctd: solicitud_code
        },
        success: function(resp) {
          $("#spinner-aoa-" + solicitud_code).remove();
          $("#btnatnd-" + solicitud_code).attr("disabled", false);
          $("#data_color-" + solicitud_code).css("background-color", "#1400d2");
          $("#data_color-" + solicitud_code).html('Atendido');
          /* $("#data_color-" + solicitud_code).style; */
          setTimeout(function() {
            location.href = "<?= FOLDER_PATH ?>/";
          }, 500);
        }
      })
    }

    function ObservSolc(idSol) {
      var solicitud_code = idSol;
      $.ajax({
        beforeSend: function() {
          $("#spinner-aoa-" + solicitud_code).append("<span id='spinner-dlt2-'" + solicitud_code + " class='fa fa-spinner fa-spin' style='width: 14px; height: 14px; margin: 10px 5px;'></span>");
          $("#btnobs-" + solicitud_code).attr("disabled", true);
        },
        url: "<?= FOLDER_PATH ?>/actions/observation/",
        type: "POST",
        data: {
          cdSlctd: solicitud_code
        },
        success: function(resp) {
          $("#spinner-aoa-" + solicitud_code).remove();
          $("#btnobs-" + solicitud_code).attr("disabled", false);
          $("#data_color-" + solicitud_code).css("background-color", "#650080");
          $("#data_color-" + solicitud_code).html('En observación');
          /* $("#data_color-" + solicitud_code).style; */
          setTimeout(function() {
            location.href = "<?= FOLDER_PATH ?>/";
          }, 500);
        }
      })
    }

    function AnulSolc(idSol) {
      var solicitud_code = idSol;
      $.ajax({
        beforeSend: function() {
          $("#spinner-aoa-" + solicitud_code).append("<span id='spinner-dlt2-'" + solicitud_code + " class='fa fa-spinner fa-spin' style='width: 14px; height: 14px; margin: 10px 5px;'></span>");
          $("#btnanl-" + solicitud_code).attr("disabled", true);
        },
        url: "<?= FOLDER_PATH ?>/actions/annular/",
        type: "POST",
        data: {
          cdSlctd: solicitud_code
        },
        success: function(resp) {
          $("#spinner-aoa-" + solicitud_code).remove();
          $("#btnanl-" + solicitud_code).attr("disabled", false);
          $("#data_color-" + solicitud_code).css("background-color", "#9e0707");
          $("#data_color-" + solicitud_code).html('Anulado');
          /* $("#data_color-" + solicitud_code).style; */
          setTimeout(function() {
            location.href = "<?= FOLDER_PATH ?>/";
          }, 500);
        }
      })
    }
  </script>
</body>

</html>