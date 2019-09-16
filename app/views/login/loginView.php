<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Log in | USI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" href="<?= FOLDER_PATH ?>/src/assets/media/image/usi-image_icon.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= FOLDER_PATH ?>/src/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= FOLDER_PATH ?>/src/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= FOLDER_PATH ?>/src/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= FOLDER_PATH ?>/src/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= FOLDER_PATH ?>/src/css/blue.css">
  <!-- transition -->
  <link rel="stylesheet" href="<?= FOLDER_PATH ?>/src/css/transition.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body id="fade" class="hold-transition login-page img-transition">
  <div class="login-box" style="margin: 4% auto; margin-bottom: 0px; margin-top: 0px; padding-top: 5%;width: 330px;">
    <div class="login-logo">
      <!-- <a href="../../index2.html" style="color: #fff"><b>Admin</b>USI</a> -->
      <img src="<?= FOLDER_PATH ?>/src/assets/img/usi-image.png" style="width: 125px; margin-bottom: 0px;">
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body" style="background: rgba(0, 0, 0, 0.7294);">
      <p class="login-box-msg" style="color: rgba(0, 197, 255, 0.8901);">Accede para iniciar sesión.</p>

      <form action="<?= FOLDER_PATH . '/login/signin' ?>" method="post">
        <input type="password" style="display: none;" name="password" autocomplete="new-password">
        <div class="form-group has-feedback" style="margin-bottom: 25px;">
          <input type="email" class="form-control" name="email" placeholder="Email" style="background-color: #0000008a; color: #eee;" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback" style="margin-bottom: 25px;">
          <input type="password" class="form-control" name="pass" placeholder="Password" style="background-color: #0000008a; color: #eee;" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row" style="margin-bottom: 15px;">
          <div class="col-xs-7">
            <div class="checkbox icheck">
              <label style="color: #a8a8a8;">
                <input name="chkb" type="checkbox" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>> Recuérdame
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-5">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <span style="font-weight: lighter; color: #fff">¿No eres miembro? <a href="<?= FOLDER_PATH ?>/register" class="text-center" style="font-weight: normal;">Regístrate aquí</a></span>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="<?= FOLDER_PATH ?>/src/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= FOLDER_PATH ?>/src/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="<?= FOLDER_PATH ?>/src/js/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
  <script type="text/javascript">
    var bgImageArray = [];
    bgImageArray[0] = "<?= FOLDER_PATH ?>/src/assets/img/SPL60N.jpg";
    bgImageArray[1] = "<?= FOLDER_PATH ?>/src/assets/img/D48DW1.jpg";
    bgImageArray[2] = "<?= FOLDER_PATH ?>/src/assets/img/GRSD56.jpg";

    var random = Math.floor(Math.random() * (2 - 0 + 1)) + 0;

    document.getElementById("fade").style.background = "url(" + bgImageArray[random] + ") no-repeat center center fixed";
    document.getElementById("fade").style.backgroundSize = "cover";

    /* setTimeout(function() {

      // var bgImageArray = ["src/assets/img/ADPS55.jpg", "src/assets/img/.jpg", "src/assets/img/.jpg"],
      base = ;
      secs = 7;

      bgImageArray.forEach(function(img) {
        new Image().src = base + img;
        // caches images, avoiding white flash between background replacements
      });

      function backgroundSequence() {
        window.clearTimeout();
        var k = 0;
        for (i = 0; i < bgImageArray.length; i++) {
          setTimeout(function() {
            document.getElementById("fade").style.background = "url(" + base + bgImageArray[k] + ") no-repeat center center fixed";
            document.getElementById("fade").style.backgroundSize = "cover";
            
            fadeOut();
            document.getElementById("fade").style.transition ="all 2s";
            $("#fade").css("background", "url(" + base + bgImageArray[k] + ") no-repeat center center fixed");
            $("#fade").css("-webkit-transition", "all 1s cubic-bezier(0, 1, 0.5, 1)");
            if ((k + 1) === bgImageArray.length) {
              setTimeout(function() {
                backgroundSequence()
              }, (secs * 1000))
            } else {
              k++;
            }
          }, (secs * 1000) * i)
        }
      }
      backgroundSequence();

    }, 7000); */

    var opacity = 0;
    var intervalID = 0;

    function fadeOut() {
      intervalID = setInterval(hide, 20);
    }

    function fadeIn() {
      intervalID = setInterval(show, 20);
    }

    function show() {
      var img = document.getElementById("fade");
      opacity = Number(window.getComputedStyle(img).getPropertyValue("opacity"));
      if (opacity < 1) {
        opacity = opacity + 0.1;
        img.style.opacity = opacity;
        console.log(opacity);
      } else {
        clearInterval(intervalID);
      }
    }

    function hide() {
      var img = document.getElementById("fade");
      opacity = Number(window.getComputedStyle(img).getPropertyValue("opacity"));
      if (opacity > 0) {
        opacity = opacity - 0.1;
        img.style.opacity = opacity;
        console.log(opacity);
      } else {
        clearInterval(intervalID);
      }
    }
  </script>
</body>

</html>