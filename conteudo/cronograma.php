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
  <title>Cronograma de implantação</title>
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
				
				
				hrcp1 = '$_SESSION[hrcp1]',
				hrcp2 = '$_SESSION[hrcp2]',
				hrcp3 = '$_SESSION[hrcp3]',
				hrcp4 = '$_SESSION[hrcp4]',
				
				
				
			
				cpessoal1 = '$_SESSION[cpessoal1]',
				cpessoal2 = '$_SESSION[cpessoal2]',
				cpessoal3 = '$_SESSION[cpessoal3]',
				cpessoal4 = '$_SESSION[cpessoal4]',
				
				
				
			    hrrp1 = '$_SESSION[hrrp1]',
			    hrrp2 = '$_SESSION[hrrp2]',
			    hrrp3 = '$_SESSION[hrrp3]',
			    hrrp4 = '$_SESSION[hrrp4]',
			    
			    	rp1 = '$_SESSION[rp1]',
				rp2 = '$_SESSION[rp2]',
				rp3 = '$_SESSION[rp3]',
				rp4 = '$_SESSION[rp4]',
				
				crpessoal1 = '$_SESSION[crpessoal1]',
				crpessoal2 = '$_SESSION[crpessoal2]',
				crpessoal3 = '$_SESSION[crpessoal3]',
				crpessoal4 = '$_SESSION[crpessoal4]',
			      
			      
		
			  
			  
			  
			  	hrcf1 = '$_SESSION[hrcf1]',
				hrcf2 = '$_SESSION[hrcf2]',
				hrcf3 = '$_SESSION[hrcf3]',
				hrcf4 = '$_SESSION[hrcf4]',
				
				
				cfiscal1 = '$_SESSION[cfiscal1]',
				cfiscal2 = '$_SESSION[cfiscal2]',
				cfiscal3 = '$_SESSION[cfiscal3]',
				cfiscal4 = '$_SESSION[cfiscal4]',
				
				
				
			    hrrf1 = '$_SESSION[hrrf1]',
			    hrrf2 = '$_SESSION[hrrf2]',
			    hrrf3 = '$_SESSION[hrrf3]',
			    hrrf4 = '$_SESSION[hrrf4]',
			    
			    rf1 = '$_SESSION[rf1]',
				rf2 = '$_SESSION[rf2]',
				rf3 = '$_SESSION[rf3]',
				rf4 = '$_SESSION[rf4]',
				
				crfiscal1 = '$_SESSION[crfiscal1]',
				crfiscal2 = '$_SESSION[crfiscal2]',
				crfiscal3 = '$_SESSION[crfiscal3]',
				crfiscal4 = '$_SESSION[crfiscal4]',
				
				
				
				
				
				
				 hrcc1 = '$_SESSION[hrcc1]',
				hrcc2 = '$_SESSION[hrcc2]',
	
				
				
				ccontabil1 = '$_SESSION[ccontabil1]',
				ccontabil2 = '$_SESSION[ccontabil2]',

				
				
				
			    hrrc1 = '$_SESSION[hrrc1]',
			    hrrc2 = '$_SESSION[hrrc2]',

			    
			    rc1 = '$_SESSION[rc1]',
				rc2 = '$_SESSION[rc2]',

				
				crcontabil1 = '$_SESSION[crcontabil1]',
				crcontabil2 = '$_SESSION[crcontabil2]',
				
				
				
				
				
				hrrcore = '$_SESSION[hrrcore]',
				hrrconecta = '$_SESSION[hrrconecta]',
			    hrrdoc = '$_SESSION[hrrdoc]',
			    hrrgestao = '$_SESSION[hrrgestao]',
			    hrrpatrio = '$_SESSION[hrrpatrio]',
			   
			    rcore='$_SESSION[rcore]',
			    rconecta = '$_SESSION[rconecta]',
				rdoc = '$_SESSION[rdoc]',
				rgestao = '$_SESSION[rgestao]',
				rpatrio = '$_SESSION[rpatrio]',
				
				
			
				crcore = '$_SESSION[crcore]',
				crconecta = '$_SESSION[crconecta]',
				crdoc = '$_SESSION[crdoc]',
				crgestao = '$_SESSION[crgestao]',
				crpatrio = '$_SESSION[crpatrio]',
				
				
				
				hrccore = '$_SESSION[hrccore]',
				hrcconecta = '$_SESSION[hrcconecta]',
				hrcdoc = '$_SESSION[hrcdoc]',
				hrcgestao = '$_SESSION[hrcgestao]',
				hrcpatrio = '$_SESSION[hrcpatrio]',
				
				
				
				
				
			
				
				ccore = '$_SESSION[ccore]',
				cconecta = '$_SESSION[cconecta]',
				cdoc = '$_SESSION[cdoc]',
				cgestao = '$_SESSION[cgestao]',
				cpatrio = '$_SESSION[cpatrio]',

			  
			  
			  	hrcag1 = '$_SESSION[hrcag1]',
				hrcag2 = '$_SESSION[hrcag2]',
				hrcag3 = '$_SESSION[hrcag3]',
				hrcag4 = '$_SESSION[hrcag4]',
				
			
				cag1 = '$_SESSION[cag1]',
				cag2 = '$_SESSION[cag2]',
				cag3 = '$_SESSION[cag3]',
				cag4 = '$_SESSION[cag4]',
				
				
				
			    hrrag1 = '$_SESSION[hrrag1]',
			    hrrag2 = '$_SESSION[hrrag2]',
			    hrrag3 = '$_SESSION[hrrag3]',
			    hrrag4 = '$_SESSION[hrrag4]',
			    
			    rag1 = '$_SESSION[rag1]',
				rag2 = '$_SESSION[rag2]',
				rag3 = '$_SESSION[rag3]',
				rag4 = '$_SESSION[rag4]',
				
				crag1 = '$_SESSION[crag1]',
				crag2 = '$_SESSION[crag2]',
				crag3 = '$_SESSION[crag3]',
				crag4 = '$_SESSION[crag4]',
				
				
				
				
				
				
				
				
			
				hrcrh1 = '$_SESSION[hrcrh1]',
				hrcrh2 = '$_SESSION[hrcrh2]',
				hrcrh3 = '$_SESSION[hrcrh3]',
				hrcrh4 = '$_SESSION[hrcrh4]',
				hrcrh5 = '$_SESSION[hrcrh5]',
				hrcrh6 = '$_SESSION[hrcrh6]',
				hrcrh7 = '$_SESSION[hrcrh7]',
				hrcrh8 = '$_SESSION[hrcrh8]',
				
			
				crh1 = '$_SESSION[crh1]',
				crh2 = '$_SESSION[crh2]',
				crh3 = '$_SESSION[crh3]',
				crh4 = '$_SESSION[crh4]',
				crh5 = '$_SESSION[crh5]',
				crh6 = '$_SESSION[crh6]',
				crh7 = '$_SESSION[crh7]',
				crh8 = '$_SESSION[crh8]',
				
				
				
			    hrrrh1 = '$_SESSION[hrrrh1]',
			    hrrrh2 = '$_SESSION[hrrrh2]',
			    hrrrh3 = '$_SESSION[hrrrh3]',
			    hrrrh4 = '$_SESSION[hrrrh4]',
				hrrrh5 = '$_SESSION[hrrrh5]',
			    hrrrh6 = '$_SESSION[hrrrh6]',
			    hrrrh7 = '$_SESSION[hrrrh7]',
			    hrrrh8 = '$_SESSION[hrrrh8]',
			    
			    rrh1 = '$_SESSION[rrh1]',
				rrh2 = '$_SESSION[rrh2]',
				rrh3 = '$_SESSION[rrh3]',
				rrh4 = '$_SESSION[rrh4]',
				rrh5 = '$_SESSION[rrh5]',
				rrh6 = '$_SESSION[rrh6]',
				rrh7 = '$_SESSION[rrh7]',
				rrh8 = '$_SESSION[rrh8]',
				
				crrh1 = '$_SESSION[crrh1]',
				crrh2 = '$_SESSION[crrh2]',
				crrh3 = '$_SESSION[crrh3]',
				crrh4 = '$_SESSION[crrh4]',
				crrh5 = '$_SESSION[crrh5]',
				crrh6 = '$_SESSION[crrh6]',
				crrh7 = '$_SESSION[crrh7]',
				crrh8 = '$_SESSION[crrh8]',
			  
          adicionaldata1 =  '$_SESSION[adicionaldata1]',
           adicionaldata2 =  '$_SESSION[adicionaldata2]',
            adicionaldata3 =  '$_SESSION[adicionaldata3]',
            adicionaldata4 =  '$_SESSION[adicionaldata4]',
           adicionalhoras1 =  '$_SESSION[adicionalhoras1]',
           adicionalhoras2 =  '$_SESSION[adicionalhoras2]',
           adicionalhoras3 =  '$_SESSION[adicionalhoras3]',
          adicionalhoras4  =  '$_SESSION[adicionalhoras4]',
          adicionalrealizado1 =  '$_SESSION[adicionalrealizado1]',
          adicionalrealizado2 =  '$_SESSION[adicionalrealizado2]',
          adicionalrealizado3 =  '$_SESSION[adicionalrealizado3]',
          adicionalrealizado4 =  '$_SESSION[adicionalrealizado4]',
				
				
			
				
				
				hrcpt1 = '$_SESSION[hrcpt1]',
				hrcpt2 = '$_SESSION[hrcpt2]',
				hrcpt3 = '$_SESSION[hrcpt3]',
			
				
			
				cponto1 = '$_SESSION[cponto1]',
				cponto2 = '$_SESSION[cponto2]',
				cponto3 = '$_SESSION[cponto3]',
			
				
				
				
			    hrrpt1 = '$_SESSION[hrrpt1]',
			    hrrpt2 = '$_SESSION[hrrpt2]',
			    hrrpt3 = '$_SESSION[hrrpt3]',
			   
			    
			    rpt1 = '$_SESSION[rpt1]',
				rpt2 = '$_SESSION[rpt2]',
				rpt3 = '$_SESSION[rpt3]',
			
				
				crponto1 = '$_SESSION[crponto1]',
				crponto2 = '$_SESSION[crponto2]',
				crponto3 = '$_SESSION[crponto3]'
				
				WHERE codigo = '$usu_codigo'";

			$confirma = $mysqli->query($sql_code) or die($mysqli->error);

			if($confirma){

				unset(
				
				
				
				$_SESSION[hrcp1],
				    $_SESSION[hrcp2],
				    $_SESSION[hrcp3],
				    $_SESSION[hrcp4],
				    
				$_SESSION[cpessoal1],
				$_SESSION[cpessoal2],
				$_SESSION[cpessoal3],
				$_SESSION[cpessoal4],
				
				  $_SESSION[hrrp1],
				    $_SESSION[hrrp2],
				    $_SESSION[hrrp3],
				    $_SESSION[hrrp4],
				    
				    
				    $_SESSION[rp1],
				    $_SESSION[rp2],
				    $_SESSION[rp3],
				    $_SESSION[rp4],
				    
				    
				$_SESSION[cpessoal],    
				$_SESSION[crpessoal1],
				$_SESSION[crpessoal2],
				$_SESSION[crpessoal3],
				$_SESSION[crpessoal4],
				
				$_SESSION[cag],    
				$_SESSION[cponto],    
				$_SESSION[crh],    
			   
				
				
				$_SESSION[hrcf1],
				$_SESSION[hrcf2],
			    $_SESSION[hrcf3],
				$_SESSION[hrcf4],
				    
				$_SESSION[cfiscal1],
				$_SESSION[cfiscal2],
				$_SESSION[cfiscal3],
				$_SESSION[cfiscal4],
				
				  $_SESSION[hrrf1],
				    $_SESSION[hrrf2],
				    $_SESSION[hrrf3],
				    $_SESSION[hrrf4],
				    
				    
				    $_SESSION[rf1],
				    $_SESSION[rf2],
				    $_SESSION[rf3],
				    $_SESSION[rf4],
				    
				    
				$_SESSION[cfiscal],    
				$_SESSION[crfiscal1],
				$_SESSION[crfiscal2],
				$_SESSION[crfiscal3],
				$_SESSION[crfiscal4],
				
				
				
				
				$_SESSION[hrcc1],
				$_SESSION[hrcc2],
			    $_SESSION[hrcc3],
				$_SESSION[hrcc4],
				    
				$_SESSION[ccontabil1],
				$_SESSION[ccontabil2],

				
				  $_SESSION[hrrc1],
				    $_SESSION[hrrc2],

				    
				    $_SESSION[rc1],
				    $_SESSION[rc2],

				    
				    
				$_SESSION[ccontabil],    
				$_SESSION[crcontabil1],
				$_SESSION[crcontabil2],
			
			
			
			
			
			
			
			
			
				$_SESSION[hrrcore] ,
				$_SESSION[hrrconecta] ,
			     $_SESSION[hrrdoc] ,
			    $_SESSION[hrrgestao] ,
			    $_SESSION[hrrpatrio] ,
			   
			   $_SESSION[rcore] ,
			    $_SESSION[rconecta] ,
			$_SESSION[rdoc] ,
			 $_SESSION[rgestao] ,
			 $_SESSION[rpatrio] ,
				
				
			
				$_SESSION[crcore] ,
				 $_SESSION[crconecta] ,
				$_SESSION[crdoc] ,
				 $_SESSION[crgestao] ,
				$_SESSION[crpatrio] ,
				
				
				
				$_SESSION[hrccore] ,
			 $_SESSION[hrcconecta] ,
				 $_SESSION[hrcdoc] ,
				 $_SESSION[hrcgestao] ,
				 $_SESSION[hrcpatrio] ,
				
				
				
				
				$_SESSION[ccore] ,
				$_SESSION[cconecta] ,
				$_SESSION[cdoc] ,
				 $_SESSION[cgestao] ,
				$_SESSION[cpatrio] ,
				
				
				
				$_SESSION[contcore] ,
				$_SESSION[contconecta] ,
				$_SESSION[contdoc] ,
				 $_SESSION[contgestao] ,
				$_SESSION[contpatrio] ,

				
				
				
				
				    $_SESSION[hrcrh1],
				    $_SESSION[hrcrh2],
				    $_SESSION[hrcrh3],
				    $_SESSION[hrcrh4],
				    $_SESSION[hrcrh5],
				    $_SESSION[hrcrh6],
				    $_SESSION[hrcrh7],
				    $_SESSION[hrcrh8],
				    
				$_SESSION[crh1],
				$_SESSION[crh2],
				$_SESSION[crh3],
				$_SESSION[crh4],
				$_SESSION[crh5],
				$_SESSION[crh6],
				$_SESSION[crh7],
				$_SESSION[crh8],
				
				  $_SESSION[hrrrh1],
				    $_SESSION[hrrrh2],
				    $_SESSION[hrrrh3],
				    $_SESSION[hrrrh4],
				     $_SESSION[hrrrh5],
				    $_SESSION[hrrrh6],
				    $_SESSION[hrrrh7],
				    $_SESSION[hrrrh8],
				    
				    $_SESSION[rrh1],
				    $_SESSION[rrh2],
				    $_SESSION[rrh3],
				    $_SESSION[rrh4],
				    $_SESSION[rrh5],
				    $_SESSION[rrh6],
				    $_SESSION[rrh7],
				    $_SESSION[rrh8],
			
				$_SESSION[crrh1],
				$_SESSION[crrh2],
				$_SESSION[crrh3],
				$_SESSION[crrh4],
				$_SESSION[crrh5],
				$_SESSION[crrh6],
				$_SESSION[crrh7],
				$_SESSION[crrh8],
				
				
				
				
				
				     $_SESSION[hrcag1],
				    $_SESSION[hrcag2],
				    $_SESSION[hrcag3],
				    $_SESSION[hrcag4],
				    
				$_SESSION[cag1],
				$_SESSION[cag2],
				$_SESSION[cag3],
				$_SESSION[cag4],
				
				  $_SESSION[hrrag1],
				    $_SESSION[hrrag2],
				    $_SESSION[hrrag3],
				    $_SESSION[hrrag4],
				    
				    $_SESSION[rag1],
				    $_SESSION[rag2],
				    $_SESSION[rag3],
				    $_SESSION[rag4],
			
				$_SESSION[crag1],
				$_SESSION[crag2],
				$_SESSION[crag3],
				$_SESSION[crag4],
				
				
				
				
				 
				    $_SESSION[hrcpt1],
				    $_SESSION[hrcpt2],
				    $_SESSION[hrcpt3],
				    
				$_SESSION[cponto1],
				$_SESSION[cponto2],
				$_SESSION[cponto3],
				
				  $_SESSION[hrrpt1],
				    $_SESSION[hrrpt2],
				    $_SESSION[hrrpt3],
				    
				    $_SESSION[rpt1],
				    $_SESSION[rpt2],
				    $_SESSION[rpt3],
			
				$_SESSION[crponto1],
				$_SESSION[crponto2],
				$_SESSION[crponto3],
			
				$_SESSION[adicionaldata1],
                $_SESSION[adicionaldata2],
                $_SESSION[adicionaldata3],
                $_SESSION[adicionaldata4],
                $_SESSION[adicionalhoras1],
                $_SESSION[adicionalhoras2],
                $_SESSION[adicionalhoras3],
                $_SESSION[adicionalhoras4],
                $_SESSION[adicionalrealizado1],
                $_SESSION[adicionalrealizado2],
                $_SESSION[adicionalrealizado3],
                $_SESSION[adicionalrealizado4],
				
				   
				   	$_SESSION[nome] 
				
				
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
		

		
		
		$_SESSION[hrcp1]=$linha['hrcp1'];
		$_SESSION[hrcp2]=$linha['hrcp2'];
		$_SESSION[hrcp3]=$linha['hrcp3'];
		$_SESSION[hrcp4]=$linha['hrcp4'];
		
	
		
		    	$_SESSION[cpessoal]=$linha['cpessoal'];
		$_SESSION[cpessoal1]=$linha['cpessoal1'];
		$_SESSION[cpessoal2]=$linha['cpessoal2'];
		$_SESSION[cpessoal3]=$linha['cpessoal3'];
		$_SESSION[cpessoal4]=$linha['cpessoal4'];
		
		
		$_SESSION[hrrp1]=$linha['hrrp1'];
		$_SESSION[hrrp2]=$linha['hrrp2'];
		$_SESSION[hrrp3]=$linha['hrrp3'];
		$_SESSION[hrrp4]=$linha['hrrp4'];
			
		$_SESSION[rp1]=$linha['rp1'];
		$_SESSION[rp2]=$linha['rp2'];
		$_SESSION[rp3]=$linha['rp3'];
		$_SESSION[rp4]=$linha['rp4'];
		
		
		$_SESSION[crpessoal1]=$linha['crpessoal1'];
		$_SESSION[crpessoal2]=$linha['crpessoal2'];
		$_SESSION[crpessoal3]=$linha['crpessoal3'];
		$_SESSION[crpessoal4]=$linha['crpessoal4'];
		
	
		
		
		
		
	    $_SESSION[hrcf1]=$linha['hrcf1'];
		$_SESSION[hrcf2]=$linha['hrcf2'];
		$_SESSION[hrcf3]=$linha['hrcf3'];
		$_SESSION[hrcf4]=$linha['hrcf4'];
		
		    	$_SESSION[cfiscal]=$linha['cfiscal'];
		$_SESSION[cfiscal1]=$linha['cfiscal1'];
		$_SESSION[cfiscal2]=$linha['cfiscal2'];
		$_SESSION[cfiscal3]=$linha['cfiscal3'];
		$_SESSION[cfiscal4]=$linha['cfiscal4'];
		
		
		$_SESSION[hrrf1]=$linha['hrrf1'];
		$_SESSION[hrrf2]=$linha['hrrf2'];
		$_SESSION[hrrf3]=$linha['hrrf3'];
		$_SESSION[hrrf4]=$linha['hrrf4'];
			
		$_SESSION[rf1]=$linha['rf1'];
		$_SESSION[rf2]=$linha['rf2'];
		$_SESSION[rf3]=$linha['rf3'];
		$_SESSION[rf4]=$linha['rf4'];
		
		
		$_SESSION[crfiscal1]=$linha['crfiscal1'];
		$_SESSION[crfiscal2]=$linha['crfiscal2'];
		$_SESSION[crfiscal3]=$linha['crfiscal3'];
		$_SESSION[crfiscal4]=$linha['crfiscal4'];
		
		
		
		
		 $_SESSION[cag]=$linha['cag'];
		  $_SESSION[cponto]=$linha['cponto'];
		   $_SESSION[crh]=$linha['crh'];
		
		
			    $_SESSION[hrcc1]=$linha['hrcc1'];
		$_SESSION[hrcc2]=$linha['hrcc2'];
		$_SESSION[hrcc3]=$linha['hrcc3'];
		$_SESSION[hrcc4]=$linha['hrcc4'];
		
		    	$_SESSION[ccontabil]=$linha['ccontabil'];
		$_SESSION[ccontabil1]=$linha['ccontabil1'];
		$_SESSION[ccontabil2]=$linha['ccontabil2'];
		$_SESSION[ccontabil3]=$linha['ccontabil3'];
		$_SESSION[ccontabil4]=$linha['ccontabil4'];
		
		
		$_SESSION[hrrc1]=$linha['hrrc1'];
		$_SESSION[hrrc2]=$linha['hrrc2'];
		$_SESSION[hrrc3]=$linha['hrrc3'];
		$_SESSION[hrrc4]=$linha['hrrc4'];
			
		$_SESSION[rc1]=$linha['rc1'];
		$_SESSION[rc2]=$linha['rc2'];
		$_SESSION[rc3]=$linha['rc3'];
		$_SESSION[rc4]=$linha['rc4'];
		
		
		$_SESSION[crcontabil1]=$linha['crcontabil1'];
		$_SESSION[crcontabil2]=$linha['crcontabil2'];
		$_SESSION[crcontabil3]=$linha['crcontabil3'];
		$_SESSION[crcontabil4]=$linha['crcontabil4'];
		
		
            $_SESSION[nome]=$linha['nome'];
            
            
                $_SESSION[contcore] =$linha['contcore'];
				$_SESSION[contconecta] =$linha['contconecta'];
				$_SESSION[contdoc] =$linha['contdoc'];
				 $_SESSION[contgestao] =$linha['contgestao'];
				$_SESSION[contpatrio] =$linha['contpatrio'];
				
				
				
				
				
				
				$_SESSION[hrrcore] =$linha['hrrcore'];
				$_SESSION[hrrconecta] =$linha['hrrconecta'];
			     $_SESSION[hrrdoc] =$linha['hrrdoc'];
			    $_SESSION[hrrgestao] =$linha['hrrgestao'];
			    $_SESSION[hrrpatrio] =$linha['hrrpatrio'];
			   
			   $_SESSION[rcore] =$linha['rcore'];
			    $_SESSION[rconecta] =$linha['rconecta'];
			$_SESSION[rdoc] =$linha['rdoc'];
			 $_SESSION[rgestao] =$linha['rgestao'];
			 $_SESSION[rpatrio] =$linha['rpatrio'];
				
				
			
				$_SESSION[crcore] =$linha['crcore'];
				 $_SESSION[crconecta] =$linha['crconecta'];
				$_SESSION[crdoc] =$linha['crdoc'];
				 $_SESSION[crgestao] =$linha['crgestao'];
				$_SESSION[crpatrio] =$linha['crpatrio'];
				
				
				
				$_SESSION[hrccore] =$linha['hrccore'];
			 $_SESSION[hrcconecta] =$linha['hrcconecta'];
				 $_SESSION[hrcdoc] =$linha['hrcdoc'];
				 $_SESSION[hrcgestao] =$linha['hrcgestao'];
				 $_SESSION[hrcpatrio] =$linha['hrcpatrio'];	
				
				
				$_SESSION[ccore] =$linha['ccore'];
				$_SESSION[cconecta] =$linha['cconecta'];
				$_SESSION[cdoc] =$linha['cdoc'];
				 $_SESSION[cgestao] =$linha['cgestao'];
				$_SESSION[cpatrio] =$linha['cpatrio'];
				
                $_SESSION[cag] =$linha['cag'];
				$_SESSION[crh] =$linha['crh'];
				$_SESSION[cponto] =$linha['cponto'];
				
				
				
				
				
		$_SESSION[hrcag1]=$linha['hrcag1'];
		$_SESSION[hrcag2]=$linha['hrcag2'];
		$_SESSION[hrcag3]=$linha['hrcag3'];
		$_SESSION[hrcag4]=$linha['hrcag4'];
		
		 
		$_SESSION[cag1]=$linha['cag1'];
		$_SESSION[cag2]=$linha['cag2'];
		$_SESSION[cag3]=$linha['cag3'];
		$_SESSION[cag4]=$linha['cag4'];
		
		
		$_SESSION[hrrag1]=$linha['hrrag1'];
		$_SESSION[hrrag2]=$linha['hrrag2'];
		$_SESSION[hrrag3]=$linha['hrrag3'];
		$_SESSION[hrrag4]=$linha['hrrag4'];
			
		$_SESSION[rag1]=$linha['rag1'];
		$_SESSION[rag2]=$linha['rag2'];
		$_SESSION[rag3]=$linha['rag3'];
		$_SESSION[rag4]=$linha['rag4'];
		
		
		$_SESSION[crag1]=$linha['crag1'];
		$_SESSION[crag2]=$linha['crag2'];
		$_SESSION[crag3]=$linha['crag3'];
		$_SESSION[crag4]=$linha['crag4'];
		
		
		
		
		
	
		
		
		$_SESSION[hrcpt1]=$linha['hrcpt1'];
		$_SESSION[hrcpt2]=$linha['hrcpt2'];
		$_SESSION[hrcpt3]=$linha['hrcpt3'];
		
		
		 
		$_SESSION[cponto1]=$linha['cponto1'];
		$_SESSION[cponto2]=$linha['cponto2'];
		$_SESSION[cponto3]=$linha['cponto3'];
	
		
		
		$_SESSION[hrrpt1]=$linha['hrrpt1'];
		$_SESSION[hrrpt2]=$linha['hrrpt2'];
		$_SESSION[hrrpt3]=$linha['hrrpt3'];

			
		$_SESSION[rpt1]=$linha['rpt1'];
		$_SESSION[rpt2]=$linha['rpt2'];
		$_SESSION[rpt3]=$linha['rpt3'];

		
		$_SESSION[crponto1]=$linha['crponto1'];
		$_SESSION[crponto2]=$linha['crponto2'];
		$_SESSION[crponto3]=$linha['crponto3'];
		
		
		
		
		
	
		
		
		
		
		
		$_SESSION[hrcrh1]=$linha['hrcrh1'];
		$_SESSION[hrcrh2]=$linha['hrcrh2'];
		$_SESSION[hrcrh3]=$linha['hrcrh3'];
		$_SESSION[hrcrh4]=$linha['hrcrh4'];
		$_SESSION[hrcrh5]=$linha['hrcrh5'];
		$_SESSION[hrcrh6]=$linha['hrcrh6'];
		$_SESSION[hrcrh7]=$linha['hrcrh7'];
		$_SESSION[hrcrh8]=$linha['hrcrh8'];
		
		
		 
		$_SESSION[crh1]=$linha['crh1'];
		$_SESSION[crh2]=$linha['crh2'];
		$_SESSION[crh3]=$linha['crh3'];
		$_SESSION[crh4]=$linha['crh4'];
		$_SESSION[crh5]=$linha['crh5'];
		$_SESSION[crh6]=$linha['crh6'];
		$_SESSION[crh7]=$linha['crh7'];
		$_SESSION[crh8]=$linha['crh8'];
		
	
		
		
		$_SESSION[hrrrh1]=$linha['hrrrh1'];
		$_SESSION[hrrrh2]=$linha['hrrrh2'];
		$_SESSION[hrrrh3]=$linha['hrrrh3'];
		$_SESSION[hrrrh4]=$linha['hrrrh4'];
		$_SESSION[hrrrh5]=$linha['hrrrh5'];
		$_SESSION[hrrrh6]=$linha['hrrrh6'];
		$_SESSION[hrrrh7]=$linha['hrrrh7'];
		$_SESSION[hrrrh8]=$linha['hrrrh8'];
	

			
		$_SESSION[rrh1]=$linha['rrh1'];
		$_SESSION[rrh2]=$linha['rrh2'];
		$_SESSION[rrh3]=$linha['rrh3'];
		$_SESSION[rrh4]=$linha['rrh4'];
		$_SESSION[rrh5]=$linha['rrh5'];
		$_SESSION[rrh6]=$linha['rrh6'];
		$_SESSION[rrh7]=$linha['rrh7'];
		$_SESSION[rrh8]=$linha['rrh8'];


		
		$_SESSION[crrh1]=$linha['crrh1'];
		$_SESSION[crrh2]=$linha['crrh2'];
		$_SESSION[crrh3]=$linha['crrh3'];
		$_SESSION[crrh4]=$linha['crrh4'];
		$_SESSION[crrh5]=$linha['crrh5'];
		$_SESSION[crrh6]=$linha['crrh6'];
		$_SESSION[crrh7]=$linha['crrh7'];
		$_SESSION[crrh8]=$linha['crrh8'];

            	$_SESSION[adicionaldata1]=$linha['adicionaldata1'];
                $_SESSION[adicionaldata2]=$linha['adicionaldata2'];
                $_SESSION[adicionaldata3]=$linha['adicionaldata3'];
                $_SESSION[adicionaldata4]=$linha['adicionaldata4'];
                $_SESSION[adicionalhoras1]=$linha['adicionalhoras1'];
                $_SESSION[adicionalhoras2]=$linha['adicionalhoras2'];
                $_SESSION[adicionalhoras3]=$linha['adicionalhoras3'];
                $_SESSION[adicionalhoras4]=$linha['adicionalhoras4'];
                $_SESSION[adicionalrealizado1]=$linha['adicionalrealizado1'];
                $_SESSION[adicionalrealizado2]=$linha['adicionalrealizado2'];
                $_SESSION[adicionalrealizado3]=$linha['adicionalrealizado3'];
                $_SESSION[adicionalrealizado4]=$linha['adicionalrealizado4'];
	
				$_SESSION[adicionaldata1]=$linha['adicionaldata1'];
                $_SESSION[adicionaldata2]=$linha['adicionaldata2'];
                $_SESSION[adicionaldata3]=$linha['adicionaldata3'];
                $_SESSION[adicionaldata4]=$linha['adicionaldata4'];
                $_SESSION[adicionalhoras1]=$linha['adicionalhoras1'];
                $_SESSION[adicionalhoras2]=$linha['adicionalhoras2'];
                $_SESSION[adicionalhoras3]=$linha['adicionalhoras3'];
                $_SESSION[adicionalhoras4]=$linha['adicionalhoras4'];
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
      <a class="nav-link"  href="index.php?p=editar&usuario=<?php echo $linha['codigo']; ?>"><font color="#585858">Editar</font></a>
    </li>
  <?php if ($_SESSION[cpessoal]==1) {  ?>
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home"><font color="#585858">Pessoal</font></a>
    </li>
  <?php  } if ($_SESSION[cfiscal]==1){  ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1"><font color="#585858">Fiscal</font></a>
    </li>
    
     <?php  } if ($_SESSION[ccontabil]==1){  ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2"><font color="#585858">Contábil</font></a>
    </li>
    
    <?php  } if ($_SESSION[contconecta]==1 || $_SESSION[contdoc]==1 || $_SESSION[contpatrio]==1 || $_SESSION[contgestao]==1 || $_SESSION[contcore]==1 ) { ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3"><font color="#585858">Complementares</font></a>
    </li>
    
     <?php  } if ($_SESSION[cag]==1){  ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4"><font color="#585858">AG</font></a>
    </li>
    
    
    <?php  } if ($_SESSION[cponto]==1){  ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu5"><font color="#585858">Ponto</font></a>
    </li>
    
    
    
     <?php  } if ($_SESSION[crh]==1){  ?>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu6"><font color="#585858">RH</font></a>
    </li>
    
    
    
    <?php  } ?>
    
    
    
    
    
  </ul>
  
  </div>
     <form action="index.php?p=cronograma&usuario=<?php echo $usu_codigo; ?>" method="POST">
     
      <div class="tab-content">
      <?php if ($_SESSION[cpessoal]==1) {  ?>
    <div id="home" class="container tab-pane active"><br>
    <div class="container2">
      
     
      		<center><h3>Previsto</h3></center>
      		</br>
      		</br>
      		
      		
      		<center><label for="cpessoal1"><b>Contato 1  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cpessoal1" value="<?php echo $_SESSION[cpessoal1]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcp1"  value="<?php echo $_SESSION[hrcp1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
      		
      		<center><label for="cpessoal1"><b>Contato 2  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cpessoal2" value="<?php echo $_SESSION[cpessoal2]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcp2"  value="<?php echo $_SESSION[hrcp2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
      		<center><label for="cpessoal1"><b>Contato 3  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cpessoal3" value="<?php echo $_SESSION[cpessoal3]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcp3"  value="<?php echo $_SESSION[hrcp3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
      		
      		
      		
      		<center><label for="cpessoal1"><b>Contato 4  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cpessoal4" value="<?php echo $_SESSION[cpessoal4]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcp4"  value="<?php echo $_SESSION[hrcp4]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
       			<hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>		 
    </br>
     		<center><h3>Realizado</h3></center>
     
     </br>
     <center><label for="cpessoal1"><b>Contato 1  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crpessoal1" value="<?php echo $_SESSION[crpessoal1]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrp1"  value="<?php echo $_SESSION[hrrp1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rp1"  value="<?php echo $_SESSION[rp1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		
		
		
	<center><label for="cpessoal1"><b>Contato 2  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crpessoal2" value="<?php echo $_SESSION[crpessoal2]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrp2"  value="<?php echo $_SESSION[hrrp2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rp2"  value="<?php echo $_SESSION[rp2]; ?>"  required id="example-time-input">
 		 </div>
		</div>	
		
		
     
	
	
<center><label for="cpessoal1"><b>Contato 3  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crpessoal3" value="<?php echo $_SESSION[crpessoal3]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrp3"  value="<?php echo $_SESSION[hrrp3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rp3"  value="<?php echo $_SESSION[rp3]; ?>"  required id="example-time-input">
 		 </div>
		</div>	




<center><label for="cpessoal1"><b>Contato 4  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crpessoal4" value="<?php echo $_SESSION[crpessoal4]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrp4"  value="<?php echo $_SESSION[hrrp4]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rp4"  value="<?php echo $_SESSION[rp4]; ?>"  required id="example-time-input">
 		 </div>
		</div>	

     
     
     
     
     
     
     
    </div>
    </br>
    
    
    
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>
    </div>
    
    
    
    <?php  } if ($_SESSION[cfiscal]==1){  ?>
     <div id="menu1" class="container tab-pane fade"><br>
    <div class="container2">
    
   <center><h3>Previsto</h3></center>
      		</br>
      		</br>
      		
      		
      		<center><label for="cpessoal1"><b>Contato 1  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cfiscal1" value="<?php echo $_SESSION[cfiscal1]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcf1"  value="<?php echo $_SESSION[hrcf1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
      		
      		<center><label for="cpessoal1"><b>Contato 2  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cfiscal2" value="<?php echo $_SESSION[cfiscal2]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcf2"  value="<?php echo $_SESSION[hrcf2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
      		<center><label for="cpessoal1"><b>Contato 3  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cfiscal3" value="<?php echo $_SESSION[cfiscal3]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcf3"  value="<?php echo $_SESSION[hrcf3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
      		
      		
      		
      		<center><label for="cpessoal1"><b>Contato 4  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cfiscal4" value="<?php echo $_SESSION[cfiscal4]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcf4"  value="<?php echo $_SESSION[hrcf4]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
       			<hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>		 
    </br>
     		<center><h3>Realizado</h3></center>
     
     </br>
     <center><label for="cpessoal1"><b>Contato 1  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crfiscal1" value="<?php echo $_SESSION[crfiscal1]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrf1"  value="<?php echo $_SESSION[hrrf1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rf1"  value="<?php echo $_SESSION[rf1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		
		
		
	<center><label for="cpessoal1"><b>Contato 2  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crfiscal2" value="<?php echo $_SESSION[crfiscal2]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrf2"  value="<?php echo $_SESSION[hrrf2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rf2"  value="<?php echo $_SESSION[rf2]; ?>"  required id="example-time-input">
 		 </div>
		</div>	
		
		
     
	
	
<center><label for="cpessoal1"><b>Contato 3  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crfiscal3" value="<?php echo $_SESSION[crfiscal3]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrf3"  value="<?php echo $_SESSION[hrrf3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rf3"  value="<?php echo $_SESSION[rf3]; ?>"  required id="example-time-input">
 		 </div>
		</div>	




<center><label for="cpessoal1"><b>Contato 4  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crfiscal4" value="<?php echo $_SESSION[crfiscal4]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrf4"  value="<?php echo $_SESSION[hrrf4]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rf4"  value="<?php echo $_SESSION[rf4]; ?>"  required id="example-time-input">
 		 </div>
		</div>	

     
        
  		  
         
  		
  		
  		
  		
  		</div>
    </br>
    
    
    
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>
    </div>
    
    
    <?php  } if ($_SESSION[ccontabil]==1) { ?>
    <div id="menu2" class="container tab-pane fade"><br>
    <div class="container2">
    
    		<center><h3>Previsto</h3></center>
      		</br>
      		</br>
      		
      		
      		<center><label for="cpessoal1"><b>Contato 1  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="ccontabil1" value="<?php echo $_SESSION[ccontabil1]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcc1"  value="<?php echo $_SESSION[hrcc1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
      		
      		<center><label for="cpessoal1"><b>Contato 2  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="ccontabil2" value="<?php echo $_SESSION[ccontabil2]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcc2"  value="<?php echo $_SESSION[hrcc2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
      		
      		
       			<hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>		 
    </br>
     		<center><h3>Realizado</h3></center>
     
     </br>
     <center><label for="cpessoal1"><b>Contato 1  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crcontabil1" value="<?php echo $_SESSION[crcontabil1]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrc1"  value="<?php echo $_SESSION[hrrc1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rc1"  value="<?php echo $_SESSION[rc1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		
		
		
	<center><label for="cpessoal1"><b>Contato 2  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crcontabil2" value="<?php echo $_SESSION[crcontabil2]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrc2"  value="<?php echo $_SESSION[hrrc2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rc2"  value="<?php echo $_SESSION[rc2]; ?>"  required id="example-time-input">
 		 </div>
		</div>	
		

    
    </div>
    </br>
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>
 </div>   
 
 
 
 
 
 <?php  } if ($_SESSION[contconecta]==1 || $_SESSION[contdoc]==1 || $_SESSION[contpatrio]==1 || $_SESSION[contgestao]==1 || $_SESSION[contcore]==1 ) { ?>
 <div id="menu3" class="container tab-pane fade"><br>
    <div class="container2">
    
    		<center><h3>Previsto</h3></center>
      		</br>
      		</br>
      		
      		
      		<center><label for="cpessoal1"><b>Conecta </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cconecta" value="<?php echo $_SESSION[cconecta]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcconecta"  value="<?php echo $_SESSION[hrcconecta]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
      		
      		<center><label for="cpessoal1"><b>Doc</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cdoc" value="<?php echo $_SESSION[cdoc]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcdoc"  value="<?php echo $_SESSION[hrcdoc]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Gestão</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cgestao" value="<?php echo $_SESSION[cgestao]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcgestao"  value="<?php echo $_SESSION[hrcgestao]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Pátrio</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cpatrio" value="<?php echo $_SESSION[cpatrio]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcpatrio"  value="<?php echo $_SESSION[hrcpatrio]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		<center><label for="cpessoal1"><b>Core</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="ccore" value="<?php echo $_SESSION[ccore]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrccore"  value="<?php echo $_SESSION[hrccore]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
      		
      		
       			<hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>		 
    </br>
     		<center><h3>Realizado</h3></center>
     
     </br>
     <center><label for="cpessoal1"><b>Conecta  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crconecta" value="<?php echo $_SESSION[crconecta]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrconecta"  value="<?php echo $_SESSION[hrrconecta]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rconecta"  value="<?php echo $_SESSION[rconecta]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		<center><label for="cpessoal1"><b>Doc</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crdoc" value="<?php echo $_SESSION[crdoc]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrdoc"  value="<?php echo $_SESSION[hrrdoc]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rdoc"  value="<?php echo $_SESSION[rdoc]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Gestão  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crgestao" value="<?php echo $_SESSION[crgestao]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrgestao"  value="<?php echo $_SESSION[hrrgestao]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rgestao"  value="<?php echo $_SESSION[rgestao]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Pátrio  </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crpatrio" value="<?php echo $_SESSION[crpatrio]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrpatrio"  value="<?php echo $_SESSION[hrrpatrio]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rpatrio"  value="<?php echo $_SESSION[rpatrio]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		<center><label for="cpessoal1"><b>Core </b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crcore" value="<?php echo $_SESSION[crcore]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrcore"  value="<?php echo $_SESSION[hrrcore]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rcore"  value="<?php echo $_SESSION[rcore]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
	
    
    </div>
    </br>
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>     
 </div>   
 
<?php  } ?>








<?php  if ($_SESSION[cag]==1) { ?>
 <div id="menu4" class="container tab-pane fade"><br>
    <div class="container2">
    
    		<center><h3>Previsto</h3></center>
      		</br>
      		</br>
      		
      		
      		<center><label for="cpessoal1"><b>Contato 1</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cag1" value="<?php echo $_SESSION[cag1]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcag1"  value="<?php echo $_SESSION[hrcag1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
      		
      		<center><label for="cpessoal1"><b>Contato  2</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cag2" value="<?php echo $_SESSION[cag2]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcag2"  value="<?php echo $_SESSION[hrcag2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Contato 3</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cag3" value="<?php echo $_SESSION[cag3]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcag3"  value="<?php echo $_SESSION[hrcag3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		
		<center><label for="cpessoal1"><b>Contato 4</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cag4" value="<?php echo $_SESSION[cag4]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcag4"  value="<?php echo $_SESSION[hrcag4]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
      		
      		
       			<hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>		 
    </br>
     		<center><h3>Realizado</h3></center>
     
     </br>
     <center><label for="cpessoal1"><b>Contato  1</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crag1" value="<?php echo $_SESSION[crag1]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrag1"  value="<?php echo $_SESSION[hrrag1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rag1"  value="<?php echo $_SESSION[rag1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		<center><label for="cpessoal1"><b>Contato  2</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crag2" value="<?php echo $_SESSION[crag2]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrag2"  value="<?php echo $_SESSION[hrrag2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rag2"  value="<?php echo $_SESSION[rag2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Contato  3</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crag3" value="<?php echo $_SESSION[crag3]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrag3"  value="<?php echo $_SESSION[hrrag3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rag3"  value="<?php echo $_SESSION[rag3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Contato  4</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crag4" value="<?php echo $_SESSION[crag4]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrag4"  value="<?php echo $_SESSION[hrrag4]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rag4"  value="<?php echo $_SESSION[rag4]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		
	
    
    </div>
    </br>
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>     
 </div>   
 
<?php  } ?>




<?php  if ($_SESSION[cponto]==1) { ?>
 <div id="menu5" class="container tab-pane fade"><br>
    <div class="container2">
    
    		<center><h3>Previsto</h3></center>
      		</br>
      		</br>
      		
      		
      		<center><label for="cpessoal1"><b>Contato 1</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cponto1" value="<?php echo $_SESSION[cponto1]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcpt1"  value="<?php echo $_SESSION[hrcpt1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
      		
      		<center><label for="cpessoal1"><b>Contato  2</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cponto2" value="<?php echo $_SESSION[cponto2]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcpt2"  value="<?php echo $_SESSION[hrcpt2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Contato 3</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="cponto3" value="<?php echo $_SESSION[cponto3]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcpt3"  value="<?php echo $_SESSION[hrcpt3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		
		
		
		
		
      		
      		
       			<hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>		 
    </br>
     		<center><h3>Realizado</h3></center>
     
     </br>
     <center><label for="cpessoal1"><b>Contato  1</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crponto1" value="<?php echo $_SESSION[crponto1]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrpt1"  value="<?php echo $_SESSION[hrrpt1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rpt1"  value="<?php echo $_SESSION[rpt1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		<center><label for="cpessoal1"><b>Contato  2</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crponto2" value="<?php echo $_SESSION[crponto2]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrpt2"  value="<?php echo $_SESSION[hrrpt2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rpt2"  value="<?php echo $_SESSION[rpt2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Contato  3</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crponto3" value="<?php echo $_SESSION[crponto3]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrpt3"  value="<?php echo $_SESSION[hrrpt3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rpt3"  value="<?php echo $_SESSION[rpt3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
				
		
		
		
	
    
    </div>
    </br>
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>     
 </div>   
 
<?php  } ?>





<?php  if ($_SESSION[crh]==1) { ?>
 <div id="menu6" class="container tab-pane fade"><br>
    <div class="container2">
    
    		<center><h3>Previsto</h3></center>
      		</br>
      		</br>
      		
      		
      		<center><label for="cpessoal1"><b>Contato 1</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crh1" value="<?php echo $_SESSION[crh1]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcrh1"  value="<?php echo $_SESSION[hrcrh1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
      		
      		
      		
      		<center><label for="cpessoal1"><b>Contato  2</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crh2" value="<?php echo $_SESSION[crh2]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcrh2"  value="<?php echo $_SESSION[hrcrh2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Contato 3</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data Prevista</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crh3" value="<?php echo $_SESSION[crh3]; ?>" required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario Previsto</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrcrh3"  value="<?php echo $_SESSION[hrcrh3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		
		
		
		
		
      		
      		
       			<hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>		 
    </br>
     		<center><h3>Realizado</h3></center>
     
     </br>
     <center><label for="cpessoal1"><b>Contato  1</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crrh1" value="<?php echo $_SESSION[crrh1]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrrh1"  value="<?php echo $_SESSION[hrrrh1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rrh1"  value="<?php echo $_SESSION[rrh1]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		
		<center><label for="cpessoal1"><b>Contato  2</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crrh2" value="<?php echo $_SESSION[crrh2]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrrh2"  value="<?php echo $_SESSION[hrrrh2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rrh2"  value="<?php echo $_SESSION[rrh2]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<center><label for="cpessoal1"><b>Contato  3</b></label> </center>
      		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Data realizada</label>
 		 <div class="col-10">
   		 <input class="form-control" name="crrh3" value="<?php echo $_SESSION[crrh3]; ?>" required  required type="date" id="example-date-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Horario realizado</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="hrrrh3"  value="<?php echo $_SESSION[hrrrh3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
		<div class="form-group row">
 		 <label for="example-date-input" class="col-2 col-form-label">Duração</label>
 		 <div class="col-10">
   		<input class="form-control" type="time" name="rrh3"  value="<?php echo $_SESSION[rrh3]; ?>"  required id="example-time-input">
 		 </div>
		</div>
		
		
				
		
		
		
	
    
    </div>
    </br>
     <center><input value="Salvar" class="btn btn-secondary" name="confirmar" type="submit"></center>     
 </div>   
 
<?php  } ?>


    
      </form>
    
         
     
    
<?php } ?>