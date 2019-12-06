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

<title>CCS - Historico Cadastral</title>



<style>
.responsive {
  width: 70%;
  height: auto;
}



.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 20px;
  height: 20px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="header">
  <img alt="" src="/Imgs/baner1.png" class="responsive" />
  
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
        <li><a href="gerenciamento.php">Gerenciamento</a></li>
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




<?php

	

	
	

//inclusão de informações pos cadastro

	include("classe/conexao.php");

	if(!isset($_GET['usuario']))
		echo "<script> alert('Codigo invalido.'); location.href='index.php?p=inicial'; </script>";
	else{

	$usu_codigo = intval($_GET['usuario']);


	
	if(isset($_POST['confirmar'])){

		// 1 - Registro dos dados

		if(!isset($_SESSION))
			

		foreach($_POST as $chave=>$valor)
			$_SESSION[$chave] = $mysqli->real_escape_string($valor);

		// 2 - Validação dos dados
	

		// 3 - Inserção no Banco e redirecionamento
		if(count($erro) == 0){


			$sql_code = "UPDATE usuario SET
				cancelados = '$_SESSION[cancelados]',
				geraoportunidade= '$_SESSION[geraoportunidade]',
			
				nome = '$_SESSION[nome]',
				graucritico= '$_SESSION[graucritico]',
				
				comentariocr= '$_SESSION[comentariocr]',
				origemcr = '$_SESSION[origemcr]',
				statusconversao= '$_SESSION[statusconversao]',
				email = '$_SESSION[email]',
				telefone = '$_SESSION[telefone]',
				responsavel = '$_SESSION[responsavel]',
				inadimplente= '$_SESSION[inadimplente]',
					
		
				critico = '$_SESSION[critico]',
				semsuporte= '$_SESSION[semsuporte]',
				status = '$_SESSION[status]',
				noprazo = '$_SESSION[noprazo]',
				statuscontrato = '$_SESSION[statuscontrato]',
				datadecadastro = '$_SESSION[datadecadastro]',
				primeirocontato = '$_SESSION[primeirocontato]',
				
				implantadorrafael = '$_SESSION[implantadorrafael]',
				implantadorkarina = '$_SESSION[implantadorkarina]',
				implantadorwesley = '$_SESSION[implantadorwesley]',
				implantadorsamantha = '$_SESSION[implantadorsamantha]',
				implantadoroutros = '$_SESSION[implantadoroutros]',			
				comentario = '$_SESSION[comentario]'
				WHERE codigo = '$usu_codigo'";

			$confirma = $mysqli->query($sql_code) or die($mysqli->error);


    			
        
				if ($_SESSION[critico]==1 ){
		
		
		// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
include "PHPMailer-master/PHPMailerAutoload.php";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Método de envio
$mail->IsSMTP(); // Enviar por SMTP 
$mail->Host = 'mail.sistecsistemas.com'; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
$mail->Port = 25; 
 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)
$mail->Username = 'implantacaofortesbh@sistecsistemas.com'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'fortesbh1234'; // Mesma senha da sua conta de email
 
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
$mail->From = 'implantacaofortesbh@sistecsistemas.com'; // Seu e-mail
$mail->FromName = "Gestão Fortes BH"; // Seu nome
 
// Define o(s) destinatário(s)

$mail->AddAddress('reginamartins@fortes-bh.com.br', 'Regina');
$mail->AddAddress('simonebarros@fortes-bh.com.br', 'Simone');
$mail->AddAddress('adrianatonon@fortes-bh.com.br', 'Adriana');






//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
 $data=date('d/m/Y ',strtotime($_SESSION[datadecadastro]));
 
// Assunto da mensagem
$mail->Subject = "  $data - Cliente Crítico  (  $_SESSION[nome]  )"; 
 
// Corpo do email

$mail->Body = "Olá,

O cliente da nossa base de dados,está em estado Crítico.Favor entrar em 
contato em até 24 horas.Levante os pontos de criticidade e resolva a 
situação.Envie um email para atendimento@fortes-bh.com.br com cópia para a 
Simone.

Após realizado o processo,alterar o status de 'Critico' no CCS .


Seguem os dados do cliente :

Razão Social :  $_SESSION[nome] 
Telefone : $_SESSION[telefone] 
Email :  $_SESSION[email]
Responsavel :  $_SESSION[responsavel] 



Para acessar sistecsistemas.com 

Em caso de dúvidas , procurar o setor financeiro ou técnico.



E-mail automático , favor não responder.
";
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
  ?>   <div class="loader"></div>  <?php echo "Edição efetuada,enviando e-mail para gerencia..........";
} else {
     echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
}







				}
				
				
				
				
				
				if ($_SESSION[statuscontrato]==3 && $_SESSION[critico]>1 ){
		
		
		// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php
include "PHPMailer-master/PHPMailerAutoload.php";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Método de envio
$mail->IsSMTP(); // Enviar por SMTP 
$mail->Host = 'mail.sistecsistemas.com'; // Você pode alterar este parametro para o endereço de SMTP do seu provedor
$mail->Port = 25; 
 
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório)
$mail->Username = 'implantacaofortesbh@sistecsistemas.com'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'fortesbh1234'; // Mesma senha da sua conta de email
 
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
$mail->From = 'implantacaofortesbh@sistecsistemas.com'; // Seu e-mail
$mail->FromName = "Gestão Fortes BH"; // Seu nome
 
// Define o(s) destinatário(s)
$mail->AddBCC('rafaelsilva@fortes-bh.com.br', 'Rafael');
$mail->AddAddress('reginamartins@fortes-bh.com.br', 'Regina');
$mail->AddAddress('simonebarros@fortes-bh.com.br', 'Simone');
$mail->AddAddress('adrianatonon@fortes-bh.com.br', 'Adriana');
$mail->AddAddress('yarasabrina@fortes-bh.com.br ', 'Yara');






//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
 $data=date('d/m/Y ',strtotime($_SESSION[datadecadastro]));
 
// Assunto da mensagem
$mail->Subject = "  $data - Cliente em Processo de Cancelamento  (  $_SESSION[nome]  )"; 
 
// Corpo do email

$mail->Body = "Olá,

O cliente da nossa base de dados,está em processo de Cancelamento.Favor entrar em 
contato em até 24 horas.Levante os pontos de criticidade e resolva a 
situação.Envie um email para atendimento@fortes-bh.com.br com cópia para a 
Simone.

Após realizado o processo,alterar o status de contrato  no CCS de acordo com o 
conversado.


Seguem os dados do cliente :

Razão Social :  $_SESSION[nome] 
Telefone : $_SESSION[telefone] 
Email :  $_SESSION[email]
Responsavel :  $_SESSION[responsavel] 



Para acessar sistecsistemas.com 

Em caso de dúvidas , procurar o setor financeiro ou técnico.



E-mail automático , favor não responder.
";
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
  ?>   <div class="loader"></div>  <?php echo "Edição efetuada,enviando e-mail para gerencia..........";
} else {
     echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
}







				}
				
				
				
				
				
				
				else {
				    ?>  <div class="loader"></div> <?php echo "Salvando.....";
				}
    








			if($confirma){

				unset($_SESSION[nome],
				
				$_SESSION[graucritico],
                		$_SESSION[origemcr],
                		$_SESSION[statusconversao],
				$_SESSION[email],
				$_SESSION[comentariocr],
				$_SESSION[geraoportunidade],
				$_SESSION[telefone],
				$_SESSION[responsavel],
				$_SESSION[inadimplente],				
				$_SESSION[critico],
				$_SESSION[primeirocontato],
				$_SESSION[status],
				$_SESSION[noprazo],
				$_SESSION[datadecadastro],
				$_SESSION[statuscontrato],
				$_SESSION[cancelados],			
				$_SESSION[implantadorrafael],
				$_SESSION[implantadorkarina],
				$_SESSION[implantadorwesley],
				$_SESSION[implantadorsamantha],
				$_SESSION[implantadoroutros],
				$_SESSION[semsuporte],
				$_SESSION[comentario]
				);

				echo "<script> location.href='inicial.php'; </script>";







			}else
				$erro[] = $confirma;

		}




	}else{

		$sql_code = "SELECT * FROM usuario WHERE codigo = '$usu_codigo'";
		$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
		$linha = $sql_query->fetch_assoc();

		if(!isset($_SESSION))
			


		$_SESSION[nome]=$linha['nome'];
		$_SESSION[graucritico]=$linha['graucritico'];		
		$_SESSION[inadimplente]=$linha['inadimplente'];
		$_SESSION[email]=$linha['email'];
		$_SESSION[origemcr]=$linha['origemcr'];
		$_SESSION[comentariocr]=$linha['comentariocr'];
		$_SESSION[geraoportunidade]=$linha['geraoportunidade'];
		$_SESSION[statusconversao]=$linha['statusconversao'];
		$_SESSION[telefone]=$linha['telefone'];
		$_SESSION[responsavel]=$linha['responsavel'];
		$_SESSION[cancelados]=$linha['cancelados'];
		$_SESSION[critico]=$linha['critico'];
		$_SESSION[status]=$linha['status'];
		$_SESSION[noprazo]=$linha['noprazo'];
		$_SESSION[datadecadastro]=$linha['datadecadastro'];
		$_SESSION[statuscontrato]=$linha['statuscontrato'];
		$_SESSION[primeirocontato] = $linha['primeirocontato'];
	
		$_SESSION[comentario] = $linha['comentario'];
		$_SESSION[implantadorrafael] = $linha['implantadorrafael'];
		$_SESSION[implantadorkarina] = $linha['implantadorkarina'];
		$_SESSION[implantadorwesley] = $linha['implantadorwesley'];
		$_SESSION[implantadorsamantha] = $linha['implantadorsamantha'];
		$_SESSION[implantadoroutros] = $linha['implantadoroutros'];
		$_SESSION[semsuporte] = $linha['semsuporte'];
		
		
		
		
		
		
		

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
    
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
</style>

<!DOCTYPE html>
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

<form action="index.php?p=cadastrar2&usuario=<?php echo $usu_codigo; ?>" method="POST">
	
<div class="row">
  <div class="col-75">
    <div class="container">
      
      
        <div class="row">
          <div class="col-50">
            <h3>Cliente: <?php echo $linha['nome']; ?>  </h3>
            <h4>-Historico de acompanhamento </h4>
             
            
            <input name="nome" value="<?php echo $_SESSION[nome]; ?>" hidden placeholder=" Razão Social" type="text">
            <input name="telefone" value="<?php echo $_SESSION[telefone]; ?>" hidden placeholder="Telefone principal" required type="text">
            <input name="responsavel" value="<?php echo $_SESSION[responsavel]; ?>" hidden placeholder="Responsável pela empresa"   type="text">
            <input name="email" value="<?php echo $_SESSION[email]; ?>"  hidden required placeholder=" E-mail principal"   type="text">
            
            
            
            <label for="datadecadastro"><i class="fa fa-exclamation-triangle"></i> [Temporario] Data de entrada</label>
                <input name="datadecadastro" value="<?php echo $_SESSION[datadecadastro]; ?>" required  type="date">
                
                <p class="espaco"></p>
                <p class="espaco"></p>
                 </br>
                
            <label for="cancelados"><i class="fa fa-calendar-times-o"></i> Total de contatos cancelados</label>
             <input name="cancelados" value="<?php echo $_SESSION[cancelados]; ?>" required placeholder=" Número de cancelamentos" type="text">
             
                 
                 </br>
                
            
        
            
            <label for="primeirocontato"><i class="fa fa-clock-o"></i> Primeiro contato em 48 horas</label>
           <select name="primeirocontato">
	        	<option value="2">Selecione</option>
                <option value="1" <?php if($_SESSION[primeirocontato] == 1) echo "selected"; ?> >Sim</option>
	        	<option value="2" <?php if($_SESSION[primeirocontaro] == 2) echo "selected"; ?> >Não</option>
	</select>
             </br>
             
             
             
              <label><i class="fa fa-bar-chart-o"></i> Implantadores responsáveis</label> 
        	  <?php if($_SESSION[implantadorrafael]==1){  ?>
        	 <input type="checkbox" name="implantadorrafael" checked   value="1"> Rafael<br>
        	 <?php  }if($_SESSION[implantadorrafael]==0){  ?>
        	 <input type="checkbox" name="implantadorrafael"    value="1"> Rafael<br>
        	 
        	 
        	 <?php  }  if($_SESSION[implantadorkarina]==1) {  ?>
        	 <input type="checkbox" name="implantadorkarina"  checked  value="1"> Karina<br>
        	 <?php  }  if($_SESSION[implantadorkarina]==0) {  ?>
              <input type="checkbox" name="implantadorkarina"    value="1"> Karina<br>
              
              
              <?php  }  if($_SESSION[implantadorwesley]==1) {  ?>
        	 <input type="checkbox" name="implantadorwesley"  checked  value="1"> Wesley<br>
        	 <?php  }  if($_SESSION[implantadorwesley]==0) {  ?>
              <input type="checkbox" name="implantadorwesley"    value="1"> Wesley<br>
              
              
              
              <?php  }  if($_SESSION[implantadorsamantha]==1) {  ?>
        	 <input type="checkbox" name="implantadorsamantha"  checked  value="1"> Samantha<br>
        	 <?php  }  if($_SESSION[implantadorsamantha]==0) {  ?>
              <input type="checkbox" name="implantadorsamantha"    value="1"> Samantha<br>
              
              
              <?php  }  if($_SESSION[implantadoroutros]==1) {  ?>
        	 <input type="checkbox" name="implantadoroutros"  checked  value="1"> Outros<br>
        	 <?php  }  if($_SESSION[implantadoroutros]==0) {  ?>
              <input type="checkbox" name="implantadoroutros"    value="1"> Outros<br>
              
              <?php } ?>
              
              
              
             </br>
             <label><i class="fa fa-exclamation-triangle"></i> Cliente Critico</label> 
        	  <?php if($_SESSION[critico]==1){  ?>
        	  <input type="radio" checked onClick="habilitacao()" name="critico" id="critico" 
                  value="1">Sim<br>
               
        	  
        	  <?php }  if($_SESSION[critico]==0 ){  ?>
        	   <input type="radio" onClick="habilitacao()" name="critico" id="critico" 
                 value="1">Sim<br>
                 
                
    
        	  <?php } ?>
        	  
        	  <?php if($_SESSION[critico]==1){  ?>
        	  <input type="radio" onClick="habilitacao()" name="critico" id="semopcao" 
                 value="0" >Não
               
        	  <?php }  if($_SESSION[critico]==0 ){  ?>
        	  <input type="radio" onClick="habilitacao()" checked name="critico" id="semopcao" 
              value="0" >Não </br>
         
        	  <?php } ?>
        	  
          
        
          </br>
          <label for="graucritico"><i class="fa fa-bell-o"></i> Grau Criticidade</label>
                <select name="graucritico">
	            	<option value="">Selecione</option>
	            	    <option value="0" <?php if($_SESSION[graucritico] == 0) echo "selected"; ?>>Indefinido</option>
		            <option value="1" <?php if($_SESSION[graucritico] == 1) echo "selected"; ?>>Baixo</option>
		            <option value="2" <?php if($_SESSION[graucritico] == 2) echo "selected"; ?>>Médio</option>
		            <option value="3" <?php if($_SESSION[graucritico] == 3) echo "selected"; ?>>Imediato</option>
		            <option value="4" <?php if($_SESSION[graucritico] == 4) echo "selected"; ?>>Urgente</option>	
        	</select>
          </br>
          
         
        	  

     
</br> 

        	    <label > <i class="fa fa-keyboard-o"></i> Setor </label>
        	  
        	  
        	       <?php  if($_SESSION[origemcr]==1){ ?>
       <input type="radio"  id="origemcr0" checked name="origemcr" value="1" > Implantação<br>
     
     

                    <?php } if($_SESSION[origemcr]!=1){ ?>
     <input type="radio"  id="origemcr0" name="origemcr" value="1" > Implantação<br>

     
    
     

     
     
    
     

     
          <?php } if($_SESSION[origemcr]==2){ ?>
        <input type="radio"   id="origemcr1" checked name="origemcr" value="2" > Suporte<br>
      
   
      <?php } if($_SESSION[origemcr]!=2){ ?>
      <input type="radio"   id="origemcr1"  name="origemcr" value="2" > Suporte<br>
 
      
      
      
      
      
      <?php } if($_SESSION[origemcr]==4){ ?>
        <input type="radio"   id="origemcr1" checked name="origemcr" value="4" > Conversão<br>
      
   
      <?php } if($_SESSION[origemcr]!=4){ ?>
      <input type="radio"   id="origemcr1"  name="origemcr" value="4" > Conversão <br>
 
      
      
      
      
      
      
      <?php } if($_SESSION[origemcr]==3){ ?>
  
        <input type="radio"   id="origemcr2" checked name="origemcr" value="3" readonly> Relacionamento<br>
      </div>
     
            <?php } if($_SESSION[origemcr]!=3){ ?>
            <input type="radio"   id="origemcr2"  name="origemcr" value="3" readonly> Relacionamento<br>
   
      

  
  </br>
  </br>
      <?php  } ?>
            
 
            
<hr>

<label for="geraoportunidade"><i class="fa fa-shopping-basket"></i> Gera oportunidade de venda</label>
           <select name="geraoportunidade">
	        	<option value="">Selecione</option>
                <option value="1" <?php if($_SESSION[geraoportunidade] == 1) echo "selected"; ?> >Sim</option>
	        	<option value="0" <?php if($_SESSION[geraoportunidade] == 0) echo "selected"; ?> >Não</option>
	</select>






<label for="inadimplente"><i class="fa fa-thumbs-down"></i> Cliente inadimplente</label>
           <select name="inadimplente">
	        	<option value="">Selecione</option>
                <option value="1" <?php if($_SESSION[inadimplente] == 1) echo "selected"; ?> >Sim</option>
	        	<option value="0" <?php if($_SESSION[inadimplente] == 0) echo "selected"; ?> >Não</option>
	</select>

              <p class=espaco></p>
         
             
            <label for="semsuporte"<i class="fa fa-clone"></i> Cliente sem suporte ativo</label>
                <select name="semsuporte">
	            	<option value="">Selecione</option>
		            <option value="0" <?php if($_SESSION[semsuporte] == 0) echo "selected"; ?>>Não</option>
		            <option value="1" <?php if($_SESSION[semsuporte] == 1) echo "selected"; ?>>Sim</option>	
        	</select>
             
             
            
            <label for="statuscontrato"<i class="fa fa-clone"></i> Status do Contrato</label>
                <select name="statuscontrato">
	            	<option value="">Selecione</option>
		            <option value="0" <?php if($_SESSION[statuscontrato] == 0) echo "selected"; ?>>Ativo</option>
		            <option value="1" <?php if($_SESSION[statuscontrato] == 1) echo "selected"; ?>>Cancelado</option>
		            <option value="2" <?php if($_SESSION[statuscontrato] == 2) echo "selected"; ?>>Suspenso</option>
		            <option value="3" <?php if($_SESSION[statuscontrato] == 3) echo "selected"; ?>>Em processo de cancelamento</option>
		            
        	</select>
        	
        	
        	<label for="status"<i class="fa fa-tasks"></i> Status da Conversão</label>
                <select name="statusconversao">
	            	      <option value="">Selecione</option>
	            	    <option value="0" <?php if($_SESSION[statusconversao] == 0) echo "selected"; ?>>Indefinido</option>
	            	    <option value="1" <?php if($_SESSION[statusconversao] == 1) echo "selected"; ?>>Na fila</option>
		            <option value="2" <?php if($_SESSION[statusconversao] == 2) echo "selected"; ?>>Em andamento</option>
		            <option value="4" <?php if($_SESSION[statusconversao] == 4) echo "selected"; ?>>Finalizado</option>
		            <option value="5" <?php if($_SESSION[statusconversao] == 5) echo "selected"; ?>>Critico</option>
        	</select>
            
            
             <label for="status"<i class="fa fa-tasks"></i> Status da implantação</label>
                <select name="status">
	            	<option value="">Selecione</option>
	            	<option value="0" <?php if($_SESSION[status] == 0) echo "selected"; ?>>A planejar</option>
	            	<option value="1" <?php if($_SESSION[status] == 1) echo "selected"; ?>>Em andamento</option>
		            <option value="2" <?php if($_SESSION[status] == 2) echo "selected"; ?>>Paralizado por conta do cliente</option>
		            <option value="3" <?php if($_SESSION[status] == 3) echo "selected"; ?>>Paralizado por conta da Fortes</option>
		            <option value="4" <?php if($_SESSION[status] == 4) echo "selected"; ?>>Finalizado</option>
        	</select>
        	
        	
        	
        	
            
            
            <?php if  ($_SESSION[status]==4){ ?>
            <label for="noprazo"><i class="fa fa-calendar"></i> Implantação finalizada no prazo</label>
           <select name="noprazo">
	        	
	        	<option value="1" <?php if($_SESSION[noprazo] == 1) echo "selected"; ?>>Sim</option>
	        	<option value="2" <?php if($_SESSION[noprazo] == 2) echo "selected"; ?>>Não</option>
	        		<option value="3"disabled <?php if($_SESSION[noprazo] == 3) echo "selected"; ?>>Ainda não finalizado</option>
	   
        	</select>
        <?php }   else {  ?>
        
        <label  for="noprazo"><i class="fa fa-calendar"></i> Implantação finalizada no prazo</label>
           <select name="noprazo">
	        	
	        	<option value="1" disabled <?php if($_SESSION[noprazo] == 1) echo "selected"; ?>>Sim</option>
	        	<option value="2"disabled <?php if($_SESSION[noprazo] == 2) echo "selected"; ?>>Não</option>
	        		<option value="3" <?php if($_SESSION[noprazo] == 3) echo "selected"; ?>>Ainda não finalizado</option>
       
       
       <?php  } ?>
       
       
       
            
           </br>
           
           
           </br>
          
            <label for="comentario"><i class="fa fa-align-left"></i> Resumo de atendimento</label>
            <textarea name="comentario" placeholder="Escreva o reseumo de atendimento do cliente ..."   style="height:200px;"><?php echo $_SESSION[comentario]; ?></textarea>
     
          
            
           </br>
            <label for="comentariocr"><i class="fa fa-align-left"></i> Observações Criticas</label>
            <textarea name="comentariocr"    style="height:200px;"><?php echo $_SESSION[comentariocr]; ?></textarea>
        
        
   
      <input value="Salvar" class="btn" name="confirmar" type="submit">
      </form>
      <form action="inicial.php" method="POST">
      <input value="Cancelar" class="btn" name="confirmar" type="submit">
    
    
    </form>
  </div>
  
  </div>
</div>

</body>
</html>


<?php } ?>
