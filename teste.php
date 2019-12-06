<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>

<?php
$servidor = "localhost";
$usuario = "sistec31_admin";
$senha = "Galodoido22";
$banco_de_dados = "sistec31_farol";
 
$con = new mysqli($servidor, $usuario, $senha, $banco_de_dados);
if ($con->connect_errno) {
    echo "Falha ao conectar ao banco: (" . $con->connect_errno . ") " . $con->connect_error;
}





$sql = "select nome from usuario limit 1;";
$r = $con->query($sql) or die($con->error);
 
$teste= $r->fetch_object()->total;

if ($_SESSION['name']=='rafael'){

$sql = "SELECT count(*) as total FROM usuario where implantadorrafael=1  ";
$r = $con->query($sql) or die($con->error);
 
$totalok= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorrafael=1  and cancelados=1 ";
$r = $con->query($sql) or die($con->error);
 
$totalalerta= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorrafael=1  and critico=1 ";
$r = $con->query($sql) or die($con->error);
 
$totalcritico= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorrafael=1   and datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);
 
$total30dias= $r->fetch_object()->total;
}


if ($_SESSION['name']=='wesley'){

$sql = "SELECT count(*) as total FROM usuario where implantadorwesley=1  ";
$r = $con->query($sql) or die($con->error);
 
$totalok= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorwesley=1  and cancelados=1 ";
$r = $con->query($sql) or die($con->error);
 
$totalalerta= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorwesley=1  and critico=1 ";
$r = $con->query($sql) or die($con->error);
 
$totalcritico= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorwesley=1   and datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);
 
$total30dias= $r->fetch_object()->total;
}





if ($_SESSION['name']=='karina'){

$sql = "SELECT count(*) as total FROM usuario where implantadorkarina=1  ";
$r = $con->query($sql) or die($con->error);
 
$totalok= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorkarina=1  and cancelados=1 ";
$r = $con->query($sql) or die($con->error);
 
$totalalerta= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorkarina=1  and critico=1 ";
$r = $con->query($sql) or die($con->error);
 
$totalcritico= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorkarina=1   and datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);
 
$total30dias= $r->fetch_object()->total;
}


if ($_SESSION['name']=='regina'||$_SESSION['name']=='simone'||$_SESSION['name']=='ulisses'){

$sql = "SELECT count(*) as total FROM usuario where nome is not null  ";
$r = $con->query($sql) or die($con->error);
 
$totalok= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where  cancelados=1 ";
$r = $con->query($sql) or die($con->error);
 
$totalalerta= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where  critico=1 ";
$r = $con->query($sql) or die($con->error);
 
$totalcritico= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);
 
$total30dias= $r->fetch_object()->total;
}


if ($_SESSION['name']=='matriz' ||$_SESSION['name']=='nayara'||$_SESSION['name']=='lorraynne'||$_SESSION['name']=='evelyn' ){



$sql = "SELECT count(*) as total FROM demandas ";
$r = $con->query($sql) or die($con->error);
 
$totalok= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM demandas where  demandacr=2 ";
$r = $con->query($sql) or die($con->error);
 
$totalalerta= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM demandas  where  demandacr=3 ";
$r = $con->query($sql) or die($con->error);
 
$totalcritico= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM demandas where statusdemanda=2";
$r = $con->query($sql) or die($con->error);
 
$total30dias= $r->fetch_object()->total;
}

?>




<title>CCS - Clientes Todos</title>
<?php

	include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario  order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();


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
	
	$implantadores[1] = "Rafael";
	$implantadores[2] = "Samantha";
	$implantadores[3] = "Wesley";
	$implantadores[4] = "Indefinido";
	$implantadores[5] = "Karina";



	//Imagem para substituir o nome Prata
$clasimg1 = 'Imgs/award (4).png';
	$clasimg2 = 'Imgs/award (5).png';
	$clasimg3 = 'Imgs/award (3).png';
	
	//Imagem para Status e Status
	$staimg1 ='Imgs/information (1).png';
	$staimg2 ='Imgs/warning.png';
	$staimg3 ='Imgs/checked.png';
	
	
	$staimg4 ='Imgs/icons8-cancelar-32.png';
	$staimg5 ='Imgs/icons8-entrada-proibida-32.png';
	
 
	  $unidade[1] = "Belo Horizonte";
	$unidade[2] = "Montes Claros";
    
?>
<style>
.collapsible {
  background-color: #A4A4A4;
  color: white;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  border-radius:10px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
  border-radius:10px;
}


.




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




.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
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
  <img alt="" src="/Imgs/baner1.png"   class="responsive" />
  
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


  

<p class=espaco></p>


<div class="container theme-showcase" role="main">
			<div class="page-header">
			 
		<center>		<h1> Olá seja bem vindo(a),</br> <?php   echo '' . $_SESSION['name'] . '!'; ?></h1></center>
			</div>
</br>
</br>


        <?php
   
   if ($_SESSION['name']=='rafael'||$_SESSION['name']=='wesley'||$_SESSION['name']=='karina'||$_SESSION['name']=='simone'||$_SESSION['name']=='ulisses'||$_SESSION['name']=='regina'){
   
   
   	if($_SESSION['name']=='rafael'||$_SESSION['name']=='wesley'||$_SESSION['name']=='karina'){
   	
   	$sql = "SELECT count(*) as total FROM usuario where  primeirocontato=2 and  datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()";
		$r = $con->query($sql) or die($con->error); 
		$primeiroscontatos= $r->fetch_object()->total;
		
		
		
		if ($primeiroscontatos>0){		
                    echo "<script> alert('ATENÇÃO EXISTEM CLIENTES SEM PRIMEIRO CONTATO.');</script>";
                }
                
   ?>
   
   		
                
           
                
             
      <div class="card card-body bg-light">
        
      
      
       <p><div class="progress">
  <div class="progress-bar bg-success" style="width:<?php echo $totalok ;?>%">
    Ok
  </div>
  <div class="progress-bar bg-warning" style="width:<?php echo $totalalerta;?>%">
    Alerta
  </div>
  <div class="progress-bar bg-danger" style="width:<?php echo $totalcritico;?>%">
   Criticos
  </div></p>
</div>
</div>
      
      </br>
      
      </br>
      </br>
           <?php }
           ?>
      <div class="row">
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a href="#"><img src="Imgs/checked.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Total de clientes: {$totalok}"; ?></center></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a href="#"><img src="Imgs/information (1).png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Clientes em Alerta: {$totalalerta}"; ?></center></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a href="#"><img src="Imgs/warning.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Clientes Criticos: {$totalcritico}"; ?></center></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a href="#"><img src="Imgs/check-mark.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Clientes do mês: {$total30dias}"; ?></center></p> 
          </div>
        </div>
      </div>
      
      
      </br>
      </br>
      
      <div class="container">
  <h2>Listagens</h2>
  
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
         Clientes ultimos 30 dias
        </a>
      </div>
      <div id="collapseOne" class="collapse" data-parent="#accordion">
        <div class="card-body">
         
         
         <?php  if ($_SESSION['name']=='rafael')  {
         
        
         
         
         include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario  where implantadorrafael=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()   order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	}
	
	if ($_SESSION['name']=='karina'){ 
	
	include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario  where implantadorkarina=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()   order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	
	}
	
	if ($_SESSION['name']=='wesley') {
	
	include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario  where implantadorwesley=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()  order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	}
	
	
	
	
	
	if ($_SESSION['name']=='samantha')  {
	
	include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario  where implantadorsamantha=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()  order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	}
	
         
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
         ?>
         
         
         
         
         
         
         
         <table class="table table-hover" id="myTable"  >
						<thead>
							<tr >
								<th class="text-center"><font size="4">Classificação</th>
								<th class="text-center"><font size="4">Empresa</th>
								<th class="text-center"><font size="4">Responsável</th>
								<th class="text-center"><font size="4">Telefone</th>
								<th class="text-center"><font size="4">Implantador</th>
								<th class="text-center"><font size="4">Unidade</th>
								<th class="text-center"><font size="4">Status</th>
								<th class="text-center"><font size="4">Entrada</th>
								<th class="text-center"><font size="4">Ação</th>
							</tr>
						</thead>
						<tbody>

	<?php
	//lopping para mostrar todos os cadastros enquanto existir
	do{ ?> 
	
	
	<tr>
									<td class="text-center"><?php
	
		 if ($classificacao[$linha['classificacao']]=="Prata"){
		    echo "<img title=Ouro src='$clasimg1' border='0' />";
		}
		if ($classificacao[$linha['classificacao']]=="Ouro"){
		    echo "<img title=Prata src='$clasimg2' border='0' />";
		}
		if ($classificacao[$linha['classificacao']]=="Diamante"){
		    echo "<img  title=Diamante src='$clasimg3' border='0' />";
		}
		
		
		?></td>
									<td><?php echo $linha["nome"]; ?></td>
									<td class="text-center"><?php echo $linha["responsavel"]; ?></td>
									<td class="text-center"><?php echo $linha["telefone"]; ?></td>
							    	<td class="text-center"><?php 
									
									if ($linha["implantadorrafael"]==1){
									    	echo "Rafael |"  ;
									}
									
									if ($linha["implantadorkarina"]==1){
									    	echo "    Karina|"  ;
									}
									
									if ($linha["implantadorwesley"]==1){
									    	echo "    Wesley|"  ;
									}
									
									if ($linha["implantadorsamantha"]==1){
									    	echo "    Samantha|"  ;
									}
									
									if ($linha["implantadoroutros"]==1){
									    	echo "    Outros"  ;
									}
									
                                if ($linha['implantadoroutros'] == 0 && $linha['implantadorrafael'] == 0 && $linha['implantadorkarina'] == 0 && $linha['implantadorwesley'] == 0 && $linha['implantadorsamantha'] == 0 ){
									    	echo "Indefinido"  ;
									}
								
									
								 ; ?></td>
								 <td class="text-center"><?php echo $unidade[$linha["unidade"]]; ?></td>
									<td class="text-center"><?php
            	
           
	   
            if ($linha['statuscontrato'] == 0 ){
	                $status=1;
            }
	         if ($linha['cancelados'] == 1){
	               $status = 2;                      
	         }
	         
	         if ($linha['critico']==1){
	                $status =3;	
	         }
	
	       if ($linha['statuscontrato'] == 1  ){
	                $status = 4;	
	       }
	                
	       if ($linha['statuscontrato'] == 2  ){
	                $status = 5;	         
	                
            	
	       }
            	
            		
		//Retorno Imagem
		if ($status==1 ){
		    echo "&nbsp;&nbsp;<img  title=Ok src='$staimg3' border='0' />";
		}
		        if ($status==2){
		    echo "&nbsp;&nbsp;<img  title=Alerta src='$staimg1' border='0' />";
		}
		if ($status==3){
		    echo "&nbsp;&nbsp;<img title=Critico src='$staimg2' border='0' />";
		}
		
		if ($status==4){
		    echo "&nbsp;&nbsp;<img title=Cancelado  src='$staimg4' border='0' />";
		}
		
		if ($status==5){
		    echo "&nbsp;&nbsp;<img  title=Em cancelamento src='$staimg5' border='0' />";
		}
		
		
		?></td>
									<td class="text-center"><?php echo date('d/m/Y ',strtotime($linha["datadecadastro"])); ?></td>
									<td class="text-center">								
										<a href="ficha.php?p=ficha&usuario=<?php echo $linha['codigo']; ?>">
											<i class="fa fa-address-card-o" title="Ficha" style="font-size:17px;"></i>
											
									
										<a href="index.php?p=editar&usuario=<?php echo $linha['codigo']; ?>">
											
											<i class="fa fa-edit" title="Editar" style="font-size:17px;"></i>
										</a>								
										
										
								<a href="javascript: if(confirm('Tem certeza que deseja deletar o usuário <?php echo $linha['nome']; ?>?'))							 
 location.href='index.php?p=deletar&usuario=<?php echo $linha['codigo']; ?>';">
								
									
									<i class="fa fa-remove" title="Deletar" style="font-size:17px;color:red;"></i>
									
									
									</a>	
									</td>
								</tr>
	
	
	
	
	
	
	
	
	
	
	
	
<?php	} while($linha = $sql_query->fetch_assoc()); ?>
           
</table>
         
         
         
         
         
         
         
         
         
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Suas Justificativas de ponto
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
        
        
         <?php  if ($_SESSION['name']=='rafael')  {
         
         include("classe/conexao.php");

		$sql_code = "SELECT * FROM justificativas where solicitante=6  order by data DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	}
	
	if ($_SESSION['name']=='karina'){ 
	
	include("classe/conexao.php");

		$sql_code = "SELECT * FROM justificativas where solicitante=1 order by data DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	
	}
	
	if ($_SESSION['name']=='wesley') {
	
	include("classe/conexao.php");

			$sql_code = "SELECT * FROM justificativas where solicitante=2 order by data DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	}
	
	
	
	
	
         
         
         ?>
         
        
        
        
        
         <table class="table table-hover" id="myTable"  >
						<thead>
							<tr >
								<th class="text-center"><font size="4">Data</th>
								<th class="text-center"><font size="4">Motivo</th>
								<th class="text-center"><font size="4">Solicitante</th>								
								<th class="text-center"><font size="4">Status</th>								
							</tr>
						</thead>
						<tbody>

	<?php
	//lopping para mostrar todos os cadastros enquanto existir
	do{ ?> 
	
	
	<tr>
									<td class="text-center"><?php echo date('d/m/Y ',strtotime($linha["data"])); ?></td>
									<td> <?php echo   $justificativa[$linha["descricao"]]; ?></td>
									
																		
									
									<td class="text-center"><?php 
									
									if ($linha["solicitante"]==6){
									    	echo "Rafael"  ;
									}
									
									if ($linha["solicitante"]==2){
									    	echo "Wesley"  ;
									}
									
									if ($linha["solicitante"]==1){
									    	echo "Karina|"  ;
									}
									
									if ($linha["solicitante"]==3){
									    	echo "Evelyn"  ;
									}
									
									if ($linha["solicitante"]==4){
									    	echo "Lorrayne"  ;
									}
									
									if ($linha["solicitante"]==5){
									    	echo "Nayara"  ;
									}
									
									
							
                           
								
									
								 ; ?></td>
									
									
								
									<td class="text-center"><?php
            	
           
	   
             if ($linha['status'] == 1 ||  $linha['status'] == 0 ){
	                $status=1;
            }
	         if ( $linha['status'] == 2 ){
	               $status = 2;                      
	         }
	         if ($linha['status'] == 3  ){
	                $status =3;	
	         }
	
	   
            	
            		
		//Retorno Imagem
		if ($status==1 ){
		    echo "&nbsp;&nbsp;<img  src='$staimg3' border='0' />";
		}
		        if ($status==2){
		    echo "&nbsp;&nbsp;<img  src='$staimg1' border='0' />";
		}
		if ($status==3){
		    echo "&nbsp;&nbsp;<img  src='$staimg2' border='0' />";
		}
				
		
		
		?></td>					
		
		<td class="text-center">								
																		
										<a href="index.php?p=editarjustificativa&justificativas=<?php echo $linha['codigo']; ?>">
											<span class="glyphicon glyphicon-eye-open text-primary" aria-hidden="true" > </span>
										</a>
										
										<a href="javascript: if(confirm('Tem certeza que deseja deletar a justificativa? '))
			location.href='index.php?p=deletarjustificativa&justificativas=<?php echo $linha['codigo']; ?>';">
											<span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
										</a>
												
									</td>
								</tr>
	
	
	<a >
	
	
	
	
	
	
	
	
	
	
<?php	} while($linha = $sql_query->fetch_assoc()); ?>
           
</table>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Clientes sem primeiro contato (30 dias )
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <?php  if ($_SESSION['name']=='rafael')  {
         
         include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario  where  datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() and primeirocontato=2   order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	}
	
	if ($_SESSION['name']=='karina'){ 
	
	include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario  where  datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() and primeirocontato=2   order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	
	}
	
	if ($_SESSION['name']=='wesley') {
	
	include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario  where  datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() and primeirocontato=2  order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	}
	
	
	
	
	
	if ($_SESSION['name']=='samantha')  {
	
	include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario  where  datadecadastro BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() and primeirocontato=2 order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	}
	
         
         
         ?>
         
         
         
         
         
         
         
         <table class="table table-hover" id="myTable"  >
						<thead>
							<tr >
								<th class="text-center"><font size="4">Classificação</th>
								<th class="text-center"><font size="4">Empresa</th>
								<th class="text-center"><font size="4">Responsável</th>
								<th class="text-center"><font size="4">Telefone</th>
								<th class="text-center"><font size="4">Implantador</th>
								<th class="text-center"><font size="4">Unidade</th>
								<th class="text-center"><font size="4">Status</th>
								<th class="text-center"><font size="4">Entrada</th>
								<th class="text-center"><font size="4">Ação</th>
							</tr>
						</thead>
						<tbody>

	<?php
	//lopping para mostrar todos os cadastros enquanto existir
	do{ ?> 
	
	
	<tr>
									<td class="text-center"><?php
	
		 if ($classificacao[$linha['classificacao']]=="Prata"){
		    echo "<img title=Ouro src='$clasimg1' border='0' />";
		}
		if ($classificacao[$linha['classificacao']]=="Ouro"){
		    echo "<img title=Prata src='$clasimg2' border='0' />";
		}
		if ($classificacao[$linha['classificacao']]=="Diamante"){
		    echo "<img  title=Diamante src='$clasimg3' border='0' />";
		}
		
		
		?></td>
									<td><?php echo $linha["nome"]; ?></td>
									<td class="text-center"><?php echo $linha["responsavel"]; ?></td>
									<td class="text-center"><?php echo $linha["telefone"]; ?></td>
							    	<td class="text-center"><?php 
									
									if ($linha["implantadorrafael"]==1){
									    	echo "Rafael |"  ;
									}
									
									if ($linha["implantadorkarina"]==1){
									    	echo "    Karina|"  ;
									}
									
									if ($linha["implantadorwesley"]==1){
									    	echo "    Wesley|"  ;
									}
									
									if ($linha["implantadorsamantha"]==1){
									    	echo "    Samantha|"  ;
									}
									
									if ($linha["implantadoroutros"]==1){
									    	echo "    Outros"  ;
									}
									
                                if ($linha['implantadoroutros'] == 0 && $linha['implantadorrafael'] == 0 && $linha['implantadorkarina'] == 0 && $linha['implantadorwesley'] == 0 && $linha['implantadorsamantha'] == 0 ){
									    	echo "Indefinido"  ;
									}
								
									
								 ; ?></td>
								 <td class="text-center"><?php echo $unidade[$linha["unidade"]]; ?></td>
									<td class="text-center"><?php
            	
           
	   
            if ($linha['statuscontrato'] == 0 ){
	                $status=1;
            }
	         if ($linha['cancelados'] == 1){
	               $status = 2;                      
	         }
	         
	         if ($linha['critico']==1){
	                $status =3;	
	         }
	
	       if ($linha['statuscontrato'] == 1  ){
	                $status = 4;	
	       }
	                
	       if ($linha['statuscontrato'] == 2  ){
	                $status = 5;	         
	                
            	
	       }
            	
            		
		//Retorno Imagem
		if ($status==1 ){
		    echo "&nbsp;&nbsp;<img  title=Ok src='$staimg3' border='0' />";
		}
		        if ($status==2){
		    echo "&nbsp;&nbsp;<img  title=Alerta src='$staimg1' border='0' />";
		}
		if ($status==3){
		    echo "&nbsp;&nbsp;<img title=Critico src='$staimg2' border='0' />";
		}
		
		if ($status==4){
		    echo "&nbsp;&nbsp;<img title=Cancelado  src='$staimg4' border='0' />";
		}
		
		if ($status==5){
		    echo "&nbsp;&nbsp;<img  title=Em cancelamento src='$staimg5' border='0' />";
		}
		
		
		?></td>
									<td class="text-center"><?php echo date('d/m/Y ',strtotime($linha["datadecadastro"])); ?></td>
									<td class="text-center">								
										<a href="ficha.php?p=ficha&usuario=<?php echo $linha['codigo']; ?>">
											<i class="fa fa-address-card-o" title="Ficha" style="font-size:17px;"></i>
											
									
										<a href="index.php?p=editar&usuario=<?php echo $linha['codigo']; ?>">
											
											<i class="fa fa-edit" title="Editar" style="font-size:17px;"></i>
										</a>								
										
										
								<a href="javascript: if(confirm('Tem certeza que deseja deletar o usuário <?php echo $linha['nome']; ?>?'))							 
 location.href='index.php?p=deletar&usuario=<?php echo $linha['codigo']; ?>';">
								
									
									<i class="fa fa-remove" title="Deletar" style="font-size:17px;color:red;"></i>
									
									
									</a>	
									</td>
								</tr>
	
	
	
	
	
	
	
	
	
	
	
	
<?php	} while($linha = $sql_query->fetch_assoc()); ?>
           
</table>
        </div>
      </div>
    </div>
  </div>
</div>
      
      <?php }
      
      
      if ($_SESSION['name']=='regina'||$_SESSION['name']=='simone'||$_SESSION['name']=='ulisses'){
      
      ?>
      <div class="card card-body bg-light">

        
        
        <li ><a href="reunioes.php">Reuniões</a></li>
        <li ><a href="justificativas.php">Justificativas de Ponto</a></li>
         <li ><a href="avaliacoes.php">Avaliações de Implantação</a></li>
        
      
      
</div>
      
     <?php
     }
     
     if ($_SESSION['name']=='caroline'){
      
      ?>
      <div class="card card-body bg-light">

        
        
       
        <li ><a href="justificativas.php">Justificativas de Ponto</a></li>
   
        
      
      
</div>
      
     <?php
     }
     
      if ($_SESSION['name']=='matriz'||$_SESSION['name']=='nayara'||$_SESSION['name']=='lorraynne'||$_SESSION['name']=='evelyn'||$_SESSION['name']=='andrew'){
     ?>
     
     <div class="row">
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a href="#"><img src="Imgs/checked.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Total de demandas: {$totalok}"; ?></center></p> 
          </div>
        </div>
        
        
        
        
        
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a href="#"><img src="Imgs/warning.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Demandas Criticas: {$totalcritico}"; ?></center></p> 
          </div>
        </div>
        
        <div class="col-sm-3">
          
        </div>
        <div class="col-sm-3">
          <div class="card card-body bg-light">
            <h4><center><a href="#"><img src="Imgs/check-mark.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Demandas em aberto: {$total30dias}"; ?></center></p> 
          </div>
        </div>
      </div>
     
     </br>
      </br>
     
     
     <div id="accordion">

  

  <div class="card">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Justificativas de ponto
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
      <?php  if ($_SESSION['name']=='evelyn')  {
         
         include("classe/conexao.php");

		$sql_code = "SELECT * FROM justificativas where solicitante=3  order by data DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	}
	
	if ($_SESSION['name']=='lorrayne'){ 
	
	include("classe/conexao.php");

		$sql_code = "SELECT * FROM justificativas where solicitante=4 order by data DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	
	
	}
	
	if ($_SESSION['name']=='nayara') {
	
	include("classe/conexao.php");

			$sql_code = "SELECT * FROM justificativas where solicitante=5 order by data DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();
	
	}
	
	
	
	
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
         
         
         ?>
         
        
        
        
        
         <table class="table table-hover" id="myTable"  >
						<thead>
							<tr >
								<th class="text-center"><font size="4">Data</th>
								<th class="text-center"><font size="4">Motivo</th>
								<th class="text-center"><font size="4">Solicitante</th>								
								<th class="text-center"><font size="4">Status</th>								
							</tr>
						</thead>
						<tbody>

	<?php
	//lopping para mostrar todos os cadastros enquanto existir
	do{ ?> 
	
	
	<tr>
									<td class="text-center"><?php echo date('d/m/Y ',strtotime($linha["data"])); ?></td>
									<td> <?php echo   $justificativa[$linha["descricao"]]; ?></td>
									
																		
									
									<td class="text-center"><?php 
									
									if ($linha["solicitante"]==6){
									    	echo "Rafael"  ;
									}
									
									if ($linha["solicitante"]==2){
									    	echo "Wesley"  ;
									}
									
									if ($linha["solicitante"]==1){
									    	echo "Karina|"  ;
									}
									
									if ($linha["solicitante"]==3){
									    	echo "Evelyn"  ;
									}
									
									if ($linha["solicitante"]==4){
									    	echo "Lorrayne"  ;
									}
									
									if ($linha["solicitante"]==5){
									    	echo "Nayara"  ;
									}
									
									
							
                           
								
									
								 ; ?></td>
									
									
								
									<td class="text-center"><?php
            	
           
	   
             if ($linha['status'] == 1 ||  $linha['status'] == 0 ){
	                $status=1;
            }
	         if ( $linha['status'] == 2 ){
	               $status = 2;                      
	         }
	         if ($linha['status'] == 3  ){
	                $status =3;	
	         }
	
	   
            	
            		
		//Retorno Imagem
		if ($status==1 ){
		    echo "&nbsp;&nbsp;<img  src='$staimg3' border='0' />";
		}
		        if ($status==2){
		    echo "&nbsp;&nbsp;<img  src='$staimg1' border='0' />";
		}
		if ($status==3){
		    echo "&nbsp;&nbsp;<img  src='$staimg2' border='0' />";
		}
				
		
		
		?></td>					
		
		<td class="text-center">								
																		
										<a href="index.php?p=editarjustificativa&justificativas=<?php echo $linha['codigo']; ?>">
											<span class="glyphicon glyphicon-eye-open text-primary" aria-hidden="true" > </span>
										</a>
										
										<a href="javascript: if(confirm('Tem certeza que deseja deletar a justificativa? '))
			location.href='index.php?p=deletarjustificativa&justificativas=<?php echo $linha['codigo']; ?>';">
											<span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
										</a>
												
									</td>
								</tr>
	
	
	<a >
	
	
	
	
	
	
	
	
	
	
<?php	} while($linha = $sql_query->fetch_assoc()); ?>
           
</table>
      </div>
    </div>
  </div>

  
  </div>

</div>
     
     
     
     <?php }
     ?>
     
     </br>
     </br>
        </br>
     
		



</br>


	<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> sistecsistemas.com</a>
  </div>
  <!-- Copyright -->

</footer>


