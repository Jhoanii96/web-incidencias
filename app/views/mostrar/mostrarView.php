<?php

while ($datosDetalle = $data['detalleSolicitud']->fetch_assoc()) {

    $id = $datosDetalle['idSolicitud'];
    $nom = $datosDetalle['nombre'];
    $inc = $datosDetalle['incidencia'];
    $cas = $datosDetalle['casos'];
    $usu = $datosDetalle['usuario'];
    $ofi = $datosDetalle['oficina'];
    $est = $datosDetalle['estado'];
    $fechar = $datosDetalle['fechar'];
    $fechaa = $datosDetalle['fechaa'];
    $fechap = $datosDetalle['fechap'];
    $descripcion = $datosDetalle['descripcion_atencion'];
    $detalle = $datosDetalle['detalle'];
    $recepcion = $datosDetalle['recibo'];
    

}




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agregar nueva incidencia | USI</title>
    <link rel="shortcut icon" href="<?= FOLDER_PATH . '/' ?>src/assets/media/image/usi-image_icon.png">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/ionicons.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/dataTables.bootstrap.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/blue.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/_all-skins.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= FOLDER_PATH . '/' ?>src/css/bootstrap3-wysihtml5.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        .main-header .navbar {
            margin-left: 0px;
        }

        .content-wrapper {
            margin-left: 0px;
            padding-left: 150px;
            padding-right: 150px;
        }

        @media (max-width: 767px) {
            .content-wrapper {
                padding-left: 0px;
                padding-right: 0px;
            }
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- include head -->
        <?php require(ROOT . '/' . PATH_VIEWS . 'headnavigation_user.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1 align='center' style="margin-top: 25px;margin-bottom: 25px;">
                    Unidad de Informática y Sistemas de Información
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <!-- left column -->
                    <!-- general form elements -->
                    <div class="col-md-12">

                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Detalles de la incidencia</h3>
                                <!-- <div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
								</div> -->
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->

                            <form role="form" autocomplete="off" enctype="multipart/form-data" action="<?= FOLDER_PATH ?>/admin/news/save">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nombre solicitud</label>
                                            <input type="text" class="form-control" placeholder="Ingrese nombre solicitud" maxlength="25" name="nombreSolicitud" id="nombSolicitud" value="<?= $nom ?>" autofocus>
                                        </div>
                                        <div class="form-group">
                                            <label>Incidencias</label>
                                            <div style="width:100%;display: inline-flex;">
                                                <select id="data-inc" class="form-control select2" style="width:100%;" name="incidencia_n" disabled>
                                                    <option>Seleccionar</option>
                                                    <option selected="selected"><?= $inc ?></option>
                                                    <?php
                                                    /* while ($datoscasos = $data['tipo_incidencia']->fetch_assoc()) {
                                                        if ($inc == $datoscasos['incidencia']) {
                                                            echo '
																<option selected="selected">' . $datoscasos['incidencia'] . '</option>
															';
                                                        } else {
                                                            echo '
                                                                <option>' . $datoscasos['incidencia'] . '</option>
                                                            ';  
                                                        }
                                                        
                                                    } */
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Casos</label>
                                            <div style="width:100%;display: inline-flex;">
                                                <select id="data-cas" class="form-control select2" style="width:100%;" name="casos_n" disabled>
                                                    <option>Seleccionar</option>
                                                    <option selected="selected"><?= $cas ?></option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Usuario administrativo</label>
                                            <input type="text" class="form-control" id="nombreUsuario" value="<?= $usu ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Oficina</label>
                                            <input type="text" class="form-control" id="nombreOficina" value="<?= $ofi ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input type="text" class="form-control" id="estado" value="<?= $est ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Fecha creación reporte</label>
                                            <input type="text" class="form-control" id="fechReporte" value="<?= $fechar ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Fecha atención reporte</label>
                                            <input type="text" class="form-control" id="fechAtencion" value="<?= $fechaa ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Fecha recepción reporte</label>
                                            <input type="text" class="form-control" id="fechAprob" value="<?= $fechap ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Descripción recepción</label>
                                            <input type="text" class="form-control" id="descripcion" value="<?= $descripcion ?>" disabled>
                                        </div>

                                    </div>
                                    <div class="box-body">
                                        <div class="col-md-12" style="padding-left: 5px;padding-right: 5px;">
                                            <div class="form-group">
                                                <label>Detalles</label>
                                                <div class="box-body pad" style="border: 1px solid #b9b9b9;">
                                                    <textarea id="editor1" name="editor1" rows="10" cols="80" style="height: 150px;" placeholder="Escriba los detalle aquí.">
                                                        <?= $detalle ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox icheck">
                                                    <label style="color: #000000;">
                                                        <input type="checkbox" name="chk" <?php if ($recepcion == '1') { echo 'checked'; } ?> >&ThinSpace;&ThinSpace;Al seleccionar estará aceptando a que los técnicos reciban su solicitud.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary" type="button" data-name-text="Actualizando..." style="margin-left: 15px; padding-left: 30px; padding-right: 30px;" id="slctupd">Actualizar solicitud</button>
                                    <button type="submit" class="btn btn-danger" type="button" data-name-text="Eliminando..." style="margin-left: 15px; padding-left: 30px; padding-right: 30px;" id="slctdel">Eliminar solicitud</button>
                                </div>
                                
                                <!-- /.box-footer -->
                            </form>



                            <div class="col-md-12" style="border-top: 1px solid #d2d2d2;"></div>

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


    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?= FOLDER_PATH ?>/src/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= FOLDER_PATH ?>/src/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="<?= FOLDER_PATH ?>/src/js/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="<?= FOLDER_PATH ?>/src/js/jquery.dataTables.min.js"></script>
    <script src="<?= FOLDER_PATH ?>/src/js/dataTables.bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= FOLDER_PATH ?>/src/js/fastclick.js"></script>
    <!-- bootstrap datepicker -->
    <script src="<?= FOLDER_PATH ?>/src/js/bootstrap-datepicker.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= FOLDER_PATH ?>/src/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= FOLDER_PATH ?>/src/js/demo.js"></script>
    <!-- iCheck -->
    <script src="<?= FOLDER_PATH ?>/src/js/icheck.min.js"></script>
    <!-- CK Editor -->
    <script src="<?= FOLDER_PATH ?>/src/js/ckeditor.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?= FOLDER_PATH ?>/src/js/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        $(function() {
            CKEDITOR.replace('editor1');
        })
    </script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>

    <script>
        $(function() {
            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            })
            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
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
    <!-- EVENTO DE CARGA DEL SELECT -->
    <script>
        $('#data-inc').on('change', function() {
            var nom_value = this.value;
            var tokn = "CDFMF5";
            $('#data-cas').load("<?php echo FOLDER_PATH ?>/tipo_incidencia/ajax/cas", {
                token: tokn,
                incidencia_n: nom_value
            });
            if (nom_value == "Seleccionar") {
                $('#data-cas').prop('disabled', true);
                $("#data-cas").prop("selectedIndex", 0);
                $('#btn-cas').prop('disabled', true);
            } else {
                $('#data-cas').prop('disabled', false);
                $("#data-cas").prop("selectedIndex", 0);
                $('#btn-cas').prop('disabled', false);
            }
        });
    </script>
    <script>
        $('#slctupd').on('click', function() {
            var array_options = <?php echo json_encode($data['dataLink']); ?>;

            var nombSolicitud = $('#nombSolicitud').val();
            var data_inc = $("#data-inc").children("option:selected").val();
            var data_cas = $("#data-cas").children("option:selected").val();
            var radioValue = $("input[name='chk']:checked").val();

            var editor = CKEDITOR.instances['editor1'].getData();
            var toks = "DS4SAD5";
            var tokn = "DMVJF99";
            
            var code = <?= $data['cod']; ?>;
            // file
            var data = new FormData();
            /* jQuery.each(jQuery('#photoInputFile')[0].files, function(i, file) {
            	data.append('file-'+i, file);
            }); */

            data.append("nomb", nombSolicitud);
            data.append("inc", data_inc);
            data.append("cas", data_cas);
            data.append("editr", editor);
            data.append("chk", radioValue);
            data.append("cod", code);
            data.append("token", toks);
            data.append("tokn", tokn);


            /* const xhr = new XMLHttpRequest();
            xhr.open("POST", array_options['add_a'], true);
            xhr.send(data); */

            $.ajax({
                beforeSend: function() {
                    var btnupd = document.getElementById('slctupd');
                    var text = btnupd.getAttribute('data-name-text');
                    $("#slctupd").html('');
                    $("#slctupd").append("<span id='spinner-up' class='fa fa-spinner fa-spin'></span>&ThinSpace;&ThinSpace;" + text + "");
                    $("#slctupd").attr("disabled", true);
                },
                url: array_options['modify_s'],
                type: "POST",
                data: data,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false, // NEEDED, DON'T OMIT THIS
                success: function(resp) {
                    $("#spinner-up").remove();
                    $("#slctupd").html('Solicitud actualizada');
                    $("#slctupd").attr("disabled", false);
                    setTimeout(function() {
                        location.href = "<?= FOLDER_PATH ?>/";
                    }, 500);
                }
            })
        });

        $('#slctdel').on('click', function() {
            var array_options = <?php echo json_encode($data['dataLink']); ?>;

            var idsolicitud = <?php echo $id; ?>;
            
            // file
            var data = new FormData();
            /* jQuery.each(jQuery('#photoInputFile')[0].files, function(i, file) {
            	data.append('file-'+i, file);
            }); */

            data.append("id", idsolicitud);


            /* const xhr = new XMLHttpRequest();
            xhr.open("POST", array_options['add_a'], true);
            xhr.send(data); */

            $.ajax({
                beforeSend: function() {
                    var btndel = document.getElementById('slctdel');
                    var text = btndel.getAttribute('data-name-text');
                    $("#slctdel").html('');
                    $("#slctdel").append("<span id='spinner-de' class='fa fa-spinner fa-spin'></span>&ThinSpace;&ThinSpace;" + text + "");
                    $("#slctdel").attr("disabled", true);
                },
                url: array_options['delete_s'],
                type: "POST",
                data: data,
                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                processData: false, // NEEDED, DON'T OMIT THIS
                success: function(resp) {
                    $("#spinner-de").remove();
                    $("#slctdel").html('Solicitud eliminada');
                    $("#slctdel").attr("disabled", false);
                    setTimeout(function() {
                        location.href = "<?= FOLDER_PATH ?>/";
                    }, 500);
                }
            })
        });
    </script>
</body>

</html>