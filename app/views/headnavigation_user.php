<header class="main-header">
    <nav class="navbar navbar-static-top" style="background-color: #cc0404;">
        <div class="container">
            <div class="navbar-header">
                <a href="javascript:;" class="navbar-brand"><b>Servicios</b> USI</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="<?= FOLDER_PATH . '/' ?>">Inicio <span class="sr-only">(current)</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Incidencias <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?= FOLDER_PATH . '/agregar' ?>">Nueva incidencia</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= FOLDER_PATH . '/attend' ?>">Incidencias atendidas</a></li>
                            <li><a href="<?= FOLDER_PATH . '/solved' ?>">Incidencias solucionadas</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= FOLDER_PATH . '/today' ?>">Incidencia actual (hoy)</a></li>
                            <li><a href="<?= FOLDER_PATH . '/old' ?>">Incidencia antigua</a></li>
                            <li><a href="<?= FOLDER_PATH . '/all' ?>">Todas las incidencias</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notifications Menu -->
                    <li id="notifications" class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <!-- <span class="label label-warning">N</span> --> 
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have N notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <?php
                                        while ($datoBellNotificacion = $this->BellNtf->fetch()) {

                                            echo '
                                                <li>
                                                    <a href="' . FOLDER_PATH . '/detalle/' . $datoBellNotificacion['idcod_n'] . '" target="_blank">
                                                        <i class="fa fa-file text-green"></i> ' . $datoBellNotificacion['nombre_n'] . '
                                                    </a>
                                                </li>
                                            ';
                                          
                                        }
                                    ?>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <?php
                                if ($data['foto'] != "/src/assets/media/image/perfil/") {
                                    echo "<img class=\"user-image\" src=" . FOLDER_PATH . $data['foto'] . " alt=\"User Image\">";
                                } else {
                                    echo '<img class="user-image" src="' . FOLDER_PATH . '/src/assets/media/image/perfil/avatar-male3.png" alt="User Image">';
                                }
                            ?>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?= $data['nombre'] . ' ' . $data['apellido'] ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header" style="background-color: #cc0404;">
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
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>