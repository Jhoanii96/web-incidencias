<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="<?= FOLDER_PATH . '/' ?>src/assets/media/image/usi-image_icon.png">
	<title>Incidencias | USI</title>
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
	<link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/_all-skins.min.css">
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
					Administrar incidencias
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?= FOLDER_PATH ?>/"><i class="fa fa-table"></i>Inicio</a></li>
					<li class="active">Incidencias</li>
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
								<h3 class="box-title">Agregar incidencia</h3>
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
											<label>Incidencias</label>
											<div style="width:100%;display: inline-flex;">
												<select id="data-inc" class="form-control select2" style="width: 75%;" name="incidencia_n">
													<option selected="selected">Seleccionar</option>
													<?php
													while ($datoscasos = $data['tipo_incidencia']->fetch()) {
														echo '
																<option>' . $datoscasos['incidencia'] . '</option>
															';
													}
													?>
												</select>
												<button type="button" class="btn btn-default" data-toggle="modal" style="width: 25%;border-radius: 0%;" data-target="#modal-default">
													Agregar
												</button>
											</div>

										</div>
										<div class="form-group">
											<label>Casos</label><span>&MediumSpace;&MediumSpace;<i id="refr-cas" style="display: none;" class='fa fa-refresh fa-spin'></i></span>
											<div style="width:100%;display: inline-flex;">
												<select id="data-cas" class="form-control select2" style="width: 75%;" name="casos_n" disabled>
													<option selected="selected">Seleccionar</option>
												</select>
												<button type="button" class="btn btn-default" data-toggle="modal" style="width: 25%;border-radius: 0%;background-color: #001180; color: aliceblue;" data-target="#modal-default2" id="btn-cas" disabled>
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
												<h4 class="modal-title">Añadir tipo incidencia</h4>
											</div>
											<div class="modal-body">
												<div class="form-group">
													<label for="inputName" class="col-sm-2 control-label">Nombre:</label>

													<div class="col-sm-8" style="top: -9px;">
														<input type="text" class="form-control" placeholder="Ingresar nuevo tipo incidencia.." pattern="[A-Za-zÁÉÍÓÚñÑ ]+" id="inc" name="inc">
														<input type="text" style="display: none" name="token">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
												<button type="button" class="btn btn-primary" data-name-text="Añadiendo..." data-blank-text="" autocomplete="off" id="incadd">Añadir</button>
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
										<form action="javascript:void(0)" method="POST" autocomplete="off">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Añadir casos</h4>
											</div>
											<div class="modal-body">
												<div class="form-group">
													<label for="inputName" class="col-sm-2 control-label">Nombre:</label>

													<div class="col-sm-8" style="top: -9px;">
														<input type="text" class="form-control" placeholder="Ingresar nuevo caso.." pattern="[A-Za-zÁÉÍÓÚñÑ ]+" id="cas" name="cas">
														<input type="text" style="display: none" name="token">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
												<button type="button" class="btn btn-primary" data-name-text="Añadiendo..." data-blank-text="" autocomplete="off" id="casadd">Añadir</button>
											</div>
										</form>
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
											<th>Número</th>
											<th>Incidencia</th>
											<th>Caso de incidencia</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody id="data-table-casos">

										<?php
										while ($datostcasos = $data['tcasos']->fetch()) {

											echo '
												<tr id="data-c_' . $datostcasos['num'] . '">
													<td>' . $datostcasos['num'] . '</td>	
													<td title="' . $datostcasos['incidencia'] . '">' . $datostcasos['incidencia'] . '</td>
													<td title="' . $datostcasos['casos'] . '">' . $datostcasos['casos'] . '</td>
													<td style="display: flex;">
														<a href="' . FOLDER_PATH . '/tipo_incidencia/edit/' . $datostcasos['num'] . '" title="Editar" style="margin-right: 7px;">
															<button id="btn-edit" type="button" data-value-cas="' . $datostcasos['num'] . '" class="btn btn-block btn-success">
																<span class="fa fa-pencil"></span>
															</button>
														</a>
														<form method="post">
															<input style="display: none" name="casn" value="' . $datostcasos['num'] . '">
															<button id="btndlt-' . $datostcasos['num'] . '" type="button" title="Eliminar" class="btn btn-block btn-danger" onclick="deleteCasos(' . $datostcasos['num'] . ')">
																<span class="fa fa-times"></span>
															</button>
														</form>
														<div id="spinner-dlt-' . $datostcasos['num'] . '"></div>
													</td>
												</tr>
											';
										}
										?>
									</tbody>
									<tfoot>
										<tr>
											<th>Número</th>
											<th>Incidencia</th>
											<th>Caso de incidencia</th>
											<th>Acciones</th>
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

	<!-- EVENTO DE CARGA DEL SELECT -->
	<script>
		$('#data-inc').on('change', function() {
			var nom_value = this.value;
			var tokn = "CDFMF5";
			if (nom_value == "Seleccionar") {
				$('#data-cas').prop('disabled', true);
				$("#data-cas").prop("selectedIndex", 0);
				$('#btn-cas').prop('disabled', true);
			} else {
				$.ajax({
					beforeSend: function() {
						$("#data-cas").prop("disabled", true);
						$('#btn-cas').prop('disabled', true);
						$("#refr-cas").css("display", "inline-table");
					},
					url: "<?php echo FOLDER_PATH ?>/tipo_incidencia/ajax/cas",
					type: "POST",
					data: {
						token: tokn,
						incidencia_n: nom_value
					},
					success: function(data) {
						$('#data-cas').html(data);
						$("#data-cas").prop("selectedIndex", 0);
						$("#data-cas").attr("disabled", false);
						$('#btn-cas').prop('disabled', false);
						$("#refr-cas").css("display", "none");
					}
				})
			}
		});
	</script>

	<!-- EVENTO DE INSERCIONES -->
	<script>
		$('#incadd').on('click', function() {
			var array_options = <?php echo json_encode($data['dataLink']); ?>;
			var nomb = $('#inc').val();
			var tokn = "DS4SAD5";
			/* var selectedfct = $("data-fct").children("option:selected").val();
			var selectedofn = $("data-ofn").children("option:selected").val();
			var selectedund = $("data-und").children("option:selected").val(); */

			$.ajax({
				beforeSend: function() {
					var btnadd = document.getElementById('incadd');
					var text = btnadd.getAttribute('data-name-text');
					$("#incadd").html('');
					$("#incadd").append("<span id='spinner-ia' class='fa fa-spinner fa-spin'></span>&ThinSpace;&ThinSpace;" + text + "");
					$("#incadd").attr("disabled", true);
				},
				url: array_options['add_i'],
				type: "POST",
				data: {
					inc: nomb,
					token: tokn
				},
				success: function(resp) {
					$("#modal-default").modal('hide');
					$("#spinner-ia").remove();
					$("#incadd").html('Añadir');
					$("#incadd").attr("disabled", false);
					$("#inc").val('');
					// load facultad
					$('#data-inc').load("<?php echo FOLDER_PATH ?>/tipo_incidencia/ajax/inc", {
						token: tokn
					});

				}
			})
		});
		$('#casadd').on('click', function() {
			var array_options = <?php echo json_encode($data['dataLink']); ?>;
			var nomb = $('#cas').val();
			var selectedinc = $("#data-inc").children("option:selected").val();
			var toks = "DS4SAD5";
			var tokn = "CDFMF5";

			$.ajax({
				beforeSend: function() {
					var btnadd = document.getElementById('casadd');
					var text = btnadd.getAttribute('data-name-text');
					$("#casadd").html('');
					$("#casadd").append("<span id='spinner-ca' class='fa fa-spinner fa-spin'></span>&ThinSpace;&ThinSpace;" + text + "");
					$("#casadd").attr("disabled", true);
				},
				url: array_options['add_c'],
				type: "POST",
				data: {
					cas: nomb,
					incidencia_n: selectedinc,
					token: toks
				},
				success: function(resp) {
					$("#modal-default2").modal('hide');
					$("#spinner-ca").remove();
					$("#casadd").html('Añadir');
					$("#casadd").attr("disabled", false);
					$("#cas").val('');
					// load casos
					$('#data-cas').load("<?php echo FOLDER_PATH ?>/tipo_incidencia/ajax/cas", {
						token: tokn,
						incidencia_n: selectedinc
					});
					// load datatable
					$('#data-table-casos').load("<?php echo FOLDER_PATH ?>/tipo_incidencia/ajax/dtable", {});
				}
			})
		});

		function deleteCasos(numbCaso) {
			var array_options = <?php echo json_encode($data['dataLink']); ?>;
			var casos_code = numbCaso;
			$.ajax({
				beforeSend: function() {
					$("#spinner-dlt-" + casos_code).append("<span id='spinner-dlt2-'" + casos_code + " class='fa fa-spinner fa-spin' style='width: 14px; height: 14px; margin: 10px 5px;'></span>");
					$("#btndlt-" + casos_code).attr("disabled", true);
				},
				url: array_options['delete'],
				type: "POST",
				data: {
					casn: casos_code
				},
				success: function(resp) {
					$("#spinner-dlt2-" + casos_code).remove();
					$("#btndlt-" + casos_code).attr("disabled", false);
					$("#data-c_" + casos_code).remove();
				}
			})
		}
	</script>

</body>

</html>