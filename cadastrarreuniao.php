<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<link href="css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link rel="shortcut icon" href="Imgs/favicon.ico" />
 <style>
 
 .responsive {
  width: 70%;
  height: auto;
}

 </style>
 
 <style>
/* width */
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: black; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #BDBDBD; 
}
</style>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<head>
	<body>
 <div class="header">
  <img alt="" src="/Imgs/banerf.png" class="responsive" />
  
</div>
<div class="navbar">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">CCS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
    <li><a href="home2.php?">Home</a></li>
        <li><a href="inicial.php">Clientes</a></li>
        <li><a href="index.php?p=cadastrar">Novo Cadastro</a></li>

        <li><a href="matriz.php">Matriz</a></li>
         <li><a href="cadastrojustificativa.php">Justificativa de ponto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      
      </ul>
    </div>
  </div>
</nav>
  </div>

<title>CCS - Novo Cadastro</title>
<?php

	include("classe/conexao.php");
	

	if(isset($_POST['confirmar'])){

		// 1 - Registro dos dados

		if(!isset($_SESSION))
			

		foreach($_POST as $chave=>$valor)
			$_SESSION[$chave] = $mysqli->real_escape_string($valor);

		// 2 - Validação dos dados
		
		// 3 - Inserção no Banco e redirecionamento
		if(count($erro) == 0){

			$sql_code = "INSERT INTO reuniao (
				descricaoreuniao, 
				motivo,
				reuniaoimplantacao, 
				reuniaosuporte,
				reuniaofinanceiro,
				reuniaocomercial,
				reuniaogerencia,
				statusreuniao, 
				datareuniao)
				VALUES(
				'$_SESSION[descricaoreuniao]',
				'$_SESSION[motivo]',
				'$_SESSION[reuniaoimplantacao]',
				'$_SESSION[reuniaosuporte]',
				'$_SESSION[reuniaofinanceiro]',
				'$_SESSION[reuniaocomercial]',
				'$_SESSION[reuniaogerencia]',
				'$_SESSION[statusreuniao]',
				'$_SESSION[datareuniao]'
				)";

			$confirma = $mysqli->query($sql_code) or die($mysqli->error);
				
		
		
	if ($_SESSION[reuniaoimplantacao]==1){	
		
		// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
include "PHPMailer-master/PHPMailerAutoload.php";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Método de envio
$mail->IsSMTP(); // Enviar por SMTP 
$mail->Host = 'mail.sistecsistemas.com'; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
$mail->Port = 25; 
 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)
$mail->Username = 'financeirofortesbh@sistecsistemas.com'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'Fortesbh1234'; // Mesma senha da sua conta de email
 
// Configurações de compatibilidade para autenticação em TLS
$mail->SMTPOptions = array(
 'ssl' => array(
 'verify_peer' => false,
 'verify_peer_name' => false,
 'allow_self_signed' => true
 )
);
// $mail->SMTPDebug = 2; // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
 
// Define o remetente
$mail->From = 'financeirofortesbh@sistecsistemas.com'; // Seu e-mail
$mail->FromName = "Gestão Fortes BH"; // Seu nome
 
// Define o(s) destinatário(s)

$mail->AddBCC('rafaelsilva@fortes-bh.com.br', 'Rafael');
$mail->AddBCC('wesleyrodrigues@fortes-bh.com.br ', 'Wesley');
$mail->AddBCC('karinamoreira@fortes-bh.com.br ', 'Karina');

 
 

//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
// Assunto da mensagem
$mail->Subject = "Nova Reuniao Interna - CCS "; 
 
// Corpo do email
$mail->Body = "

Olá setor de implantação!

Uma nova reunião foi marcada/realizada,segue abaixo dados da reunião.


Motivo Reunião :  $_SESSION[motivo] 
Descrição Reunião: $_SESSION[descricaoreuniao] 
Data:  $_SESSION[datareuniao]



Em caso de duvidas , procurar a gerencia.



E-mail automático , favor não responder.
";
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
     echo "Cadastro efetuado,enviando e-mail para implantação ..........";
} else {
     echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
}
		
		
		}
		
		
		
		
		
		
		
		
		if ($_SESSION[reuniaosuporte]==1){	
		
		// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
include "PHPMailer-master/PHPMailerAutoload.php";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Método de envio
$mail->IsSMTP(); // Enviar por SMTP 
$mail->Host = 'mail.sistecsistemas.com'; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
$mail->Port = 25; 
 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)
$mail->Username = 'financeirofortesbh@sistecsistemas.com'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'Fortesbh1234'; // Mesma senha da sua conta de email
 
// Configurações de compatibilidade para autenticação em TLS
$mail->SMTPOptions = array(
 'ssl' => array(
 'verify_peer' => false,
 'verify_peer_name' => false,
 'allow_self_signed' => true
 )
);
// $mail->SMTPDebug = 2; // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
 
// Define o remetente
$mail->From = 'financeirofortesbh@sistecsistemas.com'; // Seu e-mail
$mail->FromName = "Gestão Fortes BH"; // Seu nome
 
// Define o(s) destinatário(s)

$mail->AddBCC('evelynsilva@fortes-bh.com.br', 'Evelyn');
$mail->AddBCC('nayaraalves@fortes-bh.com.br', 'Nayara');
$mail->AddBCC('lorraynnegomes@fortes-bh.com.br', 'Lorrayne');

 
 

//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
// Assunto da mensagem
$mail->Subject = "Nova Reuniao Interna - CCS "; 
 
// Corpo do email
$mail->Body = "Olá setor de Suporte!

Uma nova reunião foi marcada/realizada,segue abaixo dados da reunião.


Motivo Reunião :  $_SESSION[motivo] 
Descrição Reunião: $_SESSION[descricaoreuniao] 
Data:  $_SESSION[datareuniao]



Em caso de duvidas , procurar a gerencia.



E-mail automático , favor não responder.
";
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
     echo "Cadastro efetuado,enviando e-mail para implantação ..........";
} else {
     echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
}
		
		
		}
		
		
		
		
		
		
		
		
	if ($_SESSION[reuniaocomercial]==1){	
		
		// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
include "PHPMailer-master/PHPMailerAutoload.php";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Método de envio
$mail->IsSMTP(); // Enviar por SMTP 
$mail->Host = 'mail.sistecsistemas.com'; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
$mail->Port = 25; 
 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)
$mail->Username = 'financeirofortesbh@sistecsistemas.com'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'Fortesbh1234'; // Mesma senha da sua conta de email
 
// Configurações de compatibilidade para autenticação em TLS
$mail->SMTPOptions = array(
 'ssl' => array(
 'verify_peer' => false,
 'verify_peer_name' => false,
 'allow_self_signed' => true
 )
);
// $mail->SMTPDebug = 2; // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
 
// Define o remetente
$mail->From = 'financeirofortesbh@sistecsistemas.com'; // Seu e-mail
$mail->FromName = "Gestão Fortes BH"; // Seu nome
 
// Define o(s) destinatário(s)

$mail->AddBCC('leandrosantos@fortes-bh.com.br', 'Leandro');
$mail->AddBCC('tarickvinicius@fortes-bh.com.br ', 'Tarick');
$mail->AddBCC('helenrouse@fortes-bh.com.br ', 'Helen');

 
 

//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
// Assunto da mensagem
$mail->Subject = "Nova Reuniao Interna - CCS "; 
 
// Corpo do email
$mail->Body = "Olá setor Comercial!

Uma nova reunião foi marcada/realizada,segue abaixo dados da reunião.


Motivo Reunião :  $_SESSION[motivo] 
Descrição Reunião: $_SESSION[descricaoreuniao] 
Data:  $_SESSION[datareuniao]



Em caso de duvidas , procurar a gerencia.



E-mail automático , favor não responder.
";
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
     echo "Cadastro efetuado,enviando e-mail para implantação ..........";
} else {
     echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
}
		
		
		}	
		
		
		
		
		
		
		
		if ($_SESSION[reuniaogerencia]==1){	
		
		// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
include "PHPMailer-master/PHPMailerAutoload.php";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Método de envio
$mail->IsSMTP(); // Enviar por SMTP 
$mail->Host = 'mail.sistecsistemas.com'; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
$mail->Port = 25; 
 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)
$mail->Username = 'financeirofortesbh@sistecsistemas.com'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'Fortesbh1234'; // Mesma senha da sua conta de email
 
// Configurações de compatibilidade para autenticação em TLS
$mail->SMTPOptions = array(
 'ssl' => array(
 'verify_peer' => false,
 'verify_peer_name' => false,
 'allow_self_signed' => true
 )
);
// $mail->SMTPDebug = 2; // Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro.
 
// Define o remetente
$mail->From = 'financeirofortesbh@sistecsistemas.com'; // Seu e-mail
$mail->FromName = "Gestão Fortes BH"; // Seu nome
 
// Define o(s) destinatário(s)

$mail->AddBCC('adrianatonon@fortes-bh.com.br', 'Adriana');
$mail->AddBCC('reginamartins@fortes-bh.com.br', 'Regina');
$mail->AddBCC('simonebarros@fortes-bh.com.br ', 'Simone');

 
 

//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
// Assunto da mensagem
$mail->Subject = "Nova Reuniao Interna - CCS "; 
 
// Corpo do email
$mail->Body = "Olá!

Uma nova reunião foi marcada/realizada,segue abaixo dados da reunião.


Motivo Reunião :  $_SESSION[motivo] 
Descrição Reunião: $_SESSION[descricaoreuniao] 
Data:  $_SESSION[datareuniao]



E-mail automático , favor não responder.
";
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
     echo "Cadastro efetuado,enviando e-mail para implantação ..........";
} else {
     echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
}
		
		
		}	
		
		
		
		
		
		
		
		
		

			if($confirma){

				unset($_SESSION[descricaoreuniao],
				$_SESSION[motivo],
				$_SESSION[reuniaoimplantacao],
				$_SESSION[reuniaosuporte],
				$_SESSION[reuniaofinanceiro],
				$_SESSION[reuniaocomercial],
				$_SESSION[reuniaogerencia],
				$_SESSION[statusreuniao],
				$_SESSION[datareuniao]
				);

				echo "<script> location.href='reunioes.php'; </script>";

			}else
				$erro[] = $confirma;

		}

	}











?>

<style>


* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #848484;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #2196F3;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
/* The container */
.container2 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container2 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
</style>






<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php 
if(count($erro) > 0){ 
	echo "<div class='erro'>"; 
	foreach($erro as $valor) 
		echo "$valor <br>"; 

	echo "</div>"; 
}
?>
      
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="cadastrarreuniao.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Reunião</h3>
            
             <label for="motivo"><i class="fa fa-home"></i> Motivo </label>
             <input name="motivo" value="<?php echo $_SESSION[motivo]; ?>" required placeholder=" Motivo da reunião" type="text">
             
            <br/>
           
           
             <label for="datareuniao"><i class="fa fa-exclamation-triangle"></i> Data da reunião</label>
                <input name="datareuniao" value="<?php echo $_SESSION[datareuniao]; ?>" required  type="date">
              <br/>
               <br/>
             
            <label><i class="fa fa-bar-chart-o"></i> Participantes </label> 
        	  <?php if($_SESSION[reuniaoimplantacao]==1){  ?>
        	 <input type="checkbox" name="reuniaoimplantacao" checked   value="1"> Implantação<br>
        	 <?php  }if($_SESSION[reuniaoimplantacao]==0){  ?>
        	 <input type="checkbox" name="reuniaoimplantacao"    value="1"> Implantação<br>
        	 
        	 
        	 <?php  }  if($_SESSION[reuniaosuporte]==1) {  ?>
        	 <input type="checkbox" name="reuniaosuporte"  checked  value="1"> Suporte<br>
        	 <?php  }  if($_SESSION[reuniaosuporte]==0) {  ?>
              <input type="checkbox" name="reuniaosuporte"    value="1"> Suporte<br>
              
              
              <?php  }  if($_SESSION[reuniaofinanceiro]==1) {  ?>
        	 <input type="checkbox" name="reuniaofinanceiro"  checked  value="1"> Financeiro<br>
        	 <?php  }  if($_SESSION[reuniaofinanceiro]==0) {  ?>
              <input type="checkbox" name="reuniaofinanceiro"    value="1"> Financeiro<br>
              
              
              
              <?php  }  if($_SESSION[reuniaocomercial]==1) {  ?>
        	 <input type="checkbox" name="reuniaocomercial"  checked  value="1"> Comercial<br>
        	 <?php  }  if($_SESSION[reuniaocomercial]==0) {  ?>
              <input type="checkbox" name="reuniaocomercial"    value="1"> Comercial<br>                           
  
  
  		<?php  }  if($_SESSION[reuniaogerencia]==1) {  ?>
        	 <input type="checkbox" name="reuniaogerencia"  checked  value="1"> Gerencia<br>
        	 <?php  }  if($_SESSION[reuniaogerencia]==0) {  ?>
              <input type="checkbox" name="reuniaogerencia"    value="1"> Gerencia<br>         
              
              <?php } ?>
              
            <div class="row">
              <div class="col-50">
              </div>
              <div class="col-50">                 
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>- </h3>
              <label for="descricaoreuniao"><i class="fa fa-align-left"></i> Descrição da Reunião</label>
            <textarea name="descricaoreuniao" placeholder="Descreva a reunião"  style="height:200px;"><?php echo $_SESSION[descricaoreuniao]; ?></textarea>
        	   
                              
			 <br>
            <br/>
            <label for="statusreuniao"><i class="fa fa-child"></i> Status da reunião</label>
            <select  required name="statusreuniao">
	    	<option value="">Selecione</option>
		    <option value="1" <?php if($_SESSION[statusreuniao] == 1) echo "selected"; ?>>Finalizada</option>
	    	<option value="2" <?php if($_SESSION[statusreuniao] == 2) echo "selected"; ?>>Com pendencias</option>
	    	<option value="3" <?php if($_SESSION[statusreuniao] == 3) echo "selected"; ?>>Remarcada</option>
        	</select>
           
          
            
           
            <div class="row">
              <div class="col-50">
                
              </div>
              <div class="col-50">
                
              </div>
            </div>
          </div>
          
        </div>
        <label>
       
        </label>
        <input value="Salvar" class="btn" name="confirmar" type="submit">
      </form>
      <form action="reunioes.php" method="POST">
      <input value="Cancelar" class="btn" name="confirmar" type="submit">
      
      </form>
    </div>
  </div>
 
</div>

</body>
</html>
