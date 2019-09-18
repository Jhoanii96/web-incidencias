<?php

while ($rowTecn = $data['dataTecn']->fetch()) {

	$iden = $rowTecn['id'];
	$nombre = $rowTecn['nombre'];
	$apellido = $rowTecn['apellido'];
	$dni = $rowTecn['dni'];
	$email = $rowTecn['email'];
	$clave = $rowTecn['clave'];
	$foto = $rowTecn['foto'];
	$dni = $rowTecn['dni'];
	$facultad = $rowTecn['facultad'];
	$oficina = $rowTecn['oficina'];
	$unidad = $rowTecn['unidad'];
	$celular = $rowTecn['celular'];
	$fecha = $rowTecn['fecha'];

	if ($rowTecn['ip'] != NULL || $rowTecn['ip'] != "") {
		$ip = $rowTecn['ip'];
	} else {
		$ip = '0.0.0.0';
	}
}
?>


<!DOCTYPE HTML5>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editar Administrador | USI</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shortcut icon" href="<?= FOLDER_PATH . '/' ?>src/assets/media/image/usi-image_icon.png">
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

	<style type="text/css">
		div.pull-left.info>a {
			line-height: normal !important;
		}

		.notifications-menu>a>i,
		.nav.navbar-nav>li>a>i {
			line-height: inherit !important;
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
					Administrativo: <?= $nombre ?>
				</h1>
				<ol class="breadcrumb">
					<li><a href="<?= FOLDER_PATH ?>/"><i class="fa fa-table"></i><a href="<?= FOLDER_PATH . '/' ?>">Inicio</a></li>
					<li style="color: #444;">Usuarios</li>
					<li><a href="<?= FOLDER_PATH ?>/usuarios?uq=2">Técnicos</a></li>
					<li class="active">Editar</li>
				</ol>
			</section>
			<br>
			<div class="col-md-12">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#adding" data-toggle="tab">Editar</a></li>
					</ul>
					<div class="tab-content">
						<div class="active tab-pane" id="adding">

							<form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="#">

								<input style="display:none" type="password" name="fakepasswordremembered" />
								<div class="form-group">
									<label for="inputName" class="col-sm-2 control-label">Nombres</label>

									<div class="col-sm-10">
										<input type="text" style="display: none" class="form-control" id="id" name="id" value="<?= $iden ?>">
										<input type="text" class="form-control" pattern="[A-Za-zÁÉÍÓÚñÑ ]+" value="<?= $nombre ?>" name="firstName" id="firstName">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Apellidos</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" pattern="[A-Za-zÁÉÍÓÚñÑ ]+" value="<?= $apellido ?>" name="lastName" id="lastName">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">E-Mail</label>

									<div class="col-sm-10">
										<input type="email" class="form-control" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?= $email ?>" name="correo" id="correo">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">DNI</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" value="<?= $dni ?>" name="dni" id="dni" maxlength="8">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Celular</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" pattern="[0-9 ]+" name="contact_point" value="<?= $celular ?>" id="contact_point" maxlength="15">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">F. Nacimiento</label>

									<div class="col-sm-10">
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" class="form-control pull-right" id="datepicker" name="date" value="<?= $fecha ?>">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Facultad</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="facultad_n" value="<?= $facultad ?>" id="data-fct" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label"><span><i id="refr-ofi" style="display: none;" class='fa fa-refresh fa-spin'></i></span>&MediumSpace;&MediumSpace;Oficina</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="oficina_n" value="<?= $oficina ?>" id="data-ofn" readonly>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label"><span><i id="refr-und" style="display: none;" class='fa fa-refresh fa-spin'></i></span>&MediumSpace;&MediumSpace;Unidad</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="unidad_n" value="<?= $unidad ?>" id="data-und" readonly>
									</div>
								</div>
								
								<div class="form-group">
									<label for="inputSkills" class="col-sm-2 control-label">Agregar imagen</label>

									<div class="col-sm-10">
										<input style="display: none" type="text" id="uploadFile" name="textImage" readonly />
										<input type="file" id="photoInputFile" name="image" accept="image/png,image/jpeg" style="margin-top: 4px;">
									</div>
								</div>
								<?php
								if ($foto != "/src/assets/media/image/perfil/avatar.png") {
									echo "<div class=\"form-group\">
									<div class=\"col-sm-2\"></div>
										<div class=\"col-sm-10\" style=\"text-align: center; width: 300px;\">
											<img id=\"imgg\" height=\"200px\" src=" . FOLDER_PATH . $foto . " alt=\"your image\" />
										</div>
									</div>";
								} else {
									echo "<div class=\"form-group\">
									<div class=\"col-sm-2\"></div>
										<div class=\"col-sm-10\" style=\"text-align: center; width: 300px;\">
											<img id=\"imgg\" height=\"200px\" src=\"" . FOLDER_PATH . "/src/assets/media/image/perfil/avatar.png\"/>
										</div>
									</div>";
								}
								?>
								<div class="form-group">
									<label class="col-sm-2 control-label">Contraseña</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" name="password" id="password" value="<?= $clave ?>" />
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="button" data-name-text="Actualizando..." class="btn btn-success" name="update" value="true" id="admedt" >
											Actualizar
										</button>
									</div>
								</div>
							</form>

						</div>
						
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
			<!-- /.col -->

		</div>
		<!-- /.content-wrapper -->

		<?php require(ROOT . '/' . PATH_VIEWS . 'aside_control.php'); ?>

	</div>
	<!-- ./wrapper -->

	<!-- JQUERY -->
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>

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
			$('#datepicker').datepicker({
				autoclose: true,
				format: 'yyyy-mm-dd'
			})
		})
	</script>
	<script>
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function(e) {
					$('#imgg')
						.attr('src', e.target.result);
				};

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#photoInputFile").change(function() {
			readURL(this);
		});
	</script>
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
						$("#refr-ofi").css("display", "inline-table");
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
						$("#refr-ofi").css("display", "none");
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
						$("#refr-und").css("display", "inline-table");
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
						$("#refr-und").css("display", "none");
					}
				})
				
			}
		});
	</script>
	<!-- EVENTO DE ACCIONES -->
	<script>
		$('#admedt').on('click', function() {
			var array_options = <?php echo json_encode($data['dataLink']); ?>;

			var idval = <?php echo $iden; ?>;
			var firstName = $('#firstName').val();
			var lastName = $('#lastName').val();
			var correo = $('#correo').val();
			var dni = $('#dni').val();
			var contact_point = $('#contact_point').val();
			var date = $('#datepicker').val();
			var textImage = $('#uploadFile').val();
			var data_ofn = $("#data-ofn").children("option:selected").val();
			var data_und = $("#data-und").children("option:selected").val();
			var update = $('#admedt').val();
			var password = $('#password').val();

			if (firstName == "") {
				swal("Atención!", "Debe ingresar su nombre", "warning");
				return;
			}
			if (lastName == "") {
				swal("Atención!", "Debe ingresar su apellido", "warning");
				return;
			}
			if (correo == "") {
				swal("Atención!", "Debe ingresar su correo", "warning");
				return;
			}
			if (dni == "") {
				swal("Atención!", "Debe ingresar su DNI", "warning");
				return;
			}
			if (contact_point == "") {
				swal("Atención!", "Debe ingresar su celular", "warning");
				return;
			}
			if (date == "") {
				swal("Atención!", "Debe ingresar su fecha de nacimiento", "warning");
				return;
			}
			if (data_fct == "Seleccionar") {
				swal("Atención!", "Debe seleccionar una facultad", "warning");
				return;
			}
			if (data_ofn == "Seleccionar") {
				swal("Atención!", "Debe seleccionar una oficina", "warning");
				return;
			}
			if (data_und == "Seleccionar") {
				swal("Atención!", "Debe seleccionar una unidad", "warning");
				return;
			}
			if (password == "") {
				swal("Atención!", "Debe ingresar una contraseña", "warning");
				return;
			}

			var data = new FormData();

			data.append("idv", idval);
			data.append("firstName", firstName);
			data.append("lastName", lastName);
			data.append("correo", correo);
			data.append("dni", dni);
			data.append("contact_point", contact_point);
			data.append("date", date);
			data.append("oficina_n", data_ofn);
			data.append("unidad_n", data_und);
			data.append("textImage", textImage);
			data.append("image", $('input[type=file]')[0].files[0]);
			data.append("password", password);
			data.append("update", update);
			
			$.ajax({
				beforeSend: function() {
					var btnadd = document.getElementById('admedt');
					var text = btnadd.getAttribute('data-name-text');
					$("#admedt").html('');
					$("#admedt").append("" + text + "&ThinSpace;&ThinSpace;<span id='spinner-ad' class='fa fa-spinner fa-spin'></span>");
					$("#admedt").attr("disabled", true);
				},
				url: array_options['modify_t'],
				type: "POST",
				data: data,
				contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
				processData: false, // NEEDED, DON'T OMIT THIS
				success: function(resp) {
					$("#spinner-ad").remove();
					$("#admedt").html('Actualizado');
					$("#admedt").attr("disabled", false);
					setTimeout(function() {
						location.href = "<?= FOLDER_PATH ?>/usuarios?uq=2";
					}, 500);
				}
			})
		});
	</script>
	<script>
		document.getElementById("photoInputFile").onchange = function() {
			document.getElementById("uploadFile").value = this.files[0].name;
		};
	</script>
</body>

</html>