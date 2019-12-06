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
<html lang="en">
<head>
  <title>CCS - Ficha</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">


<style>
.responsive {
  width: 100%;
  height: auto;
}

</style>
  
  <div class="header">
  <img alt="" src="/Imgs/baner1.png" class="responsive"  />
  
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

	include("classe/conexao.php");
	
	$modalidade[1] = "Presencial";
	$modalidade[2] = "Remoto";

	$classificacao[1] = "Ouro";
	$classificacao[2] = "Prata";
	$classificacao[3] = "Diamante";
	
	$vendedor[0] = "Outros";
	$vendedor[1] = "Simone";
	$vendedor[2] = "Leandro";
	$vendedor[3] = "Helen";
	$vendedor[4] = "Adriana";
	$vendedor[5] = "Tarick";
	$vendedor[6] = "Anderson";
	$vendedor[7] = "Matriz";
	
	
        
	
	$sistema[1] = "Sim";
	$sistema[0] = "Não";
	
	
	$semsuporte[0]="Não";
	$semsuporte[1]="Sim";
	
	
	$statuss[0] = "A planejar";
	$statuss[1] = "Em Andamento";
	$statuss[2] = "Paralizado por conta do Cliente";
	$statuss[3] = "Paralizado por conta da Fortes";
	$statuss[4] = "Finalizado";
	
	$statuscontrato[0]="Ativo";
	$statuscontrato[1]="Cancelado";
	$statuscontrato[2]="Suspenso";
	
	
	
	//Implantadores
	$implantadores[1] = "Rafael";
	$implantadores[2] = "Samantha";
	$implantadores[3] = "Wesley";
	$implantadores[4] = "Indefinido";
	$implantadores[5] = "Karina";
	
	
	
	$setor[1] = "Implantação";
	$setor[2] = "Suporte";
	$setor[3] = "Relacionamento";
	$setor[4] = "Conversão";
	
	
	//Imagem para substituir o nome Prata
	$clasimg1 = 'Imgs/ingot.png';
	$clasimg2 = 'Imgs/icons8-barras-de-prata-32.png';
	$clasimg3 = 'Imgs/value.png';
	
	//Imagem para Status e Status
	$staimg1 ='Imgs/information (1).png';
	$staimg2 ='Imgs/warning.png';
	$staimg3 ='Imgs/checked.png';
	
	
	$unidade[1] = "Belo Horizonte";
	$unidade[2] = "Montes Claros";

	
		$recorrente[1] = "Sim";
	$recorrente[2] = "Não";
	
	$status =0;

	if(!isset($_GET['usuario']))
		echo "<script> alert('Codigo invalido.'); location.href='index.php?p=inicial'; </script>";
	else{
            
            
                
	$usu_codigo = intval($_GET['usuario']);


	

	
	if(isset($_POST['confirmar'])){

		// 1 - Registro dos dados

		if(!isset($_SESSION))
			 

		foreach($_POST as $chave=>$valor)
			$_SESSION[$chave] = $mysqli->real_escape_string($valor);


		// 3 - Inserção no Banco e redirecionamento
		if(count($erro) == 0){


			$sql_code = "UPDATE usuario SET
				nome = '$_SESSION[nome]',
				endereco= '$_SESSION[endereco]',
				origemcr= '$_SESSION[origemcr]',
				statusconversao= '$_SESSION[statusconversao]',
				datadecadastro = '$_SESSION[datadecadastro]',
				telefone = '$_SESSION[telefone]',
				telefone2 = '$_SESSION[telefone2]',
				cnpj = '$_SESSION[cnpj]', 
				email = '$_SESSION[email]', 
				classificacao = '$_SESSION[classificacao]',
				primeirocontato = '$_SESSION[primeirocontato]',
				status='$_SESSION[status]',
				cancelados = '$_SESSION[cancelados]',
				semsuporte= '$_SESSION[semsuporte]',
				realizados = '$_SESSION[realizados]',
				usuarios = '$_SESSION[usuarios]',
				recorrente = '$_SESSION[recorrente]',
				
				implantadorrafael = '$_SESSION[implantadorrafael]',
				implantadorwesley = '$_SESSION[implantadorwesley]',
				implantadorsamantha = '$_SESSION[implantadorsamantha]',
				implantadorkarina = '$_SESSION[implantadorkarina]',
				implantadoroutros = '$_SESSION[implantadoroutros]',
				comentariocr= '$_SESSION[comentariocr]',
				
				
				mapeamentovendedor= '$_SESSION[mapeamentovendedor]',
				implantador = '$_SESSION[implantador]',
				vendedor = '$_SESSION[vendedor]',
				horascontratadas = '$_SESSION[horascontratadas]',
				solucao = '$_SESSION[solucao]',
				recorrente = '$_SESSION[recorrente]',
				modalidade = '$_SESSION[modalidade]',
				comentario = '$_SESSION[comentario]',
				datadecadastro = '$_SESSION[datadecadastro]',
				statuscontrato = '$_SESSION[statcuscontrato]',
				unidade = '$_SESSION[cunidade]',
				
				cpessoal = '$_SESSION[cpessoal]',
				
				cpessoal1 = '$_SESSION[cpessoal1]',
				cpessoal2 = '$_SESSION[cpessoal2]',
				cpessoal3 = '$_SESSION[cpessoal3]',
				cpessoal4 = '$_SESSION[cpessoal4]',
				
				cfiscal = '$_SESSION[cfiscal]',
				cfiscal1 = '$_SESSION[cfiscal1]',
				cfiscal2 = '$_SESSION[cfiscal2]',
				cfiscal3 = '$_SESSION[cfiscal3]',
				cfiscal4 = '$_SESSION[cfiscal4]',
				
				ccontabil = '$_SESSION[ccontabil]',
				ccontabil1 = '$_SESSION[ccontabil1]',
				ccontabil2 = '$_SESSION[ccontabil2]',
				
				crh = '$_SESSION[crh]',
				    crh1 = '$_SESSION[crh1]',
				    crh2 = '$_SESSION[crh2]',
				    crh3 = '$_SESSION[crh3]',
				    crh4 = '$_SESSION[crh4]',
				    crh5 = '$_SESSION[crh5]',
				    crh6 = '$_SESSION[crh6]',
				    crh7 = '$_SESSION[crh7]',
				    crh8 = '$_SESSION[crh8]',
				    
				cag = '$_SESSION[cag]',
				    cag1 = '$_SESSION[cag1]',
				    cag2 = '$_SESSION[cag2]',
				    cag3 = '$_SESSION[cag3]',
				    cag4 = '$_SESSION[cag4]',
				    
				responsavel = '$_SESSION[responsavel]',
				ponto = '$_SESSION[ponto]'
				
				WHERE codigo = '$usu_codigo'";

			$confirma = $mysqli->query($sql_code) or die($mysqli->error);

			if($confirma){

				unset(
				$_SESSION[cancelados],
				$_SESSION[endereco],
				$_SESSION[origemcr],
				$_SESSION[statusconversao],
	        	$_SESSION[realizados] ,
	        	$_SESSION[comentariocr] ,
	        	$_SESSION[mapeamentovendedor] ,
	        	$_SESSION[datadecadastro] ,
	        	$_SESSION[primeirocontato] ,
	        	$_SESSION[recorrente] ,
		        $_SESSION[implantadorrafael],
		        $_SESSION[implantadorwesley],
		        $_SESSION[implantadorsamantha],
		        $_SESSION[implantadorkarina],
		        $_SESSION[implantadoroutros],
		        $_SESSION[semsuporte],
				$_SESSION[nome],
				$_SESSION[status],
				$_SESSION[vendedor],
				$_SESSION[horascontratadas],
				$_SESSION[solucao],
				$_SESSION[recorrente],
				$_SESSION[telefone],
				$_SESSION[telefone2],
				$_SESSION[cnpj],
				$_SESSION[usuarios],
				$_SESSION[email],
				$_SESSION[classificacao],
				$_SESSION[modalidade],
				$_SESSION[comentario],
				$_SESSION[statuscontrato],
				$_SESSION[unidade],
				$_SESSION[responsavel],
				
				$_SESSION[cpessoal],
				$_SESSION[cpessoal1],
				$_SESSION[cpessoal2],
				$_SESSION[cpessoal3],
				$_SESSION[cpessoal4],
				
				$_SESSION[cfiscal],
				$_SESSION[cfiscal1],
				$_SESSION[cfiscal2],
				$_SESSION[cfiscal3],
				$_SESSION[cfiscal4],
				
				$_SESSION[ccontabil],
				$_SESSION[ccontabil1],
				$_SESSION[ccontabil2],
				$_SESSION[ccontabil3],
				$_SESSION[ccontabil4],
				
				
				$_SESSION[crh],
				    $_SESSION[crh1],
				    $_SESSION[crh2],
				    $_SESSION[crh3],
				    $_SESSION[crh4],
				    $_SESSION[crh5],
				    $_SESSION[crh6],
				    $_SESSION[crh7],
				    $_SESSION[crh8],
				    
				$_SESSION[cag],
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

				echo "<script> location.href='index.php?p=inicial'; </script>";

			}else
				$erro[] = $confirma;

		}

	}else{

		$sql_code = "SELECT * FROM usuario WHERE codigo = '$usu_codigo'";
		$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
		$linha = $sql_query->fetch_assoc();

		if(!isset($_SESSION))
				$_SESSION[origemcr]= $linha['origemcr'];
			$_SESSION[statusconversao]= $linha['statusconversao'];
			$_SESSION[endereco]= $linha['endereco'];
	        	$_SESSION[cancelados]= $linha['cancelados'];
	        	$_SESSION[datadecadastro]= $linha['datadecadastro'];
	        	$_SESSION[primeirocontato]= $linha['primeirocontato'];
	        	$_SESSION[usuarios]= $linha['usuarios'];
	        	$_SESSION[realizados] = $linha['realizados'];
	        	$_SESSION[comentariocr] = $linha['comentariocr'];
	        	$_SESSION[recorrente] = $linha['recorrente'];
		        $_SESSION[implantadorrafael]= $linha['implantadorrafael'];
		        $_SESSION[implantadorwesley]= $linha['implantadorwesley'];
		        $_SESSION[implantadorkarina]= $linha['implantadorkarina'];
		        $_SESSION[implantadorsamantha]= $linha['implantadorsamantha'];
		        $_SESSION[implantadoroutros]= $linha['implantadoroutros'];
		        $_SESSION[mapeamentovendedor]= $linha['mapeamentovendedor'];
		         $_SESSION[semsuporte]= $linha['semsuporte'];
				$_SESSION[nome]= $linha['nome'];
				$_SESSION[vendedor]= $linha['vendedor'];
				$_SESSION[horascontratadas]= $linha['horascontratadas'];
				$_SESSION[solucao]= $linha['solucao'];
				$_SESSION[recorrente]= $linha['recorrente'];
				$_SESSION[telefone]= $linha['telefone'];
				$_SESSION[telefone2]= $linha['telefone2'];
				$_SESSION[cnpj]= $linha['cnpj'];
				$_SESSION[comentario]= $linha['comentario'];
				$_SESSION[email]= $linha['email'];
				$_SESSION[classificacao]= $linha['classificacao'];
				$_SESSION[modalidade]= $linha['modalidade'];
				$_SESSION[datadecadastro]= $linha['datadecadastro'];
				$_SESSION[status]= $linha['status'];
				$_SESSION[statuscontrato]= $linha['statuscontrato'];
				$_SESSION[unidade]= $linha['unidade'];
				$_SESSION[responsavel]= $linha['responsavel'];
				
				$_SESSION[cpessoal]= $linha['cpessoal'];
				$_SESSION[cpessoal1]= $linha['cpessoal1'];
				$_SESSION[cpessoal2]= $linha['cpessoal2'];
				$_SESSION[cpessoal3]= $linha['cpessoal3'];
				$_SESSION[cpessoal4]= $linha['cpessoal4'];
				
				$_SESSION[cfiscal]= $linha['cfiscal'];
				$_SESSION[cfiscal1]= $linha['cfiscal1'];
				$_SESSION[cfiscal2]= $linha['cfiscal2'];
				$_SESSION[cfiscal3]= $linha['cfiscal3'];
				$_SESSION[cfiscal4]= $linha['cfiscal4'];
				
				
				$_SESSION[ccontabil]= $linha['ccontabil'];
				$_SESSION[ccontabil1]= $linha['ccontabil1'];
				$_SESSION[ccontabil2]= $linha['ccontabil2'];
				
				$_SESSION[cag]= $linha['cag'];
				        	$_SESSION[cag1]= $linha['cag1'];
					    	$_SESSION[cag2]= $linha['cag2'];
							$_SESSION[cag3]= $linha['cag3'];
							$_SESSION[cag4]= $linha['cag4'];
							
				$_SESSION[crh]= $linha['crh'];
				    $_SESSION[crh1]= $linha['crh1'];
				    $_SESSION[crh2]= $linha['crh2'];
				    $_SESSION[crh3]= $linha['crh3'];
				    $_SESSION[crh4]= $linha['crh4'];
				    $_SESSION[crh5]= $linha['crh5'];
				    $_SESSION[crh6]= $linha['crh6'];
				    $_SESSION[crh7]= $linha['crh7'];
				    $_SESSION[crh8]= $linha['crh8'];
				  
				$_SESSION[cponto]= $linha['cponto'];
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
	
	if ($linha['cpessoal']==1||$linha['cfiscal']==1||$linha['ccontabil']==1||$linha['crh']==1||$linha['cag']==1||$linha['cponto']==1){
        if($linha['primeirocontato']==2){
                    echo "<script> alert('ATENÇÃO PRIMEIRO CONTATO NÃO REALIZADO.');</script>";
                }
	}
	
                
                if ($linha['cfiscal']==1){
if($linha['cfiscal1']==NULL && $linha['cfiscal2']==NULL && $linha['cfiscal3']==NULL && $linha['cfiscal4']==NULL){
                    echo "<script> alert('ATENÇÃO CRONOGRAMA FISCAL AINDA NÃO INCLUIDO.');</script>";
}
                }
                
                
                
                
                if ($linha['cpessoal']==1){
if($linha['cpessoal1']==NULL && $linha['cpessoal2']==NULL && $linha['cpessoal3']==NULL && $linha['cpessoal4']==NULL){
                    echo "<script> alert('ATENÇÃO CRONOGRAMA PESSOAL AINDA NÃO INCLUIDO.');</script>";
                }
                }
                
                
                
                if ($linha['ccontabil']==1){
if($linha['ccontabil1']==NULL && $linha['ccontabil2']==NULL){
                    echo "<script> alert('ATENÇÃO CRONOGRAMA CONTÁBIL AINDA NÃO INCLUIDO.');</script>";
                }
                    
                }
                
                if ($linha['cag']==1){
if($linha['cag1']==NULL && $linha['cag2']==NULL && $linha['cag3'] && $linha['cag4']){
                    echo "<script> alert('ATENÇÃO CRONOGRAMA AG AINDA NÃO INCLUIDO.');</script>";
                }
                    
                }
                
                 if ($linha['cponto']==1){
if($linha['cponto1']==NULL && $linha['cponto2']==NULL && $linha['cponto3']==NULL){
                    echo "<script> alert('ATENÇÃO CRONOGRAMA PONTO AINDA NÃO INCLUIDO.');</script>";
                }
                    
                }
                
                
                                 if ($linha['crh']==1){
if($linha['crh1']==NULL && $linha['crh2']==NULL && $linha['crh3']==NULL &&$linha['crh4']==NULL && $linha['crh5']==NULL && $linha['crh6']==NULL && $linha['crh7']==NULL && $linha['crh8']==NULL){
                    echo "<script> alert('ATENÇÃO CRONOGRAMA RH AINDA NÃO INCLUIDO.');</script>";
                }
                    
                }
                
                
                
if($linha['recorrente']==1 ){
                    echo "<script> alert('ATENÇÃO CLIENTE RECORRENTE EM SUPORTE.');</script>";
                }
if($linha['statuscontrato']==1 ){
                    echo "<script> alert('ATENÇÃO CONTRATO CANCELADO.');</script>";
                }
if($linha['statuscontrato']==2 ){
                    echo "<script> alert('ATENÇÃO CONTRATO SUSPENSO.');</script>";
                }




?>


<style>




    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    
    
    
    /* Header/logo Title */
.header {
    padding: 0px;
    text-align: left;
    background: white;m
    color: white;
}

/* Increase the font size of the heading */
.header h1 {
    font-size: 40px;
}



  </style>



<?php 
if(count($erro) > 0){ 
	echo "<div class='erro'>"; 
	foreach($erro as $valor) 
		echo "$valor <br>"; 

	echo "</div>"; 
}
?>



<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
         <form class="form-inline" acnion="/action_page.php">
             <div class="checkbox">
                <?php if ($_SESSION[datadecadastro]!="1999-01-01"){ ?>
            <label for="datadecadastro"><i class="fa fa-clock-o"></i> Data de entrada </label>
             <input name="nome"  class="form-control" value="<?php echo $_SESSION[datadecadastro]; ?>" required readonly placeholder=" Data de Cadastro" type="date">
            
            <?php  }  ?>
                 <div class="well">
              <label><b> Sistemas contratados </b></label> 
              </br>
              <div class="form-group">
                      </div>
        	  <?php if($_SESSION[cpessoal]==1){  ?>
        	 <input type="checkbox" name="cpessoal" checked disabled='true'  value="1">Pessoal<br>
        	  <?php } if($_SESSION[ccontabil]==1){  ?>
             <input type="checkbox" name="ccontabil"  checked  disabled='true' value="1">Fiscal<br>
              <?php } if($_SESSION[cfiscal]==1){ ?>
             <input type="checkbox" name="cfiscal"  checked disabled='true' value="1" >Contábil<br>
               <?php } if($_SESSION[contconecta]==0){  ?>
        	 <input type="checkbox" name="contconecta"   disabled='true' value="1">Conecta<br>
        	  <?php } if($_SESSION[contdoc]==0){  ?>
             <input type="checkbox" name="contdoc"   disabled='true'  value="1">Doc<br>
              <?php } if($_SESSION[contpatrio]==0){ ?>
             <input type="checkbox" name="contpatrio"  disabled='true'   value="1" >Patrio<br>
              <?php } if($_SESSION[contgestao]==0){  ?>
             <input  type="checkbox" name="contgestao" disabled='true' value="1">Gestão<br>
             <?php } if($_SESSION[contcore]==0){  ?>
             <input  type="checkbox" name="contcore" disabled='true' value="1">Core<br> </br>
              <?php } ?>
              
               <?php if($_SESSION[cpessoal]==0){  ?>
        	 <input type="checkbox" name="cpessoal"   disabled='true' value="1">Pessoal<br>
        	  <?php } if($_SESSION[ccontabil]==0){  ?>
             <input type="checkbox" name="ccontabil"   disabled='true'  value="1">Fiscal<br>
              <?php } if($_SESSION[cfiscal]==0){ ?>
             <input type="checkbox" name="cfiscal"  disabled='true'   value="1" >Contábil<br>
            <?php } if($_SESSION[contconecta]==1){  ?>
        	 <input type="checkbox" name="contconecta"  checked   disabled='true' value="1">Conecta<br>
        	  <?php } if($_SESSION[contdoc]==1){  ?>
             <input type="checkbox" name="contdoc"  checked disabled='true'  value="1">Doc<br>
              <?php } if($_SESSION[contpatrio]==1){ ?>
             <input type="checkbox" name="contpatrio" checked disabled='true'   value="1" >Patrio<br>
              <?php } if($_SESSION[contgestao]==1){  ?>
             <input  type="checkbox" name="contgestao" checked disabled='true' value="1">Gestão<br>
             <?php } if($_SESSION[contcore]==1){  ?>
             <input  type="checkbox" name="contcore" checked disabled='true' value="1">Core<br>
              <?php } ?>
 
 
 
           
         
               <label><b> Corporativo </b> </label> </br>
               
                <?php if($_SESSION[crh]==0){  ?>
             <input  type="checkbox" name="crh" disabled='true' value="1"> RH<br>
              <?php } if($_SESSION[cponto]==0){ ?>
               &ensp;&ensp;<input type="checkbox" name="cponto" disabled='true' value="1"> Ponto<br>
              <?php } if($_SESSION[cag]==0){ ?>
             <input type="checkbox" name="cag" disabled='true' value="1" > AG<br><br>
             
             
             <?php } if($_SESSION[crh]==1){  ?>
             <input  type="checkbox" name="crh" checked disabled='true' value="1"> RH    <br>
              <?php } if($_SESSION[cponto]==1){ ?>
               &ensp;&ensp;<input type="checkbox" name="cponto" checked disabled='true' value="1"> Ponto<br>
              <?php } if($_SESSION[cag]==1){ ?>
             <input type="checkbox" name="cag" checked disabled='true'  value="1" > AG<br><br>
              <?php } ?>
              </div>
              </div>
         </form>
         
         
         
       
    </div>
    <div class="col-sm-8 text-left"> 
     <div class="well">
         <center><h3>Ficha Cadastral</h3></center>
         <form  action="/action_page.php">
    <div class="form-group">
            <label for="nome">Razão Social</label>
             <input name="nome" class="form-control" value="<?php echo $_SESSION[nome]; ?>" required readonly placeholder=" Razão Social" type="text">      
             </div>
    <div class="form-group">
                <label for="cnpj"> CNPJ/CPF</label>
                <input name="cnpj" class="form-control" value="<?php echo $_SESSION[cnpj]; ?>" required  readonly placeholder="Cnpj/Cpf" type="text">
    </div>
     <div class="form-group">
         <label for="email"> Email</label>
         <input class="form-control" name="email" value="<?php echo $_SESSION[email]; ?>" required  readonly placeholder=" E-mail principal"   type="text">
            </div>
  </form>
  
  
  
  
  </br>
  <form class="form-inline" action="/action_page.php">
    <div class="form-group">
        <label for="responsavel"> Responsável</label>
            <input name="responsavel" class="form-control" value="<?php echo $_SESSION[responsavel]; ?>" readonly placeholder="Responsavel da empresa" required type="text">
      
    </div>
    <div class="form-group">
     <label for="telefone">Telefone</label>
         <input  class="form-control" name="telefone" value="<?php echo $_SESSION[telefone]; ?>"  readonly placeholder="Telefone principal" required type="text">
    </div>
    <div class="form-group">
       <label for="telefone2"> Telefone 2</label>
            <input class="form-control" name="telefone2" value="<?php echo $_SESSION[telefone2]; ?>"  readonly placeholder="Telefone principal" required type="text">
    </div>
  </form>
  </br>
  
  
  
  <form class="form-inline" action="/action_page.php">
    <div class="form-group">
       <label for="vendedor"> Vendedor</label>
       &ensp; &ensp;<input name="vendedor" class="form-control" value="<?php echo $vendedor[$_SESSION[vendedor]]; ?>" readonly  placeholder="Vendedor do cliente" required type="text">
    </div>
    
    
    <div class="form-group">
       &ensp;<label readonly for="unidade"> Unidade</label>
            <input name="unidade" class="form-control" value="<?php echo $unidade[$_SESSION[unidade]]; ?>"  readonly placeholder="unidade " required type="text">
    </div>
    <div class="form-group">
      <label for="modalidade"> Modalidade</label>
             <input name="modalidade" class="form-control" value="<?php echo $modalidade[$_SESSION[modalidade]]; ?>" readonly placeholder="Modalidade" required type="text">
    </div>
    
  </form>
  </br>
  
  
   
  <form  action="/action_page.php">
    <div class="form-group">
    
    <div class="form-group">
       <label for="semsuporte"> Suporte ativo</label>
       &ensp; &ensp;<input name="semsuporte" class="form-control" value="<?php echo $semsuporte[$_SESSION[semsuporte]]; ?>" readonly  required type="text">
    </div>
    
    
    
       <label for="statuscontrato"><i class="fa fa-clone"></i>Contrato</label>
            <input name="statuscontrato"  class="form-control" value="<?php echo $statuscontrato[$_SESSION[statuscontrato]]; ?>" readonly placeholder="Status Contrato" required type="text">
    </div>
    <div class="form-group">
     <label for="status"><i class="fa fa-tasks"></i> Implantação</label>
            <input name="status" class="form-control" value="<?php echo $statuss[$_SESSION[status]]; ?>" readonly placeholder="Status implantação" required type="text">
    </div>
    <div class="form-group">
      <label for="origemcr"><i class="fa fa-bullhorn"></i> Setor</label>
            <input name="origemcr" class="form-control" value="<?php echo $setor[$_SESSION[origemcr]]; ?>" readonly  required type="text">
    </div>
    
  <div class="form-group">
      <label for="usuarios"><i class="fa fa-bullhorn"></i>Usuarios</label>
       <input name="usuarios" class="form-control" value="<?php echo $_SESSION[usuarios]; ?>" readonly  required type="text">
    </div>
    <div class="form-group">
      <label for="implantador"><i class="fa fa-bullhorn"></i>Implantador</label>
            <input name="implantador" class="form-control" value="<?php 
            
            $implantador="";
            
             $implantador2="";
            $implantador3="";
            $implantador4="";
            $implantador5="";
            $implantador6="";
            
            
            if($_SESSION[implantadorrafael]==1){  
                $implantador="Rafael";   
                
            }
            if ($_SESSION[implantadorwesley]==1){
                $implantador2="      Wesley";
            }
            
            if ($_SESSION[implantadorkarina]==1){
                $implantador3="      Karina";
            }
            
            if ($_SESSION[implantadorsamantha]==1){
                $implantador4="      Samantha";
            }
            
            if ($_SESSION[implantadoroutros]==1){
                $implantador5="      Outros";
            }
            if ($_SESSION[implantadorrafael]==0 & $_SESSION[implantadoroutros]==0 && $_SESSION[implantadorwesley]==0 && $_SESSION[implantadorkarina]==0 && $_SESSION[implantadorsamantha]==0 ) {
                $implantador6="Não Vinculado";
            }
            
           echo $implantador,$implantador2,$implantador3,$implantador4,$implantador5,$implantador6 ; ?>" readonly  required type="text">
    </div>
    
  </form>
  </br>
         
        <form  action="/action_page.php">
            <div class="form-group">
            
             <label for="endereco"><i class="fa fa-align-left"></i>Endereço </label>
            <textarea readonly class="form-control" name="endereco"  id="area1" style="width:100%;height:100px;"><?php echo$_SESSION[endereco]; ?></textarea>
            
            </br>
            
            <label for="comentario"><i class="fa fa-align-left"></i> Resumo Atendimento</label>
            <textarea readonly  class="form-control" name="comentario" placeholder="Observação sobre o cliente ..."  style="height:100px;"><?php echo$_SESSION[comentario]; ?></textarea>
            
            
            </br>
            <label for="comentariocr"><i class="fa fa-align-left"></i> Observação Critica</label>
            <textarea readonly  class="form-control" name="comentariocr"   style="height:100px;"><?php echo$_SESSION[comentariocr]; ?></textarea>
            
            
            </br>
            
            <label for="mapeamentovendedor"><i class="fa fa-align-left"></i> Mapeamento Vendedor</label>
            <textarea readonly class="form-control" name="mapeamentovendedor"  id="area1" style="width:100%;height:100px;"><?php echo$_SESSION[mapeamentovendedor]; ?></textarea>
         </div>
         <div class="form-group">
             
             
             <a  href="index.php?p=editar&usuario=<?php echo $linha['codigo']; ?>" class="btn btn-primary" role="button">  &ensp;&ensp; &ensp; &ensp;Editar &ensp; &ensp; &ensp; &ensp;</a>
            
   
         </div>
         <div class="form-group">
             <a href="index.php?p=cadastrar2&usuario=<?php echo $linha['codigo']; ?>" class="btn btn-primary" role="button">Acompanhamento</a>
         </div>
     </div>
    </div>
    
    
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
if($_SESSION[modalidade]==1){
           $saldo=($_SESSION[horascontratadas]-$saldocanceladas-$totalrealizado ) + 3;
   }
if($_SESSION[modalidade]==2){

  $saldo=($_SESSION[horascontratadas]-$saldocanceladas-$totalrealizado ) + 2
}
 ?>
    
    
    <div class="col-sm-2 sidenav">
        
      <div class="well">
        <p>Horas Realizadas</p>
        <p>   <?php echo $totalrealizado; ?> </p>
      </div>
      <div class="well">
        <p>Contatos Cancelados</p>
         <p>  <?php echo $_SESSION[cancelados]; ?> </p>
      </div>
      <div class="well">
        <p>Saldo de implantação</p>
         <p> <?php echo $saldo; ?>  </p>
      </div>
    
      
      <a href="index.php?p=cronograma&usuario=<?php echo $linha['codigo']; ?>" class="btn btn-primary btn-lg" role="button" >Cronograma</a>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p></p>
</footer>




<?php } ?>