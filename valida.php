<?php

	session_start();
	include_once("conexao.php");

	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		@$email = $_POST['email'];
		@$senha = $_POST['senha'];
		$nome = mysqli_real_escape_string($conn,$_POST['email']);
		$senha = mysqli_real_escape_string($conn,$_POST['senha']);

		$result_usuario = "SELECT * FROM usuario WHERE email = '$email' and senha ='$senha' LIMIT 1;";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

		if (isset($resultado)) {
			# code...
			$_SESSION['usuarioId'] = $resultado['codigo'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioEmail'] = $resultado['email'];

				
			}			

			if (($_SESSION['usuarioEmail'] == $email) && ($resultado['senha'] == $senha)){
				header("Location: indexlogado.php");
			} 
			
			else if(($_SESSION['usuarioEmail'] != $email) || ($resultado['senha'] != $senha)) {
				$_SESSION['loginErro'] = "Usuário ou Senha inválido";
				header("Location: login.php");
			}

		}	
?>