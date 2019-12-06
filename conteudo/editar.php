<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>

  
  <script type="text/javascript" src="nicEdit-latest.js"></script>
  <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
        new nicEditor({maxHeight : 200}).panelInstance('area');
      
  });
  //]]>
  </script>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Editar Cadastro</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Alice' rel='stylesheet'>
</head>
<body>


<?php
//inclusão de informações pos cadastro
        $modalidade[1] = "Presencial";
	$modalidade[2] = "Remoto";

	$classificacao[1] = "Prata";
	$classificacao[2] = "Ouro";
	$classificacao[3] = "Diamante";
	
	
	$vendedor[0] = "Outros";
	$vendedor[1] = "Simone";
	$vendedor[2] = "Leandro";
	$vendedor[3] = "Helen";
	$vendedor[4] = "Adriana";
	$vendedor[5] = "Tarick";
	$vendedor[6] = "Anderson";
	$vendedor[7] = "Matriz";
	$vendedor[8] = "Caroline";
	
	


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
				
				
				noprazo= '$_SESSION[noprazo]',
				ambiente= '$_SESSION[ambiente]',
				bercario= '$_SESSION[bercario]',
				status= '$_SESSION[status]',
				datadecadastro= '$_SESSION[datadecadastro]',
				cancelados= '$_SESSION[cancelados]',
				origemcr= '$_SESSION[origemcr]',
				critico= '$_SESSION[critico]',
				primeirocontato= '$_SESSION[primeirocontato]',
				nome = '$_SESSION[nome]',
				cnpj = '$_SESSION[cnpj]',
				endereco= '$_SESSION[endereco]',
				email = '$_SESSION[email]',
				classificacao = '$_SESSION[classificacao]',
				comentario = '$_SESSION[comentario]',
				comentariocr = '$_SESSION[comentariocr]',
				horascontratadas = '$_SESSION[horascontratadas]',
				usuarios = '$_SESSION[usuarios]',
				unidade = '$_SESSION[unidade]',
				vendedor = '$_SESSION[vendedor]',
				notanps  = '$_SESSION[notanps]',
				contcore = '$_SESSION[contcore]',
				contconecta = '$_SESSION[contconecta]',
				contdoc = '$_SESSION[contdoc]',
				contgestao = '$_SESSION[contgestao]',
				contpatrio = '$_SESSION[contpatrio]',
				inadimplente= '$_SESSION[inadimplente]',
				statuscontrato= '$_SESSION[statuscontrato]',
				implantadorrafael = '$_SESSION[implantadorrafael]',
				implantadorkarina = '$_SESSION[implantadorkarina]',
				implantadorwesley = '$_SESSION[implantadorwesley]',
				implantadorsamantha = '$_SESSION[implantadorsamantha]',
				implantadoroutros = '$_SESSION[implantadoroutros]',	
				
				
				
				
				cpessoal = '$_SESSION[cpessoal]',
				cfiscal = '$_SESSION[cfiscal]',
				ccontabil = '$_SESSION[ccontabil]',
				cponto = '$_SESSION[cponto]',
				cag = '$_SESSION[cag]',
				crh = '$_SESSION[crh]',
				telefone = '$_SESSION[telefone]',
				telefone2 = '$_SESSION[telefone2]',
				responsavel = '$_SESSION[responsavel]',
				modalidade = '$_SESSION[modalidade]'
				
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

				unset(
				
				
				$_SESSION[bercario],
				$_SESSION[ambiente],
				$_SESSION[noprazo],
				$_SESSION[status],
				$_SESSION[datadecadastro],
				$_SESSION[cancelados],
				$_SESSION[comentariocr],
				$_SESSION[origemcr],
				$_SESSION[critico],
				$_SESSION[primeirocontato],
				$_SESSION[nome],
				$_SESSION[cnpj],
				$_SESSION[endereco],
				$_SESSION[email],
				$_SESSION[classificacao],
				$_SESSION[comentario],
				$_SESSION[horascontratadas],
				$_SESSION[usuarios],
				$_SESSION[unidade],
				$_SESSION[vendedor],
				$_SESSION[inadimplente],
				$_SESSION[notanps],
				
				$_SESSION[statuscontrato],
				$_SESSION[contcore],
				$_SESSION[contconecta],
				$_SESSION[contdoc],
				$_SESSION[contgestao],
				$_SESSION[contpatrio],
				$_SESSION[implantadorrafael],
				$_SESSION[implantadorkarina],
				$_SESSION[implantadorwesley],
				$_SESSION[implantadorsamantha],
				$_SESSION[implantadoroutros],
				
				$_SESSION[cpessoal],
				$_SESSION[cfiscal],
				$_SESSION[ccontabil],
				$_SESSION[cponto],
				$_SESSION[crh],
				$_SESSION[cag],
				
				$_SESSION[modalidade],
				$_SESSION[responsavel],
				$_SESSION[telefone],
				$_SESSION[telefone2]
				
				
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
		

		
		$_SESSION[bercario] = $linha['bercario'];
		$_SESSION[noprazo] = $linha['noprazo'];
		$_SESSION[ambiente] = $linha['ambiente'];
		$_SESSION[status] = $linha['status'];
		$_SESSION[datadecadastro] = $linha['datadecadastro'];
		$_SESSION[cancelados] = $linha['cancelados'];
		$_SESSION[comentariocr] = $linha['comentariocr'];
		$_SESSION[origemcr] = $linha['origemcr'];
		$_SESSION[primeirocontato] = $linha['primeirocontato'];
		$_SESSION[critico] = $linha['critico'];
		$_SESSION[notanps] = $linha['notanps'];
		
    	$_SESSION[nome] = $linha['nome'];
		$_SESSION[cnpj] = $linha['cnpj'];
		$_SESSION[endereco] = $linha['endereco'];
		$_SESSION[email] = $linha['email'];
		$_SESSION[classificacao] = $linha['classificacao'];
		$_SESSION[comentario] = $linha['comentario'];
		$_SESSION[horascontratadas]=$linha['horascontratadas'];
		$_SESSION[usuarios]=$linha['usuarios'];
		$_SESSION[unidade]=$linha['unidade'];
		$_SESSION[vendedor]=$linha['vendedor'];
		$_SESSION[inadimplente]=$linha['inadimplente'];
		$_SESSION[statuscontrato]=$linha['statuscontrato'];
		
		$_SESSION[implantadorrafael] = $linha['implantadorrafael'];
		$_SESSION[implantadorkarina] = $linha['implantadorkarina'];
		$_SESSION[implantadorwesley] = $linha['implantadorwesley'];
		$_SESSION[implantadorsamantha] = $linha['implantadorsamantha'];
		$_SESSION[implantadoroutros] = $linha['implantadoroutros'];
	
		
			$_SESSION[contcore]=$linha['contcore'];
		$_SESSION[contconecta]=$linha['contconecta'];
		$_SESSION[contdoc]=$linha['contdoc'];
		$_SESSION[contpatrio]=$linha['contpatrio'];
		$_SESSION[contgestao]=$linha['contgestao'];
		
		$_SESSION[cpessoal]=$linha['cpessoal'];
		$_SESSION[ccontabil]=$linha['ccontabil'];
		$_SESSION[cfiscal]=$linha['cfiscal'];
		$_SESSION[cponto]=$linha['cponto'];
		$_SESSION[crh]=$linha['crh'];
		$_SESSION[cag]=$linha['cag'];
		
		$_SESSION[modalidade] = $linha['modalidade'];
		$_SESSION[responsavel] = $linha['responsavel'];
		$_SESSION[telefone]= $linha['telefone'];
		$_SESSION[telefone2]= $linha['telefone2'];
		
		
		
		

	}

?>





 <div class="header">
  <img alt="" src="/Imgs/banerf.png"  class="responsive" />
  
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">CCS</a>



  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="inicial.php">Clientes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?p=cadastrar">Novo Cadastro</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="gerenciamento.php">Gerenciamento</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="matriz.php">Matriz</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="cadastrojustificativa.php">Justificativa de ponto</a>
    </li>
   
  </ul>
</nav>
<body>

<style>
   .responsive {
  max-width: 70%;
  height: auto;
}

   
   .container2 {
  
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

.
   </style>

<?php 
if(count($erro) > 0){ 
	echo "<div class='erro'>"; 
	foreach($erro as $valor) 
		echo "$valor <br>"; 

	echo "</div>"; 
}
?>


 <div class="container">
</br>
 <center><h3> <?php echo $_SESSION[nome]; ?></h3></center>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home"><font color="#585858">Cadastral</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1"><font color="#585858">Contratual</font></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2"><font color="#585858">Implantação / Suporte</font></a>
    </li>
    
    
    <li class="nav-item">
      <a class="nav-link"  href="index.php?p=cronograma&usuario=<?php echo $linha['codigo']; ?>"><font color="#585858">Cronograma</font></a>
    </li>
    
    
  </ul>
  
  </div>
     <form action="index.php?p=editar&usuario=<?php echo $usu_codigo; ?>" method="POST">
     
      <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <div class="container2">
      
     
      		<div class="form-group">
     		 <label for="nome"><i class="fa fa-home"></i> Razão Social</label>
             <input name="nome" class="form-control" id="usr" value="<?php echo $_SESSION[nome]; ?>"  placeholder=" Razão Social" type="text">
               </div>
             
          	   <div class="form-group">
                 <label for="cnpj"><i class="fa fa-id-card"></i> Cnpj/CPF</label>
                <input name="cnpj"  class="form-control" id="usr" value="<?php echo $_SESSION[cnpj]; ?>"  placeholder="Cnpj/Cpf" type="text"> 
                   </div>
                
                
                <div class="form-group">
            <label for="telefone"><i class="fa fa-phone"></i> Telefone</label>
            <input name="telefone" class="form-control" id="usr" value="<?php echo $_SESSION[telefone]; ?>" placeholder="Telefone principal" required type="text">
             	 </div>
            
            	<div class="form-group">
             <label for="telefone2"><i class="fa fa-phone"></i> Telefone 2</label>
            <input name="telefone2" class="form-control" id="usr" value="<?php echo $_SESSION[telefone2]; ?>" placeholder="Telefone secundario"  type="text">
              	</div>
            
            	<div class="form-group">
             <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input name="email" class="form-control" id="usr" value="<?php echo $_SESSION[email]; ?>" required placeholder=" E-mail principal"   type="text">
              	</div>
            
            	<div class="form-group">
            <label for="responsavel"<i class="fa fa-clock-o"></i>  Responsável</label>
                <input name="responsavel"  class="form-control" id="usr" value="<?php echo $_SESSION[responsavel]; ?>" placeholder="Responsável pela empresa"   type="text">
        	</div>
        
        
        
        <div class="form-group">
        <label for="endereco"><i class="fa fa-building-o"></i> Endereço</label>
        <input name="endereco"  class="form-control" id="usr" value="<?php echo $_SESSION[endereco]; ?>" placeholder="Endereço da empresa"   type="text">
         </div>
       					 
     
     
     
    </div>
    </br>
    
    
    
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>
    </div>
    
    
    
    
     <div id="menu1" class="container tab-pane fade"><br>
    <div class="container2">
    
    
        
        
        
        
  		
  		
  		<div class="form-group">
  		<label for="modalidade"><i class="fa fa-exchange"></i> Modalidade de implantação</label>
            <select class="form-control" name="modalidade">
		    <option value="">Selecione</option>
		    <option value="1" <?php if($_SESSION[modalidade] == 1) echo "selected"; ?> >Presencial</option>
	    	<option value="2" <?php if($_SESSION[modalidade] == 2) echo "selected"; ?> >Remoto</option>
        	</select>
        	</div>
        	
        	
        	<div class="form-group">
        	<label for="inadimplente"><i class="fa fa-thumbs-down"></i> Cliente inadimplente</label>
           	<select class="form-control" name="inadimplente">
	        	<option value="">Selecione</option>
                <option value="1" <?php if($_SESSION[inadimplente] == 1) echo "selected"; ?> >Sim</option>
	        	<option value="0" <?php if($_SESSION[inadimplente] == 0) echo "selected"; ?> >Não</option>
		</select>
		</div>
		
		<div class="form-group">
        	<label for="ambiente"><i class="fa fa-sitemap"></i> Tipo de sistema</label>
           	<select class="form-control" name="ambiente">
	        	<option value="">Selecione</option>
                	<option value="1" <?php if($_SESSION[ambiente] == 1) echo "selected"; ?> >Desktop(Local)</option>
	        	<option value="2" <?php if($_SESSION[ambiente] == 2) echo "selected"; ?> >Cloud</option>
	        	<option value="3" disabled <?php if($_SESSION[ambiente] == 3) echo "selected"; ?> >Web</option>
		</select>
		</div>
        	
        	
        	<div class="form-group">
        	<label for="statuscontrato"<i class="fa fa-clone"></i> Status do Contrato</label>
                <select  class="form-control" name="statuscontrato">
	            	<option value="">Selecione</option>
		            <option value="0" <?php if($_SESSION[statuscontrato] == 0) echo "selected"; ?>>Ativo</option>
		            <option value="1" <?php if($_SESSION[statuscontrato] == 1) echo "selected"; ?>>Cancelado</option>
		            <option value="2" <?php if($_SESSION[statuscontrato] == 2) echo "selected"; ?>>Suspenso</option>
		            <option value="3" <?php if($_SESSION[statuscontrato] == 3) echo "selected"; ?>>Em processo de cancelamento</option>
		            
        	</select>
        	</div>
        	
        	
        	<div class="form-group">
  		<label for="horascontratadas"<i class="fa fa-clock-o"></i> Horas Contratada</label>
                <input name="horascontratadas" class="form-control"  value="<?php echo $_SESSION[horascontratadas]; ?>"  required   type="text"> 
                </div>
                
                <div class="form-group">
                <label for="usuarios"><i class="fa fa-group"></i> Quantidade de usuários</label>
                <input name="usuarios" class="form-control"  value="<?php echo $_SESSION[usuarios]; ?>" placeholder="Número de usuários"required type="text">
                </div>
                
                <div class="form-group">
                <label for="unidade"><i class="fa fa-institution"></i> Unidade</label>
           <select  class="form-control" name="unidade">
            	<option value="">Selecione</option>
	    	<option value="1" <?php if($_SESSION[unidade] == 1) echo "selected"; ?> >Belo Horizonte</option>
		    <option value="2" <?php if($_SESSION[unidade] == 2) echo "selected"; ?> >Montes Claros</option>
		    
        </select>
        </div>
        
        <div class="form-group">
        <label for="vendedor"><i class="fa fa-exchange"></i> Vendedor</label>
            <select class="form-control"  name="vendedor">
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
        	</div>
        	
        	<div class="form-group">
        	<label for="classificacao"><i class="fa fa-child"></i> Classificação do cliente </label>
            <select  class="form-control" name="classificacao">
	    	<option value="">Selecione</option>
	    		<option value="4" <?php if($_SESSION[classificacao] == 4) echo "selected"; ?>>Bronze</option>
		    <option value="1" <?php if($_SESSION[classificacao] == 1) echo "selected"; ?>>Ouro</option>
	    	<option value="2" <?php if($_SESSION[classificacao] == 2) echo "selected"; ?>>Prata</option>
	    	<option value="3" <?php if($_SESSION[classificacao] == 3) echo "selected"; ?>>Diamante</option>
        	</select>
        </div>
        
  		
     
      <div class="form-group">
        	   <label><i class="fa fa-bar-chart-o"></i> Sistemas contratados</label> </br>
        	  <?php if($_SESSION[cpessoal]==1){  ?>
        	 <input type="checkbox" name="cpessoal" checked   value="1"> Pessoal<br>
        	  <?php } if($_SESSION[ccontabil]==1){  ?>
             <input type="checkbox" name="cfiscal"  checked   value="1"> Fiscal<br>
              <?php } if($_SESSION[cfiscal]==1){ ?>
             <input type="checkbox" name="ccontabil"  checked  value="1" > Contábil<br>
              <?php } if($_SESSION[contconecta]==1){  ?>
        	 <input type="checkbox" name="contconecta"  checked    value="1"> Conecta<br>
        	  <?php } if($_SESSION[contdoc]==1){  ?>
             <input type="checkbox" name="contdoc"  checked   value="1"> Doc<br>
              <?php } if($_SESSION[contpatrio]==1){ ?>
             <input type="checkbox" name="contpatrio" checked    value="1" > Patrio<br>
              <?php } if($_SESSION[contgestao]==1){  ?>
             <input  type="checkbox" name="contgestao" checked  value="1"> Gestão <br>
             <?php } if($_SESSION[contcore]==1){  ?>
             <input  type="checkbox" name="contcore" checked  value="1"> Core <br>
             
              <?php } ?>
              
               <?php if($_SESSION[cpessoal]==0){  ?>
        	 <input type="checkbox" name="cpessoal"    value="1"> Pessoal<br>
        	  <?php } if($_SESSION[ccontabil]==0){  ?>
             <input type="checkbox" name="cfiscal"     value="1"> Fiscal<br>
              <?php } if($_SESSION[cfiscal]==0){ ?>
             <input type="checkbox" name="ccontabil"     value="1" > Contábil<br>
              <?php } if($_SESSION[contconecta]==0){  ?>
        	 <input type="checkbox" name="contconecta"    value="1"> Conecta<br>
        	  <?php } if($_SESSION[contdoc]==0){  ?>
             <input type="checkbox" name="contdoc"     value="1"> Doc<br>
              <?php } if($_SESSION[contpatrio]==0){ ?>
             <input type="checkbox" name="contpatrio"     value="1" > Patrio<br>
              <?php } if($_SESSION[contgestao]==0){  ?>
             <input  type="checkbox" name="contgestao"  value="1"> Gestão <br>
             <?php } if($_SESSION[contcore]==0){  ?>
        	 <input type="checkbox" name="contcore"    value="1"> Core<br>
             
              <?php } ?>
                
                </br>
                </br>
				
				
 
            	<label><i class="fa fa-building-o"> Corporativo </i> </label> </br>
              <?php  if($_SESSION[crh]==1){  ?>
             <input  type="checkbox" name="crh" checked  value="1"> RH<br>
              <?php } if($_SESSION[cponto]==1){ ?>
             <input type="checkbox" name="cponto" checked  value="1"> Ponto<br>
              <?php } if($_SESSION[cag]==1){ ?>
             <input type="checkbox" name="cag" checked   value="1" > AG<br><br>
             
              <?php } if($_SESSION[crh]==0){  ?>
             <input  type="checkbox" name="crh"  value="1"> RH<br>
              <?php } if($_SESSION[cponto]==0){ ?>
             <input type="checkbox" name="cponto"  value="1"> Ponto<br>
              <?php } if($_SESSION[cag]==0){ ?>
             <input type="checkbox" name="cag"  value="1" > AG<br><br>
               
              <?php } ?>
  		</div>
  		</div>
    </br>
    
    
    
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>
    </div>
    
    
    
    <div id="menu2" class="container tab-pane fade"><br>
    <div class="container2">
    
    <div class="form-group">
    <label for="datadecadastro"><i class="fa fa-exclamation-triangle"></i> Data de entrada</label>
                <input  class="form-control" name="datadecadastro" value="<?php echo $_SESSION[datadecadastro]; ?>" required  type="date">
     </div>
    
    
    <div class="form-group">
  <label for="notanps"><i class="fa fa-lightbulb-o"></i> Nota NPS </label>
             <input name="notanps"  class="form-control"value="<?php echo $_SESSION[notanps]; ?>"  placeholder=" Nota Nps de 0 a 10" type="text">
  </div>
    
    <div class="form-group">
  <label for="status"<i class="fa fa-tasks"></i> Status da implantação</label>
                <select class="form-control" name="status">
	            	<option value="">Selecione</option>
	            	<option value="0" <?php if($_SESSION[status] == 0) echo "selected"; ?>>A planejar</option>
	            	<option value="1" <?php if($_SESSION[status] == 1) echo "selected"; ?>>Em andamento</option>
		            <option value="2" <?php if($_SESSION[status] == 2) echo "selected"; ?>>Paralizado por conta do cliente</option>
		            <option value="3" <?php if($_SESSION[status] == 3) echo "selected"; ?>>Paralizado por conta da Fortes</option>
		            <option value="4" <?php if($_SESSION[status] == 4) echo "selected"; ?>>Finalizado</option>
        	</select>
  </div>
  
  <?php   if ($_SESSION[classificacao] == 3 || $_SESSION[classificacao] == 1 ) {  ?>
  
  <div class="form-group">
  <label for="bercario"><i class="fa fa-handshake-o"></i> Cliente no berçario :</label>
           <select  class="form-control" name="bercario">
	        	
	        	<option value="0" <?php if($_SESSION[bercario] == 0) echo "selected"; ?>>Não</option>
	        	<option value="1" <?php if($_SESSION[bercario] == 1) echo "selected"; ?>>Sim</option>
	        	
	   
        	</select>
  </div>
  <?php  } 
	else  {  ?>
	  
	  
           <select Disabled Hidden class="form-control" name="bercario">
	        	
	        	<option value="0" <?php if($_SESSION[bercario] == 0) echo "selected"; ?>>Não</option>
	        	
	        	
	   
        	</select>
	  
  <?php } ?>

  <div class="form-group">
  
   <label><i class="fa fa-bar-chart-o"></i> Implantadores responsáveis</label>  </br>
        	 
              
           <div class="form-check">
  <label class="form-check-label">
   <?php if($_SESSION[implantadorrafael]==1){  ?>
    <input type="checkbox" class="form-check-input" name=implantadorrafael checked   value="1">Rafael </br>
    <?php  }if($_SESSION[implantadorrafael]==0){  ?>
    <input type="checkbox" class="form-check-input" name=implantadorrafael value="1">Rafael 
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
      <?php } if($_SESSION[implantadorkarina ]==1){  ?>
    <input type="checkbox" class="form-check-input" name=implantadorkarina checked   value="1">Karina</br>
    <?php  }if($_SESSION[implantadorkarina ]==0){  ?>
    <input type="checkbox" class="form-check-input" name=implantadorkarina value="1">Karina
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
    <?php } if($_SESSION[implantadorwesley ]==1){  ?>
    <input type="checkbox" class="form-check-input" name=implantadorwesley checked   value="1">Wesley </br> 
    <?php  }if($_SESSION[implantadorwesley ]==0){  ?>
    <input type="checkbox" class="form-check-input" name=implantadorwesley value="1">Wesley
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
    <?php } if($_SESSION[implantadorsamantha ]==1){  ?>
    <input type="checkbox" class="form-check-input" name=implantadorsamantha checked   value="1">Samantha </br> 
    <?php  }if($_SESSION[implantadorsamantha ]==0){  ?>
    <input type="checkbox" class="form-check-input" name=implantadorsamantha  value="1">Samantha 
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
    <?php } if($_SESSION[implantadoroutros]==1){  ?>
    <input type="checkbox" class="form-check-input" name=implantadoroutros checked   value="1">Outros </br>
    <?php  }if($_SESSION[implantadoroutros]==0){  ?>
    <input type="checkbox" class="form-check-input" name=implantadoroutros value="1">Outros 
  </label>
</div>

<?php }  ?>
  
  </div>
  
   <div class="form-group">
  <label for="noprazo"><i class="fa fa-calendar"></i> Implantação finalizada no prazo</label>
           <select  class="form-control" name="noprazo">
	        	
	        	<option value="1" <?php if($_SESSION[noprazo] == 1) echo "selected"; ?>>Sim</option>
	        	<option value="2" <?php if($_SESSION[noprazo] == 2) echo "selected"; ?>>Não</option>
	        	<option value="3" <?php if($_SESSION[noprazo] == 3) echo "selected"; ?>>Ainda não finalizado</option>
	   
        	</select>
  </div>
  
  <div class="form-group">
  <label for="cancelados"><i class="fa fa-calendar-times-o"></i> Total de contatos cancelados</label>
             <input name="cancelados"  class="form-control"value="<?php echo $_SESSION[cancelados]; ?>" required placeholder=" Número de cancelamentos" type="text">
  </div>
  
  
    <div class="form-group">
  
  <label for="primeirocontato"><i class="fa fa-clock-o"></i> Primeiro contato em 48 horas</label>
           <select  class="form-control" name="primeirocontato">
	        	<option value="2">Selecione</option>
                <option value="1" <?php if($_SESSION[primeirocontato] == 1) echo "selected"; ?> >Sim</option>
	        	<option value="2" <?php if($_SESSION[primeirocontato] == 2) echo "selected"; ?> >Não</option>
	</select>
  
  
  </div>
  
    
  </br>
  		<div class="form-group">
  		<label><i class="fa fa-exclamation-triangle"></i> Cliente Critico</label>  </br>
        	  <?php if($_SESSION[critico]==1){  ?>
        	  <input  class="form-check-label" type="radio" checked onClick="habilitacao()" name="critico" id="critico" 
                  value="1">Sim<br>
               
        	  
        	  <?php }  if($_SESSION[critico]==0 ){  ?>
        	   <input  class="form-check-label" type="radio" onClick="habilitacao()" name="critico" id="critico" 
                 value="1">Sim<br>
                 
                
    
        	  <?php } ?>
        	  
        	  <?php if($_SESSION[critico]==1){  ?>
        	  <input class="form-check-label"  type="radio" onClick="habilitacao()" name="critico" id="semopcao" 
                 value="0" >Não
               
        	  <?php }  if($_SESSION[critico]==0 ){  ?>
        	  <input  class="form-check-label" type="radio" onClick="habilitacao()" checked name="critico" id="semopcao" 
              value="0" >Não </br>
         
        	  <?php } ?>
  			</div>
  			
  			
  			
  			
  			
  			
  			<div class="form-group">
  			<label > <i class="fa fa-keyboard-o"></i> Setor </label> </br>
        	  
        	  
        	       <?php  if($_SESSION[origemcr]==1){ ?>
       <input type="radio"  class="form-check-label" id="origemcr0" checked name="origemcr" value="1" > Implantação<br>
     
     

                    <?php } if($_SESSION[origemcr]!=1){ ?>
     <input type="radio"  class="form-check-label" id="origemcr0" name="origemcr" value="1" > Implantação<br>

     
    
     

     
     
    
     

     
          <?php } if($_SESSION[origemcr]==2){ ?>
        <input type="radio"  class="form-check-label"  id="origemcr1" checked name="origemcr" value="2" > Suporte<br>
      
   
      <?php } if($_SESSION [origemcr]!=2){ ?>
      <input type="radio" class="form-check-label"   id="origemcr1"  name="origemcr" value="2" > Suporte<br>
 
      
      
      
      
      
      <?php } if($_SESSION[origemcr]==4){ ?>
        <input type="radio" class="form-check-label"   id="origemcr1" checked name="origemcr" value="4" > Conversão<br>
      
   
      <?php } if($_SESSION[origemcr]!=4){ ?>
      <input type="radio"  class="form-check-label"  id="origemcr1"  name="origemcr" value="4" > Conversão <br>
 
      
      
      
      
      
      
      <?php } if($_SESSION[origemcr]==3){ ?>
  
        <input type="radio" class="form-check-label"  id="origemcr2" checked name="origemcr" value="3" readonly> Relacionamento<br>
      </div>
     
            <?php } if($_SESSION[origemcr]!=3){ ?>
            <input type="radio" class="form-check-label"  id="origemcr2"  name="origemcr" value="3" readonly> Relacionamento<br>
   
      

  
  </br>
  </br>
      <?php  } ?>
  
  </div>
  
  
  <div class="form-group">
  <label for="comentario"><i class="fa fa-align-left"></i> Resumo de atendimento</label>
            <textarea  class="form-control" name="comentario" placeholder="Escreva o reseumo de atendimento do cliente ..."   style="height:200px;"><?php echo $_SESSION[comentario]; ?></textarea>
  </div>
  
  
   <div class="form-group">
   <label for="comentariocr"><i class="fa fa-align-left"></i> Observações Criticas</label>
            <textarea name="comentariocr"   class="form-control"  style="height:200px;"><?php echo $_SESSION[comentariocr]; ?></textarea>
  </div>
    
    </div>
    </br>
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>
 </div>   
 
    
    
      </form>
    
         
     
    
<?php } ?>