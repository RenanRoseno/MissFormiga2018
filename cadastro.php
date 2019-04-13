<!DOCTYPE html>
<html>
<head>
  <script>
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons">

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
  <link rel="stylesheet" href="css/demo.css">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 
</head>
<body margintop='0' class=" fadeIn" background="images/funduduzaity1.jpg">

	
	<ul>
      <li><a href="index.php"><img src="images/home.png" width="17" height="17"></a></li>
      <li><a href="sobre.php" style="font-size: 16px;">Sobre nós</a></li>
      <li><a href="cardapio.php" style="font-size: 16px;">Cardápio</a></li>
      <li class="acao"><a href="cadastro.php" style = "background-color: rgba(245,58,89,0.5);
    left: 0; font-size: 16px;"> Cadastro</a></li>
      <li class="acao"><a href="login.php" style="font-size: 16px;" >Login</a></li>   
  </ul>

  <br><br><br>
	
  	<form class="login100-form" method="POST" action="cadastrar.php" style="width: 510px; margin-left: 500px;background-color: rgba(126,46,46,0.89) /*rgba(128,64,64,0.92)*/; padding-left: 15px;padding-right: 15px;padding-top: 20px;padding-bottom: 15px; border-bottom-left-radius: 10%; border-top-right-radius: 10%;">
          <span class="login100-form-title p-b-34 p-t-27" autocomplete="off">
            Cadastro
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Insira nome" autocomplete="off">
            <input class="input100" type="text" name="nome" placeholder="Nome" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Insira cpf" autocomplete="off">
            <input class="input100" type="text" name="cpf" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" maxlength="14" required>
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>


          <div class="wrap-input100 validate-input" data-validate = "Insira email">
            <input class="input100" type="email" name="email" placeholder="Email" required autocomplete="off">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Insira senha">
            <input class="input100" type="password" name="senha" placeholder="Senha" minlenght="8" required>
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Insira senha">
            <input class="input100" type="password" name="senha1" minlenght= "8" placeholder="Confirmar senha" required>
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Insira email">
            <input class="input100" type="text" name="telefone" placeholder="Telefone" autocomplete="off" OnKeyPress="formatar('##-#####-####', this)" maxlength="13" >
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="container-login100-form-btn">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="login100-form-btn" style="margin-right: 10px;">
              Cadastrar
            </button>

            
               <input type="reset" class="login100-form-btn" style="margin-right: 10px;background-color: white;color: white;" value="Limpar">
            
           
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