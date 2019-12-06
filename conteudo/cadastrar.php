<style>
.btn {
    background-color: #696969;
    color: white;
    padding: 13px;
    font-size: 14px;
    border: none;
    outline: none;
    border-radius: 5px;
}

.dropdown {
    position: center;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #BEBEBE;
    min-width: 90px;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.btn:hover, .dropdown:hover .btn {
    background-color: #0b7dda;
}





* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/Imgs/search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  border-radius: 10px;
}


#myInput1 {
  background-image: url('/Imgs/search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  border-radius: 10px;
}

.header h1 {
    font-size: 40px;
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
<style>
 .table-hover{
  font-size: 13px;
}
 </style>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Alice' rel='stylesheet'>
  <link rel="shortcut icon" href="Imgs/favicon.ico" />
 
	<head>
	<body>


 <div class="header">
  <img alt="" src="/Imgs/banerf.png"   class="responsive" />
  
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="home2.php">CCS</a>



  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="inicial.php">Clientes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?p=cadastrar">Novo Cadastro</a>
    </li>
     
     <li class="nav-item">
      <a class="nav-link" href="matriz.php">Matriz</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="index.php?p=cadastrojustificativa">Justificativa de ponto</a>
    </li>
   
  </ul>
</nav>
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

			$sql_code = "INSERT INTO usuario (
				nome, 
				endereco,
				cnpj, 
				email, 
				modalidade, 
				classificacao,
				responsavel,
				comentario,
				telefone,
				telefone2,
				vendedor,
				cpessoal,
				cfiscal,
				ccontabil,
				cponto,
				cag,
				crh,
				contcore,
				contconecta,
				contdoc,
				contgestao,
				contpatrio,
				usuarios,
				horascontratadas,
				unidade,
				ambiente,
				mapeamentovendedor,
			    datadecadastro)
				VALUES(
				'$_SESSION[nome]',
				'$_SESSION[endereco]',
				'$_SESSION[cnpj]',
				'$_SESSION[email]',
				'$_SESSION[modalidade]',
				'$_SESSION[classificacao]',
				'$_SESSION[responsavel]',
				'$_SESSION[comentario]',
				'$_SESSION[telefone]',
				'$_SESSION[telefone2]',
				'$_SESSION[vendedor]',
				'$_SESSION[cpessoal]',
				'$_SESSION[cfiscal]',
				'$_SESSION[ccontabil]',
				'$_SESSION[cponto]',
				'$_SESSION[cag]',
				'$_SESSION[crh]',
				'$_SESSION[contcore]',
				'$_SESSION[contconecta]',
				'$_SESSION[contdoc]',
				'$_SESSION[contgestao]',
				'$_SESSION[contpatrio]',
				'$_SESSION[usuarios]',
				'$_SESSION[horascontratadas]',
				'$_SESSION[unidade]',
				'$_SESSION[ambiente]',
				'$_SESSION[mapeamentovendedor]',
				NOW()
				)";

			$confirma = $mysqli->query($sql_code) or die($mysqli->error);
		
		
		
		
		
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


$mail->AddAddress('atendimento@fortes-bh.com.br', 'Atendimento');
 
 

//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 
// Assunto da mensagem
$mail->Subject = "Cadastro cliente - CSS "; 
 
// Corpo do email
$mail->Body = "Olá,

Foi cadastrado um novo cliente em nossa base de dados.
Favor entrar em contato em ate 48 horas utéis pare realizar os processos iniciais de implantação.
Seguem os dados do cliente :

Razão Social :  $_SESSION[nome] 
Telefone : $_SESSION[telefone] 
Email :  $_SESSION[email]
Responsavel :  $_SESSION[responsavel] 


Em caso de duvidas , procurar o setor financeiro ou comercial.



E-mail automático , favor não responder.
";
 
 
// Anexos (opcional)
//$mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail
$enviado = $mail->Send();
 
 
// Exibe uma mensagem de resultado
if ($enviado) {
     echo "Cadastro efetuado,enviando e-mail de cadastro para implantação ..........";
} else {
     echo "Houve um erro enviando o email: ".$mail->ErrorInfo;
}















			if($confirma){

				unset($_SESSION[nome],
				$_SESSION[cnpj],
				$_SESSION[endereco],
				$_SESSION[email],
				$_SESSION[modalidade],
				$_SESSION[classificacao],
				$_SESSION[responsavel],
				$_SESSION[comentario],
				$_SESSION[telefone],
				$_SESSION[telefone2],
				$_SESSION[vendedor],
				$_SESSION[cpessoal],
				$_SESSION[cfiscal],
				$_SESSION[ccontabil],
				$_SESSION[cponto],
				$_SESSION[cag],
				$_SESSION[crh],
				$_SESSION[contcore],
				$_SESSION[contconecta],
				$_SESSION[contdoc],
				$_SESSION[contgestao],
				$_SESSION[contpatrio],
				$_SESSION[usuarios],
				$_SESSION[horascontratadas],
				$_SESSION[mapeamentovendedor],
				$_SESSION[ambiente],
				$_SESSION[unidade],
				$_SESSION[datadecadastro]);

				echo "<script> location.href='inicial.php'; </script>";

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

.responsive {
  max-width: 70%;
  height: auto;
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
   </br>    
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="index.php?p=cadastrar" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Cadastral</h3>
            <label for="nome"><i class="fa fa-home"></i> Razão Social</label>
             <input name="nome" value="<?php echo $_SESSION[nome]; ?>" required placeholder=" Razão Social" type="text">
             
             <label for="cnpj"><i class="fa fa-id-card"></i> Cnpj/CPF</label>
                <input name="cnpj" value="<?php echo $_SESSION[cnpj]; ?>" required placeholder="Cnpj/Cpf" type="text">
                
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input name="email" value="<?php echo $_SESSION[email]; ?>" required placeholder=" E-mail principal"   type="text">
            
             <label for="responsavel"<i class="fa fa-clock-o"></i>  Responsável</label>
                <input name="responsavel" value="<?php echo $_SESSION[responsavel]; ?>" placeholder="Responsável pela empresa"   type="text">
            
            
            <label for="telefone"><i class="fa fa-phone"></i> Telefone</label>
            <input name="telefone" value="<?php echo $_SESSION[telefone]; ?>" placeholder="Telefone principal" required type="text">
            
            <label for="telefone2"><i class="fa fa-phone"></i> Telefone 2</label>
            <input name="telefone2" value="<?php echo $_SESSION[telefone2]; ?>" placeholder="Telefone principal"  type="text">
            
            <label for="endereco"><i class="fa fa-building-o"></i> Endereço</label>
           
            <textarea name="endereco" placeholder="Endereço completo."   style="height:50px;"></textarea>
            
             <label for="vendedor"><i class="fa fa-exchange"></i> Vendedor</label>
            <select required name="vendedor">
		    <option value="">Selecione</option>
		    <option value="1" <?php if($_SESSION[vendedor] == 1) echo "selected"; ?> >Simone</option>
	    	<option value="4" <?php if($_SESSION[vendedor] == 4) echo "selected"; ?> >Adriana</option>
	    	<option value="8" <?php if($_SESSION[vendedor] == 8) echo "selected"; ?> >Caroline</option>
	    	<option value="2" <?php if($_SESSION[vendedor] == 2) echo "selected"; ?> >Leandro</option>
	    	<option value="5" <?php if($_SESSION[vendedor] == 5) echo "selected"; ?> >Tarick</option>
	    	<option value="3" <?php if($_SESSION[vendedor] == 3) echo "selected"; ?> >Helen</option>
	    	<option value="6" <?php if($_SESSION[vendedor] == 6) echo "selected"; ?> >Anderson</option>
	    	<option value="7" <?php if($_SESSION[vendedor] == 7) echo "selected"; ?> >Matriz</option>
	    	<option value="0" <?php if($_SESSION[vendedor] == 0) echo "selected"; ?> >Outros</option>
        	</select>
        	
        	
        	
        	
            
            <label for="unidade"><i class="fa fa-institution"></i> Unidade</label>
           <select required name="unidade">
            <option value="">Selecione</option>
	    	<option value="1" <?php if($_SESSION[unidade] == 1) echo "selected"; ?> >Belo Horizonte</option>
		    <option value="2" <?php if($_SESSION[unidade] == 2) echo "selected"; ?> >Montes Claros</option>
		    
        </select>
        
        
        <label for="ambiente"><i class="fa fa-institution"></i> Tipo de sistema</label>
           <select required name="ambiente">
            <option value="">Selecione</option>
	    	    <option value="1" <?php if($_SESSION[ambiente] == 1) echo "selected"; ?> >Desktop(Local)</option>
		    <option value="2" <?php if($_SESSION[ambiente] == 2) echo "selected"; ?> >Cloud</option>
		    <option disabled value="3" <?php if($_SESSION[ambiente] == 3) echo "selected"; ?> >Web</option>
		    
        </select>

            <div class="row">
              <div class="col-50">
              <label for="horascontratadas"<i class="fa fa-clock-o"></i> Horas Contratada</label>
                <input name="horascontratadas" value="<?php echo $_SESSION[horascontratadas]; ?>" placeholder="Horas Contratadas"required  type="text">
              </div>
              <div class="col-50">
                 <label for="usuarios"><i class="fa fa-group"></i> Quantidade de usuários</label>
                <input name="usuarios" value="<?php echo $_SESSION[usuarios]; ?>" placeholder="Número de usuários"required type="text">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Contratual</h3>
            <label for="modalidade"><i class="fa fa-exchange"></i> Modalidade de implantação</label>
            <select required name="modalidade">
		    <option value="">Selecione</option>
		    <option value="1" <?php if($_SESSION[modalidade] == 1) echo "selected"; ?> >Presencial</option>
	    	<option value="2" <?php if($_SESSION[modalidade] == 2) echo "selected"; ?> >Remoto</option>
        	</select>
        	   
        	
        	 <label><i class="fa fa-bar-chart-o"></i> Sistemas contratados</label>
        	 <input type="checkbox" name="cpessoal" value="1"> Pessoal<br>
             <input type="checkbox" name="ccontabil" value="1"> Fiscal<br>
             <input type="checkbox" name="cfiscal" value="1" > Contábil<br>
             
             <input type="checkbox" name="contconecta" value="1" > Conecta<br>
             <input type="checkbox" name="contdoc" value="1" > DOC<br>
             <input type="checkbox" name="contgestao" value="1" > Gestão<br>
             <input type="checkbox" name="contpatrio" value="1" > Patrio<br>
             <input type="checkbox" name="contcore" value="1" > Core<br>
             <br>
             <label><i class="fa fa-building-o"> Corporativo </i> </label>
             <input type="checkbox" name="crh" value="1"> RH<br>
             <input type="checkbox" name="cponto" value="1"> Ponto<br>
             <input type="checkbox" name="cag" value="1" > AG<br
             
        	 
        	
        	
			 <br>
            <br />
            <label for="classificacao"><i class="fa fa-child"></i> Classificação do cliente </label>
            <select  required name="classificacao">
	    	<option value="">Selecione</option>
	    	<option value="4" <?php if($_SESSION[classificacao] == 4) echo "selected"; ?>>Bronze</option>
		    <option value="1" <?php if($_SESSION[classificacao] == 1) echo "selected"; ?>>Ouro</option>
	    	<option value="2" <?php if($_SESSION[classificacao] == 2) echo "selected"; ?>>Prata</option>
	    	<option value="3" <?php if($_SESSION[classificacao] == 3) echo "selected"; ?>>Diamante</option>
        	</select>
           
            <label for="comentario"><i class="fa fa-align-left"></i> Observação</label>
            <textarea name="comentario" placeholder="Escreva um comentario sobre o cliente ..."  style="height:200px;"></textarea>
            
            </br>
            <label for="mapeamentovendedor"><i class="fa fa-align-left"></i> Mapeamento de Cenrário (Vendedor)</label>
            <textarea name="mapeamentovendedor" placeholder="Coloque aqui o mapeamento feito pelo vendedor."  required style="height:200px;"></textarea>
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
      <form action="inicial.php" method="POST">
      <input value="Cancelar" class="btn" name="confirmar" type="submit">
      
      </form>
    </div>
  </div>
 
</div>

</body>
</html>
