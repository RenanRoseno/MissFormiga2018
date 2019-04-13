<!DOCTYPE html>
<html>
<head>
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

<body margintop='0' class=" fadeIn" background="images/funduduzaity111.jpg">
	<ul>
			<li><a href="index.php"><img src="images/home.png" width="17" height="17"></a></li></li>
			<li><a href="sobre.php">Sobre nós</a></li>
            <li><a href="cardapio.php" class="active" style="background-color: rgba(245,58,89,0.5);
    		left: 0;">Cardápio</a></li>
			<li class="acao" ><a href="cadastro.php"> Cadastro</a></li>
			<li class="acao"><a href="login.php">Login</a></li>		
	</ul>

	<br>
	
	<div id="conteudo" class="fadeInCon" style="background: rgba(0,0,0,0.4);">
		
		<h1 align="center"> Ovos de Páscoa</h1>
		<form method="POST" action="cardapio.php">
						<div id="opcao">
							<div class="custom-select" style="width:300px;">
				  				<select name="casca">
				    				<option disabled selected>Cascas</option>
				    				<option value="1">Chocolate ao leite</option>
				    				<option value="1">Chocolate amargo</option>
				    				<option value="1">Chocolate branco</option>
				  				</select>
							</div>
						</div>
						

						<div id="opcao">
							<div class="custom-select" style="width:300px;">
				  				<select>
				    				<option value="0">Recheio</option>
								    <option value="1">Brigadeiro</option>
								    <option value="1">Oreo</option>
								  	<option value="1">Beijinho</option>
								  	<option value="1">Marshmallow</option>
							 	</select>
							</div>
						</div>
						
						<div id="opcao">
							<div class="custom-select" style="width:300px;">
								  <select name="acr">
									    <option value=0>Acréscimos - R$ 5,00</option>
									    <option value=5>Cereja</option>
									   	<option value=5>Morango</option>
									  	<option value=5>Kit Kat</option>
									  	<option value=5>Bis</option>
								  </select> 
							</div>
						</div>
						
						<div id="opcao" style="width: 100px;">
							<div class="custom-select" style="width:140px;">
								  <select name="ovo">
									    <option value="0">Tamanho</option>
									    <option value=30>350g - R$ 30,00</option>
									    <option value="45">500g - R$ 45,00</option>
								  </select>
							</div>
						</div>  
							
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;
						

						<div id="precos" style="width:80px; align-content: left;">
							<input type="text" name="qtd" placeholder="QTD" class="q" autocomplete="off">
						</div>
				</center>

						<br><br><br>
						
						<h1 align="center"> Trufas</h1>
						
						<div id="opcao">
							<div class="custom-select" style="width:300px;">
								  <select name="casca">
									    <option disabled selected>Cascas</option>
									    <option value=1>Chocolate ao leite</option>
									    <option value=1>Chocolate amargo</option>
									    <option value=1>Chocolate branco</option>
								  </select>
							</div>
						</div>


						<div id="opcao">
							<div class="custom-select" style="width:300px;">
									 <select name="recheio">
										<option value="0">Recheio</option>
										<option value="0">Brigadeiro</option>
										<option value="0">Mousse de Limão</option>
										<option value="0">Mousse de Maracujá</option>
										<option value="0">Mousse de Limão</option>
									</select>
							</div>	
						</div>
							<div id="opcao" style="width: 100px;">
							<div class="custom-select" style="width:180px;">
								  <select name="tamTrufa">
									    <option value="0">Tamanho</option>
									    <option value="2">Pequena - R$ 2,00</option>
									    <option value="4">Grande - R$ 4,00</option>
								  </select>
							</div>
						</div>  
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<div id="precos" style="width:80px; align-content: left;">
							<input type="text" name="qtdTruf" placeholder="QTD" class="q" autocomplete="off">
						</div>

						<br><br><br>

					<h1 align="center"> Outros doces: (por cento)</h1><br>	
					
					<div id="opcao">
						<div class="custom-select" style="width:300px;">
							  <select name="bombom">
								    <option value="0">Bombons - R$ 90,00 </option>
								    <option value="90">Bombom de côco</option>
								    <option value="90">Bombom Tradicional</option>
								    <option value="90">Bombom de Morango</option>
								    <option value="90">Bombom de Caipirinha</option>

i							</select>
						</div>
					</div>
					<div id="precos" style="width:80px; align-content: left;">
							<input type="text" name="qtdBom" placeholder="QTD" class="q" autocomplete="off">
						</div>
					<div id="opcao">
						<div class="custom-select" style="width:300px;">
							  <select name="brigadeiro">
								    <option value="0">Brigadeiros - R$ 22,00</option>
								    <option value="22">Brigadeiro tradicional</option>
								    <option value="22">Brigadeiro Gourmet</option>
								    <option value="22">Brigadeiro de Ninho com Nutella</option>
								    <option value="22">Brigadeiro de côco</option>
								    <option value="22">Brigadeiro de Oreo</option>
								    <option value="22">Brigadeiro de Churros</option>
							</select>
						</div>
					</div>

					<div id="precos" style="width:80px; align-content: left;">
							<input type="text" name="qtdDoc" placeholder="QTD" class="q">
					</div>

				<br><br><br>

				<center>
					<div id="opcao" style="margin-left:600px;font-size:30px; font-family: Century Gothic;font-color:rgba(245,98,89);">
					
						<input type="submit" value="Simular preço" style=" height: 50px;width: 350px; border-color: rgba(245,58,89, 0.6);background-color: rgba(245,58,89); color: white;font-family: Century Gothic;font-size: 20px;">

						<br>
						<?php
							//OVOS
								@$preco  = $_POST['ovo'];
								@$acr = $_POST['acr'];
								@$qtd = $_POST['qtd'];

								@$qtdTruf = $_POST['qtdTruf'];

								@$bombom = $_POST['bombom'];
								@$qtdBom = $_POST['qtdBom'];
								@$brigadeiro = $_POST['brigadeiro'];
								@$qtdDoc = $_POST['qtdDoc'];
								@$tamTrufa = $_POST['tamTrufa'];

								//@$resultadoB = $bombom + $brigadeiro;
								//@$resultadoT = ($truf) * $qtdTruf; 
								@$resultado = (($preco + $acr) * $qtd) + ($tamTrufa * $qtdTruf) + ($bombom * $qtdBom) + ($brigadeiro * $qtdDoc);

							?>
						<font style="font-size:30px; font-family: Century Gothic; color:rgba(245,58,89);"> R$ </font> <input type="text"  id = "res " name="res" class="q1" style="width: 80px;" disabled value="<?php echo $resultado; ?>" autocomplete="off">
					</div>
				</center>
		</form>
			<br><br><br>
					<script src="js/select.js"></script>

</body>
</html>