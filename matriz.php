<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
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



 .table-hover{
  font-size: 13px;
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
 
 .responsive {
  max-width: 70%;
  height: auto;
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

<title>CCS - Todas Demandas</title>


<?php

	include("classe/conexao.php");

		$sql_code = "SELECT * FROM demandas where ndemanda is not null order by datademanda DESC";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();


	$modalidade[1] = "Presencial";
	$modalidade[2] = "Remoto";

	$classificacao[1] = "Prata";
	$classificacao[2] = "Ouro";
	$classificacao[3] = "Diamante";
	
	
	
	$criadorr[1]="Indefinido";
	$criadorr[2]="Rafael";
	$criadorr[3]="Karina ";
	$criadorr[4]="Wesley ";
	$criadorr[5]="Evelyn ";
	$criadorr[6]="Lorraynne ";
	$criadorr[7]="Nayara ";
	$criadorr[8]="Regina";
	
	
	
	
	
	
	
	
	
	
	


	$sistemas[1] = "  AC Pessoal";
	$sistemas[2] = "  AC Fiscal";
	$sistemas[3] = "  AC Contábil";
	$sistemas[4] = "  Conecta";
	$sistemas[5] = "  Doc";
	$sistemas[6] = "  Gestão";
	$sistemas[7] = "  Pátrio";
	$sistemas[8] = "  Core";
	$sistemas[9] = "  RH";
	$sistemas[10] = "  AG Financeiro";
	$sistemas[11] = "  AG Compras e Estoque";
	$sistemas[12] = "  Ponto";
	
	

	$vendedor[0] = "Outros";
	$vendedor[1] = "Simone";
	$vendedor[2] = "Leandro";
	$vendedor[3] = "Helen";
	$vendedor[4] = "Adriana";
	$vendedor[5] = "Tarick";
	$vendedor[6] = "Anderson";
	
	$implantadores[1] = "Rafael";
	$implantadores[2] = "Samantha";
	$implantadores[3] = "Wesley";
	$implantadores[4] = "Indefinido";
	$implantadores[5] = "Karina";


  	  $status[2]="Em Aberto";
          $status[3]="Finalizado";
          $status[4]="Indefinido";


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


#myInput2 {
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


#myInput3 {
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

<?php 
      if($_SESSION['name']=='matriz'){
      
      ?>       
      
      <li class="nav-item">
      <a class="nav-link" href="home2.php">Home</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="matriz.php">Demandas</a>
    </li>
      
        
      
      <?php }
      	else {
      ?>

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
    
    <?php } ?>
   
  </ul>
</nav>

<p class=espaco></p>


<div class="container theme-showcase" role="main">
			<div class="page-header">
		<center>		<h1>Lista de Demandas - Todos</h1></center>
			</div>

				<div class="row espaco">
				<div class="pull-right">			
			 <?php
					if ($_SESSION['name']!='matriz'){
					
					?>
					<div class="dropdown">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Opções
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
    
      
    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?p=matrizcadastro">Nova Demanda</a></li>
         
            
      <li role="presentation" class="divider"></li>
      
    </ul>
  </div>
					
					
				</div>
			</div>
</br>
<?php 
}
?>
<div class="row">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="form-control input-sm"  id="myInput" onkeyup="myFunction()" placeholder="Procurar pelo cliente" title="Digite o nome"> 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  class="form-control input-sm" id="myInput1" onkeyup="myFunction1()" placeholder="Procurar pela demanda" title="Digite o numero da demanda">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="form-control input-sm" id="myInput2" onkeyup="myFunction2()" placeholder="Procurar pelo criador" title="Digite o nome do criador">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="form-control input-sm" id="myInput3" onkeyup="myFunction3()" placeholder="Procurar pelo sistema" title="Digite o nome do sistema">
</div>

				<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-hover" id="myTable"  >
						<thead>
							<tr >
								<th class="text-center"><font size="4">Status</th>
								<th class="text-center"><font size="4">Cliente</th>
								<th class="text-center"><font size="4">Demanda</th>
								<th class="text-center"><font size="4">Criador</th>
								<th class="text-center"><font size="4">Criticidade</th>
								<th class="text-center"><font size="4">Sistema</th>
								<th class="text-center"><font size="4">Data</th>
								<th class="text-center"><font size="4">Previsão</th>
										
							</tr>
						</thead>
						<tbody>

	<?php
	//lopping para mostrar todos os cadastros enquanto existir
	do{ ?> 
	
	
	<tr>
									<td class="text-center"><?php
            	
           
	   
            if ($linha['statusdemanda'] == 3 ){
	                $status=1;
            }
	        
	         if ($linha['statusdemanda'] == 2 ){
	                $status =3;	
	         }
	            	
            		
		//Retorno Imagem
		if ($status==1 ){
		    echo "&nbsp;&nbsp;<img  src='$staimg3' border='0' />";
		}
		    
		if ($status==3){
		    echo "&nbsp;&nbsp;<img  src='$staimg2' border='0' />";
		}
		
		
		
		?></td>
		
		
									<td><?php echo $linha["clientedemanda"]; ?></td>
									<td class="text-center"><?php echo $linha["ndemanda"]; ?></td>
									
									<td class="text-center"><?php echo $criadorr[$linha["criador"]]; ?></td>
									<td class="text-center"><?php 
									
									if ($linha["demandacr"]==0){
									    	echo "Ok"  ;
									}
									
									
									if ($linha["demandacr"]==1){
									    	echo "Indefinido"  ;
									}
									
									if ($linha["demandacr"]==2){
									    	echo "Alerta"  ;
									}
									
									if ($linha["demandacr"]==3){
									    	echo "Crítico"  ;
									}
									
									
									
									
									
									 ?></td>
									 
									 <td><?php echo $sistemas[$linha["sistemademanda"]]; ?> </td>
									 <td class="text-center"><?php echo date('d/m/Y ',strtotime($linha["datademanda"])); ?></td>
									 <td class="text-center"><?php 
									 if ($linha["previsaodemanda"]=="1999-01-01" ||$linha["previsaodemanda"]==""){
									  echo "-";
									 }
									 else {
									 echo date('d/m/Y ',strtotime($linha["previsaodemanda"]));} ?></td>
							    		
							    		<td class="text-center">								
																		
										<a href="index.php?p=editardemanda&demandas=<?php echo $linha['codigo']; ?>">
											<i class="fa fa-edit" title="Editar" style="font-size:17px;"></i>
										</a>
																	
									
										<a href="javascript: if(confirm('Tem certeza que deseja deletar a demanda? '))
			location.href='deletademanda.php?p=deletademanda&demandas=<?php echo $linha['codigo']; ?>';">
											<i class="fa fa-remove" title="Deletar" style="font-size:17px;color:red;"></i>
											
											
											
												
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
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}



function myFunction2() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


function myFunction3() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
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