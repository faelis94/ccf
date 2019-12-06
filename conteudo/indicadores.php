<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
        <li><a href="index.php?">Home</a></li>
        <li><a href="index.php?p=inicial">Clientes</a></li>
        <li><a href="index.php?p=cadastrar">Novo Cadastro</a></li>
        <li><a href="index.php?p=gerenciamento">Gerenciamento</a></li>
        <li><a href="index.php?p=matriz">Matriz</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login (em construção)</a></li>
      </ul>
    </div>
  </div>
</nav>
  </div>
      
      <title>CCS - Gerenciamento</title>
<?php
$servidor = "localhost";
$usuario = "sistec31_admin";
$senha = "Galodoido22";
$banco_de_dados = "sistec31_farol";

 
$con = new mysqli($servidor, $usuario, $senha, $banco_de_dados);
if ($con->connect_errno) {
    echo "Falha ao conectar ao banco: (" . $con->connect_errno . ") " . $con->connect_error;
}
 
 $sql = "SELECT count(*) as total FROM usuario where nome is not null";
$r = $con->query($sql) or die($con->error);
 
// primeira opção
$total4 = $r->fetch_object()->total;
 
$sql = "SELECT count(*) as total FROM usuario where cancelados<3  and statuscontrato=0 and critico=0 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);
 
// primeira opção
$total = $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where cancelados=3 or cancelados=4 or recorrente=1 and statuscontrato=0";
$r = $con->query($sql) or die($con->error);

$total1 = $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where cancelados>4 or status=2 or status=3 or critico=1 and statuscontrato=0 ";
$r = $con->query($sql) or die($con->error);

$total2 = $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where primeirocontato=1 and statuscontrato=0  and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$total3= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where datadecadastro  BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() and statuscontrato=0 ";
$r = $con->query($sql) or die($con->error);

$total4= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where statuscontrato=1 ";
$r = $con->query($sql) or die($con->error);

$total5= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where statuscontrato=2 ";
$r = $con->query($sql) or die($con->error);

$total6= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=1 ";
$r = $con->query($sql) or die($con->error);

$totalrafael= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=2 ";
$r = $con->query($sql) or die($con->error);

$totalsamantha= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=3 ";
$r = $con->query($sql) or die($con->error);

$totalwesley= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=4 ";
$r = $con->query($sql) or die($con->error);

$totaloutros= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=5 ";
$r = $con->query($sql) or die($con->error);

$totalkarina= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totalrafael120= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=2 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totalsamantha120= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=3 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
 $r= $con->query($sql) or die($con->error);

$totalwesley120= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=4 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totaloutros120= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=5 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totalkarina120= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantador=1 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totalrafaelnoprazo= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=2 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() and statuscontrato=0 ";
$r = $con->query($sql) or die($con->error);

$totalsamanthanoprazo= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=3 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() and statuscontrato=0 ";
$r = $con->query($sql) or die($con->error);

$totalwesleynoprazo= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=4 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()  and statuscontrato=0 ";
$r = $con->query($sql) or die($con->error);

$totaloutrosnoprazo= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=5 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()  and statuscontrato=0 ";
$r = $con->query($sql) or die($con->error);

$totalkarinanoprazo= $r->fetch_object()->total;




//*  Cancelados em implantação



$sql = "SELECT count(*) as total FROM usuario where implantador=1 and status=1 and statuscontrato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totalrafaelstatus= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=2 and status=1 and statuscontrato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totalsamanthastatus= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=3 and  status=1 and statuscontrato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totalwesleystatus= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=4 and status=1 and statuscontrato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totaloutrosstatus= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=5 and status=1 and statuscontrato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()";
$r = $con->query($sql) or die($con->error);

$totalkarinastatus= $r->fetch_object()->total;


//* Contato ultimos 48

$sql = "SELECT count(*) as total FROM usuario where implantador=1 and primeirocontato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() and statuscontrato=0 ";
$r = $con->query($sql) or die($con->error);

$totalrafael48hrs= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=2 and primeirocontato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() and statuscontrato=0 ";
$r = $con->query($sql) or die($con->error);

$totalsamantha48hrs= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=3 and primeirocontato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() and statuscontrato=0   ";
$r = $con->query($sql) or die($con->error);

$totalwesley48hrs= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=4 and primeirocontato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()  and statuscontrato=0  ";
$r = $con->query($sql) or die($con->error);

$totaloutros48hrs= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=5 and primeirocontato=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()  and statuscontrato=0  ";
$r = $con->query($sql) or die($con->error);

$totalkarina48hrs= $r->fetch_object()->total;


// No prazo 

$sql = "SELECT count(*) as total FROM usuario where implantador=1 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() and statuscontrato=0  ";
$r = $con->query($sql) or die($con->error);

$totalrafaelnoprazo= $r->fetch_object()->total;

$sql = "SELECT count(*) as total FROM usuario where implantador=2 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()  and statuscontrato=0 ";
$r = $con->query($sql) or die($con->error);

$totalsamanthanoprazo= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=3 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() and statuscontrato=0   ";
$r = $con->query($sql) or die($con->error);

$totalwesleynoprazo= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=4 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE() and statuscontrato=0  ";
$r = $con->query($sql) or die($con->error);

$totaloutrosnoprazo= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where implantador=5 and noprazo=1 and datadecadastro BETWEEN CURDATE() - INTERVAL 120 DAY AND CURDATE()  and statuscontrato=0  ";
$r = $con->query($sql) or die($con->error);

$totalkarinanoprazo= $r->fetch_object()->total;







// segunda opção

//$total = $r->fetch_row();
//echo "Resultado: {$total[0]} linhas";

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

.btn2 {
    background-color: red;
    color: white;
    padding: 13px;
    font-size: 14px;
    border: none;
    outline: none;
    border-radius: 5px;
}
.btn2:hover, .dropdown:hover .btn2 {
    background-color: blue;
}



* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/Imgs/search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 98%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 98%;
  border: 1px solid black;
  font-size: 18px;
  
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
  color: black;
}

#myTable tr {
  border-bottom: 1px solid black;
}





</style>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<div class=menu>


</div>


<p class=espaco></p>



<h3> Visão Geral </h3>
<p class=espaco></p>
<table id="myTable" border=1 cellpadding=10>
	<tr class="header">
	    <th style="width:10%;">Clientes Ok</th>
        <th style="width:10%;">Clientes em Alerta</th>
        <th style="width:10%;">Clientes Criticos</th>
        <th style="width:10%;">Com contato de 48 Horas</th>
               <th style="width:10%;">Contratos cancelados</th>
        <th style="width:10%;">Contratos suspensos</th>
 
        <th style="width:10%;">Clientes ultimos 120 dias</th>
		
	</tr>
	
	<tr>
	    <td>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtrook"><img src="Imgs/checked.png" class="media-object  img-responsive img-thumbnail"></a></td> 
       <td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtroalerta"><img src="Imgs/information (1).png" class="media-object  img-responsive img-thumbnail"></a></td> 
        <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtrocritico"><img src="Imgs/warning.png" class="media-object  img-responsive img-thumbnail"></a></td>
        <td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtro48"><img src="Imgs/icons8-últimas-48-horas-32.png" class="media-object  img-responsive img-thumbnail"></a></td>
         <td>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtrocancelados"><img src="Imgs/file.png" class="media-object  img-responsive img-thumbnail"></a></td>
         <td>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtrosuspensos"><img src="Imgs/file (1).png" class="media-object  img-responsive img-thumbnail"></a></td>
         <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtroultimos120"><img src="Imgs/calendar (1).png" class="media-object  img-responsive img-thumbnail"></a></td>
        
      
	            
	    
	</tr>
	
	<tr><td><?php echo "Total: {$total}"; ?></td>
	     <td><?php echo "Total: {$total1}"; ?></td>
	      <td><?php echo "Total: {$total2}"; ?></td>
	       <td><?php echo "Total : {$total3}"; ?></td>
	       <td><?php echo "Total : {$total5}"; ?></td>
	       <td><?php echo "Total : {$total6}"; ?></td>
	        <td><?php echo "Total : {$total4}"; ?></td>
	       </tr>

</table>




<p class=espaco></p>
<p class=espaco></p>



<h3> Implantação </h3>

<table id="myTable" border=1 cellpadding=10>
	<tr class="header">
	    <th style="width:10%;">Rafael</th>
        <th style="width:10%;">Samantha</th>
        <th style="width:10%;">Wesley</th>
        <th style="width:10%;">Karina</th>
        <th style="width:10%;">Outros</th>
        
		
	</tr>
	
	<tr>
	    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtrorafael"><img src="Imgs/icons8-cabeça-de-ninja-32.png" class="media-object  img-responsive img-thumbnail"></a></td> 
       <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtrosamantha"><img src="Imgs/icons8-empresária-32 (1).png" class="media-object  img-responsive img-thumbnail"></a></td> 
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtrowesley"><img src="Imgs/icons8-walter-white-32.png" class="media-object  img-responsive img-thumbnail"></a></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtrokarina"><img src="Imgs/icons8-empresária-32 (1).png" class="media-object  img-responsive img-thumbnail"></a></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?p=filtrooutros"><img src="Imgs/icons8-máscara-dos-anonymous-32.png" class="media-object  img-responsive img-thumbnail"></a></td>
        
      
	            
	    
	</tr>
	
	<tr><td><?php echo "Total geral: {$totalrafael}"; ?></td>
	     <td><?php echo "Total geral: {$totalsamantha}"; ?></td>
	      <td><?php echo "Total geral: {$totalwesley}"; ?></td>
	      <td><?php echo "Total geral: {$totalkarina}"; ?></td>
	       <td><?php echo "Total geral: {$totaloutros}"; ?></td>
	       
	       </tr>
	       
	  <tr><td><?php echo "Total ultimos 120 dias: {$totalrafael120}"; ?></td>
	     <td><?php echo "Total ultimos 120 dias: {$totalsamantha120}"; ?></td>
	      <td><?php echo "Total ultimos 120 dias: {$totalwesley120}"; ?></td>
	       <td><?php echo "Total ultimos 120 dias : {$totalkarina120}"; ?></td>
	       <td><?php echo "Total ultimos 120 dias : {$totaloutros120}"; ?></td>
	       
	       </tr>  
	       
	        </tr>
	       
	  <tr><td><?php echo "Finalizados no prazo: {$totalrafaelnoprazo}"; ?></td>
	     <td><?php echo "Finalizados no prazo: {$totalsamanthanoprazo}"; ?></td>
	      <td><?php echo "Finalizados no prazo: {$totalwesleynoprazo}"; ?></td>
	       <td><?php echo "Finalizados no prazo: {$totalkarinanoprazo}"; ?></td>
	       <td><?php echo "Finalizados no prazo: {$totaloutrosnoprazo}"; ?></td>
	       
	       </tr>  
	       
	       
	       
	           </tr>
	       
	  <tr><td><?php echo "Cancelados em implantação: {$totalrafaelstatus}"; ?></td>
	     <td><?php echo "Cancelados em implantação: {$totalsamanthastatus}"; ?></td>
	      <td><?php echo "Cancelados em implantação: {$totalwesleystatus}"; ?></td>
	      <td><?php echo "Cancelados em implantação: {$totalkarinastatus}"; ?></td>
	       <td><?php echo "Cancelados em implantação: {$totaloutrosstatus}"; ?></td>
	       
	       </tr>  
	       
	       
	       
	    <tr><td><?php echo "Contato 48hrs : {$totalrafael48hrs}"; ?></td>
	     <td><?php echo "Contato 48hrs : {$totalsamantha48hrs}"; ?></td>
	      <td><?php echo "Contato 48hrs : {$totalwesley48hrs}"; ?></td>
	      <td><?php echo "Contato 48hrs : {$totalkarina48hrs}"; ?></td>
	       <td><?php echo "Contato 48hrs : {$totaloutros48hrs}"; ?></td>
	       
	       </tr>   
	       
	       
	  

</table>




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
</script>
