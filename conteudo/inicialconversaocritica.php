<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Alice' rel='stylesheet'>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="Imgs/favicon.ico" />


<title>CCS - Clientes  com conversão Critica</title>
<?php

	include("classe/conexao.php");

			$sql_code = "SELECT * FROM usuario where datadecadastro BETWEEN CURDATE() - INTERVAL 240 DAY AND CURDATE() and statusconversao=1 and statuscontrato=0 and semsuporte=0 order by datadecadastro DESC";
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



</style>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
			<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<link href="css/bootstrap.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<head>
	<body>
<style>
.responsive {
  width: 100%;
  height: auto;
}
</style>

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

<p class=espaco></p>


<div class="container theme-showcase" role="main">
			<div class="page-header">
		<center>		<h1>Lista de Clientes - Sem suporte ativo</h1></center>
			</div>

			<div class="row espaco">
				<div class="pull-right">			
			 
					
					<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Filtros
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
     
      
      
      <li class="dropdown-submenu">
       <a class="test" tabindex="-1" href="#">Por Periodo <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="index.php?p=inicial30">30 Dias</a></li>
          <li><a tabindex="-1" href="index.php?p=inicial60">60 Dias</a></li>
           <li><a tabindex="-1" href="index.php?p=inicialtodos">120 Dias</a></li>
           <li><a tabindex="-1" href="index.php?p=inicial240">240 Dias</a></li>
            <li><a tabindex="-1" href="index.php?p=inicial">Todos</a></li>                 
      
    </ul>
    
    <li class="dropdown-submenu">
       <a class="test" tabindex="-1" href="#">Por Status <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="index.php?p=inicialcriticos">Clientes Criticos</a></li>
          <li><a tabindex="-1" href="index.php?p=inicialcancelados">Clientes Cancelados</a></li>
           <li><a tabindex="-1" href="index.php?p=inicialalerta">Clientes em Alerta</a></li>
           <li><a tabindex="-1" href="index.php?p=inicialsuspenso">Clientes em Alerta</a></li>
            <li><a tabindex="-1" href="index.php?p=inicialemcancelamento">Clientes em Cancelamento</a></li>      
    </ul>
    
    
    <li class="dropdown-submenu">
       <a class="test" tabindex="-1" href="#">Por Classificação<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="index.php?p=inicialprata">Clientes Prata</a></li>
          <li><a tabindex="-1" href="index.php?p=inicialouro">Clientes Ouro</a></li>
           <li><a tabindex="-1" href="index.php?p=inicialdiamante">Clientes Diamante</a></li>    
    </ul>
    
     <li class="dropdown-submenu">
       <a class="test" tabindex="-1" href="#">Por Setor<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="index.php?p=inicialimplantacao">Clientes em Implantação</a></li>
          <li><a tabindex="-1" href="index.php?p=inicialimplantacao">Clientes em Relacionamento</a></li>
           <li><a tabindex="-1" href="index.php?p=inicialsuporte">Clientes em Suporte</a></li>    
    </ul>
    
    
     <li class="dropdown-submenu">
       <a class="test" tabindex="-1" href="#">Por Status Conversão<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="index.php?p=inicialconversaofila">Conversão na Fila</a></li>
          <li><a tabindex="-1" href="index.php?p=inicialconversaoandamento">Conversão em Andamento</a></li>
           <li><a tabindex="-1" href="index.php?p=inicialconversaofinalizada">Conversão Finalizada</a></li>  
              
    </ul>
    
     <li><a tabindex="-1" href="index.php?p=inicialsemsuporte">Sem suporte ativo</a></li>
      <li><a tabindex="-1" href="index.php?p=inicialinadimplentes">Clientes inadimplentes</a></li>
    
   
     <li><a tabindex="-1" href="index.php?p=inicialoportunidade">Oportunidade de Venda</a></li>
  </div>
					
					
					
				</div>
			</div>
</br>
<div class="row">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control input-sm" type="text" id="myInput" onkeyup="myFunction()" placeholder="Procurar pelo cliente" title="Digite o nome"> </br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control input-sm" type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Procurar pelo implantador" title="Digite o nome"></br>
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
		    echo "<img src='$clasimg1' border='0' />";
		}
		if ($classificacao[$linha['classificacao']]=="Ouro"){
		    echo "<img src='$clasimg2' border='0' />";
		}
		if ($classificacao[$linha['classificacao']]=="Diamante"){
		    echo "<img  src='$clasimg3' border='0' />";
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
            	
           
	   
            if ($linha['cancelados'] == 0 and $linha['statuscontrato'] == 0 ){
	                $status=1;
            }
	         if ( $linha['cancelados'] == 1  and $linha['statuscontrato'] == 0  ){
	               $status = 2;                      
	         }
	         if ( $linha['critico'] == 1  and $linha['statuscontrato'] == 0  ){
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
		    echo "&nbsp;&nbsp;<img  src='$staimg3' border='0' />";
		}
		        if ($status==2){
		    echo "&nbsp;&nbsp;<img  src='$staimg1' border='0' />";
		}
		if ($status==3){
		    echo "&nbsp;&nbsp;<img  src='$staimg2' border='0' />";
		}
		
		if ($status==4){
		    echo "&nbsp;&nbsp;<img  src='$staimg4' border='0' />";
		}
		
		if ($status==5){
		    echo "&nbsp;&nbsp;<img  src='$staimg5' border='0' />";
		}
		
		
		?></td>
									<td class="text-center"><?php echo date('d/m/Y ',strtotime($linha["datadecadastro"])); ?></td>
									<td class="text-center">								
										<a href="index.php?p=ficha&usuario=<?php echo $linha['codigo']; ?>">
											<span class="glyphicon glyphicon-eye-open text-primary" aria-hidden="true" > </span>
										</a>
									
										<a href="index.php?p=editar&usuario=<?php echo $linha['codigo']; ?>">
											<span class="glyphicon glyphicon-pencil text-warning" aria-hidden="true" > </span>
										</a>
									
										<a href="index.php?p=cadastrar2&usuario=<?php echo $linha['codigo']; ?>">
											<span class="glyphicon glyphicon-list-alt text-primary" aria-hidden="true" > </span>
										</a>
								
										<a href="javascript: if(confirm('Tem certeza que deseja deletar o usuário <?php echo $linha['nome']; ?>?'))
			location.href='index.php?p=deletar&usuario=<?php echo $linha['codigo']; ?>';">
											<span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span>
										</a>
									</td>
								</tr>
	
	
	
	
	
	
	
	
	
	
	
	
<?php	} while($linha = $sql_query->fetch_assoc()); ?>
           
</table>
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