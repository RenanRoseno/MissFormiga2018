<!DOCTYPE html>
<html>
<head>

	<?php
		session_start();
	?>
<script type="text/javascript">
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
</script>
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
			<li><a href="indexlogado.php"><img src="images/home.png" width="17" height="17"></a></li></li>
			<li><a href="sobrelogado.php">Sobre nós</a></li>
            <li><a href="cardapiologado.php" class="active" style="background-color: rgba(245,58,89,0.5);
    		left: 0;">pedido</a></li>
			<li class="acao"><a href="sair.php">Sair</a></li>
			<li class="acao" ><a href="perfil.php"> <?php  echo $_SESSION['usuarioNome']; ?></a> </li>	
	</ul>

	<br>
	<form method="POST" action="pedido.php">
	<div id="conteudo" class="fadeInCon" style="background: rgba(0,0,0,0.4);">
		
		<h1 align="center"> Ovos de Páscoa</h1>
		
		<div id="opcao">
			<div class="custom-select" style="width:300px;">
  				<select name="cascaOvo">
    				<option disabled selected>Cascas</option>
    				<option value="Chocolate ao leite">Chocolate ao leite</option>
    				<option value="Chocolate amargo">Chocolate amargo</option>
    				<option value="Chocolate branco">Chocolate branco</option>
  				</select>
			</div>
		</div>


		<div id="opcao">
			<div class="custom-select" style="width:300px;">
  				<select name="recheioOvo">
    				<option value="0">Recheio</option>
				    <option value="Brigadeiro">Brigadeiro</option>
				    <option value="Oreo">Oreo</option>
				  	<option value="Beijinho">Beijinho</option>
				  	<option value="Marshmallow">Marshmallow</option>
			 	</select>
			</div>
		</div>
		
		<div id="opcao">
			<div class="custom-select" style="width:300px;">
				  <select name="AcrescOvo">
					    <option value="0">Acréscimos - R$ 5,00</option>
					    <option value="Cereja">Cereja</option>
					   	<option value="Morango">Morango</option>
					  	<option value="kitKat">Kit Kat</option>
					  	<option value="Bis">Bis</option>
				  </select> 
			</div>
		</div>
		
		<div id="opcao" style="width: 100px;">
			<div class="custom-select" style="width:140px;">
					     <select name="ovo">
									    <option value="0">Tamanho</option>
									    <option value= "350g">350g - R$ 30,00</option>
									    <option value="500g">500g - R$ 45,00</option>
						</select>
			</div>
		</div>  

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<div id="precos" style="width:80px; align-content: left;">
			<input type="text" name="qtd" placeholder="QTD" class="q">
		</div>
</center>

		<br><br>
		
		<h1 align="center"> Trufas</h1>
		
		<div id="opcao">
			<div class="custom-select" style="width:300px;">
				  <select name="cascaTrufa">
					    <option disabled selected>Cascas</option>
					    <option value="Chocolate ao leite">Chocolate ao leite</option>
					    <option value="Chocolate amargo">Chocolate amargo</option>
					    <option value="Chocolate branco">Chocolate branco</option>
				  </select>
			</div>
		</div>


		<div id="opcao">
			<div class="custom-select" style="width:300px;">
					 <select name="recheioTrufa">
						<option value="0">Recheio</option>
						<option value="Brigadeiro">Brigadeiro</option>
						<option value="Mousse de Limão">Mousse de Limão</option>
						<option value="Mousse de Maracujá">Mousse de Maracujá</option>
						<option value="Mousse de Limão">Mousse de Limão</option>
					</select>
			</div>	
		</div>
		<div id="opcao" style="width: 100px;">
			<div class="custom-select" style="width:170px;">
					     <select name="tamTruf">
									    <option value="0">Tamanho</option>
									    <option value= "pequena">Pequena - R$ 2,00</option>
									    <option value="grande">Grande - R$ 4,00</option>
						</select>
			</div>
		</div>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div id="precos" style="width:80px; align-content: left;">
			<input type="text" name="qtdtrufa" placeholder="QTD" class="q">
		</div>

		<br><br>

	<h1 align="center"> Outros doces: (por cento)</h1><br>	
	
	<div id="opcao">
		<div class="custom-select" style="width:300px;">
			  <select name="bombom">
				    <option value= "0" 	>Bombons - R$ 90,00</option>
				    <option value="Bombom de coco">Bombom de côco</option>
				    <option value="Bombom tradicional">Bombom Tradicional</option>
				    <option value="Bombom de Caipirinha">Bombom de Caipirinha</option>
				    <option value="Bombom de Morango">Bombom de Morango</option>
			</select>
		</div>
	</div>
<div id="precos" style="width:80px; align-content: left;">
			<input type="text" name="qtdBom" placeholder="QTD" class="q">
	</div>
	<div id="opcao">
		<div class="custom-select" style="width:300px;">
			  <select name="brigadeiro">
				    <option value= "0" >Brigadeiros - R$22,00</option>
				    <option value="Brigadeiro tradicional">Brigadeiro tradicional</option>
				    <option value="Brigadeiro Gourmet">Brigadeiro Gourmet</option>
				    <option value="Brigadeiro de Morango">Brigadeiro de Morango</option>
				    <option value="Brigadeiro de côco">Brigadeiro de côco</option>
				    <option value="Brigadeiro de Oreo">Brigadeiro de Oreo</option>
				    <option value="Brigadeiro de Kit Kat">Brigadeiro de Kit Kat</option>
			</select>
		</div>
	</div>

	<div id="precos" style="width:80px; align-content: left;">
			<input type="text" name="qtdBrigadeiro" placeholder="QTD" class="q">
	</div>

	<br><br>
<center>
	<div id="precos" style="width:200px; align-content: left;">
		
		<h1 style="font-size: 20px;">Data de entrega:</h1>

		<input type="text" name="dataEntreg" placeholder="aaaa-mm-dd" style="width: 210px; height: 40px;font-size: 30px; background: transparent;border-top: none;
					border-right: none;
					border-left: none;
					color: rgba(245,58,89);
					font-family: Century Gothic;
					font-size: 30px;
					border-color:rgba(245,58,89);
					align-content: center;" OnKeyPress="formatar('####-##-##', this)" maxlength="10" required="">
	</div>
</center>
<br><br>
<center>
	<div id="opcao" style="font-size:30px; font-family: Century Gothic;font-color:rgba(245,98,89);">
	
		<input type="submit" value="Fazer pedido" style=" height: 50px;width: 350px; border-color: rgba(245,58,89, 0.6);background-color: rgba(245,58,89); color: white;font-family: Century Gothic;font-size: 20px;">

		<br>
	</div>
</center>
</form>

	<script src="js/select.js"></script>
	
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