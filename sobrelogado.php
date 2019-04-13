<!DOCTYPE html>
<html>
<head>

	<?php
		session_start();
	?>

	<meta charset="utf-8">
	<title>Miss Formiga</title>

	<link rel="shortcut icon" href="images/formiguinha.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" href="css/demo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	 <!--link rel="shortcut icon" href="images/logo1.png"-->

</head>
<body margintop='0' class=" fadeIn" background="images/funduduzaity1.jpg">
	<ul style="margin-top: -10px;">
			<li><a href="indexlogado.php" ><img src="images/home.png" width="17" height="17"></a></li>
			<li><a href="sobrelogado.php" class="active" style="background-color: rgba(245,58,89,0.5);
    left: 0;">Sobre nós</a></li>
            <li><a href="cardapiologado.php">Pedido</a></li>
			<li><a href="#cont">Contato</a></li>
			<li class="acao"><a href="sair.php">Sair</a></li>
			<li class="acao" ><a href="perfil.php"> <?php  echo $_SESSION['usuarioNome']; ?></a> </li>

		
			
	</ul>

<div id="conteudo">
	<br><br>
<div id="texto" style="width: 500px; height:100px; margin-left: 150px;">
	<h1 align="center"><font face="Century Gothic" color="#f99c95">Miss Formiga</font></h1>
	<p style="font-size: 25px;">&nbsp;&nbsp;A doceria Miss Formiga é uma loja virtual e física que teve como fundadores: Vanessa Barbosa e Everton Silva, em 2018. Com o fito de realizar
	vendas de variados tipos de ovos de colher(seja no período pascoal ou não), trufas, bombons e brigadeiros.Buscando sempre uma melhor qualidade nos produtos e na satisfação do cliente.</p>

	</div>
	<div id="foto" style="width: 300px;margin-top: -370px;margin-left: 700px;">
		<img src="images/vanessa1.png" width="400" height="400">
	</div>
	</div>


	<div id="cont">
		<footer class="footer-distributed" style="background-color: #38312d;">

			<div class="footer-left">
				<h3><font color="#edb116">Miss</font><span><font color="#f4d5b2">Formiga</font></span></h3>

				<br><br>

			<p class="footer-company-name">Miss Formiga &copy; 2018</p><br>
				<!--p class="footer-company-name">Miss Formiga &copy; 2018</p><br>
				<p style="font-size: 18px; color: orange; margin-left: 40px;">< / ></p>
				<p class="footer-company-name">Renan Roseno</p>
				<p class="footer-company-name">Vanessa Barbosa</p>
				<p class="footer-company-name">Yara Santana</p>
				<p class="footer-company-name">Darlilson Lima</p>
				<p class="footer-company-name">Gustavo de Sousa</p>
				<p class="footer-company-name">Alessandra Silveira</p>-->
				
				
				
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p style="color: gray"><a href="https://www.google.com.br/maps/place/R.+Oitenta+e+Nove,+225+-+Sen.+Carlos+Jereissati,+Pacatuba+-+CE,+61800-000/@-3.8869752,-38.614371,15z/data=!4m5!3m4!1s0x7c75383e73bf655:0xa75f305a85989843!8m2!3d-3.8884203!4d-38.6069788" style="text-decoration: none;color: gray;"><span>225 Rua 89, Jereissati II</span> Pacatuba-Ce, Brasil</a></p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p style="color: gray">+55 85 8803-4529</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p ><a href="mailto	:vanessabar120@gmail.com" style="text-decoration: none;color: gray">vanessabar120@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">
				<div class="footer-icons">

					<a href="https://www.facebook.com/Miss-Formiga-169554380408802/"><i class="fa fa-facebook"></i></a>
					<a href="https://www.instagram.com/miss.formiga/"><i class="fa fa-instagram"></i></a>
					<a href="https://github.com/RenanRoseno"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
	</div>
		<script type='text/javascript'>
		(function(){ var widget_id = 'sJ6QeE3cdf';
			var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; 
			s.src = '//code.jivosite.com/script/widget/'+widget_id; 
			var ss = document.getElementsByTagName('script')[0];
			 ss.parentNode.insertBefore(s, ss);
			})();
	</script>
</body>
</html>