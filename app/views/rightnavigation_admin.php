	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<?php
					if ($data['foto'] != ROOT . FOLDER_PATH . "/src/assets/media/image/perfil/") {
						echo "<img class=\"img-circle\" src=" . FOLDER_PATH . $data['foto'] . " alt=\"User Image\">";
					} else {
						echo '<img class="img-circle" src="' . FOLDER_PATH . '/src/assets/media/image/perfil/avatar-male3.png" alt="User Image">';
					}
					?>
				</div>
				<div class="pull-left info">
					<p><?= $data['nombre'] . ' ' . $data['apellido'] ?></p>
					<a href="#"><i class="fa fa-circle text-success"></i> En Línea</a>
				</div>
			</div>

			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">NAVEGACIÓN PRINCIPAL</li>
				<li class="active menu-open">
					<a href="<?= FOLDER_PATH . '/' ?>">
						<i class="fa fa-table"></i> <span>Inicio</span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-files-o"></i>
						<span>Lista de incidencias</span>
						<span class="pull-right-container">
							<span class="label label-primary pull-right">4</span>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= FOLDER_PATH . '/' ?>incidencias.html?iq=1"><i class="fa fa-circle-o"></i> En espera</a></li>
						<li><a href="<?= FOLDER_PATH . '/' ?>incidencias.html?iq=2"><i class="fa fa-circle-o"></i> Atendidos</a></li>
						<li><a href="<?= FOLDER_PATH . '/' ?>incidencias.html?iq=3"><i class="fa fa-circle-o"></i> En Observación</a></li>
						<li><a href="<?= FOLDER_PATH . '/' ?>incidencias.html?iq=4"><i class="fa fa-circle-o"></i> Cancelados</a></li>
						<li><a href="<?= FOLDER_PATH . '/' ?>incidencias.html?iq=5"><i class="fa fa-circle-o"></i> Mostrar todos</a></li>
					</ul>
				</li>
				<li>
					<a href="<?= FOLDER_PATH . '/' ?>oficina">
						<i class="fa fa-building-o"></i> <span>Unidad</span>
					</a>
				</li>
				<li>
					<a href="<?= FOLDER_PATH . '/' ?>tipo_incidencia">
						<i class="fa fa-file-o"></i> <span>Incidencias</span>
					</a>
				</li>
				<li class="treeview">
					<a href="#">
						<i class="fa fa-users"></i>
						<span>Usuarios</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?= FOLDER_PATH . '/' ?>usuarios?uq=1"><i class="fa fa-circle-o"></i> Administrativos</a></li>
						<li><a href="<?= FOLDER_PATH . '/' ?>usuarios?uq=2"><i class="fa fa-circle-o"></i> Técnicos</a></li>
					</ul>
				</li>
				<li>
					<a href="<?= FOLDER_PATH . '/' ?>administrador">
						<i class="fa fa-user-o"></i> <span>Administrador</span>
					</a>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>