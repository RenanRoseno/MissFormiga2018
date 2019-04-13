<?php

	session_start();

	unset(

		$_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioSenha']
	);
	$_SESSION['logindeslogado'] = "Volte sempre!";
	header("Location: login.php");

?>