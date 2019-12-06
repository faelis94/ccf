<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit();
}
?>






<title>CCS - Avaliações Implantação</title>
<?php

	include("classe/conexao.php");

			$sql_code = "SELECT * FROM avaliacao order by codigo ";
	$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
	$linha = $sql_query->fetch_assoc();


	


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
			 
		<center>		<h1>Lista de Avaliações</h1></center>
			</div>


</br>
<div class="row espaco">
				<div class="pull-right">			
			 
					<input type="button" class="btn btn-primary" value="Novo Cadastro" onclick="novo()">
				<script>
function novo()
{
     location.href = "index.php?p=cadastroavaliacoes";
} 
</script>	
				</div>
				
			</div>
</br>
<div class="row">
 
  
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control input-sm" type="text" id="myInput" onkeyup="myFunction()" placeholder="Procurar pelo cliente" title="Digite o nome"> </br>

 

 
 <style>
 .table-hover{
  font-size: 13px;
}
 </style>
				<div class="col-md-12">				
				         
  
				<div class="table-responsive">
					<table class="table table-hover" id="myTable"  >
						<thead>
							<tr >							
								<th class="text-center"><font size="4">Empresa</th>
								<th class="text-center"><font size="4">Responsável</th>
								
								<th class="text-center"><font size="4">Status</th>
								
							</tr>
						</thead>
						<tbody>

	<?php
	//lopping para mostrar todos os cadastros enquanto existir
	do{ ?> 
	
	
	<tr>									
									<td><?php echo $linha["cliente"]; ?></td>
									<td class="text-center"><?php echo $linha["pessoatreinada"]; ?></td>
													    	
								
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
									
									<td> <a href="index.php?p=veravaliacao&avaliacao=<?php echo $linha['codigo']; ?>">
											<i class="fa fa-eye" title="Editar" style="font-size:17px;"></i>
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
    td = tr[i].getElementsByTagName("td")[0];
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


</script>




