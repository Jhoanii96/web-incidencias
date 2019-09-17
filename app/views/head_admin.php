	<header class="main-header">

	  <!-- Logo -->
	  <a href="javascript:void(0)" class="logo">
	    <!-- mini logo for sidebar mini 50x50 pixels -->
	    <span class="logo-mini">USI</span>
	    <!-- logo for regular state and mobile devices -->
	    <span class="logo-lg"><b>Admin</b> USI</span>
	  </a>

	  <!-- Header Navbar: style can be found in header.less -->
	  <nav class="navbar navbar-static-top">
	    <!-- Sidebar toggle button-->
	    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	      <span class="sr-only">Toggle navigation</span>
	    </a>
	    <!-- Navbar Right Menu -->
	    <div class="navbar-custom-menu">
	      <ul class="nav navbar-nav">

	        <!-- Notifications: style can be found in dropdown.less -->
	        <li id="notifications" class="dropdown notifications-menu">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	            <i class="fa fa-bell-o"></i>
	          </a>
	          <ul class="dropdown-menu">
	            <li class="header">Notificaciones</li>
	            <li>
	              <!-- inner menu: contains the actual data -->
	              <ul class="menu">
	                <!-- <li>
	                  <a href="#" align='center'>
                      	No tiene notificaciones
	                  </a>
					</li> -->
					<?php
						while ($datoBellNotificacion = $data['BellNtf']->fetch()) {

							if ($datoBellNotificacion['tipo_n'] == 'Solicitud') {
								echo '
									<li>
										<a href="' . FOLDER_PATH . '/detalle/' . $datoBellNotificacion['idcod_n'] . '" target="_blank">
											<i class="fa fa-file text-green"></i> ' . $datoBellNotificacion['nombre_n'] . '
										</a>
									</li>
								';
							  } elseif ($datoBellNotificacion['tipo_n'] == 'Usuario') {
								echo '
									<li>
										<a href="' . FOLDER_PATH . '/usuarios/edit/admin/' . $datoBellNotificacion['idcod_n'] . '" target="_blank">
											<i class="fa fa-user text-aqua"></i> ' . $datoBellNotificacion['nombre_n'] . '
										</a>
									</li>
								';
							  }
									
						}
					?>
	              </ul>
	            </li>

	          </ul>
	        </li>

	        <!-- User Account: style can be found in dropdown.less -->
	        <li class="dropdown user user-menu">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	            <?php
              if ($data['foto'] != "/src/assets/media/image/perfil/") {
                echo "<img class=\"user-image\" src=" . FOLDER_PATH . $data['foto'] . " alt=\"User Image\">";
              } else {
                echo '<img class="user-image" src="' . FOLDER_PATH . '/src/assets/media/image/perfil/avatar-male3.png" alt="User Image">';
              }
              ?>
	            <span class="hidden-xs"><?= $data['nombre'] . ' ' . $data['apellido'] ?></span>
	          </a>
	          <ul class="dropdown-menu">
	            <!-- User image -->
	            <li class="user-header">
	              <?php
                if ($data['foto'] != "/src/assets/media/image/perfil/") {
                  echo "<img class=\"img-circle\" src=" . FOLDER_PATH . $data['foto'] . " alt=\"User Image\">";
                } else {
                  echo '<img class="img-circle" src="' . FOLDER_PATH . '/src/assets/media/image/perfil/avatar-male3.png" alt="User Image">';
                }
                ?>

	              <p>
	                <?= $data['nombre'] . ' ' . $data['apellido'] ?>
	                <small style="margin-top: 5px;font-size: 13px;"><?= $data['tipouser'] ?></small>
	              </p>
	            </li>
	            <!-- Menu Footer-->
	            <li class="user-footer">
	              <div class="pull-left">
	                <a href="<?= FOLDER_PATH . '/perfil' ?>" class="btn btn-default btn-flat">Perfil</a>
	              </div>
	              <div class="pull-right">
	                <a href="<?= FOLDER_PATH . '/login/salir' ?>" class="btn btn-default btn-flat">Salir</a>
	              </div>
	            </li>
	          </ul>
	        </li>
	        <!-- Control Sidebar Toggle Button -->
	        <li>
	          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
	        </li>
	      </ul>
	    </div>

	  </nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->