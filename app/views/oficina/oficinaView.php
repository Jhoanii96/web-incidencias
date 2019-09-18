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
					Facultad / Oficinas / Unidad
					<small>Administración</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?= FOLDER_PATH ?>/"><i class="fa fa-table"></i>Inicio</a></li>
					<li class="active">Oficina</li>
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

							<form role="form" autocomplete="off" enctype="multipart/form-data" action="#">
								<input type="text" style="display: none" name="token">
								<div class="box-body">
									<div class="col-md-6">
										<div class="form-group">
											<label>Nombre Facultad</label><!-- <span>&MediumSpace;&MediumSpace;<i class='fa fa-refresh fa-spin'></i></span> -->
											<div style="width:100%;display: inline-flex;">
												<select id="data-fct" class="form-control select2" data-show-content="true" style="width: 75%;" name="facultad_n">
													<option>Seleccionar</option>
													<?php
													while ($datosfacultad = $data['facultad']->fetch()) {
														echo '
																<option>' . $datosfacultad['facultad'] . '</option>
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
											<label>Nombre Oficina</label><span>&MediumSpace;&MediumSpace;<i id="refr-oficina" style="display: none;" class='fa fa-refresh fa-spin'></i></span>
											<div style="width:100%;display: inline-flex;">
												<select id="data-ofn" class="form-control select2" style="width: 75%;" name="oficina_n" disabled>
													<option>Seleccionar</option>
													<?php
													/* while ($datosoficina = $data['oficina']->fetch()) {
														echo '
																<option>' . $datosoficina['oficina'] . '</option>
															';
													} */
													?>
												</select>
												<button type="button" class="btn btn-default" data-toggle="modal" style="width: 25%;border-radius: 0%;" data-target="#modal-default2" id="btn-ofn" disabled>
													Agregar
												</button>
											</div>

										</div>
										<div class="form-group">
											<label>Nombre Unidad</label><span>&MediumSpace;&MediumSpace;<i id="refr-unidad" style="display: none;" class='fa fa-refresh fa-spin'></i></span>
											<div style="width:100%;display: inline-flex;">
												<select id="data-und" class="form-control select2" style="width: 75%;" name="unidad_n" disabled>
													<option>Seleccionar</option>
													<?php /* 
													while ($datosunidad = $data['unidad']->fetch()) {
														echo '
																<option>' . $datosunidad['unidad'] . '</option>
															';
													} */
													?>
												</select>
												<button type="button" class="btn btn-default" data-toggle="modal" style="width: 25%;border-radius: 0%; background-color: #001180; color: aliceblue;" data-target="#modal-default3" id="btn-und" disabled>
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
										<div class="modal-body">
											<div class="form-group">
												<label for="inputName" class="col-sm-2 control-label">Abreviatura:</label>

												<div class="col-sm-8" style="top: -9px;">
													<input type="text" class="form-control" placeholder="Ingresar nueva abreviatura.." pattern="[A-ZÁÉÍÓÚÑ ]+" id="abv" name="abv">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
											<button type="button" class="btn btn-primary" data-name-text="Añadiendo..." data-blank-text="" autocomplete="off" id="fcnadd">Añadir</button>
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
											<button type="button" class="btn btn-primary" data-name-text="Añadiendo..." data-blank-text="" autocomplete="off" id="undadd">Añadir</button>
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
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody id="data-table-unidad">

										<?php
										while ($datostunidad = $data['tunidad']->fetch()) {

											echo '
												<tr id="data-u_' . $datostunidad['num'] . '">
													<td>' . $datostunidad['facultad'] . '</td>	
													<td title="' . $datostunidad['oficina'] . '">' . $datostunidad['oficina'] . '</td>
													<td>' . $datostunidad['unidad'] . '</td>
													<td style="display: flex;">
														<a href="' . FOLDER_PATH . '/oficina/edit/' . $datostunidad['num'] . '" title="Editar" style="margin-right: 7px;">
															<button id="btn-edit" type="button" data-value-ofn="' . $datostunidad['num'] . '" class="btn btn-block btn-success">
																<span class="fa fa-pencil"></span>
															</button>
														</a>
														<form method="post">
															<input style="display: none" name="undn" value="' . $datostunidad['num'] . '">
															<button id="btndlt-' . $datostunidad['num'] . '" type="button" title="Eliminar" class="btn btn-block btn-danger" onclick="deleteUnid(' . $datostunidad['num'] . ')">
																<span class="fa fa-times"></span>
															</button>
														</form>
														<div id="spinner-dlt-' . $datostunidad['num'] . '"></div>
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

	<script src="<?= FOLDER_PATH . '/' ?>src/js/undk651223.js"></script>
	<!-- EVENTO DE CARGA DEL SELECT -->
	<script>
		$('#data-fct').on('change', function() {
			var nom_value = this.value;

			if (nom_value == "Seleccionar") {
				var tokn = "GJFHVF8";
				$('#data-ofn').load("<?php echo FOLDER_PATH ?>/oficina/ajax/ofc", {
					token: tokn,
					facultad_n: nom_value
				});
				$('#data-ofn').prop('disabled', true);
				$('#btn-ofn').prop('disabled', true);

				var tokn2 = "DMVJF99";
				$('#data-und').load("<?php echo FOLDER_PATH ?>/oficina/ajax/und", {
					token: tokn2,
					oficina_n: nom_value
				});
				$('#data-und').prop('disabled', true);
				$('#btn-und').prop('disabled', true);
			} else {
				var tokn = "GJFHVF8";

				$.ajax({
					beforeSend: function() {
						$("#data-ofn").attr("disabled", true);
						$("#data-und").prop("disabled", true);
						$("#btn-und").prop("disabled", true);
						$("#data-und").prepend('<option value="" selected>Seleccionar</option>');
						$("#data-und")[0].selectedIndex = 0;
						$("#data-ofn").prepend('<option value="" selected>Seleccionar</option>');
						$("#data-ofn")[0].selectedIndex = 0;
						$("#refr-oficina").css("display", "inline-table");
					},
					url: "<?php echo FOLDER_PATH ?>/oficina/ajax/ofc",
					type: "POST",
					data: {
						token: tokn,
						facultad_n: nom_value
					},
					success: function(data) {
						$('#data-ofn').html(data);
						$("#data-ofn").attr("disabled", false);
						$('#btn-ofn').prop('disabled', false);
						$("#refr-oficina").css("display", "none");
					}
				})
			}
		});
		$('#data-ofn').on('change', function() {
			var nom_value = this.value;
			var tokn = "DMVJF99";
			if (nom_value == "Seleccionar") {
				$('#data-und').prop('disabled', true);
				$("#data-und").prop("selectedIndex", 0);
				$('#btn-und').prop('disabled', true);
			} else {
				$.ajax({
					beforeSend: function() {
						$('#btn-und').prop('disabled', true);
						$("#data-und").prop("disabled", true);
						$("#refr-unidad").css("display", "inline-table");
					},
					url: "<?php echo FOLDER_PATH ?>/oficina/ajax/und",
					type: "POST",
					data: {
						token: tokn,
						oficina_n: nom_value
					},
					success: function(data) {
						$('#data-und').html(data);
						$("#data-und").prop("selectedIndex", 0);
						$("#data-und").attr("disabled", false);
						$('#btn-und').prop('disabled', false);
						$("#refr-unidad").css("display", "none");
					}
				})

			}
		});
	</script>

	<!-- EVENTO DE INSERCIONES -->
	<script>
		$('#ftadd').on('click', function() {
			var array_options = <?php echo json_encode($data['dataLink']); ?>;
			var nomb = $('#fct').val();
			var tokn = "DS4SAD5";
			var selectedfct = $("data-fct").children("option:selected").val();
			var selectedofn = $("data-ofn").children("option:selected").val();
			var selectedund = $("data-und").children("option:selected").val();

			$.ajax({
				beforeSend: function() {
					var btnadd = document.getElementById('ftadd');
					var text = btnadd.getAttribute('data-name-text');
					$("#ftadd").html('');
					$("#ftadd").append("<span id='spinner-fa' class='fa fa-spinner fa-spin'></span>&ThinSpace;&ThinSpace;" + text + "");
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
					$("#ftadd").attr("disabled", false);
					$("#fct").val('');
					// load facultad
					$('#data-fct').load("<?php echo FOLDER_PATH ?>/oficina/ajax/fct", {
						token: tokn
					});

				}
			})
		});
		$('#fcnadd').on('click', function() {
			var array_options = <?php echo json_encode($data['dataLink']); ?>;
			var nombofc = $('#fcn').val();
			var nombabv = $('#abv').val();
			var selectedfct = $("#data-fct").children("option:selected").val();
			var tokn = "GJFHVF8";
			var toks = "DS4SAD5";

			$.ajax({
				beforeSend: function() {
					var btnadd = document.getElementById('fcnadd');
					var text = btnadd.getAttribute('data-name-text');
					$("#fcnadd").html('');
					$("#fcnadd").append("<span id='spinner-of' class='fa fa-spinner fa-spin'></span>&ThinSpace;&ThinSpace;" + text + "");
					$("#fcnadd").attr("disabled", true);
				},
				url: array_options['add_o'],
				type: "POST",
				data: {
					fcn: nombofc,
					facultad_n: selectedfct,
					abv: nombabv,
					token: toks
				},
				success: function(resp) {
					$("#modal-default2").modal('hide');
					$("#spinner-of").remove();
					$("#fcnadd").html('Añadir');
					$("#fcnadd").attr("disabled", false);
					// load oficina
					$('#data-ofn').load("<?php echo FOLDER_PATH ?>/oficina/ajax/ofc", {
						token: tokn,
						facultad_n: selectedfct
					});

				}
			})
		});
		$('#undadd').on('click', function() {
			var array_options = <?php echo json_encode($data['dataLink']); ?>;
			var nomb = $('#ndd').val();
			var selectedofn = $("#data-ofn").children("option:selected").val();
			var toks = "DS4SAD5";
			var tokn = "DMVJF99";

			$.ajax({
				beforeSend: function() {
					var btnadd = document.getElementById('undadd');
					var text = btnadd.getAttribute('data-name-text');
					$("#undadd").html('');
					$("#undadd").append("<span id='spinner-un' class='fa fa-spinner fa-spin'></span>&ThinSpace;&ThinSpace;" + text + "");
					$("#undadd").attr("disabled", true);
				},
				url: array_options['add_u'],
				type: "POST",
				data: {
					ndd: nomb,
					oficina_n: selectedofn,
					token: toks
				},
				success: function(resp) {
					$("#modal-default3").modal('hide');
					$("#spinner-un").remove();
					$("#undadd").html('Añadir');
					$("#undadd").attr("disabled", false);
					// load unidad
					$('#data-und').load("<?php echo FOLDER_PATH ?>/oficina/ajax/und", {
						token: tokn,
						oficina_n: selectedofn
					});
					// load datatable
					$('#data-table-unidad').load("<?php echo FOLDER_PATH ?>/oficina/ajax/dtable", {});
				}
			})
		});

		function deleteUnid(numbUnid) {
			var array_options = <?php echo json_encode($data['dataLink']); ?>;
			var unidad_code = numbUnid;
			$.ajax({
				beforeSend: function() {
					$("#spinner-dlt-" + unidad_code).append("<span id='spinner-dlt2-'" + unidad_code + " class='fa fa-spinner fa-spin' style='width: 14px; height: 14px; margin: 10px 5px;'></span>");
					$("#btndlt-" + unidad_code).attr("disabled", true);
				},
				url: array_options['delete'],
				type: "POST",
				data: {
					undn: unidad_code
				},
				success: function(resp) {
					$("#spinner-dlt2-" + unidad_code).remove();
					$("#btndlt-" + unidad_code).attr("disabled", false);
					$("#data-u_" + unidad_code).remove();
				}
			})
		}
	</script>

</body>

</html>