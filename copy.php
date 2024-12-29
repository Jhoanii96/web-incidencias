public function signin()
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		explode(" ", $email);
		explode(" ", $pass);

		$param[0] = $email;
		$param[1] = $pass;

		if (!$this->VerificarParametros($param)) {
			header("Location: " . FOLDER_PATH . "/login");
			$this->renderErrorMessage('*El usuario y la contraseña son obligatorios');
		} else {
			$this->dataLogin = new dataAdmin();
			@$parametro = $this->dataLogin->cargar_usuario($param[0]);
			$identi = $parametro->fetch();

			if ($param[0] != $identi['correo']) {
				header("Location: " . FOLDER_PATH . "/login");
				$this->renderErrorMessage('*El usuario no existe');
			} else {
				// if($param['password'] != $parametro['clave_organizador']){
				if ($param[1] != $identi['clave']) {
					header("Location: " . FOLDER_PATH . "/login");
					$this->renderErrorMessage('*La contraseña es incorrecta');
				} else {
					$this->session->add('usuarioUsi', $param[0]);
					if (!empty($_POST["chkb"])) {
						setcookie("member_login", $email, time() + (10 * 365 * 24 * 60 * 60));
						setcookie("member_password", $pass, time() + (10 * 365 * 24 * 60 * 60));
					} else {
						if (isset($_COOKIE["member_login"])) {
							setcookie("member_login", "");
						}
						if (isset($_COOKIE["member_password"])) {
							setcookie("member_password", "");
						}
					}
					header("Location: " . FOLDER_PATH . "/");
				}
			}
		}
	}