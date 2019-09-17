<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Panel principal | USI</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shortcut icon" href="<?= FOLDER_PATH . '/' ?>src/assets/media/image/usi-image_icon.png">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="src/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="src/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="src/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="src/css/AdminLTE.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="src/css/dataTables.bootstrap.min.css">
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

	<style>
		#example1_wrapper>div:nth-child(2) {
			overflow-x: auto;
			border-right: none;
		}

		@media only screen and (min-width: 128px) and (max-width: 992px) {

			#example1_wrapper>div:nth-child(2) {
				overflow-x: auto;
				padding-right: 0px;
				margin-right: 0px;
				border-right: 1px solid #f4f4f4;
				padding-top: 0px;
				margin-top: 0px;
			}

		}
	</style>


</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<!-- include head -->
		<?php require(ROOT . '/' . PATH_VIEWS . 'headnavigation_user.php'); ?>

		<!-- Full Width Column -->
		<div class="content-wrapper">
			<div class="container">
				<!-- Content Header (Page header) -->
				<section class="content-header">
					<h1 align='center' style="padding-top: 30px; padding-bottom: 10px; font-size: 32px;">
						CONTROL DE INCIDENCIAS USI
					</h1>

					<h1 align='center' style="padding-left: 0px; padding-bottom: 20px; font-size: 20px;">
						<small>TODAS LAS INCIDENCIAS</small>
					</h1>
				</section>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-xs-12">
							<div class="box">
								<div class="box-header">
									<h3 class="box-title">Tabla de Incidencias</h3>
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
											</tr>
										</thead>
										<tbody>
											<?php
											while ($datosTSolicitud = $data['tsolicitud']->fetch()) {

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
												} elseif ($datosTSolicitud['estado'] == '4') {
													$estado = 'Solucionado';
													$color = '#00b704';
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
													<td><a href="' . FOLDER_PATH . '/mostrar/' . $datosTSolicitud['nums'] . '" style="text-decoration: underline;color: #0020c5;">Ver detalle</a></td>
													
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
			<!-- /.container -->
		</div>
		<!-- /.content-wrapper -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="src/js/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="src/js/bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="src/js/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="src/js/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="src/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="src/js/demo.js"></script>
	<!-- DataTables -->
	<script src="src/js/jquery.dataTables.min.js"></script>
	<script src="src/js/dataTables.bootstrap.min.js"></script>

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
			if (data.adm == <?= $data['id'] ?>) {
				$.ajax({
					url: "<?= FOLDER_PATH ?>/home/notificationsAdministrativo/",
					type: "POST",
					data: {
						cdAdm: <?= $data['id'] ?>
					},
					success: function(result) {
						$("#notifications").html(result);
					}
				});

				var audio = new Audio('<?= FOLDER_PATH ?>/src/assets/media/sound/notification.mp3');
				var promise = audio.play();
				if (promise) {
					//Older browsers may not return a promise, according to the MDN website
					promise.catch(function(error) {
						console.error(error);
					});
				}
			}
		});
	</script>
</body>

</html>