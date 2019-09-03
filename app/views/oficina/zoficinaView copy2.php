<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="<?= FOLDER_PATH . '/' ?>src/assets/media/image/usi-image_icon.png">
	<title>Facultad / Oficinas / Unidad | USI</title>
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/ionicons.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/select2.min.css">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/bootstrap-datepicker.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/AdminLTE.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/dataTables.bootstrap.min.css">

	<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="src/css/_all-skins.min.css">
	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<style>
		.example-modal .modal {
			position: relative;
			top: auto;
			bottom: auto;
			right: auto;
			left: auto;
			display: block;
			z-index: 1;
		}

		.example-modal .modal {
			background: transparent !important;
		}
	</style>

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
					Facultad / Oficinas / Unidad
					<small>Administración</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-newspaper-o"></i><a href="<?= FOLDER_PATH . '/' ?>">
								Inicio</a></a>
					</li>
					<li class="active">Unidad</a></li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<!-- left column -->
					<!-- general form elements -->
					<div class="col-md-12">

						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Agregar Facultad, Oficinas y Unidades</h3>
								<!-- <div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
								</div> -->
							</div>
							<!-- /.box-header -->
							<!-- form start -->

							<form role="form" autocomplete="off" enctype="multipart/form-data" action="admin/news/save">
								<div class="box-body">
									<div class="col-md-6">
										<div class="form-group">
											<label>Nombre Facultad</label>
											<div style="width:100%;display: inline-flex;">
												<select id="data-fct" class="form-control select2" style="width: 75%;">
													<?php
													while ($datosfacultad = $data['facultad']->fetch_assoc()) {
														echo '
																<option>' . $datosfacultad['facultad'] . '</option>
															';
													}
													?>
													<!-- <option selected="selected">Alabama</option> -->
												</select>
												<button type="button" class="btn btn-default" data-toggle="modal" style="width: 25%;border-radius: 0%;" data-target="#modal-default">
													Agregar
												</button>
											</div>

										</div>
										<div class="form-group">
											<label>Nombre Oficina</label>
											<div style="width:100%;display: inline-flex;">
												<select class="form-control select2" style="width: 75%;">
													<?php
													while ($datosoficina = $data['oficina']->fetch_assoc()) {
														echo '
																<option>' . $datosoficina['oficina'] . '</option>
															';
													}
													?>
												</select>
												<button type="button" class="btn btn-default" data-toggle="modal" style="width: 25%;border-radius: 0%;" data-target="#modal-default2">
													Agregar
												</button>
											</div>

										</div>
										<div class="form-group">
											<label>Nombre Unidad</label>
											<div style="width:100%;display: inline-flex;">
												<select class="form-control select2" style="width: 75%;">
													<?php
													while ($datosunidad = $data['unidad']->fetch_assoc()) {
														echo '
																<option>' . $datosunidad['unidad'] . '</option>
															';
													}
													?>
												</select>
												<button type="button" class="btn btn-default" data-toggle="modal" style="width: 25%;border-radius: 0%;" data-target="#modal-default3">
													Agregar
												</button>
											</div>

										</div>
									</div>
								</div>
								<!-- /.box-body -->
							</form>
							<div class="modal fade" id="modal-default">
								<div class="modal-dialog">
									<div class="modal-content">
										<form action="javascript:void(0)" method="POST" autocomplete="off">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Añadir Facultad</h4>
											</div>
											<div class="modal-body">
												<div class="form-group">
													<label for="inputName" class="col-sm-2 control-label">Nombre:</label>

													<div class="col-sm-8" style="top: -9px;">
														<input type="text" class="form-control" placeholder="Ingresar nueva facultad.." pattern="[A-Za-zÁÉÍÓÚñÑ ]+" id="fct" name="fct">
														<input type="text" style="display: none" name="token">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
												<button type="button" class="btn btn-primary" data-name-text="Añadiendo..." data-blank-text="" autocomplete="off" id="ftadd">Añadir</button>
											</div>
										</form>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->
							<div class="modal fade" id="modal-default2">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Añadir Oficina</h4>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="inputName" class="col-sm-2 control-label">Nombre:</label>

												<div class="col-sm-8" style="top: -9px;">
													<input type="text" class="form-control" placeholder="Ingresar nueva oficina.." pattern="[A-Za-zÁÉÍÓÚñÑ ]+" id="fcn" name="fcn">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
											<button type="button" class="btn btn-primary">Añadir</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->
							<div class="modal fade" id="modal-default3">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Añadir unidad</h4>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<label for="inputName" class="col-sm-2 control-label">Nombre:</label>

												<div class="col-sm-8" style="top: -9px;">
													<input type="text" class="form-control" placeholder="Ingresar nueva unidad.." pattern="[A-Za-zÁÉÍÓÚñÑ ]+" id="ndd" name="ndd">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
											<button type="button" class="btn btn-primary">Añadir</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->


							<div class="col-md-12" style="border-top: 1px solid #d2d2d2;"></div>


							<!-- /.box-header -->
							<div class="box-body">
								<table id="example1" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Facultad</th>
											<th>Oficina</th>
											<th>Unidad</th>
											<th>Editar</th>
											<th>Borrar</th>
										</tr>
									</thead>
									<tbody>

										<?php
										while ($datostunidad = $data['tunidad']->fetch_assoc()) {

											echo '
												<tr>
													<td>' . $datostunidad['facultad'] . '</td>	
													<td title="' . $datostunidad['oficina'] . '">' . $datostunidad['oficina'] . '</td>
													<td>' . $datostunidad['unidad'] . '</td>
													<td class="button" align=\'center\'>
														<a href="#">
															<button type="button" class="btn btn-block btn-success">Editar</button>
														</a>
													</td>
													<td class="button" align=\'center\'>
														<form><button type="button" class="btn btn-block btn-danger">Eliminar</button></form>
													</td>
												</tr>
											';
										}
										?>
									</tbody>
									<tfoot>
										<tr>
											<th>Facultad</th>
											<th>Oficina</th>
											<th>Unidad</th>
											<th>Editar</th>
											<th>Borrar</th>
										</tr>
									</tfoot>
								</table>
							</div>
							<!-- /.box-body -->

						</div>

						<!-- /.box -->
					</div>
					<!--/.col (left) -->

				</div>
				<!-- /.row -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<?php require(ROOT . '/' . PATH_VIEWS . 'aside_control.php'); ?>

	</div>
	<!-- ./wrapper -->

	<!-- jQuery 3 -->
	<script src="<?= FOLDER_PATH . '/' ?>src/js/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?= FOLDER_PATH . '/' ?>src/js/bootstrap.min.js"></script>
	<!-- Select2 -->
	<script src="<?= FOLDER_PATH . '/' ?>src/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="<?= FOLDER_PATH . '/' ?>src/js/jquery.dataTables.min.js"></script>
	<script src="<?= FOLDER_PATH . '/' ?>src/js/dataTables.bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="<?= FOLDER_PATH . '/' ?>src/js/fastclick.js"></script>
	<!-- bootstrap datepicker -->
	<script src="<?= FOLDER_PATH . '/' ?>src/js/bootstrap-datepicker.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= FOLDER_PATH . '/' ?>src/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= FOLDER_PATH . '/' ?>src/js/demo.js"></script>

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
			//Initialize Select2 Elements
			$('.select2').select2()
		})
	</script>

	<script>
		$('#ftadd').on('click', function() {
			/* $('#ftadd').css('left','300px') */
			var array_options = <?php echo json_encode($data['dataLink']); ?>;
			var nomb = $('#fct').val();
			var tokn = "DS4SAD5";

			$.ajax({
				beforeSend: function() {
					var btnadd = document.getElementById('ftadd');
					var text = btnadd.getAttribute('data-name-text');
					$("#ftadd").html('');
					$("#ftadd").append("<span id='spinner-fa' class='fa fa-spinner fa-spin'></span>&ThinSpace;&ThinSpace;" + text + "");
					/* &ThinSpace;Loading... */
					/* var plant = document.getElementById('strawberry-plant');
					var fruitCount = plant.getAttribute('data-fruit'); */ // fruitCount = '12'
					$("#ftadd").attr("disabled", true);
				},
				url: array_options['add_f'],
				type: "POST",
				data: {
					fct: nomb,
					token: tokn
				},
				success: function(resp) {
					$("#modal-default").modal('hide');
					$("#spinner-fa").remove();
					$("#ftadd").html('Añadir');
					/* $("#modal-default").removeClass('in');
					$("#modal-default").removeAttr('style');
					$('#modal-default').css('display','none'); */
					$("#ftadd").attr("disabled", false);
					/* $("div[class='modal-backdrop fade in']").remove(); */
					/* 
					$("body").removeClass('modal-open');
					$("body").removeAttr('style');
					$('body').css('height','auto');
					$('body').css('min-height','100%'); */
					$("#fct").val('');
					$('#data-fct').load("<?php echo FOLDER_PATH ?>/oficina/ajax/fct", {
						token: tokn
					});
				}
			})
		});
		$('#ftadd222').on('click', function() {
			/* $('#ftadd').css('left','300px') */
			var array_options = <?php echo json_encode($data['dataLink']); ?>;
			var nomb = $('#fct').val();
			var tokn = "DS4SAD5";

			$.ajax({
				beforeSend: function() {
					var btnadd = document.getElementById('ftadd');
					var text = btnadd.getAttribute('data-name-text');
					$("#ftadd").html('');
					$("#ftadd").append("<span id='spinner-fa' class='fa fa-spinner fa-spin'></span>&ThinSpace;&ThinSpace;" + text + "");
					/* &ThinSpace;Loading... */
					/* var plant = document.getElementById('strawberry-plant');
					var fruitCount = plant.getAttribute('data-fruit'); */ // fruitCount = '12'
					$("#ftadd").attr("disabled", true);
				},
				url: array_options['add_f'],
				type: "POST",
				data: {
					fct: nomb,
					token: tokn
				},
				success: function(resp) {
					$("#modal-default").modal('hide');
					$("#spinner-fa").remove();
					$("#ftadd").html('Añadir');
					/* $("#modal-default").removeClass('in');
					$("#modal-default").removeAttr('style');
					$('#modal-default').css('display','none'); */
					$("#ftadd").attr("disabled", false);
					/* $("div[class='modal-backdrop fade in']").remove(); */
					/* 
					$("body").removeClass('modal-open');
					$("body").removeAttr('style');
					$('body').css('height','auto');
					$('body').css('min-height','100%'); */
					
				}
			})
		});
	</script>

</body>

</html>