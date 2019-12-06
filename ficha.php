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
  <link rel="shortcut icon" href="Imgs/favicon.ico" />
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
				
				ambiente= '$_SESSION[ambiente]',
				noprazo= '$_SESSION[noprazo]',
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
				
				$_SESSION[ambiente],
				$_SESSION[bercario],
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
				$_SESSION[telefone2],
				
				
				$_SESSION[cpessoal1],
				$_SESSION[cpessoal2],
				$_SESSION[cpessoal3],
				$_SESSION[cpessoal4],
				
				
				$_SESSION[cfiscal1],
				$_SESSION[cfiscal2],
				$_SESSION[cfiscal3],
				$_SESSION[cfiscal4],
				
				
				$_SESSION[ccontabil1],
				$_SESSION[ccontabil2],
				$_SESSION[ccontabil3],
				$_SESSION[ccontabil4],
				
				
				
				    $_SESSION[crh1],
				    $_SESSION[crh2],
				    $_SESSION[crh3],
				    $_SESSION[crh4],
				    $_SESSION[crh5],
				    $_SESSION[crh6],
				    $_SESSION[crh7],
				    $_SESSION[crh8],
				    
				
				    $_SESSION[cag1],
				    $_SESSION[cag2],
				    $_SESSION[cag3],
				    $_SESSION[cag4],
				    $_SESSION[ponto],
				    $_SESSION[ponto1],
				    $_SESSION[ponto2],
				    $_SESSION[ponto3],
				    
				    
				    
				    
				$_SESSION[hrcp1],
				$_SESSION[hrcp2],
				$_SESSION[hrcp3],
				$_SESSION[hrcp4],
				
				$_SESSION[hrcf1],
				$_SESSION[hrcf2],
				$_SESSION[hrcf3],
				$_SESSION[hrcf4],
				
				$_SESSION[hrcc1],
				$_SESSION[hrcc2],
				
				$_SESSION[hrcag1],
				$_SESSION[hrcag2],
				$_SESSION[hrcag3],
				$_SESSION[hrcag4],
				
				$_SESSION[hrcpt1],
				$_SESSION[hrcpt2],
				$_SESSION[hrcpt3],
				
				
		$_SESSION[adicionalrealizado1],
                $_SESSION[adicionalrealizado2],
                $_SESSION[adicionalrealizado3],
                $_SESSION[adicionalrealizado4],
				
				$_SESSION[hrcrh1],
				$_SESSION[hrcrh2],
				$_SESSION[hrcrh3],
				$_SESSION[hrcrh4],
				$_SESSION[hrcrh5],
				$_SESSION[hrcrh6],
				$_SESSION[hrcrh7],
				$_SESSION[hrcrh8]
				
				
				
				
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
		

		$_SESSION[ambiente] = $linha['ambiente'];
		$_SESSION[bercario] = $linha['bercario'];
		$_SESSION[noprazo] = $linha['noprazo'];
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
		
		
		
			$_SESSION[cpessoal1]= $linha['cpessoal1'];
				$_SESSION[cpessoal2]= $linha['cpessoal2'];
				$_SESSION[cpessoal3]= $linha['cpessoal3'];
				$_SESSION[cpessoal4]= $linha['cpessoal4'];
				
				
				$_SESSION[cfiscal1]= $linha['cfiscal1'];
				$_SESSION[cfiscal2]= $linha['cfiscal2'];
				$_SESSION[cfiscal3]= $linha['cfiscal3'];
				$_SESSION[cfiscal4]= $linha['cfiscal4'];
				
				
				
				$_SESSION[ccontabil1]= $linha['ccontabil1'];
				$_SESSION[ccontabil2]= $linha['ccontabil2'];
				
				
				        	$_SESSION[cag1]= $linha['cag1'];
					    	$_SESSION[cag2]= $linha['cag2'];
							$_SESSION[cag3]= $linha['cag3'];
							$_SESSION[cag4]= $linha['cag4'];
							
				
				    $_SESSION[crh1]= $linha['crh1'];
				    $_SESSION[crh2]= $linha['crh2'];
				    $_SESSION[crh3]= $linha['crh3'];
				    $_SESSION[crh4]= $linha['crh4'];
				    $_SESSION[crh5]= $linha['crh5'];
				    $_SESSION[crh6]= $linha['crh6'];
				    $_SESSION[crh7]= $linha['crh7'];
				    $_SESSION[crh8]= $linha['crh8'];
				  
				
			    	$_SESSION[cponto1]= $linha['cponto1'];
			    	$_SESSION[cponto2]= $linha['cponto2'];
			    	$_SESSION[cponto3]= $linha['cponto3'];
			    	
			    	
			    	
			    $_SESSION[hrcp1]= $linha['hrcp1'];
				$_SESSION[hrcp2]= $linha['hrcp2'];
				$_SESSION[hrcp3]= $linha['hrcp3'];
				$_SESSION[hrcp4]= $linha['hrcp4'];	
				
				$_SESSION[hrcf1]= $linha['hrcf1'];
				$_SESSION[hrcf2]= $linha['hrcf2'];
				$_SESSION[hrcf3]= $linha['hrcf3'];
				$_SESSION[hrcf4]= $linha['hrcf4'];
				
				$_SESSION[hrcc1]= $linha['hrcc1'];
				$_SESSION[hrcc2]= $linha['hrcc2'];
				
				$_SESSION[hrcag1]= $linha['hrcag1'];
				$_SESSION[hrcag2]= $linha['hrcag2'];
				$_SESSION[hrcag3]= $linha['hrcag3'];
				$_SESSION[hrcag4]= $linha['hrcag4'];
				
				$_SESSION[hrcpt1]= $linha['hrcpt1'];
				$_SESSION[hrcpt2]= $linha['hrcpt2'];
				$_SESSION[hrcpt3]= $linha['hrcpt3'];
				
				$_SESSION[hrcrh1]= $linha['hrcrh1'];
				$_SESSION[hrcrh2]= $linha['hrcrh2'];
				$_SESSION[hrcrh3]= $linha['hrcrh3'];
				$_SESSION[hrcrh4]= $linha['hrcrh4'];
				$_SESSION[hrcrh5]= $linha['hrcrh5'];
				$_SESSION[hrcrh6]= $linha['hrcrh6'];
				$_SESSION[hrcrh7]= $linha['hrcrh7'];
				$_SESSION[hrcrh8]= $linha['hrcrh8'];
				
				
				$_SESSION[crpessoal1]= $linha['crpessoal1'];
				$_SESSION[crpessoal2]= $linha['crpessoal2'];
				$_SESSION[crpessoal3]= $linha['crpessoal3'];
				$_SESSION[crpessoal4]= $linha['crpessoal4'];
				
			
				$_SESSION[crfiscal1]= $linha['crfiscal1'];
				$_SESSION[crfiscal2]= $linha['crfiscal2'];
				$_SESSION[crfiscal3]= $linha['crfiscal3'];
				$_SESSION[crfiscal4]= $linha['crfiscal4'];
				
				
				$_SESSION[crcontabil1]= $linha['crcontabil1'];
				$_SESSION[crcontabil2]= $linha['crcontabil2'];
				
			
				        	$_SESSION[crag1]= $linha['crag1'];
					    	$_SESSION[crag2]= $linha['crag2'];
							$_SESSION[crag3]= $linha['crag3'];
							$_SESSION[crag4]= $linha['crag4'];
							
		
				    $_SESSION[crrh1]= $linha['crrh1'];
				    $_SESSION[crrh2]= $linha['crrh2'];
				    $_SESSION[crrh3]= $linha['crrh3'];
				    $_SESSION[crrh4]= $linha['crrh4'];
				    $_SESSION[crrh5]= $linha['crrh5'];
				    $_SESSION[crrh6]= $linha['crrh6'];
				    $_SESSION[crrh7]= $linha['crrh7'];
				    $_SESSION[crrh8]= $linha['crrh8'];
				  
		
			    	$_SESSION[crponto1]= $linha['crponto1'];
			    	$_SESSION[crponto2]= $linha['crponto2'];
			    	$_SESSION[crponto3]= $linha['crponto3'];
			    	
			    	
			    $_SESSION[rp1]= $linha['rp1'];
				$_SESSION[rp2]= $linha['rp2'];
				$_SESSION[rp3]= $linha['rp3'];
				$_SESSION[rp4]= $linha['rp4'];
				
			
				$_SESSION[rf1]= $linha['rf1'];
				$_SESSION[rf2]= $linha['rf2'];
				$_SESSION[rf3]= $linha['rf3'];
				$_SESSION[rf4]= $linha['rf4'];
				
				
				$_SESSION[rc1]= $linha['rc1'];
				$_SESSION[rc2]= $linha['rc2'];
				
			
		     	$_SESSION[rag1]= $linha['rag1'];
		     	$_SESSION[rag2]= $linha['rag2'];
		     	$_SESSION[rag3]= $linha['rag3'];
		     	$_SESSION[rag4]= $linha['rag4'];
							
		
				    $_SESSION[rrh1]= $linha['rrh1'];
				    $_SESSION[rrh2]= $linha['rrh2'];
				    $_SESSION[rrh3]= $linha['rrh3'];
				    $_SESSION[rrh4]= $linha['rrh4'];
				    $_SESSION[rrh5]= $linha['rrh5'];
				    $_SESSION[rrh6]= $linha['rrh6'];
				    $_SESSION[rrh7]= $linha['rrh7'];
				    $_SESSION[rrh8]= $linha['rrh8'];
				  
		
			    	$_SESSION[rpt1]= $linha['rpt1'];
			    	$_SESSION[rpt2]= $linha['rpt2'];
			    	$_SESSION[rpt3]= $linha['rpt3'];
			    	
			    	
			    	
			    	
			    	
			    	
			    	
			    	
			    	  $_SESSION[hrrp1]= $linha['hrrp1'];
				$_SESSION[hrrp2]= $linha['hrrp2'];
				$_SESSION[hrrp3]= $linha['hrrp3'];
				$_SESSION[hrrp4]= $linha['hrrp4'];
				
			
				$_SESSION[hrrf1]= $linha['hrrf1'];
				$_SESSION[hrrf2]= $linha['hrrf2'];
				$_SESSION[hrrf3]= $linha['hrrf3'];
				$_SESSION[hrrf4]= $linha['hrrf4'];
				
				
				$_SESSION[hrrc1]= $linha['hrrc1'];
				$_SESSION[hrrc2]= $linha['hrrc2'];
				
			
		     	$_SESSION[hrrag1]= $linha['hrrag1'];
		     	$_SESSION[hrrag2]= $linha['hrrag2'];
		     	$_SESSION[hrrag3]= $linha['hrrag3'];
		     	$_SESSION[hrrag4]= $linha['hrrag4'];
							
		
				    $_SESSION[hrrrh1]= $linha['hrrrh1'];
				    $_SESSION[hrrrh2]= $linha['hrrrh2'];
				    $_SESSION[hrrrh3]= $linha['hrrrh3'];
				    $_SESSION[hrrrh4]= $linha['hrrrh4'];
				    $_SESSION[hrrrh5]= $linha['hrrrh5'];
				    $_SESSION[hrrrh6]= $linha['hrrrh6'];
				    $_SESSION[hrrrh7]= $linha['hrrrh7'];
				    $_SESSION[hrrrh8]= $linha['hrrrh8'];
				  
		
			    	$_SESSION[hrrpt1]= $linha['hrrpt1'];
			    	$_SESSION[hrrpt2]= $linha['hrrpt2'];
			    	$_SESSION[hrrpt3]= $linha['hrrpt3'];
			    	
				
			    	$_SESSION[contcore]= $linha['contcore'];
			    $_SESSION[contconecta]= $linha['contconecta'];
			    $_SESSION[contdoc]= $linha['contdoc'];
			    $_SESSION[contgestao]= $linha['contgestao'];
			    $_SESSION[contpatrio]= $linha['contpatrio'];
			    
			    
			    $_SESSION[hrrcore]= $linha['hrrcore'];
			    	$_SESSION[hrrconecta]= $linha['hrrconecta'];
			    	$_SESSION[hrrdoc]= $linha['hrrdoc'];
			    	$_SESSION[hrrgestao]= $linha['hrrgestao'];
			    	$_SESSION[hrrpatrio]= $linha['hrrpatrio'];
			    	
			    	$_SESSION[hrccore]= $linha['hrccore'];
			    	$_SESSION[hrcconecta]= $linha['hrcconecta'];
			    	$_SESSION[hrcdoc]= $linha['hrcdoc'];
			    	$_SESSION[hrcgestao]= $linha['hrcgestao'];
			    	$_SESSION[hrcpatrio]= $linha['hrcpatrio'];
			    	
			    	
			    $_SESSION[rcore]= $linha['rcore'];
			    $_SESSION[rconecta]= $linha['rconecta'];
			    $_SESSION[rdoc]= $linha['rdoc'];
			    $_SESSION[rgestao]= $linha['rgestao'];
			    $_SESSION[rpatrio]= $linha['rpatrio'];
		
		        $_SESSION[ccore]= $linha['ccore'];
	        	$_SESSION[cconecta]= $linha['cconecta'];
			    $_SESSION[cdoc]= $linha['cdoc'];
			    $_SESSION[cgestao]= $linha['cgestao'];
			    $_SESSION[cpatrio]= $linha['cpatrio'];
			    
			    $_SESSION[crcore]= $linha['crcore'];
			    $_SESSION[crconecta]= $linha['crconecta'];
			    $_SESSION[crdoc]= $linha['crdoc'];
			    $_SESSION[crgestao]= $linha['crgestao'];
			    $_SESSION[crpatrio]= $linha['crpatrio'];
			    
			    
			     $_SESSION[adicionalrealizado1]=$linha['adicionalrealizado1'];
                $_SESSION[adicionalrealizado2]=$linha['adicionalrealizado2'];
                $_SESSION[adicionalrealizado3]=$linha['adicionalrealizado3'];
                $_SESSION[adicionalrealizado4]=$linha['adicionalrealizado4'];

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
     
     
      <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
    <div class="container2">
  
     
      		<div class="form-group">
     		 <label for="nome"><i class="fa fa-home"></i> Razão Social</label>
             <input name="nome"  readonly class="form-control" id="usr" value="<?php echo $_SESSION[nome]; ?>"  placeholder=" Razão Social" type="text">
               </div>
             
          	   <div class="form-group">
                 <label for="cnpj"><i class="fa fa-id-card"></i> Cnpj/CPF</label>
                <input name="cnpj"  readonly  class="form-control" id="usr" value="<?php echo $_SESSION[cnpj]; ?>"  placeholder="Cnpj/Cpf" type="text"> 
                   </div>
                
                
                <div class="form-group">
            <label for="telefone"><i class="fa fa-phone"></i> Telefone</label>
            <input name="telefone"  readonly  class="form-control" id="usr" value="<?php echo $_SESSION[telefone]; ?>" placeholder="Telefone principal" required type="text">
             	 </div>
            
            	<div class="form-group">
             <label for="telefone2"><i class="fa fa-phone"></i> Telefone 2</label>
            <input name="telefone2" readonly  class="form-control" id="usr" value="<?php echo $_SESSION[telefone2]; ?>" placeholder="Telefone secundario"  type="text">
              	</div>
            
            	<div class="form-group">
             <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input name="email" readonly class="form-control" id="usr" value="<?php echo $_SESSION[email]; ?>" required placeholder=" E-mail principal"   type="text">
              	</div>
            
            	<div class="form-group">
            <label for="responsavel"<i class="fa fa-clock-o"></i>  Responsável</label>
                <input name="responsavel"  readonly  class="form-control" id="usr" value="<?php echo $_SESSION[responsavel]; ?>" placeholder="Responsável pela empresa"   type="text">
        	</div>
        
        
        
        <div class="form-group">
        <label for="endereco"><i class="fa fa-building-o"></i> Endereço</label>
        <input name="endereco" readonly  class="form-control" id="usr" value="<?php echo $_SESSION[endereco]; ?>" placeholder="Endereço da empresa"   type="text">
         </div>
       					 
     
     
     
    </div>
    </br>
    
    
    
    <center> <a  href="index.php?p=editar&usuario=<?php echo $linha['codigo']; ?>" class="btn btn-primary" role="button">  &ensp;&ensp; &ensp; &ensp;Editar &ensp; &ensp; &ensp; &ensp;</a> </center>
    </div>
    
    
    
    
     <div id="menu1" class="container tab-pane fade"><br>
    <div class="container2">
    
    
        
        
        
        
  		
  		
  		<div class="form-group">
  		<label for="modalidade"><i class="fa fa-exchange"></i> Modalidade de implantação</label>
            <select disabled class="form-control" name="modalidade">
		    <option value="">Selecione</option>
		    <option value="1" <?php if($_SESSION[modalidade] == 1) echo "selected"; ?> >Presencial</option>
	    	<option value="2" <?php if($_SESSION[modalidade] == 2) echo "selected"; ?> >Remoto</option>
        	</select>
        	</div>
        	
        	
        	<div class="form-group">
        	<label for="inadimplente"><i class="fa fa-thumbs-down"></i> Cliente inadimplente</label>
           	<select disabled class="form-control" name="inadimplente">
	        	<option value="">Selecione</option>
                <option value="1" <?php if($_SESSION[inadimplente] == 1) echo "selected"; ?> >Sim</option>
	        	<option value="0" <?php if($_SESSION[inadimplente] == 0) echo "selected"; ?> >Não</option>
		</select>
		</div>
		
		
		<div class="form-group">
        	<label for="ambiente"><i class="fa fa-sitemap"></i>Tipo de sistema</label>
           	<select disabled  class="form-control" name="ambiente">
	        	<option value="">Selecione</option>
                	<option value="1" <?php if($_SESSION[ambiente] == 1) echo "selected"; ?> >Desktop(Local)</option>
	        	<option value="2" <?php if($_SESSION[ambiente] == 2) echo "selected"; ?> >Cloud</option>
	        	<option value="3" disabled <?php if($_SESSION[ambiente] == 3) echo "selected"; ?> >Web</option>
		</select>
		</div>
        	
        	
        	<div class="form-group">
        	<label for="statuscontrato"<i class="fa fa-clone"></i> Status do Contrato</label>
                <select  disabled  class="form-control" name="statuscontrato">
	            	<option value="">Selecione</option>
		            <option value="0" <?php if($_SESSION[statuscontrato] == 0) echo "selected"; ?>>Ativo</option>
		            <option value="1" <?php if($_SESSION[statuscontrato] == 1) echo "selected"; ?>>Cancelado</option>
		            <option value="2" <?php if($_SESSION[statuscontrato] == 2) echo "selected"; ?>>Suspenso</option>
		            <option value="3" <?php if($_SESSION[statuscontrato] == 3) echo "selected"; ?>>Em processo de cancelamento</option>
		            
        	</select>
        	</div>
        	
        	
        	<div class="form-group">
  		<label for="horascontratadas"<i class="fa fa-clock-o"></i> Horas Contratada</label>
                <input readonly  name="horascontratadas" class="form-control"  value="<?php echo $_SESSION[horascontratadas]; ?>"  required   type="text"> 
                </div>
                
                <div class="form-group">
                <label for="usuarios"><i class="fa fa-group"></i> Quantidade de usuários</label>
                <input readonly  name="usuarios" class="form-control"  value="<?php echo $_SESSION[usuarios]; ?>" placeholder="Número de usuários"required type="text">
                </div>
                
                <div class="form-group">
                <label for="unidade"><i class="fa fa-institution"></i> Unidade</label>
           <select  disabled class="form-control" name="unidade">
            	<option value="">Selecione</option>
	    	<option value="1" <?php if($_SESSION[unidade] == 1) echo "selected"; ?> >Belo Horizonte</option>
		    <option value="2" <?php if($_SESSION[unidade] == 2) echo "selected"; ?> >Montes Claros</option>
		    
        </select>
        </div>
        
        <div class="form-group">
        <label for="vendedor"><i class="fa fa-exchange"></i> Vendedor</label>
            <select  disabled class="form-control"  name="vendedor">
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
            <select  disabled class="form-control" name="classificacao">
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
        	 <input disabled  type="checkbox" name="cpessoal" checked   value="1"> Pessoal<br>
        	  <?php } if($_SESSION[ccontabil]==1){  ?>
             <input disabled  type="checkbox" name="cfiscal"  checked   value="1"> Fiscal<br>
              <?php } if($_SESSION[cfiscal]==1){ ?>
             <input disabled  type="checkbox" name="ccontabil"  checked  value="1" > Contábil<br>
              <?php } if($_SESSION[contconecta]==1){  ?>
        	 <input disabled  type="checkbox" name="contconecta"  checked    value="1"> Conecta<br>
        	  <?php } if($_SESSION[contdoc]==1){  ?>
             <input  disabled  type="checkbox" name="contdoc"  checked   value="1"> Doc<br>
              <?php } if($_SESSION[contpatrio]==1){ ?>
             <input disabled  type="checkbox" name="contpatrio" checked    value="1" > Patrio<br>
              <?php } if($_SESSION[contgestao]==1){  ?>
             <input  disabled  type="checkbox" name="contgestao" checked  value="1"> Gestão <br>
             <?php } if($_SESSION[contcore]==1){  ?>
             <input disabled  type="checkbox" name="contcore" checked  value="1"> Core <br>
             
              <?php } ?>
              
               <?php if($_SESSION[cpessoal]==0){  ?>
        	 <input disabled  type="checkbox" name="cpessoal"    value="1"> Pessoal<br>
        	  <?php } if($_SESSION[ccontabil]==0){  ?>
             <input disabled  type="checkbox" name="cfiscal"     value="1"> Fiscal<br>
              <?php } if($_SESSION[cfiscal]==0){ ?>
             <input disabled  type="checkbox" name="ccontabil"     value="1" > Contábil<br>
              <?php } if($_SESSION[contconecta]==0){  ?>
        	 <input disabled  type="checkbox" name="contconecta"    value="1"> Conecta<br>
        	  <?php } if($_SESSION[contdoc]==0){  ?>
             <input disabled  type="checkbox" name="contdoc"     value="1"> Doc<br>
              <?php } if($_SESSION[contpatrio]==0){ ?>
             <input disabled  type="checkbox" name="contpatrio"     value="1" > Patrio<br>
              <?php } if($_SESSION[contgestao]==0){  ?>
             <input  disabled  type="checkbox" name="contgestao"  value="1"> Gestão <br>
             <?php } if($_SESSION[contcore]==0){  ?>
        	 <input disabled  type="checkbox" name="contcore"    value="1"> Core<br>
             
              <?php } ?>
                
                </br>
                </br>
				
				
 
            	<label><i class="fa fa-building-o"> Corporativo </i> </label> </br>
              <?php  if($_SESSION[crh]==1){  ?>
             <input disabled  type="checkbox" name="crh" checked  value="1"> RH<br>
              <?php } if($_SESSION[cponto]==1){ ?>
             <input disabled  type="checkbox" name="cponto" checked  value="1"> Ponto<br>
              <?php } if($_SESSION[cag]==1){ ?>
             <input disabled  type="checkbox" name="cag" checked   value="1" > AG<br><br>
             
              <?php } if($_SESSION[crh]==0){  ?>
             <input disabled  type="checkbox" name="crh"  value="1"> RH<br>
              <?php } if($_SESSION[cponto]==0){ ?>
             <input  disabled  type="checkbox" name="cponto"  value="1"> Ponto<br>
              <?php } if($_SESSION[cag]==0){ ?>
             <input disabled  type="checkbox" name="cag"  value="1" > AG<br><br>
               
              <?php } ?>
  		</div>
  		</div>
    </br>
    
    
    
        <center> <a  href="index.php?p=editar&usuario=<?php echo $linha['codigo']; ?>" class="btn btn-primary" role="button">  &ensp;&ensp; &ensp; &ensp;Editar &ensp; &ensp; &ensp; &ensp;</a> </center>
    </div>
    
    
    
    <div id="menu2" class="container tab-pane fade"><br>
    <div class="container2">
    
    <div class="form-group">
     
     
   
     <?php 
   $totalrealizado=  $_SESSION[adicionalrealizado1]+$_SESSION[adicionalrealizado2]+$_SESSION[adicionalrealizado3]+$_SESSION[adicionalrealizado4]+$_SESSION[rcore]+$_SESSION[rrh1]+$_SESSION[rrh2]+$_SESSION[rrh3]+$_SESSION[rrh4]+$_SESSION[rrh5]+$_SESSION[rrh6]+$_SESSION[rrh7]+$_SESSION[rrh8]+$_SESSION[rp1]+$_SESSION[rp2]+$_SESSION[rp3]+$_SESSION[rp4]+$_SESSION[rf1]+$_SESSION[rf2]+$_SESSION[rf3]+$_SESSION[rf4]+$_SESSION[rc1]+$_SESSION[rc2]+$_SESSION[rpt1]+$_SESSION[rpt2]+$_SESSION[rpt3]+$_SESSION[rag1]+$_SESSION[rag2]+$_SESSION[rag3]+$_SESSION[rag4]+$_SESSION[rconecta]+$_SESSION[rdoc]+$_SESSION[rgestao]+$_SESSION[rpatrio];
   
   if($_SESSION[modalidade]==1){
       $x=3;
   }
   if($_SESSION[modalidade]==2){
       $x=2;
   }
   
   if ($_SESSION[cancelados]==0 || $_SESSION[cancelados]==1){
       $saldocanceladas=0;
   }else{
   $saldocanceladas=$_SESSION[cancelados] * $x;
   }
   
   ?>
   
   
<?php

	if($_SESSION[cancelados]>1){
if($_SESSION[modalidade]==1){
           $saldo=($_SESSION[horascontratadas]-$saldocanceladas-$totalrealizado ) + 3;
   }
if($_SESSION[modalidade]==2){

  $saldo=($_SESSION[horascontratadas]-$saldocanceladas-$totalrealizado ) + 2;
}

}

else {

$saldo=($_SESSION[horascontratadas]-$saldocanceladas-$totalrealizado );


}
 ?>
     
        </br>
        
    
    
    <div class="row">
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a ><img src="Imgs/calendar-with-a-clock-time-tools.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Horas contratadas: $_SESSION[horascontratadas]"; ?></center></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a ><img src="Imgs/chronometer.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Horas realizadas: $totalrealizado"; ?></center></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a ><img src="Imgs/alarm-off.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Contatos Cancelados: $_SESSION[cancelados]"; ?></center></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a ><img src="Imgs/food-scale-tool.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Saldo de implantação: {$saldo}"; ?></center></p> 
          </div>
        </div>
      </div>
    
    </div>
    
        </br>
    <div class="form-group">
    <label for="datadecadastro"><i class="fa fa-exclamation-triangle"></i> Data de entrada</label>
                <input  readonly  class="form-control" name="datadecadastro" value="<?php echo $_SESSION[datadecadastro]; ?>" required  type="date">
     </div>
    
    
    <div class="form-group">
  <label for="notanps"><i class="fa fa-lightbulb-o"></i> Nota NPS </label>
             <input name="notanps"  readonly  class="form-control"value="<?php echo $_SESSION[notanps]; ?>"  placeholder=" Nota Nps de 0 a 10" type="text">
  </div>
    
    <div class="form-group">
  <label for="status"<i class="fa fa-tasks"></i> Status da implantação</label>
                <select disabled class="form-control" name="status">
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
           <select disabled class="form-control" name="bercario">
	        	
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
    <input disabled  type="checkbox" class="form-check-input" name=implantadorrafael checked   value="1">Rafael </br>
    <?php  }if($_SESSION[implantadorrafael]==0){  ?>
    <input disabled  type="checkbox" class="form-check-input" name=implantadorrafael value="1">Rafael 
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
      <?php } if($_SESSION[implantadorkarina ]==1){  ?>
    <input  disabled  type="checkbox" class="form-check-input" name=implantadorkarina checked   value="1">Karina</br>
    <?php  }if($_SESSION[implantadorkarina ]==0){  ?>
    <input disabled  type="checkbox" class="form-check-input" name=implantadorkarina value="1">Karina
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
    <?php } if($_SESSION[implantadorwesley ]==1){  ?>
    <input disabled  type="checkbox" class="form-check-input" name=implantadorwesley checked   value="1">Wesley </br> 
    <?php  }if($_SESSION[implantadorwesley ]==0){  ?>
    <input disabled  type="checkbox" class="form-check-input" name=implantadorwesley value="1">Wesley
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
    <?php } if($_SESSION[implantadorsamantha ]==1){  ?>
    <input disabled  type="checkbox" class="form-check-input" name=implantadorsamantha checked   value="1">Samantha </br> 
    <?php  }if($_SESSION[implantadorsamantha ]==0){  ?>
    <input  disabled  type="checkbox" class="form-check-input" name=implantadorsamantha  value="1">Samantha 
  </label>
</div>

<div class="form-check">
  <label class="form-check-label">
    <?php } if($_SESSION[implantadoroutros]==1){  ?>
    <input disabled  type="checkbox" class="form-check-input" name=implantadoroutros checked   value="1">Outros </br>
    <?php  }if($_SESSION[implantadoroutros]==0){  ?>
    <input disabled  type="checkbox" class="form-check-input" name=implantadoroutros value="1">Outros 
  </label>
</div>

<?php }  ?>
  
  </div>
  
   <div class="form-group">
  <label for="noprazo"><i class="fa fa-calendar"></i> Implantação finalizada no prazo</label>
           <select disabled class="form-control" name="noprazo">
	        	
	        	<option value="1" <?php if($_SESSION[noprazo] == 1) echo "selected"; ?>>Sim</option>
	        	<option value="2" <?php if($_SESSION[noprazo] == 2) echo "selected"; ?>>Não</option>
	        	<option value="3" <?php if($_SESSION[noprazo] == 3) echo "selected"; ?>>Ainda não finalizado</option>
	   
        	</select>
  </div>
  
  <div class="form-group">
  <label for="cancelados"><i class="fa fa-calendar-times-o"></i> Total de contatos cancelados</label>
             <input  readonly  name="cancelados"  class="form-control"value="<?php echo $_SESSION[cancelados]; ?>" required placeholder=" Número de cancelamentos" type="text">
  </div>
  
  
    <div class="form-group">
  
  <label for="primeirocontato"><i class="fa fa-clock-o"></i> Primeiro contato em 48 horas</label>
           <select disabled class="form-control" name="primeirocontato">
	        	<option value="2">Selecione</option>
                <option value="1" <?php if($_SESSION[primeirocontato] == 1) echo "selected"; ?> >Sim</option>
	        	<option value="2" <?php if($_SESSION[primeirocontato] == 2) echo "selected"; ?> >Não</option>
	</select>
  
  
  </div>
  
    
  </br>
  		<div class="form-group">
  		<label><i class="fa fa-exclamation-triangle"></i> Cliente Critico</label>  </br>
        	  <?php if($_SESSION[critico]==1){  ?>
        	  <input disabled  class="form-check-label" type="radio" checked onClick="habilitacao()" name="critico" id="critico" 
                  value="1">Sim<br>
               
        	  
        	  <?php }  if($_SESSION[critico]==0 ){  ?>
        	   <input  disabled  class="form-check-label" type="radio" onClick="habilitacao()" name="critico" id="critico" 
                 value="1">Sim<br>
                 
                
    
        	  <?php } ?>
        	  
        	  <?php if($_SESSION[critico]==1){  ?>
        	  <input  disabled  class="form-check-label"  type="radio" onClick="habilitacao()" name="critico" id="semopcao" 
                 value="0" >Não
               
        	  <?php }  if($_SESSION[critico]==0 ){  ?>
        	  <input  disabled  class="form-check-label" type="radio" onClick="habilitacao()" checked name="critico" id="semopcao" 
              value="0" >Não </br>
         
        	  <?php } ?>
  			</div>
  			
  			
  			
  			
  			
  			
  			<div class="form-group">
  			<label > <i class="fa fa-keyboard-o"></i> Setor </label> </br>
        	  
        	  
        	       <?php  if($_SESSION[origemcr]==1){ ?>
       <input type="radio" disabled  class="form-check-label" id="origemcr0" checked name="origemcr" value="1" > Implantação<br>
     
     

                    <?php } if($_SESSION[origemcr]!=1){ ?>
     <input type="radio" disabled  class="form-check-label" id="origemcr0" name="origemcr" value="1" > Implantação<br>

     
    
     

     
     
    
     

     
          <?php } if($_SESSION[origemcr]==2){ ?>
        <input type="radio"  disabled  class="form-check-label"  id="origemcr1" checked name="origemcr" value="2" > Suporte<br>
      
   
      <?php } if($_SESSION [origemcr]!=2){ ?>
      <input type="radio" disabled  class="form-check-label"   id="origemcr1"  name="origemcr" value="2" > Suporte<br>
 
      
      
      
      
      
      <?php } if($_SESSION[origemcr]==4){ ?>
        <input type="radio" disabled  class="form-check-label"   id="origemcr1" checked name="origemcr" value="4" > Conversão<br>
      
   
      <?php } if($_SESSION[origemcr]!=4){ ?>
      <input type="radio"  disabled    class="form-check-label"  id="origemcr1"  name="origemcr" value="4" > Conversão <br>
 
      
      
      
      
      
      
      <?php } if($_SESSION[origemcr]==3){ ?>
  
        <input type="radio" disabled  class="form-check-label"  id="origemcr2" checked name="origemcr" value="3" readonly> Relacionamento<br>
      </div>
     
            <?php } if($_SESSION[origemcr]!=3){ ?>
            <input type="radio" disabled  class="form-check-label"  id="origemcr2"  name="origemcr" value="3" readonly> Relacionamento<br>
   
      

  
  </br>
  </br>
      <?php  } ?>
  
  </div>
  
  
  <div class="form-group">
  <label for="comentario"><i class="fa fa-align-left"></i> Resumo de atendimento</label>
            <textarea  readonly  class="form-control" name="comentario" placeholder="Escreva o reseumo de atendimento do cliente ..."   style="height:200px;"><?php echo $_SESSION[comentario]; ?></textarea>
  </div>
  
  
   <div class="form-group">
   <label for="comentariocr"><i class="fa fa-align-left"></i> Observações Criticas</label>
            <textarea readonly  name="comentariocr"   class="form-control"  style="height:200px;"><?php echo $_SESSION[comentariocr]; ?></textarea>
  </div>
  
  
  <label for="mapeamentovendedor"><i class="fa fa-align-left"></i> Mapeamento Vendedor</label>
            <textarea readonly class="form-control" name="mapeamentovendedor"  id="area1" style="width:100%;height:100px;"><?php echo$_SESSION[mapeamentovendedor]; ?></textarea>
    
    </div>
    </br>
        <center> <a  href="index.php?p=editar&usuario=<?php echo $linha['codigo']; ?>" class="btn btn-primary" role="button">  &ensp;&ensp; &ensp; &ensp;Editar &ensp; &ensp; &ensp; &ensp;</a> </center>
 </div>   
 
    
    
     
     
    
<?php } ?>

 