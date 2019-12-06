<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>






<title>CCS - Sistema Cloud </title>
<?php

	include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario where ambiente=2 order by datadecadastro DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();


	$modalidade[1] = "Presencial";
	$modalidade[2] = "Remoto";

	$classificacao[1] = "Prata";
	$classificacao[2] = "Ouro";
	$classificacao[3] = "Diamante";
	$classificacao[4] = "Bronze";


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

	$clasimg1 = 'Imgs/competition.png';
	$clasimg2 = 'Imgs/competition (4).png';
	$clasimg3 = 'Imgs/competition (3).png';
	$clasimg4 = 'Imgs/competition (1).png';
	
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


.responsive {
  max-width: 70%;
  height: auto;
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
</nav>

  

<p class=espaco></p>


<div class="container theme-showcase" role="main">
			<div class="page-header">
			 
		<center>		<h1>Lista de Clientes - Clientes com ambiente Cloud</h1></center>
			</div>



		



</br>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<div class="row">
 
  
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control input-sm" type="text" id="myInput" onkeyup="myFunction()" placeholder="Procurar pelo cliente" title="Digite o nome"> </br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input  class="form-control input-sm" type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Procurar pelo implantador" title="Digite o nome"></br>
 
<div class="container">
  
  </br>
  <div class="btn-group">
    
    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">Por periodo
    </button>
    <div class="dropdown-menu">
    
         <a class="dropdown-item" href="inicial30.php">30 Dias</a>
          <a class="dropdown-item" href="inicial60.php">60 Dias</a>
           <a class="dropdown-item" href="inicialtodos.php">120 Dias</a>
           <a class="dropdown-item" href="inicial.php">Todos</a>
      
    </div>
  </div>
  
  <div class="btn-group">
    
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">Por Status
    </button>
    <div class="dropdown-menu">
     <a class="dropdown-item" href="inicialcriticos.php">Clientes Criticos</a>
          <a class="dropdown-item" href="inicialcancelados.php">Clientes Cancelados</a>
           <a class="dropdown-item" href="inicialalerta.php">Clientes em Alerta</a>
           <a class="dropdown-item" href="inicialsuspenso.php">Clientes Suspensos</a>
            <a class="dropdown-item" href="inicialemcancelamento.php">Clientes em Cancelamento</a> 
    </div>
  </div>

  <div class="btn-group">
  
    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">Por classificação
    </button>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="inicialbronze.php">Clientes Bronze</a>
     <a class="dropdown-item" href="inicialprata.php">Clientes Prata</a>
          <a class="dropdown-item" href="inicialouro.php">Clientes Ouro</a>
           <a class="dropdown-item" href="inicialdiamante.php">Clientes Diamante</a> 
    </div>
  </div>

  <div class="btn-group">
   
    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">Por setor
    </button>
    <div class="dropdown-menu">
     <a class="dropdown-item" href="inicialimplantacao.php">Clientes em Implantação</a>
          <a class="dropdown-item" href="inicialimplantacao.php">Clientes em Relacionamento</a>
           <a class="dropdown-item" href="inicialsuporte.php">Clientes em Suporte</a> 
    </div>
  </div>

  <div class="btn-group">
    
    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">Gerais
    </button>
    <div class="dropdown-menu">
   <a class="dropdown-item" href="inicialsemsuporte.php">Sem suporte ativo</a>
      <a  class="dropdown-item"href="inicialinadimplentes.php">Clientes inadimplentes</a>
     <a class="dropdown-item" href="inicialoportunidade.php">Oportunidade de Venda</a>
     <a class="dropdown-item" href="inicialbercario.php">Clientes em Berçario</a>
      <a class="dropdown-item" href="iniciallocal.php">Ambiente Desktop</a>
     <a class="dropdown-item" href="inicialcloud.php">Ambiente Cloud</a>
    <a class="dropdown-item" href="inicialweb.php">Ambiente Web</a>
    </div>
  </div>

  
</div>



 
 <style>
 .table-hover{
  font-size: 13px;
}
 </style>
 </br>
 </br>
 </br>
				<div class="col-md-12">				
				         
  
				<div class="table-responsive">
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
		if ($classificacao[$linha['classificacao']]=="Bronze"){
		    echo "<img  title=Bronnze src='$clasimg4' border='0' />";
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
	         if ($linha['cancelados'] > 1){
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
										
								
										
									</td>
								</tr>
	
	
	
	
	
	
	
	
	
	
	
	
<?php	} while($linha = $sql_query->fetch_assoc()); ?>
           
</table>
</div>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function myFunction1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


</script>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

