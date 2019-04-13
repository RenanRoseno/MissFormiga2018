<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Miss Formiga</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="images/formiguinha.png">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <!--link rel="shortcut icon" href="images/logo1.png"-->

</head>
<body margintop='0' class=" fadeIn" background="images/funduduzaity1.jpg">

	<ul>
			<li><a href="index.php"><img src="images/home.png" width="17" height="17"></a></li>
			<li><a href="sobre.php" style="font-size: 16px;">Sobre nós</a></li>
            <li><a href="cardapio.php" style="font-size: 16px;">Cardápio</a></li>
			<li class="acao"><a href="cadastro.php " style="font-size: 16px;"> Cadastro</a></li>
			<li class="acao"><a href="login.php" style="background-color: rgba(245,58,89,0.5);
    left: 0; font-size: 16px;" class="active">Login</a></li>		
	</ul><br>
	

		<!--<center> -->
				<br><br>
				<form class="login100-form" method="POST" action="valida.php" style="width: 510px; margin-left: 450px;background-color: rgba(126,46,46,0.89) /*rgba(128,64,64,0.92)*/; padding-left: 15px;padding-right: 15px;padding-top: 20px;padding-bottom: 15px; border-bottom-left-radius: 10%; border-top-right-radius: 10%;">
					<span class="login100-form-logo" style="background:#38312d;margin-left: 200px;" >
						<img src="images/formiguinha1.png">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Insira email" >
						<input class="input100" type="email" name="email" placeholder="Email" required autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Insira senha">
						<input class="input100" type="password" name="senha" placeholder="Senha" required autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<center>
						<button class="login100-form-btn" style="margin-left: 20px;">
							Login
						</button>
					</div>
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							<?php 

				session_start();
				
				if(isset($_SESSION['loginErro'])){
						echo $_SESSION['loginErro'];
						unset($_SESSION['loginErro']);
					}

				if(@isset($_SESSION['logindeslogado'])){

				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);

				}

				 ?>
						</a>
					</div>
				</form>
	
		<!--</center>-->
		
		
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	
		
				


</body>
</html>
