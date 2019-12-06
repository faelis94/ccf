<title>CCS - Editar (Justificativa)</title>

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
	


				$solicitante[1] = "Karina";		
				$solicitante[2] = "Wesley";		
				$solicitante[3] = "Evelyn";		
				$solicitante[4] = "Lorrayne";		
				$solicitante[5] = "solicitante";					    	
				$solicitante[6] = "Rafael";							    	
				$solicitante[7] = "Andrew";					
 
 
  					$justificativa[1]="Abono Gestor ";
		        	    $justificativa[2]="Afastado INSS";
            			    $justificativa[3]=" Atestado Médico";
            			   $justificativa[4]="Banco de Horas ";
            		 	  $justificativa[5]="Esquecimento ";
            		  	  $justificativa[6]="Falta sem Justificativa ";
            		    	 $justificativa[7]="Férias ";
            		    	  $justificativa[8]="Folga Banco de Horas ";
            		    	   $justificativa[9]="Licença Casamento ";
            		     	   $justificativa[10]="Licença  Maternidade ";
            		     	    $justificativa[11]="Óbito Familiar ";
            		      	    $justificativa[12]="Registrado com Duplicidade ";
            		       	    $justificativa[13]="Serviço Externo";
            		      	      $justificativa[14]="Treinamento ";
            		        	     $justificativa[15]="Visita Externa ";
            		        	     
            		        	     
            		       
            		        	     
            		        	     
            		        	    $status[0]="Em analise";
            		        	      $status[1]="Aceito";
            		        	      $status[2]="Recusada";

	include("classe/conexao.php");

	if(!isset($_GET['justificativas']))
		echo "<script> alert('Codigo invalido.'); location.href='justificativas.php'; </script>";
	else{

	$usu_codigo = intval($_GET['justificativas']);


	
	if(isset($_POST['confirmar'])){

		// 1 - Registro dos dados

		if(!isset($_SESSION))
			

		foreach($_POST as $chave=>$valor)
			$_SESSION[$chave] = $mysqli->real_escape_string($valor);

		// 2 - Validação dos dados
		

		// 3 - Inserção no Banco e redirecionamento
		if(count($erro) == 0){
		
			$sql_code = "UPDATE justificativas SET
				
				
				solicitante='$_SESSION[solicitante]',
				descricao='$_SESSION[descricao]',
				observacao='$_SESSION[observacao]',
				status='$_SESSION[status]',
				 dataocorrido='$_SESSION[dataocorrido]'
				
				
								
				WHERE codigo = '$usu_codigo'";

			$confirma = $mysqli->query($sql_code) or die($mysqli->error);


if ($_SESSION[solicitante]==7) {
		
		
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

$mail->AddAddress('implantacaofortesbh@fortes-bh.com.br', 'Andrew');
$mail->AddAddress('douglas@rocaconstrutora.com', 'Douglas');







//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 

 
// Assunto da mensagem
$mail->Subject = "  Justificativa de ponto - Resposta"; 
 
// Corpo do email


$data=date('d/m/Y ',strtotime($_SESSION[dataocorrido]));
 $solicitantes= $solicitante[$_SESSION[solicitante]];  
 $justificativas= $justificativa[$_SESSION[descricao]]; 
 $statuss= $status[$_SESSION[status]];
 $obs=$_SESSION[observacao];

$mail->Body = "Olá,


sua justificativa foi respondida.


Segue resumo:


Data: $data
Solicitante : $solicitantes
Justificativa: $justificativas
Observação:  $obs

    --------------------
   | Status :  $statuss |
    --------------------


Em caso de dúvidas , procurar a gerencia.



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
			
     
				if ($_SESSION[solicitante]==6){
		
		
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

$mail->AddAddress('rafaelsilva@fortes-bh.com.br', 'Rafael');
$mail->AddAddress('douglas@rocaconstrutora.com ', 'Douglas');






//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 

 
// Assunto da mensagem
$mail->Subject = "  Justificativa de ponto - Resposta"; 
 
// Corpo do email


$data=date('d/m/Y ',strtotime($_SESSION[dataocorrido]));
 $solicitantes= $solicitante[$_SESSION[solicitante]];  
 $justificativas= $justificativa[$_SESSION[descricao]]; 
 $statuss= $status[$_SESSION[status]];
 $obs=$_SESSION[observacao];

$mail->Body = "Olá,


sua justificativa foi respondida.


Segue resumo:


Data: $data
Solicitante : $solicitantes
Justificativa: $justificativas
Observação:  $obs

    --------------------
   | Status :  $statuss |
    --------------------


Em caso de dúvidas , procurar a gerencia.



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
				
				if ($_SESSION[solicitante]==1){
		
		
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

$mail->AddAddress('karinamoreira@fortes-bh.com.br', 'Karina');
$mail->AddAddress('douglas@rocaconstrutora.com ', 'Douglas');



//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 

 
// Assunto da mensagem
$mail->Subject = "  Justificativa de ponto - Resposta"; 
 
// Corpo do email


$data=date('d/m/Y ',strtotime($_SESSION[dataocorrido]));
 $solicitantes= $solicitante[$_SESSION[solicitante]];  
 $justificativas= $justificativa[$_SESSION[descricao]]; 
 $statuss= $status[$_SESSION[status]];
 $obs=$_SESSION[observacao];

$mail->Body = "Olá,


sua justificativa foi respondida.


Segue resumo:


Data: $data
Solicitante : $solicitantes
Justificativa: $justificativas
Observação:  $obs

    --------------------
   | Status :  $statuss |
    --------------------


Em caso de dúvidas , procurar a gerencia.



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
				
				


if ($_SESSION[solicitante]==2){
		
		
		
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



$mail->AddAddress('wesleyrodrigues@fortes-bh.com.br', 'Wesley');
$mail->AddAddress('douglas@rocaconstrutora.com ', 'Douglas');



//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 

 
// Assunto da mensagem
$mail->Subject = "  Justificativa de ponto - Resposta"; 
 
// Corpo do email


$data=date('d/m/Y ',strtotime($_SESSION[dataocorrido]));
 $solicitantes= $solicitante[$_SESSION[solicitante]];  
 $justificativas= $justificativa[$_SESSION[descricao]]; 
 $statuss= $status[$_SESSION[status]];
 $obs=$_SESSION[observacao];

$mail->Body = "Olá,


sua justificativa foi respondida.


Segue resumo:


Data: $data
Solicitante : $solicitantes
Justificativa: $justificativas
Observação:  $obs

    --------------------
   | Status :  $statuss |
    --------------------


Em caso de dúvidas , procurar a gerencia.



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





if ($_SESSION[solicitante]==3){
		
		
		
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

$mail->AddAddress('evelynsilva@fortes-bh.com.br', 'Evelyn');
$mail->AddAddress('douglas@rocaconstrutora.com ', 'Douglas');


//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 

 
// Assunto da mensagem
$mail->Subject = "  Justificativa de ponto - Resposta"; 
 
// Corpo do email


$data=date('d/m/Y ',strtotime($_SESSION[dataocorrido]));
 $solicitantes= $solicitante[$_SESSION[solicitante]];  
 $justificativas= $justificativa[$_SESSION[descricao]]; 
 $statuss= $status[$_SESSION[status]];
 $obs=$_SESSION[observacao];

$mail->Body = "Olá,


sua justificativa foi respondida.


Segue resumo:


Data: $data
Solicitante : $solicitantes
Justificativa: $justificativas
Observação:  $obs

    --------------------
   | Status :  $statuss |
    --------------------


Em caso de dúvidas , procurar a gerencia.



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



if ($_SESSION[solicitante]==4){
		
		
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

$mail->AddAddress('lorraynnegomes@fortes-bh.com.br', 'Lorrayne');
$mail->AddAddress('douglas@rocaconstrutora.com ', 'Douglas');


//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 

 
// Assunto da mensagem
$mail->Subject = "  Justificativa de ponto - Resposta"; 
 
// Corpo do email


$data=date('d/m/Y ',strtotime($_SESSION[dataocorrido]));
 $solicitantes= $solicitante[$_SESSION[solicitante]];  
 $justificativas= $justificativa[$_SESSION[descricao]]; 
 $statuss= $status[$_SESSION[status]];
 $obs=$_SESSION[observacao];

$mail->Body = "Olá,


sua justificativa foi respondida.


Segue resumo:


Data: $data
Solicitante : $solicitantes
Justificativa: $justificativas
Observação:  $obs

    --------------------
   | Status :  $statuss |
    --------------------


Em caso de dúvidas , procurar a gerencia.



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
				
				
				if ($_SESSION[solicitante]==5){
		
		
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

$mail->AddAddress('nayaraalves@fortes-bh.com.br ', 'Rafael');
$mail->AddAddress('douglas@rocaconstrutora.com ', 'Douglas');


//$mail->AddAddress('fernando@email.com');
 
 
// CC
//$mail->AddCC('joana@provedor.com', 'Joana'); 
 
// BCC - Cópia oculta
//$mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano
$mail->IsHTML(false); // Formato HTML . Use "false" para enviar em formato texto simples.
 
$mail->CharSet = 'UTF-8'; // Charset (opcional)
 

 
// Assunto da mensagem
$mail->Subject = "  Justificativa de ponto - Resposta"; 
 
// Corpo do email


$data=date('d/m/Y ',strtotime($_SESSION[dataocorrido]));
 $solicitantes= $solicitante[$_SESSION[solicitante]];  
 $justificativas= $justificativa[$_SESSION[descricao]]; 
 $statuss= $status[$_SESSION[status]];
 $obs=$_SESSION[observacao];

$mail->Body = "Olá,


sua justificativa foi respondida.


Segue resumo:


Data: $data
Solicitante : $solicitantes
Justificativa: $justificativas
Observação:  $obs

    --------------------
   | Status :  $statuss |
    --------------------


Em caso de dúvidas , procurar a gerencia.



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
				
				

			if($confirma){

				unset(
				$_SESSION[data],
				$_SESSION[observacao],
				$_SESSION[solicitante],
				$_SESSION[descricao],
				$_SESSION[status],
				$_SESSION[dataocorrido]
						
				
		);

				echo "<script> location.href='justificativas.php'; </script>";

			}else
				$erro[] = $confirma;

		}

	}else{

		$sql_code = "SELECT * FROM justificativas WHERE codigo = '$usu_codigo'";
		$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
		$linha = $sql_query->fetch_assoc();

		if(!isset($_SESSION))
		

		
		
    		$_SESSION[data] = $linha['data'];
    		$_SESSION[observacao] = $linha['observacao'];
		$_SESSION[solicitante] = $linha['solicitante'];
		$_SESSION[descricao] = $linha['descricao'];
		$_SESSION[status] = $linha['status'];
		$_SESSION[dataocorrido] = $linha['dataocorrido'];
		
		
		
		
		
		

	}

?>
<style>
.responsive {
  max-width: 70%;
  height: auto;
}


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
     <form action="index.php?p=editarjustificativa&justificativas=<?php echo $usu_codigo; ?>" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Justificativa </h3>
            
              <label for="dataocorrido"><i class="fa fa-history"></i> Data a justificar </label>
                <input name="dataocorrido" value="<?php echo $_SESSION[dataocorrido]; ?>" required  type="date">
             </br>
             </br>
             <label for="descricao"><i class="fa fa-commenting-o"></i> Motivo </label>
                <select name="descricao">
	            
	            	    <option value="0" <?php if($_SESSION[descricao] == 0) echo "selected"; ?>>Selecione</option>
	            	    <option value="1" <?php if($_SESSION[descricao] == 1) echo "selected"; ?>>Abono Gestor</option>
		            <option value="2" <?php if($_SESSION[descricao] == 2) echo "selected"; ?>>Afastado INSS</option>
		            <option value="3" <?php if($_SESSION[descricao] == 3) echo "selected"; ?>>Atestado Médico</option>
		            <option value="4" <?php if($_SESSION[descricao] == 4) echo "selected"; ?>>Banco de Horas</option>
		            <option value="5" <?php if($_SESSION[descricao] == 5) echo "selected"; ?>>Esquecimento</option>	
		            <option value="6" <?php if($_SESSION[descricao] == 6) echo "selected"; ?>>Falta sem Justificativa</option>
		            <option value="7" <?php if($_SESSION[descricao] == 7) echo "selected"; ?>>Férias</option>
		            <option value="8" <?php if($_SESSION[descricao] == 8) echo "selected"; ?>>Folga Banco de Horas</option>
		            <option value="9" <?php if($_SESSION[descricao] == 9) echo "selected"; ?>>Licença Casamento</option>	
		            <option value="10" <?php if($_SESSION[descricao] == 10) echo "selected"; ?>>Licença  Maternidade</option>
		            <option value="11" <?php if($_SESSION[descricao] == 11) echo "selected"; ?>>Óbito Familiar</option>
		            <option value="12" <?php if($_SESSION[descricao] == 12) echo "selected"; ?>>Registrado com Duplicidade</option>
		            <option value="13" <?php if($_SESSION[descricao] == 13) echo "selected"; ?>>Serviço Externo</option>
		            <option value="14" <?php if($_SESSION[descricao] == 14) echo "selected"; ?>>Treinamento</option>
		            <option value="15" <?php if($_SESSION[descricao] == 15) echo "selected"; ?>>Visita Externa</option>
        	</select>
            
    
    		</br>
    		</br>
    		
    		 <label for="solicitante"><i class="fa fa-address-card-o"></i> Solicitante </label>
                <select readonly name="solicitante">
	            
	            	    <option value="0" <?php if($_SESSION[solicitante] == 0) echo "selected"; ?>>Selecione</option>
	            	    <option value="6" <?php if($_SESSION[solicitante] == 6) echo "selected"; ?>>Rafael</option>
		            <option value="1" <?php if($_SESSION[solicitante] == 1) echo "selected"; ?>>Karina</option>
		            <option value="2" <?php if($_SESSION[solicitante] == 2) echo "selected"; ?>>Wesley</option>
		            <option value="3" <?php if($_SESSION[solicitante] == 3) echo "selected"; ?>>Evelyn</option>
		            <option value="4" <?php if($_SESSION[solicitante] == 4) echo "selected"; ?>>Lorrayne</option>	
		            <option value="5" <?php if($_SESSION[solicitante] == 5) echo "selected"; ?>>Nayara</option>	
        	</select>
    
    		</br>
    		
             
            <br/>
                     
           
           <label for="status"><i class="fa fa-bell-o"></i> Status</label>
                <select readonly name="status">
	            
	            	    <option value="0" <?php if($_SESSION[status] == 0) echo "selected"; ?>>Em analise</option>
	            	    <option value="1" <?php if($_SESSION[status] == 1) echo "selected"; ?>>Aceito</option>
		            <option value="2" <?php if($_SESSION[status] == 2) echo "selected"; ?>>Recusada</option>
		         
		            
        	</select>
           
                  	
        	<label for="observacao"><i class="fa fa-align-left"></i> Resumo justificativa</label>
            <textarea name="observacao"    style="height:200px;"><?php echo $_SESSION[observacao]; ?></textarea>
           
              
             
              
            
             
          </div>

        </div>
        <label>
       
        </label>
        <input value="Salvar" class="btn" name="confirmar" type="submit">
      </form>
      <form action="justificativas.php" method="POST">
      <input value="Cancelar" class="btn" name="confirmar" type="submit">
      
      </form>
    </div>
  </div>
 
</div>

</body>
</html>
         
     
    
<?php } ?>