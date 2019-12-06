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
</style><style>
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


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="Imgs/favicon.ico" />

<div class="header">
  <img alt="" src="/Imgs/banerf.png" class="responsive"  />
  
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
        <li><a href="index.php?">Home</a></li>
        <li><a href="inicial.php">Clientes</a></li>
        <li><a href="index.php?p=cadastrar">Novo Cadastro</a></li>
    
        <li><a href="matriz.php">Matriz</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  </div>

<title>CCS - Cronograma </title>

 <?php

	include("classe/conexao.php");
	

	if(!isset($_GET['usuario']))
		echo "<script> alert('Codigo invalido.'); location.href='inicial.php'; </script>";
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
			        
			    hrcp1 = '$_SESSION[hrcp1]',
				hrcp2 = '$_SESSION[hrcp2]',
				hrcp3 = '$_SESSION[hrcp3]',
				hrcp4 = '$_SESSION[hrcp4]',
				
				
				enviacronograma= '$_SESSION[enviacronograma]',
			
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
				    
				    $_SESSION[enviacronograma],
				    
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
		
		$_SESSION[enviacronograma]=$linha['enviacronograma'];
		
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


<style>



.active2:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}



/* Formulario */
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
  width: 10%;
  border-radius: 9px;
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


.btn2 {
  background-color: #A4A4A4;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 20%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn2:hover {
  background-color: #2196F3;
}

.btn3 {
  background-color: #A4A4A4;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn3:hover {
  background-color: #2196F3;
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



<?php 
if(count($erro) > 0){ 
	echo "<div class='erro'>"; 
	foreach($erro as $valor) 
		echo "$valor <br>"; 

	echo "</div>"; 
}
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  

    


 <center>  <h1> Cronograma de implantação  -   <?php echo $_SESSION[nome]; ?></h1></center>
 
 

 
 <form action="cronograma.php?p=cronograma&usuario=<?php echo $usu_codigo; ?>" method="POST">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input value="Salvar" class="btn" name="confirmar" type="submit">
 
 


          <?php           
          
          if ($_SESSION[cpessoal]==1 ) {?>
          


<div class="row">
  <div class="col-75">
    <div class="container">
      
      <h1> Pessoal </h1>
        <div class="row">
          <div class="col-50">
              <center>
            <h3>Cronograma Previsto</h3>
            
            
          <label for="cpessoal1">Contato Pessoal  1   </label>
	<input name="cpessoal1" value="<?php echo $_SESSION[cpessoal1]; ?>" required  type="date">
	<input name="hrcp1"  value="<?php echo $_SESSION[hrcp1]; ?>"  required   type="time"> 

	<p class=espaco></p>
    
    <label for="cpessoal2">Contato Pessoal 2</label>
	<input name="cpessoal2" value="<?php echo $_SESSION[cpessoal2]; ?>"  required type="date">
	<input name="hrcp2"   value="<?php echo $_SESSION[hrcp2]; ?>"  required type="time"> 
	
	<p class=espaco></p>
	
	<label for="cpessoal3">Contato Pessoal 3</label>
	<input name="cpessoal3" value="<?php echo $_SESSION[cpessoal3]; ?>"  required type="date">
	<input name="hrcp3"   value="<?php echo $_SESSION[hrcp3]; ?>"   required type="time"> 

	<p class=espaco></p>
	
	<label for="cpessoal4">Contato Pessoal 4</label>
	<input name="cpessoal4" value="<?php echo $_SESSION[cpessoal4]; ?>" required  type="date">
	<input name="hrcp4"   value="<?php echo $_SESSION[hrcp4]; ?>"   required type="time"> 
	
	<p class=espaco></p>
            
 </br>
 </br>
            <div class="row">
              <div class="col-50">
               
              </div>
              <div class="col-50"> 
               
              </div>
            </div>
          </div>
</center>
















<?php //*Realizado    ?>
          <div class="col-50">
              <p class=espaco></p>
          <h3>Realizado  </h3>
             
            
            
            
	<label for="crpessoal1">Contato 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas   </label>
	<input name="crpessoal1" value="<?php echo $_SESSION[crpessoal1]; ?>" required  type="date">
	<input name="hrrp1"  value="<?php echo $_SESSION[hrrp1]; ?>"  required   type="time"> 
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rp1"  value="<?php echo $_SESSION[rp1]; ?>"  required   type="time"> 
	


	<p class=espaco></p>
    
    <label for="crpessoal2">Contato 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crpessoal2" value="<?php echo $_SESSION[crpessoal2]; ?>"  required type="date">
	<input name="hrrp2"  value="<?php echo $_SESSION[hrrp2]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rp2"  value="<?php echo $_SESSION[rp2]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
 <label for="crpessoal3">Contato 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crpessoal3" value="<?php echo $_SESSION[crpessoal3]; ?>"  required type="date">
	<input name="hrrp3"  value="<?php echo $_SESSION[hrrp3]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rp3"  value="<?php echo $_SESSION[rp3]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
	 <label for="crpessoal4">Contato 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crpessoal4" value="<?php echo $_SESSION[crpessoal4]; ?>"  required type="date">
	<input name="hrrp4"  value="<?php echo $_SESSION[hrrp4]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rp4"  value="<?php echo $_SESSION[rp4]; ?>"  required   type="time"> 
	<p class=espaco></p>
     
            <div class="row">
              <div class="col-50">
                  
              </div>
              <div class="col-50">
         
         
              </div>
            </div>
            
          </div>
          
        </div>
    </div>
    
   
  </div>
  
  </div>
  
  
  
  </br>
  </br>
  </br>
  
  
   
  
  
  
  <?php } else { ?>
  
  
  <input name="cpessoal1" value="<?php echo $_SESSION[cpessoal1]; ?>" hidden  type="date">
	<input name="hrcp1"  value="<?php echo $_SESSION[hrcp1]; ?>"   hidden  type="time"> 


	<input name="cpessoal2" value="<?php echo $_SESSION[cpessoal2]; ?>" hidden  type="date">
	<input name="hrcp2"   value="<?php echo $_SESSION[hrcp2]; ?>"  hidden type="time"> 
	

	<input name="cpessoal3" value="<?php echo $_SESSION[cpessoal3]; ?>" hidden  type="date">
	<input name="hrcp3"   value="<?php echo $_SESSION[hrcp3]; ?>" hidden   type="time"> 


	<input name="cpessoal4" value="<?php echo $_SESSION[cpessoal4]; ?>" hidden  type="date">
	<input name="hrcp4"   value="<?php echo $_SESSION[hrcp4]; ?>" hidden   type="time"> 
	
	
	
	
	<input name="crpessoal1" value="<?php echo $_SESSION[crpessoal1]; ?>" hidden  type="date">
	<input name="hrrp1"  value="<?php echo $_SESSION[hrrp1]; ?>" hidden    type="time"> 
	
	
<input name="rp1"  value="<?php echo $_SESSION[rp1]; ?>"   hidden  type="time"> 
	


    
	<input name="crpessoal2" value="<?php echo $_SESSION[crpessoal2]; ?>"  hidden type="date">
	<input name="hrrp2"  value="<?php echo $_SESSION[hrrp2]; ?>" hidden    type="time"> 
	
	<input name="rp2"  value="<?php echo $_SESSION[rp2]; ?>" hidden    type="time"> 

	<input name="crpessoal3" value="<?php echo $_SESSION[crpessoal3]; ?>"  hidden type="date">
	<input name="hrrp3"  value="<?php echo $_SESSION[hrrp3]; ?>"  hidden   type="time"> 
	
	<input name="rp3"  value="<?php echo $_SESSION[rp3]; ?>"   hidden  type="time"> 

	
	<input name="crpessoal4" value="<?php echo $_SESSION[crpessoal4]; ?>" hidden  type="date">
	<input name="hrrp4"  value="<?php echo $_SESSION[hrrp4]; ?>"  hidden   type="time"> 
	
<input name="rp4"  value="<?php echo $_SESSION[rp4]; ?>"  hidden   type="time">
  
  

   <?php  } if ($_SESSION[cfiscal]==1 ) {?>
          


<div class="row">
  <div class="col-75">
    <div class="container">
      
      <h1> Fiscal </h1>
        <div class="row">
          <div class="col-50">
              <center>
            <h3>Cronograma Previsto</h3>
            
            
          <label for="cpessoal1">Contato Fiscal  1   </label>
	<input name="cfiscal1" value="<?php echo $_SESSION[cfiscal1]; ?>" required  type="date">
	<input name="hrcf1"  value="<?php echo $_SESSION[hrcf1]; ?>"  required   type="time"> 

	<p class=espaco></p>
    
    <label for="cfiscal2">Contato Fiscal 2</label>
	<input name="cfiscal2" value="<?php echo $_SESSION[cfiscal2]; ?>"  required type="date">
	<input name="hrcf2"   value="<?php echo $_SESSION[hrcf2]; ?>"  required type="time"> 
	
	<p class=espaco></p>
	
	<label for="cfiscal3">Contato Fiscal 3</label>
	<input name="cfiscal3" value="<?php echo $_SESSION[cfiscal3]; ?>"  required type="date">
	<input name="hrcf3"   value="<?php echo $_SESSION[hrcf3]; ?>"   required type="time"> 

	<p class=espaco></p>
	
	<label for="cfiscal4">Contato Fiscal 4</label>
	<input name="cfiscal4" value="<?php echo $_SESSION[cfiscal4]; ?>" required  type="date">
	<input name="hrcf4"   value="<?php echo $_SESSION[hrcf4]; ?>"   required type="time"> 
	
	<p class=espaco></p>
            
 </br>
 </br>
            <div class="row">
              <div class="col-50">
               
              </div>
              <div class="col-50"> 
               
              </div>
            </div>
          </div>
</center>
















<?php //*Realizado    ?>
          <div class="col-50">
              <p class=espaco></p>
          <h3>Realizado  </h3>
             
            
            
            
	<label for="crfiscal1">Contato 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas   </label>
	<input name="crfiscal1" value="<?php echo $_SESSION[crfiscal1]; ?>" required  type="date">
	<input name="hrrf1"  value="<?php echo $_SESSION[hrrf1]; ?>"  required   type="time"> 
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rf1"  value="<?php echo $_SESSION[rf1]; ?>"  required   type="time"> 
	


	<p class=espaco></p>
    
    <label for="crfiscal2">Contato 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crfiscal2" value="<?php echo $_SESSION[crfiscal2]; ?>"  required type="date">
	<input name="hrrf2"  value="<?php echo $_SESSION[hrrf2]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rf2"  value="<?php echo $_SESSION[rf2]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
 <label for="crfiscal3">Contato 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crfiscal3" value="<?php echo $_SESSION[crfiscal3]; ?>"  required type="date">
	<input name="hrrf3"  value="<?php echo $_SESSION[hrrf3]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rf3"  value="<?php echo $_SESSION[rf3]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
	 <label for="crfiscal4">Contato 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crfiscal4" value="<?php echo $_SESSION[crfiscal4]; ?>"  required type="date">
	<input name="hrrf4"  value="<?php echo $_SESSION[hrrf4]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rf4"  value="<?php echo $_SESSION[rf4]; ?>"  required   type="time"> 
	<p class=espaco></p>
     
            <div class="row">
              <div class="col-50">
                  
              </div>
              <div class="col-50">
         
         
              </div>
            </div>
            
          </div>
          
        </div>
    </div>
    
   
  </div>
  
  </div>
  
  
  
  </br>
  </br>
  </br>
  
  
   
  
  
  
  <?php } else { ?>
  
  
  <input name="cfiscal1" value="<?php echo $_SESSION[cfiscal1]; ?>" hidden  type="date">
	<input name="hrcf1"  value="<?php echo $_SESSION[hrcf1]; ?>"   hidden  type="time"> 


	<input name="cfiscal2" value="<?php echo $_SESSION[cfiscal2]; ?>" hidden  type="date">
	<input name="hrcf2"   value="<?php echo $_SESSION[hrcf2]; ?>"  hidden type="time"> 
	

	<input name="cfiscal3" value="<?php echo $_SESSION[cfiscal3]; ?>" hidden  type="date">
	<input name="hrcf3"   value="<?php echo $_SESSION[hrcf3]; ?>" hidden   type="time"> 


	<input name="cfiscal4" value="<?php echo $_SESSION[cfiscal4]; ?>" hidden  type="date">
	<input name="hrcf4"   value="<?php echo $_SESSION[hrcf4]; ?>" hidden   type="time"> 
	
	
	
	
	<input name="crfiscal1" value="<?php echo $_SESSION[crfiscal1]; ?>" hidden  type="date">
	<input name="hrrf1"  value="<?php echo $_SESSION[hrrf1]; ?>" hidden    type="time"> 
	
	
<input name="rf1"  value="<?php echo $_SESSION[rf1]; ?>"   hidden  type="time"> 
	


    
	<input name="crfiscal2" value="<?php echo $_SESSION[crfiscal2]; ?>"  hidden type="date">
	<input name="hrrf2"  value="<?php echo $_SESSION[hrrf2]; ?>" hidden    type="time"> 
	
	<input name="rf2"  value="<?php echo $_SESSION[rf2]; ?>" hidden    type="time"> 

	<input name="crfiscal3" value="<?php echo $_SESSION[crfiscal3]; ?>"  hidden type="date">
	<input name="hrrf3"  value="<?php echo $_SESSION[hrrf3]; ?>"  hidden   type="time"> 
	
	<input name="rf3"  value="<?php echo $_SESSION[rf3]; ?>"   hidden  type="time"> 

	
	<input name="crfiscal4" value="<?php echo $_SESSION[crfiscal4]; ?>" hidden  type="date">
	<input name="hrrf4"  value="<?php echo $_SESSION[hrrf4]; ?>"  hidden   type="time"> 
	
<input name="rf4"  value="<?php echo $_SESSION[rf4]; ?>"  hidden   type="time">
  
 
  
   <?php  } if ($_SESSION[ccontabil]==1 ) { ?>
          
  

<div class="row">
  <div class="col-75">
    <div class="container">
         <h1> Contabil </h1>
      
        <div class="row">
          <div class="col-50">
              <center>
            <h3>Cronograma Previsto  </h3>
            
            
          <label for="ccontabil2">Contato Contabil  1   </label>
	<input name="ccontabil1" value="<?php echo $_SESSION[ccontabil1]; ?>" required  type="date">
	<input name="hrcc1"  value="<?php echo $_SESSION[hrcc1]; ?>"  required   type="time"> 

	<p class=espaco></p>
    
    <label for="ccontabil2">Contato Contabil 2</label>
	<input name="ccontabil2" value="<?php echo $_SESSION[ccontabil2]; ?>"  required type="date">
	<input name="hrcc2"   value="<?php echo $_SESSION[hrcc2]; ?>"  required type="time"> 
	

	<p class=espaco></p>
            
 </br>
 </br>
            <div class="row">
              <div class="col-50">
               
              </div>
              <div class="col-50"> 
               
              </div>
            </div>
          </div>
</center>
















<?php //*Realizado    ?>
          <div class="col-50">
              <p class=espaco></p>
          <h3>Realizado      </h3>
             
            
            
            
	<label for="crcontabil1">Contato 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas   </label>
	<input name="crcontabil1" value="<?php echo $_SESSION[crcontabil1]; ?>" required  type="date">
	<input name="hrrc1"  value="<?php echo $_SESSION[hrrc1]; ?>"  required   type="time"> 
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rc1"  value="<?php echo $_SESSION[rc1]; ?>"  required   type="time"> 
	


	<p class=espaco></p>
    
    <label for="crcontabil2">Contato 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crcontabil2" value="<?php echo $_SESSION[crcontabil2]; ?>"  required type="date">
	<input name="hrrc2"  value="<?php echo $_SESSION[hrrc2]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rc2"  value="<?php echo $_SESSION[rc2]; ?>"  required   type="time"> 
	<p class=espaco></p>

     
            <div class="row">
              <div class="col-50">
                  
              </div>
              <div class="col-50">
         
         
              </div>
            </div>
            
          </div>
          
        </div>
    </div>
    
   
  </div>
  
  </div>
  
  
  </br>
  </br>
  </br>
  
  <?php }else { ?>
  
     <input name="ccontabil1" value="<?php echo $_SESSION[ccontabil1]; ?>" hidden  type="date">
	<input name="hrcc1"  value="<?php echo $_SESSION[hrcc1]; ?>" hidden    type="time"> 

    
    
	<input name="ccontabil2" value="<?php echo $_SESSION[ccontabil2]; ?>" hidden  type="date">
	<input name="hrcc2"   value="<?php echo $_SESSION[hrcc2]; ?>"hidden   type="time"> 
  
  
  <input name="crcontabil1" value="<?php echo $_SESSION[crcontabil1]; ?>" hidden  type="date">
	<input name="hrrc1"  value="<?php echo $_SESSION[hrrc1]; ?>" hidden    type="time"> 
	
	
<input name="rc1"  value="<?php echo $_SESSION[rc1]; ?>"  hidden    type="time"> 
	


	<input name="crcontabil2" value="<?php echo $_SESSION[crcontabil2]; ?>" hidden  type="date">
	<input name="hrrc2"  value="<?php echo $_SESSION[hrrc2]; ?>"   hidden  type="time"> 
	
   <input name="rc2"  value="<?php echo $_SESSION[rc2]; ?>" hidden     type="time"> 
  
  
  
  <?php  } if ($_SESSION[contconecta]==1 || $_SESSION[contdoc]==1 || $_SESSION[contpatrio]==1 || $_SESSION[contgestao]==1 || $_SESSION[contcore]==1 ) { ?>
          
  

<div class="row">
  <div class="col-75">
    <div class="container">
         <h1> Complementares </h1>
      
        <div class="row">
          <div class="col-50">
              <center>
            <h3>Cronograma Previsto  </h3>
            
            <?php  if ($_SESSION[contconecta]==1 ) {?>
          <label for="cconecta">Contato Conecta   </label>
	<input name="cconecta" value="<?php echo $_SESSION[cconecta]; ?>" required  type="date">
	<input name="hrcconecta"  value="<?php echo $_SESSION[hrcconecta]; ?>"  required   type="time"> 

	<p class=espaco></p>
    <?php } if ($_SESSION[contdoc]==1 ) {?>
    <label for="cdoc">Contato DOC</label>
	<input name="cdoc" value="<?php echo $_SESSION[cdoc]; ?>"  required type="date">
	<input name="hrcdoc"   value="<?php echo $_SESSION[hrcdoc]; ?>"  required type="time"> 
	

	<p class=espaco></p>
	  <?php } if ($_SESSION[contgestao]==1 ) {?>
	<label for="cgestao">Contato Gestão</label>
	<input name="cgestao" value="<?php echo $_SESSION[cgestao]; ?>"  required type="date">
	<input name="hrcgestao"   value="<?php echo $_SESSION[hrcgestao]; ?>"  required type="time"> 
	

	<p class=espaco></p>
	  <?php } if ($_SESSION[contpatrio]==1 ) {?>
	<label for="cpatrio">Contato Patrio</label>
	<input name="cpatrio" value="<?php echo $_SESSION[cpatrio]; ?>"  required type="date">
	<input name="hrcpatrio"   value="<?php echo $_SESSION[hrcpatrio]; ?>"  required type="time"> 
	

	<p class=espaco></p>
	  <?php } if ($_SESSION[contcore]==1 ) {?>
	<label for="ccore">Contato Core</label>
	<input name="ccore" value="<?php echo $_SESSION[ccore]; ?>"  required type="date">
	<input name="hrccore"   value="<?php echo $_SESSION[hrccore]; ?>"  required type="time"> 
	

	<p class=espaco></p>
            <?php } ?>
 </br>
 </br>
            <div class="row">
              <div class="col-50">
               
              </div>
              <div class="col-50"> 
               
              </div>
            </div>
          </div>
</center>
















<?php //*Realizado    ?>
          <div class="col-50">
              <p class=espaco></p>
          <h3>Realizado      </h3>
             
            
            
            <?php  if ($_SESSION[contconecta]==1 ) {?>
	<label for="crconecta">Contato &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas   </label>
	<input name="crconecta" value="<?php echo $_SESSION[crconecta]; ?>" required  type="date">
	<input name="hrrconecta"  value="<?php echo $_SESSION[hrrconecta]; ?>"  required   type="time"> 
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rconecta"  value="<?php echo $_SESSION[rconecta]; ?>"  required   type="time"> 
	


	<p class=espaco></p>
    <?php } if ($_SESSION[contdoc]==1 ) {?>
    <label for="crdoc">Contato &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crdoc" value="<?php echo $_SESSION[crdoc]; ?>"  required type="date">
	<input name="hrrdoc"  value="<?php echo $_SESSION[hrrdoc]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rdoc"  value="<?php echo $_SESSION[rdoc]; ?>"  required   type="time"> 
	<p class=espaco></p>

      <?php } if ($_SESSION[contgestao]==1 ) {?>
    <label for="crgestao">Contato &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crgestao" value="<?php echo $_SESSION[crgestao]; ?>"  required type="date">
	<input name="hrrgestao"  value="<?php echo $_SESSION[hrrgestao]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rgestao"  value="<?php echo $_SESSION[rgestao]; ?>"  required   type="time"> 
	<p class=espaco></p>

 <?php } if ($_SESSION[contpatrio]==1 ) {?>
    <label for="crpatrio">Contato &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crpatrio" value="<?php echo $_SESSION[crpatrio]; ?>"  required type="date">
	<input name="hrrpatrio"  value="<?php echo $_SESSION[hrrpatrio]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rpatrio"  value="<?php echo $_SESSION[rpatrio]; ?>"  required   type="time"> 
	<p class=espaco></p>


<?php } if ($_SESSION[contcore]==1 ) {?>
    <label for="crcore">Contato &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crcore" value="<?php echo $_SESSION[crcore]; ?>"  required type="date">
	<input name="hrrcore"  value="<?php echo $_SESSION[hrrcore]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rcore"  value="<?php echo $_SESSION[rcore]; ?>"  required   type="time"> 
	<p class=espaco></p>
 <?php } ?>
                <div class="row">
              <div class="col-50">
                  
              </div>
              <div class="col-50">
         
         
              </div>
            </div>
            
          </div>
          
        </div>
    </div>
    
   
  </div>
  
  </div>
  
  
  </br>
  </br>
  </br>
  <?php } else { ?>
  
  <input name="cconecta" value="<?php echo $_SESSION[cconecta]; ?>" hidden  type="date">
	<input name="hrcconecta"  value="<?php echo $_SESSION[hrcconecta]; ?>" hidden    type="time"> 


	<input name="cdoc" value="<?php echo $_SESSION[cdoc]; ?>" hidden  type="date">
	<input name="hrcdoc"   value="<?php echo $_SESSION[hrcdoc]; ?>"  hidden type="time"> 
	

	<input name="cgestao" value="<?php echo $_SESSION[cgestao]; ?>"  hidden type="date">
	<input name="hrcgestao"   value="<?php echo $_SESSION[hrcgestao]; ?>" hidden   type="time"> 
	

	<input name="cpatrio" value="<?php echo $_SESSION[cpatrio]; ?>" hidden  type="date">
	<input name="hrcpatrio"   value="<?php echo $_SESSION[hrcpatrio]; ?>"hidden   type="time"> 
	

	<input name="ccore" value="<?php echo $_SESSION[ccore]; ?>"  hidden type="date">
	<input name="hrccore"   value="<?php echo $_SESSION[hrccore]; ?>"  hidden type="time"> 
	
	
	

	
	
	<input name="crconecta" value="<?php echo $_SESSION[crconecta]; ?>"  hidden type="date">
	<input name="hrrconecta"  value="<?php echo $_SESSION[hrrconecta]; ?>"  hidden   type="time"> 
	
	
<input name="rconecta"  value="<?php echo $_SESSION[rconecta]; ?>"   hidden  type="time"> 
	


	<input name="crdoc" value="<?php echo $_SESSION[crdoc]; ?>" hidden  type="date">
	<input name="hrrdoc"  value="<?php echo $_SESSION[hrrdoc]; ?>"  hidden   type="time"> 
	
	<input name="rdoc"  value="<?php echo $_SESSION[rdoc]; ?>"   hidden  type="time"> 


     
	<input name="crgestao" value="<?php echo $_SESSION[crgestao]; ?>" hidden  type="date">
	<input name="hrrgestao"  value="<?php echo $_SESSION[hrrgestao]; ?>" hidden    type="time"> 
	
	<input name="rgestao"  value="<?php echo $_SESSION[rgestao]; ?>"   hidden  type="time"> 
	

	<input name="crpatrio" value="<?php echo $_SESSION[crpatrio]; ?>"  hidden type="date">
	<input name="hrrpatrio"  value="<?php echo $_SESSION[hrrpatrio]; ?>" hidden    type="time"> 
	
<input name="rpatrio"  value="<?php echo $_SESSION[rpatrio]; ?>"  hidden   type="time"> 


	<input name="crcore" value="<?php echo $_SESSION[crcore]; ?>" hidden  type="date">
	<input name="hrrcore"  value="<?php echo $_SESSION[hrrcore]; ?>"   hidden  type="time"> 
	
   <input name="rcore"  value="<?php echo $_SESSION[rcore]; ?>" hidden    type="time"> 
	
  
  
  
  
      <?php   } if ($_SESSION[cag]==1 ) {?>
    <tr></tr>

 
<div class="row">
  <div class="col-75">
    <div class="container">
      
       <h1>AG</h1>
        <div class="row">
          <div class="col-50">
              <center>
            <h3>Cronograma Previsto </h3>
            
            
          <label for="cag1">Contato AG  1  </label>
	<input name="cag1" value="<?php echo $_SESSION[cag1]; ?>" required  type="date">
	<input name="hrcag1"  value="<?php echo $_SESSION[hrcag1]; ?>"  required   type="time"> 

	<p class=espaco></p>
    
    <label for="cag2">Contato AG  2 </label>
	<input name="cag2" value="<?php echo $_SESSION[cag2]; ?>"  required type="date">
	<input name="hrcag1"   value="<?php echo $_SESSION[hrcag2]; ?>"  required type="time"> 
	
	<p class=espaco></p>
	
	<label for="cag3">Contato AG  3</label>
	<input name="cag3" value="<?php echo $_SESSION[cag3]; ?>"  required type="date">
	<input name="hrcag3"   value="<?php echo $_SESSION[hrcag3]; ?>"   required type="time"> 

	<p class=espaco></p>
	
	<label for="cag4">Contato AG  4</label>
	<input name="cag4" value="<?php echo $_SESSION[cag4]; ?>" required  type="date">
	<input name="hrcag4"   value="<?php echo $_SESSION[hrcag4]; ?>"   required type="time"> 
	
	<p class=espaco></p>
            
 </br>
 </br>
            <div class="row">
              <div class="col-50">
               
              </div>
              <div class="col-50"> 
               
              </div>
            </div>
          </div>
</center>
          <div class="col-50">
              <p class=espaco></p>
          <h3>Realizado      </h3>
             
            
             
            
	<label for="crag1">Contato 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas   </label>
	<input name="crag1" value="<?php echo $_SESSION[crag1]; ?>" required  type="date">
	<input name="hrrag1"  value="<?php echo $_SESSION[hrrag1]; ?>"  required   type="time"> 
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rag1"  value="<?php echo $_SESSION[rag1]; ?>"  required   type="time"> 
	


	<p class=espaco></p>
    
    <label for="crag2">Contato 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crag2" value="<?php echo $_SESSION[crag2]; ?>"  required type="date">
	<input name="hrrag2"  value="<?php echo $_SESSION[hrrag2]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rag2"  value="<?php echo $_SESSION[rag2]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
 <label for="crag3">Contato 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crag3" value="<?php echo $_SESSION[crag3]; ?>"  required type="date">
	<input name="hrrag3"  value="<?php echo $_SESSION[hrrag3]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rag3"  value="<?php echo $_SESSION[rag3]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
	 <label for="crag4">Contato 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crag4" value="<?php echo $_SESSION[crag4]; ?>"  required type="date">
	<input name="hrrag4"  value="<?php echo $_SESSION[hrrag4]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rag4"  value="<?php echo $_SESSION[rag4]; ?>"  required   type="time"> 
	<p class=espaco></p>
     
            <div class="row">
              <div class="col-50">
                  
              </div>
              <div class="col-50">
         
         
              </div>
            </div>
            
          </div>
          
        </div>
    </div>
    
   
  </div>
  
  </div>
                  
          
          
      </br>
  </br>
  </br>
  
  
  
  
   <?php } else  { ?>
          
         
	<input name="cag1" value="<?php echo $_SESSION[cag1]; ?>" hidden   type="date">
	<input name="hrcag1"  value="<?php echo $_SESSION[hrcag1]; ?>" hidden    type="time"> 

    
 
	<input name="cag2" value="<?php echo $_SESSION[cag2]; ?>" hidden type="date">
	<input name="hrcag1"   value="<?php echo $_SESSION[hrcag2]; ?>" hidden  type="time"> 
	

	<input name="cag3" value="<?php echo $_SESSION[cag3]; ?>"hidden   type="date">
	<input name="hrcag3"   value="<?php echo $_SESSION[hrcag3]; ?>" hidden   type="time"> 


	<input name="cag4" value="<?php echo $_SESSION[cag4]; ?>" hidden  type="date">
	<input name="hrcag4"   value="<?php echo $_SESSION[hrcag4]; ?>" hidden   type="time"> 
	

        <input name="crag1" value="<?php echo $_SESSION[crag1]; ?>" hidden  type="date">
	<input name="hrrag1"  value="<?php echo $_SESSION[hrrag1]; ?>"  hidden   type="time"> 
	
	
	<input name="rag1"  value="<?php echo $_SESSION[rag1]; ?>"  hidden   type="time"> 
	
    
	<input name="crag2" value="<?php echo $_SESSION[crag2]; ?>"  hidden type="date">
	<input name="hrrag2"  value="<?php echo $_SESSION[hrrag2]; ?>"hidden     type="time"> 
	
	<input name="rag2"  value="<?php echo $_SESSION[rag2]; ?>"  hidden   type="time"> 
	
	
	<input name="crag3" value="<?php echo $_SESSION[crag3]; ?>"  hidden type="date">
	<input name="hrrag3"  value="<?php echo $_SESSION[hrrag3]; ?>"  hidden   type="time"> 
	
	<input name="rag3"  value="<?php echo $_SESSION[rag3]; ?>"   hidden  type="time"> 

	<input name="crag4" value="<?php echo $_SESSION[crag4]; ?>"  hidden type="date">
	<input name="hrrag4"  value="<?php echo $_SESSION[hrrag4]; ?>"  hidden   type="time"> 
	
	<input name="rag4"  value="<?php echo $_SESSION[rag4]; ?>"   hidden  type="time"> 
	
        
        
        
          <?php   } if ($_SESSION[cponto]==1 ) {?>
           <tr></tr>
          

<div class="row">
  <div class="col-75">
    <div class="container">
      
      <h1> Ponto </h1>
        <div class="row">
          <div class="col-50">
              <center>
            <h3>Cronograma Previsto </h3>
            
            
          <label for="cponto1">Contato Ponto 1   </label>
	<input name="cponto1" value="<?php echo $_SESSION[cponto1]; ?>" required  type="date">
	<input name="hrcpt1"  value="<?php echo $_SESSION[hrcpt1]; ?>"  required   type="time"> 

	<p class=espaco></p>
    
    <label for="cponto2">Contato Ponto 2</label>
	<input name="cponto2" value="<?php echo $_SESSION[cponto2]; ?>"  required type="date">
	<input name="hrcpt2"   value="<?php echo $_SESSION[hrcpt2]; ?>"  required type="time"> 
	
	<p class=espaco></p>
	
	<label for="cponto3">Contato Ponto 3</label>
	<input name="cponto3" value="<?php echo $_SESSION[cponto3]; ?>"  required type="date">
	<input name="hrcpt3"   value="<?php echo $_SESSION[hrcpt3]; ?>"   required type="time"> 

	<p class=espaco></p>
	
            
 </br>
 </br>
            <div class="row">
              <div class="col-50">
               
              </div>
              <div class="col-50"> 
               
              </div>
            </div>
          </div>
</center>
          <div class="col-50">
              <p class=espaco></p>
          <h3>Realizado      </h3>
             
            
             
            
	<label for="crponto1">Contato 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas   </label>
	<input name="crponto1" value="<?php echo $_SESSION[crponto1]; ?>" required  type="date">
	<input name="hrrpt1"  value="<?php echo $_SESSION[hrrpt1]; ?>"  required   type="time"> 
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rpt1"  value="<?php echo $_SESSION[rpt1]; ?>"  required   type="time"> 
	


	<p class=espaco></p>
    
    <label for="crponto2">Contato 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crponto2" value="<?php echo $_SESSION[crponto2]; ?>"  required type="date">
	<input name="hrrpt2"  value="<?php echo $_SESSION[hrrpt2]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rpt2"  value="<?php echo $_SESSION[rpt2]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
 <label for="crponto3">Contato 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crponto3" value="<?php echo $_SESSION[crponto3]; ?>"  required type="date">
	<input name="hrrpt3"  value="<?php echo $_SESSION[hrrpt3]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rpt3"  value="<?php echo $_SESSION[rpt3]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
     
            <div class="row">
              <div class="col-50">
                  
              </div>
              <div class="col-50">
         
         
              </div>
            </div>
            
          </div>
          
        </div>
    </div>
    
   
  </div>
  
  </div>
                 
</br>
  </br>
  </br>
  <?php } else { ?>
  

  	<input name="cponto1" value="<?php echo $_SESSION[cponto1]; ?>" hidden  type="date">
	<input name="hrcpt1"  value="<?php echo $_SESSION[hrcpt1]; ?>"   hidden  type="time"> 

    
	<input name="cponto2" value="<?php echo $_SESSION[cponto2]; ?>"  hidden type="date">
	<input name="hrcpt2"   value="<?php echo $_SESSION[hrcpt2]; ?>" hidden  type="time"> 
	
 
 	<input name="cponto3" value="<?php echo $_SESSION[cponto3]; ?>"  hidden type="date">
	<input name="hrcpt3"   value="<?php echo $_SESSION[hrcpt3]; ?>"  hidden  type="time"> 



	<input name="crponto1" value="<?php echo $_SESSION[crponto1]; ?>" hidden  type="date">
	<input name="hrrpt1"  value="<?php echo $_SESSION[hrrpt1]; ?>"   hidden  type="time"> 
	
	<input name="rpt1"  value="<?php echo $_SESSION[rpt1]; ?>"   hidden  type="time"> 
	

	<input name="crponto2" value="<?php echo $_SESSION[crponto2]; ?>" hidden  type="date">
	<input name="hrrpt2"  value="<?php echo $_SESSION[hrrpt2]; ?>"   hidden  type="time"> 
	
	<input name="rpt2"  value="<?php echo $_SESSION[rpt2]; ?>"  hidden  type="time"> 
	
	<input name="crponto3" value="<?php echo $_SESSION[crponto3]; ?>"  hidden type="date">
	<input name="hrrpt3"  value="<?php echo $_SESSION[hrrpt3]; ?>"  hidden   type="time"> 
	
	<input name="rpt3"  value="<?php echo $_SESSION[rpt3]; ?>"  hidden   type="time">
  
  
  
  
  
  
  
  
  
          <?php   } if ($_SESSION[crh]==1 ) {?>
          <tr></tr>
          
      
<div class="row">
  <div class="col-75">
    <div class="container">
      <h1>RH</h1>
      
        <div class="row">
          <div class="col-50">
              <center>
            <h3>Cronograma Previsto </h3>
            
            
          <label for="crh1">Contato RH 1   </label>
	<input name="crh1" value="<?php echo $_SESSION[crh1]; ?>" required  type="date">
	<input name="hrcrh1"  value="<?php echo $_SESSION[hrcrh1]; ?>"  required   type="time"> 

	<p class=espaco></p>
    
    <label for="crh2">Contato RH 2</label>
	<input name="crh2" value="<?php echo $_SESSION[crh2]; ?>"  required type="date">
	<input name="hrcrh2"   value="<?php echo $_SESSION[hrcrh2]; ?>"  required type="time"> 
	
	<p class=espaco></p>
	
	<label for="crh3">Contato RH 3</label>
	<input name="crh3" value="<?php echo $_SESSION[crh3]; ?>"  required type="date">
	<input name="hrcrh3"   value="<?php echo $_SESSION[hrcrh3]; ?>"   required type="time"> 

	<p class=espaco></p>
	
	<label for="crh4">Contato RH 4</label>
	<input name="crh4" value="<?php echo $_SESSION[crh4]; ?>" required  type="date">
	<input name="hrcrh4"   value="<?php echo $_SESSION[hrcrh4]; ?>"   required type="time"> 
	
	<p class=espaco></p>
            
            
      <label for="crh5">Contato RH 5   </label>
	<input name="crh5" value="<?php echo $_SESSION[crh5]; ?>" required  type="date">
	<input name="hrcrh5"  value="<?php echo $_SESSION[hrcrh5]; ?>"  required   type="time"> 

	<p class=espaco></p>
    
    <label for="crh6">Contato RH 6</label>
	<input name="crh6" value="<?php echo $_SESSION[crh6]; ?>"  required type="date">
	<input name="hrcrh6"   value="<?php echo $_SESSION[hrcrh6]; ?>"  required type="time"> 
	
	<p class=espaco></p>
	
	<label for="crh7">Contato RH 7</label>
	<input name="crh7" value="<?php echo $_SESSION[crh7]; ?>"  required type="date">
	<input name="hrcrh7"   value="<?php echo $_SESSION[hrcrh7]; ?>"   required type="time"> 

	<p class=espaco></p>
	
	<label for="crh8">Contato RH 8</label>
	<input name="crh8" value="<?php echo $_SESSION[crh8]; ?>" required  type="date">
	<input name="hrcrh8"   value="<?php echo $_SESSION[hrcrh8]; ?>"   required type="time"> 
	
	<p class=espaco></p>
                    
            
            
 </br>
 </br>
            <div class="row">
              <div class="col-50">
               
              </div>
              <div class="col-50"> 
               
              </div>
            </div>
          </div>
</center>
          <div class="col-50">
              <p class=espaco></p>
          <h3>Realizado      </h3>
             
            
             
            
	<label for="crrh1">Contato 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas   </label>
	<input name="crrh1" value="<?php echo $_SESSION[crrh1]; ?>" required  type="date">
	<input name="hrrrh1"  value="<?php echo $_SESSION[hrrrh1]; ?>"  required   type="time"> 
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rrh1"  value="<?php echo $_SESSION[rrh1]; ?>"  required   type="time"> 
	


	<p class=espaco></p>
    
    <label for="crrh2">Contato 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crrh2" value="<?php echo $_SESSION[crrh2]; ?>"  required type="date">
	<input name="hrrrh2"  value="<?php echo $_SESSION[hrrrh2]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rrh2"  value="<?php echo $_SESSION[rrh2]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
 <label for="crrh3">Contato 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crrh3" value="<?php echo $_SESSION[crrh3]; ?>"  required type="date">
	<input name="hrrrh3"  value="<?php echo $_SESSION[hrrrh3]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rrh3"  value="<?php echo $_SESSION[rrh3]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
	 <label for="crrh4">Contato 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crrh4" value="<?php echo $_SESSION[crrh4]; ?>"  required type="date">
	<input name="hrrrh4"  value="<?php echo $_SESSION[hrrrh4]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rrh4"  value="<?php echo $_SESSION[rrh4]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
	
		<label for="crrh5">Contato 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas   </label>
	<input name="crrh5" value="<?php echo $_SESSION[crrh5]; ?>" required  type="date">
	<input name="hrrrh5"  value="<?php echo $_SESSION[hrrrh5]; ?>"  required   type="time"> 
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rrh5"  value="<?php echo $_SESSION[rrh5]; ?>"  required   type="time"> 
	


	<p class=espaco></p>
    
    <label for="crrh6">Contato 6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crrh6" value="<?php echo $_SESSION[crrh6]; ?>"  required type="date">
	<input name="hrrrh6"  value="<?php echo $_SESSION[hrrrh6]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rrh6"  value="<?php echo $_SESSION[rrh6]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
 <label for="crrh7">Contato 7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crrh7" value="<?php echo $_SESSION[crrh7]; ?>"  required type="date">
	<input name="hrrrh7"  value="<?php echo $_SESSION[hrrrh7]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rrh7"  value="<?php echo $_SESSION[rrh7]; ?>"  required   type="time"> 
	<p class=espaco></p>
	
	 <label for="crrh8">Contato 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="crrh8" value="<?php echo $_SESSION[crrh8]; ?>"  required type="date">
	<input name="hrrrh8"  value="<?php echo $_SESSION[hrrrh8]; ?>"  required   type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="rrh8"  value="<?php echo $_SESSION[rrh8]; ?>"  required   type="time"> 
	<p class=espaco></p>
     
            <div class="row">
              <div class="col-50">
                  
              </div>
              <div class="col-50">
         
         
              </div>
            </div>
            
          </div>
          
        </div>
    </div>
    
    
    </br> 
    </br>
    </br>
    
    
    <?php } else { ?>
    

    
    <input name="crh1" value="<?php echo $_SESSION[crh1]; ?>"   hidden type="date">
	<input name="hrcrh1"  value="<?php echo $_SESSION[hrcrh1]; ?>"  hidden   type="time"> 

	<input name="crh2" value="<?php echo $_SESSION[crh2]; ?>"  hidden type="date">
	<input name="hrcrh2"   value="<?php echo $_SESSION[hrcrh2]; ?>" hidden  type="time"> 
	
	<input name="crh3" value="<?php echo $_SESSION[crh3]; ?>" hidden  type="date">
	<input name="hrcrh3"   value="<?php echo $_SESSION[hrcrh3]; ?>"  hidden  type="time"> 

	<input name="crh4" value="<?php echo $_SESSION[crh4]; ?>" hidden  type="date">
	<input name="hrcrh4"   value="<?php echo $_SESSION[hrcrh4]; ?>"  hidden  type="time"> 
	

	<input name="crh5" value="<?php echo $_SESSION[crh5]; ?>"  hidden type="date">
	<input name="hrcrh5"  value="<?php echo $_SESSION[hrcrh5]; ?>"   hidden  type="time"> 


	<input name="crh6" value="<?php echo $_SESSION[crh6]; ?>"  hidden type="date">
	<input name="hrcrh6"   value="<?php echo $_SESSION[hrcrh6]; ?>" hidden  type="time"> 
	

	<input name="crh7" value="<?php echo $_SESSION[crh7]; ?>"  hidden type="date">
	<input name="hrcrh7"   value="<?php echo $_SESSION[hrcrh7]; ?>"   hidden type="time"> 


	<input name="crh8" value="<?php echo $_SESSION[crh8]; ?>"  hidden type="date">
	<input name="hrcrh8"   value="<?php echo $_SESSION[hrcrh8]; ?>" hidden   type="time"> 
    
    
    
    
    
    <input name="crrh1" value="<?php echo $_SESSION[crrh1]; ?>"  hidden type="date">
	<input name="hrrrh1"  value="<?php echo $_SESSION[hrrrh1]; ?>"  hidden   type="time"> 
	
	
    <input name="rrh1"  value="<?php echo $_SESSION[rrh1]; ?>"  hidden   type="time"> 
	



    
	<input name="crrh2" value="<?php echo $_SESSION[crrh2]; ?>"  hidden type="date">
	<input name="hrrrh2"  value="<?php echo $_SESSION[hrrrh2]; ?>"   hidden  type="time"> 
	
	<input name="rrh2"  value="<?php echo $_SESSION[rrh2]; ?>"  hidden   type="time"> 
	
	<input name="crrh3" value="<?php echo $_SESSION[crrh3]; ?>"  hidden type="date">
	<input name="hrrrh3"  value="<?php echo $_SESSION[hrrrh3]; ?>"   hidden  type="time"> 
	
	<input name="rrh3"  value="<?php echo $_SESSION[rrh3]; ?>"  hidden   type="time"> 

	
	<input name="crrh4" value="<?php echo $_SESSION[crrh4]; ?>" hidden  type="date">
	<input name="hrrrh4"  value="<?php echo $_SESSION[hrrrh4]; ?>"  hidden   type="time"> 
	
<input name="rrh4"  value="<?php echo $_SESSION[rrh4]; ?>"    hidden type="time"> 
	
	<input name="crrh5" value="<?php echo $_SESSION[crrh5]; ?>"  hidden type="date">
	<input name="hrrrh5"  value="<?php echo $_SESSION[hrrrh5]; ?>"  hidden   type="time"> 
	
	
	<input name="rrh5"  value="<?php echo $_SESSION[rrh5]; ?>" hidden    type="time"> 
	
	<input name="crrh6" value="<?php echo $_SESSION[crrh6]; ?>" hidden  type="date">
	<input name="hrrrh6"  value="<?php echo $_SESSION[hrrrh6]; ?>"  hidden   type="time"> 
	
	<input name="rrh6"  value="<?php echo $_SESSION[rrh6]; ?>"   hidden  type="time"> 

	<input name="crrh7" value="<?php echo $_SESSION[crrh7]; ?>" hidden  type="date">
	<input name="hrrrh7"  value="<?php echo $_SESSION[hrrrh7]; ?>" hidden    type="time"> 
	
	<input name="rrh7"  value="<?php echo $_SESSION[rrh7]; ?>"   hidden  type="time"> 

	<input name="crrh8" value="<?php echo $_SESSION[crrh8]; ?>" hidden  type="date">
	<input name="hrrrh8"  value="<?php echo $_SESSION[hrrrh8]; ?>"  hidden   type="time"> 
	
	<input name="rrh8"  value="<?php echo $_SESSION[rrh8]; ?>" hidden    type="time"> 
	
    
    
    
    
    
     <?php   } if ($_SESSION[crh]==1||$_SESSION[cpessoal]==1||$_SESSION[cfiscal]==1||$_SESSION[ccontabil]==1||$_SESSION[cag]==1||$_SESSION[cponto]==1||$_SESSION[crh]==1 ) { ?>
    <tr></tr>

 
<div class="row">
  <div class="col-75">
    <div class="container">
      
       <h1>Horas Adicionais</h1>
        <div class="row">
          <div class="col-50">
              <center>
            <h3>Realizado  </h3>
             
            
             
            
	<label for="adicionaldata1">Contato 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas   </label>
	<input name="adicionaldata1" value="<?php echo $_SESSION[adicionaldata1]; ?>" type="date">
	<input name="adicionalhoras1"  value="<?php echo $_SESSION[adicionalhoras1]; ?>"  type="time"> 
	
	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="adicionalrealizado1"  value="<?php echo $_SESSION[adicionalrealizado1]; ?>"  type="time"> 
	


	<p class=espaco></p>
    
    <label for="adicionaldata2">Contato 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="adicionaldata2" value="<?php echo $_SESSION[adicionaldata2]; ?>"  type="date">
	<input name="adicionalhoras2"  value="<?php echo $_SESSION[adicionalhoras2]; ?>"  type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="adicionalrealizado2"  value="<?php echo $_SESSION[adicionalrealizado2]; ?>"  type="time"> 
	<p class=espaco></p>
	
 <label for="adicionaldata3">Contato 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="adicionaldata3" value="<?php echo $_SESSION[adicionaldata3]; ?>"   type="date">
	<input name="adicionalhoras3"  value="<?php echo $_SESSION[adicionalhoras3]; ?>"  type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="adicionalrealizado3"  value="<?php echo $_SESSION[adicionalrealizado3]; ?>"  type="time"> 
	<p class=espaco></p>
	
	 <label for="adicionaldata4">Contato 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Horas realizadas </label>
	<input name="adicionaldata4" value="<?php echo $_SESSION[adicionaldata4]; ?>"  type="date">
	<input name="adicionalhoras4"  value="<?php echo $_SESSION[adicionalhoras4]; ?>"  type="time"> 
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<input name="adicionalrealizado4"  value="<?php echo $_SESSION[adicionalrealizado4]; ?>"  type="time"> 
	<p class=espaco></p>
     
            
 </br>
 </br>
            <div class="row">
              <div class="col-50">
               
              </div>
              <div class="col-50"> 
               
              </div>
            </div>
          </div>
</center>
          <div class="col-50">
              <p class=espaco></p>
          
            <div class="row">
              <div class="col-50">
                  
              </div>
              <div class="col-50">
         
         
              </div>
            </div>
            
          </div>
          
        </div>
    </div>
    
   
  </div>
  
  </div>
                  
          
          
      </br>
  </br>
  </br>
          
  </div>
  
  </div>
</div> 
  
  
  
 
  
  
  
  
  
    <?php }?>
    </form>  
<?php }?>
         