<?php
//require __DIR__ . '/../index.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar de sesión | USI</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="/src/assets/media/image/usi-image_icon.png">
    <link rel="stylesheet" href="/src/css/bootstrap.min.css">
    <link rel="stylesheet" href="/src/css/font-awesome.min.css">
    <link rel="stylesheet" href="/src/css/ionicons.min.css">
    <link rel="stylesheet" href="/src/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/src/css/blue.css">
    <link rel="stylesheet" href="/src/css/transition.css">
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body id="fade" class="hold-transition login-page img-transition">
    <div class="login-box" style="margin: 4% auto; margin-bottom: 0px; margin-top: 0px; padding-top: 5%;width: 330px;">
        <div class="login-logo"> <img src="/src/assets/img/usi-image.png" style="width: 125px; margin-bottom: 0px;"> </div>
        <div class="login-box-body" style="background: rgba(0, 0, 0, 0.7294);">
            <p class="login-box-msg" style="color: rgba(0, 197, 255, 0.8901);">Accede para iniciar sesión.</p>
            <form action="/login/signin' ?>" method="post">
                <input type="password" style="display: none;" name="password" autocomplete="new-password">
                <div class="form-group has-feedback" style="margin-bottom: 25px;">
                    <input type="email" class="form-control" name="email" placeholder="Email" style="background-color: #0000008a; color: #eee;">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback" style="margin-bottom: 25px;">
                    <input type="password" class="form-control" name="pass" placeholder="Password" style="background-color: #0000008a; color: #eee;">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row" style="margin-bottom: 15px;">
                    <div class="col-xs-7">
                        <div class="checkbox icheck">
                            <label style="color: #a8a8a8;">
                                <input name="chkb" type="checkbox"> Recuérdame </label>
                        </div>
                    </div>
                    <div class="col-xs-5">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
                    </div>
                </div>
            </form>
            <span style="font-weight: lighter; color: #fff">¿No eres miembro? <a href="/register" class="text-center" style="font-weight: normal;">Regístrate aquí</a>
            </span>
        </div>
        <div class="footer">
            <p id="author" style="font-size: 15px;"></p>
        </div>
    </div>
    <script src="/src/js/jquery.min.js"></script>
    <script src="/src/js/bootstrap.min.js"></script>
    <script src="/src/js/icheck.min.js"></script>
    <script>
        $(function() {
            $("input").iCheck({
                checkboxClass: "icheckbox_square-blue",
                radioClass: "iradio_square-blue",
                increaseArea: "20%"
            })
        })
    </script>
    <script type="text/javascript">
        var bgImageArray = [];
        bgImageArray[0] = "/src/assets/img/SPL60N.jpg", bgImageArray[1] = "/src/assets/img/D48DW1.jpg", bgImageArray[2] = "/src/assets/img/GRSD56.jpg";
        var random = Math.floor(3 * Math.random()) + 0;
        document.getElementById("fade").style.background = "url(" + bgImageArray[random] + ") no-repeat center center fixed", document.getElementById("fade").style.backgroundSize = "cover";
        var opacity = 0,
            intervalID = 0;

        function fadeOut() {
            intervalID = setInterval(hide, 20)
        }

        function fadeIn() {
            intervalID = setInterval(show, 20)
        }

        function show() {
            var e = document.getElementById("fade");
            (opacity = Number(window.getComputedStyle(e).getPropertyValue("opacity"))) < 1 ? (opacity += .1, e.style.opacity = opacity, console.log(opacity)) : clearInterval(intervalID)
        }

        function hide() {
            var e = document.getElementById("fade");
            (opacity = Number(window.getComputedStyle(e).getPropertyValue("opacity"))) > 0 ? (opacity -= .1, e.style.opacity = opacity, console.log(opacity)) : clearInterval(intervalID)
        }
    </script>
</body>

</html>