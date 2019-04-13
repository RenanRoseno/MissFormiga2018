<?php
session_start();
?>
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
			<li><a href="indexlogado.php"><img src="images/home.png" width="17" height="17"></a></li></li>
			<li><a href="sobrelogado.php">Sobre nós</a></li>
            <li><a href="cardapiologado.php">pedido</a></li>
			<li class="acao"><a href="sair.php">Sair</a></li>
			<li class="acao" ><a href="perfil.php" class="active" style="background-color: rgba(245,58,89,0.5);
    		left: 0;"> <?php  echo $_SESSION['usuarioNome']; ?></a> </li>	
	</ul>

									<br><br><br><br><br><br>

<center>
	<div style="max-height: 1000px;width: 1200px;border-radius: 50px; background: rgba(98,49,49, 0.7);">
	
		<table style="margin-left: 0px;padding: 40px;" cellspacing="10px;" >
				
				<tr>
					<td align="center" colspan="5"><h1 style="font-size: 40px;">Pedidos</h1></td>
				</tr>
				<tr>
					<td align="center"><h1>Codigo</h1></td><td align="center"><h1>Descricao</h1></td><td><h1>Valor</h1></td><td><h1>Situação</h1></td><td><h1>Data de Entrega</h1></td>
				</tr>
					<?php include_once("conexao.php");

					$nome = $_SESSION['usuarioNome'];
					 $sql = mysqli_query($conn,"SELECT codigoPedido,dataEntrega,descricao,situacao,valor FROM pedidos where nomeCliente='$nome';" );
			        		while ($exibe = mysqli_fetch_assoc($sql)) {
			                 echo "<tr style='  font-family: Century Gothic;
  color: #f99c95;font-size: 14px;'><td align='center'>";
			                 echo utf8_encode($exibe["codigoPedido"]);
			                 echo "</td>";
			                 echo "<td>";
			                 echo utf8_encode($exibe["descricao"]);
			                  echo "</td>";
			                   echo "<td align='center'>R$ ";
			                 echo utf8_encode($exibe["valor"]);
			                  echo "</td>";

			                   echo "<td>";
			                 echo utf8_encode($exibe["situacao"]);
			                  echo "</td>";

			                   echo "<td>";
			                 echo utf8_encode($exibe["dataEntrega"]);

			                  echo "<tr><td colspan='5' align='center'><input type='text' class='q' style='height:1px;width: 900px;'></td></tr>";
			              }
			              ?>">
			            
		</table>

					
	</div>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br>
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