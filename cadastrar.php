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
</head>
<body margintop='0' background="images/funduduzaity1.jpg" class="fadeIn" style="background-repeat: no-repeat;">
    
        <ul style="background-color: #38312d;">
            <li><a href="index.php" class="active" style="background-color: rgba(245,58,89,0.5);
    left: 0;"><img src="images/home.png" width="13" height="13"></a></li>
            <li><a href="sobre.php">Sobre nós</a></li>
            <li><a href="cardapio.php">Cardápio</a></li>
            <li><a href="#cont">Contato</a></li>
            <li class="acao"><a href="cadastro.php" style = "background-color: rgba(245,58,89,0.5);
    left: 0; font-size: 16px;"> Cadastro</a></li>
      <li class="acao"><a href="login.php" style="font-size: 16px;" >Login</a></li>   

        
            
    </ul>

<?php
$host="localhost";
$user = "root";
$senha= "";
$BD = "missformiga";


$conn = mysqli_connect($host, $user, $senha, $BD);

 	@$nome = $_POST['nome']; 
    @$email = $_POST['email'];
    @$cpf = $_POST['cpf'];
    
    @$senha = $_POST['senha'];
    @$senha1 = $_POST['senha1'];

//-----------------------------------Procurar verificação de senha em javascript -----------------------------//
    if($senha == $senha1){
        
    @$sql = "INSERT INTO usuario VALUES (default,'$nome','$cpf','$email','$senha','$telefone');";

//-----------------------------------Estabelecer uma condição -----------------------------------------------//
    @$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

    if($result){
       echo "<script>alert('Cliente cadastrado!');</script>";
       echo "";
    }else{
        echo "<script>alert('Usuário não cadastrado!');</script>";
    }
}else{
    echo "Senhas diferentes, por favor, retorne";
}


?><br><br><br><br><br>
   <center> <h1 style="font-size: 30px;"> Cadastrado! Para logar, clique <a href="login.php" style="text-decoration: none;">aqui.</a></h1></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
