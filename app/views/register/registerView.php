<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="src/css/blue.css">
  <!-- transition -->
  <link rel="stylesheet" href="src/css/transition.css">
  <!-- main-reg -->
  <link rel="stylesheet" href="src/css/main-reg.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
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
  </style>

</head>

<body id="fade" class="hold-transition register-page img-transition">

  <div class="register-logo logo-reg">
    <img src="src/assets/img/usi-image2.png" class="image-f">
    <img src="src/assets/img/usi-image.png" class="image-m">
  </div>

  <div class="register-box" style="margin: 0% 5%;">

    <div class="register-box-body" style="background: #000000ba;">
      <p class="login-box-msg" style="color: #00c5ffe3;">Registrar una nueva cuenta</p>

      <form>
        <div class="col-sm-5 form-group has-feedback" style="padding-left: 0px; padding-right: 0px;">
          <input id="nm" type="text" class="form-control phone-style-text" placeholder="Nombre">
          <span class="glyphicon glyphicon-user form-control-feedback phone-style-icon"></span>
        </div>
        <div class="col-sm-7 form-group has-feedback phone-style" style="padding-right: 0px;">
          <input id="pl" type="text" class="form-control" placeholder="Apellidos">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="col-sm-12 form-group has-feedback" style="padding-left: 0px; padding-right: 0px;">
          <input id="ml" type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="col-sm-12 form-group has-feedback" style="padding-left: 0px; padding-right: 0px;">
          <input id="ps" type="password" class="form-control" placeholder="Contraseña">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="col-sm-12 form-group has-feedback" style="padding-left: 0px; padding-right: 0px;">
          <input id="psr" type="password" class="form-control" placeholder="Repetir contraseña">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-7">
            <div class="checkbox icheck">
              <label>
                <input id="at" type="checkbox"> Aceptar los <a href="#">términos</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-5">
            <button id="reg" type="button" class="btn btn-primary btn-block btn-flat" style="text-align: center; text-align: -webkit-center;">Registrar
              <div id="spinner-load" style="display: contents;"></div>
            </button>

          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Registrarse usando Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus" style="font-size: 1.3em;"></i> Registrarse usando Google+</a>
      </div>

      <a href="login" class="text-center">Ya tengo una cuenta</a>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery 3 -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!-- <script src="src/js/jquery.min.js"></script> -->
  <!-- Bootstrap 3.3.7 -->
  <script src="src/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="src/js/icheck.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
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
    bgImageArray[0] = "src/assets/img/ADPS55.jpg";
    bgImageArray[1] = "src/assets/img/D48DW1.jpg";
    bgImageArray[2] = "src/assets/img/GRSD56.jpg";

    var random = Math.floor(Math.random() * (2 - 0 + 1)) + 0;

    document.getElementById("fade").style.background = "url(" + bgImageArray[random] + ") no-repeat center center fixed";
    document.getElementById("fade").style.backgroundSize = "cover";

    /* setTimeout(function() {
    
      // var bgImageArray = ["src/assets/img/ADPS55.jpg", "src/assets/img/.jpg", "src/assets/img/.jpg"],
      base = ;
      secs = 7;
      
      bgImageArray.forEach(function(img){
        new Image().src = base + img; 
        // caches images, avoiding white flash between background replacements
      });

      function backgroundSequence() {
        window.clearTimeout();
        var k = 0;
        for (i = 0; i < bgImageArray.length; i++) {
          setTimeout(function(){ 
            document.getElementById("fade").style.background = "url(" + base + bgImageArray[k] + ") no-repeat center center fixed";
            document.getElementById("fade").style.backgroundSize ="cover";
            document.getElementById("fade").style.transition ="all 2s";
          if ((k + 1) === bgImageArray.length) { setTimeout(function() { backgroundSequence() }, (secs * 1000))} else { k++; }			
          }, (secs * 1000) * i)	
        }
      }
      backgroundSequence();

      }, 7000); */
  </script>
  <script>
    $("#reg").click(function() {

      var firstName = $('#nm').val();
      var lastName = $('#pl').val();
      var correo = $('#ml').val();
      var clave = $('#ps').val();
      var rclave = $('#psr').val();

      if (firstName == "") {
        swal("Atención!", "Debe ingresar su nombre", "warning");
        return;
      }

      if (lastName == "") {
        swal("Atención!", "Debe ingresar sus apellidos", "warning");
        return;
      }

      if (correo == '' || !validateEmail(correo)) {
        swal("Atención!", "Debe ingresar un email válido", "warning");
        return;
      }

      if (clave == "") {
        swal("Atención!", "Debe ingresar su contraseña", "warning");
        return;
      }

      if (clave.length < 5) {
        swal("Atención!", "Debe ingresar un password mayor a 5 carácteres", "warning");
        return;
      }

      if (rclave == "") {
        swal("Atención!", "Debe ingresar su contraseña de confirmación", "warning");
        return;
      }

      if (clave != rclave) {
        swal("Atención!", "La contraseña y la confirmación no coinciden", "warning");
        return;
      }

      var data = new FormData();

      data.append("firstName", firstName);
      data.append("lastName", lastName);
      data.append("correo", correo);
      data.append("clave", clave);

      $.ajax({
        beforeSend: function() {
          $("#spinner-load").append("<span id='spinner-load2' class='fa fa-spinner fa-spin' style='width: 14px; height: 14px; margin: 10px 5px;'></span>");
          $("#btnsln").attr("disabled", true);
        },
        url: "<?= FOLDER_PATH ?>/register/checkin/",
        type: "POST",
        data: data,
        contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
        processData: false, // NEEDED, DON'T OMIT THIS
        success: function(resp) {
          $("#spinner-load2").remove();
          $("#btnsln").attr("disabled", false);
          /* $("#data_color-").style; */
          setTimeout(function() {
            location.href = "<?= FOLDER_PATH ?>/login/";
          }, 500);
        }
      })
    })

    function validateEmail(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(String(email).toLowerCase());
    }
  </script>
</body>

</html>