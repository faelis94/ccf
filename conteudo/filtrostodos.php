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

<?php  

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
	
	$staimg6='Imgs/cross-close-or-delete-circular-interface-button-symbol.png';



$servidor = "localhost";
$usuario = "sistec31_admin";
$senha = "Galodoido22";
$banco_de_dados = "sistec31_farol";
 
$con = new mysqli($servidor, $usuario, $senha, $banco_de_dados);
if ($con->connect_errno) {
    echo "Falha ao conectar ao banco: (" . $con->connect_errno . ") " . $con->connect_error;
}
 
 //* Total de clientes
 $sql = "SELECT count(*) as total FROM usuario where nome is not null";
$r = $con->query($sql) or die($con->error);
 

$total = $r->fetch_object()->total;
 

//* Total de clientes ok

$sql = "SELECT count(*) as total FROM usuario where cancelados<1  and statuscontrato=0 and critico=0  ";
$r = $con->query($sql) or die($con->error);
 
$totalok = $r->fetch_object()->total;


//*Total de clientes alerta

$sql = "SELECT count(*) as total FROM usuario where cancelados=1  or recorrente=1 and statuscontrato=0   ";
$r = $con->query($sql) or die($con->error);

$totalalerta = $r->fetch_object()->total;


//*Total de clientes criticos

$sql = "SELECT count(*) as total FROM usuario where cancelados>1  or critico=1 or status=2 or status=3 and statuscontrato=0   ";
$r = $con->query($sql) or die($con->error);

$totalcritico= $r->fetch_object()->total;

//*Origem criticidade 
  //* Implantação
$sql = "SELECT count(*) as total FROM usuario where origemcr=1 ";

$r = $con->query($sql) or die($con->error);

$totalcrimp= $r->fetch_object()->total;

    //*Suporte
$sql = "SELECT count(*) as total FROM usuario where origemcr=2 ";

$r = $con->query($sql) or die($con->error);

$totalcrsup= $r->fetch_object()->total;


    //* Relacionamento
    
$sql = "SELECT count(*) as total FROM usuario where origemcr=3 ";

$r = $con->query($sql) or die($con->error);

$totalcrrel= $r->fetch_object()->total;

    //* Administrativo


$sql = "SELECT count(*) as total FROM usuario where origemcr=4 ";

$r = $con->query($sql) or die($con->error);

$totalcradm= $r->fetch_object()->total;





//*Classificação dos clientes


$sql = "SELECT count(*) as total FROM usuario where classificacao=1 ";

$r = $con->query($sql) or die($con->error);

$totalouro= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where classificacao=2";

$r = $con->query($sql) or die($con->error);

$totalprata= $r->fetch_object()->total;


$sql = "SELECT count(*) as total FROM usuario where classificacao=3";

$r = $con->query($sql) or die($con->error);

$totaldiamante= $r->fetch_object()->total;



//* Quantidade por implantador

$sql = "SELECT count(*) as total FROM usuario where implantadorrafael=1 ";

$r = $con->query($sql) or die($con->error);

$totalrafael= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorkarina=1 ";

$r = $con->query($sql) or die($con->error);

$totalkarina= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorwesley=1  ";

$r = $con->query($sql) or die($con->error);

$totalwesley= $r->fetch_object()->total;



$sql = "SELECT count(*) as total FROM usuario where implantadorsamantha=1 ";

$r = $con->query($sql) or die($con->error);

$totalsamantha= $r->fetch_object()->total;






//*Controle cancelados , suspensos e entrada

 $sql = "SELECT count(*) as total FROM usuario where nome is not null ";
$r = $con->query($sql) or die($con->error);
 

$total120dias = $r->fetch_object()->total;



 $sql = "SELECT count(*) as total FROM usuario where statuscontrato=1 ";
$r = $con->query($sql) or die($con->error);
 

$totalcancelados120 = $r->fetch_object()->total;



 $sql = "SELECT count(*) as total FROM usuario where statuscontrato=2 ";
$r = $con->query($sql) or die($con->error);
 

$totalsuspensos120 = $r->fetch_object()->total;

?>


<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

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
      
      <title>CCS - Gerenciamento (Todos)</title>
 <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
  
<script type="text/javascript">
window.onload = function() {
    
    
    var options = {
	animationEnabled: true,
	title: {
		
	},
	data: [{
		type: "doughnut",
		innerRadius: "40%",
		showInLegend: true,
		legendText: "{label}",
		indexLabel: "{label}: #percent%",
		dataPoints: [
			{ label: "Implantação", y: <?php echo "$totalcrimp" ;?> },
			{ label: "Suporte", y: <?php echo "$totalcrsup" ;?> },
			{ label: "Relacionamento", y: <?php echo "$totalcrrel" ;?> },
			{ label: "Administrativo", y: <?php echo "$totalcradm" ;?> }
		
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);




 var options1 = {
	animationEnabled: true,
	title: {

	},
	data: [{
		type: "doughnut",
		innerRadius: "40%",
		showInLegend: true,
		legendText: "{label}",
		indexLabel: "{label}: #percent%",
		dataPoints: [
			{ label: "Prata", y: <?php echo "$totalprata" ;?> },
			{ label: "Ouro", y: <?php echo "$totalouro" ;?> },
			{ label: "Diamante", y: <?php echo "$totaldiamante" ;?> }
		
		
		]
	}]
};
$("#chartContainer1").CanvasJSChart(options1);




var options2 = {
	animationEnabled: true,
	title: {
	
	},
	data: [{
		type: "doughnut",
		innerRadius: "40%",
		showInLegend: true,
		legendText: "{label}",
		indexLabel: "{label}: #percent%",
		dataPoints: [
			{ label: "Rafael", y: <?php echo "$totalrafael" ;?> },
			{ label: "Wesley", y: <?php echo "$totalwesley" ;?> },
			{ label: "Karina", y: <?php echo "$totalkarina" ;?> },
			{ label: "Samantha", y: <?php echo "$totalsamantha" ;?> }
		
		]
	}]
};
$("#chartContainer2").CanvasJSChart(options2);




var options3 = {
	animationEnabled: true,
	title: {
	},
	data: [{
		type: "doughnut",
		innerRadius: "40%",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: [
			{ label: "Novos", y: <?php echo "$total120dias" ;?> },
			{ label: "Cancelados", y: <?php echo "$totalcancelados120" ;?> },
			{ label: "Suspensos", y: <?php echo "$totalsuspensos120" ;?> }
		]
	}]
};
$("#chartContainer3").CanvasJSChart(options3);


var options4 = {
	animationEnabled: true,
	title: {
	},
	data: [{
		type: "doughnut",
		innerRadius: "40%",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: [
			{ label: "Novos", y: <?php echo "10" ;?> },
			{ label: "X", y: <?php echo "10" ;?> },
			{ label: "X", y: <?php echo "10" ;?> },
			{ label: "X", y: <?php echo "10" ;?> },
			{ label: "X", y: <?php echo "10" ;?> },
			{ label: "X", y: <?php echo "10" ;?> },
			{ label: "X", y: <?php echo "10" ;?> }
		]
	}]
};
$("#chartContainer4").CanvasJSChart(options4);



options.render();
options1.render();
}
</script>






</head>
<body>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Gerenciamento Resultado</h2>
      </br>
      </br>
      <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">&nbsp;&nbsp;Filtros&nbsp;&nbsp;
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?p=filtros30">30 Dias</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?p=filtros60">60 Dias</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?p=filtros">120 Dias</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?p=filtros240">240 Dias</a></li>
      
    </ul>
  </div>
   </br>
      </br>
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active" ><a href="index.php?p=filtros">Painel Geral</a></li>
        <li ><a href="index.php?p=indicadores">Indicadores</a></li>
        
      </ul><br>
    </div>
    <br>
    
             <div class="col-sm-9">
      <div class="well">
        <h4>Filtro a definir</h4>
        <p><div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
      Free Space
    </div>
    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:10%">
      Warning
    </div>
    <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
      Danger
    </div>
  </div></p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4><center><a href="index.php?p=filtrook"><img src="Imgs/checked.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Total: {$totalok}"; ?></center></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4><center><a href="index.php?p=filtroalerta"><img src="Imgs/information (1).png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Total: {$totalalerta}"; ?></center></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4><center><a href="index.php?p=filtrocritico"><img src="Imgs/warning.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Total: {$totalcritico}"; ?></center></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4><center><a href="index.php?p=inicial"><img src="Imgs/check-mark.png" class="media-object  img-responsive img-thumbnail"></a></center></h4>
            <p><center><?php echo "Total: {$total}"; ?></center></p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
              <center><a href="http://controleclientes.hospedagemgratis.net/index.php?p=filtroorigem">Origem Criticidade</a></center>
            <div id="chartContainer" style="height: 200px; width: 100%;"></div> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
              <center><a href="http://controleclientes.hospedagemgratis.net/index.php?p=filtroclassificacao">Classificação Clientes</a></center>
            <div id="chartContainer1" style="height: 200px; width: 100%;"></div> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
              <center><a href="http://controleclientes.hospedagemgratis.net/index.php?p=filtroimplantador">Clientes por implantador</a></center>
            <div id="chartContainer2" style="height: 200px; width: 100%;"></div>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
              <center><a href="http://controleclientes.hospedagemgratis.net/index.php?p=filtroultimos120">Clientes ultimos 120 dias</a></center>
            <div id="chartContainer3" style="height: 200px; width: 100%;"></div>  
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
              <center><a>Incluir algum filtro aqui</a></center>
           <div id="chartContainer4" style="height: 200px; width: 100%;"></div>   
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
      
      
</body>
</html>







