<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrar cuenta | USI</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?= FOLDER_PATH . '/' ?>src/assets/media/image/usi-image_icon.png">
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/ionicons.min.css">
    <link rel="stylesheet" href="src/css/AdminLTE.min.css">
    <link rel="stylesheet" href="src/css/blue.css">
    <link rel="stylesheet" href="src/css/transition.css">
    <link rel="stylesheet" href="src/css/main-reg.css">
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> <?php $dsrldr = 'Desarrollador';
                                                                                                                                            $nm = 'Jhon';
                                                                                                                                            $pldp = 'Alvarado';
                                                                                                                                            $pldm = 'Achata'; ?> <style>
        #fade>div.swal2-container.swal2-center.swal2-fade.swal2-shown>div {
            border-radius: 0%;
        }

        #swal2-content {
            font-size: 14px;
        }

        #fade>div.swal2-container.swal2-center.swal2-fade.swal2-shown>div>div.swal2-actions>button.swal2-confirm.swal2-styled {
            border-radius: 1px;
        }

        .swal2-icon.swal2-warning {
            border-color: #ad1457 !important;
            color: #ad1457 !important;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body id="fade" class="hold-transition register-page img-transition">
    <div class="register-logo logo-reg" style="display: block;"> 
        <img src="src/assets/img/usi-image2.png" class="image-f"> 
        <img src="src/assets/img/usi-image.png" class="image-m"> 
    </div>
    <div class="register-box" style="margin: 0% 5%;">
        <div class="register-box-body" style="background: #000000ba;">
            <p class="login-box-msg" style="color: #00c5ffe3;">Registrar una nueva cuenta</p>
            <form style="margin-bottom: 10px;"> <input type="password" style="display: none;" name="password" autocomplete="new-password">
                <div class="col-sm-5 form-group has-feedback" style="padding-left: 0px; padding-right: 0px;"> 
					<input id="nm" type="text" class="form-control phone-style-text" placeholder="Nombre"> 
					<span class="glyphicon glyphicon-user form-control-feedback phone-style-icon"></span> 
				</div>
				<div class="col-sm-7 form-group has-feedback phone-style" style="padding-right: 0px;"> 
					<input id="pl" type="text" class="form-control" placeholder="Apellidos"> 
					<span class="glyphicon glyphicon-user form-control-feedback"></span> 
				</div>
                <div class="col-sm-12 form-group has-feedback" style="padding-left: 0px; padding-right: 0px;"> <input id="ml" type="email" class="form-control" placeholder="Email"> <span class="glyphicon glyphicon-envelope form-control-feedback"></span> </div>
                <div class="col-sm-12 form-group has-feedback" style="padding-left: 0px; padding-right: 0px;"> <input id="ps" type="password" class="form-control" placeholder="Contraseña"> <span class="glyphicon glyphicon-lock form-control-feedback"></span> </div>
                <div class="col-sm-12 form-group has-feedback" style="padding-left: 0px; padding-right: 0px;"> <input id="psr" type="password" class="form-control" placeholder="Repetir contraseña"> <span class="glyphicon glyphicon-log-in form-control-feedback"></span> </div>
                <div class="row">
                    <div class="col-xs-7">
                        <div class="checkbox icheck"> <label> <input id="at" type="checkbox"> Aceptar los <a href="#">términos</a> </label> </div>
                    </div>
                    <div class="col-xs-5"> <button id="reg" type="button" class="btn btn-primary btn-block btn-flat" style="text-align: center; text-align: -webkit-center;">Registrar <div id="spinner-load" style="display: contents;"></div></button> </div>
                </div>
            </form><!-- <div class="social-auth-links text-center"> <p>- OR -</p><a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Registrarse usando Facebook</a> <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus" style="font-size: 1.3em;"></i> Registrarse usando Google+</a> </div>--> <a href="<?= FOLDER_PATH ?>/login" class="text-center">Ya tengo una cuenta</a>
        </div>
        <div class="footer">
            <p id="author" style="font-size: 15px;"></p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="src/js/bootstrap.min.js"></script>
    <script src="src/js/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
    <script>
        $(function() {
            $("input").iCheck({
                checkboxClass: "icheckbox_square-blue",
                radioClass: "iradio_square-blue",
                increaseArea: "20%"
            })
        }), $(function() {
            $("#author").html("<?= $dsrldr ?>: <?= $nm ?> <?= $pldp ?> <?= $pldm ?>")
        });
    </script>
    <script type="text/javascript">
        var bgImageArray = [];
        bgImageArray[0] = "src/assets/img/VFP4L9.jpg", bgImageArray[1] = "src/assets/img/D48DW1.jpg", bgImageArray[2] = "src/assets/img/GRSD56.jpg";
        var random = Math.floor(3 * Math.random()) + 0;
        document.getElementById("fade").style.background = "url(" + bgImageArray[random] + ") no-repeat center center fixed", document.getElementById("fade").style.backgroundSize = "cover";
    </script>
    <script>
        function validateEmail(e) {
            return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(e).toLowerCase())
        }
        $("#reg").click(function() {
            var e = $("#nm").val(),
                n = $("#pl").val(),
                a = $("#ml").val(),
                i = $("#ps").val(),
                s = $("#psr").val();
            if ("" != e)
                if ("" != n)
                    if ("" != a && validateEmail(a))
                        if ("" != i)
                            if (i.length < 5) swal("Atención!", "Debe ingresar un password mayor a 5 carácteres", "warning");
                            else if ("" != s)
                if (i == s) {
                    var r = new FormData;
                    r.append("firstName", e), r.append("lastName", n), r.append("correo", a), r.append("clave", i), $.ajax({
                        beforeSend: function() {
                            $("#spinner-load").append("<span id='spinner-load2' class='fa fa-spinner fa-spin' style='width: 14px; height: 14px; margin: 0px 5px;'></span>"), $("#btnsln").attr("disabled", !0)
                        },
                        url: "<?= FOLDER_PATH ?>/register/checkin/",
                        type: "POST",
                        data: r,
                        contentType: !1,
                        processData: !1,
                        success: function(e) {
                            $("#spinner-load2").remove(), $("#btnsln").attr("disabled", !1), setTimeout(function() {
                                location.href = "<?= FOLDER_PATH ?>/login/"
                            }, 500)
                        }
                    })
                } else swal("Atención!", "La contraseña y la confirmación no coinciden", "warning");
            else swal("Atención!", "Debe ingresar su contraseña de confirmación", "warning");
            else swal("Atención!", "Debe ingresar su contraseña", "warning");
            else swal("Atención!", "Debe ingresar un email válido", "warning");
            else swal("Atención!", "Debe ingresar sus apellidos", "warning");
            else swal("Atención!", "Debe ingresar su nombre", "warning")
        });
    </script>
</body>

</html>