<?php
session_start();
include_once("conexao.php");

@$cascaOvo = $_POST['cascaOvo'];
@$recheioOvo = $_POST['recheioOvo'];
@$acrescOvo= $_POST['AcrescOvo'];
@$Ovo = $_POST['ovo'];
@$qtdOvo = $_POST['qtd'];
@$precoOvo;
@$resultadoOvo;

if($Ovo == "350g"){
	$precoOvo = ($qtdOvo) * 30;
	$resultadoOvo = $qtdOvo." Ovos: 350g, ".$recheioOvo. " c/ ".$acrescOvo." ";
}else if($Ovo == "500g"){
	$precoOvo = ($qtdOvo) * 45;
	$resultadoOvo = $qtdOvo." Ovos, 500g, ".$recheioOvo. " c/ ".$acrescOvo." ";
}else{
	$precoOvo = 0;
	$resultadoOvo = "";
}

@$cascaTrufa = $_POST['cascaTrufa'];
@$recheioTrufa = $_POST['recheioTrufa'];
@$qtdTrufa = $_POST['qtdtrufa'];
@$tamTrufa = $_POST['tamTruf'];
@$precoTrufa;
@$resultadoTrufa;

if($tamTrufa == "pequena"){
	$precoTrufa = ($qtdTrufa) * 2;
	$resultadoTrufa = $qtdTrufa." Trufas, ".$tamTrufa.", ".$cascaTrufa." de ".$recheioTrufa." ";
}else if($tamTrufa == "grande"){
	$precoTrufa = ($qtdTrufa) * 4;
	$resultadoTrufa = $qtdTrufa." Trufas, ".$tamTrufa.", ".$cascaTrufa." de ".$recheioTrufa." ";
}else{
	$precoTrufa = 0;
	$resultadoTrufa = "";
}


@$bombons = $_POST['bombom'];
@$qtdBom = $_POST['qtdBom'];

if ($bombons != "0") {
	@$precoBom = 90 * $qtdBom;
	@$resultadoBom = $qtdBom." centos de ". $bombons;
}else if($bombons == "0"){
	@$precoBom = 0;
	@$resultadoBom ="";
}


@$Brigadeiros = $_POST['brigadeiro'];
@$qtdBRigadeiros = $_POST['qtdBrigadeiro'];

if ($Brigadeiros != "0") {
	@$precoBrigadeiro = 22 * $qtdBRigadeiros;
	@$resultadoB = $qtdBRigadeiros." centos de ". $Brigadeiros;
}else if($Brigadeiros == "0"){
	@$precoBrigadeiro = 0;
	@$resultadoB ="";
}

@$resultado = $resultadoOvo.$resultadoTrufa.$resultadoBom.$resultadoB;
@$valor = $precoOvo + $precoTrufa + $precoBom + $precoBrigadeiro ;

@$nome = $_SESSION['usuarioNome'];
@$email = $_SESSION['usuarioEmail'];
$data = '2018-05-01';
@$dataEntrega = $_POST['dataEntreg'];
@$situacao = 'Em andamento';







$sql =  "INSERT INTO pedidos VALUES (default,'$nome','$email','$resultado','$valor','$data','$dataEntrega','$situacao');";

 @$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

 if($result){
 	echo "<script>alert('Pedido realizado!');</script>";
 }
 header("Location: perfil.php")
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
            <li><a href="cardapiologado.php" class="active" style="background-color: rgba(245,58,89,0.5);
    		left: 0;">pedido</a></li>
			<li class="acao"><a href="sair.php">Sair</a></li>
			<li class="acao" ><a href="#"> <?php  echo $_SESSION['usuarioNome']; ?></a> </li>	
	</ul>
									<br><br><br><br><br><br>

<center>
	<div style="height: 300px;width: 700px;border-radius: 50px; background: rgba(98,49,49, 0.7);">
		<table style="margin-left: 10px;padding: 40px;">
				
				<tr>
					<td><h1>Usuário </h1></td>
					<td align="left">&nbsp;&nbsp;<input type="text" name="qtd" class="q" style="width: 300px;" value="<?php echo $_SESSION['usuarioNome']; ?>" disabled> </td>
				</tr>

				<tr>
					<td><h1>Email</h1></td>
					<td><input type="text" name="qtd" class="q" style="width: 400px;" value="<?php echo $_SESSION['usuarioEmail']; ?>" disabled> </td>
				</tr>

				<tr>
					<td><h1>Pedido</h1></td>
					<td valign="middle">&nbsp;&nbsp; <input type="text" class="q" style="font-size: 15px;height: 30px;width: 400px;" value="<?php include_once("conexao.php");$nome = $_SESSION['usuarioNome'];
					 $sql = mysqli_query($conn,"SELECT descricao,situacao FROM pedidos where nomeCliente='$nome'; LIMIT 1" );
			        		while ($exibe = mysqli_fetch_assoc($sql)) {
			                 echo utf8_encode($exibe["descricao"]);
			              }
			              ?>">
					</td>
				</tr>

				<tr>
					<td><h1> Situação</h1></td>
					<td>&nbsp;&nbsp;<input type="text" class="q" style="width: 300px;font-size: 25px;" value="    <?php $nome = $_SESSION['usuarioNome'];
						 $sql = mysqli_query($conn,"SELECT descricao,situacao FROM pedidos where nomeCliente='$nome'; LIMIT 1" );
						while ($exibe = mysqli_fetch_assoc($sql)) {
			                 echo utf8_encode($exibe["situacao"]);
			              }
			              ?>"></td>
		</table>

					
	</div>
</center>

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